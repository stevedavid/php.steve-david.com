<?php

/* views/partials/parcours.html.twig */
class __TwigTemplate_a4bfe670df3a452f7a3519203d13f837d401e9d78fe293d36651a04caec4e0a4 extends Twig_Template
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
        $__internal_e4ef0a3a48eb3c2955b2c72845c19fce562c2bb1e2772a4ae40c955311999fdc = $this->env->getExtension("native_profiler");
        $__internal_e4ef0a3a48eb3c2955b2c72845c19fce562c2bb1e2772a4ae40c955311999fdc->enter($__internal_e4ef0a3a48eb3c2955b2c72845c19fce562c2bb1e2772a4ae40c955311999fdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "views/partials/parcours.html.twig"));

        // line 1
        echo "<div class=\"box-content experiences\" id=\"parcours-experiences\">
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["experiences"]) ? $context["experiences"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["experience"]) {
            // line 3
            echo "    <div class=\"col-md-12 list-experiences\">
        <h2>
            <i class=\"fa fa-briefcase\"></i>
            ";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute($context["experience"], "poste", array()), "html", null, true);
            echo "
            ";
            // line 7
            if (($this->getAttribute($context["experience"], "contrat", array()) != null)) {
                // line 8
                echo "                (";
                echo twig_escape_filter($this->env, $this->getAttribute($context["experience"], "contrat", array()), "html", null, true);
                echo ")
            ";
            }
            // line 10
            echo "            <i class=\"fa fa-calendar-o\"></i>
            ";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["experience"], "dates", array()), 0, array(), "array"), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["experience"], "dates", array()), 1, array(), "array"), "html", null, true);
            echo "
            <span class=\"data\">
                ";
            // line 13
            if (($this->getAttribute($context["experience"], "societe", array()) != null)) {
                // line 14
                echo "                    ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["experience"], "societe", array()), "html", null, true);
                echo "
                    &bull;
                ";
            }
            // line 17
            echo "                ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["experience"], "ville", array()), "html", null, true);
            echo "
            </span>
        </h2>
        <p>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["experience"], "description", array()), "html", null, true);
            echo "</p>
        <p>
            <u>Environnement technique</u> :
            ";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["experience"], "technologies", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["technologie"]) {
                // line 24
                echo "                ";
                echo twig_escape_filter($this->env, $context["technologie"], "html", null, true);
                if (($this->getAttribute($context["loop"], "last", array()) == false)) {
                    echo ",";
                }
                // line 25
                echo "            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['technologie'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "        </p>
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['experience'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "
</div>

<div class=\"box-content experiences\" id=\"parcours-formations\" style=\"display: none;\">
    ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["formations"]) ? $context["formations"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["formation"]) {
            // line 34
            echo "    <div class=\"col-md-12 list-experiences\">
        <h2><i class=\"fa fa-university\"></i>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["formation"], "intitule", array()), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, $this->getAttribute($context["formation"], "niveau", array()), "html", null, true);
            echo ") <i class=\"fa fa-graduation-cap\"></i>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["formation"], "graduation", array()), "html", null, true);
            echo "
            <span class=\"data\">";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["formation"], "ecole", array()), "html", null, true);
            echo " &bull; ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["formation"], "ville", array()), "html", null, true);
            echo "</span>
        </h2>
        <p>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["formation"], "description", array()), "html", null, true);
            echo "</p>
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['formation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "</div>";
        
        $__internal_e4ef0a3a48eb3c2955b2c72845c19fce562c2bb1e2772a4ae40c955311999fdc->leave($__internal_e4ef0a3a48eb3c2955b2c72845c19fce562c2bb1e2772a4ae40c955311999fdc_prof);

    }

    public function getTemplateName()
    {
        return "views/partials/parcours.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 41,  151 => 38,  144 => 36,  136 => 35,  133 => 34,  129 => 33,  123 => 29,  115 => 26,  101 => 25,  95 => 24,  78 => 23,  72 => 20,  65 => 17,  58 => 14,  56 => 13,  49 => 11,  46 => 10,  40 => 8,  38 => 7,  34 => 6,  29 => 3,  25 => 2,  22 => 1,);
    }
}
/* <div class="box-content experiences" id="parcours-experiences">*/
/*     {% for experience in experiences %}*/
/*     <div class="col-md-12 list-experiences">*/
/*         <h2>*/
/*             <i class="fa fa-briefcase"></i>*/
/*             {{ experience.poste }}*/
/*             {% if experience.contrat != null %}*/
/*                 ({{ experience.contrat }})*/
/*             {% endif %}*/
/*             <i class="fa fa-calendar-o"></i>*/
/*             {{ experience.dates[0] }} - {{ experience.dates[1] }}*/
/*             <span class="data">*/
/*                 {% if experience.societe != null %}*/
/*                     {{ experience.societe }}*/
/*                     &bull;*/
/*                 {% endif %}*/
/*                 {{ experience.ville }}*/
/*             </span>*/
/*         </h2>*/
/*         <p>{{ experience.description }}</p>*/
/*         <p>*/
/*             <u>Environnement technique</u> :*/
/*             {% for technologie in experience.technologies %}*/
/*                 {{ technologie }}{% if loop.last == false %},{% endif %}*/
/*             {% endfor %}*/
/*         </p>*/
/*     </div>*/
/*     {% endfor %}*/
/* */
/* </div>*/
/* */
/* <div class="box-content experiences" id="parcours-formations" style="display: none;">*/
/*     {% for formation in formations %}*/
/*     <div class="col-md-12 list-experiences">*/
/*         <h2><i class="fa fa-university"></i>{{ formation.intitule }} ({{ formation.niveau }}) <i class="fa fa-graduation-cap"></i>{{ formation.graduation }}*/
/*             <span class="data">{{ formation.ecole }} &bull; {{ formation.ville }}</span>*/
/*         </h2>*/
/*         <p>{{ formation.description }}</p>*/
/*     </div>*/
/*     {% endfor %}*/
/* </div>*/
