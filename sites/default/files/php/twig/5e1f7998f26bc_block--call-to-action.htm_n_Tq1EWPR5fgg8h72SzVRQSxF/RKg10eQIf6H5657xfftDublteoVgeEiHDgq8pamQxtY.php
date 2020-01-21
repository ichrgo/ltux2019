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

/* themes/pana/templates/block/block--call-to-action.html.twig */
class __TwigTemplate_22364084e841173a27a83df4c1707c51044a42361a8f06b76d37c96930a61049 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 9, "if" => 17, "block" => 21];
        $filters = ["clean_class" => 12, "first" => 23, "render" => 39];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block'],
                ['clean_class', 'first', 'render'],
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
        // line 7
        echo "
";
        // line 9
        $context["classes"] = [0 => "block", 1 => "action-block", 2 => ("block-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute(        // line 12
($context["configuration"] ?? null), "provider", [])))), 3 => ("block-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 13
($context["plugin_id"] ?? null))))];
        // line 16
        echo "<div class=\"cta-";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_cta_format", []), "#items", [], "array"), "value", [])), "html", null, true);
        echo "\">
<div";
        // line 17
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
        echo " ";
        if (($context["block_style"] ?? null)) {
            echo "style=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["block_style"] ?? null)), "html", null, true);
            echo "\"";
        }
        echo ">
<div class=\"container-wrap clearfix\">
  ";
        // line 19
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null)), "html", null, true);
        echo "
  ";
        // line 20
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null)), "html", null, true);
        echo "
  ";
        // line 21
        $this->displayBlock('content', $context, $blocks);
        // line 55
        echo "</div>
</div>
</div>";
    }

    // line 21
    public function block_content($context, array $blocks = [])
    {
        // line 22
        echo "
 ";
        // line 23
        if (($this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_cta_format", []), "#items", [], "array"), "getValue", [], "method")), "value", []) == "style1")) {
            echo " 
\t<div class=\"cta-wrap action-block-1 text-center\">
\t  ";
            // line 25
            if (($context["label"] ?? null)) {
                // line 26
                echo "\t\t<div class=\"block-title-wrap clearfix\">
\t\t<div class=\"block-title-content\">
\t\t";
                // line 28
                if ((($context["block_title_style"] ?? null) == "block-title-2")) {
                    // line 29
                    echo "\t\t";
                    if (($context["block_subtitle"] ?? null)) {
                        echo "<h5 class=\"block-subtitle\">";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["block_subtitle"] ?? null)), "html", null, true);
                        echo "</h5>";
                    }
                    // line 30
                    echo "\t\t<h2";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["title_attributes"] ?? null), "addClass", [0 => "block-title"], "method")), "html", null, true);
                    echo ">";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null)), "html", null, true);
                    echo "</h2>
\t\t";
                } else {
                    // line 32
                    echo "\t\t<h2";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["title_attributes"] ?? null), "addClass", [0 => "block-title"], "method")), "html", null, true);
                    echo ">";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null)), "html", null, true);
                    echo "</h2>
\t\t";
                    // line 33
                    if (($context["block_subtitle"] ?? null)) {
                        echo "<h5 class=\"block-subtitle\">";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["block_subtitle"] ?? null)), "html", null, true);
                        echo "</h5>";
                    }
                    // line 34
                    echo "\t\t";
                }
                // line 35
                echo "\t\t</div>
\t\t</div>
\t  ";
            }
            // line 38
            echo "\t\t<div class=\"cta-text margin-bottom-20\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "body", [])), "html", null, true);
            echo "</div>
\t\t";
            // line 39
            if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_link", []))) {
                // line 40
                echo "\t\t<div class=\"nav menu cta-link\"><a href=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_link", []), 0, []), "#url", [], "array")), "html", null, true);
                echo "\" class=\"button\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_link", []), 0, []), "#title", [], "array")), "html", null, true);
                echo "</a></div>
\t\t";
            }
            // line 42
            echo "\t</div>

 ";
        } else {
            // line 44
            echo " 
\t<div class=\"cta-wrap action-block-2 row\">
\t\t<div class=\"col-sm-9 cta-text\">";
            // line 46
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "body", [])), "html", null, true);
            echo "</div>
\t\t";
            // line 47
            if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_link", []))) {
                // line 48
                echo "\t\t<div class=\"nav menu col-sm-3 text-middle cta-link\"><a href=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_link", []), 0, []), "#url", [], "array")), "html", null, true);
                echo "\" class=\"button\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_link", []), 0, []), "#title", [], "array")), "html", null, true);
                echo "</a></div>
\t\t";
            }
            // line 50
            echo "\t</div>

 ";
        }
        // line 53
        echo "
  ";
    }

    public function getTemplateName()
    {
        return "themes/pana/templates/block/block--call-to-action.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 53,  188 => 50,  180 => 48,  178 => 47,  174 => 46,  170 => 44,  165 => 42,  157 => 40,  155 => 39,  150 => 38,  145 => 35,  142 => 34,  136 => 33,  129 => 32,  121 => 30,  114 => 29,  112 => 28,  108 => 26,  106 => 25,  101 => 23,  98 => 22,  95 => 21,  89 => 55,  87 => 21,  83 => 20,  79 => 19,  68 => 17,  63 => 16,  61 => 13,  60 => 12,  59 => 9,  56 => 7,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/pana/templates/block/block--call-to-action.html.twig", "C:\\xampp\\htdocs\\dev\\projects\\ltux\\template-site\\draft1\\themes\\pana\\templates\\block\\block--call-to-action.html.twig");
    }
}
