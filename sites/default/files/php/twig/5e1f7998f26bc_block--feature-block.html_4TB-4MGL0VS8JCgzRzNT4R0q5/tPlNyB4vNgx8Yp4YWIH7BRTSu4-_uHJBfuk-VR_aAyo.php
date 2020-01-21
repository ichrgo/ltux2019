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

/* themes/pana/templates/block/block--feature-block.html.twig */
class __TwigTemplate_0243d262ce9c7db39c300117f9a2df75fb4f3d41daf0aa7c90d0625d811be136 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 8, "if" => 15, "block" => 22];
        $filters = ["clean_class" => 11, "first" => 15, "render" => 62];
        $functions = ["attach_library" => 16, "file_url" => 31];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block'],
                ['clean_class', 'first', 'render'],
                ['attach_library', 'file_url']
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
        $context["classes"] = [0 => "block", 1 => "feature-block", 2 => ("block-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute(        // line 11
($context["configuration"] ?? null), "provider", [])))), 3 => ("block-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 12
($context["plugin_id"] ?? null))))];
        // line 15
        if (($this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_media_format", []), "#items", [], "array"), "getValue", [], "method")), "value", []) == "video-popup")) {
            // line 16
            echo "  ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("pana/colorbox"), "html", null, true);
            echo "
";
        }
        // line 18
        echo "<div";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
        echo " ";
        if (($context["block_style"] ?? null)) {
            echo "style=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["block_style"] ?? null)), "html", null, true);
            echo "\"";
        }
        echo ">
<div class=\"container-wrap feature-block-";
        // line 19
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_feature_layout", []), "#items", [], "array"), "value", [])), "html", null, true);
        echo " clearfix\">
  ";
        // line 20
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null)), "html", null, true);
        echo "
  ";
        // line 21
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null)), "html", null, true);
        echo "
  ";
        // line 22
        $this->displayBlock('content', $context, $blocks);
        // line 129
        echo "</div>
</div>";
    }

    // line 22
    public function block_content($context, array $blocks = [])
    {
        // line 23
        echo "  
 <div class=\"row-wrap block-content\">
";
        // line 25
        if (($this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_feature_layout", []), "#items", [], "array"), "getValue", [], "method")), "value", []) == "layout1")) {
            // line 26
            echo "\t<div class=\"row feature-block-wrap feature-block-image-left\">
\t<div class=\"col-12 col-md-6 feat-block-image-wrap ";
            // line 27
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_media_format", []), "#items", [], "array"), "value", [])), "html", null, true);
            echo "\">
\t";
            // line 28
            if (($this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_media_format", []), "#items", [], "array"), "getValue", [], "method")), "value", []) == "static-image")) {
                // line 29
                echo "\t<div class=\"feat-block-image\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_image", [])), "html", null, true);
                echo "</div>
\t";
            } elseif (($this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(            // line 30
($context["content"] ?? null), "field_media_format", []), "#items", [], "array"), "getValue", [], "method")), "value", []) == "background-image")) {
                // line 31
                echo "\t<div class=\"feat-block-image\" style=\"background-image: url(";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), [$this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_image", []), 0, []), "#item", [], "array"), "entity", []), "uri", []), "value", []))]), "html", null, true);
                echo ");\">
\t\t<div class=\"feat-block-image-bg\">";
                // line 32
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_image", [])), "html", null, true);
                echo "</div>
\t</div>
\t";
            } elseif (($this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(            // line 34
($context["content"] ?? null), "field_media_format", []), "#items", [], "array"), "getValue", [], "method")), "value", []) == "slider-image")) {
                // line 35
                echo "\t<div class=\"feat-block-image feat-block-slide\">
\t\t<div class=\"slide-carousel owl-carousel\" data-nav=\"false\" data-items=\"1\" data-dots=\"true\" data-autoplay=\"true\" data-loop=\"true\">
\t\t";
                // line 37
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_image", [])), "html", null, true);
                echo "
\t\t</div>
\t</div>
\t";
            } elseif (($this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(            // line 40
($context["content"] ?? null), "field_media_format", []), "#items", [], "array"), "getValue", [], "method")), "value", []) == "video-popup")) {
                // line 41
                echo "\t<div class=\"feat-block-image feat-block-video\" style=\"background-image: url(";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), [$this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_image", []), 0, []), "#item", [], "array"), "entity", []), "uri", []), "value", []))]), "html", null, true);
                echo ");\">
\t\t<div class=\"feat-block-image-bg\">";
                // line 42
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_image", [])), "html", null, true);
                echo "</div>
\t\t<a class=\"colorbox video-colorbox\" href=\"";
                // line 43
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_video", []), 0, []), "#url", [], "array")), "html", null, true);
                echo "\"><span class=\"video-link ti-control-play\"></span></a>
\t</div>
\t";
            }
            // line 46
            echo "\t</div>
\t<div class=\"col-12 col-md-6 feat-block-content\">
\t<div class=\"feat-content-wrap\">
\t";
            // line 49
            if (($context["label"] ?? null)) {
                // line 50
                echo "\t<div class=\"block-title-wrap\">
\t<div class=\"block-title-content\">
\t";
                // line 52
                if ((($context["block_title_style"] ?? null) == "block-title-2")) {
                    // line 53
                    echo "\t";
                    if (($context["block_subtitle"] ?? null)) {
                        echo "<h5 class=\"block-subtitle\">";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["block_subtitle"] ?? null)), "html", null, true);
                        echo "</h5>";
                    }
                    // line 54
                    echo "\t<h2";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["title_attributes"] ?? null), "addClass", [0 => "block-title"], "method")), "html", null, true);
                    echo ">";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null)), "html", null, true);
                    echo "</h2>
\t";
                } else {
                    // line 56
                    echo "\t<h2";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["title_attributes"] ?? null), "addClass", [0 => "block-title"], "method")), "html", null, true);
                    echo ">";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null)), "html", null, true);
                    echo "</h2>
\t";
                    // line 57
                    if (($context["block_subtitle"] ?? null)) {
                        echo "<h5 class=\"block-subtitle\">";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["block_subtitle"] ?? null)), "html", null, true);
                        echo "</h5>";
                    }
                    // line 58
                    echo "\t";
                }
                // line 59
                echo "\t</div>
\t</div>
\t";
            }
            // line 62
            echo "\t";
            if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "body", []))) {
                echo "<div class=\"feat-block-text\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "body", [])), "html", null, true);
                echo "</div>";
            }
            // line 63
            echo "\t";
            if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_block", []))) {
                // line 64
                echo "\t<div class=\"text-left block-right\">
\t";
                // line 65
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_block", [])), "html", null, true);
                echo "
\t</div>
\t";
            }
            // line 68
            echo "\t";
            if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_link", []))) {
                // line 69
                echo "\t<a class=\"button button-default\" href=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_link", []), 0, []), "children", []), "#url", [], "array")), "html", null, true);
                echo "\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_link", []), 0, []), "#title", [], "array")), "html", null, true);
                echo "</a>
\t";
            }
            // line 71
            echo "\t</div>
\t</div>
\t</div>

";
        } elseif (($this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(        // line 75
($context["content"] ?? null), "field_feature_layout", []), "#items", [], "array"), "getValue", [], "method")), "value", []) == "layout2")) {
            // line 76
            echo "\t<div class=\"row feature-block-wrap feature-block-image-right\">
\t<div class=\"col-12 col-md-6 feat-block-content\">
\t<div class=\"feat-content-wrap\">
\t";
            // line 79
            if (($context["label"] ?? null)) {
                // line 80
                echo "\t<div class=\"block-title-wrap\">
\t<div class=\"block-title-content\">
\t";
                // line 82
                if ((($context["block_title_style"] ?? null) == "block-title-2")) {
                    // line 83
                    echo "\t";
                    if (($context["block_subtitle"] ?? null)) {
                        echo "<h5 class=\"block-subtitle\">";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["block_subtitle"] ?? null)), "html", null, true);
                        echo "</h5>";
                    }
                    // line 84
                    echo "\t<h2";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["title_attributes"] ?? null), "addClass", [0 => "block-title"], "method")), "html", null, true);
                    echo ">";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null)), "html", null, true);
                    echo "</h2>
\t";
                } else {
                    // line 86
                    echo "\t<h2";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["title_attributes"] ?? null), "addClass", [0 => "block-title"], "method")), "html", null, true);
                    echo ">";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null)), "html", null, true);
                    echo "</h2>
\t";
                    // line 87
                    if (($context["block_subtitle"] ?? null)) {
                        echo "<h5 class=\"block-subtitle\">";
                        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["block_subtitle"] ?? null)), "html", null, true);
                        echo "</h5>";
                    }
                    // line 88
                    echo "\t";
                }
                // line 89
                echo "\t</div>
\t</div>
\t";
            }
            // line 92
            echo "\t";
            if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "body", []))) {
                echo "<div class=\"feat-block-text\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "body", [])), "html", null, true);
                echo "</div>";
            }
            // line 93
            echo "\t";
            if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_block", []))) {
                // line 94
                echo "\t<div class=\"text-left block-right\">
\t";
                // line 95
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_block", [])), "html", null, true);
                echo "
\t</div>
\t";
            }
            // line 98
            echo "\t";
            if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_link", []))) {
                // line 99
                echo "\t<a class=\"button button-default\" href=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_link", []), 0, []), "#url", [], "array")), "html", null, true);
                echo "\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_link", []), 0, []), "#title", [], "array")), "html", null, true);
                echo "</a>
\t";
            }
            // line 101
            echo "\t</div>
\t</div>
\t<div class=\"col-12 col-md-6 feat-block-image-wrap ";
            // line 103
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_media_format", []), "#items", [], "array"), "value", [])), "html", null, true);
            echo "\">
\t";
            // line 104
            if (($this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_media_format", []), "#items", [], "array"), "getValue", [], "method")), "value", []) == "static-image")) {
                // line 105
                echo "\t<div class=\"feat-block-image\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_image", [])), "html", null, true);
                echo "</div>
\t";
            } elseif (($this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(            // line 106
($context["content"] ?? null), "field_media_format", []), "#items", [], "array"), "getValue", [], "method")), "value", []) == "background-image")) {
                // line 107
                echo "\t<div class=\"feat-block-image\" style=\"background-image: url(";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), [$this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_image", []), 0, []), "#item", [], "array"), "entity", []), "uri", []), "value", []))]), "html", null, true);
                echo ");\">
\t\t<div class=\"feat-block-image-bg\">";
                // line 108
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_image", [])), "html", null, true);
                echo "</div>
\t</div>
\t";
            } elseif (($this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(            // line 110
($context["content"] ?? null), "field_media_format", []), "#items", [], "array"), "getValue", [], "method")), "value", []) == "slider-image")) {
                // line 111
                echo "\t<div class=\"feat-block-image feat-block-slide\">
\t\t<div class=\"slide-carousel owl-carousel\" data-nav=\"false\" data-items=\"1\" data-dots=\"true\" data-autoplay=\"true\" data-loop=\"true\">
\t\t";
                // line 113
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_image", [])), "html", null, true);
                echo "
\t\t</div>
\t</div>
\t";
            } elseif (($this->getAttribute(twig_first($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(            // line 116
($context["content"] ?? null), "field_media_format", []), "#items", [], "array"), "getValue", [], "method")), "value", []) == "video-popup")) {
                // line 117
                echo "\t<div class=\"feat-block-image feat-block-video\" style=\"background-image: url(";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, call_user_func_array($this->env->getFunction('file_url')->getCallable(), [$this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_image", []), 0, []), "#item", [], "array"), "entity", []), "uri", []), "value", []))]), "html", null, true);
                echo ");\">
\t\t<div class=\"feat-block-image-bg\">";
                // line 118
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_image", [])), "html", null, true);
                echo "</div>
\t\t<a class=\"colorbox video-colorbox\" href=\"";
                // line 119
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_video", []), 0, []), "children", []), "#url", [], "array")), "html", null, true);
                echo "\"><span class=\"video-link ti-control-play\"></span></a>
\t</div>
\t";
            }
            // line 122
            echo "\t</div>
\t</div>

";
        }
        // line 126
        echo "\t
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/pana/templates/block/block--feature-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  390 => 126,  384 => 122,  378 => 119,  374 => 118,  369 => 117,  367 => 116,  361 => 113,  357 => 111,  355 => 110,  350 => 108,  345 => 107,  343 => 106,  338 => 105,  336 => 104,  332 => 103,  328 => 101,  320 => 99,  317 => 98,  311 => 95,  308 => 94,  305 => 93,  298 => 92,  293 => 89,  290 => 88,  284 => 87,  277 => 86,  269 => 84,  262 => 83,  260 => 82,  256 => 80,  254 => 79,  249 => 76,  247 => 75,  241 => 71,  233 => 69,  230 => 68,  224 => 65,  221 => 64,  218 => 63,  211 => 62,  206 => 59,  203 => 58,  197 => 57,  190 => 56,  182 => 54,  175 => 53,  173 => 52,  169 => 50,  167 => 49,  162 => 46,  156 => 43,  152 => 42,  147 => 41,  145 => 40,  139 => 37,  135 => 35,  133 => 34,  128 => 32,  123 => 31,  121 => 30,  116 => 29,  114 => 28,  110 => 27,  107 => 26,  105 => 25,  101 => 23,  98 => 22,  93 => 129,  91 => 22,  87 => 21,  83 => 20,  79 => 19,  68 => 18,  62 => 16,  60 => 15,  58 => 12,  57 => 11,  56 => 8,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/pana/templates/block/block--feature-block.html.twig", "C:\\xampp\\htdocs\\dev\\projects\\ltux\\template-site\\draft1\\themes\\pana\\templates\\block\\block--feature-block.html.twig");
    }
}
