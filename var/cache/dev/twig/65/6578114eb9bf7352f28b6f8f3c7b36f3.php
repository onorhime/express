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

/* dashboard/plandetail.html.twig */
class __TwigTemplate_fea3e2bfcc12b38634334c0a1de5d6f0 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'main' => [$this, 'block_main'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/plandetail.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/plandetail.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "dashboard/plandetail.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 5
        echo "            <div class=\"container-fluid mb-5\">
                <!-- Title -->
    <div class=\"d-flex justify-content-between align-items-center\">
        <h1 class=\"h2\">
            Premium Plan
        </h1>
        <div>
            <a href=";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("plans");
        echo " class=\"fs-1\">
                <i class=\"bi bi-arrow-left-circle-fill\"></i>
            </a>
        </div>
    </div>
    <div>
    </div>
    <div>
    </div>
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <h2>
                        ";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 26, $this->source); })()), "interest", [], "any", false, false, false, 26), "html", null, true);
        echo "% Daily
                        for 
                        ";
        // line 28
        $context["startDate"] = twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 28, $this->source); })()), "startdate", [], "any", false, false, false, 28);
        // line 29
        echo "                        ";
        $context["endDate"] = twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 29, $this->source); })()), "enddate", [], "any", false, false, false, 29);
        // line 30
        echo "
                        ";
        // line 31
        $context["difference"] = twig_get_attribute($this->env, $this->source, (isset($context["endDate"]) || array_key_exists("endDate", $context) ? $context["endDate"] : (function () { throw new RuntimeError('Variable "endDate" does not exist.', 31, $this->source); })()), "diff", [(isset($context["startDate"]) || array_key_exists("startDate", $context) ? $context["startDate"] : (function () { throw new RuntimeError('Variable "startDate" does not exist.', 31, $this->source); })())], "method", false, false, false, 31);
        // line 32
        echo "                        ";
        $context["daysDifference"] = twig_get_attribute($this->env, $this->source, (isset($context["difference"]) || array_key_exists("difference", $context) ? $context["difference"] : (function () { throw new RuntimeError('Variable "difference" does not exist.', 32, $this->source); })()), "days", [], "any", false, false, false, 32);
        // line 33
        echo "
                        ";
        // line 34
        echo twig_escape_filter($this->env, (isset($context["daysDifference"]) || array_key_exists("daysDifference", $context) ? $context["daysDifference"] : (function () { throw new RuntimeError('Variable "daysDifference" does not exist.', 34, $this->source); })()), "html", null, true);
        echo "
                        Days
                    </h2>
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <div>
                                                           ";
        // line 39
        if (twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 39, $this->source); })()), "iscomplete", [], "any", false, false, false, 39)) {
            // line 40
            echo "                                                             <span class=\"badge bg-success\">Completed</span>
                                                             ";
        } else {
            // line 42
            echo "                                                              <span class=\"badge bg-success\">Active</span>
                                                           ";
        }
        // line 44
        echo "                                                    </div>
                                                                                    ";
        // line 47
        echo "
                                <!-- cancel plan modal -->
                                <div class=\"modal fade\" id=\"exampleModal\" tabindex=\"-1\" role=\"dialog\"
                                    aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\" x-data=\"{ disabled: false }\">
                                    <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
                                        <div class=\"modal-content\">
                                            <div class=\"modal-header pb-0\">
                                                <h3 class=\"modal-title\">Cancel plan</h3>
                                                <!-- Button -->
                                                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"
                                                    aria-label=\"Close\"></button>
                                            </div>
                                            <div class=\"modal-body\">
                                                Are you sure you want to cancel your Premium plan?
                                            </div>
                                            <div class=\"modal-footer\">
                                                <button type=\"button\" class=\"btn btn-secondary\"
                                                    data-bs-dismiss=\"modal\">Close</button>

                                                <a href=\"https://mam.getonlinetrader.pro/protodash/dashboard/cancel-plan/68\" type=\"button\"
                                                    class=\"btn btn-danger\" :class=\"{ 'd-none': disabled }\"
                                                    x-on:click=\"disabled = true\">Cancel</a>

                                                <button class=\"btn btn-danger\" :class=\"disabled ? 'd-block' : 'd-none'\"
                                                    disabled>
                                                    Cancel
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                                                        </div>
                    <hr>
                    <div class=\"mt-5\">
                        <h4 class=\"mb-3\">Plan information</h4>
                        <div class=\"mb-5 row\">
                            <div class=\"col-12\">
                                <div class=\"d-flex justify-content-around\">
                                    <div class=\"d-flex justify-content-between\">
                                        <div>
                                            <h2 class=\"m-0\">
                                                \$";
        // line 88
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 88, $this->source); })()), "amount", [], "any", false, false, false, 88), "2", ".", ","), "html", null, true);
        echo " +
                                                &nbsp;
                                            </h2>
                                            <small>Invested</small>
                                        </div>
                                        <div>
                                            <h2 class=\"m-0 text-success\">
                                                \$
                                                

                                                ";
        // line 98
        $context["diffe"] = twig_get_attribute($this->env, $this->source, (isset($context["date"]) || array_key_exists("date", $context) ? $context["date"] : (function () { throw new RuntimeError('Variable "date" does not exist.', 98, $this->source); })()), "diff", [(isset($context["startDate"]) || array_key_exists("startDate", $context) ? $context["startDate"] : (function () { throw new RuntimeError('Variable "startDate" does not exist.', 98, $this->source); })())], "method", false, false, false, 98);
        // line 99
        echo "                                                ";
        $context["daysDiff"] = twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["diffe"]) || array_key_exists("diffe", $context) ? $context["diffe"] : (function () { throw new RuntimeError('Variable "diffe" does not exist.', 99, $this->source); })()), "days", [], "any", false, false, false, 99), 2, ".", "");
        // line 100
        echo "                                                 ";
        if (((isset($context["daysDiff"]) || array_key_exists("daysDiff", $context) ? $context["daysDiff"] : (function () { throw new RuntimeError('Variable "daysDiff" does not exist.', 100, $this->source); })()) <= (isset($context["daysDifference"]) || array_key_exists("daysDifference", $context) ? $context["daysDifference"] : (function () { throw new RuntimeError('Variable "daysDifference" does not exist.', 100, $this->source); })()))) {
            // line 101
            echo "                                                    ";
            echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 101, $this->source); })()), "amount", [], "any", false, false, false, 101) * twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 101, $this->source); })()), "interest", [], "any", false, false, false, 101)) / 100) * twig_number_format_filter($this->env, (isset($context["daysDiff"]) || array_key_exists("daysDiff", $context) ? $context["daysDiff"] : (function () { throw new RuntimeError('Variable "daysDiff" does not exist.', 101, $this->source); })()), 2, ".", "")), "html", null, true);
            echo "
                                                    ";
        } else {
            // line 103
            echo "                                                    ";
            echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 103, $this->source); })()), "amount", [], "any", false, false, false, 103) * twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 103, $this->source); })()), "interest", [], "any", false, false, false, 103)) / 100) * twig_number_format_filter($this->env, (isset($context["daysDifference"]) || array_key_exists("daysDifference", $context) ? $context["daysDifference"] : (function () { throw new RuntimeError('Variable "daysDifference" does not exist.', 103, $this->source); })()), 2, ".", "")), "html", null, true);
            echo "
                                                ";
        }
        // line 105
        echo "                                                 

                                            </h2>
                                            <small> Earned</small>
                                        </div>
                                    </div>
                                    <div>
                                        <h2 class=\"m-0 text-success\">
                                                                                            \$ ";
        // line 113
        echo twig_escape_filter($this->env, (((twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 113, $this->source); })()), "amount", [], "any", false, false, false, 113) * twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 113, $this->source); })()), "interest", [], "any", false, false, false, 113)) / 100) * twig_number_format_filter($this->env, (isset($context["daysDifference"]) || array_key_exists("daysDifference", $context) ? $context["daysDifference"] : (function () { throw new RuntimeError('Variable "daysDifference" does not exist.', 113, $this->source); })()), 2, ".", "")), "html", null, true);
        echo "
                                                                                    </h2>
                                        <small>Total Return</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row border-bottom\">
                            <div class=\"col-md-3\">
                                <p>Duration: <br><strong>";
        // line 122
        echo twig_escape_filter($this->env, (isset($context["daysDifference"]) || array_key_exists("daysDifference", $context) ? $context["daysDifference"] : (function () { throw new RuntimeError('Variable "daysDifference" does not exist.', 122, $this->source); })()), "html", null, true);
        echo " Days</strong> </p>
                            </div>
                            <div class=\"col-md-3\">
                                <p>Start Date: <br>
                                    <strong>";
        // line 126
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 126, $this->source); })()), "startdate", [], "any", false, false, false, 126), "D, M d, Y g:i A"), "html", null, true);
        echo "</strong>
                                </p>
                            </div>
                            <div class=\"col-md-3\">
                                <p>End Date:
                                    <br><strong>";
        // line 131
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 131, $this->source); })()), "enddate", [], "any", false, false, false, 131), "D, M d, Y g:i A"), "html", null, true);
        echo "</strong>
                                </p>
                            </div>
                        </div>
                        <div class=\"mt-4 row border-bottom\">
                            <div class=\"col-md-3\">
                                <p>Minimum Return: <br><strong>";
        // line 137
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 137, $this->source); })()), "interest", [], "any", false, false, false, 137), "html", null, true);
        echo "%</strong> </p>
                            </div>
                            <div class=\"col-md-3\">
                                <p>Maximum Return: <br> <strong>";
        // line 140
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["plan"]) || array_key_exists("plan", $context) ? $context["plan"] : (function () { throw new RuntimeError('Variable "plan" does not exist.', 140, $this->source); })()), "interest", [], "any", false, false, false, 140) * (isset($context["daysDifference"]) || array_key_exists("daysDifference", $context) ? $context["daysDifference"] : (function () { throw new RuntimeError('Variable "daysDifference" does not exist.', 140, $this->source); })())), "html", null, true);
        echo "%</strong> </p>
                            </div>
                            <div class=\"col-md-3\">
                                <p>ROI Interval:
                                    <br><strong>Daily</strong>
                                </p>
                            </div>
                        </div>
                    </div>

                    ";
        // line 177
        echo "                </div>
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
        return "dashboard/plandetail.html.twig";
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
        return array (  277 => 177,  264 => 140,  258 => 137,  249 => 131,  241 => 126,  234 => 122,  222 => 113,  212 => 105,  206 => 103,  200 => 101,  197 => 100,  194 => 99,  192 => 98,  179 => 88,  136 => 47,  133 => 44,  129 => 42,  125 => 40,  123 => 39,  115 => 34,  112 => 33,  109 => 32,  107 => 31,  104 => 30,  101 => 29,  99 => 28,  94 => 26,  77 => 12,  68 => 5,  58 => 4,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}


{% block main %}
            <div class=\"container-fluid mb-5\">
                <!-- Title -->
    <div class=\"d-flex justify-content-between align-items-center\">
        <h1 class=\"h2\">
            Premium Plan
        </h1>
        <div>
            <a href={{ path('plans') }} class=\"fs-1\">
                <i class=\"bi bi-arrow-left-circle-fill\"></i>
            </a>
        </div>
    </div>
    <div>
    </div>
    <div>
    </div>
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <h2>
                        {{plan.interest}}% Daily
                        for 
                        {% set startDate = plan.startdate %}
                        {% set endDate = plan.enddate %}

                        {% set difference = endDate.diff(startDate) %}
                        {% set daysDifference = difference.days %}

                        {{ daysDifference }}
                        Days
                    </h2>
                    <div class=\"d-flex justify-content-between align-items-center\">
                        <div>
                                                           {% if plan.iscomplete %}
                                                             <span class=\"badge bg-success\">Completed</span>
                                                             {% else %}
                                                              <span class=\"badge bg-success\">Active</span>
                                                           {% endif %}
                                                    </div>
                                                                                    {# <a href=\"#\" class=\"px-3 btn btn-danger btn-sm\" data-bs-toggle=\"modal\"
                                    data-bs-target=\"#exampleModal\"> <i class=\" fas fa-times\"></i> Cancel this Plan</a> #}

                                <!-- cancel plan modal -->
                                <div class=\"modal fade\" id=\"exampleModal\" tabindex=\"-1\" role=\"dialog\"
                                    aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\" x-data=\"{ disabled: false }\">
                                    <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
                                        <div class=\"modal-content\">
                                            <div class=\"modal-header pb-0\">
                                                <h3 class=\"modal-title\">Cancel plan</h3>
                                                <!-- Button -->
                                                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\"
                                                    aria-label=\"Close\"></button>
                                            </div>
                                            <div class=\"modal-body\">
                                                Are you sure you want to cancel your Premium plan?
                                            </div>
                                            <div class=\"modal-footer\">
                                                <button type=\"button\" class=\"btn btn-secondary\"
                                                    data-bs-dismiss=\"modal\">Close</button>

                                                <a href=\"https://mam.getonlinetrader.pro/protodash/dashboard/cancel-plan/68\" type=\"button\"
                                                    class=\"btn btn-danger\" :class=\"{ 'd-none': disabled }\"
                                                    x-on:click=\"disabled = true\">Cancel</a>

                                                <button class=\"btn btn-danger\" :class=\"disabled ? 'd-block' : 'd-none'\"
                                                    disabled>
                                                    Cancel
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                                                        </div>
                    <hr>
                    <div class=\"mt-5\">
                        <h4 class=\"mb-3\">Plan information</h4>
                        <div class=\"mb-5 row\">
                            <div class=\"col-12\">
                                <div class=\"d-flex justify-content-around\">
                                    <div class=\"d-flex justify-content-between\">
                                        <div>
                                            <h2 class=\"m-0\">
                                                \${{ plan.amount|number_format('2', '.', ',') }} +
                                                &nbsp;
                                            </h2>
                                            <small>Invested</small>
                                        </div>
                                        <div>
                                            <h2 class=\"m-0 text-success\">
                                                \$
                                                

                                                {% set diffe = date.diff(startDate) %}
                                                {% set daysDiff = diffe.days|number_format(2,'.','') %}
                                                 {% if  daysDiff <= daysDifference %}
                                                    {{ (plan.amount * plan.interest) / 100  * daysDiff|number_format(2,'.','') }}
                                                    {% else %}
                                                    {{ (plan.amount * plan.interest) / 100  * daysDifference|number_format(2,'.','') }}
                                                {% endif %}
                                                 

                                            </h2>
                                            <small> Earned</small>
                                        </div>
                                    </div>
                                    <div>
                                        <h2 class=\"m-0 text-success\">
                                                                                            \$ {{ (plan.amount * plan.interest) / 100  * daysDifference|number_format(2,'.','') }}
                                                                                    </h2>
                                        <small>Total Return</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"row border-bottom\">
                            <div class=\"col-md-3\">
                                <p>Duration: <br><strong>{{ daysDifference}} Days</strong> </p>
                            </div>
                            <div class=\"col-md-3\">
                                <p>Start Date: <br>
                                    <strong>{{ plan.startdate | date('D, M d, Y g:i A') }}</strong>
                                </p>
                            </div>
                            <div class=\"col-md-3\">
                                <p>End Date:
                                    <br><strong>{{ plan.enddate | date('D, M d, Y g:i A') }}</strong>
                                </p>
                            </div>
                        </div>
                        <div class=\"mt-4 row border-bottom\">
                            <div class=\"col-md-3\">
                                <p>Minimum Return: <br><strong>{{plan.interest}}%</strong> </p>
                            </div>
                            <div class=\"col-md-3\">
                                <p>Maximum Return: <br> <strong>{{plan.interest * daysDifference}}%</strong> </p>
                            </div>
                            <div class=\"col-md-3\">
                                <p>ROI Interval:
                                    <br><strong>Daily</strong>
                                </p>
                            </div>
                        </div>
                    </div>

                    {# <div class=\"mt-5 \">
                        <h4>
                            Transactions
                        </h4>
                        <div class=\"table-responsive\">
                            <table class=\"table\">
                                <thead class=\"bg-light\">
                                    <tr>
                                        <th>Type</th>
                                        <th>Date</th>
                                        <th>Amount</th>
                                    </tr>
                                </thead>
                                <tbody>
                                                                            <tr>
                                            <td colspan=\"3\" class=\"text-center\">
                                                <i class=\"bi bi-database-fill-exclamation\" style=\"font-size: 50px\"></i>
                                                <h2 class=\"h3\"> No transaction record yet</h2>
                                            </td>
                                        </tr>
                                                                    </tbody>
                            </table>
                        </div>
                        <div>
                            
                        </div>
                    </div> #}
                </div>
            </div>
{% endblock %}", "dashboard/plandetail.html.twig", "C:\\xampp\\htdocs\\express\\templates\\dashboard\\plandetail.html.twig");
    }
}
