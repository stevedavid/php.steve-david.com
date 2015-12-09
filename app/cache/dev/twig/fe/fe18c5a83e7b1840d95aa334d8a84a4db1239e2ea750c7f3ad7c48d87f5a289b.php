<?php

/* views/admin/index/edit-yaml.html.twig */
class __TwigTemplate_020165e160da2c5a8fc27a01ba6c18b72c7e7bdcc34e74ba97a50578f661527c extends Twig_Template
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
        $__internal_70893c1cb28d92a5d31b8680c93bb7d66e9415a7b2e8a835fa5de73102090d36 = $this->env->getExtension("native_profiler");
        $__internal_70893c1cb28d92a5d31b8680c93bb7d66e9415a7b2e8a835fa5de73102090d36->enter($__internal_70893c1cb28d92a5d31b8680c93bb7d66e9415a7b2e8a835fa5de73102090d36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "views/admin/index/edit-yaml.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_70893c1cb28d92a5d31b8680c93bb7d66e9415a7b2e8a835fa5de73102090d36->leave($__internal_70893c1cb28d92a5d31b8680c93bb7d66e9415a7b2e8a835fa5de73102090d36_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6ec6f46bb7c1a304122a832670138cf934a6077ab732885c773ae9b4541baa2d = $this->env->getExtension("native_profiler");
        $__internal_6ec6f46bb7c1a304122a832670138cf934a6077ab732885c773ae9b4541baa2d->enter($__internal_6ec6f46bb7c1a304122a832670138cf934a6077ab732885c773ae9b4541baa2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_6ec6f46bb7c1a304122a832670138cf934a6077ab732885c773ae9b4541baa2d->leave($__internal_6ec6f46bb7c1a304122a832670138cf934a6077ab732885c773ae9b4541baa2d_prof);

    }

    // line 24
    public function block_js($context, array $blocks = array())
    {
        $__internal_58ddba272eb219e4cb13aa626dba78664890fea2d7206a603e3a398f47db11b1 = $this->env->getExtension("native_profiler");
        $__internal_58ddba272eb219e4cb13aa626dba78664890fea2d7206a603e3a398f47db11b1->enter($__internal_58ddba272eb219e4cb13aa626dba78664890fea2d7206a603e3a398f47db11b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_yaml_save", array("ymlFile" => (isset($context["file"]) ? $context["file"] : null))), "html", null, true);
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
        
        $__internal_58ddba272eb219e4cb13aa626dba78664890fea2d7206a603e3a398f47db11b1->leave($__internal_58ddba272eb219e4cb13aa626dba78664890fea2d7206a603e3a398f47db11b1_prof);

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
/*                     url: '{{ path('admin_yaml_save', {ymlFile: file}) }}',*/
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
