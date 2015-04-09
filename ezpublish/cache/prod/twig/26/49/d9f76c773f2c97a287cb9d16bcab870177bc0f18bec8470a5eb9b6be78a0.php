<?php

/* eZDemoBundle:block:content_grid_1col_2rows.html.twig */
class __TwigTemplate_2649d9f76c773f2c97a287cb9d16bcab870177bc0f18bec8470a5eb9b6be78a0 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : null), "view", array()), "html", null, true);
        echo "\">

";
        // line 3
        if (($this->getAttribute((isset($context["block"]) ? $context["block"] : null), "name", array()) != "")) {
            // line 4
            echo "    <div class=\"attribute-header\">
        <h2>";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : null), "name", array()), "html", null, true);
            echo "</h2>
    </div>
";
        }
        // line 8
        echo "
    ";
        // line 10
        echo "    ";
        // line 11
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["valid_items"]) ? $context["valid_items"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 12
            echo "        ";
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("ez_content:viewLocation", array("locationId" => $this->getAttribute($context["item"], "locationId", array()), "viewType" => "block_item", "params" => array("image_class" => "contentgrid"))));
            // line 21
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "eZDemoBundle:block:content_grid_1col_2rows.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 23,  49 => 21,  46 => 12,  41 => 11,  39 => 10,  36 => 8,  30 => 5,  27 => 4,  25 => 3,  19 => 1,);
    }
}
