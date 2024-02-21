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

/* admin/invest.html.twig */
class __TwigTemplate_4c8cbc9dcb1bc84a2873803b965af016 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/invest.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/invest.html.twig"));

        // line 1
        $this->loadTemplate("adminbase.html.twig", "admin/invest.html.twig", 1)->display($context);
        // line 2
        echo "       ";
        $this->displayBlock('main', $context, $blocks);
        // line 74
        echo "    ";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 3
        echo "            <div class=\"dashboard-wrapper\">
            <div class=\"dashboard-ecommerce\">
                <div class=\"container-fluid dashboard-content \">
                  
                    <div class=\"ecommerce-widget\">

                       
                        <div class=\"row\">
                            <!-- ============================================================== -->
                      
                            <!-- ============================================================== -->

                                          <!-- recent orders  -->
                            <!-- ============================================================== -->
                            <div class=\"col-xl-9 col-lg-12 col-md-6 col-sm-12 col-12\">
                                <div class=\"card\">
                                    <h5 class=\"card-header\">Wallets List</h5>
                                    <div class=\"card-body p-0\">
                                        <div class=\"table-responsive\">
                                            <table class=\"table\">
                                                <thead class=\"bg-light\">
                                                    <tr class=\"border-0\">
                                                    
                                                        <th class=\"border-0\">Name</th>
                                                        <th class=\"border-0\">Plan Name</th>
                                                        <th class=\"border-0\">amount</th>
                                                        <th class=\"border-0\">Start Date</th>
                                                         <th class=\"border-0\">End Date</th> 
                                                         <th class=\"border-0\">Interest (daily)</th>
                                                        
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                   ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["plans"]) || array_key_exists("plans", $context) ? $context["plans"] : (function () { throw new RuntimeError('Variable "plans" does not exist.', 36, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["plan"]) {
            // line 37
            echo "                                                    <tr>
                                                    
                                                        <td> ";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["plan"], "user", [], "any", false, false, false, 39), "name", [], "any", false, false, false, 39), "html", null, true);
            echo "</td>
                                                        <td> ";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plan"], "name", [], "any", false, false, false, 40), "html", null, true);
            echo "</td>
                                                        <td>\$";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plan"], "amount", [], "any", false, false, false, 41), "html", null, true);
            echo "</td>
                                                        <td> ";
            // line 42
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plan"], "startdate", [], "any", false, false, false, 42), "D, M d, Y g:i A"), "html", null, true);
            echo " </td>
                                                        <td>";
            // line 43
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plan"], "enddate", [], "any", false, false, false, 43), "D, M d, Y g:i A"), "html", null, true);
            echo "</td>
                                                        <td>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plan"], "interest", [], "any", false, false, false, 44), "html", null, true);
            echo "% Daiy</td>
                                                       
                                                       
                                                    </tr>
                                                   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['plan'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "                                                </tbody>
                                                  ";
        // line 50
        echo $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, (isset($context["plans"]) || array_key_exists("plans", $context) ? $context["plans"] : (function () { throw new RuntimeError('Variable "plans" does not exist.', 50, $this->source); })()));
        echo "     
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
        return "admin/invest.html.twig";
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
        return array (  146 => 50,  143 => 49,  132 => 44,  128 => 43,  124 => 42,  120 => 41,  116 => 40,  112 => 39,  108 => 37,  104 => 36,  69 => 3,  59 => 2,  49 => 74,  46 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% include 'adminbase.html.twig' %}
       {% block main %}
            <div class=\"dashboard-wrapper\">
            <div class=\"dashboard-ecommerce\">
                <div class=\"container-fluid dashboard-content \">
                  
                    <div class=\"ecommerce-widget\">

                       
                        <div class=\"row\">
                            <!-- ============================================================== -->
                      
                            <!-- ============================================================== -->

                                          <!-- recent orders  -->
                            <!-- ============================================================== -->
                            <div class=\"col-xl-9 col-lg-12 col-md-6 col-sm-12 col-12\">
                                <div class=\"card\">
                                    <h5 class=\"card-header\">Wallets List</h5>
                                    <div class=\"card-body p-0\">
                                        <div class=\"table-responsive\">
                                            <table class=\"table\">
                                                <thead class=\"bg-light\">
                                                    <tr class=\"border-0\">
                                                    
                                                        <th class=\"border-0\">Name</th>
                                                        <th class=\"border-0\">Plan Name</th>
                                                        <th class=\"border-0\">amount</th>
                                                        <th class=\"border-0\">Start Date</th>
                                                         <th class=\"border-0\">End Date</th> 
                                                         <th class=\"border-0\">Interest (daily)</th>
                                                        
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                   {% for plan in plans %}
                                                    <tr>
                                                    
                                                        <td> {{plan.user.name}}</td>
                                                        <td> {{plan.name}}</td>
                                                        <td>\${{plan.amount}}</td>
                                                        <td> {{ plan.startdate | date('D, M d, Y g:i A') }} </td>
                                                        <td>{{ plan.enddate | date('D, M d, Y g:i A') }}</td>
                                                        <td>{{plan.interest}}% Daiy</td>
                                                       
                                                       
                                                    </tr>
                                                   {% endfor %}
                                                </tbody>
                                                  {{ knp_pagination_render(plans) }}     
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
       {% endblock %}
    ", "admin/invest.html.twig", "C:\\xampp\\htdocs\\express\\templates\\admin\\invest.html.twig");
    }
}
