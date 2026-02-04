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

/* front/courses.html.twig */
class __TwigTemplate_0079b40fd4b23b0762e101c46864cc45 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/courses.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/courses.html.twig"));

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
        yield "
<body class=\"courses-page\">

<main class=\"main\">

  <!-- Page Title -->
  <div class=\"page-title light-background\">
    <div class=\"container d-lg-flex justify-content-between align-items-center\">
      <h1 class=\"mb-2 mb-lg-0\">Courses</h1>
      <nav class=\"breadcrumbs\">
        <ol>
          <li><a href=\"";
        // line 15
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">Home</a></li>
          <li class=\"current\">Courses</li>
        </ol>
      </nav>
    </div>
  </div>
  <!-- End Page Title -->

  <!-- Courses Section -->
  <section id=\"courses-2\" class=\"courses-2 section\">

    <div class=\"container\" data-aos=\"fade-up\" data-aos-delay=\"100\">

      <div class=\"row\">

        <!-- Filters -->
        <div class=\"col-lg-3\">
          <div class=\"course-filters\" data-aos=\"fade-right\" data-aos-delay=\"100\">
            <h4 class=\"filter-title\">Filter Courses</h4>

            <div class=\"filter-group\">
              <h5>Category</h5>
              <div class=\"filter-options\">
                <label class=\"filter-checkbox\">
                  <input type=\"checkbox\" checked>
                  <span class=\"checkmark\"></span> All Categories
                </label>
                <label class=\"filter-checkbox\">
                  <input type=\"checkbox\">
                  <span class=\"checkmark\"></span> Programming
                </label>
                <label class=\"filter-checkbox\">
                  <input type=\"checkbox\">
                  <span class=\"checkmark\"></span> Design
                </label>
                <label class=\"filter-checkbox\">
                  <input type=\"checkbox\">
                  <span class=\"checkmark\"></span> Business
                </label>
                <label class=\"filter-checkbox\">
                  <input type=\"checkbox\">
                  <span class=\"checkmark\"></span> Marketing
                </label>
              </div>
            </div>

            <div class=\"filter-group\">
              <h5>Level</h5>
              <div class=\"filter-options\">
                <label class=\"filter-checkbox\">
                  <input type=\"checkbox\" checked>
                  <span class=\"checkmark\"></span> All Levels
                </label>
                <label class=\"filter-checkbox\">
                  <input type=\"checkbox\">
                  <span class=\"checkmark\"></span> Beginner
                </label>
                <label class=\"filter-checkbox\">
                  <input type=\"checkbox\">
                  <span class=\"checkmark\"></span> Intermediate
                </label>
                <label class=\"filter-checkbox\">
                  <input type=\"checkbox\">
                  <span class=\"checkmark\"></span> Advanced
                </label>
              </div>
            </div>
          </div>
        </div>
        <!-- End Filters -->

        <!-- Courses Grid -->
        <div class=\"col-lg-9\">

          <div class=\"courses-header\" data-aos=\"fade-left\" data-aos-delay=\"100\">
            <div class=\"search-box\">
              <i class=\"bi bi-search\"></i>
              <input type=\"text\" placeholder=\"Search courses...\">
            </div>
            <div class=\"sort-dropdown\">
              <select>
                <option>Sort by: Most Popular</option>
                <option>Newest First</option>
                <option>Price: Low to High</option>
                <option>Price: High to Low</option>
              </select>
            </div>
          </div>

          <div class=\"courses-grid\" data-aos=\"fade-up\" data-aos-delay=\"200\">
            <div class=\"row\">

              <!-- Course Card -->
              <div class=\"col-lg-6 col-md-6\">
                <div class=\"course-card\">
                  <div class=\"course-image\">
                    <img src=\"";
        // line 111
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/education/courses-3.webp"), "html", null, true);
        yield "\" class=\"img-fluid\" alt=\"\">
                    <div class=\"course-badge\">Best Seller</div>
                    <div class=\"course-price\">\$89</div>
                  </div>
                  <div class=\"course-content\">
                    <div class=\"course-meta\">
                      <span class=\"category\">Programming</span>
                      <span class=\"level\">Intermediate</span>
                    </div>
                    <h3>Advanced JavaScript Development</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <a href=\"#\" class=\"btn-course\">Enroll Now</a>
                  </div>
                </div>
              </div>

              <!-- Duplicate other course cards exactly the same way -->

            </div>
          </div>

          <!-- Pagination -->
          <div class=\"pagination-wrapper mt-4\">
            <nav>
              <ul class=\"pagination justify-content-center\">
                <li class=\"page-item active\"><a class=\"page-link\" href=\"#\">1</a></li>
                <li class=\"page-item\"><a class=\"page-link\" href=\"#\">2</a></li>
                <li class=\"page-item\"><a class=\"page-link\" href=\"#\">3</a></li>
              </ul>
            </nav>
          </div>

        </div>
        <!-- End Courses Grid -->

      </div>

    </div>

  </section>
  <!-- End Courses Section -->

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
        return "front/courses.html.twig";
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
        return array (  188 => 111,  89 => 15,  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'front/base.html.twig' %}

{% block body %}

<body class=\"courses-page\">

<main class=\"main\">

  <!-- Page Title -->
  <div class=\"page-title light-background\">
    <div class=\"container d-lg-flex justify-content-between align-items-center\">
      <h1 class=\"mb-2 mb-lg-0\">Courses</h1>
      <nav class=\"breadcrumbs\">
        <ol>
          <li><a href=\"{{ path('app_home') }}\">Home</a></li>
          <li class=\"current\">Courses</li>
        </ol>
      </nav>
    </div>
  </div>
  <!-- End Page Title -->

  <!-- Courses Section -->
  <section id=\"courses-2\" class=\"courses-2 section\">

    <div class=\"container\" data-aos=\"fade-up\" data-aos-delay=\"100\">

      <div class=\"row\">

        <!-- Filters -->
        <div class=\"col-lg-3\">
          <div class=\"course-filters\" data-aos=\"fade-right\" data-aos-delay=\"100\">
            <h4 class=\"filter-title\">Filter Courses</h4>

            <div class=\"filter-group\">
              <h5>Category</h5>
              <div class=\"filter-options\">
                <label class=\"filter-checkbox\">
                  <input type=\"checkbox\" checked>
                  <span class=\"checkmark\"></span> All Categories
                </label>
                <label class=\"filter-checkbox\">
                  <input type=\"checkbox\">
                  <span class=\"checkmark\"></span> Programming
                </label>
                <label class=\"filter-checkbox\">
                  <input type=\"checkbox\">
                  <span class=\"checkmark\"></span> Design
                </label>
                <label class=\"filter-checkbox\">
                  <input type=\"checkbox\">
                  <span class=\"checkmark\"></span> Business
                </label>
                <label class=\"filter-checkbox\">
                  <input type=\"checkbox\">
                  <span class=\"checkmark\"></span> Marketing
                </label>
              </div>
            </div>

            <div class=\"filter-group\">
              <h5>Level</h5>
              <div class=\"filter-options\">
                <label class=\"filter-checkbox\">
                  <input type=\"checkbox\" checked>
                  <span class=\"checkmark\"></span> All Levels
                </label>
                <label class=\"filter-checkbox\">
                  <input type=\"checkbox\">
                  <span class=\"checkmark\"></span> Beginner
                </label>
                <label class=\"filter-checkbox\">
                  <input type=\"checkbox\">
                  <span class=\"checkmark\"></span> Intermediate
                </label>
                <label class=\"filter-checkbox\">
                  <input type=\"checkbox\">
                  <span class=\"checkmark\"></span> Advanced
                </label>
              </div>
            </div>
          </div>
        </div>
        <!-- End Filters -->

        <!-- Courses Grid -->
        <div class=\"col-lg-9\">

          <div class=\"courses-header\" data-aos=\"fade-left\" data-aos-delay=\"100\">
            <div class=\"search-box\">
              <i class=\"bi bi-search\"></i>
              <input type=\"text\" placeholder=\"Search courses...\">
            </div>
            <div class=\"sort-dropdown\">
              <select>
                <option>Sort by: Most Popular</option>
                <option>Newest First</option>
                <option>Price: Low to High</option>
                <option>Price: High to Low</option>
              </select>
            </div>
          </div>

          <div class=\"courses-grid\" data-aos=\"fade-up\" data-aos-delay=\"200\">
            <div class=\"row\">

              <!-- Course Card -->
              <div class=\"col-lg-6 col-md-6\">
                <div class=\"course-card\">
                  <div class=\"course-image\">
                    <img src=\"{{ asset('assets/img/education/courses-3.webp') }}\" class=\"img-fluid\" alt=\"\">
                    <div class=\"course-badge\">Best Seller</div>
                    <div class=\"course-price\">\$89</div>
                  </div>
                  <div class=\"course-content\">
                    <div class=\"course-meta\">
                      <span class=\"category\">Programming</span>
                      <span class=\"level\">Intermediate</span>
                    </div>
                    <h3>Advanced JavaScript Development</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <a href=\"#\" class=\"btn-course\">Enroll Now</a>
                  </div>
                </div>
              </div>

              <!-- Duplicate other course cards exactly the same way -->

            </div>
          </div>

          <!-- Pagination -->
          <div class=\"pagination-wrapper mt-4\">
            <nav>
              <ul class=\"pagination justify-content-center\">
                <li class=\"page-item active\"><a class=\"page-link\" href=\"#\">1</a></li>
                <li class=\"page-item\"><a class=\"page-link\" href=\"#\">2</a></li>
                <li class=\"page-item\"><a class=\"page-link\" href=\"#\">3</a></li>
              </ul>
            </nav>
          </div>

        </div>
        <!-- End Courses Grid -->

      </div>

    </div>

  </section>
  <!-- End Courses Section -->

</main>

</body>

{% endblock %}
", "front/courses.html.twig", "C:\\Users\\user\\Desktop\\mentorai\\templates\\front\\courses.html.twig");
    }
}
