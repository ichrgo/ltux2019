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

/* {# inline_template_start #}<div class="card-header">
<a class="collapsed card-link" data-toggle="collapse" href="#collapse-{{ nid }}">{{ title }}</a>
</div>
<div id="collapse-{{ nid }}" class="collapse" data-parent="#accordion">
<div class="card-body">
{{ body }}
</div>
</div> */
class __TwigTemplate_e6b075006b58ee44958bb1fd144b0967fc0c7005f6a55c9e795716719e4db666 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = [];
        $filters = [];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                [],
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
        // line 1
        echo "<div class=\"card-header\">
<a class=\"collapsed card-link\" data-toggle=\"collapse\" href=\"#collapse-";
        // line 2
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["nid"] ?? null)), "html", null, true);
        echo "\">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null)), "html", null, true);
        echo "</a>
</div>
<div id=\"collapse-";
        // line 4
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["nid"] ?? null)), "html", null, true);
        echo "\" class=\"collapse\" data-parent=\"#accordion\">
<div class=\"card-body\">
";
        // line 6
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["body"] ?? null)), "html", null, true);
        echo "
</div>
</div>";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<div class=\"card-header\">
<a class=\"collapsed card-link\" data-toggle=\"collapse\" href=\"#collapse-{{ nid }}\">{{ title }}</a>
</div>
<div id=\"collapse-{{ nid }}\" class=\"collapse\" data-parent=\"#accordion\">
<div class=\"card-body\">
{{ body }}
</div>
</div>";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 6,  72 => 4,  65 => 2,  62 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "{# inline_template_start #}<div class=\"card-header\">
<a class=\"collapsed card-link\" data-toggle=\"collapse\" href=\"#collapse-{{ nid }}\">{{ title }}</a>
</div>
<div id=\"collapse-{{ nid }}\" class=\"collapse\" data-parent=\"#accordion\">
<div class=\"card-body\">
{{ body }}
</div>
</div>", "");
    }
}
