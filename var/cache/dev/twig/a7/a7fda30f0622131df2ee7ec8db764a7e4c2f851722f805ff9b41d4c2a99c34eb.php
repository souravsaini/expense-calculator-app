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

/* expense/index.html.twig */
class __TwigTemplate_7706db7d954d93a1636e45edff66aadd25844fa48eae3785adf08198ef8c8fa0 extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "expense/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "expense/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Expense Tracker";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 2
        echo "<div style=\"width: 700px; margin: auto\">
  <canvas id=\"expenseChart\"></canvas>
</div>

<script>
  const context = document.getElementById('expenseChart');
  new Chart(context, {
      type: 'doughnut',
      data: {
          labels: ";
        // line 11
        echo json_encode(twig_array_column((isset($context["expenses"]) || array_key_exists("expenses", $context) ? $context["expenses"] : (function () { throw new RuntimeError('Variable "expenses" does not exist.', 11, $this->source); })()), "name"));
        echo ",
          datasets: [{
              label: 'Amount',
              data:  ";
        // line 14
        echo json_encode(twig_array_column((isset($context["expenses"]) || array_key_exists("expenses", $context) ? $context["expenses"] : (function () { throw new RuntimeError('Variable "expenses" does not exist.', 14, $this->source); })()), "amount"));
        echo ",
              borderWidth: 1,
              hoverOffset: 4
          }]
      }
  });
</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 21
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 22
        echo "<script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "expense/index.html.twig";
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
        return array (  111 => 22,  104 => 21,  89 => 14,  83 => 11,  72 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %} {% block title %}Expense Tracker{% endblock %} {% block body %}
<div style=\"width: 700px; margin: auto\">
  <canvas id=\"expenseChart\"></canvas>
</div>

<script>
  const context = document.getElementById('expenseChart');
  new Chart(context, {
      type: 'doughnut',
      data: {
          labels: {{ expenses|column('name')|json_encode|raw }},
          datasets: [{
              label: 'Amount',
              data:  {{ expenses|column('amount')|json_encode|raw }},
              borderWidth: 1,
              hoverOffset: 4
          }]
      }
  });
</script>
{% endblock %} {% block javascripts %}
<script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
{% endblock %}
", "expense/index.html.twig", "/home/ubuntu/expense_tracker_app_v2/templates/expense/index.html.twig");
    }
}
