<?php

/* eZDemoBundle:line:blog_post.html.twig */
class __TwigTemplate_d421d7e8a4d86ee06b9b317149c9a3051a2c1a3d0a61600aab77b6896be3c7c5 extends eZ\Bundle\EzPublishDebugBundle\Twig\DebugTemplate
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'ezkeyword_field' => array($this, 'block_ezkeyword_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate((isset($context["viewbaseLayout"]) ? $context["viewbaseLayout"] : $this->getContext($context, "viewbaseLayout")));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "<div class=\"content-view-line\">
    <article class=\"class-blog-post\">

        <div class=\"attribute-header\">
            ";
        // line 12
        echo "            <h2><a href=";
        echo $this->env->getExtension('routing')->getPath((isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")));
        echo " title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('ezpublish.content')->getTranslatedFieldValue((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "title"), "html", null, true);
        echo "\">";
        echo $this->env->getExtension('ezpublish.content')->renderField((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "title");
        echo "</a></h2>
        </div>


        <div class=\"attribute-byline with-comments\">
            <span class=\"date\">";
        // line 17
        echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, $this->env->getExtension('ezpublish.content')->getTranslatedFieldValue((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "publication_date"), "short", "short", $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "locale", array())), "html", null, true);
        echo "</span>
            <span class=\"author\">";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["author"]) ? $context["author"] : $this->getContext($context, "author")), "contentInfo", array()), "name", array()), "html", null, true);
        echo "</span>

            <span class=\"tags\"> ";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Tags:"), "html", null, true);
        echo "
                ";
        // line 22
        echo "                ";
        echo $this->env->getExtension('ezpublish.content')->renderField((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "tags", array("template" => $this));
        echo "
            </span>
        </div>

        <div class=\"attribute-body\">
            ";
        // line 27
        echo $this->env->getExtension('ezpublish.content')->renderField((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "body");
        echo "
        </div>

    </article>
</div>
";
    }

    // line 37
    public function block_ezkeyword_field($context, array $blocks = array())
    {
        // line 38
        echo "    ";
        ob_start();
        // line 39
        echo "        ";
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "value", array()), "values", array())) > 0)) {
            // line 40
            echo "            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : $this->getContext($context, "field")), "value", array()), "values", array()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["keyword"]) {
                // line 41
                echo "                ";
                // line 42
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ez_legacy", array("module_uri" => ("content/keyword/" . $context["keyword"]))), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $context["keyword"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["keyword"], "html", null, true);
                echo "</a>
                ";
                // line 43
                if ((!$this->getAttribute($context["loop"], "last", array()))) {
                    echo ",";
                }
                // line 44
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['keyword'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "        ";
        }
        // line 46
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "eZDemoBundle:line:blog_post.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 46,  137 => 45,  123 => 44,  119 => 43,  110 => 42,  108 => 41,  90 => 40,  87 => 39,  84 => 38,  81 => 37,  71 => 27,  62 => 22,  58 => 20,  53 => 18,  49 => 17,  36 => 12,  30 => 7,  27 => 6,);
    }
}
