<?php

/* eZDemoBundle:zone:globalzonelayout.html.twig */
class __TwigTemplate_e92e344aef3bc0ae634abf3903ca91c2508a493b73bc1fb630aca3e8d8536f90 extends Twig_Template
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
        // line 1
        echo "<section class=\"content-view-block content-view-aside\">
";
        // line 4
        if ($this->getAttribute($this->getAttribute((isset($context["zones"]) ? $context["zones"] : null), 0, array(), "array"), "blocks", array())) {
            // line 5
            echo "    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["zones"]) ? $context["zones"] : null), 0, array(), "array"), "blocks", array()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
                // line 6
                echo "        ";
                echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("ez_page:viewBlock", array("block" => $context["block"])));
                // line 13
                echo "
        ";
                // line 14
                if ((!$this->getAttribute($context["loop"], "last", array()))) {
                    // line 15
                    echo "            <div class=\"block-separator\"></div>
        ";
                }
                // line 17
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 19
        echo "</section>
";
    }

    public function getTemplateName()
    {
        return "eZDemoBundle:zone:globalzonelayout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 19,  54 => 17,  50 => 15,  48 => 14,  45 => 13,  42 => 6,  24 => 5,  22 => 4,  19 => 1,);
    }
}
