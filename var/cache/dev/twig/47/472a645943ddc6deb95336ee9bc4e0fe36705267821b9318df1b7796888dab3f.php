<?php

/* AdminLTEBundle:Partials:_flash_messages.html.twig */
class __TwigTemplate_90bb80f0ed867f9fd14d4ca3705695378c4ad081131d290ed710d44ed340ef32 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminLTEBundle:Partials:_flash_messages.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminLTEBundle:Partials:_flash_messages.html.twig"));

        // line 1
        $context["macro"] = $this->loadTemplate("@AdminLTE/Macros/default.html.twig", "AdminLTEBundle:Partials:_flash_messages.html.twig", 1);
        // line 2
        echo "
";
        // line 3
        if (((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 3, $this->source); })()), "session", []) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 3, $this->source); })()), "session", []), "started", [])) && (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 3, $this->source); })()), "session", []), "flashbag", []), "peekAll", [])) > 0))) {
            // line 4
            echo "    <div class=\"row\">
        <div class=\"col-sm-12\">
            ";
            // line 6
            echo $context["macro"]->macro_session_flash((((isset($context["adminlte_close_alert"]) || array_key_exists("adminlte_close_alert", $context))) ? (_twig_default_filter((isset($context["adminlte_close_alert"]) || array_key_exists("adminlte_close_alert", $context) ? $context["adminlte_close_alert"] : (function () { throw new Twig_Error_Runtime('Variable "adminlte_close_alert" does not exist.', 6, $this->source); })()), true)) : (true)), false, "", "flashmessages");
            echo "
        </div>
    </div>
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "AdminLTEBundle:Partials:_flash_messages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  36 => 4,  34 => 3,  31 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import \"@AdminLTE/Macros/default.html.twig\" as macro %}

{% if app.session and app.session.started and app.session.flashbag.peekAll|length > 0 %}
    <div class=\"row\">
        <div class=\"col-sm-12\">
            {{ macro.session_flash(adminlte_close_alert|default(true), false, '', 'flashmessages') }}
        </div>
    </div>
{% endif %}
", "AdminLTEBundle:Partials:_flash_messages.html.twig", "/Users/say_era/Desktop/smai/vendor/kevinpapst/adminlte-bundle/Resources/views/Partials/_flash_messages.html.twig");
    }
}
