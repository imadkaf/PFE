<?php

/* EzPublishCoreBundle:FieldType/RichText/embed:location.html.twig */
class __TwigTemplate_678c616dd1997009485e25bbcbf916a34de6f29e817ab71925a9b7b2515d3c48 extends Twig_Template
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
        echo "<div class=\"";
        if (array_key_exists("align", $context)) {
            echo "align-";
            echo twig_escape_filter($this->env, (isset($context["align"]) ? $context["align"] : null), "html", null, true);
        }
        if (array_key_exists("class", $context)) {
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : null), "html", null, true);
        }
        echo "\">
";
        // line 2
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("ez_content:viewLocation", array("locationId" => (isset($context["id"]) ? $context["id"] : null), "viewType" => (isset($context["view"]) ? $context["view"] : null), "params" => (isset($context["params"]) ? $context["params"] : null))));
        // line 13
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "EzPublishCoreBundle:FieldType/RichText/embed:location.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 13,  31 => 2,  19 => 1,);
    }
}