<?php

/* EzPublishCoreBundle::viewbase_layout.html.twig */
class __TwigTemplate_d2a9ad6c83f2280594a3458d36dde6ab8207274dfdfb918ff179de65a62e2a9c extends eZ\Bundle\EzPublishDebugBundle\Twig\DebugTemplate
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 4
        $this->displayBlock('content', $context, $blocks);
    }

    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "EzPublishCoreBundle::viewbase_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  20 => 4,);
    }
}
