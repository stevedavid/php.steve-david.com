<?php

/* admin/message/includes/menu.html.twig */
class __TwigTemplate_e41cf9064a19c14b54f600800fcf639fed50c2c002fa0ffa313960ba00920f8a extends Twig_Template
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
        $__internal_df3ef1f346a351bb8916d73e590aadd8a733d7790f14f513952056f62959bf48 = $this->env->getExtension("native_profiler");
        $__internal_df3ef1f346a351bb8916d73e590aadd8a733d7790f14f513952056f62959bf48->enter($__internal_df3ef1f346a351bb8916d73e590aadd8a733d7790f14f513952056f62959bf48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/message/includes/menu.html.twig"));

        // line 1
        echo "<div class=\"col-md-3\">
    <div class=\"box box-solid\">
        <div class=\"box-header with-border\">
            <h3 class=\"box-title\">Dossiers</h3>
            <div class=\"box-tools\">
                <button class=\"btn btn-box-tool\" data-widget=\"collapse\"><i class=\"fa fa-minus\"></i></button>
            </div>
        </div>
        <div class=\"box-body no-padding\">
            <ul class=\"nav nav-pills nav-stacked\">
                <li class=\"";
        // line 11
        if (((isset($context["folder"]) ? $context["folder"] : null) == "nouveaux")) {
            echo "active";
        }
        echo "\">
                    <a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("admin_message_index", array("folderName" => "nouveaux"));
        echo "\">
                        <i class=\"fa fa-envelope\"></i>
                        Nouveaux
                        <span class=\"label label-primary pull-right\">";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["nouveaux_count"]) ? $context["nouveaux_count"] : null), "html", null, true);
        echo "</span>
                    </a>
                </li>
                <li class=\"";
        // line 18
        if (((isset($context["folder"]) ? $context["folder"] : null) == "tous")) {
            echo "active";
        }
        echo "\">
                    <a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("admin_message_index");
        echo "\">
                        <i class=\"fa fa-envelope-o\"></i>
                        Tous
                        <span class=\"label label-primary pull-right\">";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["messages_count"]) ? $context["messages_count"] : null), "html", null, true);
        echo "</span>
                    </a>
                </li>
                <li class=\"";
        // line 25
        if (((isset($context["folder"]) ? $context["folder"] : null) == "corbeille")) {
            echo "active";
        }
        echo "\">
                    <a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("admin_message_index", array("folderName" => "corbeille"));
        echo "\">
                        <i class=\"fa fa-trash-o\"></i>
                        Corbeille
                        <span class=\"label label-primary pull-right\">";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["corbeille_count"]) ? $context["corbeille_count"] : null), "html", null, true);
        echo "</span>
                    </a>
                </li>
            </ul>
        </div><!-- /.box-body -->
    </div><!-- /. box -->
</div><!-- /.col -->";
        
        $__internal_df3ef1f346a351bb8916d73e590aadd8a733d7790f14f513952056f62959bf48->leave($__internal_df3ef1f346a351bb8916d73e590aadd8a733d7790f14f513952056f62959bf48_prof);

    }

    public function getTemplateName()
    {
        return "admin/message/includes/menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 29,  76 => 26,  70 => 25,  64 => 22,  58 => 19,  52 => 18,  46 => 15,  40 => 12,  34 => 11,  22 => 1,);
    }
}
/* <div class="col-md-3">*/
/*     <div class="box box-solid">*/
/*         <div class="box-header with-border">*/
/*             <h3 class="box-title">Dossiers</h3>*/
/*             <div class="box-tools">*/
/*                 <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>*/
/*             </div>*/
/*         </div>*/
/*         <div class="box-body no-padding">*/
/*             <ul class="nav nav-pills nav-stacked">*/
/*                 <li class="{% if folder == 'nouveaux' %}active{% endif %}">*/
/*                     <a href="{{ path('admin_message_index', {folderName: 'nouveaux'}) }}">*/
/*                         <i class="fa fa-envelope"></i>*/
/*                         Nouveaux*/
/*                         <span class="label label-primary pull-right">{{ nouveaux_count }}</span>*/
/*                     </a>*/
/*                 </li>*/
/*                 <li class="{% if folder == 'tous' %}active{% endif %}">*/
/*                     <a href="{{ path('admin_message_index') }}">*/
/*                         <i class="fa fa-envelope-o"></i>*/
/*                         Tous*/
/*                         <span class="label label-primary pull-right">{{ messages_count }}</span>*/
/*                     </a>*/
/*                 </li>*/
/*                 <li class="{% if folder == 'corbeille' %}active{% endif %}">*/
/*                     <a href="{{ path('admin_message_index', {folderName: 'corbeille'}) }}">*/
/*                         <i class="fa fa-trash-o"></i>*/
/*                         Corbeille*/
/*                         <span class="label label-primary pull-right">{{ corbeille_count }}</span>*/
/*                     </a>*/
/*                 </li>*/
/*             </ul>*/
/*         </div><!-- /.box-body -->*/
/*     </div><!-- /. box -->*/
/* </div><!-- /.col -->*/
