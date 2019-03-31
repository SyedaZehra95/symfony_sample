<?php

/* EightPointsGuzzleBundle::profiler.html.twig */
class __TwigTemplate_9caad6368248cf12cbdbd4d1317ab081190cbec507ba18230aa6a7901859e31d extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EightPointsGuzzleBundle::profiler.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EightPointsGuzzleBundle::profiler.html.twig"));

        // line 1
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 1, $this->source); })()), "logs", [])) {
            // line 2
            echo "    <p>
        <em>No calls</em>
    </p>
";
        } else {
            // line 6
            echo "    <div id=\"gb_profiler\">
        ";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 7, $this->source); })()), "logs", []));
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 8
                echo "            <h2>Group ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["group"], "requestName", []), "html", null, true);
                echo "</h2>

            ";
                // line 10
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["group"], "messages", []));
                $context['_iterated'] = false;
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 11
                    echo "                <div class=\"gb_request gb_request--";
                    echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["message"], "request", []), "method", [])), "html", null, true);
                    echo "\">
                    <h3>
                        <a href=\"javascript: void(0);\">
                            <span class=\"gb_request__method\">";
                    // line 14
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["message"], "request", []), "method", []), "html", null, true);
                    echo "</span>
                            <span class=\"gb_request__url\">";
                    // line 15
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["message"], "request", []), "url", []), "html", null, true);
                    echo "</span>

                            <span class=\"gb_request__response\">
                                ";
                    // line 18
                    if (twig_get_attribute($this->env, $this->source, $context["message"], "response", [])) {
                        // line 19
                        echo "                                    ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["message"], "response", []), "statusPhrase", []), "html", null, true);
                        echo " (";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["message"], "response", []), "statusCode", []), "html", null, true);
                        echo ")
                                ";
                    } else {
                        // line 21
                        echo "                                    N/A
                                ";
                    }
                    // line 23
                    echo "                            </span>

                            <span class=\"gb_request__request_time\">
                                ";
                    // line 26
                    if (twig_get_attribute($this->env, $this->source, $context["message"], "transferTime", [])) {
                        // line 27
                        echo "                                    ";
                        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["message"], "transferTime", []) * 1000), "html", null, true);
                        echo " ms
                                ";
                    } else {
                        // line 29
                        echo "                                    N/A
                                ";
                    }
                    // line 31
                    echo "                            </span>
                        </a>
                    </h3>

                    <div class=\"gb_content ";
                    // line 35
                    echo ((twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [])) ? ("gb_content--hide") : (""));
                    echo "\">
                        <h4>Basic</h4>

                        <table>
                            <tr>
                                <th>Log Level</th>
                                <td>";
                    // line 41
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "level", []), "html", null, true);
                    echo "</td>
                            </tr>

                            <tr>
                                <th>Message</th>
                                <td>";
                    // line 46
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "message", []), "html", null, true);
                    echo "</td>
                            </tr>
                        </table>

                        <div>
                            <h4>Request</h4>

                            <table>
                                <tr>
                                    <th>Protocol Version</th>
                                    <td>";
                    // line 56
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["message"], "request", []), "protocolVersion", []), "html", null, true);
                    echo "</td>
                                </tr>

                                <tr>
                                    <th>Headers</th>
                                    <td>";
                    // line 61
                    echo $this->extensions['EightPoints\Bundle\GuzzleBundle\Twig\Extension\DebugExtension']->dump($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["message"], "request", []), "headers", []));
                    echo "</td>
                                </tr>

                                <tr>
                                    <th>Body</th>
                                    <td>
                                        <textarea readonly class=\"format-json\">";
                    // line 67
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["message"], "request", []), "body", []), "html", null, true);
                    echo "</textarea>
                                    </td>
                                </tr>
                            </table>
                        </div>

                        <div>
                            <h4>Response</h4>

                            ";
                    // line 76
                    if (twig_get_attribute($this->env, $this->source, $context["message"], "response", [])) {
                        // line 77
                        echo "                                <table>
                                    <tr>
                                        <th>Protocol Version</th>
                                        <td>";
                        // line 80
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["message"], "response", []), "protocolVersion", []), "html", null, true);
                        echo "</td>
                                    </tr>

                                    <tr>
                                        <th>Headers</th>
                                        <td>";
                        // line 85
                        echo $this->extensions['EightPoints\Bundle\GuzzleBundle\Twig\Extension\DebugExtension']->dump($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["message"], "response", []), "headers", []));
                        echo "</td>
                                    </tr>

                                    <tr>
                                        <th>Body</th>
                                        <td>
                                            <textarea readonly class=\"format-json\">";
                        // line 91
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["message"], "response", []), "body", []), "html", null, true);
                        echo "</textarea>
                                        </td>
                                    </tr>
                                </table>
                            ";
                    } else {
                        // line 96
                        echo "                                No response available.
                            ";
                    }
                    // line 98
                    echo "                        </div>
                    </div>
                </div>
            ";
                    $context['_iterated'] = true;
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                if (!$context['_iterated']) {
                    // line 102
                    echo "                <p>No Calls</p>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 104
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 105
            echo "    </div>

    <script>
        // Do requests block collapsable
        var requests = document.querySelectorAll('.gb_request h3 a');
        requests.forEach(function(request) {
            request.onclick = function(el) {
                var parent = findParentByClass(el.target, 'gb_request');
                var content = parent.querySelector('.gb_content');

                if (content) {
                    content.classList.toggle('gb_content--hide');
                }
            }
        });

        function findParentByClass(el, cls) {
            while ((el = el.parentNode) && el.classList.contains(cls) === false) {}

            return el;
        }

        // Format json field
        var formatJsonTextareas = document.querySelectorAll('textarea.format-json');
        formatJsonTextareas.forEach(function(formatJsonTextarea) {
            var value = formatJsonTextarea.value;

            if (value) {
                try {
                    formatJsonTextarea.value = JSON.stringify(JSON.parse(value), null, 2);
                } catch (error) {
                    //different formats json ex: xml
                }
            }
        });
    </script>
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "EightPointsGuzzleBundle::profiler.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  246 => 105,  240 => 104,  233 => 102,  217 => 98,  213 => 96,  205 => 91,  196 => 85,  188 => 80,  183 => 77,  181 => 76,  169 => 67,  160 => 61,  152 => 56,  139 => 46,  131 => 41,  122 => 35,  116 => 31,  112 => 29,  106 => 27,  104 => 26,  99 => 23,  95 => 21,  87 => 19,  85 => 18,  79 => 15,  75 => 14,  68 => 11,  50 => 10,  44 => 8,  40 => 7,  37 => 6,  31 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if not collector.logs %}
    <p>
        <em>No calls</em>
    </p>
{% else %}
    <div id=\"gb_profiler\">
        {% for group in collector.logs %}
            <h2>Group {{ group.requestName }}</h2>

            {% for message in group.messages %}
                <div class=\"gb_request gb_request--{{ message.request.method | lower }}\">
                    <h3>
                        <a href=\"javascript: void(0);\">
                            <span class=\"gb_request__method\">{{ message.request.method }}</span>
                            <span class=\"gb_request__url\">{{ message.request.url }}</span>

                            <span class=\"gb_request__response\">
                                {% if message.response %}
                                    {{ message.response.statusPhrase }} ({{ message.response.statusCode }})
                                {% else %}
                                    N/A
                                {% endif %}
                            </span>

                            <span class=\"gb_request__request_time\">
                                {% if message.transferTime %}
                                    {{ message.transferTime * 1000 }} ms
                                {% else %}
                                    N/A
                                {% endif %}
                            </span>
                        </a>
                    </h3>

                    <div class=\"gb_content {{ loop.index0 ? 'gb_content--hide': '' }}\">
                        <h4>Basic</h4>

                        <table>
                            <tr>
                                <th>Log Level</th>
                                <td>{{ message.level }}</td>
                            </tr>

                            <tr>
                                <th>Message</th>
                                <td>{{ message.message }}</td>
                            </tr>
                        </table>

                        <div>
                            <h4>Request</h4>

                            <table>
                                <tr>
                                    <th>Protocol Version</th>
                                    <td>{{ message.request.protocolVersion }}</td>
                                </tr>

                                <tr>
                                    <th>Headers</th>
                                    <td>{{ eight_points_guzzle_dump(message.request.headers) }}</td>
                                </tr>

                                <tr>
                                    <th>Body</th>
                                    <td>
                                        <textarea readonly class=\"format-json\">{{ message.request.body }}</textarea>
                                    </td>
                                </tr>
                            </table>
                        </div>

                        <div>
                            <h4>Response</h4>

                            {% if message.response %}
                                <table>
                                    <tr>
                                        <th>Protocol Version</th>
                                        <td>{{ message.response.protocolVersion }}</td>
                                    </tr>

                                    <tr>
                                        <th>Headers</th>
                                        <td>{{ eight_points_guzzle_dump(message.response.headers) }}</td>
                                    </tr>

                                    <tr>
                                        <th>Body</th>
                                        <td>
                                            <textarea readonly class=\"format-json\">{{ message.response.body }}</textarea>
                                        </td>
                                    </tr>
                                </table>
                            {% else %}
                                No response available.
                            {% endif %}
                        </div>
                    </div>
                </div>
            {% else %}
                <p>No Calls</p>
            {% endfor %}
        {% endfor %}
    </div>

    <script>
        // Do requests block collapsable
        var requests = document.querySelectorAll('.gb_request h3 a');
        requests.forEach(function(request) {
            request.onclick = function(el) {
                var parent = findParentByClass(el.target, 'gb_request');
                var content = parent.querySelector('.gb_content');

                if (content) {
                    content.classList.toggle('gb_content--hide');
                }
            }
        });

        function findParentByClass(el, cls) {
            while ((el = el.parentNode) && el.classList.contains(cls) === false) {}

            return el;
        }

        // Format json field
        var formatJsonTextareas = document.querySelectorAll('textarea.format-json');
        formatJsonTextareas.forEach(function(formatJsonTextarea) {
            var value = formatJsonTextarea.value;

            if (value) {
                try {
                    formatJsonTextarea.value = JSON.stringify(JSON.parse(value), null, 2);
                } catch (error) {
                    //different formats json ex: xml
                }
            }
        });
    </script>
{% endif %}
", "EightPointsGuzzleBundle::profiler.html.twig", "/Users/say_era/Desktop/smai/vendor/eightpoints/guzzle-bundle/src/Resources/views/profiler.html.twig");
    }
}
