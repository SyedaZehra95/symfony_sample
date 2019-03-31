<?php

/* AdminLTEBundle:Widgets:box-widget.html.twig */
class __TwigTemplate_687a2f44764b9e9d654df2ac131cb4acb297b5dc08fa2caeb6243c4e42da03ad extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminLTEBundle:Widgets:box-widget.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminLTEBundle:Widgets:box-widget.html.twig"));

        // line 1
        $context["button"] = $this->loadTemplate("@AdminLTE/Macros/buttons.html.twig", "AdminLTEBundle:Widgets:box-widget.html.twig", 1);
        // line 2
        if (        $this->hasBlock("box_before", $context, $blocks)) {
            $this->displayBlock("box_before", $context, $blocks);
        }
        // line 3
        echo "
";
        // line 4
        $context["_collapsed"] = (((isset($context["collapsed"]) || array_key_exists("collapsed", $context))) ? (_twig_default_filter((isset($context["collapsed"]) || array_key_exists("collapsed", $context) ? $context["collapsed"] : (function () { throw new Twig_Error_Runtime('Variable "collapsed" does not exist.', 4, $this->source); })()), false)) : (false));
        // line 5
        $context["_solid"] = (((isset($context["solid"]) || array_key_exists("solid", $context))) ? (_twig_default_filter((isset($context["solid"]) || array_key_exists("solid", $context) ? $context["solid"] : (function () { throw new Twig_Error_Runtime('Variable "solid" does not exist.', 5, $this->source); })()), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["admin_lte_context"]) || array_key_exists("admin_lte_context", $context) ? $context["admin_lte_context"] : (function () { throw new Twig_Error_Runtime('Variable "admin_lte_context" does not exist.', 5, $this->source); })()), "widget", []), "solid", []))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["admin_lte_context"]) || array_key_exists("admin_lte_context", $context) ? $context["admin_lte_context"] : (function () { throw new Twig_Error_Runtime('Variable "admin_lte_context" does not exist.', 5, $this->source); })()), "widget", []), "solid", [])));
        // line 6
        $context["_border"] = (((isset($context["border"]) || array_key_exists("border", $context))) ? (_twig_default_filter((isset($context["border"]) || array_key_exists("border", $context) ? $context["border"] : (function () { throw new Twig_Error_Runtime('Variable "border" does not exist.', 6, $this->source); })()), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["admin_lte_context"]) || array_key_exists("admin_lte_context", $context) ? $context["admin_lte_context"] : (function () { throw new Twig_Error_Runtime('Variable "admin_lte_context" does not exist.', 6, $this->source); })()), "widget", []), "bordered", []))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["admin_lte_context"]) || array_key_exists("admin_lte_context", $context) ? $context["admin_lte_context"] : (function () { throw new Twig_Error_Runtime('Variable "admin_lte_context" does not exist.', 6, $this->source); })()), "widget", []), "bordered", [])));
        // line 7
        $context["_footer"] = ((((isset($context["use_footer"]) || array_key_exists("use_footer", $context))) ? (_twig_default_filter((isset($context["use_footer"]) || array_key_exists("use_footer", $context) ? $context["use_footer"] : (function () { throw new Twig_Error_Runtime('Variable "use_footer" does not exist.', 7, $this->source); })()), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["admin_lte_context"]) || array_key_exists("admin_lte_context", $context) ? $context["admin_lte_context"] : (function () { throw new Twig_Error_Runtime('Variable "admin_lte_context" does not exist.', 7, $this->source); })()), "widget", []), "use_footer", []))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["admin_lte_context"]) || array_key_exists("admin_lte_context", $context) ? $context["admin_lte_context"] : (function () { throw new Twig_Error_Runtime('Variable "admin_lte_context" does not exist.', 7, $this->source); })()), "widget", []), "use_footer", []))) ||         $this->hasBlock("box_footer", $context, $blocks));
        // line 8
        echo "
";
        // line 9
        if ( !(isset($context["removable"]) || array_key_exists("removable", $context))) {
            // line 10
            echo "    ";
            $context["removable"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["admin_lte_context"]) || array_key_exists("admin_lte_context", $context) ? $context["admin_lte_context"] : (function () { throw new Twig_Error_Runtime('Variable "admin_lte_context" does not exist.', 10, $this->source); })()), "widget", []), "removable", []);
        }
        // line 12
        if ( !(isset($context["collapsible"]) || array_key_exists("collapsible", $context))) {
            // line 13
            echo "    ";
            $context["collapsible"] = ((isset($context["_collapsed"]) || array_key_exists("_collapsed", $context) ? $context["_collapsed"] : (function () { throw new Twig_Error_Runtime('Variable "_collapsed" does not exist.', 13, $this->source); })()) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["admin_lte_context"]) || array_key_exists("admin_lte_context", $context) ? $context["admin_lte_context"] : (function () { throw new Twig_Error_Runtime('Variable "admin_lte_context" does not exist.', 13, $this->source); })()), "widget", []), "collapsible", []));
        }
        // line 15
        echo "<div class=\"box box-";
        echo twig_escape_filter($this->env, (((isset($context["boxtype"]) || array_key_exists("boxtype", $context))) ? (_twig_default_filter((isset($context["boxtype"]) || array_key_exists("boxtype", $context) ? $context["boxtype"] : (function () { throw new Twig_Error_Runtime('Variable "boxtype" does not exist.', 15, $this->source); })()), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["admin_lte_context"]) || array_key_exists("admin_lte_context", $context) ? $context["admin_lte_context"] : (function () { throw new Twig_Error_Runtime('Variable "admin_lte_context" does not exist.', 15, $this->source); })()), "widget", []), "type", []))) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["admin_lte_context"]) || array_key_exists("admin_lte_context", $context) ? $context["admin_lte_context"] : (function () { throw new Twig_Error_Runtime('Variable "admin_lte_context" does not exist.', 15, $this->source); })()), "widget", []), "type", []))), "html", null, true);
        echo (((isset($context["_solid"]) || array_key_exists("_solid", $context) ? $context["_solid"] : (function () { throw new Twig_Error_Runtime('Variable "_solid" does not exist.', 15, $this->source); })())) ? (" box-solid") : (""));
        echo (((isset($context["_collapsed"]) || array_key_exists("_collapsed", $context) ? $context["_collapsed"] : (function () { throw new Twig_Error_Runtime('Variable "_collapsed" does not exist.', 15, $this->source); })())) ? (" collapsed-box") : (""));
        echo "\">
    <div class=\"box-header";
        // line 16
        echo (((isset($context["_border"]) || array_key_exists("_border", $context) ? $context["_border"] : (function () { throw new Twig_Error_Runtime('Variable "_border" does not exist.', 16, $this->source); })())) ? (" with-border") : (""));
        echo "\">
        <h3 class=\"box-title\">";
        // line 17
        $this->displayBlock("box_title", $context, $blocks);
        echo "</h3>
        <div class=\"box-tools pull-right\">
\t        ";
        // line 19
        if (        $this->hasBlock("box_tools", $context, $blocks)) {
            $this->displayBlock("box_tools", $context, $blocks);
        }
        // line 20
        echo "            <!-- Buttons, labels, and many other things can be placed here! -->
            ";
        // line 21
        if ((isset($context["collapsible"]) || array_key_exists("collapsible", $context) ? $context["collapsible"] : (function () { throw new Twig_Error_Runtime('Variable "collapsible" does not exist.', 21, $this->source); })())) {
            // line 22
            echo "                ";
            echo $context["button"]->macro_action_toolbutton(((            // line 23
(isset($context["_collapsed"]) || array_key_exists("_collapsed", $context) ? $context["_collapsed"] : (function () { throw new Twig_Error_Runtime('Variable "_collapsed" does not exist.', 23, $this->source); })())) ? ("fas fa-plus") : ("fas fa-minus")), "collapse", ((            // line 25
(isset($context["collapsible_title"]) || array_key_exists("collapsible_title", $context))) ? (_twig_default_filter((isset($context["collapsible_title"]) || array_key_exists("collapsible_title", $context) ? $context["collapsible_title"] : (function () { throw new Twig_Error_Runtime('Variable "collapsible_title" does not exist.', 25, $this->source); })()), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin_lte_context"] ?? null), "widget", [], "any", false, true), "collapsible_title", [], "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin_lte_context"] ?? null), "widget", [], "any", false, true), "collapsible_title", []))) : ("")), [], "AdminLTEBundle"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin_lte_context"] ?? null), "widget", [], "any", false, true), "collapsible_title", [], "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin_lte_context"] ?? null), "widget", [], "any", false, true), "collapsible_title", []))) : ("")), [], "AdminLTEBundle"))));
            // line 26
            echo "
            ";
        }
        // line 28
        echo "
            ";
        // line 29
        if ((isset($context["removable"]) || array_key_exists("removable", $context) ? $context["removable"] : (function () { throw new Twig_Error_Runtime('Variable "removable" does not exist.', 29, $this->source); })())) {
            // line 30
            echo "                ";
            echo $context["button"]->macro_action_toolbutton("fas fa-times", "remove", ((            // line 33
(isset($context["removable_title"]) || array_key_exists("removable_title", $context))) ? (_twig_default_filter((isset($context["removable_title"]) || array_key_exists("removable_title", $context) ? $context["removable_title"] : (function () { throw new Twig_Error_Runtime('Variable "removable_title" does not exist.', 33, $this->source); })()), $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin_lte_context"] ?? null), "widget", [], "any", false, true), "removable_title", [], "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin_lte_context"] ?? null), "widget", [], "any", false, true), "removable_title", []))) : ("")), [], "AdminLTEBundle"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin_lte_context"] ?? null), "widget", [], "any", false, true), "removable_title", [], "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["admin_lte_context"] ?? null), "widget", [], "any", false, true), "removable_title", []))) : ("")), [], "AdminLTEBundle"))));
            // line 34
            echo "
            ";
        }
        // line 36
        echo "
        </div><!-- /.box-tools -->
    </div><!-- /.box-header -->
    <div class=\"box-body\">";
        // line 39
        $this->displayBlock("box_body", $context, $blocks);
        echo "</div><!-- /.box-body -->
    ";
        // line 40
        if ((isset($context["_footer"]) || array_key_exists("_footer", $context) ? $context["_footer"] : (function () { throw new Twig_Error_Runtime('Variable "_footer" does not exist.', 40, $this->source); })())) {
            // line 41
            echo "        <div class=\"box-footer\">";
            if (            $this->hasBlock("box_footer", $context, $blocks)) {
                $this->displayBlock("box_footer", $context, $blocks);
            }
            echo "</div><!-- box-footer -->
    ";
        }
        // line 43
        echo "</div><!-- /.box -->
";
        // line 44
        if (        $this->hasBlock("box_after", $context, $blocks)) {
            $this->displayBlock("box_after", $context, $blocks);
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "AdminLTEBundle:Widgets:box-widget.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 44,  127 => 43,  119 => 41,  117 => 40,  113 => 39,  108 => 36,  104 => 34,  102 => 33,  100 => 30,  98 => 29,  95 => 28,  91 => 26,  89 => 25,  88 => 23,  86 => 22,  84 => 21,  81 => 20,  77 => 19,  72 => 17,  68 => 16,  61 => 15,  57 => 13,  55 => 12,  51 => 10,  49 => 9,  46 => 8,  44 => 7,  42 => 6,  40 => 5,  38 => 4,  35 => 3,  31 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import '@AdminLTE/Macros/buttons.html.twig' as button %}
{% if block('box_before') is defined %}{{ block('box_before') }}{% endif %}

{% set _collapsed = collapsed|default(false) %}
{% set _solid     = solid|default(admin_lte_context.widget.solid)  %}
{% set _border    = border|default(admin_lte_context.widget.bordered)  %}
{% set _footer    = use_footer|default(admin_lte_context.widget.use_footer) or block('box_footer') is defined %}

{% if removable is not defined %}
    {% set removable = admin_lte_context.widget.removable %}
{% endif %}
{% if collapsible is not defined %}
    {% set collapsible =  (_collapsed or admin_lte_context.widget.collapsible) %}
{% endif %}
<div class=\"box box-{{ boxtype|default(admin_lte_context.widget.type) }}{{ _solid ? ' box-solid' : '' }}{{ _collapsed ? ' collapsed-box' : '' }}\">
    <div class=\"box-header{{ _border ? ' with-border' : '' }}\">
        <h3 class=\"box-title\">{{ block('box_title') }}</h3>
        <div class=\"box-tools pull-right\">
\t        {% if block('box_tools') is defined %}{{ block('box_tools') }}{% endif %}
            <!-- Buttons, labels, and many other things can be placed here! -->
            {% if collapsible %}
                {{ button.action_toolbutton(
                    _collapsed ? 'fas fa-plus'  : 'fas fa-minus' ,
                    'collapse',
                    collapsible_title|default(admin_lte_context.widget.collapsible_title|default()|trans({}, 'AdminLTEBundle'))
                ) }}
            {% endif %}

            {% if removable %}
                {{ button.action_toolbutton(
                'fas fa-times',
                'remove',
                removable_title|default(admin_lte_context.widget.removable_title|default()|trans({}, 'AdminLTEBundle'))
                ) }}
            {% endif %}

        </div><!-- /.box-tools -->
    </div><!-- /.box-header -->
    <div class=\"box-body\">{{ block('box_body') }}</div><!-- /.box-body -->
    {% if _footer %}
        <div class=\"box-footer\">{% if block('box_footer') is defined %}{{ block('box_footer') }}{% endif %}</div><!-- box-footer -->
    {% endif %}
</div><!-- /.box -->
{% if block('box_after') is defined %}{{ block('box_after') }}{% endif %}
", "AdminLTEBundle:Widgets:box-widget.html.twig", "/Users/say_era/Desktop/smai/vendor/kevinpapst/adminlte-bundle/Resources/views/Widgets/box-widget.html.twig");
    }
}
