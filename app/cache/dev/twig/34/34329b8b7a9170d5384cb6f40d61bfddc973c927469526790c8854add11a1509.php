<?php

/* views/admin/message/index.html.twig */
class __TwigTemplate_6f33ecb0d0a93a56327d0590ddc039476465b29ddf9c54da77f86ab2f1d949d6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::admin/base.html.twig", "views/admin/message/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'js' => array($this, 'block_js'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::admin/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_863b969e76dea579f1470b242e19d824627fafe17458b65f7defff05637eb193 = $this->env->getExtension("native_profiler");
        $__internal_863b969e76dea579f1470b242e19d824627fafe17458b65f7defff05637eb193->enter($__internal_863b969e76dea579f1470b242e19d824627fafe17458b65f7defff05637eb193_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "views/admin/message/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_863b969e76dea579f1470b242e19d824627fafe17458b65f7defff05637eb193->leave($__internal_863b969e76dea579f1470b242e19d824627fafe17458b65f7defff05637eb193_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8235ea7b179d4b007bd103c7dde2270f23ae223111b457af2ff553f7c1cbfb55 = $this->env->getExtension("native_profiler");
        $__internal_8235ea7b179d4b007bd103c7dde2270f23ae223111b457af2ff553f7c1cbfb55->enter($__internal_8235ea7b179d4b007bd103c7dde2270f23ae223111b457af2ff553f7c1cbfb55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $this->loadTemplate("admin/message/includes/menu.html.twig", "views/admin/message/index.html.twig", 4)->display(array_merge($context, array("corbeille_count" => (isset($context["corbeille_count"]) ? $context["corbeille_count"] : null), "nouveaux_count" => (isset($context["nouveaux_count"]) ? $context["nouveaux_count"] : null), "messages_count" => (isset($context["messages_count"]) ? $context["messages_count"] : null))));
        // line 5
        echo "    <div class=\"col-md-9\">
        <div class=\"box box-primary\">
            <div class=\"box-header with-border\">
                <h3 class=\"box-title\">";
        // line 8
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, (isset($context["folder"]) ? $context["folder"] : null)), "html", null, true);
        echo "</h3>
                <div class=\"box-tools pull-right\">
                    <div class=\"has-feedback\">
                        <input type=\"text\" class=\"form-control input-sm\" placeholder=\"Search Mail\">
                        <span class=\"glyphicon glyphicon-search form-control-feedback\"></span>
                    </div>
                </div><!-- /.box-tools -->
            </div><!-- /.box-header -->
            <div class=\"box-body no-padding\">
                <div class=\"table-responsive mailbox-messages\">
                    <table class=\"table table-hover table-striped\">
                        <tbody>
                            ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["messages"]) ? $context["messages"] : null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["key"] => $context["message"]) {
            // line 21
            echo "                                <tr class=\"";
            if (($this->getAttribute($context["message"], "lu", array()) == false)) {
                echo "message-unread";
            }
            echo "\">
                                    <td class=\"mailbox-star\">
                                        <a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_message_supprimer", array("id" => $context["key"])), "html", null, true);
            echo "\">
                                            ";
            // line 24
            if ($this->getAttribute($context["message"], "corbeille", array())) {
                // line 25
                echo "                                                <i class=\"fa fa-ban text-red\"></i>
                                            ";
            } else {
                // line 27
                echo "                                                <i class=\"fa fa-trash text-red\"></i>
                                            ";
            }
            // line 29
            echo "                                        </a>
                                    </td>
                                    <td class=\"mailbox-name\"><a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_message_voir", array("id" => $context["key"])), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "name", array()), "html", null, true);
            echo "</a></td>
                                    <td class=\"mailbox-subject\"><u>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "sujet", array()), "html", null, true);
            echo "</u> - ";
            echo twig_escape_filter($this->env, (twig_slice($this->env, $this->getAttribute($context["message"], "message", array()), 0, 10) . "..."), "html", null, true);
            echo "</td>
                                    <td class=\"mailbox-date\">";
            // line 33
            echo $this->env->getExtension('time')->diff($this->getAttribute($context["message"], "date", array()));
            echo "</td>
                                </tr>
                            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 36
            echo "                                <tr>
                                    <td colspan=\"4\" class=\"text-center\">
                                        Aucun message dans ce dossier
                                    </td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "                        </tbody>
                    </table><!-- /.table -->
                </div><!-- /.mail-box-messages -->
            </div><!-- /.box-body -->
            <div class=\"box-footer text-center\">
                ";
        // line 47
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["messages"]) ? $context["messages"] : null)), "html", null, true);
        echo " message(s)
            </div>
        </div><!-- /. box -->
    </div><!-- /.col -->
";
        
        $__internal_8235ea7b179d4b007bd103c7dde2270f23ae223111b457af2ff553f7c1cbfb55->leave($__internal_8235ea7b179d4b007bd103c7dde2270f23ae223111b457af2ff553f7c1cbfb55_prof);

    }

    // line 53
    public function block_js($context, array $blocks = array())
    {
        $__internal_329b14f4a70f2d5b99f0577bf1017299f15f92f255ddbeaffdc60bf61a6e2e3c = $this->env->getExtension("native_profiler");
        $__internal_329b14f4a70f2d5b99f0577bf1017299f15f92f255ddbeaffdc60bf61a6e2e3c->enter($__internal_329b14f4a70f2d5b99f0577bf1017299f15f92f255ddbeaffdc60bf61a6e2e3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        
        $__internal_329b14f4a70f2d5b99f0577bf1017299f15f92f255ddbeaffdc60bf61a6e2e3c->leave($__internal_329b14f4a70f2d5b99f0577bf1017299f15f92f255ddbeaffdc60bf61a6e2e3c_prof);

    }

    public function getTemplateName()
    {
        return "views/admin/message/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 53,  133 => 47,  126 => 42,  115 => 36,  107 => 33,  101 => 32,  95 => 31,  91 => 29,  87 => 27,  83 => 25,  81 => 24,  77 => 23,  69 => 21,  64 => 20,  49 => 8,  44 => 5,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends '::admin/base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     {% include 'admin/message/includes/menu.html.twig' with {'corbeille_count': corbeille_count, 'nouveaux_count': nouveaux_count, 'messages_count': messages_count} %}*/
/*     <div class="col-md-9">*/
/*         <div class="box box-primary">*/
/*             <div class="box-header with-border">*/
/*                 <h3 class="box-title">{{ folder|capitalize }}</h3>*/
/*                 <div class="box-tools pull-right">*/
/*                     <div class="has-feedback">*/
/*                         <input type="text" class="form-control input-sm" placeholder="Search Mail">*/
/*                         <span class="glyphicon glyphicon-search form-control-feedback"></span>*/
/*                     </div>*/
/*                 </div><!-- /.box-tools -->*/
/*             </div><!-- /.box-header -->*/
/*             <div class="box-body no-padding">*/
/*                 <div class="table-responsive mailbox-messages">*/
/*                     <table class="table table-hover table-striped">*/
/*                         <tbody>*/
/*                             {% for key, message in messages %}*/
/*                                 <tr class="{% if message.lu == false %}message-unread{% endif %}">*/
/*                                     <td class="mailbox-star">*/
/*                                         <a href="{{ path('admin_message_supprimer', {id: key}) }}">*/
/*                                             {% if message.corbeille %}*/
/*                                                 <i class="fa fa-ban text-red"></i>*/
/*                                             {% else %}*/
/*                                                 <i class="fa fa-trash text-red"></i>*/
/*                                             {% endif %}*/
/*                                         </a>*/
/*                                     </td>*/
/*                                     <td class="mailbox-name"><a href="{{ path('admin_message_voir', {id: key}) }}">{{ message.name }}</a></td>*/
/*                                     <td class="mailbox-subject"><u>{{ message.sujet }}</u> - {{ message.message|slice(0, 10) ~ '...' }}</td>*/
/*                                     <td class="mailbox-date">{{ message.date|ago }}</td>*/
/*                                 </tr>*/
/*                             {% else %}*/
/*                                 <tr>*/
/*                                     <td colspan="4" class="text-center">*/
/*                                         Aucun message dans ce dossier*/
/*                                     </td>*/
/*                                 </tr>*/
/*                             {% endfor %}*/
/*                         </tbody>*/
/*                     </table><!-- /.table -->*/
/*                 </div><!-- /.mail-box-messages -->*/
/*             </div><!-- /.box-body -->*/
/*             <div class="box-footer text-center">*/
/*                 {{ messages|length }} message(s)*/
/*             </div>*/
/*         </div><!-- /. box -->*/
/*     </div><!-- /.col -->*/
/* {% endblock %}*/
/* */
/* {% block js %}*/
/* {% endblock %}*/
