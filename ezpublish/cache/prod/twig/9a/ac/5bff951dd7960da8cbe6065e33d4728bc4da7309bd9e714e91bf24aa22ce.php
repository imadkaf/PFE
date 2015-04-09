<?php

/* eZDemoBundle:email:feedback_form.txt.twig */
class __TwigTemplate_9aac5bff951dd7960da8cbe6065e33d4728bc4da7309bd9e714e91bf24aa22ce extends Twig_Template
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
        // line 12
        echo "
";
        // line 13
        echo $this->env->getExtension('translator')->getTranslator()->trans("Hello,
A new feedback form has been submited.

Please find the related information:

- First name: %firstname%
- Last name: %lastname%
- Email: %email%
- Subject: %subject%
- Country: %country%
- Message:
\"%message%\"


Best regards,
The eZ Demobundle Team.", array("%firstname%" => (isset($context["firstname"]) ? $context["firstname"] : null), "%lastname%" => (isset($context["lastname"]) ? $context["lastname"] : null), "%email%" => (isset($context["email"]) ? $context["email"] : null), "%subject%" => (isset($context["subject"]) ? $context["subject"] : null), "%country%" => (isset($context["country"]) ? $context["country"] : null), "%message%" => (isset($context["message"]) ? $context["message"] : null)), "messages");
    }

    public function getTemplateName()
    {
        return "eZDemoBundle:email:feedback_form.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 13,  19 => 12,);
    }
}
