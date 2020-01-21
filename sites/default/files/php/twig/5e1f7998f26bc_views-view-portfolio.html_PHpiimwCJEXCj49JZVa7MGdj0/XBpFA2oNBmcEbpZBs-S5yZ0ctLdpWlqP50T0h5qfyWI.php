<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* modules/custom/portfolio/templates/views-view-portfolio.html.twig */
class __TwigTemplate_45db2ebd97c3f8493d58096b97bbc91b2e85df369635f3f6b0cec091c89042ff extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 22, "for" => 42, "set" => 44];
        $filters = [];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'for', 'set'],
                [],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 20
        echo "
<div ";
        // line 21
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["wrapper_class"] ?? null)), "html", null, true);
        echo ">
  ";
        // line 22
        if (($context["title"] ?? null)) {
            // line 23
            echo "    <h3 class=\"views-title\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null)), "html", null, true);
            echo "</h3>
  ";
        }
        // line 25
        echo "
  ";
        // line 26
        if (($context["filter_options"] ?? null)) {
            // line 27
            echo "  <div class=\"clearfix shuffle-filters-wrap\">
    <div class=\"shuffle-filters-container\">
      ";
            // line 29
            if (($context["filter_label"] ?? null)) {
                // line 30
                echo "        <div class=\"filter-label\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["filter_label"] ?? null)), "html", null, true);
                echo "</div>
      ";
            }
            // line 32
            echo "      <ul class=\"shuffle-filters filter-options\">
\t  <li class=\"shuffle-filters-all shuffle-filters-item active\" data-group=\"all\">All</li>
\t  </ul>
      ";
            // line 35
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["filter_options"] ?? null)), "html", null, true);
            echo "
    </div>
  </div>
  ";
        }
        // line 39
        echo "
  ";
        // line 41
        echo "  <div class=\"shuffle-container\">
    ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 43
            echo "      ";
            // line 44
            $context["row_classes"] = [0 => ((            // line 45
($context["default_row_class"] ?? null)) ? ("views-row") : (""))];
            // line 48
            echo "
      <div";
            // line 49
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($context["row"], "attributes", []), "addClass", [0 => ($context["row_classes"] ?? null), 1 => ($context["grid_classes"] ?? null)], "method")), "html", null, true);
            echo ">
        ";
            // line 50
            if ($this->getAttribute($context["row"], "content", [])) {
                // line 51
                echo "          <div class=\"shuffle-inner\">
          ";
                // line 52
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["row"], "content", [])), "html", null, true);
                echo "
          </div>
        ";
            }
            // line 55
            echo "      </div>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "modules/custom/portfolio/templates/views-view-portfolio.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 58,  132 => 55,  126 => 52,  123 => 51,  121 => 50,  117 => 49,  114 => 48,  112 => 45,  111 => 44,  109 => 43,  105 => 42,  102 => 41,  99 => 39,  92 => 35,  87 => 32,  81 => 30,  79 => 29,  75 => 27,  73 => 26,  70 => 25,  64 => 23,  62 => 22,  58 => 21,  55 => 20,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "modules/custom/portfolio/templates/views-view-portfolio.html.twig", "C:\\xampp\\htdocs\\dev\\projects\\ltux\\template-site\\draft1\\modules\\custom\\portfolio\\templates\\views-view-portfolio.html.twig");
    }
}
