<?php

/* views/admin/yaml/edit.html.twig */
class __TwigTemplate_90fc6956300584ee5cf3aad20b7a34b921886451f140c1fd3d3cec0a9ae03485 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::admin/base.html.twig", "views/admin/yaml/edit.html.twig", 1);
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
        $__internal_a1a5e3520994b48802a659e72fbbbafab59f33cb3fd3f545b0b987b06464805c = $this->env->getExtension("native_profiler");
        $__internal_a1a5e3520994b48802a659e72fbbbafab59f33cb3fd3f545b0b987b06464805c->enter($__internal_a1a5e3520994b48802a659e72fbbbafab59f33cb3fd3f545b0b987b06464805c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "views/admin/yaml/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a1a5e3520994b48802a659e72fbbbafab59f33cb3fd3f545b0b987b06464805c->leave($__internal_a1a5e3520994b48802a659e72fbbbafab59f33cb3fd3f545b0b987b06464805c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_47fae122edb9653ce96689d9b8792614c7cccfbec0d574c35360a5f0ab769756 = $this->env->getExtension("native_profiler");
        $__internal_47fae122edb9653ce96689d9b8792614c7cccfbec0d574c35360a5f0ab769756->enter($__internal_47fae122edb9653ce96689d9b8792614c7cccfbec0d574c35360a5f0ab769756_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $context["macros"] = $this->loadTemplate("admin/macros/display-yaml.html.twig", "views/admin/yaml/edit.html.twig", 4);
        // line 5
        echo "    <div class=\"box box-solid\">
        <div class=\"box-header with-border\">
            <h3 class=\"box-title\">";
        // line 7
        echo twig_escape_filter($this->env, ((isset($context["file"]) ? $context["file"] : null) . ".yml"), "html", null, true);
        echo "</h3>
        </div>
        <div class=\"box-body\">
            <ul id=\"yaml-file\">
                ";
        // line 11
        echo $context["macros"]->getdisplay_yaml((isset($context["yml"]) ? $context["yml"] : null));
        echo "
            </ul>
        </div>
    </div>
    <div class=\"col-xs-6\">
        <button class=\"btn btn-success\" id=\"sauvegarder-yaml\">Sauvegarder</button>
    </div>
    <div class=\"col-xs-6\">
        <button class=\"btn btn-danger\" id=\"annuler-yaml\">Annuler</button>
    </div>
";
        
        $__internal_47fae122edb9653ce96689d9b8792614c7cccfbec0d574c35360a5f0ab769756->leave($__internal_47fae122edb9653ce96689d9b8792614c7cccfbec0d574c35360a5f0ab769756_prof);

    }

    // line 23
    public function block_js($context, array $blocks = array())
    {
        $__internal_edb9ce3be0dfb533dc0b9e6a0e06a6d537e5e0f485232c6d3028dd8ca5f35dae = $this->env->getExtension("native_profiler");
        $__internal_edb9ce3be0dfb533dc0b9e6a0e06a6d537e5e0f485232c6d3028dd8ca5f35dae->enter($__internal_edb9ce3be0dfb533dc0b9e6a0e06a6d537e5e0f485232c6d3028dd8ca5f35dae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        // line 24
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
        // line 78
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
        
        $__internal_edb9ce3be0dfb533dc0b9e6a0e06a6d537e5e0f485232c6d3028dd8ca5f35dae->leave($__internal_edb9ce3be0dfb533dc0b9e6a0e06a6d537e5e0f485232c6d3028dd8ca5f35dae_prof);

    }

    public function getTemplateName()
    {
        return "views/admin/yaml/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 78,  79 => 24,  73 => 23,  55 => 11,  48 => 7,  44 => 5,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends '::admin/base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     {% import 'admin/macros/display-yaml.html.twig' as macros %}*/
/*     <div class="box box-solid">*/
/*         <div class="box-header with-border">*/
/*             <h3 class="box-title">{{ file ~ '.yml' }}</h3>*/
/*         </div>*/
/*         <div class="box-body">*/
/*             <ul id="yaml-file">*/
/*                 {{ macros.display_yaml(yml) }}*/
/*             </ul>*/
/*         </div>*/
/*     </div>*/
/*     <div class="col-xs-6">*/
/*         <button class="btn btn-success" id="sauvegarder-yaml">Sauvegarder</button>*/
/*     </div>*/
/*     <div class="col-xs-6">*/
/*         <button class="btn btn-danger" id="annuler-yaml">Annuler</button>*/
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
