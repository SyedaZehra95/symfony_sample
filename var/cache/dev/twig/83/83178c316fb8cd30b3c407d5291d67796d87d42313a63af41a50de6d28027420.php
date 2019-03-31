<?php

/* AdminLTEBundle:Breadcrumb:breadcrumb.html.twig */
class __TwigTemplate_83add9cb3615be6d3b24d81f8717157075ffe81c66e36ee9946d8727031dcb30 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminLTEBundle:Breadcrumb:breadcrumb.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminLTEBundle:Breadcrumb:breadcrumb.html.twig"));

        // line 1
        echo "<ol class=\"breadcrumb\">
    <li>
        <a href=\"";
        // line 3
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath($this->extensions['KevinPapst\AdminLTEBundle\Twig\AdminExtension']->getRouteByAlias("adminlte_welcome"));
        echo "\">
            <i class=\"fas fa-tachometer-alt\"></i>
            ";
        // line 5
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Home", [], "AdminLTEBundle"), "html", null, true);
        echo "
        </a>
    </li>
    ";
        // line 8
        if ((isset($context["active"]) || array_key_exists("active", $context) ? $context["active"] : (function () { throw new Twig_Error_Runtime('Variable "active" does not exist.', 8, $this->source); })())) {
            // line 9
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["active"]) || array_key_exists("active", $context) ? $context["active"] : (function () { throw new Twig_Error_Runtime('Variable "active" does not exist.', 9, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 10
                echo "            <li><a href=\"";
                echo twig_escape_filter($this->env, ((twig_test_empty(twig_get_attribute($this->env, $this->source, $context["item"], "route", []))) ? ("#") : (((twig_in_filter("/", twig_get_attribute($this->env, $this->source, $context["item"], "route", []))) ? (twig_get_attribute($this->env, $this->source, $context["item"], "route", [])) : ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath($this->extensions['KevinPapst\AdminLTEBundle\Twig\AdminExtension']->getRouteByAlias(twig_get_attribute($this->env, $this->source, $context["item"], "route", [])), twig_get_attribute($this->env, $this->source, $context["item"], "routeArgs", [])))))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["item"], "label", [])), "html", null, true);
                echo "</a></li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 12
            echo "    ";
        }
        // line 13
        echo "</ol>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "AdminLTEBundle:Breadcrumb:breadcrumb.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 13,  62 => 12,  51 => 10,  46 => 9,  44 => 8,  38 => 5,  33 => 3,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<ol class=\"breadcrumb\">
    <li>
        <a href=\"{{ path('adminlte_welcome'|route_alias) }}\">
            <i class=\"fas fa-tachometer-alt\"></i>
            {{ 'Home'|trans({}, 'AdminLTEBundle') }}
        </a>
    </li>
    {% if active %}
        {% for item in active %}
            <li><a href=\"{{ item.route is empty ? '#' : '/' in item.route ? item.route : path(item.route|route_alias, item.routeArgs) }}\">{{ item.label|trans }}</a></li>
        {% endfor %}
    {% endif %}
</ol>", "AdminLTEBundle:Breadcrumb:breadcrumb.html.twig", "/Users/say_era/Desktop/smai/vendor/kevinpapst/adminlte-bundle/Resources/views/Breadcrumb/breadcrumb.html.twig");
    }
}
