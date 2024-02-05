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

/* security/login.html.twig */
class __TwigTemplate_1cd2eb668e22ce57982f4bd69ca8a059 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
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

        echo "Log in!";
        
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
        echo "<form method=\"post\">
    ";
        // line 7
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 7, $this->source); })())) {
            // line 8
            echo "        <div class=\"alert alert-danger\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 8, $this->source); })()), "messageKey", [], "any", false, false, false, 8), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 8, $this->source); })()), "messageData", [], "any", false, false, false, 8), "security"), "html", null, true);
            echo "</div>
    ";
        }
        // line 10
        echo "
    ";
        // line 11
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 11, $this->source); })()), "user", [], "any", false, false, false, 11)) {
            // line 12
            echo "        <div class=\"mb-3\">
            You are logged in as ";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "user", [], "any", false, false, false, 13), "userIdentifier", [], "any", false, false, false, 13), "html", null, true);
            echo ", <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Logout</a>
        </div>
    ";
        }
        // line 16
        echo "    <!DOCTYPE html>
<html lang=\"en\" dir=\"ltr\">
<head>
\t<meta charset=\"utf-8\">
\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
\t<title>Limitless - Responsive Web Application Kit by Eugene Kopyov</title>

\t<!-- Global stylesheets -->
\t<link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/fonts/inter/inter.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
\t<link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/icons/phosphor/styles.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
\t<link href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/ltr/all.min.css"), "html", null, true);
        echo "\" id=\"stylesheet\" rel=\"stylesheet\" type=\"text/css\">
\t<!-- /global stylesheets -->

\t<!-- Core JS files -->
\t<script src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/demo/demo_configurator.js"), "html", null, true);
        echo "\"></script>
\t<script src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/bootstrap/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
\t<!-- /core JS files -->

\t<!-- Theme JS files -->
\t<script src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/app.js"), "html", null, true);
        echo "\"></script>
\t<!-- /theme JS files -->

</head>

<body>

\t<!-- Main navbar -->
\t<div class=\"navbar navbar-dark navbar-static py-2\">
\t\t<div class=\"container-fluid\">
\t\t\t<div class=\"navbar-brand\">
\t\t\t\t<a href=\"index.html\" class=\"d-inline-flex align-items-center\">
\t\t\t\t\t<img src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo_icon.svg"), "html", null, true);
        echo "\" alt=\"\">
\t\t\t\t\t<img src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo_text_light.svg"), "html", null, true);
        echo "\" class=\"d-none d-sm-inline-block h-16px ms-3\" alt=\"\">
\t\t\t\t</a>
\t\t\t</div>

\t\t\t<div class=\"d-flex justify-content-end align-items-center ms-auto\">
\t\t\t\t<ul class=\"navbar-nav flex-row\">
\t\t\t\t
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a href=\"";
        // line 57
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        echo "\" class=\"navbar-nav-link navbar-nav-link-icon rounded ms-1\">
\t\t\t\t\t\t\t<div class=\"d-flex align-items-center mx-md-1\">
\t\t\t\t\t\t\t<i class=\"ph-user-circle-plus\"></i>
\t\t\t\t\t\t\t<span class=\"d-none d-md-inline-block ms-2\">Register</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a href=\"";
        // line 65
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\" class=\"navbar-nav-link navbar-nav-link-icon rounded ms-1\">
\t\t\t\t\t\t\t<div class=\"d-flex align-items-center mx-md-1\">
\t\t\t\t\t\t\t<i class=\"ph-user-circle\"></i>
\t\t\t\t\t\t\t<span class=\"d-none d-md-inline-block ms-2\">Login</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a href=\"";
        // line 73
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_client_index");
        echo "\" class=\"navbar-nav-link navbar-nav-link-icon rounded ms-1\">
\t\t\t\t\t\t\t<div class=\"d-flex align-items-center mx-md-1\">
\t\t\t\t\t\t\t<i class=\"ph-house\"></i>
\t\t\t\t\t\t\t<span class=\"d-none d-md-inline-block ms-2\">Home</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t</div>
\t<!-- /main navbar -->


\t<!-- Page content -->
\t<div class=\"page-content\">

\t\t<!-- Main content -->
\t\t<div class=\"content-wrapper\">

\t\t\t<!-- Inner content -->
\t\t\t<div class=\"content-inner\">

\t\t\t\t<!-- Content area -->
\t\t\t\t<br>
\t\t\t\t<div class=\"content d-flex justify-content-center align-items-center\">

\t\t\t\t\t<!-- Login form -->
\t\t\t\t\t<form class=\"login-form\" action=\"";
        // line 101
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin");
        echo "\">
\t\t\t\t\t\t<div class=\"card mb-0\">
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t<div class=\"text-center mb-3\">
\t\t\t\t\t\t\t\t\t<div class=\"d-inline-flex align-items-center justify-content-center mb-4 mt-2\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/images/logo_icon.svg"), "html", null, true);
        echo "\" class=\"h-48px\" alt=\"\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<h5 class=\"mb-0\">Login to your account</h5>
\t\t\t\t\t\t\t\t\t<span class=\"d-block text-muted\">Enter your credentials below</span>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t<label class=\"form-label\">email</label>
\t\t\t\t\t\t\t\t\t<div class=\"form-control-feedback form-control-feedback-start\">
\t\t\t\t\t\t\t\t\t\t<input type=\"email\" value=\"";
        // line 115
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 115, $this->source); })()), "html", null, true);
        echo "\" name=\"email\" id=\"inputEmail\" class=\"form-control\" autocomplete=\"email\" required autofocus placeholder=\"your email\">
\t\t\t\t\t\t\t\t\t\t<div class=\"form-control-feedback-icon\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-user-circle text-muted\"></i>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t<label class=\"form-label\">Password</label>
\t\t\t\t\t\t\t\t\t<div class=\"form-control-feedback form-control-feedback-start\">
\t\t\t\t\t\t\t\t\t\t<input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" autocomplete=\"current-password\" required placeholder=\"your password\">
\t\t\t\t\t\t\t\t\t\t<div class=\"form-control-feedback-icon\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-lock text-muted\"></i>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"mb-3 text-center\">
                                    <button class=\"btn btn-lg btn-primary\" type=\"submit\">Sign in</button>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t\t\t\t";
        // line 138
        echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
                                <input type=\"hidden\" name=\"_csrf_token\"
                     value=\"";
        // line 142
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">

                
           \t\t\t </form>
\t\t\t\t\t<!-- /login form -->

\t\t\t\t</div>
\t\t\t\t<!-- /content area -->
<br><br><br><br>


\t\t\t\t<!-- Footer -->
\t\t\t\t<div class=\"navbar navbar-sm navbar-footer border-top\">
\t\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t\t\t<span>&copy; 2022 <a href=\"https://themeforest.net/item/limitless-responsive-web-application-kit/13080328\">Limitless Web App Kit</a></span>

\t\t\t\t\t\t
\t\t\t\t\t
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
        return "security/login.html.twig";
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
        return array (  286 => 142,  280 => 138,  255 => 115,  243 => 106,  235 => 101,  204 => 73,  193 => 65,  182 => 57,  171 => 49,  167 => 48,  152 => 36,  145 => 32,  141 => 31,  134 => 27,  130 => 26,  126 => 25,  115 => 16,  107 => 13,  104 => 12,  102 => 11,  99 => 10,  93 => 8,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Log in!{% endblock %}

{% block body %}
<form method=\"post\">
    {% if error %}
        <div class=\"alert alert-danger\">{{ error.messageKey|trans(error.messageData, 'security') }}</div>
    {% endif %}

    {% if app.user %}
        <div class=\"mb-3\">
            You are logged in as {{ app.user.userIdentifier }}, <a href=\"{{ path('app_logout') }}\">Logout</a>
        </div>
    {% endif %}
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
\t<script src=\"{{ asset ('assets/js/app.js')}}\"></script>
\t<!-- /theme JS files -->

</head>

<body>

\t<!-- Main navbar -->
\t<div class=\"navbar navbar-dark navbar-static py-2\">
\t\t<div class=\"container-fluid\">
\t\t\t<div class=\"navbar-brand\">
\t\t\t\t<a href=\"index.html\" class=\"d-inline-flex align-items-center\">
\t\t\t\t\t<img src=\"{{ asset ('assets/images/logo_icon.svg')}}\" alt=\"\">
\t\t\t\t\t<img src=\"{{ asset ('assets/images/logo_text_light.svg')}}\" class=\"d-none d-sm-inline-block h-16px ms-3\" alt=\"\">
\t\t\t\t</a>
\t\t\t</div>

\t\t\t<div class=\"d-flex justify-content-end align-items-center ms-auto\">
\t\t\t\t<ul class=\"navbar-nav flex-row\">
\t\t\t\t
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a href=\"{{ path ('app_register')}}\" class=\"navbar-nav-link navbar-nav-link-icon rounded ms-1\">
\t\t\t\t\t\t\t<div class=\"d-flex align-items-center mx-md-1\">
\t\t\t\t\t\t\t<i class=\"ph-user-circle-plus\"></i>
\t\t\t\t\t\t\t<span class=\"d-none d-md-inline-block ms-2\">Register</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a href=\"{{ path ('app_login')}}\" class=\"navbar-nav-link navbar-nav-link-icon rounded ms-1\">
\t\t\t\t\t\t\t<div class=\"d-flex align-items-center mx-md-1\">
\t\t\t\t\t\t\t<i class=\"ph-user-circle\"></i>
\t\t\t\t\t\t\t<span class=\"d-none d-md-inline-block ms-2\">Login</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a href=\"{{ path ('app_client_index')}}\" class=\"navbar-nav-link navbar-nav-link-icon rounded ms-1\">
\t\t\t\t\t\t\t<div class=\"d-flex align-items-center mx-md-1\">
\t\t\t\t\t\t\t<i class=\"ph-house\"></i>
\t\t\t\t\t\t\t<span class=\"d-none d-md-inline-block ms-2\">Home</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>
\t</div>
\t<!-- /main navbar -->


\t<!-- Page content -->
\t<div class=\"page-content\">

\t\t<!-- Main content -->
\t\t<div class=\"content-wrapper\">

\t\t\t<!-- Inner content -->
\t\t\t<div class=\"content-inner\">

\t\t\t\t<!-- Content area -->
\t\t\t\t<br>
\t\t\t\t<div class=\"content d-flex justify-content-center align-items-center\">

\t\t\t\t\t<!-- Login form -->
\t\t\t\t\t<form class=\"login-form\" action=\"{{ path ('app_admin')}}\">
\t\t\t\t\t\t<div class=\"card mb-0\">
\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t<div class=\"text-center mb-3\">
\t\t\t\t\t\t\t\t\t<div class=\"d-inline-flex align-items-center justify-content-center mb-4 mt-2\">
\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset ('assets/images/logo_icon.svg')}}\" class=\"h-48px\" alt=\"\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<h5 class=\"mb-0\">Login to your account</h5>
\t\t\t\t\t\t\t\t\t<span class=\"d-block text-muted\">Enter your credentials below</span>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t<label class=\"form-label\">email</label>
\t\t\t\t\t\t\t\t\t<div class=\"form-control-feedback form-control-feedback-start\">
\t\t\t\t\t\t\t\t\t\t<input type=\"email\" value=\"{{ last_username }}\" name=\"email\" id=\"inputEmail\" class=\"form-control\" autocomplete=\"email\" required autofocus placeholder=\"your email\">
\t\t\t\t\t\t\t\t\t\t<div class=\"form-control-feedback-icon\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-user-circle text-muted\"></i>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t<label class=\"form-label\">Password</label>
\t\t\t\t\t\t\t\t\t<div class=\"form-control-feedback form-control-feedback-start\">
\t\t\t\t\t\t\t\t\t\t<input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" autocomplete=\"current-password\" required placeholder=\"your password\">
\t\t\t\t\t\t\t\t\t\t<div class=\"form-control-feedback-icon\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"ph-lock text-muted\"></i>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"mb-3 text-center\">
                                    <button class=\"btn btn-lg btn-primary\" type=\"submit\">Sign in</button>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t\t\t\t{# <a href=\"login_password_recover.html\">Forgot password?</a> #}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
                                <input type=\"hidden\" name=\"_csrf_token\"
                     value=\"{{ csrf_token('authenticate') }}\">

                
           \t\t\t </form>
\t\t\t\t\t<!-- /login form -->

\t\t\t\t</div>
\t\t\t\t<!-- /content area -->
<br><br><br><br>


\t\t\t\t<!-- Footer -->
\t\t\t\t<div class=\"navbar navbar-sm navbar-footer border-top\">
\t\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t\t\t<span>&copy; 2022 <a href=\"https://themeforest.net/item/limitless-responsive-web-application-kit/13080328\">Limitless Web App Kit</a></span>

\t\t\t\t\t\t
\t\t\t\t\t
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
</html>

{% endblock %}
", "security/login.html.twig", "C:\\xampp\\htdocs\\projettt\\proj1\\templates\\security\\login.html.twig");
    }
}
