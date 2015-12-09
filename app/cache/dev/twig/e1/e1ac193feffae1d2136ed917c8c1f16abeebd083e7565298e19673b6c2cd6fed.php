<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_cc52dfd65bd26a9abf9700ec054641e76f997560ece2fd2e74fec5742bcdf704 extends Twig_Template
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
        $__internal_29720cbbea08f0cb6e1fa332138e2b9b7db6b9cb0359326b0e2d0b38542f3104 = $this->env->getExtension("native_profiler");
        $__internal_29720cbbea08f0cb6e1fa332138e2b9b7db6b9cb0359326b0e2d0b38542f3104->enter($__internal_29720cbbea08f0cb6e1fa332138e2b9b7db6b9cb0359326b0e2d0b38542f3104_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_29720cbbea08f0cb6e1fa332138e2b9b7db6b9cb0359326b0e2d0b38542f3104->leave($__internal_29720cbbea08f0cb6e1fa332138e2b9b7db6b9cb0359326b0e2d0b38542f3104_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 1,);
    }
}
/* <div id="header">*/
/*     <div class="container">*/
/*         <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>*/
/* */
/*         <div class="search">*/
/*             <form method="get" action="https://symfony.com/search" target="_blank">*/
/*                 <div class="form-row">*/
/*                     <input name="q" id="search-id" type="search" placeholder="search on symfony.com">*/
/*                     <button type="submit" class="btn">Search</button>*/
/*                 </div>*/
/*            </form>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
