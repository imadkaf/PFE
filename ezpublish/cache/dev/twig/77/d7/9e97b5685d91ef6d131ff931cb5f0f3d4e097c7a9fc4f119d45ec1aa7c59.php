<?php

/* eZDemoBundle:full:blog.html.twig */
class __TwigTemplate_77d79e97b5685d91ef6d131ff931cb5f0f3d4e097c7a9fc4f119d45ec1aa7c59 extends eZ\Bundle\EzPublishDebugBundle\Twig\DebugTemplate
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

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <section class=\"content-view-full\">
        <div class=\"class-blog\">
            <div class=\"row\">
                <div class=\"span8\">
                    ";
        // line 8
        if ((twig_length_filter($this->env, (isset($context["pagerBlog"]) ? $context["pagerBlog"] : $this->getContext($context, "pagerBlog"))) > 0)) {
            // line 9
            echo "                        <section class=\"content-view-children\">
                            ";
            // line 10
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pagerBlog"]) ? $context["pagerBlog"] : $this->getContext($context, "pagerBlog")));
            foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
                // line 11
                echo "                                ";
                // line 12
                echo "                                ";
                echo $this->env->getExtension('http_kernel')->renderFragmentStrategy("esi", $this->env->getExtension('http_kernel')->controller("ez_content:viewLocation", array("locationId" => $this->getAttribute($this->getAttribute($context["post"], "contentInfo", array()), "mainLocationId", array()), "viewType" => "line")));
                echo "
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "                        </section>

                        ";
            // line 17
            echo "                        ";
            if ($this->getAttribute((isset($context["pagerBlog"]) ? $context["pagerBlog"] : $this->getContext($context, "pagerBlog")), "haveToPaginate", array(), "method")) {
                // line 18
                echo "                            <div class=\"pagination-centered\">
                                ";
                // line 19
                echo $this->env->getExtension('pagerfanta')->renderPagerfanta((isset($context["pagerBlog"]) ? $context["pagerBlog"] : $this->getContext($context, "pagerBlog")), "twitter_bootstrap_translated", array("routeName" => (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location"))));
                echo "
                            </div>
                        ";
            }
            // line 22
            echo "
                    ";
        }
        // line 24
        echo "                </div>
                <div class=\"span4\">
                    <aside>
                        <section class=\"content-view-aside\">

                            ";
        // line 29
        if ((!$this->env->getExtension('ezpublish.content')->isFieldEmpty((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "description"))) {
            // line 30
            echo "                                <h2>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Description"), "html", null, true);
            echo "</h2>
                                <article>
                                    <div class=\"attribute-description\">
                                        ";
            // line 33
            echo $this->env->getExtension('ezpublish.content')->renderField((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "description");
            echo "
                                    </div>
                                </article>
                            ";
        }
        // line 37
        echo "
                            ";
        // line 39
        echo "                            ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("eZDemoBundle:Demo:viewExtraInfo", array("location" => (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")))));
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
        return "eZDemoBundle:full:blog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 39,  100 => 37,  93 => 33,  86 => 30,  84 => 29,  77 => 24,  73 => 22,  67 => 19,  64 => 18,  61 => 17,  57 => 14,  48 => 12,  46 => 11,  42 => 10,  39 => 9,  37 => 8,  31 => 4,  28 => 3,);
    }
}
