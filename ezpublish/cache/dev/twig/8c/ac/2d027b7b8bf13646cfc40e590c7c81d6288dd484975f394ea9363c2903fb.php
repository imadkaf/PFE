<?php

/* eZDemoBundle:parts/blog:extra_info.html.twig */
class __TwigTemplate_8cac2d027b7b8bf13646cfc40e590c7c81d6288dd484975f394ea9363c2903fb extends eZ\Bundle\EzPublishDebugBundle\Twig\DebugTemplate
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
        $this->env->loadTemplate("design:parts/blog/extra_info.tpl")->display(array_merge($context, array("used_node" => (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "view_parameters" => $this->getAttribute((isset($context["ezpublish"]) ? $context["ezpublish"] : $this->getContext($context, "ezpublish")), "viewParameters", array()))));
    }

    public function getTemplateName()
    {
        return "eZDemoBundle:parts/blog:extra_info.html.twig";
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
