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

/* front/contact.html.twig */
class __TwigTemplate_9089365c0a892df9f2a8c8ce5635ab9d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/contact.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/contact.html.twig"));

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
        yield "<body class=\"contact-page\">

<main class=\"main\">

  <!-- Page Title -->
  <div class=\"page-title light-background\">
    <div class=\"container d-lg-flex justify-content-between align-items-center\">
      <h1 class=\"mb-2 mb-lg-0\">Contact</h1>
      <nav class=\"breadcrumbs\">
        <ol>
          <li><a href=\"/\">Home</a></li>
          <li class=\"current\">Contact</li>
        </ol>
      </nav>
    </div>
  </div><!-- End Page Title -->

  <!-- Contact Section -->
  <section id=\"contact\" class=\"contact section\">

    <div class=\"container\" data-aos=\"fade-up\" data-aos-delay=\"100\">
      <div class=\"contact-main-wrapper\">

        <div class=\"map-wrapper\">
          <iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d48389.78314118045!2d-74.006138!3d40.710059!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a22a3bda30d%3A0xb89d1fe6bc499443!2sDowntown%20Conference%20Center!5e0!3m2!1sen!2sus!4v1676961268712!5m2!1sen!2sus\"
            width=\"100%\" height=\"100%\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"
            referrerpolicy=\"no-referrer-when-downgrade\"></iframe>
        </div>

        <div class=\"contact-content\">

          <div class=\"contact-cards-container\" data-aos=\"fade-up\" data-aos-delay=\"300\">

            <div class=\"contact-card\">
              <div class=\"icon-box\"><i class=\"bi bi-geo-alt\"></i></div>
              <div class=\"contact-text\">
                <h4>Location</h4>
                <p>8721 Broadway Avenue, New York, NY 10023</p>
              </div>
            </div>

            <div class=\"contact-card\">
              <div class=\"icon-box\"><i class=\"bi bi-envelope\"></i></div>
              <div class=\"contact-text\">
                <h4>Email</h4>
                <p>info@examplecompany.com</p>
              </div>
            </div>

            <div class=\"contact-card\">
              <div class=\"icon-box\"><i class=\"bi bi-telephone\"></i></div>
              <div class=\"contact-text\">
                <h4>Call</h4>
                <p>+1 (212) 555-7890</p>
              </div>
            </div>

            <div class=\"contact-card\">
              <div class=\"icon-box\"><i class=\"bi bi-clock\"></i></div>
              <div class=\"contact-text\">
                <h4>Open Hours</h4>
                <p>Monday–Friday: 9AM - 6PM</p>
              </div>
            </div>

          </div>

          <div class=\"contact-form-container\" data-aos=\"fade-up\" data-aos-delay=\"400\">
            <h3>Get in Touch</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt.</p>

            <form method=\"post\">
              <div class=\"row\">
                <div class=\"col-md-6 form-group\">
                  <input type=\"text\" class=\"form-control\" placeholder=\"Your Name\">
                </div>
                <div class=\"col-md-6 form-group mt-3 mt-md-0\">
                  <input type=\"email\" class=\"form-control\" placeholder=\"Your Email\">
                </div>
              </div>

              <div class=\"form-group mt-3\">
                <input type=\"text\" class=\"form-control\" placeholder=\"Subject\">
              </div>

              <div class=\"form-group mt-3\">
                <textarea class=\"form-control\" rows=\"5\" placeholder=\"Message\"></textarea>
              </div>

              <div class=\"form-submit mt-4\">
                <button type=\"submit\">Send Message</button>
              </div>
            </form>
          </div>

        </div>
      </div>
    </div>

  </section><!-- /Contact Section -->

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
        return "front/contact.html.twig";
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
        return array (  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'front/base.html.twig' %}

{% block body %}
<body class=\"contact-page\">

<main class=\"main\">

  <!-- Page Title -->
  <div class=\"page-title light-background\">
    <div class=\"container d-lg-flex justify-content-between align-items-center\">
      <h1 class=\"mb-2 mb-lg-0\">Contact</h1>
      <nav class=\"breadcrumbs\">
        <ol>
          <li><a href=\"/\">Home</a></li>
          <li class=\"current\">Contact</li>
        </ol>
      </nav>
    </div>
  </div><!-- End Page Title -->

  <!-- Contact Section -->
  <section id=\"contact\" class=\"contact section\">

    <div class=\"container\" data-aos=\"fade-up\" data-aos-delay=\"100\">
      <div class=\"contact-main-wrapper\">

        <div class=\"map-wrapper\">
          <iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d48389.78314118045!2d-74.006138!3d40.710059!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a22a3bda30d%3A0xb89d1fe6bc499443!2sDowntown%20Conference%20Center!5e0!3m2!1sen!2sus!4v1676961268712!5m2!1sen!2sus\"
            width=\"100%\" height=\"100%\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"
            referrerpolicy=\"no-referrer-when-downgrade\"></iframe>
        </div>

        <div class=\"contact-content\">

          <div class=\"contact-cards-container\" data-aos=\"fade-up\" data-aos-delay=\"300\">

            <div class=\"contact-card\">
              <div class=\"icon-box\"><i class=\"bi bi-geo-alt\"></i></div>
              <div class=\"contact-text\">
                <h4>Location</h4>
                <p>8721 Broadway Avenue, New York, NY 10023</p>
              </div>
            </div>

            <div class=\"contact-card\">
              <div class=\"icon-box\"><i class=\"bi bi-envelope\"></i></div>
              <div class=\"contact-text\">
                <h4>Email</h4>
                <p>info@examplecompany.com</p>
              </div>
            </div>

            <div class=\"contact-card\">
              <div class=\"icon-box\"><i class=\"bi bi-telephone\"></i></div>
              <div class=\"contact-text\">
                <h4>Call</h4>
                <p>+1 (212) 555-7890</p>
              </div>
            </div>

            <div class=\"contact-card\">
              <div class=\"icon-box\"><i class=\"bi bi-clock\"></i></div>
              <div class=\"contact-text\">
                <h4>Open Hours</h4>
                <p>Monday–Friday: 9AM - 6PM</p>
              </div>
            </div>

          </div>

          <div class=\"contact-form-container\" data-aos=\"fade-up\" data-aos-delay=\"400\">
            <h3>Get in Touch</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt.</p>

            <form method=\"post\">
              <div class=\"row\">
                <div class=\"col-md-6 form-group\">
                  <input type=\"text\" class=\"form-control\" placeholder=\"Your Name\">
                </div>
                <div class=\"col-md-6 form-group mt-3 mt-md-0\">
                  <input type=\"email\" class=\"form-control\" placeholder=\"Your Email\">
                </div>
              </div>

              <div class=\"form-group mt-3\">
                <input type=\"text\" class=\"form-control\" placeholder=\"Subject\">
              </div>

              <div class=\"form-group mt-3\">
                <textarea class=\"form-control\" rows=\"5\" placeholder=\"Message\"></textarea>
              </div>

              <div class=\"form-submit mt-4\">
                <button type=\"submit\">Send Message</button>
              </div>
            </form>
          </div>

        </div>
      </div>
    </div>

  </section><!-- /Contact Section -->

</main>

</body>
{% endblock %}
", "front/contact.html.twig", "C:\\Users\\user\\Desktop\\mentorai\\templates\\front\\contact.html.twig");
    }
}
