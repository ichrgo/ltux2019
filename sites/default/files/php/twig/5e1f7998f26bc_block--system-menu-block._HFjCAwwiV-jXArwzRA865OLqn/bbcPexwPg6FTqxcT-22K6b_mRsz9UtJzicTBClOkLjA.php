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

/* themes/pana/templates/block/block--system-menu-block.html.twig */
class __TwigTemplate_db950949652ca6c5f502642221fb6a8feb0703fea4a7a6c1d170e3322a0f547b extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 35, "if" => 41, "block" => 64];
        $filters = ["clean_class" => 37, "clean_id" => 40, "without" => 41];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block'],
                ['clean_class', 'clean_id', 'without'],
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
        // line 35
        $context["classes"] = [0 => "block", 1 => ("block-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute(        // line 37
($context["configuration"] ?? null), "provider", []))))];
        // line 40
        $context["heading_id"] = \Drupal\Component\Utility\Html::getId($this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "id", [])));
        // line 41
        echo "<nav aria-labelledby=\"";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["heading_id"] ?? null)), "html", null, true);
        echo "\"";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(twig_without($this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null)), "role", "aria-labelledby"), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
        echo "  ";
        if (($context["block_style"] ?? null)) {
            echo "style=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["block_style"] ?? null)), "html", null, true);
            echo "\"";
        }
        echo ">
<div class=\"container-wrap clearfix menu-wrap\">
  ";
        // line 44
        echo "  ";
        if ( !$this->getAttribute(($context["configuration"] ?? null), "label_display", [])) {
            // line 45
            echo "    ";
            $context["title_attributes"] = $this->getAttribute(($context["title_attributes"] ?? null), "addClass", [0 => "visually-hidden"], "method");
            // line 46
            echo "  ";
        }
        // line 47
        echo "  ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null)), "html", null, true);
        echo "
\t";
        // line 48
        if (($context["label"] ?? null)) {
            // line 49
            echo "\t<div class=\"block-title-wrap clearfix\">
\t<div class=\"block-title-content\">
\t";
            // line 51
            if ((($context["block_title_style"] ?? null) == "block-title-2")) {
                // line 52
                echo "\t";
                if (($context["block_subtitle"] ?? null)) {
                    echo "<h5 class=\"block-subtitle\">";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["block_subtitle"] ?? null)), "html", null, true);
                    echo "</h5>";
                }
                // line 53
                echo "\t<h2";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["title_attributes"] ?? null), "addClass", [0 => "block-title"], "method")), "html", null, true);
                echo ">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null)), "html", null, true);
                echo "</h2>
\t";
            } else {
                // line 55
                echo "\t<h2";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["title_attributes"] ?? null), "addClass", [0 => "block-title"], "method")), "html", null, true);
                echo ">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null)), "html", null, true);
                echo "</h2>
\t";
                // line 56
                if (($context["block_subtitle"] ?? null)) {
                    echo "<h5 class=\"block-subtitle\">";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["block_subtitle"] ?? null)), "html", null, true);
                    echo "</h5>";
                }
                // line 57
                echo "\t";
            }
            // line 58
            echo "\t</div>
\t</div>
\t";
        }
        // line 61
        echo "  ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null)), "html", null, true);
        echo "

  ";
        // line 64
        echo "  ";
        $this->displayBlock('content', $context, $blocks);
        // line 67
        echo "</div>
</nav>
";
    }

    // line 64
    public function block_content($context, array $blocks = [])
    {
        // line 65
        echo "    ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null)), "html", null, true);
        echo "
  ";
    }

    public function getTemplateName()
    {
        return "themes/pana/templates/block/block--system-menu-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 65,  148 => 64,  142 => 67,  139 => 64,  133 => 61,  128 => 58,  125 => 57,  119 => 56,  112 => 55,  104 => 53,  97 => 52,  95 => 51,  91 => 49,  89 => 48,  84 => 47,  81 => 46,  78 => 45,  75 => 44,  61 => 41,  59 => 40,  57 => 37,  56 => 35,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/pana/templates/block/block--system-menu-block.html.twig", "C:\\xampp\\htdocs\\dev\\projects\\ltux\\template-site\\draft1\\themes\\pana\\templates\\block\\block--system-menu-block.html.twig");
    }
}
