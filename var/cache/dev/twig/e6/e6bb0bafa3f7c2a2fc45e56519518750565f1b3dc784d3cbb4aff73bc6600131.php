<?php

/* FSSolrBundle:Profiler:solr.html.twig */
class __TwigTemplate_4a8999ef38649de8c55be4a04f306a19facf12f7b9988f9cb71059b514ccc406 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'toolbar' => [$this, 'block_toolbar'],
            'menu' => [$this, 'block_menu'],
            'panel' => [$this, 'block_panel'],
            'queries' => [$this, 'block_queries'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 1, $this->source); })()), "request", []), "isXmlHttpRequest", [])) ? ("@WebProfiler/Profiler/ajax_layout.html.twig") : ("@WebProfiler/Profiler/layout.html.twig")), "FSSolrBundle:Profiler:solr.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FSSolrBundle:Profiler:solr.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FSSolrBundle:Profiler:solr.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        $context["profiler_markup_version"] = (((isset($context["profiler_markup_version"]) || array_key_exists("profiler_markup_version", $context))) ? (_twig_default_filter((isset($context["profiler_markup_version"]) || array_key_exists("profiler_markup_version", $context) ? $context["profiler_markup_version"] : (function () { throw new Twig_Error_Runtime('Variable "profiler_markup_version" does not exist.', 4, $this->source); })()), 1)) : (1));
        // line 5
        echo "
    ";
        // line 6
        if ((twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 6, $this->source); })()), "querycount", []) > 0)) {
            // line 7
            echo "        ";
            if (((isset($context["profiler_markup_version"]) || array_key_exists("profiler_markup_version", $context) ? $context["profiler_markup_version"] : (function () { throw new Twig_Error_Runtime('Variable "profiler_markup_version" does not exist.', 7, $this->source); })()) == 1)) {
                // line 8
                echo "            ";
                ob_start();
                // line 9
                echo "                <img width=\"20\" height=\"28\" alt=\"Solr\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAcCAYAAABh2p9gAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAQRJREFUeNpi/P//PwM1ARMDlcGogZQDlpMnT7pxc3NbA9nhQKxOpL5rQLwJiPeBsI6Ozl+YBOOOHTv+AOllQNwtLS39F2owKYZ/gRq8G4i3ggxEToggWzvc3d2Pk+1lNL4fFAs6ODi8JzdS7mMRVyDVoAMHDsANdAPiOCC+jCQvQKqBQB/BDbwBxK5AHA3E/kB8nKJkA8TMQBwLxaBIKQbi70AvTADSBiSadwFXpCikpKQU8PDwkGTaly9fHFigkaKIJid4584dkiMFFI6jkTJII0WVmpHCAixZQEXWYhDeuXMnyLsVlEQKI45qFBQZ8eRECi4DBaAlDqle/8A48ip6gAADANdQY88Uc0oGAAAAAElFTkSuQmCC\" />
                <span class=\"sf-toolbar-value sf-toolbar-status ";
                // line 10
                if ((twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 10, $this->source); })()), "querycount", []) > 50)) {
                    echo "sf-toolbar-status-yellow";
                }
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 10, $this->source); })()), "querycount", []), "html", null, true);
                echo "</span>
                ";
                // line 11
                if ((twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 11, $this->source); })()), "querycount", []) > 0)) {
                    // line 12
                    echo "                    <span class=\"sf-toolbar-info-piece-additional-detail\">in ";
                    echo twig_escape_filter($this->env, sprintf("%0.2f", (twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 12, $this->source); })()), "time", []) * 1000)), "html", null, true);
                    echo " ms</span>
                ";
                }
                // line 14
                echo "            ";
                $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 15
                echo "
            ";
                // line 16
                ob_start();
                // line 17
                echo "                <div class=\"sf-toolbar-info-piece\">
                    <b>Solr queries</b>
                    <span class=\"sf-toolbar-status\">";
                // line 19
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 19, $this->source); })()), "querycount", []), "html", null, true);
                echo "</span>
                </div>
                <div class=\"sf-toolbar-info-piece\">
                    <b>Query time</b>
                    <span>";
                // line 23
                echo twig_escape_filter($this->env, sprintf("%0.2f", (twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 23, $this->source); })()), "time", []) * 1000)), "html", null, true);
                echo " ms</span>
                </div>
            ";
                $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 26
                echo "        ";
            } else {
                // line 27
                echo "            ";
                $context["status"] = (((twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->source); })()), "querycount", []) > 50)) ? ("yellow") : (""));
                // line 28
                echo "
            ";
                // line 29
                ob_start();
                // line 30
                echo "                ";
                echo twig_include($this->env, $context, "@FSSolr/Profiler/icon.svg");
                echo "
                <span class=\"sf-toolbar-value\">";
                // line 31
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 31, $this->source); })()), "querycount", []), "html", null, true);
                echo "</span>
                <span class=\"sf-toolbar-info-piece-additional-detail\">
                    <span class=\"sf-toolbar-label\">in</span>
                    <span class=\"sf-toolbar-value\">";
                // line 34
                echo twig_escape_filter($this->env, sprintf("%0.2f", (twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 34, $this->source); })()), "time", []) * 1000)), "html", null, true);
                echo "</span>
                    <span class=\"sf-toolbar-label\">ms</span>
                </span>
            ";
                $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 38
                echo "
            ";
                // line 39
                ob_start();
                // line 40
                echo "                <div class=\"sf-toolbar-info-piece\">
                    <b>Solr queries</b>
                    <span class=\"sf-toolbar-status\">";
                // line 42
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 42, $this->source); })()), "querycount", []), "html", null, true);
                echo "</span>
                </div>
                <div class=\"sf-toolbar-info-piece\">
                    <b>Query time</b>
                    <span>";
                // line 46
                echo twig_escape_filter($this->env, sprintf("%0.2f", (twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 46, $this->source); })()), "time", []) * 1000)), "html", null, true);
                echo " ms</span>
                </div>
            ";
                $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
                // line 49
                echo "        ";
            }
            // line 50
            echo "
        ";
            // line 51
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", ["link" => (isset($context["profiler_url"]) || array_key_exists("profiler_url", $context) ? $context["profiler_url"] : (function () { throw new Twig_Error_Runtime('Variable "profiler_url" does not exist.', 51, $this->source); })()), "status" => (((isset($context["status"]) || array_key_exists("status", $context))) ? (_twig_default_filter((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new Twig_Error_Runtime('Variable "status" does not exist.', 51, $this->source); })()), "")) : (""))]);
            echo "
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 55
    public function block_menu($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 56
        echo "    ";
        $context["profiler_markup_version"] = (((isset($context["profiler_markup_version"]) || array_key_exists("profiler_markup_version", $context))) ? (_twig_default_filter((isset($context["profiler_markup_version"]) || array_key_exists("profiler_markup_version", $context) ? $context["profiler_markup_version"] : (function () { throw new Twig_Error_Runtime('Variable "profiler_markup_version" does not exist.', 56, $this->source); })()), 1)) : (1));
        // line 57
        echo "
    ";
        // line 58
        if (((isset($context["profiler_markup_version"]) || array_key_exists("profiler_markup_version", $context) ? $context["profiler_markup_version"] : (function () { throw new Twig_Error_Runtime('Variable "profiler_markup_version" does not exist.', 58, $this->source); })()) == 1)) {
            // line 59
            echo "
        <span class=\"label\">
            <span class=\"icon\"><img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAcCAYAAAB/E6/TAAABLUlEQVR42u3TP0vDQBiA8UK/gDiLzi0IhU4OEunk5OQUAhGSOBUCzqWfIKSzX8DRySF0URCcMjWLIJjFD9Cpk/D6HITecEPUuzhIAz8CIdyTP/f2iqI4qaqqDx8l5Ic2uIeP/bquezCokOAFF+oCN3t4gPzSEjc4NEPaCldQbzjELTYW0RJzHDchwwem+ons6ZBpLSJ7nueJC22h0V+FzmwWV0ee59vQNV67CGVZJmEYbkNjfpY6X6I0Qo4/3RMmTdDDspuQVsJvgkP3IdMbIkIjLPBoadG2646iKJI0Ta2wxm6OdnP0/Tk6DYJgHcfxpw21RtscDTDDnaVZ26474GkkSRIrrPEv5sgMTfHe+cA2O6wPH6vOBpYQNALneHb96XTEDI6dzpEZ0VzO0Rf3pP5LMLI4tAAAAABJRU5ErkJggg==\" alt=\"Solr\" /></span>
            <strong>Solr</strong>
            <span class=\"count\">
                <span>";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 64, $this->source); })()), "querycount", []), "html", null, true);
            echo "</span>
                <span>";
            // line 65
            echo twig_escape_filter($this->env, sprintf("%0.0f", (twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 65, $this->source); })()), "time", []) * 1000)), "html", null, true);
            echo " ms</span>
            </span>
        </span>

    ";
        } else {
            // line 70
            echo "
        <span class=\"label ";
            // line 71
            echo (((twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 71, $this->source); })()), "querycount", []) == 0)) ? ("disabled") : (""));
            echo "\">
            <span class=\"icon\">";
            // line 72
            echo twig_include($this->env, $context, "@FSSolr/Profiler/icon.svg");
            echo "</span>
            <strong>Solr</strong>
        </span>

    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 79
    public function block_panel($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 80
        echo "    ";
        $context["profiler_markup_version"] = (((isset($context["profiler_markup_version"]) || array_key_exists("profiler_markup_version", $context))) ? (_twig_default_filter((isset($context["profiler_markup_version"]) || array_key_exists("profiler_markup_version", $context) ? $context["profiler_markup_version"] : (function () { throw new Twig_Error_Runtime('Variable "profiler_markup_version" does not exist.', 80, $this->source); })()), 1)) : (1));
        // line 81
        echo "
    ";
        // line 82
        $this->displayBlock("queries", $context, $blocks);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 85
    public function block_queries($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "queries"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "queries"));

        // line 86
        echo "    ";
        if (((isset($context["profiler_markup_version"]) || array_key_exists("profiler_markup_version", $context) ? $context["profiler_markup_version"] : (function () { throw new Twig_Error_Runtime('Variable "profiler_markup_version" does not exist.', 86, $this->source); })()) == 1)) {
            // line 87
            echo "
        <style>
            .hidden { display: none; }
            .queries-table td, .queries-table th { vertical-align: top; }
            .queries-table td > div { margin-bottom: 6px; }
            .highlight pre { margin: 0; white-space: pre-wrap; }
            .highlight .keyword   { color: #8959A8; font-weight: bold; }
            .highlight .word      { color: #222222; }
            .highlight .variable  { color: #916319; }
            .highlight .symbol    { color: #222222; }
            .highlight .comment   { color: #999999; }
            .highlight .backtick  { color: #718C00; }
            .highlight .string    { color: #718C00; }
            .highlight .number    { color: #F5871F; font-weight: bold; }
            .highlight .error     { color: #C82829; }
        </style>

        <h2>Solr Queries</h2>

    ";
        } else {
            // line 107
            echo "
        <h2>Query Metrics</h2>
        <div class=\"metrics\">
            <div class=\"metric\">
                <span class=\"value\">";
            // line 111
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 111, $this->source); })()), "querycount", []), "html", null, true);
            echo "</span>
                <span class=\"label\">Solr queries</span>
            </div>

            <div class=\"metric\">
                <span class=\"value\">";
            // line 116
            echo twig_escape_filter($this->env, sprintf("%0.2f", (twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 116, $this->source); })()), "time", []) * 1000)), "html", null, true);
            echo " ms</span>
                <span class=\"label\">Query time</span>
            </div>
        </div>

        <h2>Queries</h2>

    ";
        }
        // line 124
        echo "
    ";
        // line 125
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 125, $this->source); })()), "queries", []))) {
            // line 126
            echo "        <div class=\"empty\">
            <p>No solr queries were performed.</p>
        </div>
    ";
        } else {
            // line 130
            echo "        <table class=\"alt queries-table\">
            <thead>
                <tr>
                    <th class=\"nowrap\" onclick=\"javascript:sortTable(this, 0, 'queries-1')\" data-sort-direction=\"-1\" style=\"cursor: pointer;\">#<span class=\"text-muted\">&#9650;</span></th>
                    <th class=\"nowrap\" onclick=\"javascript:sortTable(this, 1, 'queries-1')\" style=\"cursor: pointer;\">Time<span></span></th>
                    <th class=\"nowrap\" style=\"cursor: pointer;\">End Point</th>
                    <th>Method</th>
                    <th>Parameters</th>
                    <th>Raw Data</th>
                </tr>
            </thead>
            <tbody id=\"queries-1\">
                ";
            // line 142
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 142, $this->source); })()), "queries", []));
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
            foreach ($context['_seq'] as $context["i"] => $context["query"]) {
                // line 143
                echo "                    <tr id=\"queryNo-";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "-1\">
                        <td>";
                // line 144
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", []), "html", null, true);
                echo "</td>
                        <td class=\"nowrap\">";
                // line 145
                echo twig_escape_filter($this->env, sprintf("%0.2f", (twig_get_attribute($this->env, $this->source, $context["query"], "executionMS", []) * 1000)), "html", null, true);
                echo "&nbsp;ms</td>
                        <td>
                            ";
                // line 147
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["query"], "endpoint", []), "html", null, true);
                echo "
                        </td>
                        <td>
                            ";
                // line 150
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["query"], "method", []), "html", null, true);
                echo "
                        </td>
                        <td>
                            ";
                // line 153
                if ( !twig_get_attribute($this->env, $this->source, $context["query"], "stub", [], "any", true, true)) {
                    // line 154
                    echo "                                ";
                    echo twig_replace_filter(twig_get_attribute($this->env, $this->source, $context["query"], "params", []), ["&" => "<br />"]);
                    echo "
                            ";
                } else {
                    // line 156
                    echo "                                ";
                    echo $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, twig_get_attribute($this->env, $this->source, $context["query"], "stub", []), 1);
                    echo "
                            ";
                }
                // line 158
                echo "                        </td>
                        <td>
                            <pre>";
                // line 160
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["query"], "raw_data", []), "html", null, true);
                echo "</pre>
                        </td>
                    </tr>
                ";
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
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['query'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 164
            echo "            </tbody>
        </table>
    ";
        }
        // line 167
        echo "
    <script type=\"text/javascript\">//<![CDATA[
        function sortTable(header, column, targetId) {
            \"use strict\";

            var direction = parseInt(header.getAttribute('data-sort-direction')) || 1,
                    items = [],
                    target = document.getElementById(targetId),
                    rows = target.children,
                    headers = header.parentElement.children,
                    i;

            for (i = 0; i < rows.length; ++i) {
                items.push(rows[i]);
            }

            for (i = 0; i < headers.length; ++i) {
                headers[i].removeAttribute('data-sort-direction');
                if (headers[i].children.length > 0) {
                    headers[i].children[0].innerHTML = '';
                }
            }

            header.setAttribute('data-sort-direction', (-1*direction).toString());
            header.children[0].innerHTML = direction > 0 ? '<span class=\"text-muted\">&#9650;</span>' : '<span class=\"text-muted\">&#9660;</span>';

            items.sort(function(a, b) {
                return direction * (parseFloat(a.children[column].innerHTML) - parseFloat(b.children[column].innerHTML));
            });

            for (i = 0; i < items.length; ++i) {
                Sfjs.removeClass(items[i], i % 2 ? 'even' : 'odd');
                Sfjs.addClass(items[i], i % 2 ? 'odd' : 'even');
                target.appendChild(items[i]);
            }
        }

        ";
        // line 204
        if (((isset($context["profiler_markup_version"]) || array_key_exists("profiler_markup_version", $context) ? $context["profiler_markup_version"] : (function () { throw new Twig_Error_Runtime('Variable "profiler_markup_version" does not exist.', 204, $this->source); })()) == 1)) {
            // line 205
            echo "        function toggleRunnableQuery(target) {
            var targetSelector = target.getAttribute('data-toggle-selector');
            var targetElement = document.querySelector(targetSelector);

            if (targetElement.style.display != 'block') {
                targetElement.style.display = 'block';
                target.innerHTML = 'Hide runnable query';
            } else {
                targetElement.style.display = 'none';
                target.innerHTML = 'View runnable query';
            }

            return false;
        }
        ";
        }
        // line 220
        echo "
        //]]></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "FSSolrBundle:Profiler:solr.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  495 => 220,  478 => 205,  476 => 204,  437 => 167,  432 => 164,  414 => 160,  410 => 158,  404 => 156,  398 => 154,  396 => 153,  390 => 150,  384 => 147,  379 => 145,  375 => 144,  370 => 143,  353 => 142,  339 => 130,  333 => 126,  331 => 125,  328 => 124,  317 => 116,  309 => 111,  303 => 107,  281 => 87,  278 => 86,  269 => 85,  257 => 82,  254 => 81,  251 => 80,  242 => 79,  226 => 72,  222 => 71,  219 => 70,  211 => 65,  207 => 64,  200 => 59,  198 => 58,  195 => 57,  192 => 56,  183 => 55,  170 => 51,  167 => 50,  164 => 49,  158 => 46,  151 => 42,  147 => 40,  145 => 39,  142 => 38,  135 => 34,  129 => 31,  124 => 30,  122 => 29,  119 => 28,  116 => 27,  113 => 26,  107 => 23,  100 => 19,  96 => 17,  94 => 16,  91 => 15,  88 => 14,  82 => 12,  80 => 11,  72 => 10,  69 => 9,  66 => 8,  63 => 7,  61 => 6,  58 => 5,  55 => 4,  46 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends app.request.isXmlHttpRequest ? '@WebProfiler/Profiler/ajax_layout.html.twig' : '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set profiler_markup_version = profiler_markup_version|default(1) %}

    {% if collector.querycount > 0 %}
        {% if profiler_markup_version == 1 %}
            {% set icon %}
                <img width=\"20\" height=\"28\" alt=\"Solr\" src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABQAAAAcCAYAAABh2p9gAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAQRJREFUeNpi/P//PwM1ARMDlcGogZQDlpMnT7pxc3NbA9nhQKxOpL5rQLwJiPeBsI6Ozl+YBOOOHTv+AOllQNwtLS39F2owKYZ/gRq8G4i3ggxEToggWzvc3d2Pk+1lNL4fFAs6ODi8JzdS7mMRVyDVoAMHDsANdAPiOCC+jCQvQKqBQB/BDbwBxK5AHA3E/kB8nKJkA8TMQBwLxaBIKQbi70AvTADSBiSadwFXpCikpKQU8PDwkGTaly9fHFigkaKIJid4584dkiMFFI6jkTJII0WVmpHCAixZQEXWYhDeuXMnyLsVlEQKI45qFBQZ8eRECi4DBaAlDqle/8A48ip6gAADANdQY88Uc0oGAAAAAElFTkSuQmCC\" />
                <span class=\"sf-toolbar-value sf-toolbar-status {% if collector.querycount > 50 %}sf-toolbar-status-yellow{% endif %}\">{{ collector.querycount }}</span>
                {% if collector.querycount > 0 %}
                    <span class=\"sf-toolbar-info-piece-additional-detail\">in {{ '%0.2f'|format(collector.time * 1000) }} ms</span>
                {% endif %}
            {% endset %}

            {% set text %}
                <div class=\"sf-toolbar-info-piece\">
                    <b>Solr queries</b>
                    <span class=\"sf-toolbar-status\">{{ collector.querycount }}</span>
                </div>
                <div class=\"sf-toolbar-info-piece\">
                    <b>Query time</b>
                    <span>{{ '%0.2f'|format(collector.time * 1000) }} ms</span>
                </div>
            {% endset %}
        {% else %}
            {% set status = collector.querycount > 50 ? 'yellow' %}

            {% set icon %}
                {{ include('@FSSolr/Profiler/icon.svg') }}
                <span class=\"sf-toolbar-value\">{{ collector.querycount }}</span>
                <span class=\"sf-toolbar-info-piece-additional-detail\">
                    <span class=\"sf-toolbar-label\">in</span>
                    <span class=\"sf-toolbar-value\">{{ '%0.2f'|format(collector.time * 1000) }}</span>
                    <span class=\"sf-toolbar-label\">ms</span>
                </span>
            {% endset %}

            {% set text %}
                <div class=\"sf-toolbar-info-piece\">
                    <b>Solr queries</b>
                    <span class=\"sf-toolbar-status\">{{ collector.querycount }}</span>
                </div>
                <div class=\"sf-toolbar-info-piece\">
                    <b>Query time</b>
                    <span>{{ '%0.2f'|format(collector.time * 1000) }} ms</span>
                </div>
            {% endset %}
        {% endif %}

        {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: profiler_url, status: status|default('') }) }}
    {% endif %}
{% endblock %}

{% block menu %}
    {% set profiler_markup_version = profiler_markup_version|default(1) %}

    {% if profiler_markup_version == 1 %}

        <span class=\"label\">
            <span class=\"icon\"><img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABoAAAAcCAYAAAB/E6/TAAABLUlEQVR42u3TP0vDQBiA8UK/gDiLzi0IhU4OEunk5OQUAhGSOBUCzqWfIKSzX8DRySF0URCcMjWLIJjFD9Cpk/D6HITecEPUuzhIAz8CIdyTP/f2iqI4qaqqDx8l5Ic2uIeP/bquezCokOAFF+oCN3t4gPzSEjc4NEPaCldQbzjELTYW0RJzHDchwwem+ons6ZBpLSJ7nueJC22h0V+FzmwWV0ee59vQNV67CGVZJmEYbkNjfpY6X6I0Qo4/3RMmTdDDspuQVsJvgkP3IdMbIkIjLPBoadG2646iKJI0Ta2wxm6OdnP0/Tk6DYJgHcfxpw21RtscDTDDnaVZ26474GkkSRIrrPEv5sgMTfHe+cA2O6wPH6vOBpYQNALneHb96XTEDI6dzpEZ0VzO0Rf3pP5LMLI4tAAAAABJRU5ErkJggg==\" alt=\"Solr\" /></span>
            <strong>Solr</strong>
            <span class=\"count\">
                <span>{{ collector.querycount }}</span>
                <span>{{ '%0.0f'|format(collector.time * 1000) }} ms</span>
            </span>
        </span>

    {% else %}

        <span class=\"label {{ collector.querycount == 0 ? 'disabled' }}\">
            <span class=\"icon\">{{ include('@FSSolr/Profiler/icon.svg') }}</span>
            <strong>Solr</strong>
        </span>

    {% endif %}
{% endblock %}

{% block panel %}
    {% set profiler_markup_version = profiler_markup_version|default(1) %}

    {{ block('queries') }}
{% endblock %}

{% block queries %}
    {% if profiler_markup_version == 1 %}

        <style>
            .hidden { display: none; }
            .queries-table td, .queries-table th { vertical-align: top; }
            .queries-table td > div { margin-bottom: 6px; }
            .highlight pre { margin: 0; white-space: pre-wrap; }
            .highlight .keyword   { color: #8959A8; font-weight: bold; }
            .highlight .word      { color: #222222; }
            .highlight .variable  { color: #916319; }
            .highlight .symbol    { color: #222222; }
            .highlight .comment   { color: #999999; }
            .highlight .backtick  { color: #718C00; }
            .highlight .string    { color: #718C00; }
            .highlight .number    { color: #F5871F; font-weight: bold; }
            .highlight .error     { color: #C82829; }
        </style>

        <h2>Solr Queries</h2>

    {% else %}

        <h2>Query Metrics</h2>
        <div class=\"metrics\">
            <div class=\"metric\">
                <span class=\"value\">{{ collector.querycount }}</span>
                <span class=\"label\">Solr queries</span>
            </div>

            <div class=\"metric\">
                <span class=\"value\">{{ '%0.2f'|format(collector.time * 1000) }} ms</span>
                <span class=\"label\">Query time</span>
            </div>
        </div>

        <h2>Queries</h2>

    {% endif %}

    {% if collector.queries is empty %}
        <div class=\"empty\">
            <p>No solr queries were performed.</p>
        </div>
    {% else %}
        <table class=\"alt queries-table\">
            <thead>
                <tr>
                    <th class=\"nowrap\" onclick=\"javascript:sortTable(this, 0, 'queries-1')\" data-sort-direction=\"-1\" style=\"cursor: pointer;\">#<span class=\"text-muted\">&#9650;</span></th>
                    <th class=\"nowrap\" onclick=\"javascript:sortTable(this, 1, 'queries-1')\" style=\"cursor: pointer;\">Time<span></span></th>
                    <th class=\"nowrap\" style=\"cursor: pointer;\">End Point</th>
                    <th>Method</th>
                    <th>Parameters</th>
                    <th>Raw Data</th>
                </tr>
            </thead>
            <tbody id=\"queries-1\">
                {% for i, query in collector.queries %}
                    <tr id=\"queryNo-{{ i }}-1\">
                        <td>{{ loop.index }}</td>
                        <td class=\"nowrap\">{{ '%0.2f'|format(query.executionMS * 1000) }}&nbsp;ms</td>
                        <td>
                            {{ query.endpoint }}
                        </td>
                        <td>
                            {{ query.method }}
                        </td>
                        <td>
                            {% if query.stub is not defined %}
                                {{ query.params | replace({'&': \"<br />\"}) | raw }}
                            {% else %}
                                {{ profiler_dump(query.stub, 1) }}
                            {% endif %}
                        </td>
                        <td>
                            <pre>{{ query.raw_data }}</pre>
                        </td>
                    </tr>
                {% endfor %}
            </tbody>
        </table>
    {% endif %}

    <script type=\"text/javascript\">//<![CDATA[
        function sortTable(header, column, targetId) {
            \"use strict\";

            var direction = parseInt(header.getAttribute('data-sort-direction')) || 1,
                    items = [],
                    target = document.getElementById(targetId),
                    rows = target.children,
                    headers = header.parentElement.children,
                    i;

            for (i = 0; i < rows.length; ++i) {
                items.push(rows[i]);
            }

            for (i = 0; i < headers.length; ++i) {
                headers[i].removeAttribute('data-sort-direction');
                if (headers[i].children.length > 0) {
                    headers[i].children[0].innerHTML = '';
                }
            }

            header.setAttribute('data-sort-direction', (-1*direction).toString());
            header.children[0].innerHTML = direction > 0 ? '<span class=\"text-muted\">&#9650;</span>' : '<span class=\"text-muted\">&#9660;</span>';

            items.sort(function(a, b) {
                return direction * (parseFloat(a.children[column].innerHTML) - parseFloat(b.children[column].innerHTML));
            });

            for (i = 0; i < items.length; ++i) {
                Sfjs.removeClass(items[i], i % 2 ? 'even' : 'odd');
                Sfjs.addClass(items[i], i % 2 ? 'odd' : 'even');
                target.appendChild(items[i]);
            }
        }

        {% if profiler_markup_version == 1 %}
        function toggleRunnableQuery(target) {
            var targetSelector = target.getAttribute('data-toggle-selector');
            var targetElement = document.querySelector(targetSelector);

            if (targetElement.style.display != 'block') {
                targetElement.style.display = 'block';
                target.innerHTML = 'Hide runnable query';
            } else {
                targetElement.style.display = 'none';
                target.innerHTML = 'View runnable query';
            }

            return false;
        }
        {% endif %}

        //]]></script>
{% endblock %}
", "FSSolrBundle:Profiler:solr.html.twig", "/Users/say_era/Desktop/smai/vendor/floriansemm/solr-bundle/FS/SolrBundle/Resources/views/Profiler/solr.html.twig");
    }
}
