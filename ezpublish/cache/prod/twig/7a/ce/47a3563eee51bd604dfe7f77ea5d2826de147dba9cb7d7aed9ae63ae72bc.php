<?php

/* eZDemoBundle:zone:3zoneslayout1.html.twig */
class __TwigTemplate_7ace47a3563eee51bd604dfe7f77ea5d2826de147dba9cb7d7aed9ae63ae72bc extends Twig_Template
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
    <div class=\"span8\">
        <section class=\"content-view-block\">
        ";
        // line 5
        echo "        ";
        // line 6
        echo "        ";
        if ($this->getAttribute($this->getAttribute((isset($context["zones"]) ? $context["zones"] : null), 0, array(), "array"), "blocks", array())) {
            // line 7
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
    <div class=\"span4\">
        <aside>
            <section class=\"content-view-block content-view-aside\">
            ";
        // line 27
        echo "            ";
        if ($this->getAttribute($this->getAttribute((isset($context["zones"]) ? $context["zones"] : null), 1, array(), "array"), "blocks", array())) {
            // line 28
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
                // line 29
                echo "                    ";
                echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("ez_page:viewBlock", array("block" => $context["block"])));
                echo "
                    ";
                // line 30
                if ((!$this->getAttribute($context["loop"], "last", array()))) {
                    // line 31
                    echo "                        <div class=\"block-separator\"></div>
                    ";
                }
                // line 33
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
            // line 34
            echo "            ";
        }
        // line 35
        echo "            </section>
        </aside>
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
        return "eZDemoBundle:zone:3zoneslayout1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 49,  187 => 48,  173 => 47,  169 => 45,  167 => 44,  162 => 43,  144 => 42,  141 => 41,  134 => 35,  131 => 34,  117 => 33,  113 => 31,  111 => 30,  106 => 29,  88 => 28,  85 => 27,  78 => 21,  75 => 20,  61 => 19,  57 => 17,  55 => 16,  52 => 15,  49 => 8,  31 => 7,  28 => 6,  26 => 5,  19 => 1,);
    }
}
