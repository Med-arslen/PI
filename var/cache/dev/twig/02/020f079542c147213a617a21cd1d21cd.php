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

/* front/privacy.html.twig */
class __TwigTemplate_7d960a2c917638e13af7b9e75ee89e08 extends Template
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
        return "front/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/privacy.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/privacy.html.twig"));

        $this->parent = $this->load("front/base.html.twig", 1);
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

        yield "Privacy";
        
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
<main class=\"main privacy-page\">

  <!-- Page Title -->
  <div class=\"page-title light-background\">
    <div class=\"container d-lg-flex justify-content-between align-items-center\">
      <h1 class=\"mb-2 mb-lg-0\">Privacy</h1>
      <nav class=\"breadcrumbs\">
        <ol>
          <li><a href=\"";
        // line 15
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">Home</a></li>
          <li class=\"current\">Privacy</li>
        </ol>
      </nav>
    </div>
  </div>
  <!-- End Page Title -->

  <!-- Privacy Section -->
  <section id=\"privacy\" class=\"privacy section\">

    <div class=\"container\" data-aos=\"fade-up\">

      <!-- Header -->
      <div class=\"privacy-header\">
        <div class=\"header-content\">
          <div class=\"last-updated\">Effective Date: February 27, 2025</div>
          <h1>Privacy Policy</h1>
          <p class=\"intro-text\">
            This Privacy Policy describes how we collect, use, process, and disclose your information,
            including personal information, in conjunction with your access to and use of our services.
          </p>
        </div>
      </div>

      <!-- Content -->
      <div class=\"privacy-content\">

        <div class=\"content-section\">
          <h2>1. Introduction</h2>
          <p>
            When you use our services, you're trusting us with your information. We understand this is a
            big responsibility and work hard to protect your information.
          </p>
        </div>

        <div class=\"content-section\">
          <h2>2. Information We Collect</h2>

          <h3>2.1 Information You Provide</h3>
          <ul>
            <li>Your name and contact information</li>
            <li>Account credentials</li>
            <li>Payment information when required</li>
            <li>Communication preferences</li>
          </ul>

          <h3>2.2 Automatic Information</h3>
          <ul>
            <li>Device information</li>
            <li>Usage statistics</li>
            <li>Browser type and settings</li>
          </ul>
        </div>

        <div class=\"content-section\">
          <h2>3. How We Use Your Information</h2>
          <ul>
            <li>Provide and personalize services</li>
            <li>Process transactions</li>
            <li>Improve platform performance</li>
            <li>Ensure security</li>
          </ul>
        </div>

        <div class=\"content-section\">
          <h2>4. Information Sharing</h2>
          <p>
            We do not share personal information except when legally required or with your consent.
          </p>
        </div>

        <div class=\"content-section\">
          <h2>5. Data Security</h2>
          <ul>
            <li>SSL encryption</li>
            <li>Restricted internal access</li>
            <li>Regular security reviews</li>
          </ul>
        </div>

        <div class=\"content-section\">
          <h2>6. Your Rights</h2>
          <ul>
            <li>Access your data</li>
            <li>Correct your data</li>
            <li>Request deletion</li>
            <li>Object to processing</li>
          </ul>
        </div>

        <div class=\"content-section\">
          <h2>7. Policy Updates</h2>
          <p>
            This policy may be updated. Continued use means acceptance of changes.
          </p>
        </div>

      </div>

      <!-- Contact -->
      <div class=\"privacy-contact\">
        <h2>Contact Us</h2>
        <p><strong>Email:</strong> privacy@example.com</p>
        <p><strong>Address:</strong> 123 Privacy Street, Security City</p>
      </div>

    </div>

  </section>
  <!-- End Privacy Section -->

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
        return "front/privacy.html.twig";
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
        return array (  111 => 15,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'front/base.html.twig' %}

{% block title %}Privacy{% endblock %}

{% block body %}

<main class=\"main privacy-page\">

  <!-- Page Title -->
  <div class=\"page-title light-background\">
    <div class=\"container d-lg-flex justify-content-between align-items-center\">
      <h1 class=\"mb-2 mb-lg-0\">Privacy</h1>
      <nav class=\"breadcrumbs\">
        <ol>
          <li><a href=\"{{ path('app_home') }}\">Home</a></li>
          <li class=\"current\">Privacy</li>
        </ol>
      </nav>
    </div>
  </div>
  <!-- End Page Title -->

  <!-- Privacy Section -->
  <section id=\"privacy\" class=\"privacy section\">

    <div class=\"container\" data-aos=\"fade-up\">

      <!-- Header -->
      <div class=\"privacy-header\">
        <div class=\"header-content\">
          <div class=\"last-updated\">Effective Date: February 27, 2025</div>
          <h1>Privacy Policy</h1>
          <p class=\"intro-text\">
            This Privacy Policy describes how we collect, use, process, and disclose your information,
            including personal information, in conjunction with your access to and use of our services.
          </p>
        </div>
      </div>

      <!-- Content -->
      <div class=\"privacy-content\">

        <div class=\"content-section\">
          <h2>1. Introduction</h2>
          <p>
            When you use our services, you're trusting us with your information. We understand this is a
            big responsibility and work hard to protect your information.
          </p>
        </div>

        <div class=\"content-section\">
          <h2>2. Information We Collect</h2>

          <h3>2.1 Information You Provide</h3>
          <ul>
            <li>Your name and contact information</li>
            <li>Account credentials</li>
            <li>Payment information when required</li>
            <li>Communication preferences</li>
          </ul>

          <h3>2.2 Automatic Information</h3>
          <ul>
            <li>Device information</li>
            <li>Usage statistics</li>
            <li>Browser type and settings</li>
          </ul>
        </div>

        <div class=\"content-section\">
          <h2>3. How We Use Your Information</h2>
          <ul>
            <li>Provide and personalize services</li>
            <li>Process transactions</li>
            <li>Improve platform performance</li>
            <li>Ensure security</li>
          </ul>
        </div>

        <div class=\"content-section\">
          <h2>4. Information Sharing</h2>
          <p>
            We do not share personal information except when legally required or with your consent.
          </p>
        </div>

        <div class=\"content-section\">
          <h2>5. Data Security</h2>
          <ul>
            <li>SSL encryption</li>
            <li>Restricted internal access</li>
            <li>Regular security reviews</li>
          </ul>
        </div>

        <div class=\"content-section\">
          <h2>6. Your Rights</h2>
          <ul>
            <li>Access your data</li>
            <li>Correct your data</li>
            <li>Request deletion</li>
            <li>Object to processing</li>
          </ul>
        </div>

        <div class=\"content-section\">
          <h2>7. Policy Updates</h2>
          <p>
            This policy may be updated. Continued use means acceptance of changes.
          </p>
        </div>

      </div>

      <!-- Contact -->
      <div class=\"privacy-contact\">
        <h2>Contact Us</h2>
        <p><strong>Email:</strong> privacy@example.com</p>
        <p><strong>Address:</strong> 123 Privacy Street, Security City</p>
      </div>

    </div>

  </section>
  <!-- End Privacy Section -->

</main>

{% endblock %}
", "front/privacy.html.twig", "C:\\Users\\user\\Desktop\\mentorai\\templates\\front\\privacy.html.twig");
    }
}
