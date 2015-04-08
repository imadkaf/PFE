<?php

/* EzPublishDebugBundle:Profiler:layout.html.twig */
class __TwigTemplate_d281808e6d8d8b1cb00a993fe772abd09bce9d8567d709e7a822bfea7a1957bd extends eZ\Bundle\EzPublishDebugBundle\Twig\DebugTemplate
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("WebProfilerBundle:Profiler:layout.html.twig");

        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "WebProfilerBundle:Profiler:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $context["icon"] = ('' === $tmp = "        <img width=\"28\" height=\"28\" alt=\"eZ Publish Info\" style=\"vertical-align: bottom\" src=\"data:image/png;base64,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\" />
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 7
        echo "
    ";
        // line 8
        ob_start();
        // line 9
        echo "        <div class=\"sf-toolbar-info-piece\">
            <b>SPI (persistence)</b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>calls</b> <span class=\"sf-toolbar-status sf-toolbar-status-green\">";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "count", array()), "html", null, true);
        echo "</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>handlers</b> <span class=\"sf-toolbar-status sf-toolbar-status-green\">";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "handlerscount", array()), "html", null, true);
        echo "</span>
        </div>
        <hr />

        ";
        // line 20
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "templates", array()), "compact", array())) || twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "legacytemplates", array()), "compact", array())))) {
            // line 21
            echo "            <div class=\"sf-toolbar-info-piece\">
                <b>Templates</b>
            </div>

            ";
            // line 25
            if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "templates", array()), "compact", array()))) {
                // line 26
                echo "                <div class=\"sf-toolbar-info-piece\">
                    <b>Twig</b> <span class=\"sf-toolbar-status sf-toolbar-status-green\">";
                // line 27
                echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "templates", array()), "compact", array())), "html", null, true);
                echo "</span>
                </div>
            ";
            }
            // line 30
            echo "
            ";
            // line 31
            if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "legacytemplates", array()), "compact", array()))) {
                // line 32
                echo "                <div class=\"sf-toolbar-info-piece\">
                    <b>Legacy</b> <span class=\"sf-toolbar-status sf-toolbar-status-green\">";
                // line 33
                echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "legacytemplates", array()), "compact", array())), "html", null, true);
                echo "</span>
                </div>
            ";
            }
            // line 36
            echo "        ";
        }
        // line 37
        echo "    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 38
        echo "
    ";
        // line 39
        $this->env->loadTemplate("WebProfilerBundle:Profiler:toolbar_item.html.twig")->display(array_merge($context, array("link" => (isset($context["profiler_url"]) ? $context["profiler_url"] : $this->getContext($context, "profiler_url")))));
    }

    // line 42
    public function block_menu($context, array $blocks = array())
    {
        // line 43
        echo "<span class=\"label\">
    <span class=\"icon\"><img width=\"20\" height=\"24\" alt=\"eZ Publish Info\" style=\"vertical-align: middle;\" src=\"data:image/png;base64,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\" /></span>
    <strong>eZ Publish</strong>
    <span class=\"count\">
        <span title=\"SPI calls\">";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "count", array()), "html", null, true);
        echo "</span>
    </span>
</span>
";
    }

    // line 52
    public function block_panel($context, array $blocks = array())
    {
        // line 53
        echo "    <h2>eZ Publish Usage Information</h2>

    ";
        // line 55
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "legacytemplates", array()), "full", array())) > 0)) {
            // line 56
            echo "    <h3>Loaded legacy templates</h3>
    <table>
        <tr>
            <th>Requested</th>
            <th><abbr title=\"Usage count\">#</abbr></th>
            <th>Override</th>
            <th>Path</th>
        </tr>
        ";
            // line 64
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "legacytemplates", array()), "full", array()));
            foreach ($context['_seq'] as $context["tpl"] => $context["info"]) {
                // line 65
                echo "        <tr>
            <td>";
                // line 66
                echo twig_escape_filter($this->env, $context["tpl"], "html", null, true);
                echo "</td>
            <td>";
                // line 67
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "legacytemplates", array()), "compact", array()), $context["tpl"], array(), "array"), "html", null, true);
                echo "</td>
            <td>";
                // line 68
                if (($context["tpl"] != $this->getAttribute($context["info"], "loaded", array()))) {
                    echo twig_escape_filter($this->env, $this->getAttribute($context["info"], "loaded", array()), "html", null, true);
                    echo "N/A";
                } else {
                }
                echo "</td>
            <td>";
                // line 69
                echo twig_escape_filter($this->env, $this->getAttribute($context["info"], "fullPath", array()), "html", null, true);
                echo "</td>
        </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['tpl'], $context['info'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 72
            echo "    </table>
    ";
        }
        // line 74
        echo "
    ";
        // line 75
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "templates", array()), "full", array())) > 0)) {
            // line 76
            echo "    <h3>Loaded twig templates</h3>
    <table>
        <tr>
            <th>Loaded template</th>
            <th><abbr title=\"Usage count\">#</abbr></th>
            <th><abbr title=\"Execution time (all occurrences, in milliseconds)\">Exec. time (ms)</abbr></th>
        </tr>
        ";
            // line 83
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "templates", array()), "full", array()));
            foreach ($context['_seq'] as $context["tpl"] => $context["time"]) {
                // line 84
                echo "        <tr>
            <td>";
                // line 85
                echo twig_escape_filter($this->env, $context["tpl"], "html", null, true);
                echo "</td>
            <td>";
                // line 86
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "templates", array()), "compact", array()), $context["tpl"], array(), "array"), "html", null, true);
                echo "</td>
            <td style=\"text-align: right\">";
                // line 87
                echo twig_escape_filter($this->env, $context["time"], "html", null, true);
                echo "</td>
        </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['tpl'], $context['time'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 90
            echo "    </table>
    ";
        }
        // line 92
        echo "
    <table>
        <tr>
            <th>Total Uncached SPI calls:</th>
            <td>";
        // line 96
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "count", array()), "html", null, true);
        echo "</td>
        </tr>
        ";
        // line 98
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "handlerscount", array())) {
            // line 99
            echo "        <tr>
            <th>Uncached SPI handlers(times loaded):</th>
            <td>";
            // line 101
            echo twig_escape_filter($this->env, twig_join_filter($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "handlers", array()), ", "), "html", null, true);
            echo "</td>
        </tr>
        ";
        }
        // line 104
        echo "    </table>

    ";
        // line 106
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "callsLoggingEnabled", array())) {
            // line 107
            echo "        <h3>Uncached SPI calls</h3>
        <table>
            <tr>
                <th>Class</th>
                <th>Method</th>
                <th>Arguments</th>
            </tr>
            ";
            // line 114
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "calls", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["call"]) {
                // line 115
                echo "                <tr>
                    <td>";
                // line 116
                echo twig_escape_filter($this->env, $this->getAttribute($context["call"], "class", array()), "html", null, true);
                echo "</td>
                    <td>";
                // line 117
                echo twig_escape_filter($this->env, $this->getAttribute($context["call"], "method", array()), "html", null, true);
                echo "</td>
                    <td>";
                // line 118
                echo twig_escape_filter($this->env, $this->getAttribute($context["call"], "arguments", array()), "html", null, true);
                echo "</td>
                </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['call'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 121
            echo "        </table>
    ";
        }
    }

    public function getTemplateName()
    {
        return "EzPublishDebugBundle:Profiler:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  283 => 121,  274 => 118,  270 => 117,  266 => 116,  263 => 115,  259 => 114,  250 => 107,  248 => 106,  244 => 104,  238 => 101,  234 => 99,  232 => 98,  227 => 96,  221 => 92,  217 => 90,  208 => 87,  204 => 86,  200 => 85,  197 => 84,  193 => 83,  184 => 76,  182 => 75,  179 => 74,  175 => 72,  166 => 69,  158 => 68,  154 => 67,  150 => 66,  147 => 65,  143 => 64,  133 => 56,  131 => 55,  127 => 53,  124 => 52,  116 => 47,  110 => 43,  107 => 42,  103 => 39,  100 => 38,  97 => 37,  94 => 36,  88 => 33,  85 => 32,  83 => 31,  80 => 30,  74 => 27,  71 => 26,  69 => 25,  63 => 21,  61 => 20,  54 => 16,  48 => 13,  42 => 9,  40 => 8,  37 => 7,  33 => 4,  30 => 3,);
    }
}
