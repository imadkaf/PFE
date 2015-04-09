<?php

/* eZDemoBundle:parts:social_buttons.html.twig */
class __TwigTemplate_0df4687bc985e7cb0b09b88bbafde6a0c62976baaed286b90b65262c02b3f3ae extends eZ\Bundle\EzPublishDebugBundle\Twig\DebugTemplate
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
        echo "<div class=\"social-button\">
    <a href=\"https://twitter.com/share\" class=\"twitter-share-button\" data-hashtags=\"ezpublish\">Tweet</a>
    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=\"//platform.twitter.com/widgets.js\";fjs.parentNode.insertBefore(js,fjs);}}(document,\"script\",\"twitter-wjs\");</script>
</div>
<div class=\"social-button\">
    <div class=\"fb-like\" data-send=\"false\" data-layout=\"button_count\" data-width=\"90\" data-show-faces=\"false\"></div>

    <div id=\"fb-root\"></div>
    
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = \"//connect.facebook.net/en_US/all.js#xfbml=1\";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
</div>
<div class=\"social-button\">
    <div class=\"g-plusone\" data-size=\"medium\"></div>

    <script type=\"text/javascript\">
        (function() {
        var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
        po.src = 'https://apis.google.com/js/plusone.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
        })();
    </script>
</div>
";
    }

    public function getTemplateName()
    {
        return "eZDemoBundle:parts:social_buttons.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
