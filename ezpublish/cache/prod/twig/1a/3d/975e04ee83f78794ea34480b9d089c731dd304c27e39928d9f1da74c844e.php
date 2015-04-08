<?php

/* eZDemoBundle:full:feedback_form.html.twig */
class __TwigTemplate_1a3d975e04ee83f78794ea34480b9d089c731dd304c27e39928d9f1da74c844e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("eZDemoBundle::pagelayout.html.twig");

        $this->blocks = array(
            'form_errors' => array($this, 'block_form_errors'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "eZDemoBundle::pagelayout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 4
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : null), array(0 => $this));
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_form_errors($context, array $blocks = array())
    {
        // line 7
        echo "    ";
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : null)) > 0)) {
            // line 8
            echo "        <span class=\"help-inline\">
            ";
            // line 9
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : null));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 10
                echo "                ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "
                ";
                // line 11
                if ((!$this->getAttribute($context["loop"], "last", array()))) {
                    echo ",";
                }
                // line 12
                echo "            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 13
            echo "        </span>
    ";
        }
    }

    // line 17
    public function block_content($context, array $blocks = array())
    {
        // line 18
        echo "
<section class=\"content-view-full\">
    <div class=\"row\">
        <div class=\"span8\">

            <div class=\"attribute-header\">
                <h1>";
        // line 24
        echo $this->env->getExtension('ezpublish.content')->renderField((isset($context["content"]) ? $context["content"] : null), "name");
        echo "</h1>
            </div>

            <div class=\"attribute-short\">
                ";
        // line 28
        echo $this->env->getExtension('ezpublish.content')->renderField((isset($context["content"]) ? $context["content"] : null), "description");
        echo "
            </div>

            ";
        // line 31
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 32
            echo "                <p class=\"form-success\">
                    ";
            // line 33
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
                </p>

            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 37
            echo "                ";
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start');
            echo "

                <div class=\"row\">
                    ";
            // line 40
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
            echo "
                </div>

                <div class=\"control-group ";
            // line 43
            if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "firstName", array()), "vars", array()), "errors", array())) {
                echo "error";
            }
            echo "\">
                    ";
            // line 44
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "firstName", array()), 'label', array("attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = $this->env->getExtension('translator')->trans("First Name")) ? array() : array("label" => $_label_)));
            echo "
                    <div class=\"controls\">
                        ";
            // line 46
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "firstName", array()), 'widget', array("attr" => array("class" => "span4")));
            echo "
                        ";
            // line 47
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "firstName", array()), 'errors');
            echo "
                    </div>
                </div>

                <div class=\"control-group ";
            // line 51
            if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "lastName", array()), "vars", array()), "errors", array())) {
                echo "error";
            }
            echo "\">
                    ";
            // line 52
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "lastName", array()), 'label', array("attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = $this->env->getExtension('translator')->trans("Last Name")) ? array() : array("label" => $_label_)));
            echo "
                    <div class=\"controls\">
                        ";
            // line 54
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "lastName", array()), 'widget', array("attr" => array("class" => "span4")));
            echo "
                        ";
            // line 55
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "lastName", array()), 'errors');
            echo "
                    </div>
                </div>

                <div class=\"control-group ";
            // line 59
            if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), "vars", array()), "errors", array())) {
                echo "error";
            }
            echo "\">
                    ";
            // line 60
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), 'label', array("attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = $this->env->getExtension('translator')->trans("Email")) ? array() : array("label" => $_label_)));
            echo "
                    <div class=\"controls\">
                        ";
            // line 62
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), 'widget', array("attr" => array("class" => "span6")));
            echo "
                        ";
            // line 63
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "email", array()), 'errors');
            echo "
                    </div>
                </div>

                <div class=\"control-group ";
            // line 67
            if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "subject", array()), "vars", array()), "errors", array())) {
                echo "error";
            }
            echo "\">
                    ";
            // line 68
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "subject", array()), 'label', array("attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = $this->env->getExtension('translator')->trans("Subject")) ? array() : array("label" => $_label_)));
            echo "
                    <div class=\"controls\">
                        ";
            // line 70
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "subject", array()), 'widget', array("attr" => array("class" => "span6")));
            echo "
                        ";
            // line 71
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "subject", array()), 'errors');
            echo "
                    </div>
                </div>

                <div class=\"control-group ";
            // line 75
            if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "country", array()), "vars", array()), "errors", array())) {
                echo "error";
            }
            echo "\">
                    ";
            // line 76
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "country", array()), 'label', array("attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = $this->env->getExtension('translator')->trans("Country")) ? array() : array("label" => $_label_)));
            echo "
                    <div class=\"controls\">
                        ";
            // line 78
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "country", array()), 'widget');
            echo "
                        ";
            // line 79
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "country", array()), 'errors');
            echo "
                    </div>
                </div>

                <div class=\"control-group ";
            // line 83
            if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "message", array()), "vars", array()), "errors", array())) {
                echo "error";
            }
            echo "\">
                    ";
            // line 84
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "message", array()), 'label', array("attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = $this->env->getExtension('translator')->trans("Message")) ? array() : array("label" => $_label_)));
            echo "
                    <div class=\"controls\">
                        ";
            // line 86
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "message", array()), 'widget', array("attr" => array("class" => "span8", "rows" => "10")));
            echo "
                        ";
            // line 87
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "message", array()), 'errors');
            echo "
                    </div>
                </div>

                ";
            // line 91
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "save", array()), 'widget', array("label" => $this->env->getExtension('translator')->trans("Send form"), "attr" => array("class" => "btn btn-warning pull-right")));
            echo "

                ";
            // line 93
            echo             $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
            echo "
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 95
        echo "        </div>
    </div>
</section>

";
    }

    public function getTemplateName()
    {
        return "eZDemoBundle:full:feedback_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  285 => 95,  277 => 93,  272 => 91,  265 => 87,  261 => 86,  256 => 84,  250 => 83,  243 => 79,  239 => 78,  234 => 76,  228 => 75,  221 => 71,  217 => 70,  212 => 68,  206 => 67,  199 => 63,  195 => 62,  190 => 60,  184 => 59,  177 => 55,  173 => 54,  168 => 52,  162 => 51,  155 => 47,  151 => 46,  146 => 44,  140 => 43,  134 => 40,  127 => 37,  118 => 33,  115 => 32,  110 => 31,  104 => 28,  97 => 24,  89 => 18,  86 => 17,  80 => 13,  66 => 12,  62 => 11,  57 => 10,  40 => 9,  37 => 8,  34 => 7,  31 => 6,  26 => 4,);
    }
}
