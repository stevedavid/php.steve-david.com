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
        $evenements = is_null($this->fetchEvenements()) ? [] : $this->fetchEvenements();

        $evenements = array_filter($evenements, function($evenement) {
            return is_null($evenement['start']) && is_null($evenement['end']);
        });



        return $this->render('views/admin/calendrier/index.html.twig', [
            'evenements' => $evenements,
        ]);
    }

    /**
     * @Route("/calendrier/evenement/creer", name="admin_calendrier_creer-evenement")
     */
    public function creerEvenementAction(Request $request)
    {
        if($request->isXmlHttpRequest()) {
            $request = $request->request;

            $evenement = [
                'title' => $request->get('titre'),
                'color' => $request->get('couleur'),
                'start'  => null,
                'end'  => null,
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

    private function fetchEvenements()
    {
        return $this->get(self::YAML_MANAGER)->loadData(self::YML_CALENDRIER);
    }
}