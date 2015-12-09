<?php

/* views/admin/partials/navigation.html.twig */
class __TwigTemplate_87609e754abe91f25f16bebb7ed9a30c45175d0faf2e7d11fdc2333179a181ab extends Twig_Template
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
        $__internal_36e54446a861b058ec08c45fd6ce95b6df7eb0e4ed3cf308431ec55b64797635 = $this->env->getExtension("native_profiler");
        $__internal_36e54446a861b058ec08c45fd6ce95b6df7eb0e4ed3cf308431ec55b64797635->enter($__internal_36e54446a861b058ec08c45fd6ce95b6df7eb0e4ed3cf308431ec55b64797635_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "views/admin/partials/navigation.html.twig"));

        // line 1
        echo "<div class=\"container-fluid expanded-panel\">
    <div class=\"row\">
        <div id=\"logo\" class=\"col-xs-12 col-sm-2\">
            <a href=\"";
        // line 4
        echo $this->env->getExtension('routing')->getPath("admin_index_index");
        echo "\">Administration</a>
        </div>
        <div id=\"top-panel\" class=\"col-xs-12 col-sm-10\">
            <div class=\"row\">
                <div class=\"col-xs-8 col-sm-8\">
                    <div id=\"search\">
                        <input type=\"text\" placeholder=\"search\"/>
                        <i class=\"fa fa-search\"></i>
                    </div>
                </div>
                <div class=\"col-xs-4 col-sm-4 top-panel-right\">
                    <ul class=\"nav navbar-nav pull-right panel-menu\">
                        <li class=\"hidden-xs\">
                            <a href=\"index.html\" class=\"modal-link\">
                                <i class=\"fa fa-bell\"></i>
                                <span class=\"badge\">7</span>
                            </a>
                        </li>
                        <li class=\"hidden-xs\">
                            <a class=\"ajax-link\" href=\"ajax/calendar.html\">
                                <i class=\"fa fa-calendar\"></i>
                                <span class=\"badge\">7</span>
                            </a>
                        </li>
                        <li class=\"hidden-xs\">
                            <a href=\"ajax/page_messages.html\" class=\"ajax-link\">
                                <i class=\"fa fa-envelope\"></i>
                                <span class=\"badge\">7</span>
                            </a>
                        </li>
                        <li class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle account\" data-toggle=\"dropdown\">
                                <div class=\"avatar\">
                                    <img src=\"/admin/img/avatar.jpg\" class=\"img-circle\" alt=\"avatar\" />
                                </div>
                                <i class=\"fa fa-angle-down pull-right\"></i>
                                <div class=\"user-mini pull-right\">
                                    <span class=\"welcome\">Bienvenue,</span>
                                    <span>Steve David</span>
                                </div>
                            </a>
                            <ul class=\"dropdown-menu\">
                                <li>
                                    <a href=\"#\">
                                        <i class=\"fa fa-user\"></i>
                                        <span>Profile</span>
                                    </a>
                                </li>
                                <li>
                                    <a href=\"ajax/page_messages.html\" class=\"ajax-link\">
                                        <i class=\"fa fa-envelope\"></i>
                                        <span>Messages</span>
                                    </a>
                                </li>
                                <li>
                                    <a href=\"ajax/gallery_simple.html\" class=\"ajax-link\">
                                        <i class=\"fa fa-picture-o\"></i>
                                        <span>Albums</span>
                                    </a>
                                </li>
                                <li>
                                    <a href=\"ajax/calendar.html\" class=\"ajax-link\">
                                        <i class=\"fa fa-tasks\"></i>
                                        <span>Tasks</span>
                                    </a>
                                </li>
                                <li>
                                    <a href=\"#\">
                                        <i class=\"fa fa-cog\"></i>
                                        <span>Settings</span>
                                    </a>
                                </li>
                                <li>
                                    <a href=\"#\">
                                        <i class=\"fa fa-power-off\"></i>
                                        <span>Logout</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>";
        
        $__internal_36e54446a861b058ec08c45fd6ce95b6df7eb0e4ed3cf308431ec55b64797635->leave($__internal_36e54446a861b058ec08c45fd6ce95b6df7eb0e4ed3cf308431ec55b64797635_prof);

    }

    public function getTemplateName()
    {
        return "views/admin/partials/navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* <div class="container-fluid expanded-panel">*/
/*     <div class="row">*/
/*         <div id="logo" class="col-xs-12 col-sm-2">*/
/*             <a href="{{ path('admin_index_index') }}">Administration</a>*/
/*         </div>*/
/*         <div id="top-panel" class="col-xs-12 col-sm-10">*/
/*             <div class="row">*/
/*                 <div class="col-xs-8 col-sm-8">*/
/*                     <div id="search">*/
/*                         <input type="text" placeholder="search"/>*/
/*                         <i class="fa fa-search"></i>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="col-xs-4 col-sm-4 top-panel-right">*/
/*                     <ul class="nav navbar-nav pull-right panel-menu">*/
/*                         <li class="hidden-xs">*/
/*                             <a href="index.html" class="modal-link">*/
/*                                 <i class="fa fa-bell"></i>*/
/*                                 <span class="badge">7</span>*/
/*                             </a>*/
/*                         </li>*/
/*                         <li class="hidden-xs">*/
/*                             <a class="ajax-link" href="ajax/calendar.html">*/
/*                                 <i class="fa fa-calendar"></i>*/
/*                                 <span class="badge">7</span>*/
/*                             </a>*/
/*                         </li>*/
/*                         <li class="hidden-xs">*/
/*                             <a href="ajax/page_messages.html" class="ajax-link">*/
/*                                 <i class="fa fa-envelope"></i>*/
/*                                 <span class="badge">7</span>*/
/*                             </a>*/
/*                         </li>*/
/*                         <li class="dropdown">*/
/*                             <a href="#" class="dropdown-toggle account" data-toggle="dropdown">*/
/*                                 <div class="avatar">*/
/*                                     <img src="/admin/img/avatar.jpg" class="img-circle" alt="avatar" />*/
/*                                 </div>*/
/*                                 <i class="fa fa-angle-down pull-right"></i>*/
/*                                 <div class="user-mini pull-right">*/
/*                                     <span class="welcome">Bienvenue,</span>*/
/*                                     <span>Steve David</span>*/
/*                                 </div>*/
/*                             </a>*/
/*                             <ul class="dropdown-menu">*/
/*                                 <li>*/
/*                                     <a href="#">*/
/*                                         <i class="fa fa-user"></i>*/
/*                                         <span>Profile</span>*/
/*                                     </a>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <a href="ajax/page_messages.html" class="ajax-link">*/
/*                                         <i class="fa fa-envelope"></i>*/
/*                                         <span>Messages</span>*/
/*                                     </a>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <a href="ajax/gallery_simple.html" class="ajax-link">*/
/*                                         <i class="fa fa-picture-o"></i>*/
/*                                         <span>Albums</span>*/
/*                                     </a>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <a href="ajax/calendar.html" class="ajax-link">*/
/*                                         <i class="fa fa-tasks"></i>*/
/*                                         <span>Tasks</span>*/
/*                                     </a>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <a href="#">*/
/*                                         <i class="fa fa-cog"></i>*/
/*                                         <span>Settings</span>*/
/*                                     </a>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <a href="#">*/
/*                                         <i class="fa fa-power-off"></i>*/
/*                                         <span>Logout</span>*/
/*                                     </a>*/
/*                                 </li>*/
/*                             </ul>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
