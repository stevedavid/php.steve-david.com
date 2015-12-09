<?php

/* views/admin/index/message.html.twig */
class __TwigTemplate_2f1adc85158b728845c39476d5c32e03b1174c3e6b4e552f2a432661c60545e8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::admin/base.html.twig", "views/admin/index/message.html.twig", 1);
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
        $__internal_3ff9912389fef59c81b7fb6f47fb0dab30abef360cb2e804b3beaf65174f24b7 = $this->env->getExtension("native_profiler");
        $__internal_3ff9912389fef59c81b7fb6f47fb0dab30abef360cb2e804b3beaf65174f24b7->enter($__internal_3ff9912389fef59c81b7fb6f47fb0dab30abef360cb2e804b3beaf65174f24b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "views/admin/index/message.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3ff9912389fef59c81b7fb6f47fb0dab30abef360cb2e804b3beaf65174f24b7->leave($__internal_3ff9912389fef59c81b7fb6f47fb0dab30abef360cb2e804b3beaf65174f24b7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_20f03de6e78673fe88605593f4fadf148b1c24220f0c9fd4424f15eeb5074e19 = $this->env->getExtension("native_profiler");
        $__internal_20f03de6e78673fe88605593f4fadf148b1c24220f0c9fd4424f15eeb5074e19->enter($__internal_20f03de6e78673fe88605593f4fadf148b1c24220f0c9fd4424f15eeb5074e19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
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
                <li class=\"active\"><a href=\"#\"><i class=\"fa fa-envelope\"></i> Non-lus <span class=\"label label-primary pull-right\">12</span></a></li>
                <li><a href=\"#\"><i class=\"fa fa-envelope-o\"></i> Tous</a></li>
                <li><a href=\"#\"><i class=\"fa fa-trash-o\"></i> Corbeille</a></li>
            </ul>
        </div><!-- /.box-body -->
    </div><!-- /. box -->
</div><!-- /.col -->
<div class=\"col-md-9\">
    <div class=\"box box-primary\">
        <div class=\"box-header with-border\">
            <h3 class=\"box-title\">Inbox</h3>
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
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["messages"]) ? $context["messages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 37
            echo "                            <tr>
                                <td class=\"mailbox-star\"><a href=\"#\"><i class=\"fa fa-trash text-red\"></i></a></td>
                                <td class=\"mailbox-name\"><a href=\"read-mail.html\">";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "name", array()), "html", null, true);
            echo "</a></td>
                                <td class=\"mailbox-subject\"><b>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "sujet", array()), "html", null, true);
            echo "</b> - ";
            echo twig_escape_filter($this->env, (twig_slice($this->env, $this->getAttribute($context["message"], "message", array()), 0, 10) . "..."), "html", null, true);
            echo "</td>
                                <td class=\"mailbox-date\">";
            // line 41
            echo $this->env->getExtension('time')->diff($this->getAttribute($context["message"], "date", array()));
            echo "</td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "                    </tbody>
                </table><!-- /.table -->
            </div><!-- /.mail-box-messages -->
        </div><!-- /.box-body -->
        <div class=\"box-footer text-center\">
            120 messages
        </div>
    </div><!-- /. box -->
</div><!-- /.col -->
";
        
        $__internal_20f03de6e78673fe88605593f4fadf148b1c24220f0c9fd4424f15eeb5074e19->leave($__internal_20f03de6e78673fe88605593f4fadf148b1c24220f0c9fd4424f15eeb5074e19_prof);

    }

    // line 55
    public function block_js($context, array $blocks = array())
    {
        $__internal_f1a082176d371fc79d6a8d1e2e988e37ecfcaa3062e55e5c46f9a6e749e30648 = $this->env->getExtension("native_profiler");
        $__internal_f1a082176d371fc79d6a8d1e2e988e37ecfcaa3062e55e5c46f9a6e749e30648->enter($__internal_f1a082176d371fc79d6a8d1e2e988e37ecfcaa3062e55e5c46f9a6e749e30648_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        
        $__internal_f1a082176d371fc79d6a8d1e2e988e37ecfcaa3062e55e5c46f9a6e749e30648->leave($__internal_f1a082176d371fc79d6a8d1e2e988e37ecfcaa3062e55e5c46f9a6e749e30648_prof);

    }

    public function getTemplateName()
    {
        return "views/admin/index/message.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 55,  102 => 44,  93 => 41,  87 => 40,  83 => 39,  79 => 37,  75 => 36,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends '::admin/base.html.twig' %}*/
/* */
/* {% block body %}*/
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
/*                 <li class="active"><a href="#"><i class="fa fa-envelope"></i> Non-lus <span class="label label-primary pull-right">12</span></a></li>*/
/*                 <li><a href="#"><i class="fa fa-envelope-o"></i> Tous</a></li>*/
/*                 <li><a href="#"><i class="fa fa-trash-o"></i> Corbeille</a></li>*/
/*             </ul>*/
/*         </div><!-- /.box-body -->*/
/*     </div><!-- /. box -->*/
/* </div><!-- /.col -->*/
/* <div class="col-md-9">*/
/*     <div class="box box-primary">*/
/*         <div class="box-header with-border">*/
/*             <h3 class="box-title">Inbox</h3>*/
/*             <div class="box-tools pull-right">*/
/*                 <div class="has-feedback">*/
/*                     <input type="text" class="form-control input-sm" placeholder="Search Mail">*/
/*                     <span class="glyphicon glyphicon-search form-control-feedback"></span>*/
/*                 </div>*/
/*             </div><!-- /.box-tools -->*/
/*         </div><!-- /.box-header -->*/
/*         <div class="box-body no-padding">*/
/*             <div class="table-responsive mailbox-messages">*/
/*                 <table class="table table-hover table-striped">*/
/*                     <tbody>*/
/*                         {% for message in messages %}*/
/*                             <tr>*/
/*                                 <td class="mailbox-star"><a href="#"><i class="fa fa-trash text-red"></i></a></td>*/
/*                                 <td class="mailbox-name"><a href="read-mail.html">{{ message.name }}</a></td>*/
/*                                 <td class="mailbox-subject"><b>{{ message.sujet }}</b> - {{ message.message|slice(0, 10) ~ '...' }}</td>*/
/*                                 <td class="mailbox-date">{{ message.date|ago }}</td>*/
/*                             </tr>*/
/*                         {% endfor %}*/
/*                     </tbody>*/
/*                 </table><!-- /.table -->*/
/*             </div><!-- /.mail-box-messages -->*/
/*         </div><!-- /.box-body -->*/
/*         <div class="box-footer text-center">*/
/*             120 messages*/
/*         </div>*/
/*     </div><!-- /. box -->*/
/* </div><!-- /.col -->*/
/* {% endblock %}*/
/* */
/* {% block js %}*/
/* {% endblock %}*/
