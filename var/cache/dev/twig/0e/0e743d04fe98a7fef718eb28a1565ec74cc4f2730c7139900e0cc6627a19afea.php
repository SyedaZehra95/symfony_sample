<?php

/* AdminLTEBundle:Macros:buttons.html.twig */
class __TwigTemplate_a512cbc151d9b5f7b2f26ea2e6af43f39bac4ed419cfba8ab15ea3204d556ba7 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminLTEBundle:Macros:buttons.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminLTEBundle:Macros:buttons.html.twig"));

        // line 6
        echo "
";
        // line 12
        echo "
";
        // line 25
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 1
    public function macro_action_toolbutton($__icon__ = null, $__action__ = null, $__label__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "icon" => $__icon__,
            "action" => $__action__,
            "label" => $__label__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "action_toolbutton"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "action_toolbutton"));

            // line 2
            echo "    <button class=\"btn btn-box-tool\" data-widget=\"";
            echo twig_escape_filter($this->env, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new Twig_Error_Runtime('Variable "action" does not exist.', 2, $this->source); })()), "html", null, true);
            echo "\" data-toggle=\"tooltip\" title=\"";
            echo twig_escape_filter($this->env, (((isset($context["label"]) || array_key_exists("label", $context))) ? (_twig_default_filter((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 2, $this->source); })()), "")) : ("")), "html", null, true);
            echo "\">
        <i class=\"";
            // line 3
            echo twig_escape_filter($this->env, (((isset($context["icon"]) || array_key_exists("icon", $context))) ? (_twig_default_filter((isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new Twig_Error_Runtime('Variable "icon" does not exist.', 3, $this->source); })()), "times")) : ("times")), "html", null, true);
            echo "\"></i>
    </button>
";
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 7
    public function macro_link_toolbutton($__icon__ = null, $__href__ = null, $__label__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "icon" => $__icon__,
            "href" => $__href__,
            "label" => $__label__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "link_toolbutton"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "link_toolbutton"));

            // line 8
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, (isset($context["href"]) || array_key_exists("href", $context) ? $context["href"] : (function () { throw new Twig_Error_Runtime('Variable "href" does not exist.', 8, $this->source); })()), "html", null, true);
            echo "\" class=\"btn btn-box-tool\" data-toggle=\"tooltip\" title=\"";
            echo twig_escape_filter($this->env, (((isset($context["label"]) || array_key_exists("label", $context))) ? (_twig_default_filter((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 8, $this->source); })()), "")) : ("")), "html", null, true);
            echo "\">
        <i class=\"";
            // line 9
            echo twig_escape_filter($this->env, (((isset($context["icon"]) || array_key_exists("icon", $context))) ? (_twig_default_filter((isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new Twig_Error_Runtime('Variable "icon" does not exist.', 9, $this->source); })()), "times")) : ("times")), "html", null, true);
            echo "\"></i>
    </a>
";
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 13
    public function macro_link_button($__label__ = null, $__href__ = null, $__icon__ = null, $__type__ = null, $__size__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "label" => $__label__,
            "href" => $__href__,
            "icon" => $__icon__,
            "type" => $__type__,
            "size" => $__size__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "link_button"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "link_button"));

            // line 14
            echo "    ";
            $context["_size"] = (((isset($context["size"]) || array_key_exists("size", $context))) ? (_twig_default_filter((isset($context["size"]) || array_key_exists("size", $context) ? $context["size"] : (function () { throw new Twig_Error_Runtime('Variable "size" does not exist.', 14, $this->source); })()), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["admin_lte_context"]) || array_key_exists("admin_lte_context", $context) ? $context["admin_lte_context"] : (function () { throw new Twig_Error_Runtime('Variable "admin_lte_context" does not exist.', 14, $this->source); })()), "button", []), "size", []))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["admin_lte_context"]) || array_key_exists("admin_lte_context", $context) ? $context["admin_lte_context"] : (function () { throw new Twig_Error_Runtime('Variable "admin_lte_context" does not exist.', 14, $this->source); })()), "button", []), "size", [])));
            // line 15
            echo "    ";
            $context["_type"] = (((isset($context["type"]) || array_key_exists("type", $context))) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 15, $this->source); })()), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["admin_lte_context"]) || array_key_exists("admin_lte_context", $context) ? $context["admin_lte_context"] : (function () { throw new Twig_Error_Runtime('Variable "admin_lte_context" does not exist.', 15, $this->source); })()), "button", []), "type", []))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["admin_lte_context"]) || array_key_exists("admin_lte_context", $context) ? $context["admin_lte_context"] : (function () { throw new Twig_Error_Runtime('Variable "admin_lte_context" does not exist.', 15, $this->source); })()), "button", []), "type", [])));
            // line 16
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, (((isset($context["href"]) || array_key_exists("href", $context))) ? (_twig_default_filter((isset($context["href"]) || array_key_exists("href", $context) ? $context["href"] : (function () { throw new Twig_Error_Runtime('Variable "href" does not exist.', 16, $this->source); })()), "#")) : ("#")), "html", null, true);
            echo "\" class=\"btn btn-";
            echo twig_escape_filter($this->env, (isset($context["_type"]) || array_key_exists("_type", $context) ? $context["_type"] : (function () { throw new Twig_Error_Runtime('Variable "_type" does not exist.', 16, $this->source); })()), "html", null, true);
            if ((isset($context["_size"]) || array_key_exists("_size", $context) ? $context["_size"] : (function () { throw new Twig_Error_Runtime('Variable "_size" does not exist.', 16, $this->source); })())) {
                echo " btn-";
                echo twig_escape_filter($this->env, (isset($context["_size"]) || array_key_exists("_size", $context) ? $context["_size"] : (function () { throw new Twig_Error_Runtime('Variable "_size" does not exist.', 16, $this->source); })()), "html", null, true);
            }
            echo "\">
        ";
            // line 17
            if ((isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new Twig_Error_Runtime('Variable "icon" does not exist.', 17, $this->source); })())) {
                // line 18
                echo "            <i class=\"";
                echo twig_escape_filter($this->env, (isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new Twig_Error_Runtime('Variable "icon" does not exist.', 18, $this->source); })()), "html", null, true);
                echo "\"></i>
        ";
            }
            // line 20
            echo "        ";
            if ((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 20, $this->source); })())) {
                // line 21
                echo "            <span>";
                echo twig_escape_filter($this->env, (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 21, $this->source); })()), "html", null, true);
                echo "</span>
        ";
            }
            // line 23
            echo "    </a>
";
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 26
    public function macro_action_button($__label__ = null, $__action__ = null, $__icon__ = null, $__type__ = null, $__size__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "label" => $__label__,
            "action" => $__action__,
            "icon" => $__icon__,
            "type" => $__type__,
            "size" => $__size__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "action_button"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "action_button"));

            // line 27
            echo "    ";
            $context["_size"] = (((isset($context["size"]) || array_key_exists("size", $context))) ? (_twig_default_filter((isset($context["size"]) || array_key_exists("size", $context) ? $context["size"] : (function () { throw new Twig_Error_Runtime('Variable "size" does not exist.', 27, $this->source); })()), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["admin_lte_context"]) || array_key_exists("admin_lte_context", $context) ? $context["admin_lte_context"] : (function () { throw new Twig_Error_Runtime('Variable "admin_lte_context" does not exist.', 27, $this->source); })()), "button", []), "size", []))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["admin_lte_context"]) || array_key_exists("admin_lte_context", $context) ? $context["admin_lte_context"] : (function () { throw new Twig_Error_Runtime('Variable "admin_lte_context" does not exist.', 27, $this->source); })()), "button", []), "size", [])));
            // line 28
            echo "    ";
            $context["_type"] = (((isset($context["type"]) || array_key_exists("type", $context))) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 28, $this->source); })()), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["admin_lte_context"]) || array_key_exists("admin_lte_context", $context) ? $context["admin_lte_context"] : (function () { throw new Twig_Error_Runtime('Variable "admin_lte_context" does not exist.', 28, $this->source); })()), "button", []), "type", []))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["admin_lte_context"]) || array_key_exists("admin_lte_context", $context) ? $context["admin_lte_context"] : (function () { throw new Twig_Error_Runtime('Variable "admin_lte_context" does not exist.', 28, $this->source); })()), "button", []), "type", [])));
            // line 29
            echo "    <button data-action=\"";
            echo twig_escape_filter($this->env, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new Twig_Error_Runtime('Variable "action" does not exist.', 29, $this->source); })()), "html", null, true);
            echo "\" class=\"btn btn-";
            echo twig_escape_filter($this->env, (isset($context["_type"]) || array_key_exists("_type", $context) ? $context["_type"] : (function () { throw new Twig_Error_Runtime('Variable "_type" does not exist.', 29, $this->source); })()), "html", null, true);
            if ((isset($context["_size"]) || array_key_exists("_size", $context) ? $context["_size"] : (function () { throw new Twig_Error_Runtime('Variable "_size" does not exist.', 29, $this->source); })())) {
                echo " btn-";
                echo twig_escape_filter($this->env, (isset($context["_size"]) || array_key_exists("_size", $context) ? $context["_size"] : (function () { throw new Twig_Error_Runtime('Variable "_size" does not exist.', 29, $this->source); })()), "html", null, true);
            }
            echo "\">
        ";
            // line 30
            if ((isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new Twig_Error_Runtime('Variable "icon" does not exist.', 30, $this->source); })())) {
                // line 31
                echo "            <i class=\"";
                echo twig_escape_filter($this->env, (isset($context["icon"]) || array_key_exists("icon", $context) ? $context["icon"] : (function () { throw new Twig_Error_Runtime('Variable "icon" does not exist.', 31, $this->source); })()), "html", null, true);
                echo "\"></i>
        ";
            }
            // line 33
            echo "        ";
            if ((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 33, $this->source); })())) {
                // line 34
                echo "            <span>";
                echo twig_escape_filter($this->env, (isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 34, $this->source); })()), "html", null, true);
                echo "</span>
        ";
            }
            // line 36
            echo "    </button>
";
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "AdminLTEBundle:Macros:buttons.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  264 => 36,  258 => 34,  255 => 33,  249 => 31,  247 => 30,  236 => 29,  233 => 28,  230 => 27,  208 => 26,  192 => 23,  186 => 21,  183 => 20,  177 => 18,  175 => 17,  164 => 16,  161 => 15,  158 => 14,  136 => 13,  118 => 9,  111 => 8,  91 => 7,  73 => 3,  66 => 2,  46 => 1,  35 => 25,  32 => 12,  29 => 6,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% macro action_toolbutton(icon, action, label) %}
    <button class=\"btn btn-box-tool\" data-widget=\"{{ action }}\" data-toggle=\"tooltip\" title=\"{{ label|default('') }}\">
        <i class=\"{{ icon|default('times') }}\"></i>
    </button>
{% endmacro %}

{% macro link_toolbutton(icon, href, label) %}
    <a href=\"{{ href }}\" class=\"btn btn-box-tool\" data-toggle=\"tooltip\" title=\"{{ label|default('') }}\">
        <i class=\"{{ icon|default('times') }}\"></i>
    </a>
{% endmacro %}

{% macro link_button(label, href, icon, type, size) %}
    {% set _size = size|default(admin_lte_context.button.size) %}
    {% set _type = type|default(admin_lte_context.button.type) %}
    <a href=\"{{ href|default('#') }}\" class=\"btn btn-{{ _type }}{% if _size %} btn-{{ _size }}{% endif %}\">
        {% if icon %}
            <i class=\"{{ icon }}\"></i>
        {% endif %}
        {% if label %}
            <span>{{ label }}</span>
        {% endif %}
    </a>
{% endmacro %}

{% macro action_button(label, action, icon, type, size) %}
    {% set _size = size|default(admin_lte_context.button.size) %}
    {% set _type = type|default(admin_lte_context.button.type) %}
    <button data-action=\"{{ action }}\" class=\"btn btn-{{ _type }}{% if _size %} btn-{{ _size }}{% endif %}\">
        {% if icon %}
            <i class=\"{{ icon }}\"></i>
        {% endif %}
        {% if label %}
            <span>{{ label }}</span>
        {% endif %}
    </button>
{% endmacro %}
", "AdminLTEBundle:Macros:buttons.html.twig", "/Users/say_era/Desktop/smai/vendor/kevinpapst/adminlte-bundle/Resources/views/Macros/buttons.html.twig");
    }
}
