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
 * @Route("/admin/cv")
 *
 * Class CvController
 * @package AppBundle\Controller\Admin
 */
class CvController extends Controller implements Core
{
    use Yaml;

    /**
     * @Route("/", name="admin_cv_index")
     */
    public function indexAction()
    {
        $yamlManager = $this->get(self::YAML_MANAGER);

        $downloads = $yamlManager->loadData(self::YML_CV_DOWNLOADS);

        foreach ($downloads as &$download) {
            $download = array_reverse($download);
        }
        return $this->render('views/admin/cv/index.html.twig', [
            'downloads' => array_reverse($downloads),
        ]);
    }


    /**
     * @Route("/{dateTime}", name="admin_cv_supprimer", requirements={"dateTime" = "[a-zA-Z0-9-:\/]+"})
     */
    public function supprimerAction($dateTime)
    {
        $dateTime = explode('-', $dateTime);
        $yamlManager = $this->get(self::YAML_MANAGER);
        $downloads = $yamlManager->loadData(self::YML_CV_DOWNLOADS);

        unset($downloads[$dateTime[0]][$dateTime[1]]);

        if(!count($downloads[$dateTime[0]])) {
            unset($downloads[$dateTime[0]]);
        }

        $yamlManager->saveData($yamlManager->locateFile(self::YML_CV_DOWNLOADS), $downloads);

        return $this->redirect($this->generateUrl('admin_cv_index'));
    }
}