<?php

/* views/partials/citations.html.twig */
class __TwigTemplate_8b5033da49460b734c2ef5611df5a87df032b87da9e52bcc8495165cd0c36777 extends Twig_Template
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
        $__internal_940fa2bc0f10876831627aaeb70c0e780f8518b5dc10a853977002a16b4b636b = $this->env->getExtension("native_profiler");
        $__internal_940fa2bc0f10876831627aaeb70c0e780f8518b5dc10a853977002a16b4b636b->enter($__internal_940fa2bc0f10876831627aaeb70c0e780f8518b5dc10a853977002a16b4b636b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "views/partials/citations.html.twig"));

        // line 1
        echo "<div class=\"parallax2\">
    <div class=\"overlay-white\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div id=\"owl-demo\" class=\"owl-carousel owl-theme\">
                        ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["citations"]) ? $context["citations"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["citation"]) {
            // line 8
            echo "                            <div class=\"item\">
                                <div class=\"carousel-desc\">
                                    <i class=\"fa ";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["citation"], "icon", array()), "html", null, true);
            echo "\"></i>
                                    <h1>";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["citation"], "name", array()), "html", null, true);
            echo "</h1>
                                    <p>";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["citation"], "quote", array()), "html", null, true);
            echo "</p>
                                    <p class=\"nm-name\">- ";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["citation"], "profession", array()), "html", null, true);
            echo "</p>
                                </div>
                            </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['citation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "                    </div>
                </div>
            </div>
        </div>
    </div>
</div>";
        
        $__internal_940fa2bc0f10876831627aaeb70c0e780f8518b5dc10a853977002a16b4b636b->leave($__internal_940fa2bc0f10876831627aaeb70c0e780f8518b5dc10a853977002a16b4b636b_prof);

    }

    public function getTemplateName()
    {
        return "views/partials/citations.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 17,  50 => 13,  46 => 12,  42 => 11,  38 => 10,  34 => 8,  30 => 7,  22 => 1,);
    }
}
/* <div class="parallax2">*/
/*     <div class="overlay-white">*/
/*         <div class="container">*/
/*             <div class="row">*/
/*                 <div class="col-md-12">*/
/*                     <div id="owl-demo" class="owl-carousel owl-theme">*/
/*                         {% for citation in citations %}*/
/*                             <div class="item">*/
/*                                 <div class="carousel-desc">*/
/*                                     <i class="fa {{ citation.icon }}"></i>*/
/*                                     <h1>{{ citation.name }}</h1>*/
/*                                     <p>{{ citation.quote }}</p>*/
/*                                     <p class="nm-name">- {{ citation.profession }}</p>*/
/*                                 </div>*/
/*                             </div>*/
/*                         {% endfor %}*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
