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

/* themes/pana/templates/node/node--slide.html.twig */
class __TwigTemplate_f537e400968f1e98879b67294ccbf056dab68f307ffd56e5c86d810162192c63 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 11];
        $filters = ["render" => 16];
        $functions = ["file_url" => 10];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['render'],
                ['file_url']
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
        echo "<div ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null)), "html", null, true);
        echo " >
  ";
        // line 8
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null)), "html", null, true);
        echo "
  ";
        // line 9
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null)), "html", null, true);
        echo "
\t<div class=\"slide-image\"><img src=\"";
        // line 10
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), [$this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_image", []), 0, []), "#item", [], "array"), "entity", []), "uri", []), "value", []))]), "html", null, true);
        echo "\" alt=\"";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_image", []), 0, []), "#item", [], "array"), "alt", [])), "html", null, true);
        echo "\"/></div>
\t";
        // line 11
        if ((($this->getAttribute(($context["content"] ?? null), "field_heading_text", []) || $this->getAttribute(($context["content"] ?? null), "body", [])) || $this->getAttribute(($context["content"] ?? null), "field_link", []))) {
            // line 12
            echo "\t<div class=\"slide-content-wrap\">
\t\t<div class=\"container slide-wrap\">
\t\t<div class=\"slide-content ";
            // line 14
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_text_color", []), "value", [])), "html", null, true);
            echo "\">
\t\t<div class=\"slide-content-main ";
            // line 15
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_content_placement", []), "value", [])), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_text_align", []), "value", [])), "html", null, true);
            echo "\">
\t\t";
            // line 16
            if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_timer", []))) {
                // line 17
                echo "\t\t<div class=\"countdown-wrap\" data-animation-in=\"bounceInDown\" data-animation-out=\"animate-out slideOutUp\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_timer", [])), "html", null, true);
                echo "</div>
\t\t";
            }
            // line 19
            echo "\t\t";
            if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_pre_heading_text", []))) {
                // line 20
                echo "\t\t<div class=\"pre-heading-text\" data-animation-in=\"bounceInDown\" data-animation-out=\"animate-out slideOutUp\">
\t\t\t";
                // line 21
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_pre_heading_text", [])), "html", null, true);
                echo "
\t\t</div>
\t\t";
            }
            // line 24
            echo "\t\t";
            if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_heading_text", []))) {
                // line 25
                echo "\t\t<div class=\"heading-text\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_heading_text", [])), "html", null, true);
                echo "</div>
\t\t";
            }
            // line 26
            echo "\t\t
\t\t";
            // line 27
            if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "body", []))) {
                // line 28
                echo "\t\t<div class=\"slide-content-body\" data-animation-in=\"slideInRight\" data-animation-out=\"animate-out fadeOut\">
\t\t\t";
                // line 29
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "body", [])), "html", null, true);
                echo "
\t\t</div>
\t\t";
            }
            // line 32
            echo "\t\t";
            if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_link", []))) {
                // line 33
                echo "\t\t<div class=\"nav menu slide-button\" data-animation-in=\"bounceInUp\" data-animation-out=\"animate-out slideOutDown\">
\t\t<a class=\"slide-button-link button\" href=\"";
                // line 34
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_link", []), 0, []), "#url", [], "array")), "html", null, true);
                echo "\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_link", []), 0, []), "#title", [], "array")), "html", null, true);
                echo "</a>
\t\t</div>
\t\t";
            }
            // line 37
            echo "\t\t</div>
\t\t</div>
\t\t</div>
\t</div>
\t";
        }
        // line 42
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "themes/pana/templates/node/node--slide.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 42,  147 => 37,  139 => 34,  136 => 33,  133 => 32,  127 => 29,  124 => 28,  122 => 27,  119 => 26,  113 => 25,  110 => 24,  104 => 21,  101 => 20,  98 => 19,  92 => 17,  90 => 16,  84 => 15,  80 => 14,  76 => 12,  74 => 11,  68 => 10,  64 => 9,  60 => 8,  55 => 7,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/pana/templates/node/node--slide.html.twig", "C:\\xampp\\htdocs\\dev\\projects\\ltux\\template-site\\draft1\\themes\\pana\\templates\\node\\node--slide.html.twig");
    }
}
