<?php

/* views/partials/competences.html.twig */
class __TwigTemplate_d7fb0aff99d6926ee35f83880578c9f90ab7e21259ba50965245004e380c7ff0 extends Twig_Template
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
        $__internal_2aefdfb0d462b04ea879e24ea654c7e14ad02e856cede69bb283a91f6549b6ac = $this->env->getExtension("native_profiler");
        $__internal_2aefdfb0d462b04ea879e24ea654c7e14ad02e856cede69bb283a91f6549b6ac->enter($__internal_2aefdfb0d462b04ea879e24ea654c7e14ad02e856cede69bb283a91f6549b6ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "views/partials/competences.html.twig"));

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
                echo "\" rel=\"tooltip\" title=\"";
                echo twig_escape_filter($this->env, twig_join_filter($this->getAttribute($context["item"], "legende", array()), ", "), "html", null, true);
                echo "\">
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
        
        $__internal_2aefdfb0d462b04ea879e24ea654c7e14ad02e856cede69bb283a91f6549b6ac->leave($__internal_2aefdfb0d462b04ea879e24ea654c7e14ad02e856cede69bb283a91f6549b6ac_prof);

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
        return array (  90 => 33,  82 => 30,  73 => 27,  64 => 26,  61 => 25,  57 => 24,  53 => 23,  49 => 21,  44 => 20,  42 => 19,  22 => 1,);
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
/*                                 <div class="easy-pie easyPieChart" id="ep{{ i }}" data-value="{{ item.niveau }}" rel="tooltip" title="{{ item.legende|join(', ') }}">*/
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
