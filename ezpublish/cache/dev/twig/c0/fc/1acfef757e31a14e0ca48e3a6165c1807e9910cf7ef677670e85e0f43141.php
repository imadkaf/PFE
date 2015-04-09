<?php

/* eZDemoBundle:block:video.html.twig */
class __TwigTemplate_c0fc1acfef757e31a14e0ca48e3a6165c1807e9910cf7ef677670e85e0f43141 extends eZ\Bundle\EzPublishDebugBundle\Twig\DebugTemplate
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
        echo "<div class=\"block-type-video\">
    ";
        // line 2
        if (($this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "name", array()) != "")) {
            // line 3
            echo "    <div class=\"attribute-header\">
        <h2>";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "name", array()), "html", null, true);
            echo "</h2>
    </div>
    ";
        }
        // line 7
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("ez_content:viewLocation", array("locationId" => $this->getAttribute($this->getAttribute((isset($context["valid_items"]) ? $context["valid_items"] : $this->getContext($context, "valid_items")), 0, array(), "array"), "locationId", array()), "viewType" => "block_item", "params" => array("block_id" => $this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "id", array()), "block_name" => $this->getAttribute((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), "name", array())))));
        // line 16
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "eZDemoBundle:block:video.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 16,  33 => 7,  27 => 4,  24 => 3,  22 => 2,  19 => 1,);
    }
}
