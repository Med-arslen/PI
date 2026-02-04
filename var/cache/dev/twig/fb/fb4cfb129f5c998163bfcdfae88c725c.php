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
use Twig\TemplateWrapper;

/* back/about.html.twig */
class __TwigTemplate_c33972cec03ebc568fb70aae211ce41c extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "back/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/about.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/about.html.twig"));

        $this->parent = $this->load("back/base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Instructors Management";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "
<!-- Page Title -->
<div class=\"page-title light-background\">
  <div class=\"container d-lg-flex justify-content-between align-items-center\">
    <h1 class=\"mb-2 mb-lg-0 text-primary\">Instructors Management</h1>
    <nav class=\"breadcrumbs\">
      <ol>
        <li><a href=\"";
        // line 13
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("back_home");
        yield "\">Home</a></li>
        <li class=\"current\">Instructors</li>
      </ol>
    </nav>
  </div>
</div>

<section class=\"section\">
  <div class=\"container\">

    <!-- Header actions -->
    <div class=\"d-flex justify-content-between align-items-center mb-4\">
      <h2 class=\"mb-0 text-secondary\">Manage Instructors</h2>

      <!-- Red action button (same as Enroll Now / Admin) -->
      <a href=\"#\" class=\"btn btn-danger\">
        <i class=\"bi bi-plus-circle me-1\"></i> Add Instructor
      </a>
    </div>

    <!-- Filters -->
    <div class=\"row mb-3 g-3\">
      <div class=\"col-md-6\">
        <input type=\"text\" class=\"form-control\" placeholder=\"Search instructor...\">
      </div>
      <div class=\"col-md-4\">
        <select class=\"form-select\">
          <option selected>Sort by</option>
          <option>Name</option>
          <option>Experience</option>
          <option>Status</option>
        </select>
      </div>
    </div>

    <!-- Table -->
    <div class=\"card shadow-sm border-0\">
      <div class=\"card-body p-0\">
        <div class=\"table-responsive\">
          <table class=\"table table-hover align-middle mb-0\">
            <thead style=\"background-color: #eef3f7;\">
              <tr class=\"text-secondary\">
                <th>#</th>
                <th>Instructor</th>
                <th>Specialty</th>
                <th>Department</th>
                <th>Experience</th>
                <th>Status</th>
                <th class=\"text-end\">Actions</th>
              </tr>
            </thead>

            <tbody>
              <tr>
                <td>1</td>
                <td>
                  <strong class=\"text-dark\">Prof. Marcus Johnson</strong><br>
                  <small class=\"text-muted\">marcus@mentorai.com</small>
                </td>
                <td>Web Development</td>
                <td>Computer Science</td>
                <td>15 years</td>
                <td>
                  <span class=\"badge bg-success\">ACTIVE</span>
                </td>
                <td class=\"text-end\">
                  <a href=\"#\" class=\"btn btn-sm btn-outline-primary me-1\">
                    <i class=\"bi bi-pencil\"></i>
                  </a>
                  <a href=\"#\" class=\"btn btn-sm btn-outline-danger\">
                    <i class=\"bi bi-trash\"></i>
                  </a>
                </td>
              </tr>

              <tr>
                <td>2</td>
                <td>
                  <strong class=\"text-dark\">Dr. Sarah Williams</strong><br>
                  <small class=\"text-muted\">sarah@mentorai.com</small>
                </td>
                <td>Data Science</td>
                <td>AI & Analytics</td>
                <td>10 years</td>
                <td>
                  <span class=\"badge bg-secondary\">INACTIVE</span>
                </td>
                <td class=\"text-end\">
                  <a href=\"#\" class=\"btn btn-sm btn-outline-primary me-1\">
                    <i class=\"bi bi-pencil\"></i>
                  </a>
                  <a href=\"#\" class=\"btn btn-sm btn-outline-danger\">
                    <i class=\"bi bi-trash\"></i>
                  </a>
                </td>
              </tr>

            </tbody>
          </table>
        </div>
      </div>
    </div>

  </div>
</section>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "back/about.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  109 => 13,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'back/base.html.twig' %}

{% block title %}Instructors Management{% endblock %}

{% block body %}

<!-- Page Title -->
<div class=\"page-title light-background\">
  <div class=\"container d-lg-flex justify-content-between align-items-center\">
    <h1 class=\"mb-2 mb-lg-0 text-primary\">Instructors Management</h1>
    <nav class=\"breadcrumbs\">
      <ol>
        <li><a href=\"{{ path('back_home') }}\">Home</a></li>
        <li class=\"current\">Instructors</li>
      </ol>
    </nav>
  </div>
</div>

<section class=\"section\">
  <div class=\"container\">

    <!-- Header actions -->
    <div class=\"d-flex justify-content-between align-items-center mb-4\">
      <h2 class=\"mb-0 text-secondary\">Manage Instructors</h2>

      <!-- Red action button (same as Enroll Now / Admin) -->
      <a href=\"#\" class=\"btn btn-danger\">
        <i class=\"bi bi-plus-circle me-1\"></i> Add Instructor
      </a>
    </div>

    <!-- Filters -->
    <div class=\"row mb-3 g-3\">
      <div class=\"col-md-6\">
        <input type=\"text\" class=\"form-control\" placeholder=\"Search instructor...\">
      </div>
      <div class=\"col-md-4\">
        <select class=\"form-select\">
          <option selected>Sort by</option>
          <option>Name</option>
          <option>Experience</option>
          <option>Status</option>
        </select>
      </div>
    </div>

    <!-- Table -->
    <div class=\"card shadow-sm border-0\">
      <div class=\"card-body p-0\">
        <div class=\"table-responsive\">
          <table class=\"table table-hover align-middle mb-0\">
            <thead style=\"background-color: #eef3f7;\">
              <tr class=\"text-secondary\">
                <th>#</th>
                <th>Instructor</th>
                <th>Specialty</th>
                <th>Department</th>
                <th>Experience</th>
                <th>Status</th>
                <th class=\"text-end\">Actions</th>
              </tr>
            </thead>

            <tbody>
              <tr>
                <td>1</td>
                <td>
                  <strong class=\"text-dark\">Prof. Marcus Johnson</strong><br>
                  <small class=\"text-muted\">marcus@mentorai.com</small>
                </td>
                <td>Web Development</td>
                <td>Computer Science</td>
                <td>15 years</td>
                <td>
                  <span class=\"badge bg-success\">ACTIVE</span>
                </td>
                <td class=\"text-end\">
                  <a href=\"#\" class=\"btn btn-sm btn-outline-primary me-1\">
                    <i class=\"bi bi-pencil\"></i>
                  </a>
                  <a href=\"#\" class=\"btn btn-sm btn-outline-danger\">
                    <i class=\"bi bi-trash\"></i>
                  </a>
                </td>
              </tr>

              <tr>
                <td>2</td>
                <td>
                  <strong class=\"text-dark\">Dr. Sarah Williams</strong><br>
                  <small class=\"text-muted\">sarah@mentorai.com</small>
                </td>
                <td>Data Science</td>
                <td>AI & Analytics</td>
                <td>10 years</td>
                <td>
                  <span class=\"badge bg-secondary\">INACTIVE</span>
                </td>
                <td class=\"text-end\">
                  <a href=\"#\" class=\"btn btn-sm btn-outline-primary me-1\">
                    <i class=\"bi bi-pencil\"></i>
                  </a>
                  <a href=\"#\" class=\"btn btn-sm btn-outline-danger\">
                    <i class=\"bi bi-trash\"></i>
                  </a>
                </td>
              </tr>

            </tbody>
          </table>
        </div>
      </div>
    </div>

  </div>
</section>

{% endblock %}
", "back/about.html.twig", "C:\\Users\\user\\Desktop\\mentorai\\templates\\back\\about.html.twig");
    }
}
