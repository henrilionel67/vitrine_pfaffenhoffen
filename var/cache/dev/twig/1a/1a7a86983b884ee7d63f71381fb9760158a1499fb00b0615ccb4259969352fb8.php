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

/* history.html.twig */
class __TwigTemplate_725a2b3619c964e0f0ada14fd9980c2a0495736ee3bb103f2f81ecd700d383c0 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "history.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "history.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "history.html.twig", 1);
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
        echo "    <div class=\"fluid-container\" style=\"margin: 2%; margin-left: 5%; margin-right: 5%\">
        <div class=\"row\">
                <div class=\"card\" style=\"width: 100%\">
                    <div class=\"card-header\">
                        <ul class=\"nav nav-tabs card-header-tabs\" id=\"bologna-list\" role=\"tablist\">
                            <li class=\"nav-item\">
                                <a class=\"nav-link active\" href=\"#Antiquite\" role=\"tab\" aria-controls=\"Antiquite\" aria-selected=\"true\">Antiquité</a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link\"  href=\"#Moyen_Age\" role=\"tab\" aria-controls=\"Moyen_Age\" aria-selected=\"false\">Moyen Âge</a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"#Renaissance\" role=\"tab\" aria-controls=\"Renaissance\" aria-selected=\"false\">Renaissance</a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"#La_guerre_de_Trente_Ans\" role=\"tab\" aria-controls=\"La_guerre_de_Trente_Ans\" aria-selected=\"false\">La guerre de Trente Ans</a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"#Heraldique\" role=\"tab\" aria-controls=\"Heraldique\" aria-selected=\"false\">Héraldique</a>
                            </li>
                        </ul>
                    </div>
                    <div class=\"card-body\">
                        <h4 class=\"card-title\">Pfaffenhoffen</h4>
                        <h6 class=\"card-subtitle mb-2\">Grand Est, France</h6>

                        <div class=\"tab-content mt-3\">
                            <div class=\"tab-pane active\" id=\"Antiquite\" role=\"tabpanel\">
                                <p class=\"card-text\">
                                    Le bourg de Pfaffenhoffen s'est développé autour d'un croisement de deux chemins celtiques,
                                    l'un longeant la Moder d'est en ouest, l'autre reliant Brumath à la région de Niederbronn.
                                </p>
                            </div>

                            <div class=\"tab-pane\" id=\"Moyen_Age\" role=\"tabpanel\" aria-labelledby=\"history-tab\">
                                <p class=\"card-text text-justify\">
                                    Dès les VIIe - IXe siècles, l'abbaye bénédictine de Wissembourg possédait d'importantes propriétés en Alsace,
                                    au Palatinat et en Lorraine. Le nom de Pfaffenhoffen est composé de deux particules: « Pfaff » et « hoffen ».
                                    En langue germanique ancienne, Pfaff désignait un ecclésiastique, un clerc, hoffen se traduit par cour, ferme.
                                    Pfaffenhoffen était donc une cour domaniale d'un couvent, d'une abbaye. Un acte de donation de cette vénérable institution,
                                    cite, en l'an 773, pour la première fois, le domaine de « Matra Villa » comprenant, sans doute, les villages jumeaux Pfaffenhoffen et
                                    Niedermodern. Par la suite, les moines de Wissembourg y fondèrent l'église Saints-Pierre-et-Paul.
                                </p>
                                <p class=\"card-text text-justify\">
                                    En 1017, « Paphenhoven » est mentionné, en tant que « Bien d'Empire » (Reichslehen) dans un acte de l'empereur Henri II.
                                    En 1334, Louis III de Lichtenberg possédait la moitié de Pfaffenhoffen et de Niedermodern, conjointement avec les sires d'Ochenstein,
                                    qui dès 1293, avaient été investis de leur part par le roi Adolphe de Nassau, au titre de fief de la noblesse impériale.
                                </p>
                            </div>

                            <div class=\"tab-pane\" id=\"Renaissance\" role=\"tabpanel\" aria-labelledby=\"deals-tab\">
                                <p class=\"card-text text-justify\">
                                    Depuis le XVIe siècle, Pfaffenhoffen est un centre commercial important de la région. Les marchés hebdomadaires et
                                    les foires trimestrielles attirèrent toujours une foule d'acheteurs et de marchands. Le commerce du cuir, de drap, de
                                    poterie était florissant. La réglementation locale de ce commerce fut consignée dès 1513 dans le Fleckenbuch de Pfaffenhoffen.
                                    Au milieu du XVIIe siècle, Pfaffenhoffen était le siège de la confrérie des bergers de près de 200 communes de la Basse-Alsace
                                    et détenait ainsi le monopole du commerce de la laine. Les paysans, venus d'une trentaine de villages des environs, y proposaient
                                    leurs grains, leur beurre et d'autres produits de la ferme. De nombreux artisans, restaurateurs, brasseurs profitèrent de cette
                                    activité et contribuèrent à la renommée du bourg.
                                </p>
                                <p class=\"card-text text-justify\">
                                    L'église Saints-Pierre-et-Paul, fondée par les moines de Wissembourg dès le VIIIe ou IXe siècle, était devenue un archiprêtré
                                    et l'église-mère de six communes environnantes. En 1545, la Réforme fut introduite dans le comté de Hanau-Lichtenberg. Puis le
                                    8 avril 1546, le Premier synode protestant du comté de Hanau-Lichtenberg s'est tenu dans le bourg dans le but d'organiser le
                                    nouveau culte. Sur ordre de Louis XIV, l'église Saints-Pierre-et-Paul est déclarée simultanée le 28 juillet 1685. Elle accueillit
                                    les deux cultes jusqu'à l'inauguration de la nouvelle église protestante, le 6 septembre 1885. La population de Pfaffenhoffen a
                                    été éprouvée par tous les malheurs et les destructions causés par les guerres sévissant dans la région du XIVe au XVIIIe siècle :
                                    guerre de Cent Ans, des Paysans, des Religions.
                                </p>
                            </div>

                            <div class=\"tab-pane\" id=\"La_guerre_de_Trente_Ans\" role=\"tabpanel\" aria-labelledby=\"deals-tab\">
                                <p class=\"card-text text-justify\">
                                    Pfaffenhoffen a été particulièrement éprouvée par la guerre de Trente Ans, en 1632 une bataille décisive
                                    ayant eu lieu sur les hauteurs au sud du bourg. Les guerres de la Succession d'Espagne et les guerres de la Révolution
                                    apportèrent également leurs lots de souffrances à la population.
                                </p>
                            </div>

                            <div class=\"tab-pane\" id=\"Heraldique\" role=\"tabpanel\" aria-labelledby=\"deals-tab\">
                                <p class=\"card-text\">
                                    <table style=\"border-spacing:4px; margin:1em -4px 3px;\" data-is-image-wrapper=\"false\">
                                        <tbody>
                                            <tr>
                                                <th style=\"border:0px solid #aaa; vertical-align:middle; color:#fff; padding:8px 5px\">
                                                    <div style=\"width:150px;\">
                                                        <div class=\"image_wrapper linked_img_wrapper narrow_thumb\" style=\"display: block;\">
                                                            <div class=\"img_container\" ng-click=\"\$root.galleryOpen(\$event)\">
                                                                <img width=\"100\" height=\"110\" src=\"images/blason.png\">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </th>
                                                <td style=\"width:100%; border:0px solid #aaa; vertical-align:middle; padding:8px;\">
                                                    <p>
                                                        Les armes de Pfaffenhoffen se blasonnent ainsi :
                                                        « D'azur à deux clefs versées et passées en sautoir, celle en bande d'argent et celle en barre d'or. ».
                                                    </p>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "history.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Welcome to PfaffenHoffen!{% endblock %}

{% block body %}
    <div class=\"fluid-container\" style=\"margin: 2%; margin-left: 5%; margin-right: 5%\">
        <div class=\"row\">
                <div class=\"card\" style=\"width: 100%\">
                    <div class=\"card-header\">
                        <ul class=\"nav nav-tabs card-header-tabs\" id=\"bologna-list\" role=\"tablist\">
                            <li class=\"nav-item\">
                                <a class=\"nav-link active\" href=\"#Antiquite\" role=\"tab\" aria-controls=\"Antiquite\" aria-selected=\"true\">Antiquité</a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link\"  href=\"#Moyen_Age\" role=\"tab\" aria-controls=\"Moyen_Age\" aria-selected=\"false\">Moyen Âge</a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"#Renaissance\" role=\"tab\" aria-controls=\"Renaissance\" aria-selected=\"false\">Renaissance</a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"#La_guerre_de_Trente_Ans\" role=\"tab\" aria-controls=\"La_guerre_de_Trente_Ans\" aria-selected=\"false\">La guerre de Trente Ans</a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"nav-link\" href=\"#Heraldique\" role=\"tab\" aria-controls=\"Heraldique\" aria-selected=\"false\">Héraldique</a>
                            </li>
                        </ul>
                    </div>
                    <div class=\"card-body\">
                        <h4 class=\"card-title\">Pfaffenhoffen</h4>
                        <h6 class=\"card-subtitle mb-2\">Grand Est, France</h6>

                        <div class=\"tab-content mt-3\">
                            <div class=\"tab-pane active\" id=\"Antiquite\" role=\"tabpanel\">
                                <p class=\"card-text\">
                                    Le bourg de Pfaffenhoffen s'est développé autour d'un croisement de deux chemins celtiques,
                                    l'un longeant la Moder d'est en ouest, l'autre reliant Brumath à la région de Niederbronn.
                                </p>
                            </div>

                            <div class=\"tab-pane\" id=\"Moyen_Age\" role=\"tabpanel\" aria-labelledby=\"history-tab\">
                                <p class=\"card-text text-justify\">
                                    Dès les VIIe - IXe siècles, l'abbaye bénédictine de Wissembourg possédait d'importantes propriétés en Alsace,
                                    au Palatinat et en Lorraine. Le nom de Pfaffenhoffen est composé de deux particules: « Pfaff » et « hoffen ».
                                    En langue germanique ancienne, Pfaff désignait un ecclésiastique, un clerc, hoffen se traduit par cour, ferme.
                                    Pfaffenhoffen était donc une cour domaniale d'un couvent, d'une abbaye. Un acte de donation de cette vénérable institution,
                                    cite, en l'an 773, pour la première fois, le domaine de « Matra Villa » comprenant, sans doute, les villages jumeaux Pfaffenhoffen et
                                    Niedermodern. Par la suite, les moines de Wissembourg y fondèrent l'église Saints-Pierre-et-Paul.
                                </p>
                                <p class=\"card-text text-justify\">
                                    En 1017, « Paphenhoven » est mentionné, en tant que « Bien d'Empire » (Reichslehen) dans un acte de l'empereur Henri II.
                                    En 1334, Louis III de Lichtenberg possédait la moitié de Pfaffenhoffen et de Niedermodern, conjointement avec les sires d'Ochenstein,
                                    qui dès 1293, avaient été investis de leur part par le roi Adolphe de Nassau, au titre de fief de la noblesse impériale.
                                </p>
                            </div>

                            <div class=\"tab-pane\" id=\"Renaissance\" role=\"tabpanel\" aria-labelledby=\"deals-tab\">
                                <p class=\"card-text text-justify\">
                                    Depuis le XVIe siècle, Pfaffenhoffen est un centre commercial important de la région. Les marchés hebdomadaires et
                                    les foires trimestrielles attirèrent toujours une foule d'acheteurs et de marchands. Le commerce du cuir, de drap, de
                                    poterie était florissant. La réglementation locale de ce commerce fut consignée dès 1513 dans le Fleckenbuch de Pfaffenhoffen.
                                    Au milieu du XVIIe siècle, Pfaffenhoffen était le siège de la confrérie des bergers de près de 200 communes de la Basse-Alsace
                                    et détenait ainsi le monopole du commerce de la laine. Les paysans, venus d'une trentaine de villages des environs, y proposaient
                                    leurs grains, leur beurre et d'autres produits de la ferme. De nombreux artisans, restaurateurs, brasseurs profitèrent de cette
                                    activité et contribuèrent à la renommée du bourg.
                                </p>
                                <p class=\"card-text text-justify\">
                                    L'église Saints-Pierre-et-Paul, fondée par les moines de Wissembourg dès le VIIIe ou IXe siècle, était devenue un archiprêtré
                                    et l'église-mère de six communes environnantes. En 1545, la Réforme fut introduite dans le comté de Hanau-Lichtenberg. Puis le
                                    8 avril 1546, le Premier synode protestant du comté de Hanau-Lichtenberg s'est tenu dans le bourg dans le but d'organiser le
                                    nouveau culte. Sur ordre de Louis XIV, l'église Saints-Pierre-et-Paul est déclarée simultanée le 28 juillet 1685. Elle accueillit
                                    les deux cultes jusqu'à l'inauguration de la nouvelle église protestante, le 6 septembre 1885. La population de Pfaffenhoffen a
                                    été éprouvée par tous les malheurs et les destructions causés par les guerres sévissant dans la région du XIVe au XVIIIe siècle :
                                    guerre de Cent Ans, des Paysans, des Religions.
                                </p>
                            </div>

                            <div class=\"tab-pane\" id=\"La_guerre_de_Trente_Ans\" role=\"tabpanel\" aria-labelledby=\"deals-tab\">
                                <p class=\"card-text text-justify\">
                                    Pfaffenhoffen a été particulièrement éprouvée par la guerre de Trente Ans, en 1632 une bataille décisive
                                    ayant eu lieu sur les hauteurs au sud du bourg. Les guerres de la Succession d'Espagne et les guerres de la Révolution
                                    apportèrent également leurs lots de souffrances à la population.
                                </p>
                            </div>

                            <div class=\"tab-pane\" id=\"Heraldique\" role=\"tabpanel\" aria-labelledby=\"deals-tab\">
                                <p class=\"card-text\">
                                    <table style=\"border-spacing:4px; margin:1em -4px 3px;\" data-is-image-wrapper=\"false\">
                                        <tbody>
                                            <tr>
                                                <th style=\"border:0px solid #aaa; vertical-align:middle; color:#fff; padding:8px 5px\">
                                                    <div style=\"width:150px;\">
                                                        <div class=\"image_wrapper linked_img_wrapper narrow_thumb\" style=\"display: block;\">
                                                            <div class=\"img_container\" ng-click=\"\$root.galleryOpen(\$event)\">
                                                                <img width=\"100\" height=\"110\" src=\"images/blason.png\">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </th>
                                                <td style=\"width:100%; border:0px solid #aaa; vertical-align:middle; padding:8px;\">
                                                    <p>
                                                        Les armes de Pfaffenhoffen se blasonnent ainsi :
                                                        « D'azur à deux clefs versées et passées en sautoir, celle en bande d'argent et celle en barre d'or. ».
                                                    </p>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>

{% endblock %}", "history.html.twig", "C:\\Users\\HHELI\\OneDrive\\Bureau\\vitrine_pfaffenhoffen\\templates\\history.html.twig");
    }
}
