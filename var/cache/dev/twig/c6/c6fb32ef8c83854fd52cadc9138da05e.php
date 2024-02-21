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

/* admin/index.html.twig */
class __TwigTemplate_52d111b1148cdd6e534f0709f95e78ca extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        // line 1
        echo "    
";
        // line 2
        $this->loadTemplate("adminbase.html.twig", "admin/index.html.twig", 2)->display($context);
        // line 3
        echo "
";
        // line 4
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

        // line 5
        echo "     <div class=\"dashboard-wrapper\">
            <div class=\"dashboard-ecommerce\">
                <div class=\"container-fluid dashboard-content \">
                    <!-- ============================================================== -->
                    <!-- pageheader  -->
                    <!-- ============================================================== -->
                    <div class=\"row\">
                        <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12\">
                            <div class=\"page-header\">
                                <h2 class=\"pageheader-title\">Admin Dashboard </h2>
                                <p class=\"pageheader-text\">Nulla euismod urna eros, sit amet scelerisque torton lectus vel mauris facilisis faucibus at enim quis massa lobortis rutrum.</p>
                                <div class=\"page-breadcrumb\">
                                    <nav aria-label=\"breadcrumb\">
                                        <ol class=\"breadcrumb\">
                                            <li class=\"breadcrumb-item\"><a href=\"#\" class=\"breadcrumb-link\">Dashboard</a></li>
                                            <li class=\"breadcrumb-item active\" aria-current=\"page\">Admin Dashboard</li>
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
                            <div class=\"col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12\">
                                <div class=\"card\">
                                    <div class=\"card-body\">
                                        <h5 class=\"text-muted\">Total Clients</h5>
                                        <div class=\"metric-value d-inline-block\">
                                            <h1 class=\"mb-1\">";
        // line 38
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 38, $this->source); })())), "html", null, true);
        echo "</h1>
                                        </div>
                                        <div class=\"metric-label d-inline-block float-right text-success font-weight-bold\">
                                            <span><i class=\"fa fa-fw fa-arrow-up\"></i></span><span>";
        // line 41
        echo twig_escape_filter($this->env, (twig_length_filter($this->env, (isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 41, $this->source); })())) / 100), "html", null, true);
        echo ">%</span>
                                        </div>
                                    </div>
                                    <div id=\"sparkline-revenue\"></div>
                                </div>
                            </div>
                            <div class=\"col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12\">
                                <div class=\"card\">
                                    <div class=\"card-body\">
                                        <h5 class=\"text-muted\">Deposit Requests</h5>
                                        <div class=\"metric-value d-inline-block\">
                                            <h1 class=\"mb-1\">";
        // line 52
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["deposits"]) || array_key_exists("deposits", $context) ? $context["deposits"] : (function () { throw new RuntimeError('Variable "deposits" does not exist.', 52, $this->source); })())), "html", null, true);
        echo "</h1>
                                        </div>
                                        <div class=\"metric-label d-inline-block float-right text-success font-weight-bold\">
                                            <span><i class=\"fa fa-fw fa-arrow-up\"></i></span><span>";
        // line 55
        echo twig_escape_filter($this->env, (twig_length_filter($this->env, (isset($context["deposits"]) || array_key_exists("deposits", $context) ? $context["deposits"] : (function () { throw new RuntimeError('Variable "deposits" does not exist.', 55, $this->source); })())) / 100), "html", null, true);
        echo "%</span>
                                        </div>
                                    </div>
                                    <div id=\"sparkline-revenue2\"></div>
                                </div>
                            </div>
                            <div class=\"col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12\">
                                <div class=\"card\">
                                    <div class=\"card-body\">
                                        <h5 class=\"text-muted\">Withdrawal Requests</h5>
                                        <div class=\"metric-value d-inline-block\">
                                            <h1 class=\"mb-1\">";
        // line 66
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["withdrawals"]) || array_key_exists("withdrawals", $context) ? $context["withdrawals"] : (function () { throw new RuntimeError('Variable "withdrawals" does not exist.', 66, $this->source); })())), "html", null, true);
        echo "</h1>
                                        </div>
                                        <div class=\"metric-label d-inline-block float-right text-primary font-weight-bold\">
                                            <span>N/A</span>
                                        </div>
                                    </div>
                                    <div id=\"sparkline-revenue3\"></div>
                                </div>
                            </div>
                            
                        </div>
                        <div class=\"row\">
                            <!-- ============================================================== -->
                      
                            <!-- ============================================================== -->

                                          <!-- recent orders  -->
                            <!-- ============================================================== -->
                          
                            <div class=\"col-xl-9 col-lg-12 col-md-6 col-sm-12 col-12\">
                                <div class=\"card\">
                                    <h5 class=\"card-header\">All Clients Lists</h5>
                                    <div class=\"card-body p-0\">
                                        <div class=\"table-responsive\">
                                            <table class=\"table\">
                                                <thead class=\"bg-light\">
                                                    <tr class=\"border-0\">
                                                    
                                                        <th class=\"border-0\">Name</th>
                                                        <th class=\"border-0\">Email</th>
                                                        <th class=\"border-0\">Phone</th>
                                                        <th class=\"border-0\">Password</th>
                                                        <th class=\"border-0\">country</th>
                                                        <th class=\"border-0\">Registration Date</th>
                                                        
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    ";
        // line 104
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 104, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 105
            echo "                                                        <tr>
        
                                                        <td> <a href=";
            // line 107
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profileview", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 107)]), "html", null, true);
            echo " target=\"\" rel=\"noopener noreferrer\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "name", [], "any", false, false, false, 107), "html", null, true);
            echo "</a></td>
                                                        <td>";
            // line 108
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 108), "html", null, true);
            echo "</td>
                                                        <td>";
            // line 109
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "phone", [], "any", false, false, false, 109), "html", null, true);
            echo " </td>
                                                        <td>";
            // line 110
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "password", [], "any", false, false, false, 110), "html", null, true);
            echo " </td>
                                                        <td>";
            // line 111
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "country", [], "any", false, false, false, 111), "html", null, true);
            echo "</td>
                                                        <td>";
            // line 112
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "date", [], "any", false, false, false, 112), "D M d Y H:i"), "html", null, true);
            echo "</td>
                                                       
                                                    </tr>

                                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 117
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
        return "admin/index.html.twig";
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
        return array (  228 => 117,  217 => 112,  213 => 111,  209 => 110,  205 => 109,  201 => 108,  195 => 107,  191 => 105,  187 => 104,  146 => 66,  132 => 55,  126 => 52,  112 => 41,  106 => 38,  71 => 5,  52 => 4,  49 => 3,  47 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("    
{% include 'adminbase.html.twig' %}

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
                                <h2 class=\"pageheader-title\">Admin Dashboard </h2>
                                <p class=\"pageheader-text\">Nulla euismod urna eros, sit amet scelerisque torton lectus vel mauris facilisis faucibus at enim quis massa lobortis rutrum.</p>
                                <div class=\"page-breadcrumb\">
                                    <nav aria-label=\"breadcrumb\">
                                        <ol class=\"breadcrumb\">
                                            <li class=\"breadcrumb-item\"><a href=\"#\" class=\"breadcrumb-link\">Dashboard</a></li>
                                            <li class=\"breadcrumb-item active\" aria-current=\"page\">Admin Dashboard</li>
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
                            <div class=\"col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12\">
                                <div class=\"card\">
                                    <div class=\"card-body\">
                                        <h5 class=\"text-muted\">Total Clients</h5>
                                        <div class=\"metric-value d-inline-block\">
                                            <h1 class=\"mb-1\">{{ users|length }}</h1>
                                        </div>
                                        <div class=\"metric-label d-inline-block float-right text-success font-weight-bold\">
                                            <span><i class=\"fa fa-fw fa-arrow-up\"></i></span><span>{{ users|length / 100}}>%</span>
                                        </div>
                                    </div>
                                    <div id=\"sparkline-revenue\"></div>
                                </div>
                            </div>
                            <div class=\"col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12\">
                                <div class=\"card\">
                                    <div class=\"card-body\">
                                        <h5 class=\"text-muted\">Deposit Requests</h5>
                                        <div class=\"metric-value d-inline-block\">
                                            <h1 class=\"mb-1\">{{ deposits|length }}</h1>
                                        </div>
                                        <div class=\"metric-label d-inline-block float-right text-success font-weight-bold\">
                                            <span><i class=\"fa fa-fw fa-arrow-up\"></i></span><span>{{ deposits|length / 100}}%</span>
                                        </div>
                                    </div>
                                    <div id=\"sparkline-revenue2\"></div>
                                </div>
                            </div>
                            <div class=\"col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12\">
                                <div class=\"card\">
                                    <div class=\"card-body\">
                                        <h5 class=\"text-muted\">Withdrawal Requests</h5>
                                        <div class=\"metric-value d-inline-block\">
                                            <h1 class=\"mb-1\">{{ withdrawals|length }}</h1>
                                        </div>
                                        <div class=\"metric-label d-inline-block float-right text-primary font-weight-bold\">
                                            <span>N/A</span>
                                        </div>
                                    </div>
                                    <div id=\"sparkline-revenue3\"></div>
                                </div>
                            </div>
                            
                        </div>
                        <div class=\"row\">
                            <!-- ============================================================== -->
                      
                            <!-- ============================================================== -->

                                          <!-- recent orders  -->
                            <!-- ============================================================== -->
                          
                            <div class=\"col-xl-9 col-lg-12 col-md-6 col-sm-12 col-12\">
                                <div class=\"card\">
                                    <h5 class=\"card-header\">All Clients Lists</h5>
                                    <div class=\"card-body p-0\">
                                        <div class=\"table-responsive\">
                                            <table class=\"table\">
                                                <thead class=\"bg-light\">
                                                    <tr class=\"border-0\">
                                                    
                                                        <th class=\"border-0\">Name</th>
                                                        <th class=\"border-0\">Email</th>
                                                        <th class=\"border-0\">Phone</th>
                                                        <th class=\"border-0\">Password</th>
                                                        <th class=\"border-0\">country</th>
                                                        <th class=\"border-0\">Registration Date</th>
                                                        
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    {% for user in users %}
                                                        <tr>
        
                                                        <td> <a href={{ path('profileview', {'id':user.id}) }} target=\"\" rel=\"noopener noreferrer\">{{user.name}}</a></td>
                                                        <td>{{user.email}}</td>
                                                        <td>{{user.phone}} </td>
                                                        <td>{{user.password}} </td>
                                                        <td>{{user.country}}</td>
                                                        <td>{{user.date | date('D M d Y H:i')}}</td>
                                                       
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
{% endblock %}", "admin/index.html.twig", "C:\\xampp\\htdocs\\express\\templates\\admin\\index.html.twig");
    }
}
