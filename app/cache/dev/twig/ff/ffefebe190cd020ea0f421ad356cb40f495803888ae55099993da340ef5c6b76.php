<?php

/* views/index.html.twig */
class __TwigTemplate_f977c51da64f344a7858c89545ebaf32caf0217d8957d30cfe0e624f28a661fd extends Twig_Template
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
        $__internal_0738db9a46f16d6f33a0b6bd941fe37084c06d0f278f64b68460aa4326d261f1 = $this->env->getExtension("native_profiler");
        $__internal_0738db9a46f16d6f33a0b6bd941fe37084c06d0f278f64b68460aa4326d261f1->enter($__internal_0738db9a46f16d6f33a0b6bd941fe37084c06d0f278f64b68460aa4326d261f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "views/index.html.twig"));

        // line 1
        echo "<html>
<head>
    <base href=\"/\">
    <title>Steve DAVID - Développeur PHP5/MySQL</title>
    <meta name=\"description\" content=\"Site web professionnel de Steve DAVID, développeur web PHP5/MySQL. J'y présente mon parcours et mes réalisations.\">
    <meta name=\"keywords\" content=\"\">
    <meta charset=\"utf-8\">
    <meta property=\"og:image\" content=\"http://www.steve-david.com/images/steve1.png\">
    <meta property=\"og:title\" content=\"Steve DAVID - Développeur PHP5/MySQL\">
    <meta property=\"og:description\" content=\"Je suis passionné d'informatique depuis mon plus jeune âge. Je me suis réorienté à 25 ans après avoir fait des études en école de commerce suivies d'un master 2 en ressources humaines.\">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0\" />
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css\"/>
    <link href=\"//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css\" rel=\"stylesheet\"/>
    <link href=\"css/icon.css\" rel=\"stylesheet\" type=\"text/css\" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,700,600,300' rel='stylesheet' type='text/css'/>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,800,700,900' rel='stylesheet' type='text/css'/>
    <link href='http://fonts.googleapis.com/css?family=Tangerine:400,700' rel='stylesheet' type='text/css'>
    <link href=\"css/minislide/flexslider.css\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"css/owl_carousel/owl.carousel.css\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"css/owl_carousel/owl.theme.css\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"css/animate.css\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"css/style.css\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"css/easy-pie.css\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"css/main.css\" rel=\"stylesheet\" type=\"text/css\" />
    <script src=\"https://maps.googleapis.com/maps/api/js?v=3.exp\" type=\"text/javascript\"></script>
    <link href=\"css/responsive.css\" rel=\"stylesheet\" type=\"text/css\" />
</head>
<body>
<div id=\"loader-wrapper\">
    <div id=\"loader\"></div>
</div>
";
        // line 33
        echo twig_include($this->env, $context, "partials/header.html.twig");
        echo "
<section id=\"section1\" class=\"cd-section\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"box-content about\">
                    <h1> Présentation</h1>
                    <div class=\"col-xs-12 col-md-4\">
                        <div class=\"box-text\" id=\"prez-box-1\">
                            <h2>Je suis...</h2>
                            <p>...passionné d'informatique depuis mon plus jeune âge. Je me suis réorienté à 25 ans après avoir fait des études en école de commerce suivies d'un master 2 en ressources humaines.</p>
                        </div>
                        <div class=\"box-text\" id=\"prez-box-2\">
                            <h2>Informations personnelles</h2>
                            <p><strong>Age</strong> : ";
        // line 47
        echo twig_escape_filter($this->env, (isset($context["age"]) ? $context["age"] : null), "html", null, true);
        echo " ans</p>
                            <p>
                                <strong>E-mail</strong> :
                      <span class=\"email-rtl\">
                          moc.divad-evets<i class=\"fa fa-at\"></i>evets
                      </span>
                            </p>
                            <p><strong>Lieu</strong> : Paris</p>
                            <p><strong>Disponibilité</strong> : non disponible</p>
                        </div>
                    </div>
                    <div class=\"col-xs-12 col-md-4\">
                        <div class=\"box-img\">
                            <img src=\"images/steve1.png\" alt=\"\" />
                        </div>
                    </div>
                    <div class=\"col-xs-12 col-md-4\">
                        <div class=\"box-text\" id=\"prez-box-3\">

                            <h2>Expérience</h2>
                            <p><strong>2015</strong> : Développeur SF2 / Link Value</p>
                            <p><strong>2014</strong> : Développeur SF2 / Societe.com</p>
                            <p><strong>2013</strong> : Développeur ZF1 / Microscoop</p>
                            <p><strong>2012</strong> : Chargé de recrutement</p>
                        </div>
                        <div class=\"box-text\" id=\"prez-box-4\">

                            <h2>Formation</h2>
                            <p><strong>2014</strong> : Développeur / IP-Formation</p>
                            <p><strong>2011</strong> : Master 2 DRH / Paris 1</p>
                            <p><strong>2010</strong> : BBA / Sup de Co Montpellier</p>
                            <p><strong>2006</strong> : Baccalauréat ES</p>
                        </div>
                    </div>
                </div><!--close box content-->
            </div>
        </div><!--close row-->
    </div><!--close container-->

</section><!-- cd-section -->

<!--SECTION WORK-->

<section id=\"section3\" class=\"cd-section\">

    <div class=\"parallax1\">
        <div class=\"overlay\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <div class=\"col-md-4\">
                            <div class=\"box-img\" style=\"height: 300px;\">
                                <img src=\"images/php.png\" alt=\"\" />
                            </div>
                        </div>
                        <div class=\"col-md-4\">
                            <div class=\"box-text\" id=\"mon-metier\">
                                <h2>Mon métier</h2>
                                <p>Je suis développeur web en langages PHP5/MySQL (Symfony2). Je conçois des applications web et des sites internet. J'ai découvert la programmation à l'âge de 13 ans quand j'ai développé <a href=\"http://www.zelda-boss.com/\" class=\"nice-link\" target=\"_blank\">Zelda-Boss</a>.</p>
                                <p>Ma scolarité achevée, je décide de me replonger dans ce métier que j'ai toujours considéré comme une passion, expliquant ainsi l'absence d'approfondissement de mes compétences à l'époque.</p>
                            </div>
                        </div>
                        <div class=\"col-md-4\">
                            <div class=\"box-img\" style=\"height: 300px;\" >
                                <img src=\"images/mysql.png\" alt=\"\" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"box-content\" id=\"scroll-parcours\">
                    <h1>Parcours</h1>
                    <div class=\"col-md-6\">
                        <div class=\"box-text\">
                            <h2>J'ai fait...</h2>
                            <p>...une école de commerce car disposant d'une appétance pour les sciences économiques et sociales. Je me suis spécialisé en RH avec un master 2 pour faire coordonner mes stages avec mon parcours scolaire. Enfin, je me suis réorienté vers le développement web suite à ma première expérience en recrutement.</p>
                            <p class=\"slogan\">\" Creativity requires the courage to let go of certainties \"</p>
                            <!--<p class=\"signature\">Erich Fromm</p>-->
                            <img class=\"signature\" src=\"images/signature.jpg\" alt=\"\" />
                        </div>
                    </div>
                    <div class=\"col-md-6\">
                        <div class=\"skills-area triggerAnimation animated\" data-animate=\"fadeInLeft\">

                            <div class=\"box-text\">
                                <h2>Domaines d'expertise</h2>
                                <div class=\"skills-box\">
                                    <div class=\"skills-progress\">
                                        <p>Informatique<span>85%</span></p>
                                        <div class=\"meter nostrips develope\">
                                            <p style=\"width: 85%\"></p>
                                        </div>
                                        <p>Management et RH<span>60%</span></p>
                                        <div class=\"meter nostrips design\">
                                            <p style=\"width: 60%\"></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-md-12 col-xs-12\" id=\"parcours-choice\">
                <div class=\"col-md-6 col-xs-12\" style=\"text-align: right\">
                    <a href=\"#\" data-parcours=\"experiences\" class=\"selected\">
                        <i class=\"fa fa-briefcase\"></i>
                        Expériences
                    </a>
                </div>
                <div class=\"col-md-6 col-xs-12\" style=\"text-align: left\">
                    <a href=\"#\" data-parcours=\"formations\">
                        <i class=\"fa fa-university\"></i>
                        Formation
                    </a>
                </div>
            </div>
            <div class=\"col-md-12\">
                ";
        // line 173
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("AppBundle:Front:parcours"));
        echo "
            </div>
        </div>
    </div>
</section>
<section id=\"section2\" class=\"cd-section\">
    ";
        // line 179
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("AppBundle:Front:competences"));
        echo "
</section>
<section>
    ";
        // line 182
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("AppBundle:Front:citations"));
        echo "
    ";
        // line 183
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("AppBundle:Front:realisations"));
        echo "
</section>
<section id=\"section5\" class=\"cd-section\">
    ";
        // line 186
        echo twig_include($this->env, $context, "partials/map.html.twig");
        echo "
</section>
<section id=\"section4\" class=\"cd-section\">
    ";
        // line 189
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("AppBundle:Front:contact"));
        echo "
</section><!-- cd-section -->

<section id=\"section6\" class=\"cd-section\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <footer class=\"box-content\">
                    <div class=\"footer-logo\" style=\"margin-bottom: 50px;\">
                        <img rel=\"tooltip\" data-placement=\"top\" title=\"Stack Overflow\" src=\"http://stackoverflow.com/users/flair/2788131.png?theme=dark\" width=\"208\" height=\"58\">
                    </div>
                    <div class=\"footer-social\">
                        <a href=\"https://www.linkedin.com/profile/view?id=145145986\" title=\"LinkedIn\" target=\"_blank\"><i class=\"fa fa-linkedin\"></i></a>
                        <a href=\"http://www.viadeo.com/profile/0021o28af1y2fcf8/\" title=\"Viadeo\" target=\"_blank\"><img src=\"images/viadeo.png\"/></a>
                        <a href=\"https://www.github.com/stevedavid/\" title=\"GitHub\" target=\"_blank\"><i class=\"fa fa-github\"></i></a>
                        <a href=\"http://stackoverflow.com/users/2788131/d4v1d?tab=profile\" title=\"Stack Overflow\" target=\"_blank\"><i class=\"fa fa-stack-overflow\"></i></a>
                    </div>
                </footer>
            </div>
        </div>
    </div>
</section>


<script src=\"js/jquery.min.js\" type=\"text/javascript\"></script>
<script src=\"js/bootstrap.min.js\" type=\"text/javascript\"></script>
<script src=\"js/gallery/isotope.js\" type=\"text/javascript\"></script>
<script src=\"js/jquery.ui.totop.js\" type=\"text/javascript\"></script>
<script src=\"js/owl_carousel/owl.carousel.js\" type=\"text/javascript\"></script>
<script src=\"js/minislide/jquery.flexslider.js\" type=\"text/javascript\"></script>
<script src=\"js/jquery.appear.js\" type=\"text/javascript\"></script>
<script src=\"js/jquery.waypoints.js\" type=\"text/javascript\"></script>
<script src=\"js/bootbox.min.js\" type=\"text/javascript\"></script>
<script src=\"js/raphael.min.js\" type=\"text/javascript\"></script>
<script src=\"js/morris.js\" type=\"text/javascript\"></script>
<script src=\"js/jquery.easypiechart.js\" type=\"text/javascript\"></script>
<script src=\"js/main.js\" type=\"text/javascript\"></script> <!-- Resource jQuery -->
<script type=\"text/javascript\">
    jQuery(function(\$) {
        \$('.footer-social').find('> a').tooltip({
            placement: 'top',
            trigger: 'hover'
        });
    });
</script>
<script type=\"text/javascript\">
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-43909780-1', 'auto');
    ga('send', 'pageview');

</script>
<script>
    \$('.smooth-redirect').on('click', function(e) {
        e.preventDefault();
        var realisation = \$(this).data('rea')
        ,   data = {
            realisation: realisation
        };
        \$.ajax({
            url: '";
        // line 252
        echo $this->env->getExtension('routing')->getPath("ajax_realisation");
        echo "',
            method: 'post',
            data: data,
            success: function(html) {
                loadRea(html);
                \$('body').on('hidden.bs.modal', '#rea-modal', function() {
                    \$('body').css('overflow', 'visible');
                });

            },
            error: function() {
                bootbox.alert('Oups ! Le serveur a mal répondu à votre requête. Veuillez m\\'excuser !');
            }
        });
    });
</script>

<script>
    \$('form[name=contact]').on('submit', function(e) {
        e.preventDefault();

        var \$this = \$(this)
            , sujet = \$(this).find('#contact_sujet').val()
            , name = \$(this).find('#contact_nom').val()
            , email = \$(this).find('#contact_email').val()
            , message = \$(this).find('#contact_message').val()
            , data = {
                sujet: sujet,
                name: name,
                email: email,
                message: message
            };

        \$.ajax({
            url: '";
        // line 286
        echo $this->env->getExtension('routing')->getPath("ajax_contact");
        echo "',
            method: 'post',
            data: data,
            success: function() {
                \$this
                        .find('#contact_sujet, #contact_nom, #contact_email, #contact_message')
                        .css({
                            'border-color': '#3c763d',
                            'background-color': '#F7F7F7',
                            'pointer-events': 'none'
                        })
                        .removeClass('form-error form-warning')
                        .attr('disabled', 'disabled')
                        .parents('.has-feedback')
                        .removeClass('has-error has-warning').addClass('has-success');
                \$this.find('button').css('backgroundColor', 'green').attr('disabled', 'disabled');
                \$('.contact .c-info i').css('border-color', '#3c763d');
                \$('#form-response')
                        .css('opacity', 0)
                        .text('Merci ! Votre message a été envoyé et je vais y répondre sous quelques jours.')
                        .animate({'opacity': 1}, 1000);
            },
            error: function(r) {
                var response = \$.parseJSON(r.responseText);
                \$('#form-response')
                        .css('opacity', 0)
                        .text((response.email == 'invalid' ? 'Veuillez revérifier les champs (notamment l\\'email qui semble invalide).' : 'Veuillez revérifier les champs en rouge.'))
                        .animate({'opacity': 1}, 1000);

                if(response.message == 'empty')
                    \$this.find('#contact_message').addClass('form-error').parents('.has-feedback').addClass('has-error');
                else
                    \$this.find('#contact_message').removeClass('form-error').parents('.has-feedback').removeClass('has-error');

                if(response.name == 'empty')
                    \$this.find('#contact_nom').addClass('form-error').parents('.has-feedback').addClass('has-error');
                else
                    \$this.find('#contact_nom').removeClass('form-error').parents('.has-feedback').removeClass('has-error');

                if(response.email == 'empty')
                    \$this.find('#contact_email').addClass('form-error').parents('.has-feedback').addClass('has-error');

                if(response.email == 'invalid')
                    \$this.find('#contact_email').addClass('form-warning').parents('.has-feedback').removeClass('has-error').addClass('has-warning');

                if(response.sujet == 'empty')
                    \$this.find('#contact_sujet').addClass('form-error').parents('.has-feedback').addClass('has-error');
                else
                    \$this.find('#contact_sujet').removeClass('form-error').parents('.has-feedback').removeClass('has-error');

                if(!response.email)
                    \$this.find('#contact_email').removeClass('form-error form-warning').parents('.has-feedback').removeClass('has-error');

                if(response.internal_error) {
                    \$('#form-response').css({
                        'font-weight': 'bold',
                        'color': 'red'
                    }).text('Une erreur est survenue dans l\\'envoi de l\\'email');
                }
            }
        });

    });
</script>
<script>
    jQuery(function(\$) {
        \$('#parcours-choice').find('a').on('click', function(e) {
            \$('#parcours-choice').find('a').removeClass('selected');
            \$(this).addClass('selected');
            e.preventDefault();

            var type = \$(this).data('parcours');

            if(type == 'formations') {
                \$('#parcours-experiences').fadeOut('fast', function() {
                    \$('#parcours-formations').fadeIn();
                });
            } else {
                \$('#parcours-formations').fadeOut('fast', function() {
                    \$('#parcours-experiences').fadeIn();
                });
            }

        });

    });
</script>


</body>
</html>";
        
        $__internal_0738db9a46f16d6f33a0b6bd941fe37084c06d0f278f64b68460aa4326d261f1->leave($__internal_0738db9a46f16d6f33a0b6bd941fe37084c06d0f278f64b68460aa4326d261f1_prof);

    }

    public function getTemplateName()
    {
        return "views/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  336 => 286,  299 => 252,  233 => 189,  227 => 186,  221 => 183,  217 => 182,  211 => 179,  202 => 173,  73 => 47,  56 => 33,  22 => 1,);
    }
}
/* <html>*/
/* <head>*/
/*     <base href="/">*/
/*     <title>Steve DAVID - Développeur PHP5/MySQL</title>*/
/*     <meta name="description" content="Site web professionnel de Steve DAVID, développeur web PHP5/MySQL. J'y présente mon parcours et mes réalisations.">*/
/*     <meta name="keywords" content="">*/
/*     <meta charset="utf-8">*/
/*     <meta property="og:image" content="http://www.steve-david.com/images/steve1.png">*/
/*     <meta property="og:title" content="Steve DAVID - Développeur PHP5/MySQL">*/
/*     <meta property="og:description" content="Je suis passionné d'informatique depuis mon plus jeune âge. Je me suis réorienté à 25 ans après avoir fait des études en école de commerce suivies d'un master 2 en ressources humaines.">*/
/*     <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />*/
/*     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css"/>*/
/*     <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet"/>*/
/*     <link href="css/icon.css" rel="stylesheet" type="text/css" />*/
/*     <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,700,600,300' rel='stylesheet' type='text/css'/>*/
/*     <link href='http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,800,700,900' rel='stylesheet' type='text/css'/>*/
/*     <link href='http://fonts.googleapis.com/css?family=Tangerine:400,700' rel='stylesheet' type='text/css'>*/
/*     <link href="css/minislide/flexslider.css" rel="stylesheet" type="text/css" />*/
/*     <link href="css/owl_carousel/owl.carousel.css" rel="stylesheet" type="text/css" />*/
/*     <link href="css/owl_carousel/owl.theme.css" rel="stylesheet" type="text/css" />*/
/*     <link href="css/animate.css" rel="stylesheet" type="text/css" />*/
/*     <link href="css/style.css" rel="stylesheet" type="text/css" />*/
/*     <link href="css/easy-pie.css" rel="stylesheet" type="text/css" />*/
/*     <link href="css/main.css" rel="stylesheet" type="text/css" />*/
/*     <script src="https://maps.googleapis.com/maps/api/js?v=3.exp" type="text/javascript"></script>*/
/*     <link href="css/responsive.css" rel="stylesheet" type="text/css" />*/
/* </head>*/
/* <body>*/
/* <div id="loader-wrapper">*/
/*     <div id="loader"></div>*/
/* </div>*/
/* {{ include('partials/header.html.twig') }}*/
/* <section id="section1" class="cd-section">*/
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="col-md-12">*/
/*                 <div class="box-content about">*/
/*                     <h1> Présentation</h1>*/
/*                     <div class="col-xs-12 col-md-4">*/
/*                         <div class="box-text" id="prez-box-1">*/
/*                             <h2>Je suis...</h2>*/
/*                             <p>...passionné d'informatique depuis mon plus jeune âge. Je me suis réorienté à 25 ans après avoir fait des études en école de commerce suivies d'un master 2 en ressources humaines.</p>*/
/*                         </div>*/
/*                         <div class="box-text" id="prez-box-2">*/
/*                             <h2>Informations personnelles</h2>*/
/*                             <p><strong>Age</strong> : {{ age }} ans</p>*/
/*                             <p>*/
/*                                 <strong>E-mail</strong> :*/
/*                       <span class="email-rtl">*/
/*                           moc.divad-evets<i class="fa fa-at"></i>evets*/
/*                       </span>*/
/*                             </p>*/
/*                             <p><strong>Lieu</strong> : Paris</p>*/
/*                             <p><strong>Disponibilité</strong> : non disponible</p>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="col-xs-12 col-md-4">*/
/*                         <div class="box-img">*/
/*                             <img src="images/steve1.png" alt="" />*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="col-xs-12 col-md-4">*/
/*                         <div class="box-text" id="prez-box-3">*/
/* */
/*                             <h2>Expérience</h2>*/
/*                             <p><strong>2015</strong> : Développeur SF2 / Link Value</p>*/
/*                             <p><strong>2014</strong> : Développeur SF2 / Societe.com</p>*/
/*                             <p><strong>2013</strong> : Développeur ZF1 / Microscoop</p>*/
/*                             <p><strong>2012</strong> : Chargé de recrutement</p>*/
/*                         </div>*/
/*                         <div class="box-text" id="prez-box-4">*/
/* */
/*                             <h2>Formation</h2>*/
/*                             <p><strong>2014</strong> : Développeur / IP-Formation</p>*/
/*                             <p><strong>2011</strong> : Master 2 DRH / Paris 1</p>*/
/*                             <p><strong>2010</strong> : BBA / Sup de Co Montpellier</p>*/
/*                             <p><strong>2006</strong> : Baccalauréat ES</p>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div><!--close box content-->*/
/*             </div>*/
/*         </div><!--close row-->*/
/*     </div><!--close container-->*/
/* */
/* </section><!-- cd-section -->*/
/* */
/* <!--SECTION WORK-->*/
/* */
/* <section id="section3" class="cd-section">*/
/* */
/*     <div class="parallax1">*/
/*         <div class="overlay">*/
/*             <div class="container">*/
/*                 <div class="row">*/
/*                     <div class="col-md-12">*/
/*                         <div class="col-md-4">*/
/*                             <div class="box-img" style="height: 300px;">*/
/*                                 <img src="images/php.png" alt="" />*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="col-md-4">*/
/*                             <div class="box-text" id="mon-metier">*/
/*                                 <h2>Mon métier</h2>*/
/*                                 <p>Je suis développeur web en langages PHP5/MySQL (Symfony2). Je conçois des applications web et des sites internet. J'ai découvert la programmation à l'âge de 13 ans quand j'ai développé <a href="http://www.zelda-boss.com/" class="nice-link" target="_blank">Zelda-Boss</a>.</p>*/
/*                                 <p>Ma scolarité achevée, je décide de me replonger dans ce métier que j'ai toujours considéré comme une passion, expliquant ainsi l'absence d'approfondissement de mes compétences à l'époque.</p>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="col-md-4">*/
/*                             <div class="box-img" style="height: 300px;" >*/
/*                                 <img src="images/mysql.png" alt="" />*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="col-md-12">*/
/*                 <div class="box-content" id="scroll-parcours">*/
/*                     <h1>Parcours</h1>*/
/*                     <div class="col-md-6">*/
/*                         <div class="box-text">*/
/*                             <h2>J'ai fait...</h2>*/
/*                             <p>...une école de commerce car disposant d'une appétance pour les sciences économiques et sociales. Je me suis spécialisé en RH avec un master 2 pour faire coordonner mes stages avec mon parcours scolaire. Enfin, je me suis réorienté vers le développement web suite à ma première expérience en recrutement.</p>*/
/*                             <p class="slogan">" Creativity requires the courage to let go of certainties "</p>*/
/*                             <!--<p class="signature">Erich Fromm</p>-->*/
/*                             <img class="signature" src="images/signature.jpg" alt="" />*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="col-md-6">*/
/*                         <div class="skills-area triggerAnimation animated" data-animate="fadeInLeft">*/
/* */
/*                             <div class="box-text">*/
/*                                 <h2>Domaines d'expertise</h2>*/
/*                                 <div class="skills-box">*/
/*                                     <div class="skills-progress">*/
/*                                         <p>Informatique<span>85%</span></p>*/
/*                                         <div class="meter nostrips develope">*/
/*                                             <p style="width: 85%"></p>*/
/*                                         </div>*/
/*                                         <p>Management et RH<span>60%</span></p>*/
/*                                         <div class="meter nostrips design">*/
/*                                             <p style="width: 60%"></p>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="row">*/
/*             <div class="col-md-12 col-xs-12" id="parcours-choice">*/
/*                 <div class="col-md-6 col-xs-12" style="text-align: right">*/
/*                     <a href="#" data-parcours="experiences" class="selected">*/
/*                         <i class="fa fa-briefcase"></i>*/
/*                         Expériences*/
/*                     </a>*/
/*                 </div>*/
/*                 <div class="col-md-6 col-xs-12" style="text-align: left">*/
/*                     <a href="#" data-parcours="formations">*/
/*                         <i class="fa fa-university"></i>*/
/*                         Formation*/
/*                     </a>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="col-md-12">*/
/*                 {{ render(controller('AppBundle:Front:parcours')) }}*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </section>*/
/* <section id="section2" class="cd-section">*/
/*     {{ render(controller('AppBundle:Front:competences')) }}*/
/* </section>*/
/* <section>*/
/*     {{ render(controller('AppBundle:Front:citations')) }}*/
/*     {{ render(controller('AppBundle:Front:realisations')) }}*/
/* </section>*/
/* <section id="section5" class="cd-section">*/
/*     {{ include('partials/map.html.twig') }}*/
/* </section>*/
/* <section id="section4" class="cd-section">*/
/*     {{ render(controller('AppBundle:Front:contact')) }}*/
/* </section><!-- cd-section -->*/
/* */
/* <section id="section6" class="cd-section">*/
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="col-md-12">*/
/*                 <footer class="box-content">*/
/*                     <div class="footer-logo" style="margin-bottom: 50px;">*/
/*                         <img rel="tooltip" data-placement="top" title="Stack Overflow" src="http://stackoverflow.com/users/flair/2788131.png?theme=dark" width="208" height="58">*/
/*                     </div>*/
/*                     <div class="footer-social">*/
/*                         <a href="https://www.linkedin.com/profile/view?id=145145986" title="LinkedIn" target="_blank"><i class="fa fa-linkedin"></i></a>*/
/*                         <a href="http://www.viadeo.com/profile/0021o28af1y2fcf8/" title="Viadeo" target="_blank"><img src="images/viadeo.png"/></a>*/
/*                         <a href="https://www.github.com/stevedavid/" title="GitHub" target="_blank"><i class="fa fa-github"></i></a>*/
/*                         <a href="http://stackoverflow.com/users/2788131/d4v1d?tab=profile" title="Stack Overflow" target="_blank"><i class="fa fa-stack-overflow"></i></a>*/
/*                     </div>*/
/*                 </footer>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </section>*/
/* */
/* */
/* <script src="js/jquery.min.js" type="text/javascript"></script>*/
/* <script src="js/bootstrap.min.js" type="text/javascript"></script>*/
/* <script src="js/gallery/isotope.js" type="text/javascript"></script>*/
/* <script src="js/jquery.ui.totop.js" type="text/javascript"></script>*/
/* <script src="js/owl_carousel/owl.carousel.js" type="text/javascript"></script>*/
/* <script src="js/minislide/jquery.flexslider.js" type="text/javascript"></script>*/
/* <script src="js/jquery.appear.js" type="text/javascript"></script>*/
/* <script src="js/jquery.waypoints.js" type="text/javascript"></script>*/
/* <script src="js/bootbox.min.js" type="text/javascript"></script>*/
/* <script src="js/raphael.min.js" type="text/javascript"></script>*/
/* <script src="js/morris.js" type="text/javascript"></script>*/
/* <script src="js/jquery.easypiechart.js" type="text/javascript"></script>*/
/* <script src="js/main.js" type="text/javascript"></script> <!-- Resource jQuery -->*/
/* <script type="text/javascript">*/
/*     jQuery(function($) {*/
/*         $('.footer-social').find('> a').tooltip({*/
/*             placement: 'top',*/
/*             trigger: 'hover'*/
/*         });*/
/*     });*/
/* </script>*/
/* <script type="text/javascript">*/
/*     (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){*/
/*         (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),*/
/*             m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)*/
/*     })(window,document,'script','//www.google-analytics.com/analytics.js','ga');*/
/* */
/*     ga('create', 'UA-43909780-1', 'auto');*/
/*     ga('send', 'pageview');*/
/* */
/* </script>*/
/* <script>*/
/*     $('.smooth-redirect').on('click', function(e) {*/
/*         e.preventDefault();*/
/*         var realisation = $(this).data('rea')*/
/*         ,   data = {*/
/*             realisation: realisation*/
/*         };*/
/*         $.ajax({*/
/*             url: '{{ path('ajax_realisation') }}',*/
/*             method: 'post',*/
/*             data: data,*/
/*             success: function(html) {*/
/*                 loadRea(html);*/
/*                 $('body').on('hidden.bs.modal', '#rea-modal', function() {*/
/*                     $('body').css('overflow', 'visible');*/
/*                 });*/
/* */
/*             },*/
/*             error: function() {*/
/*                 bootbox.alert('Oups ! Le serveur a mal répondu à votre requête. Veuillez m\'excuser !');*/
/*             }*/
/*         });*/
/*     });*/
/* </script>*/
/* */
/* <script>*/
/*     $('form[name=contact]').on('submit', function(e) {*/
/*         e.preventDefault();*/
/* */
/*         var $this = $(this)*/
/*             , sujet = $(this).find('#contact_sujet').val()*/
/*             , name = $(this).find('#contact_nom').val()*/
/*             , email = $(this).find('#contact_email').val()*/
/*             , message = $(this).find('#contact_message').val()*/
/*             , data = {*/
/*                 sujet: sujet,*/
/*                 name: name,*/
/*                 email: email,*/
/*                 message: message*/
/*             };*/
/* */
/*         $.ajax({*/
/*             url: '{{ path('ajax_contact') }}',*/
/*             method: 'post',*/
/*             data: data,*/
/*             success: function() {*/
/*                 $this*/
/*                         .find('#contact_sujet, #contact_nom, #contact_email, #contact_message')*/
/*                         .css({*/
/*                             'border-color': '#3c763d',*/
/*                             'background-color': '#F7F7F7',*/
/*                             'pointer-events': 'none'*/
/*                         })*/
/*                         .removeClass('form-error form-warning')*/
/*                         .attr('disabled', 'disabled')*/
/*                         .parents('.has-feedback')*/
/*                         .removeClass('has-error has-warning').addClass('has-success');*/
/*                 $this.find('button').css('backgroundColor', 'green').attr('disabled', 'disabled');*/
/*                 $('.contact .c-info i').css('border-color', '#3c763d');*/
/*                 $('#form-response')*/
/*                         .css('opacity', 0)*/
/*                         .text('Merci ! Votre message a été envoyé et je vais y répondre sous quelques jours.')*/
/*                         .animate({'opacity': 1}, 1000);*/
/*             },*/
/*             error: function(r) {*/
/*                 var response = $.parseJSON(r.responseText);*/
/*                 $('#form-response')*/
/*                         .css('opacity', 0)*/
/*                         .text((response.email == 'invalid' ? 'Veuillez revérifier les champs (notamment l\'email qui semble invalide).' : 'Veuillez revérifier les champs en rouge.'))*/
/*                         .animate({'opacity': 1}, 1000);*/
/* */
/*                 if(response.message == 'empty')*/
/*                     $this.find('#contact_message').addClass('form-error').parents('.has-feedback').addClass('has-error');*/
/*                 else*/
/*                     $this.find('#contact_message').removeClass('form-error').parents('.has-feedback').removeClass('has-error');*/
/* */
/*                 if(response.name == 'empty')*/
/*                     $this.find('#contact_nom').addClass('form-error').parents('.has-feedback').addClass('has-error');*/
/*                 else*/
/*                     $this.find('#contact_nom').removeClass('form-error').parents('.has-feedback').removeClass('has-error');*/
/* */
/*                 if(response.email == 'empty')*/
/*                     $this.find('#contact_email').addClass('form-error').parents('.has-feedback').addClass('has-error');*/
/* */
/*                 if(response.email == 'invalid')*/
/*                     $this.find('#contact_email').addClass('form-warning').parents('.has-feedback').removeClass('has-error').addClass('has-warning');*/
/* */
/*                 if(response.sujet == 'empty')*/
/*                     $this.find('#contact_sujet').addClass('form-error').parents('.has-feedback').addClass('has-error');*/
/*                 else*/
/*                     $this.find('#contact_sujet').removeClass('form-error').parents('.has-feedback').removeClass('has-error');*/
/* */
/*                 if(!response.email)*/
/*                     $this.find('#contact_email').removeClass('form-error form-warning').parents('.has-feedback').removeClass('has-error');*/
/* */
/*                 if(response.internal_error) {*/
/*                     $('#form-response').css({*/
/*                         'font-weight': 'bold',*/
/*                         'color': 'red'*/
/*                     }).text('Une erreur est survenue dans l\'envoi de l\'email');*/
/*                 }*/
/*             }*/
/*         });*/
/* */
/*     });*/
/* </script>*/
/* <script>*/
/*     jQuery(function($) {*/
/*         $('#parcours-choice').find('a').on('click', function(e) {*/
/*             $('#parcours-choice').find('a').removeClass('selected');*/
/*             $(this).addClass('selected');*/
/*             e.preventDefault();*/
/* */
/*             var type = $(this).data('parcours');*/
/* */
/*             if(type == 'formations') {*/
/*                 $('#parcours-experiences').fadeOut('fast', function() {*/
/*                     $('#parcours-formations').fadeIn();*/
/*                 });*/
/*             } else {*/
/*                 $('#parcours-formations').fadeOut('fast', function() {*/
/*                     $('#parcours-experiences').fadeIn();*/
/*                 });*/
/*             }*/
/* */
/*         });*/
/* */
/*     });*/
/* </script>*/
/* */
/* */
/* </body>*/
/* </html>*/
