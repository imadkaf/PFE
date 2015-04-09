<?php

/* eZDemoBundle:fields:ezauthor_simple.html.twig */
class __TwigTemplate_32390c83e200b09e7cdcb2eb761ad835f278499c9344c9d320bdb056843387d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'ezauthor_field' => array($this, 'block_ezauthor_field'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $this->displayBlock('ezauthor_field', $context, $blocks);
    }

    public function block_ezauthor_field($context, array $blocks = array())
    {
        // line 3
        ob_start();
        // line 4
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "value", array()), "authors", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["author"]) {
            // line 5
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["author"], "name", array()), "html", null, true);
            if ((!$this->getAttribute($context["loop"], "last", array()))) {
                echo ", ";
            }
            // line 6
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['author'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "eZDemoBundle:fields:ezauthor_simple.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  52 => 6,  46 => 5,  28 => 4,  26 => 3,  20 => 2,);
    }
}
