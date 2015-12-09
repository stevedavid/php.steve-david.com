<?php

/* ::admin/base.html.twig */
class __TwigTemplate_89cef3e50e36b8fd7219e83beafdd4b69b1dc42493d26702efa9519371a15964 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'js' => array($this, 'block_js'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6ed7bbef2e04f14a22224cc6cbfe25ca77b13f9c47ef628d8ef44effb3791f25 = $this->env->getExtension("native_profiler");
        $__internal_6ed7bbef2e04f14a22224cc6cbfe25ca77b13f9c47ef628d8ef44effb3791f25->enter($__internal_6ed7bbef2e04f14a22224cc6cbfe25ca77b13f9c47ef628d8ef44effb3791f25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::admin/base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <title>DevOOPS v2</title>
    <meta name=\"description\" content=\"description\">
    <meta name=\"author\" content=\"DevOOPS\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link href=\"/admin/plugins/bootstrap/bootstrap.css\" rel=\"stylesheet\">
    <link href=\"/admin/plugins/jquery-ui/jquery-ui.min.css\" rel=\"stylesheet\">
    <link href=\"http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css\" rel=\"stylesheet\">
    <link href='http://fonts.googleapis.com/css?family=Righteous' rel='stylesheet' type='text/css'>
    <link href=\"/admin/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\">
    <link href=\"/admin/plugins/fullcalendar/fullcalendar.css\" rel=\"stylesheet\">
    <link href=\"/admin/plugins/xcharts/xcharts.min.css\" rel=\"stylesheet\">
    <link href=\"/admin/plugins/select2/select2.css\" rel=\"stylesheet\">
    <link href=\"/admin/plugins/justified-gallery/justifiedGallery.css\" rel=\"stylesheet\">
    <link href=\"/admin/css/style_v2.css\" rel=\"stylesheet\">
    <link href=\"/admin/plugins/chartist/chartist.min.css\" rel=\"stylesheet\">
    <link href=\"/admin/plugins/chartist/chartist.min.css\" rel=\"stylesheet\">
    <link href=\"/admin/css/main.css\" rel=\"stylesheet\">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src=\"http://getbootstrap.com/docs-assets/js/html5shiv.js\"></script>
    <script src=\"http://getbootstrap.com/docs-assets/js/respond.min.js\"></script>
    <![endif]-->
</head>
<body>
<!--Start Header-->
<div id=\"screensaver\">
    <canvas id=\"canvas\"></canvas>
    <i class=\"fa fa-lock\" id=\"screen_unlock\"></i>
</div>
<div id=\"modalbox\">
    <div class=\"devoops-modal\">
        <div class=\"devoops-modal-header\">
            <div class=\"modal-header-name\">
                <span>Basic table</span>
            </div>
            <div class=\"box-icons\">
                <a class=\"close-link\">
                    <i class=\"fa fa-times\"></i>
                </a>
            </div>
        </div>
        <div class=\"devoops-modal-inner\">
        </div>
        <div class=\"devoops-modal-bottom\">
        </div>
    </div>
</div>
<header class=\"navbar\">
    ";
        // line 53
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("AppBundle:Admin/Index:navigation"));
        echo "
</header>
<!--End Header-->
<!--Start Container-->
<div id=\"main\" class=\"container-fluid\">
    <div class=\"row\">
        <div id=\"sidebar-left\" class=\"col-xs-2 col-sm-2\">
            <ul class=\"nav main-menu\">
                <li>
                    <a class=\"\" href=\"";
        // line 62
        echo $this->env->getExtension('routing')->getPath("admin_index_index");
        echo "\">
                        <i class=\"fa fa-dashboard\"></i>
                        <span class=\"hidden-xs\">Tableau de bord</span>
                    </a>
                </li>
                <li>
                    <a class=\"\" href=\"";
        // line 68
        echo $this->env->getExtension('routing')->getPath("admin_index_edit-yaml", array("ymlFile" => "parcours"));
        echo "\">
                        <i class=\"fa fa-university\"></i>
                        <span class=\"hidden-xs\">Parcours</span>
                    </a>
                </li>
                <li>
                    <a class=\"\" href=\"";
        // line 74
        echo $this->env->getExtension('routing')->getPath("admin_index_edit-yaml", array("ymlFile" => "competences"));
        echo "\">
                        <i class=\"fa fa-code\"></i>
                        <span class=\"hidden-xs\">Compétences</span>
                    </a>
                </li>
                <li>
                    <a class=\"\" href=\"";
        // line 80
        echo $this->env->getExtension('routing')->getPath("admin_index_edit-yaml", array("ymlFile" => "citations"));
        echo "\">
                        <i class=\"fa fa-comments\"></i>
                        <span class=\"hidden-xs\">Citations</span>
                    </a>
                </li>
                <li>
                    <a class=\"\" href=\"";
        // line 86
        echo $this->env->getExtension('routing')->getPath("admin_index_edit-yaml", array("ymlFile" => "realisations"));
        echo "\">
                        <i class=\"fa fa-calendar\"></i>
                        <span class=\"hidden-xs\">Réalisations</span>
                    </a>
                </li>
                <li>
                    <a class=\"\" href=\"";
        // line 92
        echo $this->env->getExtension('routing')->getPath("admin_index_message");
        echo "\">
                        <i class=\"fa fa-envelope\"></i>
                        <span class=\"hidden-xs\">Messages</span>
                    </a>
                </li>
            </ul>
        </div>
        <!--Start Content-->
        <div id=\"content\" class=\"row\">
                ";
        // line 101
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("AppBundle:Admin/Index:breadcrumb"));
        echo "
                ";
        // line 102
        $this->displayBlock('body', $context, $blocks);
        // line 104
        echo "        </div>
        <!--End Content-->
    </div>
</div>
<!--End Container-->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!--<script src=\"http://code.jquery.com/jquery.js\"></script>-->
<script src=\"/admin/plugins/jquery/jquery.min.js\"></script>
<script src=\"/admin/plugins/jquery-ui/jquery-ui.min.js\"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src=\"/admin/plugins/bootstrap/bootstrap.min.js\"></script>
<script src=\"/admin/plugins/justified-gallery/jquery.justifiedGallery.min.js\"></script>
<script src=\"/admin/plugins/tinymce/tinymce.min.js\"></script>
<script src=\"/admin/plugins/tinymce/jquery.tinymce.min.js\"></script>
<!-- All functions for this theme + document.ready processing -->
<script src=\"/admin/js/devoops.js\"></script>
";
        // line 120
        $this->displayBlock('js', $context, $blocks);
        // line 122
        echo "</body>
</html>
";
        
        $__internal_6ed7bbef2e04f14a22224cc6cbfe25ca77b13f9c47ef628d8ef44effb3791f25->leave($__internal_6ed7bbef2e04f14a22224cc6cbfe25ca77b13f9c47ef628d8ef44effb3791f25_prof);

    }

    // line 102
    public function block_body($context, array $blocks = array())
    {
        $__internal_18f208b5da1fdd1eea81a8315e24d0dcc5e4f2a383acd4d789c0eceedc10e6fa = $this->env->getExtension("native_profiler");
        $__internal_18f208b5da1fdd1eea81a8315e24d0dcc5e4f2a383acd4d789c0eceedc10e6fa->enter($__internal_18f208b5da1fdd1eea81a8315e24d0dcc5e4f2a383acd4d789c0eceedc10e6fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 103
        echo "                ";
        
        $__internal_18f208b5da1fdd1eea81a8315e24d0dcc5e4f2a383acd4d789c0eceedc10e6fa->leave($__internal_18f208b5da1fdd1eea81a8315e24d0dcc5e4f2a383acd4d789c0eceedc10e6fa_prof);

    }

    // line 120
    public function block_js($context, array $blocks = array())
    {
        $__internal_0812e8881b9b3175e0659c25b100352650e0870fa27b96a7f7dd0b32922b7df2 = $this->env->getExtension("native_profiler");
        $__internal_0812e8881b9b3175e0659c25b100352650e0870fa27b96a7f7dd0b32922b7df2->enter($__internal_0812e8881b9b3175e0659c25b100352650e0870fa27b96a7f7dd0b32922b7df2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        
        $__internal_0812e8881b9b3175e0659c25b100352650e0870fa27b96a7f7dd0b32922b7df2->leave($__internal_0812e8881b9b3175e0659c25b100352650e0870fa27b96a7f7dd0b32922b7df2_prof);

    }

    public function getTemplateName()
    {
        return "::admin/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 120,  188 => 103,  182 => 102,  173 => 122,  171 => 120,  153 => 104,  151 => 102,  147 => 101,  135 => 92,  126 => 86,  117 => 80,  108 => 74,  99 => 68,  90 => 62,  78 => 53,  24 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* <head>*/
/*     <meta charset="utf-8">*/
/*     <title>DevOOPS v2</title>*/
/*     <meta name="description" content="description">*/
/*     <meta name="author" content="DevOOPS">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*     <link href="/admin/plugins/bootstrap/bootstrap.css" rel="stylesheet">*/
/*     <link href="/admin/plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet">*/
/*     <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">*/
/*     <link href='http://fonts.googleapis.com/css?family=Righteous' rel='stylesheet' type='text/css'>*/
/*     <link href="/admin/plugins/fancybox/jquery.fancybox.css" rel="stylesheet">*/
/*     <link href="/admin/plugins/fullcalendar/fullcalendar.css" rel="stylesheet">*/
/*     <link href="/admin/plugins/xcharts/xcharts.min.css" rel="stylesheet">*/
/*     <link href="/admin/plugins/select2/select2.css" rel="stylesheet">*/
/*     <link href="/admin/plugins/justified-gallery/justifiedGallery.css" rel="stylesheet">*/
/*     <link href="/admin/css/style_v2.css" rel="stylesheet">*/
/*     <link href="/admin/plugins/chartist/chartist.min.css" rel="stylesheet">*/
/*     <link href="/admin/plugins/chartist/chartist.min.css" rel="stylesheet">*/
/*     <link href="/admin/css/main.css" rel="stylesheet">*/
/*     <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->*/
/*     <!--[if lt IE 9]>*/
/*     <script src="http://getbootstrap.com/docs-assets/js/html5shiv.js"></script>*/
/*     <script src="http://getbootstrap.com/docs-assets/js/respond.min.js"></script>*/
/*     <![endif]-->*/
/* </head>*/
/* <body>*/
/* <!--Start Header-->*/
/* <div id="screensaver">*/
/*     <canvas id="canvas"></canvas>*/
/*     <i class="fa fa-lock" id="screen_unlock"></i>*/
/* </div>*/
/* <div id="modalbox">*/
/*     <div class="devoops-modal">*/
/*         <div class="devoops-modal-header">*/
/*             <div class="modal-header-name">*/
/*                 <span>Basic table</span>*/
/*             </div>*/
/*             <div class="box-icons">*/
/*                 <a class="close-link">*/
/*                     <i class="fa fa-times"></i>*/
/*                 </a>*/
/*             </div>*/
/*         </div>*/
/*         <div class="devoops-modal-inner">*/
/*         </div>*/
/*         <div class="devoops-modal-bottom">*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* <header class="navbar">*/
/*     {{ render(controller('AppBundle:Admin/Index:navigation')) }}*/
/* </header>*/
/* <!--End Header-->*/
/* <!--Start Container-->*/
/* <div id="main" class="container-fluid">*/
/*     <div class="row">*/
/*         <div id="sidebar-left" class="col-xs-2 col-sm-2">*/
/*             <ul class="nav main-menu">*/
/*                 <li>*/
/*                     <a class="" href="{{ path('admin_index_index') }}">*/
/*                         <i class="fa fa-dashboard"></i>*/
/*                         <span class="hidden-xs">Tableau de bord</span>*/
/*                     </a>*/
/*                 </li>*/
/*                 <li>*/
/*                     <a class="" href="{{ path('admin_index_edit-yaml', {ymlFile: 'parcours'}) }}">*/
/*                         <i class="fa fa-university"></i>*/
/*                         <span class="hidden-xs">Parcours</span>*/
/*                     </a>*/
/*                 </li>*/
/*                 <li>*/
/*                     <a class="" href="{{ path('admin_index_edit-yaml', {ymlFile: 'competences'}) }}">*/
/*                         <i class="fa fa-code"></i>*/
/*                         <span class="hidden-xs">Compétences</span>*/
/*                     </a>*/
/*                 </li>*/
/*                 <li>*/
/*                     <a class="" href="{{ path('admin_index_edit-yaml', {ymlFile: 'citations'}) }}">*/
/*                         <i class="fa fa-comments"></i>*/
/*                         <span class="hidden-xs">Citations</span>*/
/*                     </a>*/
/*                 </li>*/
/*                 <li>*/
/*                     <a class="" href="{{ path('admin_index_edit-yaml', {ymlFile: 'realisations'}) }}">*/
/*                         <i class="fa fa-calendar"></i>*/
/*                         <span class="hidden-xs">Réalisations</span>*/
/*                     </a>*/
/*                 </li>*/
/*                 <li>*/
/*                     <a class="" href="{{ path('admin_index_message') }}">*/
/*                         <i class="fa fa-envelope"></i>*/
/*                         <span class="hidden-xs">Messages</span>*/
/*                     </a>*/
/*                 </li>*/
/*             </ul>*/
/*         </div>*/
/*         <!--Start Content-->*/
/*         <div id="content" class="row">*/
/*                 {{ render(controller('AppBundle:Admin/Index:breadcrumb')) }}*/
/*                 {% block body %}*/
/*                 {% endblock %}*/
/*         </div>*/
/*         <!--End Content-->*/
/*     </div>*/
/* </div>*/
/* <!--End Container-->*/
/* <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->*/
/* <!--<script src="http://code.jquery.com/jquery.js"></script>-->*/
/* <script src="/admin/plugins/jquery/jquery.min.js"></script>*/
/* <script src="/admin/plugins/jquery-ui/jquery-ui.min.js"></script>*/
/* <!-- Include all compiled plugins (below), or include individual files as needed -->*/
/* <script src="/admin/plugins/bootstrap/bootstrap.min.js"></script>*/
/* <script src="/admin/plugins/justified-gallery/jquery.justifiedGallery.min.js"></script>*/
/* <script src="/admin/plugins/tinymce/tinymce.min.js"></script>*/
/* <script src="/admin/plugins/tinymce/jquery.tinymce.min.js"></script>*/
/* <!-- All functions for this theme + document.ready processing -->*/
/* <script src="/admin/js/devoops.js"></script>*/
/* {% block js %}*/
/* {% endblock %}*/
/* </body>*/
/* </html>*/
/* */
