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

/* themes/pana/templates/node/node--team.html.twig */
class __TwigTemplate_6183e7eaa52a253d2e3e5d0ae854f539bd09fdf751a05cbbd60de34b3420af4e extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 8, "if" => 18];
        $filters = ["clean_class" => 10, "render" => 25];
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
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => "team-teaser"], "method")), "html", null, true);
            echo ">
\t";
            // line 20
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null)), "html", null, true);
            echo "
\t";
            // line 21
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null)), "html", null, true);
            echo "
\t<div class=\"team-thumb\">
\t";
            // line 23
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_image", [])), "html", null, true);
            echo "
\t
\t\t";
            // line 25
            if ((($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_facebook_link", [])) || $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_twitter_link", []))) || $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_linkedin_link", [])))) {
                // line 26
                echo "\t\t<div class=\"toggle-content-wrap\">
\t\t\t<div class=\"toggle-content colored-social team-social\">
\t\t\t\t<div class=\"toggle-content-inner social-icons\">
\t\t\t\t";
                // line 29
                if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_facebook_link", []))) {
                    // line 30
                    echo "\t\t\t\t<a target=\"_blank\" href=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_facebook_link", []), 0, []), "#url", [], "array")), "html", null, true);
                    echo "\" class=\"fa fa-facebook facebook\"></a>
\t\t\t\t";
                }
                // line 32
                echo "\t\t\t\t";
                if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_twitter_link", []))) {
                    // line 33
                    echo "\t\t\t\t<a target=\"_blank\" href=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_twitter_link", []), 0, []), "#url", [], "array")), "html", null, true);
                    echo "\" class=\"fa fa-twitter twitter\"></a>
\t\t\t\t";
                }
                // line 35
                echo "\t\t\t\t";
                if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_linkedin_link", []))) {
                    // line 36
                    echo "\t\t\t\t<a target=\"_blank\" href=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_linkedin_link", []), 0, []), "#url", [], "array")), "html", null, true);
                    echo "\" class=\"fa fa-linkedin linkedin\"></a>
\t\t\t\t";
                }
                // line 38
                echo "\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<span class=\"toggle-nav team-social-btn ion-android-share-alt\"></span>
\t\t\t</div>
\t\t</div>
\t\t";
            }
            // line 44
            echo "\t
\t</div>
\t<div class=\"team-meta\">
\t\t<h5 class=\"team-name\"><a href=\"";
            // line 47
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null)), "html", null, true);
            echo "\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null)), "html", null, true);
            echo "</a></h5>
\t\t<div class=\"team-position\">";
            // line 48
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_position", []), "value", [])), "html", null, true);
            echo "</div>\t\t\t
\t</div>
</div>
";
        } else {
            // line 52
            echo "<div";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
            echo ">
\t";
            // line 53
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null)), "html", null, true);
            echo "
\t";
            // line 54
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null)), "html", null, true);
            echo "
\t  
\t<div class=\"team-content\">
\t\t<div class=\"row\">
\t\t<div class=\"col-sm-5 team-thumb\">
\t\t";
            // line 59
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_image", [])), "html", null, true);
            echo "
\t\t</div>

\t\t<div class=\"col-sm-7 team-detail\">
\t\t\t<div class=\"team-meta\">
\t\t\t<h2 class=\"team-name\">";
            // line 64
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null)), "html", null, true);
            echo "</h2>
\t\t\t";
            // line 65
            if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_position", []))) {
                // line 66
                echo "\t\t\t<div class=\"team-position\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["node"] ?? null), "field_position", []), "value", [])), "html", null, true);
                echo "</div>
\t\t\t";
            }
            // line 67
            echo "\t\t
\t\t\t</div>
\t\t\t";
            // line 69
            if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "body", []))) {
                // line 70
                echo "\t\t\t<div class=\"team-body\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "body", [])), "html", null, true);
                echo "</div>
\t\t\t";
            }
            // line 72
            echo "\t\t\t<div class=\"colored-social team-social\">
\t\t\t\t";
            // line 73
            if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_facebook_link", []))) {
                // line 74
                echo "\t\t\t\t<a target=\"_blank\" href=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_facebook_link", []), 0, []), "#url", [], "array")), "html", null, true);
                echo "\" class=\"fa fa-facebook facebook\"></a>
\t\t\t\t";
            }
            // line 76
            echo "\t\t\t\t";
            if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_twitter_link", []))) {
                // line 77
                echo "\t\t\t\t<a target=\"_blank\" href=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_twitter_link", []), 0, []), "#url", [], "array")), "html", null, true);
                echo "\" class=\"fa fa-twitter twitter\"></a>
\t\t\t\t";
            }
            // line 79
            echo "\t\t\t\t";
            if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_linkedin_link", []))) {
                // line 80
                echo "\t\t\t\t<a target=\"_blank\" href=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_linkedin_link", []), 0, []), "#url", [], "array")), "html", null, true);
                echo "\" class=\"fa fa-linkedin linkedin\"></a>
\t\t\t\t";
            }
            // line 82
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
        return "themes/pana/templates/node/node--team.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  222 => 82,  216 => 80,  213 => 79,  207 => 77,  204 => 76,  198 => 74,  196 => 73,  193 => 72,  187 => 70,  185 => 69,  181 => 67,  175 => 66,  173 => 65,  169 => 64,  161 => 59,  153 => 54,  149 => 53,  144 => 52,  137 => 48,  131 => 47,  126 => 44,  118 => 38,  112 => 36,  109 => 35,  103 => 33,  100 => 32,  94 => 30,  92 => 29,  87 => 26,  85 => 25,  80 => 23,  75 => 21,  71 => 20,  66 => 19,  64 => 18,  61 => 17,  59 => 14,  58 => 13,  57 => 12,  56 => 10,  55 => 8,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/pana/templates/node/node--team.html.twig", "C:\\xampp\\htdocs\\dev\\projects\\ltux\\template-site\\draft1\\themes\\pana\\templates\\node\\node--team.html.twig");
    }
}
