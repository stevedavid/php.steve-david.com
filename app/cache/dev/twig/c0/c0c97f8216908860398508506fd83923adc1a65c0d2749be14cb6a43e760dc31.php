<?php

/* views/admin/partials/menu.html.twig */
class __TwigTemplate_bb366b7f603c1f3ea8ac657daa7684e277837865157c99c80c3614d68b6d3100 extends Twig_Template
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
        $__internal_3b32fa4ee6a8dada03d386ec9ee0d25c860324b1b025b97afb9de823e8ea9e0f = $this->env->getExtension("native_profiler");
        $__internal_3b32fa4ee6a8dada03d386ec9ee0d25c860324b1b025b97afb9de823e8ea9e0f->enter($__internal_3b32fa4ee6a8dada03d386ec9ee0d25c860324b1b025b97afb9de823e8ea9e0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "views/admin/partials/menu.html.twig"));

        // line 1
        echo "
<!-- sidebar: style can be found in sidebar.less -->
<section class=\"sidebar\">
    <!-- Sidebar user panel -->
    <div class=\"user-panel\">
        <div class=\"pull-left image\">
            <img src=\"/admin/dist/img/avatar.jpg\" class=\"img-circle\" alt=\"User Image\">
        </div>
        <div class=\"pull-left info\">
            <p>Alexander Pierce</p>
            <a href=\"#\"><i class=\"fa fa-circle text-success\"></i> Online</a>
        </div>
    </div>
    <!-- search form -->
    <form action=\"#\" method=\"get\" class=\"sidebar-form\">
        <div class=\"input-group\">
            <input type=\"text\" name=\"q\" class=\"form-control\" placeholder=\"Search...\">
              <span class=\"input-group-btn\">
                <button type=\"submit\" name=\"search\" id=\"search-btn\" class=\"btn btn-flat\"><i class=\"fa fa-search\"></i></button>
              </span>
        </div>
    </form>
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class=\"sidebar-menu\">
        <li class=\"header\">NAVIGATION PRINCIPALE</li>
        <li>
            <a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("admin_index_index");
        echo "\">
                <i class=\"fa fa-dashboard\"></i> <span>Tableau de bord</span>
            </a>
        </li>
        <li>
            <a href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("admin_yaml_edit", array("ymlFile" => "parcours"));
        echo "\">
                <i class=\"fa fa-university\"></i> <span>Parcours</span>
            </a>
        </li>
        <li>
            <a href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("admin_yaml_edit", array("ymlFile" => "competences"));
        echo "\">
                <i class=\"fa fa-code\"></i> <span>Compétences</span>
            </a>
        </li>
        <li>
            <a href=\"";
        // line 43
        echo $this->env->getExtension('routing')->getPath("admin_yaml_edit", array("ymlFile" => "citations"));
        echo "\">
                <i class=\"fa fa-comments\"></i> <span>Citations</span>
            </a>
        </li>
        <li>
            <a href=\"";
        // line 48
        echo $this->env->getExtension('routing')->getPath("admin_yaml_edit", array("ymlFile" => "realisations"));
        echo "\">
                <i class=\"fa fa-calendar\"></i> <span>Réalisations</span>
            </a>
        </li>
        <li class=\"header\">LABELS</li>
        <li><a href=\"";
        // line 53
        echo $this->env->getExtension('routing')->getPath("admin_message_index");
        echo "\"><i class=\"fa fa-circle-o text-green\"></i> <span>Messages</span></a></li>
        <li><a href=\"";
        // line 54
        echo $this->env->getExtension('routing')->getPath("front_index");
        echo "\"><i class=\"fa fa-circle-o text-yellow\"></i> <span>Retour au site</span></a></li>
        <li><a href=\"#\"><i class=\"fa fa-circle-o text-red\"></i> <span>Déconnexion</span></a></li>
    </ul>
</section>";
        
        $__internal_3b32fa4ee6a8dada03d386ec9ee0d25c860324b1b025b97afb9de823e8ea9e0f->leave($__internal_3b32fa4ee6a8dada03d386ec9ee0d25c860324b1b025b97afb9de823e8ea9e0f_prof);

    }

    public function getTemplateName()
    {
        return "views/admin/partials/menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 54,  91 => 53,  83 => 48,  75 => 43,  67 => 38,  59 => 33,  51 => 28,  22 => 1,);
    }
}
/* */
/* <!-- sidebar: style can be found in sidebar.less -->*/
/* <section class="sidebar">*/
/*     <!-- Sidebar user panel -->*/
/*     <div class="user-panel">*/
/*         <div class="pull-left image">*/
/*             <img src="/admin/dist/img/avatar.jpg" class="img-circle" alt="User Image">*/
/*         </div>*/
/*         <div class="pull-left info">*/
/*             <p>Alexander Pierce</p>*/
/*             <a href="#"><i class="fa fa-circle text-success"></i> Online</a>*/
/*         </div>*/
/*     </div>*/
/*     <!-- search form -->*/
/*     <form action="#" method="get" class="sidebar-form">*/
/*         <div class="input-group">*/
/*             <input type="text" name="q" class="form-control" placeholder="Search...">*/
/*               <span class="input-group-btn">*/
/*                 <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>*/
/*               </span>*/
/*         </div>*/
/*     </form>*/
/*     <!-- /.search form -->*/
/*     <!-- sidebar menu: : style can be found in sidebar.less -->*/
/*     <ul class="sidebar-menu">*/
/*         <li class="header">NAVIGATION PRINCIPALE</li>*/
/*         <li>*/
/*             <a href="{{ path('admin_index_index') }}">*/
/*                 <i class="fa fa-dashboard"></i> <span>Tableau de bord</span>*/
/*             </a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('admin_yaml_edit', {ymlFile: 'parcours'}) }}">*/
/*                 <i class="fa fa-university"></i> <span>Parcours</span>*/
/*             </a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('admin_yaml_edit', {ymlFile: 'competences'}) }}">*/
/*                 <i class="fa fa-code"></i> <span>Compétences</span>*/
/*             </a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('admin_yaml_edit', {ymlFile: 'citations'}) }}">*/
/*                 <i class="fa fa-comments"></i> <span>Citations</span>*/
/*             </a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('admin_yaml_edit', {ymlFile: 'realisations'}) }}">*/
/*                 <i class="fa fa-calendar"></i> <span>Réalisations</span>*/
/*             </a>*/
/*         </li>*/
/*         <li class="header">LABELS</li>*/
/*         <li><a href="{{ path('admin_message_index') }}"><i class="fa fa-circle-o text-green"></i> <span>Messages</span></a></li>*/
/*         <li><a href="{{ path('front_index') }}"><i class="fa fa-circle-o text-yellow"></i> <span>Retour au site</span></a></li>*/
/*         <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Déconnexion</span></a></li>*/
/*     </ul>*/
/* </section>*/
