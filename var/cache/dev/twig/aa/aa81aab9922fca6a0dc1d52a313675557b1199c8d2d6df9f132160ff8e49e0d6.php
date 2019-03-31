<?php

/* vich_uploader_image.html.twig */
class __TwigTemplate_b3181a7d4c9f1fa05388557ffb9080768c49c88d1bc04d1c8b7bc9fbd801a280 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "vich_uploader_image.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "vich_uploader_image.html.twig"));

        // line 1
        echo "<a href=\"#\" class=\"easyadmin-thumbnail\" data-featherlight=\"#easyadmin-lightbox-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 1, $this->source); })()), "id", []), "html", null, true);
        echo "\" data-featherlight-close-on-click=\"anywhere\">
    ";
        // line 3
        echo "    <img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset((isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 3, $this->source); })()), "file", "App\\Entity\\Image"), "html", null, true);
        echo "\">
</a>

<div id=\"easyadmin-lightbox-";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 6, $this->source); })()), "id", []), "html", null, true);
        echo "\" class=\"easyadmin-lightbox\">
    ";
        // line 8
        echo "    <img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset((isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new Twig_Error_Runtime('Variable "item" does not exist.', 8, $this->source); })()), "file", "App\\Entity\\Image"), "html", null, true);
        echo "\">
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "vich_uploader_image.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  41 => 6,  34 => 3,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<a href=\"#\" class=\"easyadmin-thumbnail\" data-featherlight=\"#easyadmin-lightbox-{{ item.id }}\" data-featherlight-close-on-click=\"anywhere\">
    {# the second parameter is the name of the property with the UploadableField annotation #}
    <img src=\"{{ vich_uploader_asset(item, 'file', 'App\\\\Entity\\\\Image') }}\">
</a>

<div id=\"easyadmin-lightbox-{{ item.id }}\" class=\"easyadmin-lightbox\">
    {# the second parameter is the name of the property with the UploadableField annotation #}
    <img src=\"{{ vich_uploader_asset(item, 'file', 'App\\\\Entity\\\\Image') }}\">
</div>", "vich_uploader_image.html.twig", "/Users/say_era/Desktop/smai/templates/vich_uploader_image.html.twig");
    }
}
