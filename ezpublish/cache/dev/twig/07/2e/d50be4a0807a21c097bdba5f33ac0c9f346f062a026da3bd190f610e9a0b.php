<?php

/* eZDemoBundle:block_item_highlighted:article.html.twig */
class __TwigTemplate_072ed50be4a0807a21c097bdba5f33ac0c9f346f062a026da3bd190f610e9a0b extends eZ\Bundle\EzPublishDebugBundle\Twig\DebugTemplate
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
        // line 3
        $context["image_alias"] = ((array_key_exists("image_alias", $context)) ? (_twig_default_filter((isset($context["image_alias"]) ? $context["image_alias"] : $this->getContext($context, "image_alias")), "contentgrid")) : ("contentgrid"));
        // line 4
        echo "<article class=\"highlighted\">
    <a href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath((isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")));
        echo "\" class=\"teaser-link\">
        ";
        // line 6
        if ((!$this->env->getExtension('ezpublish.content')->isFieldEmpty((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "image"))) {
            // line 7
            echo "        <div class=\"attribute-image\">
            ";
            // line 8
            echo $this->env->getExtension('ezpublish.content')->renderField((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "image", array("template" => "eZDemoBundle:fields:ezimage_simple.html.twig", "parameters" => array("alias" => (isset($context["image_alias"]) ? $context["image_alias"] : $this->getContext($context, "image_alias")))));
            // line 15
            echo "
        </div>
        ";
        }
        // line 18
        echo "        <div class=\"attribute-header\">
            <h3>";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('ezpublish.content')->getTranslatedContentName((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content"))), "html", null, true);
        echo "</h3>
        </div>

        <div class=\"attribute-short\">
            ";
        // line 23
        echo $this->env->getExtension('ezpublish.content')->renderField((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "intro");
        echo "
        </div>
    </a>
</article>
";
    }

    public function getTemplateName()
    {
        return "eZDemoBundle:block_item_highlighted:article.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 23,  43 => 19,  40 => 18,  35 => 15,  33 => 8,  30 => 7,  28 => 6,  24 => 5,  21 => 4,  19 => 3,);
    }
}
