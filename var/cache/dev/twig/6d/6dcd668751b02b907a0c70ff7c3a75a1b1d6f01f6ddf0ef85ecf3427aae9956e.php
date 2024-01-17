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

/* navigation.html.twig */
class __TwigTemplate_dcc17f69f10cf0492eddda973a6e368391c0a438e9e1fb2ffcf11b026a9f51d1 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "navigation.html.twig"));

        // line 1
        echo "<nav class=\"navbar\" role=\"navigation\" aria-label=\"main navigation\">
  <div id=\"navbarBasicExample\" class=\"navbar-menu\">
    <div class=\"navbar-start\">
      <a class=\"navbar-item\" href=\"";
        // line 4
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_index");
        echo "\"> Home </a>

      <div class=\"navbar-item has-dropdown is-hoverable\">
        <a class=\"navbar-link\"> Expenses </a>

        <div class=\"navbar-dropdown\">
          <a class=\"navbar-item\" href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_expense_new");
        echo "\"> Create </a>
          <a class=\"navbar-item\" href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_expense_all");
        echo "\"> View all </a>
        </div>
      </div>
    </div>
  </div>
</nav>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "navigation.html.twig";
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
        return array (  58 => 11,  54 => 10,  45 => 4,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar\" role=\"navigation\" aria-label=\"main navigation\">
  <div id=\"navbarBasicExample\" class=\"navbar-menu\">
    <div class=\"navbar-start\">
      <a class=\"navbar-item\" href=\"{{ path('app_index') }}\"> Home </a>

      <div class=\"navbar-item has-dropdown is-hoverable\">
        <a class=\"navbar-link\"> Expenses </a>

        <div class=\"navbar-dropdown\">
          <a class=\"navbar-item\" href=\"{{ path('app_expense_new') }}\"> Create </a>
          <a class=\"navbar-item\" href=\"{{ path('app_expense_all') }}\"> View all </a>
        </div>
      </div>
    </div>
  </div>
</nav>
", "navigation.html.twig", "/home/ubuntu/expense_tracker_app_v2/templates/navigation.html.twig");
    }
}
