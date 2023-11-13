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

/* feedback/resultfeedback.html.twig */
class __TwigTemplate_55e1c4f01b16cb6c995d22ed6ba80cb4 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "feedback/resultfeedback.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "feedback/resultfeedback.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    <h1>Feedback</h1>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <div class=\"customer-info\">
        <p><strong>Nom:</strong> ";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["Nom"]) || array_key_exists("Nom", $context) ? $context["Nom"] : (function () { throw new RuntimeError('Variable "Nom" does not exist.', 9, $this->source); })()), "html", null, true);
        echo "</p>
        <p><strong>Email:</strong> ";
        // line 10
        echo twig_escape_filter($this->env, (isset($context["EmailClient"]) || array_key_exists("EmailClient", $context) ? $context["EmailClient"] : (function () { throw new RuntimeError('Variable "EmailClient" does not exist.', 10, $this->source); })()), "html", null, true);
        echo "</p>
        <p><strong>Note du Produit:</strong> ";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["NoteDuProduit"]) || array_key_exists("NoteDuProduit", $context) ? $context["NoteDuProduit"] : (function () { throw new RuntimeError('Variable "NoteDuProduit" does not exist.', 11, $this->source); })()), "html", null, true);
        echo "</p>
        <p><strong>Commentaires:</strong> ";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["Commentaires"]) || array_key_exists("Commentaires", $context) ? $context["Commentaires"] : (function () { throw new RuntimeError('Variable "Commentaires" does not exist.', 12, $this->source); })()), "html", null, true);
        echo "</p>
        <p>
            <strong>Date de Soumission:</strong>
            ";
        // line 15
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["DateDeSoumission"]) || array_key_exists("DateDeSoumission", $context) ? $context["DateDeSoumission"] : (function () { throw new RuntimeError('Variable "DateDeSoumission" does not exist.', 15, $this->source); })()), "day", [], "any", false, false, false, 15), "html", null, true);
        echo " / ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["DateDeSoumission"]) || array_key_exists("DateDeSoumission", $context) ? $context["DateDeSoumission"] : (function () { throw new RuntimeError('Variable "DateDeSoumission" does not exist.', 15, $this->source); })()), "month", [], "any", false, false, false, 15), "html", null, true);
        echo " / ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["DateDeSoumission"]) || array_key_exists("DateDeSoumission", $context) ? $context["DateDeSoumission"] : (function () { throw new RuntimeError('Variable "DateDeSoumission" does not exist.', 15, $this->source); })()), "year", [], "any", false, false, false, 15), "html", null, true);
        echo "
        </p>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "feedback/resultfeedback.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 15,  90 => 12,  86 => 11,  82 => 10,  78 => 9,  75 => 8,  68 => 7,  60 => 4,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
    <h1>Feedback</h1>
{% endblock %}

{% block body %}
    <div class=\"customer-info\">
        <p><strong>Nom:</strong> {{ Nom }}</p>
        <p><strong>Email:</strong> {{ EmailClient }}</p>
        <p><strong>Note du Produit:</strong> {{ NoteDuProduit }}</p>
        <p><strong>Commentaires:</strong> {{ Commentaires }}</p>
        <p>
            <strong>Date de Soumission:</strong>
            {{ DateDeSoumission.day }} / {{ DateDeSoumission.month }} / {{ DateDeSoumission.year }}
        </p>
    </div>
{% endblock %}", "feedback/resultfeedback.html.twig", "C:\\Users\\wilfr\\PhpstormProjects\\TP\\templates\\feedback\\resultfeedback.html.twig");
    }
}
