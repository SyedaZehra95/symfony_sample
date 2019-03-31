<?php

/* AdminLTEBundle:Navbar:user.html.twig */
class __TwigTemplate_c5a936aa5212f774b816517ec7730b5271e4d78fc0f0a45cc68497ea17e7dc0d extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminLTEBundle:Navbar:user.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminLTEBundle:Navbar:user.html.twig"));

        // line 4
        $context["macro"] = $this->loadTemplate("@AdminLTE/Macros/default.html.twig", "AdminLTEBundle:Navbar:user.html.twig", 4);
        // line 5
        echo "<li class=\"dropdown user user-menu\">
    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
        ";
        // line 7
        echo $context["macro"]->macro_avatar(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 7, $this->source); })()), "avatar", []), twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 7, $this->source); })()), "username", []), "user-image");
        echo "
        <span class=\"hidden-xs\">";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 8, $this->source); })()), "name", []), "html", null, true);
        echo "</span>
    </a>
    <ul class=\"dropdown-menu\">
        <!-- User image -->
        <li class=\"user-header\">
            ";
        // line 13
        echo $context["macro"]->macro_avatar(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 13, $this->source); })()), "avatar", []), twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 13, $this->source); })()), "username", []));
        echo "
            <p>
                ";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 15, $this->source); })()), "name", []), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 15, $this->source); })()), "title", []), "html", null, true);
        echo "
                <small>";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Member since %date%", ["%date%" => twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 16, $this->source); })()), "memberSince", []), "m.Y")], "AdminLTEBundle"), "html", null, true);
        echo "</small>
            </p>
        </li>
        ";
        // line 19
        if ((isset($context["links"]) || array_key_exists("links", $context) ? $context["links"] : (function () { throw new Twig_Error_Runtime('Variable "links" does not exist.', 19, $this->source); })())) {
            // line 20
            echo "            <!-- Menu Body -->
            <li class=\"user-body\">
                ";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["links"]) || array_key_exists("links", $context) ? $context["links"] : (function () { throw new Twig_Error_Runtime('Variable "links" does not exist.', 22, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
                // line 23
                echo "                    <div class=\"col-xs-4 text-center\">
                        <a href=\"";
                // line 24
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath($this->extensions['KevinPapst\AdminLTEBundle\Twig\AdminExtension']->getRouteByAlias(twig_get_attribute($this->env, $this->source, $context["link"], "path", [])), twig_get_attribute($this->env, $this->source, $context["link"], "parameters", [])), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["link"], "title", []), "html", null, true);
                echo "</a>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "            </li>
        ";
        }
        // line 29
        echo "        ";
        if (((isset($context["showLogoutLink"]) || array_key_exists("showLogoutLink", $context) ? $context["showLogoutLink"] : (function () { throw new Twig_Error_Runtime('Variable "showLogoutLink" does not exist.', 29, $this->source); })()) || (isset($context["showProfileLink"]) || array_key_exists("showProfileLink", $context) ? $context["showProfileLink"] : (function () { throw new Twig_Error_Runtime('Variable "showProfileLink" does not exist.', 29, $this->source); })()))) {
            // line 30
            echo "            <!-- Menu Footer-->
            <li class=\"user-footer\">
                ";
            // line 32
            if ((isset($context["showProfileLink"]) || array_key_exists("showProfileLink", $context) ? $context["showProfileLink"] : (function () { throw new Twig_Error_Runtime('Variable "showProfileLink" does not exist.', 32, $this->source); })())) {
                // line 33
                echo "                    <div class=\"pull-left\">
                        <a href=\"";
                // line 34
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath($this->extensions['KevinPapst\AdminLTEBundle\Twig\AdminExtension']->getRouteByAlias("adminlte_profile"), ["id" => twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 34, $this->source); })()), "identifier", [])]), "html", null, true);
                echo "\"
                           class=\"btn btn-default btn-flat\">";
                // line 35
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Profile", [], "AdminLTEBundle"), "html", null, true);
                echo "</a>
                    </div>
                ";
            }
            // line 38
            echo "                ";
            if ((isset($context["showLogoutLink"]) || array_key_exists("showLogoutLink", $context) ? $context["showLogoutLink"] : (function () { throw new Twig_Error_Runtime('Variable "showLogoutLink" does not exist.', 38, $this->source); })())) {
                // line 39
                echo "                    <div class=\"pull-right\">
                        <a href=\"";
                // line 40
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\LogoutUrlExtension']->getLogoutPath(), "html", null, true);
                echo "\"
                           class=\"btn btn-default btn-flat\">";
                // line 41
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Sign out", [], "AdminLTEBundle"), "html", null, true);
                echo "</a>
                    </div>
                ";
            }
            // line 44
            echo "            </li>
        ";
        }
        // line 46
        echo "    </ul>
</li>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "AdminLTEBundle:Navbar:user.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 46,  130 => 44,  124 => 41,  120 => 40,  117 => 39,  114 => 38,  108 => 35,  104 => 34,  101 => 33,  99 => 32,  95 => 30,  92 => 29,  88 => 27,  77 => 24,  74 => 23,  70 => 22,  66 => 20,  64 => 19,  58 => 16,  52 => 15,  47 => 13,  39 => 8,  35 => 7,  31 => 5,  29 => 4,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# @var links \\KevinPapst\\AdminLTEBundle\\Model\\NavBarUserLink[] #}
{# @var showProfileLink bool #}
{# @var showLogoutLink bool #}
{% import \"@AdminLTE/Macros/default.html.twig\" as macro %}
<li class=\"dropdown user user-menu\">
    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
        {{ macro.avatar(user.avatar, user.username, 'user-image') }}
        <span class=\"hidden-xs\">{{ user.name }}</span>
    </a>
    <ul class=\"dropdown-menu\">
        <!-- User image -->
        <li class=\"user-header\">
            {{ macro.avatar(user.avatar, user.username) }}
            <p>
                {{ user.name }} - {{ user.title }}
                <small>{{ 'Member since %date%'|trans({'%date%': user.memberSince|date('m.Y') }, 'AdminLTEBundle') }}</small>
            </p>
        </li>
        {% if links %}
            <!-- Menu Body -->
            <li class=\"user-body\">
                {% for link in links %}
                    <div class=\"col-xs-4 text-center\">
                        <a href=\"{{ path(link.path|route_alias, link.parameters) }}\">{{ link.title }}</a>
                    </div>
                {% endfor %}
            </li>
        {% endif %}
        {% if showLogoutLink or showProfileLink %}
            <!-- Menu Footer-->
            <li class=\"user-footer\">
                {% if showProfileLink %}
                    <div class=\"pull-left\">
                        <a href=\"{{ path('adminlte_profile'|route_alias, {'id' : user.identifier}) }}\"
                           class=\"btn btn-default btn-flat\">{{ 'Profile'|trans({}, 'AdminLTEBundle') }}</a>
                    </div>
                {% endif %}
                {% if showLogoutLink %}
                    <div class=\"pull-right\">
                        <a href=\"{{ logout_path() }}\"
                           class=\"btn btn-default btn-flat\">{{ 'Sign out'|trans({}, 'AdminLTEBundle') }}</a>
                    </div>
                {% endif %}
            </li>
        {% endif %}
    </ul>
</li>
", "AdminLTEBundle:Navbar:user.html.twig", "/Users/say_era/Desktop/smai/vendor/kevinpapst/adminlte-bundle/Resources/views/Navbar/user.html.twig");
    }
}
