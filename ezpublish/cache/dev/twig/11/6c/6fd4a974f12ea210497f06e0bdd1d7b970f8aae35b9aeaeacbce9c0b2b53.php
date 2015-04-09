<?php

/* {% extends "EzPublishCoreBundle::viewbase_layout.html.twig" %}

{% block content %}
{{ viewResult|raw }}
{% endblock %} */
class __TwigTemplate_116c6fd4a974f12ea210497f06e0bdd1d7b970f8aae35b9aeaeacbce9c0b2b53 extends eZ\Bundle\EzPublishDebugBundle\Twig\DebugTemplate
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("EzPublishCoreBundle::viewbase_layout.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EzPublishCoreBundle::viewbase_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo (isset($context["viewResult"]) ? $context["viewResult"] : $this->getContext($context, "viewResult"));
        echo "
";
    }

    public function getTemplateName()
    {
        return "{% extends \"EzPublishCoreBundle::viewbase_layout.html.twig\" %}

{% block content %}
{{ viewResult|raw }}
{% endblock %}";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 4,  32 => 3,);
    }
}
