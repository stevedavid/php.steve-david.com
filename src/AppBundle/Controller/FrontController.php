<?php
namespace AppBundle\Controller;

use AppBundle\Core\CoreInterface as Core;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\Yaml\Parser;
use AppBundle\Form\ContactType;

class FrontController extends Controller implements Core
{
    /**
     * @Route("/download/cv", name="front_cv")
     */
    public function downloadCvAction(Request $request)
    {
        $counterPath = sprintf(
            '%s/../Resources/data/%s',
            __DIR__,
            self::COUNTER_DOWNLOAD_CV
        );
        $count = file($counterPath)[0];
        $count++;
        file_put_contents($counterPath, $count);

        $filename = 'CV_Steve_David.pdf';
        $file = sprintf(
            '%s/../web/dl/cv/%s',
            $this->getParameter('kernel.root_dir'),
            $filename
        );
        header('Content-type: application/octet-stream');
        header('Content-Disposition: attachment; filename="' . $filename . '"');
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

    /**
     * @Route("/{section}", name="front_index", defaults={"section" = null}, requirements={"section" = "[a-z\/]+"})
     */
    public function indexAction()
    {
        return $this->render('views/index.html.twig', [
            'age' => (new \DateTime(self::BIRTHDATE))->diff(new \DateTime())->y,
        ]);
    }
    function parcoursAction()
    {
        $parcours = $this->get(self::YAML_MANAGER)->loadData(self::YML_PARCOURS);

        return $this->render('views/partials/parcours.html.twig', [
            'formations' => $parcours['formation'],
            'experiences' => $parcours['experiences'],
        ]);
    }

    function contactAction()
    {
        $form = $this->createForm('AppBundle\Form\ContactType');

        return $this->render('views/partials/contact.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    function competencesAction()
    {
        $competences = $this->get(self::YAML_MANAGER)->loadData(self::YML_COMPETENCES);

        foreach($competences as &$category) {
            usort($category['items'], function ($a, $b) {
                return $a['niveau'] < $b['niveau'];
            });
        }

        return $this->render('views/partials/competences.html.twig', [
            'competences' => $competences,
        ]);
    }

    function realisationsAction()
    {
        $realisations = $this->get(self::YAML_MANAGER)->loadData(self::YML_REALISATIONS);

        $realisations = array_filter($realisations, function($realisation) {
            return $realisation['thumbnail']['visible'] === 'true';
        });

        return $this->render('views/partials/realisations.html.twig', [
            'realisations' => array_reverse($realisations),
        ]);
    }

    function citationsAction()
    {
        return $this->render('views/partials/citations.html.twig', [
            'citations' => $this->get(self::YAML_MANAGER)->loadData(self::YML_CITATIONS),
        ]);
    }
}