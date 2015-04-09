<?php

/* eZDemoBundle:fields:ezimage_simple.html.twig */
class __TwigTemplate_7a7a44a897a1e1958d9499ce468828f6e97191ecc5c5db84764bdbe45759e47f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'ezimage_field' => array($this, 'block_ezimage_field'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $this->displayBlock('ezimage_field', $context, $blocks);
    }

    public function block_ezimage_field($context, array $blocks = array())
    {
        // line 6
        echo "    ";
        if ((!$this->env->getExtension('ezpublish.content')->isFieldEmpty((isset($context["content"]) ? $context["content"] : null), (isset($context["field"]) ? $context["field"] : null)))) {
            // line 7
            echo "        ";
            $context["image_alias"] = $this->env->getExtension('ezpublish.content')->getImageVariation((isset($context["field"]) ? $context["field"] : null), (isset($context["versionInfo"]) ? $context["versionInfo"] : null), (($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "alias", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "alias", array()), "original")) : ("original")));
            // line 8
            echo "        ";
            // line 9
            echo "        ";
            if ((isset($context["image_alias"]) ? $context["image_alias"] : null)) {
                // line 10
                echo "            <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["image_alias"]) ? $context["image_alias"] : null), "uri", array())), "html", null, true);
                echo "\"";
                if ($this->getAttribute((isset($context["imageAlias"]) ? $context["imageAlias"] : null), "width", array(), "any", true, true)) {
                    echo " width=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["image_alias"]) ? $context["image_alias"] : null), "width", array()), "html", null, true);
                    echo "\"";
                }
                if ($this->getAttribute((isset($context["imageAlias"]) ? $context["imageAlias"] : null), "height", array(), "any", true, true)) {
                    echo " height=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["image_alias"]) ? $context["image_alias"] : null), "height", array()), "html", null, true);
                    echo "\"";
                }
                echo " alt=\"";
                echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "alt", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "alt", array()), $this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "value", array()), "alternativeText", array()))) : ($this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "value", array()), "alternativeText", array()))), "html", null, true);
                echo "\" />
        ";
            }
            // line 12
            echo "    ";
        }
    }

    public function getTemplateName()
    {
        return "eZDemoBundle:fields:ezimage_simple.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  56 => 12,  37 => 10,  34 => 9,  32 => 8,  29 => 7,  26 => 6,  20 => 5,);
    }
}
