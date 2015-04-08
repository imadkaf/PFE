<?php

/* eZDemoBundle:block:feed_reader.html.twig */
class __TwigTemplate_0c8639a7a7d3ecf3b8d8817b69b2da88772a2f5d17b2d59e11dff926694028fe extends Twig_Template
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
        // line 2
        if ((!twig_test_empty($this->getAttribute((isset($context["block"]) ? $context["block"] : null), "customAttributes", array())))) {
            // line 3
            echo "    ";
            list($context["feedUrl"], $context["offset"], $context["limit"]) =             array($this->getAttribute($this->getAttribute((isset($context["block"]) ? $context["block"] : null), "customAttributes", array()), "source", array(), "array"), $this->getAttribute($this->getAttribute((isset($context["block"]) ? $context["block"] : null), "customAttributes", array()), "offset", array(), "array"), $this->getAttribute($this->getAttribute((isset($context["block"]) ? $context["block"] : null), "customAttributes", array()), "limit", array(), "array"));
            // line 4
            echo "    ";
            echo $this->env->getExtension('http_kernel')->renderFragmentStrategy("hinclude", $this->env->getExtension('http_kernel')->controller("eZDemoBundle:Frontpage:renderFeedBlock", array("feedUrl" => (isset($context["feedUrl"]) ? $context["feedUrl"] : null), "offset" => (isset($context["offset"]) ? $context["offset"] : null), "limit" => (isset($context["limit"]) ? $context["limit"] : null))));
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "eZDemoBundle:block:feed_reader.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 4,  21 => 3,  19 => 2,);
    }
}
