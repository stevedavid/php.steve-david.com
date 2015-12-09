<?php

/* views/ajax/realisation.html.twig */
class __TwigTemplate_97450dfdab1264d3a5719cc45f90821da32ed31dc53a1d0c40d9bd6b1c4da14d extends Twig_Template
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
        $__internal_c69981f7df0105114e09348b75e6df3596843d0e01d43862ab55c4919c1ebf09 = $this->env->getExtension("native_profiler");
        $__internal_c69981f7df0105114e09348b75e6df3596843d0e01d43862ab55c4919c1ebf09->enter($__internal_c69981f7df0105114e09348b75e6df3596843d0e01d43862ab55c4919c1ebf09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "views/ajax/realisation.html.twig"));

        // line 1
        echo "<div class=\"modal fade\" id=\"rea-modal\">
    <div class=\"modal-dialog modal-lg\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                <h4 class=\"modal-title\">";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["realisation"]) ? $context["realisation"] : null), "name", array()), "html", null, true);
        echo "</h4>
            </div>
            <div class=\"modal-body\">
                <section id=\"project\">
                    <div class=\"row\">
                        <div class=\"col-md-12\">

                            <img src=\"images/realisations/";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["realisation"]) ? $context["realisation"] : null), "image", array()), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["realisation"]) ? $context["realisation"] : null), "why", array()), "html", null, true);
        echo "<p>
                                    </div>
                                </div>
                                <div class=\"col-md-4\">
                                    <div class=\"box-text\">
                                        <h2>Résultat</h2>
                                        <p>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["realisation"]) ? $context["realisation"] : null), "results", array()), "html", null, true);
        echo "</p>
                                    </div>
                                </div>
                                <div class=\"col-md-4\">
                                    <div class=\"box-text\">
                                        <h2>Dates</h2>
                                        ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["realisation"]) ? $context["realisation"] : null), "dates", array()));
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["realisation"]) ? $context["realisation"] : null), "technologies", array()));
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["realisation"]) ? $context["realisation"] : null), "href", array()), "html", null, true);
        echo "\" class=\"nice-link\" target=\"_blank\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["realisation"]) ? $context["realisation"] : null), "link", array()), "html", null, true);
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
        
        $__internal_c69981f7df0105114e09348b75e6df3596843d0e01d43862ab55c4919c1ebf09->leave($__internal_c69981f7df0105114e09348b75e6df3596843d0e01d43862ab55c4919c1ebf09_prof);

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
/*                 <h4 class="modal-title">{{ realisation.name }}</h4>*/
/*             </div>*/
/*             <div class="modal-body">*/
/*                 <section id="project">*/
/*                     <div class="row">*/
/*                         <div class="col-md-12">*/
/* */
/*                             <img src="images/realisations/{{ realisation.image }}" alt="" id="rea"/>*/
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
/*                                         <p>{{ realisation.why }}<p>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div class="col-md-4">*/
/*                                     <div class="box-text">*/
/*                                         <h2>Résultat</h2>*/
/*                                         <p>{{ realisation.results }}</p>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div class="col-md-4">*/
/*                                     <div class="box-text">*/
/*                                         <h2>Dates</h2>*/
/*                                         {% for date in realisation.dates %}*/
/*                                             <p>{{ date }}</p>*/
/*                                         {% endfor %}*/
/*                                         <h2>Technologies</h2>*/
/*                                         {% for technology in realisation.technologies %}*/
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
/*                             <a href="{{ realisation.href }}" class="nice-link" target="_blank">{{ realisation.link }}</a>*/
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
