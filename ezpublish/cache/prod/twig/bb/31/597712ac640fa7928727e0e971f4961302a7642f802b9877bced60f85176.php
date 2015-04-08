<?php

/* EzPublishCoreBundle:FieldType/RichText/embed:content.html.twig */
class __TwigTemplate_bb31597712ac640fa7928727e0e971f4961302a7642f802b9877bced60f85176 extends Twig_Template
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
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("ez_content:embedContent", array("contentId" => (isset($context["id"]) ? $context["id"] : null), "viewType" => (isset($context["view"]) ? $context["view"] : null), "params" => (isset($context["params"]) ? $context["params"] : null))));
        // line 13
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "EzPublishCoreBundle:FieldType/RichText/embed:content.html.twig";
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
