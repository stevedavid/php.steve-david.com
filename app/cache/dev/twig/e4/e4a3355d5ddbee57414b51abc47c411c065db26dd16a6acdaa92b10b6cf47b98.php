<?php

/* views/admin/index/edit-yaml.html.twig */
class __TwigTemplate_605e2a82363e6ce4ac08cd8f13e3bdb60ed07b48dd53027e0bf4b45c6f1127d3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::admin/base.html.twig", "views/admin/index/edit-yaml.html.twig", 1);
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
        $__internal_591d4a0a032874d0d9f489d960b92a200bc6db663e46c4d33cbe4327303bee24 = $this->env->getExtension("native_profiler");
        $__internal_591d4a0a032874d0d9f489d960b92a200bc6db663e46c4d33cbe4327303bee24->enter($__internal_591d4a0a032874d0d9f489d960b92a200bc6db663e46c4d33cbe4327303bee24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "views/admin/index/edit-yaml.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_591d4a0a032874d0d9f489d960b92a200bc6db663e46c4d33cbe4327303bee24->leave($__internal_591d4a0a032874d0d9f489d960b92a200bc6db663e46c4d33cbe4327303bee24_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6c7ce1b1386d2eaedeb893c64229f503e915132f31f446e140dccb374f110447 = $this->env->getExtension("native_profiler");
        $__internal_6c7ce1b1386d2eaedeb893c64229f503e915132f31f446e140dccb374f110447->enter($__internal_6c7ce1b1386d2eaedeb893c64229f503e915132f31f446e140dccb374f110447_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $context["macros"] = $this->loadTemplate("admin/macros/display-yaml.html.twig", "views/admin/index/edit-yaml.html.twig", 4);
        // line 5
        echo "    <div class=\"row\">
        <div class=\"col-xs-12\">
            <ul id=\"yaml-file\">
                ";
        // line 8
        echo $context["macros"]->getdisplay_yaml((isset($context["yml"]) ? $context["yml"] : null));
        echo "
            </ul>
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-xs-6\">
            <div class=\"col-xs-6\">
                <button class=\"btn btn-success\" id=\"sauvegarder-yaml\">Sauvegarder</button>
            </div>
            <div class=\"col-xs-6\">
                <button class=\"btn btn-danger\" id=\"annuler-yaml\">Annuler</button>
            </div>
        </div>
    </div>
";
        
        $__internal_6c7ce1b1386d2eaedeb893c64229f503e915132f31f446e140dccb374f110447->leave($__internal_6c7ce1b1386d2eaedeb893c64229f503e915132f31f446e140dccb374f110447_prof);

    }

    // line 24
    public function block_js($context, array $blocks = array())
    {
        $__internal_4ea00b7d2ed79a77ce92185af0e8b7b16ead837ad5aa59d731b798b1b6495067 = $this->env->getExtension("native_profiler");
        $__internal_4ea00b7d2ed79a77ce92185af0e8b7b16ead837ad5aa59d731b798b1b6495067->enter($__internal_4ea00b7d2ed79a77ce92185af0e8b7b16ead837ad5aa59d731b798b1b6495067_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        // line 25
        echo "    <script>
        jQuery(function(\$) {

            var \$yaml = \$('#yaml-file');

            \$yaml.find('button').on('click', function() {

                var action = \$(this).data('action')
                    , \$li = \$(this).closest('li')
                ;

                if(action == 'ajouter') {
                    var \$clone = \$li.clone(true);
                    \$clone.find('input').each(function() {
                        \$(this).val('');
                    });

                    \$li.after(\$clone.hide().fadeIn());
                } else if(action == 'enlever') {
                    \$li.fadeOut('slow', function() {
                        \$(this).remove();
                    });
                }

            });

            var yaml = {};
            var storeYaml = function storeYaml(\$lis) {
                var innerYaml = {};
                console.log('function called');
                \$lis.each(function(i) {
                    console.log(\$.isNumeric(\$(this).find('> .yaml-key').text()));
                    var key = \$.isNumeric(\$(this).find('> .yaml-key').text()) ? i : \$(this).find('> .yaml-key').text()
                        , \$ul = \$(this).find('> ul')
                        , \$input = \$(this).find('> .form-group > input')
                    ;
                    console.log('key ==> ' + key);
                    if(!\$input.length) {
                        innerYaml[key] = storeYaml(\$ul.find('> li'));
                    } else if(!\$ul.length) {
                        innerYaml[key] = \$input.val();
                    }
                    yaml = innerYaml;
                });
                return innerYaml;
            };

            \$('#sauvegarder-yaml').on('click', function() {
                console.log(\$('#yaml-file').html());
                \$(this).attr('disabled', 'disabled');
                console.log(\$yaml.find('> li'));
                var yaml = storeYaml(\$('#yaml-file').find('> li'));
                console.log(yaml);
                \$.ajax({
                    url: '";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_index_save-yaml", array("ymlFile" => (isset($context["file"]) ? $context["file"] : null))), "html", null, true);
        echo "',
                    method: 'post',
                    data: {yaml: yaml},
                    success: function() {
                        \$yaml.find('.form-group').removeClass('has-error').addClass('has-success');
                    },
                    error: function() {
                        \$yaml.find('.form-group').removeClass('has-success').addClass('has-error');
                    }
                });
            }).on('blur', function() {
                if(\$(this).is(':disabled')) {
                    \$(this).removeAttr('disabled');
                }
            });





            \$('#annuler-yaml').on('click', function() {
                document.location.reload();
            });

        });
    </script>
";
        
        $__internal_4ea00b7d2ed79a77ce92185af0e8b7b16ead837ad5aa59d731b798b1b6495067->leave($__internal_4ea00b7d2ed79a77ce92185af0e8b7b16ead837ad5aa59d731b798b1b6495067_prof);

    }

    public function getTemplateName()
    {
        return "views/admin/index/edit-yaml.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 79,  77 => 25,  71 => 24,  49 => 8,  44 => 5,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends '::admin/base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     {% import 'admin/macros/display-yaml.html.twig' as macros %}*/
/*     <div class="row">*/
/*         <div class="col-xs-12">*/
/*             <ul id="yaml-file">*/
/*                 {{ macros.display_yaml(yml) }}*/
/*             </ul>*/
/*         </div>*/
/*     </div>*/
/*     <div class="row">*/
/*         <div class="col-xs-6">*/
/*             <div class="col-xs-6">*/
/*                 <button class="btn btn-success" id="sauvegarder-yaml">Sauvegarder</button>*/
/*             </div>*/
/*             <div class="col-xs-6">*/
/*                 <button class="btn btn-danger" id="annuler-yaml">Annuler</button>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* {% block js %}*/
/*     <script>*/
/*         jQuery(function($) {*/
/* */
/*             var $yaml = $('#yaml-file');*/
/* */
/*             $yaml.find('button').on('click', function() {*/
/* */
/*                 var action = $(this).data('action')*/
/*                     , $li = $(this).closest('li')*/
/*                 ;*/
/* */
/*                 if(action == 'ajouter') {*/
/*                     var $clone = $li.clone(true);*/
/*                     $clone.find('input').each(function() {*/
/*                         $(this).val('');*/
/*                     });*/
/* */
/*                     $li.after($clone.hide().fadeIn());*/
/*                 } else if(action == 'enlever') {*/
/*                     $li.fadeOut('slow', function() {*/
/*                         $(this).remove();*/
/*                     });*/
/*                 }*/
/* */
/*             });*/
/* */
/*             var yaml = {};*/
/*             var storeYaml = function storeYaml($lis) {*/
/*                 var innerYaml = {};*/
/*                 console.log('function called');*/
/*                 $lis.each(function(i) {*/
/*                     console.log($.isNumeric($(this).find('> .yaml-key').text()));*/
/*                     var key = $.isNumeric($(this).find('> .yaml-key').text()) ? i : $(this).find('> .yaml-key').text()*/
/*                         , $ul = $(this).find('> ul')*/
/*                         , $input = $(this).find('> .form-group > input')*/
/*                     ;*/
/*                     console.log('key ==> ' + key);*/
/*                     if(!$input.length) {*/
/*                         innerYaml[key] = storeYaml($ul.find('> li'));*/
/*                     } else if(!$ul.length) {*/
/*                         innerYaml[key] = $input.val();*/
/*                     }*/
/*                     yaml = innerYaml;*/
/*                 });*/
/*                 return innerYaml;*/
/*             };*/
/* */
/*             $('#sauvegarder-yaml').on('click', function() {*/
/*                 console.log($('#yaml-file').html());*/
/*                 $(this).attr('disabled', 'disabled');*/
/*                 console.log($yaml.find('> li'));*/
/*                 var yaml = storeYaml($('#yaml-file').find('> li'));*/
/*                 console.log(yaml);*/
/*                 $.ajax({*/
/*                     url: '{{ path('admin_index_save-yaml', {ymlFile: file}) }}',*/
/*                     method: 'post',*/
/*                     data: {yaml: yaml},*/
/*                     success: function() {*/
/*                         $yaml.find('.form-group').removeClass('has-error').addClass('has-success');*/
/*                     },*/
/*                     error: function() {*/
/*                         $yaml.find('.form-group').removeClass('has-success').addClass('has-error');*/
/*                     }*/
/*                 });*/
/*             }).on('blur', function() {*/
/*                 if($(this).is(':disabled')) {*/
/*                     $(this).removeAttr('disabled');*/
/*                 }*/
/*             });*/
/* */
/* */
/* */
/* */
/* */
/*             $('#annuler-yaml').on('click', function() {*/
/*                 document.location.reload();*/
/*             });*/
/* */
/*         });*/
/*     </script>*/
/* {% endblock %}*/
