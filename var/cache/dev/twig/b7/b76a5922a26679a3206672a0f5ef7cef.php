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

/* layout_2_sidebars_1_side.html.twig */
class __TwigTemplate_34bb904804f4b63f6fe146a5f636014e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layout_2_sidebars_1_side.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layout_2_sidebars_1_side.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\" dir=\"ltr\">
<head>
\t<meta charset=\"utf-8\">
\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
\t<title>Limitless - Responsive Web Application Kit by Eugene Kopyov</title>

\t<!-- Global stylesheets -->
\t<link href=\"../../../assets/fonts/inter/inter.css\" rel=\"stylesheet\" type=\"text/css\">
\t<link href=\"../../../assets/icons/phosphor/styles.min.css\" rel=\"stylesheet\" type=\"text/css\">
\t<link href=\"assets/css/ltr/all.min.css\" id=\"stylesheet\" rel=\"stylesheet\" type=\"text/css\">
\t<!-- /global stylesheets -->

\t<!-- Core JS files -->
\t<script src=\"../../../assets/demo/demo_configurator.js\"></script>
\t<script src=\"../../../assets/js/bootstrap/bootstrap.bundle.min.js\"></script>
\t<!-- /core JS files -->

\t<!-- Theme JS files -->
\t<script src=\"assets/js/app.js\"></script>
\t<!-- /theme JS files -->

</head>

<body>

\t<!-- Main navbar -->
\t<div class=\"navbar navbar-dark navbar-expand-lg navbar-static border-bottom border-bottom-white border-opacity-10\">
\t\t<div class=\"container-fluid\">
\t\t\t<div class=\"d-flex d-lg-none\">
\t\t\t\t<button type=\"button\" class=\"navbar-toggler sidebar-mobile-main-toggle rounded\">
\t\t\t\t\t<i class=\"ph-list\"></i>
\t\t\t\t</button>
\t\t\t\t<button type=\"button\" class=\"navbar-toggler sidebar-mobile-secondary-toggle rounded\">
\t\t\t\t\t<i class=\"ph-arrow-left\"></i>
\t\t\t\t</button>
\t\t\t</div>

\t\t\t<div class=\"navbar-brand flex-1 flex-lg-0 d-none d-sm-flex\">
\t\t\t\t<a href=\"index.html\" class=\"d-inline-flex align-items-center\">
\t\t\t\t\t<img src=\"../../../assets/images/logo_icon.svg\" alt=\"\">
\t\t\t\t\t<img src=\"../../../assets/images/logo_text_light.svg\" class=\"d-none d-sm-inline-block h-16px ms-3\" alt=\"\">
\t\t\t\t</a>
\t\t\t</div>

\t\t\t<div class=\"d-lg-none\">
\t\t\t\t<button class=\"navbar-toggler collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbar-mobile\" aria-expanded=\"false\">
\t\t\t\t\t<i class=\"ph-squares-four\"></i>
\t\t\t\t</button>
\t\t\t</div>

\t\t\t<div class=\"navbar-collapse order-2 order-lg-1 collapse\" id=\"navbar-mobile\" style=\"\">
\t\t\t\t<ul class=\"navbar-nav mt-2 mt-lg-0\">
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a href=\"#\" class=\"navbar-nav-link rounded\">Link</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t<a href=\"#\" class=\"navbar-nav-link rounded dropdown-toggle\" data-bs-toggle=\"dropdown\">Dropdown</a>
\t\t\t\t\t\t<div class=\"dropdown-menu\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">Action</a>
\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">Another action</a>
\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">Something else here</a>
\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">One more line</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>

\t\t\t<ul class=\"nav gap-sm-2 order-1 order-lg-2 ms-auto\">
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a href=\"#\" class=\"navbar-nav-link navbar-nav-link-icon rounded\">
\t\t\t\t\t\t<i class=\"ph-bell\"></i>
\t\t\t\t\t\t<span class=\"badge bg-yellow text-black position-absolute top-0 end-0 translate-middle-top zindex-1 rounded-pill mt-1 me-1\">2</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a href=\"#\" class=\"navbar-nav-link navbar-nav-link-icon rounded\">
\t\t\t\t\t\t<i class=\"ph-chats\"></i>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item nav-item-dropdown-lg dropdown\">
\t\t\t\t\t<a href=\"#\" class=\"navbar-nav-link align-items-center rounded p-1\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
\t\t\t\t\t\t<div class=\"status-indicator-container\">
\t\t\t\t\t\t\t<img src=\"../../../assets/images/demo/users/face11.jpg\" class=\"w-32px h-32px rounded\" alt=\"\">
\t\t\t\t\t\t\t<span class=\"status-indicator bg-success\"></span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<span class=\"d-none d-lg-inline-block mx-lg-2\">Victoria</span>
\t\t\t\t\t</a>

\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-end\">
\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">Action</a>
\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">Another action</a>
\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">Something else here</a>
\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">One more line</a>
\t\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</div>
\t</div>
\t<!-- /main navbar -->


\t<!-- Page content -->
\t<div class=\"page-content\">

\t\t<!-- Main sidebar -->
\t\t<div class=\"sidebar sidebar-dark sidebar-main sidebar-expand-lg sidebar-main-resized\">

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
\t\t\t\t\t\t\t<a href=\"../full/index.html\" class=\"nav-link\">
\t\t\t\t\t\t\t\t<i class=\"ph-house\"></i>
\t\t\t\t\t\t\t\t<span>Dashboard</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<!-- Layout -->
\t\t\t\t\t\t<li class=\"nav-item-header\">
\t\t\t\t\t\t\t<div class=\"text-uppercase fs-sm lh-sm opacity-50 sidebar-resize-hide\">Layout</div>
\t\t\t\t\t\t\t<i class=\"ph-dots-three sidebar-resize-show\"></i>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item nav-item-submenu nav-item-expanded nav-item-open\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">
\t\t\t\t\t\t\t\t<i class=\"ph-layout\"></i>
\t\t\t\t\t\t\t\t<span>Page layouts</span>
\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t<ul class=\"nav-group-sub collapse show\">
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"layout_static.html\" class=\"nav-link\">Static layout</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"layout_no_header.html\" class=\"nav-link\">No header</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"layout_no_footer.html\" class=\"nav-link\">No footer</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item-divider\"></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"layout_fixed_header.html\" class=\"nav-link\">Fixed header</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"layout_fixed_footer.html\" class=\"nav-link\">Fixed footer</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item-divider\"></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"layout_2_sidebars_1_side.html\" class=\"nav-link active\">2 sidebars on 1 side</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"layout_2_sidebars_2_sides.html\" class=\"nav-link\">2 sidebars on 2 sides</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"layout_3_sidebars.html\" class=\"nav-link\">3 sidebars</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item-divider\"></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"layout_boxed_page.html\" class=\"nav-link\">Boxed page</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"layout_boxed_content.html\" class=\"nav-link\">Boxed content</a></li>
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

\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<!-- /main navigation -->

\t\t\t</div>
\t\t\t<!-- /sidebar content -->
\t\t\t
\t\t</div>
\t\t<!-- /main sidebar -->


\t\t<!-- Secondary sidebar -->
\t\t<div class=\"sidebar sidebar-secondary sidebar-expand-lg\">

\t\t\t<!-- Expand button -->
\t\t\t<button type=\"button\" class=\"btn btn-sidebar-expand sidebar-control sidebar-secondary-toggle h-100\">
\t\t\t\t<i class=\"ph-caret-right\"></i>
\t\t\t</button>
\t\t\t<!-- /expand button -->


\t\t\t<!-- Sidebar content -->
\t\t\t<div class=\"sidebar-content\">

\t\t\t\t<!-- Header -->
\t\t\t\t<div class=\"sidebar-section sidebar-section-body d-flex align-items-center pb-0\">
\t\t\t\t\t<h5 class=\"mb-0\">Sidebar</h5>
\t\t\t\t\t<div class=\"ms-auto\">
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-light border-transparent btn-icon rounded-pill btn-sm sidebar-control sidebar-secondary-toggle d-none d-lg-inline-flex\">
\t\t\t\t\t\t\t<i class=\"ph-arrows-left-right\"></i>
\t\t\t\t\t\t</button>

\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-light border-transparent btn-icon rounded-pill btn-sm sidebar-mobile-secondary-toggle d-lg-none\">
\t\t\t\t\t\t\t<i class=\"ph-x\"></i>
\t\t\t\t\t\t</button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- /header -->


\t\t\t\t<!-- Sidebar search -->
\t\t\t\t<div class=\"sidebar-section\">
\t\t\t\t\t<div class=\"sidebar-section-header border-bottom\">
\t\t\t\t\t\t<span class=\"fw-semibold\">Sidebar search</span>
\t\t\t\t\t\t<div class=\"ms-auto\">
\t                \t\t<a href=\"#sidebar_secondary_search\" class=\"text-reset\" data-bs-toggle=\"collapse\">
\t                \t\t\t<i class=\"ph-caret-down collapsible-indicator\"></i>
\t                \t\t</a>
\t                \t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"collapse show\" id=\"sidebar_secondary_search\">
\t\t\t\t\t\t<div class=\"sidebar-section-body\">
\t\t\t\t\t\t\t<div class=\"form-control-feedback form-control-feedback-end\">
\t\t\t\t\t\t\t\t<input type=\"search\" class=\"form-control\" placeholder=\"Search\">
\t\t\t\t\t\t\t\t<div class=\"form-control-feedback-icon\">
\t\t\t\t\t\t\t\t\t<i class=\"ph-magnifying-glass opacity-50\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- /sidebar search -->


\t\t\t\t<!-- Sub navigation -->
\t\t\t\t<div class=\"sidebar-section\">
\t\t\t\t\t<div class=\"sidebar-section-header border-bottom\">
\t\t\t\t\t\t<span class=\"fw-semibold\">Navigation</span>
\t\t\t\t\t\t<div class=\"ms-auto\">
\t                \t\t<a href=\"#sidebar_secondary_navigation\" class=\"text-reset\" data-bs-toggle=\"collapse\">
\t\t\t\t\t\t\t\t<i class=\"ph-caret-down collapsible-indicator\"></i>
\t                \t\t</a>
\t                \t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"collapse show\" id=\"sidebar_secondary_navigation\">
\t\t\t\t\t\t<ul class=\"nav nav-sidebar my-2\" data-nav-type=\"accordion\">
\t\t\t\t\t\t\t<li class=\"nav-item-header opacity-50\">Header</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t<i class=\"ph-plus-circle me-2\"></i>
\t\t\t\t\t\t\t\t\tNav item 1
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t<i class=\"ph-circles-three-plus me-2\"></i>
\t\t\t\t\t\t\t\t\tNav item 2
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t<i class=\"ph-user-plus me-2\"></i>
\t\t\t\t\t\t\t\t\tNav item 3
\t\t\t\t\t\t\t\t\t<span class=\"badge bg-primary rounded-pill ms-auto\">Badge</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item-header opacity-50\">Header</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t<i class=\"ph-kanban me-2\"></i>
\t\t\t\t\t\t\t\t\tNav item 4
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t<i class=\"ph-file-plus me-2\"></i>
\t\t\t\t\t\t\t\t\tNav item 5
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link disabled\">
\t\t\t\t\t\t\t\t\t<i class=\"ph-file-x me-2\"></i>
\t\t\t\t\t\t\t\t\tNav item 6
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- /sub navigation -->

\t\t\t</div>
\t\t\t<!-- /sidebar content -->

\t\t</div>
\t\t<!-- /secondary sidebar -->


\t\t<!-- Main content -->
\t\t<div class=\"content-wrapper\">

\t\t\t<!-- Inner content -->
\t\t\t<div class=\"content-inner\">

\t\t\t\t<!-- Page header -->
\t\t\t\t<div class=\"page-header page-header-light shadow\">
\t\t\t\t\t<div class=\"page-header-content d-lg-flex\">
\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t<h4 class=\"page-title mb-0\">
\t\t\t\t\t\t\t\tSeed - <span class=\"fw-normal\">2 Sidebars on 1 Side</span>
\t\t\t\t\t\t\t</h4>

\t\t\t\t\t\t\t<a href=\"#page_header\" class=\"btn btn-light align-self-center collapsed d-lg-none border-transparent rounded-pill p-0 ms-auto\" data-bs-toggle=\"collapse\">
\t\t\t\t\t\t\t\t<i class=\"ph-caret-down collapsible-indicator ph-sm m-1\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"collapse d-lg-block my-lg-auto ms-lg-auto\" id=\"page_header\">
\t\t\t\t\t\t\t<div class=\"hstack gap-3 mb-3 mb-lg-0\">
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary\">
\t\t\t\t\t\t\t\t\t<i class=\"ph-gear me-2\"></i>
\t\t\t\t\t\t\t\t\tButton
\t\t\t\t\t\t\t\t</button>

\t\t\t\t\t\t\t\t<div class=\"dropdown\">
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-light dropdown-toggle\" data-bs-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t\t\tDropdown
\t\t\t\t\t\t\t\t\t</button>

\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-end\">
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"dropdown-item\">Menu item 1</button>
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"dropdown-item\">Menu item 2</button>
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"dropdown-item\">Menu item 3</button>
\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"dropdown-item\">Menu item 4</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"page-header-content d-lg-flex border-top\">
\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t<div class=\"breadcrumb py-2\">
\t\t\t\t\t\t\t\t<a href=\"index.html\" class=\"breadcrumb-item\"><i class=\"ph-house\"></i></a>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"breadcrumb-item\">Home</a>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"breadcrumb-item\">Link</a>
\t\t\t\t\t\t\t\t<span class=\"breadcrumb-item active\">Current</span>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<a href=\"#breadcrumb_elements\" class=\"btn btn-light align-self-center collapsed d-lg-none border-transparent rounded-pill p-0 ms-auto\" data-bs-toggle=\"collapse\">
\t\t\t\t\t\t\t\t<i class=\"ph-caret-down collapsible-indicator ph-sm m-1\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"collapse d-lg-block ms-lg-auto\" id=\"breadcrumb_elements\">
\t\t\t\t\t\t\t<div class=\"d-lg-flex mb-2 mb-lg-0\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"d-flex align-items-center text-body py-2\">
\t\t\t\t\t\t\t\t\tLink
\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t<div class=\"dropdown ms-lg-3\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"d-flex align-items-center text-body dropdown-toggle py-2\" data-bs-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t<span class=\"flex-1\">Dropdown</span>
\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-end w-100 w-lg-auto\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\tAction
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\tAnother action
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\tOne more action
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\tSeparate action
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

\t\t\t\t\t<!-- Basic card -->
\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t\t<h5 class=\"mb-0\">Basic card</h5>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h6>Start your development with no hassle!</h6>
\t\t\t\t\t\t\t<p class=\"mb-3\">Common problem of templates is that all code is deeply integrated into the core. This limits your freedom in decreasing amount of code, i.e. it becomes pretty difficult to remove unnecessary code from the project. Limitless allows you to remove unnecessary and extra code easily just by disabling styling of certain components in <code>_config.scss</code>. Styling of all 3rd party components are stored in separate SCSS files that begin with <code>\$enable-[component]</code> condition, which checks if this component is enabled in SCSS configuration and either includes or excludes it from bundled CSS file. Use only components you actually need!</p>

\t\t\t\t\t\t\t<h6>What is this?</h6>
\t\t\t\t\t\t\t<p class=\"mb-3\">Starter kit is a set of pages, useful for developers to start development process from scratch. Each layout includes base components only: layout, page kits, color system which is still optional, bootstrap files and bootstrap overrides. No extra CSS/JS files and markup. CSS files are compiled without any plugins or components. Starter kit is moved to a separate folder for better accessibility.</p>

\t\t\t\t\t\t\t<h6>How does it work?</h6>
\t\t\t\t\t\t\t<p>You open one of the starter pages, add necessary plugins, enable components in <code>_config.scss</code> file, compile new CSS. That's it. It's also recommended to open one of main pages with functionality you need and copy all paths/JS code from there to your new page, if you don't need to change file structure.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- /basic card -->


\t\t\t\t\t<!-- Basic table -->
\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t\t<h5 class=\"mb-0\">Basic table</h5>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\tSeed project includes the most basic components that can help you in development process - basic grid example, card, table and form layouts with standard components. Nothing extra. Easily turn on and off styles of different components to keep your CSS as clean as possible. Bootstrap components are always enabled.
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t\t\t<table class=\"table\">
\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<th>#</th>
\t\t\t\t\t\t\t\t\t\t<th>First Name</th>
\t\t\t\t\t\t\t\t\t\t<th>Last Name</th>
\t\t\t\t\t\t\t\t\t\t<th>Username</th>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td>1</td>
\t\t\t\t\t\t\t\t\t\t<td>Eugene</td>
\t\t\t\t\t\t\t\t\t\t<td>Kopyov</td>
\t\t\t\t\t\t\t\t\t\t<td>@Kopyov</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td>2</td>
\t\t\t\t\t\t\t\t\t\t<td>Victoria</td>
\t\t\t\t\t\t\t\t\t\t<td>Baker</td>
\t\t\t\t\t\t\t\t\t\t<td>@Vicky</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td>3</td>
\t\t\t\t\t\t\t\t\t\t<td>James</td>
\t\t\t\t\t\t\t\t\t\t<td>Alexander</td>
\t\t\t\t\t\t\t\t\t\t<td>@Alex</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td>4</td>
\t\t\t\t\t\t\t\t\t\t<td>Franklin</td>
\t\t\t\t\t\t\t\t\t\t<td>Morrison</td>
\t\t\t\t\t\t\t\t\t\t<td>@Frank</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- /basic table -->


\t\t\t\t\t<!-- Form layouts -->
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-lg-6\">

\t\t\t\t\t\t\t<!-- Horizontal form -->
\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t<div class=\"card-header d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t<h5 class=\"mb-0\">Horizontal form</h5>
\t\t\t\t\t\t\t\t\t<div class=\"hstack gap-2 ms-auto\">
\t\t\t\t\t\t\t\t\t\t<a class=\"text-body\" data-card-action=\"collapse\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-caret-down\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a class=\"text-body\" data-card-action=\"reload\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-arrows-clockwise\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a class=\"text-body\" data-card-action=\"remove\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-x\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t                \t</div>

\t\t\t                \t<div class=\"collapse show\">
\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t<form action=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"row mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-lg-3 col-form-label\">Text input</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"Text input\">
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"row mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-lg-3 col-form-label\">Password</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"password\" class=\"form-control\" placeholder=\"Password input\">
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t                        <div class=\"row mb-3\">
\t\t\t\t\t                        \t<label class=\"col-lg-3 col-form-label\">Select</label>
\t\t\t\t\t                        \t<div class=\"col-lg-9\">
\t\t\t\t\t\t                            <select name=\"select\" class=\"form-select\">
\t\t\t\t\t\t                                <option value=\"opt1\">Basic select</option>
\t\t\t\t\t\t                                <option value=\"opt2\">Option 2</option>
\t\t\t\t\t\t                                <option value=\"opt3\">Option 3</option>
\t\t\t\t\t\t                                <option value=\"opt4\">Option 4</option>
\t\t\t\t\t\t                                <option value=\"opt5\">Option 5</option>
\t\t\t\t\t\t                                <option value=\"opt6\">Option 6</option>
\t\t\t\t\t\t                                <option value=\"opt7\">Option 7</option>
\t\t\t\t\t\t                                <option value=\"opt8\">Option 8</option>
\t\t\t\t\t\t                            </select>
\t\t\t\t\t                            </div>
\t\t\t\t\t                        </div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"row mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-lg-3 col-form-label\">Textarea</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<textarea rows=\"5\" cols=\"5\" class=\"form-control\" placeholder=\"Default textarea\"></textarea>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-end\">
\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">Submit form <i class=\"ph-paper-plane-tilt ms-2\"></i></button>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- /horizotal form -->

\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"col-lg-6\">

\t\t\t\t\t\t\t<!-- Vertical form -->
\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t<div class=\"card-header d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t<h5 class=\"mb-0\">Vertical form</h5>
\t\t\t\t\t\t\t\t\t<div class=\"hstack gap-2 ms-auto\">
\t\t\t\t\t\t\t\t\t\t<a class=\"text-body\" data-card-action=\"collapse\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-caret-down\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a class=\"text-body\" data-card-action=\"reload\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-arrows-clockwise\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a class=\"text-body\" data-card-action=\"remove\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-x\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t                \t</div>

\t\t\t                \t<div class=\"collapse show\">
\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t<form action=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-label\">Text input</label>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"Text input\">
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t                        <div class=\"mb-3\">
\t\t\t\t\t                        \t<label class=\"form-label\">Select</label>
\t\t\t\t\t                            <select name=\"select\" class=\"form-select\">
\t\t\t\t\t                                <option value=\"opt1\">Basic select</option>
\t\t\t\t\t                                <option value=\"opt2\">Option 2</option>
\t\t\t\t\t                                <option value=\"opt3\">Option 3</option>
\t\t\t\t\t                                <option value=\"opt4\">Option 4</option>
\t\t\t\t\t                                <option value=\"opt5\">Option 5</option>
\t\t\t\t\t                                <option value=\"opt6\">Option 6</option>
\t\t\t\t\t                                <option value=\"opt7\">Option 7</option>
\t\t\t\t\t                                <option value=\"opt8\">Option 8</option>
\t\t\t\t\t                            </select>
\t\t\t\t\t                        </div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-label\">Textarea</label>
\t\t\t\t\t\t\t\t\t\t\t\t<textarea rows=\"4\" cols=\"4\" class=\"form-control\" placeholder=\"Default textarea\"></textarea>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-end\">
\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">Submit form <i class=\"ph-paper-plane-tilt ms-2\"></i></button>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- /vertical form -->

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- /form layouts -->

\t\t\t\t</div>
\t\t\t\t<!-- /content area -->


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
        return "layout_2_sidebars_1_side.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  43 => 1,);
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
\t<link href=\"../../../assets/fonts/inter/inter.css\" rel=\"stylesheet\" type=\"text/css\">
\t<link href=\"../../../assets/icons/phosphor/styles.min.css\" rel=\"stylesheet\" type=\"text/css\">
\t<link href=\"assets/css/ltr/all.min.css\" id=\"stylesheet\" rel=\"stylesheet\" type=\"text/css\">
\t<!-- /global stylesheets -->

\t<!-- Core JS files -->
\t<script src=\"../../../assets/demo/demo_configurator.js\"></script>
\t<script src=\"../../../assets/js/bootstrap/bootstrap.bundle.min.js\"></script>
\t<!-- /core JS files -->

\t<!-- Theme JS files -->
\t<script src=\"assets/js/app.js\"></script>
\t<!-- /theme JS files -->

</head>

<body>

\t<!-- Main navbar -->
\t<div class=\"navbar navbar-dark navbar-expand-lg navbar-static border-bottom border-bottom-white border-opacity-10\">
\t\t<div class=\"container-fluid\">
\t\t\t<div class=\"d-flex d-lg-none\">
\t\t\t\t<button type=\"button\" class=\"navbar-toggler sidebar-mobile-main-toggle rounded\">
\t\t\t\t\t<i class=\"ph-list\"></i>
\t\t\t\t</button>
\t\t\t\t<button type=\"button\" class=\"navbar-toggler sidebar-mobile-secondary-toggle rounded\">
\t\t\t\t\t<i class=\"ph-arrow-left\"></i>
\t\t\t\t</button>
\t\t\t</div>

\t\t\t<div class=\"navbar-brand flex-1 flex-lg-0 d-none d-sm-flex\">
\t\t\t\t<a href=\"index.html\" class=\"d-inline-flex align-items-center\">
\t\t\t\t\t<img src=\"../../../assets/images/logo_icon.svg\" alt=\"\">
\t\t\t\t\t<img src=\"../../../assets/images/logo_text_light.svg\" class=\"d-none d-sm-inline-block h-16px ms-3\" alt=\"\">
\t\t\t\t</a>
\t\t\t</div>

\t\t\t<div class=\"d-lg-none\">
\t\t\t\t<button class=\"navbar-toggler collapsed\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbar-mobile\" aria-expanded=\"false\">
\t\t\t\t\t<i class=\"ph-squares-four\"></i>
\t\t\t\t</button>
\t\t\t</div>

\t\t\t<div class=\"navbar-collapse order-2 order-lg-1 collapse\" id=\"navbar-mobile\" style=\"\">
\t\t\t\t<ul class=\"navbar-nav mt-2 mt-lg-0\">
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a href=\"#\" class=\"navbar-nav-link rounded\">Link</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item dropdown\">
\t\t\t\t\t\t<a href=\"#\" class=\"navbar-nav-link rounded dropdown-toggle\" data-bs-toggle=\"dropdown\">Dropdown</a>
\t\t\t\t\t\t<div class=\"dropdown-menu\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">Action</a>
\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">Another action</a>
\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">Something else here</a>
\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">One more line</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>

\t\t\t<ul class=\"nav gap-sm-2 order-1 order-lg-2 ms-auto\">
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a href=\"#\" class=\"navbar-nav-link navbar-nav-link-icon rounded\">
\t\t\t\t\t\t<i class=\"ph-bell\"></i>
\t\t\t\t\t\t<span class=\"badge bg-yellow text-black position-absolute top-0 end-0 translate-middle-top zindex-1 rounded-pill mt-1 me-1\">2</span>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a href=\"#\" class=\"navbar-nav-link navbar-nav-link-icon rounded\">
\t\t\t\t\t\t<i class=\"ph-chats\"></i>
\t\t\t\t\t</a>
\t\t\t\t</li>
\t\t\t\t<li class=\"nav-item nav-item-dropdown-lg dropdown\">
\t\t\t\t\t<a href=\"#\" class=\"navbar-nav-link align-items-center rounded p-1\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
\t\t\t\t\t\t<div class=\"status-indicator-container\">
\t\t\t\t\t\t\t<img src=\"../../../assets/images/demo/users/face11.jpg\" class=\"w-32px h-32px rounded\" alt=\"\">
\t\t\t\t\t\t\t<span class=\"status-indicator bg-success\"></span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<span class=\"d-none d-lg-inline-block mx-lg-2\">Victoria</span>
\t\t\t\t\t</a>

\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-end\">
\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">Action</a>
\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">Another action</a>
\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">Something else here</a>
\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">One more line</a>
\t\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</div>
\t</div>
\t<!-- /main navbar -->


\t<!-- Page content -->
\t<div class=\"page-content\">

\t\t<!-- Main sidebar -->
\t\t<div class=\"sidebar sidebar-dark sidebar-main sidebar-expand-lg sidebar-main-resized\">

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
\t\t\t\t\t\t\t<a href=\"../full/index.html\" class=\"nav-link\">
\t\t\t\t\t\t\t\t<i class=\"ph-house\"></i>
\t\t\t\t\t\t\t\t<span>Dashboard</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<!-- Layout -->
\t\t\t\t\t\t<li class=\"nav-item-header\">
\t\t\t\t\t\t\t<div class=\"text-uppercase fs-sm lh-sm opacity-50 sidebar-resize-hide\">Layout</div>
\t\t\t\t\t\t\t<i class=\"ph-dots-three sidebar-resize-show\"></i>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"nav-item nav-item-submenu nav-item-expanded nav-item-open\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">
\t\t\t\t\t\t\t\t<i class=\"ph-layout\"></i>
\t\t\t\t\t\t\t\t<span>Page layouts</span>
\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t<ul class=\"nav-group-sub collapse show\">
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"layout_static.html\" class=\"nav-link\">Static layout</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"layout_no_header.html\" class=\"nav-link\">No header</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"layout_no_footer.html\" class=\"nav-link\">No footer</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item-divider\"></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"layout_fixed_header.html\" class=\"nav-link\">Fixed header</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"layout_fixed_footer.html\" class=\"nav-link\">Fixed footer</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item-divider\"></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"layout_2_sidebars_1_side.html\" class=\"nav-link active\">2 sidebars on 1 side</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"layout_2_sidebars_2_sides.html\" class=\"nav-link\">2 sidebars on 2 sides</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"layout_3_sidebars.html\" class=\"nav-link\">3 sidebars</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item-divider\"></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"layout_boxed_page.html\" class=\"nav-link\">Boxed page</a></li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\"><a href=\"layout_boxed_content.html\" class=\"nav-link\">Boxed content</a></li>
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

\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<!-- /main navigation -->

\t\t\t</div>
\t\t\t<!-- /sidebar content -->
\t\t\t
\t\t</div>
\t\t<!-- /main sidebar -->


\t\t<!-- Secondary sidebar -->
\t\t<div class=\"sidebar sidebar-secondary sidebar-expand-lg\">

\t\t\t<!-- Expand button -->
\t\t\t<button type=\"button\" class=\"btn btn-sidebar-expand sidebar-control sidebar-secondary-toggle h-100\">
\t\t\t\t<i class=\"ph-caret-right\"></i>
\t\t\t</button>
\t\t\t<!-- /expand button -->


\t\t\t<!-- Sidebar content -->
\t\t\t<div class=\"sidebar-content\">

\t\t\t\t<!-- Header -->
\t\t\t\t<div class=\"sidebar-section sidebar-section-body d-flex align-items-center pb-0\">
\t\t\t\t\t<h5 class=\"mb-0\">Sidebar</h5>
\t\t\t\t\t<div class=\"ms-auto\">
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-light border-transparent btn-icon rounded-pill btn-sm sidebar-control sidebar-secondary-toggle d-none d-lg-inline-flex\">
\t\t\t\t\t\t\t<i class=\"ph-arrows-left-right\"></i>
\t\t\t\t\t\t</button>

\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-light border-transparent btn-icon rounded-pill btn-sm sidebar-mobile-secondary-toggle d-lg-none\">
\t\t\t\t\t\t\t<i class=\"ph-x\"></i>
\t\t\t\t\t\t</button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- /header -->


\t\t\t\t<!-- Sidebar search -->
\t\t\t\t<div class=\"sidebar-section\">
\t\t\t\t\t<div class=\"sidebar-section-header border-bottom\">
\t\t\t\t\t\t<span class=\"fw-semibold\">Sidebar search</span>
\t\t\t\t\t\t<div class=\"ms-auto\">
\t                \t\t<a href=\"#sidebar_secondary_search\" class=\"text-reset\" data-bs-toggle=\"collapse\">
\t                \t\t\t<i class=\"ph-caret-down collapsible-indicator\"></i>
\t                \t\t</a>
\t                \t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"collapse show\" id=\"sidebar_secondary_search\">
\t\t\t\t\t\t<div class=\"sidebar-section-body\">
\t\t\t\t\t\t\t<div class=\"form-control-feedback form-control-feedback-end\">
\t\t\t\t\t\t\t\t<input type=\"search\" class=\"form-control\" placeholder=\"Search\">
\t\t\t\t\t\t\t\t<div class=\"form-control-feedback-icon\">
\t\t\t\t\t\t\t\t\t<i class=\"ph-magnifying-glass opacity-50\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- /sidebar search -->


\t\t\t\t<!-- Sub navigation -->
\t\t\t\t<div class=\"sidebar-section\">
\t\t\t\t\t<div class=\"sidebar-section-header border-bottom\">
\t\t\t\t\t\t<span class=\"fw-semibold\">Navigation</span>
\t\t\t\t\t\t<div class=\"ms-auto\">
\t                \t\t<a href=\"#sidebar_secondary_navigation\" class=\"text-reset\" data-bs-toggle=\"collapse\">
\t\t\t\t\t\t\t\t<i class=\"ph-caret-down collapsible-indicator\"></i>
\t                \t\t</a>
\t                \t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"collapse show\" id=\"sidebar_secondary_navigation\">
\t\t\t\t\t\t<ul class=\"nav nav-sidebar my-2\" data-nav-type=\"accordion\">
\t\t\t\t\t\t\t<li class=\"nav-item-header opacity-50\">Header</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t<i class=\"ph-plus-circle me-2\"></i>
\t\t\t\t\t\t\t\t\tNav item 1
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t<i class=\"ph-circles-three-plus me-2\"></i>
\t\t\t\t\t\t\t\t\tNav item 2
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t<i class=\"ph-user-plus me-2\"></i>
\t\t\t\t\t\t\t\t\tNav item 3
\t\t\t\t\t\t\t\t\t<span class=\"badge bg-primary rounded-pill ms-auto\">Badge</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item-header opacity-50\">Header</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t<i class=\"ph-kanban me-2\"></i>
\t\t\t\t\t\t\t\t\tNav item 4
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link\">
\t\t\t\t\t\t\t\t\t<i class=\"ph-file-plus me-2\"></i>
\t\t\t\t\t\t\t\t\tNav item 5
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"nav-link disabled\">
\t\t\t\t\t\t\t\t\t<i class=\"ph-file-x me-2\"></i>
\t\t\t\t\t\t\t\t\tNav item 6
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<!-- /sub navigation -->

\t\t\t</div>
\t\t\t<!-- /sidebar content -->

\t\t</div>
\t\t<!-- /secondary sidebar -->


\t\t<!-- Main content -->
\t\t<div class=\"content-wrapper\">

\t\t\t<!-- Inner content -->
\t\t\t<div class=\"content-inner\">

\t\t\t\t<!-- Page header -->
\t\t\t\t<div class=\"page-header page-header-light shadow\">
\t\t\t\t\t<div class=\"page-header-content d-lg-flex\">
\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t<h4 class=\"page-title mb-0\">
\t\t\t\t\t\t\t\tSeed - <span class=\"fw-normal\">2 Sidebars on 1 Side</span>
\t\t\t\t\t\t\t</h4>

\t\t\t\t\t\t\t<a href=\"#page_header\" class=\"btn btn-light align-self-center collapsed d-lg-none border-transparent rounded-pill p-0 ms-auto\" data-bs-toggle=\"collapse\">
\t\t\t\t\t\t\t\t<i class=\"ph-caret-down collapsible-indicator ph-sm m-1\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"collapse d-lg-block my-lg-auto ms-lg-auto\" id=\"page_header\">
\t\t\t\t\t\t\t<div class=\"hstack gap-3 mb-3 mb-lg-0\">
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary\">
\t\t\t\t\t\t\t\t\t<i class=\"ph-gear me-2\"></i>
\t\t\t\t\t\t\t\t\tButton
\t\t\t\t\t\t\t\t</button>

\t\t\t\t\t\t\t\t<div class=\"dropdown\">
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-light dropdown-toggle\" data-bs-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t\t\tDropdown
\t\t\t\t\t\t\t\t\t</button>

\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-end\">
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"dropdown-item\">Menu item 1</button>
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"dropdown-item\">Menu item 2</button>
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"dropdown-item\">Menu item 3</button>
\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"dropdown-item\">Menu item 4</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"page-header-content d-lg-flex border-top\">
\t\t\t\t\t\t<div class=\"d-flex\">
\t\t\t\t\t\t\t<div class=\"breadcrumb py-2\">
\t\t\t\t\t\t\t\t<a href=\"index.html\" class=\"breadcrumb-item\"><i class=\"ph-house\"></i></a>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"breadcrumb-item\">Home</a>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"breadcrumb-item\">Link</a>
\t\t\t\t\t\t\t\t<span class=\"breadcrumb-item active\">Current</span>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<a href=\"#breadcrumb_elements\" class=\"btn btn-light align-self-center collapsed d-lg-none border-transparent rounded-pill p-0 ms-auto\" data-bs-toggle=\"collapse\">
\t\t\t\t\t\t\t\t<i class=\"ph-caret-down collapsible-indicator ph-sm m-1\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"collapse d-lg-block ms-lg-auto\" id=\"breadcrumb_elements\">
\t\t\t\t\t\t\t<div class=\"d-lg-flex mb-2 mb-lg-0\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"d-flex align-items-center text-body py-2\">
\t\t\t\t\t\t\t\t\tLink
\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t<div class=\"dropdown ms-lg-3\">
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"d-flex align-items-center text-body dropdown-toggle py-2\" data-bs-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t<span class=\"flex-1\">Dropdown</span>
\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-end w-100 w-lg-auto\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\tAction
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\tAnother action
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\tOne more action
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\tSeparate action
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

\t\t\t\t\t<!-- Basic card -->
\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t\t<h5 class=\"mb-0\">Basic card</h5>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t<h6>Start your development with no hassle!</h6>
\t\t\t\t\t\t\t<p class=\"mb-3\">Common problem of templates is that all code is deeply integrated into the core. This limits your freedom in decreasing amount of code, i.e. it becomes pretty difficult to remove unnecessary code from the project. Limitless allows you to remove unnecessary and extra code easily just by disabling styling of certain components in <code>_config.scss</code>. Styling of all 3rd party components are stored in separate SCSS files that begin with <code>\$enable-[component]</code> condition, which checks if this component is enabled in SCSS configuration and either includes or excludes it from bundled CSS file. Use only components you actually need!</p>

\t\t\t\t\t\t\t<h6>What is this?</h6>
\t\t\t\t\t\t\t<p class=\"mb-3\">Starter kit is a set of pages, useful for developers to start development process from scratch. Each layout includes base components only: layout, page kits, color system which is still optional, bootstrap files and bootstrap overrides. No extra CSS/JS files and markup. CSS files are compiled without any plugins or components. Starter kit is moved to a separate folder for better accessibility.</p>

\t\t\t\t\t\t\t<h6>How does it work?</h6>
\t\t\t\t\t\t\t<p>You open one of the starter pages, add necessary plugins, enable components in <code>_config.scss</code> file, compile new CSS. That's it. It's also recommended to open one of main pages with functionality you need and copy all paths/JS code from there to your new page, if you don't need to change file structure.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- /basic card -->


\t\t\t\t\t<!-- Basic table -->
\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t<div class=\"card-header\">
\t\t\t\t\t\t\t<h5 class=\"mb-0\">Basic table</h5>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\tSeed project includes the most basic components that can help you in development process - basic grid example, card, table and form layouts with standard components. Nothing extra. Easily turn on and off styles of different components to keep your CSS as clean as possible. Bootstrap components are always enabled.
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"table-responsive\">
\t\t\t\t\t\t\t<table class=\"table\">
\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<th>#</th>
\t\t\t\t\t\t\t\t\t\t<th>First Name</th>
\t\t\t\t\t\t\t\t\t\t<th>Last Name</th>
\t\t\t\t\t\t\t\t\t\t<th>Username</th>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td>1</td>
\t\t\t\t\t\t\t\t\t\t<td>Eugene</td>
\t\t\t\t\t\t\t\t\t\t<td>Kopyov</td>
\t\t\t\t\t\t\t\t\t\t<td>@Kopyov</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td>2</td>
\t\t\t\t\t\t\t\t\t\t<td>Victoria</td>
\t\t\t\t\t\t\t\t\t\t<td>Baker</td>
\t\t\t\t\t\t\t\t\t\t<td>@Vicky</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td>3</td>
\t\t\t\t\t\t\t\t\t\t<td>James</td>
\t\t\t\t\t\t\t\t\t\t<td>Alexander</td>
\t\t\t\t\t\t\t\t\t\t<td>@Alex</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t<td>4</td>
\t\t\t\t\t\t\t\t\t\t<td>Franklin</td>
\t\t\t\t\t\t\t\t\t\t<td>Morrison</td>
\t\t\t\t\t\t\t\t\t\t<td>@Frank</td>
\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- /basic table -->


\t\t\t\t\t<!-- Form layouts -->
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-lg-6\">

\t\t\t\t\t\t\t<!-- Horizontal form -->
\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t<div class=\"card-header d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t<h5 class=\"mb-0\">Horizontal form</h5>
\t\t\t\t\t\t\t\t\t<div class=\"hstack gap-2 ms-auto\">
\t\t\t\t\t\t\t\t\t\t<a class=\"text-body\" data-card-action=\"collapse\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-caret-down\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a class=\"text-body\" data-card-action=\"reload\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-arrows-clockwise\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a class=\"text-body\" data-card-action=\"remove\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-x\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t                \t</div>

\t\t\t                \t<div class=\"collapse show\">
\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t<form action=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"row mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-lg-3 col-form-label\">Text input</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"Text input\">
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"row mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-lg-3 col-form-label\">Password</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"password\" class=\"form-control\" placeholder=\"Password input\">
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t                        <div class=\"row mb-3\">
\t\t\t\t\t                        \t<label class=\"col-lg-3 col-form-label\">Select</label>
\t\t\t\t\t                        \t<div class=\"col-lg-9\">
\t\t\t\t\t\t                            <select name=\"select\" class=\"form-select\">
\t\t\t\t\t\t                                <option value=\"opt1\">Basic select</option>
\t\t\t\t\t\t                                <option value=\"opt2\">Option 2</option>
\t\t\t\t\t\t                                <option value=\"opt3\">Option 3</option>
\t\t\t\t\t\t                                <option value=\"opt4\">Option 4</option>
\t\t\t\t\t\t                                <option value=\"opt5\">Option 5</option>
\t\t\t\t\t\t                                <option value=\"opt6\">Option 6</option>
\t\t\t\t\t\t                                <option value=\"opt7\">Option 7</option>
\t\t\t\t\t\t                                <option value=\"opt8\">Option 8</option>
\t\t\t\t\t\t                            </select>
\t\t\t\t\t                            </div>
\t\t\t\t\t                        </div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"row mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"col-lg-3 col-form-label\">Textarea</label>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-9\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<textarea rows=\"5\" cols=\"5\" class=\"form-control\" placeholder=\"Default textarea\"></textarea>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-end\">
\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">Submit form <i class=\"ph-paper-plane-tilt ms-2\"></i></button>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- /horizotal form -->

\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"col-lg-6\">

\t\t\t\t\t\t\t<!-- Vertical form -->
\t\t\t\t\t\t\t<div class=\"card\">
\t\t\t\t\t\t\t\t<div class=\"card-header d-flex align-items-center\">
\t\t\t\t\t\t\t\t\t<h5 class=\"mb-0\">Vertical form</h5>
\t\t\t\t\t\t\t\t\t<div class=\"hstack gap-2 ms-auto\">
\t\t\t\t\t\t\t\t\t\t<a class=\"text-body\" data-card-action=\"collapse\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-caret-down\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a class=\"text-body\" data-card-action=\"reload\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-arrows-clockwise\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t<a class=\"text-body\" data-card-action=\"remove\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-x\"></i>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t                \t</div>

\t\t\t                \t<div class=\"collapse show\">
\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t<form action=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-label\">Text input</label>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"Text input\">
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t                        <div class=\"mb-3\">
\t\t\t\t\t                        \t<label class=\"form-label\">Select</label>
\t\t\t\t\t                            <select name=\"select\" class=\"form-select\">
\t\t\t\t\t                                <option value=\"opt1\">Basic select</option>
\t\t\t\t\t                                <option value=\"opt2\">Option 2</option>
\t\t\t\t\t                                <option value=\"opt3\">Option 3</option>
\t\t\t\t\t                                <option value=\"opt4\">Option 4</option>
\t\t\t\t\t                                <option value=\"opt5\">Option 5</option>
\t\t\t\t\t                                <option value=\"opt6\">Option 6</option>
\t\t\t\t\t                                <option value=\"opt7\">Option 7</option>
\t\t\t\t\t                                <option value=\"opt8\">Option 8</option>
\t\t\t\t\t                            </select>
\t\t\t\t\t                        </div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-label\">Textarea</label>
\t\t\t\t\t\t\t\t\t\t\t\t<textarea rows=\"4\" cols=\"4\" class=\"form-control\" placeholder=\"Default textarea\"></textarea>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-end\">
\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">Submit form <i class=\"ph-paper-plane-tilt ms-2\"></i></button>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<!-- /vertical form -->

\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- /form layouts -->

\t\t\t\t</div>
\t\t\t\t<!-- /content area -->


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
</html>", "layout_2_sidebars_1_side.html.twig", "C:\\xampp\\htdocs\\projettt\\proj1\\templates\\layout_2_sidebars_1_side.html.twig");
    }
}
