<?php

/* EzPublishLegacyBundle::legacy_view_default_pagelayout.html.twig */
class __TwigTemplate_2a78de21c946fb1a53c422f6b0c735d092905d3d0314e403f43b3557129a73e8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!doctype html>
<html>
<head>
    <meta charset=\"utf-8\" />
    <title>";
        // line 5
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable(twig_slice($this->env, twig_reverse_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ezpublish"]) ? $context["ezpublish"] : null), "legacy", array()), "get", array(0 => "title_path"), "method")), 0, 2));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
            // line 6
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["element"], "text", array()), "html", null, true);
            if ((!$this->getAttribute($context["loop"], "last", array()))) {
                echo " / ";
            }
            // line 7
            echo "    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "</title>
</head>
<body>
    <h1>Default layout</h1>
    <p>
        This is the default layout provided by the EzPublishLegacyBundle. To
        override it, you can use the following configuration:
    </p>
    <pre>
        # In ezpublish.yml or any imported config file.
        # Replace \"my_siteaccess\" to a valid SiteAccess or SiteAccess group name.
        ezpublish_legacy:
            system:
                my_siteaccess:
                    view_layout: YourBundle::pagelayout.html.twig
    </pre>

    <h1>The legacy generated content</h1>
    <div class=\"content\">
        ";
        // line 26
        $this->displayBlock('content', $context, $blocks);
        // line 27
        echo "    </div>
</body>
</html>
";
    }

    // line 26
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "EzPublishLegacyBundle::legacy_view_default_pagelayout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 26,  85 => 27,  83 => 26,  49 => 7,  43 => 6,  26 => 5,  20 => 1,);
    }
}
