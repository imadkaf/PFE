<?php

/* eZDemoBundle:block_item:video.html.twig */
class __TwigTemplate_b5e3f95c8d96dbf3eb1e430f0523766d4a99be667a26c93b5363d24c70dc574b extends eZ\Bundle\EzPublishDebugBundle\Twig\DebugTemplate
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
        echo "<script>
    _V_.options.flash.swf = \"";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ezdemo/flash/video-js.swf"), "html", null, true);
        echo "\";
</script>

<article>
    <div class=\"attribute-video\">
        ";
        // line 8
        echo "        ";
        // line 9
        echo "        ";
        echo $this->env->getExtension('ezpublish.content')->renderField((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "file", array("attr" => array("id" => ("video_" . ((array_key_exists("block_id", $context)) ? (_twig_default_filter((isset($context["block_id"]) ? $context["block_id"] : $this->getContext($context, "block_id")), "")) : (""))), "class" => "video-js vjs-default-skin", "data-setup" => "{}"), "template" => "eZDemoBundle:fields:ezbinaryfile_video.html.twig"));
        // line 16
        echo "
    </div>

    <div class=\"attribute-header\">
        <h3>";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('ezpublish.content')->getTranslatedContentName((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content"))), "html", null, true);
        echo "</h3>
    </div>

    <div class=\"attribute-short\">
        ";
        // line 24
        echo $this->env->getExtension('ezpublish.content')->renderField((isset($context["content"]) ? $context["content"] : $this->getContext($context, "content")), "caption");
        echo "
    </div>
</article>
";
    }

    public function getTemplateName()
    {
        return "eZDemoBundle:block_item:video.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 24,  41 => 20,  35 => 16,  32 => 9,  30 => 8,  22 => 2,  19 => 1,);
    }
}
