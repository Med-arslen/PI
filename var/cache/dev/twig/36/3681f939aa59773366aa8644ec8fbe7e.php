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

/* back/terms.html.twig */
class __TwigTemplate_e69fea52c8d23c85502bb6928d41d035 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/terms.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/terms.html.twig"));

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

        yield "Terms";
        
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
<main class=\"main\">

  <!-- Page Title -->
  <div class=\"page-title light-background\">
    <div class=\"container d-lg-flex justify-content-between align-items-center\">
      <h1 class=\"mb-2 mb-lg-0\">Terms</h1>
      <nav class=\"breadcrumbs\">
        <ol>
          <li><a href=\"/\">Home</a></li>
          <li class=\"current\">Terms</li>
        </ol>
      </nav>
    </div>
  </div><!-- End Page Title -->

  <!-- Terms Of Service Section -->
  <section id=\"terms-of-service\" class=\"terms-of-service section\">

    <div class=\"container\" data-aos=\"fade-up\">

      <!-- Page Header -->
      <div class=\"tos-header text-center\" data-aos=\"fade-up\">
        <span class=\"last-updated\">Last Updated: February 27, 2025</span>
        <h2>Terms of Service</h2>
        <p>Please read these terms of service carefully before using our services</p>
      </div>

      <!-- Content -->
      <div class=\"tos-content\" data-aos=\"fade-up\" data-aos-delay=\"200\">

        <div class=\"content-section\">
          <h3>1. Agreement to Terms</h3>
          <p>By accessing our website and services, you agree to be bound by these Terms of Service and all applicable laws and regulations.</p>
        </div>

        <div class=\"content-section\">
          <h3>2. Intellectual Property Rights</h3>
          <p>All content, features, and functionality are our exclusive property and are protected by applicable laws.</p>
        </div>

        <div class=\"content-section\">
          <h3>3. User Accounts</h3>
          <p>You are responsible for maintaining the confidentiality of your account and password.</p>
        </div>

        <div class=\"content-section\">
          <h3>4. Prohibited Activities</h3>
          <ul>
            <li>Unauthorized access attempts</li>
            <li>Publishing malicious content</li>
            <li>Misuse of platform resources</li>
          </ul>
        </div>

        <div class=\"content-section\">
          <h3>5. Disclaimers</h3>
          <p>The service is provided \"AS IS\" without warranties of any kind.</p>
        </div>

        <div class=\"content-section\">
          <h3>6. Limitation of Liability</h3>
          <p>We shall not be liable for indirect or consequential damages.</p>
        </div>

        <div class=\"content-section\">
          <h3>7. Changes to Terms</h3>
          <p>We reserve the right to update these terms at any time.</p>
        </div>

      </div>

      <!-- Contact -->
      <div class=\"tos-contact\" data-aos=\"fade-up\" data-aos-delay=\"300\">
        <h4>Questions?</h4>
        <p>If you have questions about these Terms, please contact us.</p>
      </div>

    </div>

  </section><!-- /Terms Of Service Section -->

</main>

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
        return "back/terms.html.twig";
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
        return array (  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'back/base.html.twig' %}

{% block title %}Terms{% endblock %}

{% block body %}

<main class=\"main\">

  <!-- Page Title -->
  <div class=\"page-title light-background\">
    <div class=\"container d-lg-flex justify-content-between align-items-center\">
      <h1 class=\"mb-2 mb-lg-0\">Terms</h1>
      <nav class=\"breadcrumbs\">
        <ol>
          <li><a href=\"/\">Home</a></li>
          <li class=\"current\">Terms</li>
        </ol>
      </nav>
    </div>
  </div><!-- End Page Title -->

  <!-- Terms Of Service Section -->
  <section id=\"terms-of-service\" class=\"terms-of-service section\">

    <div class=\"container\" data-aos=\"fade-up\">

      <!-- Page Header -->
      <div class=\"tos-header text-center\" data-aos=\"fade-up\">
        <span class=\"last-updated\">Last Updated: February 27, 2025</span>
        <h2>Terms of Service</h2>
        <p>Please read these terms of service carefully before using our services</p>
      </div>

      <!-- Content -->
      <div class=\"tos-content\" data-aos=\"fade-up\" data-aos-delay=\"200\">

        <div class=\"content-section\">
          <h3>1. Agreement to Terms</h3>
          <p>By accessing our website and services, you agree to be bound by these Terms of Service and all applicable laws and regulations.</p>
        </div>

        <div class=\"content-section\">
          <h3>2. Intellectual Property Rights</h3>
          <p>All content, features, and functionality are our exclusive property and are protected by applicable laws.</p>
        </div>

        <div class=\"content-section\">
          <h3>3. User Accounts</h3>
          <p>You are responsible for maintaining the confidentiality of your account and password.</p>
        </div>

        <div class=\"content-section\">
          <h3>4. Prohibited Activities</h3>
          <ul>
            <li>Unauthorized access attempts</li>
            <li>Publishing malicious content</li>
            <li>Misuse of platform resources</li>
          </ul>
        </div>

        <div class=\"content-section\">
          <h3>5. Disclaimers</h3>
          <p>The service is provided \"AS IS\" without warranties of any kind.</p>
        </div>

        <div class=\"content-section\">
          <h3>6. Limitation of Liability</h3>
          <p>We shall not be liable for indirect or consequential damages.</p>
        </div>

        <div class=\"content-section\">
          <h3>7. Changes to Terms</h3>
          <p>We reserve the right to update these terms at any time.</p>
        </div>

      </div>

      <!-- Contact -->
      <div class=\"tos-contact\" data-aos=\"fade-up\" data-aos-delay=\"300\">
        <h4>Questions?</h4>
        <p>If you have questions about these Terms, please contact us.</p>
      </div>

    </div>

  </section><!-- /Terms Of Service Section -->

</main>

{% endblock %}
", "back/terms.html.twig", "C:\\Users\\user\\Desktop\\mentorai\\templates\\back\\terms.html.twig");
    }
}
