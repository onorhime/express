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

/* admin/deposits.html.twig */
class __TwigTemplate_e8b9d0408882cbdbe99d76040772807b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/deposits.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/deposits.html.twig"));

        // line 1
        $this->loadTemplate("adminbase.html.twig", "admin/deposits.html.twig", 1)->display($context);
        // line 2
        echo "       
    ";
        // line 3
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

        // line 4
        echo "           <div class=\"dashboard-wrapper\">
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
                                    <h5 class=\"card-header\">Deposit Requests Lists</h5>
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
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["deposits"]) || array_key_exists("deposits", $context) ? $context["deposits"] : (function () { throw new RuntimeError('Variable "deposits" does not exist.', 36, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["deposit"]) {
            // line 37
            echo "                                                    <tr>
                                                    
                                                        <td> ";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["deposit"], "user", [], "any", false, false, false, 39), "name", [], "any", false, false, false, 39), "html", null, true);
            echo "</td>
                                                        <td>\$ ";
            // line 40
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["deposit"], "amount", [], "any", false, false, false, 40), 2, ".", ""), "html", null, true);
            echo " </td>
                                                        <td>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["deposit"], "status", [], "any", false, false, false, 41), "html", null, true);
            echo " </td>
                                                        <td>";
            // line 42
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["deposit"], "date", [], "any", false, false, false, 42), "D-M-Y"), "html", null, true);
            echo "</td>
                                                        <td><form action=\"\" method=\"post\"><input type=\"text\" name=\"id\" value=\"";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["deposit"], "id", [], "any", false, false, false, 43), "html", null, true);
            echo "\" hidden> <input type=\"submit\" class=\"btn btn-primary btn-lg btn-block\" name=\"approve\" value=\"approve\"><input type=\"submit\" name=\"delete\" class=\"btn btn-primary btn-lg btn-block\" value=\"delete\"></form></td>
                                                       
                                                       
                                                    </tr>
                                                   ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['deposit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "                                                </tbody>
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
        return "admin/deposits.html.twig";
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
        return array (  137 => 48,  126 => 43,  122 => 42,  118 => 41,  114 => 40,  110 => 39,  106 => 37,  102 => 36,  68 => 4,  49 => 3,  46 => 2,  44 => 1,);
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
                                    <h5 class=\"card-header\">Deposit Requests Lists</h5>
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
                                                   {% for deposit in deposits %}
                                                    <tr>
                                                    
                                                        <td> {{deposit.user.name}}</td>
                                                        <td>\$ {{deposit.amount|number_format(2, '.', '') }} </td>
                                                        <td>{{deposit.status}} </td>
                                                        <td>{{deposit.date|date('D-M-Y')}}</td>
                                                        <td><form action=\"\" method=\"post\"><input type=\"text\" name=\"id\" value=\"{{deposit.id}}\" hidden> <input type=\"submit\" class=\"btn btn-primary btn-lg btn-block\" name=\"approve\" value=\"approve\"><input type=\"submit\" name=\"delete\" class=\"btn btn-primary btn-lg btn-block\" value=\"delete\"></form></td>
                                                       
                                                       
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
    
    {% endblock %}", "admin/deposits.html.twig", "C:\\xampp\\htdocs\\express\\templates\\admin\\deposits.html.twig");
    }
}
