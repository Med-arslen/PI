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

/* back/blog-details.html.twig */
class __TwigTemplate_51beb1a10cfa910418271b57956cfc49 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/blog-details.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/blog-details.html.twig"));

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
<body class=\"blog-details-page\">

<main class=\"main\">

  <!-- Page Title -->
  <div class=\"page-title light-background\">
    <div class=\"container d-lg-flex justify-content-between align-items-center\">
      <h1 class=\"mb-2 mb-lg-0\">Blog Details</h1>
      <nav class=\"breadcrumbs\">
        <ol>
          <li><a href=\"/\">Home</a></li>
          <li class=\"current\">Blog Details</li>
        </ol>
      </nav>
    </div>
  </div>

  <!-- Blog Details Section -->
  <section id=\"blog-details\" class=\"blog-details section\">
    <div class=\"container\" data-aos=\"fade-up\">

      <article class=\"article\">

        <div class=\"article-header\">
          <div class=\"meta-categories\">
            <a href=\"#\" class=\"category\">Technology</a>
            <a href=\"#\" class=\"category\">Innovation</a>
          </div>

          <h1 class=\"title\">
            The Evolution of User Interface Design: From Skeuomorphism to Neumorphism
          </h1>

          <div class=\"article-meta\">
            <div class=\"author\">
              <img src=\"";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/person/person-m-6.webp"), "html", null, true);
        yield "\" class=\"author-img\">
              <div class=\"author-info\">
                <h4>David Wilson</h4>
                <span>UI/UX Design Lead</span>
              </div>
            </div>
            <div class=\"post-info\">
              <span><i class=\"bi bi-calendar4-week\"></i> April 15, 2025</span>
              <span><i class=\"bi bi-clock\"></i> 10 min read</span>
              <span><i class=\"bi bi-chat-square-text\"></i> 32 Comments</span>
            </div>
          </div>
        </div>

        <div class=\"article-featured-image\">
          <img src=\"";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/blog/blog-hero-1.webp"), "html", null, true);
        yield "\" class=\"img-fluid\">
        </div>

        <div class=\"article-wrapper\">

          <aside class=\"table-of-contents\">
            <h3>Table of Contents</h3>
            <ul>
              <li><a href=\"#introduction\">Introduction</a></li>
              <li><a href=\"#skeuomorphism\">The Skeuomorphic Era</a></li>
              <li><a href=\"#flat-design\">Flat Design Revolution</a></li>
              <li><a href=\"#material-design\">Material Design</a></li>
              <li><a href=\"#neumorphism\">Rise of Neumorphism</a></li>
              <li><a href=\"#future\">Future Trends</a></li>
            </ul>
          </aside>

          <div class=\"article-content\">

            <div id=\"introduction\">
              <p class=\"lead\">
                The journey of user interface design has been marked by significant shifts in aesthetic approaches.
              </p>
            </div>

            <div id=\"skeuomorphism\">
              <h2>The Skeuomorphic Era</h2>
              <p>
                Skeuomorphic design mirrored real-world objects to help users transition to digital interfaces.
              </p>
            </div>

            <div id=\"flat-design\">
              <h2>The Flat Design Revolution</h2>
              <p>
                Flat design emphasized clarity, simplicity, and performance.
              </p>
            </div>

            <div id=\"material-design\">
              <h2>Material Design</h2>
              <p>
                Material Design introduced depth and motion while keeping simplicity.
              </p>
            </div>

            <div id=\"neumorphism\">
              <h2>Neumorphism</h2>
              <p>
                A modern hybrid combining minimalism and soft realism.
              </p>
            </div>

            <div id=\"future\">
              <h2>Looking to the Future</h2>
              <p>
                UI design continues to evolve with adaptive and immersive experiences.
              </p>
            </div>

          </div>
        </div>

      </article>

    </div>
  </section>

  <!-- Blog Comment Form -->
  <section class=\"blog-comment-form section\">
    <div class=\"container\">
      <form>
        <h4>Post Comment</h4>

        <div class=\"row\">
          <div class=\"col-md-6\">
            <input class=\"form-control\" placeholder=\"Your Name*\">
          </div>
          <div class=\"col-md-6\">
            <input class=\"form-control\" placeholder=\"Your Email*\">
          </div>
        </div>

        <textarea class=\"form-control mt-3\" placeholder=\"Your Comment*\"></textarea>

        <div class=\"text-center mt-3\">
          <button class=\"btn btn-primary\">Post Comment</button>
        </div>
      </form>
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
        return "back/blog-details.html.twig";
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
        return array (  132 => 55,  114 => 40,  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'back/base.html.twig' %}

{% block body %}

<body class=\"blog-details-page\">

<main class=\"main\">

  <!-- Page Title -->
  <div class=\"page-title light-background\">
    <div class=\"container d-lg-flex justify-content-between align-items-center\">
      <h1 class=\"mb-2 mb-lg-0\">Blog Details</h1>
      <nav class=\"breadcrumbs\">
        <ol>
          <li><a href=\"/\">Home</a></li>
          <li class=\"current\">Blog Details</li>
        </ol>
      </nav>
    </div>
  </div>

  <!-- Blog Details Section -->
  <section id=\"blog-details\" class=\"blog-details section\">
    <div class=\"container\" data-aos=\"fade-up\">

      <article class=\"article\">

        <div class=\"article-header\">
          <div class=\"meta-categories\">
            <a href=\"#\" class=\"category\">Technology</a>
            <a href=\"#\" class=\"category\">Innovation</a>
          </div>

          <h1 class=\"title\">
            The Evolution of User Interface Design: From Skeuomorphism to Neumorphism
          </h1>

          <div class=\"article-meta\">
            <div class=\"author\">
              <img src=\"{{ asset('assets/img/person/person-m-6.webp') }}\" class=\"author-img\">
              <div class=\"author-info\">
                <h4>David Wilson</h4>
                <span>UI/UX Design Lead</span>
              </div>
            </div>
            <div class=\"post-info\">
              <span><i class=\"bi bi-calendar4-week\"></i> April 15, 2025</span>
              <span><i class=\"bi bi-clock\"></i> 10 min read</span>
              <span><i class=\"bi bi-chat-square-text\"></i> 32 Comments</span>
            </div>
          </div>
        </div>

        <div class=\"article-featured-image\">
          <img src=\"{{ asset('assets/img/blog/blog-hero-1.webp') }}\" class=\"img-fluid\">
        </div>

        <div class=\"article-wrapper\">

          <aside class=\"table-of-contents\">
            <h3>Table of Contents</h3>
            <ul>
              <li><a href=\"#introduction\">Introduction</a></li>
              <li><a href=\"#skeuomorphism\">The Skeuomorphic Era</a></li>
              <li><a href=\"#flat-design\">Flat Design Revolution</a></li>
              <li><a href=\"#material-design\">Material Design</a></li>
              <li><a href=\"#neumorphism\">Rise of Neumorphism</a></li>
              <li><a href=\"#future\">Future Trends</a></li>
            </ul>
          </aside>

          <div class=\"article-content\">

            <div id=\"introduction\">
              <p class=\"lead\">
                The journey of user interface design has been marked by significant shifts in aesthetic approaches.
              </p>
            </div>

            <div id=\"skeuomorphism\">
              <h2>The Skeuomorphic Era</h2>
              <p>
                Skeuomorphic design mirrored real-world objects to help users transition to digital interfaces.
              </p>
            </div>

            <div id=\"flat-design\">
              <h2>The Flat Design Revolution</h2>
              <p>
                Flat design emphasized clarity, simplicity, and performance.
              </p>
            </div>

            <div id=\"material-design\">
              <h2>Material Design</h2>
              <p>
                Material Design introduced depth and motion while keeping simplicity.
              </p>
            </div>

            <div id=\"neumorphism\">
              <h2>Neumorphism</h2>
              <p>
                A modern hybrid combining minimalism and soft realism.
              </p>
            </div>

            <div id=\"future\">
              <h2>Looking to the Future</h2>
              <p>
                UI design continues to evolve with adaptive and immersive experiences.
              </p>
            </div>

          </div>
        </div>

      </article>

    </div>
  </section>

  <!-- Blog Comment Form -->
  <section class=\"blog-comment-form section\">
    <div class=\"container\">
      <form>
        <h4>Post Comment</h4>

        <div class=\"row\">
          <div class=\"col-md-6\">
            <input class=\"form-control\" placeholder=\"Your Name*\">
          </div>
          <div class=\"col-md-6\">
            <input class=\"form-control\" placeholder=\"Your Email*\">
          </div>
        </div>

        <textarea class=\"form-control mt-3\" placeholder=\"Your Comment*\"></textarea>

        <div class=\"text-center mt-3\">
          <button class=\"btn btn-primary\">Post Comment</button>
        </div>
      </form>
    </div>
  </section>

</main>

</body>

{% endblock %}
", "back/blog-details.html.twig", "C:\\Users\\user\\Desktop\\mentorai\\templates\\back\\blog-details.html.twig");
    }
}
