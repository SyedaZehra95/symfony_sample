<?php

/* AdminLTEBundle:Sidebar:menu.html.twig */
class __TwigTemplate_7220e7775b959456a67c140f6ac77b6ec078596710a35b026883d3c7b85360fc extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminLTEBundle:Sidebar:menu.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminLTEBundle:Sidebar:menu.html.twig"));

        // line 1
        echo "<!-- sidebar menu: : style can be found in sidebar.less -->
";
        // line 2
        $context["__internal_e3a0ec14db3a38faf51c4e6a599f83e956ba9123a4aa855718ad98a3c0fd76f8"] = $this->loadTemplate("@AdminLTE/Macros/menu.html.twig", "AdminLTEBundle:Sidebar:menu.html.twig", 2);
        // line 3
        echo "<ul class=\"sidebar-menu\" data-widget=\"tree\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["menu"]) || array_key_exists("menu", $context) ? $context["menu"] : (function () { throw new Twig_Error_Runtime('Variable "menu" does not exist.', 4, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 5
            echo "        ";
            echo $context["__internal_e3a0ec14db3a38faf51c4e6a599f83e956ba9123a4aa855718ad98a3c0fd76f8"]->macro_menu_item($context["item"]);
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "</ul>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "AdminLTEBundle:Sidebar:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 7,  41 => 5,  37 => 4,  34 => 3,  32 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- sidebar menu: : style can be found in sidebar.less -->
{% from \"@AdminLTE/Macros/menu.html.twig\" import menu_item %}
<ul class=\"sidebar-menu\" data-widget=\"tree\">
    {% for item in menu %}
        {{ menu_item(item) }}
    {% endfor %}
</ul>
", "AdminLTEBundle:Sidebar:menu.html.twig", "/Users/say_era/Desktop/smai/vendor/kevinpapst/adminlte-bundle/Resources/views/Sidebar/menu.html.twig");
    }
}
