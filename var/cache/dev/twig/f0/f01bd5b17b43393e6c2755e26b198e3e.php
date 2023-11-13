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

/* customers.html.twig */
class __TwigTemplate_7103de59fc89ead15fc7624657c356ab extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "customers.html.twig"));

        // line 2
        echo "<!DOCTYPE html>
<head>
    <title>Liste des clients</title>
</head>
<body>
<h1>Liste des clients</h1>
<ol>
    ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_sort_filter($this->env, (isset($context["customers"]) || array_key_exists("customers", $context) ? $context["customers"] : (function () { throw new RuntimeError('Variable "customers" does not exist.', 9, $this->source); })())));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["customer"]) {
            // line 10
            echo "        <li>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customer"], "name", [], "any", false, false, false, 10), "html", null, true);
            echo "</li>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 12
            echo "        <li>Aucun client trouvé.</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "    <br><a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("dashboard");
        echo "\">Retour au tableau de bord</a>
</ol>
</body>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "customers.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 14,  62 => 12,  54 => 10,  49 => 9,  40 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# templates/customers.html.twig #}
<!DOCTYPE html>
<head>
    <title>Liste des clients</title>
</head>
<body>
<h1>Liste des clients</h1>
<ol>
    {% for customer in customers|sort %}
        <li>{{ customer.name }}</li>
    {% else %}
        <li>Aucun client trouvé.</li>
    {% endfor %}
    <br><a href=\"{{ path('dashboard') }}\">Retour au tableau de bord</a>
</ol>
</body>
", "customers.html.twig", "C:\\Users\\wilfr\\PhpstormProjects\\TP\\templates\\customers.html.twig");
    }
}
