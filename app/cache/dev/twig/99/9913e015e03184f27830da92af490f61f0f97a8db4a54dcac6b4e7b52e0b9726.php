<?php

/* views/admin/index/message.html.twig */
class __TwigTemplate_24712794e5e84ced1a4f62eee659f32c0c15a90ae60bbac507f7c70e5891cd69 extends Twig_Template
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
        $__internal_38683d0e395d9f78059b0dc288a3ef7fe3dad1749cab33356bb97839af6a875c = $this->env->getExtension("native_profiler");
        $__internal_38683d0e395d9f78059b0dc288a3ef7fe3dad1749cab33356bb97839af6a875c->enter($__internal_38683d0e395d9f78059b0dc288a3ef7fe3dad1749cab33356bb97839af6a875c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "views/admin/index/message.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_38683d0e395d9f78059b0dc288a3ef7fe3dad1749cab33356bb97839af6a875c->leave($__internal_38683d0e395d9f78059b0dc288a3ef7fe3dad1749cab33356bb97839af6a875c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b8e9b87359b6f72b0cfd516ce2886b42d696f228a25cf7f28e6b245898f54e50 = $this->env->getExtension("native_profiler");
        $__internal_b8e9b87359b6f72b0cfd516ce2886b42d696f228a25cf7f28e6b245898f54e50->enter($__internal_b8e9b87359b6f72b0cfd516ce2886b42d696f228a25cf7f28e6b245898f54e50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div id=\"dashboard-header\">
    <div class=\"col-xs-12 col-sm-4 col-md-5\">
        <h3>Tableau de bord</h3>
    </div>
</div>
<div id=\"messages\" class=\"container-fluid\">
    <div class=\"row\" id=\"test\">
        <div class=\"col-xs-12\">
            <div class=\"row\">
                <div id=\"messages-list\" class=\"col-xs-12\">
                    ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["messages"]) ? $context["messages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 15
            echo "                        <div class=\"row one-list-message msg-inbox-item\" id=\"msg-one\">
                            <div class=\"col-xs-1 checkbox\">
                                <label>
                                    <input type=\"checkbox\"> ";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "name", array()), "html", null, true);
            echo "
                                    <i class=\"fa fa-square-o small\"></i>
                                </label>
                            </div>
                            <div class=\"col-xs-9 message-title\"><b>Happy New Year</b> Dear friend! It's title of this message I send Dear friend! It's title of this message I send Dear friend! It's title of this message I send</div>
                            <div class=\"col-xs-2 message-date\">12/31/13</div>
                        </div>
                        <div class=\"row one-list-message msg-1-item\" style=\"display: none;\">
                            <div class=\"box\">
                                <div class=\"avatar\">
                                    <img src=\"img/avatar.jpg\" alt=\"Jane\" />
                                </div>
                                <div class=\"page-feed-content\">
                                    <small class=\"time\">Jane Devops, 12 min ago</small>
                                    <p>Linux is a Unix-like and POSIX-compliant computer operating system assembled under the model of free and open source software development and distribution. Maemo - Software platform developed by Nokia and then handed over to Hildon Foundation for smartphones and Internet tablets</p>
                                    <div class=\"likebox\">
                                        <ul class=\"nav navbar-nav\">
                                            <li><i class=\"fa fa-thumbs-up\"></i> 138</li>
                                            <li><i class=\"fa fa-thumbs-down\"></i> 47</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "                </div>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_b8e9b87359b6f72b0cfd516ce2886b42d696f228a25cf7f28e6b245898f54e50->leave($__internal_b8e9b87359b6f72b0cfd516ce2886b42d696f228a25cf7f28e6b245898f54e50_prof);

    }

    // line 50
    public function block_js($context, array $blocks = array())
    {
        $__internal_be814b1523b22bac7322408fabb4b9840567ccb99d1ac247fd040835440e638b = $this->env->getExtension("native_profiler");
        $__internal_be814b1523b22bac7322408fabb4b9840567ccb99d1ac247fd040835440e638b->enter($__internal_be814b1523b22bac7322408fabb4b9840567ccb99d1ac247fd040835440e638b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        // line 51
        echo "    <script type=\"text/javascript\">
        // Add listener for redraw menu when windows resized
        window.onresize = MessagesMenuWidth;
        \$(document).ready(function() {
            // Add class for correctly view of messages page
            \$('#content').addClass('full-content');
            // Run script for change menu width
            MessagesMenuWidth();
            \$('#content').on('click','[id^=msg-]', function(e){
                e.preventDefault();
                \$('[id^=msg-]').removeClass('active');
                \$(this).addClass('active');
                \$('.one-list-message').slideUp('fast');
                \$('.'+\$(this).attr('id')+'-item').slideDown('fast');
            });
            \$('html').animate({scrollTop: 0},'slow');
        });
    </script>
";
        
        $__internal_be814b1523b22bac7322408fabb4b9840567ccb99d1ac247fd040835440e638b->leave($__internal_be814b1523b22bac7322408fabb4b9840567ccb99d1ac247fd040835440e638b_prof);

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
        return array (  111 => 51,  105 => 50,  93 => 43,  62 => 18,  57 => 15,  53 => 14,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends '::admin/base.html.twig' %}*/
/* */
/* {% block body %}*/
/* <div id="dashboard-header">*/
/*     <div class="col-xs-12 col-sm-4 col-md-5">*/
/*         <h3>Tableau de bord</h3>*/
/*     </div>*/
/* </div>*/
/* <div id="messages" class="container-fluid">*/
/*     <div class="row" id="test">*/
/*         <div class="col-xs-12">*/
/*             <div class="row">*/
/*                 <div id="messages-list" class="col-xs-12">*/
/*                     {% for message in messages %}*/
/*                         <div class="row one-list-message msg-inbox-item" id="msg-one">*/
/*                             <div class="col-xs-1 checkbox">*/
/*                                 <label>*/
/*                                     <input type="checkbox"> {{ message.name }}*/
/*                                     <i class="fa fa-square-o small"></i>*/
/*                                 </label>*/
/*                             </div>*/
/*                             <div class="col-xs-9 message-title"><b>Happy New Year</b> Dear friend! It's title of this message I send Dear friend! It's title of this message I send Dear friend! It's title of this message I send</div>*/
/*                             <div class="col-xs-2 message-date">12/31/13</div>*/
/*                         </div>*/
/*                         <div class="row one-list-message msg-1-item" style="display: none;">*/
/*                             <div class="box">*/
/*                                 <div class="avatar">*/
/*                                     <img src="img/avatar.jpg" alt="Jane" />*/
/*                                 </div>*/
/*                                 <div class="page-feed-content">*/
/*                                     <small class="time">Jane Devops, 12 min ago</small>*/
/*                                     <p>Linux is a Unix-like and POSIX-compliant computer operating system assembled under the model of free and open source software development and distribution. Maemo - Software platform developed by Nokia and then handed over to Hildon Foundation for smartphones and Internet tablets</p>*/
/*                                     <div class="likebox">*/
/*                                         <ul class="nav navbar-nav">*/
/*                                             <li><i class="fa fa-thumbs-up"></i> 138</li>*/
/*                                             <li><i class="fa fa-thumbs-down"></i> 47</li>*/
/*                                         </ul>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     {% endfor %}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* {% endblock %}*/
/* */
/* {% block js %}*/
/*     <script type="text/javascript">*/
/*         // Add listener for redraw menu when windows resized*/
/*         window.onresize = MessagesMenuWidth;*/
/*         $(document).ready(function() {*/
/*             // Add class for correctly view of messages page*/
/*             $('#content').addClass('full-content');*/
/*             // Run script for change menu width*/
/*             MessagesMenuWidth();*/
/*             $('#content').on('click','[id^=msg-]', function(e){*/
/*                 e.preventDefault();*/
/*                 $('[id^=msg-]').removeClass('active');*/
/*                 $(this).addClass('active');*/
/*                 $('.one-list-message').slideUp('fast');*/
/*                 $('.'+$(this).attr('id')+'-item').slideDown('fast');*/
/*             });*/
/*             $('html').animate({scrollTop: 0},'slow');*/
/*         });*/
/*     </script>*/
/* {% endblock %}*/
