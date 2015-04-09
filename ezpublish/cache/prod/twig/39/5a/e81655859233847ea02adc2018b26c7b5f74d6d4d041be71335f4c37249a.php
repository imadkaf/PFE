<?php

/* eZDemoBundle:gallery_item:image.html.twig */
class __TwigTemplate_395ae81655859233847ea02adc2018b26c7b5f74d6d4d041be71335f4c37249a extends Twig_Template
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
        $context["big_alias"] = ((array_key_exists("big_alias", $context)) ? (_twig_default_filter((isset($context["big_alias"]) ? $context["big_alias"] : null), "gallery")) : ("gallery"));
        // line 3
        $context["thumb_alias"] = ((array_key_exists("thumb_alias", $context)) ? (_twig_default_filter((isset($context["thumb_alias"]) ? $context["thumb_alias"] : null), "gallerythumbnail")) : ("gallerythumbnail"));
        // line 6
        $context["big_image_variation"] = $this->env->getExtension('ezpublish.content')->getImageVariation($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "getField", array(0 => "image"), "method"), $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "versionInfo", array()), (isset($context["big_alias"]) ? $context["big_alias"] : null));
        // line 7
        $context["thumb_image_variation"] = $this->env->getExtension('ezpublish.content')->getImageVariation($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "getField", array(0 => "image"), "method"), $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "versionInfo", array()), (isset($context["thumb_alias"]) ? $context["thumb_alias"] : null));
        // line 8
        $context["content_name"] = $this->env->getExtension('ezpublish.content')->getTranslatedContentName((isset($context["content"]) ? $context["content"] : null));
        // line 9
        echo "<!-- BOX CONTENT: START -->
<figure class=\"attribute-image\"
        data-gallery-src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["big_image_variation"]) ? $context["big_image_variation"] : null), "uri", array())), "html", null, true);
        echo "\"
        data-gallery-height=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["big_image_variation"]) ? $context["big_image_variation"] : null), "height", array()), "html", null, true);
        echo "\"
        data-gallery-width=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["big_image_variation"]) ? $context["big_image_variation"] : null), "height", array()), "html", null, true);
        echo "\"
        data-gallery-node-url=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath((isset($context["location"]) ? $context["location"] : null));
        echo "\"
        data-gallery-node-id=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["location"]) ? $context["location"] : null), "id", array()), "html", null, true);
        echo "\"
        data-gallery-item=\"image\"
        title=\"";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["content_name"]) ? $context["content_name"] : null), "html", null, true);
        echo "\">
    <a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath((isset($context["location"]) ? $context["location"] : null));
        echo "\">
        <img src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["thumb_image_variation"]) ? $context["thumb_image_variation"] : null), "uri", array())), "html", null, true);
        echo "\" width=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["thumb_image_variation"]) ? $context["thumb_image_variation"] : null), "width", array()), "html", null, true);
        echo "\" height=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["thumb_image_variation"]) ? $context["thumb_image_variation"] : null), "height", array()), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, (isset($context["content_name"]) ? $context["content_name"] : null), "html", null, true);
        echo "\" />
    </a>
    <figcaption class=\"attribute-caption\">
    ";
        // line 22
        if ((!$this->env->getExtension('ezpublish.content')->isFieldEmpty((isset($context["content"]) ? $context["content"] : null), "caption"))) {
            // line 23
            echo "        ";
            echo $this->env->getExtension('ezpublish.content')->renderField((isset($context["content"]) ? $context["content"] : null), "caption");
            echo "
    ";
        }
        // line 25
        echo "    </figcaption>
</figure>
<!-- BOX CONTENT: END -->
";
    }

    public function getTemplateName()
    {
        return "eZDemoBundle:gallery_item:image.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 25,  76 => 23,  74 => 22,  62 => 19,  58 => 18,  54 => 17,  49 => 15,  45 => 14,  41 => 13,  37 => 12,  33 => 11,  29 => 9,  27 => 8,  25 => 7,  23 => 6,  21 => 3,  19 => 2,);
    }
}
