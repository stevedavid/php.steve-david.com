<?php
namespace AppBundle\Controller;

use AppBundle\Core\CoreInterface as Core;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\Yaml\Parser;
use AppBundle\Form\ContactType;

class FrontController extends Controller implements Core
{
    /**
     * @Route("/", name="front_index")
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