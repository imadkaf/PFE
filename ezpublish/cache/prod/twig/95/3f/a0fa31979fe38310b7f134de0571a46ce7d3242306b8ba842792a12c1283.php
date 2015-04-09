<?php

/* eZDemoBundle:full:article.html.twig */
class __TwigTemplate_953fa0fa31979fe38310b7f134de0571a46ce7d3242306b8ba842792a12c1283 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("eZDemoBundle::pagelayout.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "eZDemoBundle::pagelayout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "<section class=\"content-view-full\">
    <article class=\"class-article row\">
        <div class=\"span8\">
            <div class=\"attribute-header\">
                <h1>";
        // line 12
        echo $this->env->getExtension('ezpublish.content')->renderField((isset($context["content"]) ? $context["content"] : null), "title");
        echo "</h1>
            </div>

            <div class=\"attribute-byline\">
                <span class=\"date\">
                    ";
        // line 17
        echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["location"]) ? $context["location"] : null), "contentInfo", array()), "publishedDate", array()), "short", "short", $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "locale", array())), "html", null, true);
        echo "
                </span>
            ";
        // line 19
        if ((!$this->env->getExtension('ezpublish.content')->isFieldEmpty((isset($context["content"]) ? $context["content"] : null), "author"))) {
            // line 20
            echo "                <span class=\"author\">
                    ";
            // line 21
            echo $this->env->getExtension('ezpublish.content')->renderField((isset($context["content"]) ? $context["content"] : null), "author", array("template" => "eZDemoBundle:fields:ezauthor_simple.html.twig"));
            // line 27
            echo "
                </span>
            ";
        }
        // line 30
        echo "            </div>

        ";
        // line 32
        if (((isset($context["showImage"]) ? $context["showImage"] : null) && (!$this->env->getExtension('ezpublish.content')->isFieldEmpty((isset($context["content"]) ? $context["content"] : null), "image")))) {
            // line 33
            echo "            <div class=\"attribute-image full-head\">
                ";
            // line 34
            echo $this->env->getExtension('ezpublish.content')->renderField((isset($context["content"]) ? $context["content"] : null), "image", array("template" => "eZDemoBundle:fields:ezimage_simple.html.twig", "parameters" => array("alias" => "articleimage")));
            // line 41
            echo "

            ";
            // line 43
            if ((!$this->env->getExtension('ezpublish.content')->isFieldEmpty((isset($context["content"]) ? $context["content"] : null), "caption"))) {
                // line 44
                echo "                <div class=\"attribute-caption\">
                    ";
                // line 45
                echo $this->env->getExtension('ezpublish.content')->renderField((isset($context["content"]) ? $context["content"] : null), "caption");
                echo "
                </div>
            ";
            }
            // line 48
            echo "            </div>
        ";
        }
        // line 50
        echo "
        ";
        // line 51
        if (((isset($context["showSummary"]) ? $context["showSummary"] : null) && (!$this->env->getExtension('ezpublish.content')->isFieldEmpty((isset($context["content"]) ? $context["content"] : null), "intro")))) {
            // line 52
            echo "            <div class=\"attribute-short\">
                ";
            // line 53
            echo $this->env->getExtension('ezpublish.content')->renderField((isset($context["content"]) ? $context["content"] : null), "intro");
            echo "
            </div>
        ";
        }
        // line 56
        echo "
        ";
        // line 57
        if ((!$this->env->getExtension('ezpublish.content')->isFieldEmpty((isset($context["content"]) ? $context["content"] : null), "body"))) {
            // line 58
            echo "            <div class=\"attribute-long\">
                ";
            // line 59
            echo $this->env->getExtension('ezpublish.content')->renderField((isset($context["content"]) ? $context["content"] : null), "body");
            echo "
            </div>
        ";
        }
        // line 62
        echo "
            <div class=\"attribute-tags\">
                ";
        // line 64
        echo $this->env->getExtension('ezpublish.content')->renderField((isset($context["content"]) ? $context["content"] : null), "tags", array("attr" => array("class" => "tags-wrapper")));
        // line 70
        echo "
            </div>

            <div class=\"attribute-star-rating\">
                ";
        // line 74
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("eZDemoBundle:Demo:viewStarRating", array("location" => (isset($context["location"]) ? $context["location"] : null))));
        echo "
            </div>

            <div class=\"attribute-socialize\">
                ";
        // line 78
        $this->env->loadTemplate("eZDemoBundle:parts:social_buttons.html.twig")->display($context);
        // line 79
        echo "            </div>

            <div class=\"attribute-comments\">
                ";
        // line 82
        echo $this->env->getExtension('ez_comments')->renderForContent($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "contentInfo", array()));
        echo "
            </div>

            ";
        // line 85
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("eZDemoBundle:Demo:viewTipAFriend", array("location" => (isset($context["location"]) ? $context["location"] : null))));
        echo "
        </div>
        <div class=\"span4\">
            <aside>
                <section class=\"content-view-aside\">
                ";
        // line 90
        if ((!$this->env->getExtension('ezpublish.content')->isFieldEmpty((isset($context["content"]) ? $context["content"] : null), "location"))) {
            // line 91
            echo "                    <h2>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Location"), "html", null, true);
            echo "</h2>
                    <article>
                        <div class=\"attribute-location\">
                            ";
            // line 94
            echo $this->env->getExtension('ezpublish.content')->renderField((isset($context["content"]) ? $context["content"] : null), "location", array("parameters" => array("width" => "100%", "height" => "330px", "showMap" => true, "showInfo" => false)));
            // line 100
            echo "
                        </div>
                    </article>
                ";
        }
        // line 104
        echo "
                    ";
        // line 105
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("eZDemoBundle:Demo:viewTagRelatedContent", array("location" => (isset($context["location"]) ? $context["location"] : null))));
        echo "
                </section>
            </aside>
        </div>
    </article>
</section>
";
    }

    public function getTemplateName()
    {
        return "eZDemoBundle:full:article.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 105,  177 => 104,  171 => 100,  169 => 94,  162 => 91,  160 => 90,  152 => 85,  146 => 82,  141 => 79,  139 => 78,  132 => 74,  126 => 70,  124 => 64,  120 => 62,  114 => 59,  111 => 58,  109 => 57,  106 => 56,  100 => 53,  97 => 52,  95 => 51,  92 => 50,  88 => 48,  82 => 45,  79 => 44,  77 => 43,  73 => 41,  71 => 34,  68 => 33,  66 => 32,  62 => 30,  57 => 27,  55 => 21,  52 => 20,  50 => 19,  45 => 17,  37 => 12,  31 => 8,  28 => 7,);
    }
}
