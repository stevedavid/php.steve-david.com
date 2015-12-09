<?php

/* admin/macros/display-yaml.html.twig */
class __TwigTemplate_8d0269b1a8c756f4024b065bd7f25fbe90868866bd217662c69e126f9ebbcc9d extends Twig_Template
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
        $__internal_b37081c2256e6e707fa02554837e7bf6b5e75f31b568fbd9d24e9462d1e023d7 = $this->env->getExtension("native_profiler");
        $__internal_b37081c2256e6e707fa02554837e7bf6b5e75f31b568fbd9d24e9462d1e023d7->enter($__internal_b37081c2256e6e707fa02554837e7bf6b5e75f31b568fbd9d24e9462d1e023d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/macros/display-yaml.html.twig"));

        
        $__internal_b37081c2256e6e707fa02554837e7bf6b5e75f31b568fbd9d24e9462d1e023d7->leave($__internal_b37081c2256e6e707fa02554837e7bf6b5e75f31b568fbd9d24e9462d1e023d7_prof);

    }

    // line 1
    public function getdisplay_yaml($__yamls__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "yamls" => $__yamls__,
            "varargs" => func_num_args() > 1 ? array_slice(func_get_args(), 1) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_97d90189e362371d8be24885dc7ad006fc612d26b9a876930eb514f29736e4d1 = $this->env->getExtension("native_profiler");
            $__internal_97d90189e362371d8be24885dc7ad006fc612d26b9a876930eb514f29736e4d1->enter($__internal_97d90189e362371d8be24885dc7ad006fc612d26b9a876930eb514f29736e4d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "display_yaml"));

            // line 2
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["yamls"]) ? $context["yamls"] : null));
            foreach ($context['_seq'] as $context["key"] => $context["yaml"]) {
                // line 3
                echo "        <li class=\"form-inline\">
            ";
                // line 4
                if (twig_test_iterable($context["yaml"])) {
                    // line 5
                    echo "                ";
                    if (preg_match("/^\\d+\$/", $context["key"])) {
                        // line 6
                        echo "                    <div class=\"btn-group\" style=\"margin-bottom: 5px;\">
                        <button class=\"btn btn-xs\" data-action=\"ajouter\">
                            <i class=\"fa fa-plus\"></i>
                        </button>
                        <button class=\"btn btn-xs\" data-action=\"enlever\">
                            <i class=\"fa fa-times\"></i>
                        </button>
                    </div>
                    <strong class=\"yaml-key hidden\">";
                        // line 14
                        echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                        echo "</strong>
                ";
                    } else {
                        // line 16
                        echo "                    <strong class=\"yaml-key\">";
                        echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                        echo "</strong> :
                ";
                    }
                    // line 18
                    echo "                <ul>
                    ";
                    // line 19
                    echo $this->getAttribute($this, "display_yaml", array(0 => $context["yaml"]), "method");
                    echo "
                </ul>
            ";
                } else {
                    // line 22
                    echo "                ";
                    if (preg_match("|[^-0-9/]+|", $context["key"])) {
                        // line 23
                        echo "                    <strong class=\"yaml-key\">";
                        echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                        echo "</strong> :
                ";
                    } else {
                        // line 25
                        echo "                    <strong class=\"yaml-key hidden\">";
                        echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                        echo "</strong>
                ";
                    }
                    // line 27
                    echo "                <div class=\"form-group has-feedback\">
                    <input type=\"text\" class=\"form-control\" value=\"";
                    // line 28
                    echo twig_escape_filter($this->env, $context["yaml"], "html", null, true);
                    echo "\"/>
                </div>
                ";
                    // line 30
                    if (preg_match("/^\\d+\$/", $context["key"])) {
                        // line 31
                        echo "                    <div class=\"btn-group\">
                        <button class=\"btn btn-xs\" data-action=\"ajouter\">
                            <i class=\"fa fa-plus\"></i>
                        </button>
                        <button class=\"btn btn-xs\" data-action=\"enlever\">
                            <i class=\"fa fa-times\"></i>
                        </button>
                    </div>
                ";
                    }
                    // line 40
                    echo "            ";
                }
                // line 41
                echo "        </li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['yaml'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            
            $__internal_97d90189e362371d8be24885dc7ad006fc612d26b9a876930eb514f29736e4d1->leave($__internal_97d90189e362371d8be24885dc7ad006fc612d26b9a876930eb514f29736e4d1_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "admin/macros/display-yaml.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 41,  121 => 40,  110 => 31,  108 => 30,  103 => 28,  100 => 27,  94 => 25,  88 => 23,  85 => 22,  79 => 19,  76 => 18,  70 => 16,  65 => 14,  55 => 6,  52 => 5,  50 => 4,  47 => 3,  42 => 2,  27 => 1,);
    }
}
/* {% macro display_yaml(yamls) %}*/
/*     {% for key, yaml in yamls %}*/
/*         <li class="form-inline">*/
/*             {% if yaml is iterable %}*/
/*                 {% if key matches '/^\\d+$/' %}*/
/*                     <div class="btn-group" style="margin-bottom: 5px;">*/
/*                         <button class="btn btn-xs" data-action="ajouter">*/
/*                             <i class="fa fa-plus"></i>*/
/*                         </button>*/
/*                         <button class="btn btn-xs" data-action="enlever">*/
/*                             <i class="fa fa-times"></i>*/
/*                         </button>*/
/*                     </div>*/
/*                     <strong class="yaml-key hidden">{{ key }}</strong>*/
/*                 {% else %}*/
/*                     <strong class="yaml-key">{{ key }}</strong> :*/
/*                 {% endif %}*/
/*                 <ul>*/
/*                     {{ _self.display_yaml(yaml) }}*/
/*                 </ul>*/
/*             {% else %}*/
/*                 {% if key matches '|[^-0-9\/]+|' %}*/
/*                     <strong class="yaml-key">{{ key }}</strong> :*/
/*                 {% else %}*/
/*                     <strong class="yaml-key hidden">{{ key }}</strong>*/
/*                 {% endif %}*/
/*                 <div class="form-group has-feedback">*/
/*                     <input type="text" class="form-control" value="{{ yaml }}"/>*/
/*                 </div>*/
/*                 {% if key matches '/^\\d+$/' %}*/
/*                     <div class="btn-group">*/
/*                         <button class="btn btn-xs" data-action="ajouter">*/
/*                             <i class="fa fa-plus"></i>*/
/*                         </button>*/
/*                         <button class="btn btn-xs" data-action="enlever">*/
/*                             <i class="fa fa-times"></i>*/
/*                         </button>*/
/*                     </div>*/
/*                 {% endif %}*/
/*             {% endif %}*/
/*         </li>*/
/*     {% endfor %}*/
/* {% endmacro %}*/
