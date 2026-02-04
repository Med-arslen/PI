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

/* front/enroll.html.twig */
class __TwigTemplate_0a1f7126ffa02a5393f76e213b64638a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/enroll.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/enroll.html.twig"));

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

        yield "Enroll";
        
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
<main class=\"main enroll-page\">

  <!-- Page Title -->
  <div class=\"page-title light-background\">
    <div class=\"container d-lg-flex justify-content-between align-items-center\">
      <h1 class=\"mb-2 mb-lg-0\">Enrollment</h1>
      <nav class=\"breadcrumbs\">
        <ol>
          <li><a href=\"";
        // line 15
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">Home</a></li>
          <li class=\"current\">Enroll</li>
        </ol>
      </nav>
    </div>
  </div><!-- End Page Title -->

  <!-- Enroll Section -->
  <section id=\"enroll\" class=\"enroll section\">

    <div class=\"container\" data-aos=\"fade-up\" data-aos-delay=\"100\">

      <div class=\"row\">
        <div class=\"col-lg-8 mx-auto\">
          <div class=\"enrollment-form-wrapper\">

            <div class=\"enrollment-header text-center mb-5\" data-aos=\"fade-up\" data-aos-delay=\"200\">
              <h2>Enroll in Your Dream Course</h2>
              <p>Take the next step in your educational journey. Complete the form below to secure your spot in our comprehensive online learning program.</p>
            </div>

            <form class=\"enrollment-form\" data-aos=\"fade-up\" data-aos-delay=\"300\">

              <div class=\"row mb-4\">
                <div class=\"col-md-6\">
                  <div class=\"form-group\">
                    <label class=\"form-label\">First Name *</label>
                    <input type=\"text\" class=\"form-control\" required>
                  </div>
                </div>
                <div class=\"col-md-6\">
                  <div class=\"form-group\">
                    <label class=\"form-label\">Last Name *</label>
                    <input type=\"text\" class=\"form-control\" required>
                  </div>
                </div>
              </div>

              <div class=\"row mb-4\">
                <div class=\"col-md-6\">
                  <div class=\"form-group\">
                    <label class=\"form-label\">Email *</label>
                    <input type=\"email\" class=\"form-control\" required>
                  </div>
                </div>
                <div class=\"col-md-6\">
                  <div class=\"form-group\">
                    <label class=\"form-label\">Phone</label>
                    <input type=\"tel\" class=\"form-control\">
                  </div>
                </div>
              </div>

              <div class=\"row mb-4\">
                <div class=\"col-12\">
                  <div class=\"form-group\">
                    <label class=\"form-label\">Select Course *</label>
                    <select class=\"form-select\" required>
                      <option value=\"\">Choose a course...</option>
                      <option>Full Stack Web Development</option>
                      <option>Data Science & Analytics</option>
                      <option>Digital Marketing</option>
                      <option>UI / UX Design</option>
                      <option>Cybersecurity</option>
                    </select>
                  </div>
                </div>
              </div>

              <div class=\"row mb-4\">
                <div class=\"col-md-6\">
                  <div class=\"form-group\">
                    <label class=\"form-label\">Education Level</label>
                    <select class=\"form-select\">
                      <option value=\"\">Select...</option>
                      <option>High School</option>
                      <option>Bachelor</option>
                      <option>Master</option>
                      <option>Doctorate</option>
                    </select>
                  </div>
                </div>
                <div class=\"col-md-6\">
                  <div class=\"form-group\">
                    <label class=\"form-label\">Experience Level</label>
                    <select class=\"form-select\">
                      <option>Beginner</option>
                      <option>Intermediate</option>
                      <option>Advanced</option>
                    </select>
                  </div>
                </div>
              </div>

              <div class=\"row mb-4\">
                <div class=\"col-12\">
                  <div class=\"form-group\">
                    <label class=\"form-label\">Motivation</label>
                    <textarea class=\"form-control\" rows=\"4\"></textarea>
                  </div>
                </div>
              </div>

              <div class=\"row mb-4\">
                <div class=\"col-12\">
                  <div class=\"form-check\">
                    <input class=\"form-check-input\" type=\"checkbox\" required>
                    <label class=\"form-check-label\">
                      I agree to the Terms & Privacy Policy
                    </label>
                  </div>
                </div>
              </div>

              <div class=\"text-center\">
                <button class=\"btn btn-enroll\">
                  <i class=\"bi bi-check-circle me-2\"></i> Enroll Now
                </button>
              </div>

            </form>

          </div>
        </div>

        <div class=\"col-lg-4 d-none d-lg-block\">
          <div class=\"enrollment-benefits\" data-aos=\"fade-left\" data-aos-delay=\"400\">
            <h3>Why Choose Our Courses?</h3>

            <div class=\"benefit-item\">
              <i class=\"bi bi-trophy\"></i>
              <div>
                <h4>Expert Instructors</h4>
                <p>Learn from professionals</p>
              </div>
            </div>

            <div class=\"benefit-item\">
              <i class=\"bi bi-clock\"></i>
              <div>
                <h4>Flexible Learning</h4>
                <p>Study anytime</p>
              </div>
            </div>

            <div class=\"benefit-item\">
              <i class=\"bi bi-award\"></i>
              <div>
                <h4>Certification</h4>
                <p>Recognized certificates</p>
              </div>
            </div>

          </div>
        </div>

      </div>

    </div>

  </section><!-- /Enroll Section -->

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
        return "front/enroll.html.twig";
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

{% block title %}Enroll{% endblock %}

{% block body %}

<main class=\"main enroll-page\">

  <!-- Page Title -->
  <div class=\"page-title light-background\">
    <div class=\"container d-lg-flex justify-content-between align-items-center\">
      <h1 class=\"mb-2 mb-lg-0\">Enrollment</h1>
      <nav class=\"breadcrumbs\">
        <ol>
          <li><a href=\"{{ path('app_home') }}\">Home</a></li>
          <li class=\"current\">Enroll</li>
        </ol>
      </nav>
    </div>
  </div><!-- End Page Title -->

  <!-- Enroll Section -->
  <section id=\"enroll\" class=\"enroll section\">

    <div class=\"container\" data-aos=\"fade-up\" data-aos-delay=\"100\">

      <div class=\"row\">
        <div class=\"col-lg-8 mx-auto\">
          <div class=\"enrollment-form-wrapper\">

            <div class=\"enrollment-header text-center mb-5\" data-aos=\"fade-up\" data-aos-delay=\"200\">
              <h2>Enroll in Your Dream Course</h2>
              <p>Take the next step in your educational journey. Complete the form below to secure your spot in our comprehensive online learning program.</p>
            </div>

            <form class=\"enrollment-form\" data-aos=\"fade-up\" data-aos-delay=\"300\">

              <div class=\"row mb-4\">
                <div class=\"col-md-6\">
                  <div class=\"form-group\">
                    <label class=\"form-label\">First Name *</label>
                    <input type=\"text\" class=\"form-control\" required>
                  </div>
                </div>
                <div class=\"col-md-6\">
                  <div class=\"form-group\">
                    <label class=\"form-label\">Last Name *</label>
                    <input type=\"text\" class=\"form-control\" required>
                  </div>
                </div>
              </div>

              <div class=\"row mb-4\">
                <div class=\"col-md-6\">
                  <div class=\"form-group\">
                    <label class=\"form-label\">Email *</label>
                    <input type=\"email\" class=\"form-control\" required>
                  </div>
                </div>
                <div class=\"col-md-6\">
                  <div class=\"form-group\">
                    <label class=\"form-label\">Phone</label>
                    <input type=\"tel\" class=\"form-control\">
                  </div>
                </div>
              </div>

              <div class=\"row mb-4\">
                <div class=\"col-12\">
                  <div class=\"form-group\">
                    <label class=\"form-label\">Select Course *</label>
                    <select class=\"form-select\" required>
                      <option value=\"\">Choose a course...</option>
                      <option>Full Stack Web Development</option>
                      <option>Data Science & Analytics</option>
                      <option>Digital Marketing</option>
                      <option>UI / UX Design</option>
                      <option>Cybersecurity</option>
                    </select>
                  </div>
                </div>
              </div>

              <div class=\"row mb-4\">
                <div class=\"col-md-6\">
                  <div class=\"form-group\">
                    <label class=\"form-label\">Education Level</label>
                    <select class=\"form-select\">
                      <option value=\"\">Select...</option>
                      <option>High School</option>
                      <option>Bachelor</option>
                      <option>Master</option>
                      <option>Doctorate</option>
                    </select>
                  </div>
                </div>
                <div class=\"col-md-6\">
                  <div class=\"form-group\">
                    <label class=\"form-label\">Experience Level</label>
                    <select class=\"form-select\">
                      <option>Beginner</option>
                      <option>Intermediate</option>
                      <option>Advanced</option>
                    </select>
                  </div>
                </div>
              </div>

              <div class=\"row mb-4\">
                <div class=\"col-12\">
                  <div class=\"form-group\">
                    <label class=\"form-label\">Motivation</label>
                    <textarea class=\"form-control\" rows=\"4\"></textarea>
                  </div>
                </div>
              </div>

              <div class=\"row mb-4\">
                <div class=\"col-12\">
                  <div class=\"form-check\">
                    <input class=\"form-check-input\" type=\"checkbox\" required>
                    <label class=\"form-check-label\">
                      I agree to the Terms & Privacy Policy
                    </label>
                  </div>
                </div>
              </div>

              <div class=\"text-center\">
                <button class=\"btn btn-enroll\">
                  <i class=\"bi bi-check-circle me-2\"></i> Enroll Now
                </button>
              </div>

            </form>

          </div>
        </div>

        <div class=\"col-lg-4 d-none d-lg-block\">
          <div class=\"enrollment-benefits\" data-aos=\"fade-left\" data-aos-delay=\"400\">
            <h3>Why Choose Our Courses?</h3>

            <div class=\"benefit-item\">
              <i class=\"bi bi-trophy\"></i>
              <div>
                <h4>Expert Instructors</h4>
                <p>Learn from professionals</p>
              </div>
            </div>

            <div class=\"benefit-item\">
              <i class=\"bi bi-clock\"></i>
              <div>
                <h4>Flexible Learning</h4>
                <p>Study anytime</p>
              </div>
            </div>

            <div class=\"benefit-item\">
              <i class=\"bi bi-award\"></i>
              <div>
                <h4>Certification</h4>
                <p>Recognized certificates</p>
              </div>
            </div>

          </div>
        </div>

      </div>

    </div>

  </section><!-- /Enroll Section -->

</main>

{% endblock %}
", "front/enroll.html.twig", "C:\\Users\\user\\Desktop\\mentorai\\templates\\front\\enroll.html.twig");
    }
}
