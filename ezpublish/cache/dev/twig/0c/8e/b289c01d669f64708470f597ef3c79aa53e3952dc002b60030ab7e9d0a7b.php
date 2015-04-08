<?php

/* eZDemoBundle:block:highlighted_item.html.twig */
class __TwigTemplate_0c8eb289c01d669f64708470f597ef3c79aa53e3952dc002b60030ab7e9d0a7b extends eZ\Bundle\EzPublishDebugBundle\Twig\DebugTemplate
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
        if ((!twig_test_empty((isset($context["valid_items"]) ? $context["valid_items"] : $this->getContext($context, "valid_items"))))) {
            // line 2
            echo "<div class=\"block-type-highlighted-item block-view-";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "view", array()), "html", null, true);
            echo "\">
    ";
            // line 3
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("ez_content:viewLocation", array("locationId" => $this->getAttribute($this->getAttribute((isset($context["valid_items"]) ? $context["valid_items"] : $this->getContext($context, "valid_items")), 0, array(), "array"), "locationId", array()), "viewType" => "block_item_highlighted", "params" => array("image_alias" => "contentgrid"))));
            // line 12
            echo "
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "eZDemoBundle:block:highlighted_item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 12,  26 => 3,  21 => 2,  19 => 1,);
    }
}
