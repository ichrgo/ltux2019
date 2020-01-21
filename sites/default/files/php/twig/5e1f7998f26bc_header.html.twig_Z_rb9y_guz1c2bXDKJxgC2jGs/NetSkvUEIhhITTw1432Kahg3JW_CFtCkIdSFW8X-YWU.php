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

/* @pana/layout/header.html.twig */
class __TwigTemplate_5d8bda89061439257432da944cd25296124e3b41ce9cf668801da1114a50e046 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 7];
        $filters = [];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
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
        // line 2
        echo "<!-- Header Start -->
<header class=\"header\">
\t<div class=\"header-content\">
\t\t<div class=\"navbar navbar-expand-md navbar-dark ";
        // line 5
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["nav_color"] ?? null)), "html", null, true);
        echo "\">
\t\t\t<div class=\"container\">
\t\t\t\t";
        // line 7
        if ($this->getAttribute(($context["page"] ?? null), "branding", [])) {
            // line 8
            echo "\t\t\t\t<div class=\"navbar-brand header-brand\">
\t\t\t\t\t";
            // line 9
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "branding", [])), "html", null, true);
            echo "
\t\t\t\t</div>
\t\t\t\t";
        }
        // line 12
        echo "
\t\t\t\t";
        // line 13
        if (($this->getAttribute(($context["page"] ?? null), "primary_menu", []) || ($context["header_link_url"] ?? null))) {
            // line 14
            echo "\t\t\t\t<div id=\"main-menu\" class=\"primary-navbar collapse navbar-collapse ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["nav_align"] ?? null)), "html", null, true);
            echo "\">
\t\t\t\t";
            // line 15
            if ($this->getAttribute(($context["page"] ?? null), "primary_menu", [])) {
                // line 16
                echo "\t\t\t\t";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "primary_menu", [])), "html", null, true);
                echo "
\t\t\t\t";
            }
            // line 18
            echo "\t\t\t\t\t
\t\t\t\t";
            // line 19
            if (($context["header_link_url"] ?? null)) {
                // line 20
                echo "\t\t\t\t<div class=\"header-link-button\">
\t\t\t\t<div class=\"nav menu\">
\t\t\t\t\t<a class=\"button\" href=\"";
                // line 22
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_link_url"] ?? null)), "html", null, true);
                echo "\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_link_text"] ?? null)), "html", null, true);
                echo "</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
            }
            // line 26
            echo "\t\t\t\t</div>
\t\t\t\t";
        }
        // line 28
        echo "\t\t\t\t\t\t
\t\t\t\t";
        // line 29
        if (($this->getAttribute(($context["page"] ?? null), "user_account", []) || $this->getAttribute(($context["page"] ?? null), "cart", []))) {
            // line 30
            echo "\t\t\t\t<div class=\"header-element icon-element\">
\t\t\t\t\t<div class=\"header-element-icon\">
\t\t\t\t\t";
            // line 32
            if ($this->getAttribute(($context["page"] ?? null), "user_account", [])) {
                // line 33
                echo "\t\t\t\t\t\t<div class=\"header-element-item header-element-account\">
\t\t\t\t\t\t<button type=\"button\" class=\"dropdown-toggle header-icon account-icon\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t<span class=\"ion-android-contact\"></span>
\t\t\t\t\t\t</button>
\t\t\t\t\t\t<div id=\"user-account-block-wrap\" class=\"dropdown-menu user-account-block-wrap\">
\t\t\t\t\t\t";
                // line 38
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "user_account", [])), "html", null, true);
                echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>\t\t\t\t
\t\t\t\t\t";
            }
            // line 42
            echo "\t\t\t\t\t
\t\t\t\t\t";
            // line 43
            if ($this->getAttribute(($context["page"] ?? null), "cart", [])) {
                // line 44
                echo "\t\t\t\t\t\t<div class=\"header-element-item header-element-cart\">
\t\t\t\t\t\t\t<div class=\"header-icon text-xs-left header-cart\">";
                // line 45
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "cart", [])), "html", null, true);
                echo "</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 48
            echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
        }
        // line 51
        echo "\t\t\t\t
\t\t\t\t";
        // line 52
        if ($this->getAttribute(($context["page"] ?? null), "header", [])) {
            // line 53
            echo "\t\t\t\t<div class=\"header-section\">
\t\t\t\t";
            // line 54
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header", [])), "html", null, true);
            echo "
\t\t\t\t</div>
\t\t\t\t";
        }
        // line 57
        echo "\t\t\t\t
\t\t\t\t<button class=\"navbar-toggler nav-button\" type=\"button\" data-toggle=\"collapse\" data-target=\"#main-menu\" aria-controls=\"main-menu\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
\t\t\t\t\t<span class=\"navbar-toggler-icon\"></span>
\t\t\t\t</button>
\t\t\t</div>
\t\t</div>
\t</div>
</header>
<!-- Header End -->
";
    }

    public function getTemplateName()
    {
        return "@pana/layout/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 57,  168 => 54,  165 => 53,  163 => 52,  160 => 51,  155 => 48,  149 => 45,  146 => 44,  144 => 43,  141 => 42,  134 => 38,  127 => 33,  125 => 32,  121 => 30,  119 => 29,  116 => 28,  112 => 26,  103 => 22,  99 => 20,  97 => 19,  94 => 18,  88 => 16,  86 => 15,  81 => 14,  79 => 13,  76 => 12,  70 => 9,  67 => 8,  65 => 7,  60 => 5,  55 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@pana/layout/header.html.twig", "C:\\xampp\\htdocs\\dev\\projects\\ltux\\template-site\\draft1\\themes\\pana\\templates\\layout\\header.html.twig");
    }
}
