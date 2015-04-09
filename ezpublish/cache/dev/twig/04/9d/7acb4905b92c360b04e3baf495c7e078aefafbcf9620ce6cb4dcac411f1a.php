<?php

/* eZDemoBundle:footer:links.html.twig */
class __TwigTemplate_049d7acb4905b92c360b04e3baf495c7e078aefafbcf9620ce6cb4dcac411f1a extends eZ\Bundle\EzPublishDebugBundle\Twig\DebugTemplate
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
        echo "<h3>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("eZ Links"), "html", null, true);
        echo "</h3>
";
        // line 2
        echo $this->env->getExtension('ezpublish.content')->renderField((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "body", array("editMode" => false));
        // line 9
        echo "
";
    }

    public function getTemplateName()
    {
        return "eZDemoBundle:footer:links.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 9,  24 => 2,  19 => 1,);
    }
}
