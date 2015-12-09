<?php

/* views/partials/competences.html.twig */
class __TwigTemplate_59b5723ed9e1527cb1bf5847ca26291e0763fa0962c0b0d000a3884b9251ac65 extends Twig_Template
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
        $__internal_8fe66d9c1a6f17ba4265bb03ef507f48338ec9edd5fb935fe107d0a53d6521df = $this->env->getExtension("native_profiler");
        $__internal_8fe66d9c1a6f17ba4265bb03ef507f48338ec9edd5fb935fe107d0a53d6521df->enter($__internal_8fe66d9c1a6f17ba4265bb03ef507f48338ec9edd5fb935fe107d0a53d6521df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "views/partials/competences.html.twig"));

        // line 1
        echo "<div class=\"parallax3\">
    <div class=\"overlay-white\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div id=\"competences-chart\">

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"box-content\" id=\"scroll-competences\">
                <h1>Compétences</h1>
                ";
        // line 19
        $context["i"] = 0;
        // line 20
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["competences"]) ? $context["competences"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["competence"]) {
            // line 21
            echo "                    <div class=\"col-md-12\">
                        <div class=\"box-text\">
                            <h2>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["competence"], "name", array()), "html", null, true);
            echo "</h2>
                            ";
            // line 24
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["competence"], "items", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 25
                echo "                                ";
                $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
                // line 26
                echo "                                <div class=\"easy-pie easyPieChart\" id=\"ep";
                echo twig_escape_filter($this->env, (isset($context["i"]) ? $context["i"] : null), "html", null, true);
                echo "\" data-value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "niveau", array()), "html", null, true);
                echo "\" rel=\"tooltip\" title=\"\">
                                    <span class=\"percent\" >";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "name", array()), "html", null, true);
                echo "</span>
                                </div>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['competence'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "

                <?php endforeach;?>
            </div>
        </div>
    </div>
</div>";
        
        $__internal_8fe66d9c1a6f17ba4265bb03ef507f48338ec9edd5fb935fe107d0a53d6521df->leave($__internal_8fe66d9c1a6f17ba4265bb03ef507f48338ec9edd5fb935fe107d0a53d6521df_prof);

    }

    public function getTemplateName()
    {
        return "views/partials/competences.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 33,  80 => 30,  71 => 27,  64 => 26,  61 => 25,  57 => 24,  53 => 23,  49 => 21,  44 => 20,  42 => 19,  22 => 1,);
    }
}
/* <div class="parallax3">*/
/*     <div class="overlay-white">*/
/*         <div class="container">*/
/*             <div class="row">*/
/*                 <div class="col-md-12">*/
/*                     <div id="competences-chart">*/
/* */
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* <div class="container">*/
/*     <div class="row">*/
/*         <div class="col-md-12">*/
/*             <div class="box-content" id="scroll-competences">*/
/*                 <h1>Compétences</h1>*/
/*                 {% set i = 0 %}*/
/*                 {% for competence in competences %}*/
/*                     <div class="col-md-12">*/
/*                         <div class="box-text">*/
/*                             <h2>{{ competence.name }}</h2>*/
/*                             {% for item in competence.items %}*/
/*                                 {% set i = i + 1 %}*/
/*                                 <div class="easy-pie easyPieChart" id="ep{{ i }}" data-value="{{ item.niveau }}" rel="tooltip" title="">*/
/*                                     <span class="percent" >{{ item.name }}</span>*/
/*                                 </div>*/
/*                             {% endfor %}*/
/*                         </div>*/
/*                     </div>*/
/*                 {% endfor %}*/
/* */
/* */
/*                 <?php endforeach;?>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
