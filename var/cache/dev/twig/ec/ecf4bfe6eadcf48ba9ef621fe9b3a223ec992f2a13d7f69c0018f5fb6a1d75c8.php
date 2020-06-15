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

/* index.html.twig */
class __TwigTemplate_c2a2647c4a43e0a9bfb104df9c3486f65771d85675de236bf662378f8481898a extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "index.html.twig", 1);
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

        echo "Welcome to PfaffenHoffen!";
        
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
        echo "    <div style=\"display: grid; grid-template-columns: repeat(2, 1fr); padding-left: 12.5%\">
        <div class=\"fluid-container\" style=\"margin: 2%; margin-left: 5%; margin-right: 5%; grid-column: 1\">
            <div class=\"row\" style=\"margin-right: 1%\">
                <div class=\"card\" style=\"width: 100%\">
                    <div class=\"card-header\">
                        <ul class=\"nav nav-tabs card-header-tabs\" id=\"bologna-list\" role=\"tablist\">
                            <li class=\"nav-item\">
                                <a class=\"nav-link active\" href=\"#events\" role=\"tab\" aria-controls=\"events\" aria-selected=\"true\">Évènements</a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link\"  href=\"#news\" role=\"tab\" aria-controls=\"news\" aria-selected=\"false\">Actualités</a>
                            </li>
                        </ul>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"tab-content mt-3\">
                            <div class=\"tab-pane active\" id=\"events\" role=\"tabpanel\">
                                <div class=\"container card-text text-justify\">
                                    ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 24, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 25
            echo "                                        <div class=\"card\">
                                            <div class=\"card-header\">
                                                ";
            // line 27
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "date", [], "any", false, false, false, 27), "d F Y"), "html", null, true);
            echo "
                                            </div>
                                            <div class=\"card-body\">
                                                <h5 class=\"card-title\">";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "title", [], "any", false, false, false, 30), "html", null, true);
            echo "</h5>
                                                <p class=\"card-text\">";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["event"], "description", [], "any", false, false, false, 31), "html", null, true);
            echo "</p>
                                            </div>
                                        </div>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "                                </div>
                            </div>

                            <div class=\"tab-pane\" id=\"news\" role=\"tabpanel\" aria-labelledby=\"history-tab\">
                                <div class=\"container card-text text-justify\">
                                    ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["news"]) || array_key_exists("news", $context) ? $context["news"] : (function () { throw new RuntimeError('Variable "news" does not exist.', 40, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["new"]) {
            // line 41
            echo "                                        <div class=\"card\">
                                            <div class=\"card-body\">
                                                <h5 class=\"card-title\">";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["new"], "title", [], "any", false, false, false, 43), "html", null, true);
            echo "</h5>
                                                <p class=\"card-text\">";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["new"], "description", [], "any", false, false, false, 44), "html", null, true);
            echo "</p>
                                            </div>
                                        </div>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['new'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <iframe src=\"https://www.meteoblue.com/en/weather/widget/three/pfaffenhoffen_france_2987431?geoloc=fixed&nocurrent=0&noforecast=0&days=4&tempunit=CELSIUS&windunit=KILOMETER_PER_HOUR&layout=image\"  frameborder=\"0\" scrolling=\"NO\" allowtransparency=\"true\" sandbox=\"allow-same-origin allow-scripts allow-popups allow-popups-to-escape-sandbox\" style=\"margin-top: 2%; width: 460px; height: 566px; grid-column: 2\"></iframe><div><!-- DO NOT REMOVE THIS LINK --><a href=\"https://www.meteoblue.com/en/weather/week/pfaffenhoffen_france_2987431?utm_source=weather_widget&utm_medium=linkus&utm_content=three&utm_campaign=Weather%2BWidget\" target=\"_blank\"></a></div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 48,  155 => 44,  151 => 43,  147 => 41,  143 => 40,  136 => 35,  126 => 31,  122 => 30,  116 => 27,  112 => 25,  108 => 24,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Welcome to PfaffenHoffen!{% endblock %}

{% block body %}
    <div style=\"display: grid; grid-template-columns: repeat(2, 1fr); padding-left: 12.5%\">
        <div class=\"fluid-container\" style=\"margin: 2%; margin-left: 5%; margin-right: 5%; grid-column: 1\">
            <div class=\"row\" style=\"margin-right: 1%\">
                <div class=\"card\" style=\"width: 100%\">
                    <div class=\"card-header\">
                        <ul class=\"nav nav-tabs card-header-tabs\" id=\"bologna-list\" role=\"tablist\">
                            <li class=\"nav-item\">
                                <a class=\"nav-link active\" href=\"#events\" role=\"tab\" aria-controls=\"events\" aria-selected=\"true\">Évènements</a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link\"  href=\"#news\" role=\"tab\" aria-controls=\"news\" aria-selected=\"false\">Actualités</a>
                            </li>
                        </ul>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"tab-content mt-3\">
                            <div class=\"tab-pane active\" id=\"events\" role=\"tabpanel\">
                                <div class=\"container card-text text-justify\">
                                    {% for event in events %}
                                        <div class=\"card\">
                                            <div class=\"card-header\">
                                                {{ event.date | date('d F Y') }}
                                            </div>
                                            <div class=\"card-body\">
                                                <h5 class=\"card-title\">{{ event.title }}</h5>
                                                <p class=\"card-text\">{{ event.description }}</p>
                                            </div>
                                        </div>
                                    {% endfor %}
                                </div>
                            </div>

                            <div class=\"tab-pane\" id=\"news\" role=\"tabpanel\" aria-labelledby=\"history-tab\">
                                <div class=\"container card-text text-justify\">
                                    {% for new in news %}
                                        <div class=\"card\">
                                            <div class=\"card-body\">
                                                <h5 class=\"card-title\">{{ new.title }}</h5>
                                                <p class=\"card-text\">{{ new.description }}</p>
                                            </div>
                                        </div>
                                    {% endfor %}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <iframe src=\"https://www.meteoblue.com/en/weather/widget/three/pfaffenhoffen_france_2987431?geoloc=fixed&nocurrent=0&noforecast=0&days=4&tempunit=CELSIUS&windunit=KILOMETER_PER_HOUR&layout=image\"  frameborder=\"0\" scrolling=\"NO\" allowtransparency=\"true\" sandbox=\"allow-same-origin allow-scripts allow-popups allow-popups-to-escape-sandbox\" style=\"margin-top: 2%; width: 460px; height: 566px; grid-column: 2\"></iframe><div><!-- DO NOT REMOVE THIS LINK --><a href=\"https://www.meteoblue.com/en/weather/week/pfaffenhoffen_france_2987431?utm_source=weather_widget&utm_medium=linkus&utm_content=three&utm_campaign=Weather%2BWidget\" target=\"_blank\"></a></div>
    </div>

{% endblock %}", "index.html.twig", "C:\\Users\\HHELI\\OneDrive\\Bureau\\vitrine_pfaffenhoffen\\templates\\index.html.twig");
    }
}
