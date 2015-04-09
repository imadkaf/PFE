<?php

/* eZDemoBundle:zone:2zoneslayout1.html.twig */
class __TwigTemplate_3d3b7474214dae62f507b1cac942eed14cb33d1e3a90a185f6bd48c56a45af1c extends Twig_Template
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
    <div class=\"span8\">
        <section class=\"content-view-block\">
        ";
        // line 7
        echo "        ";
        // line 8
        echo "        ";
        if ($this->getAttribute($this->getAttribute((isset($context["zones"]) ? $context["zones"] : null), 0, array(), "array"), "blocks", array())) {
            // line 9
            echo "            ";
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
                // line 10
                echo "                ";
                echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("ez_page:viewBlock", array("block" => $context["block"])));
                // line 17
                echo "
                ";
                // line 18
                if ((!$this->getAttribute($context["loop"], "last", array()))) {
                    // line 19
                    echo "                    <div class=\"block-separator\"></div>
                ";
                }
                // line 21
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
            // line 22
            echo "        ";
        }
        // line 23
        echo "        </section>
    </div>
    <div class=\"span4\">
        <aside>
            <section class=\"content-view-block content-view-aside\">
            ";
        // line 29
        echo "            ";
        if ($this->getAttribute($this->getAttribute((isset($context["zones"]) ? $context["zones"] : null), 1, array(), "array"), "blocks", array())) {
            // line 30
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
                // line 31
                echo "                    ";
                echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("ez_page:viewBlock", array("block" => $context["block"])));
                echo "
                    ";
                // line 32
                if ((!$this->getAttribute($context["loop"], "last", array()))) {
                    // line 33
                    echo "                        <div class=\"block-separator\"></div>
                    ";
                }
                // line 35
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
            // line 36
            echo "            ";
        }
        // line 37
        echo "            </section>
        </aside>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "eZDemoBundle:zone:2zoneslayout1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 37,  131 => 36,  117 => 35,  113 => 33,  111 => 32,  106 => 31,  88 => 30,  85 => 29,  78 => 23,  75 => 22,  61 => 21,  57 => 19,  55 => 18,  52 => 17,  49 => 10,  31 => 9,  28 => 8,  26 => 7,  19 => 3,);
    }
}
