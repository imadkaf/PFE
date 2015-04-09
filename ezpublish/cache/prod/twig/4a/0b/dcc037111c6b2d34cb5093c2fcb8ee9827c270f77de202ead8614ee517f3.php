<?php

/* eZDemoBundle:full:landing_page.html.twig */
class __TwigTemplate_4a0bdcc037111c6b2d34cb5093c2fcb8ee9827c270f77de202ead8614ee517f3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("eZDemoBundle::pagelayout.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "eZDemoBundle::pagelayout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"content-view-full\">
    <div class=\"class-landing-page\">

        <div class=\"attribute-page\">
            ";
        // line 9
        echo "            ";
        // line 10
        echo "            ";
        echo $this->env->getExtension('ezpublish.content')->renderField((isset($context["content"]) ? $context["content"] : null), "page");
        echo "
        </div>

    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "eZDemoBundle:full:landing_page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 10,  37 => 9,  31 => 4,  28 => 3,);
    }
}
