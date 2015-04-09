<?php

/* eZDemoBundle:zone:3zoneslayout2.html.twig */
class __TwigTemplate_ec540ae9e3385e567526d37981634eee59096fcd16d9f824f70a4cf790502416 extends Twig_Template
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
        echo "<div class=\"zone-layout-";
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, (isset($context["zone_layout"]) ? $context["zone_layout"] : null)), "html", null, true);
        echo " row\">
    <div class=\"span4\">
        <aside>
            <section class=\"content-view-block content-view-aside\">
            ";
        // line 6
        echo "            ";
        // line 7
        echo "            ";
        if ($this->getAttribute($this->getAttribute((isset($context["zones"]) ? $context["zones"] : null), 0, array(), "array"), "blocks", array())) {
            // line 8
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
                // line 9
                echo "                    ";
                echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("ez_page:viewBlock", array("block" => $context["block"])));
                // line 16
                echo "
                    ";
                // line 17
                if ((!$this->getAttribute($context["loop"], "last", array()))) {
                    // line 18
                    echo "                        <div class=\"block-separator\"></div>
                    ";
                }
                // line 20
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
            // line 21
            echo "            ";
        }
        // line 22
        echo "            </section>
        </aside>
    </div>
    <div class=\"span8\">
        <section>
            ";
        // line 28
        echo "            ";
        if ($this->getAttribute($this->getAttribute((isset($context["zones"]) ? $context["zones"] : null), 1, array(), "array"), "blocks", array())) {
            // line 29
            echo "                ";
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
                // line 30
                echo "                    ";
                echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("ez_page:viewBlock", array("block" => $context["block"])));
                echo "
                    ";
                // line 31
                if ((!$this->getAttribute($context["loop"], "last", array()))) {
                    // line 32
                    echo "                        <div class=\"block-separator\"></div>
                    ";
                }
                // line 34
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
            // line 35
            echo "            ";
        }
        // line 36
        echo "        </section>
    </div>
    <div class=\"span12\">
        <section class=\"content-view-block\">
        ";
        // line 41
        echo "        ";
        if ($this->getAttribute($this->getAttribute((isset($context["zones"]) ? $context["zones"] : null), 2, array(), "array"), "blocks", array())) {
            // line 42
            echo "            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["zones"]) ? $context["zones"] : null), 2, array(), "array"), "blocks", array()));
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
                // line 43
                echo "                ";
                echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("ez_page:viewBlock", array("block" => $context["block"])));
                echo "
                ";
                // line 44
                if ((!$this->getAttribute($context["loop"], "last", array()))) {
                    // line 45
                    echo "                    <div class=\"block-separator\"></div>
                ";
                }
                // line 47
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
            // line 48
            echo "        ";
        }
        // line 49
        echo "        </section>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "eZDemoBundle:zone:3zoneslayout2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 49,  187 => 48,  173 => 47,  169 => 45,  167 => 44,  162 => 43,  144 => 42,  141 => 41,  135 => 36,  132 => 35,  118 => 34,  114 => 32,  112 => 31,  107 => 30,  89 => 29,  86 => 28,  79 => 22,  76 => 21,  62 => 20,  58 => 18,  56 => 17,  53 => 16,  50 => 9,  32 => 8,  29 => 7,  27 => 6,  19 => 1,);
    }
}
