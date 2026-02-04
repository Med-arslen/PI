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

/* front/instructors.html.twig */
class __TwigTemplate_109929e29d839c6910215b56d717a2ad extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/instructors.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/instructors.html.twig"));

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

        yield "Instructors";
        
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
<main class=\"main instructors-page\">

  <!-- Page Title -->
  <div class=\"page-title light-background\">
    <div class=\"container d-lg-flex justify-content-between align-items-center\">
      <h1 class=\"mb-2 mb-lg-0\">Instructors</h1>
      <nav class=\"breadcrumbs\">
        <ol>
          <li><a href=\"";
        // line 15
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_home");
        yield "\">Home</a></li>
          <li class=\"current\">Instructors</li>
        </ol>
      </nav>
    </div>
  </div>
  <!-- End Page Title -->

  <!-- Instructors Section -->
  <section id=\"instructors\" class=\"instructors section\">
    <div class=\"container\" data-aos=\"fade-up\" data-aos-delay=\"100\">
      <div class=\"row gy-4\">

        ";
        // line 28
        $context["instructors"] = [["name" => "Sarah Johnson", "specialty" => "Web Development", "img" => "education/teacher-2.webp", "students" => "2.1k", "rating" => "4.8"], ["name" => "Michael Chen", "specialty" => "Data Science", "img" => "education/teacher-7.webp", "students" => "3.5k", "rating" => "4.9"], ["name" => "Amanda Rodriguez", "specialty" => "UX Design", "img" => "education/teacher-4.webp", "students" => "1.8k", "rating" => "4.6"], ["name" => "David Thompson", "specialty" => "Digital Marketing", "img" => "education/teacher-9.webp", "students" => "2.9k", "rating" => "4.7"], ["name" => "Lisa Williams", "specialty" => "Business Analytics", "img" => "education/teacher-6.webp", "students" => "4.2k", "rating" => "5.0"], ["name" => "James Anderson", "specialty" => "Machine Learning", "img" => "education/teacher-1.webp", "students" => "3.1k", "rating" => "4.5"], ["name" => "Rachel Martinez", "specialty" => "Cybersecurity", "img" => "education/teacher-8.webp", "students" => "2.7k", "rating" => "4.8"], ["name" => "Kevin Taylor", "specialty" => "Cloud Computing", "img" => "education/teacher-10.webp", "students" => "3.8k", "rating" => "4.9"]];
        // line 38
        yield "
        ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["instructors"]) || array_key_exists("instructors", $context) ? $context["instructors"] : (function () { throw new RuntimeError('Variable "instructors" does not exist.', 39, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["instructor"]) {
            // line 40
            yield "        <div class=\"col-xl-3 col-lg-4 col-md-6\">
          <div class=\"instructor-card\">
            <div class=\"instructor-image\">
              <img src=\"";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("assets/img/" . CoreExtension::getAttribute($this->env, $this->source, $context["instructor"], "img", [], "any", false, false, false, 43))), "html", null, true);
            yield "\" class=\"img-fluid\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["instructor"], "name", [], "any", false, false, false, 43), "html", null, true);
            yield "\">
              <div class=\"overlay-content\">
                <div class=\"rating-stars\">
                  <i class=\"bi bi-star-fill\"></i>
                  <i class=\"bi bi-star-fill\"></i>
                  <i class=\"bi bi-star-fill\"></i>
                  <i class=\"bi bi-star-fill\"></i>
                  <i class=\"bi bi-star-half\"></i>
                  <span>";
            // line 51
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["instructor"], "rating", [], "any", false, false, false, 51), "html", null, true);
            yield "</span>
                </div>
              </div>
            </div>

            <div class=\"instructor-info\">
              <h5>";
            // line 57
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["instructor"], "name", [], "any", false, false, false, 57), "html", null, true);
            yield "</h5>
              <p class=\"specialty\">";
            // line 58
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["instructor"], "specialty", [], "any", false, false, false, 58), "html", null, true);
            yield "</p>

              <div class=\"stats-grid\">
                <div class=\"stat\">
                  <span class=\"number\">";
            // line 62
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["instructor"], "students", [], "any", false, false, false, 62), "html", null, true);
            yield "</span>
                  <span class=\"label\">Students</span>
                </div>
                <div class=\"stat\">
                  <span class=\"number\">";
            // line 66
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["instructor"], "rating", [], "any", false, false, false, 66), "html", null, true);
            yield "</span>
                  <span class=\"label\">Rating</span>
                </div>
              </div>

              <div class=\"action-buttons\">
                <a href=\"";
            // line 72
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_instructor_profile");
            yield "\" class=\"btn-view\">View Profile</a>
                <div class=\"social-links\">
                  <a href=\"#\"><i class=\"bi bi-linkedin\"></i></a>
                  <a href=\"#\"><i class=\"bi bi-twitter\"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['instructor'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        yield "
      </div>
    </div>
  </section>
  <!-- End Instructors Section -->

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
        return "front/instructors.html.twig";
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
        return array (  206 => 82,  190 => 72,  181 => 66,  174 => 62,  167 => 58,  163 => 57,  154 => 51,  141 => 43,  136 => 40,  132 => 39,  129 => 38,  127 => 28,  111 => 15,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'front/base.html.twig' %}

{% block title %}Instructors{% endblock %}

{% block body %}

<main class=\"main instructors-page\">

  <!-- Page Title -->
  <div class=\"page-title light-background\">
    <div class=\"container d-lg-flex justify-content-between align-items-center\">
      <h1 class=\"mb-2 mb-lg-0\">Instructors</h1>
      <nav class=\"breadcrumbs\">
        <ol>
          <li><a href=\"{{ path('front_home') }}\">Home</a></li>
          <li class=\"current\">Instructors</li>
        </ol>
      </nav>
    </div>
  </div>
  <!-- End Page Title -->

  <!-- Instructors Section -->
  <section id=\"instructors\" class=\"instructors section\">
    <div class=\"container\" data-aos=\"fade-up\" data-aos-delay=\"100\">
      <div class=\"row gy-4\">

        {% set instructors = [
          { name: 'Sarah Johnson', specialty: 'Web Development', img: 'education/teacher-2.webp', students: '2.1k', rating: '4.8' },
          { name: 'Michael Chen', specialty: 'Data Science', img: 'education/teacher-7.webp', students: '3.5k', rating: '4.9' },
          { name: 'Amanda Rodriguez', specialty: 'UX Design', img: 'education/teacher-4.webp', students: '1.8k', rating: '4.6' },
          { name: 'David Thompson', specialty: 'Digital Marketing', img: 'education/teacher-9.webp', students: '2.9k', rating: '4.7' },
          { name: 'Lisa Williams', specialty: 'Business Analytics', img: 'education/teacher-6.webp', students: '4.2k', rating: '5.0' },
          { name: 'James Anderson', specialty: 'Machine Learning', img: 'education/teacher-1.webp', students: '3.1k', rating: '4.5' },
          { name: 'Rachel Martinez', specialty: 'Cybersecurity', img: 'education/teacher-8.webp', students: '2.7k', rating: '4.8' },
          { name: 'Kevin Taylor', specialty: 'Cloud Computing', img: 'education/teacher-10.webp', students: '3.8k', rating: '4.9' }
        ] %}

        {% for instructor in instructors %}
        <div class=\"col-xl-3 col-lg-4 col-md-6\">
          <div class=\"instructor-card\">
            <div class=\"instructor-image\">
              <img src=\"{{ asset('assets/img/' ~ instructor.img) }}\" class=\"img-fluid\" alt=\"{{ instructor.name }}\">
              <div class=\"overlay-content\">
                <div class=\"rating-stars\">
                  <i class=\"bi bi-star-fill\"></i>
                  <i class=\"bi bi-star-fill\"></i>
                  <i class=\"bi bi-star-fill\"></i>
                  <i class=\"bi bi-star-fill\"></i>
                  <i class=\"bi bi-star-half\"></i>
                  <span>{{ instructor.rating }}</span>
                </div>
              </div>
            </div>

            <div class=\"instructor-info\">
              <h5>{{ instructor.name }}</h5>
              <p class=\"specialty\">{{ instructor.specialty }}</p>

              <div class=\"stats-grid\">
                <div class=\"stat\">
                  <span class=\"number\">{{ instructor.students }}</span>
                  <span class=\"label\">Students</span>
                </div>
                <div class=\"stat\">
                  <span class=\"number\">{{ instructor.rating }}</span>
                  <span class=\"label\">Rating</span>
                </div>
              </div>

              <div class=\"action-buttons\">
                <a href=\"{{ path('front_instructor_profile') }}\" class=\"btn-view\">View Profile</a>
                <div class=\"social-links\">
                  <a href=\"#\"><i class=\"bi bi-linkedin\"></i></a>
                  <a href=\"#\"><i class=\"bi bi-twitter\"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        {% endfor %}

      </div>
    </div>
  </section>
  <!-- End Instructors Section -->

</main>

{% endblock %}
", "front/instructors.html.twig", "C:\\Users\\user\\Desktop\\mentorai\\templates\\front\\instructors.html.twig");
    }
}
