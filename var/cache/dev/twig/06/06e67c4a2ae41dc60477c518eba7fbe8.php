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

/* admin/profile.html.twig */
class __TwigTemplate_b346062686ef43c57cd2032a6db97de6 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/profile.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/profile.html.twig"));

        // line 1
        $this->loadTemplate("adminbase.html.twig", "admin/profile.html.twig", 1)->display($context);
        // line 2
        echo "
";
        // line 3
        $this->displayBlock('main', $context, $blocks);
        // line 144
        echo "        
    ";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "    <div class=\"dashboard-wrapper\">
            <div class=\"container-fluid  dashboard-content\">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class=\"row\">
                    <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12\">
                        <div class=\"page-header\">
                            <div class=\"page-breadcrumb\">
                                <nav aria-label=\"breadcrumb\">
                                    <ol class=\"breadcrumb\">
                                        <li class=\"breadcrumb-item\"><a href=\"index.php\" class=\"breadcrumb-link\">Dashboard</a></li>
                                        <li class=\"breadcrumb-item\"><a href=\"index.php\" class=\"breadcrumb-link\">Users</a></li>
                                        <li class=\"breadcrumb-item active\" aria-current=\"page\"><?php echo \$user['0']['firstname'];?></li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end pageheader -->
                <!-- ============================================================== -->
             
                    <div class=\"row\">
                        <!-- ============================================================== -->
                        <!-- validation form -->
                        <!-- ============================================================== -->
                        <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12\">
                            <div class=\"card\">
                                <h5 class=\"card-header\">";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 34, $this->source); })()), "name", [], "any", false, false, false, 34), "html", null, true);
        echo " account details</h5>
                                <div class=\"card-body\">
                                    <form  method=\"post\" action=\"\">
                                        <div class=\"row\">
                                            <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 \">
                                                <label for=\"validationCustom01\">name</label>
                                                <input type=\"text\" class=\"form-control\" id=\"validationCustom01\" placeholder=\"name\" value=\"";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 40, $this->source); })()), "name", [], "any", false, false, false, 40), "html", null, true);
        echo "\" required>
                                                <div class=\"valid-feedback\">
                                                
                                                </div>
                                            </div>
                                            <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 \">
                                                <label for=\"validationCustom01\">email</label>
                                                <input type=\"text\" class=\"form-control\" id=\"validationCustom01\" placeholder=\"email address\" value=\"";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 47, $this->source); })()), "email", [], "any", false, false, false, 47), "html", null, true);
        echo "\" required>
                                                <div class=\"valid-feedback\">
                                                
                                                </div>
                                            </div>

                                            <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 \">
                                                <label for=\"validationCustom01\">phone</label>
                                                <input type=\"text\" class=\"form-control\" id=\"validationCustom01\" placeholder=\"phone number\" value=\"";
        // line 55
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 55, $this->source); })()), "phone", [], "any", false, false, false, 55), "html", null, true);
        echo "\" required>
                                                <div class=\"valid-feedback\">
                                                
                                                </div>
                                            </div>

                                            <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 \">
                                                <label for=\"validationCustom01\">Balance</label>
                                                <input type=\"text\" class=\"form-control\" id=\"validationCustom01\"  name=\"balance\" placeholder=\"balance\" value=\"";
        // line 63
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 63, $this->source); })()), "balance", [], "any", false, false, false, 63), "html", null, true);
        echo "\" required>
                                                <div class=\"valid-feedback\">
                                                
                                                </div>
                                            </div>
                                            
                                            <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 \">
                                                <label for=\"validationCustom01\">Bonus</label>
                                                <input type=\"text\" class=\"form-control\" id=\"validationCustom01\"  name=\"bonus\" placeholder=\"bonus\" value=\"";
        // line 71
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 71, $this->source); })()), "bonus", [], "any", false, false, false, 71), "html", null, true);
        echo "\" required>
                                                <div class=\"valid-feedback\">
                                                
                                                </div>
                                            </div>

                                            <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 \">
                                                <label for=\"validationCustom01\">profit</label>
                                                <input type=\"text\" class=\"form-control\" id=\"validationCustom01\" name=\"profit\" placeholder=\"profit\" value=\"";
        // line 79
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 79, $this->source); })()), "profit", [], "any", false, false, false, 79), "html", null, true);
        echo "\" required>
                                                <div class=\"valid-feedback\">
                                                
                                                </div>
                                            </div>
                                            
                                           
                                           
                                            <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 \">
                                                <label for=\"validationCustom01\">country</label>
                                                <input type=\"text\" class=\"form-control\" id=\"validationCustom01\" name= \"country\" placeholder=\"Bonus\" value=\"";
        // line 89
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 89, $this->source); })()), "country", [], "any", false, false, false, 89), "html", null, true);
        echo "\" required>
                                                <div class=\"valid-feedback\">
                                                
                                                </div>
                                            </div>
                                           
                                           
                                            <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 \">
                                                <label for=\"validationCustom01\">Registration Date</label>
                                                <input type=\"text\" class=\"form-control\" id=\"validationCustom01\" placeholder=\"date\" value=\"";
        // line 98
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 98, $this->source); })()), "date", [], "any", false, false, false, 98), "y - m - d"), "html", null, true);
        echo "\" required>
                                                <div class=\"valid-feedback\">
                                                
                                                </div>
                                            </div>
                                            <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 \">
                                                <label for=\"validationCustom01\">Password</label>
                                                <input type=\"text\" class=\"form-control\" id=\"validationCustom01\" placeholder=\"password\" value=\"";
        // line 105
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 105, $this->source); })()), "password", [], "any", false, false, false, 105), "html", null, true);
        echo "\" required>
                                                <div class=\"valid-feedback\">
                                                
                                                </div>
                                            </div>


                                        
                                            <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 \">
                                                <input type=\"submit\" class=\"btn btn-primary\" name=\"update\"  value=\"Update User\">
                                            </div>

                                            
                                            <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 \">
                                                <input type=\"submit\" class=\"btn btn-primary\" name=\"delete\"  value=\"Delete User\">
                                            </div>
                                        </div>
                                    </form>

                    
                                </div>
                            </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- end validation form -->
                        <!-- ============================================================== -->
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
        return "admin/profile.html.twig";
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
        return array (  202 => 105,  192 => 98,  180 => 89,  167 => 79,  156 => 71,  145 => 63,  134 => 55,  123 => 47,  113 => 40,  104 => 34,  72 => 4,  62 => 3,  51 => 144,  49 => 3,  46 => 2,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% include 'adminbase.html.twig' %}

{% block main %}
    <div class=\"dashboard-wrapper\">
            <div class=\"container-fluid  dashboard-content\">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class=\"row\">
                    <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12\">
                        <div class=\"page-header\">
                            <div class=\"page-breadcrumb\">
                                <nav aria-label=\"breadcrumb\">
                                    <ol class=\"breadcrumb\">
                                        <li class=\"breadcrumb-item\"><a href=\"index.php\" class=\"breadcrumb-link\">Dashboard</a></li>
                                        <li class=\"breadcrumb-item\"><a href=\"index.php\" class=\"breadcrumb-link\">Users</a></li>
                                        <li class=\"breadcrumb-item active\" aria-current=\"page\"><?php echo \$user['0']['firstname'];?></li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end pageheader -->
                <!-- ============================================================== -->
             
                    <div class=\"row\">
                        <!-- ============================================================== -->
                        <!-- validation form -->
                        <!-- ============================================================== -->
                        <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12\">
                            <div class=\"card\">
                                <h5 class=\"card-header\">{{user.name}} account details</h5>
                                <div class=\"card-body\">
                                    <form  method=\"post\" action=\"\">
                                        <div class=\"row\">
                                            <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 \">
                                                <label for=\"validationCustom01\">name</label>
                                                <input type=\"text\" class=\"form-control\" id=\"validationCustom01\" placeholder=\"name\" value=\"{{user.name}}\" required>
                                                <div class=\"valid-feedback\">
                                                
                                                </div>
                                            </div>
                                            <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 \">
                                                <label for=\"validationCustom01\">email</label>
                                                <input type=\"text\" class=\"form-control\" id=\"validationCustom01\" placeholder=\"email address\" value=\"{{user.email}}\" required>
                                                <div class=\"valid-feedback\">
                                                
                                                </div>
                                            </div>

                                            <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 \">
                                                <label for=\"validationCustom01\">phone</label>
                                                <input type=\"text\" class=\"form-control\" id=\"validationCustom01\" placeholder=\"phone number\" value=\"{{user.phone}}\" required>
                                                <div class=\"valid-feedback\">
                                                
                                                </div>
                                            </div>

                                            <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 \">
                                                <label for=\"validationCustom01\">Balance</label>
                                                <input type=\"text\" class=\"form-control\" id=\"validationCustom01\"  name=\"balance\" placeholder=\"balance\" value=\"{{user.balance}}\" required>
                                                <div class=\"valid-feedback\">
                                                
                                                </div>
                                            </div>
                                            
                                            <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 \">
                                                <label for=\"validationCustom01\">Bonus</label>
                                                <input type=\"text\" class=\"form-control\" id=\"validationCustom01\"  name=\"bonus\" placeholder=\"bonus\" value=\"{{user.bonus}}\" required>
                                                <div class=\"valid-feedback\">
                                                
                                                </div>
                                            </div>

                                            <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 \">
                                                <label for=\"validationCustom01\">profit</label>
                                                <input type=\"text\" class=\"form-control\" id=\"validationCustom01\" name=\"profit\" placeholder=\"profit\" value=\"{{user.profit}}\" required>
                                                <div class=\"valid-feedback\">
                                                
                                                </div>
                                            </div>
                                            
                                           
                                           
                                            <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 \">
                                                <label for=\"validationCustom01\">country</label>
                                                <input type=\"text\" class=\"form-control\" id=\"validationCustom01\" name= \"country\" placeholder=\"Bonus\" value=\"{{user.country}}\" required>
                                                <div class=\"valid-feedback\">
                                                
                                                </div>
                                            </div>
                                           
                                           
                                            <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 \">
                                                <label for=\"validationCustom01\">Registration Date</label>
                                                <input type=\"text\" class=\"form-control\" id=\"validationCustom01\" placeholder=\"date\" value=\"{{user.date|date('y - m - d')}}\" required>
                                                <div class=\"valid-feedback\">
                                                
                                                </div>
                                            </div>
                                            <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 \">
                                                <label for=\"validationCustom01\">Password</label>
                                                <input type=\"text\" class=\"form-control\" id=\"validationCustom01\" placeholder=\"password\" value=\"{{user.password}}\" required>
                                                <div class=\"valid-feedback\">
                                                
                                                </div>
                                            </div>


                                        
                                            <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 \">
                                                <input type=\"submit\" class=\"btn btn-primary\" name=\"update\"  value=\"Update User\">
                                            </div>

                                            
                                            <div class=\"col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 \">
                                                <input type=\"submit\" class=\"btn btn-primary\" name=\"delete\"  value=\"Delete User\">
                                            </div>
                                        </div>
                                    </form>

                    
                                </div>
                            </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- end validation form -->
                        <!-- ============================================================== -->
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
        
    ", "admin/profile.html.twig", "C:\\xampp\\htdocs\\express\\templates\\admin\\profile.html.twig");
    }
}