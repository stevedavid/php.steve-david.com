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
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

/**
 * @Route("/admin/yaml")
 *
 * Class YamlController
 * @package AppBundle\Controller\Admin
 */
class YamlController extends Controller implements Core
{
    use Yaml;

    /**
     * @Route("/edit/{ymlFile}", name="admin_yaml_edit", requirements={"ymlFile" = "\w+"})
     */
    public function editYamlAction($ymlFile = 'default')
    {
        if(!in_array($ymlFile, $this->ymlFiles)) {
            throw new NotFoundHttpException();
        }

        if(in_array($ymlFile, self::YAML_UNEDITABLE)) {
            throw new AccessDeniedException();
        }

        $data = $this->get(self::YAML_MANAGER)->loadData($ymlFile);

        return $this->render('views/admin/yaml/edit.html.twig', [
            'yml' => $data,
            'file' => $ymlFile,
        ]);
    }

    /**
     * @Route("/save/{ymlFile}", name="admin_yaml_save", requirements={"ymlFile" = "\w+"})
     */
    public function saveYamlAction(Request $request, $ymlFile)
    {
        if(!in_array($ymlFile, $this->ymlFiles)) {
            throw new NotFoundHttpException();
        }

        $yamlManager = $this->get(self::YAML_MANAGER);

        $file = $yamlManager->locateFile($ymlFile);

        if($yamlManager->saveData($file, $request->request->get('yaml'))) {
            return new JsonResponse(['written' => true]);
        }

        return new JsonResponse(['written' => false], 500);
    }
}