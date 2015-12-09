<?php

/* views/admin/calendrier/index.html.twig */
class __TwigTemplate_a4d8688c04d77aa6d25f0a8bd7e848c510284f28e9caf181d3b22c7c389db23c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::admin/base.html.twig", "views/admin/calendrier/index.html.twig", 1);
        $this->blocks = array(
            'css' => array($this, 'block_css'),
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
        $__internal_061545453048f5e7764878241e681c94782bc0ed1cbbf30d2217a9172c45fdee = $this->env->getExtension("native_profiler");
        $__internal_061545453048f5e7764878241e681c94782bc0ed1cbbf30d2217a9172c45fdee->enter($__internal_061545453048f5e7764878241e681c94782bc0ed1cbbf30d2217a9172c45fdee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "views/admin/calendrier/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_061545453048f5e7764878241e681c94782bc0ed1cbbf30d2217a9172c45fdee->leave($__internal_061545453048f5e7764878241e681c94782bc0ed1cbbf30d2217a9172c45fdee_prof);

    }

    // line 3
    public function block_css($context, array $blocks = array())
    {
        $__internal_e65870e599ca7d9534f672e53570c644d49eb2fd964dba3d2a9a88e7eb273351 = $this->env->getExtension("native_profiler");
        $__internal_e65870e599ca7d9534f672e53570c644d49eb2fd964dba3d2a9a88e7eb273351->enter($__internal_e65870e599ca7d9534f672e53570c644d49eb2fd964dba3d2a9a88e7eb273351_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"/admin/plugins/fullcalendar/fullcalendar.css\"/>
";
        
        $__internal_e65870e599ca7d9534f672e53570c644d49eb2fd964dba3d2a9a88e7eb273351->leave($__internal_e65870e599ca7d9534f672e53570c644d49eb2fd964dba3d2a9a88e7eb273351_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_cdd2d0891f41ae05dae1e523ae9902d1e6ef07cc632dab0c34595dc27b027211 = $this->env->getExtension("native_profiler");
        $__internal_cdd2d0891f41ae05dae1e523ae9902d1e6ef07cc632dab0c34595dc27b027211->enter($__internal_cdd2d0891f41ae05dae1e523ae9902d1e6ef07cc632dab0c34595dc27b027211_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <div class=\"row\">
        <div class=\"col-md-3\">
            <div class=\"box box-solid\">
                <div class=\"box-header with-border\">
                    <h4 class=\"box-title\">Evénements</h4>
                </div>
                <div class=\"box-body\">
                    <!-- the events -->
                    <div id=\"external-events\">
                    </div>
                </div><!-- /.box-body -->
            </div><!-- /. box -->
            <div class=\"box box-solid\">
                <div class=\"box-header with-border\">
                    <h3 class=\"box-title\">Créer un évenement</h3>
                </div>
                <div class=\"box-body\">
                    <div class=\"btn-group\" style=\"width: 100%; margin-bottom: 10px;\">
                        <!--<button type=\"button\" id=\"color-chooser-btn\" class=\"btn btn-info btn-block dropdown-toggle\" data-toggle=\"dropdown\">Color <span class=\"caret\"></span></button>-->
                        <ul class=\"fc-color-picker\" id=\"color-chooser\">
                            <li><a class=\"text-light-blue\" href=\"#\"><i class=\"fa fa-square\"></i></a></li>
                            <li><a class=\"text-yellow\" href=\"#\"><i class=\"fa fa-square\"></i></a></li>
                            <li><a class=\"text-orange\" href=\"#\"><i class=\"fa fa-square\"></i></a></li>
                            <li><a class=\"text-green\" href=\"#\"><i class=\"fa fa-square\"></i></a></li>
                            <li><a class=\"text-red\" href=\"#\"><i class=\"fa fa-square\"></i></a></li>
                            <li><a class=\"text-purple\" href=\"#\"><i class=\"fa fa-square\"></i></a></li>
                            <li><a class=\"text-muted\" href=\"#\"><i class=\"fa fa-square\"></i></a></li>
                            <li><a class=\"text-navy\" href=\"#\"><i class=\"fa fa-square\"></i></a></li>
                        </ul>
                    </div><!-- /btn-group -->
                    <div class=\"input-group\">
                        <input id=\"new-event\" type=\"text\" class=\"form-control\" placeholder=\"Evénement\">
                        <div class=\"input-group-btn\">
                            <button id=\"add-new-event\" type=\"button\" class=\"btn btn-primary btn-flat\">Ajouter</button>
                        </div><!-- /btn-group -->
                    </div><!-- /input-group -->
                </div>
            </div>
        </div><!-- /.col -->
        <div class=\"col-md-9\">
            <div class=\"box box-primary\">
                <div class=\"box-body no-padding\">
                    <!-- THE CALENDAR -->
                    <div id=\"calendar\"></div>
                </div><!-- /.box-body -->
            </div><!-- /. box -->
        </div><!-- /.col -->
    </div><!-- /.row -->
";
        
        $__internal_cdd2d0891f41ae05dae1e523ae9902d1e6ef07cc632dab0c34595dc27b027211->leave($__internal_cdd2d0891f41ae05dae1e523ae9902d1e6ef07cc632dab0c34595dc27b027211_prof);

    }

    // line 58
    public function block_js($context, array $blocks = array())
    {
        $__internal_cb82831ff209fc198c03d58430af0543bfa7ca31c2e5e26c10e8f91f2187ddbd = $this->env->getExtension("native_profiler");
        $__internal_cb82831ff209fc198c03d58430af0543bfa7ca31c2e5e26c10e8f91f2187ddbd->enter($__internal_cb82831ff209fc198c03d58430af0543bfa7ca31c2e5e26c10e8f91f2187ddbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        // line 59
        echo "    <script src=\"/admin/plugins/fullcalendar/fullcalendar.min.js\" type=\"text/javascript\"></script>
    <script src=\"/admin/plugins/fullcalendar/fullcalendar-fr.min.js\" type=\"text/javascript\"></script>
    <script>
        jQuery(function(\$) {

            function ini_events(ele) {
                ele.each(function () {

                    // create an Event Object (http://arshaw.com/fullcalendar/docs/event_data/Event_Object/)
                    // it doesn't need to have a start or end
                    var eventObject = {
                        title: \$.trim(\$(this).text()) // use the element's text as the event title
                    };

                    // store the Event Object in the DOM element so we can get to it later
                    \$(this).data('eventObject', eventObject);

                    // make the event draggable using jQuery UI
                    \$(this).draggable({
                        zIndex: 1070,
                        revert: true, // will cause the event to go back to its
                        revertDuration: 0  //  original position after the drag
                    });

                });
            }
            ini_events(\$('#external-events div.external-event'));

            /* initialize the calendar
             -----------------------------------------------------------------*/
            //Date for the calendar events (dummy data)
            var date = new Date();
            var d = date.getDate(),
                    m = date.getMonth(),
                    y = date.getFullYear();
            \$('#calendar').fullCalendar({
                lang: 'fr',
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'month,agendaWeek,agendaDay'
                },
                //Random default events
                events: [
                    {
                        title: 'Long Event',
                        start: new Date(y, m, d - 5),
                        end: new Date(y, m, d - 2),
                        backgroundColor: \"#f39c12\", //yellow
                        borderColor: \"#f39c12\" //yellow
                    },
                ],
                editable: true,
                droppable: true, // this allows things to be dropped onto the calendar !!!
                drop: function (date, allDay) { // this function is called when something is dropped

                    // retrieve the dropped element's stored Event Object
                    var originalEventObject = \$(this).data('eventObject');

                    // we need to copy it, so that multiple events don't have a reference to the same object
                    var copiedEventObject = \$.extend({}, originalEventObject);

                    // assign it the date that was reported
                    copiedEventObject.start = date;
                    copiedEventObject.allDay = allDay;
                    copiedEventObject.backgroundColor = \$(this).css(\"background-color\");
                    copiedEventObject.borderColor = \$(this).css(\"border-color\");

                    // render the event on the calendar
                    // the last `true` argument determines if the event \"sticks\" (http://arshaw.com/fullcalendar/docs/event_rendering/renderEvent/)
                    \$('#calendar').fullCalendar('renderEvent', copiedEventObject, true);

                    // remove the element from the \"Draggable Events\" list
                    \$(this).remove();

                }
            });

            /* ADDING EVENTS */
            var currColor = \"#3c8dbc\"; //Red by default
            //Color chooser button
            var colorChooser = \$(\"#color-chooser-btn\");
            \$(\"#color-chooser > li > a\").click(function (e) {
                e.preventDefault();
                //Save color
                currColor = \$(this).css(\"color\");
                //Add color effect to button
                \$('#add-new-event').css({\"background-color\": currColor, \"border-color\": currColor});
            });
            \$(\"#add-new-event\").click(function (e) {
                e.preventDefault();
                //Get value and make sure it is not null
                var val = \$(\"#new-event\").val();
                if (val.length == 0) {
                    return;
                }

                var data = {
                        'titre': val,
                        'couleur': currColor,
                };

                \$.ajax({
                    url: '";
        // line 162
        echo $this->env->getExtension('routing')->getPath("admin_calendrier_creer-evenement");
        echo "',
                    method: 'post',
                    data: data,
                    success: function() {
                        var \$event = \$(\"<div />\");
                        \$event
                                .css({\"background-color\": currColor, \"color\": \"#fff\"})
                                .addClass(\"external-event\")
                                .html(val);
                        \$('#external-events').prepend(\$event.hide().fadeIn('slow'));

                        //Add draggable functionality
                        ini_events(\$event);

                        //Remove event from text input
                        \$(\"#new-event\").val('');
                    },
                    error: function() {

                    }
                });

                //Create events
            });

        });
    </script>
";
        
        $__internal_cb82831ff209fc198c03d58430af0543bfa7ca31c2e5e26c10e8f91f2187ddbd->leave($__internal_cb82831ff209fc198c03d58430af0543bfa7ca31c2e5e26c10e8f91f2187ddbd_prof);

    }

    public function getTemplateName()
    {
        return "views/admin/calendrier/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  222 => 162,  117 => 59,  111 => 58,  56 => 8,  50 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '::admin/base.html.twig' %}*/
/* */
/* {% block css %}*/
/*     <link rel="stylesheet" href="/admin/plugins/fullcalendar/fullcalendar.css"/>*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     <div class="row">*/
/*         <div class="col-md-3">*/
/*             <div class="box box-solid">*/
/*                 <div class="box-header with-border">*/
/*                     <h4 class="box-title">Evénements</h4>*/
/*                 </div>*/
/*                 <div class="box-body">*/
/*                     <!-- the events -->*/
/*                     <div id="external-events">*/
/*                     </div>*/
/*                 </div><!-- /.box-body -->*/
/*             </div><!-- /. box -->*/
/*             <div class="box box-solid">*/
/*                 <div class="box-header with-border">*/
/*                     <h3 class="box-title">Créer un évenement</h3>*/
/*                 </div>*/
/*                 <div class="box-body">*/
/*                     <div class="btn-group" style="width: 100%; margin-bottom: 10px;">*/
/*                         <!--<button type="button" id="color-chooser-btn" class="btn btn-info btn-block dropdown-toggle" data-toggle="dropdown">Color <span class="caret"></span></button>-->*/
/*                         <ul class="fc-color-picker" id="color-chooser">*/
/*                             <li><a class="text-light-blue" href="#"><i class="fa fa-square"></i></a></li>*/
/*                             <li><a class="text-yellow" href="#"><i class="fa fa-square"></i></a></li>*/
/*                             <li><a class="text-orange" href="#"><i class="fa fa-square"></i></a></li>*/
/*                             <li><a class="text-green" href="#"><i class="fa fa-square"></i></a></li>*/
/*                             <li><a class="text-red" href="#"><i class="fa fa-square"></i></a></li>*/
/*                             <li><a class="text-purple" href="#"><i class="fa fa-square"></i></a></li>*/
/*                             <li><a class="text-muted" href="#"><i class="fa fa-square"></i></a></li>*/
/*                             <li><a class="text-navy" href="#"><i class="fa fa-square"></i></a></li>*/
/*                         </ul>*/
/*                     </div><!-- /btn-group -->*/
/*                     <div class="input-group">*/
/*                         <input id="new-event" type="text" class="form-control" placeholder="Evénement">*/
/*                         <div class="input-group-btn">*/
/*                             <button id="add-new-event" type="button" class="btn btn-primary btn-flat">Ajouter</button>*/
/*                         </div><!-- /btn-group -->*/
/*                     </div><!-- /input-group -->*/
/*                 </div>*/
/*             </div>*/
/*         </div><!-- /.col -->*/
/*         <div class="col-md-9">*/
/*             <div class="box box-primary">*/
/*                 <div class="box-body no-padding">*/
/*                     <!-- THE CALENDAR -->*/
/*                     <div id="calendar"></div>*/
/*                 </div><!-- /.box-body -->*/
/*             </div><!-- /. box -->*/
/*         </div><!-- /.col -->*/
/*     </div><!-- /.row -->*/
/* {% endblock %}*/
/* */
/* {% block js %}*/
/*     <script src="/admin/plugins/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>*/
/*     <script src="/admin/plugins/fullcalendar/fullcalendar-fr.min.js" type="text/javascript"></script>*/
/*     <script>*/
/*         jQuery(function($) {*/
/* */
/*             function ini_events(ele) {*/
/*                 ele.each(function () {*/
/* */
/*                     // create an Event Object (http://arshaw.com/fullcalendar/docs/event_data/Event_Object/)*/
/*                     // it doesn't need to have a start or end*/
/*                     var eventObject = {*/
/*                         title: $.trim($(this).text()) // use the element's text as the event title*/
/*                     };*/
/* */
/*                     // store the Event Object in the DOM element so we can get to it later*/
/*                     $(this).data('eventObject', eventObject);*/
/* */
/*                     // make the event draggable using jQuery UI*/
/*                     $(this).draggable({*/
/*                         zIndex: 1070,*/
/*                         revert: true, // will cause the event to go back to its*/
/*                         revertDuration: 0  //  original position after the drag*/
/*                     });*/
/* */
/*                 });*/
/*             }*/
/*             ini_events($('#external-events div.external-event'));*/
/* */
/*             /* initialize the calendar*/
/*              -----------------------------------------------------------------*//* */
/*             //Date for the calendar events (dummy data)*/
/*             var date = new Date();*/
/*             var d = date.getDate(),*/
/*                     m = date.getMonth(),*/
/*                     y = date.getFullYear();*/
/*             $('#calendar').fullCalendar({*/
/*                 lang: 'fr',*/
/*                 header: {*/
/*                     left: 'prev,next today',*/
/*                     center: 'title',*/
/*                     right: 'month,agendaWeek,agendaDay'*/
/*                 },*/
/*                 //Random default events*/
/*                 events: [*/
/*                     {*/
/*                         title: 'Long Event',*/
/*                         start: new Date(y, m, d - 5),*/
/*                         end: new Date(y, m, d - 2),*/
/*                         backgroundColor: "#f39c12", //yellow*/
/*                         borderColor: "#f39c12" //yellow*/
/*                     },*/
/*                 ],*/
/*                 editable: true,*/
/*                 droppable: true, // this allows things to be dropped onto the calendar !!!*/
/*                 drop: function (date, allDay) { // this function is called when something is dropped*/
/* */
/*                     // retrieve the dropped element's stored Event Object*/
/*                     var originalEventObject = $(this).data('eventObject');*/
/* */
/*                     // we need to copy it, so that multiple events don't have a reference to the same object*/
/*                     var copiedEventObject = $.extend({}, originalEventObject);*/
/* */
/*                     // assign it the date that was reported*/
/*                     copiedEventObject.start = date;*/
/*                     copiedEventObject.allDay = allDay;*/
/*                     copiedEventObject.backgroundColor = $(this).css("background-color");*/
/*                     copiedEventObject.borderColor = $(this).css("border-color");*/
/* */
/*                     // render the event on the calendar*/
/*                     // the last `true` argument determines if the event "sticks" (http://arshaw.com/fullcalendar/docs/event_rendering/renderEvent/)*/
/*                     $('#calendar').fullCalendar('renderEvent', copiedEventObject, true);*/
/* */
/*                     // remove the element from the "Draggable Events" list*/
/*                     $(this).remove();*/
/* */
/*                 }*/
/*             });*/
/* */
/*             /* ADDING EVENTS *//* */
/*             var currColor = "#3c8dbc"; //Red by default*/
/*             //Color chooser button*/
/*             var colorChooser = $("#color-chooser-btn");*/
/*             $("#color-chooser > li > a").click(function (e) {*/
/*                 e.preventDefault();*/
/*                 //Save color*/
/*                 currColor = $(this).css("color");*/
/*                 //Add color effect to button*/
/*                 $('#add-new-event').css({"background-color": currColor, "border-color": currColor});*/
/*             });*/
/*             $("#add-new-event").click(function (e) {*/
/*                 e.preventDefault();*/
/*                 //Get value and make sure it is not null*/
/*                 var val = $("#new-event").val();*/
/*                 if (val.length == 0) {*/
/*                     return;*/
/*                 }*/
/* */
/*                 var data = {*/
/*                         'titre': val,*/
/*                         'couleur': currColor,*/
/*                 };*/
/* */
/*                 $.ajax({*/
/*                     url: '{{ path('admin_calendrier_creer-evenement') }}',*/
/*                     method: 'post',*/
/*                     data: data,*/
/*                     success: function() {*/
/*                         var $event = $("<div />");*/
/*                         $event*/
/*                                 .css({"background-color": currColor, "color": "#fff"})*/
/*                                 .addClass("external-event")*/
/*                                 .html(val);*/
/*                         $('#external-events').prepend($event.hide().fadeIn('slow'));*/
/* */
/*                         //Add draggable functionality*/
/*                         ini_events($event);*/
/* */
/*                         //Remove event from text input*/
/*                         $("#new-event").val('');*/
/*                     },*/
/*                     error: function() {*/
/* */
/*                     }*/
/*                 });*/
/* */
/*                 //Create events*/
/*             });*/
/* */
/*         });*/
/*     </script>*/
/* {% endblock %}*/
