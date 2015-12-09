<?php

/* views/partials/contact.html.twig */
class __TwigTemplate_df968f0cbfde2433c8547b136d3b4827187af9f540f8fb188df457b05a73174a extends Twig_Template
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
        $__internal_f02afd35b18d6c96c3056339dba4f74fad6e723c95cabc8417a3caf2ff8c01de = $this->env->getExtension("native_profiler");
        $__internal_f02afd35b18d6c96c3056339dba4f74fad6e723c95cabc8417a3caf2ff8c01de->enter($__internal_f02afd35b18d6c96c3056339dba4f74fad6e723c95cabc8417a3caf2ff8c01de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "views/partials/contact.html.twig"));

        // line 1
        echo "<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-md-12\">
            <h1>Contact</h1>
            <div class=\"box-content contact\">
                <div class=\"col-md-6 c-info\"><p><i class=\"fa fa fa-map-marker\"></i>Paris, France</p></div>
                <div class=\"col-md-6 c-info\">
                    <p>
                        <i class=\"fa fa-envelope-o\"></i>
                                <span class=\"email-rtl\">
                                    moc.divad-evets<i class=\"fa fa-at\"></i>evets
                                </span>
                    </p>
                </div>

                <div class=\"col-md-12 text-center bold\">- ou utilisez le formulaire ci-dessous -</div>


                ";
        // line 19
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start');
        echo "
                    <div class=\"col-md-6\">
                        <div class=\"form-group has-feedback\">
                            <div class=\"input-group\">
                                ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "sujet", array()), 'widget');
        echo "
                                <span class=\"input-group-addon\"><i class=\"fa fa-pencil-square-o\"></i></span>
                            </div>
                        </div>
                        <div class=\"form-group has-feedback\">
                            <div class=\"input-group\">
                                ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "nom", array()), 'widget');
        echo "
                                <span class=\"input-group-addon\"><i class=\"fa fa-user\"></i></span>
                            </div>
                        </div>
                        <div class=\"form-group has-feedback\">
                            <div class=\"input-group\">
                                ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), 'widget');
        echo "
                                <span class=\"input-group-addon\"><i class=\"fa fa-at\"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "message", array()), 'widget');
        echo "
                        ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "envoyer", array()), 'widget');
        echo "
                    </div>
                <div class=\"col-md-12 text-center no-opacity\" id=\"form-response\"></div>
                ";
        // line 45
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "
            </div>
        </div>
    </div>
</div>";
        
        $__internal_f02afd35b18d6c96c3056339dba4f74fad6e723c95cabc8417a3caf2ff8c01de->leave($__internal_f02afd35b18d6c96c3056339dba4f74fad6e723c95cabc8417a3caf2ff8c01de_prof);

    }

    public function getTemplateName()
    {
        return "views/partials/contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 45,  80 => 42,  76 => 41,  67 => 35,  58 => 29,  49 => 23,  42 => 19,  22 => 1,);
    }
}
/* <div class="container">*/
/*     <div class="row">*/
/*         <div class="col-md-12">*/
/*             <h1>Contact</h1>*/
/*             <div class="box-content contact">*/
/*                 <div class="col-md-6 c-info"><p><i class="fa fa fa-map-marker"></i>Paris, France</p></div>*/
/*                 <div class="col-md-6 c-info">*/
/*                     <p>*/
/*                         <i class="fa fa-envelope-o"></i>*/
/*                                 <span class="email-rtl">*/
/*                                     moc.divad-evets<i class="fa fa-at"></i>evets*/
/*                                 </span>*/
/*                     </p>*/
/*                 </div>*/
/* */
/*                 <div class="col-md-12 text-center bold">- ou utilisez le formulaire ci-dessous -</div>*/
/* */
/* */
/*                 {{ form_start(form) }}*/
/*                     <div class="col-md-6">*/
/*                         <div class="form-group has-feedback">*/
/*                             <div class="input-group">*/
/*                                 {{ form_widget(form.sujet) }}*/
/*                                 <span class="input-group-addon"><i class="fa fa-pencil-square-o"></i></span>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="form-group has-feedback">*/
/*                             <div class="input-group">*/
/*                                 {{ form_widget(form.nom) }}*/
/*                                 <span class="input-group-addon"><i class="fa fa-user"></i></span>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="form-group has-feedback">*/
/*                             <div class="input-group">*/
/*                                 {{ form_widget(form.email) }}*/
/*                                 <span class="input-group-addon"><i class="fa fa-at"></i></span>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="col-md-6">*/
/*                         {{ form_widget(form.message) }}*/
/*                         {{ form_widget(form.envoyer) }}*/
/*                     </div>*/
/*                 <div class="col-md-12 text-center no-opacity" id="form-response"></div>*/
/*                 {{ form_end(form) }}*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
