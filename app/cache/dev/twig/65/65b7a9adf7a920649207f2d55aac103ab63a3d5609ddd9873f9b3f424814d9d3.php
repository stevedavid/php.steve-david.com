<?php

/* views/ajax/realisation.html.twig */
class __TwigTemplate_6caedbfd911903b82454090cd43348b07498ad68aeeb0d089b8b9f7fc25b893d extends Twig_Template
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
        $__internal_b922ae79a599cb19cf6eef3a1aee3e2d914cc5b4be74bc068036b168b1f5a74f = $this->env->getExtension("native_profiler");
        $__internal_b922ae79a599cb19cf6eef3a1aee3e2d914cc5b4be74bc068036b168b1f5a74f->enter($__internal_b922ae79a599cb19cf6eef3a1aee3e2d914cc5b4be74bc068036b168b1f5a74f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "views/ajax/realisation.html.twig"));

        // line 1
        echo "<div class=\"modal fade\" id=\"rea-modal\">
    <div class=\"modal-dialog modal-lg\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                <h4 class=\"modal-title\">";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["realisation"]) ? $context["realisation"] : null), "popup", array()), "name", array()), "html", null, true);
        echo "</h4>
            </div>
            <div class=\"modal-body\">
                <section id=\"project\">
                    <div class=\"row\">
                        <div class=\"col-md-12\">

                            <img src=\"images/realisations/";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["realisation"]) ? $context["realisation"] : null), "popup", array()), "image", array()), "html", null, true);
        echo "\" alt=\"\" id=\"rea\"/>

                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <div class=\"box-content\" id=\"description\">
                                <h1> DESCRIPTION </h1>
                                <div class=\"col-md-4\">
                                    <div class=\"box-text\">
                                        <h2>Pourquoi</h2>
                                        <p>";
        // line 24
        echo $this->getAttribute($this->getAttribute((isset($context["realisation"]) ? $context["realisation"] : null), "popup", array()), "why", array());
        echo "<p>
                                    </div>
                                </div>
                                <div class=\"col-md-4\">
                                    <div class=\"box-text\">
                                        <h2>Résultat</h2>
                                        <p>";
        // line 30
        echo $this->getAttribute($this->getAttribute((isset($context["realisation"]) ? $context["realisation"] : null), "popup", array()), "results", array());
        echo "</p>
                                    </div>
                                </div>
                                <div class=\"col-md-4\">
                                    <div class=\"box-text\">
                                        <h2>Dates</h2>
                                        ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["realisation"]) ? $context["realisation"] : null), "popup", array()), "dates", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["date"]) {
            // line 37
            echo "                                            <p>";
            echo twig_escape_filter($this->env, $context["date"], "html", null, true);
            echo "</p>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['date'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "                                        <h2>Technologies</h2>
                                        ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["realisation"]) ? $context["realisation"] : null), "popup", array()), "technologies", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["technology"]) {
            // line 41
            echo "                                            <p>";
            echo twig_escape_filter($this->env, $context["technology"], "html", null, true);
            echo "</p>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['technology'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "                                    </div>
                                </div>
                            </div><!--close box content-->
                        </div>
                    </div><!--close row-->
                    <div class=\"row\">
                        <div class=\"col-md-12 text-center\" id=\"link-to-rea\">
                            <i class=\"fa fa-anchor-link\"></i>
                            <br/>
                            <a href=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["realisation"]) ? $context["realisation"] : null), "popup", array()), "href", array()), "html", null, true);
        echo "\" class=\"nice-link\" target=\"_blank\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["realisation"]) ? $context["realisation"] : null), "popup", array()), "link", array()), "html", null, true);
        echo "</a>
                        </div>
                    </div>
                </section>

            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Fermer</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->";
        
        $__internal_b922ae79a599cb19cf6eef3a1aee3e2d914cc5b4be74bc068036b168b1f5a74f->leave($__internal_b922ae79a599cb19cf6eef3a1aee3e2d914cc5b4be74bc068036b168b1f5a74f_prof);

    }

    public function getTemplateName()
    {
        return "views/ajax/realisation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 52,  100 => 43,  91 => 41,  87 => 40,  84 => 39,  75 => 37,  71 => 36,  62 => 30,  53 => 24,  39 => 13,  29 => 6,  22 => 1,);
    }
}
/* <div class="modal fade" id="rea-modal">*/
/*     <div class="modal-dialog modal-lg">*/
/*         <div class="modal-content">*/
/*             <div class="modal-header">*/
/*                 <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>*/
/*                 <h4 class="modal-title">{{ realisation.popup.name }}</h4>*/
/*             </div>*/
/*             <div class="modal-body">*/
/*                 <section id="project">*/
/*                     <div class="row">*/
/*                         <div class="col-md-12">*/
/* */
/*                             <img src="images/realisations/{{ realisation.popup.image }}" alt="" id="rea"/>*/
/* */
/*                         </div>*/
/*                     </div>*/
/*                     <div class="row">*/
/*                         <div class="col-md-12">*/
/*                             <div class="box-content" id="description">*/
/*                                 <h1> DESCRIPTION </h1>*/
/*                                 <div class="col-md-4">*/
/*                                     <div class="box-text">*/
/*                                         <h2>Pourquoi</h2>*/
/*                                         <p>{{ realisation.popup.why|raw }}<p>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div class="col-md-4">*/
/*                                     <div class="box-text">*/
/*                                         <h2>Résultat</h2>*/
/*                                         <p>{{ realisation.popup.results|raw }}</p>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div class="col-md-4">*/
/*                                     <div class="box-text">*/
/*                                         <h2>Dates</h2>*/
/*                                         {% for date in realisation.popup.dates %}*/
/*                                             <p>{{ date }}</p>*/
/*                                         {% endfor %}*/
/*                                         <h2>Technologies</h2>*/
/*                                         {% for technology in realisation.popup.technologies %}*/
/*                                             <p>{{ technology }}</p>*/
/*                                         {% endfor %}*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div><!--close box content-->*/
/*                         </div>*/
/*                     </div><!--close row-->*/
/*                     <div class="row">*/
/*                         <div class="col-md-12 text-center" id="link-to-rea">*/
/*                             <i class="fa fa-anchor-link"></i>*/
/*                             <br/>*/
/*                             <a href="{{ realisation.popup.href }}" class="nice-link" target="_blank">{{ realisation.popup.link }}</a>*/
/*                         </div>*/
/*                     </div>*/
/*                 </section>*/
/* */
/*             </div>*/
/*             <div class="modal-footer">*/
/*                 <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>*/
/*             </div>*/
/*         </div><!-- /.modal-content -->*/
/*     </div><!-- /.modal-dialog -->*/
/* </div><!-- /.modal -->*/
