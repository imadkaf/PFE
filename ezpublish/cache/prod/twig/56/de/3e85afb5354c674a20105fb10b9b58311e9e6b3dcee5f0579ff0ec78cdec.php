<?php

/* EzPublishCoreBundle::content_fields.html.twig */
class __TwigTemplate_56de3e85afb5354c674a20105fb10b9b58311e9e6b3dcee5f0579ff0ec78cdec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'ezstring_field' => array($this, 'block_ezstring_field'),
            'eztext_field' => array($this, 'block_eztext_field'),
            'ezxmltext_field' => array($this, 'block_ezxmltext_field'),
            'ezrichtext_field' => array($this, 'block_ezrichtext_field'),
            'ezauthor_field' => array($this, 'block_ezauthor_field'),
            'ezcountry_field' => array($this, 'block_ezcountry_field'),
            'ezboolean_field' => array($this, 'block_ezboolean_field'),
            'ezdatetime_field' => array($this, 'block_ezdatetime_field'),
            'ezdate_field' => array($this, 'block_ezdate_field'),
            'eztime_field' => array($this, 'block_eztime_field'),
            'ezemail_field' => array($this, 'block_ezemail_field'),
            'ezinteger_field' => array($this, 'block_ezinteger_field'),
            'ezfloat_field' => array($this, 'block_ezfloat_field'),
            'ezurl_field' => array($this, 'block_ezurl_field'),
            'ezisbn_field' => array($this, 'block_ezisbn_field'),
            'ezkeyword_field' => array($this, 'block_ezkeyword_field'),
            'ezselection_field' => array($this, 'block_ezselection_field'),
            'ezuser_field' => array($this, 'block_ezuser_field'),
            'ezbinaryfile_field' => array($this, 'block_ezbinaryfile_field'),
            'ezmedia_field' => array($this, 'block_ezmedia_field'),
            'ezobjectrelationlist_field' => array($this, 'block_ezobjectrelationlist_field'),
            'ezgmaplocation_field' => array($this, 'block_ezgmaplocation_field'),
            'ezimage_field' => array($this, 'block_ezimage_field'),
            'ezobjectrelation_field' => array($this, 'block_ezobjectrelation_field'),
            'ezpage_field' => array($this, 'block_ezpage_field'),
            'simple_block_field' => array($this, 'block_simple_block_field'),
            'simple_inline_field' => array($this, 'block_simple_inline_field'),
            'field_attributes' => array($this, 'block_field_attributes'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 12
        echo "
";
        // line 13
        $this->displayBlock('ezstring_field', $context, $blocks);
        // line 19
        echo "
";
        // line 20
        $this->displayBlock('eztext_field', $context, $blocks);
        // line 26
        echo "
";
        // line 27
        $this->displayBlock('ezxmltext_field', $context, $blocks);
        // line 33
        echo "
";
        // line 34
        $this->displayBlock('ezrichtext_field', $context, $blocks);
        // line 40
        echo "
";
        // line 41
        $this->displayBlock('ezauthor_field', $context, $blocks);
        // line 52
        echo "
";
        // line 53
        $this->displayBlock('ezcountry_field', $context, $blocks);
        // line 70
        echo "
";
        // line 72
        $this->displayBlock('ezboolean_field', $context, $blocks);
        // line 78
        echo "
";
        // line 79
        $this->displayBlock('ezdatetime_field', $context, $blocks);
        // line 91
        echo "
";
        // line 92
        $this->displayBlock('ezdate_field', $context, $blocks);
        // line 100
        echo "
";
        // line 101
        $this->displayBlock('eztime_field', $context, $blocks);
        // line 113
        echo "
";
        // line 114
        $this->displayBlock('ezemail_field', $context, $blocks);
        // line 122
        echo "
";
        // line 123
        $this->displayBlock('ezinteger_field', $context, $blocks);
        // line 131
        echo "
";
        // line 133
        $this->displayBlock('ezfloat_field', $context, $blocks);
        // line 141
        echo "
";
        // line 142
        $this->displayBlock('ezurl_field', $context, $blocks);
        // line 150
        echo "
";
        // line 151
        $this->displayBlock('ezisbn_field', $context, $blocks);
        // line 157
        echo "
";
        // line 158
        $this->displayBlock('ezkeyword_field', $context, $blocks);
        // line 169
        echo "
";
        // line 170
        $this->displayBlock('ezselection_field', $context, $blocks);
        // line 184
        echo "
";
        // line 189
        $this->displayBlock('ezuser_field', $context, $blocks);
        // line 203
        echo "
";
        // line 205
        $this->displayBlock('ezbinaryfile_field', $context, $blocks);
        // line 216
        echo "
";
        // line 217
        $this->displayBlock('ezmedia_field', $context, $blocks);
        // line 274
        echo "
";
        // line 275
        $this->displayBlock('ezobjectrelationlist_field', $context, $blocks);
        // line 288
        echo "
";
        // line 293
        $this->displayBlock('ezgmaplocation_field', $context, $blocks);
        // line 407
        echo "
";
        // line 411
        $this->displayBlock('ezimage_field', $context, $blocks);
        // line 421
        echo "
";
        // line 422
        $this->displayBlock('ezobjectrelation_field', $context, $blocks);
        // line 431
        echo "
";
        // line 433
        $this->displayBlock('ezpage_field', $context, $blocks);
        // line 442
        echo "

";
        // line 446
        $this->displayBlock('simple_block_field', $context, $blocks);
        // line 454
        echo "
";
        // line 455
        $this->displayBlock('simple_inline_field', $context, $blocks);
        // line 461
        echo "
";
        // line 463
        $this->displayBlock('field_attributes', $context, $blocks);
    }

    // line 13
    public function block_ezstring_field($context, array $blocks = array())
    {
        // line 14
        ob_start();
        // line 15
        echo "    ";
        $context["field_value"] = $this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "value", array()), "text", array());
        // line 16
        echo "    ";
        $this->displayBlock("simple_inline_field", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 20
    public function block_eztext_field($context, array $blocks = array())
    {
        // line 21
        ob_start();
        // line 22
        echo "    ";
        $context["field_value"] = nl2br(twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "value", array()), "html", null, true));
        // line 23
        echo "    ";
        $this->displayBlock("simple_block_field", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 27
    public function block_ezxmltext_field($context, array $blocks = array())
    {
        // line 28
        ob_start();
        // line 29
        echo "    ";
        $context["field_value"] = $this->env->getExtension('ezpublish.content')->xmlTextToHtml5($this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "value", array()), "xml", array()));
        // line 30
        echo "    ";
        $this->displayBlock("simple_block_field", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 34
    public function block_ezrichtext_field($context, array $blocks = array())
    {
        // line 35
        ob_start();
        // line 36
        echo "    ";
        $context["field_value"] = $this->env->getExtension('ezpublish.content')->richTextToHtml5($this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "value", array()), "xml", array()));
        // line 37
        echo "    ";
        $this->displayBlock("simple_block_field", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 41
    public function block_ezauthor_field($context, array $blocks = array())
    {
        // line 42
        ob_start();
        // line 43
        echo "    ";
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "value", array()), "authors", array())) > 0)) {
            // line 44
            echo "        <ul ";
            $this->displayBlock("field_attributes", $context, $blocks);
            echo ">
        ";
            // line 45
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "value", array()), "authors", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["author"]) {
                // line 46
                echo "            <li><a href=\"mailto:";
                echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute($context["author"], "email", array()), "url"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["author"], "name", array()), "html", null, true);
                echo "</a></li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['author'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "        </ul>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 53
    public function block_ezcountry_field($context, array $blocks = array())
    {
        // line 54
        ob_start();
        // line 55
        echo "    ";
        if (($this->getAttribute((isset($context["fieldSettings"]) ? $context["fieldSettings"] : null), "isMultiple", array()) && (twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "value", array()), "countries", array())) > 0))) {
            // line 56
            echo "        <ul ";
            $this->displayBlock("field_attributes", $context, $blocks);
            echo ">
            ";
            // line 57
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "value", array()), "countries", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
                // line 58
                echo "                <li>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["country"], "Name", array(), "array"), "html", null, true);
                echo "</li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            echo "        </ul>
    ";
        } elseif ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "value", array()), "countries", array())) == 1)) {
            // line 62
            echo "        <p ";
            $this->displayBlock("field_attributes", $context, $blocks);
            echo ">
        ";
            // line 63
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "value", array()), "countries", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
                // line 64
                echo "            ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["country"], "Name", array(), "array"), "html", null, true);
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 66
            echo "        </p>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 72
    public function block_ezboolean_field($context, array $blocks = array())
    {
        // line 73
        ob_start();
        // line 74
        echo "    ";
        $context["field_value"] = (($this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "value", array()), "bool", array())) ? ("Yes") : ("No"));
        // line 75
        echo "    ";
        $this->displayBlock("simple_inline_field", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 79
    public function block_ezdatetime_field($context, array $blocks = array())
    {
        // line 80
        ob_start();
        // line 81
        echo "    ";
        if ((!$this->env->getExtension('ezpublish.content')->isFieldEmpty((isset($context["content"]) ? $context["content"] : null), (isset($context["field"]) ? $context["field"] : null)))) {
            // line 82
            echo "        ";
            if ($this->getAttribute((isset($context["fieldSettings"]) ? $context["fieldSettings"] : null), "useSeconds", array())) {
                // line 83
                echo "            ";
                $context["field_value"] = twig_localized_date_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "value", array()), "value", array()), "short", "medium", $this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "locale", array()));
                // line 84
                echo "        ";
            } else {
                // line 85
                echo "            ";
                $context["field_value"] = twig_localized_date_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "value", array()), "value", array()), "short", "short", $this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "locale", array()));
                // line 86
                echo "        ";
            }
            // line 87
            echo "        ";
            $this->displayBlock("simple_block_field", $context, $blocks);
            echo "
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 92
    public function block_ezdate_field($context, array $blocks = array())
    {
        // line 93
        ob_start();
        // line 94
        echo "    ";
        if ((!$this->env->getExtension('ezpublish.content')->isFieldEmpty((isset($context["content"]) ? $context["content"] : null), (isset($context["field"]) ? $context["field"] : null)))) {
            // line 95
            echo "        ";
            $context["field_value"] = twig_localized_date_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "value", array()), "date", array()), "short", "none", $this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "locale", array()));
            // line 96
            echo "        ";
            $this->displayBlock("simple_block_field", $context, $blocks);
            echo "
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 101
    public function block_eztime_field($context, array $blocks = array())
    {
        // line 102
        ob_start();
        // line 103
        echo "    ";
        if ((!$this->env->getExtension('ezpublish.content')->isFieldEmpty((isset($context["content"]) ? $context["content"] : null), (isset($context["field"]) ? $context["field"] : null)))) {
            // line 104
            echo "        ";
            if ($this->getAttribute((isset($context["fieldSettings"]) ? $context["fieldSettings"] : null), "useSeconds", array())) {
                // line 105
                echo "            ";
                $context["field_value"] = twig_localized_date_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "value", array()), "time", array()), "none", "medium", $this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "locale", array()));
                // line 106
                echo "        ";
            } else {
                // line 107
                echo "            ";
                $context["field_value"] = twig_localized_date_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "value", array()), "time", array()), "none", "short", $this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "locale", array()));
                // line 108
                echo "        ";
            }
            // line 109
            echo "        ";
            $this->displayBlock("simple_block_field", $context, $blocks);
            echo "
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 114
    public function block_ezemail_field($context, array $blocks = array())
    {
        // line 115
        ob_start();
        // line 116
        echo "    ";
        if ((!$this->env->getExtension('ezpublish.content')->isFieldEmpty((isset($context["content"]) ? $context["content"] : null), (isset($context["field"]) ? $context["field"] : null)))) {
            // line 117
            echo "        ";
            $context["field_value"] = $this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "value", array()), "email", array());
            // line 118
            echo "        <a href=\"mailto:";
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "value", array()), "email", array()), "url"), "html", null, true);
            echo "\" ";
            $this->displayBlock("field_attributes", $context, $blocks);
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "value", array()), "email", array()), "html", null, true);
            echo "</a>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 123
    public function block_ezinteger_field($context, array $blocks = array())
    {
        // line 124
        ob_start();
        // line 125
        echo "    ";
        if ((!$this->env->getExtension('ezpublish.content')->isFieldEmpty((isset($context["content"]) ? $context["content"] : null), (isset($context["field"]) ? $context["field"] : null)))) {
            // line 126
            echo "        ";
            $context["field_value"] = $this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "value", array()), "value", array());
            // line 127
            echo "        ";
            $this->displayBlock("simple_inline_field", $context, $blocks);
            echo "
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 133
    public function block_ezfloat_field($context, array $blocks = array())
    {
        // line 134
        ob_start();
        // line 135
        echo "    ";
        if ((!$this->env->getExtension('ezpublish.content')->isFieldEmpty((isset($context["content"]) ? $context["content"] : null), (isset($context["field"]) ? $context["field"] : null)))) {
            // line 136
            echo "        ";
            $context["field_value"] = $this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "value", array()), "value", array());
            // line 137
            echo "        ";
            $this->displayBlock("simple_inline_field", $context, $blocks);
            echo "
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 142
    public function block_ezurl_field($context, array $blocks = array())
    {
        // line 143
        ob_start();
        // line 144
        echo "    ";
        if ((!$this->env->getExtension('ezpublish.content')->isFieldEmpty((isset($context["content"]) ? $context["content"] : null), (isset($context["field"]) ? $context["field"] : null)))) {
            // line 145
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "value", array()), "link", array()), "html", null, true);
            echo "\"
            ";
            // line 146
            $this->displayBlock("field_attributes", $context, $blocks);
            echo ">";
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "value", array()), "text", array())) ? ($this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "value", array()), "text", array())) : ($this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "value", array()), "link", array()))), "html", null, true);
            echo "</a>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 151
    public function block_ezisbn_field($context, array $blocks = array())
    {
        // line 152
        ob_start();
        // line 153
        echo "    ";
        $context["field_value"] = $this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "value", array()), "isbn", array());
        // line 154
        echo "    ";
        $this->displayBlock("simple_inline_field", $context, $blocks);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 158
    public function block_ezkeyword_field($context, array $blocks = array())
    {
        // line 159
        ob_start();
        // line 160
        echo "    ";
        if ((!$this->env->getExtension('ezpublish.content')->isFieldEmpty((isset($context["content"]) ? $context["content"] : null), (isset($context["field"]) ? $context["field"] : null)))) {
            // line 161
            echo "        <ul ";
            $this->displayBlock("field_attributes", $context, $blocks);
            echo ">
        ";
            // line 162
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "value", array()), "values", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["keyword"]) {
                // line 163
                echo "            <li>";
                echo twig_escape_filter($this->env, $context["keyword"], "html", null, true);
                echo "</li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['keyword'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 165
            echo "        </ul>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 170
    public function block_ezselection_field($context, array $blocks = array())
    {
        // line 171
        ob_start();
        // line 172
        echo "    ";
        if (($this->getAttribute((isset($context["fieldSettings"]) ? $context["fieldSettings"] : null), "isMultiple", array()) && (twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "value", array()), "selection", array())) > 0))) {
            // line 173
            echo "        <ul ";
            $this->displayBlock("field_attributes", $context, $blocks);
            echo ">
        ";
            // line 174
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "value", array()), "selection", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["selectedIndex"]) {
                // line 175
                echo "            <li>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["fieldSettings"]) ? $context["fieldSettings"] : null), "options", array()), $context["selectedIndex"], array(), "array"), "html", null, true);
                echo "</li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['selectedIndex'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 177
            echo "        </ul>
    ";
        } elseif ((!$this->getAttribute((isset($context["fieldSettings"]) ? $context["fieldSettings"] : null), "isMultiple", array()))) {
            // line 179
            echo "        ";
            $context["field_value"] = $this->getAttribute($this->getAttribute((isset($context["fieldSettings"]) ? $context["fieldSettings"] : null), "options", array()), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "value", array()), "selection", array()), 0, array()), array(), "array");
            // line 180
            echo "        ";
            $this->displayBlock("simple_block_field", $context, $blocks);
            echo "
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 189
    public function block_ezuser_field($context, array $blocks = array())
    {
        // line 190
        ob_start();
        // line 191
        echo "<dl ";
        $this->displayBlock("field_attributes", $context, $blocks);
        echo ">
    <dt>User ID</dt>
    <dd>";
        // line 193
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "value", array()), "contentId", array()), "html", null, true);
        echo "</dd>
    <dt>Username</dt>
    <dd>";
        // line 195
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "value", array()), "login", array()), "html", null, true);
        echo "</dd>
    <dt>Email</dt>
    <dd><a href=\"mailto:";
        // line 197
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "value", array()), "email", array()), "url"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "value", array()), "email", array()), "html", null, true);
        echo "</a></dd>
    <dt>Account status</dt>
    <dd>";
        // line 199
        echo (($this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "value", array()), "enabled", array())) ? ("enabled") : ("disabled"));
        echo "</dd>
</dl>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 205
    public function block_ezbinaryfile_field($context, array $blocks = array())
    {
        // line 206
        ob_start();
        // line 207
        echo "    ";
        if ((!$this->env->getExtension('ezpublish.content')->isFieldEmpty((isset($context["content"]) ? $context["content"] : null), (isset($context["field"]) ? $context["field"] : null)))) {
            // line 208
            echo "        ";
            $context["uri"] = ((((((("content/download/" . $this->getAttribute((isset($context["contentInfo"]) ? $context["contentInfo"] : null), "id", array())) . "/") . $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "id", array())) . "/version/") . $this->getAttribute((isset($context["contentInfo"]) ? $context["contentInfo"] : null), "currentVersionNo", array())) . "/file/") . twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "value", array()), "fileName", array()), "url"));
            // line 211
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ez_legacy", array("module_uri" => (isset($context["uri"]) ? $context["uri"] : null))), "html", null, true);
            echo "\"
            ";
            // line 212
            $this->displayBlock("field_attributes", $context, $blocks);
            echo ">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "value", array()), "fileName", array()), "html", null, true);
            echo "</a>&nbsp;(";
            echo twig_escape_filter($this->env, $this->env->getExtension('ezpublish.fileSize')->sizeFilter($this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "value", array()), "fileSize", array()), 1), "html", null, true);
            echo ")
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 217
    public function block_ezmedia_field($context, array $blocks = array())
    {
        // line 218
        if ((!$this->env->getExtension('ezpublish.content')->isFieldEmpty((isset($context["content"]) ? $context["content"] : null), (isset($context["field"]) ? $context["field"] : null)))) {
            // line 219
            ob_start();
            // line 220
            echo "    ";
            $context["type"] = $this->getAttribute((isset($context["fieldSettings"]) ? $context["fieldSettings"] : null), "mediaType", array());
            // line 221
            echo "    ";
            $context["value"] = $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "value", array());
            // line 222
            echo "    ";
            $context["uri"] = ((((("content/download/" . $this->getAttribute((isset($context["contentInfo"]) ? $context["contentInfo"] : null), "id", array())) . "/") . $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "id", array())) . "/") . twig_escape_filter($this->env, $this->getAttribute((isset($context["value"]) ? $context["value"] : null), "fileName", array()), "url"));
            // line 224
            echo "    ";
            $context["download"] = $this->env->getExtension('routing')->getPath("ez_legacy", array("module_uri" => (isset($context["uri"]) ? $context["uri"] : null)));
            // line 225
            echo "    ";
            $context["width"] = ((($this->getAttribute((isset($context["value"]) ? $context["value"] : null), "width", array()) > 0)) ? ((("width=\"" . $this->getAttribute((isset($context["value"]) ? $context["value"] : null), "width", array())) . "\"")) : (""));
            // line 226
            echo "    ";
            $context["height"] = ((($this->getAttribute((isset($context["value"]) ? $context["value"] : null), "height", array()) > 0)) ? ((("height=\"" . $this->getAttribute((isset($context["value"]) ? $context["value"] : null), "height", array())) . "\"")) : (""));
            // line 227
            echo "    <div ";
            $this->displayBlock("field_attributes", $context, $blocks);
            echo ">
    ";
            // line 229
            echo "    ";
            if ((((((isset($context["type"]) ? $context["type"] : null) == "html5_video") || ((isset($context["type"]) ? $context["type"] : null) == "quick_time")) || ((isset($context["type"]) ? $context["type"] : null) == "windows_media_player")) || ((isset($context["type"]) ? $context["type"] : null) == "real_player"))) {
                // line 233
                echo "        <video src=\"";
                echo (isset($context["download"]) ? $context["download"] : null);
                echo "\" ";
                echo (isset($context["width"]) ? $context["width"] : null);
                echo " ";
                echo (isset($context["height"]) ? $context["height"] : null);
                echo "
            ";
                // line 234
                echo (($this->getAttribute((isset($context["value"]) ? $context["value"] : null), "autoplay", array())) ? ("autoplay=\"autoplay\"") : (""));
                echo "
            ";
                // line 235
                echo (($this->getAttribute((isset($context["value"]) ? $context["value"] : null), "hasController", array())) ? ("controls=\"controls\"") : (""));
                echo "
            ";
                // line 236
                echo (($this->getAttribute((isset($context["value"]) ? $context["value"] : null), "loop", array())) ? ("loop=\"loop\"") : (""));
                echo ">
            Your browser does not support html5 video.
        </video>
    ";
            } elseif (((isset($context["type"]) ? $context["type"] : null) == "html5_audio")) {
                // line 240
                echo "        <audio src=\"";
                echo (isset($context["download"]) ? $context["download"] : null);
                echo "\"
            ";
                // line 241
                echo (($this->getAttribute((isset($context["value"]) ? $context["value"] : null), "autoplay", array())) ? ("autoplay=\"autoplay\"") : (""));
                echo "
            ";
                // line 242
                echo (($this->getAttribute((isset($context["value"]) ? $context["value"] : null), "hasController", array())) ? ("controls=\"controls\"") : (""));
                echo "
            ";
                // line 243
                echo (($this->getAttribute((isset($context["value"]) ? $context["value"] : null), "loop", array())) ? ("loop=\"loop\"") : (""));
                echo "
            preload=\"none\">
            Your browser does not support html5 audio.
        </audio>
    ";
            } elseif (((isset($context["type"]) ? $context["type"] : null) == "flash")) {
                // line 248
                echo "        <object type=\"application/x-shockwave-flash\" ";
                echo (isset($context["width"]) ? $context["width"] : null);
                echo " ";
                echo (isset($context["height"]) ? $context["height"] : null);
                echo " data=\"";
                echo (isset($context["download"]) ? $context["download"] : null);
                echo "\">
            <param name=\"movie\" value=\"";
                // line 249
                echo (isset($context["download"]) ? $context["download"] : null);
                echo "\" />
            <param name=\"play\" value=\"";
                // line 250
                echo (($this->getAttribute((isset($context["value"]) ? $context["value"] : null), "autoplay", array())) ? ("true") : ("false"));
                echo "\" />
            <param name=\"loop\" value=\"";
                // line 251
                echo (($this->getAttribute((isset($context["value"]) ? $context["value"] : null), "loop", array())) ? ("true") : ("false"));
                echo "\" />
            <param name=\"quality\" value=\"";
                // line 252
                echo $this->getAttribute((isset($context["value"]) ? $context["value"] : null), "quality", array());
                echo "\" />
        </object>
    ";
            } elseif (((isset($context["type"]) ? $context["type"] : null) == "silverlight")) {
                // line 255
                echo "        <script type=\"text/javascript\">
            function onErrorHandler(sender, args) { }
            function onResizeHandler(sender, args) { }
        </script>
        <object data=\"data:application/x-silverlight,\" type=\"application/x-silverlight-2\" ";
                // line 259
                echo (isset($context["width"]) ? $context["width"] : null);
                echo " ";
                echo (isset($context["height"]) ? $context["height"] : null);
                echo ">
            <param name=\"source\" value=\"";
                // line 260
                echo (isset($context["download"]) ? $context["download"] : null);
                echo "\" />
            <param name=\"onError\" value=\"onErrorHandler\" />
            <param name=\"onResize\" value=\"onResizeHandler\" />
            <a href=\"http://go.microsoft.com/fwlink/?LinkID=108182\">
                <img src=\"http://go.microsoft.com/fwlink/?LinkId=108181\" alt=\"Get Microsoft Silverlight\" />
            </a>
        </object>
        <iframe style=\"visibility: hidden; height: 0; width: 0; border: 0px;\"></iframe>
    ";
            }
            // line 269
            echo "    ";
            // line 270
            echo "    </div>
";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        }
    }

    // line 275
    public function block_ezobjectrelationlist_field($context, array $blocks = array())
    {
        // line 276
        ob_start();
        // line 277
        echo "    ";
        if ((!$this->env->getExtension('ezpublish.content')->isFieldEmpty((isset($context["content"]) ? $context["content"] : null), (isset($context["field"]) ? $context["field"] : null)))) {
            // line 278
            echo "    <ul ";
            $this->displayBlock("field_attributes", $context, $blocks);
            echo ">
        ";
            // line 279
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "value", array()), "destinationContentIds", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["contentId"]) {
                // line 280
                echo "        <li>
            ";
                // line 281
                echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("ez_content:viewContent", array("contentId" => $context["contentId"], "viewType" => "embed", "noLayout" => 1)));
                echo "
        </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contentId'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 284
            echo "    </ul>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 293
    public function block_ezgmaplocation_field($context, array $blocks = array())
    {
        // line 306
        ob_start();
        // line 307
        echo "<div ";
        $this->displayBlock("field_attributes", $context, $blocks);
        echo ">
    ";
        // line 308
        $context["defaultWidth"] = "500px";
        // line 309
        echo "    ";
        $context["defaultHeight"] = "200px";
        // line 310
        echo "    ";
        $context["defaultShowMap"] = true;
        // line 311
        echo "    ";
        $context["defaultShowInfo"] = true;
        // line 312
        echo "    ";
        $context["defaultZoom"] = 13;
        // line 313
        echo "    ";
        $context["defaultMapType"] = "ROADMAP";
        // line 314
        echo "    ";
        $context["defaultDraggable"] = "true";
        // line 315
        echo "
    ";
        // line 316
        $context["hasContent"] = (!(null === $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "value", array())));
        // line 317
        echo "    ";
        $context["latitude"] = (($this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "value", array(), "any", false, true), "latitude", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "value", array(), "any", false, true), "latitude", array()), 0)) : (0));
        // line 318
        echo "    ";
        $context["longitude"] = (($this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "value", array(), "any", false, true), "longitude", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "value", array(), "any", false, true), "longitude", array()), 0)) : (0));
        // line 319
        echo "    ";
        $context["address"] = (($this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "value", array(), "any", false, true), "address", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "value", array(), "any", false, true), "address", array()), "")) : (""));
        // line 320
        echo "    ";
        $context["mapId"] = ("maplocation-map-" . $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "id", array()));
        // line 321
        echo "
    ";
        // line 322
        $context["zoom"] = (($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "zoom", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "zoom", array()), (isset($context["defaultZoom"]) ? $context["defaultZoom"] : null))) : ((isset($context["defaultZoom"]) ? $context["defaultZoom"] : null)));
        // line 323
        echo "    ";
        $context["mapType"] = (($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "mapType", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "mapType", array()), (isset($context["defaultMapType"]) ? $context["defaultMapType"] : null))) : ((isset($context["defaultMapType"]) ? $context["defaultMapType"] : null)));
        // line 324
        echo "
    ";
        // line 325
        list($context["mapWidth"], $context["mapHeight"]) =         array((isset($context["defaultWidth"]) ? $context["defaultWidth"] : null), (isset($context["defaultHeight"]) ? $context["defaultHeight"] : null));
        // line 326
        echo "    ";
        if ($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "width", array(), "any", true, true)) {
            // line 327
            echo "        ";
            $context["mapWidth"] = $this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "width", array());
            // line 328
            echo "    ";
        }
        // line 329
        echo "
    ";
        // line 330
        if ($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "height", array(), "any", true, true)) {
            // line 331
            echo "        ";
            $context["mapHeight"] = $this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "height", array());
            // line 332
            echo "    ";
        }
        // line 333
        echo "
    ";
        // line 334
        $context["showMap"] = (isset($context["defaultShowMap"]) ? $context["defaultShowMap"] : null);
        // line 335
        echo "    ";
        if (($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "showMap", array(), "any", true, true) && (!$this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "showMap", array())))) {
            // line 336
            echo "        ";
            $context["showMap"] = false;
            // line 337
            echo "    ";
        }
        // line 338
        echo "
    ";
        // line 339
        $context["showInfo"] = (isset($context["defaultShowInfo"]) ? $context["defaultShowInfo"] : null);
        // line 340
        echo "    ";
        if (($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "showInfo", array(), "any", true, true) && (!$this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "showInfo", array())))) {
            // line 341
            echo "        ";
            $context["showInfo"] = false;
            // line 342
            echo "    ";
        }
        // line 343
        echo "    
    ";
        // line 344
        $context["draggable"] = (isset($context["defaultDraggable"]) ? $context["defaultDraggable"] : null);
        // line 345
        echo "    ";
        if (($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "draggable", array(), "any", true, true) && (!$this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "draggable", array())))) {
            // line 346
            echo "        ";
            $context["draggable"] = "false";
            // line 347
            echo "    ";
        }
        // line 348
        echo "
    ";
        // line 349
        if ((isset($context["showInfo"]) ? $context["showInfo"] : null)) {
            // line 350
            echo "    <dl>
        <dt>Latitude</dt>
        <dd>";
            // line 352
            echo twig_escape_filter($this->env, (((isset($context["hasContent"]) ? $context["hasContent"] : null)) ? ((isset($context["latitude"]) ? $context["latitude"] : null)) : ("Not set")), "html", null, true);
            echo "</dd>
        <dt>Longitude</dt>
        <dd>";
            // line 354
            echo twig_escape_filter($this->env, (((isset($context["longitude"]) ? $context["longitude"] : null)) ? ((isset($context["longitude"]) ? $context["longitude"] : null)) : ("Not set")), "html", null, true);
            echo "</dd>
        ";
            // line 355
            if ((isset($context["address"]) ? $context["address"] : null)) {
                // line 356
                echo "        <dt>Address</dt>
        <dd>";
                // line 357
                echo twig_escape_filter($this->env, (isset($context["address"]) ? $context["address"] : null), "html", null, true);
                echo "</dd>
        ";
            }
            // line 359
            echo "    </dl>
    ";
        }
        // line 361
        echo "
    ";
        // line 362
        if (((isset($context["hasContent"]) ? $context["hasContent"] : null) && (isset($context["showMap"]) ? $context["showMap"] : null))) {
            // line 363
            echo "        <script type=\"text/javascript\" src=\"http://maps.google.com/maps/api/js?sensor=true\"></script>
        <script type=\"text/javascript\">
        (function(win, doc) {
            var mapView = function (mapId, latitude, longitude) {
                var mapElt = doc.getElementById(\"";
            // line 367
            echo twig_escape_filter($this->env, (isset($context["mapId"]) ? $context["mapId"] : null), "html", null, true);
            echo "\"),
                    startPoint = new google.maps.LatLng(latitude, longitude),
                    zoom = ";
            // line 369
            echo twig_escape_filter($this->env, (isset($context["zoom"]) ? $context["zoom"] : null), "html", null, true);
            echo ",
                    draggable = ";
            // line 370
            echo twig_escape_filter($this->env, (isset($context["draggable"]) ? $context["draggable"] : null), "html", null, true);
            echo ";

                new google.maps.Marker({
                    map: new google.maps.Map(mapElt, {
                        center: startPoint,
                        zoom: zoom,
                        draggable: draggable,
                        mapTypeId: google.maps.MapTypeId.";
            // line 377
            echo twig_escape_filter($this->env, (isset($context["mapType"]) ? $context["mapType"] : null), "html", null, true);
            echo "
                    }),
                    position: startPoint
                });
            }
            if ( win.addEventListener ) {
                win.addEventListener(
                    'load',
                    function () {
                        mapView(\"";
            // line 386
            echo twig_escape_filter($this->env, (isset($context["mapId"]) ? $context["mapId"] : null), "html", null, true);
            echo "\", ";
            echo twig_escape_filter($this->env, (isset($context["latitude"]) ? $context["latitude"] : null), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, (isset($context["longitude"]) ? $context["longitude"] : null), "html", null, true);
            echo ");
                    },
                    false
                );
            } else if ( win.attachEvent ) {
                win.attachEvent(
                    'onload',
                    function () {
                        mapView(\"";
            // line 394
            echo twig_escape_filter($this->env, (isset($context["mapId"]) ? $context["mapId"] : null), "html", null, true);
            echo "\", ";
            echo twig_escape_filter($this->env, (isset($context["latitude"]) ? $context["latitude"] : null), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, (isset($context["longitude"]) ? $context["longitude"] : null), "html", null, true);
            echo ");
                    }
                );
            }
        })(window, document);
        </script>
        ";
            // line 400
            $context["mapStyle"] = (((isset($context["mapWidth"]) ? $context["mapWidth"] : null)) ? ((("width:" . (isset($context["mapWidth"]) ? $context["mapWidth"] : null)) . ";")) : (""));
            // line 401
            echo "        ";
            $context["mapStyle"] = (((isset($context["mapHeight"]) ? $context["mapHeight"] : null)) ? ((((isset($context["mapStyle"]) ? $context["mapStyle"] : null) . " height:") . (isset($context["mapHeight"]) ? $context["mapHeight"] : null))) : ((isset($context["mapStyle"]) ? $context["mapStyle"] : null)));
            // line 402
            echo "        <div class=\"maplocation-map\" id=\"";
            echo twig_escape_filter($this->env, (isset($context["mapId"]) ? $context["mapId"] : null), "html", null, true);
            echo "\" style=\"";
            echo twig_escape_filter($this->env, (isset($context["mapStyle"]) ? $context["mapStyle"] : null), "html", null, true);
            echo "\"></div>
    ";
        }
        // line 404
        echo "</div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 411
    public function block_ezimage_field($context, array $blocks = array())
    {
        // line 412
        ob_start();
        // line 413
        if ((!$this->env->getExtension('ezpublish.content')->isFieldEmpty((isset($context["content"]) ? $context["content"] : null), (isset($context["field"]) ? $context["field"] : null)))) {
            // line 414
            echo "<figure ";
            $this->displayBlock("field_attributes", $context, $blocks);
            echo ">
    ";
            // line 415
            $context["imageAlias"] = $this->env->getExtension('ezpublish.content')->getImageVariation((isset($context["field"]) ? $context["field"] : null), (isset($context["versionInfo"]) ? $context["versionInfo"] : null), (($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "alias", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "alias", array()), "original")) : ("original")));
            // line 416
            echo "    <img src=\"";
            if ((isset($context["imageAlias"]) ? $context["imageAlias"] : null)) {
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["imageAlias"]) ? $context["imageAlias"] : null), "uri", array())), "html", null, true);
            } else {
                echo "//:0";
            }
            echo "\"";
            if ($this->getAttribute((isset($context["imageAlias"]) ? $context["imageAlias"] : null), "width", array(), "any", true, true)) {
                echo " width=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["imageAlias"]) ? $context["imageAlias"] : null), "width", array()), "html", null, true);
                echo "\"";
            }
            if ($this->getAttribute((isset($context["imageAlias"]) ? $context["imageAlias"] : null), "height", array(), "any", true, true)) {
                echo " height=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["imageAlias"]) ? $context["imageAlias"] : null), "height", array()), "html", null, true);
                echo "\"";
            }
            echo " alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "value", array()), "alternativeText", array()), "html", null, true);
            echo "\" />
</figure>
";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 422
    public function block_ezobjectrelation_field($context, array $blocks = array())
    {
        // line 423
        ob_start();
        // line 424
        if ((!$this->env->getExtension('ezpublish.content')->isFieldEmpty((isset($context["content"]) ? $context["content"] : null), (isset($context["field"]) ? $context["field"] : null)))) {
            // line 425
            echo "    <div ";
            $this->displayBlock("field_attributes", $context, $blocks);
            echo ">
        ";
            // line 426
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("ez_content:viewContent", array("contentId" => $this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "value", array()), "destinationContentId", array()), "viewType" => "text_linked", "noLayout" => 1)));
            echo "
    </div>
";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 433
    public function block_ezpage_field($context, array $blocks = array())
    {
        // line 434
        ob_start();
        // line 435
        if ((!$this->env->getExtension('ezpublish.content')->isFieldEmpty((isset($context["content"]) ? $context["content"] : null), (isset($context["field"]) ? $context["field"] : null)))) {
            // line 436
            echo "    ";
            $context["layout"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "value", array()), "page", array()), "layout", array());
            // line 437
            echo "    ";
            $context["template"] = $this->getAttribute($this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "pageService", array()), "getLayoutTemplate", array(0 => (isset($context["layout"]) ? $context["layout"] : null)), "method");
            // line 438
            echo "    ";
            $this->env->resolveTemplate((isset($context["template"]) ? $context["template"] : null))->display(array_merge($context, array("zones" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "value", array()), "page", array()), "zones", array()), "zone_layout" => (isset($context["layout"]) ? $context["layout"] : null), "pageService" => $this->getAttribute((isset($context["parameters"]) ? $context["parameters"] : null), "pageService", array()))));
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 446
    public function block_simple_block_field($context, array $blocks = array())
    {
        // line 447
        ob_start();
        // line 448
        echo "    ";
        $context["field_value"] = ((array_key_exists("field_value", $context)) ? (_twig_default_filter((isset($context["field_value"]) ? $context["field_value"] : null), $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "value", array()))) : ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "value", array())));
        // line 449
        echo "    <div ";
        $this->displayBlock("field_attributes", $context, $blocks);
        echo ">
        ";
        // line 450
        echo (isset($context["field_value"]) ? $context["field_value"] : null);
        echo "
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 455
    public function block_simple_inline_field($context, array $blocks = array())
    {
        // line 456
        ob_start();
        // line 457
        echo "    ";
        $context["field_value"] = ((array_key_exists("field_value", $context)) ? (_twig_default_filter((isset($context["field_value"]) ? $context["field_value"] : null), $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "value", array()))) : ($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "value", array())));
        // line 458
        echo "    <span ";
        $this->displayBlock("field_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, (isset($context["field_value"]) ? $context["field_value"] : null), "html", null, true);
        echo "</span>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 463
    public function block_field_attributes($context, array $blocks = array())
    {
        // line 464
        ob_start();
        // line 465
        echo "    ";
        $context["attr"] = ((array_key_exists("attr", $context)) ? (_twig_default_filter((isset($context["attr"]) ? $context["attr"] : null), array())) : (array()));
        // line 466
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : null));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
            echo "\" ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "EzPublishCoreBundle::content_fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1232 => 466,  1229 => 465,  1227 => 464,  1224 => 463,  1214 => 458,  1211 => 457,  1209 => 456,  1206 => 455,  1198 => 450,  1193 => 449,  1190 => 448,  1188 => 447,  1185 => 446,  1178 => 438,  1175 => 437,  1172 => 436,  1170 => 435,  1168 => 434,  1165 => 433,  1156 => 426,  1151 => 425,  1149 => 424,  1147 => 423,  1144 => 422,  1117 => 416,  1115 => 415,  1110 => 414,  1108 => 413,  1106 => 412,  1103 => 411,  1097 => 404,  1089 => 402,  1086 => 401,  1084 => 400,  1071 => 394,  1056 => 386,  1044 => 377,  1034 => 370,  1030 => 369,  1025 => 367,  1019 => 363,  1017 => 362,  1014 => 361,  1010 => 359,  1005 => 357,  1002 => 356,  1000 => 355,  996 => 354,  991 => 352,  987 => 350,  985 => 349,  982 => 348,  979 => 347,  976 => 346,  973 => 345,  971 => 344,  968 => 343,  965 => 342,  962 => 341,  959 => 340,  957 => 339,  954 => 338,  951 => 337,  948 => 336,  945 => 335,  943 => 334,  940 => 333,  937 => 332,  934 => 331,  932 => 330,  929 => 329,  926 => 328,  923 => 327,  920 => 326,  918 => 325,  915 => 324,  912 => 323,  910 => 322,  907 => 321,  904 => 320,  901 => 319,  898 => 318,  895 => 317,  893 => 316,  890 => 315,  887 => 314,  884 => 313,  881 => 312,  878 => 311,  875 => 310,  872 => 309,  870 => 308,  865 => 307,  863 => 306,  860 => 293,  853 => 284,  844 => 281,  841 => 280,  837 => 279,  832 => 278,  829 => 277,  827 => 276,  824 => 275,  817 => 270,  815 => 269,  803 => 260,  797 => 259,  791 => 255,  785 => 252,  781 => 251,  777 => 250,  773 => 249,  764 => 248,  756 => 243,  752 => 242,  748 => 241,  743 => 240,  736 => 236,  732 => 235,  728 => 234,  719 => 233,  716 => 229,  711 => 227,  708 => 226,  705 => 225,  702 => 224,  699 => 222,  696 => 221,  693 => 220,  691 => 219,  689 => 218,  686 => 217,  674 => 212,  669 => 211,  666 => 208,  663 => 207,  661 => 206,  658 => 205,  650 => 199,  643 => 197,  638 => 195,  633 => 193,  627 => 191,  625 => 190,  622 => 189,  613 => 180,  610 => 179,  606 => 177,  597 => 175,  593 => 174,  588 => 173,  585 => 172,  583 => 171,  580 => 170,  573 => 165,  564 => 163,  560 => 162,  555 => 161,  552 => 160,  550 => 159,  547 => 158,  539 => 154,  536 => 153,  534 => 152,  531 => 151,  521 => 146,  516 => 145,  513 => 144,  511 => 143,  508 => 142,  499 => 137,  496 => 136,  493 => 135,  491 => 134,  488 => 133,  479 => 127,  476 => 126,  473 => 125,  471 => 124,  468 => 123,  455 => 118,  452 => 117,  449 => 116,  447 => 115,  444 => 114,  435 => 109,  432 => 108,  429 => 107,  426 => 106,  423 => 105,  420 => 104,  417 => 103,  415 => 102,  412 => 101,  403 => 96,  400 => 95,  397 => 94,  395 => 93,  392 => 92,  383 => 87,  380 => 86,  377 => 85,  374 => 84,  371 => 83,  368 => 82,  365 => 81,  363 => 80,  360 => 79,  352 => 75,  349 => 74,  347 => 73,  344 => 72,  337 => 66,  328 => 64,  324 => 63,  319 => 62,  315 => 60,  306 => 58,  302 => 57,  297 => 56,  294 => 55,  292 => 54,  289 => 53,  282 => 48,  271 => 46,  267 => 45,  262 => 44,  259 => 43,  257 => 42,  254 => 41,  246 => 37,  243 => 36,  241 => 35,  238 => 34,  230 => 30,  227 => 29,  225 => 28,  222 => 27,  214 => 23,  211 => 22,  209 => 21,  206 => 20,  198 => 16,  195 => 15,  193 => 14,  190 => 13,  186 => 463,  183 => 461,  181 => 455,  178 => 454,  176 => 446,  172 => 442,  170 => 433,  167 => 431,  165 => 422,  162 => 421,  160 => 411,  157 => 407,  155 => 293,  152 => 288,  150 => 275,  147 => 274,  145 => 217,  142 => 216,  140 => 205,  137 => 203,  135 => 189,  132 => 184,  130 => 170,  127 => 169,  125 => 158,  122 => 157,  120 => 151,  117 => 150,  115 => 142,  112 => 141,  110 => 133,  107 => 131,  105 => 123,  102 => 122,  100 => 114,  97 => 113,  95 => 101,  92 => 100,  90 => 92,  87 => 91,  85 => 79,  82 => 78,  80 => 72,  77 => 70,  75 => 53,  72 => 52,  70 => 41,  67 => 40,  65 => 34,  62 => 33,  60 => 27,  57 => 26,  55 => 20,  52 => 19,  50 => 13,  47 => 12,);
    }
}
