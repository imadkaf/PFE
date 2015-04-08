<?php

/* eZDemoBundle::page_header.html.twig */
class __TwigTemplate_ac95a8e66ce2e27b62ad735d5b7646bd0da1a5f9e6d44f9a153642fe1ac3fc77 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'userlinks' => array($this, 'block_userlinks'),
            'logo' => array($this, 'block_logo'),
            'searchbox' => array($this, 'block_searchbox'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<header>
    <div class=\"container\">
        <div class=\"navbar extra-navi\">
            <div class=\"nav-collapse row\">

                ";
        // line 6
        $this->displayBlock('userlinks', $context, $blocks);
        // line 9
        echo "            </div>
        </div>
        <div class=\"row\">
            ";
        // line 12
        $this->displayBlock('logo', $context, $blocks);
        // line 15
        echo "
            ";
        // line 16
        $this->displayBlock('searchbox', $context, $blocks);
        // line 19
        echo "        </div>
    </div>
</header>
";
    }

    // line 6
    public function block_userlinks($context, array $blocks = array())
    {
        // line 7
        echo "                    ";
        echo $this->env->getExtension('http_kernel')->renderFragmentStrategy("hinclude", $this->env->getExtension('http_kernel')->controller("eZDemoBundle:Demo:userLinks"));
        echo "
                ";
    }

    // line 12
    public function block_logo($context, array $blocks = array())
    {
        // line 13
        echo "                ";
        $this->env->loadTemplate("eZDemoBundle::page_header_logo.html.twig")->display($context);
        // line 14
        echo "            ";
    }

    // line 16
    public function block_searchbox($context, array $blocks = array())
    {
        // line 17
        echo "                ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("eZDemoBundle:Search:searchBox"));
        echo "
            ";
    }

    public function getTemplateName()
    {
        return "eZDemoBundle::page_header.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  73 => 17,  70 => 16,  66 => 14,  63 => 13,  60 => 12,  53 => 7,  50 => 6,  43 => 19,  41 => 16,  38 => 15,  36 => 12,  31 => 9,  29 => 6,  22 => 1,);
    }
}
