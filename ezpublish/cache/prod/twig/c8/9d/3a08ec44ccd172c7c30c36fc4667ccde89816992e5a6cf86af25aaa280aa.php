<?php

/* EzPublishLegacyBundle::ez_legacy_render_js.html.twig */
class __TwigTemplate_c89d3a08ec44ccd172c7c30c36fc4667ccde89816992e5a6cf86af25aaa280aa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'ez_legacy_render_js' => array($this, 'block_ez_legacy_render_js'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $this->displayBlock('ez_legacy_render_js', $context, $blocks);
    }

    public function block_ez_legacy_render_js($context, array $blocks = array())
    {
        // line 3
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["js_files"]) ? $context["js_files"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 4
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($context["item"]), "html", null, true);
            echo "\"></script>
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
        $context['_seq'] = twig_ensure_traversable((isset($context["js_code_lines"]) ? $context["js_code_lines"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 8
            echo "        <script type=\"text/javascript\">
            ";
            // line 9
            echo $context["item"];
            echo "
        </script>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "EzPublishLegacyBundle::ez_legacy_render_js.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  50 => 9,  47 => 8,  43 => 7,  40 => 6,  31 => 4,  26 => 3,  20 => 2,);
    }
}
