<?php

/* views/partials/realisations.html.twig */
class __TwigTemplate_bc34043252b4e6408f0130556870719c3d8dd604b30e86e2d646cd5710b9086b extends Twig_Template
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
        $__internal_490d043f97c4b31c5a10fe2e26e5cb383aaa1ce27de9e4bd49f1acbd630a33ab = $this->env->getExtension("native_profiler");
        $__internal_490d043f97c4b31c5a10fe2e26e5cb383aaa1ce27de9e4bd49f1acbd630a33ab->enter($__internal_490d043f97c4b31c5a10fe2e26e5cb383aaa1ce27de9e4bd49f1acbd630a33ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "views/partials/realisations.html.twig"));

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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["realisations"]) ? $context["realisations"] : null), "thumbnails", array()));
        foreach ($context['_seq'] as $context["key"] => $context["thumbnail"]) {
            // line 22
            echo "                    <div class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["thumbnail"], "category", array()), "html", null, true);
            echo " col-md-4 item\">
                        <div class=\"grid\">
                            <figure class=\"effect-oscar\">
                                <img src=\"images/realisations/";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["thumbnail"], "image", array()), "html", null, true);
            echo "\" alt=\"\" />
                                <figcaption>
                                    <p>
                                          <span>
                                            ";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["thumbnail"], "name", array()), "html", null, true);
            echo " &bull; ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["thumbnail"], "type", array()), "html", null, true);
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
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['thumbnail'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "

                </div>
            </div><!--close box content-->
        </div>
    </div>
</div>";
        
        $__internal_490d043f97c4b31c5a10fe2e26e5cb383aaa1ce27de9e4bd49f1acbd630a33ab->leave($__internal_490d043f97c4b31c5a10fe2e26e5cb383aaa1ce27de9e4bd49f1acbd630a33ab_prof);

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
/*                     {% for key, thumbnail in realisations.thumbnails %}*/
/*                     <div class="{{ thumbnail.category }} col-md-4 item">*/
/*                         <div class="grid">*/
/*                             <figure class="effect-oscar">*/
/*                                 <img src="images/realisations/{{ thumbnail.image }}" alt="" />*/
/*                                 <figcaption>*/
/*                                     <p>*/
/*                                           <span>*/
/*                                             {{ thumbnail.name }} &bull; {{ thumbnail.type }}*/
/*                                           </span>*/
/*                                     </p>*/
/*                                     <a href="details.html" class="smooth-redirect" data-rea="{{ key }}"></a>*/
/*                                 </figcaption>*/
/*                             </figure>*/
/*                         </div>*/
/*                     </div>*/
/*                     {% endfor %}*/
/* */
/* */
/*                 </div>*/
/*             </div><!--close box content-->*/
/*         </div>*/
/*     </div>*/
/* </div>*/
