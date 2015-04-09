<?php

/* EzPublishCoreBundle:FieldType/RichText/embed:content_inline.html.twig */
class __TwigTemplate_2bf6bcfa2f82853171733bdca6ccff873ef1171c8d7a7685007cb7fce8e52a05 extends eZ\Bundle\EzPublishDebugBundle\Twig\DebugTemplate
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
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("ez_content:viewContent", array("locationId" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "viewType" => (isset($context["view"]) ? $context["view"] : $this->getContext($context, "view")), "params" => (isset($context["params"]) ? $context["params"] : $this->getContext($context, "params")))));
        // line 12
        echo "
";
    }

    public function getTemplateName()
    {
        return "EzPublishCoreBundle:FieldType/RichText/embed:content_inline.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  21 => 12,  19 => 1,);
    }
}
