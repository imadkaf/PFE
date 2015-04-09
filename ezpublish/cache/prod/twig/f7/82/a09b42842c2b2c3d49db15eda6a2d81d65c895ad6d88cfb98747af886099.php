<?php

/* eZDemoBundle::page_head_style.html.twig */
class __TwigTemplate_f782a09b42842c2b2c3d49db15eda6a2d81d65c895ad6d88cfb98747af886099 extends Twig_Template
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
        // line 2
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "3c5fbcb_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3c5fbcb_0") : $this->env->getExtension('assets')->getAssetUrl("css/3c5fbcb_bootstrap_1.css");
            // line 7
            echo "    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"/>
";
            // asset "3c5fbcb_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3c5fbcb_1") : $this->env->getExtension('assets')->getAssetUrl("css/3c5fbcb_responsive_2.css");
            echo "    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"/>
";
            // asset "3c5fbcb_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3c5fbcb_2") : $this->env->getExtension('assets')->getAssetUrl("css/3c5fbcb_video_3.css");
            echo "    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"/>
";
        } else {
            // asset "3c5fbcb"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_3c5fbcb") : $this->env->getExtension('assets')->getAssetUrl("css/3c5fbcb.css");
            echo "    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\"/>
";
        }
        unset($context["asset_url"]);
        // line 9
        echo "
<style type=\"text/css\">
    @import url(\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("extension/ezwt/design/standard/stylesheets/websitetoolbar.css"), "html", null, true);
        echo "\");
</style>

";
        // line 14
        echo $this->env->getExtension('ezpublish.legacy')->renderLegacyCss();
        echo "
";
    }

    public function getTemplateName()
    {
        return "eZDemoBundle::page_head_style.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 14,  53 => 11,  49 => 9,  23 => 7,  19 => 2,);
    }
}
