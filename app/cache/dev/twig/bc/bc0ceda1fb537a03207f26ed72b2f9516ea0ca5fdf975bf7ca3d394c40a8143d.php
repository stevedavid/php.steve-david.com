<?php

/* views/admin/message/voir.html.twig */
class __TwigTemplate_7d412c7972533ccdf399be302bf4ab9949c8fed899dc75ee99f67ef58446b93a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::admin/base.html.twig", "views/admin/message/voir.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::admin/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1e23e40a059d40a31ed1010c1802f04497d97f79f723c6316d6b5b970c9cb6cd = $this->env->getExtension("native_profiler");
        $__internal_1e23e40a059d40a31ed1010c1802f04497d97f79f723c6316d6b5b970c9cb6cd->enter($__internal_1e23e40a059d40a31ed1010c1802f04497d97f79f723c6316d6b5b970c9cb6cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "views/admin/message/voir.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1e23e40a059d40a31ed1010c1802f04497d97f79f723c6316d6b5b970c9cb6cd->leave($__internal_1e23e40a059d40a31ed1010c1802f04497d97f79f723c6316d6b5b970c9cb6cd_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_805771e3d63c0cc9067787ea7273d173c66db32a15545fc6c89cf0404154996a = $this->env->getExtension("native_profiler");
        $__internal_805771e3d63c0cc9067787ea7273d173c66db32a15545fc6c89cf0404154996a->enter($__internal_805771e3d63c0cc9067787ea7273d173c66db32a15545fc6c89cf0404154996a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $this->loadTemplate("admin/message/includes/menu.html.twig", "views/admin/message/voir.html.twig", 4)->display(array_merge($context, array("corbeille_count" => (isset($context["corbeille_count"]) ? $context["corbeille_count"] : null), "nouveaux_count" => (isset($context["nouveaux_count"]) ? $context["nouveaux_count"] : null), "messages_count" => (isset($context["messages_count"]) ? $context["messages_count"] : null))));
        // line 5
        echo "    <div class=\"col-md-9\">
        <div class=\"box box-primary\">
            <div class=\"box-header with-border\">
                <h3 class=\"box-title\">Voir l'email</h3>
                <div class=\"box-tools pull-right\">
                    <a href=\"#\" class=\"btn btn-box-tool\" data-toggle=\"tooltip\" title=\"Previous\"><i class=\"fa fa-chevron-left\"></i></a>
                    <a href=\"#\" class=\"btn btn-box-tool\" data-toggle=\"tooltip\" title=\"Next\"><i class=\"fa fa-chevron-right\"></i></a>
                </div>
            </div><!-- /.box-header -->
            <div class=\"box-body no-padding\">
                <div class=\"mailbox-read-info\">
                    <h3>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["message"]) ? $context["message"] : null), "sujet", array()), "html", null, true);
        echo "</h3>
                    <h5>De: ";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["message"]) ? $context["message"] : null), "email", array()), "html", null, true);
        echo " <span class=\"mailbox-read-time pull-right\">";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["message"]) ? $context["message"] : null), "date", array()), "d/m/Y à H:i:s"), "html", null, true);
        echo "</span></h5>
                </div><!-- /.mailbox-read-info -->
                <div class=\"mailbox-controls with-border text-center\">
                    <a class=\"btn btn-default btn-sm\" data-toggle=\"tooltip\" title=\"";
        // line 20
        if ($this->getAttribute((isset($context["message"]) ? $context["message"] : null), "corbeille", array())) {
            echo "Restaurer";
        } else {
            echo "Supprimer";
        }
        echo "\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_message_supprimer", array("id" => (isset($context["id"]) ? $context["id"] : null))), "html", null, true);
        echo "\">
                        ";
        // line 21
        if ($this->getAttribute((isset($context["message"]) ? $context["message"] : null), "corbeille", array())) {
            // line 22
            echo "                            <i class=\"fa fa-ban text-red\"></i>
                        ";
        } else {
            // line 24
            echo "                            <i class=\"fa fa-trash text-red\"></i>
                        ";
        }
        // line 26
        echo "                    </a>
                </div><!-- /.mailbox-controls -->
                <div class=\"mailbox-read-message\">
                    <p>";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["message"]) ? $context["message"] : null), "message", array()), "html", null, true);
        echo "</p>
                </div><!-- /.mailbox-read-message -->
            </div><!-- /.box-body -->
            <div class=\"box-footer\">
            </div><!-- /.box-footer -->
            <div class=\"box-footer\">
                <a class=\"btn btn-default\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_message_supprimer", array("id" => (isset($context["id"]) ? $context["id"] : null))), "html", null, true);
        echo "\">
                    ";
        // line 36
        if ($this->getAttribute((isset($context["message"]) ? $context["message"] : null), "corbeille", array())) {
            // line 37
            echo "                        <i class=\"fa fa-ban\"></i> Restaurer
                    ";
        } else {
            // line 39
            echo "                        <i class=\"fa fa-trash-o\"></i> Supprimer
                    ";
        }
        // line 41
        echo "                </a>
            </div><!-- /.box-footer -->
        </div><!-- /. box -->
    </div><!-- /.col -->
";
        
        $__internal_805771e3d63c0cc9067787ea7273d173c66db32a15545fc6c89cf0404154996a->leave($__internal_805771e3d63c0cc9067787ea7273d173c66db32a15545fc6c89cf0404154996a_prof);

    }

    public function getTemplateName()
    {
        return "views/admin/message/voir.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 41,  112 => 39,  108 => 37,  106 => 36,  102 => 35,  93 => 29,  88 => 26,  84 => 24,  80 => 22,  78 => 21,  68 => 20,  60 => 17,  56 => 16,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '::admin/base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     {% include 'admin/message/includes/menu.html.twig' with {'corbeille_count': corbeille_count, 'nouveaux_count': nouveaux_count, 'messages_count': messages_count} %}*/
/*     <div class="col-md-9">*/
/*         <div class="box box-primary">*/
/*             <div class="box-header with-border">*/
/*                 <h3 class="box-title">Voir l'email</h3>*/
/*                 <div class="box-tools pull-right">*/
/*                     <a href="#" class="btn btn-box-tool" data-toggle="tooltip" title="Previous"><i class="fa fa-chevron-left"></i></a>*/
/*                     <a href="#" class="btn btn-box-tool" data-toggle="tooltip" title="Next"><i class="fa fa-chevron-right"></i></a>*/
/*                 </div>*/
/*             </div><!-- /.box-header -->*/
/*             <div class="box-body no-padding">*/
/*                 <div class="mailbox-read-info">*/
/*                     <h3>{{ message.sujet }}</h3>*/
/*                     <h5>De: {{ message.email }} <span class="mailbox-read-time pull-right">{{ message.date|date('d/m/Y à H:i:s') }}</span></h5>*/
/*                 </div><!-- /.mailbox-read-info -->*/
/*                 <div class="mailbox-controls with-border text-center">*/
/*                     <a class="btn btn-default btn-sm" data-toggle="tooltip" title="{% if message.corbeille %}Restaurer{% else %}Supprimer{% endif %}" href="{{ path('admin_message_supprimer', {id: id}) }}">*/
/*                         {% if message.corbeille %}*/
/*                             <i class="fa fa-ban text-red"></i>*/
/*                         {% else %}*/
/*                             <i class="fa fa-trash text-red"></i>*/
/*                         {% endif %}*/
/*                     </a>*/
/*                 </div><!-- /.mailbox-controls -->*/
/*                 <div class="mailbox-read-message">*/
/*                     <p>{{ message.message }}</p>*/
/*                 </div><!-- /.mailbox-read-message -->*/
/*             </div><!-- /.box-body -->*/
/*             <div class="box-footer">*/
/*             </div><!-- /.box-footer -->*/
/*             <div class="box-footer">*/
/*                 <a class="btn btn-default" href="{{ path('admin_message_supprimer', {id: id}) }}">*/
/*                     {% if message.corbeille %}*/
/*                         <i class="fa fa-ban"></i> Restaurer*/
/*                     {% else %}*/
/*                         <i class="fa fa-trash-o"></i> Supprimer*/
/*                     {% endif %}*/
/*                 </a>*/
/*             </div><!-- /.box-footer -->*/
/*         </div><!-- /. box -->*/
/*     </div><!-- /.col -->*/
/* {% endblock %}*/
