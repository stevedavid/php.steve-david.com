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
}