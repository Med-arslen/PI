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

/* front/course-details.html.twig */
class __TwigTemplate_9acf00f4417193ba9560f84ea087c31c extends Template
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
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "front/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/course-details.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/course-details.html.twig"));

        $this->parent = $this->load("front/base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
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

        // line 4
        yield "<body class=\"course-details-page\">

<main class=\"main\">

  <!-- Page Title -->
  <div class=\"page-title light-background\">
    <div class=\"container d-lg-flex justify-content-between align-items-center\">
      <h1 class=\"mb-2 mb-lg-0\">Course Details</h1>
      <nav class=\"breadcrumbs\">
        <ol>
          <li><a href=\"";
        // line 14
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">Home</a></li>
          <li class=\"current\">Course Details</li>
        </ol>
      </nav>
    </div>
  </div>

  <!-- Course Details Section -->
  <section id=\"course-details\" class=\"course-details section\">

    <div class=\"container\" data-aos=\"fade-up\" data-aos-delay=\"100\">

      <div class=\"row\">
        <div class=\"col-lg-8\">

          <!-- Course Hero -->
          <div class=\"course-hero\" data-aos=\"fade-up\" data-aos-delay=\"200\">
            <div class=\"hero-content\">
              <div class=\"course-badge\">
                <span class=\"category\">Web Development</span>
                <span class=\"level\">Advanced</span>
              </div>
              <h1>Full Stack JavaScript Mastery</h1>
              <p class=\"course-subtitle\">
                Master modern web development with React, Node.js, and MongoDB
              </p>
            </div>

            <div class=\"hero-image\">
              <img src=\"";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/education/courses-8.webp"), "html", null, true);
        yield "\" class=\"img-fluid\" alt=\"\">
            </div>
          </div>

          <!-- Tabs -->
          <div class=\"course-nav-tabs\">
            <ul class=\"nav nav-tabs\">
              <li class=\"nav-item\">
                <button class=\"nav-link active\" data-bs-toggle=\"tab\" data-bs-target=\"#overview\">
                  Overview
                </button>
              </li>
              <li class=\"nav-item\">
                <button class=\"nav-link\" data-bs-toggle=\"tab\" data-bs-target=\"#curriculum\">
                  Curriculum
                </button>
              </li>
              <li class=\"nav-item\">
                <button class=\"nav-link\" data-bs-toggle=\"tab\" data-bs-target=\"#reviews\">
                  Reviews
                </button>
              </li>
            </ul>

            <div class=\"tab-content\">

              <div class=\"tab-pane fade show active\" id=\"overview\">
                <h3>Course Description</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
              </div>

              <div class=\"tab-pane fade\" id=\"curriculum\">
                <p>Curriculum content here</p>
              </div>

              <div class=\"tab-pane fade\" id=\"reviews\">
                <p>Reviews content here</p>
              </div>

            </div>
          </div>

        </div>

        <!-- Sidebar -->
        <div class=\"col-lg-4\">
          <div class=\"enrollment-card\">
            <h3>\$149</h3>
            <button class=\"btn btn-primary w-100\">Enroll Now</button>
          </div>
        </div>

      </div>

    </div>

  </section>

</main>

</body>
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
        return "front/course-details.html.twig";
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
        return array (  120 => 43,  88 => 14,  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'front/base.html.twig' %}

{% block body %}
<body class=\"course-details-page\">

<main class=\"main\">

  <!-- Page Title -->
  <div class=\"page-title light-background\">
    <div class=\"container d-lg-flex justify-content-between align-items-center\">
      <h1 class=\"mb-2 mb-lg-0\">Course Details</h1>
      <nav class=\"breadcrumbs\">
        <ol>
          <li><a href=\"{{ path('app_home') }}\">Home</a></li>
          <li class=\"current\">Course Details</li>
        </ol>
      </nav>
    </div>
  </div>

  <!-- Course Details Section -->
  <section id=\"course-details\" class=\"course-details section\">

    <div class=\"container\" data-aos=\"fade-up\" data-aos-delay=\"100\">

      <div class=\"row\">
        <div class=\"col-lg-8\">

          <!-- Course Hero -->
          <div class=\"course-hero\" data-aos=\"fade-up\" data-aos-delay=\"200\">
            <div class=\"hero-content\">
              <div class=\"course-badge\">
                <span class=\"category\">Web Development</span>
                <span class=\"level\">Advanced</span>
              </div>
              <h1>Full Stack JavaScript Mastery</h1>
              <p class=\"course-subtitle\">
                Master modern web development with React, Node.js, and MongoDB
              </p>
            </div>

            <div class=\"hero-image\">
              <img src=\"{{ asset('assets/img/education/courses-8.webp') }}\" class=\"img-fluid\" alt=\"\">
            </div>
          </div>

          <!-- Tabs -->
          <div class=\"course-nav-tabs\">
            <ul class=\"nav nav-tabs\">
              <li class=\"nav-item\">
                <button class=\"nav-link active\" data-bs-toggle=\"tab\" data-bs-target=\"#overview\">
                  Overview
                </button>
              </li>
              <li class=\"nav-item\">
                <button class=\"nav-link\" data-bs-toggle=\"tab\" data-bs-target=\"#curriculum\">
                  Curriculum
                </button>
              </li>
              <li class=\"nav-item\">
                <button class=\"nav-link\" data-bs-toggle=\"tab\" data-bs-target=\"#reviews\">
                  Reviews
                </button>
              </li>
            </ul>

            <div class=\"tab-content\">

              <div class=\"tab-pane fade show active\" id=\"overview\">
                <h3>Course Description</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
              </div>

              <div class=\"tab-pane fade\" id=\"curriculum\">
                <p>Curriculum content here</p>
              </div>

              <div class=\"tab-pane fade\" id=\"reviews\">
                <p>Reviews content here</p>
              </div>

            </div>
          </div>

        </div>

        <!-- Sidebar -->
        <div class=\"col-lg-4\">
          <div class=\"enrollment-card\">
            <h3>\$149</h3>
            <button class=\"btn btn-primary w-100\">Enroll Now</button>
          </div>
        </div>

      </div>

    </div>

  </section>

</main>

</body>
{% endblock %}
", "front/course-details.html.twig", "C:\\Users\\user\\Desktop\\mentorai\\templates\\front\\course-details.html.twig");
    }
}
