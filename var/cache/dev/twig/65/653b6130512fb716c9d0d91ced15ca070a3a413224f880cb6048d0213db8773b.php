<?php

/* AdminLTEBundle:Macros:menu.html.twig */
class __TwigTemplate_e8c6acd50a3861041be985afeafc38fdb5ba5a73e1d5e563f04b5720ddfcf3ce extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminLTEBundle:Macros:menu.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminLTEBundle:Macros:menu.html.twig"));

        // line 36
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 1
    public function macro_menu_item($__item__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "item" => $__item__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "menu_item"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "menu_item"));

            // line 2
            echo "    ";
            $context["menu"] = $this;
            // line 3
            echo "    ";
            if ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 3, $this->source); })()), "route", []) || twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 3, $this->source); })()), "hasChildren", []))) {
                // line 4
                echo "        <li id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 4, $this->source); })()), "identifier", []), "html", null, true);
                echo "\" class=\" ";
                echo ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 4, $this->source); })()), "isActive", [])) ? ("active") : (""));
                echo " ";
                echo ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 4, $this->source); })()), "hasChildren", [])) ? ("treeview") : (""));
                echo "\">
            <a href=\"";
                // line 5
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 5, $this->source); })()), "hasChildren", [])) ? ("#") : (((twig_in_filter("/", twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 5, $this->source); })()), "route", []))) ? (twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 5, $this->source); })()), "route", [])) : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath($this->extensions['KevinPapst\AdminLTEBundle\Twig\AdminExtension']->getRouteByAlias(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 5, $this->source); })()), "route", [])), twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 5, $this->source); })()), "routeArgs", [])))))), "html", null, true);
                echo "\">
                ";
                // line 6
                if (twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 6, $this->source); })()), "icon", [])) {
                    echo " <i class=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 6, $this->source); })()), "icon", []), "html", null, true);
                    echo "\"></i> ";
                }
                // line 7
                echo "                ";
                if ( !(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 7, $this->source); })()), "badge", []) === false)) {
                    // line 8
                    echo "                    <small class=\"label pull-right bg-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 8, $this->source); })()), "badgeColor", []), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 8, $this->source); })()), "badge", []), "html", null, true);
                    echo "</small>
                ";
                }
                // line 10
                echo "                ";
                if (twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 10, $this->source); })()), "hasChildren", [])) {
                    echo "<i class=\"fas fa-angle-left pull-right\"></i>";
                }
                // line 11
                echo "                <span>";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 11, $this->source); })()), "label", [])), "html", null, true);
                echo "</span>
            </a>

            ";
                // line 14
                if (twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 14, $this->source); })()), "hasChildren", [])) {
                    // line 15
                    echo "                <ul class=\"treeview-menu\">
                    ";
                    // line 16
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 16, $this->source); })()), "children", []));
                    foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                        // line 17
                        echo "                        ";
                        if (twig_get_attribute($this->env, $this->source, $context["child"], "hasChildren", [])) {
                            // line 18
                            echo "                           ";
                            echo $context["menu"]->macro_menu_item($context["child"]);
                            echo "
                        ";
                        } else {
                            // line 20
                            echo "                            <li class=\"";
                            echo ((twig_get_attribute($this->env, $this->source, $context["child"], "isActive", [])) ? ("active") : (""));
                            echo "\" id=\"";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["child"], "identifier", []), "html", null, true);
                            echo "\">
                                <a href=\"";
                            // line 21
                            echo twig_escape_filter($this->env, ((twig_in_filter("/", twig_get_attribute($this->env, $this->source, $context["child"], "route", []))) ? (twig_get_attribute($this->env, $this->source, $context["child"], "route", [])) : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath($this->extensions['KevinPapst\AdminLTEBundle\Twig\AdminExtension']->getRouteByAlias(twig_get_attribute($this->env, $this->source, $context["child"], "route", [])), twig_get_attribute($this->env, $this->source, $context["child"], "routeArgs", [])))), "html", null, true);
                            echo "\">
                                    ";
                            // line 22
                            echo $context["menu"]->macro_menu_item_content($context["child"], "");
                            echo "
                                </a>
                            </li>
                        ";
                        }
                        // line 26
                        echo "                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 27
                    echo "                </ul>
            ";
                }
                // line 29
                echo "        </li>
    ";
            } else {
                // line 31
                echo "        <li id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 31, $this->source); })()), "identifier", []), "html", null, true);
                echo "\" class=\"header\">
            ";
                // line 32
                echo $context["menu"]->macro_menu_item_content((isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 32, $this->source); })()), "");
                echo "
        </li>
    ";
            }
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 37
    public function macro_menu_item_content($__item__ = null, $__defaultIcon__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "item" => $__item__,
            "defaultIcon" => $__defaultIcon__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "menu_item_content"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "menu_item_content"));

            // line 38
            echo "    <i class=\"";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "icon", [], "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "icon", []), (isset($context["defaultIcon"]) || array_key_exists("defaultIcon", $context) ? $context["defaultIcon"] : (function () { throw new Twig_Error_Runtime('Variable "defaultIcon" does not exist.', 38, $this->source); })()))) : ((isset($context["defaultIcon"]) || array_key_exists("defaultIcon", $context) ? $context["defaultIcon"] : (function () { throw new Twig_Error_Runtime('Variable "defaultIcon" does not exist.', 38, $this->source); })()))), "html", null, true);
            echo "\"></i>
    <span>";
            // line 39
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 39, $this->source); })()), "label", [])), "html", null, true);
            echo "</span>
    ";
            // line 40
            if ( !(twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 40, $this->source); })()), "badge", []) === false)) {
                // line 41
                echo "        <small class=\"label pull-right bg-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 41, $this->source); })()), "badgeColor", []), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 41, $this->source); })()), "badge", []), "html", null, true);
                echo "</small>
    ";
            }
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "AdminLTEBundle:Macros:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  210 => 41,  208 => 40,  204 => 39,  199 => 38,  180 => 37,  161 => 32,  156 => 31,  152 => 29,  148 => 27,  142 => 26,  135 => 22,  131 => 21,  124 => 20,  118 => 18,  115 => 17,  111 => 16,  108 => 15,  106 => 14,  99 => 11,  94 => 10,  86 => 8,  83 => 7,  77 => 6,  73 => 5,  64 => 4,  61 => 3,  58 => 2,  40 => 1,  29 => 36,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% macro menu_item(item) %}
    {% import _self as menu %}
    {% if item.route or item.hasChildren %}
        <li id=\"{{ item.identifier }}\" class=\" {{ item.isActive ? 'active' : '' }} {{ item.hasChildren? 'treeview' : '' }}\">
            <a href=\"{{ item.hasChildren ? '#': '/' in item.route ? item.route : path(item.route|route_alias, item.routeArgs) }}\">
                {% if item.icon %} <i class=\"{{ item.icon }}\"></i> {% endif %}
                {% if item.badge is not same as(false) %}
                    <small class=\"label pull-right bg-{{ item.badgeColor }}\">{{ item.badge }}</small>
                {% endif %}
                {% if item.hasChildren %}<i class=\"fas fa-angle-left pull-right\"></i>{% endif %}
                <span>{{ item.label|trans }}</span>
            </a>

            {% if item.hasChildren %}
                <ul class=\"treeview-menu\">
                    {% for child in item.children %}
                        {% if child.hasChildren %}
                           {{ menu.menu_item(child) }}
                        {% else %}
                            <li class=\"{{ child.isActive ? 'active':'' }}\" id=\"{{ child.identifier }}\">
                                <a href=\"{{ '/' in child.route ? child.route : path(child.route|route_alias, child.routeArgs) }}\">
                                    {{ menu.menu_item_content(child, '') }}
                                </a>
                            </li>
                        {% endif %}
                    {% endfor %}
                </ul>
            {% endif %}
        </li>
    {% else %}
        <li id=\"{{ item.identifier }}\" class=\"header\">
            {{ menu.menu_item_content(item, '') }}
        </li>
    {% endif %}
{% endmacro %}

{% macro menu_item_content(item, defaultIcon) %}
    <i class=\"{{ item.icon|default(defaultIcon) }}\"></i>
    <span>{{ item.label|trans }}</span>
    {% if item.badge is not same as(false) %}
        <small class=\"label pull-right bg-{{ item.badgeColor }}\">{{ item.badge }}</small>
    {% endif %}
{% endmacro %}
", "AdminLTEBundle:Macros:menu.html.twig", "/Users/say_era/Desktop/smai/vendor/kevinpapst/adminlte-bundle/Resources/views/Macros/menu.html.twig");
    }
}
