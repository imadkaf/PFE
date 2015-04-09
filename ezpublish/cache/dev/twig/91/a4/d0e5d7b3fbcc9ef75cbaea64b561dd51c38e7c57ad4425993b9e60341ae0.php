<?php

/* eZDemoBundle:line:article.html.twig */
class __TwigTemplate_91a4d0e5d7b3fbcc9ef75cbaea64b561dd51c38e7c57ad4425993b9e60341ae0 extends eZ\Bundle\EzPublishDebugBundle\Twig\DebugTemplate
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
        // line 4
        echo "
";
        // line 7
        $context["content_size"] = "8";
        // line 8
        echo "
<div class=\"content-view-line\">
    <article class=\"class-article row\">

    ";
        // line 12
        if ((!$this->env->getExtension('ezpublish.content')->isFieldEmpty((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "image"))) {
            // line 13
            echo "        <div class=\"span2\">
            <div class=\"attribute-image\">
                ";
            // line 15
            echo $this->env->getExtension('ezpublish.content')->renderField((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "image", array("template" => "eZDemoBundle:fields:ezimage_simple.html.twig", "parameters" => array("alias" => "articlethumbnail")));
            // line 22
            echo "
            </div>
        </div>
        ";
            // line 25
            $context["content_size"] = "6";
            // line 26
            echo "    ";
        }
        // line 27
        echo "
    <div class=\"span";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["content_size"]) ? $context["content_size"] : $this->getContext($context, "content_size")), "html", null, true);
        echo "\">
        <div class=\"attribute-header\">
            <h2>
                <a href=";
        // line 31
        echo $this->env->getExtension('routing')->getPath((isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")));
        echo " title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('ezpublish.content')->getTranslatedFieldValue((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "title"), "html", null, true);
        echo "\" class=\"teaser-link\">";
        echo $this->env->getExtension('ezpublish.content')->renderField((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "title");
        echo "</a>
            </h2>
        </div>

        <div class=\"attribute-byline with-comments\">
            <span class=\"date\">
                ";
        // line 37
        echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "contentInfo", array()), "publishedDate", array()), "short", "short", $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "locale", array())), "html", null, true);
        echo "
            </span>
            ";
        // line 39
        if ((!$this->env->getExtension('ezpublish.content')->isFieldEmpty((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "intro"))) {
            // line 40
            echo "            <span class=\"author\">
                ";
            // line 41
            echo $this->env->getExtension('ezpublish.content')->renderField((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "author", array("template" => "eZDemoBundle:fields:ezauthor_simple.html.twig"));
            // line 47
            echo "
            </span>
            ";
        }
        // line 50
        echo "        </div>

        ";
        // line 52
        if ((!$this->env->getExtension('ezpublish.content')->isFieldEmpty((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "intro"))) {
            // line 53
            echo "        <div class=\"attribute-short\">
            ";
            // line 54
            echo $this->env->getExtension('ezpublish.content')->renderField((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "intro");
            echo "
        </div>
        ";
        }
        // line 57
        echo "    </div>

    </article>
</div>
";
    }

    public function getTemplateName()
    {
        return "eZDemoBundle:line:article.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 57,  96 => 54,  93 => 53,  91 => 52,  87 => 50,  82 => 47,  80 => 41,  77 => 40,  75 => 39,  70 => 37,  57 => 31,  51 => 28,  48 => 27,  45 => 26,  43 => 25,  38 => 22,  36 => 15,  32 => 13,  30 => 12,  24 => 8,  22 => 7,  19 => 4,);
    }
}
