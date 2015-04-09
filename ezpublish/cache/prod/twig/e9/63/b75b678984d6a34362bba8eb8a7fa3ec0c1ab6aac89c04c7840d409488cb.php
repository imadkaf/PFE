<?php

/* eZDemoBundle:parts:related_content.html.twig */
class __TwigTemplate_e963b75b678984d6a34362bba8eb8a7fa3ec0c1ab6aac89c04c7840d409488cb extends Twig_Template
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
        // line 6
        $this->env->loadTemplate("design:parts/related_content.tpl")->display(array_merge($context, array("node" => (isset($context["location"]) ? $context["location"] : null))));
    }

    public function getTemplateName()
    {
        return "eZDemoBundle:parts:related_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 6,);
    }
}
