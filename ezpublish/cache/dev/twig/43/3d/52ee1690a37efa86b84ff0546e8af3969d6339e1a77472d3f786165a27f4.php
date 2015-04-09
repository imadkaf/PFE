<?php

/* eZDemoBundle:block:content_grid_2cols_2rows.html.twig */
class __TwigTemplate_433d52ee1690a37efa86b84ff0546e8af3969d6339e1a77472d3f786165a27f4 extends eZ\Bundle\EzPublishDebugBundle\Twig\DebugTemplate
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
        echo "<div class=\"block-type-content-grid block-view-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "view", array()), "html", null, true);
        echo "\">

";
        // line 3
        if (($this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "name", array()) != "")) {
            // line 4
            echo "    <div class=\"attribute-header\">
        <h2>";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "name", array()), "html", null, true);
            echo "</h2>
    </div>
";
        }
        // line 8
        echo "
    <div class=\"row\">
    ";
        // line 10
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["valid_items"]) ? $context["valid_items"] : $this->getContext($context, "valid_items")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 11
            echo "        <div class=\"span4\">
            ";
            // line 12
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("ez_content:viewLocation", array("locationId" => $this->getAttribute($context["item"], "locationId", array()), "viewType" => "block_item", "params" => array("image_alias" => "contentgrid"))));
            // line 21
            echo "
        </div>

        ";
            // line 25
            echo "        ";
            if ((($this->getAttribute($context["loop"], "index", array()) % 2 == 0) && (!$this->getAttribute($context["loop"], "last", array())))) {
                // line 26
                echo "    </div>
    <div class=\"row\">
        ";
            }
            // line 29
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "    </div>

</div>
";
    }

    public function getTemplateName()
    {
        return "eZDemoBundle:block:content_grid_2cols_2rows.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 30,  75 => 29,  70 => 26,  67 => 25,  62 => 21,  60 => 12,  57 => 11,  40 => 10,  36 => 8,  30 => 5,  27 => 4,  25 => 3,  19 => 1,);
    }
}
