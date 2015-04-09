<?php

/* eZDemoBundle:search:search.html.twig */
class __TwigTemplate_44b0dcb678763a34aedcae5f46b63d1e3da64014f51d708e1b1fb171b9926b7c extends eZ\Bundle\EzPublishDebugBundle\Twig\DebugTemplate
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("eZDemoBundle::pagelayout.html.twig");

        $this->blocks = array(
            'page_head' => array($this, 'block_page_head'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "eZDemoBundle::pagelayout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_page_head($context, array $blocks = array())
    {
        // line 9
        echo "    ";
        $context["title"] = $this->env->getExtension('translator')->trans("Search page");
        // line 10
        echo "    ";
        $this->displayParentBlock("page_head", $context, $blocks);
        echo "
";
    }

    // line 13
    public function block_content($context, array $blocks = array())
    {
        // line 14
        echo "
<div class=\"content-search\">

    <div class=\"attribute-header\">
        <h1 class=\"long\">";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Search"), "html", null, true);
        echo "</h1>
    </div>

    ";
        // line 21
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("class" => "form-search"));
        echo "
        ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "searchText", array()), 'widget', array("attr" => array("class" => "input-xxlarge search-query", "autofocus" => "autofocus")));
        echo "

        ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget', array("label" => $this->env->getExtension('translator')->trans("Search"), "attr" => array("class" => "btn")));
        echo "

        ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "searchText", array()), 'errors');
        echo "
    ";
        // line 27
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "


    ";
        // line 31
        echo "    ";
        $context["advancedSearchUrl"] = "";
        // line 32
        echo "
    ";
        // line 33
        if ((isset($context["searchText"]) ? $context["searchText"] : $this->getContext($context, "searchText"))) {
            // line 34
            echo "        ";
            $context["advancedSearchUrl"] = ("?SearchText=" . (isset($context["searchText"]) ? $context["searchText"] : $this->getContext($context, "searchText")));
            // line 35
            echo "    ";
        }
        // line 36
        echo "
    <p>
        <a href=";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ez_legacy", array("module_uri" => ("/content/advancedsearch/" . (isset($context["advancedSearchUrl"]) ? $context["advancedSearchUrl"] : $this->getContext($context, "advancedSearchUrl"))))), "html", null, true);
        echo ">
            ";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("For more options try the advanced search"), "html", null, true);
        echo "
        </a>
    </p>

    ";
        // line 43
        if (((isset($context["searchCount"]) ? $context["searchCount"] : $this->getContext($context, "searchCount")) > 0)) {
            // line 44
            echo "        <div class=\"feedback\">
            <h2>";
            // line 45
            echo $this->env->getExtension('translator')->getTranslator()->trans("Search for \"%searchText%\" returned %searchCount% matches", array("%searchText%" => (isset($context["searchText"]) ? $context["searchText"] : $this->getContext($context, "searchText")), "%searchCount%" => (isset($context["searchCount"]) ? $context["searchCount"] : $this->getContext($context, "searchCount"))), "messages");
            echo "</h2>
        </div>

        <div class=\"search-results\">
            ";
            // line 49
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pagerSearch"]) ? $context["pagerSearch"] : $this->getContext($context, "pagerSearch")));
            foreach ($context['_seq'] as $context["_key"] => $context["searchResult"]) {
                // line 50
                echo "                ";
                // line 51
                echo "                ";
                echo $this->env->getExtension('http_kernel')->renderFragmentStrategy("esi", $this->env->getExtension('http_kernel')->controller("ez_content:viewLocation", array("locationId" => $this->getAttribute($this->getAttribute($context["searchResult"], "contentInfo", array()), "mainLocationId", array()), "viewType" => "line")));
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['searchResult'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "        </div>

        ";
            // line 55
            if ($this->getAttribute((isset($context["pagerSearch"]) ? $context["pagerSearch"] : $this->getContext($context, "pagerSearch")), "haveToPaginate", array(), "method")) {
                // line 56
                echo "            <div class=\"pagination-centered\">
                ";
                // line 57
                echo $this->env->getExtension('pagerfanta')->renderPagerfanta((isset($context["pagerSearch"]) ? $context["pagerSearch"] : $this->getContext($context, "pagerSearch")), "twitter_bootstrap_translated");
                echo "
            </div>
        ";
            }
            // line 60
            echo "    ";
        } else {
            // line 61
            echo "        <div class=\"warning\">
            <h2>";
            // line 62
            echo $this->env->getExtension('translator')->getTranslator()->trans("No results were found when searching for \"%searchText%\".", array("%searchText%" => (isset($context["searchText"]) ? $context["searchText"] : $this->getContext($context, "searchText"))), "messages");
            echo "</h2>
        </div>
        <p>";
            // line 64
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Search tips"), "html", null, true);
            echo "</p>
        <ul>
            <li>";
            // line 66
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Check spelling of keywords."), "html", null, true);
            echo "</li>
            <li>";
            // line 67
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Try changing some keywords (eg, \"car\" instead of \"cars\")."), "html", null, true);
            echo "</li>
            <li>";
            // line 68
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Try searching with less specific keywords."), "html", null, true);
            echo "</li>
            <li>";
            // line 69
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Reduce number of keywords to get more results."), "html", null, true);
            echo "</li>
        </ul>
    ";
        }
        // line 72
        echo "</div>

";
    }

    public function getTemplateName()
    {
        return "eZDemoBundle:search:search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 72,  180 => 69,  176 => 68,  172 => 67,  168 => 66,  163 => 64,  158 => 62,  155 => 61,  152 => 60,  146 => 57,  143 => 56,  141 => 55,  137 => 53,  128 => 51,  126 => 50,  122 => 49,  115 => 45,  112 => 44,  110 => 43,  103 => 39,  99 => 38,  95 => 36,  92 => 35,  89 => 34,  87 => 33,  84 => 32,  81 => 31,  75 => 27,  71 => 26,  66 => 24,  61 => 22,  57 => 21,  51 => 18,  45 => 14,  42 => 13,  35 => 10,  32 => 9,  29 => 8,);
    }
}
