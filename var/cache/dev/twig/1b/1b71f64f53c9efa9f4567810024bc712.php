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

/* base.html.twig */
class __TwigTemplate_c4891ffb720806720f8cb4d2b17baf26 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
            'main' => [$this, 'block_main'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
";
        // line 3
        $this->displayBlock('head', $context, $blocks);
        // line 153
        echo "    
";
        // line 154
        $this->displayBlock('body', $context, $blocks);
        // line 527
        $this->displayBlock('main', $context, $blocks);
        // line 530
        echo "
";
        // line 531
        $this->displayBlock('footer', $context, $blocks);
        // line 559
        echo "
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        echo " 
    <!DOCTYPE html>
    <html lang=\"en\" data-theme=\"light\" data-sidebar-behaviour=\"fixed\" data-navigation-color=\"inverted\" data-is-fluid=\"true\">

    <meta http-equiv=\"content-type\" content=\"text/html;charset=UTF-8\" />

    <head>
        <script type=\"text/javascript\" src=\"https://js.stripe.com/v3/\"></script>
        <meta charset=\"utf-8\">
        <meta name=\"csrf-token\" content=\"7eTeGODrZvtlzeGeKTcUZjDXp2NYTBjI0tOkAKeh\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <meta content=\"Webinning\" name=\"author\">
        <!-- Theme CSS -->
        <link rel=\"stylesheet\" href=\"https://mam.getonlinetrader.pro/protodash/themes/dashly/assets/css/theme.bundle.css\" id=\"stylesheetLTR\">
        <link rel=\"stylesheet\" href=\"https://mam.getonlinetrader.pro/protodash/themes/dashly/assets/css/theme.rtl.bundle.css\" id=\"stylesheetRTL\">
        <link rel=\"preconnect\" href=\"https://fonts.gstatic.com/\" crossorigin>
        <link rel=\"preload\" as=\"style\"
            href=\"https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&amp;display=swap\">
        <link rel=\"stylesheet\" media=\"print\" onload=\"this.onload=null;this.removeAttribute('media');\"
            href=\"https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&amp;display=swap\">
        <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css\">
        <!-- no-JS fallback -->
        <noscript>
            <link rel=\"stylesheet\"
                href=\"https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&amp;display=swap\">
        </noscript>

        <script>
            // Add your client ID and secret
            var PAYPAL_CLIENT = 'iidjdjdj';
            var PAYPAL_SECRET = 'jijdjkdkdk';
            // Point your server to the PayPal API
            var PAYPAL_ORDER_API = 'https://api.paypal.com/v2/checkout/orders/';
        </script>
        <script src=\"https://www.paypal.com/sdk/js?client-id=iidjdjdj\"></script>
        <script src=\"https://cdn.jsdelivr.net/npm/sweetalert2@11.7.10/dist/sweetalert2.all.min.js\"></script>
        <link href=\"https://cdn.jsdelivr.net/npm/sweetalert2@11.7.10/dist/sweetalert2.min.css\" rel=\"stylesheet\">
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css\">
        <script>
            // Theme switcher
            let themeSwitcher = document.getElementById('themeSwitcher');

            const getPreferredTheme = () => {
                if (localStorage.getItem('theme') != null) {
                    return localStorage.getItem('theme');
                }

                return document.documentElement.dataset.theme;
            };

            const setTheme = function(theme) {
                if (theme === 'auto' && window.matchMedia('(prefers-color-scheme: dark)').matches) {
                    document.documentElement.dataset.theme = window.matchMedia('(prefers-color-scheme: dark)').matches ?
                        'dark' : 'light';
                } else {
                    document.documentElement.dataset.theme = theme;
                }

                localStorage.setItem('theme', theme);
            };

            const showActiveTheme = theme => {
                const activeBtn = document.querySelector(`[data-theme-value=\"\${theme}\"]`);

                document.querySelectorAll('[data-theme-value]').forEach(element => {
                    element.classList.remove('active');
                });

                activeBtn && activeBtn.classList.add('active');

                // Set button if demo mode is enabled
                document.querySelectorAll('[data-theme-control=\"theme\"]').forEach(element => {
                    if (element.value == theme) {
                        element.checked = true;
                    }
                });
            };

            function reloadPage() {
                window.location = window.location.pathname;
            }


            setTheme(getPreferredTheme());

            if (typeof themeSwitcher != 'undefined') {
                window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', e => {
                    if (localStorage.getItem('theme') != null) {
                        if (localStorage.getItem('theme') == 'auto') {
                            reloadPage();
                        }
                    }
                });

                window.addEventListener('load', () => {
                    showActiveTheme(getPreferredTheme());

                    document.querySelectorAll('[data-theme-value]').forEach(element => {
                        element.addEventListener('click', () => {
                            const theme = element.getAttribute('data-theme-value');

                            localStorage.setItem('theme', theme);
                            reloadPage();
                        })
                    })
                });
            }
        </script>
        <!-- Favicon -->
        <link rel=\"icon\" href=\"https://mam.getonlinetrader.pro/protodash/storage/app/public/photos/i6KEyIIzscFVLkNd20fCnXsUesrnIemV3XQN3dt8.png\" sizes=\"any\">

        <!-- Demo script -->
        <script>
            var themeConfig = {
                theme: JSON.parse('\"light\"'),
                isRTL: JSON.parse('false'),
                isFluid: JSON.parse('true'),
                sidebarBehaviour: JSON.parse('\"fixed\"'),
                navigationColor: JSON.parse('\"inverted\"')
            };

            var isRTL = localStorage.getItem('isRTL') === 'true',
                isFluid = localStorage.getItem('isFluid') === 'true',
                theme = localStorage.getItem('theme'),
                sidebarSizing = localStorage.getItem('sidebarSizing'),
                linkLTR = document.getElementById('stylesheetLTR'),
                linkRTL = document.getElementById('stylesheetRTL'),
                html = document.documentElement;

            if (isRTL) {
                linkLTR.setAttribute('disabled', '');
                linkRTL.removeAttribute('disabled');
                html.setAttribute('dir', 'rtl');
            } else {
                linkRTL.setAttribute('disabled', '');
                linkLTR.removeAttribute('disabled');
                html.removeAttribute('dir');
            }
        </script>

        <!-- Page Title -->
        <title>";
        // line 144
        $this->displayBlock('title', $context, $blocks);
        // line 146
        echo "| ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 146, $this->source); })()), "user", [], "any", false, false, false, 146), "name", [], "any", false, false, false, 146), "html", null, true);
        echo "</title>
            <script src=\"https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.1/dist/alpine.min.js\" defer></script>
        <style >[wire\\:loading], [wire\\:loading\\.delay], [wire\\:loading\\.inline-block], [wire\\:loading\\.inline], [wire\\:loading\\.block], [wire\\:loading\\.flex], [wire\\:loading\\.table], [wire\\:loading\\.grid], [wire\\:loading\\.inline-flex] {display: none;}[wire\\:loading\\.delay\\.shortest], [wire\\:loading\\.delay\\.shorter], [wire\\:loading\\.delay\\.short], [wire\\:loading\\.delay\\.long], [wire\\:loading\\.delay\\.longer], [wire\\:loading\\.delay\\.longest] {display:none;}[wire\\:offline] {display: none;}[wire\\:dirty]:not(textarea):not(input):not(select) {display: none;}input:-webkit-autofill, select:-webkit-autofill, textarea:-webkit-autofill {animation-duration: 50000s;animation-name: livewireautofill;}@keyframes livewireautofill { from {} }</style>
    </head>

    
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 144
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 145
        echo "            Dashboard
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 154
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 155
        echo "                    
        <body>
            
            <script>
                
            </script>
            <!-- THEME CONFIGURATION -->
            <script>
                let themeAttrs = document.documentElement.dataset;

                for (let attr in themeAttrs) {
                    if (localStorage.getItem(attr) != null) {
                        document.documentElement.dataset[attr] = localStorage.getItem(attr);

                        if (theme === 'auto') {
                            document.documentElement.dataset.theme = window.matchMedia('(prefers-color-scheme: dark)').matches ?
                                'dark' : 'light';

                            window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', e => {
                                e.matches ? document.documentElement.dataset.theme = 'dark' : document.documentElement
                                    .dataset.theme = 'light';
                            });
                        }
                    }
                }
            </script>
            <!-- NAVIGATION -->
            <nav id=\"mainNavbar\" class=\"navbar navbar-vertical navbar-expand-lg scrollbar bg-dark navbar-dark\">
                <!-- Theme configuration (navbar) -->
                <script>
                    let navigationColor = localStorage.getItem('navigationColor'),
                        navbar = document.getElementById('mainNavbar');

                    if (navigationColor != null && navbar != null) {
                        if (navigationColor == 'inverted') {
                            navbar.classList.add('bg-dark', 'navbar-dark');
                            navbar.classList.remove('bg-white', 'navbar-light');
                        } else {
                            navbar.classList.add('bg-white', 'navbar-light');
                            navbar.classList.remove('bg-dark', 'navbar-dark');
                        }
                    }
                </script>
                <div class=\"container-fluid\">
                    <!-- Brand -->
                    <a class=\"navbar-brand\" href=";
        // line 200
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard");
        echo ">
                        <img src=";
        // line 201
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("wp-content/uploads/2021/06/Text-Monochrome-on-dark-blue.png"), "html", null, true);
        echo "
                            class=\"navbar-brand-img logo-light logo-small\" alt=\"Evolved Blockchain Solutions\" width=\"25\"
                            height=\"50\">
                        <img src=";
        // line 204
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("wp-content/uploads/2021/06/Text-Monochrome-on-dark-blue.png"), "html", null, true);
        echo "
                            class=\"navbar-brand-img logo-light logo-large\" alt=\"Evolved Blockchain Solutions\" width=\"125\"
                            height=\"50\">

                        <img src=";
        // line 208
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("wp-content/uploads/2021/06/Text-Monochrome-on-dark-blue.png"), "html", null, true);
        echo "
                            class=\"navbar-brand-img logo-dark logo-small\" alt=\"Evolved Blockchain Solutions\" width=\"25\"
                            height=\"50\">
                        <img src=";
        // line 211
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("wp-content/uploads/2021/06/Text-Monochrome-on-dark-blue.png"), "html", null, true);
        echo "
                            class=\"navbar-brand-img logo-dark logo-large\" alt=\"Evolved Blockchain Solutions\" width=\"125\"
                            height=\"50\">
                    </a>

                    <!-- Navbar toggler -->
                    <a href=\"javascript: void(0);\" class=\"navbar-toggler\" data-bs-toggle=\"collapse\"
                        data-bs-target=\"#sidenavCollapse\" aria-controls=\"sidenavCollapse\" aria-expanded=\"false\"
                        aria-label=\"Toggle navigation\">
                        <span class=\"navbar-toggler-icon\"></span>
                    </a>
                    <!-- Collapse -->
                    <div class=\"collapse navbar-collapse\" id=\"sidenavCollapse\">
                        <!-- Navigation -->
                                ";
        // line 225
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("App\\Controller\\DashboardController::nav", ["path" => (isset($context["path"]) || array_key_exists("path", $context) ? $context["path"] : (function () { throw new RuntimeError('Variable "path" does not exist.', 225, $this->source); })())]));
        echo "

                        <!-- End of Navigation -->
                                    </div>
                    <!-- End of Collapse -->
                </div>
            </nav>
            <!-- MAIN CONTENT -->
            <main>
                <!-- HEADER -->
                <header class=\"container-fluid d-flex py-6 mb-4\">
                    <!-- Top buttons -->
                    <div class=\"d-flex align-items-center ms-auto me-n1 me-lg-n2\">

                        <!-- Dropdown -->
                        <div class=\"dropdown\" id=\"themeSwitcher\">
                            <a href=\"javascript: void(0);\"
                                class=\"dropdown-toggle no-arrow d-flex align-items-center justify-content-center bg-white rounded-circle shadow-sm mx-1 mx-lg-2 w-40px h-40px link-secondary\"
                                role=\"button\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"
                                data-bs-offset=\"0,0\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" height=\"18\" width=\"18\">
                                    <g>
                                        <path
                                            d=\"M12,4.64A7.36,7.36,0,1,0,19.36,12,7.37,7.37,0,0,0,12,4.64Zm0,12.72A5.36,5.36,0,1,1,17.36,12,5.37,5.37,0,0,1,12,17.36Z\"
                                            style=\"fill: currentColor\" />
                                        <path d=\"M12,3.47a1,1,0,0,0,1-1V1a1,1,0,0,0-2,0V2.47A1,1,0,0,0,12,3.47Z\"
                                            style=\"fill: currentColor\" />
                                        <path
                                            d=\"M4.55,6a1,1,0,0,0,.71.29A1,1,0,0,0,6,6,1,1,0,0,0,6,4.55l-1-1A1,1,0,0,0,3.51,4.93Z\"
                                            style=\"fill: currentColor\" />
                                        <path d=\"M2.47,11H1a1,1,0,0,0,0,2H2.47a1,1,0,1,0,0-2Z\" style=\"fill: currentColor\" />
                                        <path
                                            d=\"M4.55,18l-1,1a1,1,0,0,0,0,1.42,1,1,0,0,0,.71.29,1,1,0,0,0,.71-.29l1-1A1,1,0,0,0,4.55,18Z\"
                                            style=\"fill: currentColor\" />
                                        <path d=\"M12,20.53a1,1,0,0,0-1,1V23a1,1,0,0,0,2,0V21.53A1,1,0,0,0,12,20.53Z\"
                                            style=\"fill: currentColor\" />
                                        <path
                                            d=\"M19.45,18A1,1,0,0,0,18,19.45l1,1a1,1,0,0,0,.71.29,1,1,0,0,0,.71-.29,1,1,0,0,0,0-1.42Z\"
                                            style=\"fill: currentColor\" />
                                        <path d=\"M23,11H21.53a1,1,0,0,0,0,2H23a1,1,0,0,0,0-2Z\" style=\"fill: currentColor\" />
                                        <path
                                            d=\"M18.74,6.26A1,1,0,0,0,19.45,6l1-1a1,1,0,1,0-1.42-1.42l-1,1A1,1,0,0,0,18,6,1,1,0,0,0,18.74,6.26Z\"
                                            style=\"fill: currentColor\" />
                                    </g>
                                </svg>
                            </a>

                            <ul class=\"dropdown-menu dropdown-menu-end\">
                                <li>
                                    <button type=\"button\" class=\"dropdown-item active\" data-theme-value=\"light\">
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" class=\"me-2\"
                                            height=\"18\" width=\"18\">
                                            <g>
                                                <path
                                                    d=\"M12,4.64A7.36,7.36,0,1,0,19.36,12,7.37,7.37,0,0,0,12,4.64Zm0,12.72A5.36,5.36,0,1,1,17.36,12,5.37,5.37,0,0,1,12,17.36Z\"
                                                    style=\"fill: currentColor\" />
                                                <path d=\"M12,3.47a1,1,0,0,0,1-1V1a1,1,0,0,0-2,0V2.47A1,1,0,0,0,12,3.47Z\"
                                                    style=\"fill: currentColor\" />
                                                <path
                                                    d=\"M4.55,6a1,1,0,0,0,.71.29A1,1,0,0,0,6,6,1,1,0,0,0,6,4.55l-1-1A1,1,0,0,0,3.51,4.93Z\"
                                                    style=\"fill: currentColor\" />
                                                <path d=\"M2.47,11H1a1,1,0,0,0,0,2H2.47a1,1,0,1,0,0-2Z\"
                                                    style=\"fill: currentColor\" />
                                                <path
                                                    d=\"M4.55,18l-1,1a1,1,0,0,0,0,1.42,1,1,0,0,0,.71.29,1,1,0,0,0,.71-.29l1-1A1,1,0,0,0,4.55,18Z\"
                                                    style=\"fill: currentColor\" />
                                                <path d=\"M12,20.53a1,1,0,0,0-1,1V23a1,1,0,0,0,2,0V21.53A1,1,0,0,0,12,20.53Z\"
                                                    style=\"fill: currentColor\" />
                                                <path
                                                    d=\"M19.45,18A1,1,0,0,0,18,19.45l1,1a1,1,0,0,0,.71.29,1,1,0,0,0,.71-.29,1,1,0,0,0,0-1.42Z\"
                                                    style=\"fill: currentColor\" />
                                                <path d=\"M23,11H21.53a1,1,0,0,0,0,2H23a1,1,0,0,0,0-2Z\"
                                                    style=\"fill: currentColor\" />
                                                <path
                                                    d=\"M18.74,6.26A1,1,0,0,0,19.45,6l1-1a1,1,0,1,0-1.42-1.42l-1,1A1,1,0,0,0,18,6,1,1,0,0,0,18.74,6.26Z\"
                                                    style=\"fill: currentColor\" />
                                            </g>
                                        </svg>
                                        Light mode
                                    </button>
                                </li>
                                <li>
                                    <button type=\"button\" class=\"dropdown-item\" data-theme-value=\"dark\">
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" class=\"me-2\"
                                            height=\"18\" width=\"18\">
                                            <path
                                                d=\"M19.57,23.34a1,1,0,0,0,0-1.9,9.94,9.94,0,0,1,0-18.88,1,1,0,0,0,.68-.94,1,1,0,0,0-.68-.95A11.58,11.58,0,0,0,8.88,2.18,12.33,12.33,0,0,0,3.75,12a12.31,12.31,0,0,0,5.11,9.79A11.49,11.49,0,0,0,15.61,24,12.55,12.55,0,0,0,19.57,23.34ZM10,20.17A10.29,10.29,0,0,1,5.75,12a10.32,10.32,0,0,1,4.3-8.19A9.34,9.34,0,0,1,15.59,2a.17.17,0,0,1,.17.13.18.18,0,0,1-.07.2,11.94,11.94,0,0,0-.18,19.21.25.25,0,0,1-.16.45A9.5,9.5,0,0,1,10,20.17Z\"
                                                style=\"fill: currentColor\" />
                                        </svg>
                                        Dark mode
                                    </button>
                                </li>
                                <li>
                                    <button type=\"button\" class=\"dropdown-item\" data-theme-value=\"auto\">
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" class=\"me-2\"
                                            height=\"18\" width=\"18\">
                                            <path
                                                d=\"M24,12a1,1,0,0,0-1-1H19.09a.51.51,0,0,1-.49-.4,6.83,6.83,0,0,0-.94-2.28.5.5,0,0,1,.06-.63l2.77-2.76a1,1,0,1,0-1.42-1.42L16.31,6.28a.5.5,0,0,1-.63.06A6.83,6.83,0,0,0,13.4,5.4a.5.5,0,0,1-.4-.49V1a1,1,0,0,0-2,0V4.91a.51.51,0,0,1-.4.49,6.83,6.83,0,0,0-2.28.94.5.5,0,0,1-.63-.06L4.93,3.51A1,1,0,0,0,3.51,4.93L6.28,7.69a.5.5,0,0,1,.06.63A6.83,6.83,0,0,0,5.4,10.6a.5.5,0,0,1-.49.4H1a1,1,0,0,0,0,2H4.91a.51.51,0,0,1,.49.4,6.83,6.83,0,0,0,.94,2.28.5.5,0,0,1-.06.63L3.51,19.07a1,1,0,1,0,1.42,1.42l2.76-2.77a.5.5,0,0,1,.63-.06,6.83,6.83,0,0,0,2.28.94.5.5,0,0,1,.4.49V23a1,1,0,0,0,2,0V19.09a.51.51,0,0,1,.4-.49,6.83,6.83,0,0,0,2.28-.94.5.5,0,0,1,.63.06l2.76,2.77a1,1,0,1,0,1.42-1.42l-2.77-2.76a.5.5,0,0,1-.06-.63,6.83,6.83,0,0,0,.94-2.28.5.5,0,0,1,.49-.4H23A1,1,0,0,0,24,12Zm-8.74,2.5A5.76,5.76,0,0,1,9.5,8.74a5.66,5.66,0,0,1,.16-1.31A.49.49,0,0,1,10,7.07a5.36,5.36,0,0,1,1.8-.31,5.47,5.47,0,0,1,5.46,5.46,5.36,5.36,0,0,1-.31,1.8.49.49,0,0,1-.35.32A5.53,5.53,0,0,1,15.26,14.5Z\"
                                                style=\"fill: currentColor\" />
                                        </svg>
                                        Auto
                                    </button>
                                </li>
                            </ul>
                        </div>

                        <!-- Separator -->
                        <div class=\"vr bg-gray-700 mx-2 mx-lg-3\"></div>
                        <!-- Button -->
                        <a class=\"d-flex align-items-center justify-content-center bg-white rounded-circle shadow-sm mx-1 mx-lg-2 w-40px h-40px position-relative link-secondary\"
                            data-bs-toggle=\"offcanvas\" href=\"#offcanvasNotifications\" role=\"button\"
                            aria-controls=\"offcanvasNotifications\">
                            <svg viewBox=\"0 0 24 24\" height=\"18\" width=\"18\" xmlns=\"http://www.w3.org/2000/svg\">
                                <path d=\"M10,21.75a2.087,2.087,0,0,0,4.005,0\" fill=\"none\" stroke=\"currentColor\"
                                    stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"1.5\" />
                                <path d=\"M12 3L12 0.75\" fill=\"none\" stroke=\"currentColor\" stroke-linecap=\"round\"
                                    stroke-linejoin=\"round\" stroke-width=\"1.5\" />
                                <path
                                    d=\"M12,3a7.5,7.5,0,0,1,7.5,7.5c0,7.046,1.5,8.25,1.5,8.25H3s1.5-1.916,1.5-8.25A7.5,7.5,0,0,1,12,3Z\"
                                    fill=\"none\" stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\"
                                    stroke-width=\"1.5\" />
                            </svg>
                            <div wire:id=\"EbCEpC3pK5mjVso5TMf7\" wire:initial-data=\"{&quot;fingerprint&quot;:{&quot;id&quot;:&quot;EbCEpC3pK5mjVso5TMf7&quot;,&quot;name&quot;:&quot;user.notifications-count&quot;,&quot;locale&quot;:&quot;en&quot;,&quot;path&quot;:&quot;dashboard&quot;,&quot;method&quot;:&quot;GET&quot;,&quot;v&quot;:&quot;acj&quot;},&quot;effects&quot;:{&quot;listeners&quot;:[&quot;updateNotification&quot;]},&quot;serverMemo&quot;:{&quot;children&quot;:[],&quot;errors&quot;:[],&quot;htmlHash&quot;:&quot;df557af6&quot;,&quot;data&quot;:[],&quot;dataMeta&quot;:[],&quot;checksum&quot;:&quot;a871208b563891d2a780b0dff6d7eeca41b3c7f2495e88d08b213b7b46bc1a25&quot;}}\">
                    <span class=\"position-absolute top-0 start-100 translate-middle badge rounded-pill text-bg-danger\">
                    ";
        // line 349
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 349, $this->source); })()), "user", [], "any", false, false, false, 349), "notifications", [], "any", false, false, false, 349)), "html", null, true);
        echo " <span class=\"visually-hidden\">
                        messages</span>
                </span>
            </div>

        <!-- Livewire Component wire-end:EbCEpC3pK5mjVso5TMf7 -->                </a>

                        <!-- Notifications offcanvas -->
                        <div class=\"offcanvas offcanvas-end\" tabindex=\"-1\" id=\"offcanvasNotifications\"
                            aria-labelledby=\"offcanvasNotificationsLabel\">
                            <div class=\"offcanvas-header px-5\">
                                <h3 class=\"offcanvas-title\" id=\"offcanvasNotificationsLabel\">Notifications</h3>
                                <div class=\"d-flex align-items-start\">
                                    <!-- Button -->
                                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"offcanvas\"
                                        aria-label=\"Close\"></button>
                                </div>
                            </div>

                            <div class=\"offcanvas-body p-0\">
                                <div class=\"list-group list-group-flush\">
                                    <div wire:id=\"dnoDV1Mj9dv0aKIFkRbW\" wire:initial-data=\"{&quot;fingerprint&quot;:{&quot;id&quot;:&quot;dnoDV1Mj9dv0aKIFkRbW&quot;,&quot;name&quot;:&quot;user.notifications&quot;,&quot;locale&quot;:&quot;en&quot;,&quot;path&quot;:&quot;dashboard&quot;,&quot;method&quot;:&quot;GET&quot;,&quot;v&quot;:&quot;acj&quot;},&quot;effects&quot;:{&quot;listeners&quot;:[&quot;addNotification&quot;]},&quot;serverMemo&quot;:{&quot;children&quot;:[],&quot;errors&quot;:[],&quot;htmlHash&quot;:&quot;8b2eed7d&quot;,&quot;data&quot;:[],&quot;dataMeta&quot;:[],&quot;checksum&quot;:&quot;b5fd0caf40859258b34cd0b4985fce2143b4a6f5a9bfd7da7c70a3a051cbad20&quot;}}\">
                                ";
        // line 371
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 371, $this->source); })()), "user", [], "any", false, false, false, 371), "notifications", [], "any", false, false, false, 371)) < 1)) {
            // line 372
            echo "                                    <center><h3>no massage here yet</h3></center>  
                                    ";
        } else {
            // line 374
            echo "
                                    ";
            // line 375
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 375, $this->source); })()), "user", [], "any", false, false, false, 375), "notifications", [], "any", false, false, false, 375)));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 376
                echo "                                        <div class=\"list-group-item list-group-item-action \">
                                             <div class=\"d-flex flex-column flex-grow-1\">
                                                    <div class=\"d-flex w-100 justify-content-between\">
                                                        <h5 class=\"mb-1\"></h5>
                                                        <small class=\"text-muted\">
                                                        ";
                // line 382
                echo "
                                                    ";
                // line 384
                echo "                                                    ";
                $context["now"] = twig_date_format_filter($this->env, "now", "U");
                // line 385
                echo "
                                                    ";
                // line 387
                echo "                                                    ";
                $context["dbDateTime"] = twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "date", [], "any", false, false, false, 387), "U");
                // line 388
                echo "
                                                    ";
                // line 390
                echo "                                                    ";
                $context["difference"] = ((isset($context["now"]) || array_key_exists("now", $context) ? $context["now"] : (function () { throw new RuntimeError('Variable "now" does not exist.', 390, $this->source); })()) - (isset($context["dbDateTime"]) || array_key_exists("dbDateTime", $context) ? $context["dbDateTime"] : (function () { throw new RuntimeError('Variable "dbDateTime" does not exist.', 390, $this->source); })()));
                // line 391
                echo "
                                                    ";
                // line 393
                echo "                                                    ";
                $context["minutesAgo"] = ((isset($context["difference"]) || array_key_exists("difference", $context) ? $context["difference"] : (function () { throw new RuntimeError('Variable "difference" does not exist.', 393, $this->source); })()) / 60);
                // line 394
                echo "                                                    ";
                $context["hoursAgo"] = ((isset($context["difference"]) || array_key_exists("difference", $context) ? $context["difference"] : (function () { throw new RuntimeError('Variable "difference" does not exist.', 394, $this->source); })()) / 3600);
                // line 395
                echo "                                                    ";
                $context["daysAgo"] = ((isset($context["difference"]) || array_key_exists("difference", $context) ? $context["difference"] : (function () { throw new RuntimeError('Variable "difference" does not exist.', 395, $this->source); })()) / (3600 * 24));
                // line 396
                echo "
                                                    ";
                // line 398
                echo "                                                    ";
                if (((isset($context["daysAgo"]) || array_key_exists("daysAgo", $context) ? $context["daysAgo"] : (function () { throw new RuntimeError('Variable "daysAgo" does not exist.', 398, $this->source); })()) >= 1)) {
                    // line 399
                    echo "                                                        ";
                    echo twig_escape_filter($this->env, twig_round((isset($context["daysAgo"]) || array_key_exists("daysAgo", $context) ? $context["daysAgo"] : (function () { throw new RuntimeError('Variable "daysAgo" does not exist.', 399, $this->source); })())), "html", null, true);
                    echo " days ago
                                                    ";
                } elseif ((                // line 400
(isset($context["hoursAgo"]) || array_key_exists("hoursAgo", $context) ? $context["hoursAgo"] : (function () { throw new RuntimeError('Variable "hoursAgo" does not exist.', 400, $this->source); })()) >= 1)) {
                    // line 401
                    echo "                                                        ";
                    echo twig_escape_filter($this->env, twig_round((isset($context["hoursAgo"]) || array_key_exists("hoursAgo", $context) ? $context["hoursAgo"] : (function () { throw new RuntimeError('Variable "hoursAgo" does not exist.', 401, $this->source); })())), "html", null, true);
                    echo " hours ago
                                                    ";
                } elseif ((                // line 402
(isset($context["minutesAgo"]) || array_key_exists("minutesAgo", $context) ? $context["minutesAgo"] : (function () { throw new RuntimeError('Variable "minutesAgo" does not exist.', 402, $this->source); })()) >= 1)) {
                    // line 403
                    echo "                                                        ";
                    echo twig_escape_filter($this->env, twig_round((isset($context["minutesAgo"]) || array_key_exists("minutesAgo", $context) ? $context["minutesAgo"] : (function () { throw new RuntimeError('Variable "minutesAgo" does not exist.', 403, $this->source); })())), "html", null, true);
                    echo " minutes ago
                                                    ";
                } else {
                    // line 405
                    echo "                                                        Just now
                                                    ";
                }
                // line 407
                echo "                                                        </small>
                                                    </div>
                                                    <div class=\"d-flex flex-column\">
                                                        <p class=\"mb-1\">";
                // line 410
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "title", [], "any", false, false, false, 410), "html", null, true);
                echo "</p>
                                                        <small class=\"text-secondary\">";
                // line 411
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "message", [], "any", false, false, false, 411), "html", null, true);
                echo "</small>
                                                    </div>
                                                </div>
                                            <div class=\"d-flex justify-content-end align-items-center\">
                                                                <div>
                                                     <a href=\"\" wire:click.prevent=\"deleteNotification('be02eaeb-b255-4219-802d-cee4e66f31f8')\"
                                                        data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" data-bs-title=\"Delete notification\">
                                                        <i class=\"bi bi-trash fs-3 text-danger\"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 423
            echo "                                  
                                ";
        }
        // line 425
        echo "                            
                            ";
        // line 453
        echo "
                         ";
        // line 454
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 454, $this->source); })()), "user", [], "any", false, false, false, 454), "notifications", [], "any", false, false, false, 454)) > 0)) {
            // line 455
            echo "                               <div class=\"text-center p-3\">
                                <a href=\"\" wire:click.prevent=\"markAllAsRead\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\"
                                    data-bs-title=\"Mark all as read\">
                                    <i class=\"bi bi-eye fs-3\"></i>
                                    Mark all as read
                                </a>
                            </div>
                        ";
        }
        // line 463
        echo "                    </div>

        <!-- Livewire Component wire-end:dnoDV1Mj9dv0aKIFkRbW -->                        
        </div>
                            </div>
                        </div>
                        <!-- Separator -->
                        <div class=\"vr bg-gray-700 mx-2 mx-lg-3\"></div>

                        <!-- Dropdown -->
                        <div class=\"dropdown\">
                            <a href=\"javascript: void(0);\"
                                class=\"dropdown-toggle no-arrow d-flex align-items-center justify-content-center bg-white rounded-circle shadow-sm mx-1 mx-lg-2 w-40px h-40px\"
                                role=\"button\" data-bs-toggle=\"dropdown\" data-bs-auto-close=\"outside\" aria-haspopup=\"true\"
                                aria-expanded=\"false\" data-bs-offset=\"0,0\">
                                <div class=\"avatar avatar-circle avatar-sm avatar-online\">
                                                                     ";
        // line 479
        $context["image"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 479, $this->source); })()), "user", [], "any", false, false, false, 479), "image", [], "any", false, false, false, 479);
        echo "   
                                                                    <img src=\"";
        // line 480
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 480, $this->source); })()), "user", [], "any", false, false, false, 480), "image", [], "any", false, false, false, 480))), "html", null, true);
        echo "\"
                                            alt=\"";
        // line 481
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 481, $this->source); })()), "user", [], "any", false, false, false, 481), "name", [], "any", false, false, false, 481), "html", null, true);
        echo "\" class=\"avatar-img\" width=\"40\" height=\"40\">
                                                            </div>
                            </a>

                            <div class=\"dropdown-menu\">
                                <div class=\"dropdown-item-text\">
                                    <div class=\"d-flex align-items-center\">
                                        <div class=\"flex-grow-1 ms-3\">
                                            <h4 class=\"mb-0\">";
        // line 489
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 489, $this->source); })()), "user", [], "any", false, false, false, 489), "name", [], "any", false, false, false, 489), "html", null, true);
        echo "</h4>
                                            <p class=\"card-text\">";
        // line 490
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 490, $this->source); })()), "user", [], "any", false, false, false, 490), "email", [], "any", false, false, false, 490), "html", null, true);
        echo "</p>
                                        </div>
                                    </div>
                                </div>
                                <hr class=\"dropdown-divider\">
                                <!-- Dropdown -->
                                <div class=\"dropdown dropend\">
                                    <a class=\"dropdown-item dropdown-toggle\" href=\"javascript: void(0);\" id=\"statusDropdown\"
                                        data-bs-toggle=\"dropdown\" aria-expanded=\"false\" data-bs-offset=\"-16,10\">
                                        Quick links
                                    </a>
                                    <div class=\"dropdown-menu dropdown-menu-end navbar-dropdown-menu navbar-dropdown-menu-borderless navbar-dropdown-sub-menu\"
                                        aria-labelledby=\"statusDropdown\">
                                        <a class=\"dropdown-item\" href=";
        // line 503
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("deposit");
        echo ">
                                            Deposit
                                        </a>
                                        <a class=\"dropdown-item\" href=";
        // line 506
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("withdrawal");
        echo ">
                                            Withdrawal request
                                        </a>
                                    </div>
                                </div>
                                <!-- End Dropdown -->

                                <a class=\"dropdown-item\" href=";
        // line 513
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile");
        echo ">Profile & account</a>
                                                            <a class=\"dropdown-item\" href=";
        // line 514
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("withdrawal");
        echo ">Transfer</a>
                                                        <hr class=\"dropdown-divider\">

                                <a class=\"dropdown-item text-danger\" href=";
        // line 517
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
        echo "
                                   >Sign
                                    out</a>
                                
                            </div>
                        </div>
                    </div>
                </header>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 527
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 528
        echo "    
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 531
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 532
        echo "            <!-- Footer -->
            <footer class=\"mt-auto\">
                <div class=\"container-fluid mt-4 mb-6 text-muted\">
                    <div class=\"row justify-content-between\">
                        <div class=\"col\">
                            All Rights Reserved &copy; Evolved Blockchain Solutions 2024
                        </div>

                        <div class=\"col-auto\">
                                                </div>
                    </div> <!-- / .row -->
                </div>
            </footer>
        </main> <!-- / main -->

        <!-- JAVASCRIPT-->
        <!-- Theme JS -->

        <script src=\"https://mam.getonlinetrader.pro/protodash/themes/dashly/assets/js/theme.bundle.js\"></script>
            <script >console.warn(\"Livewire: The published Livewire assets are out of date See: https://laravel-livewire.com/docs/installation/\")</script><script src=\"/vendor/livewire/livewire.js?id=fe747446aa84856d8b66\" data-turbo-eval=\"false\" data-turbolinks-eval=\"false\" ></script><script data-turbo-eval=\"false\" data-turbolinks-eval=\"false\" >window.livewire = new Livewire();window.Livewire = window.livewire;window.livewire_app_url = '';window.livewire_token = '7eTeGODrZvtlzeGeKTcUZjDXp2NYTBjI0tOkAKeh';window.deferLoadingAlpine = function (callback) {window.addEventListener('livewire:load', function () {callback();});};let started = false;window.addEventListener('alpine:initializing', function () {if (! started) {window.livewire.start();started = true;}});document.addEventListener(\"DOMContentLoaded\", function () {if (! started) {window.livewire.start();started = true;}});</script>
        <script src=\"https://code.jquery.com/jquery-3.7.0.min.js\"
            integrity=\"sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=\" crossorigin=\"anonymous\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js\"></script>
        </body>

    </html>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "base.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  783 => 532,  773 => 531,  762 => 528,  752 => 527,  732 => 517,  726 => 514,  722 => 513,  712 => 506,  706 => 503,  690 => 490,  686 => 489,  675 => 481,  671 => 480,  667 => 479,  649 => 463,  639 => 455,  637 => 454,  634 => 453,  631 => 425,  627 => 423,  608 => 411,  604 => 410,  599 => 407,  595 => 405,  589 => 403,  587 => 402,  582 => 401,  580 => 400,  575 => 399,  572 => 398,  569 => 396,  566 => 395,  563 => 394,  560 => 393,  557 => 391,  554 => 390,  551 => 388,  548 => 387,  545 => 385,  542 => 384,  539 => 382,  532 => 376,  528 => 375,  525 => 374,  521 => 372,  519 => 371,  494 => 349,  367 => 225,  350 => 211,  344 => 208,  337 => 204,  331 => 201,  327 => 200,  280 => 155,  270 => 154,  259 => 145,  249 => 144,  231 => 146,  229 => 144,  77 => 3,  66 => 559,  64 => 531,  61 => 530,  59 => 527,  57 => 154,  54 => 153,  52 => 3,  48 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
{% block head %} 
    <!DOCTYPE html>
    <html lang=\"en\" data-theme=\"light\" data-sidebar-behaviour=\"fixed\" data-navigation-color=\"inverted\" data-is-fluid=\"true\">

    <meta http-equiv=\"content-type\" content=\"text/html;charset=UTF-8\" />

    <head>
        <script type=\"text/javascript\" src=\"https://js.stripe.com/v3/\"></script>
        <meta charset=\"utf-8\">
        <meta name=\"csrf-token\" content=\"7eTeGODrZvtlzeGeKTcUZjDXp2NYTBjI0tOkAKeh\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <meta content=\"Webinning\" name=\"author\">
        <!-- Theme CSS -->
        <link rel=\"stylesheet\" href=\"https://mam.getonlinetrader.pro/protodash/themes/dashly/assets/css/theme.bundle.css\" id=\"stylesheetLTR\">
        <link rel=\"stylesheet\" href=\"https://mam.getonlinetrader.pro/protodash/themes/dashly/assets/css/theme.rtl.bundle.css\" id=\"stylesheetRTL\">
        <link rel=\"preconnect\" href=\"https://fonts.gstatic.com/\" crossorigin>
        <link rel=\"preload\" as=\"style\"
            href=\"https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&amp;display=swap\">
        <link rel=\"stylesheet\" media=\"print\" onload=\"this.onload=null;this.removeAttribute('media');\"
            href=\"https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&amp;display=swap\">
        <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css\">
        <!-- no-JS fallback -->
        <noscript>
            <link rel=\"stylesheet\"
                href=\"https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&amp;display=swap\">
        </noscript>

        <script>
            // Add your client ID and secret
            var PAYPAL_CLIENT = 'iidjdjdj';
            var PAYPAL_SECRET = 'jijdjkdkdk';
            // Point your server to the PayPal API
            var PAYPAL_ORDER_API = 'https://api.paypal.com/v2/checkout/orders/';
        </script>
        <script src=\"https://www.paypal.com/sdk/js?client-id=iidjdjdj\"></script>
        <script src=\"https://cdn.jsdelivr.net/npm/sweetalert2@11.7.10/dist/sweetalert2.all.min.js\"></script>
        <link href=\"https://cdn.jsdelivr.net/npm/sweetalert2@11.7.10/dist/sweetalert2.min.css\" rel=\"stylesheet\">
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css\">
        <script>
            // Theme switcher
            let themeSwitcher = document.getElementById('themeSwitcher');

            const getPreferredTheme = () => {
                if (localStorage.getItem('theme') != null) {
                    return localStorage.getItem('theme');
                }

                return document.documentElement.dataset.theme;
            };

            const setTheme = function(theme) {
                if (theme === 'auto' && window.matchMedia('(prefers-color-scheme: dark)').matches) {
                    document.documentElement.dataset.theme = window.matchMedia('(prefers-color-scheme: dark)').matches ?
                        'dark' : 'light';
                } else {
                    document.documentElement.dataset.theme = theme;
                }

                localStorage.setItem('theme', theme);
            };

            const showActiveTheme = theme => {
                const activeBtn = document.querySelector(`[data-theme-value=\"\${theme}\"]`);

                document.querySelectorAll('[data-theme-value]').forEach(element => {
                    element.classList.remove('active');
                });

                activeBtn && activeBtn.classList.add('active');

                // Set button if demo mode is enabled
                document.querySelectorAll('[data-theme-control=\"theme\"]').forEach(element => {
                    if (element.value == theme) {
                        element.checked = true;
                    }
                });
            };

            function reloadPage() {
                window.location = window.location.pathname;
            }


            setTheme(getPreferredTheme());

            if (typeof themeSwitcher != 'undefined') {
                window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', e => {
                    if (localStorage.getItem('theme') != null) {
                        if (localStorage.getItem('theme') == 'auto') {
                            reloadPage();
                        }
                    }
                });

                window.addEventListener('load', () => {
                    showActiveTheme(getPreferredTheme());

                    document.querySelectorAll('[data-theme-value]').forEach(element => {
                        element.addEventListener('click', () => {
                            const theme = element.getAttribute('data-theme-value');

                            localStorage.setItem('theme', theme);
                            reloadPage();
                        })
                    })
                });
            }
        </script>
        <!-- Favicon -->
        <link rel=\"icon\" href=\"https://mam.getonlinetrader.pro/protodash/storage/app/public/photos/i6KEyIIzscFVLkNd20fCnXsUesrnIemV3XQN3dt8.png\" sizes=\"any\">

        <!-- Demo script -->
        <script>
            var themeConfig = {
                theme: JSON.parse('\"light\"'),
                isRTL: JSON.parse('false'),
                isFluid: JSON.parse('true'),
                sidebarBehaviour: JSON.parse('\"fixed\"'),
                navigationColor: JSON.parse('\"inverted\"')
            };

            var isRTL = localStorage.getItem('isRTL') === 'true',
                isFluid = localStorage.getItem('isFluid') === 'true',
                theme = localStorage.getItem('theme'),
                sidebarSizing = localStorage.getItem('sidebarSizing'),
                linkLTR = document.getElementById('stylesheetLTR'),
                linkRTL = document.getElementById('stylesheetRTL'),
                html = document.documentElement;

            if (isRTL) {
                linkLTR.setAttribute('disabled', '');
                linkRTL.removeAttribute('disabled');
                html.setAttribute('dir', 'rtl');
            } else {
                linkRTL.setAttribute('disabled', '');
                linkLTR.removeAttribute('disabled');
                html.removeAttribute('dir');
            }
        </script>

        <!-- Page Title -->
        <title>{% block title %}
            Dashboard
        {% endblock %}| {{app.user.name}}</title>
            <script src=\"https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.1/dist/alpine.min.js\" defer></script>
        <style >[wire\\:loading], [wire\\:loading\\.delay], [wire\\:loading\\.inline-block], [wire\\:loading\\.inline], [wire\\:loading\\.block], [wire\\:loading\\.flex], [wire\\:loading\\.table], [wire\\:loading\\.grid], [wire\\:loading\\.inline-flex] {display: none;}[wire\\:loading\\.delay\\.shortest], [wire\\:loading\\.delay\\.shorter], [wire\\:loading\\.delay\\.short], [wire\\:loading\\.delay\\.long], [wire\\:loading\\.delay\\.longer], [wire\\:loading\\.delay\\.longest] {display:none;}[wire\\:offline] {display: none;}[wire\\:dirty]:not(textarea):not(input):not(select) {display: none;}input:-webkit-autofill, select:-webkit-autofill, textarea:-webkit-autofill {animation-duration: 50000s;animation-name: livewireautofill;}@keyframes livewireautofill { from {} }</style>
    </head>

    
{% endblock %}
    
{% block body %}
                    
        <body>
            
            <script>
                
            </script>
            <!-- THEME CONFIGURATION -->
            <script>
                let themeAttrs = document.documentElement.dataset;

                for (let attr in themeAttrs) {
                    if (localStorage.getItem(attr) != null) {
                        document.documentElement.dataset[attr] = localStorage.getItem(attr);

                        if (theme === 'auto') {
                            document.documentElement.dataset.theme = window.matchMedia('(prefers-color-scheme: dark)').matches ?
                                'dark' : 'light';

                            window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', e => {
                                e.matches ? document.documentElement.dataset.theme = 'dark' : document.documentElement
                                    .dataset.theme = 'light';
                            });
                        }
                    }
                }
            </script>
            <!-- NAVIGATION -->
            <nav id=\"mainNavbar\" class=\"navbar navbar-vertical navbar-expand-lg scrollbar bg-dark navbar-dark\">
                <!-- Theme configuration (navbar) -->
                <script>
                    let navigationColor = localStorage.getItem('navigationColor'),
                        navbar = document.getElementById('mainNavbar');

                    if (navigationColor != null && navbar != null) {
                        if (navigationColor == 'inverted') {
                            navbar.classList.add('bg-dark', 'navbar-dark');
                            navbar.classList.remove('bg-white', 'navbar-light');
                        } else {
                            navbar.classList.add('bg-white', 'navbar-light');
                            navbar.classList.remove('bg-dark', 'navbar-dark');
                        }
                    }
                </script>
                <div class=\"container-fluid\">
                    <!-- Brand -->
                    <a class=\"navbar-brand\" href={{ path('dashboard') }}>
                        <img src={{ asset(\"wp-content/uploads/2021/06/Text-Monochrome-on-dark-blue.png\") }}
                            class=\"navbar-brand-img logo-light logo-small\" alt=\"Evolved Blockchain Solutions\" width=\"25\"
                            height=\"50\">
                        <img src={{ asset(\"wp-content/uploads/2021/06/Text-Monochrome-on-dark-blue.png\") }}
                            class=\"navbar-brand-img logo-light logo-large\" alt=\"Evolved Blockchain Solutions\" width=\"125\"
                            height=\"50\">

                        <img src={{ asset(\"wp-content/uploads/2021/06/Text-Monochrome-on-dark-blue.png\") }}
                            class=\"navbar-brand-img logo-dark logo-small\" alt=\"Evolved Blockchain Solutions\" width=\"25\"
                            height=\"50\">
                        <img src={{ asset(\"wp-content/uploads/2021/06/Text-Monochrome-on-dark-blue.png\") }}
                            class=\"navbar-brand-img logo-dark logo-large\" alt=\"Evolved Blockchain Solutions\" width=\"125\"
                            height=\"50\">
                    </a>

                    <!-- Navbar toggler -->
                    <a href=\"javascript: void(0);\" class=\"navbar-toggler\" data-bs-toggle=\"collapse\"
                        data-bs-target=\"#sidenavCollapse\" aria-controls=\"sidenavCollapse\" aria-expanded=\"false\"
                        aria-label=\"Toggle navigation\">
                        <span class=\"navbar-toggler-icon\"></span>
                    </a>
                    <!-- Collapse -->
                    <div class=\"collapse navbar-collapse\" id=\"sidenavCollapse\">
                        <!-- Navigation -->
                                {{ render(controller('App\\\\Controller\\\\DashboardController::nav',  {'path':path}),) }}

                        <!-- End of Navigation -->
                                    </div>
                    <!-- End of Collapse -->
                </div>
            </nav>
            <!-- MAIN CONTENT -->
            <main>
                <!-- HEADER -->
                <header class=\"container-fluid d-flex py-6 mb-4\">
                    <!-- Top buttons -->
                    <div class=\"d-flex align-items-center ms-auto me-n1 me-lg-n2\">

                        <!-- Dropdown -->
                        <div class=\"dropdown\" id=\"themeSwitcher\">
                            <a href=\"javascript: void(0);\"
                                class=\"dropdown-toggle no-arrow d-flex align-items-center justify-content-center bg-white rounded-circle shadow-sm mx-1 mx-lg-2 w-40px h-40px link-secondary\"
                                role=\"button\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"
                                data-bs-offset=\"0,0\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" height=\"18\" width=\"18\">
                                    <g>
                                        <path
                                            d=\"M12,4.64A7.36,7.36,0,1,0,19.36,12,7.37,7.37,0,0,0,12,4.64Zm0,12.72A5.36,5.36,0,1,1,17.36,12,5.37,5.37,0,0,1,12,17.36Z\"
                                            style=\"fill: currentColor\" />
                                        <path d=\"M12,3.47a1,1,0,0,0,1-1V1a1,1,0,0,0-2,0V2.47A1,1,0,0,0,12,3.47Z\"
                                            style=\"fill: currentColor\" />
                                        <path
                                            d=\"M4.55,6a1,1,0,0,0,.71.29A1,1,0,0,0,6,6,1,1,0,0,0,6,4.55l-1-1A1,1,0,0,0,3.51,4.93Z\"
                                            style=\"fill: currentColor\" />
                                        <path d=\"M2.47,11H1a1,1,0,0,0,0,2H2.47a1,1,0,1,0,0-2Z\" style=\"fill: currentColor\" />
                                        <path
                                            d=\"M4.55,18l-1,1a1,1,0,0,0,0,1.42,1,1,0,0,0,.71.29,1,1,0,0,0,.71-.29l1-1A1,1,0,0,0,4.55,18Z\"
                                            style=\"fill: currentColor\" />
                                        <path d=\"M12,20.53a1,1,0,0,0-1,1V23a1,1,0,0,0,2,0V21.53A1,1,0,0,0,12,20.53Z\"
                                            style=\"fill: currentColor\" />
                                        <path
                                            d=\"M19.45,18A1,1,0,0,0,18,19.45l1,1a1,1,0,0,0,.71.29,1,1,0,0,0,.71-.29,1,1,0,0,0,0-1.42Z\"
                                            style=\"fill: currentColor\" />
                                        <path d=\"M23,11H21.53a1,1,0,0,0,0,2H23a1,1,0,0,0,0-2Z\" style=\"fill: currentColor\" />
                                        <path
                                            d=\"M18.74,6.26A1,1,0,0,0,19.45,6l1-1a1,1,0,1,0-1.42-1.42l-1,1A1,1,0,0,0,18,6,1,1,0,0,0,18.74,6.26Z\"
                                            style=\"fill: currentColor\" />
                                    </g>
                                </svg>
                            </a>

                            <ul class=\"dropdown-menu dropdown-menu-end\">
                                <li>
                                    <button type=\"button\" class=\"dropdown-item active\" data-theme-value=\"light\">
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" class=\"me-2\"
                                            height=\"18\" width=\"18\">
                                            <g>
                                                <path
                                                    d=\"M12,4.64A7.36,7.36,0,1,0,19.36,12,7.37,7.37,0,0,0,12,4.64Zm0,12.72A5.36,5.36,0,1,1,17.36,12,5.37,5.37,0,0,1,12,17.36Z\"
                                                    style=\"fill: currentColor\" />
                                                <path d=\"M12,3.47a1,1,0,0,0,1-1V1a1,1,0,0,0-2,0V2.47A1,1,0,0,0,12,3.47Z\"
                                                    style=\"fill: currentColor\" />
                                                <path
                                                    d=\"M4.55,6a1,1,0,0,0,.71.29A1,1,0,0,0,6,6,1,1,0,0,0,6,4.55l-1-1A1,1,0,0,0,3.51,4.93Z\"
                                                    style=\"fill: currentColor\" />
                                                <path d=\"M2.47,11H1a1,1,0,0,0,0,2H2.47a1,1,0,1,0,0-2Z\"
                                                    style=\"fill: currentColor\" />
                                                <path
                                                    d=\"M4.55,18l-1,1a1,1,0,0,0,0,1.42,1,1,0,0,0,.71.29,1,1,0,0,0,.71-.29l1-1A1,1,0,0,0,4.55,18Z\"
                                                    style=\"fill: currentColor\" />
                                                <path d=\"M12,20.53a1,1,0,0,0-1,1V23a1,1,0,0,0,2,0V21.53A1,1,0,0,0,12,20.53Z\"
                                                    style=\"fill: currentColor\" />
                                                <path
                                                    d=\"M19.45,18A1,1,0,0,0,18,19.45l1,1a1,1,0,0,0,.71.29,1,1,0,0,0,.71-.29,1,1,0,0,0,0-1.42Z\"
                                                    style=\"fill: currentColor\" />
                                                <path d=\"M23,11H21.53a1,1,0,0,0,0,2H23a1,1,0,0,0,0-2Z\"
                                                    style=\"fill: currentColor\" />
                                                <path
                                                    d=\"M18.74,6.26A1,1,0,0,0,19.45,6l1-1a1,1,0,1,0-1.42-1.42l-1,1A1,1,0,0,0,18,6,1,1,0,0,0,18.74,6.26Z\"
                                                    style=\"fill: currentColor\" />
                                            </g>
                                        </svg>
                                        Light mode
                                    </button>
                                </li>
                                <li>
                                    <button type=\"button\" class=\"dropdown-item\" data-theme-value=\"dark\">
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" class=\"me-2\"
                                            height=\"18\" width=\"18\">
                                            <path
                                                d=\"M19.57,23.34a1,1,0,0,0,0-1.9,9.94,9.94,0,0,1,0-18.88,1,1,0,0,0,.68-.94,1,1,0,0,0-.68-.95A11.58,11.58,0,0,0,8.88,2.18,12.33,12.33,0,0,0,3.75,12a12.31,12.31,0,0,0,5.11,9.79A11.49,11.49,0,0,0,15.61,24,12.55,12.55,0,0,0,19.57,23.34ZM10,20.17A10.29,10.29,0,0,1,5.75,12a10.32,10.32,0,0,1,4.3-8.19A9.34,9.34,0,0,1,15.59,2a.17.17,0,0,1,.17.13.18.18,0,0,1-.07.2,11.94,11.94,0,0,0-.18,19.21.25.25,0,0,1-.16.45A9.5,9.5,0,0,1,10,20.17Z\"
                                                style=\"fill: currentColor\" />
                                        </svg>
                                        Dark mode
                                    </button>
                                </li>
                                <li>
                                    <button type=\"button\" class=\"dropdown-item\" data-theme-value=\"auto\">
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" class=\"me-2\"
                                            height=\"18\" width=\"18\">
                                            <path
                                                d=\"M24,12a1,1,0,0,0-1-1H19.09a.51.51,0,0,1-.49-.4,6.83,6.83,0,0,0-.94-2.28.5.5,0,0,1,.06-.63l2.77-2.76a1,1,0,1,0-1.42-1.42L16.31,6.28a.5.5,0,0,1-.63.06A6.83,6.83,0,0,0,13.4,5.4a.5.5,0,0,1-.4-.49V1a1,1,0,0,0-2,0V4.91a.51.51,0,0,1-.4.49,6.83,6.83,0,0,0-2.28.94.5.5,0,0,1-.63-.06L4.93,3.51A1,1,0,0,0,3.51,4.93L6.28,7.69a.5.5,0,0,1,.06.63A6.83,6.83,0,0,0,5.4,10.6a.5.5,0,0,1-.49.4H1a1,1,0,0,0,0,2H4.91a.51.51,0,0,1,.49.4,6.83,6.83,0,0,0,.94,2.28.5.5,0,0,1-.06.63L3.51,19.07a1,1,0,1,0,1.42,1.42l2.76-2.77a.5.5,0,0,1,.63-.06,6.83,6.83,0,0,0,2.28.94.5.5,0,0,1,.4.49V23a1,1,0,0,0,2,0V19.09a.51.51,0,0,1,.4-.49,6.83,6.83,0,0,0,2.28-.94.5.5,0,0,1,.63.06l2.76,2.77a1,1,0,1,0,1.42-1.42l-2.77-2.76a.5.5,0,0,1-.06-.63,6.83,6.83,0,0,0,.94-2.28.5.5,0,0,1,.49-.4H23A1,1,0,0,0,24,12Zm-8.74,2.5A5.76,5.76,0,0,1,9.5,8.74a5.66,5.66,0,0,1,.16-1.31A.49.49,0,0,1,10,7.07a5.36,5.36,0,0,1,1.8-.31,5.47,5.47,0,0,1,5.46,5.46,5.36,5.36,0,0,1-.31,1.8.49.49,0,0,1-.35.32A5.53,5.53,0,0,1,15.26,14.5Z\"
                                                style=\"fill: currentColor\" />
                                        </svg>
                                        Auto
                                    </button>
                                </li>
                            </ul>
                        </div>

                        <!-- Separator -->
                        <div class=\"vr bg-gray-700 mx-2 mx-lg-3\"></div>
                        <!-- Button -->
                        <a class=\"d-flex align-items-center justify-content-center bg-white rounded-circle shadow-sm mx-1 mx-lg-2 w-40px h-40px position-relative link-secondary\"
                            data-bs-toggle=\"offcanvas\" href=\"#offcanvasNotifications\" role=\"button\"
                            aria-controls=\"offcanvasNotifications\">
                            <svg viewBox=\"0 0 24 24\" height=\"18\" width=\"18\" xmlns=\"http://www.w3.org/2000/svg\">
                                <path d=\"M10,21.75a2.087,2.087,0,0,0,4.005,0\" fill=\"none\" stroke=\"currentColor\"
                                    stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"1.5\" />
                                <path d=\"M12 3L12 0.75\" fill=\"none\" stroke=\"currentColor\" stroke-linecap=\"round\"
                                    stroke-linejoin=\"round\" stroke-width=\"1.5\" />
                                <path
                                    d=\"M12,3a7.5,7.5,0,0,1,7.5,7.5c0,7.046,1.5,8.25,1.5,8.25H3s1.5-1.916,1.5-8.25A7.5,7.5,0,0,1,12,3Z\"
                                    fill=\"none\" stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\"
                                    stroke-width=\"1.5\" />
                            </svg>
                            <div wire:id=\"EbCEpC3pK5mjVso5TMf7\" wire:initial-data=\"{&quot;fingerprint&quot;:{&quot;id&quot;:&quot;EbCEpC3pK5mjVso5TMf7&quot;,&quot;name&quot;:&quot;user.notifications-count&quot;,&quot;locale&quot;:&quot;en&quot;,&quot;path&quot;:&quot;dashboard&quot;,&quot;method&quot;:&quot;GET&quot;,&quot;v&quot;:&quot;acj&quot;},&quot;effects&quot;:{&quot;listeners&quot;:[&quot;updateNotification&quot;]},&quot;serverMemo&quot;:{&quot;children&quot;:[],&quot;errors&quot;:[],&quot;htmlHash&quot;:&quot;df557af6&quot;,&quot;data&quot;:[],&quot;dataMeta&quot;:[],&quot;checksum&quot;:&quot;a871208b563891d2a780b0dff6d7eeca41b3c7f2495e88d08b213b7b46bc1a25&quot;}}\">
                    <span class=\"position-absolute top-0 start-100 translate-middle badge rounded-pill text-bg-danger\">
                    {{ app.user.notifications|length }} <span class=\"visually-hidden\">
                        messages</span>
                </span>
            </div>

        <!-- Livewire Component wire-end:EbCEpC3pK5mjVso5TMf7 -->                </a>

                        <!-- Notifications offcanvas -->
                        <div class=\"offcanvas offcanvas-end\" tabindex=\"-1\" id=\"offcanvasNotifications\"
                            aria-labelledby=\"offcanvasNotificationsLabel\">
                            <div class=\"offcanvas-header px-5\">
                                <h3 class=\"offcanvas-title\" id=\"offcanvasNotificationsLabel\">Notifications</h3>
                                <div class=\"d-flex align-items-start\">
                                    <!-- Button -->
                                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"offcanvas\"
                                        aria-label=\"Close\"></button>
                                </div>
                            </div>

                            <div class=\"offcanvas-body p-0\">
                                <div class=\"list-group list-group-flush\">
                                    <div wire:id=\"dnoDV1Mj9dv0aKIFkRbW\" wire:initial-data=\"{&quot;fingerprint&quot;:{&quot;id&quot;:&quot;dnoDV1Mj9dv0aKIFkRbW&quot;,&quot;name&quot;:&quot;user.notifications&quot;,&quot;locale&quot;:&quot;en&quot;,&quot;path&quot;:&quot;dashboard&quot;,&quot;method&quot;:&quot;GET&quot;,&quot;v&quot;:&quot;acj&quot;},&quot;effects&quot;:{&quot;listeners&quot;:[&quot;addNotification&quot;]},&quot;serverMemo&quot;:{&quot;children&quot;:[],&quot;errors&quot;:[],&quot;htmlHash&quot;:&quot;8b2eed7d&quot;,&quot;data&quot;:[],&quot;dataMeta&quot;:[],&quot;checksum&quot;:&quot;b5fd0caf40859258b34cd0b4985fce2143b4a6f5a9bfd7da7c70a3a051cbad20&quot;}}\">
                                {% if  app.user.notifications|length < 1 %}
                                    <center><h3>no massage here yet</h3></center>  
                                    {% else %}

                                    {% for message in app.user.notifications|reverse %}
                                        <div class=\"list-group-item list-group-item-action \">
                                             <div class=\"d-flex flex-column flex-grow-1\">
                                                    <div class=\"d-flex w-100 justify-content-between\">
                                                        <h5 class=\"mb-1\"></h5>
                                                        <small class=\"text-muted\">
                                                        {# Assuming 'databaseDateTime' is your Symfony DateTime object from the database #}

                                                    {# Get the current date and time #}
                                                    {% set now = \"now\"|date(\"U\") %}

                                                    {# Get the database date and time #}
                                                    {% set dbDateTime = message.date|date(\"U\") %}

                                                    {# Calculate the difference in seconds #}
                                                    {% set difference = now - dbDateTime %}

                                                    {# Convert the difference to minutes and hours #}
                                                    {% set minutesAgo = difference / 60 %}
                                                    {% set hoursAgo = difference / 3600 %}
                                                    {% set daysAgo = difference / (3600 * 24) %}

                                                    {# Output the difference in a human-readable format #}
                                                    {% if daysAgo >= 1 %}
                                                        {{ daysAgo | round }} days ago
                                                    {% elseif hoursAgo >= 1 %}
                                                        {{ hoursAgo | round }} hours ago
                                                    {% elseif minutesAgo >= 1 %}
                                                        {{ minutesAgo | round }} minutes ago
                                                    {% else %}
                                                        Just now
                                                    {% endif %}
                                                        </small>
                                                    </div>
                                                    <div class=\"d-flex flex-column\">
                                                        <p class=\"mb-1\">{{message.title}}</p>
                                                        <small class=\"text-secondary\">{{message.message}}</small>
                                                    </div>
                                                </div>
                                            <div class=\"d-flex justify-content-end align-items-center\">
                                                                <div>
                                                     <a href=\"\" wire:click.prevent=\"deleteNotification('be02eaeb-b255-4219-802d-cee4e66f31f8')\"
                                                        data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" data-bs-title=\"Delete notification\">
                                                        <i class=\"bi bi-trash fs-3 text-danger\"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    {% endfor %}                                  
                                {% endif %}
                            
                            {# <div class=\"list-group-item list-group-item-action bg-light\">
                    <div class=\"d-flex flex-column flex-grow-1\">
                        <div class=\"d-flex w-100 justify-content-between\">
                            <h5 class=\"mb-1\"></h5>
                            <small class=\"text-muted\">6 days ago</small>
                        </div>
                        <div class=\"d-flex flex-column\">
                            <p class=\"mb-1\">New Investment Plan</p>
                            <small class=\"text-secondary\">You just purchased a new investment plan: Premium, amount: \$500.</small>
                        </div>
                    </div>
                    <div class=\"d-flex justify-content-end align-items-center\">
                                            <div>
                                <a href=\"\" wire:click.prevent=\"markAsRead('be02eaeb-b255-4219-802d-cee4e66f31f8')\" data-bs-toggle=\"tooltip\"
                                    data-bs-placement=\"top\" data-bs-title=\"Mark as read\">
                                    <i class=\"bi bi-eye fs-3\"></i>
                                </a>
                            </div>
                            &nbsp; &nbsp;
                                        <div>
                            <a href=\"\" wire:click.prevent=\"deleteNotification('be02eaeb-b255-4219-802d-cee4e66f31f8')\"
                                data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" data-bs-title=\"Delete notification\">
                                <i class=\"bi bi-trash fs-3 text-danger\"></i>
                            </a>
                        </div>
                    </div>
                </div> #}

                         {% if app.user.notifications|length > 0 %}
                               <div class=\"text-center p-3\">
                                <a href=\"\" wire:click.prevent=\"markAllAsRead\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\"
                                    data-bs-title=\"Mark all as read\">
                                    <i class=\"bi bi-eye fs-3\"></i>
                                    Mark all as read
                                </a>
                            </div>
                        {% endif %}
                    </div>

        <!-- Livewire Component wire-end:dnoDV1Mj9dv0aKIFkRbW -->                        
        </div>
                            </div>
                        </div>
                        <!-- Separator -->
                        <div class=\"vr bg-gray-700 mx-2 mx-lg-3\"></div>

                        <!-- Dropdown -->
                        <div class=\"dropdown\">
                            <a href=\"javascript: void(0);\"
                                class=\"dropdown-toggle no-arrow d-flex align-items-center justify-content-center bg-white rounded-circle shadow-sm mx-1 mx-lg-2 w-40px h-40px\"
                                role=\"button\" data-bs-toggle=\"dropdown\" data-bs-auto-close=\"outside\" aria-haspopup=\"true\"
                                aria-expanded=\"false\" data-bs-offset=\"0,0\">
                                <div class=\"avatar avatar-circle avatar-sm avatar-online\">
                                                                     {% set image = app.user.image %}   
                                                                    <img src=\"{{ asset('uploads/' ~ app.user.image) }}\"
                                            alt=\"{{app.user.name}}\" class=\"avatar-img\" width=\"40\" height=\"40\">
                                                            </div>
                            </a>

                            <div class=\"dropdown-menu\">
                                <div class=\"dropdown-item-text\">
                                    <div class=\"d-flex align-items-center\">
                                        <div class=\"flex-grow-1 ms-3\">
                                            <h4 class=\"mb-0\">{{app.user.name}}</h4>
                                            <p class=\"card-text\">{{app.user.email}}</p>
                                        </div>
                                    </div>
                                </div>
                                <hr class=\"dropdown-divider\">
                                <!-- Dropdown -->
                                <div class=\"dropdown dropend\">
                                    <a class=\"dropdown-item dropdown-toggle\" href=\"javascript: void(0);\" id=\"statusDropdown\"
                                        data-bs-toggle=\"dropdown\" aria-expanded=\"false\" data-bs-offset=\"-16,10\">
                                        Quick links
                                    </a>
                                    <div class=\"dropdown-menu dropdown-menu-end navbar-dropdown-menu navbar-dropdown-menu-borderless navbar-dropdown-sub-menu\"
                                        aria-labelledby=\"statusDropdown\">
                                        <a class=\"dropdown-item\" href={{ path('deposit') }}>
                                            Deposit
                                        </a>
                                        <a class=\"dropdown-item\" href={{ path('withdrawal') }}>
                                            Withdrawal request
                                        </a>
                                    </div>
                                </div>
                                <!-- End Dropdown -->

                                <a class=\"dropdown-item\" href={{ path('profile') }}>Profile & account</a>
                                                            <a class=\"dropdown-item\" href={{ path('withdrawal') }}>Transfer</a>
                                                        <hr class=\"dropdown-divider\">

                                <a class=\"dropdown-item text-danger\" href={{ path('logout') }}
                                   >Sign
                                    out</a>
                                
                            </div>
                        </div>
                    </div>
                </header>

{% endblock %}
{% block main %}
    
{% endblock %}

{% block footer %}
            <!-- Footer -->
            <footer class=\"mt-auto\">
                <div class=\"container-fluid mt-4 mb-6 text-muted\">
                    <div class=\"row justify-content-between\">
                        <div class=\"col\">
                            All Rights Reserved &copy; Evolved Blockchain Solutions 2024
                        </div>

                        <div class=\"col-auto\">
                                                </div>
                    </div> <!-- / .row -->
                </div>
            </footer>
        </main> <!-- / main -->

        <!-- JAVASCRIPT-->
        <!-- Theme JS -->

        <script src=\"https://mam.getonlinetrader.pro/protodash/themes/dashly/assets/js/theme.bundle.js\"></script>
            <script >console.warn(\"Livewire: The published Livewire assets are out of date See: https://laravel-livewire.com/docs/installation/\")</script><script src=\"/vendor/livewire/livewire.js?id=fe747446aa84856d8b66\" data-turbo-eval=\"false\" data-turbolinks-eval=\"false\" ></script><script data-turbo-eval=\"false\" data-turbolinks-eval=\"false\" >window.livewire = new Livewire();window.Livewire = window.livewire;window.livewire_app_url = '';window.livewire_token = '7eTeGODrZvtlzeGeKTcUZjDXp2NYTBjI0tOkAKeh';window.deferLoadingAlpine = function (callback) {window.addEventListener('livewire:load', function () {callback();});};let started = false;window.addEventListener('alpine:initializing', function () {if (! started) {window.livewire.start();started = true;}});document.addEventListener(\"DOMContentLoaded\", function () {if (! started) {window.livewire.start();started = true;}});</script>
        <script src=\"https://code.jquery.com/jquery-3.7.0.min.js\"
            integrity=\"sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=\" crossorigin=\"anonymous\"></script>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js\"></script>
        </body>

    </html>
{% endblock %}

", "base.html.twig", "C:\\xampp\\htdocs\\express\\templates\\base.html.twig");
    }
}
