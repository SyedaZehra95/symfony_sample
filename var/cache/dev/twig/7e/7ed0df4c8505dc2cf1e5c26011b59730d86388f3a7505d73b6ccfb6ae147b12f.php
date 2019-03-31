<?php

/* AdminLTEBundle:Partials:_control-sidebar.html.twig */
class __TwigTemplate_6574dbe261073bb03778235a0bda5d4294945c5e0f2fbc18af73e0c348443924 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminLTEBundle:Partials:_control-sidebar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminLTEBundle:Partials:_control-sidebar.html.twig"));

        // line 1
        if ((twig_get_attribute($this->env, $this->source, ($context["admin_lte_context"] ?? null), "control_sidebar", [], "any", true, true) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["admin_lte_context"]) || array_key_exists("admin_lte_context", $context) ? $context["admin_lte_context"] : (function () { throw new Twig_Error_Runtime('Variable "admin_lte_context" does not exist.', 1, $this->source); })()), "control_sidebar", [])))) {
            // line 2
            echo "<aside class=\"control-sidebar control-sidebar-dark\">
    <ul class=\"nav nav-tabs nav-justified control-sidebar-tabs\">
            ";
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["admin_lte_context"]) || array_key_exists("admin_lte_context", $context) ? $context["admin_lte_context"] : (function () { throw new Twig_Error_Runtime('Variable "admin_lte_context" does not exist.', 4, $this->source); })()), "control_sidebar", []));
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
            foreach ($context['_seq'] as $context["name"] => $context["tab"]) {
                // line 5
                echo "                <li";
                if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [])) {
                    echo " class=\"active\"";
                }
                echo "><a href=\"#control-sidebar-";
                echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                echo "-tab\" data-toggle=\"tab\"><i class=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab"], "icon", []), "html", null, true);
                echo "\"></i></a></li>
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
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['tab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 7
            echo "    </ul>
    <div class=\"tab-content\">
            ";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["admin_lte_context"]) || array_key_exists("admin_lte_context", $context) ? $context["admin_lte_context"] : (function () { throw new Twig_Error_Runtime('Variable "admin_lte_context" does not exist.', 9, $this->source); })()), "control_sidebar", []));
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
            foreach ($context['_seq'] as $context["name"] => $context["tab"]) {
                // line 10
                echo "                <div class=\"tab-pane ";
                if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [])) {
                    echo "active";
                }
                echo "\" id=\"control-sidebar-";
                echo twig_escape_filter($this->env, $context["name"], "html", null, true);
                echo "-tab\">
                    ";
                // line 11
                if (twig_get_attribute($this->env, $this->source, $context["tab"], "controller", [], "any", true, true)) {
                    // line 12
                    echo "                        ";
                    echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller(twig_get_attribute($this->env, $this->source, $context["tab"], "controller", []), ["originalRequest" => twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 12, $this->source); })()), "request", [])]));
                    echo "
                    ";
                } elseif (twig_get_attribute($this->env, $this->source,                 // line 13
$context["tab"], "template", [], "any", true, true)) {
                    // line 14
                    echo "                        ";
                    $this->loadTemplate(twig_get_attribute($this->env, $this->source, $context["tab"], "template", []), "AdminLTEBundle:Partials:_control-sidebar.html.twig", 14)->display($context);
                    // line 15
                    echo "                    ";
                }
                // line 16
                echo "                </div>
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
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['tab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "    </div>
</aside>
<div class=\"control-sidebar-bg\"></div>
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "AdminLTEBundle:Partials:_control-sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 18,  120 => 16,  117 => 15,  114 => 14,  112 => 13,  107 => 12,  105 => 11,  96 => 10,  79 => 9,  75 => 7,  52 => 5,  35 => 4,  31 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if admin_lte_context.control_sidebar is defined and admin_lte_context.control_sidebar is not empty %}
<aside class=\"control-sidebar control-sidebar-dark\">
    <ul class=\"nav nav-tabs nav-justified control-sidebar-tabs\">
            {% for name, tab in admin_lte_context.control_sidebar %}
                <li{% if loop.first %} class=\"active\"{% endif %}><a href=\"#control-sidebar-{{ name }}-tab\" data-toggle=\"tab\"><i class=\"{{ tab.icon }}\"></i></a></li>
            {% endfor %}
    </ul>
    <div class=\"tab-content\">
            {% for name, tab in admin_lte_context.control_sidebar %}
                <div class=\"tab-pane {% if loop.first %}active{% endif %}\" id=\"control-sidebar-{{ name }}-tab\">
                    {% if tab.controller is defined %}
                        {{ render(controller(tab.controller, {'originalRequest': app.request})) }}
                    {% elseif tab.template is defined %}
                        {% include tab.template %}
                    {% endif %}
                </div>
            {% endfor %}
    </div>
</aside>
<div class=\"control-sidebar-bg\"></div>
{% endif %}
", "AdminLTEBundle:Partials:_control-sidebar.html.twig", "/Users/say_era/Desktop/smai/vendor/kevinpapst/adminlte-bundle/Resources/views/Partials/_control-sidebar.html.twig");
    }
}
