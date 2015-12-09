<?php

/* views/partials/realisations.html.twig */
class __TwigTemplate_ee376e4e13dec5dc7392843970eef30fee30575f68f07f022243eabf7553fca6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_52fc837885ae7b5666fb39ff9fd552b49c3f11b442d66cceb054283bc67aa036 = $this->env->getExtension("native_profiler");
        $__internal_52fc837885ae7b5666fb39ff9fd552b49c3f11b442d66cceb054283bc67aa036->enter($__internal_52fc837885ae7b5666fb39ff9fd552b49c3f11b442d66cceb054283bc67aa036_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "views/partials/realisations.html.twig"));

        // line 1
        echo "<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"box-content\" id=\"scroll-realisations\">
                <h1> Réalisations </h1>

                <!-- Category Filter -->
                <dl class=\"group\">
                    <dt></dt>
                    <dd>
                        <ul class=\"filter group albumFilter\">
                            <li data-filter=\"*\" class=\"cl-effect-11 current\"><a data-hover=\"Toutes\" href=\"#\">Toutes</a></li>
                            <li class=\"cl-effect-11\" data-filter=\".prof\"><a data-hover=\"Professionnelles\"  href=\"#\">Professionnelles</a></li>
                            <li class=\"cl-effect-11\" data-filter=\".perso\"><a data-hover=\"Personnelles\" href=\"#\">Personnelles</a></li>
                            <!--<li class=\"cl-effect-11\" data-filter=\".ecole\"><a data-hover=\"Ecole\" href=\"#\">Ecole</a></li>-->
                        </ul>
                    </dd>
                </dl>
                <div class=\"portfolio albumContainer\">

                    ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["realisations"]) ? $context["realisations"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["realisation"]) {
            // line 22
            echo "                        <div class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["realisation"], "thumbnail", array()), "category", array()), "html", null, true);
            echo " col-md-4 item\">
                            <div class=\"grid\">
                                <figure class=\"effect-oscar\">
                                    <img src=\"images/realisations/";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["realisation"], "thumbnail", array()), "image", array()), "html", null, true);
            echo "\" alt=\"\" />
                                    <figcaption>
                                        <p>
                                              <span>
                                                ";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["realisation"], "thumbnail", array()), "name", array()), "html", null, true);
            echo " &bull; ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["realisation"], "thumbnail", array()), "type", array()), "html", null, true);
            echo "
                                              </span>
                                        </p>
                                        <a href=\"details.html\" class=\"smooth-redirect\" data-rea=\"";
            // line 32
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\"></a>
                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['realisation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "

                </div>
            </div><!--close box content-->
        </div>
    </div>
</div>";
        
        $__internal_52fc837885ae7b5666fb39ff9fd552b49c3f11b442d66cceb054283bc67aa036->leave($__internal_52fc837885ae7b5666fb39ff9fd552b49c3f11b442d66cceb054283bc67aa036_prof);

    }

    public function getTemplateName()
    {
        return "views/partials/realisations.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 38,  70 => 32,  62 => 29,  55 => 25,  48 => 22,  44 => 21,  22 => 1,);
    }
}
/* <div class="container">*/
/*     <div class="row">*/
/*         <div class="col-md-12">*/
/*             <div class="box-content" id="scroll-realisations">*/
/*                 <h1> Réalisations </h1>*/
/* */
/*                 <!-- Category Filter -->*/
/*                 <dl class="group">*/
/*                     <dt></dt>*/
/*                     <dd>*/
/*                         <ul class="filter group albumFilter">*/
/*                             <li data-filter="*" class="cl-effect-11 current"><a data-hover="Toutes" href="#">Toutes</a></li>*/
/*                             <li class="cl-effect-11" data-filter=".prof"><a data-hover="Professionnelles"  href="#">Professionnelles</a></li>*/
/*                             <li class="cl-effect-11" data-filter=".perso"><a data-hover="Personnelles" href="#">Personnelles</a></li>*/
/*                             <!--<li class="cl-effect-11" data-filter=".ecole"><a data-hover="Ecole" href="#">Ecole</a></li>-->*/
/*                         </ul>*/
/*                     </dd>*/
/*                 </dl>*/
/*                 <div class="portfolio albumContainer">*/
/* */
/*                     {% for key, realisation in realisations %}*/
/*                         <div class="{{ realisation.thumbnail.category }} col-md-4 item">*/
/*                             <div class="grid">*/
/*                                 <figure class="effect-oscar">*/
/*                                     <img src="images/realisations/{{ realisation.thumbnail.image }}" alt="" />*/
/*                                     <figcaption>*/
/*                                         <p>*/
/*                                               <span>*/
/*                                                 {{ realisation.thumbnail.name }} &bull; {{ realisation.thumbnail.type }}*/
/*                                               </span>*/
/*                                         </p>*/
/*                                         <a href="details.html" class="smooth-redirect" data-rea="{{ key }}"></a>*/
/*                                     </figcaption>*/
/*                                 </figure>*/
/*                             </div>*/
/*                         </div>*/
/*                     {% endfor %}*/
/* */
/* */
/*                 </div>*/
/*             </div><!--close box content-->*/
/*         </div>*/
/*     </div>*/
/* </div>*/
