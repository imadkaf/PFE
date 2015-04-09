<?php

/* TedivmStashBundle:Profiler:layout.html.twig */
class __TwigTemplate_23a868e534f96c89c50dfeb9df7faee3415befb30b0217aea6f4ba516f90ae19 extends Twig_Template
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
        ob_start();
        // line 5
        echo "        <img width=\"22\" height=\"28\" alt=\"Memory Usage\" style=\"vertical-align: middle;\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABYAAAAcCAYAAABlL09dAAAABGdBTUEAALGPC/xhBQAAAAZiS0dEAP8A/wD/oL2nkwAAAAlwSFlzAAALEwAACxMBAJqcGAAAAAd0SU1FB9wHGAALFQCM6LQAAAFwSURBVEjH7ZW9S4JRFIefRAoaAmlpbguCiKaGIqjh1FI0SV+vH6G2BmW4RlJG0Rj08RcE0aI3bGqPioagD6IpSEISGiSiBt/ATK+91ynwLBfOOffhx+/cD6jHv40GpVQ7EDXcnxCR+7JgAKVUGhgyAJ8CAyLyWVpw2esC8GEA7gesiopt1btA0AD+AnSISKacYoAYkDMAtwKJSlYgIs/AmuEQLaXUYHHCXdKwBdxqAFlN7UkH7jQ8Hd9z2gZuROTNXZQcBg6AZgPmOxAC2gAvEHXZUC9wZAjNASPAgy2ssdiKa6DX0IEM0GJfluYfHi8txi5qeRdWE/F5wFPpHNf05pQm3Lru4GyAyakJPJ6CmO6unkqtLkdgf8DHxvomyWSKfD7vSLHWipXlOGPjo6RPjglHQo680YJTKYU17ScSnsPyzehamxxZcX55VrjH2Sx7O/t/teKxKlgzrHLgV8AvIodVwQ7iDugTkav6b/8rvgBcMlqf0kD/YAAAAABJRU5ErkJggg==\"/>
        <span class=\"sf-toolbar-status sf-toolbar-status-green\">";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "calls", array()), "html", null, true);
        echo " call";
        if (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "calls", array()) != 1)) {
            echo "s";
        }
        echo " / ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "hits", array()), "html", null, true);
        echo " hit";
        if (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "hits", array()) != 1)) {
            echo "s";
        }
        echo "</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "    ";
        ob_start();
        // line 9
        echo "        <div class=\"sf-toolbar-info-piece\">
                <b>Total Response</b> <span class=\"sf-toolbar-status sf-toolbar-status-green\">";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "calls", array()), "html", null, true);
        echo " / ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "hits", array()), "html", null, true);
        echo "</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
                <b>Default Queue</b> <span>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "default", array()), "html", null, true);
        echo "</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
                <b>Av. Drivers</b> <span>";
        // line 16
        echo twig_escape_filter($this->env, twig_join_filter($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "drivers", array()), ", "), "html", null, true);
        echo "</span>
        </div>
        ";
        // line 18
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "caches", array()));
        foreach ($context['_seq'] as $context["name"] => $context["details"]) {
            // line 19
            echo "            <hr style=\"border: 1px solid #ccc;\">
            <div class=\"sf-toolbar-info-piece\">
                <b><i>";
            // line 21
            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
            echo "</i></b> <span class=\"sf-toolbar-status sf-toolbar-status-green\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["details"], "calls", array()), "html", null, true);
            echo " / ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["details"], "hits", array()), "html", null, true);
            echo "</span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Drivers</b> <span>";
            // line 24
            echo twig_escape_filter($this->env, twig_join_filter($this->getAttribute($this->getAttribute($context["details"], "options", array()), "drivers", array()), ", "), "html", null, true);
            echo "</span>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['details'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 28
        echo "    ";
        $this->env->loadTemplate("WebProfilerBundle:Profiler:toolbar_item.html.twig")->display(array_merge($context, array("link" => (isset($context["profiler_url"]) ? $context["profiler_url"] : null))));
    }

    // line 31
    public function block_menu($context, array $blocks = array())
    {
        // line 32
        echo "<span class=\"label\">
    <span class=\"icon\"><img src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/tedivmstash/images/stash.png"), "html", null, true);
        echo "\" alt=\"\" /></span>
    <strong>Stash</strong>
    <span class=\"count\">
        <span>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "calls", array()), "html", null, true);
        echo " / ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "hits", array()), "html", null, true);
        echo "</span>
    </span>
</span>
";
    }

    // line 41
    public function block_panel($context, array $blocks = array())
    {
        // line 42
        echo "    <h2>Cache Information</h2>
    <table>
        <tr>
            <th>Default Cache</th>
            <td>";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "default", array()), "html", null, true);
        echo "</td>
        <tr>
            <th>Available Drivers</th>
            <td>";
        // line 49
        echo twig_escape_filter($this->env, twig_join_filter($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "drivers", array()), ", "), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Total Requests</th>
            <td>";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "calls", array()), "html", null, true);
        echo "</td>
        </tr>
        <tr>
            <th>Total Hits</th>
            <td>";
        // line 57
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "hits", array()), "html", null, true);
        echo "</td>
        </tr>
    </table>

    ";
        // line 61
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "caches", array()));
        foreach ($context['_seq'] as $context["name"] => $context["details"]) {
            // line 62
            echo "
        <h2>Cache Service: <i>";
            // line 63
            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
            echo "</i></h2>
        <table>
            <tr>
                <th>Drivers</th>
                <td>";
            // line 67
            echo twig_escape_filter($this->env, twig_join_filter($this->getAttribute($this->getAttribute($context["details"], "options", array()), "drivers", array()), ", "), "html", null, true);
            echo "</td>
            </tr>
            <tr>
                <th>Calls</th>
                <td>";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute($context["details"], "calls", array()), "html", null, true);
            echo "</td>
            </tr>
            <tr>
                <th>Hits</th>
                <td>";
            // line 75
            echo twig_escape_filter($this->env, $this->getAttribute($context["details"], "hits", array()), "html", null, true);
            echo "</td>
            </tr>
            <tr>
                <th>Doctrine Adapter</th>
                <td>";
            // line 79
            echo (($this->getAttribute($this->getAttribute($context["details"], "options", array()), "registerDoctrineAdapter", array())) ? ("true") : ("false"));
            echo "</td>
            </tr>
            <tr>
                <th>Cache In-Memory</th>
                <td>";
            // line 83
            echo (($this->getAttribute($this->getAttribute($context["details"], "options", array()), "inMemory", array())) ? ("true") : ("false"));
            echo "</td>
            </tr>
        </table>

        <h3>Driver Options</h3>
        <table>
            ";
            // line 89
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["details"], "options", array()));
            foreach ($context['_seq'] as $context["name"] => $context["options"]) {
                // line 90
                echo "                ";
                if ((($context["name"] != "drivers") && twig_in_filter($context["name"], $this->getAttribute($this->getAttribute($context["details"], "options", array()), "drivers", array())))) {
                    // line 91
                    echo "                    <tr>
                        <th colspan=\"2\"><h3 style=\"font-size: 16px; margin-bottom: 0;\">";
                    // line 92
                    echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                    echo " settings</h3></th>
                    </tr>
                    ";
                    // line 94
                    if (twig_in_filter($context["name"], array(0 => "Memcache", 1 => "Redis"))) {
                        // line 95
                        echo "                        ";
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["options"], "servers", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["ovalue"]) {
                            // line 96
                            echo "                            <tr>
                                <th>Server</th>
                                <td>";
                            // line 98
                            echo twig_escape_filter($this->env, $this->getAttribute($context["ovalue"], "server", array()), "html", null, true);
                            echo ":";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["ovalue"], "port", array()), "html", null, true);
                            echo " ";
                            if ($this->getAttribute($context["ovalue"], "weight", array(), "any", true, true)) {
                                echo "(weight ";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["ovalue"], "weight", array()), "html", null, true);
                                echo ")";
                            }
                            echo "</td>
                            </tr>
                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ovalue'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 101
                        echo "                    ";
                    } else {
                        // line 102
                        echo "                        ";
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable($context["options"]);
                        foreach ($context['_seq'] as $context["oname"] => $context["ovalue"]) {
                            // line 103
                            echo "                            <tr>
                                <th>";
                            // line 104
                            echo twig_escape_filter($this->env, $context["oname"], "html", null, true);
                            echo "</th>
                                ";
                            // line 105
                            if ((($context["oname"] == "filePermissions") || ($context["oname"] == "dirPermissions"))) {
                                // line 106
                                echo "                                    <td>";
                                echo twig_escape_filter($this->env, sprintf("%o", $context["ovalue"]), "html", null, true);
                                echo "
                                ";
                            } else {
                                // line 108
                                echo "                                    <td>";
                                echo twig_escape_filter($this->env, $context["ovalue"], "html", null, true);
                                echo "</td>
                                ";
                            }
                            // line 110
                            echo "                            </tr>
                        ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['oname'], $context['ovalue'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 112
                        echo "                    ";
                    }
                    // line 113
                    echo "                ";
                }
                // line 114
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['options'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 115
            echo "        </table>

        <h3>Query Record</h3>
        <table>
            <tr>
                <th>Request Key</th>
                <th>Hit?</th>
                <th>Returned Value</th>
            </tr>
            ";
            // line 124
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["details"], "queries", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["query"]) {
                // line 125
                echo "                <tr>
                    <td>";
                // line 126
                echo twig_escape_filter($this->env, $this->getAttribute($context["query"], "key", array()), "html", null, true);
                echo "</td>
                    <td>";
                // line 127
                echo twig_escape_filter($this->env, $this->getAttribute($context["query"], "hit", array()), "html", null, true);
                echo "</td>
                    <td>";
                // line 128
                echo twig_escape_filter($this->env, $this->getAttribute($context["query"], "value", array()), "html", null, true);
                echo "</td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['query'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 131
            echo "        </table>


    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['details'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "TedivmStashBundle:Profiler:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  349 => 131,  340 => 128,  336 => 127,  332 => 126,  329 => 125,  325 => 124,  314 => 115,  308 => 114,  305 => 113,  302 => 112,  295 => 110,  289 => 108,  283 => 106,  281 => 105,  277 => 104,  274 => 103,  269 => 102,  266 => 101,  249 => 98,  245 => 96,  240 => 95,  238 => 94,  233 => 92,  230 => 91,  227 => 90,  223 => 89,  214 => 83,  207 => 79,  200 => 75,  193 => 71,  186 => 67,  179 => 63,  176 => 62,  172 => 61,  165 => 57,  158 => 53,  151 => 49,  145 => 46,  139 => 42,  136 => 41,  126 => 36,  120 => 33,  117 => 32,  114 => 31,  109 => 28,  106 => 27,  97 => 24,  87 => 21,  83 => 19,  79 => 18,  74 => 16,  68 => 13,  60 => 10,  57 => 9,  54 => 8,  39 => 6,  36 => 5,  33 => 4,  30 => 3,);
    }
}
