<?php

/* eZDemoBundle:block_item:article.html.twig */
class __TwigTemplate_582467e45c5d8fa2bcf88f9d7bf9ff86268a4c53cd7e6925359766cb5086d14e extends Twig_Template
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
        $context["image_alias"] = ((array_key_exists("image_alias", $context)) ? (_twig_default_filter((isset($context["image_alias"]) ? $context["image_alias"] : null), "contentgrid")) : ("contentgrid"));
        // line 2
        echo "<article>
    <a href=\"";
        // line 3
        echo $this->env->getExtension('routing')->getPath((isset($context["location"]) ? $context["location"] : null));
        echo "\" class=\"teaser-link\">
        ";
        // line 4
        if ((!$this->env->getExtension('ezpublish.content')->isFieldEmpty((isset($context["content"]) ? $context["content"] : null), "image"))) {
            // line 5
            echo "        <div class=\"attribute-image\">
            ";
            // line 6
            echo $this->env->getExtension('ezpublish.content')->renderField((isset($context["content"]) ? $context["content"] : null), "image", array("template" => "eZDemoBundle:fields:ezimage_simple.html.twig", "parameters" => array("alias" => (isset($context["image_alias"]) ? $context["image_alias"] : null))));
            // line 13
            echo "
        </div>
        ";
        }
        // line 16
        echo "        <div class=\"attribute-header\">
            <h3>";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('ezpublish.content')->getTranslatedContentName((isset($context["content"]) ? $context["content"] : null)), "html", null, true);
        echo "</h3>
        </div>
    </a>

    <div class=\"attribute-short\">
        ";
        // line 22
        echo $this->env->getExtension('ezpublish.content')->renderField((isset($context["content"]) ? $context["content"] : null), "intro");
        echo "
    </div>

</article>
";
    }

    public function getTemplateName()
    {
        return "eZDemoBundle:block_item:article.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 22,  43 => 17,  40 => 16,  35 => 13,  33 => 6,  30 => 5,  28 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
