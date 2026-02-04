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

/* back/blog.html.twig */
class __TwigTemplate_c10849202e578dcfca12c54dd8b1a438 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/blog.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/blog.html.twig"));

        $this->parent = $this->load("back/base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
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

        // line 5
        yield "
<body class=\"blog-page\">

<main class=\"main\">

  <!-- Page Title -->
  <div class=\"page-title light-background\">
    <div class=\"container d-lg-flex justify-content-between align-items-center\">
      <h1 class=\"mb-2 mb-lg-0\">Blog</h1>
      <nav class=\"breadcrumbs\">
        <ol>
          <li><a href=\"/\">Home</a></li>
          <li class=\"current\">Blog</li>
        </ol>
      </nav>
    </div>
  </div>

  <!-- Blog Hero Section -->
  <section id=\"blog-hero\" class=\"blog-hero section\">
    <div class=\"container\">

      <div class=\"blog-grid\">

        <!-- Featured Post -->
        <article class=\"blog-item featured\">
          <img src=\"";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/blog/blog-post-3.webp"), "html", null, true);
        yield "\" class=\"img-fluid\">
          <div class=\"blog-content\">
            <div class=\"post-meta\">
              <span class=\"date\">Apr. 14th, 2025</span>
              <span class=\"category\">Technology</span>
            </div>
            <h2 class=\"post-title\">
              <a href=\"/blog-details\">Lorem ipsum dolor sit amet, consectetur adipiscing elit</a>
            </h2>
          </div>
        </article>

        <!-- Regular Posts -->
        <article class=\"blog-item\">
          <img src=\"";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/blog/blog-post-portrait-1.webp"), "html", null, true);
        yield "\" class=\"img-fluid\">
          <div class=\"blog-content\">
            <div class=\"post-meta\">
              <span class=\"date\">Apr. 14th, 2025</span>
              <span class=\"category\">Security</span>
            </div>
            <h3 class=\"post-title\">
              <a href=\"/blog-details\">Sed do eiusmod tempor incididunt ut labore</a>
            </h3>
          </div>
        </article>

        <article class=\"blog-item\">
          <img src=\"";
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/blog/blog-post-9.webp"), "html", null, true);
        yield "\" class=\"img-fluid\">
          <div class=\"blog-content\">
            <div class=\"post-meta\">
              <span class=\"date\">Apr. 14th, 2025</span>
              <span class=\"category\">Career</span>
            </div>
            <h3 class=\"post-title\">
              <a href=\"/blog-details\">Ut enim ad minim veniam, quis nostrud exercitation</a>
            </h3>
          </div>
        </article>

        <article class=\"blog-item\">
          <img src=\"";
        // line 71
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/blog/blog-post-7.webp"), "html", null, true);
        yield "\" class=\"img-fluid\">
          <div class=\"blog-content\">
            <div class=\"post-meta\">
              <span class=\"date\">Apr. 14th, 2025</span>
              <span class=\"category\">Cloud</span>
            </div>
            <h3 class=\"post-title\">
              <a href=\"/blog-details\">Adipiscing elit, sed do eiusmod tempor</a>
            </h3>
          </div>
        </article>

        <article class=\"blog-item\">
          <img src=\"";
        // line 84
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/blog/blog-post-6.webp"), "html", null, true);
        yield "\" class=\"img-fluid\">
          <div class=\"blog-content\">
            <div class=\"post-meta\">
              <span class=\"date\">Apr. 14th, 2025</span>
              <span class=\"category\">Programming</span>
            </div>
            <h3 class=\"post-title\">
              <a href=\"/blog-details\">Excepteur sint occaecat cupidatat non proident</a>
            </h3>
          </div>
        </article>

      </div>

    </div>
  </section>

  <!-- Blog Posts Section -->
  <section id=\"blog-posts\" class=\"blog-posts section\">
    <div class=\"container\">
      <div class=\"row gy-4\">

        ";
        // line 106
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(1, 6));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 107
            yield "        <div class=\"col-lg-4\">
          <article class=\"position-relative h-100\">

            <div class=\"post-img\">
              <img src=\"";
            // line 111
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((("assets/img/blog/blog-post-" . $context["i"]) . ".webp")), "html", null, true);
            yield "\" class=\"img-fluid\">
            </div>

            <div class=\"meta d-flex align-items-end\">
              <span class=\"post-date\"><span>12</span> December</span>
              <div class=\"d-flex align-items-center\">
                <i class=\"bi bi-person\"></i><span class=\"ps-2\">Author</span>
              </div>
            </div>

            <div class=\"post-content\">
              <h3 class=\"post-title\">Sample blog title</h3>
              <a href=\"/blog-details\" class=\"readmore stretched-link\">
                <span>Read More</span><i class=\"bi bi-arrow-right\"></i>
              </a>
            </div>

          </article>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 131
        yield "
      </div>
    </div>
  </section>

  <!-- Pagination -->
  <section class=\"pagination-2 section\">
    <div class=\"container\">
      <nav class=\"d-flex justify-content-center\">
        <ul>
          <li><a href=\"#\"><i class=\"bi bi-arrow-left\"></i> Previous</a></li>
          <li><a href=\"#\" class=\"active\">1</a></li>
          <li><a href=\"#\">2</a></li>
          <li><a href=\"#\">3</a></li>
          <li><a href=\"#\">Next <i class=\"bi bi-arrow-right\"></i></a></li>
        </ul>
      </nav>
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
        return "back/blog.html.twig";
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
        return array (  230 => 131,  204 => 111,  198 => 107,  194 => 106,  169 => 84,  153 => 71,  137 => 58,  121 => 45,  104 => 31,  76 => 5,  63 => 4,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'back/base.html.twig' %}


{% block body %}

<body class=\"blog-page\">

<main class=\"main\">

  <!-- Page Title -->
  <div class=\"page-title light-background\">
    <div class=\"container d-lg-flex justify-content-between align-items-center\">
      <h1 class=\"mb-2 mb-lg-0\">Blog</h1>
      <nav class=\"breadcrumbs\">
        <ol>
          <li><a href=\"/\">Home</a></li>
          <li class=\"current\">Blog</li>
        </ol>
      </nav>
    </div>
  </div>

  <!-- Blog Hero Section -->
  <section id=\"blog-hero\" class=\"blog-hero section\">
    <div class=\"container\">

      <div class=\"blog-grid\">

        <!-- Featured Post -->
        <article class=\"blog-item featured\">
          <img src=\"{{ asset('assets/img/blog/blog-post-3.webp') }}\" class=\"img-fluid\">
          <div class=\"blog-content\">
            <div class=\"post-meta\">
              <span class=\"date\">Apr. 14th, 2025</span>
              <span class=\"category\">Technology</span>
            </div>
            <h2 class=\"post-title\">
              <a href=\"/blog-details\">Lorem ipsum dolor sit amet, consectetur adipiscing elit</a>
            </h2>
          </div>
        </article>

        <!-- Regular Posts -->
        <article class=\"blog-item\">
          <img src=\"{{ asset('assets/img/blog/blog-post-portrait-1.webp') }}\" class=\"img-fluid\">
          <div class=\"blog-content\">
            <div class=\"post-meta\">
              <span class=\"date\">Apr. 14th, 2025</span>
              <span class=\"category\">Security</span>
            </div>
            <h3 class=\"post-title\">
              <a href=\"/blog-details\">Sed do eiusmod tempor incididunt ut labore</a>
            </h3>
          </div>
        </article>

        <article class=\"blog-item\">
          <img src=\"{{ asset('assets/img/blog/blog-post-9.webp') }}\" class=\"img-fluid\">
          <div class=\"blog-content\">
            <div class=\"post-meta\">
              <span class=\"date\">Apr. 14th, 2025</span>
              <span class=\"category\">Career</span>
            </div>
            <h3 class=\"post-title\">
              <a href=\"/blog-details\">Ut enim ad minim veniam, quis nostrud exercitation</a>
            </h3>
          </div>
        </article>

        <article class=\"blog-item\">
          <img src=\"{{ asset('assets/img/blog/blog-post-7.webp') }}\" class=\"img-fluid\">
          <div class=\"blog-content\">
            <div class=\"post-meta\">
              <span class=\"date\">Apr. 14th, 2025</span>
              <span class=\"category\">Cloud</span>
            </div>
            <h3 class=\"post-title\">
              <a href=\"/blog-details\">Adipiscing elit, sed do eiusmod tempor</a>
            </h3>
          </div>
        </article>

        <article class=\"blog-item\">
          <img src=\"{{ asset('assets/img/blog/blog-post-6.webp') }}\" class=\"img-fluid\">
          <div class=\"blog-content\">
            <div class=\"post-meta\">
              <span class=\"date\">Apr. 14th, 2025</span>
              <span class=\"category\">Programming</span>
            </div>
            <h3 class=\"post-title\">
              <a href=\"/blog-details\">Excepteur sint occaecat cupidatat non proident</a>
            </h3>
          </div>
        </article>

      </div>

    </div>
  </section>

  <!-- Blog Posts Section -->
  <section id=\"blog-posts\" class=\"blog-posts section\">
    <div class=\"container\">
      <div class=\"row gy-4\">

        {% for i in 1..6 %}
        <div class=\"col-lg-4\">
          <article class=\"position-relative h-100\">

            <div class=\"post-img\">
              <img src=\"{{ asset('assets/img/blog/blog-post-' ~ i ~ '.webp') }}\" class=\"img-fluid\">
            </div>

            <div class=\"meta d-flex align-items-end\">
              <span class=\"post-date\"><span>12</span> December</span>
              <div class=\"d-flex align-items-center\">
                <i class=\"bi bi-person\"></i><span class=\"ps-2\">Author</span>
              </div>
            </div>

            <div class=\"post-content\">
              <h3 class=\"post-title\">Sample blog title</h3>
              <a href=\"/blog-details\" class=\"readmore stretched-link\">
                <span>Read More</span><i class=\"bi bi-arrow-right\"></i>
              </a>
            </div>

          </article>
        </div>
        {% endfor %}

      </div>
    </div>
  </section>

  <!-- Pagination -->
  <section class=\"pagination-2 section\">
    <div class=\"container\">
      <nav class=\"d-flex justify-content-center\">
        <ul>
          <li><a href=\"#\"><i class=\"bi bi-arrow-left\"></i> Previous</a></li>
          <li><a href=\"#\" class=\"active\">1</a></li>
          <li><a href=\"#\">2</a></li>
          <li><a href=\"#\">3</a></li>
          <li><a href=\"#\">Next <i class=\"bi bi-arrow-right\"></i></a></li>
        </ul>
      </nav>
    </div>
  </section>

</main>

</body>

{% endblock %}
", "back/blog.html.twig", "C:\\Users\\user\\Desktop\\mentorai\\templates\\back\\blog.html.twig");
    }
}
