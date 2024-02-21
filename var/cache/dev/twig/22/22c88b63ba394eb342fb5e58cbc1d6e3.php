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

/* admin/withdrawals.html.twig */
class __TwigTemplate_56394ed796b9d384a2dea9fc5856f87e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/withdrawals.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/withdrawals.html.twig"));

        // line 1
        $this->loadTemplate("adminbase.html.twig", "admin/withdrawals.html.twig", 1)->display($context);
        // line 2
        $this->displayBlock('main', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 3
        echo "      <div class=\"dashboard-wrapper\">
            <div class=\"dashboard-ecommerce\">
                <div class=\"container-fluid dashboard-content \">
                    <!-- ============================================================== -->
                    <!-- pageheader  -->
                    <!-- ============================================================== -->
                    <div class=\"row\">
                        <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12\">
                            <div class=\"page-header\">
                                <h2 class=\"pageheader-title\">Withdrawal Requests </h2>
                                <p class=\"pageheader-text\">Nulla euismod urna eros, sit amet scelerisque torton lectus vel mauris facilisis faucibus at enim quis massa lobortis rutrum.</p>
                                <div class=\"page-breadcrumb\">
                                    <nav aria-label=\"breadcrumb\">
                                        <ol class=\"breadcrumb\">
                                            <li class=\"breadcrumb-item\"><a href=\"#\" class=\"breadcrumb-link\">Dashboard</a></li>
                                            <li class=\"breadcrumb-item active\" aria-current=\"page\">Withdrawal Requests</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end pageheader  -->
                    <!-- ============================================================== -->
                    <div class=\"ecommerce-widget\">

                        
                        <div class=\"row\">
                            <!-- ============================================================== -->
                      
                            <!-- ============================================================== -->

                                          <!-- recent orders  -->
                            <!-- ============================================================== -->
                            <div class=\"col-xl-9 col-lg-12 col-md-6 col-sm-12 col-12\">
                                <div class=\"card\">
                                    <h5 class=\"card-header\">Withdrawal Requests Lists</h5>
                                    <div class=\"card-body p-0\">
                                        <div class=\"table-responsive\">
                                            <table class=\"table\">
                                                <thead class=\"bg-light\">
                                                    <tr class=\"border-0\">
                                                    
                                                        <th class=\"border-0\">Name</th>
                                                        <th class=\"border-0\">Amount</th>
                                                        <th class=\"border-0\">status</th>
                                                         <th class=\"border-0\">Date</th> 
                                                         <th class=\"border-0\">Action</th>
                                                        
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                   ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["withdrawals"]) || array_key_exists("withdrawals", $context) ? $context["withdrawals"] : (function () { throw new RuntimeError('Variable "withdrawals" does not exist.', 56, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["withdrawal"]) {
            // line 57
            echo "                                                     <tr>
                                                    
                                                        <td>";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["withdrawal"], "user", [], "any", false, false, false, 59), "name", [], "any", false, false, false, 59), "html", null, true);
            echo "</td>
                                                        <td>\$";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["withdrawal"], "amount", [], "any", false, false, false, 60), "html", null, true);
            echo " </td>
                                                        <td>";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["withdrawal"], "status", [], "any", false, false, false, 61), "html", null, true);
            echo "</td>
                                                        <td>";
            // line 62
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["withdrawal"], "date", [], "any", false, false, false, 62), "D-M-Y"), "html", null, true);
            echo "</td>
                                                        <td><form action=\"\" method=\"post\"><input type=\"text\" name=\"id\" value=\"";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["withdrawal"], "id", [], "any", false, false, false, 63), "html", null, true);
            echo "\" hidden> <input type=\"submit\" class=\"btn btn-primary btn-lg btn-block\" name=\"approve\" value=\"approve\"><input type=\"submit\" name=\"delete\" class=\"btn btn-primary btn-lg btn-block\" value=\"delete\"></form></td>
                                                       
                                                       
                                                    </tr>
                                                   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['withdrawal'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "                                                
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ============================================================== -->
                            <!-- end recent orders  -->

    
                           
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            
            <!-- ============================================================== -->
            <!-- end footer -->
            <!-- ============================================================== -->
        </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "admin/withdrawals.html.twig";
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
        return array (  155 => 68,  144 => 63,  140 => 62,  136 => 61,  132 => 60,  128 => 59,  124 => 57,  120 => 56,  65 => 3,  46 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% include 'adminbase.html.twig' %}
{% block main %}
      <div class=\"dashboard-wrapper\">
            <div class=\"dashboard-ecommerce\">
                <div class=\"container-fluid dashboard-content \">
                    <!-- ============================================================== -->
                    <!-- pageheader  -->
                    <!-- ============================================================== -->
                    <div class=\"row\">
                        <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12\">
                            <div class=\"page-header\">
                                <h2 class=\"pageheader-title\">Withdrawal Requests </h2>
                                <p class=\"pageheader-text\">Nulla euismod urna eros, sit amet scelerisque torton lectus vel mauris facilisis faucibus at enim quis massa lobortis rutrum.</p>
                                <div class=\"page-breadcrumb\">
                                    <nav aria-label=\"breadcrumb\">
                                        <ol class=\"breadcrumb\">
                                            <li class=\"breadcrumb-item\"><a href=\"#\" class=\"breadcrumb-link\">Dashboard</a></li>
                                            <li class=\"breadcrumb-item active\" aria-current=\"page\">Withdrawal Requests</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end pageheader  -->
                    <!-- ============================================================== -->
                    <div class=\"ecommerce-widget\">

                        
                        <div class=\"row\">
                            <!-- ============================================================== -->
                      
                            <!-- ============================================================== -->

                                          <!-- recent orders  -->
                            <!-- ============================================================== -->
                            <div class=\"col-xl-9 col-lg-12 col-md-6 col-sm-12 col-12\">
                                <div class=\"card\">
                                    <h5 class=\"card-header\">Withdrawal Requests Lists</h5>
                                    <div class=\"card-body p-0\">
                                        <div class=\"table-responsive\">
                                            <table class=\"table\">
                                                <thead class=\"bg-light\">
                                                    <tr class=\"border-0\">
                                                    
                                                        <th class=\"border-0\">Name</th>
                                                        <th class=\"border-0\">Amount</th>
                                                        <th class=\"border-0\">status</th>
                                                         <th class=\"border-0\">Date</th> 
                                                         <th class=\"border-0\">Action</th>
                                                        
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                   {% for withdrawal in withdrawals %}
                                                     <tr>
                                                    
                                                        <td>{{withdrawal.user.name}}</td>
                                                        <td>\${{withdrawal.amount}} </td>
                                                        <td>{{withdrawal.status}}</td>
                                                        <td>{{withdrawal.date|date('D-M-Y')}}</td>
                                                        <td><form action=\"\" method=\"post\"><input type=\"text\" name=\"id\" value=\"{{withdrawal.id}}\" hidden> <input type=\"submit\" class=\"btn btn-primary btn-lg btn-block\" name=\"approve\" value=\"approve\"><input type=\"submit\" name=\"delete\" class=\"btn btn-primary btn-lg btn-block\" value=\"delete\"></form></td>
                                                       
                                                       
                                                    </tr>
                                                   {% endfor %}
                                                
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ============================================================== -->
                            <!-- end recent orders  -->

    
                           
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            
            <!-- ============================================================== -->
            <!-- end footer -->
            <!-- ============================================================== -->
        </div>
{% endblock %}", "admin/withdrawals.html.twig", "C:\\xampp\\htdocs\\express\\templates\\admin\\withdrawals.html.twig");
    }
}
