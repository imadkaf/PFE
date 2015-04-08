<?php

/* eZDemoBundle:parts/article:star_rating.html.twig */
class __TwigTemplate_414f46d8613655bc1a3d3096987cfeb50c4c7c38da28a9b39cf01a4d9aaf6bc3 extends Twig_Template
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
        $this->env->loadTemplate("design:parts/article/star_rating.tpl")->display(array_merge($context, array("node" => (isset($context["location"]) ? $context["location"] : null))));
    }

    public function getTemplateName()
    {
        return "eZDemoBundle:parts/article:star_rating.html.twig";
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
