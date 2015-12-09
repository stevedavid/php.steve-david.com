<?php

/* views/admin/index/index.html.twig */
class __TwigTemplate_e49ef565f114e9ebc0c5c410076c1499938691f988fb95a33b4540e11d35a573 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::admin/base.html.twig", "views/admin/index/index.html.twig", 1);
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
        $__internal_383d7bb339965f318f5b2d857b3eb842660f77f243b72080c94b9f92399cca34 = $this->env->getExtension("native_profiler");
        $__internal_383d7bb339965f318f5b2d857b3eb842660f77f243b72080c94b9f92399cca34->enter($__internal_383d7bb339965f318f5b2d857b3eb842660f77f243b72080c94b9f92399cca34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "views/admin/index/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_383d7bb339965f318f5b2d857b3eb842660f77f243b72080c94b9f92399cca34->leave($__internal_383d7bb339965f318f5b2d857b3eb842660f77f243b72080c94b9f92399cca34_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f9955ce93b50c98fe2ca783bde3e16969d7e1d718049a93a2e1e9aa89b075de7 = $this->env->getExtension("native_profiler");
        $__internal_f9955ce93b50c98fe2ca783bde3e16969d7e1d718049a93a2e1e9aa89b075de7->enter($__internal_f9955ce93b50c98fe2ca783bde3e16969d7e1d718049a93a2e1e9aa89b075de7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <!-- Content Header (Page header) -->
    <!-- Main content -->
<div class=\"col-lg-3 col-xs-6\">
    <!-- small box -->
    <div class=\"small-box bg-aqua\">
        <div class=\"inner\">
            <h3>";
        // line 10
        echo twig_escape_filter($this->env, (twig_length_filter($this->env, $this->getAttribute((isset($context["parcours"]) ? $context["parcours"] : null), "experiences", array())) + twig_length_filter($this->env, $this->getAttribute((isset($context["parcours"]) ? $context["parcours"] : null), "formation", array()))), "html", null, true);
        echo "</h3>
            <p>Expériences</p>
        </div>
        <div class=\"icon\">
            <i class=\"fa fa-university\"></i>
        </div>
        <a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("admin_yaml_edit", array("ymlFile" => "parcours"));
        echo "\" class=\"small-box-footer\">Voir le détail <i class=\"fa fa-arrow-circle-right\"></i></a>
    </div>
</div><!-- ./col -->
<div class=\"col-lg-3 col-xs-6\">
    <!-- small box -->
    <div class=\"small-box bg-green\">
        <div class=\"inner\">
            <h3>";
        // line 23
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["realisations"]) ? $context["realisations"] : null)), "html", null, true);
        echo "</h3>
            <p>Réalisations</p>
        </div>
        <div class=\"icon\">
            <i class=\"fa fa-calendar\"></i>
        </div>
        <a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("admin_yaml_edit", array("ymlFile" => "realisations"));
        echo "\" class=\"small-box-footer\">Voir le détail <i class=\"fa fa-arrow-circle-right\"></i></a>
    </div>
</div><!-- ./col -->
<div class=\"col-lg-3 col-xs-6\">
    <!-- small box -->
    <div class=\"small-box bg-yellow\">
        <div class=\"inner\">
            <h3>";
        // line 36
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["citations"]) ? $context["citations"] : null)), "html", null, true);
        echo "</h3>
            <p>Citations</p>
        </div>
        <div class=\"icon\">
            <i class=\"fa fa-comments\"></i>
        </div>
        <a href=\"";
        // line 42
        echo $this->env->getExtension('routing')->getPath("admin_yaml_edit", array("ymlFile" => "citations"));
        echo "\" class=\"small-box-footer\">Voir le détail <i class=\"fa fa-arrow-circle-right\"></i></a>
    </div>
</div><!-- ./col -->
<div class=\"col-lg-3 col-xs-6\">
    <!-- small box -->
    <div class=\"small-box bg-red\">
        <div class=\"inner\">
            <h3>";
        // line 49
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["competences"]) ? $context["competences"] : null)), "html", null, true);
        echo "</h3>
            <p>Domaines de compétences</p>
        </div>
        <div class=\"icon\">
            <i class=\"fa fa-code\"></i>
        </div>
        <a href=\"";
        // line 55
        echo $this->env->getExtension('routing')->getPath("admin_yaml_edit", array("ymlFile" => "competences"));
        echo "\" class=\"small-box-footer\">Voir le détail <i class=\"fa fa-arrow-circle-right\"></i></a>
    </div>
</div><!-- ./col -->
</div><!-- /.row -->
<!-- Main row -->
<div class=\"row\">
<!-- Left col -->
<section class=\"col-lg-7 connectedSortable\">
    <!-- Custom tabs (Charts with tabs)-->
    <div class=\"nav-tabs-custom\">
        <!-- Tabs within a box -->
        <ul class=\"nav nav-tabs pull-right\">
            <li class=\"active\"><a href=\"#revenue-chart\" data-toggle=\"tab\">Area</a></li>
            <li><a href=\"#sales-chart\" data-toggle=\"tab\">Donut</a></li>
            <li class=\"pull-left header\"><i class=\"fa fa-inbox\"></i> Sales</li>
        </ul>
        <div class=\"tab-content no-padding\">
            <!-- Morris chart - Sales -->
            <div class=\"chart tab-pane active\" id=\"revenue-chart\" style=\"position: relative; height: 300px;\"></div>
            <div class=\"chart tab-pane\" id=\"sales-chart\" style=\"position: relative; height: 300px;\"></div>
        </div>
    </div><!-- /.nav-tabs-custom -->

    <!-- Chat box -->
    <div class=\"box box-success\">
        <div class=\"box-header\">
            <i class=\"fa fa-comments-o\"></i>
            <h3 class=\"box-title\">Chat</h3>
            <div class=\"box-tools pull-right\" data-toggle=\"tooltip\" title=\"Status\">
                <div class=\"btn-group\" data-toggle=\"btn-toggle\" >
                    <button type=\"button\" class=\"btn btn-default btn-sm active\"><i class=\"fa fa-square text-green\"></i></button>
                    <button type=\"button\" class=\"btn btn-default btn-sm\"><i class=\"fa fa-square text-red\"></i></button>
                </div>
            </div>
        </div>
        <div class=\"box-body chat\" id=\"chat-box\">
            <!-- chat item -->
            <div class=\"item\">
                <img src=\"/admin/dist/img/user4-128x128.jpg\" alt=\"user image\" class=\"online\">
                <p class=\"message\">
                    <a href=\"#\" class=\"name\">
                        <small class=\"text-muted pull-right\"><i class=\"fa fa-clock-o\"></i> 2:15</small>
                        Mike Doe
                    </a>
                    I would like to meet you to discuss the latest news about
                    the arrival of the new theme. They say it is going to be one the
                    best themes on the market
                </p>
                <div class=\"attachment\">
                    <h4>Attachments:</h4>
                    <p class=\"filename\">
                        Theme-thumbnail-image.jpg
                    </p>
                    <div class=\"pull-right\">
                        <button class=\"btn btn-primary btn-sm btn-flat\">Open</button>
                    </div>
                </div><!-- /.attachment -->
            </div><!-- /.item -->
            <!-- chat item -->
            <div class=\"item\">
                <img src=\"/admin/dist/img/user3-128x128.jpg\" alt=\"user image\" class=\"offline\">
                <p class=\"message\">
                    <a href=\"#\" class=\"name\">
                        <small class=\"text-muted pull-right\"><i class=\"fa fa-clock-o\"></i> 5:15</small>
                        Alexander Pierce
                    </a>
                    I would like to meet you to discuss the latest news about
                    the arrival of the new theme. They say it is going to be one the
                    best themes on the market
                </p>
            </div><!-- /.item -->
            <!-- chat item -->
            <div class=\"item\">
                <img src=\"/admin/dist/img/user2-160x160.jpg\" alt=\"user image\" class=\"offline\">
                <p class=\"message\">
                    <a href=\"#\" class=\"name\">
                        <small class=\"text-muted pull-right\"><i class=\"fa fa-clock-o\"></i> 5:30</small>
                        Susan Doe
                    </a>
                    I would like to meet you to discuss the latest news about
                    the arrival of the new theme. They say it is going to be one the
                    best themes on the market
                </p>
            </div><!-- /.item -->
        </div><!-- /.chat -->
        <div class=\"box-footer\">
            <div class=\"input-group\">
                <input class=\"form-control\" placeholder=\"Type message...\">
                <div class=\"input-group-btn\">
                    <button class=\"btn btn-success\"><i class=\"fa fa-plus\"></i></button>
                </div>
            </div>
        </div>
    </div><!-- /.box (chat box) -->

    <!-- TO DO List -->
    <div class=\"box box-primary\">
        <div class=\"box-header\">
            <i class=\"ion ion-clipboard\"></i>
            <h3 class=\"box-title\">To Do List</h3>
            <div class=\"box-tools pull-right\">
                <ul class=\"pagination pagination-sm inline\">
                    <li><a href=\"#\">&laquo;</a></li>
                    <li><a href=\"#\">1</a></li>
                    <li><a href=\"#\">2</a></li>
                    <li><a href=\"#\">3</a></li>
                    <li><a href=\"#\">&raquo;</a></li>
                </ul>
            </div>
        </div><!-- /.box-header -->
        <div class=\"box-body\">
            <ul class=\"todo-list\">
                <li>
                    <!-- drag handle -->
          <span class=\"handle\">
            <i class=\"fa fa-ellipsis-v\"></i>
            <i class=\"fa fa-ellipsis-v\"></i>
          </span>
                    <!-- checkbox -->
                    <input type=\"checkbox\" value=\"\" name=\"\">
                    <!-- todo text -->
                    <span class=\"text\">Design a nice theme</span>
                    <!-- Emphasis label -->
                    <small class=\"label label-danger\"><i class=\"fa fa-clock-o\"></i> 2 mins</small>
                    <!-- General tools such as edit or delete-->
                    <div class=\"tools\">
                        <i class=\"fa fa-edit\"></i>
                        <i class=\"fa fa-trash-o\"></i>
                    </div>
                </li>
                <li>
          <span class=\"handle\">
            <i class=\"fa fa-ellipsis-v\"></i>
            <i class=\"fa fa-ellipsis-v\"></i>
          </span>
                    <input type=\"checkbox\" value=\"\" name=\"\">
                    <span class=\"text\">Make the theme responsive</span>
                    <small class=\"label label-info\"><i class=\"fa fa-clock-o\"></i> 4 hours</small>
                    <div class=\"tools\">
                        <i class=\"fa fa-edit\"></i>
                        <i class=\"fa fa-trash-o\"></i>
                    </div>
                </li>
                <li>
          <span class=\"handle\">
            <i class=\"fa fa-ellipsis-v\"></i>
            <i class=\"fa fa-ellipsis-v\"></i>
          </span>
                    <input type=\"checkbox\" value=\"\" name=\"\">
                    <span class=\"text\">Let theme shine like a star</span>
                    <small class=\"label label-warning\"><i class=\"fa fa-clock-o\"></i> 1 day</small>
                    <div class=\"tools\">
                        <i class=\"fa fa-edit\"></i>
                        <i class=\"fa fa-trash-o\"></i>
                    </div>
                </li>
                <li>
          <span class=\"handle\">
            <i class=\"fa fa-ellipsis-v\"></i>
            <i class=\"fa fa-ellipsis-v\"></i>
          </span>
                    <input type=\"checkbox\" value=\"\" name=\"\">
                    <span class=\"text\">Let theme shine like a star</span>
                    <small class=\"label label-success\"><i class=\"fa fa-clock-o\"></i> 3 days</small>
                    <div class=\"tools\">
                        <i class=\"fa fa-edit\"></i>
                        <i class=\"fa fa-trash-o\"></i>
                    </div>
                </li>
                <li>
          <span class=\"handle\">
            <i class=\"fa fa-ellipsis-v\"></i>
            <i class=\"fa fa-ellipsis-v\"></i>
          </span>
                    <input type=\"checkbox\" value=\"\" name=\"\">
                    <span class=\"text\">Check your messages and notifications</span>
                    <small class=\"label label-primary\"><i class=\"fa fa-clock-o\"></i> 1 week</small>
                    <div class=\"tools\">
                        <i class=\"fa fa-edit\"></i>
                        <i class=\"fa fa-trash-o\"></i>
                    </div>
                </li>
                <li>
          <span class=\"handle\">
            <i class=\"fa fa-ellipsis-v\"></i>
            <i class=\"fa fa-ellipsis-v\"></i>
          </span>
                    <input type=\"checkbox\" value=\"\" name=\"\">
                    <span class=\"text\">Let theme shine like a star</span>
                    <small class=\"label label-default\"><i class=\"fa fa-clock-o\"></i> 1 month</small>
                    <div class=\"tools\">
                        <i class=\"fa fa-edit\"></i>
                        <i class=\"fa fa-trash-o\"></i>
                    </div>
                </li>
            </ul>
        </div><!-- /.box-body -->
        <div class=\"box-footer clearfix no-border\">
            <button class=\"btn btn-default pull-right\"><i class=\"fa fa-plus\"></i> Add item</button>
        </div>
    </div><!-- /.box -->

    <!-- quick email widget -->
    <div class=\"box box-info\">
        <div class=\"box-header\">
            <i class=\"fa fa-envelope\"></i>
            <h3 class=\"box-title\">Quick Email</h3>
            <!-- tools box -->
            <div class=\"pull-right box-tools\">
                <button class=\"btn btn-info btn-sm\" data-widget=\"remove\" data-toggle=\"tooltip\" title=\"Remove\"><i class=\"fa fa-times\"></i></button>
            </div><!-- /. tools -->
        </div>
        <div class=\"box-body\">
            <form action=\"#\" method=\"post\">
                <div class=\"form-group\">
                    <input type=\"email\" class=\"form-control\" name=\"emailto\" placeholder=\"Email to:\">
                </div>
                <div class=\"form-group\">
                    <input type=\"text\" class=\"form-control\" name=\"subject\" placeholder=\"Subject\">
                </div>
                <div>
                    <textarea class=\"textarea\" placeholder=\"Message\" style=\"width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;\"></textarea>
                </div>
            </form>
        </div>
        <div class=\"box-footer clearfix\">
            <button class=\"pull-right btn btn-default\" id=\"sendEmail\">Send <i class=\"fa fa-arrow-circle-right\"></i></button>
        </div>
    </div>

</section><!-- /.Left col -->
<!-- right col (We are only adding the ID to make the widgets sortable)-->
<section class=\"col-lg-5 connectedSortable\">

    <!-- Map box -->
    <div class=\"box box-solid bg-light-blue-gradient\">
        <div class=\"box-header\">
            <!-- tools box -->
            <div class=\"pull-right box-tools\">
                <button class=\"btn btn-primary btn-sm daterange pull-right\" data-toggle=\"tooltip\" title=\"Date range\"><i class=\"fa fa-calendar\"></i></button>
                <button class=\"btn btn-primary btn-sm pull-right\" data-widget=\"collapse\" data-toggle=\"tooltip\" title=\"Collapse\" style=\"margin-right: 5px;\"><i class=\"fa fa-minus\"></i></button>
            </div><!-- /. tools -->

            <i class=\"fa fa-map-marker\"></i>
            <h3 class=\"box-title\">
                Visitors
            </h3>
        </div>
        <div class=\"box-body\">
            <div id=\"world-map\" style=\"height: 250px; width: 100%;\"></div>
        </div><!-- /.box-body-->
        <div class=\"box-footer no-border\">
            <div class=\"row\">
                <div class=\"col-xs-4 text-center\" style=\"border-right: 1px solid #f4f4f4\">
                    <div id=\"sparkline-1\"></div>
                    <div class=\"knob-label\">Visitors</div>
                </div><!-- ./col -->
                <div class=\"col-xs-4 text-center\" style=\"border-right: 1px solid #f4f4f4\">
                    <div id=\"sparkline-2\"></div>
                    <div class=\"knob-label\">Online</div>
                </div><!-- ./col -->
                <div class=\"col-xs-4 text-center\">
                    <div id=\"sparkline-3\"></div>
                    <div class=\"knob-label\">Exists</div>
                </div><!-- ./col -->
            </div><!-- /.row -->
        </div>
    </div>
    <!-- /.box -->

    <!-- solid sales graph -->
    <div class=\"box box-solid bg-teal-gradient\">
        <div class=\"box-header\">
            <i class=\"fa fa-th\"></i>
            <h3 class=\"box-title\">Sales Graph</h3>
            <div class=\"box-tools pull-right\">
                <button class=\"btn bg-teal btn-sm\" data-widget=\"collapse\"><i class=\"fa fa-minus\"></i></button>
                <button class=\"btn bg-teal btn-sm\" data-widget=\"remove\"><i class=\"fa fa-times\"></i></button>
            </div>
        </div>
        <div class=\"box-body border-radius-none\">
            <div class=\"chart\" id=\"line-chart\" style=\"height: 250px;\"></div>
        </div><!-- /.box-body -->
        <div class=\"box-footer no-border\">
            <div class=\"row\">
                <div class=\"col-xs-4 text-center\" style=\"border-right: 1px solid #f4f4f4\">
                    <input type=\"text\" class=\"knob\" data-readonly=\"true\" value=\"20\" data-width=\"60\" data-height=\"60\" data-fgColor=\"#39CCCC\">
                    <div class=\"knob-label\">Mail-Orders</div>
                </div><!-- ./col -->
                <div class=\"col-xs-4 text-center\" style=\"border-right: 1px solid #f4f4f4\">
                    <input type=\"text\" class=\"knob\" data-readonly=\"true\" value=\"50\" data-width=\"60\" data-height=\"60\" data-fgColor=\"#39CCCC\">
                    <div class=\"knob-label\">Online</div>
                </div><!-- ./col -->
                <div class=\"col-xs-4 text-center\">
                    <input type=\"text\" class=\"knob\" data-readonly=\"true\" value=\"30\" data-width=\"60\" data-height=\"60\" data-fgColor=\"#39CCCC\">
                    <div class=\"knob-label\">In-Store</div>
                </div><!-- ./col -->
            </div><!-- /.row -->
        </div><!-- /.box-footer -->
    </div><!-- /.box -->

    <!-- Calendar -->
    <div class=\"box box-solid bg-green-gradient\">
        <div class=\"box-header\">
            <i class=\"fa fa-calendar\"></i>
            <h3 class=\"box-title\">Calendar</h3>
            <!-- tools box -->
            <div class=\"pull-right box-tools\">
                <!-- button with a dropdown -->
                <div class=\"btn-group\">
                    <button class=\"btn btn-success btn-sm dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-bars\"></i></button>
                    <ul class=\"dropdown-menu pull-right\" role=\"menu\">
                        <li><a href=\"#\">Add new event</a></li>
                        <li><a href=\"#\">Clear events</a></li>
                        <li class=\"divider\"></li>
                        <li><a href=\"#\">View calendar</a></li>
                    </ul>
                </div>
                <button class=\"btn btn-success btn-sm\" data-widget=\"collapse\"><i class=\"fa fa-minus\"></i></button>
                <button class=\"btn btn-success btn-sm\" data-widget=\"remove\"><i class=\"fa fa-times\"></i></button>
            </div><!-- /. tools -->
        </div><!-- /.box-header -->
        <div class=\"box-body no-padding\">
            <!--The calendar -->
            <div id=\"calendar\" style=\"width: 100%\"></div>
        </div><!-- /.box-body -->
        <div class=\"box-footer text-black\">
            <div class=\"row\">
                <div class=\"col-sm-6\">
                    <!-- Progress bars -->
                    <div class=\"clearfix\">
                        <span class=\"pull-left\">Task #1</span>
                        <small class=\"pull-right\">90%</small>
                    </div>
                    <div class=\"progress xs\">
                        <div class=\"progress-bar progress-bar-green\" style=\"width: 90%;\"></div>
                    </div>

                    <div class=\"clearfix\">
                        <span class=\"pull-left\">Task #2</span>
                        <small class=\"pull-right\">70%</small>
                    </div>
                    <div class=\"progress xs\">
                        <div class=\"progress-bar progress-bar-green\" style=\"width: 70%;\"></div>
                    </div>
                </div><!-- /.col -->
                <div class=\"col-sm-6\">
                    <div class=\"clearfix\">
                        <span class=\"pull-left\">Task #3</span>
                        <small class=\"pull-right\">60%</small>
                    </div>
                    <div class=\"progress xs\">
                        <div class=\"progress-bar progress-bar-green\" style=\"width: 60%;\"></div>
                    </div>

                    <div class=\"clearfix\">
                        <span class=\"pull-left\">Task #4</span>
                        <small class=\"pull-right\">40%</small>
                    </div>
                    <div class=\"progress xs\">
                        <div class=\"progress-bar progress-bar-green\" style=\"width: 40%;\"></div>
                    </div>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div>
    </div><!-- /.box -->

</section><!-- right col -->
";
        
        $__internal_f9955ce93b50c98fe2ca783bde3e16969d7e1d718049a93a2e1e9aa89b075de7->leave($__internal_f9955ce93b50c98fe2ca783bde3e16969d7e1d718049a93a2e1e9aa89b075de7_prof);

    }

    // line 425
    public function block_js($context, array $blocks = array())
    {
        $__internal_4e16d7dce0fa6e211c2b4e46a16e6e391febdfa9774430d763c93ae06934c5c9 = $this->env->getExtension("native_profiler");
        $__internal_4e16d7dce0fa6e211c2b4e46a16e6e391febdfa9774430d763c93ae06934c5c9->enter($__internal_4e16d7dce0fa6e211c2b4e46a16e6e391febdfa9774430d763c93ae06934c5c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        
        $__internal_4e16d7dce0fa6e211c2b4e46a16e6e391febdfa9774430d763c93ae06934c5c9->leave($__internal_4e16d7dce0fa6e211c2b4e46a16e6e391febdfa9774430d763c93ae06934c5c9_prof);

    }

    public function getTemplateName()
    {
        return "views/admin/index/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  491 => 425,  115 => 55,  106 => 49,  96 => 42,  87 => 36,  77 => 29,  68 => 23,  58 => 16,  49 => 10,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends '::admin/base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <!-- Content Header (Page header) -->*/
/*     <!-- Main content -->*/
/* <div class="col-lg-3 col-xs-6">*/
/*     <!-- small box -->*/
/*     <div class="small-box bg-aqua">*/
/*         <div class="inner">*/
/*             <h3>{{ parcours.experiences|length + parcours.formation|length }}</h3>*/
/*             <p>Expériences</p>*/
/*         </div>*/
/*         <div class="icon">*/
/*             <i class="fa fa-university"></i>*/
/*         </div>*/
/*         <a href="{{ path('admin_yaml_edit', {ymlFile: 'parcours'}) }}" class="small-box-footer">Voir le détail <i class="fa fa-arrow-circle-right"></i></a>*/
/*     </div>*/
/* </div><!-- ./col -->*/
/* <div class="col-lg-3 col-xs-6">*/
/*     <!-- small box -->*/
/*     <div class="small-box bg-green">*/
/*         <div class="inner">*/
/*             <h3>{{ realisations|length }}</h3>*/
/*             <p>Réalisations</p>*/
/*         </div>*/
/*         <div class="icon">*/
/*             <i class="fa fa-calendar"></i>*/
/*         </div>*/
/*         <a href="{{ path('admin_yaml_edit', {ymlFile: 'realisations'}) }}" class="small-box-footer">Voir le détail <i class="fa fa-arrow-circle-right"></i></a>*/
/*     </div>*/
/* </div><!-- ./col -->*/
/* <div class="col-lg-3 col-xs-6">*/
/*     <!-- small box -->*/
/*     <div class="small-box bg-yellow">*/
/*         <div class="inner">*/
/*             <h3>{{ citations|length }}</h3>*/
/*             <p>Citations</p>*/
/*         </div>*/
/*         <div class="icon">*/
/*             <i class="fa fa-comments"></i>*/
/*         </div>*/
/*         <a href="{{ path('admin_yaml_edit', {ymlFile: 'citations'}) }}" class="small-box-footer">Voir le détail <i class="fa fa-arrow-circle-right"></i></a>*/
/*     </div>*/
/* </div><!-- ./col -->*/
/* <div class="col-lg-3 col-xs-6">*/
/*     <!-- small box -->*/
/*     <div class="small-box bg-red">*/
/*         <div class="inner">*/
/*             <h3>{{ competences|length }}</h3>*/
/*             <p>Domaines de compétences</p>*/
/*         </div>*/
/*         <div class="icon">*/
/*             <i class="fa fa-code"></i>*/
/*         </div>*/
/*         <a href="{{ path('admin_yaml_edit', {ymlFile: 'competences'}) }}" class="small-box-footer">Voir le détail <i class="fa fa-arrow-circle-right"></i></a>*/
/*     </div>*/
/* </div><!-- ./col -->*/
/* </div><!-- /.row -->*/
/* <!-- Main row -->*/
/* <div class="row">*/
/* <!-- Left col -->*/
/* <section class="col-lg-7 connectedSortable">*/
/*     <!-- Custom tabs (Charts with tabs)-->*/
/*     <div class="nav-tabs-custom">*/
/*         <!-- Tabs within a box -->*/
/*         <ul class="nav nav-tabs pull-right">*/
/*             <li class="active"><a href="#revenue-chart" data-toggle="tab">Area</a></li>*/
/*             <li><a href="#sales-chart" data-toggle="tab">Donut</a></li>*/
/*             <li class="pull-left header"><i class="fa fa-inbox"></i> Sales</li>*/
/*         </ul>*/
/*         <div class="tab-content no-padding">*/
/*             <!-- Morris chart - Sales -->*/
/*             <div class="chart tab-pane active" id="revenue-chart" style="position: relative; height: 300px;"></div>*/
/*             <div class="chart tab-pane" id="sales-chart" style="position: relative; height: 300px;"></div>*/
/*         </div>*/
/*     </div><!-- /.nav-tabs-custom -->*/
/* */
/*     <!-- Chat box -->*/
/*     <div class="box box-success">*/
/*         <div class="box-header">*/
/*             <i class="fa fa-comments-o"></i>*/
/*             <h3 class="box-title">Chat</h3>*/
/*             <div class="box-tools pull-right" data-toggle="tooltip" title="Status">*/
/*                 <div class="btn-group" data-toggle="btn-toggle" >*/
/*                     <button type="button" class="btn btn-default btn-sm active"><i class="fa fa-square text-green"></i></button>*/
/*                     <button type="button" class="btn btn-default btn-sm"><i class="fa fa-square text-red"></i></button>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="box-body chat" id="chat-box">*/
/*             <!-- chat item -->*/
/*             <div class="item">*/
/*                 <img src="/admin/dist/img/user4-128x128.jpg" alt="user image" class="online">*/
/*                 <p class="message">*/
/*                     <a href="#" class="name">*/
/*                         <small class="text-muted pull-right"><i class="fa fa-clock-o"></i> 2:15</small>*/
/*                         Mike Doe*/
/*                     </a>*/
/*                     I would like to meet you to discuss the latest news about*/
/*                     the arrival of the new theme. They say it is going to be one the*/
/*                     best themes on the market*/
/*                 </p>*/
/*                 <div class="attachment">*/
/*                     <h4>Attachments:</h4>*/
/*                     <p class="filename">*/
/*                         Theme-thumbnail-image.jpg*/
/*                     </p>*/
/*                     <div class="pull-right">*/
/*                         <button class="btn btn-primary btn-sm btn-flat">Open</button>*/
/*                     </div>*/
/*                 </div><!-- /.attachment -->*/
/*             </div><!-- /.item -->*/
/*             <!-- chat item -->*/
/*             <div class="item">*/
/*                 <img src="/admin/dist/img/user3-128x128.jpg" alt="user image" class="offline">*/
/*                 <p class="message">*/
/*                     <a href="#" class="name">*/
/*                         <small class="text-muted pull-right"><i class="fa fa-clock-o"></i> 5:15</small>*/
/*                         Alexander Pierce*/
/*                     </a>*/
/*                     I would like to meet you to discuss the latest news about*/
/*                     the arrival of the new theme. They say it is going to be one the*/
/*                     best themes on the market*/
/*                 </p>*/
/*             </div><!-- /.item -->*/
/*             <!-- chat item -->*/
/*             <div class="item">*/
/*                 <img src="/admin/dist/img/user2-160x160.jpg" alt="user image" class="offline">*/
/*                 <p class="message">*/
/*                     <a href="#" class="name">*/
/*                         <small class="text-muted pull-right"><i class="fa fa-clock-o"></i> 5:30</small>*/
/*                         Susan Doe*/
/*                     </a>*/
/*                     I would like to meet you to discuss the latest news about*/
/*                     the arrival of the new theme. They say it is going to be one the*/
/*                     best themes on the market*/
/*                 </p>*/
/*             </div><!-- /.item -->*/
/*         </div><!-- /.chat -->*/
/*         <div class="box-footer">*/
/*             <div class="input-group">*/
/*                 <input class="form-control" placeholder="Type message...">*/
/*                 <div class="input-group-btn">*/
/*                     <button class="btn btn-success"><i class="fa fa-plus"></i></button>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div><!-- /.box (chat box) -->*/
/* */
/*     <!-- TO DO List -->*/
/*     <div class="box box-primary">*/
/*         <div class="box-header">*/
/*             <i class="ion ion-clipboard"></i>*/
/*             <h3 class="box-title">To Do List</h3>*/
/*             <div class="box-tools pull-right">*/
/*                 <ul class="pagination pagination-sm inline">*/
/*                     <li><a href="#">&laquo;</a></li>*/
/*                     <li><a href="#">1</a></li>*/
/*                     <li><a href="#">2</a></li>*/
/*                     <li><a href="#">3</a></li>*/
/*                     <li><a href="#">&raquo;</a></li>*/
/*                 </ul>*/
/*             </div>*/
/*         </div><!-- /.box-header -->*/
/*         <div class="box-body">*/
/*             <ul class="todo-list">*/
/*                 <li>*/
/*                     <!-- drag handle -->*/
/*           <span class="handle">*/
/*             <i class="fa fa-ellipsis-v"></i>*/
/*             <i class="fa fa-ellipsis-v"></i>*/
/*           </span>*/
/*                     <!-- checkbox -->*/
/*                     <input type="checkbox" value="" name="">*/
/*                     <!-- todo text -->*/
/*                     <span class="text">Design a nice theme</span>*/
/*                     <!-- Emphasis label -->*/
/*                     <small class="label label-danger"><i class="fa fa-clock-o"></i> 2 mins</small>*/
/*                     <!-- General tools such as edit or delete-->*/
/*                     <div class="tools">*/
/*                         <i class="fa fa-edit"></i>*/
/*                         <i class="fa fa-trash-o"></i>*/
/*                     </div>*/
/*                 </li>*/
/*                 <li>*/
/*           <span class="handle">*/
/*             <i class="fa fa-ellipsis-v"></i>*/
/*             <i class="fa fa-ellipsis-v"></i>*/
/*           </span>*/
/*                     <input type="checkbox" value="" name="">*/
/*                     <span class="text">Make the theme responsive</span>*/
/*                     <small class="label label-info"><i class="fa fa-clock-o"></i> 4 hours</small>*/
/*                     <div class="tools">*/
/*                         <i class="fa fa-edit"></i>*/
/*                         <i class="fa fa-trash-o"></i>*/
/*                     </div>*/
/*                 </li>*/
/*                 <li>*/
/*           <span class="handle">*/
/*             <i class="fa fa-ellipsis-v"></i>*/
/*             <i class="fa fa-ellipsis-v"></i>*/
/*           </span>*/
/*                     <input type="checkbox" value="" name="">*/
/*                     <span class="text">Let theme shine like a star</span>*/
/*                     <small class="label label-warning"><i class="fa fa-clock-o"></i> 1 day</small>*/
/*                     <div class="tools">*/
/*                         <i class="fa fa-edit"></i>*/
/*                         <i class="fa fa-trash-o"></i>*/
/*                     </div>*/
/*                 </li>*/
/*                 <li>*/
/*           <span class="handle">*/
/*             <i class="fa fa-ellipsis-v"></i>*/
/*             <i class="fa fa-ellipsis-v"></i>*/
/*           </span>*/
/*                     <input type="checkbox" value="" name="">*/
/*                     <span class="text">Let theme shine like a star</span>*/
/*                     <small class="label label-success"><i class="fa fa-clock-o"></i> 3 days</small>*/
/*                     <div class="tools">*/
/*                         <i class="fa fa-edit"></i>*/
/*                         <i class="fa fa-trash-o"></i>*/
/*                     </div>*/
/*                 </li>*/
/*                 <li>*/
/*           <span class="handle">*/
/*             <i class="fa fa-ellipsis-v"></i>*/
/*             <i class="fa fa-ellipsis-v"></i>*/
/*           </span>*/
/*                     <input type="checkbox" value="" name="">*/
/*                     <span class="text">Check your messages and notifications</span>*/
/*                     <small class="label label-primary"><i class="fa fa-clock-o"></i> 1 week</small>*/
/*                     <div class="tools">*/
/*                         <i class="fa fa-edit"></i>*/
/*                         <i class="fa fa-trash-o"></i>*/
/*                     </div>*/
/*                 </li>*/
/*                 <li>*/
/*           <span class="handle">*/
/*             <i class="fa fa-ellipsis-v"></i>*/
/*             <i class="fa fa-ellipsis-v"></i>*/
/*           </span>*/
/*                     <input type="checkbox" value="" name="">*/
/*                     <span class="text">Let theme shine like a star</span>*/
/*                     <small class="label label-default"><i class="fa fa-clock-o"></i> 1 month</small>*/
/*                     <div class="tools">*/
/*                         <i class="fa fa-edit"></i>*/
/*                         <i class="fa fa-trash-o"></i>*/
/*                     </div>*/
/*                 </li>*/
/*             </ul>*/
/*         </div><!-- /.box-body -->*/
/*         <div class="box-footer clearfix no-border">*/
/*             <button class="btn btn-default pull-right"><i class="fa fa-plus"></i> Add item</button>*/
/*         </div>*/
/*     </div><!-- /.box -->*/
/* */
/*     <!-- quick email widget -->*/
/*     <div class="box box-info">*/
/*         <div class="box-header">*/
/*             <i class="fa fa-envelope"></i>*/
/*             <h3 class="box-title">Quick Email</h3>*/
/*             <!-- tools box -->*/
/*             <div class="pull-right box-tools">*/
/*                 <button class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>*/
/*             </div><!-- /. tools -->*/
/*         </div>*/
/*         <div class="box-body">*/
/*             <form action="#" method="post">*/
/*                 <div class="form-group">*/
/*                     <input type="email" class="form-control" name="emailto" placeholder="Email to:">*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                     <input type="text" class="form-control" name="subject" placeholder="Subject">*/
/*                 </div>*/
/*                 <div>*/
/*                     <textarea class="textarea" placeholder="Message" style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>*/
/*                 </div>*/
/*             </form>*/
/*         </div>*/
/*         <div class="box-footer clearfix">*/
/*             <button class="pull-right btn btn-default" id="sendEmail">Send <i class="fa fa-arrow-circle-right"></i></button>*/
/*         </div>*/
/*     </div>*/
/* */
/* </section><!-- /.Left col -->*/
/* <!-- right col (We are only adding the ID to make the widgets sortable)-->*/
/* <section class="col-lg-5 connectedSortable">*/
/* */
/*     <!-- Map box -->*/
/*     <div class="box box-solid bg-light-blue-gradient">*/
/*         <div class="box-header">*/
/*             <!-- tools box -->*/
/*             <div class="pull-right box-tools">*/
/*                 <button class="btn btn-primary btn-sm daterange pull-right" data-toggle="tooltip" title="Date range"><i class="fa fa-calendar"></i></button>*/
/*                 <button class="btn btn-primary btn-sm pull-right" data-widget="collapse" data-toggle="tooltip" title="Collapse" style="margin-right: 5px;"><i class="fa fa-minus"></i></button>*/
/*             </div><!-- /. tools -->*/
/* */
/*             <i class="fa fa-map-marker"></i>*/
/*             <h3 class="box-title">*/
/*                 Visitors*/
/*             </h3>*/
/*         </div>*/
/*         <div class="box-body">*/
/*             <div id="world-map" style="height: 250px; width: 100%;"></div>*/
/*         </div><!-- /.box-body-->*/
/*         <div class="box-footer no-border">*/
/*             <div class="row">*/
/*                 <div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">*/
/*                     <div id="sparkline-1"></div>*/
/*                     <div class="knob-label">Visitors</div>*/
/*                 </div><!-- ./col -->*/
/*                 <div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">*/
/*                     <div id="sparkline-2"></div>*/
/*                     <div class="knob-label">Online</div>*/
/*                 </div><!-- ./col -->*/
/*                 <div class="col-xs-4 text-center">*/
/*                     <div id="sparkline-3"></div>*/
/*                     <div class="knob-label">Exists</div>*/
/*                 </div><!-- ./col -->*/
/*             </div><!-- /.row -->*/
/*         </div>*/
/*     </div>*/
/*     <!-- /.box -->*/
/* */
/*     <!-- solid sales graph -->*/
/*     <div class="box box-solid bg-teal-gradient">*/
/*         <div class="box-header">*/
/*             <i class="fa fa-th"></i>*/
/*             <h3 class="box-title">Sales Graph</h3>*/
/*             <div class="box-tools pull-right">*/
/*                 <button class="btn bg-teal btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>*/
/*                 <button class="btn bg-teal btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>*/
/*             </div>*/
/*         </div>*/
/*         <div class="box-body border-radius-none">*/
/*             <div class="chart" id="line-chart" style="height: 250px;"></div>*/
/*         </div><!-- /.box-body -->*/
/*         <div class="box-footer no-border">*/
/*             <div class="row">*/
/*                 <div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">*/
/*                     <input type="text" class="knob" data-readonly="true" value="20" data-width="60" data-height="60" data-fgColor="#39CCCC">*/
/*                     <div class="knob-label">Mail-Orders</div>*/
/*                 </div><!-- ./col -->*/
/*                 <div class="col-xs-4 text-center" style="border-right: 1px solid #f4f4f4">*/
/*                     <input type="text" class="knob" data-readonly="true" value="50" data-width="60" data-height="60" data-fgColor="#39CCCC">*/
/*                     <div class="knob-label">Online</div>*/
/*                 </div><!-- ./col -->*/
/*                 <div class="col-xs-4 text-center">*/
/*                     <input type="text" class="knob" data-readonly="true" value="30" data-width="60" data-height="60" data-fgColor="#39CCCC">*/
/*                     <div class="knob-label">In-Store</div>*/
/*                 </div><!-- ./col -->*/
/*             </div><!-- /.row -->*/
/*         </div><!-- /.box-footer -->*/
/*     </div><!-- /.box -->*/
/* */
/*     <!-- Calendar -->*/
/*     <div class="box box-solid bg-green-gradient">*/
/*         <div class="box-header">*/
/*             <i class="fa fa-calendar"></i>*/
/*             <h3 class="box-title">Calendar</h3>*/
/*             <!-- tools box -->*/
/*             <div class="pull-right box-tools">*/
/*                 <!-- button with a dropdown -->*/
/*                 <div class="btn-group">*/
/*                     <button class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bars"></i></button>*/
/*                     <ul class="dropdown-menu pull-right" role="menu">*/
/*                         <li><a href="#">Add new event</a></li>*/
/*                         <li><a href="#">Clear events</a></li>*/
/*                         <li class="divider"></li>*/
/*                         <li><a href="#">View calendar</a></li>*/
/*                     </ul>*/
/*                 </div>*/
/*                 <button class="btn btn-success btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>*/
/*                 <button class="btn btn-success btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>*/
/*             </div><!-- /. tools -->*/
/*         </div><!-- /.box-header -->*/
/*         <div class="box-body no-padding">*/
/*             <!--The calendar -->*/
/*             <div id="calendar" style="width: 100%"></div>*/
/*         </div><!-- /.box-body -->*/
/*         <div class="box-footer text-black">*/
/*             <div class="row">*/
/*                 <div class="col-sm-6">*/
/*                     <!-- Progress bars -->*/
/*                     <div class="clearfix">*/
/*                         <span class="pull-left">Task #1</span>*/
/*                         <small class="pull-right">90%</small>*/
/*                     </div>*/
/*                     <div class="progress xs">*/
/*                         <div class="progress-bar progress-bar-green" style="width: 90%;"></div>*/
/*                     </div>*/
/* */
/*                     <div class="clearfix">*/
/*                         <span class="pull-left">Task #2</span>*/
/*                         <small class="pull-right">70%</small>*/
/*                     </div>*/
/*                     <div class="progress xs">*/
/*                         <div class="progress-bar progress-bar-green" style="width: 70%;"></div>*/
/*                     </div>*/
/*                 </div><!-- /.col -->*/
/*                 <div class="col-sm-6">*/
/*                     <div class="clearfix">*/
/*                         <span class="pull-left">Task #3</span>*/
/*                         <small class="pull-right">60%</small>*/
/*                     </div>*/
/*                     <div class="progress xs">*/
/*                         <div class="progress-bar progress-bar-green" style="width: 60%;"></div>*/
/*                     </div>*/
/* */
/*                     <div class="clearfix">*/
/*                         <span class="pull-left">Task #4</span>*/
/*                         <small class="pull-right">40%</small>*/
/*                     </div>*/
/*                     <div class="progress xs">*/
/*                         <div class="progress-bar progress-bar-green" style="width: 40%;"></div>*/
/*                     </div>*/
/*                 </div><!-- /.col -->*/
/*             </div><!-- /.row -->*/
/*         </div>*/
/*     </div><!-- /.box -->*/
/* */
/* </section><!-- right col -->*/
/* {% endblock %}*/
/* */
/* {% block js %}*/
/* {% endblock %}*/
