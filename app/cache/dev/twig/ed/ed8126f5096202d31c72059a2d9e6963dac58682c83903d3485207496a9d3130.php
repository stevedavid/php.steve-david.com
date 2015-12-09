<?php

/* @WebProfiler/Profiler/info.html.twig */
class __TwigTemplate_9828d0b46748253d192c8590208e248e170c7475b77eec7a35af79d5264a9314 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Profiler/info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f7d19bf26c7f65b06edf4ff83d934cefb20826e111b5c55f5ee914d930bf7163 = $this->env->getExtension("native_profiler");
        $__internal_f7d19bf26c7f65b06edf4ff83d934cefb20826e111b5c55f5ee914d930bf7163->enter($__internal_f7d19bf26c7f65b06edf4ff83d934cefb20826e111b5c55f5ee914d930bf7163_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : null), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : null), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : null), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f7d19bf26c7f65b06edf4ff83d934cefb20826e111b5c55f5ee914d930bf7163->leave($__internal_f7d19bf26c7f65b06edf4ff83d934cefb20826e111b5c55f5ee914d930bf7163_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_86558fe4f7513f6f31c80c116fd632ff4f5282b345ce5b0e23970fcb6e68d47b = $this->env->getExtension("native_profiler");
        $__internal_86558fe4f7513f6f31c80c116fd632ff4f5282b345ce5b0e23970fcb6e68d47b->enter($__internal_86558fe4f7513f6f31c80c116fd632ff4f5282b345ce5b0e23970fcb6e68d47b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 27
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : null), (isset($context["about"]) ? $context["about"] : null), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 29
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : null), (isset($context["about"]) ? $context["about"] : null), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_86558fe4f7513f6f31c80c116fd632ff4f5282b345ce5b0e23970fcb6e68d47b->leave($__internal_86558fe4f7513f6f31c80c116fd632ff4f5282b345ce5b0e23970fcb6e68d47b_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_03f474ec62513d812d8805c40103c8cad2ecdb896cf80f7dca86e2b7fd707c4c = $this->env->getExtension("native_profiler");
        $__internal_03f474ec62513d812d8805c40103c8cad2ecdb896cf80f7dca86e2b7fd707c4c->enter($__internal_03f474ec62513d812d8805c40103c8cad2ecdb896cf80f7dca86e2b7fd707c4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : null), (isset($context["about"]) ? $context["about"] : null), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : null), (isset($context["about"]) ? $context["about"] : null), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_03f474ec62513d812d8805c40103c8cad2ecdb896cf80f7dca86e2b7fd707c4c->leave($__internal_03f474ec62513d812d8805c40103c8cad2ecdb896cf80f7dca86e2b7fd707c4c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 36,  69 => 35,  63 => 34,  52 => 29,  46 => 27,  40 => 26,  33 => 1,  31 => 12,  30 => 11,  29 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% set messages = {*/
/*     'purge' : {*/
/*         status:  'success',*/
/*         title:   'The profiler database was purged successfully',*/
/*         message: 'Now you need to browse some pages with the Symfony Profiler enabled to collect data.'*/
/*     },*/
/*     'no_token' : {*/
/*         status:  'error',*/
/*         title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',*/
/*         message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token "' ~ token|default('') ~ '" was not found in the database.'*/
/*     },*/
/*     'upload_error' : {*/
/*         status:  'error',*/
/*         title:   'A problem occurred when uploading the data',*/
/*         message: 'No file given or the file was not uploaded successfully.'*/
/*     },*/
/*     'already_exists' : {*/
/*         status:  'error',*/
/*         title:   'A problem occurred when uploading the data',*/
/*         message: 'The token already exists in the database.'*/
/*     }*/
/* } %}*/
/* */
/* {% block summary %}*/
/*     <div class="status status-{{ messages[about].status }}">*/
/*         <div class="container">*/
/*             <h2>{{ messages[about].status|title }}</h2>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>{{ messages[about].title }}</h2>*/
/*     <p>{{ messages[about].message }}</p>*/
/* {% endblock %}*/
/* */
