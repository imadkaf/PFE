<?php

/* eZDemoBundle::page_head.html.twig */
class __TwigTemplate_8f6c980341ed5fda33275975c7e9233b1a2df9b244be83a6735a44961a3293f8 extends Twig_Template
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
        // line 5
        if ((array_key_exists("content", $context) && (!array_key_exists("title", $context)))) {
            // line 6
            echo "    ";
            $context["title"] = $this->env->getExtension('ezpublish.content')->getTranslatedContentName((isset($context["content"]) ? $context["content"] : null));
        }
        // line 8
        echo "
<title>";
        // line 9
        echo twig_escape_filter($this->env, ((array_key_exists("title", $context)) ? (_twig_default_filter((isset($context["title"]) ? $context["title"] : null), "Home")) : ("Home")), "html", null, true);
        echo "</title>
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\"/>
<meta name=\"author\" content=\"eZ Systems\"/>
<meta name=\"copyright\" content=\"eZ Systems\"/>
<meta name=\"description\" content=\"Content Management System\"/>
<meta name=\"keywords\" content=\"cms, publish, e-commerce, content management, development framework\"/>
<meta name=\"MSSmartTagsPreventParsing\" content=\"TRUE\"/>
<meta name=\"generator\" content=\"eZ Publish\"/>

<link rel=\"Home\" href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath($this->getAttribute((isset($context["ezpublish"]) ? $context["ezpublish"] : null), "rootLocation", array()));
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Home"), "html", null, true);
        echo "\"/>
<link rel=\"Index\" href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath($this->getAttribute((isset($context["ezpublish"]) ? $context["ezpublish"] : null), "rootLocation", array()));
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Home"), "html", null, true);
        echo "\"/>
<link rel=\"Top\" href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath($this->getAttribute((isset($context["ezpublish"]) ? $context["ezpublish"] : null), "rootLocation", array()));
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Home"), "html", null, true);
        echo "\"/>
<link rel=\"Search\" href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("ez_legacy", array("module_uri" => "/content/advancedsearch"));
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Search"), "html", null, true);
        echo "\"/>
<link rel=\"Shortcut icon\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/design/standard/images/favicon.ico"), "html", null, true);
        echo "\" type=\"image/x-icon\"/>
<link rel=\"Copyright\" href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("ez_legacy", array("module_uri" => "/ezinfo/copyright"));
        echo "\"/>
<link rel=\"Author\" href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("ez_legacy", array("module_uri" => "/ezinfo/about"));
        echo "\"/>
<link rel=\"Alternate\" type=\"application/rss+xml\" title=\"RSS\" href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("ez_legacy", array("module_uri" => "/rss/feed/my_feed"));
        echo "\"/>

";
        // line 28
        if ((array_key_exists("content", $context) && $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "contentInfo", array()), "mainLocationId", array()))) {
            // line 29
            echo "    <link rel=\"canonical\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ez_urlalias", array("locationId" => $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "contentInfo", array()), "mainLocationId", array()))), "html", null, true);
            echo "\" />
";
        }
        // line 31
        echo "
<script type=\"text/javascript\">
    (function () {
        var head = document.getElementsByTagName('head')[0];
        var printNode = document.createElement('link');
        printNode.rel = 'Alternate';
        printNode.href = \"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("ez_legacy", array("module_uri" => "/layout/set/print/content/view/sitemap/2"));
        echo "\" + document.location.search;
        printNode.media = 'print';
        printNode.title = \"Printable version\";
        head.appendChild(printNode);
    })();
</script>
";
    }

    public function getTemplateName()
    {
        return "eZDemoBundle::page_head.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 37,  89 => 31,  83 => 29,  81 => 28,  76 => 25,  72 => 24,  68 => 23,  64 => 22,  58 => 21,  52 => 20,  46 => 19,  40 => 18,  28 => 9,  25 => 8,  21 => 6,  19 => 5,);
    }
}
