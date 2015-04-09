<?php

/* EzPublishCoreBundle:Security:login.html.twig */
class __TwigTemplate_e988f808fe250546606c255705fa22a1e01cd1b43ef49410150177242e028956 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'login_content' => array($this, 'block_login_content'),
            'login_fields' => array($this, 'block_login_fields'),
        );
    }

    protected function doGetParent(array $context)
    {
        return $this->env->resolveTemplate((isset($context["layout"]) ? $context["layout"] : null));
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->displayBlock('login_content', $context, $blocks);
    }

    public function block_login_content($context, array $blocks = array())
    {
        // line 5
        echo "        <div class=\"page-header\">
            <h1>";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Login"), "html", null, true);
        echo "</h1>
        </div>

        ";
        // line 9
        if ((isset($context["error"]) ? $context["error"] : null)) {
            // line 10
            echo "            <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "message", array())), "html", null, true);
            echo "</div>
        ";
        }
        // line 12
        echo "
        <form action=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("login_check");
        echo "\" method=\"post\" role=\"form\">
            ";
        // line 14
        $this->displayBlock('login_fields', $context, $blocks);
        // line 35
        echo "        </form>
    ";
    }

    // line 14
    public function block_login_fields($context, array $blocks = array())
    {
        // line 15
        echo "                <fieldset>
                    <div class=\"form-group\">
                        <label for=\"username\">";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Username:"), "html", null, true);
        echo "</label>
                        <input type=\"text\" id=\"username\" class=\"form-control\" name=\"_username\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : null), "html", null, true);
        echo "\" required=\"required\" autofocus=\"autofocus\" autocomplete=\"on\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Enter login or email"), "html", null, true);
        echo "\" />
                    </div>
                    <div class=\"form-group";
        // line 20
        if ((isset($context["error"]) ? $context["error"] : null)) {
            echo " has-error";
        }
        echo "\">
                        <label for=\"password\">";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Password:"), "html", null, true);
        echo "</label>
                        <input type=\"password\" id=\"password\" class=\"form-control\" name=\"_password\" required=\"required\" placeholder=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Enter password"), "html", null, true);
        echo "\" />
                    </div>

                    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : null), "html", null, true);
        echo "\" />

                    ";
        // line 32
        echo "                    <button type=\"submit\" class=\"btn btn-primary\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Login"), "html", null, true);
        echo "</button>
                </fieldset>
            ";
    }

    public function getTemplateName()
    {
        return "EzPublishCoreBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 32,  103 => 25,  97 => 22,  93 => 21,  87 => 20,  80 => 18,  76 => 17,  72 => 15,  69 => 14,  64 => 35,  62 => 14,  58 => 13,  55 => 12,  49 => 10,  47 => 9,  41 => 6,  38 => 5,  31 => 4,  28 => 3,);
    }
}
