<?php

/* EzPublishLegacyBundle::ez_legacy_render_css.html.twig */
class __TwigTemplate_4ed2fa9ccea7e0f1d4ff791aae9aaa65b51f767304ba1f308639a99a185f0132 extends eZ\Bundle\EzPublishDebugBundle\Twig\DebugTemplate
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'ez_legacy_render_css' => array($this, 'block_ez_legacy_render_css'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $this->displayBlock('ez_legacy_render_css', $context, $blocks);
    }

    public function block_ez_legacy_render_css($context, array $blocks = array())
    {
        // line 3
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["css_files"]) ? $context["css_files"] : $this->getContext($context, "css_files")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 4
            echo "        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($context["item"]), "html", null, true);
            echo "\" />
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "
    ";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["css_code_lines"]) ? $context["css_code_lines"] : $this->getContext($context, "css_code_lines")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 8
            echo "        <style type=\"text/css\">
            ";
            // line 9
            echo $context["item"];
            echo "
        </style>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "EzPublishLegacyBundle::ez_legacy_render_css.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  50 => 9,  47 => 8,  43 => 7,  40 => 6,  31 => 4,  26 => 3,  20 => 2,);
    }
}
