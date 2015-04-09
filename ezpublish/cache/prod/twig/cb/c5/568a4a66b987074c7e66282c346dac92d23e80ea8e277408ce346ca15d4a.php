<?php

/* eZDemoBundle:block:campaign.html.twig */
class __TwigTemplate_cbc5568a4a66b987074c7e66282c346dac92d23e80ea8e277408ce346ca15d4a extends Twig_Template
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
        // line 4
        $context["several"] = (twig_length_filter($this->env, (isset($context["valid_items"]) ? $context["valid_items"] : null)) > 1);
        // line 5
        echo "<!-- BLOCK: START -->
<div class=\"block-type-campaign\">
    <div class=\"campaign\">
        <a href=\"#\" class=\"navig prev\" style=\"opacity:0;\"><span class=\"hide\">&lt;</span></a>
        ";
        // line 10
        echo "        <a href=\"";
        echo twig_escape_filter($this->env, (((isset($context["several"]) ? $context["several"] : null)) ? ($this->env->getExtension('routing')->getPath("ez_urlalias", array("locationId" => $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "locationId", array())))) : ("#")), "html", null, true);
        echo "\" class=\"navig next";
        if ((!(isset($context["several"]) ? $context["several"] : null))) {
            echo " disabled";
        }
        echo "\"><span class=\"hide\">&gt;</span></a>

        <ul class=\"indicator";
        // line 12
        if ((!(isset($context["several"]) ? $context["several"] : null))) {
            echo " disabled";
        }
        echo "\">
        ";
        // line 14
        echo "        ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["valid_contentinfo_items"]) ? $context["valid_contentinfo_items"] : null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["contentInfo"]) {
            // line 15
            echo "            <li";
            if ($this->getAttribute($context["loop"], "first", array())) {
                echo " class=\"selected\"";
            }
            echo "><span class=\"hide\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('ezpublish.content')->getTranslatedContentName($context["contentInfo"]), "html", null, true);
            echo "</span></li>

        ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contentInfo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "        </ul>

        <ul class=\"images\">
        ";
        // line 22
        echo "        ";
        // line 23
        echo "        ";
        // line 24
        echo "        ";
        // line 25
        echo "        ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["valid_items"]) ? $context["valid_items"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 26
            echo "            ";
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("ez_content:viewLocation", array("locationId" => $this->getAttribute($context["item"], "locationId", array()), "viewType" => "block_item_campaign", "params" => array("image_alias" => "campaign"))));
            // line 35
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "        </ul>
    </div>
</div>
<!-- BLOCK: END -->

<script type=\"text/javascript\">
    YUI(YUI3_config).use('event', 'ezsimplegallery', function (Y) {
        Y.on('domready', function () {
            Y.all('.block-type-campaign').each(function () {
                var gal = new Y.eZ.SimpleGallery({
                    gallery: this
                });
            });
        });
    });
</script>
";
    }

    public function getTemplateName()
    {
        return "eZDemoBundle:block:campaign.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 37,  102 => 35,  99 => 26,  94 => 25,  92 => 24,  90 => 23,  88 => 22,  83 => 18,  61 => 15,  43 => 14,  37 => 12,  27 => 10,  21 => 5,  19 => 4,);
    }
}
