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

/* nav.html.twig */
class __TwigTemplate_90eafcda083a719b0f25b8c1714bd472 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "nav.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "nav.html.twig"));

        // line 1
        echo "                        <ul class=\"navbar-nav mb-lg-7\">
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" id='dashboard' href=";
        // line 3
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard");
        echo ">
                                    <i class=\"bi bi-house nav-link-icon fs-3\"></i>
                                    <span>Dashboard</span>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" id='deposit' href=";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deposit");
        echo ">
                                    <i class=\"bi bi-wallet-fill nav-link-icon fs-3\"></i>
                                    <span>Deposit</span>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" id='withdrawal' href=";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("withdrawal");
        echo ">
                                    <i class=\"bi bi-graph-down nav-link-icon fs-3\"></i>
                                    <span>Withdraw</span>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" id='transaction' href=";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("transaction");
        echo ">
                                    <i class=\"bi bi-clock-history nav-link-icon fs-3\"></i>
                                    <span>Transaction History</span>
                                </a>
                            </li>
                            <li class=\"nav-item dropdown\">
                                <a class=\"nav-link\" id=\"invest\" href=\"#pagesCollapse\" data-bs-toggle=\"collapse\"
                                    role=\"button\" aria-expanded=\"false\" aria-controls=\"pagesCollapse\">
                                    <i class=\"bi bi-bounding-box nav-link-icon fs-3\"></i>
                                    <span>Investment</span>
                                </a>
                                    <div class=\"collapse\" id=\"pagesCollapse\">
                                        <ul class=\"nav flex-column\">
                                            <li class=\"nav-item\">
                                                <a href=";
        // line 35
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("invest");
        echo "  class=\"nav-link\">
                                                    <span>Invest</span>
                                                </a>
                                            </li>
                                            <li class=\"nav-item\">
                                                <a href=";
        // line 40
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("plans");
        echo " class=\"nav-link\">
                                                    <span>My investments</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                               
                      

                            <li class=\"nav-item w-100\">
                                <hr>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"mailto:\" class=\"nav-link\" class=\"nav-link\">
                                    <i class=\"bi bi-info-circle-fill nav-link-icon fs-3\"></i>
                                    <span>Help & Support</span>
                                </a>
                            </li>
                        </ul>

                        <script>
                            let path =  \"";
        // line 61
        echo twig_escape_filter($this->env, (isset($context["path"]) || array_key_exists("path", $context) ? $context["path"] : (function () { throw new RuntimeError('Variable "path" does not exist.', 61, $this->source); })()), "html", null, true);
        echo "\"
                           
                            document.getElementById(path).classList.add('active')
                        </script>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "nav.html.twig";
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
        return array (  123 => 61,  99 => 40,  91 => 35,  74 => 21,  65 => 15,  56 => 9,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("                        <ul class=\"navbar-nav mb-lg-7\">
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" id='dashboard' href={{ path('dashboard') }}>
                                    <i class=\"bi bi-house nav-link-icon fs-3\"></i>
                                    <span>Dashboard</span>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" id='deposit' href={{ path('deposit') }}>
                                    <i class=\"bi bi-wallet-fill nav-link-icon fs-3\"></i>
                                    <span>Deposit</span>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" id='withdrawal' href={{ path('withdrawal') }}>
                                    <i class=\"bi bi-graph-down nav-link-icon fs-3\"></i>
                                    <span>Withdraw</span>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" id='transaction' href={{ path('transaction') }}>
                                    <i class=\"bi bi-clock-history nav-link-icon fs-3\"></i>
                                    <span>Transaction History</span>
                                </a>
                            </li>
                            <li class=\"nav-item dropdown\">
                                <a class=\"nav-link\" id=\"invest\" href=\"#pagesCollapse\" data-bs-toggle=\"collapse\"
                                    role=\"button\" aria-expanded=\"false\" aria-controls=\"pagesCollapse\">
                                    <i class=\"bi bi-bounding-box nav-link-icon fs-3\"></i>
                                    <span>Investment</span>
                                </a>
                                    <div class=\"collapse\" id=\"pagesCollapse\">
                                        <ul class=\"nav flex-column\">
                                            <li class=\"nav-item\">
                                                <a href={{ path('invest') }}  class=\"nav-link\">
                                                    <span>Invest</span>
                                                </a>
                                            </li>
                                            <li class=\"nav-item\">
                                                <a href={{ path('plans') }} class=\"nav-link\">
                                                    <span>My investments</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                               
                      

                            <li class=\"nav-item w-100\">
                                <hr>
                            </li>
                            <li class=\"nav-item\">
                                <a href=\"mailto:\" class=\"nav-link\" class=\"nav-link\">
                                    <i class=\"bi bi-info-circle-fill nav-link-icon fs-3\"></i>
                                    <span>Help & Support</span>
                                </a>
                            </li>
                        </ul>

                        <script>
                            let path =  \"{{ path }}\"
                           
                            document.getElementById(path).classList.add('active')
                        </script>
", "nav.html.twig", "C:\\xampp\\htdocs\\express\\templates\\nav.html.twig");
    }
}
