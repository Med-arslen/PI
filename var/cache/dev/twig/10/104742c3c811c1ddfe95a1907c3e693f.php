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

/* front/about.html.twig */
class __TwigTemplate_949fcdab3e4cfe181a191d0bc7367512 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/about.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/about.html.twig"));

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
        yield "<main class=\"main\">

  <div class=\"page-title light-background\">
    <div class=\"container d-lg-flex justify-content-between align-items-center\">
      <h1 class=\"mb-2 mb-lg-0\">About</h1>
      <nav class=\"breadcrumbs\">
        <ol>
          <li><a href=\"/\">Home</a></li>
          <li class=\"current\">About</li>
        </ol>
      </nav>
    </div>
  </div>

  <section id=\"about\" class=\"about section\">
    <div class=\"container\" data-aos=\"fade-up\" data-aos-delay=\"100\">

      <div class=\"row align-items-center\">
        <div class=\"col-lg-6\" data-aos=\"fade-up\" data-aos-delay=\"200\">
          <img src=\"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/education/education-square-2.webp"), "html", null, true);
        yield "\" class=\"img-fluid rounded-4\" alt=\"\">
        </div>
        <div class=\"col-lg-6\" data-aos=\"fade-up\" data-aos-delay=\"300\">
          <span class=\"subtitle\">About Us</span>
          <h2>Empowering Future Leaders Through Quality Education</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>

          <div class=\"stats-row\">
            <div class=\"stats-item\"><span class=\"count\">15</span><p>Years of Experience</p></div>
            <div class=\"stats-item\"><span class=\"count\">200+</span><p>Expert Instructors</p></div>
            <div class=\"stats-item\"><span class=\"count\">50k+</span><p>Students Worldwide</p></div>
          </div>
        </div>
      </div>

      <div class=\"row mt-5 pt-4\">
        <div class=\"col-lg-4\">
          <div class=\"mission-card\">
            <i class=\"bi bi-bullseye\"></i>
            <h3>Our Mission</h3>
            <p>Lorem ipsum dolor sit amet.</p>
          </div>
        </div>

        <div class=\"col-lg-4\">
          <div class=\"mission-card\">
            <i class=\"bi bi-eye\"></i>
            <h3>Our Vision</h3>
            <p>Lorem ipsum dolor sit amet.</p>
          </div>
        </div>

        <div class=\"col-lg-4\">
          <div class=\"mission-card\">
            <i class=\"bi bi-award\"></i>
            <h3>Our Values</h3>
            <p>Lorem ipsum dolor sit amet.</p>
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
        return "front/about.html.twig";
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
        return array (  97 => 23,  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'front/base.html.twig' %}

{% block body %}
<main class=\"main\">

  <div class=\"page-title light-background\">
    <div class=\"container d-lg-flex justify-content-between align-items-center\">
      <h1 class=\"mb-2 mb-lg-0\">About</h1>
      <nav class=\"breadcrumbs\">
        <ol>
          <li><a href=\"/\">Home</a></li>
          <li class=\"current\">About</li>
        </ol>
      </nav>
    </div>
  </div>

  <section id=\"about\" class=\"about section\">
    <div class=\"container\" data-aos=\"fade-up\" data-aos-delay=\"100\">

      <div class=\"row align-items-center\">
        <div class=\"col-lg-6\" data-aos=\"fade-up\" data-aos-delay=\"200\">
          <img src=\"{{ asset('assets/img/education/education-square-2.webp') }}\" class=\"img-fluid rounded-4\" alt=\"\">
        </div>
        <div class=\"col-lg-6\" data-aos=\"fade-up\" data-aos-delay=\"300\">
          <span class=\"subtitle\">About Us</span>
          <h2>Empowering Future Leaders Through Quality Education</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>

          <div class=\"stats-row\">
            <div class=\"stats-item\"><span class=\"count\">15</span><p>Years of Experience</p></div>
            <div class=\"stats-item\"><span class=\"count\">200+</span><p>Expert Instructors</p></div>
            <div class=\"stats-item\"><span class=\"count\">50k+</span><p>Students Worldwide</p></div>
          </div>
        </div>
      </div>

      <div class=\"row mt-5 pt-4\">
        <div class=\"col-lg-4\">
          <div class=\"mission-card\">
            <i class=\"bi bi-bullseye\"></i>
            <h3>Our Mission</h3>
            <p>Lorem ipsum dolor sit amet.</p>
          </div>
        </div>

        <div class=\"col-lg-4\">
          <div class=\"mission-card\">
            <i class=\"bi bi-eye\"></i>
            <h3>Our Vision</h3>
            <p>Lorem ipsum dolor sit amet.</p>
          </div>
        </div>

        <div class=\"col-lg-4\">
          <div class=\"mission-card\">
            <i class=\"bi bi-award\"></i>
            <h3>Our Values</h3>
            <p>Lorem ipsum dolor sit amet.</p>
          </div>
        </div>
      </div>

    </div>
  </section>

</main>
{% endblock %}
", "front/about.html.twig", "C:\\Users\\user\\Desktop\\mentorai\\templates\\front\\about.html.twig");
    }
}
