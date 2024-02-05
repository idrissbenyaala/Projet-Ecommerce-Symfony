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

/* user/index.html.twig */
class __TwigTemplate_7c0d5f86860eab9e61895b2413c13a6d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "user index";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
<!DOCTYPE html>
<html lang=\"en\" dir=\"ltr\">
<head>
\t<meta charset=\"utf-8\">
\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
\t<title>Limitless - Responsive Web Application Kit by Eugene Kopyov</title>

\t<!-- Global stylesheets -->
\t<link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/fonts/inter/inter.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
\t<link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/icons/phosphor/styles.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
\t<link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/ltr/all.min.css"), "html", null, true);
        echo "\" id=\"stylesheet\" rel=\"stylesheet\" type=\"text/css\">
\t<!-- /global stylesheets -->

\t<!-- Core JS files -->
\t<script src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/demo/demo_configurator.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/bootstrap/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
\t<!-- /core JS files -->

\t<!-- Theme JS files -->
\t<script src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/tables/gridjs/gridjs.min.js"), "html", null, true);
        echo "\"></script>

\t<script src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/app.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/demo/pages/gridjs_customizing.js"), "html", null, true);
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
\t\t\t\t
\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-scrollable-sm wmin-lg-600 p-0\">
\t\t\t\t\t\t<div class=\"d-flex align-items-center border-bottom p-3\">
\t\t\t\t\t\t\t";
        // line 69
        echo "\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"row row-cols-1 row-cols-sm-2 g-0\">
\t\t\t\t\t\t\t";
        // line 81
        echo "
\t\t\t\t\t\t\t";
        // line 91
        echo "
\t\t\t\t\t\t\t";
        // line 101
        echo "
\t\t\t\t\t\t\t";
        // line 111
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</li>

\t\t\t\t<li class=\"nav-item nav-item-dropdown-lg dropdown ms-lg-2\">
\t\t\t\t\t";
        // line 120
        echo "
\t\t\t\t\t<div class=\"dropdown-menu wmin-lg-400 p-0\">
\t\t\t\t\t\t";
        // line 133
        echo "
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

\t\t\t\t\t\t\t\t";
        // line 157
        echo "\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t";
        // line 171
        echo "
\t\t\t\t\t\t\t";
        // line 183
        echo "
\t\t\t\t\t\t\t";
        // line 195
        echo "
\t\t\t\t\t\t\t";
        // line 207
        echo "\t\t\t\t\t\t</div>

\t\t\t\t\t\t";
        // line 219
        echo "\t\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t</ul>

\t\t\t<div class=\"navbar-collapse justify-content-center flex-lg-1 order-2 order-lg-1 collapse\" id=\"navbar_search\">
\t\t\t\t<div class=\"navbar-search flex-fill position-relative mt-2 mt-lg-0 mx-lg-3\">
\t\t\t\t\t<div class=\"form-control-feedback form-control-feedback-start flex-grow-1\" data-color-theme=\"dark\">
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"dropdown-menu w-100\" data-color-theme=\"light\">
\t\t\t\t\t\t\t";
        // line 234
        echo "
\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>

\t\t\t\t\t\t\t<div class=\"dropdown-menu-scrollable-lg\">
\t\t\t\t\t\t\t\t";
        // line 245
        echo "
\t\t\t\t\t\t\t\t<div class=\"dropdown-item cursor-pointer\">
\t\t\t\t\t\t\t\t\t";
        // line 250
        echo "
\t\t\t\t\t\t\t\t\t";
        // line 255
        echo "
\t\t\t\t\t\t\t\t\t";
        // line 261
        echo "\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t";
        // line 279
        echo "
\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>

\t\t\t\t\t\t\t\t";
        // line 294
        echo "
\t\t\t\t\t\t\t\t\t";
        // line 306
        echo "
\t\t\t\t\t\t\t\t";
        // line 323
        echo "
\t\t\t\t\t\t\t\t";
        // line 340
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t";
        // line 347
        echo "
\t\t\t\t\t<div class=\"dropdown-menu w-100 p-3\">
\t\t\t\t\t\t<div class=\"d-flex align-items-center mb-3\">
\t\t\t\t\t\t\t<h6 class=\"mb-0\">Search options</h6>
\t\t\t\t\t\t\t<a href=\"#\" class=\"text-body rounded-pill ms-auto\">
\t\t\t\t\t\t\t\t<i class=\"ph-clock-counter-clockwise\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t";
        // line 371
        echo "
\t\t\t\t\t\t";
        // line 399
        echo "
\t\t\t\t\t\t";
        // line 408
        echo "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<ul class=\"nav flex-row justify-content-end order-1 order-lg-2\">
\t\t\t\t";
        // line 419
        echo "
\t\t\t\t<li class=\"nav-item nav-item-dropdown-lg dropdown ms-lg-2\">
\t\t\t\t\t<a href=\"#\" class=\"navbar-nav-link align-items-center rounded-pill p-1\" data-bs-toggle=\"dropdown\">
\t\t\t\t\t\t<div class=\"status-indicator-container\">
\t\t\t\t\t\t\t";
        // line 424
        echo "\t\t\t\t\t\t\t<span class=\"status-indicator bg-success\"></span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<span class=\"d-none d-lg-inline-block mx-lg-2\">";
        // line 426
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 426, $this->source); })()), "user", [], "any", false, false, false, 426), "firstname", [], "any", false, false, false, 426), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 426, $this->source); })()), "user", [], "any", false, false, false, 426), "lastname", [], "any", false, false, false, 426), "html", null, true);
        echo " </span>
\t\t\t\t\t</a>

\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-end\">
\t\t\t\t\t\t<a href=\"";
        // line 430
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\" class=\"dropdown-item\">
\t\t\t\t\t\t\t<i class=\"ph-user-circle me-2\"></i>
\t\t\t\t\t\t\tChange account
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t<i class=\"ph-currency-circle-dollar me-2\"></i>
\t\t\t\t\t\t\tMy subscription
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t<i class=\"ph-shopping-cart me-2\"></i>
\t\t\t\t\t\t\tMy orders
\t\t\t\t\t\t</a>
\t\t\t\t\t\t";
        // line 447
        echo "\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t<i class=\"ph-gear me-2\"></i>
\t\t\t\t\t\t\tAccount settings
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"";
        // line 452
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\" class=\"dropdown-item\">
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
\t\t\t\t\t\t\t\t<div class=\"sidebar-section\">
\t\t\t\t\t<ul class=\"nav nav-sidebar\" data-nav-type=\"accordion\">

\t\t\t\t\t\t<!-- Main -->
\t\t\t\t\t\t<li class=\"nav-item-header pt-0\">
\t\t\t\t\t\t\t<div class=\"text-uppercase fs-sm lh-sm opacity-50 sidebar-resize-hide\">Main</div>
\t\t\t\t\t\t\t<i class=\"ph-dots-three sidebar-resize-show\"></i>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a href=\"";
        // line 502
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin");
        echo "\" class=\"nav-link\">
\t\t\t\t\t\t\t\t<i class=\"ph-house\"></i>
\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\tDashboard
\t\t\t\t\t\t\t\t\t<span class=\"d-block fw-normal opacity-50\">No pending orders</span>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\"><a href=\"";
        // line 510
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_product_index");
        echo "\" class=\"nav-link \"><i class=\"ph-layout\"></i>Products</a></li>
\t\t\t\t\t<li class=\"nav-item\"><a href=\"";
        // line 511
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_category_index");
        echo "\" class=\"nav-link \"><i class=\"ph-layout\"></i>Categories</a></li>
\t\t\t\t\t<li class=\"nav-item\"><a href=\"";
        // line 512
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_user_index");
        echo "\" class=\"nav-link active\"><i class=\"ph-layout\"></i>Users</a></li>
\t\t\t\t\t<li class=\"nav-item\"><a href=\"";
        // line 513
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_command_index");
        echo "\" class=\"nav-link \"><i class=\"ph-layout\"></i>Commands</a></li>

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
\t\t\t\t\t\t\t<h4 class=\"page-title mb-0\" >
\t\t\t\t\t\t\t\tUsers
\t\t\t\t\t\t\t</h4>

\t\t\t\t\t\t\t<a href=\"#page_header\" class=\"btn btn-light align-self-center collapsed d-lg-none border-transparent rounded-pill p-0 ms-auto\" data-bs-toggle=\"collapse\">
\t\t\t\t\t\t\t\t<i class=\"ph-caret-down collapsible-indicator ph-sm m-1\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"collapse d-lg-block my-lg-auto ms-lg-auto\" id=\"page_header\">
\t\t\t\t\t\t\t<div class=\"d-sm-flex align-items-center mb-3 mb-lg-0 ms-lg-3\">
\t\t\t\t\t\t\t\t";
        // line 603
        echo "<div class=\"collapse d-lg-block ms-lg-auto\" id=\"breadcrumb_elements\">
\t\t\t\t\t\t\t<div class=\"d-lg-flex mb-2 mb-lg-0\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"dropdown ms-lg-3\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"d-flex align-items-center text-body dropdown-toggle py-2\" data-bs-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t<i class=\"ph-gear me-2\"></i>
\t\t\t\t\t\t\t\t\t\t<span class=\"flex-1\">Settings</span>
\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-end w-100 w-lg-auto\">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 613
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t<i class=\"ph-user-circle me-2\"></i>
\t\t\t\t\t\t\t\t\t\tChange account
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 617
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        echo "\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t<i class=\"ph-sign-out me-2\"></i>
\t\t\t\t\t\t\t\t\t\tLogout
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
        // line 644
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"page-header-content d-lg-flex border-top\">
\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t<div class=\"breadcrumb py-2\">
\t\t\t\t\t\t\t\t<a href=\"";
        // line 651
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin");
        echo "\" class=\"breadcrumb-item\"><i class=\"ph-house\"></i></a>
\t\t\t\t\t\t\t\t";
        // line 654
        echo "\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<a href=\"#breadcrumb_elements\" class=\"btn btn-light align-self-center collapsed d-lg-none border-transparent rounded-pill p-0 ms-auto\" data-bs-toggle=\"collapse\">
\t\t\t\t\t\t\t\t<i class=\"ph-caret-down collapsible-indicator ph-sm m-1\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"collapse d-lg-block ms-lg-auto\" id=\"breadcrumb_elements\">
\t\t\t\t\t\t\t<div class=\"d-lg-flex mb-2 mb-lg-0\">
\t\t\t\t\t\t\t\t";
        // line 667
        echo "
\t\t\t\t\t\t\t\t<div class=\"dropdown ms-lg-3\">
\t\t\t\t\t\t\t\t\t";
        // line 673
        echo "
\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-end w-100 w-lg-auto\">
\t\t\t\t\t\t\t\t\t\t";
        // line 679
        echo "\t\t\t\t\t\t\t\t\t\t";
        // line 687
        echo "\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t\t\t\t";
        // line 692
        echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- /page header -->


\t\t\t\t<!-- Content area -->
\t\t\t\t<div class=\"content\">

\t\t\t\t\t<!-- Cell formatting -->
\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t<h5 class=\"mb-0\">Users list</h5>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col col-auto ml-auto\">
\t\t\t\t\t\t\t\t<a href=\"";
        // line 712
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        echo "\" class=\"btn btn-primary btn-lg\">Add User</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<br>

\t\t\t\t\t\t<div class=\"gridjs-example-cell-formatting border-top\">
\t\t\t\t\t\t<table class=\"table datatable-dom-position\">
                                
\t\t\t\t\t\t\t<thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Last Name</th>
                                        <th>First Name</th>
                                        <th>Adress</th>
                                        <th>Email</th>
                                        <th>Password</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                ";
        // line 734
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 734, $this->source); })()));
        $context['_iterated'] = false;
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 735
            echo "                                    <tr>
                                        <td>";
            // line 736
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 736), "html", null, true);
            echo "</td>
                                        <td>";
            // line 737
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "lastname", [], "any", false, false, false, 737), "html", null, true);
            echo "</td>
                                        <td>";
            // line 738
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "firstname", [], "any", false, false, false, 738), "html", null, true);
            echo "</td>
                                        <td>";
            // line 739
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "adress", [], "any", false, false, false, 739), "html", null, true);
            echo "</td>
                                        <td>";
            // line 740
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 740), "html", null, true);
            echo "</td>
                                        <td>";
            // line 741
            echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "password", [], "any", false, false, false, 741), 0, 10), "html", null, true);
            echo "...</td>
                                        <td>
                                        ";
            // line 744
            echo "                                            ";
            echo twig_include($this->env, $context, "user/_delete_form.html.twig", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 744)]);
            echo "
                                        </td>

                                    </tr>
                                ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 749
            echo "                                    <tr>
                                        <td colspan=\"3\">no records found</td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 753
        echo "                                </tbody>
                            </table>

\t\t\t\t\t\t\t
                    </div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- /cell formatting -->


\t\t\t\t\t";
        // line 805
        echo "
";
        // line 820
        echo "
\t\t\t\t";
        // line 822
        echo "\t\t\t\t<!-- /content area -->
</div>
</div>
\t\t\t\t<!-- Footer -->
\t\t\t\t<div class=\"navbar navbar-sm navbar-footer border-top\">
\t\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t\t\t<span>&copy; 2022 <a href=\"https://themeforest.net/item/limitless-responsive-web-application-kit/13080328\">Limitless Web App Kit</a></span>

\t\t\t\t\t\t
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
</html>


 

    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "user/index.html.twig";
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
        return array (  671 => 822,  668 => 820,  665 => 805,  654 => 753,  645 => 749,  626 => 744,  621 => 741,  617 => 740,  613 => 739,  609 => 738,  605 => 737,  601 => 736,  598 => 735,  580 => 734,  555 => 712,  533 => 692,  530 => 687,  528 => 679,  524 => 673,  520 => 667,  509 => 654,  505 => 651,  496 => 644,  485 => 617,  478 => 613,  466 => 603,  427 => 513,  423 => 512,  419 => 511,  415 => 510,  404 => 502,  351 => 452,  344 => 447,  329 => 430,  320 => 426,  316 => 424,  310 => 419,  303 => 408,  300 => 399,  297 => 371,  286 => 347,  280 => 340,  277 => 323,  274 => 306,  271 => 294,  266 => 279,  262 => 261,  259 => 255,  256 => 250,  252 => 245,  246 => 234,  235 => 219,  231 => 207,  228 => 195,  225 => 183,  222 => 171,  218 => 157,  197 => 133,  193 => 120,  186 => 111,  183 => 101,  180 => 91,  177 => 81,  172 => 69,  135 => 30,  131 => 29,  126 => 27,  119 => 23,  115 => 22,  108 => 18,  104 => 17,  100 => 16,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}user index{% endblock %}

{% block body %}

<!DOCTYPE html>
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
\t<script src=\"{{ asset ('assets/js/vendor/tables/gridjs/gridjs.min.js')}}\"></script>

\t<script src=\"{{ asset ('assets/js/app.js')}}\"></script>
\t<script src=\"{{ asset ('assets/demo/pages/gridjs_customizing.js')}}\"></script>
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
\t\t\t\t
\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-scrollable-sm wmin-lg-600 p-0\">
\t\t\t\t\t\t<div class=\"d-flex align-items-center border-bottom p-3\">
\t\t\t\t\t\t\t{# <h6 class=\"mb-0\">Browse apps</h6>
\t\t\t\t\t\t\t<a href=\"#\" class=\"ms-auto\">
\t\t\t\t\t\t\t\tView all
\t\t\t\t\t\t\t\t<i class=\"ph-arrow-circle-right ms-1\"></i>
\t\t\t\t\t\t\t</a> #}
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"row row-cols-1 row-cols-sm-2 g-0\">
\t\t\t\t\t\t\t{# <div class=\"col\">
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"dropdown-item text-wrap h-100 align-items-start border-end-sm border-bottom p-3\">
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<img src=\"../../../assets/images/demo/logos/1.svg\" class=\"h-40px mb-2\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t<div class=\"fw-semibold my-1\">Customer data platform</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"text-muted\">Unify customer data from multiple sources</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</div> #}

\t\t\t\t\t\t\t{# <div class=\"col\">
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"dropdown-item text-wrap h-100 align-items-start border-bottom p-3\">
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<img src=\"../../../assets/images/demo/logos/2.svg\" class=\"h-40px mb-2\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t<div class=\"fw-semibold my-1\">Data catalog</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"text-muted\">Discover, inventory, and organize data assets</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</div> #}

\t\t\t\t\t\t\t{# <div class=\"col\">
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"dropdown-item text-wrap h-100 align-items-start border-end-sm border-bottom border-bottom-sm-0 rounded-bottom-start p-3\">
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<img src=\"../../../assets/images/demo/logos/3.svg\" class=\"h-40px mb-2\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t<div class=\"fw-semibold my-1\">Data governance</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"text-muted\">The collaboration hub and data marketplace</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</div> #}

\t\t\t\t\t\t\t{# <div class=\"col\">
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"dropdown-item text-wrap h-100 align-items-start rounded-bottom-end p-3\">
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<img src=\"../../../assets/images/demo/logos/4.svg\" class=\"h-40px mb-2\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t<div class=\"fw-semibold my-1\">Data privacy</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"text-muted\">Automated provisioning of non-production datasets</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</div> #}
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</li>

\t\t\t\t<li class=\"nav-item nav-item-dropdown-lg dropdown ms-lg-2\">
\t\t\t\t\t{# <a href=\"#\" class=\"navbar-nav-link navbar-nav-link-icon rounded-pill\" data-bs-toggle=\"dropdown\" data-bs-auto-close=\"outside\">
\t\t\t\t\t\t<i class=\"ph-chats\"></i>
\t\t\t\t\t\t<span class=\"badge bg-yellow text-black position-absolute top-0 end-0 translate-middle-top zindex-1 rounded-pill mt-1 me-1\">8</span>
\t\t\t\t\t</a> #}

\t\t\t\t\t<div class=\"dropdown-menu wmin-lg-400 p-0\">
\t\t\t\t\t\t{# <div class=\"d-flex align-items-center p-3\">
\t\t\t\t\t\t\t<h6 class=\"mb-0\">Messages</h6>
\t\t\t\t\t\t\t<div class=\"ms-auto\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-body rounded-pill\">
\t\t\t\t\t\t\t\t\t<i class=\"ph-plus-circle\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a href=\"#search_messages\" class=\"collapsed text-body rounded-pill ms-2\" data-bs-toggle=\"collapse\">
\t\t\t\t\t\t\t\t\t<i class=\"ph-magnifying-glass\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div> #}

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

\t\t\t\t\t\t\t\t{# <div class=\"flex-1\">
\t\t\t\t\t\t\t\t\t<span class=\"fw-semibold\">James Alexander</span>
\t\t\t\t\t\t\t\t\t<span class=\"text-muted float-end fs-sm\">04:58</span>
\t\t\t\t\t\t\t\t\t<div class=\"text-muted\">who knows, maybe that would be the best thing for me...</div>
\t\t\t\t\t\t\t\t</div> #}
\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t{# <a href=\"#\" class=\"dropdown-item align-items-start text-wrap py-2\">
\t\t\t\t\t\t\t\t<div class=\"status-indicator-container me-3\">
\t\t\t\t\t\t\t\t\t<img src=\"../../../assets/images/demo/users/face3.jpg\" class=\"w-40px h-40px rounded-pill\" alt=\"\">
\t\t\t\t\t\t\t\t\t<span class=\"status-indicator bg-success\"></span>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"flex-1\">
\t\t\t\t\t\t\t\t\t<span class=\"fw-semibold\">Margo Baker</span>
\t\t\t\t\t\t\t\t\t<span class=\"text-muted float-end fs-sm\">12:16</span>
\t\t\t\t\t\t\t\t\t<div class=\"text-muted\">That was something he was unable to do because...</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</a> #}

\t\t\t\t\t\t\t{# <a href=\"#\" class=\"dropdown-item align-items-start text-wrap py-2\">
\t\t\t\t\t\t\t\t<div class=\"status-indicator-container me-3\">
\t\t\t\t\t\t\t\t\t<img src=\"../../../assets/images/demo/users/face24.jpg\" class=\"w-40px h-40px rounded-pill\" alt=\"\">
\t\t\t\t\t\t\t\t\t<span class=\"status-indicator bg-success\"></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"flex-1\">
\t\t\t\t\t\t\t\t\t<span class=\"fw-semibold\">Jeremy Victorino</span>
\t\t\t\t\t\t\t\t\t<span class=\"text-muted float-end fs-sm\">22:48</span>
\t\t\t\t\t\t\t\t\t<div class=\"text-muted\">But that would be extremely strained and suspicious...</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</a> #}

\t\t\t\t\t\t\t{# <a href=\"#\" class=\"dropdown-item align-items-start text-wrap py-2\">
\t\t\t\t\t\t\t\t<div class=\"status-indicator-container me-3\">
\t\t\t\t\t\t\t\t\t<img src=\"../../../assets/images/demo/users/face4.jpg\" class=\"w-40px h-40px rounded-pill\" alt=\"\">
\t\t\t\t\t\t\t\t\t<span class=\"status-indicator bg-grey\"></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"flex-1\">
\t\t\t\t\t\t\t\t\t<span class=\"fw-semibold\">Beatrix Diaz</span>
\t\t\t\t\t\t\t\t\t<span class=\"text-muted float-end fs-sm\">Tue</span>
\t\t\t\t\t\t\t\t\t<div class=\"text-muted\">What a strenuous career it is that I've chosen...</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</a> #}

\t\t\t\t\t\t\t{# <a href=\"#\" class=\"dropdown-item align-items-start text-wrap py-2\">
\t\t\t\t\t\t\t\t<div class=\"status-indicator-container me-3\">
\t\t\t\t\t\t\t\t\t<img src=\"../../../assets/images/demo/users/face25.jpg\" class=\"w-40px h-40px rounded-pill\" alt=\"\">
\t\t\t\t\t\t\t\t\t<span class=\"status-indicator bg-danger\"></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"flex-1\">
\t\t\t\t\t\t\t\t\t<span class=\"fw-semibold\">Richard Vango</span>
\t\t\t\t\t\t\t\t\t<span class=\"text-muted float-end fs-sm\">Mon</span>
\t\t\t\t\t\t\t\t\t<div class=\"text-muted\">Other travelling salesmen live a life of luxury...</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</a> #}
\t\t\t\t\t\t</div>

\t\t\t\t\t\t{# <div class=\"d-flex border-top py-2 px-3\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"text-body\">
\t\t\t\t\t\t\t\t<i class=\"ph-checks me-1\"></i>
\t\t\t\t\t\t\t\tDismiss all
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a href=\"#\" class=\"text-body ms-auto\">
\t\t\t\t\t\t\t\tView all
\t\t\t\t\t\t\t\t<i class=\"ph-arrow-circle-right ms-1\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div> #}
\t\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t</ul>

\t\t\t<div class=\"navbar-collapse justify-content-center flex-lg-1 order-2 order-lg-1 collapse\" id=\"navbar_search\">
\t\t\t\t<div class=\"navbar-search flex-fill position-relative mt-2 mt-lg-0 mx-lg-3\">
\t\t\t\t\t<div class=\"form-control-feedback form-control-feedback-start flex-grow-1\" data-color-theme=\"dark\">
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"dropdown-menu w-100\" data-color-theme=\"light\">
\t\t\t\t\t\t\t{# <button type=\"button\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t<div class=\"text-center w-32px me-3\">
\t\t\t\t\t\t\t\t\t<i class=\"ph-magnifying-glass\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<span>Search <span class=\"fw-bold\">\"in\"</span> everywhere</span>
\t\t\t\t\t\t\t</button> #}

\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>

\t\t\t\t\t\t\t<div class=\"dropdown-menu-scrollable-lg\">
\t\t\t\t\t\t\t\t{# <div class=\"dropdown-header\">
\t\t\t\t\t\t\t\t\tContacts
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"float-end\">
\t\t\t\t\t\t\t\t\t\tSee all
\t\t\t\t\t\t\t\t\t\t<i class=\"ph-arrow-circle-right ms-1\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div> #}

\t\t\t\t\t\t\t\t<div class=\"dropdown-item cursor-pointer\">
\t\t\t\t\t\t\t\t\t{# <div class=\"me-3\">
\t\t\t\t\t\t\t\t\t\t<img src=\"../../../assets/images/demo/users/face3.jpg\" class=\"w-32px h-32px rounded-pill\" alt=\"\">
\t\t\t\t\t\t\t\t\t</div> #}

\t\t\t\t\t\t\t\t\t{# <div class=\"d-flex flex-column flex-grow-1\">
\t\t\t\t\t\t\t\t\t\t<div class=\"fw-semibold\">Christ<mark>in</mark>e Johnson</div>
\t\t\t\t\t\t\t\t\t\t<span class=\"fs-sm text-muted\">c.johnson@awesomecorp.com</span>
\t\t\t\t\t\t\t\t\t</div> #}

\t\t\t\t\t\t\t\t\t{# <div class=\"d-inline-flex\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-body ms-2\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-user-circle\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div> #}
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t{# <div class=\"dropdown-item cursor-pointer\">
\t\t\t\t\t\t\t\t\t\t<div class=\"me-3\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"../../../assets/images/demo/users/face24.jpg\" class=\"w-32px h-32px rounded-pill\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex flex-column flex-grow-1\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"fw-semibold\">Cl<mark>in</mark>ton Sparks</div>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"fs-sm text-muted\">c.sparks@awesomecorp.com</span>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"d-inline-flex\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-body ms-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-user-circle\"></i>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div> #}

\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>

\t\t\t\t\t\t\t\t{# <div class=\"dropdown-header\">
\t\t\t\t\t\t\t\t\tClients
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"float-end\">
\t\t\t\t\t\t\t\t\t\tSee all
\t\t\t\t\t\t\t\t\t\t<i class=\"ph-arrow-circle-right ms-1\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"dropdown-item cursor-pointer\">
\t\t\t\t\t\t\t\t\t<div class=\"me-3\">
\t\t\t\t\t\t\t\t\t\t<img src=\"../../../assets/images/brands/adobe.svg\" class=\"w-32px h-32px rounded-pill\" alt=\"\">
\t\t\t\t\t\t\t\t\t</div> #}

\t\t\t\t\t\t\t\t\t{# <div class=\"d-flex flex-column flex-grow-1\">
\t\t\t\t\t\t\t\t\t\t<div class=\"fw-semibold\">Adobe <mark>In</mark>c.</div>
\t\t\t\t\t\t\t\t\t\t<span class=\"fs-sm text-muted\">Enterprise license</span>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"d-inline-flex\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-body ms-2\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-briefcase\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div> #}

\t\t\t\t\t\t\t\t{# <div class=\"dropdown-item cursor-pointer\">
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
\t\t\t\t\t\t\t\t</div> #}

\t\t\t\t\t\t\t\t{# <div class=\"dropdown-item cursor-pointer\">
\t\t\t\t\t\t\t\t\t<div class=\"me-3\">
\t\t\t\t\t\t\t\t\t\t<img src=\"../../../assets/images/brands/ing.svg\" class=\"w-32px h-32px rounded-pill\" alt=\"\">
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"d-flex flex-column flex-grow-1\">
\t\t\t\t\t\t\t\t\t\t<div class=\"fw-semibold\"><mark>IN</mark>Informatique</div>
\t\t\t\t\t\t\t\t\t\t<span class=\"fs-sm text-muted\">Perpetual license</span>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"d-inline-flex\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"text-body ms-2\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-briefcase\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div> #}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t{# <a href=\"#\" class=\"navbar-nav-link align-items-center justify-content-center w-40px h-32px rounded-pill position-absolute end-0 top-50 translate-middle-y p-0 me-1\" data-bs-toggle=\"dropdown\" data-bs-auto-close=\"outside\">
\t\t\t\t\t\t<i class=\"ph-faders-horizontal\"></i>
\t\t\t\t\t</a> #}

\t\t\t\t\t<div class=\"dropdown-menu w-100 p-3\">
\t\t\t\t\t\t<div class=\"d-flex align-items-center mb-3\">
\t\t\t\t\t\t\t<h6 class=\"mb-0\">Search options</h6>
\t\t\t\t\t\t\t<a href=\"#\" class=\"text-body rounded-pill ms-auto\">
\t\t\t\t\t\t\t\t<i class=\"ph-clock-counter-clockwise\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t{# <div class=\"mb-3\">
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
\t\t\t\t\t\t</div> #}

\t\t\t\t\t\t{# <div class=\"mb-3\">
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
\t\t\t\t\t\t</div> #}

\t\t\t\t\t\t{# <div class=\"d-flex\">
\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-light\">Reset</button>

\t\t\t\t\t\t\t<div class=\"ms-auto\">
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-light\">Cancel</button>
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary ms-2\">Apply</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div> #}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<ul class=\"nav flex-row justify-content-end order-1 order-lg-2\">
\t\t\t\t{# <li class=\"nav-item\">
\t\t\t\t\t<a href=\"#\" class=\"navbar-nav-link navbar-nav-link-icon rounded-pill\" data-bs-toggle=\"offcanvas\" data-bs-target=\"#notifications\">
\t\t\t\t\t\t<i class=\"ph-bell\"></i>
\t\t\t\t\t\t<span class=\"badge bg-yellow text-black position-absolute top-0 end-0 translate-middle-top zindex-1 rounded-pill mt-1 me-1\">2</span>
\t\t\t\t\t</a>
\t\t\t\t</li> #}

\t\t\t\t<li class=\"nav-item nav-item-dropdown-lg dropdown ms-lg-2\">
\t\t\t\t\t<a href=\"#\" class=\"navbar-nav-link align-items-center rounded-pill p-1\" data-bs-toggle=\"dropdown\">
\t\t\t\t\t\t<div class=\"status-indicator-container\">
\t\t\t\t\t\t\t{# <img src=\"../../../assets/images/demo/users/face11.jpg\" class=\"w-32px h-32px rounded-pill\" alt=\"\"> #}
\t\t\t\t\t\t\t<span class=\"status-indicator bg-success\"></span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<span class=\"d-none d-lg-inline-block mx-lg-2\">{{app.user.firstname}} {{ app.user.lastname }} </span>
\t\t\t\t\t</a>

\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-end\">
\t\t\t\t\t\t<a href=\"{{ path('app_login')}}\" class=\"dropdown-item\">
\t\t\t\t\t\t\t<i class=\"ph-user-circle me-2\"></i>
\t\t\t\t\t\t\tChange account
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t<i class=\"ph-currency-circle-dollar me-2\"></i>
\t\t\t\t\t\t\tMy subscription
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t<i class=\"ph-shopping-cart me-2\"></i>
\t\t\t\t\t\t\tMy orders
\t\t\t\t\t\t</a>
\t\t\t\t\t\t{# <a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t<i class=\"ph-envelope-open me-2\"></i>
\t\t\t\t\t\t\tMy inbox
\t\t\t\t\t\t\t<span class=\"badge bg-primary rounded-pill ms-auto\">26</span>
\t\t\t\t\t\t</a> #}
\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t<i class=\"ph-gear me-2\"></i>
\t\t\t\t\t\t\tAccount settings
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"{{path('app_logout')}}\" class=\"dropdown-item\">
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
\t\t\t\t\t\t\t\t<div class=\"sidebar-section\">
\t\t\t\t\t<ul class=\"nav nav-sidebar\" data-nav-type=\"accordion\">

\t\t\t\t\t\t<!-- Main -->
\t\t\t\t\t\t<li class=\"nav-item-header pt-0\">
\t\t\t\t\t\t\t<div class=\"text-uppercase fs-sm lh-sm opacity-50 sidebar-resize-hide\">Main</div>
\t\t\t\t\t\t\t<i class=\"ph-dots-three sidebar-resize-show\"></i>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t<a href=\"{{path('app_admin')}}\" class=\"nav-link\">
\t\t\t\t\t\t\t\t<i class=\"ph-house\"></i>
\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\tDashboard
\t\t\t\t\t\t\t\t\t<span class=\"d-block fw-normal opacity-50\">No pending orders</span>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\"><a href=\"{{path ('app_product_index')}}\" class=\"nav-link \"><i class=\"ph-layout\"></i>Products</a></li>
\t\t\t\t\t<li class=\"nav-item\"><a href=\"{{path ('app_category_index')}}\" class=\"nav-link \"><i class=\"ph-layout\"></i>Categories</a></li>
\t\t\t\t\t<li class=\"nav-item\"><a href=\"{{path ('app_user_index')}}\" class=\"nav-link active\"><i class=\"ph-layout\"></i>Users</a></li>
\t\t\t\t\t<li class=\"nav-item\"><a href=\"{{path ('app_command_index')}}\" class=\"nav-link \"><i class=\"ph-layout\"></i>Commands</a></li>

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
\t\t\t\t\t\t\t<h4 class=\"page-title mb-0\" >
\t\t\t\t\t\t\t\tUsers
\t\t\t\t\t\t\t</h4>

\t\t\t\t\t\t\t<a href=\"#page_header\" class=\"btn btn-light align-self-center collapsed d-lg-none border-transparent rounded-pill p-0 ms-auto\" data-bs-toggle=\"collapse\">
\t\t\t\t\t\t\t\t<i class=\"ph-caret-down collapsible-indicator ph-sm m-1\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"collapse d-lg-block my-lg-auto ms-lg-auto\" id=\"page_header\">
\t\t\t\t\t\t\t<div class=\"d-sm-flex align-items-center mb-3 mb-lg-0 ms-lg-3\">
\t\t\t\t\t\t\t\t{# <div class=\"dropdown w-100 w-sm-auto\">
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
\t\t\t\t\t\t\t\t</div> #}
<div class=\"collapse d-lg-block ms-lg-auto\" id=\"breadcrumb_elements\">
\t\t\t\t\t\t\t<div class=\"d-lg-flex mb-2 mb-lg-0\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"dropdown ms-lg-3\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"d-flex align-items-center text-body dropdown-toggle py-2\" data-bs-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t<i class=\"ph-gear me-2\"></i>
\t\t\t\t\t\t\t\t\t\t<span class=\"flex-1\">Settings</span>
\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-end w-100 w-lg-auto\">
\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_login')}}\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t<i class=\"ph-user-circle me-2\"></i>
\t\t\t\t\t\t\t\t\t\tChange account
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a href=\"{{path('app_logout')}}\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t<i class=\"ph-sign-out me-2\"></i>
\t\t\t\t\t\t\t\t\t\tLogout
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t{# <div class=\"vr d-none d-sm-block flex-shrink-0 my-2 mx-3\"></div>

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
\t\t\t\t\t\t\t\t</div> #}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"page-header-content d-lg-flex border-top\">
\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t<div class=\"breadcrumb py-2\">
\t\t\t\t\t\t\t\t<a href=\"{{path ('app_admin')}}\" class=\"breadcrumb-item\"><i class=\"ph-house\"></i></a>
\t\t\t\t\t\t\t\t{# <a href=\"#\" class=\"breadcrumb-item\">GridJS</a>
\t\t\t\t\t\t\t\t<span class=\"breadcrumb-item active\">Customizing</span> #}
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<a href=\"#breadcrumb_elements\" class=\"btn btn-light align-self-center collapsed d-lg-none border-transparent rounded-pill p-0 ms-auto\" data-bs-toggle=\"collapse\">
\t\t\t\t\t\t\t\t<i class=\"ph-caret-down collapsible-indicator ph-sm m-1\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"collapse d-lg-block ms-lg-auto\" id=\"breadcrumb_elements\">
\t\t\t\t\t\t\t<div class=\"d-lg-flex mb-2 mb-lg-0\">
\t\t\t\t\t\t\t\t{# <a href=\"#\" class=\"d-flex align-items-center text-body py-2\">
\t\t\t\t\t\t\t\t\t<i class=\"ph-lifebuoy me-2\"></i>
\t\t\t\t\t\t\t\t\tSupport
\t\t\t\t\t\t\t\t</a> #}

\t\t\t\t\t\t\t\t<div class=\"dropdown ms-lg-3\">
\t\t\t\t\t\t\t\t\t{# <a href=\"#\" class=\"d-flex align-items-center text-body dropdown-toggle py-2\" data-bs-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t<i class=\"ph-gear me-2\"></i>
\t\t\t\t\t\t\t\t\t\t<span class=\"flex-1\">Settings</span>
\t\t\t\t\t\t\t\t\t</a> #}

\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-end w-100 w-lg-auto\">
\t\t\t\t\t\t\t\t\t\t{# <a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-shield-warning me-2\"></i>
\t\t\t\t\t\t\t\t\t\t\tAccount security
\t\t\t\t\t\t\t\t\t\t</a> #}
\t\t\t\t\t\t\t\t\t\t{# <a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-chart-bar me-2\"></i>
\t\t\t\t\t\t\t\t\t\t\tAnalytics
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-lock-key me-2\"></i>
\t\t\t\t\t\t\t\t\t\t\tPrivacy
\t\t\t\t\t\t\t\t\t\t</a> #}
\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t\t\t\t{# <a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-gear me-2\"></i>
\t\t\t\t\t\t\t\t\t\t\tAll settings
\t\t\t\t\t\t\t\t\t\t</a> #}
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- /page header -->


\t\t\t\t<!-- Content area -->
\t\t\t\t<div class=\"content\">

\t\t\t\t\t<!-- Cell formatting -->
\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t<h5 class=\"mb-0\">Users list</h5>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col col-auto ml-auto\">
\t\t\t\t\t\t\t\t<a href=\"{{ path('app_register') }}\" class=\"btn btn-primary btn-lg\">Add User</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<br>

\t\t\t\t\t\t<div class=\"gridjs-example-cell-formatting border-top\">
\t\t\t\t\t\t<table class=\"table datatable-dom-position\">
                                
\t\t\t\t\t\t\t<thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Last Name</th>
                                        <th>First Name</th>
                                        <th>Adress</th>
                                        <th>Email</th>
                                        <th>Password</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                {% for user in users %}
                                    <tr>
                                        <td>{{ user.id }}</td>
                                        <td>{{ user.lastname }}</td>
                                        <td>{{ user.firstname }}</td>
                                        <td>{{ user.adress }}</td>
                                        <td>{{ user.email }}</td>
                                        <td>{{ user.password | slice(0, 10) }}...</td>
                                        <td>
                                        {# <a href=\"{{ path('app_user_show', {'id': user.id}) }}\" class=\"btn btn-info btn-sm\">Show</a> #}
                                            {{ include('user/_delete_form.html.twig', {'id': user.id}) }}
                                        </td>

                                    </tr>
                                {% else %}
                                    <tr>
                                        <td colspan=\"3\">no records found</td>
                                    </tr>
                                {% endfor %}
                                </tbody>
                            </table>

\t\t\t\t\t\t\t
                    </div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- /cell formatting -->


\t\t\t\t\t{# <!-- Cell attributes -->
\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t\t<h5 class=\"mb-0\">Cell attributes</h5>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\tAdd custom attributes to each cell (and header cell) of your table using the attributes config. This example adds <code>data-field=\"name\"</code> to all cells of the \"Name\" column. You can also add custom ID or class name. Note - <code>class</code> attribute requires base <code>gridjs-th</code> class to keep the styling and optional <code>gridjs-th-sort</code> if sorting is enabled. See JS configuration of this grid for reference.
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"gridjs-example-cell-attributes border-top\"></div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- /cell attributes -->


\t\t\t\t\t<!-- Row buttons -->
\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t\t<h5 class=\"mb-0\">Row buttons</h5>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\tYou can get access to the cell or the entire row using the <code>formatter</code> function. In this example, we are adding a button to each row which has an <code>onClick</code> handler function that can read the entire row. You can use either single button or a button group, and optionally disable sorting in the last column where you show action buttons. Buttons support plain text label and/or icons.
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"gridjs-example-row-buttons border-top\"></div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- /row buttons -->


\t\t\t\t\t<!-- HTML in cells -->
\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t\t<h5 class=\"mb-0\">HTML in cells</h5>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\tIn this example we added a simple <code>mailto</code> link to each row and inserted the link value from \"Email\" cell in each row. Note: using the <code>html</code> function can expose your application to XSS attacks. Make sure you understand the implications of using this function and always sanitize the user inputs before passing them to the <code>html</code> function
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"gridjs-example-cell-html border-top\"></div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- /HTML in cells --> #}

{# 
\t\t\t\t\t<!-- HTML in header -->
\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t\t<h5 class=\"mb-0\">HTML in header</h5>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\tIn this example we added icons to table header cells using <code>name</code> property. You can also create a virtual DOM and attach it to header cells. Note: using the <code>html</code> function can expose your application to XSS attacks. Make sure you understand the implications of using this function and always sanitize the user inputs before passing them to the <code>html</code> function
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"gridjs-example-header-html border-top\"></div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- /HTML in header --> #}

\t\t\t\t{# </div> #}
\t\t\t\t<!-- /content area -->
</div>
</div>
\t\t\t\t<!-- Footer -->
\t\t\t\t<div class=\"navbar navbar-sm navbar-footer border-top\">
\t\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t\t\t<span>&copy; 2022 <a href=\"https://themeforest.net/item/limitless-responsive-web-application-kit/13080328\">Limitless Web App Kit</a></span>

\t\t\t\t\t\t
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
</html>


 

    {# <a href=\"{{ path('app_user_new') }}\">Create new</a> #}
{% endblock %}
", "user/index.html.twig", "C:\\xampp\\htdocs\\projettt\\proj1\\templates\\user\\index.html.twig");
    }
}
