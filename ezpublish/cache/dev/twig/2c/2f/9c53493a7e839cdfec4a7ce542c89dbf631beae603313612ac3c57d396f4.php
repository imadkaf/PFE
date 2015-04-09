<?php

/* eZDemoBundle:block_item_campaign:article.html.twig */
class __TwigTemplate_2c2f9c53493a7e839cdfec4a7ce542c89dbf631beae603313612ac3c57d396f4 extends eZ\Bundle\EzPublishDebugBundle\Twig\DebugTemplate
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
        $context["image_alias"] = ((array_key_exists("image_alias", $context)) ? (_twig_default_filter((isset($context["image_alias"]) ? $context["image_alias"] : $this->getContext($context, "image_alias")), "campaign")) : ("campaign"));
        // line 2
        $context["content_name"] = $this->env->getExtension('ezpublish.content')->getTranslatedContentName((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")));
        // line 3
        echo "<!-- BOX CONTENT: START -->
<figure class=\"attribute-image\">
    ";
        // line 6
        echo "    ";
        echo $this->env->getExtension('ezpublish.content')->renderField((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "image", array("template" => "eZDemoBundle:fields:ezimage_simple.html.twig", "parameters" => array("alias" => (isset($context["image_alias"]) ? $context["image_alias"] : $this->getContext($context, "image_alias")), "alt" => (isset($context["content_name"]) ? $context["content_name"] : $this->getContext($context, "content_name")))));
        // line 13
        echo "
    <figcaption class=\"attribute-caption\">
    ";
        // line 15
        if ((!$this->env->getExtension('ezpublish.content')->isFieldEmpty((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "intro"))) {
            // line 16
            echo "        ";
            echo $this->env->getExtension('ezpublish.content')->renderField((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "intro");
            echo "
    ";
        }
        // line 18
        echo "        <h3><a href=";
        echo $this->env->getExtension('routing')->getPath((isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")));
        echo ">";
        echo twig_escape_filter($this->env, (isset($context["content_name"]) ? $context["content_name"] : $this->getContext($context, "content_name")), "html", null, true);
        echo "</a></h3>
    </figcaption>
</figure>
<!-- BOX CONTENT: END -->
";
    }

    public function getTemplateName()
    {
        return "eZDemoBundle:block_item_campaign:article.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 18,  36 => 16,  34 => 15,  30 => 13,  27 => 6,  23 => 3,  21 => 2,  19 => 1,);
    }
}
