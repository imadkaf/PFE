<?php

/* eZDemoBundle:parts/article:tip_a_friend.html.twig */
class __TwigTemplate_6f91ac6608640e9910e2b4c60fdac57e03baa5b7a1c69f1d5a6650ae8d98f02b extends Twig_Template
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
        $this->env->loadTemplate("design:parts/article/tip_a_friend.tpl")->display(array_merge($context, array("node" => (isset($context["location"]) ? $context["location"] : null))));
    }

    public function getTemplateName()
    {
        return "eZDemoBundle:parts/article:tip_a_friend.html.twig";
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
