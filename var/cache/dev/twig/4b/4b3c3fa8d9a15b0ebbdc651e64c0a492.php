<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* adminbase.html.twig */
class __TwigTemplate_a518c5b94717ba464f86554700329eb4 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'main' => [$this, 'block_main'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "adminbase.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "adminbase.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
 
<head>
    <!-- Required meta tags -->
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <!-- Bootstrap CSS -->
    <link rel=\"stylesheet\" href=";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo ">
    <link href=";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/vendor/fonts/circular-std/style.css"), "html", null, true);
        echo " rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/libs/css/style.css"), "html", null, true);
        echo ">
    <link rel=\"stylesheet\" href=";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/vendor/fonts/fontawesome/css/fontawesome-all.css"), "html", null, true);
        echo ">
    <link rel=\"stylesheet\" href=";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/vendor/charts/chartist-bundle/chartist.css"), "html", null, true);
        echo ">
    <link rel=\"stylesheet\" href=";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/vendor/charts/morris-bundle/morris.css"), "html", null, true);
        echo ">
    <link rel=\"stylesheet\" href=";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css"), "html", null, true);
        echo ">
    <link rel=\"stylesheet\" href=";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/vendor/charts/c3charts/c3.css"), "html", null, true);
        echo ">
    <link rel=\"stylesheet\" href=";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/vendor/fonts/flag-icon-css/flag-icon.min.css"), "html", null, true);
        echo ">
    <title>Admin Dashboard</title>
</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class=\"dashboard-main-wrapper\">
       
        <!-- ============================================================== -->
        <div class=\"nav-left-sidebar sidebar-dark\">
            <div class=\"menu-list\">
                <nav class=\"navbar navbar-expand-lg navbar-light\">
                    <a class=\"d-xl-none d-lg-none\" href=\"#\">Dashboard</a>
                    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                        <span class=\"navbar-toggler-icon\"></span>
                    </button>
                    <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
                        <ul class=\"navbar-nav flex-column\">
                            <li class=\"nav-divider\">
                                Menu
                            </li>
                            <li class=\"nav-item \">
                                <a class=\"nav-link active\" href=";
        // line 41
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin");
        echo " aria-controls=\"submenu-1\"><i class=\"fa fa-fw fa-user-circle\"></i>Dashboard <span class=\"badge badge-success\">6</span></a>
                               
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("depositlist");
        echo "  aria-controls=\"submenu-2\"><i class=\"fa fa-fw fa-rocket\"></i>Deposit Requests</a>
                        
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=";
        // line 49
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("withdrawallist");
        echo "  aria-controls=\"submenu-3\"><i class=\"fas fa-fw fa-chart-pie\"></i>Withdrawal Requests</a>
                              
                            </li>
                            <li class=\"nav-item \">
                                <a class=\"nav-link\" href=";
        // line 53
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("investments");
        echo " aria-controls=\"submenu-4\"><i class=\"fab fa-fw fa-wpforms\"></i>Investments</a>
                               
                            </li>

                             <li class=\"nav-item \">
                                <a class=\"nav-link\" href=";
        // line 58
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
        echo " aria-controls=\"submenu-4\"><i class=\"fab fa-fw fa-wpforms\"></i>Logout</a>
                               
                            </li>
                            
                          
                        
                        </ul>
                    </div>
                </nav>
            </div>
        </div>

        ";
        // line 70
        $this->displayBlock('main', $context, $blocks);
        // line 73
        echo "
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <!-- jquery 3.3.1 -->
    <script src=";
        // line 80
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/vendor/jquery/jquery-3.3.1.min.js"), "html", null, true);
        echo "></script>
    <!-- bootstap bundle js -->
    <script src=";
        // line 82
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/vendor/bootstrap/js/bootstrap.bundle.js"), "html", null, true);
        echo "></script>
    <!-- slimscroll js -->
    <script src=";
        // line 84
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/vendor/slimscroll/jquery.slimscroll.js"), "html", null, true);
        echo "></script>
    <!-- main js -->
    <script src=";
        // line 86
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/libs/js/main-js.js"), "html", null, true);
        echo "></script>
    <!-- chart chartist js -->
    <script src=";
        // line 88
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/vendor/charts/chartist-bundle/chartist.min.js"), "html", null, true);
        echo "></script>
    <!-- sparkline js -->
    <script src=";
        // line 90
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/vendor/charts/sparkline/jquery.sparkline.js"), "html", null, true);
        echo "></script>
    <!-- morris js -->
    <script src=";
        // line 92
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/vendor/charts/morris-bundle/raphael.min.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 93
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/vendor/charts/morris-bundle/morris.js"), "html", null, true);
        echo "></script>
    <!-- chart c3 js -->
    <script src=";
        // line 95
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/vendor/charts/c3charts/c3.min.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 96
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/vendor/charts/c3charts/d3-5.4.0.min.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 97
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/vendor/charts/c3charts/C3chartjs.js"), "html", null, true);
        echo "></script>
    <script src=";
        // line 98
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/assets/libs/js/dashboard-ecommerce.js"), "html", null, true);
        echo "></script>
</body>
 
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 70
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 71
        echo "            
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "adminbase.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  243 => 71,  233 => 70,  219 => 98,  215 => 97,  211 => 96,  207 => 95,  202 => 93,  198 => 92,  193 => 90,  188 => 88,  183 => 86,  178 => 84,  173 => 82,  168 => 80,  159 => 73,  157 => 70,  142 => 58,  134 => 53,  127 => 49,  120 => 45,  113 => 41,  86 => 17,  82 => 16,  78 => 15,  74 => 14,  70 => 13,  66 => 12,  62 => 11,  58 => 10,  54 => 9,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
 
<head>
    <!-- Required meta tags -->
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <!-- Bootstrap CSS -->
    <link rel=\"stylesheet\" href={{ asset(\"admin/assets/vendor/bootstrap/css/bootstrap.min.css\")}}>
    <link href={{ asset(\"admin/assets/vendor/fonts/circular-std/style.css\")}} rel=\"stylesheet\">
    <link rel=\"stylesheet\" href={{ asset(\"admin/assets/libs/css/style.css\")}}>
    <link rel=\"stylesheet\" href={{ asset(\"admin/assets/vendor/fonts/fontawesome/css/fontawesome-all.css\")}}>
    <link rel=\"stylesheet\" href={{ asset(\"admin/assets/vendor/charts/chartist-bundle/chartist.css\")}}>
    <link rel=\"stylesheet\" href={{ asset(\"admin/assets/vendor/charts/morris-bundle/morris.css\")}}>
    <link rel=\"stylesheet\" href={{ asset(\"admin/assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css\")}}>
    <link rel=\"stylesheet\" href={{ asset(\"admin/assets/vendor/charts/c3charts/c3.css\")}}>
    <link rel=\"stylesheet\" href={{ asset(\"admin/assets/vendor/fonts/flag-icon-css/flag-icon.min.css\")}}>
    <title>Admin Dashboard</title>
</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class=\"dashboard-main-wrapper\">
       
        <!-- ============================================================== -->
        <div class=\"nav-left-sidebar sidebar-dark\">
            <div class=\"menu-list\">
                <nav class=\"navbar navbar-expand-lg navbar-light\">
                    <a class=\"d-xl-none d-lg-none\" href=\"#\">Dashboard</a>
                    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                        <span class=\"navbar-toggler-icon\"></span>
                    </button>
                    <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
                        <ul class=\"navbar-nav flex-column\">
                            <li class=\"nav-divider\">
                                Menu
                            </li>
                            <li class=\"nav-item \">
                                <a class=\"nav-link active\" href={{ path('admin') }} aria-controls=\"submenu-1\"><i class=\"fa fa-fw fa-user-circle\"></i>Dashboard <span class=\"badge badge-success\">6</span></a>
                               
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href={{ path(\"depositlist\") }}  aria-controls=\"submenu-2\"><i class=\"fa fa-fw fa-rocket\"></i>Deposit Requests</a>
                        
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href={{ path('withdrawallist') }}  aria-controls=\"submenu-3\"><i class=\"fas fa-fw fa-chart-pie\"></i>Withdrawal Requests</a>
                              
                            </li>
                            <li class=\"nav-item \">
                                <a class=\"nav-link\" href={{ path('investments') }} aria-controls=\"submenu-4\"><i class=\"fab fa-fw fa-wpforms\"></i>Investments</a>
                               
                            </li>

                             <li class=\"nav-item \">
                                <a class=\"nav-link\" href={{ path('logout') }} aria-controls=\"submenu-4\"><i class=\"fab fa-fw fa-wpforms\"></i>Logout</a>
                               
                            </li>
                            
                          
                        
                        </ul>
                    </div>
                </nav>
            </div>
        </div>

        {% block main %}
            
        {% endblock %}

    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <!-- jquery 3.3.1 -->
    <script src={{ asset(\"admin/assets/vendor/jquery/jquery-3.3.1.min.js\")}}></script>
    <!-- bootstap bundle js -->
    <script src={{ asset(\"admin/assets/vendor/bootstrap/js/bootstrap.bundle.js\")}}></script>
    <!-- slimscroll js -->
    <script src={{ asset(\"admin/assets/vendor/slimscroll/jquery.slimscroll.js\")}}></script>
    <!-- main js -->
    <script src={{ asset(\"admin/assets/libs/js/main-js.js\")}}></script>
    <!-- chart chartist js -->
    <script src={{ asset(\"admin/assets/vendor/charts/chartist-bundle/chartist.min.js\")}}></script>
    <!-- sparkline js -->
    <script src={{ asset(\"admin/assets/vendor/charts/sparkline/jquery.sparkline.js\")}}></script>
    <!-- morris js -->
    <script src={{ asset(\"admin/assets/vendor/charts/morris-bundle/raphael.min.js\")}}></script>
    <script src={{ asset(\"admin/assets/vendor/charts/morris-bundle/morris.js\")}}></script>
    <!-- chart c3 js -->
    <script src={{ asset(\"admin/assets/vendor/charts/c3charts/c3.min.js\")}}></script>
    <script src={{ asset(\"admin/assets/vendor/charts/c3charts/d3-5.4.0.min.js\")}}></script>
    <script src={{ asset(\"admin/assets/vendor/charts/c3charts/C3chartjs.js\")}}></script>
    <script src={{ asset(\"admin/assets/libs/js/dashboard-ecommerce.js\")}}></script>
</body>
 
</html>", "adminbase.html.twig", "C:\\xampp\\htdocs\\express\\templates\\adminbase.html.twig");
    }
}
