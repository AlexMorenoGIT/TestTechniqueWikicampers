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

/* availability/availability.html.twig */
class __TwigTemplate_44a10f1c373e502c74b6fd29b0d0bd9c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "availability/availability.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "availability/availability.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "availability/availability.html.twig", 1);
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

        yield "Wikicampers - Création d'un véhicule";
        
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
    <div id=\"no-vehicles\" role=\"alert\">
        Ajout d'un véhicule pour la location
        <a href=\"/\" id=\"add-vehicule-link\">Revenir à l'accueil</a>
    </div>

    <div class=\"row step text-center step-orange tunnel-vehicule\">
        <div class=\"col-12 col-md-2 px-3 step-selected \">
            <div class=\"circle\">1</div>
            <span class=\"label\">Informations</span>
        </div>
        <div class=\"col-12 col-md-2 px-3 step-selected\">
            <div class=\"circle\">2</div>
            <span class=\"label\">Disponibilités</span>
        </div>
    </div>

    <div class=\"form-availability-container\">
        ";
        // line 24
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formAvailability"]) || array_key_exists("formAvailability", $context) ? $context["formAvailability"] : (function () { throw new RuntimeError('Variable "formAvailability" does not exist.', 24, $this->source); })()), 'form_start', ["attr" => ["class" => "form-availability"]]);
        yield "
            <div id=\"dates-choice\">
                <div class=\"dates-availability\">
                    ";
        // line 27
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formAvailability"]) || array_key_exists("formAvailability", $context) ? $context["formAvailability"] : (function () { throw new RuntimeError('Variable "formAvailability" does not exist.', 27, $this->source); })()), "start_date", [], "any", false, false, false, 27), 'label', ["label" => "Date de départ"]);
        yield "
                    ";
        // line 28
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formAvailability"]) || array_key_exists("formAvailability", $context) ? $context["formAvailability"] : (function () { throw new RuntimeError('Variable "formAvailability" does not exist.', 28, $this->source); })()), "start_date", [], "any", false, false, false, 28), 'widget', ["attr" => ["class" => "form-dates"]]);
        yield "
                </div>
                <div class=\"dates-availability\">
                    ";
        // line 31
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formAvailability"]) || array_key_exists("formAvailability", $context) ? $context["formAvailability"] : (function () { throw new RuntimeError('Variable "formAvailability" does not exist.', 31, $this->source); })()), "end_date", [], "any", false, false, false, 31), 'label', ["label" => "Date de retour"]);
        yield "
                    ";
        // line 32
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formAvailability"]) || array_key_exists("formAvailability", $context) ? $context["formAvailability"] : (function () { throw new RuntimeError('Variable "formAvailability" does not exist.', 32, $this->source); })()), "end_date", [], "any", false, false, false, 32), 'widget', ["attr" => ["class" => "form-dates"]]);
        yield "
                </div>
            </div>
            ";
        // line 35
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formAvailability"]) || array_key_exists("formAvailability", $context) ? $context["formAvailability"] : (function () { throw new RuntimeError('Variable "formAvailability" does not exist.', 35, $this->source); })()), "pricePerDay", [], "any", false, false, false, 35), 'widget', ["attr" => ["placeholder" => "Prix par jour", "class" => "price-per-day"]]);
        yield "
            <button type=\"submit\" class=\"submit-widget\">Enregistrer</button>
        ";
        // line 37
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formAvailability"]) || array_key_exists("formAvailability", $context) ? $context["formAvailability"] : (function () { throw new RuntimeError('Variable "formAvailability" does not exist.', 37, $this->source); })()), 'form_end');
        yield "
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
        return "availability/availability.html.twig";
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
        return array (  141 => 37,  136 => 35,  130 => 32,  126 => 31,  120 => 28,  116 => 27,  110 => 24,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}

{% block title %}Wikicampers - Création d'un véhicule{% endblock %}

{% block body %}

    <div id=\"no-vehicles\" role=\"alert\">
        Ajout d'un véhicule pour la location
        <a href=\"/\" id=\"add-vehicule-link\">Revenir à l'accueil</a>
    </div>

    <div class=\"row step text-center step-orange tunnel-vehicule\">
        <div class=\"col-12 col-md-2 px-3 step-selected \">
            <div class=\"circle\">1</div>
            <span class=\"label\">Informations</span>
        </div>
        <div class=\"col-12 col-md-2 px-3 step-selected\">
            <div class=\"circle\">2</div>
            <span class=\"label\">Disponibilités</span>
        </div>
    </div>

    <div class=\"form-availability-container\">
        {{ form_start(formAvailability, { 'attr': {'class': 'form-availability'} }) }}
            <div id=\"dates-choice\">
                <div class=\"dates-availability\">
                    {{ form_label(formAvailability.start_date, 'Date de départ') }}
                    {{ form_widget(formAvailability.start_date, { 'attr': {'class': 'form-dates'} }) }}
                </div>
                <div class=\"dates-availability\">
                    {{ form_label(formAvailability.end_date, 'Date de retour') }}
                    {{ form_widget(formAvailability.end_date, { 'attr': {'class': 'form-dates'} }) }}
                </div>
            </div>
            {{ form_widget(formAvailability.pricePerDay, { 'attr': { 'placeholder': 'Prix par jour', 'class': 'price-per-day' } }) }}
            <button type=\"submit\" class=\"submit-widget\">Enregistrer</button>
        {{ form_end(formAvailability) }}
    </div>

{% endblock %}", "availability/availability.html.twig", "C:\\Users\\alexm\\Desktop\\DEV\\A HEBERGER\\TestTechniqueWikicampersMORENOAlex\\templates\\availability\\availability.html.twig");
    }
}
