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

/* themes/pana/templates/user/user.html.twig */
class __TwigTemplate_6db5b522341462f5697d56f357318150ddba9faed514bb19d1330e3329231812 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 21];
        $filters = ["without" => 33];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['without'],
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
        // line 19
        echo "<div";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => "profile"], "method")), "html", null, true);
        echo ">

  ";
        // line 21
        if ((($context["content"] ?? null) && ((($context["view_mode"] ?? null) == "default") || (($context["view_mode"] ?? null) == "full")))) {
            // line 22
            echo "    <div class=\"user-header\">
      <div class=\"inner\">
        <div class=\"row\">
          <div class=\"col-md-4\">
              <div class=\"user-profile-picture\">
                ";
            // line 27
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "user_picture", [])), "html", null, true);
            echo "
              </div>
          </div>
          <div class=\"col-md-8\">
\t\t    <h2 class=\"user-name\">";
            // line 31
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_name", [])), "html", null, true);
            echo " @";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["name"] ?? null)), "html", null, true);
            echo "</h2>
\t\t\t<div class=\"user-content\">
            ";
            // line 33
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_without($this->sandbox->ensureToStringAllowed(($context["content"] ?? null)), "user_picture", "field_name", "field_facebook", "field_twitter", "field_linkedin", "field_youtube"), "html", null, true);
            echo "
\t\t\t
                ";
            // line 35
            if (((($this->getAttribute(($context["content"] ?? null), "field_facebook", []) || $this->getAttribute(($context["content"] ?? null), "field_twitter", [])) || $this->getAttribute(($context["content"] ?? null), "field_linkedin", [])) || $this->getAttribute(($context["content"] ?? null), "field_youtube", []))) {
                // line 36
                echo "                  <div class=\"team-social user-social-links\">
                    <a href=\"";
                // line 37
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_facebook", []), 0, []), "#url", [], "array")), "html", null, true);
                echo "\"><i class=\"fa fa-facebook\"></i></a>
\t\t\t\t\t<a href=\"";
                // line 38
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_twitter", []), 0, []), "#url", [], "array")), "html", null, true);
                echo "\"><i class=\"fa fa-twitter\"></i></a>
\t\t\t\t\t<a href=\"";
                // line 39
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_linkedin", []), 0, []), "#url", [], "array")), "html", null, true);
                echo "\"><i class=\"fa fa-linkedin\"></i></a>
\t\t\t\t\t<a href=\"";
                // line 40
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_youtube", []), 0, []), "#url", [], "array")), "html", null, true);
                echo "\"><i class=\"fa fa-youtube\"></i></a>
                  </div>
                ";
            }
            // line 43
            echo "          </div>
\t\t  </div>
        </div>
      </div>

    </div>

  ";
        } else {
            // line 51
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null)), "html", null, true);
        }
        // line 53
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "themes/pana/templates/user/user.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 53,  122 => 51,  112 => 43,  106 => 40,  102 => 39,  98 => 38,  94 => 37,  91 => 36,  89 => 35,  84 => 33,  77 => 31,  70 => 27,  63 => 22,  61 => 21,  55 => 19,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/pana/templates/user/user.html.twig", "C:\\xampp\\htdocs\\dev\\projects\\ltux\\template-site\\draft1\\themes\\pana\\templates\\user\\user.html.twig");
    }
}
