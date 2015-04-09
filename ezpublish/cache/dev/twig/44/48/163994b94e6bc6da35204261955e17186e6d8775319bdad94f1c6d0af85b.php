<?php

/* eZDemoBundle:full:small_folder.html.twig */
class __TwigTemplate_4448163994b94e6bc6da35204261955e17186e6d8775319bdad94f1c6d0af85b extends eZ\Bundle\EzPublishDebugBundle\Twig\DebugTemplate
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate((((isset($context["noLayout"]) ? $context["noLayout"] : $this->getContext($context, "noLayout"))) ? ((isset($context["viewbaseLayout"]) ? $context["viewbaseLayout"] : $this->getContext($context, "viewbaseLayout"))) : ("eZDemoBundle::pagelayout.html.twig")));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"attribute-header\">
    <h1 class=\"long\">";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "contentInfo", array()), "name", array()), "html", null, true);
        echo " (location ID is #";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "id", array()), "html", null, true);
        echo ")</h1>
</div>

<div>
    <h3>Name:</h3>
    ";
        // line 10
        echo $this->env->getExtension('ezpublish.content')->renderField((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "name", array("editMode" => true, "attr" => array("class" => "foobar")));
        // line 18
        echo "

    <h3>Description:</h3>
    ";
        // line 21
        echo $this->env->getExtension('ezpublish.content')->renderField((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "description", array("editMode" => true));
        // line 28
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "eZDemoBundle:full:small_folder.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 28,  49 => 21,  44 => 18,  42 => 10,  32 => 5,  29 => 4,  26 => 3,);
    }
}
