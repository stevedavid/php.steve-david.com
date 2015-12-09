<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_f3558d00d1b0458671e13249aae40244054e9b7dd5f3a10856464150c6ffd26b extends Twig_Template
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
        $__internal_ea21e7651bc85e106b17a3056b0f2fc4442a9d2cbfdfe9b79c859a83a2622af5 = $this->env->getExtension("native_profiler");
        $__internal_ea21e7651bc85e106b17a3056b0f2fc4442a9d2cbfdfe9b79c859a83a2622af5->enter($__internal_ea21e7651bc85e106b17a3056b0f2fc4442a9d2cbfdfe9b79c859a83a2622af5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

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
        
        $__internal_ea21e7651bc85e106b17a3056b0f2fc4442a9d2cbfdfe9b79c859a83a2622af5->leave($__internal_ea21e7651bc85e106b17a3056b0f2fc4442a9d2cbfdfe9b79c859a83a2622af5_prof);

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
