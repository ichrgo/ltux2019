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

/* themes/pana/templates/node/node--portfolio.html.twig */
class __TwigTemplate_0b68508e49344667bd83baae69528970c07cd64fdf8533889d98a5536ce8b5dc extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 8, "if" => 17];
        $filters = ["clean_class" => 10, "render" => 45, "first" => 46, "t" => 55];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['clean_class', 'render', 'first', 't'],
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
        // line 8
        $context["classes"] = [0 => "node", 1 => ("node-type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute(        // line 10
($context["node"] ?? null), "bundle", [])))), 2 => "node-content", 3 => (($this->getAttribute(        // line 12
($context["node"] ?? null), "isPromoted", [], "method")) ? ("node--promoted") : ("")), 4 => (($this->getAttribute(        // line 13
($context["node"] ?? null), "isSticky", [], "method")) ? ("node--sticky") : ("")), 5 => (( !$this->getAttribute(        // line 14
($context["node"] ?? null), "isPublished", [], "method")) ? ("node--unpublished") : (""))];
        // line 17
        if (($context["teaser"] ?? null)) {
            // line 18
            echo "<div";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null)), "html", null, true);
            echo ">
  ";
            // line 19
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null)), "html", null, true);
            echo "
  ";
            // line 20
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null)), "html", null, true);
            echo "
  
<div class=\"portfolio\">  
\t<div class=\"portfolio-item\">
\t\t<div class=\"portfolio-img\">
\t\t";
            // line 25
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_image", []), 0, [])), "html", null, true);
            echo "
\t\t</div>
\t\t<div class=\"portfolio-overlay\">
\t\t\t<div class=\"portfolio-label\">
\t\t\t<h3 class=\"portfolio-title\"><a href=\"";
            // line 29
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null)), "html", null, true);
            echo "\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null)), "html", null, true);
            echo "</a></h3>
\t\t\t<div class=\"portfolio-term\">";
            // line 30
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_project_category", [])), "html", null, true);
            echo "</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>  
  
</div>

";
        } else {
            // line 39
            echo "
<div";
            // line 40
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
            echo ">
  ";
            // line 41
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null)), "html", null, true);
            echo "
  ";
            // line 42
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null)), "html", null, true);
            echo "
\t<div class=\"row\">
\t\t<div class=\"col-sm-7\">
\t\t";
            // line 45
            if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_image", []))) {
                // line 46
                echo "\t\t\t";
                if (($this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_portfolio_format", []), "#items", [], "array"), "getValue", [], "method")), "value", []) == "1")) {
                    // line 47
                    echo "\t\t\t\t<div class=\"post-image\"><div class=\"slide-carousel owl-carousel\" data-nav=\"true\" data-items=\"1\" data-dots=\"true\" data-autoplay=\"true\" data-loop=\"true\">";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_image", [])), "html", null, true);
                    echo "</div></div>\t
\t\t\t";
                } else {
                    // line 49
                    echo "\t\t\t\t<div class=\"post-image\">";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_image", []), 0, [])), "html", null, true);
                    echo "</div>
\t\t\t";
                }
                // line 50
                echo "\t
\t\t";
            }
            // line 52
            echo "\t\t</div>
\t\t<div class=\"col-sm-5\">
\t\t\t";
            // line 54
            if ($this->getAttribute(($context["content"] ?? null), "body", [])) {
                // line 55
                echo "\t\t\t<h3 class=\"portfolio-title-detail\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Description"));
                echo "</h3>
\t\t\t<div class=\"portfolio-body\">";
                // line 56
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "body", [])), "html", null, true);
                echo "</div>
\t\t\t";
            }
            // line 58
            echo "\t\t\t<div class=\"portfolio-meta\">
\t\t\t<h3 class=\"portfolio-title-detail\">";
            // line 59
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Details"));
            echo "</h3>
\t\t\t";
            // line 60
            if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_client", []))) {
                // line 61
                echo "\t\t\t<div class=\"portfolio-meta-item\"><span class=\"portfolio-meta-item-title\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Client:"));
                echo "</span> ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_client", [])), "html", null, true);
                echo "</div>
\t\t\t";
            }
            // line 63
            echo "\t\t\t";
            if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_project_category", []))) {
                // line 64
                echo "\t\t\t<div class=\"portfolio-meta-item\"><span class=\"portfolio-meta-item-title\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Category:"));
                echo "</span> ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_project_category", [])), "html", null, true);
                echo "</div>
\t\t\t";
            }
            // line 66
            echo "\t\t\t";
            if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_link", []))) {
                // line 67
                echo "\t\t\t<a target=\"_blank\" href=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_link", [])), "html", null, true);
                echo "\" class=\"button\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("View Project"));
                echo "</a>
\t\t\t";
            }
            // line 69
            echo "\t\t\t</div>
\t\t</div>
\t</div>
\t</div>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/pana/templates/node/node--portfolio.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 69,  190 => 67,  187 => 66,  179 => 64,  176 => 63,  168 => 61,  166 => 60,  162 => 59,  159 => 58,  154 => 56,  149 => 55,  147 => 54,  143 => 52,  139 => 50,  133 => 49,  127 => 47,  124 => 46,  122 => 45,  116 => 42,  112 => 41,  108 => 40,  105 => 39,  93 => 30,  87 => 29,  80 => 25,  72 => 20,  68 => 19,  63 => 18,  61 => 17,  59 => 14,  58 => 13,  57 => 12,  56 => 10,  55 => 8,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/pana/templates/node/node--portfolio.html.twig", "C:\\xampp\\htdocs\\dev\\projects\\ltux\\template-site\\draft1\\themes\\pana\\templates\\node\\node--portfolio.html.twig");
    }
}
