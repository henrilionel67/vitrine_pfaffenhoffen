<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* contact/news.html.twig */
class __TwigTemplate_0c2e46783ad689e77f539fce0118f4a09343a6d5384ac7e93dd19037b19a0f85 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/news.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/news.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "contact/news.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Contact";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <!--Section: Contact v.1-->
    <section class=\"section pb-5\" style=\"padding-top: 48px\">
        <div class=\"card mb-3\" style=\"width: 80%; margin-left: 10%; margin-top: 16px; background-color: #f8f9fa\">
            <div class=\"row\">
                <div class=\"col-sm-6\">
                    <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d21006.993407488335!2d7.581802926432687!3d48.841538674278986!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4796976c888ef021%3A0x6fd4b554a3668181!2sPfaffenhoffen%2C%2067350%20Val-de-Moder!5e0!3m2!1sfr!2sfr!4v1584710653890!5m2!1sfr!2sfr\" width=\"100%\" height=\"100%\" frameborder=\"0\" style=\"border-right-style: solid; border-right-width: thick;\" allowfullscreen=\"\" aria-hidden=\"false\" tabindex=\"0\"></iframe>
                </div>
                <div class=\"col-sm-6\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title text-center\">
                            <i class=\"fas fa-envelope fa-3x align-middle\" style=\"color: #2591e0 !important;\"></i>
                            Contact Us
                        </h5>
                        <p class=\"card-text\">
                            ";
        // line 20
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), 'form_start');
        echo "
                            <i class=\"fas fa-user fa-lg\"></i>
                            ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "name", [], "any", false, false, false, 22), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "John Smith"]]);
        echo "
                            <i class=\"fas fa-at fa-lg\" style=\"margin-top: 20px\"></i>
                            ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "email", [], "any", false, false, false, 24), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "example@domain.com"]]);
        echo "
                            <i class=\"fas fa-envelope-open-text fa-lg\" style=\"margin-top: 20px\"></i>
                            ";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "message", [], "any", false, false, false, 26), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Your message..."]]);
        echo "
                            <button type=\"submit\" class=\"btn btn-outline-primary\" style=\"margin-top: 20px;padding-left: 30px;padding-bottom: 10px;padding-top: 10px;padding-right: 30px;\">Send</button>
                            ";
        // line 28
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), 'form_end');
        echo "
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Section: Contact v.1-->











";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "contact/news.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 28,  119 => 26,  114 => 24,  109 => 22,  104 => 20,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Contact{% endblock title %}

{% block body %}
    <!--Section: Contact v.1-->
    <section class=\"section pb-5\" style=\"padding-top: 48px\">
        <div class=\"card mb-3\" style=\"width: 80%; margin-left: 10%; margin-top: 16px; background-color: #f8f9fa\">
            <div class=\"row\">
                <div class=\"col-sm-6\">
                    <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d21006.993407488335!2d7.581802926432687!3d48.841538674278986!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4796976c888ef021%3A0x6fd4b554a3668181!2sPfaffenhoffen%2C%2067350%20Val-de-Moder!5e0!3m2!1sfr!2sfr!4v1584710653890!5m2!1sfr!2sfr\" width=\"100%\" height=\"100%\" frameborder=\"0\" style=\"border-right-style: solid; border-right-width: thick;\" allowfullscreen=\"\" aria-hidden=\"false\" tabindex=\"0\"></iframe>
                </div>
                <div class=\"col-sm-6\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title text-center\">
                            <i class=\"fas fa-envelope fa-3x align-middle\" style=\"color: #2591e0 !important;\"></i>
                            Contact Us
                        </h5>
                        <p class=\"card-text\">
                            {{ form_start(form) }}
                            <i class=\"fas fa-user fa-lg\"></i>
                            {{ form_widget(form.name, {'attr': { 'class': 'form-control', 'placeholder': 'John Smith'}}) }}
                            <i class=\"fas fa-at fa-lg\" style=\"margin-top: 20px\"></i>
                            {{ form_widget(form.email, {'attr': { 'class': 'form-control', 'placeholder': 'example@domain.com'}}) }}
                            <i class=\"fas fa-envelope-open-text fa-lg\" style=\"margin-top: 20px\"></i>
                            {{ form_widget(form.message, {'attr': { 'class': 'form-control', 'placeholder': 'Your message...'}}) }}
                            <button type=\"submit\" class=\"btn btn-outline-primary\" style=\"margin-top: 20px;padding-left: 30px;padding-bottom: 10px;padding-top: 10px;padding-right: 30px;\">Send</button>
                            {{ form_end(form) }}
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Section: Contact v.1-->











{% endblock %}
", "contact/news.html.twig", "C:\\Users\\amaur\\Desktop\\vitrine_pfaffenhoffen\\templates\\contact\\news.html.twig");
    }
}
