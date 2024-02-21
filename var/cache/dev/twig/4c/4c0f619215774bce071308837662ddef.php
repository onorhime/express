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

/* dashboard/index.html.twig */
class __TwigTemplate_642696002e2455df3d27aa9527e4b0e7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "dashboard/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "dashboard/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 6
        echo "        <div class=\"container-fluid mb-5\">
                    <!-- Title -->
        <h1 class=\"h2\">
            Welcome, ";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 9, $this->source); })()), "user", [], "any", false, false, false, 9), "name", [], "any", false, false, false, 9), "html", null, true);
        echo "!
        </h1>
        <div>
        </div>
        <div>
        </div>
                    <div class=\"row\">
                <div class=\"col-12\">
                    <div class=\"py-4 alert alert-info alert-dismissible fade show\" role=\"alert\">
                        Welcome to Evolved Blockchain Solutionsr version 5 with a lot of Security Features,
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                    </div>
                </div>
            </div>
            <div class=\"row\">
            <div class=\"col-lg-3\">
                <!-- Card -->
                <div class=\"card border-0\">
                    <div class=\"card-body\">
                        <div class=\"row\">
                            <div class=\"col d-flex justify-content-between\">
                                <div>
                                    <!-- Title -->
                                    <h5 class=\"d-flex align-items-center text-uppercase text-muted fw-semibold mb-2\">
                                        <span class=\"legend-circle-sm bg-primary\"></span>
                                        Account Balance
                                    </h5>

                                    <!-- Subtitle -->
                                    <h2 class=\"mb-0\">
                                        \$";
        // line 39
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 39, $this->source); })()), "user", [], "any", false, false, false, 39), "balance", [], "any", false, false, false, 39), 2, ".", ","), "html", null, true);
        echo "
                                    </h2>

                                    <a href=";
        // line 42
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deposit");
        echo " class=\"fs-6 btn-link mb-0 mt-2 mr-3\">
                                        Deposit
                                    </a>
                                    <span class=\"\">-</span>
                                                                        <!-- Comment -->
                                        <a href=";
        // line 47
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("withdrawal");
        echo " class=\"fs-6 btn-link mb-0 mt-2 ml-3\">
                                            Transfer
                                        </a>
                                                                </div>

                                <span class=\"text-primary\">
                                    <i class=\"bi bi-wallet-fill fs-1\"></i>
                                </span>
                            </div>
                        </div> <!-- / .row -->
                    </div>
                </div>
            </div>
                        <div class=\"col-lg-3\">
                    <!-- Card -->
                    <div class=\"card border-0\">
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <div class=\"col d-flex justify-content-between\">
                                    <div>
                                        <!-- Title -->
                                        <h5 class=\"d-flex align-items-center text-uppercase text-muted fw-semibold mb-2\">
                                            <span class=\"legend-circle-sm bg-success\"></span>
                                            Total Profit
                                        </h5>
                                        <!-- Subtitle -->
                                        <h2 class=\"mb-0\">
                                            \$";
        // line 74
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 74, $this->source); })()), "user", [], "any", false, false, false, 74), "profit", [], "any", false, false, false, 74), 2, ".", ","), "html", null, true);
        echo "
                                        </h2>
                                        <!-- Comment -->
                                        ";
        // line 82
        echo "                                    </div>

                                    <span class=\"text-success\">
                                        <i class=\"bi bi-coin fs-1\"></i>
                                    </span>
                                </div>
                            </div> <!-- / .row -->
                        </div>
                    </div>
                </div>
                    <div class=\"col-lg-3\">
                <!-- Card -->
                <div class=\"card border-0\">
                    <div class=\"card-body\">
                        <div class=\"row\">
                            <div class=\"col d-flex justify-content-between\">
                                <div>
                                    <!-- Title -->
                                    <h5 class=\"d-flex align-items-center text-uppercase text-muted fw-semibold mb-2\">
                                        <span class=\"legend-circle-sm bg-info\"></span>
                                        Total Bonus
                                    </h5>
                                    <!-- Subtitle -->
                                    <h2 class=\"mb-0\">
                                        \$";
        // line 106
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 106, $this->source); })()), "user", [], "any", false, false, false, 106), "bonus", [], "any", false, false, false, 106), 2, ".", ","), "html", null, true);
        echo "
                                    </h2>
                                    <!-- Comment -->
                                    ";
        // line 114
        echo "                                </div>

                                <span class=\"text-info\">
                                    <i class=\"bi bi-gift-fill fs-1\"></i>
                                </span>
                            </div>
                        </div> <!-- / .row -->
                    </div>
                </div>
            </div>

            ";
        // line 157
        echo "            <div class=\"col-lg-3\">
                <!-- Card -->
                <div class=\"card border-0\">
                    <div class=\"card-body\">
                        <div class=\"row\">
                            <div class=\"col d-flex justify-content-between\">
                                <div>
                                    <!-- Title -->
                                    <h5 class=\"d-flex align-items-center text-uppercase text-muted fw-semibold mb-2\">
                                        <span class=\"legend-circle-sm bg-success\"></span>
                                        Total Deposited
                                    </h5>
                                    <!-- Subtitle -->
                                    <h2 class=\"mb-0\">
                                        \$";
        // line 171
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 171, $this->source); })()), "user", [], "any", false, false, false, 171), "totaldeposit", [], "any", false, false, false, 171), 2, ".", ","), "html", null, true);
        echo "
                                    </h2>
                                    <!-- Comment -->
                                    <a href=";
        // line 174
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("transaction");
        echo ">
                                        <p class=\"fs-6 btn-link mb-0 mt-2\">
                                            View deposits
                                        </p>
                                    </a>
                                </div>

                                <span class=\"text-success\">
                                    <i class=\"bi bi-box-arrow-in-down fs-1\"></i>
                                </span>
                            </div>
                        </div> <!-- / .row -->
                    </div>
                </div>
            </div>
            <div class=\"col-lg-3\">
                <!-- Card -->
                <div class=\"card border-0\">
                    <div class=\"card-body\">
                        <div class=\"row\">
                            <div class=\"col d-flex justify-content-between\">
                                <div>
                                    <!-- Title -->
                                    <h5 class=\"d-flex align-items-center text-uppercase text-muted fw-semibold mb-2\">
                                        <span class=\"legend-circle-sm bg-danger\"></span>
                                        Total Withdrawal
                                    </h5>
                                    <!-- Subtitle -->
                                    <h2 class=\"mb-0\">
                                        \$";
        // line 203
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 203, $this->source); })()), "user", [], "any", false, false, false, 203), "totalwithdrawal", [], "any", false, false, false, 203), 2, ".", ","), "html", null, true);
        echo "
                                    </h2>
                                    <!-- Comment -->
                                    <a href=";
        // line 206
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("transaction");
        echo ">
                                        <p class=\"fs-6 btn-link mb-0 mt-2\">
                                            View withdrawals
                                        </p>
                                    </a>
                                </div>

                                <span class=\"text-danger\">
                                    <i class=\"bi bi-box-arrow-in-up fs-1\"></i>
                                </span>
                            </div>
                        </div> <!-- / .row -->
                    </div>
                </div>
            </div>
            <div class=\"col-lg-3\">
                <div class=\"card border-0\">
                    <!-- Card body -->
                    <div class=\"card-body\">
                        <div class=\"row\">
                            <div class=\"col d-flex justify-content-between\">
                                <div>
                                    <!-- Title -->
                                    <h5 class=\"d-flex align-items-center text-uppercase text-muted fw-semibold mb-2\">
                                        <span class=\"legend-circle-sm bg-secondary\"></span>
                                        Referrals
                                    </h5>
                                    <!-- Subtitle -->
                                    <h2 class=\"mb-0\">
                                        ";
        // line 235
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 235, $this->source); })()), "user", [], "any", false, false, false, 235), "referrals", [], "any", false, false, false, 235)), "html", null, true);
        echo "
                                    </h2>
                                    <!-- Comment -->
                                    ";
        // line 243
        echo "                                </div>
                                <span class=\"text-secondary\">
                                    <i class=\"bi bi-link fs-1\"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                       
                </div>
                
            <div class=\"mt-4 row\">
                <div class=\"col-12\">
                    <div>
                        <h5 class=\"text-primary h5\">Active Plan(s)
                            <span class=\"text-base count\">(";
        // line 259
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["activeplans"]) || array_key_exists("activeplans", $context) ? $context["activeplans"] : (function () { throw new RuntimeError('Variable "activeplans" does not exist.', 259, $this->source); })())), "html", null, true);
        echo ")</span>
                        </h5>
                    </div>
                </div>
                <div class=\"col-12\">
                      ";
        // line 264
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["activeplans"]) || array_key_exists("activeplans", $context) ? $context["activeplans"] : (function () { throw new RuntimeError('Variable "activeplans" does not exist.', 264, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["plan"]) {
            // line 265
            echo "                          <div class=\"row\">
                            <div class=\"col-md-12\">
                                <div class=\"py-4 card\">
                                    <div class=\"card-body d-flex justify-content-between align-items-center\">
                                        <div>
                                            <h6 class=\"h5\">";
            // line 270
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plan"], "name", [], "any", false, false, false, 270), "html", null, true);
            echo "</h6>
                                            <p class=\"h3\">
                                                \$";
            // line 272
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plan"], "amount", [], "any", false, false, false, 272), "html", null, true);
            echo "
                                            </p>
                                        </div>
                                        <div class=\"d-none d-md-block\">
                                            <div class=\"d-flex justify-content-around\">
                                                <div class=\"mr-3\">
                                                    <h6 class=\"text-black bold\">
                                                        ";
            // line 279
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plan"], "startdate", [], "any", false, false, false, 279), "D, M d, Y g:i A"), "html", null, true);
            echo "
                                                    </h6>
                                                    <span class=\"nk-iv-scheme-value date\">Start Date</span>
                                                </div>
                                                <span class=\"m-3\">

                                                </span>
                                                <div class=\"ml-3\">
                                                    <h6 class=\"text-black bold\">
                                                        ";
            // line 288
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["plan"], "enddate", [], "any", false, false, false, 288), "D, M d, Y g:i A"), "html", null, true);
            echo "
                                                    </h6>
                                                    <span class=\"nk-iv-scheme-value date\">End Date</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <h6 class=\"text-black\">
                                                                                                <span class=\"badge bg-success\">Active</span>
                                                                                        </h6>
                                            <span class=\"nk-iv-scheme-value amount\">Status</span>
                                        </div>

                                        <a href=";
            // line 301
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("plan", ["plan" => twig_get_attribute($this->env, $this->source, $context["plan"], "id", [], "any", false, false, false, 301)]), "html", null, true);
            echo ">
                                            <i class=\"bi bi-arrow-right fs-2\"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['plan'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 309
        echo "                        
                                </div>
            </div>
            
            
        <div class=\"mt-4 row\">
            <div class=\"col-12\">
                <div class=\"d-flex justify-content-between\">
                    <h6 class=\"text-primary h5\">
                        Recent transactions
                    </h6>
                    <div class=\"\">
                        <a href=";
        // line 321
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("transaction");
        echo " class=\"btn btn-primary btn-sm\">
                            View all transactions
                        </a>
                    </div>
                </div>
            </div>
            <div class=\"col-12\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <div class=\"table-responsive\">
                            <table class=\"table\">
                                <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Type</th>
                                        <th>Amount</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    ";
        // line 340
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["txs"]) || array_key_exists("txs", $context) ? $context["txs"] : (function () { throw new RuntimeError('Variable "txs" does not exist.', 340, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["tx"]) {
            // line 341
            echo "                                        <tr>
                                            <td>
                                                ";
            // line 343
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tx"], "date", [], "any", false, false, false, 343), "D, M d, Y g:i A"), "html", null, true);
            echo "
                                            </td>
                                            <td>
                                                ";
            // line 346
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tx"], "description", [], "any", false, false, false, 346), "html", null, true);
            echo "
                                            </td>
                                            <td>
                                                <span class=\"badge bg-primary\">
                                                    \$";
            // line 350
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tx"], "amount", [], "any", false, false, false, 350), 2, ".", ""), "html", null, true);
            echo " 
                                                </span>
                                            </td>
                                        </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tx'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 355
        echo "                                 </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-12 d-flex\">
                <!-- Card -->
                <div class=\"card border-0 flex-fill w-100\">
                    <div class=\"card-header border-0 card-header-space-between\">
                        <!-- Title -->
                        <h2 class=\"card-header-title h4 text-uppercase\">
                            Real time market data
                        </h2>
                    </div>
                    <div class=\"card-body d-flex flex-column\">
                        <!-- TradingView Widget BEGIN -->
                        <div class=\"tradingview-widget-container\">
                            <div class=\"tradingview-widget-container__widget\"></div>
                            <div class=\"tradingview-widget-copyright\"><a href=\"https://www.tradingview.com/\"
                                    rel=\"noopener nofollow\" target=\"_blank\"><span class=\"blue-text\">Track all markets on
                                        TradingView</span></a></div>
                            <script type=\"text/javascript\" src=\"https://s3.tradingview.com/external-embedding/embed-widget-forex-cross-rates.js\"
                                async>
                                {
                                    \"width\": \"100%\",
                                    \"height\": \"550\",
                                    \"currencies\": [
                                        \"EUR\",
                                        \"USD\",
                                        \"JPY\",
                                        \"GBP\",
                                        \"CHF\",
                                        \"AUD\",
                                        \"CAD\",
                                        \"NZD\",
                                        \"CNY\",
                                        \"TRY\",
                                        \"SEK\",
                                        \"NOK\"
                                    ],
                                    \"isTransparent\": true,
                                    \"colorTheme\": \"light\",
                                    \"locale\": \"en\"
                                }
                            </script>
                        </div>
                        <!-- TradingView Widget END -->
                    </div>
                </div>
            </div>
        </div>
        
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
        return "dashboard/index.html.twig";
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
        return array (  461 => 355,  450 => 350,  443 => 346,  437 => 343,  433 => 341,  429 => 340,  407 => 321,  393 => 309,  379 => 301,  363 => 288,  351 => 279,  341 => 272,  336 => 270,  329 => 265,  325 => 264,  317 => 259,  299 => 243,  293 => 235,  261 => 206,  255 => 203,  223 => 174,  217 => 171,  201 => 157,  188 => 114,  182 => 106,  156 => 82,  150 => 74,  120 => 47,  112 => 42,  106 => 39,  73 => 9,  68 => 6,  58 => 5,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}



{% block main %}
        <div class=\"container-fluid mb-5\">
                    <!-- Title -->
        <h1 class=\"h2\">
            Welcome, {{app.user.name}}!
        </h1>
        <div>
        </div>
        <div>
        </div>
                    <div class=\"row\">
                <div class=\"col-12\">
                    <div class=\"py-4 alert alert-info alert-dismissible fade show\" role=\"alert\">
                        Welcome to Evolved Blockchain Solutionsr version 5 with a lot of Security Features,
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                    </div>
                </div>
            </div>
            <div class=\"row\">
            <div class=\"col-lg-3\">
                <!-- Card -->
                <div class=\"card border-0\">
                    <div class=\"card-body\">
                        <div class=\"row\">
                            <div class=\"col d-flex justify-content-between\">
                                <div>
                                    <!-- Title -->
                                    <h5 class=\"d-flex align-items-center text-uppercase text-muted fw-semibold mb-2\">
                                        <span class=\"legend-circle-sm bg-primary\"></span>
                                        Account Balance
                                    </h5>

                                    <!-- Subtitle -->
                                    <h2 class=\"mb-0\">
                                        \${{ app.user.balance | number_format(2, '.', ',') }}
                                    </h2>

                                    <a href={{ path('deposit') }} class=\"fs-6 btn-link mb-0 mt-2 mr-3\">
                                        Deposit
                                    </a>
                                    <span class=\"\">-</span>
                                                                        <!-- Comment -->
                                        <a href={{ path('withdrawal') }} class=\"fs-6 btn-link mb-0 mt-2 ml-3\">
                                            Transfer
                                        </a>
                                                                </div>

                                <span class=\"text-primary\">
                                    <i class=\"bi bi-wallet-fill fs-1\"></i>
                                </span>
                            </div>
                        </div> <!-- / .row -->
                    </div>
                </div>
            </div>
                        <div class=\"col-lg-3\">
                    <!-- Card -->
                    <div class=\"card border-0\">
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <div class=\"col d-flex justify-content-between\">
                                    <div>
                                        <!-- Title -->
                                        <h5 class=\"d-flex align-items-center text-uppercase text-muted fw-semibold mb-2\">
                                            <span class=\"legend-circle-sm bg-success\"></span>
                                            Total Profit
                                        </h5>
                                        <!-- Subtitle -->
                                        <h2 class=\"mb-0\">
                                            \${{ app.user.profit | number_format(2, '.', ',') }}
                                        </h2>
                                        <!-- Comment -->
                                        {# <a href=\"https://mam.getonlinetrader.pro/protodash/dashboard/profit-history\">
                                            <p class=\"fs-6 btn-link mb-0 mt-2\">
                                                View profit history
                                            </p>
                                        </a> #}
                                    </div>

                                    <span class=\"text-success\">
                                        <i class=\"bi bi-coin fs-1\"></i>
                                    </span>
                                </div>
                            </div> <!-- / .row -->
                        </div>
                    </div>
                </div>
                    <div class=\"col-lg-3\">
                <!-- Card -->
                <div class=\"card border-0\">
                    <div class=\"card-body\">
                        <div class=\"row\">
                            <div class=\"col d-flex justify-content-between\">
                                <div>
                                    <!-- Title -->
                                    <h5 class=\"d-flex align-items-center text-uppercase text-muted fw-semibold mb-2\">
                                        <span class=\"legend-circle-sm bg-info\"></span>
                                        Total Bonus
                                    </h5>
                                    <!-- Subtitle -->
                                    <h2 class=\"mb-0\">
                                        \${{ app.user.bonus | number_format(2, '.', ',') }}
                                    </h2>
                                    <!-- Comment -->
                                    {# <a href=\"https://mam.getonlinetrader.pro/protodash/dashboard/other-history\">
                                        <p class=\"fs-6 btn-link mb-0 mt-2\">
                                            View bonus history
                                        </p>
                                    </a> #}
                                </div>

                                <span class=\"text-info\">
                                    <i class=\"bi bi-gift-fill fs-1\"></i>
                                </span>
                            </div>
                        </div> <!-- / .row -->
                    </div>
                </div>
            </div>

            {# <div class=\"col-lg-3\">
                <!-- Card -->
                <div class=\"card border-0\">
                    <div class=\"card-body\">
                        <div class=\"row\">
                            <div class=\"col d-flex justify-content-between\">
                                <div>
                                    <!-- Title -->
                                    <h5 class=\"d-flex align-items-center text-uppercase text-muted fw-semibold mb-2\">
                                        <span class=\"legend-circle-sm bg-info\"></span>
                                        Referral Bonus
                                    </h5>
                                    <!-- Subtitle -->
                                    <h2 class=\"mb-0\">
                                        \$10.00
                                    </h2>
                                    <!-- Comment -->
                                    <a href=\"https://mam.getonlinetrader.pro/protodash/dashboard/referuser\">
                                        <p class=\"fs-6 btn-link mb-0 mt-2\">
                                            View referrals
                                        </p>
                                    </a>
                                </div>

                                <span class=\"text-info\">
                                    <i class=\"bi bi-piggy-bank fs-1\"></i>
                                </span>
                            </div>
                        </div> <!-- / .row -->
                    </div>
                </div>
            </div> #}
            <div class=\"col-lg-3\">
                <!-- Card -->
                <div class=\"card border-0\">
                    <div class=\"card-body\">
                        <div class=\"row\">
                            <div class=\"col d-flex justify-content-between\">
                                <div>
                                    <!-- Title -->
                                    <h5 class=\"d-flex align-items-center text-uppercase text-muted fw-semibold mb-2\">
                                        <span class=\"legend-circle-sm bg-success\"></span>
                                        Total Deposited
                                    </h5>
                                    <!-- Subtitle -->
                                    <h2 class=\"mb-0\">
                                        \${{ app.user.totaldeposit | number_format(2, '.', ',') }}
                                    </h2>
                                    <!-- Comment -->
                                    <a href={{ path('transaction') }}>
                                        <p class=\"fs-6 btn-link mb-0 mt-2\">
                                            View deposits
                                        </p>
                                    </a>
                                </div>

                                <span class=\"text-success\">
                                    <i class=\"bi bi-box-arrow-in-down fs-1\"></i>
                                </span>
                            </div>
                        </div> <!-- / .row -->
                    </div>
                </div>
            </div>
            <div class=\"col-lg-3\">
                <!-- Card -->
                <div class=\"card border-0\">
                    <div class=\"card-body\">
                        <div class=\"row\">
                            <div class=\"col d-flex justify-content-between\">
                                <div>
                                    <!-- Title -->
                                    <h5 class=\"d-flex align-items-center text-uppercase text-muted fw-semibold mb-2\">
                                        <span class=\"legend-circle-sm bg-danger\"></span>
                                        Total Withdrawal
                                    </h5>
                                    <!-- Subtitle -->
                                    <h2 class=\"mb-0\">
                                        \${{ app.user.totalwithdrawal | number_format(2, '.', ',') }}
                                    </h2>
                                    <!-- Comment -->
                                    <a href={{ path('transaction') }}>
                                        <p class=\"fs-6 btn-link mb-0 mt-2\">
                                            View withdrawals
                                        </p>
                                    </a>
                                </div>

                                <span class=\"text-danger\">
                                    <i class=\"bi bi-box-arrow-in-up fs-1\"></i>
                                </span>
                            </div>
                        </div> <!-- / .row -->
                    </div>
                </div>
            </div>
            <div class=\"col-lg-3\">
                <div class=\"card border-0\">
                    <!-- Card body -->
                    <div class=\"card-body\">
                        <div class=\"row\">
                            <div class=\"col d-flex justify-content-between\">
                                <div>
                                    <!-- Title -->
                                    <h5 class=\"d-flex align-items-center text-uppercase text-muted fw-semibold mb-2\">
                                        <span class=\"legend-circle-sm bg-secondary\"></span>
                                        Referrals
                                    </h5>
                                    <!-- Subtitle -->
                                    <h2 class=\"mb-0\">
                                        {{ app.user.referrals|length }}
                                    </h2>
                                    <!-- Comment -->
                                    {# <a href=\"https://mam.getonlinetrader.pro/protodash/dashboard/referuser\">
                                        <p class=\"fs-6 btn-link mb-0 mt-2\">
                                            View referrals
                                        </p>
                                    </a> #}
                                </div>
                                <span class=\"text-secondary\">
                                    <i class=\"bi bi-link fs-1\"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                       
                </div>
                
            <div class=\"mt-4 row\">
                <div class=\"col-12\">
                    <div>
                        <h5 class=\"text-primary h5\">Active Plan(s)
                            <span class=\"text-base count\">({{activeplans|length}})</span>
                        </h5>
                    </div>
                </div>
                <div class=\"col-12\">
                      {% for plan in activeplans %}
                          <div class=\"row\">
                            <div class=\"col-md-12\">
                                <div class=\"py-4 card\">
                                    <div class=\"card-body d-flex justify-content-between align-items-center\">
                                        <div>
                                            <h6 class=\"h5\">{{plan.name}}</h6>
                                            <p class=\"h3\">
                                                \${{plan.amount}}
                                            </p>
                                        </div>
                                        <div class=\"d-none d-md-block\">
                                            <div class=\"d-flex justify-content-around\">
                                                <div class=\"mr-3\">
                                                    <h6 class=\"text-black bold\">
                                                        {{ plan.startdate | date('D, M d, Y g:i A') }}
                                                    </h6>
                                                    <span class=\"nk-iv-scheme-value date\">Start Date</span>
                                                </div>
                                                <span class=\"m-3\">

                                                </span>
                                                <div class=\"ml-3\">
                                                    <h6 class=\"text-black bold\">
                                                        {{ plan.enddate | date('D, M d, Y g:i A') }}
                                                    </h6>
                                                    <span class=\"nk-iv-scheme-value date\">End Date</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <h6 class=\"text-black\">
                                                                                                <span class=\"badge bg-success\">Active</span>
                                                                                        </h6>
                                            <span class=\"nk-iv-scheme-value amount\">Status</span>
                                        </div>

                                        <a href={{ path('plan', {'plan':plan.id}) }}>
                                            <i class=\"bi bi-arrow-right fs-2\"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                      {% endfor %}
                        
                                </div>
            </div>
            
            
        <div class=\"mt-4 row\">
            <div class=\"col-12\">
                <div class=\"d-flex justify-content-between\">
                    <h6 class=\"text-primary h5\">
                        Recent transactions
                    </h6>
                    <div class=\"\">
                        <a href={{ path('transaction') }} class=\"btn btn-primary btn-sm\">
                            View all transactions
                        </a>
                    </div>
                </div>
            </div>
            <div class=\"col-12\">
                <div class=\"card\">
                    <div class=\"card-body\">
                        <div class=\"table-responsive\">
                            <table class=\"table\">
                                <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Type</th>
                                        <th>Amount</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {% for tx in txs %}
                                        <tr>
                                            <td>
                                                {{ tx.date | date('D, M d, Y g:i A') }}
                                            </td>
                                            <td>
                                                {{tx.description}}
                                            </td>
                                            <td>
                                                <span class=\"badge bg-primary\">
                                                    \${{tx.amount|number_format(2, '.', '')}} 
                                                </span>
                                            </td>
                                        </tr>
                                    {% endfor %}
                                 </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-12 d-flex\">
                <!-- Card -->
                <div class=\"card border-0 flex-fill w-100\">
                    <div class=\"card-header border-0 card-header-space-between\">
                        <!-- Title -->
                        <h2 class=\"card-header-title h4 text-uppercase\">
                            Real time market data
                        </h2>
                    </div>
                    <div class=\"card-body d-flex flex-column\">
                        <!-- TradingView Widget BEGIN -->
                        <div class=\"tradingview-widget-container\">
                            <div class=\"tradingview-widget-container__widget\"></div>
                            <div class=\"tradingview-widget-copyright\"><a href=\"https://www.tradingview.com/\"
                                    rel=\"noopener nofollow\" target=\"_blank\"><span class=\"blue-text\">Track all markets on
                                        TradingView</span></a></div>
                            <script type=\"text/javascript\" src=\"https://s3.tradingview.com/external-embedding/embed-widget-forex-cross-rates.js\"
                                async>
                                {
                                    \"width\": \"100%\",
                                    \"height\": \"550\",
                                    \"currencies\": [
                                        \"EUR\",
                                        \"USD\",
                                        \"JPY\",
                                        \"GBP\",
                                        \"CHF\",
                                        \"AUD\",
                                        \"CAD\",
                                        \"NZD\",
                                        \"CNY\",
                                        \"TRY\",
                                        \"SEK\",
                                        \"NOK\"
                                    ],
                                    \"isTransparent\": true,
                                    \"colorTheme\": \"light\",
                                    \"locale\": \"en\"
                                }
                            </script>
                        </div>
                        <!-- TradingView Widget END -->
                    </div>
                </div>
            </div>
        </div>
        
            </div>
{% endblock %}
", "dashboard/index.html.twig", "C:\\xampp\\htdocs\\express\\templates\\dashboard\\index.html.twig");
    }
}
