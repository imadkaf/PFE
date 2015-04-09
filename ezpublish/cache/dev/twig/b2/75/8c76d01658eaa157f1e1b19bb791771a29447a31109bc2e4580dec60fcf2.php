<?php

/* eZDemoBundle:embed:image.html.twig */
class __TwigTemplate_b2758c76d01658eaa157f1e1b19bb791771a29447a31109bc2e4580dec60fcf2 extends eZ\Bundle\EzPublishDebugBundle\Twig\DebugTemplate
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
        echo "<div class=\"content-view-embed\">
    <div class=\"class-image\">
        <div class=\"attribute-image\">
            ";
        // line 4
        if ((!$this->env->getExtension('ezpublish.content')->isFieldEmpty((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "image"))) {
            // line 5
            echo "                <div class=\"attribute-image full-head\">
                    ";
            // line 6
            echo $this->env->getExtension('ezpublish.content')->renderField((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "image", array("template" => "eZDemoBundle:fields:ezimage_simple.html.twig", "parameters" => array("alias" => $this->getAttribute((isset($context["objectParameters"]) ? $context["objectParameters"] : $this->getContext($context, "objectParameters")), "size", array()))));
            // line 13
            echo "

                    ";
            // line 15
            if ((!$this->env->getExtension('ezpublish.content')->isFieldEmpty((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "caption"))) {
                // line 16
                echo "                        <div class=\"attribute-caption\">
                            ";
                // line 17
                echo $this->env->getExtension('ezpublish.content')->renderField((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "caption");
                echo "
                        </div>
                    ";
            }
            // line 20
            echo "                </div>
            ";
        }
        // line 22
        echo "        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "eZDemoBundle:embed:image.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 22,  46 => 20,  40 => 17,  37 => 16,  35 => 15,  31 => 13,  29 => 6,  26 => 5,  24 => 4,  19 => 1,);
    }
}
