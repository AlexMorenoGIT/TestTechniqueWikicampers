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

/* home/vehicle.html.twig */
class __TwigTemplate_1d6f9844f0e154d6199cc761d68536af extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/vehicle.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/vehicle.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/vehicle.html.twig", 1);
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
        <div class=\"col-12 col-md-2 px-3  d-none d-md-block\">
            <div class=\"circle\">2</div>
            <span class=\"label\">Disponibilités</span>
        </div>
    </div>


    <div class=\"card\">
        ";
        // line 25
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formVehicle"]) || array_key_exists("formVehicle", $context) ? $context["formVehicle"] : (function () { throw new RuntimeError('Variable "formVehicle" does not exist.', 25, $this->source); })()), 'form_start', ["attr" => ["class" => "form-vehicle"]]);
        yield "
            <div class=\"form-container\">
                <div class=\"form-label-container\">
                    ";
        // line 28
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formVehicle"]) || array_key_exists("formVehicle", $context) ? $context["formVehicle"] : (function () { throw new RuntimeError('Variable "formVehicle" does not exist.', 28, $this->source); })()), "brand", [], "any", false, false, false, 28), 'label', ["attr" => ["class" => "brand-label"]]);
        yield "
                    <div class=\"select-container\">
                        ";
        // line 30
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formVehicle"]) || array_key_exists("formVehicle", $context) ? $context["formVehicle"] : (function () { throw new RuntimeError('Variable "formVehicle" does not exist.', 30, $this->source); })()), "brand", [], "any", false, false, false, 30), 'widget', ["attr" => ["class" => "brand-widget input"]]);
        yield "
                    </div>
                </div>
                <div class=\"form-label-container\">
                    ";
        // line 34
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formVehicle"]) || array_key_exists("formVehicle", $context) ? $context["formVehicle"] : (function () { throw new RuntimeError('Variable "formVehicle" does not exist.', 34, $this->source); })()), "model", [], "any", false, false, false, 34), 'label', ["attr" => ["class" => "model-label"]]);
        yield "
                    ";
        // line 35
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formVehicle"]) || array_key_exists("formVehicle", $context) ? $context["formVehicle"] : (function () { throw new RuntimeError('Variable "formVehicle" does not exist.', 35, $this->source); })()), "model", [], "any", false, false, false, 35), 'widget', ["attr" => ["class" => "model-widget input non"]]);
        yield "
                    <div class=\"model-helper-text\">Par exemple : C3 Aircross</div>
                </div>
            </div>
            <div class=\"form-label-container image-url\">
                ";
        // line 40
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formVehicle"]) || array_key_exists("formVehicle", $context) ? $context["formVehicle"] : (function () { throw new RuntimeError('Variable "formVehicle" does not exist.', 40, $this->source); })()), "imageURL", [], "any", false, false, false, 40), 'label', ["attr" => ["class" => "model-label"]]);
        yield "
                ";
        // line 41
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formVehicle"]) || array_key_exists("formVehicle", $context) ? $context["formVehicle"] : (function () { throw new RuntimeError('Variable "formVehicle" does not exist.', 41, $this->source); })()), "imageURL", [], "any", false, false, false, 41), 'widget', ["attr" => ["class" => "urlimg-widget input"]]);
        yield "
            </div>
            <div class=\"form-submit\">
                ";
        // line 44
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formVehicle"]) || array_key_exists("formVehicle", $context) ? $context["formVehicle"] : (function () { throw new RuntimeError('Variable "formVehicle" does not exist.', 44, $this->source); })()), "submit", [], "any", false, false, false, 44), 'widget', ["attr" => ["class" => "submit-widget"]]);
        yield "
            </div>
        ";
        // line 46
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formVehicle"]) || array_key_exists("formVehicle", $context) ? $context["formVehicle"] : (function () { throw new RuntimeError('Variable "formVehicle" does not exist.', 46, $this->source); })()), 'form_end');
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
        return "home/vehicle.html.twig";
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
        return array (  156 => 46,  151 => 44,  145 => 41,  141 => 40,  133 => 35,  129 => 34,  122 => 30,  117 => 28,  111 => 25,  90 => 6,  80 => 5,  60 => 3,  37 => 1,);
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
        <div class=\"col-12 col-md-2 px-3  d-none d-md-block\">
            <div class=\"circle\">2</div>
            <span class=\"label\">Disponibilités</span>
        </div>
    </div>


    <div class=\"card\">
        {{ form_start(formVehicle, { 'attr': {'class': 'form-vehicle'} }) }}
            <div class=\"form-container\">
                <div class=\"form-label-container\">
                    {{ form_label(formVehicle.brand, null, { 'attr': {'class': 'brand-label'} }) }}
                    <div class=\"select-container\">
                        {{ form_widget(formVehicle.brand, { 'attr': {'class': 'brand-widget input'} }) }}
                    </div>
                </div>
                <div class=\"form-label-container\">
                    {{ form_label(formVehicle.model, null, { 'attr': {'class': 'model-label'} }) }}
                    {{ form_widget(formVehicle.model, { 'attr': {'class': 'model-widget input non'} }) }}
                    <div class=\"model-helper-text\">Par exemple : C3 Aircross</div>
                </div>
            </div>
            <div class=\"form-label-container image-url\">
                {{ form_label(formVehicle.imageURL, null, { 'attr': {'class': 'model-label'} }) }}
                {{ form_widget(formVehicle.imageURL, { 'attr': {'class': 'urlimg-widget input'} }) }}
            </div>
            <div class=\"form-submit\">
                {{ form_widget(formVehicle.submit, { 'attr': {'class': 'submit-widget'} }) }}
            </div>
        {{ form_end(formVehicle) }}
    </div>

{% endblock %}", "home/vehicle.html.twig", "C:\\Users\\alexm\\Desktop\\DEV\\TestTechniqueWikicampersMORENOAlex\\templates\\home\\vehicle.html.twig");
    }
}
