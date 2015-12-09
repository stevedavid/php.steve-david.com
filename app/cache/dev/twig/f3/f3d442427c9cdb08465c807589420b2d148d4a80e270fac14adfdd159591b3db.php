<?php

/* ::admin/base.html.twig */
class __TwigTemplate_732193260738af6d013a53e6fbd9887e33d1d90920df147956cc0dd0e09816ee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'css' => array($this, 'block_css'),
            'body' => array($this, 'block_body'),
            'js' => array($this, 'block_js'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2520d73d7fd62c0a7b1ebacda2265f2339a619740193353bbbcba5c3dbb62e6f = $this->env->getExtension("native_profiler");
        $__internal_2520d73d7fd62c0a7b1ebacda2265f2339a619740193353bbbcba5c3dbb62e6f->enter($__internal_2520d73d7fd62c0a7b1ebacda2265f2339a619740193353bbbcba5c3dbb62e6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::admin/base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <title>AdminLTE 2 | Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
    <!-- Bootstrap 3.3.5 -->
    <link rel=\"stylesheet\" href=\"/admin/bootstrap/css/bootstrap.min.css\">
    <!-- Font Awesome -->
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css\">
    <!-- Ionicons -->
    <link rel=\"stylesheet\" href=\"https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css\">
    <!-- Theme style -->
    <link rel=\"stylesheet\" href=\"/admin/dist/css/AdminLTE.min.css\">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel=\"stylesheet\" href=\"/admin/dist/css/skins/_all-skins.min.css\">
    <!-- iCheck -->
    <link rel=\"stylesheet\" href=\"/admin/plugins/iCheck/flat/blue.css\">
    <!-- Morris chart -->
    <link rel=\"stylesheet\" href=\"/admin/plugins/morris/morris.css\">
    <!-- jvectormap -->
    <link rel=\"stylesheet\" href=\"/admin/plugins/jvectormap/jquery-jvectormap-1.2.2.css\">
    <!-- Date Picker -->
    <link rel=\"stylesheet\" href=\"/admin/plugins/datepicker/datepicker3.css\">
    <!-- Daterange picker -->
    <link rel=\"stylesheet\" href=\"/admin/plugins/daterangepicker/daterangepicker-bs3.css\">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel=\"stylesheet\" href=\"/admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css\">

    <link rel=\"stylesheet\" href=\"/admin/dist/css/main.css\">
    ";
        // line 34
        $this->displayBlock('css', $context, $blocks);
        // line 36
        echo "
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
    <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->
</head>
<body class=\"hold-transition skin-blue sidebar-mini\">
<div class=\"wrapper\">

    <header class=\"main-header\">
        ";
        // line 48
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("AppBundle:Admin/Index:header"));
        echo "
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class=\"main-sidebar\">
        ";
        // line 52
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("AppBundle:Admin/Index:menu"));
        echo "
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class=\"content-wrapper\">
        <section class=\"content-header\">
            <h1>
                Mailbox
                <small>13 new messages</small>
            </h1>
            <ol class=\"breadcrumb\">
                <li><a href=\"#\"><i class=\"fa fa-dashboard\"></i> Home</a></li>
                <li class=\"active\">Mailbox</li>
            </ol>
        </section>
        <section class=\"content\">
            <div class=\"row\">
                ";
        // line 70
        $this->displayBlock('body', $context, $blocks);
        // line 72
        echo "            </div>
        </section>
    </div><!-- /.content-wrapper -->
    <footer class=\"main-footer\">
        <div class=\"pull-right hidden-xs\">
            <b>Version</b> 2.3.0
        </div>
        <strong>Copyright &copy; 2014-2015 <a href=\"http://almsaeedstudio.com\">Almsaeed Studio</a>.</strong> All rights reserved.
    </footer>

    <!-- Control Sidebar -->
    <aside class=\"control-sidebar control-sidebar-dark\">
        <!-- Create the tabs -->
        <ul class=\"nav nav-tabs nav-justified control-sidebar-tabs\">
            <li><a href=\"#control-sidebar-home-tab\" data-toggle=\"tab\"><i class=\"fa fa-home\"></i></a></li>
            <li><a href=\"#control-sidebar-settings-tab\" data-toggle=\"tab\"><i class=\"fa fa-gears\"></i></a></li>
        </ul>
        <!-- Tab panes -->
        <div class=\"tab-content\">
            <!-- Home tab content -->
            <div class=\"tab-pane\" id=\"control-sidebar-home-tab\">
                <h3 class=\"control-sidebar-heading\">Recent Activity</h3>
                <ul class=\"control-sidebar-menu\">
                    <li>
                        <a href=\"javascript::;\">
                            <i class=\"menu-icon fa fa-birthday-cake bg-red\"></i>
                            <div class=\"menu-info\">
                                <h4 class=\"control-sidebar-subheading\">Langdon's Birthday</h4>
                                <p>Will be 23 on April 24th</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href=\"javascript::;\">
                            <i class=\"menu-icon fa fa-user bg-yellow\"></i>
                            <div class=\"menu-info\">
                                <h4 class=\"control-sidebar-subheading\">Frodo Updated His Profile</h4>
                                <p>New phone +1(800)555-1234</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href=\"javascript::;\">
                            <i class=\"menu-icon fa fa-envelope-o bg-light-blue\"></i>
                            <div class=\"menu-info\">
                                <h4 class=\"control-sidebar-subheading\">Nora Joined Mailing List</h4>
                                <p>nora@example.com</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href=\"javascript::;\">
                            <i class=\"menu-icon fa fa-file-code-o bg-green\"></i>
                            <div class=\"menu-info\">
                                <h4 class=\"control-sidebar-subheading\">Cron Job 254 Executed</h4>
                                <p>Execution time 5 seconds</p>
                            </div>
                        </a>
                    </li>
                </ul><!-- /.control-sidebar-menu -->

                <h3 class=\"control-sidebar-heading\">Tasks Progress</h3>
                <ul class=\"control-sidebar-menu\">
                    <li>
                        <a href=\"javascript::;\">
                            <h4 class=\"control-sidebar-subheading\">
                                Custom Template Design
                                <span class=\"label label-danger pull-right\">70%</span>
                            </h4>
                            <div class=\"progress progress-xxs\">
                                <div class=\"progress-bar progress-bar-danger\" style=\"width: 70%\"></div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href=\"javascript::;\">
                            <h4 class=\"control-sidebar-subheading\">
                                Update Resume
                                <span class=\"label label-success pull-right\">95%</span>
                            </h4>
                            <div class=\"progress progress-xxs\">
                                <div class=\"progress-bar progress-bar-success\" style=\"width: 95%\"></div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href=\"javascript::;\">
                            <h4 class=\"control-sidebar-subheading\">
                                Laravel Integration
                                <span class=\"label label-warning pull-right\">50%</span>
                            </h4>
                            <div class=\"progress progress-xxs\">
                                <div class=\"progress-bar progress-bar-warning\" style=\"width: 50%\"></div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href=\"javascript::;\">
                            <h4 class=\"control-sidebar-subheading\">
                                Back End Framework
                                <span class=\"label label-primary pull-right\">68%</span>
                            </h4>
                            <div class=\"progress progress-xxs\">
                                <div class=\"progress-bar progress-bar-primary\" style=\"width: 68%\"></div>
                            </div>
                        </a>
                    </li>
                </ul><!-- /.control-sidebar-menu -->

            </div><!-- /.tab-pane -->
            <!-- Stats tab content -->
            <div class=\"tab-pane\" id=\"control-sidebar-stats-tab\">Stats Tab Content</div><!-- /.tab-pane -->
            <!-- Settings tab content -->
            <div class=\"tab-pane\" id=\"control-sidebar-settings-tab\">
                <form method=\"post\">
                    <h3 class=\"control-sidebar-heading\">General Settings</h3>
                    <div class=\"form-group\">
                        <label class=\"control-sidebar-subheading\">
                            Report panel usage
                            <input type=\"checkbox\" class=\"pull-right\" checked>
                        </label>
                        <p>
                            Some information about this general settings option
                        </p>
                    </div><!-- /.form-group -->

                    <div class=\"form-group\">
                        <label class=\"control-sidebar-subheading\">
                            Allow mail redirect
                            <input type=\"checkbox\" class=\"pull-right\" checked>
                        </label>
                        <p>
                            Other sets of options are available
                        </p>
                    </div><!-- /.form-group -->

                    <div class=\"form-group\">
                        <label class=\"control-sidebar-subheading\">
                            Expose author name in posts
                            <input type=\"checkbox\" class=\"pull-right\" checked>
                        </label>
                        <p>
                            Allow the user to show his name in blog posts
                        </p>
                    </div><!-- /.form-group -->

                    <h3 class=\"control-sidebar-heading\">Chat Settings</h3>

                    <div class=\"form-group\">
                        <label class=\"control-sidebar-subheading\">
                            Show me as online
                            <input type=\"checkbox\" class=\"pull-right\" checked>
                        </label>
                    </div><!-- /.form-group -->

                    <div class=\"form-group\">
                        <label class=\"control-sidebar-subheading\">
                            Turn off notifications
                            <input type=\"checkbox\" class=\"pull-right\">
                        </label>
                    </div><!-- /.form-group -->

                    <div class=\"form-group\">
                        <label class=\"control-sidebar-subheading\">
                            Delete chat history
                            <a href=\"javascript::;\" class=\"text-red pull-right\"><i class=\"fa fa-trash-o\"></i></a>
                        </label>
                    </div><!-- /.form-group -->
                </form>
            </div><!-- /.tab-pane -->
        </div>
    </aside><!-- /.control-sidebar -->
    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
    <div class=\"control-sidebar-bg\"></div>
</div><!-- ./wrapper -->

<!-- jQuery 2.1.4 -->
<script src=\"/admin/plugins/jQuery/jQuery-2.1.4.min.js\"></script>
<!-- jQuery UI 1.11.4 -->
<script src=\"https://code.jquery.com/ui/1.11.4/jquery-ui.min.js\"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    \$.widget.bridge('uibutton', \$.ui.button);
</script>
<!-- Bootstrap 3.3.5 -->
<script src=\"/admin/bootstrap/js/bootstrap.min.js\"></script>
<!-- Morris.js charts -->
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js\"></script>
<!--<script src=\"/admin/plugins/morris/morris.min.js\"></script>-->
<!-- Sparkline -->
<script src=\"/admin/plugins/sparkline/jquery.sparkline.min.js\"></script>
<!-- jvectormap -->
<script src=\"/admin/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js\"></script>
<script src=\"/admin/plugins/jvectormap/jquery-jvectormap-world-mill-en.js\"></script>
<!-- jQuery Knob Chart -->
<script src=\"/admin/plugins/knob/jquery.knob.js\"></script>
<!-- daterangepicker -->
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js\"></script>
<script src=\"/admin/plugins/daterangepicker/daterangepicker.js\"></script>
<!-- datepicker -->
<script src=\"/admin/plugins/datepicker/bootstrap-datepicker.js\"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src=\"/admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js\"></script>
<!-- Slimscroll -->
<script src=\"/admin/plugins/slimScroll/jquery.slimscroll.min.js\"></script>
<!-- FastClick -->
<script src=\"/admin/plugins/fastclick/fastclick.min.js\"></script>
<!-- AdminLTE App -->
<script src=\"/admin/dist/js/app.min.js\"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<!--<script src=\"/admin/dist/js/pages/dashboard.js\"></script>
<!-- AdminLTE for demo purposes
<script src=\"/admin/dist/js/demo.js\"></script>-->
";
        // line 286
        $this->displayBlock('js', $context, $blocks);
        // line 288
        echo "</body>
</html>
";
        
        $__internal_2520d73d7fd62c0a7b1ebacda2265f2339a619740193353bbbcba5c3dbb62e6f->leave($__internal_2520d73d7fd62c0a7b1ebacda2265f2339a619740193353bbbcba5c3dbb62e6f_prof);

    }

    // line 34
    public function block_css($context, array $blocks = array())
    {
        $__internal_093c0d3f17b53cd5a436045873f5b7dc08a968617bb25f059f31ff8bfbed59c7 = $this->env->getExtension("native_profiler");
        $__internal_093c0d3f17b53cd5a436045873f5b7dc08a968617bb25f059f31ff8bfbed59c7->enter($__internal_093c0d3f17b53cd5a436045873f5b7dc08a968617bb25f059f31ff8bfbed59c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "css"));

        // line 35
        echo "    ";
        
        $__internal_093c0d3f17b53cd5a436045873f5b7dc08a968617bb25f059f31ff8bfbed59c7->leave($__internal_093c0d3f17b53cd5a436045873f5b7dc08a968617bb25f059f31ff8bfbed59c7_prof);

    }

    // line 70
    public function block_body($context, array $blocks = array())
    {
        $__internal_2b540a14a31456e6a31e9a50e61b61b0285cb2575b2f7a211d7401f8849bad1a = $this->env->getExtension("native_profiler");
        $__internal_2b540a14a31456e6a31e9a50e61b61b0285cb2575b2f7a211d7401f8849bad1a->enter($__internal_2b540a14a31456e6a31e9a50e61b61b0285cb2575b2f7a211d7401f8849bad1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 71
        echo "                ";
        
        $__internal_2b540a14a31456e6a31e9a50e61b61b0285cb2575b2f7a211d7401f8849bad1a->leave($__internal_2b540a14a31456e6a31e9a50e61b61b0285cb2575b2f7a211d7401f8849bad1a_prof);

    }

    // line 286
    public function block_js($context, array $blocks = array())
    {
        $__internal_24f9e783cd55902e6cab1e92ec5257db5f609dc016fb2b86effd7c9614dd2a0d = $this->env->getExtension("native_profiler");
        $__internal_24f9e783cd55902e6cab1e92ec5257db5f609dc016fb2b86effd7c9614dd2a0d->enter($__internal_24f9e783cd55902e6cab1e92ec5257db5f609dc016fb2b86effd7c9614dd2a0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "js"));

        
        $__internal_24f9e783cd55902e6cab1e92ec5257db5f609dc016fb2b86effd7c9614dd2a0d->leave($__internal_24f9e783cd55902e6cab1e92ec5257db5f609dc016fb2b86effd7c9614dd2a0d_prof);

    }

    public function getTemplateName()
    {
        return "::admin/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  359 => 286,  352 => 71,  346 => 70,  339 => 35,  333 => 34,  324 => 288,  322 => 286,  106 => 72,  104 => 70,  83 => 52,  76 => 48,  62 => 36,  60 => 34,  25 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/*     <meta charset="utf-8">*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*     <title>AdminLTE 2 | Dashboard</title>*/
/*     <!-- Tell the browser to be responsive to screen width -->*/
/*     <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">*/
/*     <!-- Bootstrap 3.3.5 -->*/
/*     <link rel="stylesheet" href="/admin/bootstrap/css/bootstrap.min.css">*/
/*     <!-- Font Awesome -->*/
/*     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">*/
/*     <!-- Ionicons -->*/
/*     <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">*/
/*     <!-- Theme style -->*/
/*     <link rel="stylesheet" href="/admin/dist/css/AdminLTE.min.css">*/
/*     <!-- AdminLTE Skins. Choose a skin from the css/skins*/
/*          folder instead of downloading all of them to reduce the load. -->*/
/*     <link rel="stylesheet" href="/admin/dist/css/skins/_all-skins.min.css">*/
/*     <!-- iCheck -->*/
/*     <link rel="stylesheet" href="/admin/plugins/iCheck/flat/blue.css">*/
/*     <!-- Morris chart -->*/
/*     <link rel="stylesheet" href="/admin/plugins/morris/morris.css">*/
/*     <!-- jvectormap -->*/
/*     <link rel="stylesheet" href="/admin/plugins/jvectormap/jquery-jvectormap-1.2.2.css">*/
/*     <!-- Date Picker -->*/
/*     <link rel="stylesheet" href="/admin/plugins/datepicker/datepicker3.css">*/
/*     <!-- Daterange picker -->*/
/*     <link rel="stylesheet" href="/admin/plugins/daterangepicker/daterangepicker-bs3.css">*/
/*     <!-- bootstrap wysihtml5 - text editor -->*/
/*     <link rel="stylesheet" href="/admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">*/
/* */
/*     <link rel="stylesheet" href="/admin/dist/css/main.css">*/
/*     {% block css %}*/
/*     {% endblock %}*/
/* */
/*     <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->*/
/*     <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->*/
/*     <!--[if lt IE 9]>*/
/*     <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>*/
/*     <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>*/
/*     <![endif]-->*/
/* </head>*/
/* <body class="hold-transition skin-blue sidebar-mini">*/
/* <div class="wrapper">*/
/* */
/*     <header class="main-header">*/
/*         {{ render(controller('AppBundle:Admin/Index:header')) }}*/
/*     </header>*/
/*     <!-- Left side column. contains the logo and sidebar -->*/
/*     <aside class="main-sidebar">*/
/*         {{ render(controller('AppBundle:Admin/Index:menu')) }}*/
/*         <!-- /.sidebar -->*/
/*     </aside>*/
/* */
/*     <!-- Content Wrapper. Contains page content -->*/
/*     <div class="content-wrapper">*/
/*         <section class="content-header">*/
/*             <h1>*/
/*                 Mailbox*/
/*                 <small>13 new messages</small>*/
/*             </h1>*/
/*             <ol class="breadcrumb">*/
/*                 <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>*/
/*                 <li class="active">Mailbox</li>*/
/*             </ol>*/
/*         </section>*/
/*         <section class="content">*/
/*             <div class="row">*/
/*                 {% block body %}*/
/*                 {% endblock %}*/
/*             </div>*/
/*         </section>*/
/*     </div><!-- /.content-wrapper -->*/
/*     <footer class="main-footer">*/
/*         <div class="pull-right hidden-xs">*/
/*             <b>Version</b> 2.3.0*/
/*         </div>*/
/*         <strong>Copyright &copy; 2014-2015 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights reserved.*/
/*     </footer>*/
/* */
/*     <!-- Control Sidebar -->*/
/*     <aside class="control-sidebar control-sidebar-dark">*/
/*         <!-- Create the tabs -->*/
/*         <ul class="nav nav-tabs nav-justified control-sidebar-tabs">*/
/*             <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>*/
/*             <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>*/
/*         </ul>*/
/*         <!-- Tab panes -->*/
/*         <div class="tab-content">*/
/*             <!-- Home tab content -->*/
/*             <div class="tab-pane" id="control-sidebar-home-tab">*/
/*                 <h3 class="control-sidebar-heading">Recent Activity</h3>*/
/*                 <ul class="control-sidebar-menu">*/
/*                     <li>*/
/*                         <a href="javascript::;">*/
/*                             <i class="menu-icon fa fa-birthday-cake bg-red"></i>*/
/*                             <div class="menu-info">*/
/*                                 <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>*/
/*                                 <p>Will be 23 on April 24th</p>*/
/*                             </div>*/
/*                         </a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="javascript::;">*/
/*                             <i class="menu-icon fa fa-user bg-yellow"></i>*/
/*                             <div class="menu-info">*/
/*                                 <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>*/
/*                                 <p>New phone +1(800)555-1234</p>*/
/*                             </div>*/
/*                         </a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="javascript::;">*/
/*                             <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>*/
/*                             <div class="menu-info">*/
/*                                 <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>*/
/*                                 <p>nora@example.com</p>*/
/*                             </div>*/
/*                         </a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="javascript::;">*/
/*                             <i class="menu-icon fa fa-file-code-o bg-green"></i>*/
/*                             <div class="menu-info">*/
/*                                 <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>*/
/*                                 <p>Execution time 5 seconds</p>*/
/*                             </div>*/
/*                         </a>*/
/*                     </li>*/
/*                 </ul><!-- /.control-sidebar-menu -->*/
/* */
/*                 <h3 class="control-sidebar-heading">Tasks Progress</h3>*/
/*                 <ul class="control-sidebar-menu">*/
/*                     <li>*/
/*                         <a href="javascript::;">*/
/*                             <h4 class="control-sidebar-subheading">*/
/*                                 Custom Template Design*/
/*                                 <span class="label label-danger pull-right">70%</span>*/
/*                             </h4>*/
/*                             <div class="progress progress-xxs">*/
/*                                 <div class="progress-bar progress-bar-danger" style="width: 70%"></div>*/
/*                             </div>*/
/*                         </a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="javascript::;">*/
/*                             <h4 class="control-sidebar-subheading">*/
/*                                 Update Resume*/
/*                                 <span class="label label-success pull-right">95%</span>*/
/*                             </h4>*/
/*                             <div class="progress progress-xxs">*/
/*                                 <div class="progress-bar progress-bar-success" style="width: 95%"></div>*/
/*                             </div>*/
/*                         </a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="javascript::;">*/
/*                             <h4 class="control-sidebar-subheading">*/
/*                                 Laravel Integration*/
/*                                 <span class="label label-warning pull-right">50%</span>*/
/*                             </h4>*/
/*                             <div class="progress progress-xxs">*/
/*                                 <div class="progress-bar progress-bar-warning" style="width: 50%"></div>*/
/*                             </div>*/
/*                         </a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="javascript::;">*/
/*                             <h4 class="control-sidebar-subheading">*/
/*                                 Back End Framework*/
/*                                 <span class="label label-primary pull-right">68%</span>*/
/*                             </h4>*/
/*                             <div class="progress progress-xxs">*/
/*                                 <div class="progress-bar progress-bar-primary" style="width: 68%"></div>*/
/*                             </div>*/
/*                         </a>*/
/*                     </li>*/
/*                 </ul><!-- /.control-sidebar-menu -->*/
/* */
/*             </div><!-- /.tab-pane -->*/
/*             <!-- Stats tab content -->*/
/*             <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div><!-- /.tab-pane -->*/
/*             <!-- Settings tab content -->*/
/*             <div class="tab-pane" id="control-sidebar-settings-tab">*/
/*                 <form method="post">*/
/*                     <h3 class="control-sidebar-heading">General Settings</h3>*/
/*                     <div class="form-group">*/
/*                         <label class="control-sidebar-subheading">*/
/*                             Report panel usage*/
/*                             <input type="checkbox" class="pull-right" checked>*/
/*                         </label>*/
/*                         <p>*/
/*                             Some information about this general settings option*/
/*                         </p>*/
/*                     </div><!-- /.form-group -->*/
/* */
/*                     <div class="form-group">*/
/*                         <label class="control-sidebar-subheading">*/
/*                             Allow mail redirect*/
/*                             <input type="checkbox" class="pull-right" checked>*/
/*                         </label>*/
/*                         <p>*/
/*                             Other sets of options are available*/
/*                         </p>*/
/*                     </div><!-- /.form-group -->*/
/* */
/*                     <div class="form-group">*/
/*                         <label class="control-sidebar-subheading">*/
/*                             Expose author name in posts*/
/*                             <input type="checkbox" class="pull-right" checked>*/
/*                         </label>*/
/*                         <p>*/
/*                             Allow the user to show his name in blog posts*/
/*                         </p>*/
/*                     </div><!-- /.form-group -->*/
/* */
/*                     <h3 class="control-sidebar-heading">Chat Settings</h3>*/
/* */
/*                     <div class="form-group">*/
/*                         <label class="control-sidebar-subheading">*/
/*                             Show me as online*/
/*                             <input type="checkbox" class="pull-right" checked>*/
/*                         </label>*/
/*                     </div><!-- /.form-group -->*/
/* */
/*                     <div class="form-group">*/
/*                         <label class="control-sidebar-subheading">*/
/*                             Turn off notifications*/
/*                             <input type="checkbox" class="pull-right">*/
/*                         </label>*/
/*                     </div><!-- /.form-group -->*/
/* */
/*                     <div class="form-group">*/
/*                         <label class="control-sidebar-subheading">*/
/*                             Delete chat history*/
/*                             <a href="javascript::;" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>*/
/*                         </label>*/
/*                     </div><!-- /.form-group -->*/
/*                 </form>*/
/*             </div><!-- /.tab-pane -->*/
/*         </div>*/
/*     </aside><!-- /.control-sidebar -->*/
/*     <!-- Add the sidebar's background. This div must be placed*/
/*          immediately after the control sidebar -->*/
/*     <div class="control-sidebar-bg"></div>*/
/* </div><!-- ./wrapper -->*/
/* */
/* <!-- jQuery 2.1.4 -->*/
/* <script src="/admin/plugins/jQuery/jQuery-2.1.4.min.js"></script>*/
/* <!-- jQuery UI 1.11.4 -->*/
/* <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>*/
/* <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->*/
/* <script>*/
/*     $.widget.bridge('uibutton', $.ui.button);*/
/* </script>*/
/* <!-- Bootstrap 3.3.5 -->*/
/* <script src="/admin/bootstrap/js/bootstrap.min.js"></script>*/
/* <!-- Morris.js charts -->*/
/* <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>*/
/* <!--<script src="/admin/plugins/morris/morris.min.js"></script>-->*/
/* <!-- Sparkline -->*/
/* <script src="/admin/plugins/sparkline/jquery.sparkline.min.js"></script>*/
/* <!-- jvectormap -->*/
/* <script src="/admin/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>*/
/* <script src="/admin/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>*/
/* <!-- jQuery Knob Chart -->*/
/* <script src="/admin/plugins/knob/jquery.knob.js"></script>*/
/* <!-- daterangepicker -->*/
/* <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>*/
/* <script src="/admin/plugins/daterangepicker/daterangepicker.js"></script>*/
/* <!-- datepicker -->*/
/* <script src="/admin/plugins/datepicker/bootstrap-datepicker.js"></script>*/
/* <!-- Bootstrap WYSIHTML5 -->*/
/* <script src="/admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>*/
/* <!-- Slimscroll -->*/
/* <script src="/admin/plugins/slimScroll/jquery.slimscroll.min.js"></script>*/
/* <!-- FastClick -->*/
/* <script src="/admin/plugins/fastclick/fastclick.min.js"></script>*/
/* <!-- AdminLTE App -->*/
/* <script src="/admin/dist/js/app.min.js"></script>*/
/* <!-- AdminLTE dashboard demo (This is only for demo purposes) -->*/
/* <!--<script src="/admin/dist/js/pages/dashboard.js"></script>*/
/* <!-- AdminLTE for demo purposes*/
/* <script src="/admin/dist/js/demo.js"></script>-->*/
/* {% block js %}*/
/* {% endblock %}*/
/* </body>*/
/* </html>*/
/* */
