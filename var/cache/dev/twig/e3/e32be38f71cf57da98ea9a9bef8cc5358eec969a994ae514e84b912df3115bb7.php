<?php

/* AdminLTEBundle:Navbar:tasks.html.twig */
class __TwigTemplate_9ce8af9a70be9a9f62f0438061038732d332bfcc1c296283ba47ed3f1938c1d5 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminLTEBundle:Navbar:tasks.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminLTEBundle:Navbar:tasks.html.twig"));

        // line 1
        echo "<li class=\"dropdown tasks-menu\">
    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
        <i class=\"far fa-flag\"></i>
        <span class=\"label label-danger\">";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new Twig_Error_Runtime('Variable "total" does not exist.', 4, $this->source); })()), "html", null, true);
        echo "</span>
    </a>
    <ul class=\"dropdown-menu\">
        <li class=\"header\">";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->transchoice("You have %total% tasks", (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new Twig_Error_Runtime('Variable "total" does not exist.', 7, $this->source); })()), ["%total%" => (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new Twig_Error_Runtime('Variable "total" does not exist.', 7, $this->source); })())], "AdminLTEBundle"), "html", null, true);
        echo "</li>
        <li>
            <ul class=\"menu\">
                ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tasks"]) || array_key_exists("tasks", $context) ? $context["tasks"] : (function () { throw new Twig_Error_Runtime('Variable "tasks" does not exist.', 10, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["task"]) {
            // line 11
            echo "                    <li>
                        <a href=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath($this->extensions['KevinPapst\AdminLTEBundle\Twig\AdminExtension']->getRouteByAlias("adminlte_task"), ["id" => twig_get_attribute($this->env, $this->source, $context["task"], "identifier", [])]), "html", null, true);
            echo "\">
                            <h3>
                                ";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "title", []), "html", null, true);
            echo "
                                <small class=\"pull-right\">";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "progress", []), "html", null, true);
            echo "%</small>
                            </h3>
                            <div class=\"progress xs\">
                                <div class=\"progress-bar progress-bar-";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "color", []), "html", null, true);
            echo "\"
                                     style=\"width: ";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "progress", []), "html", null, true);
            echo "%\"
                                     role=\"progressbar\"
                                     aria-valuenow=\"";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["task"], "progress", []), "html", null, true);
            echo "\"
                                     aria-valuemin=\"0\"
                                     aria-valuemax=\"100\">
                                    <span class=\"sr-only\">";
            // line 24
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("%progress%% Complete", ["%progress%" => twig_get_attribute($this->env, $this->source, $context["task"], "progress", [])], "AdminLTEBundle"), "html", null, true);
            echo "</span>
                                </div>
                            </div>
                        </a>
                    </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['task'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "            </ul>
        <li class=\"footer\">
            <a href=\"";
        // line 32
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath($this->extensions['KevinPapst\AdminLTEBundle\Twig\AdminExtension']->getRouteByAlias("adminlte_tasks"));
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("View all", [], "AdminLTEBundle"), "html", null, true);
        echo "</a>
        </li>
    </ul>
</li>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "AdminLTEBundle:Navbar:tasks.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 32,  95 => 30,  83 => 24,  77 => 21,  72 => 19,  68 => 18,  62 => 15,  58 => 14,  53 => 12,  50 => 11,  46 => 10,  40 => 7,  34 => 4,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<li class=\"dropdown tasks-menu\">
    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
        <i class=\"far fa-flag\"></i>
        <span class=\"label label-danger\">{{ total }}</span>
    </a>
    <ul class=\"dropdown-menu\">
        <li class=\"header\">{{ 'You have %total% tasks' |transchoice(total, {'%total%':total}, 'AdminLTEBundle') }}</li>
        <li>
            <ul class=\"menu\">
                {% for task in tasks %}
                    <li>
                        <a href=\"{{ path('adminlte_task'|route_alias, {'id': task.identifier}) }}\">
                            <h3>
                                {{ task.title }}
                                <small class=\"pull-right\">{{ task.progress }}%</small>
                            </h3>
                            <div class=\"progress xs\">
                                <div class=\"progress-bar progress-bar-{{ task.color }}\"
                                     style=\"width: {{ task.progress }}%\"
                                     role=\"progressbar\"
                                     aria-valuenow=\"{{ task.progress }}\"
                                     aria-valuemin=\"0\"
                                     aria-valuemax=\"100\">
                                    <span class=\"sr-only\">{{ '%progress%% Complete'|trans({'%progress%':task.progress}, 'AdminLTEBundle') }}</span>
                                </div>
                            </div>
                        </a>
                    </li>
                {%  endfor  %}
            </ul>
        <li class=\"footer\">
            <a href=\"{{ path('adminlte_tasks'|route_alias) }}\">{{'View all'|trans({}, 'AdminLTEBundle')}}</a>
        </li>
    </ul>
</li>
", "AdminLTEBundle:Navbar:tasks.html.twig", "/Users/say_era/Desktop/smai/vendor/kevinpapst/adminlte-bundle/Resources/views/Navbar/tasks.html.twig");
    }
}
