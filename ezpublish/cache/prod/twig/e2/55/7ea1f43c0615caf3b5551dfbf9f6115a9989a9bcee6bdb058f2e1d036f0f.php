<?php

/* eZDemoBundle:fields:ezbinaryfile_video.html.twig */
class __TwigTemplate_e2557ea1f43c0615caf3b5551dfbf9f6115a9989a9bcee6bdb058f2e1d036f0f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("EzPublishCoreBundle::content_fields.html.twig");

        $this->blocks = array(
            'ezbinaryfile_field' => array($this, 'block_ezbinaryfile_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EzPublishCoreBundle::content_fields.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_ezbinaryfile_field($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        $context["videoUri"] = ((((((("/content/download/" . $this->getAttribute((isset($context["contentInfo"]) ? $context["contentInfo"] : null), "id", array())) . "/") . $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "id", array())) . "/version/") . $this->getAttribute((isset($context["contentInfo"]) ? $context["contentInfo"] : null), "currentVersionNo", array())) . "/file/") . twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "value", array()), "fileName", array()), "url"));
        // line 9
        echo "    ";
        $context["videoType"] = (($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "videoType", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "videoType", array()), "video/mp4")) : ("video/mp4"));
        // line 10
        echo "    ";
        $context["controls"] = (($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "controls", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "controls", array()), true)) : (true));
        // line 11
        echo "    ";
        $context["preload"] = (($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "preload", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "preload", array()), "auto")) : ("auto"));
        // line 12
        echo "    ";
        $context["width"] = (($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "width", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "width", array()), 330)) : (330));
        // line 13
        echo "    ";
        $context["height"] = (($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "height", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "height", array()), 264)) : (264));
        // line 14
        echo "    ";
        $context["poster"] = (($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "poster", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "poster", array()), "")) : (""));
        // line 15
        echo "    <video";
        if ((isset($context["controls"]) ? $context["controls"] : null)) {
            echo " controls";
        }
        echo " preload=\"";
        echo twig_escape_filter($this->env, (isset($context["preload"]) ? $context["preload"] : null), "html", null, true);
        echo "\" width=\"";
        echo twig_escape_filter($this->env, (isset($context["width"]) ? $context["width"] : null), "html", null, true);
        echo "\" height=\"";
        echo twig_escape_filter($this->env, (isset($context["height"]) ? $context["height"] : null), "html", null, true);
        echo "\" poster=\"";
        echo twig_escape_filter($this->env, (isset($context["poster"]) ? $context["poster"] : null), "html", null, true);
        echo "\" ";
        $this->displayBlock("field_attributes", $context, $blocks);
        echo ">
        <source src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ez_legacy", array("module_uri" => (isset($context["videoUri"]) ? $context["videoUri"] : null))), "html", null, true);
        echo "\" type=\"";
        echo twig_escape_filter($this->env, (isset($context["videoType"]) ? $context["videoType"] : null), "html", null, true);
        echo "\" />
    </video>
";
    }

    public function getTemplateName()
    {
        return "eZDemoBundle:fields:ezbinaryfile_video.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 16,  52 => 15,  49 => 14,  46 => 13,  43 => 12,  40 => 11,  37 => 10,  34 => 9,  31 => 6,  28 => 5,);
    }
}
