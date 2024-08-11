<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @KnpPaginator/Pagination/bootstrap_v5_fa_sortable_link.html.twig */
class __TwigTemplate_6e81c320de484cd16786d8da41bc654f extends Template
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
        // line 7
        yield "<a";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["options"] ?? null));
        foreach ($context['_seq'] as $context["attr"] => $context["value"]) {
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["attr"], "html", null, true);
            yield "=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["value"], "html", null, true);
            yield "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attr'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        yield ">
    <span class=\"float-end\">
        ";
        // line 9
        if (($context["sorted"] ?? null)) {
            // line 10
            yield "            ";
            if ((($context["direction"] ?? null) == "desc")) {
                // line 11
                yield "                <i class=\"fa fa-sort-down\"></i>
            ";
            } else {
                // line 13
                yield "                <i class=\"fa fa-sort-up\"></i>
            ";
            }
            // line 15
            yield "        ";
        } else {
            // line 16
            yield "            <i class=\"fa fa-sort\"></i>
        ";
        }
        // line 18
        yield "    </span>
    ";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["title"] ?? null), "html", null, true);
        yield "
</a>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@KnpPaginator/Pagination/bootstrap_v5_fa_sortable_link.html.twig";
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
        return array (  78 => 19,  75 => 18,  71 => 16,  68 => 15,  64 => 13,  60 => 11,  57 => 10,  55 => 9,  38 => 7,);
    }

    public function getSourceContext()
    {
        return new Source("", "@KnpPaginator/Pagination/bootstrap_v5_fa_sortable_link.html.twig", "C:\\xampp\\htdocs\\evolve\\vendor\\knplabs\\knp-paginator-bundle\\templates\\Pagination\\bootstrap_v5_fa_sortable_link.html.twig");
    }
}
