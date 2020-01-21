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

/* themes/pana/templates/block/block--google-map.html.twig */
class __TwigTemplate_2132f6e9fab7d408cb4629affd39eafc8929236df3918b155d14839d537bdb6f extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 29, "block" => 42, "if" => 47];
        $filters = ["clean_class" => 32, "render" => 47];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block', 'if'],
                ['clean_class', 'render'],
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
        // line 29
        $context["classes"] = [0 => "block", 1 => "map-block", 2 => ("block-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute(        // line 32
($context["configuration"] ?? null), "provider", [])))), 3 => ("block-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 33
($context["plugin_id"] ?? null))))];
        // line 36
        echo "
<div";
        // line 37
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
        echo ">
<div class=\"container-wrap clearfix\">

  ";
        // line 40
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null)), "html", null, true);
        echo "
  ";
        // line 41
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null)), "html", null, true);
        echo "
  ";
        // line 42
        $this->displayBlock('content', $context, $blocks);
        // line 79
        echo "</div>
</div>";
    }

    // line 42
    public function block_content($context, array $blocks = [])
    {
        // line 43
        echo "
\t  <div class=\"block-content map-block-content\">
\t  ";
        // line 45
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_google_map", [])), "html", null, true);
        echo "
\t  
\t  ";
        // line 47
        if (((($context["label"] ?? null) || $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_image", []))) || $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "body", [])))) {
            // line 48
            echo "\t  <div class=\"alert alert-dismissable map-block-content-wrap\">
\t  <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
\t  
\t  ";
            // line 51
            if (($context["label"] ?? null)) {
                // line 52
                echo "\t   <div class=\"row block-title-wrap\">
\t\t";
                // line 53
                if ((($context["block_title_style"] ?? null) == "block-title-2")) {
                    // line 54
                    echo "\t\t";
                    if (($context["block_subtitle"] ?? null)) {
                        echo "<h5 class=\"block-subtitle\">";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["block_subtitle"] ?? null)), "html", null, true);
                        echo "</h5>";
                    }
                    // line 55
                    echo "\t\t<h2";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["title_attributes"] ?? null), "addClass", [0 => "block-title"], "method")), "html", null, true);
                    echo ">";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null)), "html", null, true);
                    echo "</h2>
\t\t";
                } else {
                    // line 57
                    echo "\t\t<h2";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["title_attributes"] ?? null), "addClass", [0 => "block-title"], "method")), "html", null, true);
                    echo ">";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null)), "html", null, true);
                    echo "</h2>
\t\t";
                    // line 58
                    if (($context["block_subtitle"] ?? null)) {
                        echo "<h5 class=\"block-subtitle\">";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["block_subtitle"] ?? null)), "html", null, true);
                        echo "</h5>";
                    }
                    // line 59
                    echo "\t\t";
                }
                // line 60
                echo "\t   </div>
\t  ";
            }
            // line 62
            echo "\t  
\t  ";
            // line 63
            if (($this->getAttribute(($context["content"] ?? null), "field_image", []) || $this->getAttribute(($context["content"] ?? null), "body", []))) {
                // line 64
                echo "\t  <div class=\"row map-block-meta\">
\t  ";
                // line 65
                if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_image", []))) {
                    // line 66
                    echo "\t  <div class=\"col-md-5 map-block-image\">";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_image", [])), "html", null, true);
                    echo "</div>
\t  ";
                }
                // line 68
                echo "\t  ";
                if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "body", []))) {
                    // line 69
                    echo "\t  <div class=\"col-md-7 map-block-body\">";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "body", [])), "html", null, true);
                    echo "</div>
\t  ";
                }
                // line 71
                echo "\t  </div>
\t  ";
            }
            // line 73
            echo "\t  </div>
\t  ";
        }
        // line 75
        echo "\t  
\t  </div>

";
    }

    public function getTemplateName()
    {
        return "themes/pana/templates/block/block--google-map.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 75,  174 => 73,  170 => 71,  164 => 69,  161 => 68,  155 => 66,  153 => 65,  150 => 64,  148 => 63,  145 => 62,  141 => 60,  138 => 59,  132 => 58,  125 => 57,  117 => 55,  110 => 54,  108 => 53,  105 => 52,  103 => 51,  98 => 48,  96 => 47,  91 => 45,  87 => 43,  84 => 42,  79 => 79,  77 => 42,  73 => 41,  69 => 40,  63 => 37,  60 => 36,  58 => 33,  57 => 32,  56 => 29,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/pana/templates/block/block--google-map.html.twig", "C:\\xampp\\htdocs\\dev\\projects\\ltux\\template-site\\draft1\\themes\\pana\\templates\\block\\block--google-map.html.twig");
    }
}
