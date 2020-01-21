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

/* themes/pana/templates/commerce/commerce-product--teaser.html.twig */
class __TwigTemplate_e48cdb00ba26b6e992b0e4e959750a4a132f8627d4671f33ccc4466b1689187e extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 23, "if" => 32];
        $filters = [];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
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
        // line 23
        $context["classes"] = [0 => "product-teaser"];
        // line 27
        echo "
<div";
        // line 28
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
        echo ">

<div class=\"post-image product-image\">
";
        // line 31
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["product"] ?? null), "field_image", []), 0, [])), "html", null, true);
        echo "
";
        // line 32
        if ($this->getAttribute($this->getAttribute(($context["product"] ?? null), "field_image", []), 1, [])) {
            // line 33
            echo "<div class=\"product-image-overlay\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["product"] ?? null), "field_image", []), 1, [])), "html", null, true);
            echo "</div>
";
        }
        // line 35
        echo "<div class=\"text-center product-btn-wrap\">
<div class=\"product-btn product-view\"><a href=\"";
        // line 36
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["product_url"] ?? null)), "html", null, true);
        echo "\" class=\"product-btn-link use-ajax\" data-dialog-options=\"{&quot;width&quot;:680}\" data-dialog-type=\"modal\"><span class=\"product-btn-title\">Quick View</span></a></div>
<div class=\"product-btn product-add-cart\">";
        // line 37
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["product"] ?? null), "variations", [])), "html", null, true);
        echo "</div>
</div>
</div>

<div class=\"product-meta-wrap\">
<div class=\"product-meta\">
<div class=\"product-title\"><a href=\"";
        // line 43
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["product_url"] ?? null)), "html", null, true);
        echo "\">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["product"] ?? null), "title", [])), "html", null, true);
        echo "</a></div>
<div class=\"product-price-wrap\">
\t<div class=\"product-price\">";
        // line 45
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["product"] ?? null), "variation_price", [])), "html", null, true);
        echo "</div> 
</div>
</div>
</div>

</div>
";
    }

    public function getTemplateName()
    {
        return "themes/pana/templates/commerce/commerce-product--teaser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 45,  94 => 43,  85 => 37,  81 => 36,  78 => 35,  72 => 33,  70 => 32,  66 => 31,  60 => 28,  57 => 27,  55 => 23,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/pana/templates/commerce/commerce-product--teaser.html.twig", "C:\\xampp\\htdocs\\dev\\projects\\ltux\\template-site\\draft1\\themes\\pana\\templates\\commerce\\commerce-product--teaser.html.twig");
    }
}
