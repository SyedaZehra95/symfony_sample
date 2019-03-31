<?php

/* AdminLTEBundle:Navbar:notifications.html.twig */
class __TwigTemplate_e07e9b0e02b6571103991c1f7d61de48fefd8421aef9f3edddf4b7d090b0d5a0 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminLTEBundle:Navbar:notifications.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminLTEBundle:Navbar:notifications.html.twig"));

        // line 1
        echo "<li class=\"dropdown notifications-menu\">
    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
        <i class=\"far fa-bell\"></i>
        <span class=\"label label-warning\">";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new Twig_Error_Runtime('Variable "total" does not exist.', 4, $this->source); })()), "html", null, true);
        echo "</span>
    </a>
    <ul class=\"dropdown-menu\">
        <li class=\"header\">";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->transchoice("You have %total% notifications", (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new Twig_Error_Runtime('Variable "total" does not exist.', 7, $this->source); })()), ["%total%" => (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new Twig_Error_Runtime('Variable "total" does not exist.', 7, $this->source); })())], "AdminLTEBundle"), "html", null, true);
        echo "</li>
        <li>
            <ul class=\"menu\">
                ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["notifications"]) || array_key_exists("notifications", $context) ? $context["notifications"] : (function () { throw new Twig_Error_Runtime('Variable "notifications" does not exist.', 10, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["notice"]) {
            // line 11
            echo "                    <li>
                        <a href=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath($this->extensions['KevinPapst\AdminLTEBundle\Twig\AdminExtension']->getRouteByAlias("adminlte_notification"), ["id" => twig_get_attribute($this->env, $this->source, $context["notice"], "identifier", [])]), "html", null, true);
            echo "\">
                            <i class=\"";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["notice"], "icon", []), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->extensions['KevinPapst\AdminLTEBundle\Twig\AdminExtension']->getTextType(twig_get_attribute($this->env, $this->source, $context["notice"], "type", [])), "html", null, true);
            echo "\"></i> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["notice"], "message", []), "html", null, true);
            echo "
                        </a>
                    </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "            </ul>
        </li>
        <li class=\"footer\"><a href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath($this->extensions['KevinPapst\AdminLTEBundle\Twig\AdminExtension']->getRouteByAlias("adminlte_notifications"));
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("View all", [], "AdminLTEBundle"), "html", null, true);
        echo "</a></li>
    </ul>
</li>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "AdminLTEBundle:Navbar:notifications.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 19,  71 => 17,  57 => 13,  53 => 12,  50 => 11,  46 => 10,  40 => 7,  34 => 4,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<li class=\"dropdown notifications-menu\">
    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
        <i class=\"far fa-bell\"></i>
        <span class=\"label label-warning\">{{ total }}</span>
    </a>
    <ul class=\"dropdown-menu\">
        <li class=\"header\">{{ 'You have %total% notifications'|transchoice(total, {'%total%': total}, 'AdminLTEBundle') }}</li>
        <li>
            <ul class=\"menu\">
                {% for notice in notifications %}
                    <li>
                        <a href=\"{{ path('adminlte_notification'|route_alias, {'id': notice.identifier}) }}\">
                            <i class=\"{{ notice.icon }} {{ notice.type|text_type }}\"></i> {{ notice.message }}
                        </a>
                    </li>
                {% endfor %}
            </ul>
        </li>
        <li class=\"footer\"><a href=\"{{ path('adminlte_notifications'|route_alias) }}\">{{'View all'|trans({}, 'AdminLTEBundle')}}</a></li>
    </ul>
</li>
", "AdminLTEBundle:Navbar:notifications.html.twig", "/Users/say_era/Desktop/smai/vendor/kevinpapst/adminlte-bundle/Resources/views/Navbar/notifications.html.twig");
    }
}
