<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* home/index.html.twig */
class __TwigTemplate_539bd0b0ffa9f98425efdfc08181d89d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Wikicampers - Les véhicules";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "
<!--Bandeau de bienvenu lorsqu'il n'y a rien, sinon bandeau de succès-->
";
        // line 8
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["vehicles"]) || array_key_exists("vehicles", $context) ? $context["vehicles"] : (function () { throw new RuntimeError('Variable "vehicles" does not exist.', 8, $this->source); })()))) {
            // line 9
            yield "    <div id=\"no-vehicles\" role=\"alert\">
        Aucun véhicule n'a été ajouté pour le moment.
        <a href=\"/create-vehicle\" id=\"add-vehicule-link\">En ajouter un</a>
    </div>
";
        } elseif ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source,         // line 13
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "flashes", ["success"], "method", false, false, false, 13)) > 0)) {
            // line 14
            yield "    <div id=\"no-vehicles\" role=\"alert\">
        ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 15, $this->source); })()), "flashes", ["success"], "method", false, false, false, 15));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 16
                yield "            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            yield "    </div>
";
        } else {
            // line 20
            yield "    <div id=\"no-vehicles\" role=\"alert\">
        ";
            // line 21
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["vehicles"]) || array_key_exists("vehicles", $context) ? $context["vehicles"] : (function () { throw new RuntimeError('Variable "vehicles" does not exist.', 21, $this->source); })())), "html", null, true);
            yield " véhicules disponibles à la location.
        <a href=\"/create-vehicle\" id=\"add-vehicule-link\">En ajouter un</a>
    </div>
";
        }
        // line 25
        yield "
<div class=\"filters-container\">
    <img src=\"";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/background-camping-car.jpeg"), "html", null, true);
        yield "\" alt=\"Camping car\" width=\"100%\" id=\"background-homepage\">
    <div id=\"left-pannel\"></div>

    <div class=\"filters\">
        <h1 class=\"text-center mb-4\" id=\"title-homepage\">LOCATION ENTRE <br> PARTICULIERS</h1>
        <div id=\"rectangle\">
            <button id=\"rental-title\">LOCATION</button>
            <div id=\"rental-filter\">
                <h3>Trouvez un véhicule à louer</h3>
                ";
        // line 36
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), 'form_start', ["attr" => ["class" => "form-filter"]]);
        yield "
                    <div id=\"dates-choice\">
                        <div class=\"dates\">
                            ";
        // line 39
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "beginDate", [], "any", false, false, false, 39), 'label', ["attr" => ["class" => "label-dates"]]);
        yield "
                            ";
        // line 40
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "beginDate", [], "any", false, false, false, 40), 'widget', ["attr" => ["placeholder" => "Date de départ", "class" => "input-date"]]);
        yield "
                        </div>
                        <div class=\"dates\">
                            ";
        // line 43
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "endDate", [], "any", false, false, false, 43), 'label', ["attr" => ["class" => "label-dates"]]);
        yield "
                            ";
        // line 44
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "endDate", [], "any", false, false, false, 44), 'widget', ["attr" => ["placeholder" => "Date de retour", "class" => "input-date"]]);
        yield "
                        </div>
                    </div>
                    ";
        // line 47
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "maxPricePerDay", [], "any", false, false, false, 47), 'widget', ["attr" => ["class" => "input-max-price"]]);
        yield "
                    <button type=\"submit\" class=\"btn-search\">Rechercher</button>
                ";
        // line 49
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), 'form_end');
        yield "
                <p>Location entre particuliers avec assurance</p>
            </div>
    </div>
</div>
    

<div class=\"container-vehicles\">
    <div class=\"row\">
        ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["vehicles"]) || array_key_exists("vehicles", $context) ? $context["vehicles"] : (function () { throw new RuntimeError('Variable "vehicles" does not exist.', 58, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["vehicle"]) {
            // line 59
            yield "            <div class=\"mt-4 col-12 col-md-6 col-xl-4\" id=\"card-ad\">
                <div id=\"vehicle-img\">
                    <img src=\"";
            // line 61
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["vehicle"], "imageURL", [], "any", false, false, false, 61), "html", null, true);
            yield "\" alt=\"Image du véhicule\" class=\"img-car-top\">
                    <div id=\"price-per-day\">
                        <p>À partir de<br></p>
                        <h3>";
            // line 64
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["vehicle"], "availabilities", [], "any", false, false, false, 64)), "pricePerDay", [], "any", false, false, false, 64), "html", null, true);
            yield " € / jour</h3>
                    </div>
                </div>
                <div id=\"card-bottom\">
                    <div id=\"vehicle-details\">
                        <h5>";
            // line 69
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["vehicle"], "brand", [], "any", false, false, false, 69), "html", null, true);
            yield "</h5>
                        <h5>";
            // line 70
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["vehicle"], "model", [], "any", false, false, false, 70), "html", null, true);
            yield "</h5>
                    </div>
                    <p>Ajouté par : ";
            // line 72
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["vehicle"], "availabilities", [], "any", false, false, false, 72)), "createdBy", [], "any", false, false, false, 72), "html", null, true);
            yield "</p>
                    <div id=\"actions\">
                        ";
            // line 74
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 74, $this->source); })()), "user", [], "any", false, false, false, 74)) {
                // line 75
                yield "                            ";
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 75, $this->source); })()), "user", [], "any", false, false, false, 75), "username", [], "any", false, false, false, 75) == "admin")) {
                    // line 76
                    yield "                                <a href=\"/edit/";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["vehicle"], "id", [], "any", false, false, false, 76), "html", null, true);
                    yield "\"><i class=\"fa-regular fa-pen-to-square\" id=\"edit\"></i></a>
                                <form action=\"/delete/";
                    // line 77
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["vehicle"], "id", [], "any", false, false, false, 77), "html", null, true);
                    yield "\" method=\"post\" style=\"display: inline;\">
                                    <button type=\"submit\" id=\"delete\"><i class=\"fa-solid fa-trash\"></i></button>
                                </form>
                            ";
                }
                // line 81
                yield "                        ";
            }
            // line 82
            yield "                    </div>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['vehicle'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        yield "    </div>
</div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  258 => 86,  249 => 82,  246 => 81,  239 => 77,  234 => 76,  231 => 75,  229 => 74,  224 => 72,  219 => 70,  215 => 69,  207 => 64,  201 => 61,  197 => 59,  193 => 58,  181 => 49,  176 => 47,  170 => 44,  166 => 43,  160 => 40,  156 => 39,  150 => 36,  138 => 27,  134 => 25,  127 => 21,  124 => 20,  120 => 18,  111 => 16,  107 => 15,  104 => 14,  102 => 13,  96 => 9,  94 => 8,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Wikicampers - Les véhicules{% endblock %}

{% block body %}

<!--Bandeau de bienvenu lorsqu'il n'y a rien, sinon bandeau de succès-->
{% if vehicles is empty %}
    <div id=\"no-vehicles\" role=\"alert\">
        Aucun véhicule n'a été ajouté pour le moment.
        <a href=\"/create-vehicle\" id=\"add-vehicule-link\">En ajouter un</a>
    </div>
{% elseif app.flashes('success')|length > 0 %}
    <div id=\"no-vehicles\" role=\"alert\">
        {% for message in app.flashes('success') %}
            {{ message }}
        {% endfor %}
    </div>
{% else %}
    <div id=\"no-vehicles\" role=\"alert\">
        {{ vehicles|length }} véhicules disponibles à la location.
        <a href=\"/create-vehicle\" id=\"add-vehicule-link\">En ajouter un</a>
    </div>
{% endif %}

<div class=\"filters-container\">
    <img src=\"{{ asset('assets/images/background-camping-car.jpeg') }}\" alt=\"Camping car\" width=\"100%\" id=\"background-homepage\">
    <div id=\"left-pannel\"></div>

    <div class=\"filters\">
        <h1 class=\"text-center mb-4\" id=\"title-homepage\">LOCATION ENTRE <br> PARTICULIERS</h1>
        <div id=\"rectangle\">
            <button id=\"rental-title\">LOCATION</button>
            <div id=\"rental-filter\">
                <h3>Trouvez un véhicule à louer</h3>
                {{ form_start (form, {'attr': {'class': 'form-filter'}}) }}
                    <div id=\"dates-choice\">
                        <div class=\"dates\">
                            {{ form_label(form.beginDate, null, { 'attr': {'class': 'label-dates'} }) }}
                            {{ form_widget (form.beginDate, {'attr': {'placeholder': 'Date de départ', 'class': 'input-date'}}) }}
                        </div>
                        <div class=\"dates\">
                            {{ form_label(form.endDate, null, { 'attr': {'class': 'label-dates'} }) }}
                            {{ form_widget (form.endDate, {'attr': {'placeholder': 'Date de retour', 'class': 'input-date'}}) }}
                        </div>
                    </div>
                    {{ form_widget(form.maxPricePerDay, { 'attr': { 'class': 'input-max-price' } }) }}
                    <button type=\"submit\" class=\"btn-search\">Rechercher</button>
                {{ form_end (form) }}
                <p>Location entre particuliers avec assurance</p>
            </div>
    </div>
</div>
    

<div class=\"container-vehicles\">
    <div class=\"row\">
        {% for vehicle in vehicles %}
            <div class=\"mt-4 col-12 col-md-6 col-xl-4\" id=\"card-ad\">
                <div id=\"vehicle-img\">
                    <img src=\"{{ vehicle.imageURL }}\" alt=\"Image du véhicule\" class=\"img-car-top\">
                    <div id=\"price-per-day\">
                        <p>À partir de<br></p>
                        <h3>{{ vehicle.availabilities|first.pricePerDay }} € / jour</h3>
                    </div>
                </div>
                <div id=\"card-bottom\">
                    <div id=\"vehicle-details\">
                        <h5>{{ vehicle.brand }}</h5>
                        <h5>{{ vehicle.model }}</h5>
                    </div>
                    <p>Ajouté par : {{ vehicle.availabilities|first.createdBy }}</p>
                    <div id=\"actions\">
                        {% if app.user %}
                            {% if app.user.username == \"admin\" %}
                                <a href=\"/edit/{{ vehicle.id }}\"><i class=\"fa-regular fa-pen-to-square\" id=\"edit\"></i></a>
                                <form action=\"/delete/{{ vehicle.id }}\" method=\"post\" style=\"display: inline;\">
                                    <button type=\"submit\" id=\"delete\"><i class=\"fa-solid fa-trash\"></i></button>
                                </form>
                            {% endif %}
                        {% endif %}
                    </div>
                </div>
            </div>
        {% endfor %}
    </div>
</div>

{% endblock %}
", "home/index.html.twig", "C:\\Users\\alexm\\Desktop\\DEV\\A HEBERGER\\TestTechniqueWikicampersMORENOAlex\\templates\\home\\index.html.twig");
    }
}
