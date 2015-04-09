<?php

/* eZDemoBundle::content_fields.html.twig */
class __TwigTemplate_db264a74a6709da934fd0a564d3844493acdcdd94be42060e283a0efbc19b977 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("EzPublishCoreBundle::content_fields.html.twig");

        $this->blocks = array(
            'ezkeyword_field' => array($this, 'block_ezkeyword_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EzPublishCoreBundle::content_fields.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_ezkeyword_field($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "value", array()), "values", array())) > 0)) {
            // line 6
            echo "            <ul ";
            $this->displayBlock("field_attributes", $context, $blocks);
            echo " >
                ";
            // line 7
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "value", array()), "values", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["keyword"]) {
                // line 8
                echo "                <li>
                    ";
                // line 10
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ez_legacy", array("module_uri" => ("content/keyword/" . $context["keyword"]))), "html", null, true);
                echo "\">
                        <span class=\"tag-title\">";
                // line 11
                echo twig_escape_filter($this->env, $context["keyword"], "html", null, true);
                echo "</span>
                        ";
                // line 13
                echo "                    </a>
                </li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['keyword'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "            </ul>
        ";
        }
        // line 18
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "eZDemoBundle::content_fields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 18,  66 => 16,  58 => 13,  54 => 11,  49 => 10,  46 => 8,  42 => 7,  37 => 6,  34 => 5,  31 => 4,  28 => 3,);
    }
}
