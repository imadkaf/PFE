<?php

/* eZDemoBundle:footer:latest_content.html.twig */
class __TwigTemplate_eeb3406e3478e795a9c5807643dc86ad99e188cc69a71c3ffb766c8a42017770 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Latest News"), "html", null, true);
        echo "</h3>
<ul>
    ";
        // line 3
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["latestContent"]) ? $context["latestContent"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["content"]) {
            // line 4
            echo "        ";
            // line 5
            echo "        <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ez_urlalias", array("locationId" => $this->getAttribute($this->getAttribute($context["content"], "contentInfo", array()), "mainLocationId", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('ezpublish.content')->getTranslatedContentName($context["content"]), "html", null, true);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['content'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "</ul>
";
    }

    public function getTemplateName()
    {
        return "eZDemoBundle:footer:latest_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 7,  31 => 5,  29 => 4,  25 => 3,  19 => 1,);
    }
}
