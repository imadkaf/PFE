<?php

/* eZDemoBundle:full:blog_post.html.twig */
class __TwigTemplate_733c50eda261f5583939bfd47b21a67ee86fcd74b7b411c46539fb7110d4e131 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'page_head' => array($this, 'block_page_head'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate((((isset($context["noLayout"]) ? $context["noLayout"] : null)) ? ((isset($context["viewbaseLayout"]) ? $context["viewbaseLayout"] : null)) : ("eZDemoBundle::pagelayout.html.twig")));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_page_head($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        $context["title"] = (($this->env->getExtension('ezpublish.content')->getTranslatedContentName((isset($context["content"]) ? $context["content"] : null)) . " - ") . twig_localized_date_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "contentInfo", array()), "publishedDate", array()), "short", "short", $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "locale", array())));
        // line 9
        echo "    ";
        $this->displayParentBlock("page_head", $context, $blocks);
        echo "
";
    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        // line 13
        echo "    <section class=\"content-view-full\">
        <div class=\"class-blog-post\">
            <div class=\"row\">
                <div class=\"span8\">
                    <div class=\"attribute-header\">
                        <h1>";
        // line 18
        echo $this->env->getExtension('ezpublish.content')->renderField((isset($context["content"]) ? $context["content"] : null), "title");
        echo "</h1>
                    </div>

                    <div class=\"attribute-byline\">
                        <span class=\"date\">
                            ";
        // line 23
        echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, $this->env->getExtension('ezpublish.content')->getTranslatedFieldValue((isset($context["content"]) ? $context["content"] : null), "publication_date"), "short", "short", $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "locale", array())), "html", null, true);
        echo "
                        </span>

                        <span class=\"author\">";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["author"]) ? $context["author"] : null), "contentInfo", array()), "name", array()), "html", null, true);
        echo "</span>
                    </div>

                    <div class=\"attribute-body float-break\">
                        ";
        // line 30
        echo $this->env->getExtension('ezpublish.content')->renderField((isset($context["content"]) ? $context["content"] : null), "body");
        echo "
                    </div>

                    <div class=\"attribute-tags\">
                        ";
        // line 34
        echo $this->env->getExtension('ezpublish.content')->renderField((isset($context["content"]) ? $context["content"] : null), "tags", array("attr" => array("class" => "tags-wrapper")));
        echo "
                    </div>

                    <div class=\"attribute-comments\">
                        ";
        // line 38
        echo $this->env->getExtension('ez_comments')->renderForContent($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "contentInfo", array()));
        echo "
                    </div>

                    ";
        // line 42
        echo "                    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("eZDemoBundle:Demo:viewTagRelatedContent", array("location" => (isset($context["location"]) ? $context["location"] : null))));
        echo "

                </div>

                <div class=\"span4\">
                    <aside>
                        <section class=\"content-view-aside\">
                            ";
        // line 49
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("eZDemoBundle:Demo:viewParentExtraInfo", array("location" => (isset($context["location"]) ? $context["location"] : null))));
        echo "
                        </section>
                    </aside>
                </div>
            </div>
        </div>
    </section>
";
    }

    public function getTemplateName()
    {
        return "eZDemoBundle:full:blog_post.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 49,  91 => 42,  85 => 38,  78 => 34,  71 => 30,  64 => 26,  58 => 23,  50 => 18,  43 => 13,  40 => 12,  33 => 9,  30 => 8,  27 => 7,);
    }
}
