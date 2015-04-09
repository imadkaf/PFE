<?php

/* eZDemoBundle::page_header_logo.html.twig */
class __TwigTemplate_bb29a54c7d1c87d70384a87bebcd5f437575aa12c06d735b64d09de3ee7d1bd9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"span8\">
    <a href=\"";
        // line 2
        echo $this->env->getExtension('routing')->getPath($this->getAttribute((isset($context["ezpublish"]) ? $context["ezpublish"] : null), "rootLocation", array()));
        echo "\" title=\"\" class=\"logo\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ezdemo/images/logo-ez.png"), "html", null, true);
        echo "\" alt=\"\" /></a>
</div>
";
    }

    public function getTemplateName()
    {
        return "eZDemoBundle::page_header_logo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,  19 => 1,);
    }
}
