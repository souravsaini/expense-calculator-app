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

/* expense/new.html.twig */
class __TwigTemplate_edce61c8a320e609e1d11a0652e90d11770fc57298ecd0a718a890675fefe0a6 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "expense/new.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "expense/new.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Add New Expense";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div style=\"width:60%; margin:auto\">
  <h1 class=\"title\">Add New Expense</h1>
  ";
        // line 8
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), ["expense/errors.html.twig"], true);
        // line 9
        echo "  ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), 'form_start');
        echo "

  <div class=\"field is-horizontal\">
    <div class=\"field-label\">";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "amount", [], "any", false, false, false, 12), 'label', ["label_attr" => ["class" => "label"]]);
        echo "</div>
    <div class=\"field-body\">
      <div class=\"field\">
        <div class=\"control\">";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "amount", [], "any", false, false, false, 15), 'widget', ["attr" => ["class" => "input"]]);
        echo "</div>
      </div>
      ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "amount", [], "any", false, false, false, 17), 'errors');
        echo "
    </div>
  </div>

  <div class=\"field is-horizontal\">
    <div class=\"field-label\">";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "category", [], "any", false, false, false, 22), 'label', ["label_attr" => ["class" => "label"]]);
        echo "</div>
    <div class=\"field-body\">
      <div class=\"field\">
        <div class=\"control\">
          <div class=\"select\">";
        // line 26
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "category", [], "any", false, false, false, 26), 'widget');
        echo "</div>
        </div>
      </div>
    </div>
  </div>

  <div class=\"field is-horizontal\">
    <div class=\"field-label\">
      <!-- Left empty for spacing -->
    </div>
    <div class=\"field-body\">
      <div class=\"field\">
        <div class=\"control\">";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "save", [], "any", false, false, false, 38), 'widget', ["attr" => ["class" => "button is-info"]]);
        echo "</div>
      </div>
    </div>
  </div>

  ";
        // line 43
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), 'form_end');
        echo "
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "expense/new.html.twig";
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
        return array (  135 => 43,  127 => 38,  112 => 26,  105 => 22,  97 => 17,  92 => 15,  86 => 12,  79 => 9,  77 => 8,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Add New Expense{% endblock %}

{% block body %}
<div style=\"width:60%; margin:auto\">
  <h1 class=\"title\">Add New Expense</h1>
  {% form_theme form 'expense/errors.html.twig' %}
  {{ form_start(form) }}

  <div class=\"field is-horizontal\">
    <div class=\"field-label\">{{ form_label(form.amount, null, {'label_attr': {'class': 'label'}}) }}</div>
    <div class=\"field-body\">
      <div class=\"field\">
        <div class=\"control\">{{ form_widget(form.amount, {'attr': {'class': 'input'}}) }}</div>
      </div>
      {{ form_errors(form.amount ) }}
    </div>
  </div>

  <div class=\"field is-horizontal\">
    <div class=\"field-label\">{{ form_label(form.category, null, {'label_attr': {'class': 'label'}}) }}</div>
    <div class=\"field-body\">
      <div class=\"field\">
        <div class=\"control\">
          <div class=\"select\">{{ form_widget(form.category) }}</div>
        </div>
      </div>
    </div>
  </div>

  <div class=\"field is-horizontal\">
    <div class=\"field-label\">
      <!-- Left empty for spacing -->
    </div>
    <div class=\"field-body\">
      <div class=\"field\">
        <div class=\"control\">{{ form_widget(form.save, {'attr': {'class': 'button is-info'}}) }}</div>
      </div>
    </div>
  </div>

  {{ form_end(form) }}
</div>
{% endblock %}

", "expense/new.html.twig", "/home/ubuntu/expense_tracker_app_v2/templates/expense/new.html.twig");
    }
}
