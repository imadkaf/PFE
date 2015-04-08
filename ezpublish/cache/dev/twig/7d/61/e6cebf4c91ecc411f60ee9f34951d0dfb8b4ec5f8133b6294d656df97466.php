<?php

/* eZDemoBundle::breadcrumb.html.twig */
class __TwigTemplate_7d61e6cebf4c91ecc411f60ee9f34951d0dfb8b4ec5f8133b6294d656df97466 extends eZ\Bundle\EzPublishDebugBundle\Twig\DebugTemplate
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
        echo $this->env->getExtension('breadcrumbs')->renderBreadcrumbs(array("separator" => ">>"));
        echo "
";
    }

    public function getTemplateName()
    {
        return "eZDemoBundle::breadcrumb.html.twig";
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
