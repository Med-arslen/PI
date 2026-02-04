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

/* back/404.html.twig */
class __TwigTemplate_b2515f0544de85e197e18958e4127a4e extends Template
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
        return "back/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/404.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/404.html.twig"));

        $this->parent = $this->load("back/base.html.twig", 1);
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
        yield "
<main class=\"main\">

  <!-- Page Title -->
  <div class=\"page-title light-background\">
    <div class=\"container d-lg-flex justify-content-between align-items-center\">
      <h1 class=\"mb-2 mb-lg-0\">404</h1>
      <nav class=\"breadcrumbs\">
        <ol>
          <li><a href=\"";
        // line 13
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">Home</a></li>
          <li class=\"current\">404</li>
        </ol>
      </nav>
    </div>
  </div>

  <!-- Error 404 Section -->
  <section id=\"error-404\" class=\"error-404 section\">

    <div class=\"container\" data-aos=\"fade-up\">

      <div class=\"error-wrapper\">
        <div class=\"row align-items-center\">

          <div class=\"col-lg-6\">
            <div class=\"error-illustration\">
              <i class=\"bi bi-exclamation-triangle-fill\"></i>
            </div>
          </div>

          <div class=\"col-lg-6\">
            <div class=\"error-content\">
              <span class=\"error-badge\">Error</span>
              <h1 class=\"error-code\">404</h1>
              <h2 class=\"error-title\">Page Not Found</h2>

              <p class=\"error-description\">
                The page you are looking for might have been removed or is temporarily unavailable.
              </p>

              <div class=\"error-actions\">
                <a href=\"";
        // line 45
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"btn-home\">
                  <i class=\"bi bi-house-door\"></i> Back to Home
                </a>
              </div>

            </div>
          </div>

        </div>
      </div>

    </div>

  </section>

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
        return "back/404.html.twig";
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
        return array (  122 => 45,  87 => 13,  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'back/base.html.twig' %}

{% block body %}

<main class=\"main\">

  <!-- Page Title -->
  <div class=\"page-title light-background\">
    <div class=\"container d-lg-flex justify-content-between align-items-center\">
      <h1 class=\"mb-2 mb-lg-0\">404</h1>
      <nav class=\"breadcrumbs\">
        <ol>
          <li><a href=\"{{ path('app_home') }}\">Home</a></li>
          <li class=\"current\">404</li>
        </ol>
      </nav>
    </div>
  </div>

  <!-- Error 404 Section -->
  <section id=\"error-404\" class=\"error-404 section\">

    <div class=\"container\" data-aos=\"fade-up\">

      <div class=\"error-wrapper\">
        <div class=\"row align-items-center\">

          <div class=\"col-lg-6\">
            <div class=\"error-illustration\">
              <i class=\"bi bi-exclamation-triangle-fill\"></i>
            </div>
          </div>

          <div class=\"col-lg-6\">
            <div class=\"error-content\">
              <span class=\"error-badge\">Error</span>
              <h1 class=\"error-code\">404</h1>
              <h2 class=\"error-title\">Page Not Found</h2>

              <p class=\"error-description\">
                The page you are looking for might have been removed or is temporarily unavailable.
              </p>

              <div class=\"error-actions\">
                <a href=\"{{ path('app_home') }}\" class=\"btn-home\">
                  <i class=\"bi bi-house-door\"></i> Back to Home
                </a>
              </div>

            </div>
          </div>

        </div>
      </div>

    </div>

  </section>

</main>

{% endblock %}
", "back/404.html.twig", "C:\\Users\\user\\Desktop\\mentorai\\templates\\back\\404.html.twig");
    }
}
