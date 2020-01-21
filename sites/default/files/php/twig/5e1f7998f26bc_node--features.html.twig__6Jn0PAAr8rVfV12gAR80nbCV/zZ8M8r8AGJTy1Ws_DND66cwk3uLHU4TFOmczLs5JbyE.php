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

/* themes/pana/templates/node/node--features.html.twig */
class __TwigTemplate_972e720482ea7ea885855ae6a5b49121ff4b031089f45bc7b835280d0171a763 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 8, "if" => 19];
        $filters = ["clean_class" => 10, "render" => 24];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
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
        // line 8
        $context["classes"] = [0 => "node", 1 => ("node-type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute(        // line 10
($context["node"] ?? null), "bundle", [])))), 2 => "node-content", 3 => "feat-node-content", 4 => (($this->getAttribute(        // line 13
($context["node"] ?? null), "isPromoted", [], "method")) ? ("node--promoted") : ("")), 5 => (($this->getAttribute(        // line 14
($context["node"] ?? null), "isSticky", [], "method")) ? ("node--sticky") : ("")), 6 => (( !$this->getAttribute(        // line 15
($context["node"] ?? null), "isPublished", [], "method")) ? ("node--unpublished") : (""))];
        // line 18
        echo "
";
        // line 19
        if (($context["teaser"] ?? null)) {
            // line 20
            echo "<div";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => "feat-container feat-teaser"], "method")), "html", null, true);
            echo ">
\t";
            // line 21
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null)), "html", null, true);
            echo "
\t";
            // line 22
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null)), "html", null, true);
            echo "
\t<div class=\"text-center feat-image\">
\t";
            // line 24
            if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_image", []))) {
                // line 25
                echo "\t<div class=\"feat-img\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_image", [])), "html", null, true);
                echo "</div>
\t";
            }
            // line 27
            echo "\t<div class=\"feat-content\">
\t<div class=\"feat-content-container\">
\t\t<div class=\"feat-meta-wrap\">
\t\t<div class=\"feat-meta\">
\t\t";
            // line 31
            if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_icon", []))) {
                // line 32
                echo "\t\t<div class=\"feat-icon\"><i class=\"fa ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_icon", []), "value", [])), "html", null, true);
                echo "\"></i></div>
\t\t";
            }
            // line 34
            echo "\t\t<h5 class=\"mb-3\"><a href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null)), "html", null, true);
            echo "\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null)), "html", null, true);
            echo "</a></h5>
\t\t<div class=\"feat-body\">";
            // line 35
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "body", [])), "html", null, true);
            echo "</div>
\t\t</div>
\t\t<div class=\"post-link\">
\t\t<a href=\"";
            // line 38
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null)), "html", null, true);
            echo "\" class=\"margin-top-20\">More Details <i class=\"fa fa-angle-double-right\"></i></a>
\t\t</div>
\t\t</div>
\t</div>
\t</div>
\t</div>
</div>
";
        } else {
            // line 46
            echo "<div";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
            echo ">
  ";
            // line 47
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null)), "html", null, true);
            echo "
  ";
            // line 48
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null)), "html", null, true);
            echo "
\t";
            // line 49
            if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_image", []))) {
                // line 50
                echo "\t<div class=\"node-feat-image\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_image", [])), "html", null, true);
                echo "</div>
\t";
            }
            // line 52
            echo "\t<h2 class=\"post-title\">";
            if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_icon", []))) {
                echo "<i class=\"fa ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_icon", []), "value", [])), "html", null, true);
                echo "\"></i> ";
            }
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null)), "html", null, true);
            echo "</h2>
\t<div class=\"post-content\">";
            // line 53
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "body", [])), "html", null, true);
            echo "</div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/pana/templates/node/node--features.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 53,  147 => 52,  141 => 50,  139 => 49,  135 => 48,  131 => 47,  126 => 46,  115 => 38,  109 => 35,  102 => 34,  96 => 32,  94 => 31,  88 => 27,  82 => 25,  80 => 24,  75 => 22,  71 => 21,  66 => 20,  64 => 19,  61 => 18,  59 => 15,  58 => 14,  57 => 13,  56 => 10,  55 => 8,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/pana/templates/node/node--features.html.twig", "C:\\xampp\\htdocs\\dev\\projects\\ltux\\template-site\\draft1\\themes\\pana\\templates\\node\\node--features.html.twig");
    }
}
