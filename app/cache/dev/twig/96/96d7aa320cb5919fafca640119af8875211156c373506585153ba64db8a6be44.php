<?php

/* views/partials/citations.html.twig */
class __TwigTemplate_c3fedb1e824495ef7c025a8deb53fe7531221208810fb1f571ea83ef1595b718 extends Twig_Template
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
        $__internal_db28f9146f0688cb3cd47e4b23a95eb4fe7d4706b633bfb1e2fec8e8ed6ad7aa = $this->env->getExtension("native_profiler");
        $__internal_db28f9146f0688cb3cd47e4b23a95eb4fe7d4706b633bfb1e2fec8e8ed6ad7aa->enter($__internal_db28f9146f0688cb3cd47e4b23a95eb4fe7d4706b633bfb1e2fec8e8ed6ad7aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "views/partials/citations.html.twig"));

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
        
        $__internal_db28f9146f0688cb3cd47e4b23a95eb4fe7d4706b633bfb1e2fec8e8ed6ad7aa->leave($__internal_db28f9146f0688cb3cd47e4b23a95eb4fe7d4706b633bfb1e2fec8e8ed6ad7aa_prof);

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
