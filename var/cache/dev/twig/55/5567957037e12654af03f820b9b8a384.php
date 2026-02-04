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

/* back/pricing.html.twig */
class __TwigTemplate_f1d19a0d8f5195928384cea7816df36c extends Template
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
        return "back/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/pricing.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/pricing.html.twig"));

        $this->parent = $this->load("back/base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
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

        yield "Pricing";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 6
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

        // line 7
        yield "
<main class=\"main\">

  <!-- Page Title -->
  <div class=\"page-title light-background\">
    <div class=\"container d-lg-flex justify-content-between align-items-center\">
      <h1 class=\"mb-2 mb-lg-0\">Pricing</h1>
      <nav class=\"breadcrumbs\">
        <ol>
          <li><a href=\"";
        // line 16
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">Home</a></li>
          <li class=\"current\">Pricing</li>
        </ol>
      </nav>
    </div>
  </div>
  <!-- End Page Title -->

  <!-- Pricing Section -->
  <section id=\"pricing\" class=\"pricing section\">

    <div class=\"container pricing-toggle-container\" data-aos=\"fade-up\" data-aos-delay=\"100\">

      <!-- Pricing Toggle -->
      <div class=\"pricing-toggle d-flex align-items-center justify-content-center text-center mb-5\">
        <span class=\"monthly active\">Monthly</span>
        <div class=\"form-check form-switch d-inline-block mx-3\">
          <input class=\"form-check-input\" type=\"checkbox\" id=\"pricingSwitch\">
        </div>
        <span class=\"yearly\">Yearly <span class=\"badge\">20% OFF</span></span>
      </div>

      <!-- Pricing Plans -->
      <div class=\"row gy-4 justify-content-center\">

        <!-- Basic Plan -->
        <div class=\"col-lg-3 col-md-6\">
          <div class=\"pricing-item\">
            <div class=\"pricing-header\">
              <h6 class=\"pricing-category\">Basic</h6>
              <div class=\"price-wrap\">
                <h2 class=\"price\">Free</h2>
              </div>
              <p class=\"pricing-description\">Lorem ipsum dolor sit</p>
            </div>

            <div class=\"pricing-cta\">
              <a href=\"#\" class=\"btn btn-primary w-100\">Continue</a>
            </div>

            <div class=\"pricing-features\">
              <h6>Basic Plan Includes:</h6>
              <ul class=\"feature-list\">
                <li><i class=\"bi bi-check\"></i> Lorem ipsum dolor sit amet</li>
                <li><i class=\"bi bi-check\"></i> Consectetur adipiscing elit</li>
                <li><i class=\"bi bi-check\"></i> Sed do eiusmod tempor</li>
                <li><i class=\"bi bi-check\"></i> Incididunt ut labore</li>
              </ul>
            </div>
          </div>
        </div>

        <!-- Plus Plan -->
        <div class=\"col-lg-3 col-md-6\">
          <div class=\"pricing-item\">
            <div class=\"pricing-header\">
              <h6 class=\"pricing-category\">Plus</h6>
              <div class=\"price-wrap\">
                <div class=\"price monthly\"><sup>\$</sup>25<span>/m</span></div>
                <div class=\"price yearly\"><sup>\$</sup>20<span>/m</span></div>
              </div>
              <p class=\"pricing-description\">Consectetur adipiscing elit</p>
            </div>

            <div class=\"pricing-cta\">
              <a href=\"#\" class=\"btn btn-primary w-100\">Buy Now</a>
            </div>

            <div class=\"pricing-features\">
              <h6>Everything from <strong>Basic</strong>, plus:</h6>
              <ul class=\"feature-list\">
                <li><i class=\"bi bi-check\"></i> Duis aute irure dolor</li>
                <li><i class=\"bi bi-check\"></i> In reprehenderit in voluptate</li>
                <li><i class=\"bi bi-check\"></i> Velit esse cillum dolore</li>
              </ul>
            </div>
          </div>
        </div>

        <!-- Business Plan -->
        <div class=\"col-lg-3 col-md-6\">
          <div class=\"pricing-item popular\">
            <div class=\"popular-badge\">Most Popular</div>
            <div class=\"pricing-header\">
              <h6 class=\"pricing-category\">Business</h6>
              <div class=\"price-wrap\">
                <div class=\"price monthly\"><sup>\$</sup>45<span>/m</span></div>
                <div class=\"price yearly\"><sup>\$</sup>36<span>/m</span></div>
              </div>
              <p class=\"pricing-description\">Sed ut perspiciatis unde</p>
            </div>

            <div class=\"pricing-cta\">
              <a href=\"#\" class=\"btn btn-primary w-100\">Buy Now</a>
            </div>

            <div class=\"pricing-features\">
              <h6>Everything in <strong>Plus</strong>, plus:</h6>
              <ul class=\"feature-list\">
                <li><i class=\"bi bi-check\"></i> Voluptas sit</li>
                <li><i class=\"bi bi-check\"></i> Magni dolores eos</li>
                <li><i class=\"bi bi-check\"></i> Ratione voluptatem</li>
              </ul>
            </div>
          </div>
        </div>

        <!-- Enterprise Plan -->
        <div class=\"col-lg-3 col-md-6\">
          <div class=\"pricing-item\">
            <div class=\"pricing-header\">
              <h6 class=\"pricing-category\">Enterprise</h6>
              <div class=\"price-wrap\">
                <h2 class=\"price\">Custom</h2>
              </div>
              <p class=\"pricing-description\">Eius modi tempora incidunt</p>
            </div>

            <div class=\"pricing-cta\">
              <a href=\"#\" class=\"btn btn-primary w-100\">Contact Sales</a>
            </div>

            <div class=\"pricing-features\">
              <h6>Everything in <strong>Business</strong>, plus:</h6>
              <ul class=\"feature-list\">
                <li><i class=\"bi bi-check\"></i> Custom integrations</li>
                <li><i class=\"bi bi-check\"></i> Dedicated support</li>
                <li><i class=\"bi bi-check\"></i> Advanced analytics</li>
              </ul>
            </div>
          </div>
        </div>

      </div>
    </div>

  </section>
  <!-- /Pricing Section -->

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
        return "back/pricing.html.twig";
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
        return array (  111 => 16,  100 => 7,  87 => 6,  64 => 4,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'back/base.html.twig' %}


{% block title %}Pricing{% endblock %}

{% block body %}

<main class=\"main\">

  <!-- Page Title -->
  <div class=\"page-title light-background\">
    <div class=\"container d-lg-flex justify-content-between align-items-center\">
      <h1 class=\"mb-2 mb-lg-0\">Pricing</h1>
      <nav class=\"breadcrumbs\">
        <ol>
          <li><a href=\"{{ path('app_home') }}\">Home</a></li>
          <li class=\"current\">Pricing</li>
        </ol>
      </nav>
    </div>
  </div>
  <!-- End Page Title -->

  <!-- Pricing Section -->
  <section id=\"pricing\" class=\"pricing section\">

    <div class=\"container pricing-toggle-container\" data-aos=\"fade-up\" data-aos-delay=\"100\">

      <!-- Pricing Toggle -->
      <div class=\"pricing-toggle d-flex align-items-center justify-content-center text-center mb-5\">
        <span class=\"monthly active\">Monthly</span>
        <div class=\"form-check form-switch d-inline-block mx-3\">
          <input class=\"form-check-input\" type=\"checkbox\" id=\"pricingSwitch\">
        </div>
        <span class=\"yearly\">Yearly <span class=\"badge\">20% OFF</span></span>
      </div>

      <!-- Pricing Plans -->
      <div class=\"row gy-4 justify-content-center\">

        <!-- Basic Plan -->
        <div class=\"col-lg-3 col-md-6\">
          <div class=\"pricing-item\">
            <div class=\"pricing-header\">
              <h6 class=\"pricing-category\">Basic</h6>
              <div class=\"price-wrap\">
                <h2 class=\"price\">Free</h2>
              </div>
              <p class=\"pricing-description\">Lorem ipsum dolor sit</p>
            </div>

            <div class=\"pricing-cta\">
              <a href=\"#\" class=\"btn btn-primary w-100\">Continue</a>
            </div>

            <div class=\"pricing-features\">
              <h6>Basic Plan Includes:</h6>
              <ul class=\"feature-list\">
                <li><i class=\"bi bi-check\"></i> Lorem ipsum dolor sit amet</li>
                <li><i class=\"bi bi-check\"></i> Consectetur adipiscing elit</li>
                <li><i class=\"bi bi-check\"></i> Sed do eiusmod tempor</li>
                <li><i class=\"bi bi-check\"></i> Incididunt ut labore</li>
              </ul>
            </div>
          </div>
        </div>

        <!-- Plus Plan -->
        <div class=\"col-lg-3 col-md-6\">
          <div class=\"pricing-item\">
            <div class=\"pricing-header\">
              <h6 class=\"pricing-category\">Plus</h6>
              <div class=\"price-wrap\">
                <div class=\"price monthly\"><sup>\$</sup>25<span>/m</span></div>
                <div class=\"price yearly\"><sup>\$</sup>20<span>/m</span></div>
              </div>
              <p class=\"pricing-description\">Consectetur adipiscing elit</p>
            </div>

            <div class=\"pricing-cta\">
              <a href=\"#\" class=\"btn btn-primary w-100\">Buy Now</a>
            </div>

            <div class=\"pricing-features\">
              <h6>Everything from <strong>Basic</strong>, plus:</h6>
              <ul class=\"feature-list\">
                <li><i class=\"bi bi-check\"></i> Duis aute irure dolor</li>
                <li><i class=\"bi bi-check\"></i> In reprehenderit in voluptate</li>
                <li><i class=\"bi bi-check\"></i> Velit esse cillum dolore</li>
              </ul>
            </div>
          </div>
        </div>

        <!-- Business Plan -->
        <div class=\"col-lg-3 col-md-6\">
          <div class=\"pricing-item popular\">
            <div class=\"popular-badge\">Most Popular</div>
            <div class=\"pricing-header\">
              <h6 class=\"pricing-category\">Business</h6>
              <div class=\"price-wrap\">
                <div class=\"price monthly\"><sup>\$</sup>45<span>/m</span></div>
                <div class=\"price yearly\"><sup>\$</sup>36<span>/m</span></div>
              </div>
              <p class=\"pricing-description\">Sed ut perspiciatis unde</p>
            </div>

            <div class=\"pricing-cta\">
              <a href=\"#\" class=\"btn btn-primary w-100\">Buy Now</a>
            </div>

            <div class=\"pricing-features\">
              <h6>Everything in <strong>Plus</strong>, plus:</h6>
              <ul class=\"feature-list\">
                <li><i class=\"bi bi-check\"></i> Voluptas sit</li>
                <li><i class=\"bi bi-check\"></i> Magni dolores eos</li>
                <li><i class=\"bi bi-check\"></i> Ratione voluptatem</li>
              </ul>
            </div>
          </div>
        </div>

        <!-- Enterprise Plan -->
        <div class=\"col-lg-3 col-md-6\">
          <div class=\"pricing-item\">
            <div class=\"pricing-header\">
              <h6 class=\"pricing-category\">Enterprise</h6>
              <div class=\"price-wrap\">
                <h2 class=\"price\">Custom</h2>
              </div>
              <p class=\"pricing-description\">Eius modi tempora incidunt</p>
            </div>

            <div class=\"pricing-cta\">
              <a href=\"#\" class=\"btn btn-primary w-100\">Contact Sales</a>
            </div>

            <div class=\"pricing-features\">
              <h6>Everything in <strong>Business</strong>, plus:</h6>
              <ul class=\"feature-list\">
                <li><i class=\"bi bi-check\"></i> Custom integrations</li>
                <li><i class=\"bi bi-check\"></i> Dedicated support</li>
                <li><i class=\"bi bi-check\"></i> Advanced analytics</li>
              </ul>
            </div>
          </div>
        </div>

      </div>
    </div>

  </section>
  <!-- /Pricing Section -->

</main>

{% endblock %}
", "back/pricing.html.twig", "C:\\Users\\user\\Desktop\\mentorai\\templates\\back\\pricing.html.twig");
    }
}
