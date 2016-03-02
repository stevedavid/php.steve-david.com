<?php
namespace AppBundle\Controller;

use AppBundle\Core\CoreInterface as Core;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class CvController extends Controller implements Core
{
    /**
     * @Route("/cv/save-infos", name="cv_save_infos")
     */
    public function saveInfosAction(Request $request)
    {
        if($request->isXmlHttpRequest()) {

            $post = $request->request;
            $yamlManager = $this->get(self::YAML_MANAGER);
            $downloads = $yamlManager->loadData(self::YML_CV_DOWNLOADS);

            $datetime = new \DateTime();
            $downloads[$datetime->format('d/m/Y')][$datetime->format('H:i:s')] = [
                'name' => trim($post->get('name')),
                'company' => trim($post->get('company')),
                'email' => trim($post->get('email')),
                'phone' => trim($post->get('phone')),
            ];

            $yamlManager->saveData($yamlManager->locateFile(self::YML_CV_DOWNLOADS), $downloads);

            return new Response();
        }

        return new Response(null, 405);
    }

    /**
     * @Route("/cv", name="cv_download")
     */
    public function downloadAction(Request $request)
    {
//        $downloadCounter = $this->get('CvDownloadCounter');
//
//        $counter = $downloadCounter->incrementsToday();
//        $downloadCounter->save($counter);

        $file = sprintf(
            '%s/../web/dl/cv/%s',
            $this->getParameter('kernel.root_dir'),
            self::CV_FILENAME
        );
        header('Content-type: application/octet-stream');
        header('Content-Disposition: attachment; filename="' . self::CV_FILENAME . '"');
        header('Content-Transfer-Encoding: binary');
        header('Expires: 0');
        header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
        header('Pragma: public');
        header('Content-Length: ' . filesize($file));

        @readfile($file);

        $closeWindows = <<<JS
<script type="text/javascript">
    close();
</script>
JS;
        return new Response($closeWindows);
    }
}


