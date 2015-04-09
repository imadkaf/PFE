<?php

/* EzPublishCoreBundle:FieldType/RichText/tag:default_inline.html.twig */
class __TwigTemplate_0bf3cfe75da5e3fa9965ba97af19e9fb58751679a5ca26f2feed2367d9cddec8 extends eZ\Bundle\EzPublishDebugBundle\Twig\DebugTemplate
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
        echo "[[ RichText template tag <strong>";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "</strong> is not configured ]]
";
    }

    public function getTemplateName()
    {
        return "EzPublishCoreBundle:FieldType/RichText/tag:default_inline.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
