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

/* themes/pana/templates/node/node--blog.html.twig */
class __TwigTemplate_ccc640bd4d582178e97629f5ec7bd9fb60ab9b7c6f9423d4e7db3606b667ffe9 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 8, "if" => 19];
        $filters = ["clean_class" => 10, "first" => 24, "render" => 25, "date" => 39, "t" => 100];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['clean_class', 'first', 'render', 'date', 't'],
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
($context["node"] ?? null), "bundle", [])))), 2 => "node-content", 3 => "post-wrapper", 4 => (($this->getAttribute(        // line 13
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
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => "blog-post-teaser post-row"], "method")), "html", null, true);
            echo " >
  ";
            // line 21
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null)), "html", null, true);
            echo "
  ";
            // line 22
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null)), "html", null, true);
            echo "
\t<div class=\"post-thumb\">
\t";
            // line 24
            if (($this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_blog_format", []), "#items", [], "array"), "getValue", [], "method")), "value", []) == "standard")) {
                // line 25
                echo "\t\t";
                if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_image", []))) {
                    // line 26
                    echo "\t\t<div class=\"post-image\">";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_image", []), 0, [])), "html", null, true);
                    echo "</div>
\t\t";
                }
                // line 27
                echo "\t
\t";
            } elseif (($this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(            // line 28
($context["content"] ?? null), "field_blog_format", []), "#items", [], "array"), "getValue", [], "method")), "value", []) == "slider")) {
                // line 29
                echo "\t\t<div class=\"post-image\">
\t\t<div class=\"slide-carousel owl-carousel\" data-nav=\"true\" data-items=\"1\" data-dots=\"false\" data-autoplay=\"true\" data-loop=\"true\">
\t\t";
                // line 31
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_image", [])), "html", null, true);
                echo "
\t\t</div>
\t\t</div>
\t";
            } elseif (($this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(            // line 34
($context["content"] ?? null), "field_blog_format", []), "#items", [], "array"), "getValue", [], "method")), "value", []) == "video")) {
                // line 35
                echo "\t\t<div class=\"entry-video\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_video", [])), "html", null, true);
                echo "</div>
\t";
            }
            // line 37
            echo "\t<div class=\"post-content-wrap\">
\t\t<div class=\"content-wrap\">
\t\t<div class=\"post-date\"><span class=\"post-date-day\">";
            // line 39
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["node"] ?? null), "createdtime", [])), "j"), "html", null, true);
            echo "</span><span class=\"post-date-month\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["node"] ?? null), "createdtime", [])), "M"), "html", null, true);
            echo "</span></div>
\t\t<div class=\"post-meta-wrap\">
\t\t";
            // line 41
            if (($context["display_submitted"] ?? null)) {
                // line 42
                echo "\t\t\t<div class=\"post-meta\">
\t\t\t<div class=\"post-meta-item post-category\"><i class=\"ion-ios-folder-outline\"></i> ";
                // line 43
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_category", [])), "html", null, true);
                echo "</div>
\t\t\t<div class=\"post-meta-item post-comment\"><i class=\"ion-ios-chatboxes-outline\"></i> ";
                // line 44
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["node"] ?? null), "comment", []), "comment_count", [])), "html", null, true);
                echo " comments</div>
\t\t\t</div>
\t\t";
            }
            // line 47
            echo "\t\t\t<div class=\"post-title-wrap\">
\t\t\t\t<h5 class=\"post-title\"><a href=\"";
            // line 48
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null)), "html", null, true);
            echo "\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null)), "html", null, true);
            echo "</a></h5>
\t\t\t</div>
\t\t</div>
\t\t</div>
\t</div>
\t</div>
\t<div class=\"post-body\">
\t<div class=\"post-body-content\">";
            // line 55
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "body", [])), "html", null, true);
            echo "</div>
\t<a class=\"read-more\" href=\"";
            // line 56
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null)), "html", null, true);
            echo "\"><span class=\"read-more-text\">Read More</span></a>
\t</div>

</div>

";
        } else {
            // line 62
            echo "
<div";
            // line 63
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null), 1 => "blog-post-full"], "method")), "html", null, true);
            echo ">
  ";
            // line 64
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null)), "html", null, true);
            echo "
  ";
            // line 65
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null)), "html", null, true);
            echo "
\t<div class=\"post-media\">
\t";
            // line 67
            if (($this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_blog_format", []), "#items", [], "array"), "getValue", [], "method")), "value", []) == "standard")) {
                // line 68
                echo "\t\t";
                if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_image", []))) {
                    // line 69
                    echo "\t\t\t<div class=\"post-image\">";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_image", []), 0, [])), "html", null, true);
                    echo "</div>
\t\t";
                }
                // line 70
                echo "\t
\t";
            } elseif (($this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(            // line 71
($context["content"] ?? null), "field_blog_format", []), "#items", [], "array"), "getValue", [], "method")), "value", []) == "slider")) {
                // line 72
                echo "\t\t<div class=\"post-image\">
\t\t<div class=\"slide-carousel owl-carousel\" data-nav=\"true\" data-items=\"1\" data-dots=\"true\" data-autoplay=\"true\" data-loop=\"true\" data-margin=\"30\">
\t\t";
                // line 74
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_image", [])), "html", null, true);
                echo "
\t\t</div>
\t\t</div>
\t";
            } elseif (($this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(            // line 77
($context["content"] ?? null), "field_blog_format", []), "#items", [], "array"), "getValue", [], "method")), "value", []) == "video")) {
                // line 78
                echo "\t\t<div class=\"entry-video video\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_video", [])), "html", null, true);
                echo "</div>
\t";
            }
            // line 80
            echo "\t</div>
\t<div class=\"post-content\">
\t\t\t<h3 class=\"post-title\">";
            // line 82
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null)), "html", null, true);
            echo "</h3>
\t\t\t";
            // line 83
            if (($context["display_submitted"] ?? null)) {
                // line 84
                echo "\t\t\t<div class=\"post-meta\">
\t\t\t\t<div class=\"post-meta-item\"><i class=\"ion-ios-clock-outline\"></i> ";
                // line 85
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["node"] ?? null), "createdtime", [])), "j M Y"), "html", null, true);
                echo "</div>
\t\t\t\t";
                // line 86
                if (($context["author_name"] ?? null)) {
                    // line 87
                    echo "\t\t\t\t<div class=\"post-meta-item\"><i class=\"ion-ios-person-outline\"></i> by ";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["author_name"] ?? null)), "html", null, true);
                    echo "</div>
\t\t\t\t";
                }
                // line 89
                echo "\t\t\t\t";
                if ($this->getAttribute(($context["content"] ?? null), "field_category", [])) {
                    // line 90
                    echo "\t\t\t\t<div class=\"post-meta-item\"><i class=\"ion-ios-folder-outline\"></i> ";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_category", [])), "html", null, true);
                    echo "</div>
\t\t\t\t";
                }
                // line 92
                echo "\t\t\t\t";
                if ($this->getAttribute(($context["content"] ?? null), "comment", [])) {
                    // line 93
                    echo "\t\t\t\t<div class=\"post-meta-item\"><i class=\"ion-ios-chatboxes-outline\"></i> ";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["node"] ?? null), "comment", []), "comment_count", [])), "html", null, true);
                    echo " comments</div>
\t\t\t\t";
                }
                // line 95
                echo "\t\t\t\t
\t\t\t</div>
\t\t\t";
            }
            // line 98
            echo "\t\t\t<div class=\"post-body\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "body", [])), "html", null, true);
            echo "</div>
\t\t\t";
            // line 99
            if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_tags", []))) {
                // line 100
                echo "\t\t\t<div class=\"post-tags clearfix\"><i class=\"ion-ios-pricetags-outline\"></i> <span>";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Tags:"));
                echo " </span>";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_tags", [])), "html", null, true);
                echo "</div>
\t\t\t";
            }
            // line 102
            echo "\t\t\t
\t\t\t";
            // line 103
            if ($this->getAttribute(($context["content"] ?? null), "comment", [])) {
                // line 104
                echo "\t\t\t\t<div class=\"post-comment\">
\t\t\t\t<div class=\"post-stats\">
\t\t\t\t<span class=\"comment-label\">";
                // line 106
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Comments"));
                echo "</span> <span class=\"comment-count\">( ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["node"] ?? null), "comment", []), "comment_count", [])), "html", null, true);
                echo " )</span>
\t\t\t\t</div>
\t\t\t\t";
                // line 108
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "comment", [])), "html", null, true);
                echo "
\t\t\t\t</div>
\t\t\t";
            }
            // line 111
            echo "\t</div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/pana/templates/node/node--blog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  303 => 111,  297 => 108,  290 => 106,  286 => 104,  284 => 103,  281 => 102,  273 => 100,  271 => 99,  266 => 98,  261 => 95,  255 => 93,  252 => 92,  246 => 90,  243 => 89,  237 => 87,  235 => 86,  231 => 85,  228 => 84,  226 => 83,  222 => 82,  218 => 80,  212 => 78,  210 => 77,  204 => 74,  200 => 72,  198 => 71,  195 => 70,  189 => 69,  186 => 68,  184 => 67,  179 => 65,  175 => 64,  171 => 63,  168 => 62,  159 => 56,  155 => 55,  143 => 48,  140 => 47,  134 => 44,  130 => 43,  127 => 42,  125 => 41,  118 => 39,  114 => 37,  108 => 35,  106 => 34,  100 => 31,  96 => 29,  94 => 28,  91 => 27,  85 => 26,  82 => 25,  80 => 24,  75 => 22,  71 => 21,  66 => 20,  64 => 19,  61 => 18,  59 => 15,  58 => 14,  57 => 13,  56 => 10,  55 => 8,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/pana/templates/node/node--blog.html.twig", "C:\\xampp\\htdocs\\dev\\projects\\ltux\\template-site\\draft1\\themes\\pana\\templates\\node\\node--blog.html.twig");
    }
}
