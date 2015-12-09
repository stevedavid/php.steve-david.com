<?php

/* admin/macros/display-yaml.html.twig */
class __TwigTemplate_5a019d4158d770d4cc8eee87ba7ea57af2548e5a79b0080c8839a6934c15dfd8 extends Twig_Template
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
        $__internal_b067820798dd1a585a28dd3a65837935a8169cf9d1ae0159f2c009f4b1656ac4 = $this->env->getExtension("native_profiler");
        $__internal_b067820798dd1a585a28dd3a65837935a8169cf9d1ae0159f2c009f4b1656ac4->enter($__internal_b067820798dd1a585a28dd3a65837935a8169cf9d1ae0159f2c009f4b1656ac4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/macros/display-yaml.html.twig"));

        
        $__internal_b067820798dd1a585a28dd3a65837935a8169cf9d1ae0159f2c009f4b1656ac4->leave($__internal_b067820798dd1a585a28dd3a65837935a8169cf9d1ae0159f2c009f4b1656ac4_prof);

    }

    // line 1
    public function getdisplay_yaml($__yamls__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "yamls" => $__yamls__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_5be469a58c594dfb3577368b3c52c7afad4642c475ba790d91d64bb8538679f8 = $this->env->getExtension("native_profiler");
            $__internal_5be469a58c594dfb3577368b3c52c7afad4642c475ba790d91d64bb8538679f8->enter($__internal_5be469a58c594dfb3577368b3c52c7afad4642c475ba790d91d64bb8538679f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "display_yaml"));

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
            
            $__internal_5be469a58c594dfb3577368b3c52c7afad4642c475ba790d91d64bb8538679f8->leave($__internal_5be469a58c594dfb3577368b3c52c7afad4642c475ba790d91d64bb8538679f8_prof);

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
