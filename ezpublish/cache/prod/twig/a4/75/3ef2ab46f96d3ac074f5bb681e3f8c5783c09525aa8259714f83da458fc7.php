<?php

/* eZDemoBundle:zone:2zoneslayout2.html.twig */
class __TwigTemplate_a4753ef2ab46f96d3ac074f5bb681e3f8c5783c09525aa8259714f83da458fc7 extends Twig_Template
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
        // line 3
        echo "<div class=\"zone-layout-";
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, (isset($context["zone_layout"]) ? $context["zone_layout"] : null)), "html", null, true);
        echo " row\">
    <div class=\"span4\">
        <aside>
            <section class=\"content-view-block content-view-aside\">
            ";
        // line 8
        echo "            ";
        // line 9
        echo "            ";
        if ($this->getAttribute($this->getAttribute((isset($context["zones"]) ? $context["zones"] : null), 0, array(), "array"), "blocks", array())) {
            // line 10
            echo "                ";
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
                // line 11
                echo "                    ";
                echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("ez_page:viewBlock", array("block" => $context["block"])));
                // line 18
                echo "
                    ";
                // line 19
                if ((!$this->getAttribute($context["loop"], "last", array()))) {
                    // line 20
                    echo "                        <div class=\"block-separator\"></div>
                    ";
                }
                // line 22
                echo "                ";
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
            // line 23
            echo "            ";
        }
        // line 24
        echo "            </section>
        </aside>
    </div>
    <div class=\"span8\">
        <section class=\"content-view-block\">
        ";
        // line 30
        echo "        ";
        if ($this->getAttribute($this->getAttribute((isset($context["zones"]) ? $context["zones"] : null), 1, array(), "array"), "blocks", array())) {
            // line 31
            echo "            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["zones"]) ? $context["zones"] : null), 1, array(), "array"), "blocks", array()));
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
                // line 32
                echo "                ";
                echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("ez_page:viewBlock", array("block" => $context["block"])));
                echo "
                ";
                // line 33
                if ((!$this->getAttribute($context["loop"], "last", array()))) {
                    // line 34
                    echo "                    <div class=\"block-separator\"></div>
                ";
                }
                // line 36
                echo "            ";
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
            // line 37
            echo "        ";
        }
        // line 38
        echo "        </section>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "eZDemoBundle:zone:2zoneslayout2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 38,  132 => 37,  118 => 36,  114 => 34,  112 => 33,  107 => 32,  89 => 31,  86 => 30,  79 => 24,  76 => 23,  62 => 22,  58 => 20,  56 => 19,  53 => 18,  50 => 11,  32 => 10,  29 => 9,  27 => 8,  19 => 3,);
    }
}
