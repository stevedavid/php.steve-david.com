<?php
namespace AppBundle\Controller\Admin;

use AppBundle\Core\CoreInterface as Core;
use AppBundle\Core\YamlTrait as Yaml;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Yaml\Dumper;

/**
 * @Route("/admin")
 *
 * Class IndexController
 * @package AppBundle\Controller\Admin
 */
class IndexController extends Controller implements Core
{
    use Yaml;

    /**
     * @Route("/", name="admin_index_index", requirements={"section" = "[a-z]+"})
     */
    public function indexAction()
    {
        $data = [];
        foreach($this->ymlFiles as $key => $file) {
            $data[$key] = $this->get(self::YAML_MANAGER)->loadData($file);
        }

        $downloads = $this->get('cvDownloadCounter')->getUsableArray();
        $data['cv_downloads_total'] = array_sum($downloads);

        if (!empty($downloads)) {
            $max = max($downloads);
            foreach ($downloads as $date => &$count) {
                $count = sprintf('%s|%s', round($count * 100 / $max, 0), $count);
            }
        }

        $data['cv_downloads'] = $downloads;

        return $this->render('views/admin/index/index.html.twig', $data);
    }

    function navigationAction()
    {
        return $this->render('views/admin/partials/navigation.html.twig');
    }

    function breadcrumbAction()
    {
        return $this->render('views/admin/partials/breadcrumb.html.twig');
    }

    function menuAction()
    {
        return $this->render('views/admin/partials/menu.html.twig');
    }

    function headerAction()
    {
        $yamlManager = $this->get(self::YAML_MANAGER);

        $messages = is_null($yamlManager->loadData(self::YML_CONTACT)) ? [] : $yamlManager->loadData(self::YML_CONTACT);
        $messages = array_filter($messages, function($message) {
            return !$message['lu'];
        });

        $evenements = is_null($yamlManager->loadData(self::YML_CALENDRIER)) ? [] : $yamlManager->loadData(self::YML_CALENDRIER);
        $evenements = array_filter($evenements, function($evenement) {
            if($evenement['on_calendar']) {
                return \DateTime::createFromFormat('Y-m-d H:i:s', $evenement['start'])->format('Y-m-d') == (new \DateTime)->format('Y-m-d');
            }
        });


        return $this->render('views/admin/partials/header.html.twig', [
            'messages' => $messages,
            'evenements' => $evenements,
        ]);
    }
}