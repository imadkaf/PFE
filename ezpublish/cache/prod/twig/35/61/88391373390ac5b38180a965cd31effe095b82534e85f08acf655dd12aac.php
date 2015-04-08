<?php

/* eZDemoBundle:Security:login.html.twig */
class __TwigTemplate_356188391373390ac5b38180a965cd31effe095b82534e85f08acf655dd12aac extends Twig_Template
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
        echo "        <div class=\"user-login row-fluid\">
            <form action=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("login_check");
        echo "\" method=\"post\" name=\"loginform\" class=\"span7\">
                <div class=\"attribute-header\">
                    <h1 class=\"long\">";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Login"), "html", null, true);
        echo "</h1>
                </div>

                ";
        // line 11
        if ((isset($context["error"]) ? $context["error"] : null)) {
            // line 12
            echo "                    <div class=\"alert alert-error\">
                        <h2 class=\"alert-heading\">";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Could not login"), "html", null, true);
            echo "</h2>
                        <p>";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("A valid username and password is required to login."), "html", null, true);
            echo "</p>
                    </div>
                ";
        }
        // line 17
        echo "
                ";
        // line 18
        $this->displayBlock('login_fields', $context, $blocks);
        // line 37
        echo "            </form>
        </div>
    ";
    }

    // line 18
    public function block_login_fields($context, array $blocks = array())
    {
        // line 19
        echo "                    <div class=\"block\">
                        <label for=\"id1\">";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Username:"), "html", null, true);
        echo "</label>
                        <input class=\"box\" type=\"text\" name=\"_username\" id=\"id1\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : null), "html", null, true);
        echo "\" required=\"required\" autofocus=\"autofocus\" />
                    </div>

                    <div class=\"block\">
                        <label for=\"id2\">";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Password:"), "html", null, true);
        echo "</label>
                        <input class=\"box\" type=\"password\" name=\"_password\" id=\"id2\" value=\"\" required=\"required\" />
                    </div>

                    <div class=\"buttonblock\">
                        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : null), "html", null, true);
        echo "\" />
                        <input class=\"defaultbutton\" type=\"submit\" name=\"LoginButton\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Login"), "html", null, true);
        echo "\" />
                    </div>

                    <p><a href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("ez_legacy", array("module_uri" => "user/forgotpassword"));
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Forgot your password?"), "html", null, true);
        echo "</a></p>

                ";
    }

    public function getTemplateName()
    {
        return "eZDemoBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 34,  107 => 31,  103 => 30,  95 => 25,  88 => 21,  84 => 20,  81 => 19,  78 => 18,  72 => 37,  70 => 18,  67 => 17,  61 => 14,  57 => 13,  54 => 12,  52 => 11,  46 => 8,  41 => 6,  38 => 5,  31 => 4,  28 => 3,);
    }
}
