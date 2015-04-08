<?php

/* eZDemoBundle::page_header_links.html.twig */
class __TwigTemplate_9cba08898ed60fe927971adda1f66885d89886c25f1552943e22a66bd631385a extends eZ\Bundle\EzPublishDebugBundle\Twig\DebugTemplate
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
        echo "<ul class=\"nav\">
    <li id=\"tagcloud\"><a href=\"";
        // line 2
        echo $this->env->getExtension('routing')->getPath("ez_legacy", array("module_uri" => "/content/view/tagcloud/2"));
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Tag cloud"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Tag cloud"), "html", null, true);
        echo "</a></li>
    <li id=\"sitemap\"><a href=\"";
        // line 3
        echo $this->env->getExtension('routing')->getPath("ez_legacy", array("module_uri" => "/content/view/sitemap/2"));
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Site map"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Site map"), "html", null, true);
        echo "</a></li>
";
        // line 5
        if (false) {
            // line 6
            echo "    <li id=\"shoppingbasket\"><a href=\"";
            echo $this->env->getExtension('routing')->getPath("ez_legacy", array("module_uri" => "/shop/basket/"));
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Shopping basket"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Shopping basket"), "html", null, true);
            echo "</a></li>
";
        }
        // line 10
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 11
            echo "    <li id=\"myprofile\"><a href=\"";
            echo $this->env->getExtension('routing')->getPath("ez_legacy", array("module_uri" => "/user/edit/"));
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("My profile"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("My profile"), "html", null, true);
            echo "</a></li>
    <li id=\"logout\"><a href=\"";
            // line 12
            echo $this->env->getExtension('routing')->getPath("logout");
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Logout"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Logout"), "html", null, true);
            echo " ( ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo " )</a></li>
";
        } else {
            // line 14
            echo "    ";
            // line 15
            echo "    ";
            if (true) {
                // line 16
                echo "    <li id=\"registeruser\"><a href=\"";
                echo $this->env->getExtension('routing')->getPath("ez_legacy", array("module_uri" => "/user/register"));
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Register"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Register"), "html", null, true);
                echo "</a></li>
    ";
            }
            // line 18
            echo "    <li id=\"login\" class=\"transition-showed\">
        <a href=\"#login\" title=\"show login form\" class=\"show-login-form\">";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Login"), "html", null, true);
            echo "</a>
        <a href=\"#\" title=\"hide login form\" class=\"hide-login-form\">";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Login"), "html", null, true);
            echo "</a>
        <form class=\"login-form span3\" action=\"";
            // line 21
            echo $this->env->getExtension('routing')->getPath("login_check");
            echo "\" method=\"post\">
            <fieldset>
                <label>
                    <span class=\"hidden\">";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Username"), "html", null, true);
            echo "</span>
                    <input type=\"text\" name=\"_username\" id=\"login-username\" placeholder=\"Username\">
                </label>
                <label>
                    <span class=\"hidden\">";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Password"), "html", null, true);
            echo "</span>
                    <input type=\"password\" name=\"_password\" id=\"login-password\" placeholder=\"Password\">
                </label>
                <div class=\"clearfix\">
                    <a href=\"";
            // line 32
            echo $this->env->getExtension('routing')->getPath("ez_legacy", array("module_uri" => "/user/forgotpassword"));
            echo "\" class=\"forgot-password\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Forgot your password?"), "html", null, true);
            echo "</a>
                    <button class=\"btn btn-warning pull-right\" id=\"header-login-button\" type=\"submit\">
                        ";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Login"), "html", null, true);
            echo "
                    </button>
                </div>
            </fieldset>
            <input type=\"hidden\" name=\"_target_path\" value=\"\" />
        </form>
    </li>
";
        }
        // line 42
        echo "</ul>
";
    }

    public function getTemplateName()
    {
        return "eZDemoBundle::page_header_links.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 42,  125 => 34,  118 => 32,  111 => 28,  104 => 24,  98 => 21,  94 => 20,  90 => 19,  87 => 18,  77 => 16,  74 => 15,  72 => 14,  61 => 12,  52 => 11,  50 => 10,  40 => 6,  38 => 5,  30 => 3,  22 => 2,  19 => 1,);
    }
}
