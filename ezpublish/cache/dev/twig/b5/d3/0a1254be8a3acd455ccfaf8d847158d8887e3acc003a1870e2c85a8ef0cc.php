<?php

/* EzSystemsCommentsBundle::disqus.html.twig */
class __TwigTemplate_b5d30a1254be8a3acd455ccfaf8d847158d8887e3acc003a1870e2c85a8ef0cc extends eZ\Bundle\EzPublishDebugBundle\Twig\DebugTemplate
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'comments' => array($this, 'block_comments'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('comments', $context, $blocks);
    }

    public function block_comments($context, array $blocks = array())
    {
        // line 2
        echo "    <div id=\"disqus_thread\"></div>
    <script type=\"text/javascript\">
        var disqus_shortname = '";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["shortname"]) ? $context["shortname"] : $this->getContext($context, "shortname")), "html", null, true);
        echo "';
        ";
        // line 5
        if (array_key_exists("identifier", $context)) {
            echo "var disqus_identifier = '";
            echo twig_escape_filter($this->env, (isset($context["identifier"]) ? $context["identifier"] : $this->getContext($context, "identifier")), "html", null, true);
            echo "';";
        }
        // line 6
        echo "
        ";
        // line 7
        if (array_key_exists("title", $context)) {
            echo "var disqus_title = '";
            echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
            echo "';";
        }
        // line 8
        echo "        ";
        if (array_key_exists("url", $context)) {
            echo "var disqus_url = '";
            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), "html", null, true);
            echo "';";
        }
        // line 9
        echo "        ";
        if (array_key_exists("categoryId", $context)) {
            echo "var disqus_category_id = '";
            echo twig_escape_filter($this->env, (isset($context["categoryId"]) ? $context["categoryId"] : $this->getContext($context, "categoryId")), "html", null, true);
            echo "';";
        }
        // line 10
        echo "

        /* * * DON'T EDIT BELOW THIS LINE * * */
        (function() {
            var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
            dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
            (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
        })();
    </script>
    <noscript>Please enable JavaScript to view the <a href=\"http://disqus.com/?ref_noscript\">comments powered by Disqus.</a></noscript>
    <a href=\"http://disqus.com\" class=\"dsq-brlink\">blog comments powered by <span class=\"logo-disqus\">Disqus</span></a>
";
    }

    public function getTemplateName()
    {
        return "EzSystemsCommentsBundle::disqus.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  63 => 10,  56 => 9,  49 => 8,  43 => 7,  40 => 6,  34 => 5,  30 => 4,  26 => 2,  20 => 1,);
    }
}
