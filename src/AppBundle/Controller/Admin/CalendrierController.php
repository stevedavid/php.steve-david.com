<?php
namespace AppBundle\Controller\Admin;

use AppBundle\Core\CoreInterface as Core;
use AppBundle\Core\YamlTrait as Yaml;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * @Route("/admin/calendrier")
 *
 * Class YamlController
 * @package AppBundle\Controller\Admin
 */
class CalendrierController extends Controller implements Core
{
    use Yaml;
    /**
     * @Route("/", name="admin_calendrier_index")
     */
    public function indexAction()
    {
        $evenements = $this->fetchEvenements();

        $evenementsNotSet = array_filter($evenements, function($evenement) {
            return !$evenement['on_calendar'];
        });

        $evenementsSet = array_filter($evenements, function($evenement) {
            return $evenement['on_calendar'];
        });

        return $this->render('views/admin/calendrier/index.html.twig', [
            'evenements_not_set' => array_reverse($evenementsNotSet, true),
            'evenements'         => $evenementsSet,

        ]);
    }

    /**
     * @Route("/calendrier/evenement/creer", name="admin_calendrier_creer")
     */
    public function creerAction(Request $request)
    {
        if($request->isXmlHttpRequest()) {
            $request = $request->request;

            $evenement = [
                'title'         => $request->get('titre'),
                'color'         => $request->get('couleur'),
                'start'         => \DateTime::createFromFormat('H:i', $request->get('debut'))->format('H:i:s'),
                'end'           => \DateTime::createFromFormat('H:i', $request->get('fin'))->format('H:i:s'),
                'on_calendar'   => (int) false,
            ];

            $yamlManager = $this->get(self::YAML_MANAGER);
            $evenements = $this->fetchEvenements();

            $evenements[] = $evenement;

            if($yamlManager->saveData($yamlManager->locateFile(self::YML_CALENDRIER), $evenements)) {
                return new JsonResponse(['created' => true]);
            }
            return new JsonResponse(['created' => false], 500);
        }

        return new Response(null, 405);
    }


    /**
     * @Route("/calendrier/evenement/inserer", name="admin_calendrier_inserer")
     */
    public function insererAction(Request $request)
    {
        if($request->isXmlHttpRequest()) {
            $yamlManager = $this->get(self::YAML_MANAGER);
            $id = $request->request->get('id');
            $start = $request->request->get('start');
            $end = $request->request->get('end');

            $datetime = \DateTime::createFromFormat('Y-m-d H:i:s', $start);
            $evenements = $this->fetchEvenements();

            foreach($evenements as &$evenement) {
                if($evenement['id'] == $id) {
                    $evenement['on_calendar'] = (int) true;
                    $evenement['start'] = $start;
                    $evenement['end'] = \DateTime::createFromFormat('H:i:s', $end)
                        ->setDate($datetime->format('Y'), $datetime->format('m'), $datetime->format('d'))
                        ->format('Y-m-d H:i:s')
                    ;
                }
            }

            $yamlManager->saveData($yamlManager->locateFile(self::YML_CALENDRIER), $evenements);

            return new Response();
        }

        return new Response(null, 405);
    }

    /**
     * @Route("/calendrier/evenement/supprimer", name="admin_calendrier_supprimer")
     */
    public function supprimerAction(Request $request)
    {
        if($request->isXmlHttpRequest()) {

            $yamlManager = $this->get(self::YAML_MANAGER);
            $evenements = $this->fetchEvenements();

            foreach($evenements as $key => $evenement) {
                if($evenement['id'] == $request->request->get('id')) {
                    unset($evenements[$key]);
                }
            }

            $yamlManager->saveData($yamlManager->locateFile(self::YML_CALENDRIER), $evenements);

            return new Response();
        }

        return new Response(null, 405);
    }

    private function fetchEvenements()
    {
        $evenements = $this->get(self::YAML_MANAGER)->loadData(self::YML_CALENDRIER) ?: [];

        usort($evenements, function($a, $b) {
            return $a['id'] > $b['id'];
        });

        return $evenements;
    }
}