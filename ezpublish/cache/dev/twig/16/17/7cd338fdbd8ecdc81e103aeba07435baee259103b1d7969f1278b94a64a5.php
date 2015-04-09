<?php

/* eZDemoBundle:block_item:image.html.twig */
class __TwigTemplate_16177cd338fdbd8ecdc81e103aeba07435baee259103b1d7969f1278b94a64a5 extends eZ\Bundle\EzPublishDebugBundle\Twig\DebugTemplate
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
        $context["image_alias"] = ((array_key_exists("image_alias", $context)) ? (_twig_default_filter((isset($context["image_alias"]) ? $context["image_alias"] : $this->getContext($context, "image_alias")), "contentgrid")) : ("contentgrid"));
        // line 2
        echo "<!-- BOX CONTENT: START -->
<figure class=\"attribute-image\">
    ";
        // line 4
        echo $this->env->getExtension('ezpublish.content')->renderField((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "image", array("template" => "eZDemoBundle:fields:ezimage_simple.html.twig", "parameters" => array("alias" => (isset($context["image_alias"]) ? $context["image_alias"] : $this->getContext($context, "image_alias")))));
        // line 11
        echo "
    <figcaption class=\"attribute-caption\">
    ";
        // line 13
        if ((!$this->env->getExtension('ezpublish.content')->isFieldEmpty((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "caption"))) {
            // line 14
            echo "        ";
            echo $this->env->getExtension('ezpublish.content')->renderField((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "caption");
            echo "
    ";
        }
        // line 16
        echo "        <h3><a href=\"";
        echo $this->env->getExtension('routing')->getPath((isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")));
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('ezpublish.content')->getTranslatedContentName((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content"))), "html", null, true);
        echo "</a></h3>
    </figcaption>
</figure>
<!-- BOX CONTENT: END -->
";
    }

    public function getTemplateName()
    {
        return "eZDemoBundle:block_item:image.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 16,  33 => 14,  31 => 13,  27 => 11,  25 => 4,  21 => 2,  19 => 1,);
    }
}
