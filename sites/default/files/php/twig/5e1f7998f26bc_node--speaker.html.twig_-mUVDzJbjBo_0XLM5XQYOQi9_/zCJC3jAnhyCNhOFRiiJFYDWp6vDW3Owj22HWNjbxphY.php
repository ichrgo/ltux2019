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

/* themes/pana/templates/node/node--speaker.html.twig */
class __TwigTemplate_a243c4e1ba9ccb636878f44e42749a8582ac39a8d823d2df4af65f3f4dd70b11 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 8, "if" => 18];
        $filters = ["clean_class" => 10, "render" => 27];
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
($context["node"] ?? null), "bundle", [])))), 2 => "node-content", 3 => (($this->getAttribute(        // line 12
($context["node"] ?? null), "isPromoted", [], "method")) ? ("node--promoted") : ("")), 4 => (($this->getAttribute(        // line 13
($context["node"] ?? null), "isSticky", [], "method")) ? ("node--sticky") : ("")), 5 => (( !$this->getAttribute(        // line 14
($context["node"] ?? null), "isPublished", [], "method")) ? ("node--unpublished") : (""))];
        // line 17
        echo "
";
        // line 18
        if (($context["teaser"] ?? null)) {
            // line 19
            echo "<div";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => "team-teaser speaker-teaser"], "method")), "html", null, true);
            echo ">
\t";
            // line 20
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null)), "html", null, true);
            echo "
\t";
            // line 21
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null)), "html", null, true);
            echo "
\t\t<div class=\"team-thumb\">
\t\t";
            // line 23
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_image", [])), "html", null, true);
            echo "\t\t
\t\t";
            // line 24
            if ((($context["speaker_modal"] ?? null) == "speaker-modal")) {
                // line 25
                echo "\t\t<div class=\"team-quick-view\"><a href=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null)), "html", null, true);
                echo "\" class=\"team-link use-ajax\" data-dialog-options=\"{&quot;width&quot;:680}\" data-dialog-type=\"modal\">View</a></div>
\t\t";
            }
            // line 26
            echo "\t
\t\t";
            // line 27
            if ((($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_facebook_link", [])) || $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_twitter_link", []))) || $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_linkedin_link", [])))) {
                // line 28
                echo "\t\t<div class=\"toggle-content-wrap\">
\t\t\t<div class=\"toggle-content colored-social team-social\">
\t\t\t\t<div class=\"toggle-content-inner social-icons\">
\t\t\t\t";
                // line 31
                if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_facebook_link", []))) {
                    // line 32
                    echo "\t\t\t\t<a target=\"_blank\" href=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_facebook_link", []), 0, []), "#url", [], "array")), "html", null, true);
                    echo "\" class=\"fa fa-facebook facebook\"></a>
\t\t\t\t";
                }
                // line 34
                echo "\t\t\t\t";
                if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_twitter_link", []))) {
                    // line 35
                    echo "\t\t\t\t<a target=\"_blank\" href=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_twitter_link", []), 0, []), "#url", [], "array")), "html", null, true);
                    echo "\" class=\"fa fa-twitter twitter\"></a>
\t\t\t\t";
                }
                // line 37
                echo "\t\t\t\t";
                if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_linkedin_link", []))) {
                    // line 38
                    echo "\t\t\t\t<a target=\"_blank\" href=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_linkedin_link", []), 0, []), "#url", [], "array")), "html", null, true);
                    echo "\" class=\"fa fa-linkedin linkedin\"></a>
\t\t\t\t";
                }
                // line 40
                echo "\t\t\t\t</div>
\t\t\t\t<span class=\"toggle-nav team-social-btn ion-android-share-alt\"></span>
\t\t\t</div>
\t\t</div>
\t\t";
            }
            // line 45
            echo "\t\t</div>
\t\t
\t\t<div class=\"team-meta-wrap\">
\t\t<div class=\"team-meta\">
\t\t\t<h5 class=\"team-name\">
\t\t\t";
            // line 50
            if ((($context["speaker_modal"] ?? null) == "speaker-modal")) {
                // line 51
                echo "\t\t\t";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null)), "html", null, true);
                echo "
\t\t\t";
            } else {
                // line 53
                echo "\t\t\t<a href=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null)), "html", null, true);
                echo "\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null)), "html", null, true);
                echo "</a>
\t\t\t";
            }
            // line 55
            echo "\t\t\t</h5>
\t\t\t<div class=\"team-position\">";
            // line 56
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_position", []), "value", [])), "html", null, true);
            echo "</div>\t\t\t
\t\t</div>
\t\t</div>
</div>

";
        } else {
            // line 62
            echo "
<div";
            // line 63
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
            echo ">
\t";
            // line 64
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null)), "html", null, true);
            echo "
\t";
            // line 65
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null)), "html", null, true);
            echo "
\t  
\t<div class=\"team-content\">
\t\t<div class=\"row\">
\t\t<div class=\"col-sm-5 team-thumb\">
\t\t";
            // line 70
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_image", [])), "html", null, true);
            echo "
\t\t</div>

\t\t<div class=\"col-sm-7 team-detail\">
\t\t\t<div class=\"team-meta\">
\t\t\t<h2 class=\"team-name\">";
            // line 75
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null)), "html", null, true);
            echo "</h2>
\t\t\t";
            // line 76
            if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_position", []))) {
                // line 77
                echo "\t\t\t<div class=\"team-position\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_position", []), "value", [])), "html", null, true);
                echo "</div>
\t\t\t";
            }
            // line 78
            echo "\t\t
\t\t\t</div>
\t\t\t";
            // line 80
            if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "body", []))) {
                // line 81
                echo "\t\t\t<div class=\"team-body\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "body", [])), "html", null, true);
                echo "</div>
\t\t\t";
            }
            // line 83
            echo "\t\t\t<div class=\"colored-social team-social\">
\t\t\t\t";
            // line 84
            if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_facebook_link", []))) {
                // line 85
                echo "\t\t\t\t<a target=\"_blank\" href=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_facebook_link", []), 0, []), "#url", [], "array")), "html", null, true);
                echo "\" class=\"fa fa-facebook facebook\"></a>
\t\t\t\t";
            }
            // line 87
            echo "\t\t\t\t";
            if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_twitter_link", []))) {
                // line 88
                echo "\t\t\t\t<a target=\"_blank\" href=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_twitter_link", []), 0, []), "#url", [], "array")), "html", null, true);
                echo "\" class=\"fa fa-twitter twitter\"></a>
\t\t\t\t";
            }
            // line 90
            echo "\t\t\t\t";
            if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_linkedin_link", []))) {
                // line 91
                echo "\t\t\t\t<a target=\"_blank\" href=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_linkedin_link", []), 0, []), "#url", [], "array")), "html", null, true);
                echo "\" class=\"fa fa-linkedin linkedin\"></a>
\t\t\t\t";
            }
            // line 93
            echo "\t\t\t</div>
\t\t</div>
\t\t</div>
\t</div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "themes/pana/templates/node/node--speaker.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  250 => 93,  244 => 91,  241 => 90,  235 => 88,  232 => 87,  226 => 85,  224 => 84,  221 => 83,  215 => 81,  213 => 80,  209 => 78,  203 => 77,  201 => 76,  197 => 75,  189 => 70,  181 => 65,  177 => 64,  173 => 63,  170 => 62,  161 => 56,  158 => 55,  150 => 53,  144 => 51,  142 => 50,  135 => 45,  128 => 40,  122 => 38,  119 => 37,  113 => 35,  110 => 34,  104 => 32,  102 => 31,  97 => 28,  95 => 27,  92 => 26,  86 => 25,  84 => 24,  80 => 23,  75 => 21,  71 => 20,  66 => 19,  64 => 18,  61 => 17,  59 => 14,  58 => 13,  57 => 12,  56 => 10,  55 => 8,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/pana/templates/node/node--speaker.html.twig", "C:\\xampp\\htdocs\\dev\\projects\\ltux\\template-site\\draft1\\themes\\pana\\templates\\node\\node--speaker.html.twig");
    }
}
