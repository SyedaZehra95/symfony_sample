<?php

/* AdminLTEBundle:Navbar:messages.html.twig */
class __TwigTemplate_533d004df6e71ddfe34c47b88a71b43b7aacb683eb3b194c9c4850b6839e8628 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminLTEBundle:Navbar:messages.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminLTEBundle:Navbar:messages.html.twig"));

        // line 1
        $context["macro"] = $this->loadTemplate("@AdminLTE/Macros/default.html.twig", "AdminLTEBundle:Navbar:messages.html.twig", 1);
        // line 2
        echo "<li class=\"dropdown messages-menu\">
    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
        <i class=\"far fa-envelope\"></i>
        <span class=\"label label-success\">";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new Twig_Error_Runtime('Variable "total" does not exist.', 5, $this->source); })()), "html", null, true);
        echo "</span>
    </a>
    <ul class=\"dropdown-menu\">
        <li class=\"header\">";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->transchoice("You have %total% messages", (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new Twig_Error_Runtime('Variable "total" does not exist.', 8, $this->source); })()), ["%total%" => (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new Twig_Error_Runtime('Variable "total" does not exist.', 8, $this->source); })())], "AdminLTEBundle"), "html", null, true);
        echo "</li>
        <li>
            <ul class=\"menu\">
                ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 11, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
            // line 12
            echo "                    <li>
                        <a href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath($this->extensions['KevinPapst\AdminLTEBundle\Twig\AdminExtension']->getRouteByAlias("adminlte_message"), ["id" => twig_get_attribute($this->env, $this->source, $context["msg"], "identifier", [])]), "html", null, true);
            echo "\">
                            <div class=\"pull-left\">
                                ";
            // line 15
            echo $context["macro"]->macro_avatar(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["msg"], "from", []), "avatar", []), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["msg"], "from", []), "username", []));
            echo "
                            </div>
                            <h4>
                                ";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["msg"], "from", []), "username", []), "html", null, true);
            echo "
                                <small><i class=\"far fa-clock\"></i> ";
            // line 19
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["msg"], "sentAt", []), "d.m.Y H:i"), "html", null, true);
            echo "</small>
                            </h4>
                            <p>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["msg"], "subject", []), "html", null, true);
            echo "</p>
                        </a>
                    </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "            </ul>
        </li>
        <li class=\"footer\"><a href=\"";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath($this->extensions['KevinPapst\AdminLTEBundle\Twig\AdminExtension']->getRouteByAlias("adminlte_messages"));
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
        return "AdminLTEBundle:Navbar:messages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 27,  85 => 25,  75 => 21,  70 => 19,  66 => 18,  60 => 15,  55 => 13,  52 => 12,  48 => 11,  42 => 8,  36 => 5,  31 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import \"@AdminLTE/Macros/default.html.twig\" as macro %}
<li class=\"dropdown messages-menu\">
    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
        <i class=\"far fa-envelope\"></i>
        <span class=\"label label-success\">{{ total }}</span>
    </a>
    <ul class=\"dropdown-menu\">
        <li class=\"header\">{{ 'You have %total% messages'|transchoice(total, {'%total%':total}, 'AdminLTEBundle') }}</li>
        <li>
            <ul class=\"menu\">
                {% for msg in messages %}
                    <li>
                        <a href=\"{{ path('adminlte_message'|route_alias, {'id': msg.identifier}) }}\">
                            <div class=\"pull-left\">
                                {{ macro.avatar(msg.from.avatar, msg.from.username) }}
                            </div>
                            <h4>
                                {{ msg.from.username }}
                                <small><i class=\"far fa-clock\"></i> {{ msg.sentAt|date('d.m.Y H:i') }}</small>
                            </h4>
                            <p>{{ msg.subject }}</p>
                        </a>
                    </li>
                {% endfor %}
            </ul>
        </li>
        <li class=\"footer\"><a href=\"{{ path('adminlte_messages'|route_alias) }}\">{{'View all'|trans({}, 'AdminLTEBundle')}}</a></li>
    </ul>
</li>
", "AdminLTEBundle:Navbar:messages.html.twig", "/Users/say_era/Desktop/smai/vendor/kevinpapst/adminlte-bundle/Resources/views/Navbar/messages.html.twig");
    }
}
