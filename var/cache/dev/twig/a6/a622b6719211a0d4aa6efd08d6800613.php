<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* index.html.twig */
class __TwigTemplate_ae1278526f471747cd754dc140da76d7 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\" dir=\"ltr\">
<head>
\t<meta charset=\"utf-8\">
\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
\t<title>Limitless - Responsive Web Application Kit by Eugene Kopyov</title>

\t<!-- Global stylesheets -->
\t<link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/fonts/inter/inter.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
\t<link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/icons/phosphor/styles.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
\t<link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/ltr/all.min.css"), "html", null, true);
        echo "\" id=\"stylesheet\" rel=\"stylesheet\" type=\"text/css\">
\t<!-- /global stylesheets -->

\t<!-- Core JS files -->
\t<script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/demo/demo_configurator.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/bootstrap/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
\t<!-- /core JS files -->

\t<!-- Theme JS files -->
\t<script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/visualization/d3/d3.min.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/visualization/d3/d3_tooltip.js"), "html", null, true);
        echo "\"></script>

\t<script src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/app.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/demo/pages/dashboard.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/demo/charts/pages/dashboard/streamgraph.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/demo/charts/pages/dashboard/sparklines.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/demo/charts/pages/dashboard/lines.js"), "html", null, true);
        echo "\"></script>\t
\t<script src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/demo/charts/pages/dashboard/areas.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/demo/charts/pages/dashboard/donuts.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/demo/charts/pages/dashboard/bars.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/demo/charts/pages/dashboard/progress.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/demo/charts/pages/dashboard/heatmaps.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/demo/charts/pages/dashboard/pies.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/demo/charts/pages/dashboard/bullets.js"), "html", null, true);
        echo "\"></script>
\t<!-- /theme JS files -->

</head>

<body>

\t<!-- Main navbar -->
\t<div class=\"navbar navbar-dark navbar-expand-lg navbar-static border-bottom border-bottom-white border-opacity-10\">
\t\t<div class=\"container-fluid\">
\t\t\t<div class=\"d-flex d-lg-none me-2\">
\t\t\t\t<button type=\"button\" class=\"navbar-toggler sidebar-mobile-main-toggle rounded-pill\">
\t\t\t\t\t<i class=\"ph-list\"></i>
\t\t\t\t</button>
\t\t\t</div>

\t\t\t<div class=\"navbar-brand flex-1 flex-lg-0\">
\t\t\t\t<a href=\"index.html\" class=\"d-inline-flex align-items-center\">
\t\t\t\t\t<img src=\"../../../assets/images/logo_icon.svg\" alt=\"\">
\t\t\t\t\t<img src=\"../../../assets/images/logo_text_light.svg\" class=\"d-none d-sm-inline-block h-16px ms-3\" alt=\"\">
\t\t\t\t</a>
\t\t\t</div>

\t\t\t<ul class=\"nav flex-row\">
\t\t\t\t<li class=\"nav-item d-lg-none\">
\t\t\t\t\t<a href=\"#navbar_search\" class=\"navbar-nav-link navbar-nav-link-icon rounded-pill\" data-bs-toggle=\"collapse\">
\t\t\t\t\t\t<i class=\"ph-magnifying-glass\"></i>
\t\t\t\t\t</a>
\t\t\t\t</li>

\t\t\t\t<li class=\"nav-item nav-item-dropdown-lg dropdown\">
\t\t\t\t\t<a href=\"#\" class=\"navbar-nav-link navbar-nav-link-icon rounded-pill\" data-bs-toggle=\"dropdown\">
\t\t\t\t\t\t<i class=\"ph-squares-four\"></i>
\t\t\t\t\t</a>

\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-scrollable-sm wmin-lg-600 p-0\">
\t\t\t\t\t\t<div class=\"d-flex align-items-center border-bottom p-3\">
\t\t\t\t\t\t\t<h6 class=\"mb-0\">Browse apps</h6>
\t\t\t\t\t\t\t<a href=\"#\" class=\"ms-auto\">
\t\t\t\t\t\t\t\tView all
\t\t\t\t\t\t\t\t<i class=\"ph-arrow-circle-right ms-1\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"row row-cols-1 row-cols-sm-2 g-0\">
\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"dropdown-item text-wrap h-100 align-items-start border-end-sm border-bottom p-3\">
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<img src=\"../../../assets/images/demo/logos/1.svg\" class=\"h-40px mb-2\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t<div class=\"fw-semibold my-1\">Customer data platform</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"text-muted\">Unify customer data from multiple sources</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"dropdown-item text-wrap h-100 align-items-start border-bottom p-3\">
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<img src=\"../../../assets/images/demo/logos/2.svg\" class=\"h-40px mb-2\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t<div class=\"fw-semibold my-1\">Data catalog</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"text-muted\">Discover, inventory, and organize data assets</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"dropdown-item text-wrap h-100 align-items-start border-end-sm border-bottom border-bottom-sm-0 rounded-bottom-start p-3\">
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<img src=\"../../../assets/images/demo/logos/3.svg\" class=\"h-40px mb-2\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t<div class=\"fw-semibold my-1\">Data governance</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"text-muted\">The collaboration hub and data marketplace</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"dropdown-item text-wrap h-100 align-items-start rounded-bottom-end p-3\">
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<img src=\"../../../assets/images/demo/logos/4.svg\" class=\"h-40px mb-2\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t<div class=\"fw-semibold my-1\">Data privacy</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"text-muted\">Automated provisioning of non-production datasets</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</li>

\t\t\t\t<li class=\"nav-item nav-item-dropdown-lg dropdown ms-lg-2\">
\t\t\t\t\t<a href=\"#\" class=\"navbar-nav-link navbar-nav-link-icon rounded-pill\" data-bs-toggle=\"dropdown\" data-bs-auto-close=\"outside\">
\t\t\t\t\t\t<i class=\"ph-chats\"></i>
\t\t\t\t\t\t<span class=\"badge bg-yellow text-black position-absolute top-0 end-0 translate-middle-top zindex-1 rounded-pill mt-1 me-1\">8</span>
\t\t\t\t\t</a>

\t\t\t\t\t<div class=\"dropdown-menu wmin-lg-400 p-0\">
\t\t\t\t\t\t<div class=\"d-flex align-items-center p-3\">
\t\t\t\t\t\t\t<h6 class=\"mb-0\">Messages</h6>
\t\t\t\t\t\t\t<div class=\"ms-auto\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-body\">
\t\t\t\t\t\t\t\t\t<i class=\"ph-plus-circle\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a href=\"#search_messages\" class=\"collapsed text-body ms-2\" data-bs-toggle=\"collapse\">
\t\t\t\t\t\t\t\t\t<i class=\"ph-magnifying-glass\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"collapse\" id=\"search_messages\">
\t\t\t\t\t\t\t<div class=\"px-3 mb-2\">
\t\t\t\t\t\t\t\t<div class=\"form-control-feedback form-control-feedback-start\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"Search messages\">
\t\t\t\t\t\t\t\t\t<div class=\"form-control-feedback-icon\">
\t\t\t\t\t\t\t\t\t\t<i class=\"ph-magnifying-glass\"></i>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"dropdown-menu-scrollable pb-2\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item align-items-start text-wrap py-2\">
\t\t\t\t\t\t\t\t<div class=\"status-indicator-container me-3\">
\t\t\t\t\t\t\t\t\t<img src=\"../../../assets/images/demo/users/face10.jpg\" class=\"w-40px h-40px rounded-pill\" alt=\"\">
\t\t\t\t\t\t\t\t\t<span class=\"status-indicator bg-warning\"></span>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"flex-1\">
\t\t\t\t\t\t\t\t\t<span class=\"fw-semibold\">James Alexander</span>
\t\t\t\t\t\t\t\t\t<span class=\"text-muted float-end fs-sm\">04:58</span>
\t\t\t\t\t\t\t\t\t<div class=\"text-muted\">who knows, maybe that would be the best thing for me...</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item align-items-start text-wrap py-2\">
\t\t\t\t\t\t\t\t<div class=\"status-indicator-container me-3\">
\t\t\t\t\t\t\t\t\t<img src=\"../../../assets/images/demo/users/face3.jpg\" class=\"w-40px h-40px rounded-pill\" alt=\"\">
\t\t\t\t\t\t\t\t\t<span class=\"status-indicator bg-success\"></span>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"flex-1\">
\t\t\t\t\t\t\t\t\t<span class=\"fw-semibold\">Margo Baker</span>
\t\t\t\t\t\t\t\t\t<span class=\"text-muted float-end fs-sm\">12:16</span>
\t\t\t\t\t\t\t\t\t<div class=\"text-muted\">That was something he was unable to do because...</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item align-items-start text-wrap py-2\">
\t\t\t\t\t\t\t\t<div class=\"status-indicator-container me-3\">
\t\t\t\t\t\t\t\t\t<img src=\"../../../assets/images/demo/users/face24.jpg\" class=\"w-40px h-40px rounded-pill\" alt=\"\">
\t\t\t\t\t\t\t\t\t<span class=\"status-indicator bg-success\"></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"flex-1\">
\t\t\t\t\t\t\t\t\t<span class=\"fw-semibold\">Jeremy Victorino</span>
\t\t\t\t\t\t\t\t\t<span class=\"text-muted float-end fs-sm\">22:48</span>
\t\t\t\t\t\t\t\t\t<div class=\"text-muted\">But that would be extremely strained and suspicious...</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item align-items-start text-wrap py-2\">
\t\t\t\t\t\t\t\t<div class=\"status-indicator-container me-3\">
\t\t\t\t\t\t\t\t\t<img src=\"../../../assets/images/demo/users/face4.jpg\" class=\"w-40px h-40px rounded-pill\" alt=\"\">
\t\t\t\t\t\t\t\t\t<span class=\"status-indicator bg-grey\"></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"flex-1\">
\t\t\t\t\t\t\t\t\t<span class=\"fw-semibold\">Beatrix Diaz</span>
\t\t\t\t\t\t\t\t\t<span class=\"text-muted float-end fs-sm\">Tue</span>
\t\t\t\t\t\t\t\t\t<div class=\"text-muted\">What a strenuous career it is that I've chosen...</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item align-items-start text-wrap py-2\">
\t\t\t\t\t\t\t\t<div class=\"status-indicator-container me-3\">
\t\t\t\t\t\t\t\t\t<img src=\"../../../assets/images/demo/users/face25.jpg\" class=\"w-40px h-40px rounded-pill\" alt=\"\">
\t\t\t\t\t\t\t\t\t<span class=\"status-indicator bg-danger\"></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"flex-1\">
\t\t\t\t\t\t\t\t\t<span class=\"fw-semibold\">Richard Vango</span>
\t\t\t\t\t\t\t\t\t<span class=\"text-muted float-end fs-sm\">Mon</span>
\t\t\t\t\t\t\t\t\t<div class=\"text-muted\">Other travelling salesmen live a life of luxury...</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"d-flex border-top py-2 px-3\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"text-body\">
\t\t\t\t\t\t\t\t<i class=\"ph-checks me-1\"></i>
\t\t\t\t\t\t\t\tDismiss all
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a href=\"#\" class=\"text-body ms-auto\">
\t\t\t\t\t\t\t\tView all
\t\t\t\t\t\t\t\t<i class=\"ph-arrow-circle-right ms-1\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t</ul>

\t\t\t<div class=\"navbar-collapse justify-content-center flex-lg-1 order-2 order-lg-1 collapse\" id=\"navbar_search\">
\t\t\t\t<div class=\"navbar-search flex-fill position-relative mt-2 mt-lg-0 mx-lg-3\">
\t\t\t\t\t<div class=\"form-control-feedback form-control-feedback-start flex-grow-1\" data-color-theme=\"dark\">
\t\t\t\t\t\t<input type=\"text\" class=\"form-control bg-transparent rounded-pill\" placeholder=\"Search\" data-bs-toggle=\"dropdown\">
\t\t\t\t\t\t<div class=\"form-control-feedback-icon\">
\t\t\t\t\t\t\t<i class=\"ph-magnifying-glass\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"dropdown-menu w-100\" data-color-theme=\"light\">
\t\t\t\t\t\t\t<button type=\"button\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t<div class=\"text-center w-32px me-3\">
\t\t\t\t\t\t\t\t\t<i class=\"ph-magnifying-glass\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<span>Search <span class=\"fw-bold\">\"in\"</span> everywhere</span>
\t\t\t\t\t\t\t</button>

\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>

\t\t\t\t\t\t\t<div class=\"dropdown-menu-scrollable-lg\">
\t\t\t\t\t\t\t\t<div class=\"dropdown-header\">
\t\t\t\t\t\t\t\t\tContacts
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"float-end\">
\t\t\t\t\t\t\t\t\t\tSee all
\t\t\t\t\t\t\t\t\t\t<i class=\"ph-arrow-circle-right ms-1\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"dropdown-item cursor-pointer\">
\t\t\t\t\t\t\t\t\t<div class=\"me-3\">
\t\t\t\t\t\t\t\t\t\t<img src=\"../../../assets/images/demo/users/face3.jpg\" class=\"w-32px h-32px rounded-pill\" alt=\"\">
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"d-flex flex-column flex-grow-1\">
\t\t\t\t\t\t\t\t\t\t<div class=\"fw-semibold\">Christ<mark>in</mark>e Johnson</div>
\t\t\t\t\t\t\t\t\t\t<span class=\"fs-sm text-muted\">c.johnson@awesomecorp.com</span>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"d-inline-flex\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-body ms-2\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-user-circle\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"dropdown-item cursor-pointer\">
\t\t\t\t\t\t\t\t\t<div class=\"me-3\">
\t\t\t\t\t\t\t\t\t\t<img src=\"../../../assets/images/demo/users/face24.jpg\" class=\"w-32px h-32px rounded-pill\" alt=\"\">
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"d-flex flex-column flex-grow-1\">
\t\t\t\t\t\t\t\t\t\t<div class=\"fw-semibold\">Cl<mark>in</mark>ton Sparks</div>
\t\t\t\t\t\t\t\t\t\t<span class=\"fs-sm text-muted\">c.sparks@awesomecorp.com</span>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"d-inline-flex\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-body ms-2\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-user-circle\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>

\t\t\t\t\t\t\t\t<div class=\"dropdown-header\">
\t\t\t\t\t\t\t\t\tClients
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"float-end\">
\t\t\t\t\t\t\t\t\t\tSee all
\t\t\t\t\t\t\t\t\t\t<i class=\"ph-arrow-circle-right ms-1\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"dropdown-item cursor-pointer\">
\t\t\t\t\t\t\t\t\t<div class=\"me-3\">
\t\t\t\t\t\t\t\t\t\t<img src=\"../../../assets/images/brands/adobe.svg\" class=\"w-32px h-32px rounded-pill\" alt=\"\">
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"d-flex flex-column flex-grow-1\">
\t\t\t\t\t\t\t\t\t\t<div class=\"fw-semibold\">Adobe <mark>In</mark>c.</div>
\t\t\t\t\t\t\t\t\t\t<span class=\"fs-sm text-muted\">Enterprise license</span>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"d-inline-flex\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-body ms-2\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-briefcase\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"dropdown-item cursor-pointer\">
\t\t\t\t\t\t\t\t\t<div class=\"me-3\">
\t\t\t\t\t\t\t\t\t\t<img src=\"../../../assets/images/brands/holiday-inn.svg\" class=\"w-32px h-32px rounded-pill\" alt=\"\">
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"d-flex flex-column flex-grow-1\">
\t\t\t\t\t\t\t\t\t\t<div class=\"fw-semibold\">Holiday-<mark>In</mark>n</div>
\t\t\t\t\t\t\t\t\t\t<span class=\"fs-sm text-muted\">On-premise license</span>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"d-inline-flex\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-body ms-2\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-briefcase\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"dropdown-item cursor-pointer\">
\t\t\t\t\t\t\t\t\t<div class=\"me-3\">
\t\t\t\t\t\t\t\t\t\t<img src=\"../../../assets/images/brands/ing.svg\" class=\"w-32px h-32px rounded-pill\" alt=\"\">
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"d-flex flex-column flex-grow-1\">
\t\t\t\t\t\t\t\t\t\t<div class=\"fw-semibold\"><mark>IN</mark>G Group</div>
\t\t\t\t\t\t\t\t\t\t<span class=\"fs-sm text-muted\">Perpetual license</span>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"d-inline-flex\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-body ms-2\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-briefcase\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<a href=\"#\" class=\"navbar-nav-link align-items-center justify-content-center w-40px h-32px rounded-pill position-absolute end-0 top-50 translate-middle-y p-0 me-1\" data-bs-toggle=\"dropdown\" data-bs-auto-close=\"outside\">
\t\t\t\t\t\t<i class=\"ph-faders-horizontal\"></i>
\t\t\t\t\t</a>

\t\t\t\t\t<div class=\"dropdown-menu w-100 p-3\">
\t\t\t\t\t\t<div class=\"d-flex align-items-center mb-3\">
\t\t\t\t\t\t\t<h6 class=\"mb-0\">Search options</h6>
\t\t\t\t\t\t\t<a href=\"#\" class=\"text-body rounded-pill ms-auto\">
\t\t\t\t\t\t\t\t<i class=\"ph-clock-counter-clockwise\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t<label class=\"d-block form-label\">Category</label>
\t\t\t\t\t\t\t<label class=\"form-check form-check-inline\">
\t\t\t\t\t\t\t\t<input type=\"checkbox\" class=\"form-check-input\" checked>
\t\t\t\t\t\t\t\t<span class=\"form-check-label\">Invoices</span>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t<label class=\"form-check form-check-inline\">
\t\t\t\t\t\t\t\t<input type=\"checkbox\" class=\"form-check-input\">
\t\t\t\t\t\t\t\t<span class=\"form-check-label\">Files</span>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t<label class=\"form-check form-check-inline\">
\t\t\t\t\t\t\t\t<input type=\"checkbox\" class=\"form-check-input\">
\t\t\t\t\t\t\t\t<span class=\"form-check-label\">Users</span>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t<label class=\"form-label\">Addition</label>
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<select class=\"form-select w-auto flex-grow-0\">
\t\t\t\t\t\t\t\t\t<option value=\"1\" selected>has</option>
\t\t\t\t\t\t\t\t\t<option value=\"2\">has not</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"Enter the word(s)\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t<label class=\"form-label\">Status</label>
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<select class=\"form-select w-auto flex-grow-0\">
\t\t\t\t\t\t\t\t\t<option value=\"1\" selected>is</option>
\t\t\t\t\t\t\t\t\t<option value=\"2\">is not</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t<select class=\"form-select\">
\t\t\t\t\t\t\t\t\t<option value=\"1\" selected>Active</option>
\t\t\t\t\t\t\t\t\t<option value=\"2\">Inactive</option>
\t\t\t\t\t\t\t\t\t<option value=\"3\">New</option>
\t\t\t\t\t\t\t\t\t<option value=\"4\">Expired</option>
\t\t\t\t\t\t\t\t\t<option value=\"5\">Pending</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-light\">Reset</button>

\t\t\t\t\t\t\t<div class=\"ms-auto\">
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-light\">Cancel</button>
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary ms-2\">Apply</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<ul class=\"nav flex-row justify-content-end order-1 order-lg-2\">
\t\t\t\t<li class=\"nav-item ms-lg-2\">
\t\t\t\t\t<a href=\"#\" class=\"navbar-nav-link navbar-nav-link-icon rounded-pill\" data-bs-toggle=\"offcanvas\" data-bs-target=\"#notifications\">
\t\t\t\t\t\t<i class=\"ph-bell\"></i>
\t\t\t\t\t\t<span class=\"badge bg-yellow text-black position-absolute top-0 end-0 translate-middle-top zindex-1 rounded-pill mt-1 me-1\">2</span>
\t\t\t\t\t</a>
\t\t\t\t</li>

\t\t\t\t<li class=\"nav-item nav-item-dropdown-lg dropdown ms-lg-2\">
\t\t\t\t\t<a href=\"#\" class=\"navbar-nav-link align-items-center rounded-pill p-1\" data-bs-toggle=\"dropdown\">
\t\t\t\t\t\t<div class=\"status-indicator-container\">
\t\t\t\t\t\t\t<img src=\"../../../assets/images/demo/users/face11.jpg\" class=\"w-32px h-32px rounded-pill\" alt=\"\">
\t\t\t\t\t\t\t<span class=\"status-indicator bg-success\"></span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<span class=\"d-none d-lg-inline-block mx-lg-2\">Victoria</span>
\t\t\t\t\t</a>

\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-end\">
\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t<i class=\"ph-user-circle me-2\"></i>
\t\t\t\t\t\t\tMy profile
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t<i class=\"ph-currency-circle-dollar me-2\"></i>
\t\t\t\t\t\t\tMy subscription
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t<i class=\"ph-shopping-cart me-2\"></i>
\t\t\t\t\t\t\tMy orders
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t<i class=\"ph-envelope-open me-2\"></i>
\t\t\t\t\t\t\tMy inbox
\t\t\t\t\t\t\t<span class=\"badge bg-primary rounded-pill ms-auto\">26</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t<i class=\"ph-gear me-2\"></i>
\t\t\t\t\t\t\tAccount settings
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t<i class=\"ph-sign-out me-2\"></i>
\t\t\t\t\t\t\tLogout
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</div>
\t</div>
\t<!-- /main navbar -->


\t<!-- Page content -->
\t<div class=\"page-content\">

\t\t<!-- Main sidebar -->
\t\t<div class=\"sidebar sidebar-dark sidebar-main sidebar-expand-lg\">

\t\t\t<!-- Sidebar content -->
\t\t\t<div class=\"sidebar-content\">

\t\t\t\t<!-- Sidebar header -->
\t\t\t\t<div class=\"sidebar-section\">
\t\t\t\t\t<div class=\"sidebar-section-body d-flex justify-content-center\">
\t\t\t\t\t\t<h5 class=\"sidebar-resize-hide flex-grow-1 my-auto\">Navigation</h5>

\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-flat-white btn-icon btn-sm rounded-pill border-transparent sidebar-control sidebar-main-resize d-none d-lg-inline-flex\">
\t\t\t\t\t\t\t\t<i class=\"ph-arrows-left-right\"></i>
\t\t\t\t\t\t\t</button>

\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-flat-white btn-icon btn-sm rounded-pill border-transparent sidebar-mobile-main-toggle d-lg-none\">
\t\t\t\t\t\t\t\t<i class=\"ph-x\"></i>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- /sidebar header -->


\t\t\t\t<!-- Main navigation -->
\t\t\t\t<div class=\"sidebar-section\">
\t\t\t\t\t<ul class=\"nav nav-sidebar\" data-nav-type=\"accordion\">

\t\t\t\t\t\t<!-- Main -->
\t\t\t\t\t\t<li class=\"nav-item-header pt-0\">
\t\t\t\t\t\t\t<div class=\"text-uppercase fs-sm lh-sm opacity-50 sidebar-resize-hide\">Main</div>
\t\t\t\t\t\t\t<i class=\"ph-dots-three sidebar-resize-show\"></i>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a href=\"index.html\" class=\"nav-link active\">
\t\t\t\t\t\t\t\t<i class=\"ph-house\"></i>
\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\tDashboard
\t\t\t\t\t\t\t\t\t<span class=\"d-block fw-normal opacity-50\">No pending orders</span>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item nav-item-submenu\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">
\t\t\t\t\t\t\t\t<i class=\"ph-layout\"></i>
\t\t\t\t\t\t\t\t<span>Layouts</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<ul class=\"nav-group-sub collapse\">
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"index.html\" class=\"nav-link active\">Default layout</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"";
        // line 528
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin");
        echo "\" class=\"nav-link\">Login</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"../../layout_3/full/index.html\" class=\"nav-link\">Layout 3</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"../../layout_4/full/index.html\" class=\"nav-link\">Layout 4</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"../../layout_5/full/index.html\" class=\"nav-link\">Layout 5</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"../../layout_6/full/index.html\" class=\"nav-link\">Layout 6</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"../../layout_7/full/index.html\" class=\"nav-link disabled\">Layout 7 <span class=\"badge align-self-center ms-auto\">Coming soon</span></a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item nav-item-submenu\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">
\t\t\t\t\t\t\t\t<i class=\"ph-swatches\"></i>
\t\t\t\t\t\t\t\t<span>Themes</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<ul class=\"nav-group-sub collapse\">
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"index.html\" class=\"nav-link active\">Default</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"../../../LTR/material/full/index.html\" class=\"nav-link disabled\">Material <span class=\"badge align-self-center ms-auto\">Coming soon</span></a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"../../../LTR/clean/full/index.html\" class=\"nav-link disabled\">Clean <span class=\"badge align-self-center ms-auto\">Coming soon</span></a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item nav-item-submenu\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">
\t\t\t\t\t\t\t\t<i class=\"ph-note-blank\"></i>
\t\t\t\t\t\t\t\t<span>Starter kit</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<ul class=\"nav-group-sub collapse\">
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"../seed/layout_static.html\" class=\"nav-link\">Static layout</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"../seed/layout_no_header.html\" class=\"nav-link\">No header</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"../seed/layout_no_footer.html\" class=\"nav-link\">No footer</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item-divider\"></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"../seed/layout_fixed_header.html\" class=\"nav-link\">Fixed header</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"../seed/layout_fixed_footer.html\" class=\"nav-link\">Fixed footer</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item-divider\"></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"../seed/layout_2_sidebars_1_side.html\" class=\"nav-link\">2 sidebars on 1 side</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"../seed/layout_2_sidebars_2_sides.html\" class=\"nav-link\">2 sidebars on 2 sides</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"../seed/layout_3_sidebars.html\" class=\"nav-link\">3 sidebars</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item-divider\"></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"../seed/layout_boxed_page.html\" class=\"nav-link\">Boxed page</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"../seed/layout_boxed_content.html\" class=\"nav-link\">Boxed content</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a href=\"../../../../docs/other_changelog.html\" class=\"nav-link\">
\t\t\t\t\t\t\t\t<i class=\"ph-list-numbers\"></i>
\t\t\t\t\t\t\t\t<span>Changelog</span>
\t\t\t\t\t\t\t\t<span class=\"badge bg-primary align-self-center rounded-pill ms-auto\">4.0</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<!-- Forms -->
\t\t\t\t\t\t<li class=\"nav-item-header\">
\t\t\t\t\t\t\t<div class=\"text-uppercase fs-sm lh-sm opacity-50 sidebar-resize-hide\">Forms</div>
\t\t\t\t\t\t\t<i class=\"ph-dots-three sidebar-resize-show\"></i>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item nav-item-submenu\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">
\t\t\t\t\t\t\t\t<i class=\"ph-note-pencil\"></i>
\t\t\t\t\t\t\t\t<span>Form components</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<ul class=\"nav-group-sub collapse\">
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"form_autocomplete.html\" class=\"nav-link\">Autocomplete</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"form_checkboxes_radios.html\" class=\"nav-link\">Checkboxes &amp; radios</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"form_dual_listboxes.html\" class=\"nav-link\">Dual Listboxes</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"form_controls_extended.html\" class=\"nav-link\">Extended controls</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"form_floating_labels.html\" class=\"nav-link\">Floating labels</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"form_actions.html\" class=\"nav-link\">Form actions</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"form_wizard.html\" class=\"nav-link\">Form wizard</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"form_inputs.html\" class=\"nav-link\">Input fields</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"form_input_groups.html\" class=\"nav-link\">Input groups</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"form_multiselect.html\" class=\"nav-link\">Multiselect</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"form_select2.html\" class=\"nav-link\">Select2 selects</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"form_tags.html\" class=\"nav-link\">Tags</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"form_validation_styles.html\" class=\"nav-link\">Validation styles</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"form_validation_library.html\" class=\"nav-link\">Validation library</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item nav-item-submenu\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">
\t\t\t\t\t\t\t\t<i class=\"ph-text-aa\"></i>
\t\t\t\t\t\t\t\t<span>Text editors</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<ul class=\"nav-group-sub collapse\">
\t\t\t\t\t\t\t\t<li class=\"nav-item nav-item-submenu\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">CKEditor</a>
\t\t\t\t\t\t\t\t\t<ul class=\"nav-group-sub collapse\">
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"editor_ckeditor_classic.html\" class=\"nav-link\">Classic</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"editor_ckeditor_document.html\" class=\"nav-link\">Document</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"editor_ckeditor_balloon.html\" class=\"nav-link\">Balloon</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"editor_quill.html\" class=\"nav-link\">Quill</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"editor_trumbowyg.html\" class=\"nav-link\">Trumbowyg</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"editor_code.html\" class=\"nav-link\">Code</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item nav-item-submenu\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">
\t\t\t\t\t\t\t\t<i class=\"ph-hand-pointing\"></i>
\t\t\t\t\t\t\t\t<span>Pickers</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<ul class=\"nav-group-sub collapse\">
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"picker_color.html\" class=\"nav-link\">Color pickers</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"picker_date.html\" class=\"nav-link\">Date &amp; time pickers</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item nav-item-submenu\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">
\t\t\t\t\t\t\t\t<i class=\"ph-browser\"></i>
\t\t\t\t\t\t\t\t<span>Form layouts</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<ul class=\"nav-group-sub collapse\">
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"form_layout_horizontal.html\" class=\"nav-link\">Horizontal form</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"form_layout_vertical.html\" class=\"nav-link\">Vertical form</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item-divider\"></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"form_layout_grid.html\" class=\"nav-link\">Input grid</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<!-- /forms -->

\t\t\t\t\t\t<!-- Components -->
\t\t\t\t\t\t<li class=\"nav-item-header\">
\t\t\t\t\t\t\t<div class=\"text-uppercase fs-sm lh-sm opacity-50 sidebar-resize-hide\">Components</div>
\t\t\t\t\t\t\t<i class=\"ph-dots-three sidebar-resize-show\"></i>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item nav-item-submenu\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">
\t\t\t\t\t\t\t\t<i class=\"ph-squares-four\"></i>
\t\t\t\t\t\t\t\t<span>Basic components</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<ul class=\"nav-group-sub collapse\">
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"components_accordion.html\" class=\"nav-link\">Accordion</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"components_alerts.html\" class=\"nav-link\">Alerts</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"components_badges.html\" class=\"nav-link\">Badges</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"components_breadcrumbs.html\" class=\"nav-link\">Breadcrumbs</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"components_buttons.html\" class=\"nav-link\">Buttons</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"components_carousel.html\" class=\"nav-link\">Carousel</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"components_collapsible.html\" class=\"nav-link\">Collapsible</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"components_dropdowns.html\" class=\"nav-link\">Dropdown menus</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"components_list_group.html\" class=\"nav-link\">List group</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"components_media.html\" class=\"nav-link\">Media objects</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"components_modals.html\" class=\"nav-link\">Modals</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"components_offcanvas.html\" class=\"nav-link\">Offcanvas</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"components_pagination.html\" class=\"nav-link\">Pagination</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"components_pills.html\" class=\"nav-link\">Pills</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"components_placeholder.html\" class=\"nav-link\">Placeholder</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"components_popovers.html\" class=\"nav-link\">Popovers</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"components_progress.html\" class=\"nav-link\">Progress</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"components_scrollspy.html\" class=\"nav-link\">Scrollspy</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"components_tabs.html\" class=\"nav-link\">Tabs</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"components_toasts.html\" class=\"nav-link\">Toasts</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"components_tooltips.html\" class=\"nav-link\">Tooltips</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item nav-item-submenu\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">
\t\t\t\t\t\t\t\t<i class=\"ph-article\"></i>
\t\t\t\t\t\t\t\t<span>Content styling</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<ul class=\"nav-group-sub collapse\">
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"content_page_header.html\" class=\"nav-link\">Page header</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item-divider\"></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"content_cards.html\" class=\"nav-link\">Cards</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"content_cards_header.html\" class=\"nav-link\">Card header elements</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"content_cards_footer.html\" class=\"nav-link\">Card footer elements</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"content_cards_content.html\" class=\"nav-link\">Card content</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"content_cards_layouts.html\" class=\"nav-link\">Card layouts</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"content_cards_draggable.html\" class=\"nav-link\">Draggable cards</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item-divider\"></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"content_helpers_flex.html\" class=\"nav-link\">Flex utilities</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"content_helpers.html\" class=\"nav-link\">Helper classes</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"content_grid.html\" class=\"nav-link\">Grid system</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"content_syntax_highlighter.html\" class=\"nav-link\">Syntax highlighter</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"content_text_styling.html\" class=\"nav-link\">Text styling</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"content_typography.html\" class=\"nav-link\">Typography</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item nav-item-submenu\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">
\t\t\t\t\t\t\t\t<i class=\"ph-dots-three-circle\"></i>
\t\t\t\t\t\t\t\t<span>Extra components</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<ul class=\"nav-group-sub collapse\">
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"extra_noty.html\" class=\"nav-link\">Noty notifications</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"extra_sweetalert.html\" class=\"nav-link\">Sweet alert</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"extra_sliders_noui.html\" class=\"nav-link\">NoUI sliders</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"extra_sliders_ion.html\" class=\"nav-link\">Ion range sliders</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"extra_trees.html\" class=\"nav-link\">Dynamic tree views</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"extra_fab.html\" class=\"nav-link\">Floating action buttons</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"extra_session_timeout.html\" class=\"nav-link\">Session timeout</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"extra_idle_timeout.html\" class=\"nav-link\">Idle timeout</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item nav-item-submenu\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">
\t\t\t\t\t\t\t\t<i class=\"ph-drop\"></i>
\t\t\t\t\t\t\t\t<span>Color system</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<ul class=\"nav-group-sub collapse\">
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"colors_primary.html\" class=\"nav-link\">Primary palette</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"colors_secondary.html\" class=\"nav-link\">Secondary palette</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"colors_danger.html\" class=\"nav-link\">Danger palette</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"colors_success.html\" class=\"nav-link\">Success palette</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"colors_warning.html\" class=\"nav-link\">Warning palette</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"colors_info.html\" class=\"nav-link\">Info palette</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item-divider\"></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"colors_pink.html\" class=\"nav-link\">Pink palette</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"colors_purple.html\" class=\"nav-link\">Purple palette</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"colors_indigo.html\" class=\"nav-link\">Indigo palette</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"colors_teal.html\" class=\"nav-link\">Teal palette</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"colors_yellow.html\" class=\"nav-link\">Yellow palette</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item nav-item-submenu\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">
\t\t\t\t\t\t\t\t<i class=\"ph-spinner spinner\"></i>
\t\t\t\t\t\t\t\t<span>Animations</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<ul class=\"nav-group-sub collapse\">
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"animations_css3.html\" class=\"nav-link\">CSS3 animations</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item nav-item-submenu\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">Velocity animations</a>
\t\t\t\t\t\t\t\t\t<ul class=\"nav-group-sub collapse\">
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"animations_velocity_basic.html\" class=\"nav-link\">Basic usage</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"animations_velocity_ui.html\" class=\"nav-link\">UI pack effects</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"animations_velocity_examples.html\" class=\"nav-link\">Advanced examples</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item nav-item-submenu\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">
\t\t\t\t\t\t\t\t<i class=\"ph-smiley-wink\"></i>
\t\t\t\t\t\t\t\t<span>Icons</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<ul class=\"nav-group-sub collapse\">
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"icons_phosphor.html\" class=\"nav-link\">Phosphor</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"icons_icomoon.html\" class=\"nav-link\">Icomoon</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"icons_material.html\" class=\"nav-link\">Material</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"icons_fontawesome.html\" class=\"nav-link\">Font awesome</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<!-- /components -->

\t\t\t\t\t\t<!-- Layout -->
\t\t\t\t\t\t<li class=\"nav-item-header\">
\t\t\t\t\t\t\t<div class=\"text-uppercase fs-sm lh-sm opacity-50 sidebar-resize-hide\">Layout</div>
\t\t\t\t\t\t\t<i class=\"ph-dots-three sidebar-resize-show\"></i>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item nav-item-submenu\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">
\t\t\t\t\t\t\t\t<i class=\"ph-layout\"></i>
\t\t\t\t\t\t\t\t<span>Page layouts</span>
\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t<ul class=\"nav-group-sub collapse\">
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"layout_static.html\" class=\"nav-link\">Static layout</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"layout_no_header.html\" class=\"nav-link\">No header</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"layout_no_footer.html\" class=\"nav-link\">No footer</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item-divider\"></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"layout_fixed_header.html\" class=\"nav-link\">Fixed header</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"layout_fixed_footer.html\" class=\"nav-link\">Fixed footer</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item-divider\"></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"layout_2_sidebars_1_side.html\" class=\"nav-link\">2 sidebars on 1 side</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"layout_2_sidebars_2_sides.html\" class=\"nav-link\">2 sidebars on 2 sides</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"layout_3_sidebars.html\" class=\"nav-link\">3 sidebars</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item-divider\"></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"layout_boxed_page.html\" class=\"nav-link\">Boxed page</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"layout_boxed_content.html\" class=\"nav-link\">Boxed content</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item nav-item-submenu\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">
\t\t\t\t\t\t\t\t<i class=\"ph-columns\"></i>
\t\t\t\t\t\t\t\t<span>Sidebars</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<ul class=\"nav-group-sub collapse\">
\t\t\t\t\t\t\t\t<li class=\"nav-item nav-item-submenu\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">Main sidebar</a>
\t\t\t\t\t\t\t\t\t<ul class=\"nav-group-sub collapse\">
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"sidebar_default_resizable.html\" class=\"nav-link\">Resizable</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"sidebar_default_resized.html\" class=\"nav-link\">Resized</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"sidebar_default_collapsible.html\" class=\"nav-link\">Collapsible</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"sidebar_default_collapsed.html\" class=\"nav-link\">Collapsed</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"sidebar_default_hideable.html\" class=\"nav-link\">Hideable</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"sidebar_default_hidden.html\" class=\"nav-link\">Hidden</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item-divider\"></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"sidebar_default_color_light.html\" class=\"nav-link\">Light color</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"nav-item nav-item-submenu\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">Secondary sidebar</a>
\t\t\t\t\t\t\t\t\t<ul class=\"nav-group-sub collapse\">
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"sidebar_secondary_collapsible.html\" class=\"nav-link\">Collapsible</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"sidebar_secondary_collapsed.html\" class=\"nav-link\">Collapsed</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"sidebar_secondary_hideable.html\" class=\"nav-link\">Hideable</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"sidebar_secondary_hidden.html\" class=\"nav-link\">Hidden</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item-divider\"></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"sidebar_secondary_color_dark.html\" class=\"nav-link\">Dark color</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"nav-item nav-item-submenu\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">Right sidebar</a>
\t\t\t\t\t\t\t\t\t<ul class=\"nav-group-sub collapse\">
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"sidebar_right_collapsible.html\" class=\"nav-link\">Collapsible</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"sidebar_right_collapsed.html\" class=\"nav-link\">Collapsed</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"sidebar_right_hideable.html\" class=\"nav-link\">Hideable</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"sidebar_right_hidden.html\" class=\"nav-link\">Hidden</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item-divider\"></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"sidebar_right_color_dark.html\" class=\"nav-link\">Dark color</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"nav-item nav-item-submenu\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">Content sidebar</a>
\t\t\t\t\t\t\t\t\t<ul class=\"nav-group-sub collapse\">
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"sidebar_content_left.html\" class=\"nav-link\">Left aligned</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"sidebar_content_left_stretch.html\" class=\"nav-link\">Left stretched</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"sidebar_content_left_sections.html\" class=\"nav-link\">Left sectioned</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"sidebar_content_right.html\" class=\"nav-link\">Right aligned</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"sidebar_content_right_stretch.html\" class=\"nav-link\">Right stretched</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"sidebar_content_right_sections.html\" class=\"nav-link\">Right sectioned</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item-divider\"></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"sidebar_content_color_dark.html\" class=\"nav-link\">Dark color</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"nav-item-divider\"></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item nav-item-submenu\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">Sticky areas</a>
\t\t\t\t\t\t\t\t\t<ul class=\"nav-group-sub collapse\">
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"sidebar_sticky_header.html\" class=\"nav-link\">Header</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"sidebar_sticky_footer.html\" class=\"nav-link\">Footer</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"sidebar_sticky_header_footer.html\" class=\"nav-link\">Header and footer</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"sidebar_sticky_custom.html\" class=\"nav-link\">Custom elements</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"sidebar_components.html\" class=\"nav-link\">Sidebar components</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item nav-item-submenu\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">
\t\t\t\t\t\t\t\t<i class=\"ph-rows\"></i>
\t\t\t\t\t\t\t\t<span>Navbars</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<ul class=\"nav-group-sub collapse\">
\t\t\t\t\t\t\t\t<li class=\"nav-item nav-item-submenu\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">Single navbar</a>
\t\t\t\t\t\t\t\t\t<ul class=\"nav-group-sub collapse\">
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"navbar_single_bottom_fixed.html\" class=\"nav-link\">Bottom fixed</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"navbar_single_header_before.html\" class=\"nav-link\">Before page header</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"navbar_single_header_before_fixed.html\" class=\"nav-link\">Before page header fixed</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"navbar_single_header_after.html\" class=\"nav-link\">After page header</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"navbar_single_header_after_sticky.html\" class=\"nav-link\">After page header sticky</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"nav-item nav-item-submenu\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">Multiple navbars</a>
\t\t\t\t\t\t\t\t\t<ul class=\"nav-group-sub collapse\">
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"navbar_multiple_top.html\" class=\"nav-link\">Multiple top</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"navbar_multiple_bottom_static.html\" class=\"nav-link\">Multiple bottom static</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"navbar_multiple_bottom_fixed.html\" class=\"nav-link\">Multiple bottom fixed</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"navbar_multiple_top_bottom_fixed.html\" class=\"nav-link\">Top and bottom fixed</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"nav-item nav-item-submenu\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">Content navbar</a>
\t\t\t\t\t\t\t\t\t<ul class=\"nav-group-sub collapse\">
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"navbar_component_single.html\" class=\"nav-link\">Single navbar</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"navbar_component_multiple.html\" class=\"nav-link\">Multiple navbars</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"nav-item-divider\"></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"navbar_colors.html\" class=\"nav-link\">Color options</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"navbar_sizes.html\" class=\"nav-link\">Sizing options</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"navbar_components.html\" class=\"nav-link\">Navbar components</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item nav-item-submenu\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">
\t\t\t\t\t\t\t\t<i class=\"ph-arrow-fat-lines-down\"></i>
\t\t\t\t\t\t\t\t<span>Vertical navigation</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<ul class=\"nav-group-sub collapse\">
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"navigation_vertical_styles.html\" class=\"nav-link\">Navigation styles</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"navigation_vertical_collapsible.html\" class=\"nav-link\">Collapsible menu</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"navigation_vertical_accordion.html\" class=\"nav-link\">Accordion menu</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"navigation_vertical_bordered.html\" class=\"nav-link\">Bordered navigation</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"navigation_vertical_right_icons.html\" class=\"nav-link\">Right icons</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"navigation_vertical_badges.html\" class=\"nav-link\">Badges</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"navigation_vertical_disabled.html\" class=\"nav-link\">Disabled items</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item nav-item-submenu\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">
\t\t\t\t\t\t\t\t<i class=\"ph-arrow-fat-lines-right\"></i>
\t\t\t\t\t\t\t\t<span>Horizontal navigation</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<ul class=\"nav-group-sub collapse\">
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"navigation_horizontal_styles.html\" class=\"nav-link\">Navigation styles</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"navigation_horizontal_elements.html\" class=\"nav-link\">Navigation elements</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"navigation_horizontal_tabs.html\" class=\"nav-link\">Tabbed navigation</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"navigation_horizontal_disabled.html\" class=\"nav-link\">Disabled navigation links</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"navigation_horizontal_mega.html\" class=\"nav-link\">Horizontal mega menu</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item nav-item-submenu\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\"><i class=\"ph-arrow-elbow-down-right\"></i> <span>Menu levels</span></a>
\t\t\t\t\t\t\t<ul class=\"nav-group-sub collapse\">
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"#\" class=\"nav-link\">Second level</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item nav-item-submenu\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">Second level with child</a>
\t\t\t\t\t\t\t\t\t<ul class=\"nav-group-sub collapse\">
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"#\" class=\"nav-link\">Third level</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item nav-item-submenu\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">Third level with child</a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"nav-group-sub collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"#\" class=\"nav-link\">Fourth level</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"#\" class=\"nav-link\">Fourth level</a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"#\" class=\"nav-link\">Third level</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"#\" class=\"nav-link\">Second level</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<!-- /layout -->

\t\t\t\t\t\t<!-- Data visualization -->
\t\t\t\t\t\t<li class=\"nav-item-header\">
\t\t\t\t\t\t\t<div class=\"text-uppercase fs-sm lh-sm opacity-50 sidebar-resize-hide\">Data visualization</div>
\t\t\t\t\t\t\t<i class=\"ph-dots-three sidebar-resize-show\"></i>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item nav-item-submenu\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">
\t\t\t\t\t\t\t\t<i class=\"ph-chart-line\"></i>
\t\t\t\t\t\t\t\t<span>Echarts library</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<ul class=\"nav-group-sub collapse\">
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"echarts_lines.html\" class=\"nav-link\">Line charts</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"echarts_areas.html\" class=\"nav-link\">Area charts</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"echarts_columns_waterfalls.html\" class=\"nav-link\">Columns and waterfalls</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"echarts_bars_tornados.html\" class=\"nav-link\">Bars and tornados</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"echarts_scatter.html\" class=\"nav-link\">Scatter charts</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"echarts_pies_donuts.html\" class=\"nav-link\">Pies and donuts</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"echarts_funnels_calendars.html\" class=\"nav-link\">Funnels and calendars</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"echarts_candlesticks_others.html\" class=\"nav-link\">Candlesticks and others</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item nav-item-submenu\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">
\t\t\t\t\t\t\t\t<i class=\"ph-chart-bar\"></i>
\t\t\t\t\t\t\t\t<span>D3 library</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<ul class=\"nav-group-sub collapse\">
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"d3_lines_basic.html\" class=\"nav-link\">Simple lines</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"d3_lines_advanced.html\" class=\"nav-link\">Advanced lines</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"d3_bars_basic.html\" class=\"nav-link\">Simple bars</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"d3_bars_advanced.html\" class=\"nav-link\">Advanced bars</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"d3_pies.html\" class=\"nav-link\">Pie charts</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"d3_circle_diagrams.html\" class=\"nav-link\">Circle diagrams</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"d3_tree.html\" class=\"nav-link\">Tree layout</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"d3_other.html\" class=\"nav-link\">Other charts</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item nav-item-submenu\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">
\t\t\t\t\t\t\t\t<i class=\"ph-chart-pie-slice\"></i>
\t\t\t\t\t\t\t\t<span>C3 library</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<ul class=\"nav-group-sub collapse\">
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"c3_lines_areas.html\" class=\"nav-link\">Lines and areas</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"c3_bars_pies.html\" class=\"nav-link\">Bars and pies</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"c3_advanced.html\" class=\"nav-link\">Advanced examples</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"c3_axis.html\" class=\"nav-link\">Chart axis</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"c3_grid.html\" class=\"nav-link\">Grid options</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item nav-item-submenu\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">
\t\t\t\t\t\t\t\t<i class=\"ph-google-logo\"></i>
\t\t\t\t\t\t\t\t<span>Google charts</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<ul class=\"nav-group-sub collapse\">
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"google_lines.html\" class=\"nav-link\">Line charts</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"google_bars.html\" class=\"nav-link\">Bar charts</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"google_pies.html\" class=\"nav-link\">Pie charts</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"google_scatter_bubble.html\" class=\"nav-link\">Bubble &amp; scatter charts</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"google_other.html\" class=\"nav-link\">Other charts</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item nav-item-submenu\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">
\t\t\t\t\t\t\t\t<i class=\"ph-map-pin\"></i>
\t\t\t\t\t\t\t\t<span>Maps integration</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<ul class=\"nav-group-sub collapse\">
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"maps_leaflet.html\" class=\"nav-link\">Leaflet maps</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"maps_echarts.html\" class=\"nav-link\">ECharts maps</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"maps_vector.html\" class=\"nav-link disabled\">D3.js maps <span class=\"badge bg-transparent align-self-center ms-auto\">Coming soon</span></a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<!-- /data visualization -->

\t\t\t\t\t\t<!-- Extensions -->
\t\t\t\t\t\t<li class=\"nav-item-header\">
\t\t\t\t\t\t\t<div class=\"text-uppercase fs-sm lh-sm opacity-50 sidebar-resize-hide\">Extensions</div>
\t\t\t\t\t\t\t<i class=\"ph-dots-three sidebar-resize-show\"></i>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item nav-item-submenu\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">
\t\t\t\t\t\t\t\t<i class=\"ph-circles-three\"></i>
\t\t\t\t\t\t\t\t<span>Extensions</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<ul class=\"nav-group-sub collapse\">
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"extension_image_cropper.html\" class=\"nav-link\">Image cropper</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"extension_mark.html\" class=\"nav-link\">Mark</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"extension_dnd.html\" class=\"nav-link\">Drag and drop</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item nav-item-submenu\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">
\t\t\t\t\t\t\t\t<i class=\"ph-cloud-arrow-up\"></i>
\t\t\t\t\t\t\t\t<span>File uploaders</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<ul class=\"nav-group-sub collapse\">
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"uploader_plupload.html\" class=\"nav-link\">Plupload</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"uploader_bootstrap.html\" class=\"nav-link\">Bootstrap file uploader</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"uploader_dropzone.html\" class=\"nav-link\">Dropzone</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item nav-item-submenu\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">
\t\t\t\t\t\t\t\t<i class=\"ph-calendar-check\"></i>
\t\t\t\t\t\t\t\t<span>Event calendars</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<ul class=\"nav-group-sub collapse\">
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"fullcalendar_views.html\" class=\"nav-link\">Basic views</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"fullcalendar_styling.html\" class=\"nav-link\">Event styling</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"fullcalendar_formats.html\" class=\"nav-link\">Language and time</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"fullcalendar_advanced.html\" class=\"nav-link\">Advanced usage</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item nav-item-submenu\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">
\t\t\t\t\t\t\t\t<i class=\"ph-globe\"></i>
\t\t\t\t\t\t\t\t<span>Internationalization</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<ul class=\"nav-group-sub collapse\">
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"internationalization_switch_direct.html\" class=\"nav-link\">Direct translation</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"internationalization_switch_query.html\" class=\"nav-link\">Querystring parameter</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"internationalization_fallback.html\" class=\"nav-link\">Language fallback</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"internationalization_callbacks.html\" class=\"nav-link\">Callbacks</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<!-- /extensions -->

\t\t\t\t\t\t<!-- Tables -->
\t\t\t\t\t\t<li class=\"nav-item-header\">
\t\t\t\t\t\t\t<div class=\"text-uppercase fs-sm lh-sm opacity-50 sidebar-resize-hide\">Tables</div>
\t\t\t\t\t\t\t<i class=\"ph-dots-three sidebar-resize-show\"></i>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item nav-item-submenu\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">
\t\t\t\t\t\t\t\t<i class=\"ph-table\"></i>
\t\t\t\t\t\t\t\t<span>Basic tables</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<ul class=\"nav-group-sub collapse\">
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"table_basic.html\" class=\"nav-link\">Basic examples</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"table_sizing.html\" class=\"nav-link\">Table sizing</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"table_borders.html\" class=\"nav-link\">Table borders</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"table_styling.html\" class=\"nav-link\">Table styling</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"table_elements.html\" class=\"nav-link\">Table elements</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item nav-item-submenu\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">
\t\t\t\t\t\t\t\t<i class=\"ph-square-half-bottom\"></i>
\t\t\t\t\t\t\t\t<span>Grid.js tables</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<ul class=\"nav-group-sub collapse\">
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"gridjs_basic.html\" class=\"nav-link\">Basic</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"gridjs_data_source.html\" class=\"nav-link\">Data source</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"gridjs_server_side.html\" class=\"nav-link\">Server side</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"gridjs_customizing.html\" class=\"nav-link\">Customizing</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"gridjs_advanced.html\" class=\"nav-link\">Advanced</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item nav-item-submenu\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">
\t\t\t\t\t\t\t\t<i class=\"ph-square-half\"></i>
\t\t\t\t\t\t\t\t<span>Data tables</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<ul class=\"nav-group-sub collapse\">
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"datatable_basic.html\" class=\"nav-link\">Basic initialization</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"datatable_styling.html\" class=\"nav-link\">Basic styling</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"datatable_advanced.html\" class=\"nav-link\">Advanced examples</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"datatable_sorting.html\" class=\"nav-link\">Sorting options</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"datatable_api.html\" class=\"nav-link\">Using API</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"datatable_data_sources.html\" class=\"nav-link\">Data sources</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item nav-item-submenu\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">
\t\t\t\t\t\t\t\t<i class=\"ph-puzzle-piece\"></i>
\t\t\t\t\t\t\t\t<span>Data tables extensions</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<ul class=\"nav-group-sub collapse\">
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"datatable_extension_reorder.html\" class=\"nav-link\">Columns reorder</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"datatable_extension_row_reorder.html\" class=\"nav-link\">Row reorder</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"datatable_extension_fixed_columns.html\" class=\"nav-link\">Fixed columns</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"datatable_extension_autofill.html\" class=\"nav-link\">Auto fill</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"datatable_extension_key_table.html\" class=\"nav-link\">Key table</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"datatable_extension_scroller.html\" class=\"nav-link\">Scroller</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"datatable_extension_select.html\" class=\"nav-link\">Select</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"datatable_extension_responsive.html\" class=\"nav-link\">Responsive</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item nav-item-submenu\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">Buttons</a>
\t\t\t\t\t\t\t\t\t<ul class=\"nav-group-sub collapse\">
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"datatable_extension_buttons_init.html\" class=\"nav-link\">Initialization</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"datatable_extension_buttons_pdf.html\" class=\"nav-link\">PDF buttons</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"datatable_extension_buttons_excel.html\" class=\"nav-link\">Excel buttons</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"datatable_extension_buttons_print.html\" class=\"nav-link\">Print buttons</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"datatable_extension_buttons_html5.html\" class=\"nav-link\">HTML5 buttons</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"datatable_extension_colvis.html\" class=\"nav-link\">Columns visibility</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<!-- /tables -->

\t\t\t\t\t\t<!-- Page kits -->
\t\t\t\t\t\t<li class=\"nav-item-header\">
\t\t\t\t\t\t\t<div class=\"text-uppercase fs-sm lh-sm opacity-50 sidebar-resize-hide\">Page kits</div>
\t\t\t\t\t\t\t<i class=\"ph-dots-three sidebar-resize-show\"></i>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item nav-item-submenu\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">
\t\t\t\t\t\t\t\t<i class=\"ph-cards\"></i>
\t\t\t\t\t\t\t\t<span>General pages</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<ul class=\"nav-group-sub collapse\">
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"general_feed.html\" class=\"nav-link\">Feed</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"general_embeds.html\" class=\"nav-link\">Embeds</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"general_faq.html\" class=\"nav-link\">FAQ page</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"general_knowledgebase.html\" class=\"nav-link\">Knowledgebase</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item nav-item-submenu\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">Blog</a>
\t\t\t\t\t\t\t\t\t<ul class=\"nav-group-sub collapse\">
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"blog_classic_v.html\" class=\"nav-link\">Classic vertical</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"blog_classic_h.html\" class=\"nav-link\">Classic horizontal</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"blog_grid.html\" class=\"nav-link\">Grid</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"blog_single.html\" class=\"nav-link\">Single post</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item-divider\"></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"blog_sidebar_left.html\" class=\"nav-link\">Left sidebar</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"blog_sidebar_right.html\" class=\"nav-link\">Right sidebar</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"nav-item nav-item-submenu\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">Timelines</a>
\t\t\t\t\t\t\t\t\t<ul class=\"nav-group-sub collapse\">
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"timelines_left.html\" class=\"nav-link\">Left timeline</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"timelines_right.html\" class=\"nav-link\">Right timeline</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"timelines_center.html\" class=\"nav-link\">Centered timeline</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"nav-item nav-item-submenu\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">Gallery</a>
\t\t\t\t\t\t\t\t\t<ul class=\"nav-group-sub collapse\">
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"gallery_grid.html\" class=\"nav-link\">Media grid</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"gallery_titles.html\" class=\"nav-link\">Media with titles</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"gallery_description.html\" class=\"nav-link\">Media with description</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"gallery_library.html\" class=\"nav-link\">Media library</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item nav-item-submenu\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">
\t\t\t\t\t\t\t\t<i class=\"ph-wrench\"></i>
\t\t\t\t\t\t\t\t<span>Service pages</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<ul class=\"nav-group-sub collapse\">
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"service_sitemap.html\" class=\"nav-link\">Sitemap</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item nav-item-submenu\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">Invoicing</a>
\t\t\t\t\t\t\t\t\t<ul class=\"nav-group-sub collapse\">
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"invoice_template.html\" class=\"nav-link\">Invoice template</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"invoice_grid.html\" class=\"nav-link\">Invoice grid</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"invoice_archive.html\" class=\"nav-link\">Invoice archive</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"nav-item nav-item-submenu\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">Authentication</a>
\t\t\t\t\t\t\t\t\t<ul class=\"nav-group-sub collapse\">
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"login_simple.html\" class=\"nav-link\">Simple login</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"login_advanced.html\" class=\"nav-link\">More login info</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"login_registration.html\" class=\"nav-link\">Simple registration</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"login_registration_advanced.html\" class=\"nav-link\">More registration info</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"login_unlock.html\" class=\"nav-link\">Unlock user</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"login_password_recover.html\" class=\"nav-link\">Reset password</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"login_hide_navbar.html\" class=\"nav-link\">Hide navbar</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"login_transparent.html\" class=\"nav-link\">Transparent box</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"login_background.html\" class=\"nav-link\">Background option</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"login_validation.html\" class=\"nav-link\">With validation</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"login_tabbed.html\" class=\"nav-link\">Tabbed form</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"login_modals.html\" class=\"nav-link\">Inside modals</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"nav-item nav-item-submenu\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">Error pages</a>
\t\t\t\t\t\t\t\t\t<ul class=\"nav-group-sub collapse\">
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"error_403.html\" class=\"nav-link\">Error 403</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"error_404.html\" class=\"nav-link\">Error 404</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"error_405.html\" class=\"nav-link\">Error 405</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"error_500.html\" class=\"nav-link\">Error 500</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"error_503.html\" class=\"nav-link\">Error 503</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"error_offline.html\" class=\"nav-link\">Offline page</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item nav-item-submenu\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">
\t\t\t\t\t\t\t\t<i class=\"ph-user-focus\"></i>
\t\t\t\t\t\t\t\t<span>User pages</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<ul class=\"nav-group-sub collapse\">
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"user_pages_list.html\" class=\"nav-link\">User list</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"user_pages_cards.html\" class=\"nav-link\">User cards</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"user_pages_profile.html\" class=\"nav-link\">Simple profile</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"user_pages_profile_tabbed.html\" class=\"nav-link\">Tabbed profile</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"user_pages_profile_cover.html\" class=\"nav-link\">Profile with cover</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item nav-item-submenu\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">
\t\t\t\t\t\t\t\t<i class=\"ph-circles-four\"></i>
\t\t\t\t\t\t\t\t<span>Application pages</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<ul class=\"nav-group-sub collapse\">
\t\t\t\t\t\t\t\t<li class=\"nav-item nav-item-submenu\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">Task manager</a>
\t\t\t\t\t\t\t\t\t<ul class=\"nav-group-sub collapse\">
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"task_manager_grid.html\" class=\"nav-link\">Task grid</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"task_manager_list.html\" class=\"nav-link\">Task list</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"task_manager_detailed.html\" class=\"nav-link\">Task detailed</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"nav-item nav-item-submenu\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">Inbox</a>
\t\t\t\t\t\t\t\t\t<ul class=\"nav-group-sub collapse\">
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"mail_list.html\" class=\"nav-link\">Mail list</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"mail_list_detached.html\" class=\"nav-link\">Mail list (detached)</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"mail_read.html\" class=\"nav-link\">Read mail</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"mail_write.html\" class=\"nav-link\">Write mail</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item-divider\"></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"chat_layouts.html\" class=\"nav-link\">Chat layouts</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"chat_options.html\" class=\"nav-link\">Chat options</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"nav-item nav-item-submenu\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">Search</a>
\t\t\t\t\t\t\t\t\t<ul class=\"nav-group-sub collapse\">
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"search_basic.html\" class=\"nav-link\">Basic search results</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"search_users.html\" class=\"nav-link\">User search results</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"search_images.html\" class=\"nav-link\">Image search results</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"search_videos.html\" class=\"nav-link\">Video search results</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"nav-item nav-item-submenu\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">Job search</a>
\t\t\t\t\t\t\t\t\t<ul class=\"nav-group-sub collapse\">
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"job_list_cards.html\" class=\"nav-link\">Cards view</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"job_list_list.html\" class=\"nav-link\">List view</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"job_detailed.html\" class=\"nav-link\">Job detailed</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"job_apply.html\" class=\"nav-link\">Apply</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"nav-item nav-item-submenu\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">Learning</a>
\t\t\t\t\t\t\t\t\t<ul class=\"nav-group-sub collapse\">
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"learning_list.html\" class=\"nav-link\">List view</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"learning_grid.html\" class=\"nav-link\">Grid view</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"learning_detailed.html\" class=\"nav-link\">Detailed course</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"nav-item nav-item-submenu\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">Ecommerce set</a>
\t\t\t\t\t\t\t\t\t<ul class=\"nav-group-sub collapse\">
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"ecommerce_product_list.html\" class=\"nav-link\">Product list</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"ecommerce_product_grid.html\" class=\"nav-link\">Product grid</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"ecommerce_orders_history.html\" class=\"nav-link\">Orders history</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"ecommerce_customers.html\" class=\"nav-link\">Customers</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"ecommerce_pricing.html\" class=\"nav-link\">Pricing tables</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item nav-item-submenu\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">
\t\t\t\t\t\t\t\t<i class=\"ph-gift\"></i>
\t\t\t\t\t\t\t\t<span>Widgets</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<ul class=\"nav-group-sub collapse\">
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"widgets_content.html\" class=\"nav-link\">Content widgets</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"widgets_stats.html\" class=\"nav-link\">Statistics widgets</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"widgets_menu.html\" class=\"nav-link disabled\">Menu widgets <span class=\"badge bg-transparent align-self-center ms-auto\">Coming soon</span></a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"widgets_form.html\" class=\"nav-link disabled\">Form widgets <span class=\"badge bg-transparent align-self-center ms-auto\">Coming soon</span></a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<!-- /page kits -->

\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<!-- /main navigation -->

\t\t\t</div>
\t\t\t<!-- /sidebar content -->
\t\t\t
\t\t</div>
\t\t<!-- /main sidebar -->


\t\t<!-- Main content -->
\t\t<div class=\"content-wrapper\">

\t\t\t<!-- Inner content -->
\t\t\t<div class=\"content-inner\">

\t\t\t\t<!-- Page header -->
\t\t\t\t<div class=\"page-header page-header-light shadow\">
\t\t\t\t\t<div class=\"page-header-content d-lg-flex\">
\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t<h4 class=\"page-title mb-0\">
\t\t\t\t\t\t\t\tHome - <span class=\"fw-normal\">Dashboard</span>
\t\t\t\t\t\t\t</h4>

\t\t\t\t\t\t\t<a href=\"#page_header\" class=\"btn btn-light align-self-center collapsed d-lg-none border-transparent rounded-pill p-0 ms-auto\" data-bs-toggle=\"collapse\">
\t\t\t\t\t\t\t\t<i class=\"ph-caret-down collapsible-indicator ph-sm m-1\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"collapse d-lg-block my-lg-auto ms-lg-auto\" id=\"page_header\">
\t\t\t\t\t\t\t<div class=\"d-sm-flex align-items-center mb-3 mb-lg-0 ms-lg-3\">
\t\t\t\t\t\t\t\t<div class=\"dropdown w-100 w-sm-auto\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"d-flex align-items-center text-body lh-1 dropdown-toggle py-sm-2\" data-bs-toggle=\"dropdown\" data-bs-display=\"static\">
\t\t\t\t\t\t\t\t\t\t<img src=\"../../../assets/images/brands/tesla.svg\" class=\"w-32px h-32px me-2\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t<div class=\"me-auto me-lg-1\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"fs-sm text-muted mb-1\">Customer</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"fw-semibold\">Tesla Motors Inc</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-lg-end w-100 w-lg-auto wmin-300 wmin-sm-350 pt-0\">
\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center p-3\">
\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"fw-semibold mb-0\">Customers</h6>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"ms-auto\">
\t\t\t\t\t\t\t\t\t\t\t\tView all
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-arrow-circle-right ms-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item active py-2\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"../../../assets/images/brands/tesla.svg\" class=\"w-32px h-32px me-2\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fw-semibold\">Tesla Motors Inc</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fs-sm text-muted\">42 users</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item py-2\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"../../../assets/images/brands/debijenkorf.svg\" class=\"w-32px h-32px me-2\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fw-semibold\">De Bijenkorf</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fs-sm text-muted\">49 users</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item py-2\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"../../../assets/images/brands/klm.svg\" class=\"w-32px h-32px me-2\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fw-semibold\">Royal Dutch Airlines</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fs-sm text-muted\">18 users</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item py-2\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"../../../assets/images/brands/shell.svg\" class=\"w-32px h-32px me-2\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fw-semibold\">Royal Dutch Shell</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fs-sm text-muted\">54 users</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item py-2\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"../../../assets/images/brands/bp.svg\" class=\"w-32px h-32px me-2\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fw-semibold\">BP plc</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fs-sm text-muted\">23 users</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"vr d-none d-sm-block flex-shrink-0 my-2 mx-3\"></div>

\t\t\t\t\t\t\t\t<div class=\"d-inline-flex mt-3 mt-sm-0\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"status-indicator-container ms-1\">
\t\t\t\t\t\t\t\t\t\t<img src=\"../../../assets/images/demo/users/face24.jpg\" class=\"w-32px h-32px rounded-pill\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t<span class=\"status-indicator bg-warning\"></span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"status-indicator-container ms-1\">
\t\t\t\t\t\t\t\t\t\t<img src=\"../../../assets/images/demo/users/face1.jpg\" class=\"w-32px h-32px rounded-pill\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t<span class=\"status-indicator bg-success\"></span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"status-indicator-container ms-1\">
\t\t\t\t\t\t\t\t\t\t<img src=\"../../../assets/images/demo/users/face3.jpg\" class=\"w-32px h-32px rounded-pill\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t<span class=\"status-indicator bg-danger\"></span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-outline-primary btn-icon w-32px h-32px rounded-pill ms-3\">
\t\t\t\t\t\t\t\t\t\t<i class=\"ph-plus\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"page-header-content d-lg-flex border-top\">
\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t<div class=\"breadcrumb py-2\">
\t\t\t\t\t\t\t\t<a href=\"index.html\" class=\"breadcrumb-item\"><i class=\"ph-house\"></i></a>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"breadcrumb-item\">Home</a>
\t\t\t\t\t\t\t\t<span class=\"breadcrumb-item active\">Dashboard</span>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<a href=\"#breadcrumb_elements\" class=\"btn btn-light align-self-center collapsed d-lg-none border-transparent rounded-pill p-0 ms-auto\" data-bs-toggle=\"collapse\">
\t\t\t\t\t\t\t\t<i class=\"ph-caret-down collapsible-indicator ph-sm m-1\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"collapse d-lg-block ms-lg-auto\" id=\"breadcrumb_elements\">
\t\t\t\t\t\t\t<div class=\"d-lg-flex mb-2 mb-lg-0\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"d-flex align-items-center text-body py-2\">
\t\t\t\t\t\t\t\t\t<i class=\"ph-lifebuoy me-2\"></i>
\t\t\t\t\t\t\t\t\tSupport
\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t<div class=\"dropdown ms-lg-3\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"d-flex align-items-center text-body dropdown-toggle py-2\" data-bs-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t<i class=\"ph-gear me-2\"></i>
\t\t\t\t\t\t\t\t\t\t<span class=\"flex-1\">Settings</span>
\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-end w-100 w-lg-auto\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-shield-warning me-2\"></i>
\t\t\t\t\t\t\t\t\t\t\tAccount security
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-chart-bar me-2\"></i>
\t\t\t\t\t\t\t\t\t\t\tAnalytics
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-lock-key me-2\"></i>
\t\t\t\t\t\t\t\t\t\t\tPrivacy
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-gear me-2\"></i>
\t\t\t\t\t\t\t\t\t\t\tAll settings
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- /page header -->


\t\t\t\t<!-- Content area -->
\t\t\t\t<div class=\"content\">

\t\t\t\t\t<!-- Main charts -->
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-xl-7\">

\t\t\t\t\t\t\t<!-- Traffic sources -->
\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t<div class=\"card-header d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t<h5 class=\"mb-0\">Traffic sources</h5>
\t\t\t\t\t\t\t\t\t<div class=\"ms-auto\">
\t\t\t\t\t\t\t\t\t\t<label class=\"form-check form-switch form-check-reverse\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" class=\"form-check-input\" checked>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"form-check-label\">Live update</span>
\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"card-body pb-0\">
\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center justify-content-center mb-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"bg-success bg-opacity-10 text-success lh-1 rounded-pill p-2 me-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-plus\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fw-semibold\">New visitors</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-muted\">2,349 avg</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"w-75 mx-auto mb-3\" id=\"new-visitors\"></div>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center justify-content-center mb-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"bg-warning bg-opacity-10 text-warning lh-1 rounded-pill p-2 me-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-clock\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fw-semibold\">New sessions</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-muted\">08:20 avg</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"w-75 mx-auto mb-3\" id=\"new-sessions\"></div>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center justify-content-center mb-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"bg-indigo bg-opacity-10 text-indigo lh-1 rounded-pill p-2 me-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-users-three\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fw-semibold\">Total online</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-muted\">5,378 avg</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"w-75 mx-auto mb-3\" id=\"total-online\"></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"chart position-relative\" id=\"traffic-sources\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- /traffic sources -->

\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"col-xl-5\">

\t\t\t\t\t\t\t<!-- Sales stats -->
\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t<div class=\"card-header d-sm-flex align-items-sm-center py-sm-0\">
\t\t\t\t\t\t\t\t\t<h5 class=\"py-sm-2 my-sm-1\">Sales statistics</h5>
\t\t\t\t\t\t\t\t\t<div class=\"mt-2 mt-sm-0 ms-sm-auto\">
\t\t\t\t\t\t\t\t\t\t<select class=\"form-select\" id=\"select_date\">
\t\t\t\t\t\t\t\t\t\t\t<option value=\"val1\">June, 29 - July, 5</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"val2\">June, 22 - June 28</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"val3\" selected>June, 15 - June, 21</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"val4\">June, 8 - June, 14</option>
\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t                \t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"card-body pb-0\">
\t\t\t\t\t\t\t\t\t<div class=\"row text-center\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-4\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"mb-0\">5,689</h5>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-muted fs-sm\">new orders</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"col-4\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"mb-0\">32,568</h5>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-muted fs-sm\">this month</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"col-4\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"mb-0\">\$23,464</h5>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-muted fs-sm\">expected profit</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"chart mb-2\" id=\"app_sales\"></div>
\t\t\t\t\t\t\t\t<div class=\"chart\" id=\"monthly-sales-stats\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- /sales stats -->

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- /main charts -->


\t\t\t\t\t<!-- Dashboard content -->
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-xl-8\">

\t\t\t\t\t\t\t<!-- Marketing campaigns -->
\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t<div class=\"card-header d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t<h5 class=\"mb-0\">Marketing campaigns</h5>
\t\t\t\t\t\t\t\t\t<div class=\"d-inline-flex ms-auto\">
\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-success rounded-pill\">28 active</span>
\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown d-inline-flex ms-3\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-body d-inline-flex align-items-center dropdown-toggle\" data-bs-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-gear\"></i>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-end\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-arrows-clockwise me-2\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\tUpdate data
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-list-dashes me-2\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\tDetailed log
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-chart-line me-2\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\tStatistics
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-eraser me-2\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\tClear list
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t                \t</div>
\t\t\t\t                \t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"card-body d-sm-flex align-items-sm-center justify-content-sm-between flex-sm-wrap\">
\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center mb-3 mb-sm-0\">
\t\t\t\t\t\t\t\t\t\t<div id=\"campaigns-donut\"></div>
\t\t\t\t\t\t\t\t\t\t<div class=\"ms-3\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"mb-0\">38,289</h5>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-success ms-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-arrow-up fs-base lh-base align-top\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t(+16.2%)
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"d-inline-block bg-success rounded-pill p-1 me-1\"></span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-muted\">May 12, 12:30 am</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center mb-3 mb-sm-0\">
\t\t\t\t\t\t\t\t\t\t<div id=\"campaign-status-pie\"></div>
\t\t\t\t\t\t\t\t\t\t<div class=\"ms-3\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"mb-0\">2,458</h5>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-danger ms-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-arrow-down fs-base lh-base align-top\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t(-4.9%)
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"d-inline-block bg-danger rounded-pill p-1 me-1\"></span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-muted\">Jun 4, 4:00 am</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-indigo\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-file-pdf me-2\"></i>
\t\t\t\t\t\t\t\t\t\t\tView report
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t\t\t\t\t<table class=\"table text-nowrap\">
\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<th>Campaign</th>
\t\t\t\t\t\t\t\t\t\t\t\t<th>Client</th>
\t\t\t\t\t\t\t\t\t\t\t\t<th>Changes</th>
\t\t\t\t\t\t\t\t\t\t\t\t<th>Budget</th>
\t\t\t\t\t\t\t\t\t\t\t\t<th>Status</th>
\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"text-center\" style=\"width: 20px;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-dots-three\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t<tr class=\"table-light\">
\t\t\t\t\t\t\t\t\t\t\t\t<td colspan=\"5\">Today</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-end\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"progress-meter\" id=\"today-progress\" data-progress=\"30\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"d-block me-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"../../../assets/images/brands/facebook.svg\" class=\"rounded-circle\" width=\"36\" height=\"36\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-body fw-semibold\">Facebook</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-muted fs-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"d-inline-block bg-primary rounded-pill p-1 me-1\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t02:00 - 03:00
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td><span class=\"text-muted\">Mintlime</span></td>
\t\t\t\t\t\t\t\t\t\t\t\t<td><span class=\"text-success\"><i class=\"ph-trend-up me-2\"></i> 2.43%</span></td>
\t\t\t\t\t\t\t\t\t\t\t\t<td><h6 class=\"mb-0\">\$5,489</h6></td>
\t\t\t\t\t\t\t\t\t\t\t\t<td><span class=\"badge bg-primary bg-opacity-10 text-primary\">Active</span></td>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-body\" data-bs-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-list\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-end\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-chart-line me-2\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tView statement
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-pencil me-2\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tEdit campaign
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-lock-key me-2\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tDisable campaign
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-gear me-2\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tSettings
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"d-block me-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"../../../assets/images/brands/youtube.svg\" class=\"rounded-circle\" width=\"36\" height=\"36\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-body fw-semibold\">Youtube videos</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-muted fs-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"d-inline-block bg-danger rounded-pill p-1 me-1\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t13:00 - 14:00
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td><span class=\"text-muted\">CDsoft</span></td>
\t\t\t\t\t\t\t\t\t\t\t\t<td><span class=\"text-success\"><i class=\"ph-trend-up me-2\"></i> 3.12%</span></td>
\t\t\t\t\t\t\t\t\t\t\t\t<td><h6 class=\"mb-0\">\$2,592</h6></td>
\t\t\t\t\t\t\t\t\t\t\t\t<td><span class=\"badge bg-danger bg-opacity-10 text-danger\">Closed</span></td>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-body\" data-bs-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-list\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-end\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-chart-line me-2\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tView statement
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-pencil me-2\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tEdit campaign
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-lock-key me-2\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tDisable campaign
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-gear me-2\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tSettings
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"d-block me-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"../../../assets/images/brands/spotify.svg\" class=\"rounded-circle\" width=\"36\" height=\"36\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-body fw-semibold\">Spotify ads</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-muted fs-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"d-inline-block bg-secondary rounded-pill p-1 me-1\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t10:00 - 11:00
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td><span class=\"text-muted\">Diligence</span></td>
\t\t\t\t\t\t\t\t\t\t\t\t<td><span class=\"text-danger\"><i class=\"ph-trend-down me-2\"></i> 8.02%</span></td>
\t\t\t\t\t\t\t\t\t\t\t\t<td><h6 class=\"mb-0\">\$1,268</h6></td>
\t\t\t\t\t\t\t\t\t\t\t\t<td><span class=\"badge bg-secondary bg-opacity-10 text-secondary\">On hold</span></td>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-body\" data-bs-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-list\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-end\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-chart-line me-2\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tView statement
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-pencil me-2\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tEdit campaign
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-lock-key me-2\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tDisable campaign
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-gear me-2\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tSettings
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"d-block me-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"../../../assets/images/brands/twitter.svg\" class=\"rounded-circle\" width=\"36\" height=\"36\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-body fw-semibold\">Twitter ads</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-muted fs-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"d-inline-block bg-secondary rounded-pill p-1 me-1\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t04:00 - 05:00
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td><span class=\"text-muted\">Deluxe</span></td>
\t\t\t\t\t\t\t\t\t\t\t\t<td><span class=\"text-success\"><i class=\"ph-trend-up me-2\"></i> 2.78%</span></td>
\t\t\t\t\t\t\t\t\t\t\t\t<td><h6 class=\"mb-0\">\$7,467</h6></td>
\t\t\t\t\t\t\t\t\t\t\t\t<td><span class=\"badge bg-secondary bg-opacity-10 text-secondary\">On hold</span></td>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-body\" data-bs-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-list\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-end\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-chart-line me-2\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tView statement
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-pencil me-2\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tEdit campaign
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-lock-key me-2\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tDisable campaign
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-gear me-2\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tSettings
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t\t\t\t\t\t<tr class=\"table-light\">
\t\t\t\t\t\t\t\t\t\t\t\t<td colspan=\"5\">Yesterday</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-end\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"progress-meter\" id=\"yesterday-progress\" data-progress=\"65\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"d-block me-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"../../../assets/images/brands/bing.svg\" class=\"rounded-circle\" width=\"36\" height=\"36\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-body fw-semibold\">Bing campaign</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-muted fs-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"d-inline-block bg-success rounded-pill p-1 me-1\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t15:00 - 16:00
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td><span class=\"text-muted\">Metrics</span></td>
\t\t\t\t\t\t\t\t\t\t\t\t<td><span class=\"text-danger\"><i class=\"ph-trend-down me-2\"></i> 5.78%</span></td>
\t\t\t\t\t\t\t\t\t\t\t\t<td><h6 class=\"mb-0\">\$970</h6></td>
\t\t\t\t\t\t\t\t\t\t\t\t<td><span class=\"badge bg-success bg-opacity-10 text-success\">Pending</span></td>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-body\" data-bs-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-list\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-end\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-chart-line me-2\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tView statement
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-pencil me-2\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tEdit campaign
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-lock-key me-2\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tDisable campaign
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-gear me-2\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tSettings
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"d-block me-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"../../../assets/images/brands/amazon.svg\" class=\"rounded-circle\" width=\"36\" height=\"36\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-body fw-semibold\">Amazon ads</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-muted fs-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"d-inline-block bg-danger rounded-pill p-1 me-1\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t18:00 - 19:00
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td><span class=\"text-muted\">Blueish</span></td>
\t\t\t\t\t\t\t\t\t\t\t\t<td><span class=\"text-success\"><i class=\"ph-trend-up me-2\"></i> 6.79%</span></td>
\t\t\t\t\t\t\t\t\t\t\t\t<td><h6 class=\"mb-0\">\$1,540</h6></td>
\t\t\t\t\t\t\t\t\t\t\t\t<td><span class=\"badge bg-primary bg-opacity-10 text-primary\">Active</span></td>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-body\" data-bs-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-list\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-end\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-chart-line me-2\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tView statement
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-pencil me-2\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tEdit campaign
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-lock-key me-2\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tDisable campaign
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-gear me-2\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tSettings
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"d-block me-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"../../../assets/images/brands/dribbble.svg\" class=\"rounded-circle\" width=\"36\" height=\"36\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-body fw-semibold\">Dribbble ads</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-muted fs-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"d-inline-block bg-primary rounded-pill p-1 me-1\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t20:00 - 21:00
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td><span class=\"text-muted\">Teamable</span></td>
\t\t\t\t\t\t\t\t\t\t\t\t<td><span class=\"text-danger\"><i class=\"ph-trend-down me-2\"></i> 9.83%</span></td>
\t\t\t\t\t\t\t\t\t\t\t\t<td><h6 class=\"mb-0\">\$8,350</h6></td>
\t\t\t\t\t\t\t\t\t\t\t\t<td><span class=\"badge bg-danger bg-opacity-10 text-danger\">Closed</span></td>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-body\" data-bs-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-list\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-end\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-chart-line me-2\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tView statement
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-pencil me-2\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tEdit campaign
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-lock-key me-2\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tDisable campaign
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-gear me-2\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tSettings
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- /marketing campaigns -->


\t\t\t\t\t\t\t<!-- Quick stats boxes -->
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-lg-4\">

\t\t\t\t\t\t\t\t\t<!-- Members online -->
\t\t\t\t\t\t\t\t\t<div class=\"card bg-teal text-white\">
\t\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"mb-0\">3,450</h3>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-black bg-opacity-50 rounded-pill align-self-center ms-auto\">+53,6%</span>
\t\t\t\t\t\t                \t</div>
\t\t\t\t\t\t                \t
\t\t\t\t\t\t                \t<div>
\t\t\t\t\t\t\t\t\t\t\t\tMembers online
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fs-sm opacity-75\">489 avg</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"rounded-bottom overflow-hidden mx-3\" id=\"members-online\"></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- /members online -->

\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"col-lg-4\">

\t\t\t\t\t\t\t\t\t<!-- Current server load -->
\t\t\t\t\t\t\t\t\t<div class=\"card bg-pink text-white\">
\t\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"mb-0\">49.4%</h3>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown d-inline-flex ms-auto\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-white d-inline-flex align-items-center dropdown-toggle\" data-bs-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-gear\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-end\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-arrows-clockwise me-2\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tUpdate data
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-list-dashes me-2\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tDetailed log
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-chart-line me-2\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tStatistics
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-eraser me-2\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tClear list
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t                \t\t</div>
\t\t\t\t\t\t                \t</div>
\t\t\t\t\t\t                \t
\t\t\t\t\t\t                \t<div>
\t\t\t\t\t\t\t\t\t\t\t\tCurrent server load
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fs-sm opacity-75\">34.6% avg</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"rounded-bottom overflow-hidden\" id=\"server-load\"></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- /current server load -->

\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"col-lg-4\">

\t\t\t\t\t\t\t\t\t<!-- Today's revenue -->
\t\t\t\t\t\t\t\t\t<div class=\"card bg-primary text-white\">
\t\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"mb-0\">\$18,390</h3>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ms-auto\">
\t\t\t\t\t\t\t                \t\t<a class=\"text-white\" data-card-action=\"reload\">
\t\t\t\t\t\t\t                \t\t\t<i class=\"ph-arrows-clockwise\"></i>
\t\t\t\t\t\t\t                \t\t</a>
\t\t\t\t\t\t\t                \t</div>
\t\t\t\t\t\t                \t</div>
\t\t\t\t\t\t                \t
\t\t\t\t\t\t                \t<div>
\t\t\t\t\t\t\t\t\t\t\t\tToday's revenue
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fs-sm opacity-75\">\$37,578 avg</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"rounded-bottom overflow-hidden\" id=\"today-revenue\"></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- /today's revenue -->

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- /quick stats boxes -->


\t\t\t\t\t\t\t<!-- Support tickets -->
\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t<div class=\"card-header d-sm-flex align-items-sm-center py-sm-0\">
\t\t\t\t\t\t\t\t\t<h5 class=\"py-sm-2 my-sm-1\">Support tickets</h5>
\t\t\t\t\t\t\t\t\t<div class=\"mt-2 mt-sm-0 ms-sm-auto\">
\t\t\t\t\t\t\t\t\t\t<select class=\"form-select\">
\t\t\t\t\t\t\t\t\t\t\t<option value=\"val1\" selected>June, 29 - July, 5</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"val2\">June, 22 - June 28</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"val3\">June, 15 - June, 21</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"val4\">June, 8 - June, 14</option>
\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t                \t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"card-body d-lg-flex align-items-lg-center justify-content-lg-between flex-lg-wrap\">
\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center mb-3 mb-lg-0\">
\t\t\t\t\t\t\t\t\t\t<div id=\"tickets-status\"></div>
\t\t\t\t\t\t\t\t\t\t<div class=\"ms-3\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"mb-0\">14,327</h5>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-success ms-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-arrow-up fs-base lh-base align-top\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t(+2.9%)
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"d-inline-block bg-success rounded-pill p-1 me-1\"></span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-muted\">Jun 16, 10:00 am</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center mb-3 mb-lg-0\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"bg-primary bg-opacity-10 text-primary lh-1 rounded-pill p-2\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-folders\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<div class=\"ms-3\">
\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"mb-0\">1,132</h5>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-muted\">total tickets</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center mb-3 mb-lg-0\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"bg-primary bg-opacity-10 text-primary lh-1 rounded-pill p-2\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-arrow-arc-left\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<div class=\"ms-3\">
\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"mb-0\">06:25:00</h5>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-muted\">response time</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-light\">
\t\t\t\t\t\t\t\t\t\t<i class=\"ph-file-pdf me-2\"></i>
\t\t\t\t\t\t\t\t\t\tReport
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t\t\t\t\t<table class=\"table text-nowrap\">
\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<th style=\"width: 50px\">Due</th>
\t\t\t\t\t\t\t\t\t\t\t\t<th style=\"width: 300px;\">User</th>
\t\t\t\t\t\t\t\t\t\t\t\t<th>Description</th>
\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"text-center\" style=\"width: 20px;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-dots-three\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t<tr class=\"table-light\">
\t\t\t\t\t\t\t\t\t\t\t\t<td colspan=\"3\">Active tickets</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-end\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-primary rounded-pill\">24</span>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"mb-0\">12</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fs-sm text-muted lh-1\">hours</div>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"d-inline-flex align-items-center justify-content-center bg-teal text-white lh-1 rounded-pill w-40px h-40px me-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"letter-icon\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-body fw-semibold letter-icon-title\">Annabelle Doney</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center text-muted fs-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"bg-danger rounded-pill p-1 me-2\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tBlocker
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fw-semibold\">[#1183] Workaround for OS X selects printing bug</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-muted\">Chrome fixed the bug several versions ago, thus rendering this...</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-body\" data-bs-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-list\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-end\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-arrow-bend-up-left me-2\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tQuick reply
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-clock-counter-clockwise me-2\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tFull history
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-checks text-success me-2\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tResolve issue
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-x text-danger me-2\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tClose issue
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"mb-0\">16</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fs-sm text-muted lh-1\">hours</div>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"d-inline-block me-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"../../../assets/images/demo/users/face15.jpg\" class=\"rounded-circle\" width=\"40\" height=\"40\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-body fw-semibold\">Chris Macintyre</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center text-muted fs-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"bg-primary rounded-pill p-1 me-2\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tMedium
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fw-semibold\">[#1249] Vertically center carousel controls</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-muted\">Try any carousel control and reduce the screen width below...</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-body\" data-bs-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-list\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-end\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-arrow-bend-up-left me-2\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tQuick reply
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-clock-counter-clockwise me-2\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tFull history
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-checks text-success me-2\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tResolve issue
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-x text-danger me-2\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tClose issue
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"mb-0\">20</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fs-sm text-muted lh-1\">hours</div>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"d-inline-flex align-items-center justify-content-center bg-primary text-white lh-1 rounded-pill w-40px h-40px me-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"letter-icon\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-body fw-semibold letter-icon-title\">Robert Hauber</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center text-muted fs-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"bg-primary rounded-pill p-1 me-2\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tMedium
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fw-semibold\">[#1254] Inaccurate small pagination height</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-muted\">The height of pagination elements is not consistent with...</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-body\" data-bs-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-list\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-end\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-arrow-bend-up-left me-2\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tQuick reply
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-clock-counter-clockwise me-2\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tFull history
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-checks text-success me-2\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tResolve issue
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-x text-danger me-2\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tClose issue
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"mb-0\">40</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fs-sm text-muted lh-1\">hours</div>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"d-inline-flex align-items-center justify-content-center bg-warning text-white lh-1 rounded-pill w-40px h-40px me-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"letter-icon\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-body fw-semibold letter-icon-title\">Robert Hauber</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center text-muted fs-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"bg-warning rounded-pill p-1 me-2\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tHigh
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fw-semibold\">[#1184] Round grid column gutter operations</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-muted\">Left rounds up, right rounds down. should keep everything...</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-body\" data-bs-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-list\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-end\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-arrow-bend-up-left me-2\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tQuick reply
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-clock-counter-clockwise me-2\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tFull history
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-checks text-success me-2\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tResolve issue
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-x text-danger me-2\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tClose issue
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t\t\t\t\t\t<tr class=\"table-light\">
\t\t\t\t\t\t\t\t\t\t\t\t<td colspan=\"3\">Resolved tickets</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-end\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-success rounded-pill\">42</span>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-check text-success\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"d-inline-flex align-items-center justify-content-center bg-success text-white lh-1 rounded-pill w-40px h-40px me-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"letter-icon\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-body fw-semibold letter-icon-title\">Alan Macedo</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center text-muted fs-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"bg-danger rounded-pill p-1 me-2\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tBlocker
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>[#1046] Avoid some unnecessary HTML string</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-muted\">Rather than building a string of HTML and then parsing it...</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-body\" data-bs-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-list\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-end\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-arrow-bend-up-left me-2\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tQuick reply
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-clock-counter-clockwise me-2\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tFull history
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-checks text-success me-2\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tResolve issue
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-x text-danger me-2\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tClose issue
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-check text-success\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"d-inline-flex align-items-center justify-content-center bg-pink text-white lh-1 rounded-pill w-40px h-40px me-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"letter-icon\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-body fw-semibold letter-icon-title\">Brett Castellano</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center text-muted fs-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"bg-success rounded-pill p-1 me-2\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tLow
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>[#1038] Update json configuration</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-muted\">The <code>files</code> property is necessary to override the files property...</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-body\" data-bs-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-list\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-end\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-arrow-bend-up-left me-2\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tQuick reply
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-clock-counter-clockwise me-2\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tFull history
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-checks text-success me-2\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tResolve issue
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-x text-danger me-2\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tClose issue
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-check text-success\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"d-inline-block me-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"../../../assets/images/demo/users/face3.jpg\" class=\"rounded-circle\" width=\"40\" height=\"40\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-body fw-semibold\">Roxanne Forbes</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center text-muted fs-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"bg-success rounded-pill p-1 me-2\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tLow
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>[#1034] Tooltip multiple event</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-muted\">Fix behavior when using tooltips and popovers that are...</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-body\" data-bs-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-list\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-end\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-arrow-bend-up-left me-2\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tQuick reply
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-clock-counter-clockwise me-2\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tFull history
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-checks text-success me-2\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tResolve issue
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-x text-danger me-2\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tClose issue
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t\t\t\t\t\t<tr class=\"table-light\">
\t\t\t\t\t\t\t\t\t\t\t\t<td colspan=\"3\">Closed tickets</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-end\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-danger rounded-pill\">37</span>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-checks text-danger\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"d-inline-block me-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"../../../assets/images/demo/users/face8.jpg\" class=\"rounded-circle\" width=\"40\" height=\"40\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-body fw-semibold\">Mitchell Sitkin</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center text-muted fs-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"bg-warning rounded-pill p-1 me-2\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tHigh
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>[#1040] Account for static form controls in form group</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-muted\">Resizes control label's font-size and account for the standard...</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-body\" data-bs-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-list\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-end\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-arrow-bend-up-left me-2\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tQuick reply
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-clock-counter-clockwise me-2\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tFull history
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-checks text-success me-2\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tResolve issue
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-x text-danger me-2\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tClose issue
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-checks text-danger\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"d-inline-flex align-items-center justify-content-center bg-indigo text-white lh-1 rounded-pill w-40px h-40px me-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"letter-icon\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-body fw-semibold letter-icon-title\">Katleen Jensen</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center text-muted fs-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"bg-primary rounded-pill p-1 me-2\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tMedium
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>[#1038] Proper sizing of form control feedback</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-muted\">Feedback icon sizing inside a larger/smaller form-group...</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-body\" data-bs-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-list\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-end\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-arrow-bend-up-left me-2\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tQuick reply
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-clock-counter-clockwise me-2\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tFull history
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-checks text-success me-2\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tResolve issue
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-x text-danger me-2\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tClose issue
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- /support tickets -->


\t\t\t\t\t\t\t<!-- Latest posts -->
\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t\t\t\t<h5 class=\"mb-0\">Latest posts</h5>
\t\t\t                \t</div>

\t\t\t\t\t\t\t\t<div class=\"card-body pb-0\">
\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-xl-6\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-sm-flex align-items-sm-start mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"d-inline-block position-relative me-sm-3 mb-3 mb-sm-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"../../../assets/images/demo/flat/1.png\" class=\"flex-shrink-0 rounded\" height=\"100\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-inline-flex bg-dark bg-opacity-50 text-white position-absolute start-50 top-50 translate-middle rounded-pill p-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-play\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"bg-dark bg-opacity-50 text-white fs-xs lh-1 rounded-1 position-absolute bottom-0 start-0 p-1 ms-2 mb-2\">12:25</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-fill\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"mb-1\"><a href=\"#\">Up unpacked friendly</a></h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"list-inline list-inline-bullet text-muted mb-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item\"><a href=\"#\" class=\"text-body\">Video tutorials</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\tThe him father parish looked has sooner. Attachment frequently terminated son hello...
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-sm-flex align-items-sm-start mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"d-inline-block position-relative me-sm-3 mb-3 mb-sm-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"../../../assets/images/demo/flat/21.png\" class=\"flex-shrink-0 rounded\" height=\"100\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-inline-flex bg-dark bg-opacity-50 text-white position-absolute start-50 top-50 translate-middle rounded-pill p-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-play\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"bg-dark bg-opacity-50 text-white fs-xs lh-1 rounded-1 position-absolute bottom-0 start-0 p-1 ms-2 mb-2\">47:25</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-fill\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"mb-1\"><a href=\"#\">It allowance prevailed</a></h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"list-inline list-inline-bullet text-muted mb-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item\"><a href=\"#\" class=\"text-body\">Video tutorials</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\tAlteration literature to or an sympathize mr imprudence. Of is ferrars subject enjoyed...
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"col-xl-6\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-sm-flex align-items-sm-start mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"d-inline-block position-relative me-sm-3 mb-3 mb-sm-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"../../../assets/images/demo/flat/12.png\" class=\"flex-shrink-0 rounded\" height=\"100\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-inline-flex bg-dark bg-opacity-50 text-white position-absolute start-50 top-50 translate-middle rounded-pill p-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-play\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"bg-dark bg-opacity-50 text-white fs-xs lh-1 rounded-1 position-absolute bottom-0 start-0 p-1 ms-2 mb-2\">48:40</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-fill\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"mb-1\"><a href=\"#\">Case read they must</a></h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"list-inline list-inline-bullet text-muted mb-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item\"><a href=\"#\" class=\"text-body\">Video tutorials</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\tOn it differed repeated wandered required in. Then girl neat why yet knew rose spot...
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-sm-flex align-items-sm-start mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"d-inline-block position-relative me-sm-3 mb-3 mb-sm-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"../../../assets/images/demo/flat/18.png\" class=\"flex-shrink-0 rounded\" height=\"100\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-inline-flex bg-dark bg-opacity-50 text-white position-absolute start-50 top-50 translate-middle rounded-pill p-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-play\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"bg-dark bg-opacity-50 text-white fs-xs lh-1 rounded-1 position-absolute bottom-0 start-0 p-1 ms-2 mb-2\">22:14</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-fill\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"mb-1\"><a href=\"#\">Consider now provided</a></h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"list-inline list-inline-bullet text-muted mb-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item\"><a href=\"#\" class=\"text-body\">Video tutorials</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\tMarianne or husbands if at stronger ye. Considered is as middletons uncommonly...
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- /latest posts -->

\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"col-xl-4\">

\t\t\t\t\t\t\t<!-- Progress counters -->
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">

\t\t\t\t\t\t\t\t\t<!-- Available hours -->
\t\t\t\t\t\t\t\t\t<div class=\"card text-center\">
\t\t\t\t\t\t\t\t\t\t<div class=\"card-body\">

\t\t\t\t\t\t                \t<!-- Progress counter -->
\t\t\t\t\t\t\t\t\t\t\t<div class=\"svg-center\" id=\"hours-available-progress\"></div>
\t\t\t\t\t\t\t\t\t\t\t<!-- /progress counter -->


\t\t\t\t\t\t\t\t\t\t\t<!-- Bars -->
\t\t\t\t\t\t\t\t\t\t\t<div id=\"hours-available-bars\"></div>
\t\t\t\t\t\t\t\t\t\t\t<!-- /bars -->

\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- /available hours -->

\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">

\t\t\t\t\t\t\t\t\t<!-- Productivity goal -->
\t\t\t\t\t\t\t\t\t<div class=\"card text-center\">
\t\t\t\t\t\t\t\t\t\t<div class=\"card-body\">

\t\t\t\t\t\t\t\t\t\t\t<!-- Progress counter -->
\t\t\t\t\t\t\t\t\t\t\t<div class=\"svg-center\" id=\"goal-progress\"></div>
\t\t\t\t\t\t\t\t\t\t\t<!-- /progress counter -->

\t\t\t\t\t\t\t\t\t\t\t<!-- Bars -->
\t\t\t\t\t\t\t\t\t\t\t<div id=\"goal-bars\"></div>
\t\t\t\t\t\t\t\t\t\t\t<!-- /bars -->

\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- /productivity goal -->

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- /progress counters -->


\t\t\t\t\t\t\t<!-- Daily sales -->
\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t<div class=\"card-header d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t<h5 class=\"mb-0\">Daily sales stats</h5>
\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center ms-auto\">
\t\t\t\t\t\t\t\t\t\t<span class=\"fw-bold text-success\">\$4,378</span>
\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown d-inline-flex ms-3\">
\t\t\t\t                \t\t\t<a href=\"#\" class=\"text-body d-inline-flex align-items-center dropdown-toggle\" data-bs-toggle=\"dropdown\">
\t\t\t\t                \t\t\t\t<i class=\"ph-gear\"></i>
\t\t\t\t                \t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-end\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-arrows-clockwise me-2\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\tUpdate data
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-list-dashes me-2\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\tDetailed log
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-chart-line me-2\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\tStatistics
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-eraser me-2\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\tClear list
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t                \t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t<div class=\"chart\" id=\"sales-heatmap\"></div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t\t\t\t\t<table class=\"table text-nowrap\">
\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"w-100\">Application</th>
\t\t\t\t\t\t\t\t\t\t\t\t<th>Time</th>
\t\t\t\t\t\t\t\t\t\t\t\t<th>Price</th>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"d-inline-block me-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"../../../assets/images/demo/logos/1.svg\" alt=\"\" height=\"36\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-body fw-semibold letter-icon-title\">Sigma application</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-muted fs-sm\">New order</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-muted\">06:28 pm</span>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>\$49.90</strong>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"d-inline-block me-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"../../../assets/images/demo/logos/2.svg\" alt=\"\" height=\"36\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-body fw-semibold letter-icon-title\">Alpha application</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-muted fs-sm\">Renewal</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-muted\">04:52 pm</span>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>\$90.50</strong>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"d-inline-block me-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"../../../assets/images/demo/logos/3.svg\" alt=\"\" height=\"36\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-body fw-semibold letter-icon-title\">Delta application</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-muted fs-sm\">Support</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-muted\">01:26 pm</span>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>\$60.00</strong>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"d-inline-block me-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"../../../assets/images/demo/logos/4.svg\" alt=\"\" height=\"36\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-body fw-semibold letter-icon-title\">Omega application</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-muted fs-sm\">Support</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-muted\">11:46 am</span>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>\$55.00</strong>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"d-inline-block me-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"../../../assets/images/demo/logos/2.svg\" alt=\"\" height=\"36\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-body fw-semibold letter-icon-title\">Alpha application</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-muted fs-sm\">Renewal</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-muted\">10:29 am</span>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>\$90.50</strong>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- /daily sales -->


\t\t\t\t\t\t\t<!-- My messages -->
\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t<div class=\"card-header d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t<h5 class=\"mb-0\">My messages</h5>
\t\t\t\t\t\t\t\t\t<div class=\"ms-auto\">
\t\t\t\t\t\t\t\t\t\t<span><i class=\"ph-clock-counter-clockwise me-1\"></i> Jul 7, 10:30</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-success ms-3\">Online</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<!-- Numbers -->
\t\t\t\t\t\t\t\t<div class=\"card-body pb-0\">
\t\t\t\t\t\t\t\t\t<div class=\"row text-center\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-4\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"mb-0\">2,345</h5>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-muted fs-sm\">this week</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"col-4\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"mb-0\">3,568</h5>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-muted fs-sm\">this month</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"col-4\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"mb-0\">32,693</h5>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-muted fs-sm\">all messages</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- /numbers -->


\t\t\t\t\t\t\t\t<!-- Area chart -->
\t\t\t\t\t\t\t\t<div id=\"messages-stats\"></div>
\t\t\t\t\t\t\t\t<!-- /area chart -->


\t\t\t\t\t\t\t\t<!-- Tabs -->
\t\t\t                \t<ul class=\"nav nav-tabs nav-tabs-underline nav-justified\">
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#messages-tue\" class=\"nav-link active\" data-bs-toggle=\"tab\">
\t\t\t\t\t\t\t\t\t\t\tTuesday
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#messages-mon\" class=\"nav-link\" data-bs-toggle=\"tab\">
\t\t\t\t\t\t\t\t\t\t\tMonday
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#messages-fri\" class=\"nav-link\" data-bs-toggle=\"tab\">
\t\t\t\t\t\t\t\t\t\t\tFriday
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t<!-- /tabs -->


\t\t\t\t\t\t\t\t<!-- Tabs content -->
\t\t\t\t\t\t\t\t<div class=\"tab-content card-body\">
\t\t\t\t\t\t\t\t\t<div class=\"tab-pane active fade show\" id=\"messages-tue\">
\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-start mb-3\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"status-indicator-container me-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"../../../assets/images/demo/users/face10.jpg\" class=\"rounded-circle\" width=\"40\" jeight=\"40\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"status-indicator bg-success\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-yellow text-black position-absolute top-0 start-100 translate-middle rounded-pill\">5</span>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-fill\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fw-semibold\"><a href=\"#\">James Alexander</a></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fs-sm text-muted\">14:58</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\tWho knows, maybe that would be the best thing for me...
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-start mb-3\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"status-indicator-container me-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"../../../assets/images/demo/users/face3.jpg\" class=\"rounded-circle\" width=\"40\" jeight=\"40\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"status-indicator bg-danger\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-yellow text-black position-absolute top-0 start-100 translate-middle rounded-pill\">4</span>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-fill\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fw-semibold\"><a href=\"#\">Margo Baker</a></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fs-sm text-muted\">12:16</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\tThat was something he was unable to do because...
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-start mb-3\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"status-indicator-container me-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"../../../assets/images/demo/users/face24.jpg\" class=\"rounded-circle\" width=\"40\" jeight=\"40\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"status-indicator bg-danger\"></span>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-fill\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fw-semibold\"><a href=\"#\">Jeremy Victorino</a></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fs-sm text-muted\">22:48</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\tBut that would be extremely strained and suspicious...
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-start mb-3\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"status-indicator-container me-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"../../../assets/images/demo/users/face4.jpg\" class=\"rounded-circle\" width=\"40\" jeight=\"40\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"status-indicator bg-danger\"></span>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-fill\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fw-semibold\"><a href=\"#\">Beatrix Diaz</a></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fs-sm text-muted\">Tue</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\tWhat a strenuous career it is that I've chosen...
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-start\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"status-indicator-container me-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"../../../assets/images/demo/users/face25.jpg\" class=\"rounded-circle\" width=\"40\" jeight=\"40\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"status-indicator bg-success\"></span>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-fill\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fw-semibold\"><a href=\"#\">Beatrix Diaz</a></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fs-sm text-muted\">Tue</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\tAmidst roadrunner distantly pompously where...
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"tab-pane fade\" id=\"messages-mon\">
\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-start mb-3\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"status-indicator-container me-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"../../../assets/images/demo/users/face2.jpg\" class=\"rounded-circle\" width=\"40\" jeight=\"40\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"status-indicator bg-success\"></span>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-fill\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fw-semibold\"><a href=\"#\">Isak Temes</a></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fs-sm text-muted\">Tue, 19:58</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\tReasonable palpably rankly expressly grimy...
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-start mb-3\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"status-indicator-container me-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"../../../assets/images/demo/users/face7.jpg\" class=\"rounded-circle\" width=\"40\" jeight=\"40\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"status-indicator bg-warning\"></span>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-fill\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fw-semibold\"><a href=\"#\">Vittorio Cosgrove</a></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fs-sm text-muted\">Tue, 16:35</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\tArguably therefore more unexplainable fumed...
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-start mb-3\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"status-indicator-container me-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"../../../assets/images/demo/users/face18.jpg\" class=\"rounded-circle\" width=\"40\" jeight=\"40\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"status-indicator bg-warning\"></span>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-fill\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fw-semibold\"><a href=\"#\">Hilary Talaugon</a></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fs-sm text-muted\">Tue, 12:16</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\tNicely unlike porpoise a kookaburra past more...
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-start mb-3\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"status-indicator-container me-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"../../../assets/images/demo/users/face14.jpg\" class=\"rounded-circle\" width=\"40\" jeight=\"40\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"status-indicator bg-success\"></span>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-fill\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fw-semibold\"><a href=\"#\">Bobbie Seber</a></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fs-sm text-muted\">Tue, 09:20</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\tBefore visual vigilantly fortuitous tortoise...
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-start\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"status-indicator-container me-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"../../../assets/images/demo/users/face8.jpg\" class=\"rounded-circle\" width=\"40\" jeight=\"40\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"status-indicator bg-success\"></span>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-fill\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fw-semibold\"><a href=\"#\">Walther Laws</a></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fs-sm text-muted\">Tue, 03:29</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\tFar affecting more leered unerringly dishonest...
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"tab-pane fade\" id=\"messages-fri\">
\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-start mb-3\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"status-indicator-container me-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"../../../assets/images/demo/users/face15.jpg\" class=\"rounded-circle\" width=\"40\" jeight=\"40\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"status-indicator bg-danger\"></span>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-fill\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fw-semibold\"><a href=\"#\">Owen Stretch</a></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fs-sm text-muted\">Fri, 18:12</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\tTardy rattlesnake seal raptly earthworm...
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-start mb-3\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"status-indicator-container me-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"../../../assets/images/demo/users/face12.jpg\" class=\"rounded-circle\" width=\"40\" jeight=\"40\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"status-indicator bg-warning\"></span>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-fill\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fw-semibold\"><a href=\"#\">Jenilee Mcnair</a></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fs-sm text-muted\">Fri, 14:03</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\tSince hello dear pushed amid darn trite...
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-start mb-3\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"status-indicator-container me-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"../../../assets/images/demo/users/face22.jpg\" class=\"rounded-circle\" width=\"40\" jeight=\"40\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"status-indicator bg-danger\"></span>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-fill\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fw-semibold\"><a href=\"#\">Alaster Jain</a></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fs-sm text-muted\">Fri, 13:59</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\tDachshund cardinal dear next jeepers well...
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-start mb-3\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"status-indicator-container me-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"../../../assets/images/demo/users/face24.jpg\" class=\"rounded-circle\" width=\"40\" jeight=\"40\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"status-indicator bg-secondary\"></span>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-fill\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fw-semibold\"><a href=\"#\">Sigfrid Thisted</a></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fs-sm text-muted\">Fri, 09:26</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\tLighted wolf yikes less lemur crud grunted...
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-start\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"status-indicator-container me-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"../../../assets/images/demo/users/face17.jpg\" class=\"rounded-circle\" width=\"40\" jeight=\"40\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"status-indicator bg-secondary\"></span>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-fill\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fw-semibold\"><a href=\"#\">Sherilyn Mckee</a></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fs-sm text-muted\">Fri, 06:38</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\tLess unicorn a however careless husky...
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- /tabs content -->

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- /my messages -->


\t\t\t\t\t\t\t<!-- Daily financials -->
\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t<div class=\"card-header d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t<h5 class=\"mb-0\">Daily financials</h5>
\t\t\t\t\t\t\t\t\t<div class=\"ms-auto\">
\t\t\t\t\t\t\t\t\t\t<label class=\"form-check form-switch form-check-reverse\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" class=\"form-check-input\" id=\"realtime\" checked>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"form-check-label\">Realtime</span>
\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t<div class=\"chart mb-3\" id=\"bullets\"></div>

\t\t\t\t\t\t\t\t\t<div class=\"d-flex mb-3\">
\t\t\t\t\t\t\t\t\t\t<div class=\"me-3\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"bg-pink bg-opacity-10 text-pink lh-1 rounded-pill p-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-chart-line\"></i>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"flex-fill\">
\t\t\t\t\t\t\t\t\t\t\tStats for July, 6: <span class=\"fw-semibold\">1938</span> orders, \$4220 revenue
\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-muted fs-sm\">2 hours ago</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"d-flex mb-3\">
\t\t\t\t\t\t\t\t\t\t<div class=\"me-3\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"bg-success bg-opacity-10 text-success lh-1 rounded-pill p-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-check\"></i>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"flex-fill\">
\t\t\t\t\t\t\t\t\t\t\tInvoices <a href=\"#\">#4732</a> and <a href=\"#\">#4734</a> have been paid
\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-muted fs-sm\">Dec 18, 18:36</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"d-flex mb-3\">
\t\t\t\t\t\t\t\t\t\t<div class=\"me-3\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"bg-primary bg-opacity-10 text-primary lh-1 rounded-pill p-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-users\"></i>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"flex-fill\">
\t\t\t\t\t\t\t\t\t\t\tAffiliate commission for June has been paid
\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-muted fs-sm\">36 minutes ago</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"d-flex mb-3\">
\t\t\t\t\t\t\t\t\t\t<div class=\"me-3\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"bg-warning bg-opacity-10 text-warning lh-1 rounded-pill p-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-arrow-counter-clockwise\"></i>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"flex-fill\">
\t\t\t\t\t\t\t\t\t\t\tOrder <a href=\"#\">#37745</a> from July, 1st has been refunded
\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-muted fs-sm\">4 minutes ago</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t\t<div class=\"me-3\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"bg-teal bg-opacity-10 text-teal lh-1 rounded-pill p-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-arrow-bend-double-up-right\"></i>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"flex-fill\">
\t\t\t\t\t\t\t\t\t\t\tInvoice <a href=\"#\">#4769</a> has been sent to <a href=\"#\">Robert Smith</a>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-muted fs-sm\">Dec 12, 05:46</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- /daily financials -->

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- /dashboard content -->

\t\t\t\t</div>
\t\t\t\t<!-- /content area -->
\t\t\t</div>

\t\t\t\t<!-- Footer -->
\t\t\t\t<div class=\"navbar navbar-sm navbar-footer border-top\">
\t\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t\t\t<span>&copy; 2022 <a href=\"https://themeforest.net/item/limitless-responsive-web-application-kit/13080328\">Limitless Web App Kit</a></span>

\t\t\t\t\t\t<ul class=\"nav\">
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a href=\"https://kopyov.ticksy.com/\" class=\"navbar-nav-link navbar-nav-link-icon rounded\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center mx-md-1\">
\t\t\t\t\t\t\t\t\t\t<i class=\"ph-lifebuoy\"></i>
\t\t\t\t\t\t\t\t\t\t<span class=\"d-none d-md-inline-block ms-2\">Support</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item ms-md-1\">
\t\t\t\t\t\t\t\t<a href=\"https://demo.interface.club/limitless/demo/Documentation/index.html\" class=\"navbar-nav-link navbar-nav-link-icon rounded\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center mx-md-1\">
\t\t\t\t\t\t\t\t\t\t<i class=\"ph-file-text\"></i>
\t\t\t\t\t\t\t\t\t\t<span class=\"d-none d-md-inline-block ms-2\">Docs</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item ms-md-1\">
\t\t\t\t\t\t\t\t<a href=\"https://themeforest.net/item/limitless-responsive-web-application-kit/13080328?ref=kopyov\" class=\"navbar-nav-link navbar-nav-link-icon text-primary bg-primary bg-opacity-10 fw-semibold rounded\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center mx-md-1\">
\t\t\t\t\t\t\t\t\t\t<i class=\"ph-shopping-cart\"></i>
\t\t\t\t\t\t\t\t\t\t<span class=\"d-none d-md-inline-block ms-2\">Purchase</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- /footer -->

\t\t\t</div>
\t\t\t<!-- /inner content -->

\t\t</div>
\t\t<!-- /main content -->

\t</div>
\t<!-- /page content -->


\t<!-- Notifications -->
\t<div class=\"offcanvas offcanvas-end\" tabindex=\"-1\" id=\"notifications\">
\t\t<div class=\"offcanvas-header py-0\">
\t\t\t<h5 class=\"offcanvas-title py-3\">Activity</h5>
\t\t\t<button type=\"button\" class=\"btn btn-light btn-sm btn-icon border-transparent rounded-pill\" data-bs-dismiss=\"offcanvas\">
\t\t\t\t<i class=\"ph-x\"></i>
\t\t\t</button>
\t\t</div>

\t\t<div class=\"offcanvas-body p-0\">
\t\t\t<div class=\"bg-light fw-medium py-2 px-3\">New notifications</div>
\t\t\t<div class=\"p-3\">
\t\t\t\t<div class=\"d-flex align-items-start mb-3\">
\t\t\t\t\t<a href=\"#\" class=\"status-indicator-container me-3\">
\t\t\t\t\t\t<img src=\"../../../assets/images/demo/users/face1.jpg\" class=\"w-40px h-40px rounded-pill\" alt=\"\">
\t\t\t\t\t\t<span class=\"status-indicator bg-success\"></span>
\t\t\t\t\t</a>
\t\t\t\t\t<div class=\"flex-fill\">
\t\t\t\t\t\t<a href=\"#\" class=\"fw-semibold\">James</a> has completed the task <a href=\"#\">Submit documents</a> from <a href=\"#\">Onboarding</a> list

\t\t\t\t\t\t<div class=\"bg-light rounded p-2 my-2\">
\t\t\t\t\t\t\t<label class=\"form-check ms-1\">
\t\t\t\t\t\t\t\t<input type=\"checkbox\" class=\"form-check-input\" checked disabled>
\t\t\t\t\t\t\t\t<del class=\"form-check-label\">Submit personal documents</del>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"fs-sm text-muted mt-1\">2 hours ago</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"d-flex align-items-start mb-3\">
\t\t\t\t\t<a href=\"#\" class=\"status-indicator-container me-3\">
\t\t\t\t\t\t<img src=\"../../../assets/images/demo/users/face3.jpg\" class=\"w-40px h-40px rounded-pill\" alt=\"\">
\t\t\t\t\t\t<span class=\"status-indicator bg-warning\"></span>
\t\t\t\t\t</a>
\t\t\t\t\t<div class=\"flex-fill\">
\t\t\t\t\t\t<a href=\"#\" class=\"fw-semibold\">Margo</a> has added 4 users to <span class=\"fw-semibold\">Customer enablement</span> channel

\t\t\t\t\t\t<div class=\"d-flex my-2\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"status-indicator-container me-1\">
\t\t\t\t\t\t\t\t<img src=\"../../../assets/images/demo/users/face10.jpg\" class=\"w-32px h-32px rounded-pill\" alt=\"\">
\t\t\t\t\t\t\t\t<span class=\"status-indicator bg-danger\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a href=\"#\" class=\"status-indicator-container me-1\">
\t\t\t\t\t\t\t\t<img src=\"../../../assets/images/demo/users/face11.jpg\" class=\"w-32px h-32px rounded-pill\" alt=\"\">
\t\t\t\t\t\t\t\t<span class=\"status-indicator bg-success\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a href=\"#\" class=\"status-indicator-container me-1\">
\t\t\t\t\t\t\t\t<img src=\"../../../assets/images/demo/users/face12.jpg\" class=\"w-32px h-32px rounded-pill\" alt=\"\">
\t\t\t\t\t\t\t\t<span class=\"status-indicator bg-success\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a href=\"#\" class=\"status-indicator-container me-1\">
\t\t\t\t\t\t\t\t<img src=\"../../../assets/images/demo/users/face13.jpg\" class=\"w-32px h-32px rounded-pill\" alt=\"\">
\t\t\t\t\t\t\t\t<span class=\"status-indicator bg-success\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-light btn-icon d-inline-flex align-items-center justify-content-center w-32px h-32px rounded-pill p-0\">
\t\t\t\t\t\t\t\t<i class=\"ph-plus ph-sm\"></i>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"fs-sm text-muted mt-1\">3 hours ago</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"d-flex align-items-start\">
\t\t\t\t\t<div class=\"me-3\">
\t\t\t\t\t\t<div class=\"bg-warning bg-opacity-10 text-warning rounded-pill\">
\t\t\t\t\t\t\t<i class=\"ph-warning p-2\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"flex-1\">
\t\t\t\t\t\tSubscription <a href=\"#\">#466573</a> from 10.12.2021 has been cancelled. Refund case <a href=\"#\">#4492</a> created
\t\t\t\t\t\t<div class=\"fs-sm text-muted mt-1\">4 hours ago</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"bg-light fw-medium py-2 px-3\">Older notifications</div>
\t\t\t<div class=\"p-3\">
\t\t\t\t<div class=\"d-flex align-items-start mb-3\">
\t\t\t\t\t<a href=\"#\" class=\"status-indicator-container me-3\">
\t\t\t\t\t\t<img src=\"../../../assets/images/demo/users/face25.jpg\" class=\"w-40px h-40px rounded-pill\" alt=\"\">
\t\t\t\t\t\t<span class=\"status-indicator bg-success\"></span>
\t\t\t\t\t</a>
\t\t\t\t\t<div class=\"flex-fill\">
\t\t\t\t\t\t<a href=\"#\" class=\"fw-semibold\">Nick</a> requested your feedback and approval in support request <a href=\"#\">#458</a>

\t\t\t\t\t\t<div class=\"my-2\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-success btn-sm me-1\">
\t\t\t\t\t\t\t\t<i class=\"ph-checks ph-sm me-1\"></i>
\t\t\t\t\t\t\t\tApprove
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-light btn-sm\">
\t\t\t\t\t\t\t\tReview
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"fs-sm text-muted mt-1\">3 days ago</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"d-flex align-items-start mb-3\">
\t\t\t\t\t<a href=\"#\" class=\"status-indicator-container me-3\">
\t\t\t\t\t\t<img src=\"../../../assets/images/demo/users/face24.jpg\" class=\"w-40px h-40px rounded-pill\" alt=\"\">
\t\t\t\t\t\t<span class=\"status-indicator bg-grey\"></span>
\t\t\t\t\t</a>
\t\t\t\t\t<div class=\"flex-fill\">
\t\t\t\t\t\t<a href=\"#\" class=\"fw-semibold\">Mike</a> added 1 new file(s) to <a href=\"#\">Product management</a> project

\t\t\t\t\t\t<div class=\"bg-light rounded p-2 my-2\">
\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t<div class=\"me-2\">
\t\t\t\t\t\t\t\t\t<img src=\"../../../assets/images/icons/pdf.svg\" width=\"34\" height=\"34\" alt=\"\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"flex-fill\">
\t\t\t\t\t\t\t\t\tnew_contract.pdf
\t\t\t\t\t\t\t\t\t<div class=\"fs-sm text-muted\">112KB</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"ms-2\">
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-flat-dark text-body btn-icon btn-sm border-transparent rounded-pill\">
\t\t\t\t\t\t\t\t\t\t<i class=\"ph-arrow-down\"></i>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"fs-sm text-muted mt-1\">1 day ago</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"d-flex align-items-start mb-3\">
\t\t\t\t\t<div class=\"me-3\">
\t\t\t\t\t\t<div class=\"bg-success bg-opacity-10 text-success rounded-pill\">
\t\t\t\t\t\t\t<i class=\"ph-calendar-plus p-2\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"flex-fill\">
\t\t\t\t\t\tAll hands meeting will take place coming Thursday at 13:45.

\t\t\t\t\t\t<div class=\"my-2\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-primary btn-sm\">
\t\t\t\t\t\t\t\t<i class=\"ph-calendar-plus ph-sm me-1\"></i>
\t\t\t\t\t\t\t\tAdd to calendar
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"fs-sm text-muted mt-1\">2 days ago</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"d-flex align-items-start mb-3\">
\t\t\t\t\t<a href=\"#\" class=\"status-indicator-container me-3\">
\t\t\t\t\t\t<img src=\"../../../assets/images/demo/users/face4.jpg\" class=\"w-40px h-40px rounded-pill\" alt=\"\">
\t\t\t\t\t\t<span class=\"status-indicator bg-danger\"></span>
\t\t\t\t\t</a>
\t\t\t\t\t<div class=\"flex-fill\">
\t\t\t\t\t\t<a href=\"#\" class=\"fw-semibold\">Christine</a> commented on your community <a href=\"#\">post</a> from 10.12.2021

\t\t\t\t\t\t<div class=\"fs-sm text-muted mt-1\">2 days ago</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"d-flex align-items-start mb-3\">
\t\t\t\t\t<div class=\"me-3\">
\t\t\t\t\t\t<div class=\"bg-primary bg-opacity-10 text-primary rounded-pill\">
\t\t\t\t\t\t\t<i class=\"ph-users-four p-2\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"flex-fill\">
\t\t\t\t\t\t<span class=\"fw-semibold\">HR department</span> requested you to complete internal survey by Friday

\t\t\t\t\t\t<div class=\"fs-sm text-muted mt-1\">3 days ago</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t<div class=\"spinner-border\" role=\"status\">
\t\t\t\t\t\t<span class=\"visually-hidden\">Loading...</span>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<!-- /notifications -->


\t<!-- Demo config -->
\t<div class=\"offcanvas offcanvas-end\" tabindex=\"-1\" id=\"demo_config\">
\t\t<div class=\"position-absolute top-50 end-100 visible\">
\t\t\t<button type=\"button\" class=\"btn btn-primary btn-icon translate-middle-y rounded-end-0\" data-bs-toggle=\"offcanvas\" data-bs-target=\"#demo_config\">
\t\t\t\t<i class=\"ph-gear\"></i>
\t\t\t</button>
\t\t</div>

\t\t<div class=\"offcanvas-header border-bottom py-0\">
\t\t\t<h5 class=\"offcanvas-title py-3\">Demo configuration</h5>
\t\t\t<button type=\"button\" class=\"btn btn-light btn-sm btn-icon border-transparent rounded-pill\" data-bs-dismiss=\"offcanvas\">
\t\t\t\t<i class=\"ph-x\"></i>
\t\t\t</button>
\t\t</div>

\t\t<div class=\"offcanvas-body\">
\t\t\t<div class=\"fw-semibold mb-2\">Color mode</div>
\t\t\t<div class=\"list-group mb-3\">
\t\t\t\t<label class=\"list-group-item list-group-item-action form-check border-width-1 rounded mb-2\">
\t\t\t\t\t<div class=\"d-flex flex-fill my-1\">
\t\t\t\t\t\t<div class=\"form-check-label d-flex me-2\">
\t\t\t\t\t\t\t<i class=\"ph-sun ph-lg me-3\"></i>
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<span class=\"fw-bold\">Light theme</span>
\t\t\t\t\t\t\t\t<div class=\"fs-sm text-muted\">Set light theme or reset to default</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<input type=\"radio\" class=\"form-check-input cursor-pointer ms-auto\" name=\"main-theme\" value=\"light\" checked>
\t\t\t\t\t</div>
\t\t\t\t</label>

\t\t\t\t<label class=\"list-group-item list-group-item-action form-check border-width-1 rounded mb-2\">
\t\t\t\t\t<div class=\"d-flex flex-fill my-1\">
\t\t\t\t\t\t<div class=\"form-check-label d-flex me-2\">
\t\t\t\t\t\t\t<i class=\"ph-moon ph-lg me-3\"></i>
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<span class=\"fw-bold\">Dark theme</span>
\t\t\t\t\t\t\t\t<div class=\"fs-sm text-muted\">Switch to dark theme</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<input type=\"radio\" class=\"form-check-input cursor-pointer ms-auto\" name=\"main-theme\" value=\"dark\">
\t\t\t\t\t</div>
\t\t\t\t</label>

\t\t\t\t<label class=\"list-group-item list-group-item-action form-check border-width-1 rounded mb-0\">
\t\t\t\t\t<div class=\"d-flex flex-fill my-1\">
\t\t\t\t\t\t<div class=\"form-check-label d-flex me-2\">
\t\t\t\t\t\t\t<i class=\"ph-translate ph-lg me-3\"></i>
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<span class=\"fw-bold\">Auto theme</span>
\t\t\t\t\t\t\t\t<div class=\"fs-sm text-muted\">Set theme based on system mode</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<input type=\"radio\" class=\"form-check-input cursor-pointer ms-auto\" name=\"main-theme\" value=\"auto\">
\t\t\t\t\t</div>
\t\t\t\t</label>
\t\t\t</div>

\t\t\t<div class=\"fw-semibold mb-2\">Direction</div>
\t\t\t<div class=\"list-group mb-3\">
\t\t\t\t<label class=\"list-group-item list-group-item-action form-check border-width-1 rounded mb-0\">
\t\t\t\t\t<div class=\"d-flex flex-fill my-1\">
\t\t\t\t\t\t<div class=\"form-check-label d-flex me-2\">
\t\t\t\t\t\t\t<i class=\"ph-translate ph-lg me-3\"></i>
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<span class=\"fw-bold\">RTL direction</span>
\t\t\t\t\t\t\t\t<div class=\"text-muted\">Toggle between LTR and RTL</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<input type=\"checkbox\" name=\"layout-direction\" value=\"rtl\" class=\"form-check-input cursor-pointer m-0 ms-auto\">
\t\t\t\t\t</div>
\t\t\t\t</label>
\t\t\t</div>

\t\t\t<div class=\"fw-semibold mb-2\">Layouts</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t<a href=\"index.html\" class=\"d-block mb-3\">
\t\t\t\t\t\t<img src=\"https://demo.interface.club/limitless/assets/images/layouts/layout_1.png\" class=\"img-fluid img-thumbnail bg-primary bg-opacity-20 border-primary\" alt=\"\">
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t<a href=\"../../layout_2/full/index.html\" class=\"d-block mb-3\">
\t\t\t\t\t\t<img src=\"https://demo.interface.club/limitless/assets/images/layouts/layout_2.png\" class=\"img-fluid img-thumbnail\" alt=\"\">
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t<a href=\"../../layout_3/full/index.html\" class=\"d-block mb-3\">
\t\t\t\t\t\t<img src=\"https://demo.interface.club/limitless/assets/images/layouts/layout_3.png\" class=\"img-fluid img-thumbnail\" alt=\"\">
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t<a href=\"../../layout_4/full/index.html\" class=\"d-block mb-3\">
\t\t\t\t\t\t<img src=\"https://demo.interface.club/limitless/assets/images/layouts/layout_4.png\" class=\"img-fluid img-thumbnail\" alt=\"\">
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t<a href=\"../../layout_5/full/index.html\" class=\"d-block mb-3\">
\t\t\t\t\t\t<img src=\"https://demo.interface.club/limitless/assets/images/layouts/layout_5.png\" class=\"img-fluid img-thumbnail\" alt=\"\">
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t<a href=\"../../layout_6/full/index.html\" class=\"d-block\">
\t\t\t\t\t\t<img src=\"https://demo.interface.club/limitless/assets/images/layouts/layout_6.png\" class=\"img-fluid img-thumbnail\" alt=\"\">
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"border-top text-center py-2 px-3\">
\t\t\t<a href=\"https://themeforest.net/item/limitless-responsive-web-application-kit/13080328?ref=kopyov\" class=\"btn btn-yellow fw-semibold w-100 my-1\" target=\"_blank\">
\t\t\t\t<i class=\"ph-shopping-cart me-2\"></i>
\t\t\t\tPurchase Limitless
\t\t\t</a>
\t\t</div>
\t</div>
\t<!-- /demo config -->

</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "index.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  629 => 528,  133 => 35,  129 => 34,  125 => 33,  121 => 32,  117 => 31,  113 => 30,  109 => 29,  105 => 28,  101 => 27,  97 => 26,  93 => 25,  89 => 24,  84 => 22,  80 => 21,  73 => 17,  69 => 16,  62 => 12,  58 => 11,  54 => 10,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\" dir=\"ltr\">
<head>
\t<meta charset=\"utf-8\">
\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
\t<title>Limitless - Responsive Web Application Kit by Eugene Kopyov</title>

\t<!-- Global stylesheets -->
\t<link href=\"{{ asset ('assets/fonts/inter/inter.css')}}\" rel=\"stylesheet\" type=\"text/css\">
\t<link href=\"{{ asset ('assets/icons/phosphor/styles.min.css')}}\" rel=\"stylesheet\" type=\"text/css\">
\t<link href=\"{{ asset ('assets/css/ltr/all.min.css')}}\" id=\"stylesheet\" rel=\"stylesheet\" type=\"text/css\">
\t<!-- /global stylesheets -->

\t<!-- Core JS files -->
\t<script src=\"{{ asset ('assets/demo/demo_configurator.js')}}\"></script>
\t<script src=\"{{ asset ('assets/js/bootstrap/bootstrap.bundle.min.js')}}\"></script>
\t<!-- /core JS files -->

\t<!-- Theme JS files -->
\t<script src=\"{{ asset ('assets/js/vendor/visualization/d3/d3.min.js')}}\"></script>
\t<script src=\"{{ asset ('assets/js/vendor/visualization/d3/d3_tooltip.js')}}\"></script>

\t<script src=\"{{ asset ('assets/js/app.js')}}\"></script>
\t<script src=\"{{ asset ('assets/demo/pages/dashboard.js')}}\"></script>
\t<script src=\"{{ asset ('assets/demo/charts/pages/dashboard/streamgraph.js')}}\"></script>
\t<script src=\"{{ asset ('assets/demo/charts/pages/dashboard/sparklines.js')}}\"></script>
\t<script src=\"{{ asset ('assets/demo/charts/pages/dashboard/lines.js')}}\"></script>\t
\t<script src=\"{{ asset ('assets/demo/charts/pages/dashboard/areas.js')}}\"></script>
\t<script src=\"{{ asset ('assets/demo/charts/pages/dashboard/donuts.js')}}\"></script>
\t<script src=\"{{ asset ('assets/demo/charts/pages/dashboard/bars.js')}}\"></script>
\t<script src=\"{{ asset ('assets/demo/charts/pages/dashboard/progress.js')}}\"></script>
\t<script src=\"{{ asset ('assets/demo/charts/pages/dashboard/heatmaps.js')}}\"></script>
\t<script src=\"{{ asset ('assets/demo/charts/pages/dashboard/pies.js')}}\"></script>
\t<script src=\"{{ asset ('assets/demo/charts/pages/dashboard/bullets.js')}}\"></script>
\t<!-- /theme JS files -->

</head>

<body>

\t<!-- Main navbar -->
\t<div class=\"navbar navbar-dark navbar-expand-lg navbar-static border-bottom border-bottom-white border-opacity-10\">
\t\t<div class=\"container-fluid\">
\t\t\t<div class=\"d-flex d-lg-none me-2\">
\t\t\t\t<button type=\"button\" class=\"navbar-toggler sidebar-mobile-main-toggle rounded-pill\">
\t\t\t\t\t<i class=\"ph-list\"></i>
\t\t\t\t</button>
\t\t\t</div>

\t\t\t<div class=\"navbar-brand flex-1 flex-lg-0\">
\t\t\t\t<a href=\"index.html\" class=\"d-inline-flex align-items-center\">
\t\t\t\t\t<img src=\"../../../assets/images/logo_icon.svg\" alt=\"\">
\t\t\t\t\t<img src=\"../../../assets/images/logo_text_light.svg\" class=\"d-none d-sm-inline-block h-16px ms-3\" alt=\"\">
\t\t\t\t</a>
\t\t\t</div>

\t\t\t<ul class=\"nav flex-row\">
\t\t\t\t<li class=\"nav-item d-lg-none\">
\t\t\t\t\t<a href=\"#navbar_search\" class=\"navbar-nav-link navbar-nav-link-icon rounded-pill\" data-bs-toggle=\"collapse\">
\t\t\t\t\t\t<i class=\"ph-magnifying-glass\"></i>
\t\t\t\t\t</a>
\t\t\t\t</li>

\t\t\t\t<li class=\"nav-item nav-item-dropdown-lg dropdown\">
\t\t\t\t\t<a href=\"#\" class=\"navbar-nav-link navbar-nav-link-icon rounded-pill\" data-bs-toggle=\"dropdown\">
\t\t\t\t\t\t<i class=\"ph-squares-four\"></i>
\t\t\t\t\t</a>

\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-scrollable-sm wmin-lg-600 p-0\">
\t\t\t\t\t\t<div class=\"d-flex align-items-center border-bottom p-3\">
\t\t\t\t\t\t\t<h6 class=\"mb-0\">Browse apps</h6>
\t\t\t\t\t\t\t<a href=\"#\" class=\"ms-auto\">
\t\t\t\t\t\t\t\tView all
\t\t\t\t\t\t\t\t<i class=\"ph-arrow-circle-right ms-1\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"row row-cols-1 row-cols-sm-2 g-0\">
\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"dropdown-item text-wrap h-100 align-items-start border-end-sm border-bottom p-3\">
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<img src=\"../../../assets/images/demo/logos/1.svg\" class=\"h-40px mb-2\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t<div class=\"fw-semibold my-1\">Customer data platform</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"text-muted\">Unify customer data from multiple sources</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"dropdown-item text-wrap h-100 align-items-start border-bottom p-3\">
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<img src=\"../../../assets/images/demo/logos/2.svg\" class=\"h-40px mb-2\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t<div class=\"fw-semibold my-1\">Data catalog</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"text-muted\">Discover, inventory, and organize data assets</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"dropdown-item text-wrap h-100 align-items-start border-end-sm border-bottom border-bottom-sm-0 rounded-bottom-start p-3\">
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<img src=\"../../../assets/images/demo/logos/3.svg\" class=\"h-40px mb-2\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t<div class=\"fw-semibold my-1\">Data governance</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"text-muted\">The collaboration hub and data marketplace</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"dropdown-item text-wrap h-100 align-items-start rounded-bottom-end p-3\">
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<img src=\"../../../assets/images/demo/logos/4.svg\" class=\"h-40px mb-2\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t<div class=\"fw-semibold my-1\">Data privacy</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"text-muted\">Automated provisioning of non-production datasets</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</li>

\t\t\t\t<li class=\"nav-item nav-item-dropdown-lg dropdown ms-lg-2\">
\t\t\t\t\t<a href=\"#\" class=\"navbar-nav-link navbar-nav-link-icon rounded-pill\" data-bs-toggle=\"dropdown\" data-bs-auto-close=\"outside\">
\t\t\t\t\t\t<i class=\"ph-chats\"></i>
\t\t\t\t\t\t<span class=\"badge bg-yellow text-black position-absolute top-0 end-0 translate-middle-top zindex-1 rounded-pill mt-1 me-1\">8</span>
\t\t\t\t\t</a>

\t\t\t\t\t<div class=\"dropdown-menu wmin-lg-400 p-0\">
\t\t\t\t\t\t<div class=\"d-flex align-items-center p-3\">
\t\t\t\t\t\t\t<h6 class=\"mb-0\">Messages</h6>
\t\t\t\t\t\t\t<div class=\"ms-auto\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-body\">
\t\t\t\t\t\t\t\t\t<i class=\"ph-plus-circle\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a href=\"#search_messages\" class=\"collapsed text-body ms-2\" data-bs-toggle=\"collapse\">
\t\t\t\t\t\t\t\t\t<i class=\"ph-magnifying-glass\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"collapse\" id=\"search_messages\">
\t\t\t\t\t\t\t<div class=\"px-3 mb-2\">
\t\t\t\t\t\t\t\t<div class=\"form-control-feedback form-control-feedback-start\">
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"Search messages\">
\t\t\t\t\t\t\t\t\t<div class=\"form-control-feedback-icon\">
\t\t\t\t\t\t\t\t\t\t<i class=\"ph-magnifying-glass\"></i>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"dropdown-menu-scrollable pb-2\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item align-items-start text-wrap py-2\">
\t\t\t\t\t\t\t\t<div class=\"status-indicator-container me-3\">
\t\t\t\t\t\t\t\t\t<img src=\"../../../assets/images/demo/users/face10.jpg\" class=\"w-40px h-40px rounded-pill\" alt=\"\">
\t\t\t\t\t\t\t\t\t<span class=\"status-indicator bg-warning\"></span>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"flex-1\">
\t\t\t\t\t\t\t\t\t<span class=\"fw-semibold\">James Alexander</span>
\t\t\t\t\t\t\t\t\t<span class=\"text-muted float-end fs-sm\">04:58</span>
\t\t\t\t\t\t\t\t\t<div class=\"text-muted\">who knows, maybe that would be the best thing for me...</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item align-items-start text-wrap py-2\">
\t\t\t\t\t\t\t\t<div class=\"status-indicator-container me-3\">
\t\t\t\t\t\t\t\t\t<img src=\"../../../assets/images/demo/users/face3.jpg\" class=\"w-40px h-40px rounded-pill\" alt=\"\">
\t\t\t\t\t\t\t\t\t<span class=\"status-indicator bg-success\"></span>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"flex-1\">
\t\t\t\t\t\t\t\t\t<span class=\"fw-semibold\">Margo Baker</span>
\t\t\t\t\t\t\t\t\t<span class=\"text-muted float-end fs-sm\">12:16</span>
\t\t\t\t\t\t\t\t\t<div class=\"text-muted\">That was something he was unable to do because...</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item align-items-start text-wrap py-2\">
\t\t\t\t\t\t\t\t<div class=\"status-indicator-container me-3\">
\t\t\t\t\t\t\t\t\t<img src=\"../../../assets/images/demo/users/face24.jpg\" class=\"w-40px h-40px rounded-pill\" alt=\"\">
\t\t\t\t\t\t\t\t\t<span class=\"status-indicator bg-success\"></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"flex-1\">
\t\t\t\t\t\t\t\t\t<span class=\"fw-semibold\">Jeremy Victorino</span>
\t\t\t\t\t\t\t\t\t<span class=\"text-muted float-end fs-sm\">22:48</span>
\t\t\t\t\t\t\t\t\t<div class=\"text-muted\">But that would be extremely strained and suspicious...</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item align-items-start text-wrap py-2\">
\t\t\t\t\t\t\t\t<div class=\"status-indicator-container me-3\">
\t\t\t\t\t\t\t\t\t<img src=\"../../../assets/images/demo/users/face4.jpg\" class=\"w-40px h-40px rounded-pill\" alt=\"\">
\t\t\t\t\t\t\t\t\t<span class=\"status-indicator bg-grey\"></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"flex-1\">
\t\t\t\t\t\t\t\t\t<span class=\"fw-semibold\">Beatrix Diaz</span>
\t\t\t\t\t\t\t\t\t<span class=\"text-muted float-end fs-sm\">Tue</span>
\t\t\t\t\t\t\t\t\t<div class=\"text-muted\">What a strenuous career it is that I've chosen...</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item align-items-start text-wrap py-2\">
\t\t\t\t\t\t\t\t<div class=\"status-indicator-container me-3\">
\t\t\t\t\t\t\t\t\t<img src=\"../../../assets/images/demo/users/face25.jpg\" class=\"w-40px h-40px rounded-pill\" alt=\"\">
\t\t\t\t\t\t\t\t\t<span class=\"status-indicator bg-danger\"></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"flex-1\">
\t\t\t\t\t\t\t\t\t<span class=\"fw-semibold\">Richard Vango</span>
\t\t\t\t\t\t\t\t\t<span class=\"text-muted float-end fs-sm\">Mon</span>
\t\t\t\t\t\t\t\t\t<div class=\"text-muted\">Other travelling salesmen live a life of luxury...</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"d-flex border-top py-2 px-3\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"text-body\">
\t\t\t\t\t\t\t\t<i class=\"ph-checks me-1\"></i>
\t\t\t\t\t\t\t\tDismiss all
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a href=\"#\" class=\"text-body ms-auto\">
\t\t\t\t\t\t\t\tView all
\t\t\t\t\t\t\t\t<i class=\"ph-arrow-circle-right ms-1\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t</ul>

\t\t\t<div class=\"navbar-collapse justify-content-center flex-lg-1 order-2 order-lg-1 collapse\" id=\"navbar_search\">
\t\t\t\t<div class=\"navbar-search flex-fill position-relative mt-2 mt-lg-0 mx-lg-3\">
\t\t\t\t\t<div class=\"form-control-feedback form-control-feedback-start flex-grow-1\" data-color-theme=\"dark\">
\t\t\t\t\t\t<input type=\"text\" class=\"form-control bg-transparent rounded-pill\" placeholder=\"Search\" data-bs-toggle=\"dropdown\">
\t\t\t\t\t\t<div class=\"form-control-feedback-icon\">
\t\t\t\t\t\t\t<i class=\"ph-magnifying-glass\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"dropdown-menu w-100\" data-color-theme=\"light\">
\t\t\t\t\t\t\t<button type=\"button\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t<div class=\"text-center w-32px me-3\">
\t\t\t\t\t\t\t\t\t<i class=\"ph-magnifying-glass\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<span>Search <span class=\"fw-bold\">\"in\"</span> everywhere</span>
\t\t\t\t\t\t\t</button>

\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>

\t\t\t\t\t\t\t<div class=\"dropdown-menu-scrollable-lg\">
\t\t\t\t\t\t\t\t<div class=\"dropdown-header\">
\t\t\t\t\t\t\t\t\tContacts
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"float-end\">
\t\t\t\t\t\t\t\t\t\tSee all
\t\t\t\t\t\t\t\t\t\t<i class=\"ph-arrow-circle-right ms-1\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"dropdown-item cursor-pointer\">
\t\t\t\t\t\t\t\t\t<div class=\"me-3\">
\t\t\t\t\t\t\t\t\t\t<img src=\"../../../assets/images/demo/users/face3.jpg\" class=\"w-32px h-32px rounded-pill\" alt=\"\">
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"d-flex flex-column flex-grow-1\">
\t\t\t\t\t\t\t\t\t\t<div class=\"fw-semibold\">Christ<mark>in</mark>e Johnson</div>
\t\t\t\t\t\t\t\t\t\t<span class=\"fs-sm text-muted\">c.johnson@awesomecorp.com</span>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"d-inline-flex\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-body ms-2\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-user-circle\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"dropdown-item cursor-pointer\">
\t\t\t\t\t\t\t\t\t<div class=\"me-3\">
\t\t\t\t\t\t\t\t\t\t<img src=\"../../../assets/images/demo/users/face24.jpg\" class=\"w-32px h-32px rounded-pill\" alt=\"\">
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"d-flex flex-column flex-grow-1\">
\t\t\t\t\t\t\t\t\t\t<div class=\"fw-semibold\">Cl<mark>in</mark>ton Sparks</div>
\t\t\t\t\t\t\t\t\t\t<span class=\"fs-sm text-muted\">c.sparks@awesomecorp.com</span>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"d-inline-flex\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-body ms-2\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-user-circle\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>

\t\t\t\t\t\t\t\t<div class=\"dropdown-header\">
\t\t\t\t\t\t\t\t\tClients
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"float-end\">
\t\t\t\t\t\t\t\t\t\tSee all
\t\t\t\t\t\t\t\t\t\t<i class=\"ph-arrow-circle-right ms-1\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"dropdown-item cursor-pointer\">
\t\t\t\t\t\t\t\t\t<div class=\"me-3\">
\t\t\t\t\t\t\t\t\t\t<img src=\"../../../assets/images/brands/adobe.svg\" class=\"w-32px h-32px rounded-pill\" alt=\"\">
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"d-flex flex-column flex-grow-1\">
\t\t\t\t\t\t\t\t\t\t<div class=\"fw-semibold\">Adobe <mark>In</mark>c.</div>
\t\t\t\t\t\t\t\t\t\t<span class=\"fs-sm text-muted\">Enterprise license</span>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"d-inline-flex\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-body ms-2\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-briefcase\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"dropdown-item cursor-pointer\">
\t\t\t\t\t\t\t\t\t<div class=\"me-3\">
\t\t\t\t\t\t\t\t\t\t<img src=\"../../../assets/images/brands/holiday-inn.svg\" class=\"w-32px h-32px rounded-pill\" alt=\"\">
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"d-flex flex-column flex-grow-1\">
\t\t\t\t\t\t\t\t\t\t<div class=\"fw-semibold\">Holiday-<mark>In</mark>n</div>
\t\t\t\t\t\t\t\t\t\t<span class=\"fs-sm text-muted\">On-premise license</span>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"d-inline-flex\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-body ms-2\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-briefcase\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"dropdown-item cursor-pointer\">
\t\t\t\t\t\t\t\t\t<div class=\"me-3\">
\t\t\t\t\t\t\t\t\t\t<img src=\"../../../assets/images/brands/ing.svg\" class=\"w-32px h-32px rounded-pill\" alt=\"\">
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"d-flex flex-column flex-grow-1\">
\t\t\t\t\t\t\t\t\t\t<div class=\"fw-semibold\"><mark>IN</mark>G Group</div>
\t\t\t\t\t\t\t\t\t\t<span class=\"fs-sm text-muted\">Perpetual license</span>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"d-inline-flex\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-body ms-2\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-briefcase\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<a href=\"#\" class=\"navbar-nav-link align-items-center justify-content-center w-40px h-32px rounded-pill position-absolute end-0 top-50 translate-middle-y p-0 me-1\" data-bs-toggle=\"dropdown\" data-bs-auto-close=\"outside\">
\t\t\t\t\t\t<i class=\"ph-faders-horizontal\"></i>
\t\t\t\t\t</a>

\t\t\t\t\t<div class=\"dropdown-menu w-100 p-3\">
\t\t\t\t\t\t<div class=\"d-flex align-items-center mb-3\">
\t\t\t\t\t\t\t<h6 class=\"mb-0\">Search options</h6>
\t\t\t\t\t\t\t<a href=\"#\" class=\"text-body rounded-pill ms-auto\">
\t\t\t\t\t\t\t\t<i class=\"ph-clock-counter-clockwise\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t<label class=\"d-block form-label\">Category</label>
\t\t\t\t\t\t\t<label class=\"form-check form-check-inline\">
\t\t\t\t\t\t\t\t<input type=\"checkbox\" class=\"form-check-input\" checked>
\t\t\t\t\t\t\t\t<span class=\"form-check-label\">Invoices</span>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t<label class=\"form-check form-check-inline\">
\t\t\t\t\t\t\t\t<input type=\"checkbox\" class=\"form-check-input\">
\t\t\t\t\t\t\t\t<span class=\"form-check-label\">Files</span>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t<label class=\"form-check form-check-inline\">
\t\t\t\t\t\t\t\t<input type=\"checkbox\" class=\"form-check-input\">
\t\t\t\t\t\t\t\t<span class=\"form-check-label\">Users</span>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t<label class=\"form-label\">Addition</label>
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<select class=\"form-select w-auto flex-grow-0\">
\t\t\t\t\t\t\t\t\t<option value=\"1\" selected>has</option>
\t\t\t\t\t\t\t\t\t<option value=\"2\">has not</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"Enter the word(s)\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t<label class=\"form-label\">Status</label>
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<select class=\"form-select w-auto flex-grow-0\">
\t\t\t\t\t\t\t\t\t<option value=\"1\" selected>is</option>
\t\t\t\t\t\t\t\t\t<option value=\"2\">is not</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t<select class=\"form-select\">
\t\t\t\t\t\t\t\t\t<option value=\"1\" selected>Active</option>
\t\t\t\t\t\t\t\t\t<option value=\"2\">Inactive</option>
\t\t\t\t\t\t\t\t\t<option value=\"3\">New</option>
\t\t\t\t\t\t\t\t\t<option value=\"4\">Expired</option>
\t\t\t\t\t\t\t\t\t<option value=\"5\">Pending</option>
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-light\">Reset</button>

\t\t\t\t\t\t\t<div class=\"ms-auto\">
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-light\">Cancel</button>
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary ms-2\">Apply</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<ul class=\"nav flex-row justify-content-end order-1 order-lg-2\">
\t\t\t\t<li class=\"nav-item ms-lg-2\">
\t\t\t\t\t<a href=\"#\" class=\"navbar-nav-link navbar-nav-link-icon rounded-pill\" data-bs-toggle=\"offcanvas\" data-bs-target=\"#notifications\">
\t\t\t\t\t\t<i class=\"ph-bell\"></i>
\t\t\t\t\t\t<span class=\"badge bg-yellow text-black position-absolute top-0 end-0 translate-middle-top zindex-1 rounded-pill mt-1 me-1\">2</span>
\t\t\t\t\t</a>
\t\t\t\t</li>

\t\t\t\t<li class=\"nav-item nav-item-dropdown-lg dropdown ms-lg-2\">
\t\t\t\t\t<a href=\"#\" class=\"navbar-nav-link align-items-center rounded-pill p-1\" data-bs-toggle=\"dropdown\">
\t\t\t\t\t\t<div class=\"status-indicator-container\">
\t\t\t\t\t\t\t<img src=\"../../../assets/images/demo/users/face11.jpg\" class=\"w-32px h-32px rounded-pill\" alt=\"\">
\t\t\t\t\t\t\t<span class=\"status-indicator bg-success\"></span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<span class=\"d-none d-lg-inline-block mx-lg-2\">Victoria</span>
\t\t\t\t\t</a>

\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-end\">
\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t<i class=\"ph-user-circle me-2\"></i>
\t\t\t\t\t\t\tMy profile
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t<i class=\"ph-currency-circle-dollar me-2\"></i>
\t\t\t\t\t\t\tMy subscription
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t<i class=\"ph-shopping-cart me-2\"></i>
\t\t\t\t\t\t\tMy orders
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t<i class=\"ph-envelope-open me-2\"></i>
\t\t\t\t\t\t\tMy inbox
\t\t\t\t\t\t\t<span class=\"badge bg-primary rounded-pill ms-auto\">26</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t<i class=\"ph-gear me-2\"></i>
\t\t\t\t\t\t\tAccount settings
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t<i class=\"ph-sign-out me-2\"></i>
\t\t\t\t\t\t\tLogout
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</div>
\t</div>
\t<!-- /main navbar -->


\t<!-- Page content -->
\t<div class=\"page-content\">

\t\t<!-- Main sidebar -->
\t\t<div class=\"sidebar sidebar-dark sidebar-main sidebar-expand-lg\">

\t\t\t<!-- Sidebar content -->
\t\t\t<div class=\"sidebar-content\">

\t\t\t\t<!-- Sidebar header -->
\t\t\t\t<div class=\"sidebar-section\">
\t\t\t\t\t<div class=\"sidebar-section-body d-flex justify-content-center\">
\t\t\t\t\t\t<h5 class=\"sidebar-resize-hide flex-grow-1 my-auto\">Navigation</h5>

\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-flat-white btn-icon btn-sm rounded-pill border-transparent sidebar-control sidebar-main-resize d-none d-lg-inline-flex\">
\t\t\t\t\t\t\t\t<i class=\"ph-arrows-left-right\"></i>
\t\t\t\t\t\t\t</button>

\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-flat-white btn-icon btn-sm rounded-pill border-transparent sidebar-mobile-main-toggle d-lg-none\">
\t\t\t\t\t\t\t\t<i class=\"ph-x\"></i>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- /sidebar header -->


\t\t\t\t<!-- Main navigation -->
\t\t\t\t<div class=\"sidebar-section\">
\t\t\t\t\t<ul class=\"nav nav-sidebar\" data-nav-type=\"accordion\">

\t\t\t\t\t\t<!-- Main -->
\t\t\t\t\t\t<li class=\"nav-item-header pt-0\">
\t\t\t\t\t\t\t<div class=\"text-uppercase fs-sm lh-sm opacity-50 sidebar-resize-hide\">Main</div>
\t\t\t\t\t\t\t<i class=\"ph-dots-three sidebar-resize-show\"></i>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a href=\"index.html\" class=\"nav-link active\">
\t\t\t\t\t\t\t\t<i class=\"ph-house\"></i>
\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\tDashboard
\t\t\t\t\t\t\t\t\t<span class=\"d-block fw-normal opacity-50\">No pending orders</span>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item nav-item-submenu\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">
\t\t\t\t\t\t\t\t<i class=\"ph-layout\"></i>
\t\t\t\t\t\t\t\t<span>Layouts</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<ul class=\"nav-group-sub collapse\">
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"index.html\" class=\"nav-link active\">Default layout</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"{{ path ('app_admin') }}\" class=\"nav-link\">Login</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"../../layout_3/full/index.html\" class=\"nav-link\">Layout 3</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"../../layout_4/full/index.html\" class=\"nav-link\">Layout 4</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"../../layout_5/full/index.html\" class=\"nav-link\">Layout 5</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"../../layout_6/full/index.html\" class=\"nav-link\">Layout 6</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"../../layout_7/full/index.html\" class=\"nav-link disabled\">Layout 7 <span class=\"badge align-self-center ms-auto\">Coming soon</span></a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item nav-item-submenu\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">
\t\t\t\t\t\t\t\t<i class=\"ph-swatches\"></i>
\t\t\t\t\t\t\t\t<span>Themes</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<ul class=\"nav-group-sub collapse\">
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"index.html\" class=\"nav-link active\">Default</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"../../../LTR/material/full/index.html\" class=\"nav-link disabled\">Material <span class=\"badge align-self-center ms-auto\">Coming soon</span></a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"../../../LTR/clean/full/index.html\" class=\"nav-link disabled\">Clean <span class=\"badge align-self-center ms-auto\">Coming soon</span></a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item nav-item-submenu\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">
\t\t\t\t\t\t\t\t<i class=\"ph-note-blank\"></i>
\t\t\t\t\t\t\t\t<span>Starter kit</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<ul class=\"nav-group-sub collapse\">
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"../seed/layout_static.html\" class=\"nav-link\">Static layout</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"../seed/layout_no_header.html\" class=\"nav-link\">No header</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"../seed/layout_no_footer.html\" class=\"nav-link\">No footer</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item-divider\"></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"../seed/layout_fixed_header.html\" class=\"nav-link\">Fixed header</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"../seed/layout_fixed_footer.html\" class=\"nav-link\">Fixed footer</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item-divider\"></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"../seed/layout_2_sidebars_1_side.html\" class=\"nav-link\">2 sidebars on 1 side</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"../seed/layout_2_sidebars_2_sides.html\" class=\"nav-link\">2 sidebars on 2 sides</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"../seed/layout_3_sidebars.html\" class=\"nav-link\">3 sidebars</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item-divider\"></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"../seed/layout_boxed_page.html\" class=\"nav-link\">Boxed page</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"../seed/layout_boxed_content.html\" class=\"nav-link\">Boxed content</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a href=\"../../../../docs/other_changelog.html\" class=\"nav-link\">
\t\t\t\t\t\t\t\t<i class=\"ph-list-numbers\"></i>
\t\t\t\t\t\t\t\t<span>Changelog</span>
\t\t\t\t\t\t\t\t<span class=\"badge bg-primary align-self-center rounded-pill ms-auto\">4.0</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<!-- Forms -->
\t\t\t\t\t\t<li class=\"nav-item-header\">
\t\t\t\t\t\t\t<div class=\"text-uppercase fs-sm lh-sm opacity-50 sidebar-resize-hide\">Forms</div>
\t\t\t\t\t\t\t<i class=\"ph-dots-three sidebar-resize-show\"></i>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item nav-item-submenu\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">
\t\t\t\t\t\t\t\t<i class=\"ph-note-pencil\"></i>
\t\t\t\t\t\t\t\t<span>Form components</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<ul class=\"nav-group-sub collapse\">
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"form_autocomplete.html\" class=\"nav-link\">Autocomplete</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"form_checkboxes_radios.html\" class=\"nav-link\">Checkboxes &amp; radios</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"form_dual_listboxes.html\" class=\"nav-link\">Dual Listboxes</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"form_controls_extended.html\" class=\"nav-link\">Extended controls</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"form_floating_labels.html\" class=\"nav-link\">Floating labels</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"form_actions.html\" class=\"nav-link\">Form actions</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"form_wizard.html\" class=\"nav-link\">Form wizard</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"form_inputs.html\" class=\"nav-link\">Input fields</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"form_input_groups.html\" class=\"nav-link\">Input groups</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"form_multiselect.html\" class=\"nav-link\">Multiselect</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"form_select2.html\" class=\"nav-link\">Select2 selects</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"form_tags.html\" class=\"nav-link\">Tags</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"form_validation_styles.html\" class=\"nav-link\">Validation styles</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"form_validation_library.html\" class=\"nav-link\">Validation library</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item nav-item-submenu\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">
\t\t\t\t\t\t\t\t<i class=\"ph-text-aa\"></i>
\t\t\t\t\t\t\t\t<span>Text editors</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<ul class=\"nav-group-sub collapse\">
\t\t\t\t\t\t\t\t<li class=\"nav-item nav-item-submenu\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">CKEditor</a>
\t\t\t\t\t\t\t\t\t<ul class=\"nav-group-sub collapse\">
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"editor_ckeditor_classic.html\" class=\"nav-link\">Classic</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"editor_ckeditor_document.html\" class=\"nav-link\">Document</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"editor_ckeditor_balloon.html\" class=\"nav-link\">Balloon</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"editor_quill.html\" class=\"nav-link\">Quill</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"editor_trumbowyg.html\" class=\"nav-link\">Trumbowyg</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"editor_code.html\" class=\"nav-link\">Code</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item nav-item-submenu\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">
\t\t\t\t\t\t\t\t<i class=\"ph-hand-pointing\"></i>
\t\t\t\t\t\t\t\t<span>Pickers</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<ul class=\"nav-group-sub collapse\">
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"picker_color.html\" class=\"nav-link\">Color pickers</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"picker_date.html\" class=\"nav-link\">Date &amp; time pickers</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item nav-item-submenu\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">
\t\t\t\t\t\t\t\t<i class=\"ph-browser\"></i>
\t\t\t\t\t\t\t\t<span>Form layouts</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<ul class=\"nav-group-sub collapse\">
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"form_layout_horizontal.html\" class=\"nav-link\">Horizontal form</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"form_layout_vertical.html\" class=\"nav-link\">Vertical form</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item-divider\"></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"form_layout_grid.html\" class=\"nav-link\">Input grid</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<!-- /forms -->

\t\t\t\t\t\t<!-- Components -->
\t\t\t\t\t\t<li class=\"nav-item-header\">
\t\t\t\t\t\t\t<div class=\"text-uppercase fs-sm lh-sm opacity-50 sidebar-resize-hide\">Components</div>
\t\t\t\t\t\t\t<i class=\"ph-dots-three sidebar-resize-show\"></i>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item nav-item-submenu\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">
\t\t\t\t\t\t\t\t<i class=\"ph-squares-four\"></i>
\t\t\t\t\t\t\t\t<span>Basic components</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<ul class=\"nav-group-sub collapse\">
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"components_accordion.html\" class=\"nav-link\">Accordion</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"components_alerts.html\" class=\"nav-link\">Alerts</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"components_badges.html\" class=\"nav-link\">Badges</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"components_breadcrumbs.html\" class=\"nav-link\">Breadcrumbs</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"components_buttons.html\" class=\"nav-link\">Buttons</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"components_carousel.html\" class=\"nav-link\">Carousel</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"components_collapsible.html\" class=\"nav-link\">Collapsible</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"components_dropdowns.html\" class=\"nav-link\">Dropdown menus</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"components_list_group.html\" class=\"nav-link\">List group</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"components_media.html\" class=\"nav-link\">Media objects</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"components_modals.html\" class=\"nav-link\">Modals</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"components_offcanvas.html\" class=\"nav-link\">Offcanvas</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"components_pagination.html\" class=\"nav-link\">Pagination</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"components_pills.html\" class=\"nav-link\">Pills</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"components_placeholder.html\" class=\"nav-link\">Placeholder</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"components_popovers.html\" class=\"nav-link\">Popovers</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"components_progress.html\" class=\"nav-link\">Progress</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"components_scrollspy.html\" class=\"nav-link\">Scrollspy</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"components_tabs.html\" class=\"nav-link\">Tabs</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"components_toasts.html\" class=\"nav-link\">Toasts</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"components_tooltips.html\" class=\"nav-link\">Tooltips</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item nav-item-submenu\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">
\t\t\t\t\t\t\t\t<i class=\"ph-article\"></i>
\t\t\t\t\t\t\t\t<span>Content styling</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<ul class=\"nav-group-sub collapse\">
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"content_page_header.html\" class=\"nav-link\">Page header</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item-divider\"></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"content_cards.html\" class=\"nav-link\">Cards</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"content_cards_header.html\" class=\"nav-link\">Card header elements</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"content_cards_footer.html\" class=\"nav-link\">Card footer elements</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"content_cards_content.html\" class=\"nav-link\">Card content</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"content_cards_layouts.html\" class=\"nav-link\">Card layouts</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"content_cards_draggable.html\" class=\"nav-link\">Draggable cards</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item-divider\"></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"content_helpers_flex.html\" class=\"nav-link\">Flex utilities</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"content_helpers.html\" class=\"nav-link\">Helper classes</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"content_grid.html\" class=\"nav-link\">Grid system</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"content_syntax_highlighter.html\" class=\"nav-link\">Syntax highlighter</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"content_text_styling.html\" class=\"nav-link\">Text styling</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"content_typography.html\" class=\"nav-link\">Typography</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item nav-item-submenu\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">
\t\t\t\t\t\t\t\t<i class=\"ph-dots-three-circle\"></i>
\t\t\t\t\t\t\t\t<span>Extra components</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<ul class=\"nav-group-sub collapse\">
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"extra_noty.html\" class=\"nav-link\">Noty notifications</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"extra_sweetalert.html\" class=\"nav-link\">Sweet alert</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"extra_sliders_noui.html\" class=\"nav-link\">NoUI sliders</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"extra_sliders_ion.html\" class=\"nav-link\">Ion range sliders</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"extra_trees.html\" class=\"nav-link\">Dynamic tree views</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"extra_fab.html\" class=\"nav-link\">Floating action buttons</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"extra_session_timeout.html\" class=\"nav-link\">Session timeout</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"extra_idle_timeout.html\" class=\"nav-link\">Idle timeout</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item nav-item-submenu\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">
\t\t\t\t\t\t\t\t<i class=\"ph-drop\"></i>
\t\t\t\t\t\t\t\t<span>Color system</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<ul class=\"nav-group-sub collapse\">
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"colors_primary.html\" class=\"nav-link\">Primary palette</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"colors_secondary.html\" class=\"nav-link\">Secondary palette</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"colors_danger.html\" class=\"nav-link\">Danger palette</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"colors_success.html\" class=\"nav-link\">Success palette</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"colors_warning.html\" class=\"nav-link\">Warning palette</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"colors_info.html\" class=\"nav-link\">Info palette</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item-divider\"></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"colors_pink.html\" class=\"nav-link\">Pink palette</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"colors_purple.html\" class=\"nav-link\">Purple palette</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"colors_indigo.html\" class=\"nav-link\">Indigo palette</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"colors_teal.html\" class=\"nav-link\">Teal palette</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"colors_yellow.html\" class=\"nav-link\">Yellow palette</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item nav-item-submenu\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">
\t\t\t\t\t\t\t\t<i class=\"ph-spinner spinner\"></i>
\t\t\t\t\t\t\t\t<span>Animations</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<ul class=\"nav-group-sub collapse\">
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"animations_css3.html\" class=\"nav-link\">CSS3 animations</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item nav-item-submenu\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">Velocity animations</a>
\t\t\t\t\t\t\t\t\t<ul class=\"nav-group-sub collapse\">
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"animations_velocity_basic.html\" class=\"nav-link\">Basic usage</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"animations_velocity_ui.html\" class=\"nav-link\">UI pack effects</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"animations_velocity_examples.html\" class=\"nav-link\">Advanced examples</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item nav-item-submenu\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">
\t\t\t\t\t\t\t\t<i class=\"ph-smiley-wink\"></i>
\t\t\t\t\t\t\t\t<span>Icons</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<ul class=\"nav-group-sub collapse\">
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"icons_phosphor.html\" class=\"nav-link\">Phosphor</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"icons_icomoon.html\" class=\"nav-link\">Icomoon</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"icons_material.html\" class=\"nav-link\">Material</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"icons_fontawesome.html\" class=\"nav-link\">Font awesome</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<!-- /components -->

\t\t\t\t\t\t<!-- Layout -->
\t\t\t\t\t\t<li class=\"nav-item-header\">
\t\t\t\t\t\t\t<div class=\"text-uppercase fs-sm lh-sm opacity-50 sidebar-resize-hide\">Layout</div>
\t\t\t\t\t\t\t<i class=\"ph-dots-three sidebar-resize-show\"></i>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item nav-item-submenu\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">
\t\t\t\t\t\t\t\t<i class=\"ph-layout\"></i>
\t\t\t\t\t\t\t\t<span>Page layouts</span>
\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t<ul class=\"nav-group-sub collapse\">
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"layout_static.html\" class=\"nav-link\">Static layout</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"layout_no_header.html\" class=\"nav-link\">No header</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"layout_no_footer.html\" class=\"nav-link\">No footer</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item-divider\"></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"layout_fixed_header.html\" class=\"nav-link\">Fixed header</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"layout_fixed_footer.html\" class=\"nav-link\">Fixed footer</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item-divider\"></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"layout_2_sidebars_1_side.html\" class=\"nav-link\">2 sidebars on 1 side</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"layout_2_sidebars_2_sides.html\" class=\"nav-link\">2 sidebars on 2 sides</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"layout_3_sidebars.html\" class=\"nav-link\">3 sidebars</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item-divider\"></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"layout_boxed_page.html\" class=\"nav-link\">Boxed page</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"layout_boxed_content.html\" class=\"nav-link\">Boxed content</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item nav-item-submenu\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">
\t\t\t\t\t\t\t\t<i class=\"ph-columns\"></i>
\t\t\t\t\t\t\t\t<span>Sidebars</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<ul class=\"nav-group-sub collapse\">
\t\t\t\t\t\t\t\t<li class=\"nav-item nav-item-submenu\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">Main sidebar</a>
\t\t\t\t\t\t\t\t\t<ul class=\"nav-group-sub collapse\">
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"sidebar_default_resizable.html\" class=\"nav-link\">Resizable</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"sidebar_default_resized.html\" class=\"nav-link\">Resized</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"sidebar_default_collapsible.html\" class=\"nav-link\">Collapsible</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"sidebar_default_collapsed.html\" class=\"nav-link\">Collapsed</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"sidebar_default_hideable.html\" class=\"nav-link\">Hideable</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"sidebar_default_hidden.html\" class=\"nav-link\">Hidden</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item-divider\"></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"sidebar_default_color_light.html\" class=\"nav-link\">Light color</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"nav-item nav-item-submenu\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">Secondary sidebar</a>
\t\t\t\t\t\t\t\t\t<ul class=\"nav-group-sub collapse\">
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"sidebar_secondary_collapsible.html\" class=\"nav-link\">Collapsible</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"sidebar_secondary_collapsed.html\" class=\"nav-link\">Collapsed</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"sidebar_secondary_hideable.html\" class=\"nav-link\">Hideable</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"sidebar_secondary_hidden.html\" class=\"nav-link\">Hidden</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item-divider\"></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"sidebar_secondary_color_dark.html\" class=\"nav-link\">Dark color</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"nav-item nav-item-submenu\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">Right sidebar</a>
\t\t\t\t\t\t\t\t\t<ul class=\"nav-group-sub collapse\">
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"sidebar_right_collapsible.html\" class=\"nav-link\">Collapsible</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"sidebar_right_collapsed.html\" class=\"nav-link\">Collapsed</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"sidebar_right_hideable.html\" class=\"nav-link\">Hideable</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"sidebar_right_hidden.html\" class=\"nav-link\">Hidden</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item-divider\"></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"sidebar_right_color_dark.html\" class=\"nav-link\">Dark color</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"nav-item nav-item-submenu\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">Content sidebar</a>
\t\t\t\t\t\t\t\t\t<ul class=\"nav-group-sub collapse\">
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"sidebar_content_left.html\" class=\"nav-link\">Left aligned</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"sidebar_content_left_stretch.html\" class=\"nav-link\">Left stretched</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"sidebar_content_left_sections.html\" class=\"nav-link\">Left sectioned</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"sidebar_content_right.html\" class=\"nav-link\">Right aligned</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"sidebar_content_right_stretch.html\" class=\"nav-link\">Right stretched</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"sidebar_content_right_sections.html\" class=\"nav-link\">Right sectioned</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item-divider\"></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"sidebar_content_color_dark.html\" class=\"nav-link\">Dark color</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"nav-item-divider\"></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item nav-item-submenu\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">Sticky areas</a>
\t\t\t\t\t\t\t\t\t<ul class=\"nav-group-sub collapse\">
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"sidebar_sticky_header.html\" class=\"nav-link\">Header</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"sidebar_sticky_footer.html\" class=\"nav-link\">Footer</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"sidebar_sticky_header_footer.html\" class=\"nav-link\">Header and footer</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"sidebar_sticky_custom.html\" class=\"nav-link\">Custom elements</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"sidebar_components.html\" class=\"nav-link\">Sidebar components</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item nav-item-submenu\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">
\t\t\t\t\t\t\t\t<i class=\"ph-rows\"></i>
\t\t\t\t\t\t\t\t<span>Navbars</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<ul class=\"nav-group-sub collapse\">
\t\t\t\t\t\t\t\t<li class=\"nav-item nav-item-submenu\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">Single navbar</a>
\t\t\t\t\t\t\t\t\t<ul class=\"nav-group-sub collapse\">
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"navbar_single_bottom_fixed.html\" class=\"nav-link\">Bottom fixed</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"navbar_single_header_before.html\" class=\"nav-link\">Before page header</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"navbar_single_header_before_fixed.html\" class=\"nav-link\">Before page header fixed</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"navbar_single_header_after.html\" class=\"nav-link\">After page header</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"navbar_single_header_after_sticky.html\" class=\"nav-link\">After page header sticky</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"nav-item nav-item-submenu\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">Multiple navbars</a>
\t\t\t\t\t\t\t\t\t<ul class=\"nav-group-sub collapse\">
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"navbar_multiple_top.html\" class=\"nav-link\">Multiple top</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"navbar_multiple_bottom_static.html\" class=\"nav-link\">Multiple bottom static</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"navbar_multiple_bottom_fixed.html\" class=\"nav-link\">Multiple bottom fixed</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"navbar_multiple_top_bottom_fixed.html\" class=\"nav-link\">Top and bottom fixed</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"nav-item nav-item-submenu\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">Content navbar</a>
\t\t\t\t\t\t\t\t\t<ul class=\"nav-group-sub collapse\">
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"navbar_component_single.html\" class=\"nav-link\">Single navbar</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"navbar_component_multiple.html\" class=\"nav-link\">Multiple navbars</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"nav-item-divider\"></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"navbar_colors.html\" class=\"nav-link\">Color options</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"navbar_sizes.html\" class=\"nav-link\">Sizing options</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"navbar_components.html\" class=\"nav-link\">Navbar components</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item nav-item-submenu\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">
\t\t\t\t\t\t\t\t<i class=\"ph-arrow-fat-lines-down\"></i>
\t\t\t\t\t\t\t\t<span>Vertical navigation</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<ul class=\"nav-group-sub collapse\">
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"navigation_vertical_styles.html\" class=\"nav-link\">Navigation styles</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"navigation_vertical_collapsible.html\" class=\"nav-link\">Collapsible menu</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"navigation_vertical_accordion.html\" class=\"nav-link\">Accordion menu</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"navigation_vertical_bordered.html\" class=\"nav-link\">Bordered navigation</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"navigation_vertical_right_icons.html\" class=\"nav-link\">Right icons</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"navigation_vertical_badges.html\" class=\"nav-link\">Badges</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"navigation_vertical_disabled.html\" class=\"nav-link\">Disabled items</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item nav-item-submenu\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">
\t\t\t\t\t\t\t\t<i class=\"ph-arrow-fat-lines-right\"></i>
\t\t\t\t\t\t\t\t<span>Horizontal navigation</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<ul class=\"nav-group-sub collapse\">
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"navigation_horizontal_styles.html\" class=\"nav-link\">Navigation styles</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"navigation_horizontal_elements.html\" class=\"nav-link\">Navigation elements</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"navigation_horizontal_tabs.html\" class=\"nav-link\">Tabbed navigation</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"navigation_horizontal_disabled.html\" class=\"nav-link\">Disabled navigation links</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"navigation_horizontal_mega.html\" class=\"nav-link\">Horizontal mega menu</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item nav-item-submenu\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\"><i class=\"ph-arrow-elbow-down-right\"></i> <span>Menu levels</span></a>
\t\t\t\t\t\t\t<ul class=\"nav-group-sub collapse\">
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"#\" class=\"nav-link\">Second level</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item nav-item-submenu\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">Second level with child</a>
\t\t\t\t\t\t\t\t\t<ul class=\"nav-group-sub collapse\">
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"#\" class=\"nav-link\">Third level</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item nav-item-submenu\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">Third level with child</a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"nav-group-sub collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"#\" class=\"nav-link\">Fourth level</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"#\" class=\"nav-link\">Fourth level</a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"#\" class=\"nav-link\">Third level</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"#\" class=\"nav-link\">Second level</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<!-- /layout -->

\t\t\t\t\t\t<!-- Data visualization -->
\t\t\t\t\t\t<li class=\"nav-item-header\">
\t\t\t\t\t\t\t<div class=\"text-uppercase fs-sm lh-sm opacity-50 sidebar-resize-hide\">Data visualization</div>
\t\t\t\t\t\t\t<i class=\"ph-dots-three sidebar-resize-show\"></i>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item nav-item-submenu\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">
\t\t\t\t\t\t\t\t<i class=\"ph-chart-line\"></i>
\t\t\t\t\t\t\t\t<span>Echarts library</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<ul class=\"nav-group-sub collapse\">
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"echarts_lines.html\" class=\"nav-link\">Line charts</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"echarts_areas.html\" class=\"nav-link\">Area charts</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"echarts_columns_waterfalls.html\" class=\"nav-link\">Columns and waterfalls</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"echarts_bars_tornados.html\" class=\"nav-link\">Bars and tornados</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"echarts_scatter.html\" class=\"nav-link\">Scatter charts</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"echarts_pies_donuts.html\" class=\"nav-link\">Pies and donuts</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"echarts_funnels_calendars.html\" class=\"nav-link\">Funnels and calendars</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"echarts_candlesticks_others.html\" class=\"nav-link\">Candlesticks and others</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item nav-item-submenu\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">
\t\t\t\t\t\t\t\t<i class=\"ph-chart-bar\"></i>
\t\t\t\t\t\t\t\t<span>D3 library</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<ul class=\"nav-group-sub collapse\">
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"d3_lines_basic.html\" class=\"nav-link\">Simple lines</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"d3_lines_advanced.html\" class=\"nav-link\">Advanced lines</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"d3_bars_basic.html\" class=\"nav-link\">Simple bars</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"d3_bars_advanced.html\" class=\"nav-link\">Advanced bars</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"d3_pies.html\" class=\"nav-link\">Pie charts</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"d3_circle_diagrams.html\" class=\"nav-link\">Circle diagrams</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"d3_tree.html\" class=\"nav-link\">Tree layout</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"d3_other.html\" class=\"nav-link\">Other charts</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item nav-item-submenu\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">
\t\t\t\t\t\t\t\t<i class=\"ph-chart-pie-slice\"></i>
\t\t\t\t\t\t\t\t<span>C3 library</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<ul class=\"nav-group-sub collapse\">
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"c3_lines_areas.html\" class=\"nav-link\">Lines and areas</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"c3_bars_pies.html\" class=\"nav-link\">Bars and pies</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"c3_advanced.html\" class=\"nav-link\">Advanced examples</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"c3_axis.html\" class=\"nav-link\">Chart axis</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"c3_grid.html\" class=\"nav-link\">Grid options</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item nav-item-submenu\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">
\t\t\t\t\t\t\t\t<i class=\"ph-google-logo\"></i>
\t\t\t\t\t\t\t\t<span>Google charts</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<ul class=\"nav-group-sub collapse\">
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"google_lines.html\" class=\"nav-link\">Line charts</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"google_bars.html\" class=\"nav-link\">Bar charts</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"google_pies.html\" class=\"nav-link\">Pie charts</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"google_scatter_bubble.html\" class=\"nav-link\">Bubble &amp; scatter charts</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"google_other.html\" class=\"nav-link\">Other charts</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item nav-item-submenu\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">
\t\t\t\t\t\t\t\t<i class=\"ph-map-pin\"></i>
\t\t\t\t\t\t\t\t<span>Maps integration</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<ul class=\"nav-group-sub collapse\">
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"maps_leaflet.html\" class=\"nav-link\">Leaflet maps</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"maps_echarts.html\" class=\"nav-link\">ECharts maps</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"maps_vector.html\" class=\"nav-link disabled\">D3.js maps <span class=\"badge bg-transparent align-self-center ms-auto\">Coming soon</span></a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<!-- /data visualization -->

\t\t\t\t\t\t<!-- Extensions -->
\t\t\t\t\t\t<li class=\"nav-item-header\">
\t\t\t\t\t\t\t<div class=\"text-uppercase fs-sm lh-sm opacity-50 sidebar-resize-hide\">Extensions</div>
\t\t\t\t\t\t\t<i class=\"ph-dots-three sidebar-resize-show\"></i>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item nav-item-submenu\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">
\t\t\t\t\t\t\t\t<i class=\"ph-circles-three\"></i>
\t\t\t\t\t\t\t\t<span>Extensions</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<ul class=\"nav-group-sub collapse\">
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"extension_image_cropper.html\" class=\"nav-link\">Image cropper</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"extension_mark.html\" class=\"nav-link\">Mark</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"extension_dnd.html\" class=\"nav-link\">Drag and drop</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item nav-item-submenu\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">
\t\t\t\t\t\t\t\t<i class=\"ph-cloud-arrow-up\"></i>
\t\t\t\t\t\t\t\t<span>File uploaders</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<ul class=\"nav-group-sub collapse\">
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"uploader_plupload.html\" class=\"nav-link\">Plupload</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"uploader_bootstrap.html\" class=\"nav-link\">Bootstrap file uploader</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"uploader_dropzone.html\" class=\"nav-link\">Dropzone</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item nav-item-submenu\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">
\t\t\t\t\t\t\t\t<i class=\"ph-calendar-check\"></i>
\t\t\t\t\t\t\t\t<span>Event calendars</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<ul class=\"nav-group-sub collapse\">
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"fullcalendar_views.html\" class=\"nav-link\">Basic views</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"fullcalendar_styling.html\" class=\"nav-link\">Event styling</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"fullcalendar_formats.html\" class=\"nav-link\">Language and time</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"fullcalendar_advanced.html\" class=\"nav-link\">Advanced usage</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item nav-item-submenu\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">
\t\t\t\t\t\t\t\t<i class=\"ph-globe\"></i>
\t\t\t\t\t\t\t\t<span>Internationalization</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<ul class=\"nav-group-sub collapse\">
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"internationalization_switch_direct.html\" class=\"nav-link\">Direct translation</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"internationalization_switch_query.html\" class=\"nav-link\">Querystring parameter</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"internationalization_fallback.html\" class=\"nav-link\">Language fallback</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"internationalization_callbacks.html\" class=\"nav-link\">Callbacks</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<!-- /extensions -->

\t\t\t\t\t\t<!-- Tables -->
\t\t\t\t\t\t<li class=\"nav-item-header\">
\t\t\t\t\t\t\t<div class=\"text-uppercase fs-sm lh-sm opacity-50 sidebar-resize-hide\">Tables</div>
\t\t\t\t\t\t\t<i class=\"ph-dots-three sidebar-resize-show\"></i>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item nav-item-submenu\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">
\t\t\t\t\t\t\t\t<i class=\"ph-table\"></i>
\t\t\t\t\t\t\t\t<span>Basic tables</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<ul class=\"nav-group-sub collapse\">
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"table_basic.html\" class=\"nav-link\">Basic examples</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"table_sizing.html\" class=\"nav-link\">Table sizing</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"table_borders.html\" class=\"nav-link\">Table borders</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"table_styling.html\" class=\"nav-link\">Table styling</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"table_elements.html\" class=\"nav-link\">Table elements</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item nav-item-submenu\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">
\t\t\t\t\t\t\t\t<i class=\"ph-square-half-bottom\"></i>
\t\t\t\t\t\t\t\t<span>Grid.js tables</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<ul class=\"nav-group-sub collapse\">
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"gridjs_basic.html\" class=\"nav-link\">Basic</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"gridjs_data_source.html\" class=\"nav-link\">Data source</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"gridjs_server_side.html\" class=\"nav-link\">Server side</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"gridjs_customizing.html\" class=\"nav-link\">Customizing</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"gridjs_advanced.html\" class=\"nav-link\">Advanced</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item nav-item-submenu\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">
\t\t\t\t\t\t\t\t<i class=\"ph-square-half\"></i>
\t\t\t\t\t\t\t\t<span>Data tables</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<ul class=\"nav-group-sub collapse\">
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"datatable_basic.html\" class=\"nav-link\">Basic initialization</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"datatable_styling.html\" class=\"nav-link\">Basic styling</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"datatable_advanced.html\" class=\"nav-link\">Advanced examples</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"datatable_sorting.html\" class=\"nav-link\">Sorting options</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"datatable_api.html\" class=\"nav-link\">Using API</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"datatable_data_sources.html\" class=\"nav-link\">Data sources</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item nav-item-submenu\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">
\t\t\t\t\t\t\t\t<i class=\"ph-puzzle-piece\"></i>
\t\t\t\t\t\t\t\t<span>Data tables extensions</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<ul class=\"nav-group-sub collapse\">
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"datatable_extension_reorder.html\" class=\"nav-link\">Columns reorder</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"datatable_extension_row_reorder.html\" class=\"nav-link\">Row reorder</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"datatable_extension_fixed_columns.html\" class=\"nav-link\">Fixed columns</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"datatable_extension_autofill.html\" class=\"nav-link\">Auto fill</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"datatable_extension_key_table.html\" class=\"nav-link\">Key table</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"datatable_extension_scroller.html\" class=\"nav-link\">Scroller</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"datatable_extension_select.html\" class=\"nav-link\">Select</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"datatable_extension_responsive.html\" class=\"nav-link\">Responsive</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item nav-item-submenu\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">Buttons</a>
\t\t\t\t\t\t\t\t\t<ul class=\"nav-group-sub collapse\">
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"datatable_extension_buttons_init.html\" class=\"nav-link\">Initialization</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"datatable_extension_buttons_pdf.html\" class=\"nav-link\">PDF buttons</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"datatable_extension_buttons_excel.html\" class=\"nav-link\">Excel buttons</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"datatable_extension_buttons_print.html\" class=\"nav-link\">Print buttons</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"datatable_extension_buttons_html5.html\" class=\"nav-link\">HTML5 buttons</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"datatable_extension_colvis.html\" class=\"nav-link\">Columns visibility</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<!-- /tables -->

\t\t\t\t\t\t<!-- Page kits -->
\t\t\t\t\t\t<li class=\"nav-item-header\">
\t\t\t\t\t\t\t<div class=\"text-uppercase fs-sm lh-sm opacity-50 sidebar-resize-hide\">Page kits</div>
\t\t\t\t\t\t\t<i class=\"ph-dots-three sidebar-resize-show\"></i>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item nav-item-submenu\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">
\t\t\t\t\t\t\t\t<i class=\"ph-cards\"></i>
\t\t\t\t\t\t\t\t<span>General pages</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<ul class=\"nav-group-sub collapse\">
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"general_feed.html\" class=\"nav-link\">Feed</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"general_embeds.html\" class=\"nav-link\">Embeds</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"general_faq.html\" class=\"nav-link\">FAQ page</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"general_knowledgebase.html\" class=\"nav-link\">Knowledgebase</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item nav-item-submenu\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">Blog</a>
\t\t\t\t\t\t\t\t\t<ul class=\"nav-group-sub collapse\">
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"blog_classic_v.html\" class=\"nav-link\">Classic vertical</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"blog_classic_h.html\" class=\"nav-link\">Classic horizontal</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"blog_grid.html\" class=\"nav-link\">Grid</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"blog_single.html\" class=\"nav-link\">Single post</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item-divider\"></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"blog_sidebar_left.html\" class=\"nav-link\">Left sidebar</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"blog_sidebar_right.html\" class=\"nav-link\">Right sidebar</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"nav-item nav-item-submenu\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">Timelines</a>
\t\t\t\t\t\t\t\t\t<ul class=\"nav-group-sub collapse\">
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"timelines_left.html\" class=\"nav-link\">Left timeline</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"timelines_right.html\" class=\"nav-link\">Right timeline</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"timelines_center.html\" class=\"nav-link\">Centered timeline</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"nav-item nav-item-submenu\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">Gallery</a>
\t\t\t\t\t\t\t\t\t<ul class=\"nav-group-sub collapse\">
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"gallery_grid.html\" class=\"nav-link\">Media grid</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"gallery_titles.html\" class=\"nav-link\">Media with titles</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"gallery_description.html\" class=\"nav-link\">Media with description</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"gallery_library.html\" class=\"nav-link\">Media library</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item nav-item-submenu\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">
\t\t\t\t\t\t\t\t<i class=\"ph-wrench\"></i>
\t\t\t\t\t\t\t\t<span>Service pages</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<ul class=\"nav-group-sub collapse\">
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"service_sitemap.html\" class=\"nav-link\">Sitemap</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item nav-item-submenu\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">Invoicing</a>
\t\t\t\t\t\t\t\t\t<ul class=\"nav-group-sub collapse\">
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"invoice_template.html\" class=\"nav-link\">Invoice template</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"invoice_grid.html\" class=\"nav-link\">Invoice grid</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"invoice_archive.html\" class=\"nav-link\">Invoice archive</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"nav-item nav-item-submenu\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">Authentication</a>
\t\t\t\t\t\t\t\t\t<ul class=\"nav-group-sub collapse\">
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"login_simple.html\" class=\"nav-link\">Simple login</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"login_advanced.html\" class=\"nav-link\">More login info</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"login_registration.html\" class=\"nav-link\">Simple registration</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"login_registration_advanced.html\" class=\"nav-link\">More registration info</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"login_unlock.html\" class=\"nav-link\">Unlock user</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"login_password_recover.html\" class=\"nav-link\">Reset password</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"login_hide_navbar.html\" class=\"nav-link\">Hide navbar</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"login_transparent.html\" class=\"nav-link\">Transparent box</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"login_background.html\" class=\"nav-link\">Background option</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"login_validation.html\" class=\"nav-link\">With validation</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"login_tabbed.html\" class=\"nav-link\">Tabbed form</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"login_modals.html\" class=\"nav-link\">Inside modals</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"nav-item nav-item-submenu\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">Error pages</a>
\t\t\t\t\t\t\t\t\t<ul class=\"nav-group-sub collapse\">
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"error_403.html\" class=\"nav-link\">Error 403</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"error_404.html\" class=\"nav-link\">Error 404</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"error_405.html\" class=\"nav-link\">Error 405</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"error_500.html\" class=\"nav-link\">Error 500</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"error_503.html\" class=\"nav-link\">Error 503</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"error_offline.html\" class=\"nav-link\">Offline page</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item nav-item-submenu\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">
\t\t\t\t\t\t\t\t<i class=\"ph-user-focus\"></i>
\t\t\t\t\t\t\t\t<span>User pages</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<ul class=\"nav-group-sub collapse\">
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"user_pages_list.html\" class=\"nav-link\">User list</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"user_pages_cards.html\" class=\"nav-link\">User cards</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"user_pages_profile.html\" class=\"nav-link\">Simple profile</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"user_pages_profile_tabbed.html\" class=\"nav-link\">Tabbed profile</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"user_pages_profile_cover.html\" class=\"nav-link\">Profile with cover</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item nav-item-submenu\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">
\t\t\t\t\t\t\t\t<i class=\"ph-circles-four\"></i>
\t\t\t\t\t\t\t\t<span>Application pages</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<ul class=\"nav-group-sub collapse\">
\t\t\t\t\t\t\t\t<li class=\"nav-item nav-item-submenu\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">Task manager</a>
\t\t\t\t\t\t\t\t\t<ul class=\"nav-group-sub collapse\">
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"task_manager_grid.html\" class=\"nav-link\">Task grid</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"task_manager_list.html\" class=\"nav-link\">Task list</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"task_manager_detailed.html\" class=\"nav-link\">Task detailed</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"nav-item nav-item-submenu\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">Inbox</a>
\t\t\t\t\t\t\t\t\t<ul class=\"nav-group-sub collapse\">
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"mail_list.html\" class=\"nav-link\">Mail list</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"mail_list_detached.html\" class=\"nav-link\">Mail list (detached)</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"mail_read.html\" class=\"nav-link\">Read mail</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"mail_write.html\" class=\"nav-link\">Write mail</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item-divider\"></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"chat_layouts.html\" class=\"nav-link\">Chat layouts</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"chat_options.html\" class=\"nav-link\">Chat options</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"nav-item nav-item-submenu\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">Search</a>
\t\t\t\t\t\t\t\t\t<ul class=\"nav-group-sub collapse\">
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"search_basic.html\" class=\"nav-link\">Basic search results</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"search_users.html\" class=\"nav-link\">User search results</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"search_images.html\" class=\"nav-link\">Image search results</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"search_videos.html\" class=\"nav-link\">Video search results</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"nav-item nav-item-submenu\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">Job search</a>
\t\t\t\t\t\t\t\t\t<ul class=\"nav-group-sub collapse\">
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"job_list_cards.html\" class=\"nav-link\">Cards view</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"job_list_list.html\" class=\"nav-link\">List view</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"job_detailed.html\" class=\"nav-link\">Job detailed</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"job_apply.html\" class=\"nav-link\">Apply</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"nav-item nav-item-submenu\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">Learning</a>
\t\t\t\t\t\t\t\t\t<ul class=\"nav-group-sub collapse\">
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"learning_list.html\" class=\"nav-link\">List view</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"learning_grid.html\" class=\"nav-link\">Grid view</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"learning_detailed.html\" class=\"nav-link\">Detailed course</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"nav-item nav-item-submenu\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">Ecommerce set</a>
\t\t\t\t\t\t\t\t\t<ul class=\"nav-group-sub collapse\">
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"ecommerce_product_list.html\" class=\"nav-link\">Product list</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"ecommerce_product_grid.html\" class=\"nav-link\">Product grid</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"ecommerce_orders_history.html\" class=\"nav-link\">Orders history</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"ecommerce_customers.html\" class=\"nav-link\">Customers</a></li>
\t\t\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"ecommerce_pricing.html\" class=\"nav-link\">Pricing tables</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item nav-item-submenu\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">
\t\t\t\t\t\t\t\t<i class=\"ph-gift\"></i>
\t\t\t\t\t\t\t\t<span>Widgets</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<ul class=\"nav-group-sub collapse\">
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"widgets_content.html\" class=\"nav-link\">Content widgets</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"widgets_stats.html\" class=\"nav-link\">Statistics widgets</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"widgets_menu.html\" class=\"nav-link disabled\">Menu widgets <span class=\"badge bg-transparent align-self-center ms-auto\">Coming soon</span></a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"widgets_form.html\" class=\"nav-link disabled\">Form widgets <span class=\"badge bg-transparent align-self-center ms-auto\">Coming soon</span></a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<!-- /page kits -->

\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<!-- /main navigation -->

\t\t\t</div>
\t\t\t<!-- /sidebar content -->
\t\t\t
\t\t</div>
\t\t<!-- /main sidebar -->


\t\t<!-- Main content -->
\t\t<div class=\"content-wrapper\">

\t\t\t<!-- Inner content -->
\t\t\t<div class=\"content-inner\">

\t\t\t\t<!-- Page header -->
\t\t\t\t<div class=\"page-header page-header-light shadow\">
\t\t\t\t\t<div class=\"page-header-content d-lg-flex\">
\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t<h4 class=\"page-title mb-0\">
\t\t\t\t\t\t\t\tHome - <span class=\"fw-normal\">Dashboard</span>
\t\t\t\t\t\t\t</h4>

\t\t\t\t\t\t\t<a href=\"#page_header\" class=\"btn btn-light align-self-center collapsed d-lg-none border-transparent rounded-pill p-0 ms-auto\" data-bs-toggle=\"collapse\">
\t\t\t\t\t\t\t\t<i class=\"ph-caret-down collapsible-indicator ph-sm m-1\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"collapse d-lg-block my-lg-auto ms-lg-auto\" id=\"page_header\">
\t\t\t\t\t\t\t<div class=\"d-sm-flex align-items-center mb-3 mb-lg-0 ms-lg-3\">
\t\t\t\t\t\t\t\t<div class=\"dropdown w-100 w-sm-auto\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"d-flex align-items-center text-body lh-1 dropdown-toggle py-sm-2\" data-bs-toggle=\"dropdown\" data-bs-display=\"static\">
\t\t\t\t\t\t\t\t\t\t<img src=\"../../../assets/images/brands/tesla.svg\" class=\"w-32px h-32px me-2\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t<div class=\"me-auto me-lg-1\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"fs-sm text-muted mb-1\">Customer</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"fw-semibold\">Tesla Motors Inc</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-lg-end w-100 w-lg-auto wmin-300 wmin-sm-350 pt-0\">
\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center p-3\">
\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"fw-semibold mb-0\">Customers</h6>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"ms-auto\">
\t\t\t\t\t\t\t\t\t\t\t\tView all
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-arrow-circle-right ms-1\"></i>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item active py-2\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"../../../assets/images/brands/tesla.svg\" class=\"w-32px h-32px me-2\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fw-semibold\">Tesla Motors Inc</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fs-sm text-muted\">42 users</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item py-2\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"../../../assets/images/brands/debijenkorf.svg\" class=\"w-32px h-32px me-2\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fw-semibold\">De Bijenkorf</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fs-sm text-muted\">49 users</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item py-2\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"../../../assets/images/brands/klm.svg\" class=\"w-32px h-32px me-2\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fw-semibold\">Royal Dutch Airlines</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fs-sm text-muted\">18 users</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item py-2\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"../../../assets/images/brands/shell.svg\" class=\"w-32px h-32px me-2\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fw-semibold\">Royal Dutch Shell</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fs-sm text-muted\">54 users</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item py-2\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"../../../assets/images/brands/bp.svg\" class=\"w-32px h-32px me-2\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fw-semibold\">BP plc</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fs-sm text-muted\">23 users</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"vr d-none d-sm-block flex-shrink-0 my-2 mx-3\"></div>

\t\t\t\t\t\t\t\t<div class=\"d-inline-flex mt-3 mt-sm-0\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"status-indicator-container ms-1\">
\t\t\t\t\t\t\t\t\t\t<img src=\"../../../assets/images/demo/users/face24.jpg\" class=\"w-32px h-32px rounded-pill\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t<span class=\"status-indicator bg-warning\"></span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"status-indicator-container ms-1\">
\t\t\t\t\t\t\t\t\t\t<img src=\"../../../assets/images/demo/users/face1.jpg\" class=\"w-32px h-32px rounded-pill\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t<span class=\"status-indicator bg-success\"></span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"status-indicator-container ms-1\">
\t\t\t\t\t\t\t\t\t\t<img src=\"../../../assets/images/demo/users/face3.jpg\" class=\"w-32px h-32px rounded-pill\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t<span class=\"status-indicator bg-danger\"></span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-outline-primary btn-icon w-32px h-32px rounded-pill ms-3\">
\t\t\t\t\t\t\t\t\t\t<i class=\"ph-plus\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"page-header-content d-lg-flex border-top\">
\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t<div class=\"breadcrumb py-2\">
\t\t\t\t\t\t\t\t<a href=\"index.html\" class=\"breadcrumb-item\"><i class=\"ph-house\"></i></a>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"breadcrumb-item\">Home</a>
\t\t\t\t\t\t\t\t<span class=\"breadcrumb-item active\">Dashboard</span>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<a href=\"#breadcrumb_elements\" class=\"btn btn-light align-self-center collapsed d-lg-none border-transparent rounded-pill p-0 ms-auto\" data-bs-toggle=\"collapse\">
\t\t\t\t\t\t\t\t<i class=\"ph-caret-down collapsible-indicator ph-sm m-1\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"collapse d-lg-block ms-lg-auto\" id=\"breadcrumb_elements\">
\t\t\t\t\t\t\t<div class=\"d-lg-flex mb-2 mb-lg-0\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"d-flex align-items-center text-body py-2\">
\t\t\t\t\t\t\t\t\t<i class=\"ph-lifebuoy me-2\"></i>
\t\t\t\t\t\t\t\t\tSupport
\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t<div class=\"dropdown ms-lg-3\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"d-flex align-items-center text-body dropdown-toggle py-2\" data-bs-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t<i class=\"ph-gear me-2\"></i>
\t\t\t\t\t\t\t\t\t\t<span class=\"flex-1\">Settings</span>
\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-end w-100 w-lg-auto\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-shield-warning me-2\"></i>
\t\t\t\t\t\t\t\t\t\t\tAccount security
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-chart-bar me-2\"></i>
\t\t\t\t\t\t\t\t\t\t\tAnalytics
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-lock-key me-2\"></i>
\t\t\t\t\t\t\t\t\t\t\tPrivacy
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-gear me-2\"></i>
\t\t\t\t\t\t\t\t\t\t\tAll settings
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- /page header -->


\t\t\t\t<!-- Content area -->
\t\t\t\t<div class=\"content\">

\t\t\t\t\t<!-- Main charts -->
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-xl-7\">

\t\t\t\t\t\t\t<!-- Traffic sources -->
\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t<div class=\"card-header d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t<h5 class=\"mb-0\">Traffic sources</h5>
\t\t\t\t\t\t\t\t\t<div class=\"ms-auto\">
\t\t\t\t\t\t\t\t\t\t<label class=\"form-check form-switch form-check-reverse\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" class=\"form-check-input\" checked>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"form-check-label\">Live update</span>
\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"card-body pb-0\">
\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center justify-content-center mb-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"bg-success bg-opacity-10 text-success lh-1 rounded-pill p-2 me-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-plus\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fw-semibold\">New visitors</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-muted\">2,349 avg</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"w-75 mx-auto mb-3\" id=\"new-visitors\"></div>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center justify-content-center mb-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"bg-warning bg-opacity-10 text-warning lh-1 rounded-pill p-2 me-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-clock\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fw-semibold\">New sessions</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-muted\">08:20 avg</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"w-75 mx-auto mb-3\" id=\"new-sessions\"></div>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center justify-content-center mb-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"bg-indigo bg-opacity-10 text-indigo lh-1 rounded-pill p-2 me-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-users-three\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fw-semibold\">Total online</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-muted\">5,378 avg</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"w-75 mx-auto mb-3\" id=\"total-online\"></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"chart position-relative\" id=\"traffic-sources\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- /traffic sources -->

\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"col-xl-5\">

\t\t\t\t\t\t\t<!-- Sales stats -->
\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t<div class=\"card-header d-sm-flex align-items-sm-center py-sm-0\">
\t\t\t\t\t\t\t\t\t<h5 class=\"py-sm-2 my-sm-1\">Sales statistics</h5>
\t\t\t\t\t\t\t\t\t<div class=\"mt-2 mt-sm-0 ms-sm-auto\">
\t\t\t\t\t\t\t\t\t\t<select class=\"form-select\" id=\"select_date\">
\t\t\t\t\t\t\t\t\t\t\t<option value=\"val1\">June, 29 - July, 5</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"val2\">June, 22 - June 28</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"val3\" selected>June, 15 - June, 21</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"val4\">June, 8 - June, 14</option>
\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t                \t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"card-body pb-0\">
\t\t\t\t\t\t\t\t\t<div class=\"row text-center\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-4\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"mb-0\">5,689</h5>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-muted fs-sm\">new orders</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"col-4\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"mb-0\">32,568</h5>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-muted fs-sm\">this month</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"col-4\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"mb-0\">\$23,464</h5>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-muted fs-sm\">expected profit</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"chart mb-2\" id=\"app_sales\"></div>
\t\t\t\t\t\t\t\t<div class=\"chart\" id=\"monthly-sales-stats\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- /sales stats -->

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- /main charts -->


\t\t\t\t\t<!-- Dashboard content -->
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-xl-8\">

\t\t\t\t\t\t\t<!-- Marketing campaigns -->
\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t<div class=\"card-header d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t<h5 class=\"mb-0\">Marketing campaigns</h5>
\t\t\t\t\t\t\t\t\t<div class=\"d-inline-flex ms-auto\">
\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-success rounded-pill\">28 active</span>
\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown d-inline-flex ms-3\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-body d-inline-flex align-items-center dropdown-toggle\" data-bs-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-gear\"></i>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-end\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-arrows-clockwise me-2\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\tUpdate data
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-list-dashes me-2\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\tDetailed log
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-chart-line me-2\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\tStatistics
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-eraser me-2\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\tClear list
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t                \t</div>
\t\t\t\t                \t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"card-body d-sm-flex align-items-sm-center justify-content-sm-between flex-sm-wrap\">
\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center mb-3 mb-sm-0\">
\t\t\t\t\t\t\t\t\t\t<div id=\"campaigns-donut\"></div>
\t\t\t\t\t\t\t\t\t\t<div class=\"ms-3\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"mb-0\">38,289</h5>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-success ms-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-arrow-up fs-base lh-base align-top\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t(+16.2%)
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"d-inline-block bg-success rounded-pill p-1 me-1\"></span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-muted\">May 12, 12:30 am</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center mb-3 mb-sm-0\">
\t\t\t\t\t\t\t\t\t\t<div id=\"campaign-status-pie\"></div>
\t\t\t\t\t\t\t\t\t\t<div class=\"ms-3\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"mb-0\">2,458</h5>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-danger ms-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-arrow-down fs-base lh-base align-top\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t(-4.9%)
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"d-inline-block bg-danger rounded-pill p-1 me-1\"></span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-muted\">Jun 4, 4:00 am</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-indigo\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-file-pdf me-2\"></i>
\t\t\t\t\t\t\t\t\t\t\tView report
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t\t\t\t\t<table class=\"table text-nowrap\">
\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<th>Campaign</th>
\t\t\t\t\t\t\t\t\t\t\t\t<th>Client</th>
\t\t\t\t\t\t\t\t\t\t\t\t<th>Changes</th>
\t\t\t\t\t\t\t\t\t\t\t\t<th>Budget</th>
\t\t\t\t\t\t\t\t\t\t\t\t<th>Status</th>
\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"text-center\" style=\"width: 20px;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-dots-three\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t<tr class=\"table-light\">
\t\t\t\t\t\t\t\t\t\t\t\t<td colspan=\"5\">Today</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-end\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"progress-meter\" id=\"today-progress\" data-progress=\"30\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"d-block me-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"../../../assets/images/brands/facebook.svg\" class=\"rounded-circle\" width=\"36\" height=\"36\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-body fw-semibold\">Facebook</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-muted fs-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"d-inline-block bg-primary rounded-pill p-1 me-1\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t02:00 - 03:00
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td><span class=\"text-muted\">Mintlime</span></td>
\t\t\t\t\t\t\t\t\t\t\t\t<td><span class=\"text-success\"><i class=\"ph-trend-up me-2\"></i> 2.43%</span></td>
\t\t\t\t\t\t\t\t\t\t\t\t<td><h6 class=\"mb-0\">\$5,489</h6></td>
\t\t\t\t\t\t\t\t\t\t\t\t<td><span class=\"badge bg-primary bg-opacity-10 text-primary\">Active</span></td>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-body\" data-bs-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-list\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-end\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-chart-line me-2\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tView statement
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-pencil me-2\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tEdit campaign
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-lock-key me-2\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tDisable campaign
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-gear me-2\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tSettings
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"d-block me-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"../../../assets/images/brands/youtube.svg\" class=\"rounded-circle\" width=\"36\" height=\"36\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-body fw-semibold\">Youtube videos</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-muted fs-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"d-inline-block bg-danger rounded-pill p-1 me-1\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t13:00 - 14:00
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td><span class=\"text-muted\">CDsoft</span></td>
\t\t\t\t\t\t\t\t\t\t\t\t<td><span class=\"text-success\"><i class=\"ph-trend-up me-2\"></i> 3.12%</span></td>
\t\t\t\t\t\t\t\t\t\t\t\t<td><h6 class=\"mb-0\">\$2,592</h6></td>
\t\t\t\t\t\t\t\t\t\t\t\t<td><span class=\"badge bg-danger bg-opacity-10 text-danger\">Closed</span></td>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-body\" data-bs-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-list\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-end\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-chart-line me-2\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tView statement
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-pencil me-2\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tEdit campaign
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-lock-key me-2\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tDisable campaign
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-gear me-2\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tSettings
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"d-block me-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"../../../assets/images/brands/spotify.svg\" class=\"rounded-circle\" width=\"36\" height=\"36\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-body fw-semibold\">Spotify ads</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-muted fs-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"d-inline-block bg-secondary rounded-pill p-1 me-1\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t10:00 - 11:00
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td><span class=\"text-muted\">Diligence</span></td>
\t\t\t\t\t\t\t\t\t\t\t\t<td><span class=\"text-danger\"><i class=\"ph-trend-down me-2\"></i> 8.02%</span></td>
\t\t\t\t\t\t\t\t\t\t\t\t<td><h6 class=\"mb-0\">\$1,268</h6></td>
\t\t\t\t\t\t\t\t\t\t\t\t<td><span class=\"badge bg-secondary bg-opacity-10 text-secondary\">On hold</span></td>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-body\" data-bs-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-list\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-end\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-chart-line me-2\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tView statement
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-pencil me-2\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tEdit campaign
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-lock-key me-2\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tDisable campaign
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-gear me-2\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tSettings
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"d-block me-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"../../../assets/images/brands/twitter.svg\" class=\"rounded-circle\" width=\"36\" height=\"36\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-body fw-semibold\">Twitter ads</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-muted fs-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"d-inline-block bg-secondary rounded-pill p-1 me-1\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t04:00 - 05:00
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td><span class=\"text-muted\">Deluxe</span></td>
\t\t\t\t\t\t\t\t\t\t\t\t<td><span class=\"text-success\"><i class=\"ph-trend-up me-2\"></i> 2.78%</span></td>
\t\t\t\t\t\t\t\t\t\t\t\t<td><h6 class=\"mb-0\">\$7,467</h6></td>
\t\t\t\t\t\t\t\t\t\t\t\t<td><span class=\"badge bg-secondary bg-opacity-10 text-secondary\">On hold</span></td>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-body\" data-bs-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-list\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-end\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-chart-line me-2\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tView statement
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-pencil me-2\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tEdit campaign
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-lock-key me-2\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tDisable campaign
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-gear me-2\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tSettings
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t\t\t\t\t\t<tr class=\"table-light\">
\t\t\t\t\t\t\t\t\t\t\t\t<td colspan=\"5\">Yesterday</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-end\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"progress-meter\" id=\"yesterday-progress\" data-progress=\"65\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"d-block me-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"../../../assets/images/brands/bing.svg\" class=\"rounded-circle\" width=\"36\" height=\"36\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-body fw-semibold\">Bing campaign</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-muted fs-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"d-inline-block bg-success rounded-pill p-1 me-1\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t15:00 - 16:00
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td><span class=\"text-muted\">Metrics</span></td>
\t\t\t\t\t\t\t\t\t\t\t\t<td><span class=\"text-danger\"><i class=\"ph-trend-down me-2\"></i> 5.78%</span></td>
\t\t\t\t\t\t\t\t\t\t\t\t<td><h6 class=\"mb-0\">\$970</h6></td>
\t\t\t\t\t\t\t\t\t\t\t\t<td><span class=\"badge bg-success bg-opacity-10 text-success\">Pending</span></td>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-body\" data-bs-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-list\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-end\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-chart-line me-2\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tView statement
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-pencil me-2\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tEdit campaign
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-lock-key me-2\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tDisable campaign
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-gear me-2\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tSettings
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"d-block me-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"../../../assets/images/brands/amazon.svg\" class=\"rounded-circle\" width=\"36\" height=\"36\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-body fw-semibold\">Amazon ads</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-muted fs-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"d-inline-block bg-danger rounded-pill p-1 me-1\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t18:00 - 19:00
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td><span class=\"text-muted\">Blueish</span></td>
\t\t\t\t\t\t\t\t\t\t\t\t<td><span class=\"text-success\"><i class=\"ph-trend-up me-2\"></i> 6.79%</span></td>
\t\t\t\t\t\t\t\t\t\t\t\t<td><h6 class=\"mb-0\">\$1,540</h6></td>
\t\t\t\t\t\t\t\t\t\t\t\t<td><span class=\"badge bg-primary bg-opacity-10 text-primary\">Active</span></td>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-body\" data-bs-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-list\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-end\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-chart-line me-2\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tView statement
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-pencil me-2\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tEdit campaign
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-lock-key me-2\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tDisable campaign
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-gear me-2\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tSettings
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"d-block me-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"../../../assets/images/brands/dribbble.svg\" class=\"rounded-circle\" width=\"36\" height=\"36\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-body fw-semibold\">Dribbble ads</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-muted fs-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"d-inline-block bg-primary rounded-pill p-1 me-1\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t20:00 - 21:00
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td><span class=\"text-muted\">Teamable</span></td>
\t\t\t\t\t\t\t\t\t\t\t\t<td><span class=\"text-danger\"><i class=\"ph-trend-down me-2\"></i> 9.83%</span></td>
\t\t\t\t\t\t\t\t\t\t\t\t<td><h6 class=\"mb-0\">\$8,350</h6></td>
\t\t\t\t\t\t\t\t\t\t\t\t<td><span class=\"badge bg-danger bg-opacity-10 text-danger\">Closed</span></td>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-body\" data-bs-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-list\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-end\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-chart-line me-2\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tView statement
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-pencil me-2\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tEdit campaign
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-lock-key me-2\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tDisable campaign
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-gear me-2\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tSettings
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- /marketing campaigns -->


\t\t\t\t\t\t\t<!-- Quick stats boxes -->
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-lg-4\">

\t\t\t\t\t\t\t\t\t<!-- Members online -->
\t\t\t\t\t\t\t\t\t<div class=\"card bg-teal text-white\">
\t\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"mb-0\">3,450</h3>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-black bg-opacity-50 rounded-pill align-self-center ms-auto\">+53,6%</span>
\t\t\t\t\t\t                \t</div>
\t\t\t\t\t\t                \t
\t\t\t\t\t\t                \t<div>
\t\t\t\t\t\t\t\t\t\t\t\tMembers online
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fs-sm opacity-75\">489 avg</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"rounded-bottom overflow-hidden mx-3\" id=\"members-online\"></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- /members online -->

\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"col-lg-4\">

\t\t\t\t\t\t\t\t\t<!-- Current server load -->
\t\t\t\t\t\t\t\t\t<div class=\"card bg-pink text-white\">
\t\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"mb-0\">49.4%</h3>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown d-inline-flex ms-auto\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-white d-inline-flex align-items-center dropdown-toggle\" data-bs-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-gear\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-end\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-arrows-clockwise me-2\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tUpdate data
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-list-dashes me-2\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tDetailed log
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-chart-line me-2\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tStatistics
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-eraser me-2\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tClear list
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t                \t\t</div>
\t\t\t\t\t\t                \t</div>
\t\t\t\t\t\t                \t
\t\t\t\t\t\t                \t<div>
\t\t\t\t\t\t\t\t\t\t\t\tCurrent server load
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fs-sm opacity-75\">34.6% avg</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"rounded-bottom overflow-hidden\" id=\"server-load\"></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- /current server load -->

\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"col-lg-4\">

\t\t\t\t\t\t\t\t\t<!-- Today's revenue -->
\t\t\t\t\t\t\t\t\t<div class=\"card bg-primary text-white\">
\t\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<h3 class=\"mb-0\">\$18,390</h3>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"ms-auto\">
\t\t\t\t\t\t\t                \t\t<a class=\"text-white\" data-card-action=\"reload\">
\t\t\t\t\t\t\t                \t\t\t<i class=\"ph-arrows-clockwise\"></i>
\t\t\t\t\t\t\t                \t\t</a>
\t\t\t\t\t\t\t                \t</div>
\t\t\t\t\t\t                \t</div>
\t\t\t\t\t\t                \t
\t\t\t\t\t\t                \t<div>
\t\t\t\t\t\t\t\t\t\t\t\tToday's revenue
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fs-sm opacity-75\">\$37,578 avg</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"rounded-bottom overflow-hidden\" id=\"today-revenue\"></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- /today's revenue -->

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- /quick stats boxes -->


\t\t\t\t\t\t\t<!-- Support tickets -->
\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t<div class=\"card-header d-sm-flex align-items-sm-center py-sm-0\">
\t\t\t\t\t\t\t\t\t<h5 class=\"py-sm-2 my-sm-1\">Support tickets</h5>
\t\t\t\t\t\t\t\t\t<div class=\"mt-2 mt-sm-0 ms-sm-auto\">
\t\t\t\t\t\t\t\t\t\t<select class=\"form-select\">
\t\t\t\t\t\t\t\t\t\t\t<option value=\"val1\" selected>June, 29 - July, 5</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"val2\">June, 22 - June 28</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"val3\">June, 15 - June, 21</option>
\t\t\t\t\t\t\t\t\t\t\t<option value=\"val4\">June, 8 - June, 14</option>
\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t                \t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"card-body d-lg-flex align-items-lg-center justify-content-lg-between flex-lg-wrap\">
\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center mb-3 mb-lg-0\">
\t\t\t\t\t\t\t\t\t\t<div id=\"tickets-status\"></div>
\t\t\t\t\t\t\t\t\t\t<div class=\"ms-3\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"mb-0\">14,327</h5>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-success ms-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-arrow-up fs-base lh-base align-top\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t(+2.9%)
\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"d-inline-block bg-success rounded-pill p-1 me-1\"></span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-muted\">Jun 16, 10:00 am</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center mb-3 mb-lg-0\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"bg-primary bg-opacity-10 text-primary lh-1 rounded-pill p-2\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-folders\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<div class=\"ms-3\">
\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"mb-0\">1,132</h5>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-muted\">total tickets</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center mb-3 mb-lg-0\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"bg-primary bg-opacity-10 text-primary lh-1 rounded-pill p-2\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-arrow-arc-left\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<div class=\"ms-3\">
\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"mb-0\">06:25:00</h5>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-muted\">response time</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-light\">
\t\t\t\t\t\t\t\t\t\t<i class=\"ph-file-pdf me-2\"></i>
\t\t\t\t\t\t\t\t\t\tReport
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t\t\t\t\t<table class=\"table text-nowrap\">
\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<th style=\"width: 50px\">Due</th>
\t\t\t\t\t\t\t\t\t\t\t\t<th style=\"width: 300px;\">User</th>
\t\t\t\t\t\t\t\t\t\t\t\t<th>Description</th>
\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"text-center\" style=\"width: 20px;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-dots-three\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t<tr class=\"table-light\">
\t\t\t\t\t\t\t\t\t\t\t\t<td colspan=\"3\">Active tickets</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-end\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-primary rounded-pill\">24</span>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"mb-0\">12</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fs-sm text-muted lh-1\">hours</div>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"d-inline-flex align-items-center justify-content-center bg-teal text-white lh-1 rounded-pill w-40px h-40px me-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"letter-icon\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-body fw-semibold letter-icon-title\">Annabelle Doney</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center text-muted fs-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"bg-danger rounded-pill p-1 me-2\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tBlocker
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fw-semibold\">[#1183] Workaround for OS X selects printing bug</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-muted\">Chrome fixed the bug several versions ago, thus rendering this...</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-body\" data-bs-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-list\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-end\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-arrow-bend-up-left me-2\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tQuick reply
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-clock-counter-clockwise me-2\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tFull history
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-checks text-success me-2\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tResolve issue
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-x text-danger me-2\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tClose issue
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"mb-0\">16</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fs-sm text-muted lh-1\">hours</div>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"d-inline-block me-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"../../../assets/images/demo/users/face15.jpg\" class=\"rounded-circle\" width=\"40\" height=\"40\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-body fw-semibold\">Chris Macintyre</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center text-muted fs-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"bg-primary rounded-pill p-1 me-2\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tMedium
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fw-semibold\">[#1249] Vertically center carousel controls</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-muted\">Try any carousel control and reduce the screen width below...</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-body\" data-bs-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-list\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-end\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-arrow-bend-up-left me-2\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tQuick reply
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-clock-counter-clockwise me-2\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tFull history
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-checks text-success me-2\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tResolve issue
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-x text-danger me-2\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tClose issue
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"mb-0\">20</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fs-sm text-muted lh-1\">hours</div>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"d-inline-flex align-items-center justify-content-center bg-primary text-white lh-1 rounded-pill w-40px h-40px me-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"letter-icon\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-body fw-semibold letter-icon-title\">Robert Hauber</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center text-muted fs-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"bg-primary rounded-pill p-1 me-2\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tMedium
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fw-semibold\">[#1254] Inaccurate small pagination height</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-muted\">The height of pagination elements is not consistent with...</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-body\" data-bs-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-list\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-end\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-arrow-bend-up-left me-2\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tQuick reply
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-clock-counter-clockwise me-2\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tFull history
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-checks text-success me-2\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tResolve issue
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-x text-danger me-2\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tClose issue
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"mb-0\">40</h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fs-sm text-muted lh-1\">hours</div>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"d-inline-flex align-items-center justify-content-center bg-warning text-white lh-1 rounded-pill w-40px h-40px me-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"letter-icon\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-body fw-semibold letter-icon-title\">Robert Hauber</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center text-muted fs-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"bg-warning rounded-pill p-1 me-2\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tHigh
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fw-semibold\">[#1184] Round grid column gutter operations</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-muted\">Left rounds up, right rounds down. should keep everything...</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-body\" data-bs-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-list\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-end\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-arrow-bend-up-left me-2\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tQuick reply
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-clock-counter-clockwise me-2\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tFull history
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-checks text-success me-2\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tResolve issue
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-x text-danger me-2\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tClose issue
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t\t\t\t\t\t<tr class=\"table-light\">
\t\t\t\t\t\t\t\t\t\t\t\t<td colspan=\"3\">Resolved tickets</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-end\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-success rounded-pill\">42</span>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-check text-success\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"d-inline-flex align-items-center justify-content-center bg-success text-white lh-1 rounded-pill w-40px h-40px me-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"letter-icon\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-body fw-semibold letter-icon-title\">Alan Macedo</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center text-muted fs-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"bg-danger rounded-pill p-1 me-2\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tBlocker
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>[#1046] Avoid some unnecessary HTML string</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-muted\">Rather than building a string of HTML and then parsing it...</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-body\" data-bs-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-list\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-end\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-arrow-bend-up-left me-2\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tQuick reply
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-clock-counter-clockwise me-2\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tFull history
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-checks text-success me-2\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tResolve issue
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-x text-danger me-2\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tClose issue
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-check text-success\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"d-inline-flex align-items-center justify-content-center bg-pink text-white lh-1 rounded-pill w-40px h-40px me-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"letter-icon\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-body fw-semibold letter-icon-title\">Brett Castellano</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center text-muted fs-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"bg-success rounded-pill p-1 me-2\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tLow
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>[#1038] Update json configuration</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-muted\">The <code>files</code> property is necessary to override the files property...</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-body\" data-bs-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-list\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-end\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-arrow-bend-up-left me-2\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tQuick reply
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-clock-counter-clockwise me-2\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tFull history
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-checks text-success me-2\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tResolve issue
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-x text-danger me-2\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tClose issue
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-check text-success\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"d-inline-block me-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"../../../assets/images/demo/users/face3.jpg\" class=\"rounded-circle\" width=\"40\" height=\"40\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-body fw-semibold\">Roxanne Forbes</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center text-muted fs-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"bg-success rounded-pill p-1 me-2\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tLow
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>[#1034] Tooltip multiple event</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-muted\">Fix behavior when using tooltips and popovers that are...</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-body\" data-bs-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-list\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-end\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-arrow-bend-up-left me-2\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tQuick reply
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-clock-counter-clockwise me-2\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tFull history
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-checks text-success me-2\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tResolve issue
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-x text-danger me-2\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tClose issue
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t\t\t\t\t\t<tr class=\"table-light\">
\t\t\t\t\t\t\t\t\t\t\t\t<td colspan=\"3\">Closed tickets</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-end\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-danger rounded-pill\">37</span>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-checks text-danger\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"d-inline-block me-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"../../../assets/images/demo/users/face8.jpg\" class=\"rounded-circle\" width=\"40\" height=\"40\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-body fw-semibold\">Mitchell Sitkin</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center text-muted fs-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"bg-warning rounded-pill p-1 me-2\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tHigh
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>[#1040] Account for static form controls in form group</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-muted\">Resizes control label's font-size and account for the standard...</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-body\" data-bs-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-list\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-end\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-arrow-bend-up-left me-2\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tQuick reply
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-clock-counter-clockwise me-2\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tFull history
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-checks text-success me-2\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tResolve issue
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-x text-danger me-2\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tClose issue
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-checks text-danger\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"d-inline-flex align-items-center justify-content-center bg-indigo text-white lh-1 rounded-pill w-40px h-40px me-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"letter-icon\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-body fw-semibold letter-icon-title\">Katleen Jensen</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center text-muted fs-sm\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"bg-primary rounded-pill p-1 me-2\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tMedium
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>[#1038] Proper sizing of form control feedback</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-muted\">Feedback icon sizing inside a larger/smaller form-group...</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-body\" data-bs-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-list\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-end\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-arrow-bend-up-left me-2\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tQuick reply
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-clock-counter-clockwise me-2\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tFull history
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-checks text-success me-2\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tResolve issue
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-x text-danger me-2\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tClose issue
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- /support tickets -->


\t\t\t\t\t\t\t<!-- Latest posts -->
\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t\t\t\t<h5 class=\"mb-0\">Latest posts</h5>
\t\t\t                \t</div>

\t\t\t\t\t\t\t\t<div class=\"card-body pb-0\">
\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-xl-6\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-sm-flex align-items-sm-start mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"d-inline-block position-relative me-sm-3 mb-3 mb-sm-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"../../../assets/images/demo/flat/1.png\" class=\"flex-shrink-0 rounded\" height=\"100\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-inline-flex bg-dark bg-opacity-50 text-white position-absolute start-50 top-50 translate-middle rounded-pill p-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-play\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"bg-dark bg-opacity-50 text-white fs-xs lh-1 rounded-1 position-absolute bottom-0 start-0 p-1 ms-2 mb-2\">12:25</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-fill\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"mb-1\"><a href=\"#\">Up unpacked friendly</a></h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"list-inline list-inline-bullet text-muted mb-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item\"><a href=\"#\" class=\"text-body\">Video tutorials</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\tThe him father parish looked has sooner. Attachment frequently terminated son hello...
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-sm-flex align-items-sm-start mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"d-inline-block position-relative me-sm-3 mb-3 mb-sm-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"../../../assets/images/demo/flat/21.png\" class=\"flex-shrink-0 rounded\" height=\"100\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-inline-flex bg-dark bg-opacity-50 text-white position-absolute start-50 top-50 translate-middle rounded-pill p-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-play\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"bg-dark bg-opacity-50 text-white fs-xs lh-1 rounded-1 position-absolute bottom-0 start-0 p-1 ms-2 mb-2\">47:25</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-fill\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"mb-1\"><a href=\"#\">It allowance prevailed</a></h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"list-inline list-inline-bullet text-muted mb-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item\"><a href=\"#\" class=\"text-body\">Video tutorials</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\tAlteration literature to or an sympathize mr imprudence. Of is ferrars subject enjoyed...
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"col-xl-6\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-sm-flex align-items-sm-start mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"d-inline-block position-relative me-sm-3 mb-3 mb-sm-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"../../../assets/images/demo/flat/12.png\" class=\"flex-shrink-0 rounded\" height=\"100\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-inline-flex bg-dark bg-opacity-50 text-white position-absolute start-50 top-50 translate-middle rounded-pill p-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-play\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"bg-dark bg-opacity-50 text-white fs-xs lh-1 rounded-1 position-absolute bottom-0 start-0 p-1 ms-2 mb-2\">48:40</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-fill\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"mb-1\"><a href=\"#\">Case read they must</a></h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"list-inline list-inline-bullet text-muted mb-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item\"><a href=\"#\" class=\"text-body\">Video tutorials</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\tOn it differed repeated wandered required in. Then girl neat why yet knew rose spot...
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-sm-flex align-items-sm-start mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"d-inline-block position-relative me-sm-3 mb-3 mb-sm-0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"../../../assets/images/demo/flat/18.png\" class=\"flex-shrink-0 rounded\" height=\"100\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-inline-flex bg-dark bg-opacity-50 text-white position-absolute start-50 top-50 translate-middle rounded-pill p-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-play\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"bg-dark bg-opacity-50 text-white fs-xs lh-1 rounded-1 position-absolute bottom-0 start-0 p-1 ms-2 mb-2\">22:14</span>
\t\t\t\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-fill\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<h6 class=\"mb-1\"><a href=\"#\">Consider now provided</a></h6>
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"list-inline list-inline-bullet text-muted mb-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"list-inline-item\"><a href=\"#\" class=\"text-body\">Video tutorials</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\tMarianne or husbands if at stronger ye. Considered is as middletons uncommonly...
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- /latest posts -->

\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"col-xl-4\">

\t\t\t\t\t\t\t<!-- Progress counters -->
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">

\t\t\t\t\t\t\t\t\t<!-- Available hours -->
\t\t\t\t\t\t\t\t\t<div class=\"card text-center\">
\t\t\t\t\t\t\t\t\t\t<div class=\"card-body\">

\t\t\t\t\t\t                \t<!-- Progress counter -->
\t\t\t\t\t\t\t\t\t\t\t<div class=\"svg-center\" id=\"hours-available-progress\"></div>
\t\t\t\t\t\t\t\t\t\t\t<!-- /progress counter -->


\t\t\t\t\t\t\t\t\t\t\t<!-- Bars -->
\t\t\t\t\t\t\t\t\t\t\t<div id=\"hours-available-bars\"></div>
\t\t\t\t\t\t\t\t\t\t\t<!-- /bars -->

\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- /available hours -->

\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"col-sm-6\">

\t\t\t\t\t\t\t\t\t<!-- Productivity goal -->
\t\t\t\t\t\t\t\t\t<div class=\"card text-center\">
\t\t\t\t\t\t\t\t\t\t<div class=\"card-body\">

\t\t\t\t\t\t\t\t\t\t\t<!-- Progress counter -->
\t\t\t\t\t\t\t\t\t\t\t<div class=\"svg-center\" id=\"goal-progress\"></div>
\t\t\t\t\t\t\t\t\t\t\t<!-- /progress counter -->

\t\t\t\t\t\t\t\t\t\t\t<!-- Bars -->
\t\t\t\t\t\t\t\t\t\t\t<div id=\"goal-bars\"></div>
\t\t\t\t\t\t\t\t\t\t\t<!-- /bars -->

\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- /productivity goal -->

\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- /progress counters -->


\t\t\t\t\t\t\t<!-- Daily sales -->
\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t<div class=\"card-header d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t<h5 class=\"mb-0\">Daily sales stats</h5>
\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center ms-auto\">
\t\t\t\t\t\t\t\t\t\t<span class=\"fw-bold text-success\">\$4,378</span>
\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown d-inline-flex ms-3\">
\t\t\t\t                \t\t\t<a href=\"#\" class=\"text-body d-inline-flex align-items-center dropdown-toggle\" data-bs-toggle=\"dropdown\">
\t\t\t\t                \t\t\t\t<i class=\"ph-gear\"></i>
\t\t\t\t                \t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-end\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-arrows-clockwise me-2\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\tUpdate data
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-list-dashes me-2\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\tDetailed log
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-chart-line me-2\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\tStatistics
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-eraser me-2\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\tClear list
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t                \t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t<div class=\"chart\" id=\"sales-heatmap\"></div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t\t\t\t\t<table class=\"table text-nowrap\">
\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"w-100\">Application</th>
\t\t\t\t\t\t\t\t\t\t\t\t<th>Time</th>
\t\t\t\t\t\t\t\t\t\t\t\t<th>Price</th>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"d-inline-block me-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"../../../assets/images/demo/logos/1.svg\" alt=\"\" height=\"36\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-body fw-semibold letter-icon-title\">Sigma application</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-muted fs-sm\">New order</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-muted\">06:28 pm</span>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>\$49.90</strong>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"d-inline-block me-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"../../../assets/images/demo/logos/2.svg\" alt=\"\" height=\"36\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-body fw-semibold letter-icon-title\">Alpha application</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-muted fs-sm\">Renewal</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-muted\">04:52 pm</span>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>\$90.50</strong>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"d-inline-block me-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"../../../assets/images/demo/logos/3.svg\" alt=\"\" height=\"36\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-body fw-semibold letter-icon-title\">Delta application</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-muted fs-sm\">Support</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-muted\">01:26 pm</span>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>\$60.00</strong>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"d-inline-block me-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"../../../assets/images/demo/logos/4.svg\" alt=\"\" height=\"36\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-body fw-semibold letter-icon-title\">Omega application</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-muted fs-sm\">Support</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-muted\">11:46 am</span>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>\$55.00</strong>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"d-inline-block me-3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"../../../assets/images/demo/logos/2.svg\" alt=\"\" height=\"36\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-body fw-semibold letter-icon-title\">Alpha application</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-muted fs-sm\">Renewal</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-muted\">10:29 am</span>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t<strong>\$90.50</strong>
\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- /daily sales -->


\t\t\t\t\t\t\t<!-- My messages -->
\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t<div class=\"card-header d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t<h5 class=\"mb-0\">My messages</h5>
\t\t\t\t\t\t\t\t\t<div class=\"ms-auto\">
\t\t\t\t\t\t\t\t\t\t<span><i class=\"ph-clock-counter-clockwise me-1\"></i> Jul 7, 10:30</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-success ms-3\">Online</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<!-- Numbers -->
\t\t\t\t\t\t\t\t<div class=\"card-body pb-0\">
\t\t\t\t\t\t\t\t\t<div class=\"row text-center\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-4\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"mb-0\">2,345</h5>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-muted fs-sm\">this week</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"col-4\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"mb-0\">3,568</h5>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-muted fs-sm\">this month</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"col-4\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<h5 class=\"mb-0\">32,693</h5>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"text-muted fs-sm\">all messages</span>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- /numbers -->


\t\t\t\t\t\t\t\t<!-- Area chart -->
\t\t\t\t\t\t\t\t<div id=\"messages-stats\"></div>
\t\t\t\t\t\t\t\t<!-- /area chart -->


\t\t\t\t\t\t\t\t<!-- Tabs -->
\t\t\t                \t<ul class=\"nav nav-tabs nav-tabs-underline nav-justified\">
\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#messages-tue\" class=\"nav-link active\" data-bs-toggle=\"tab\">
\t\t\t\t\t\t\t\t\t\t\tTuesday
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#messages-mon\" class=\"nav-link\" data-bs-toggle=\"tab\">
\t\t\t\t\t\t\t\t\t\t\tMonday
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#messages-fri\" class=\"nav-link\" data-bs-toggle=\"tab\">
\t\t\t\t\t\t\t\t\t\t\tFriday
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t<!-- /tabs -->


\t\t\t\t\t\t\t\t<!-- Tabs content -->
\t\t\t\t\t\t\t\t<div class=\"tab-content card-body\">
\t\t\t\t\t\t\t\t\t<div class=\"tab-pane active fade show\" id=\"messages-tue\">
\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-start mb-3\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"status-indicator-container me-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"../../../assets/images/demo/users/face10.jpg\" class=\"rounded-circle\" width=\"40\" jeight=\"40\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"status-indicator bg-success\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-yellow text-black position-absolute top-0 start-100 translate-middle rounded-pill\">5</span>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-fill\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fw-semibold\"><a href=\"#\">James Alexander</a></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fs-sm text-muted\">14:58</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\tWho knows, maybe that would be the best thing for me...
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-start mb-3\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"status-indicator-container me-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"../../../assets/images/demo/users/face3.jpg\" class=\"rounded-circle\" width=\"40\" jeight=\"40\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"status-indicator bg-danger\"></span>
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-yellow text-black position-absolute top-0 start-100 translate-middle rounded-pill\">4</span>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-fill\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fw-semibold\"><a href=\"#\">Margo Baker</a></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fs-sm text-muted\">12:16</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\tThat was something he was unable to do because...
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-start mb-3\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"status-indicator-container me-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"../../../assets/images/demo/users/face24.jpg\" class=\"rounded-circle\" width=\"40\" jeight=\"40\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"status-indicator bg-danger\"></span>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-fill\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fw-semibold\"><a href=\"#\">Jeremy Victorino</a></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fs-sm text-muted\">22:48</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\tBut that would be extremely strained and suspicious...
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-start mb-3\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"status-indicator-container me-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"../../../assets/images/demo/users/face4.jpg\" class=\"rounded-circle\" width=\"40\" jeight=\"40\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"status-indicator bg-danger\"></span>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-fill\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fw-semibold\"><a href=\"#\">Beatrix Diaz</a></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fs-sm text-muted\">Tue</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\tWhat a strenuous career it is that I've chosen...
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-start\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"status-indicator-container me-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"../../../assets/images/demo/users/face25.jpg\" class=\"rounded-circle\" width=\"40\" jeight=\"40\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"status-indicator bg-success\"></span>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-fill\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fw-semibold\"><a href=\"#\">Beatrix Diaz</a></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fs-sm text-muted\">Tue</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\tAmidst roadrunner distantly pompously where...
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"tab-pane fade\" id=\"messages-mon\">
\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-start mb-3\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"status-indicator-container me-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"../../../assets/images/demo/users/face2.jpg\" class=\"rounded-circle\" width=\"40\" jeight=\"40\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"status-indicator bg-success\"></span>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-fill\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fw-semibold\"><a href=\"#\">Isak Temes</a></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fs-sm text-muted\">Tue, 19:58</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\tReasonable palpably rankly expressly grimy...
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-start mb-3\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"status-indicator-container me-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"../../../assets/images/demo/users/face7.jpg\" class=\"rounded-circle\" width=\"40\" jeight=\"40\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"status-indicator bg-warning\"></span>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-fill\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fw-semibold\"><a href=\"#\">Vittorio Cosgrove</a></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fs-sm text-muted\">Tue, 16:35</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\tArguably therefore more unexplainable fumed...
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-start mb-3\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"status-indicator-container me-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"../../../assets/images/demo/users/face18.jpg\" class=\"rounded-circle\" width=\"40\" jeight=\"40\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"status-indicator bg-warning\"></span>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-fill\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fw-semibold\"><a href=\"#\">Hilary Talaugon</a></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fs-sm text-muted\">Tue, 12:16</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\tNicely unlike porpoise a kookaburra past more...
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-start mb-3\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"status-indicator-container me-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"../../../assets/images/demo/users/face14.jpg\" class=\"rounded-circle\" width=\"40\" jeight=\"40\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"status-indicator bg-success\"></span>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-fill\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fw-semibold\"><a href=\"#\">Bobbie Seber</a></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fs-sm text-muted\">Tue, 09:20</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\tBefore visual vigilantly fortuitous tortoise...
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-start\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"status-indicator-container me-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"../../../assets/images/demo/users/face8.jpg\" class=\"rounded-circle\" width=\"40\" jeight=\"40\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"status-indicator bg-success\"></span>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-fill\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fw-semibold\"><a href=\"#\">Walther Laws</a></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fs-sm text-muted\">Tue, 03:29</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\tFar affecting more leered unerringly dishonest...
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"tab-pane fade\" id=\"messages-fri\">
\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-start mb-3\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"status-indicator-container me-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"../../../assets/images/demo/users/face15.jpg\" class=\"rounded-circle\" width=\"40\" jeight=\"40\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"status-indicator bg-danger\"></span>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-fill\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fw-semibold\"><a href=\"#\">Owen Stretch</a></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fs-sm text-muted\">Fri, 18:12</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\tTardy rattlesnake seal raptly earthworm...
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-start mb-3\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"status-indicator-container me-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"../../../assets/images/demo/users/face12.jpg\" class=\"rounded-circle\" width=\"40\" jeight=\"40\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"status-indicator bg-warning\"></span>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-fill\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fw-semibold\"><a href=\"#\">Jenilee Mcnair</a></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fs-sm text-muted\">Fri, 14:03</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\tSince hello dear pushed amid darn trite...
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-start mb-3\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"status-indicator-container me-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"../../../assets/images/demo/users/face22.jpg\" class=\"rounded-circle\" width=\"40\" jeight=\"40\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"status-indicator bg-danger\"></span>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-fill\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fw-semibold\"><a href=\"#\">Alaster Jain</a></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fs-sm text-muted\">Fri, 13:59</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\tDachshund cardinal dear next jeepers well...
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-start mb-3\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"status-indicator-container me-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"../../../assets/images/demo/users/face24.jpg\" class=\"rounded-circle\" width=\"40\" jeight=\"40\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"status-indicator bg-secondary\"></span>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-fill\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fw-semibold\"><a href=\"#\">Sigfrid Thisted</a></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fs-sm text-muted\">Fri, 09:26</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\tLighted wolf yikes less lemur crud grunted...
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-start\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"status-indicator-container me-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"../../../assets/images/demo/users/face17.jpg\" class=\"rounded-circle\" width=\"40\" jeight=\"40\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"status-indicator bg-secondary\"></span>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"flex-fill\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"fw-semibold\"><a href=\"#\">Sherilyn Mckee</a></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"fs-sm text-muted\">Fri, 06:38</span>
\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\tLess unicorn a however careless husky...
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<!-- /tabs content -->

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- /my messages -->


\t\t\t\t\t\t\t<!-- Daily financials -->
\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t<div class=\"card-header d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t<h5 class=\"mb-0\">Daily financials</h5>
\t\t\t\t\t\t\t\t\t<div class=\"ms-auto\">
\t\t\t\t\t\t\t\t\t\t<label class=\"form-check form-switch form-check-reverse\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" class=\"form-check-input\" id=\"realtime\" checked>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"form-check-label\">Realtime</span>
\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t<div class=\"chart mb-3\" id=\"bullets\"></div>

\t\t\t\t\t\t\t\t\t<div class=\"d-flex mb-3\">
\t\t\t\t\t\t\t\t\t\t<div class=\"me-3\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"bg-pink bg-opacity-10 text-pink lh-1 rounded-pill p-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-chart-line\"></i>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"flex-fill\">
\t\t\t\t\t\t\t\t\t\t\tStats for July, 6: <span class=\"fw-semibold\">1938</span> orders, \$4220 revenue
\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-muted fs-sm\">2 hours ago</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"d-flex mb-3\">
\t\t\t\t\t\t\t\t\t\t<div class=\"me-3\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"bg-success bg-opacity-10 text-success lh-1 rounded-pill p-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-check\"></i>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"flex-fill\">
\t\t\t\t\t\t\t\t\t\t\tInvoices <a href=\"#\">#4732</a> and <a href=\"#\">#4734</a> have been paid
\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-muted fs-sm\">Dec 18, 18:36</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"d-flex mb-3\">
\t\t\t\t\t\t\t\t\t\t<div class=\"me-3\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"bg-primary bg-opacity-10 text-primary lh-1 rounded-pill p-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-users\"></i>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"flex-fill\">
\t\t\t\t\t\t\t\t\t\t\tAffiliate commission for June has been paid
\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-muted fs-sm\">36 minutes ago</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"d-flex mb-3\">
\t\t\t\t\t\t\t\t\t\t<div class=\"me-3\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"bg-warning bg-opacity-10 text-warning lh-1 rounded-pill p-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-arrow-counter-clockwise\"></i>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"flex-fill\">
\t\t\t\t\t\t\t\t\t\t\tOrder <a href=\"#\">#37745</a> from July, 1st has been refunded
\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-muted fs-sm\">4 minutes ago</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t\t\t\t<div class=\"me-3\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"bg-teal bg-opacity-10 text-teal lh-1 rounded-pill p-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-arrow-bend-double-up-right\"></i>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"flex-fill\">
\t\t\t\t\t\t\t\t\t\t\tInvoice <a href=\"#\">#4769</a> has been sent to <a href=\"#\">Robert Smith</a>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-muted fs-sm\">Dec 12, 05:46</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- /daily financials -->

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- /dashboard content -->

\t\t\t\t</div>
\t\t\t\t<!-- /content area -->
\t\t\t</div>

\t\t\t\t<!-- Footer -->
\t\t\t\t<div class=\"navbar navbar-sm navbar-footer border-top\">
\t\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t\t\t<span>&copy; 2022 <a href=\"https://themeforest.net/item/limitless-responsive-web-application-kit/13080328\">Limitless Web App Kit</a></span>

\t\t\t\t\t\t<ul class=\"nav\">
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a href=\"https://kopyov.ticksy.com/\" class=\"navbar-nav-link navbar-nav-link-icon rounded\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center mx-md-1\">
\t\t\t\t\t\t\t\t\t\t<i class=\"ph-lifebuoy\"></i>
\t\t\t\t\t\t\t\t\t\t<span class=\"d-none d-md-inline-block ms-2\">Support</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item ms-md-1\">
\t\t\t\t\t\t\t\t<a href=\"https://demo.interface.club/limitless/demo/Documentation/index.html\" class=\"navbar-nav-link navbar-nav-link-icon rounded\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center mx-md-1\">
\t\t\t\t\t\t\t\t\t\t<i class=\"ph-file-text\"></i>
\t\t\t\t\t\t\t\t\t\t<span class=\"d-none d-md-inline-block ms-2\">Docs</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item ms-md-1\">
\t\t\t\t\t\t\t\t<a href=\"https://themeforest.net/item/limitless-responsive-web-application-kit/13080328?ref=kopyov\" class=\"navbar-nav-link navbar-nav-link-icon text-primary bg-primary bg-opacity-10 fw-semibold rounded\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center mx-md-1\">
\t\t\t\t\t\t\t\t\t\t<i class=\"ph-shopping-cart\"></i>
\t\t\t\t\t\t\t\t\t\t<span class=\"d-none d-md-inline-block ms-2\">Purchase</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- /footer -->

\t\t\t</div>
\t\t\t<!-- /inner content -->

\t\t</div>
\t\t<!-- /main content -->

\t</div>
\t<!-- /page content -->


\t<!-- Notifications -->
\t<div class=\"offcanvas offcanvas-end\" tabindex=\"-1\" id=\"notifications\">
\t\t<div class=\"offcanvas-header py-0\">
\t\t\t<h5 class=\"offcanvas-title py-3\">Activity</h5>
\t\t\t<button type=\"button\" class=\"btn btn-light btn-sm btn-icon border-transparent rounded-pill\" data-bs-dismiss=\"offcanvas\">
\t\t\t\t<i class=\"ph-x\"></i>
\t\t\t</button>
\t\t</div>

\t\t<div class=\"offcanvas-body p-0\">
\t\t\t<div class=\"bg-light fw-medium py-2 px-3\">New notifications</div>
\t\t\t<div class=\"p-3\">
\t\t\t\t<div class=\"d-flex align-items-start mb-3\">
\t\t\t\t\t<a href=\"#\" class=\"status-indicator-container me-3\">
\t\t\t\t\t\t<img src=\"../../../assets/images/demo/users/face1.jpg\" class=\"w-40px h-40px rounded-pill\" alt=\"\">
\t\t\t\t\t\t<span class=\"status-indicator bg-success\"></span>
\t\t\t\t\t</a>
\t\t\t\t\t<div class=\"flex-fill\">
\t\t\t\t\t\t<a href=\"#\" class=\"fw-semibold\">James</a> has completed the task <a href=\"#\">Submit documents</a> from <a href=\"#\">Onboarding</a> list

\t\t\t\t\t\t<div class=\"bg-light rounded p-2 my-2\">
\t\t\t\t\t\t\t<label class=\"form-check ms-1\">
\t\t\t\t\t\t\t\t<input type=\"checkbox\" class=\"form-check-input\" checked disabled>
\t\t\t\t\t\t\t\t<del class=\"form-check-label\">Submit personal documents</del>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"fs-sm text-muted mt-1\">2 hours ago</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"d-flex align-items-start mb-3\">
\t\t\t\t\t<a href=\"#\" class=\"status-indicator-container me-3\">
\t\t\t\t\t\t<img src=\"../../../assets/images/demo/users/face3.jpg\" class=\"w-40px h-40px rounded-pill\" alt=\"\">
\t\t\t\t\t\t<span class=\"status-indicator bg-warning\"></span>
\t\t\t\t\t</a>
\t\t\t\t\t<div class=\"flex-fill\">
\t\t\t\t\t\t<a href=\"#\" class=\"fw-semibold\">Margo</a> has added 4 users to <span class=\"fw-semibold\">Customer enablement</span> channel

\t\t\t\t\t\t<div class=\"d-flex my-2\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"status-indicator-container me-1\">
\t\t\t\t\t\t\t\t<img src=\"../../../assets/images/demo/users/face10.jpg\" class=\"w-32px h-32px rounded-pill\" alt=\"\">
\t\t\t\t\t\t\t\t<span class=\"status-indicator bg-danger\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a href=\"#\" class=\"status-indicator-container me-1\">
\t\t\t\t\t\t\t\t<img src=\"../../../assets/images/demo/users/face11.jpg\" class=\"w-32px h-32px rounded-pill\" alt=\"\">
\t\t\t\t\t\t\t\t<span class=\"status-indicator bg-success\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a href=\"#\" class=\"status-indicator-container me-1\">
\t\t\t\t\t\t\t\t<img src=\"../../../assets/images/demo/users/face12.jpg\" class=\"w-32px h-32px rounded-pill\" alt=\"\">
\t\t\t\t\t\t\t\t<span class=\"status-indicator bg-success\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a href=\"#\" class=\"status-indicator-container me-1\">
\t\t\t\t\t\t\t\t<img src=\"../../../assets/images/demo/users/face13.jpg\" class=\"w-32px h-32px rounded-pill\" alt=\"\">
\t\t\t\t\t\t\t\t<span class=\"status-indicator bg-success\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-light btn-icon d-inline-flex align-items-center justify-content-center w-32px h-32px rounded-pill p-0\">
\t\t\t\t\t\t\t\t<i class=\"ph-plus ph-sm\"></i>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"fs-sm text-muted mt-1\">3 hours ago</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"d-flex align-items-start\">
\t\t\t\t\t<div class=\"me-3\">
\t\t\t\t\t\t<div class=\"bg-warning bg-opacity-10 text-warning rounded-pill\">
\t\t\t\t\t\t\t<i class=\"ph-warning p-2\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"flex-1\">
\t\t\t\t\t\tSubscription <a href=\"#\">#466573</a> from 10.12.2021 has been cancelled. Refund case <a href=\"#\">#4492</a> created
\t\t\t\t\t\t<div class=\"fs-sm text-muted mt-1\">4 hours ago</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"bg-light fw-medium py-2 px-3\">Older notifications</div>
\t\t\t<div class=\"p-3\">
\t\t\t\t<div class=\"d-flex align-items-start mb-3\">
\t\t\t\t\t<a href=\"#\" class=\"status-indicator-container me-3\">
\t\t\t\t\t\t<img src=\"../../../assets/images/demo/users/face25.jpg\" class=\"w-40px h-40px rounded-pill\" alt=\"\">
\t\t\t\t\t\t<span class=\"status-indicator bg-success\"></span>
\t\t\t\t\t</a>
\t\t\t\t\t<div class=\"flex-fill\">
\t\t\t\t\t\t<a href=\"#\" class=\"fw-semibold\">Nick</a> requested your feedback and approval in support request <a href=\"#\">#458</a>

\t\t\t\t\t\t<div class=\"my-2\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-success btn-sm me-1\">
\t\t\t\t\t\t\t\t<i class=\"ph-checks ph-sm me-1\"></i>
\t\t\t\t\t\t\t\tApprove
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-light btn-sm\">
\t\t\t\t\t\t\t\tReview
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"fs-sm text-muted mt-1\">3 days ago</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"d-flex align-items-start mb-3\">
\t\t\t\t\t<a href=\"#\" class=\"status-indicator-container me-3\">
\t\t\t\t\t\t<img src=\"../../../assets/images/demo/users/face24.jpg\" class=\"w-40px h-40px rounded-pill\" alt=\"\">
\t\t\t\t\t\t<span class=\"status-indicator bg-grey\"></span>
\t\t\t\t\t</a>
\t\t\t\t\t<div class=\"flex-fill\">
\t\t\t\t\t\t<a href=\"#\" class=\"fw-semibold\">Mike</a> added 1 new file(s) to <a href=\"#\">Product management</a> project

\t\t\t\t\t\t<div class=\"bg-light rounded p-2 my-2\">
\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t<div class=\"me-2\">
\t\t\t\t\t\t\t\t\t<img src=\"../../../assets/images/icons/pdf.svg\" width=\"34\" height=\"34\" alt=\"\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"flex-fill\">
\t\t\t\t\t\t\t\t\tnew_contract.pdf
\t\t\t\t\t\t\t\t\t<div class=\"fs-sm text-muted\">112KB</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"ms-2\">
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-flat-dark text-body btn-icon btn-sm border-transparent rounded-pill\">
\t\t\t\t\t\t\t\t\t\t<i class=\"ph-arrow-down\"></i>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"fs-sm text-muted mt-1\">1 day ago</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"d-flex align-items-start mb-3\">
\t\t\t\t\t<div class=\"me-3\">
\t\t\t\t\t\t<div class=\"bg-success bg-opacity-10 text-success rounded-pill\">
\t\t\t\t\t\t\t<i class=\"ph-calendar-plus p-2\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"flex-fill\">
\t\t\t\t\t\tAll hands meeting will take place coming Thursday at 13:45.

\t\t\t\t\t\t<div class=\"my-2\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-primary btn-sm\">
\t\t\t\t\t\t\t\t<i class=\"ph-calendar-plus ph-sm me-1\"></i>
\t\t\t\t\t\t\t\tAdd to calendar
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"fs-sm text-muted mt-1\">2 days ago</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"d-flex align-items-start mb-3\">
\t\t\t\t\t<a href=\"#\" class=\"status-indicator-container me-3\">
\t\t\t\t\t\t<img src=\"../../../assets/images/demo/users/face4.jpg\" class=\"w-40px h-40px rounded-pill\" alt=\"\">
\t\t\t\t\t\t<span class=\"status-indicator bg-danger\"></span>
\t\t\t\t\t</a>
\t\t\t\t\t<div class=\"flex-fill\">
\t\t\t\t\t\t<a href=\"#\" class=\"fw-semibold\">Christine</a> commented on your community <a href=\"#\">post</a> from 10.12.2021

\t\t\t\t\t\t<div class=\"fs-sm text-muted mt-1\">2 days ago</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"d-flex align-items-start mb-3\">
\t\t\t\t\t<div class=\"me-3\">
\t\t\t\t\t\t<div class=\"bg-primary bg-opacity-10 text-primary rounded-pill\">
\t\t\t\t\t\t\t<i class=\"ph-users-four p-2\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"flex-fill\">
\t\t\t\t\t\t<span class=\"fw-semibold\">HR department</span> requested you to complete internal survey by Friday

\t\t\t\t\t\t<div class=\"fs-sm text-muted mt-1\">3 days ago</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t<div class=\"spinner-border\" role=\"status\">
\t\t\t\t\t\t<span class=\"visually-hidden\">Loading...</span>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<!-- /notifications -->


\t<!-- Demo config -->
\t<div class=\"offcanvas offcanvas-end\" tabindex=\"-1\" id=\"demo_config\">
\t\t<div class=\"position-absolute top-50 end-100 visible\">
\t\t\t<button type=\"button\" class=\"btn btn-primary btn-icon translate-middle-y rounded-end-0\" data-bs-toggle=\"offcanvas\" data-bs-target=\"#demo_config\">
\t\t\t\t<i class=\"ph-gear\"></i>
\t\t\t</button>
\t\t</div>

\t\t<div class=\"offcanvas-header border-bottom py-0\">
\t\t\t<h5 class=\"offcanvas-title py-3\">Demo configuration</h5>
\t\t\t<button type=\"button\" class=\"btn btn-light btn-sm btn-icon border-transparent rounded-pill\" data-bs-dismiss=\"offcanvas\">
\t\t\t\t<i class=\"ph-x\"></i>
\t\t\t</button>
\t\t</div>

\t\t<div class=\"offcanvas-body\">
\t\t\t<div class=\"fw-semibold mb-2\">Color mode</div>
\t\t\t<div class=\"list-group mb-3\">
\t\t\t\t<label class=\"list-group-item list-group-item-action form-check border-width-1 rounded mb-2\">
\t\t\t\t\t<div class=\"d-flex flex-fill my-1\">
\t\t\t\t\t\t<div class=\"form-check-label d-flex me-2\">
\t\t\t\t\t\t\t<i class=\"ph-sun ph-lg me-3\"></i>
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<span class=\"fw-bold\">Light theme</span>
\t\t\t\t\t\t\t\t<div class=\"fs-sm text-muted\">Set light theme or reset to default</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<input type=\"radio\" class=\"form-check-input cursor-pointer ms-auto\" name=\"main-theme\" value=\"light\" checked>
\t\t\t\t\t</div>
\t\t\t\t</label>

\t\t\t\t<label class=\"list-group-item list-group-item-action form-check border-width-1 rounded mb-2\">
\t\t\t\t\t<div class=\"d-flex flex-fill my-1\">
\t\t\t\t\t\t<div class=\"form-check-label d-flex me-2\">
\t\t\t\t\t\t\t<i class=\"ph-moon ph-lg me-3\"></i>
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<span class=\"fw-bold\">Dark theme</span>
\t\t\t\t\t\t\t\t<div class=\"fs-sm text-muted\">Switch to dark theme</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<input type=\"radio\" class=\"form-check-input cursor-pointer ms-auto\" name=\"main-theme\" value=\"dark\">
\t\t\t\t\t</div>
\t\t\t\t</label>

\t\t\t\t<label class=\"list-group-item list-group-item-action form-check border-width-1 rounded mb-0\">
\t\t\t\t\t<div class=\"d-flex flex-fill my-1\">
\t\t\t\t\t\t<div class=\"form-check-label d-flex me-2\">
\t\t\t\t\t\t\t<i class=\"ph-translate ph-lg me-3\"></i>
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<span class=\"fw-bold\">Auto theme</span>
\t\t\t\t\t\t\t\t<div class=\"fs-sm text-muted\">Set theme based on system mode</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<input type=\"radio\" class=\"form-check-input cursor-pointer ms-auto\" name=\"main-theme\" value=\"auto\">
\t\t\t\t\t</div>
\t\t\t\t</label>
\t\t\t</div>

\t\t\t<div class=\"fw-semibold mb-2\">Direction</div>
\t\t\t<div class=\"list-group mb-3\">
\t\t\t\t<label class=\"list-group-item list-group-item-action form-check border-width-1 rounded mb-0\">
\t\t\t\t\t<div class=\"d-flex flex-fill my-1\">
\t\t\t\t\t\t<div class=\"form-check-label d-flex me-2\">
\t\t\t\t\t\t\t<i class=\"ph-translate ph-lg me-3\"></i>
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<span class=\"fw-bold\">RTL direction</span>
\t\t\t\t\t\t\t\t<div class=\"text-muted\">Toggle between LTR and RTL</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<input type=\"checkbox\" name=\"layout-direction\" value=\"rtl\" class=\"form-check-input cursor-pointer m-0 ms-auto\">
\t\t\t\t\t</div>
\t\t\t\t</label>
\t\t\t</div>

\t\t\t<div class=\"fw-semibold mb-2\">Layouts</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t<a href=\"index.html\" class=\"d-block mb-3\">
\t\t\t\t\t\t<img src=\"https://demo.interface.club/limitless/assets/images/layouts/layout_1.png\" class=\"img-fluid img-thumbnail bg-primary bg-opacity-20 border-primary\" alt=\"\">
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t<a href=\"../../layout_2/full/index.html\" class=\"d-block mb-3\">
\t\t\t\t\t\t<img src=\"https://demo.interface.club/limitless/assets/images/layouts/layout_2.png\" class=\"img-fluid img-thumbnail\" alt=\"\">
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t<a href=\"../../layout_3/full/index.html\" class=\"d-block mb-3\">
\t\t\t\t\t\t<img src=\"https://demo.interface.club/limitless/assets/images/layouts/layout_3.png\" class=\"img-fluid img-thumbnail\" alt=\"\">
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t<a href=\"../../layout_4/full/index.html\" class=\"d-block mb-3\">
\t\t\t\t\t\t<img src=\"https://demo.interface.club/limitless/assets/images/layouts/layout_4.png\" class=\"img-fluid img-thumbnail\" alt=\"\">
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t<a href=\"../../layout_5/full/index.html\" class=\"d-block mb-3\">
\t\t\t\t\t\t<img src=\"https://demo.interface.club/limitless/assets/images/layouts/layout_5.png\" class=\"img-fluid img-thumbnail\" alt=\"\">
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t<a href=\"../../layout_6/full/index.html\" class=\"d-block\">
\t\t\t\t\t\t<img src=\"https://demo.interface.club/limitless/assets/images/layouts/layout_6.png\" class=\"img-fluid img-thumbnail\" alt=\"\">
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"border-top text-center py-2 px-3\">
\t\t\t<a href=\"https://themeforest.net/item/limitless-responsive-web-application-kit/13080328?ref=kopyov\" class=\"btn btn-yellow fw-semibold w-100 my-1\" target=\"_blank\">
\t\t\t\t<i class=\"ph-shopping-cart me-2\"></i>
\t\t\t\tPurchase Limitless
\t\t\t</a>
\t\t</div>
\t</div>
\t<!-- /demo config -->

</body>
</html>", "index.html.twig", "C:\\xampp\\htdocs\\projettt\\proj1\\templates\\index.html.twig");
    }
}
