<?php
namespace AppBundle\Controller;

use AppBundle\Core\CoreInterface as Core;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\Yaml\Dumper;
use Symfony\Component\Yaml\Parser;

/**
 * @Route("/ajax")
 *
 * Class AjaxController
 * @package AppBundle\Controller
 */
class AjaxController extends Controller implements Core
{
    /**
     * @Route("/realisation", name="ajax_realisation")
     */
    public function realisationAction(Request $request)
    {
        $key = $request->request->get('realisation');

        $realisations = array_reverse($this->get(self::YAML_MANAGER)->loadData(self::YML_REALISATIONS), true);

        return $this->render('views/ajax/realisation.html.twig', [
            'realisation' => $realisations[$key],
        ]);
    }
    /**
     * @Route("/contact", name="ajax_contact")
     */
    public function contactAction(Request $request)
    {
        $message = [
            'message' => trim($request->request->get('message')),
            'name'    => trim($request->request->get('name')),
            'email'   => trim($request->request->get('email')),
            'sujet'   => trim($request->request->get('sujet')),
        ];

        $errors = [];
        foreach($message as $name => $field) {
            if($name == 'email' && !filter_var($field, FILTER_VALIDATE_EMAIL)) {
                $errors['email'] = 'invalid';
            }

            if(empty($field)) {
                $errors[$name] = 'empty';
            }
        }

        if(count($errors)) {
            return new JsonResponse($errors, 422);
        }

        $message['date']        = (new \DateTime)->format('Y-m-d H:i:s');
        $message['lu']          = (int) false;
        $message['corbeille']   = (int) false;

        $this->saveYaml($message);

        $email = \Swift_Message::newInstance()
            ->setSubject($message['sujet'])
            ->setFrom([$message['email'] => $message['name']])
            ->setTo(self::EMAIL_CONTACT)
            ->setBody($message['message'],'text/html')
        ;

        $deliveredTo = 1; // $this->get('mailer')->send($email);

        if(!$deliveredTo) {
            return new JsonResponse(['internal_error' => true], 500);
        }

        return new Response(null, 200);
    }

    /**
     * Save message to .yml file
     *
     * @param $message
     * @return void
     */
    private function saveYaml($message)
    {
        $yamlManager = $this->get(self::YAML_MANAGER);
        $content = $yamlManager->loadData(self::YML_CONTACT);
        $content[] = $message;
        $yamlManager->saveData($yamlManager->locateFile(self::YML_CONTACT), $content);
    }
}