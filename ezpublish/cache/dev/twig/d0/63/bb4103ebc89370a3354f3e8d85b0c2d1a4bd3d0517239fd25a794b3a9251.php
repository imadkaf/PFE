<?php

/* eZDemoBundle:zone:2zoneslayout3.html.twig */
class __TwigTemplate_d063bb4103ebc89370a3354f3e8d85b0c2d1a4bd3d0517239fd25a794b3a9251 extends eZ\Bundle\EzPublishDebugBundle\Twig\DebugTemplate
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
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, (isset($context["zone_layout"]) ? $context["zone_layout"] : $this->getContext($context, "zone_layout"))), "html", null, true);
        echo " row\">
    <div class=\"span12\">
        <section class=\"content-view-block\">
        ";
        // line 5
        echo "        ";
        // line 6
        echo "        ";
        if ($this->getAttribute($this->getAttribute((isset($context["zones"]) ? $context["zones"] : $this->getContext($context, "zones")), 0, array(), "array"), "blocks", array())) {
            // line 7
            echo "            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["zones"]) ? $context["zones"] : $this->getContext($context, "zones")), 0, array(), "array"), "blocks", array()));
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
                // line 8
                echo "                ";
                echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("ez_page:viewBlock", array("block" => $context["block"])));
                // line 15
                echo "
                ";
                // line 16
                if ((!$this->getAttribute($context["loop"], "last", array()))) {
                    // line 17
                    echo "                    <div class=\"block-separator\"></div>
                ";
                }
                // line 19
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
            // line 20
            echo "        ";
        }
        // line 21
        echo "        </section>
    </div>
    <div class=\"span12\">
        <section class=\"content-view-block\">
        ";
        // line 26
        echo "        ";
        if ($this->getAttribute($this->getAttribute((isset($context["zones"]) ? $context["zones"] : $this->getContext($context, "zones")), 1, array(), "array"), "blocks", array())) {
            // line 27
            echo "            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["zones"]) ? $context["zones"] : $this->getContext($context, "zones")), 1, array(), "array"), "blocks", array()));
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
                // line 28
                echo "                ";
                echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("ez_page:viewBlock", array("block" => $context["block"])));
                echo "
                ";
                // line 29
                if ((!$this->getAttribute($context["loop"], "last", array()))) {
                    // line 30
                    echo "                    <div class=\"block-separator\"></div>
                ";
                }
                // line 32
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
            // line 33
            echo "        ";
        }
        // line 34
        echo "        </section>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "eZDemoBundle:zone:2zoneslayout3.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 34,  130 => 33,  116 => 32,  112 => 30,  110 => 29,  105 => 28,  87 => 27,  84 => 26,  78 => 21,  75 => 20,  61 => 19,  57 => 17,  55 => 16,  52 => 15,  49 => 8,  31 => 7,  28 => 6,  26 => 5,  19 => 1,);
    }
}
