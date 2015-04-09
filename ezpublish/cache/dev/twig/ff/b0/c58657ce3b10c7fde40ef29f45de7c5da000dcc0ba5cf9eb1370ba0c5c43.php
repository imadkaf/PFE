<?php

/* eZDemoBundle::pagelayout.html.twig */
class __TwigTemplate_ffb0c58657ce3b10c7fde40ef29f45de7c5da000dcc0ba5cf9eb1370ba0c5c43 extends eZ\Bundle\EzPublishDebugBundle\Twig\DebugTemplate
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'page_head' => array($this, 'block_page_head'),
            'header' => array($this, 'block_header'),
            'topMenu' => array($this, 'block_topMenu'),
            'path' => array($this, 'block_path'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
            'footerScript' => array($this, 'block_footerScript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<!--[if lt IE 9 ]><html class=\"unsupported-ie ie\" lang=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "locale", array()), "html", null, true);
        echo "\"><![endif]-->
<!--[if IE 9 ]><html class=\"ie ie9\" lang=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "locale", array()), "html", null, true);
        echo "\"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "locale", array()), "html", null, true);
        echo "\"><!--<![endif]-->
<head>
    ";
        // line 7
        echo "    ";
        $this->env->loadTemplate("eZDemoBundle::page_head_displaystyles.html.twig")->display($context);
        // line 8
        echo "
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"/>

    ";
        // line 11
        $this->displayBlock('page_head', $context, $blocks);
        // line 14
        echo "    ";
        $this->env->loadTemplate("eZDemoBundle::page_head_style.html.twig")->display($context);
        // line 15
        echo "    ";
        $this->env->loadTemplate("eZDemoBundle::page_head_script.html.twig")->display($context);
        // line 16
        echo "</head>
<body>

";
        // line 19
        if ((array_key_exists("location", $context) && (!$this->getAttribute((isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "isDraft", array())))) {
            // line 20
            echo "    ";
            $context["currentLocation"] = (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location"));
        }
        // line 22
        echo "
<!-- Complete page area: START -->
";
        // line 24
        if (array_key_exists("currentLocation", $context)) {
            // line 25
            echo "    ";
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("ezpublish_legacy.website_toolbar.controller:websiteToolbarAction", array("locationId" => $this->getAttribute((isset($context["currentLocation"]) ? $context["currentLocation"] : $this->getContext($context, "currentLocation")), "id", array()))));
            echo "
";
        }
        // line 27
        echo "<div id=\"page\" class=\"\">
    <!-- Header area: START -->
    ";
        // line 29
        $this->displayBlock('header', $context, $blocks);
        // line 32
        echo "    <!-- Header area: END -->
    <div class=\"navbar main-navi\">
        <!-- Top menu area: START -->
        ";
        // line 35
        $this->displayBlock('topMenu', $context, $blocks);
        // line 43
        echo "        <!-- Top menu area: END -->
        ";
        // line 45
        echo "        <!-- Path area: START -->
        ";
        // line 46
        if ((array_key_exists("pageData", $context) && $this->getAttribute((isset($context["pageData"]) ? $context["pageData"] : $this->getContext($context, "pageData")), "showPath", array()))) {
            // line 47
            echo "            ";
            $this->displayBlock('path', $context, $blocks);
            // line 50
            echo "        ";
        }
        // line 51
        echo "        <!-- Path area: END -->
    </div>
    <div class=\"container\">
        ";
        // line 54
        $this->displayBlock('breadcrumb', $context, $blocks);
        // line 59
        echo "        <div class=\"row\">
            <!-- Main area: START -->
            <div class=\"span";
        // line 61
        echo twig_escape_filter($this->env, ((array_key_exists("innerColumnSize", $context)) ? (_twig_default_filter((isset($context["innerColumnSize"]) ? $context["innerColumnSize"] : $this->getContext($context, "innerColumnSize")), 12)) : (12)), "html", null, true);
        echo " main-content\">
                ";
        // line 62
        $this->displayBlock('content', $context, $blocks);
        // line 63
        echo "            </div>
            <!-- Main area: END -->
        </div>
    </div>
    <!-- Footer area: START -->
    ";
        // line 68
        $this->displayBlock('footer', $context, $blocks);
        // line 71
        echo "    <!-- Footer area: END -->
</div>
<!-- Complete page area: END -->

<!-- Footer script area: START -->
";
        // line 76
        $this->displayBlock('footerScript', $context, $blocks);
        // line 79
        echo "<!-- Footer script area: END -->

</body>
</html>
";
    }

    // line 11
    public function block_page_head($context, array $blocks = array())
    {
        // line 12
        echo "        ";
        $this->env->loadTemplate("eZDemoBundle::page_head.html.twig")->display($context);
        // line 13
        echo "    ";
    }

    // line 29
    public function block_header($context, array $blocks = array())
    {
        // line 30
        echo "        ";
        $this->env->loadTemplate("eZDemoBundle::page_header.html.twig")->display($context);
        // line 31
        echo "    ";
    }

    // line 35
    public function block_topMenu($context, array $blocks = array())
    {
        // line 36
        echo "            ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("eZDemoBundle:Menu:topMenu", array("currentLocationId" => ((array_key_exists("currentLocation", $context)) ? ($this->getAttribute((isset($context["currentLocation"]) ? $context["currentLocation"] : $this->getContext($context, "currentLocation")), "id", array())) : (null)))));
        // line 41
        echo "
        ";
    }

    // line 47
    public function block_path($context, array $blocks = array())
    {
        // line 48
        echo "                ";
        $this->env->loadTemplate("eZDemoBundle::page_toppath.html.twig")->display($context);
        // line 49
        echo "            ";
    }

    // line 54
    public function block_breadcrumb($context, array $blocks = array())
    {
        // line 55
        echo "            ";
        if (array_key_exists("currentLocation", $context)) {
            // line 56
            echo "                ";
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("eZDemoBundle:Demo:viewBreadcrumb", array("locationId" => $this->getAttribute((isset($context["currentLocation"]) ? $context["currentLocation"] : $this->getContext($context, "currentLocation")), "id", array()))));
            echo "
            ";
        }
        // line 58
        echo "        ";
    }

    // line 62
    public function block_content($context, array $blocks = array())
    {
    }

    // line 68
    public function block_footer($context, array $blocks = array())
    {
        // line 69
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("eZDemoBundle:Footer:index"));
        echo "
    ";
    }

    // line 76
    public function block_footerScript($context, array $blocks = array())
    {
        // line 77
        echo "    ";
        $this->env->loadTemplate("eZDemoBundle::page_footer_script.html.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "eZDemoBundle::pagelayout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  227 => 77,  224 => 76,  217 => 69,  214 => 68,  209 => 62,  205 => 58,  199 => 56,  196 => 55,  193 => 54,  189 => 49,  186 => 48,  183 => 47,  178 => 41,  175 => 36,  172 => 35,  168 => 31,  165 => 30,  162 => 29,  158 => 13,  155 => 12,  152 => 11,  144 => 79,  142 => 76,  135 => 71,  133 => 68,  126 => 63,  124 => 62,  120 => 61,  116 => 59,  114 => 54,  109 => 51,  106 => 50,  103 => 47,  101 => 46,  98 => 45,  95 => 43,  93 => 35,  88 => 32,  86 => 29,  82 => 27,  76 => 25,  74 => 24,  70 => 22,  66 => 20,  64 => 19,  59 => 16,  56 => 15,  53 => 14,  51 => 11,  46 => 8,  43 => 7,  38 => 4,  34 => 3,  30 => 2,  27 => 1,);
    }
}
