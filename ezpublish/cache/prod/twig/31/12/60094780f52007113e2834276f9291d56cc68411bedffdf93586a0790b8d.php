<?php

/* eZDemoBundle::page_mainarea.html.twig */
class __TwigTemplate_311260094780f52007113e2834276f9291d56cc68411bedffdf93586a0790b8d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"span";
        $context["innerColumnSize"] = ((array_key_exists("innerColumnSize", $context)) ? (_twig_default_filter((isset($context["innerColumnSize"]) ? $context["innerColumnSize"] : null), 12)) : (12));
        echo " main-content\">
    ";
        // line 2
        $this->displayBlock('content', $context, $blocks);
        // line 3
        echo "</div>
";
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "eZDemoBundle::page_mainarea.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 2,  27 => 3,  25 => 2,  20 => 1,);
    }
}
