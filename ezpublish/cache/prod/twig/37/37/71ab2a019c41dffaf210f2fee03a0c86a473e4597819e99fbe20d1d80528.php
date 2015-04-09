<?php

/* EzPublishCoreBundle:FieldType/RichText/embed:content_inline_denied.html.twig */
class __TwigTemplate_373771ab2a019c41dffaf210f2fee03a0c86a473e4597819e99fbe20d1d80528 extends Twig_Template
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
        echo "[[ Content #";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
        echo ": You do not have permission to view this Content ]]
";
    }

    public function getTemplateName()
    {
        return "EzPublishCoreBundle:FieldType/RichText/embed:content_inline_denied.html.twig";
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
