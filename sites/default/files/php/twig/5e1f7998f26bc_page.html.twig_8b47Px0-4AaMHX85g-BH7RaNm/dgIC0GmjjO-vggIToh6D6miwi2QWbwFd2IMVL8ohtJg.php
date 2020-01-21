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

/* themes/pana/templates/layout/page.html.twig */
class __TwigTemplate_0db96de310fa77e539d18b6b49c3dc3ee116b7db5f349371764b5086932cf769 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["include" => 48, "if" => 50];
        $filters = ["render" => 89];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['include', 'if'],
                ['render'],
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
        // line 46
        echo "<div id=\"wrapper\" class=\"wrapper ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["site_layout"] ?? null)), "html", null, true);
        echo " ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_style"] ?? null)), "html", null, true);
        echo "\">
<div class=\"layout-wrap ";
        // line 47
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sticky_header"] ?? null)), "html", null, true);
        echo "\">
\t";
        // line 48
        $this->loadTemplate("@pana/layout/header.html.twig", "themes/pana/templates/layout/page.html.twig", 48)->display($context);
        // line 49
        echo "
\t";
        // line 50
        if ($this->getAttribute(($context["page"] ?? null), "slider", [])) {
            // line 51
            echo "\t<!-- Slider -->
\t<section id=\"slider\" class=\"clearfix\">        
\t\t<div id=\"slider-wrap\">
\t\t\t<div class=\"container-fluid\">
\t\t\t\t<div class=\"row\">
\t\t\t\t";
            // line 56
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "slider", [])), "html", null, true);
            echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
\t<!-- End Slider -->
\t";
        }
        // line 63
        echo "
\t";
        // line 64
        if (($this->getAttribute(($context["page"] ?? null), "page_title", []) &&  !($context["is_front"] ?? null))) {
            // line 65
            echo "\t<!-- Page Title -->
\t<section id=\"page-title\" class=\"page-title\">
\t\t<div class=\"container\">
\t\t\t";
            // line 68
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "page_title", [])), "html", null, true);
            echo "
\t\t\t";
            // line 69
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "breadcrumb", [])), "html", null, true);
            echo "
\t\t</div>
\t</section>
\t  <!-- End Page Title -->
\t";
        }
        // line 74
        echo "

\t";
        // line 76
        if ($this->getAttribute(($context["page"] ?? null), "content_wide_top", [])) {
            // line 77
            echo "\t<!-- Start content top -->
\t<section id=\"content-wide-top\" class=\"content-wide\">        
\t\t";
            // line 79
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content_wide_top", [])), "html", null, true);
            echo "
\t</section>
\t<!-- End content top -->
\t";
        }
        // line 83
        echo "
\t";
        // line 84
        if ((( !twig_test_empty($this->getAttribute(($context["page"] ?? null), "content", [])) || $this->getAttribute(($context["page"] ?? null), "sidebar_first", [])) || $this->getAttribute(($context["page"] ?? null), "sidebar_second", []))) {
            // line 85
            echo "\t<!-- layout -->
\t<section id=\"page-wrapper\" class=\"page-wrapper\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row content-layout\">
\t\t\t  ";
            // line 89
            if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["page"] ?? null), "sidebar_first", []))) {
                // line 90
                echo "\t\t\t  <!--- Start Left SideBar -->
\t\t\t\t<div class =\"";
                // line 91
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebarfirst"] ?? null)), "html", null, true);
                echo "  sidebar\">
\t\t\t\t\t";
                // line 92
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])), "html", null, true);
                echo "
\t\t\t\t</div>
\t\t\t  <!---End Right SideBar -->
\t\t\t  ";
            }
            // line 96
            echo "
\t\t\t  ";
            // line 97
            if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["page"] ?? null), "content", []))) {
                // line 98
                echo "\t\t\t  <!--- Start content -->
\t\t\t\t<div class=\"";
                // line 99
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["contentlayout"] ?? null)), "html", null, true);
                echo "  main-content\">
\t\t\t\t\t";
                // line 100
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
                echo "
\t\t\t\t</div>
\t\t\t  <!---End content -->
\t\t\t  ";
            }
            // line 104
            echo "
\t\t\t  ";
            // line 105
            if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["page"] ?? null), "sidebar_second", []))) {
                // line 106
                echo "\t\t\t  <!--- Start Right SideBar -->
\t\t\t\t<div class=\"";
                // line 107
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebarsecond"] ?? null)), "html", null, true);
                echo "  sidebar\">
\t\t\t\t\t";
                // line 108
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])), "html", null, true);
                echo "
\t\t\t\t</div>
\t\t\t  <!---End Right SideBar -->
\t\t\t  ";
            }
            // line 112
            echo "\t\t\t</div>
\t\t</div>
\t</section>
\t<!-- End layout -->
\t";
        }
        // line 117
        echo "
\t";
        // line 118
        if ($this->getAttribute(($context["page"] ?? null), "content_wide", [])) {
            // line 119
            echo "\t<!-- Start content wide -->
\t<section id=\"content-wide\" class=\"content-wide\">        
\t\t";
            // line 121
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content_wide", [])), "html", null, true);
            echo "
\t</section>
\t<!-- End content wide -->
\t";
        }
        // line 125
        echo "
\t";
        // line 126
        $this->loadTemplate("@pana/layout/footer.html.twig", "themes/pana/templates/layout/page.html.twig", 126)->display($context);
        // line 127
        echo "</div>
</div>
";
        // line 129
        if (($context["preloader"] ?? null)) {
            // line 130
            echo "<div class=\"preloader\">
\t<div class=\"preloader-spinner\"></div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/pana/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  228 => 130,  226 => 129,  222 => 127,  220 => 126,  217 => 125,  210 => 121,  206 => 119,  204 => 118,  201 => 117,  194 => 112,  187 => 108,  183 => 107,  180 => 106,  178 => 105,  175 => 104,  168 => 100,  164 => 99,  161 => 98,  159 => 97,  156 => 96,  149 => 92,  145 => 91,  142 => 90,  140 => 89,  134 => 85,  132 => 84,  129 => 83,  122 => 79,  118 => 77,  116 => 76,  112 => 74,  104 => 69,  100 => 68,  95 => 65,  93 => 64,  90 => 63,  80 => 56,  73 => 51,  71 => 50,  68 => 49,  66 => 48,  62 => 47,  55 => 46,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/pana/templates/layout/page.html.twig", "C:\\xampp\\htdocs\\dev\\projects\\ltux\\template-site\\draft1\\themes\\pana\\templates\\layout\\page.html.twig");
    }
}
