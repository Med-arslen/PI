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

/* front/instructor-profile.html.twig */
class __TwigTemplate_1973b5318d996986ffe4194e4b56958f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/instructor-profile.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/instructor-profile.html.twig"));

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

        yield "Instructor Profile";
        
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
<main class=\"main instructor-profile-page\">

  <!-- Page Title -->
  <div class=\"page-title light-background\">
    <div class=\"container d-lg-flex justify-content-between align-items-center\">
      <h1 class=\"mb-2 mb-lg-0\">Instructor Profile</h1>
      <nav class=\"breadcrumbs\">
        <ol>
          <li><a href=\"";
        // line 15
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_home");
        yield "\">Home</a></li>
          <li class=\"current\">Instructor Profile</li>
        </ol>
      </nav>
    </div>
  </div>
  <!-- End Page Title -->

  <!-- Instructor Profile Section -->
  <section id=\"instructor-profile\" class=\"instructor-profile section\">

    <div class=\"container\" data-aos=\"fade-up\" data-aos-delay=\"100\">

      <div class=\"row\">
        <div class=\"col-lg-12\">
          <div class=\"instructor-hero-banner\" data-aos=\"zoom-out\" data-aos-delay=\"200\">
            <div class=\"hero-background\">
              <img src=\"";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/education/showcase-4.webp"), "html", null, true);
        yield "\" class=\"img-fluid\" alt=\"\">
              <div class=\"hero-overlay\"></div>
            </div>

            <div class=\"hero-content\">
              <div class=\"instructor-avatar\">
                <img src=\"";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/education/teacher-7.webp"), "html", null, true);
        yield "\" class=\"img-fluid\" alt=\"\">
                <div class=\"status-badge\">
                  <i class=\"bi bi-patch-check-fill\"></i>
                  <span>Verified</span>
                </div>
              </div>

              <div class=\"instructor-info\">
                <h2>Prof. Alexandra Chen</h2>
                <p class=\"title\">Machine Learning &amp; AI Specialist</p>

                <div class=\"credentials\">
                  <span class=\"credential\">Ph.D. MIT</span>
                  <span class=\"credential\">10+ Years</span>
                  <span class=\"credential\">15,247 Students</span>
                </div>

                <div class=\"rating-overview\">
                  <div class=\"stars\">
                    <i class=\"bi bi-star-fill\"></i>
                    <i class=\"bi bi-star-fill\"></i>
                    <i class=\"bi bi-star-fill\"></i>
                    <i class=\"bi bi-star-fill\"></i>
                    <i class=\"bi bi-star-half\"></i>
                  </div>
                  <span class=\"rating-text\">4.9 rating from 3,821 reviews</span>
                </div>

                <div class=\"contact-actions\">
                  <a href=\"#\" class=\"btn-contact\">
                    <i class=\"bi bi-envelope\"></i>
                    Contact Instructor
                  </a>
                  <div class=\"social-media\">
                    <a href=\"#\"><i class=\"bi bi-linkedin\"></i></a>
                    <a href=\"#\"><i class=\"bi bi-twitter-x\"></i></a>
                    <a href=\"#\"><i class=\"bi bi-youtube\"></i></a>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>

      <div class=\"row gy-5 mt-4\">

        <!-- LEFT CONTENT -->
        <div class=\"col-lg-8\">
          <div class=\"content-tabs\" data-aos=\"fade-right\" data-aos-delay=\"300\">

            <ul class=\"nav nav-tabs custom-tabs\" role=\"tablist\">
              <li class=\"nav-item\">
                <button class=\"nav-link active\" data-bs-toggle=\"tab\" data-bs-target=\"#about\" type=\"button\">
                  <i class=\"bi bi-person\"></i> About
                </button>
              </li>
              <li class=\"nav-item\">
                <button class=\"nav-link\" data-bs-toggle=\"tab\" data-bs-target=\"#experience\" type=\"button\">
                  <i class=\"bi bi-briefcase\"></i> Experience
                </button>
              </li>
              <li class=\"nav-item\">
                <button class=\"nav-link\" data-bs-toggle=\"tab\" data-bs-target=\"#courses\" type=\"button\">
                  <i class=\"bi bi-book\"></i> Courses
                </button>
              </li>
              <li class=\"nav-item\">
                <button class=\"nav-link\" data-bs-toggle=\"tab\" data-bs-target=\"#reviews\" type=\"button\">
                  <i class=\"bi bi-star\"></i> Reviews
                </button>
              </li>
            </ul>

            <div class=\"tab-content custom-tab-content\">

              <div class=\"tab-pane fade show active\" id=\"about\">
                <p>
                  Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.
                </p>
              </div>

              <div class=\"tab-pane fade\" id=\"experience\">
                <p>Professional experience timeline…</p>
              </div>

              <div class=\"tab-pane fade\" id=\"courses\">
                <p>Courses taught by the instructor…</p>
              </div>

              <div class=\"tab-pane fade\" id=\"reviews\">
                <p>Student reviews…</p>
              </div>

            </div>

          </div>
        </div>

        <!-- SIDEBAR -->
        <div class=\"col-lg-4\">
          <div class=\"sidebar-widgets\" data-aos=\"fade-left\" data-aos-delay=\"300\">

            <div class=\"stats-widget\">
              <h4>Teaching Impact</h4>
              <ul>
                <li>15,247 Students</li>
                <li>18 Active Courses</li>
                <li>94% Completion Rate</li>
                <li>10+ Years Teaching</li>
              </ul>
            </div>

          </div>
        </div>

      </div>

    </div>
  </section>
  <!-- /Instructor Profile Section -->

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
        return "front/instructor-profile.html.twig";
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
        return array (  140 => 38,  131 => 32,  111 => 15,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'front/base.html.twig' %}

{% block title %}Instructor Profile{% endblock %}

{% block body %}

<main class=\"main instructor-profile-page\">

  <!-- Page Title -->
  <div class=\"page-title light-background\">
    <div class=\"container d-lg-flex justify-content-between align-items-center\">
      <h1 class=\"mb-2 mb-lg-0\">Instructor Profile</h1>
      <nav class=\"breadcrumbs\">
        <ol>
          <li><a href=\"{{ path('front_home') }}\">Home</a></li>
          <li class=\"current\">Instructor Profile</li>
        </ol>
      </nav>
    </div>
  </div>
  <!-- End Page Title -->

  <!-- Instructor Profile Section -->
  <section id=\"instructor-profile\" class=\"instructor-profile section\">

    <div class=\"container\" data-aos=\"fade-up\" data-aos-delay=\"100\">

      <div class=\"row\">
        <div class=\"col-lg-12\">
          <div class=\"instructor-hero-banner\" data-aos=\"zoom-out\" data-aos-delay=\"200\">
            <div class=\"hero-background\">
              <img src=\"{{ asset('assets/img/education/showcase-4.webp') }}\" class=\"img-fluid\" alt=\"\">
              <div class=\"hero-overlay\"></div>
            </div>

            <div class=\"hero-content\">
              <div class=\"instructor-avatar\">
                <img src=\"{{ asset('assets/img/education/teacher-7.webp') }}\" class=\"img-fluid\" alt=\"\">
                <div class=\"status-badge\">
                  <i class=\"bi bi-patch-check-fill\"></i>
                  <span>Verified</span>
                </div>
              </div>

              <div class=\"instructor-info\">
                <h2>Prof. Alexandra Chen</h2>
                <p class=\"title\">Machine Learning &amp; AI Specialist</p>

                <div class=\"credentials\">
                  <span class=\"credential\">Ph.D. MIT</span>
                  <span class=\"credential\">10+ Years</span>
                  <span class=\"credential\">15,247 Students</span>
                </div>

                <div class=\"rating-overview\">
                  <div class=\"stars\">
                    <i class=\"bi bi-star-fill\"></i>
                    <i class=\"bi bi-star-fill\"></i>
                    <i class=\"bi bi-star-fill\"></i>
                    <i class=\"bi bi-star-fill\"></i>
                    <i class=\"bi bi-star-half\"></i>
                  </div>
                  <span class=\"rating-text\">4.9 rating from 3,821 reviews</span>
                </div>

                <div class=\"contact-actions\">
                  <a href=\"#\" class=\"btn-contact\">
                    <i class=\"bi bi-envelope\"></i>
                    Contact Instructor
                  </a>
                  <div class=\"social-media\">
                    <a href=\"#\"><i class=\"bi bi-linkedin\"></i></a>
                    <a href=\"#\"><i class=\"bi bi-twitter-x\"></i></a>
                    <a href=\"#\"><i class=\"bi bi-youtube\"></i></a>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>

      <div class=\"row gy-5 mt-4\">

        <!-- LEFT CONTENT -->
        <div class=\"col-lg-8\">
          <div class=\"content-tabs\" data-aos=\"fade-right\" data-aos-delay=\"300\">

            <ul class=\"nav nav-tabs custom-tabs\" role=\"tablist\">
              <li class=\"nav-item\">
                <button class=\"nav-link active\" data-bs-toggle=\"tab\" data-bs-target=\"#about\" type=\"button\">
                  <i class=\"bi bi-person\"></i> About
                </button>
              </li>
              <li class=\"nav-item\">
                <button class=\"nav-link\" data-bs-toggle=\"tab\" data-bs-target=\"#experience\" type=\"button\">
                  <i class=\"bi bi-briefcase\"></i> Experience
                </button>
              </li>
              <li class=\"nav-item\">
                <button class=\"nav-link\" data-bs-toggle=\"tab\" data-bs-target=\"#courses\" type=\"button\">
                  <i class=\"bi bi-book\"></i> Courses
                </button>
              </li>
              <li class=\"nav-item\">
                <button class=\"nav-link\" data-bs-toggle=\"tab\" data-bs-target=\"#reviews\" type=\"button\">
                  <i class=\"bi bi-star\"></i> Reviews
                </button>
              </li>
            </ul>

            <div class=\"tab-content custom-tab-content\">

              <div class=\"tab-pane fade show active\" id=\"about\">
                <p>
                  Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.
                </p>
              </div>

              <div class=\"tab-pane fade\" id=\"experience\">
                <p>Professional experience timeline…</p>
              </div>

              <div class=\"tab-pane fade\" id=\"courses\">
                <p>Courses taught by the instructor…</p>
              </div>

              <div class=\"tab-pane fade\" id=\"reviews\">
                <p>Student reviews…</p>
              </div>

            </div>

          </div>
        </div>

        <!-- SIDEBAR -->
        <div class=\"col-lg-4\">
          <div class=\"sidebar-widgets\" data-aos=\"fade-left\" data-aos-delay=\"300\">

            <div class=\"stats-widget\">
              <h4>Teaching Impact</h4>
              <ul>
                <li>15,247 Students</li>
                <li>18 Active Courses</li>
                <li>94% Completion Rate</li>
                <li>10+ Years Teaching</li>
              </ul>
            </div>

          </div>
        </div>

      </div>

    </div>
  </section>
  <!-- /Instructor Profile Section -->

</main>

{% endblock %}
", "front/instructor-profile.html.twig", "C:\\Users\\user\\Desktop\\mentorai\\templates\\front\\instructor-profile.html.twig");
    }
}
