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

/* registration/register.html.twig */
class __TwigTemplate_878c5f1297c838d719e6c918512d9308 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "registration/register.html.twig", 1);
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

        echo "Register";
        
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
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/fonts/inter/inter.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
\t<link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/icons/phosphor/styles.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
\t<link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/ltr/all.min.css"), "html", null, true);
        echo "\" id=\"stylesheet\" rel=\"stylesheet\" type=\"text/css\">
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
\t<div class=\"navbar navbar-dark navbar-static py-2\">
\t\t<div class=\"container-fluid\">
\t\t\t<div class=\"navbar-brand\">
\t\t\t\t<a href=\"index.html\" class=\"d-inline-flex align-items-center\">
\t\t\t\t\t<img src=\"../../../assets/images/logo_icon.svg\" alt=\"\">
\t\t\t\t\t<img src=\"../../../assets/images/logo_text_light.svg\" class=\"d-none d-sm-inline-block h-16px ms-3\" alt=\"\">
\t\t\t\t</a>
\t\t\t</div>

\t\t\t<div class=\"d-flex justify-content-end align-items-center ms-auto\">
\t\t\t\t<ul class=\"navbar-nav flex-row\">
\t\t\t\t\t
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a href=\"#\" class=\"navbar-nav-link navbar-nav-link-icon rounded ms-1\">
\t\t\t\t\t\t\t<div class=\"d-flex align-items-center mx-md-1\">
\t\t\t\t\t\t\t<i class=\"ph-user-circle-plus\"></i>
\t\t\t\t\t\t\t<span class=\"d-none d-md-inline-block ms-2\">Register</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a href=\"";
        // line 57
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
        // line 65
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
\t\t\t\t<div class=\"content d-flex justify-content-center align-items-center\">

\t\t\t\t\t<!-- Registration form -->
                   ";
        // line 92
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 92, $this->source); })()), 'errors');
        echo "
";
        // line 93
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 93, $this->source); })()), 'form_start');
        echo "
    ";
        // line 94
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 94, $this->source); })()), "_token", [], "any", false, false, false, 94), 'widget');
        echo "

<form action=\"\" class=\"flex-fill\">
    <div class=\"row\">
        <div class=\"col-lg-12 offset-lg-15\">
            <div class=\"card mb-0\">
                <div class=\"card-body\">
                    <div class=\"text-center mb-3\">
                        <div class=\"d-inline-flex align-items-center justify-content-center mb-4 mt-2\">
                            <img src=\"../../../assets/images/logo_icon.svg\" class=\"h-48px\" alt=\"\">
                        </div>
                        <h5 class=\"mb-0\">Create account</h5>
                        <span class=\"d-block text-muted\">All fields are required</span>
                    </div>

                    <div class=\"mb-3\">
                        ";
        // line 110
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 110, $this->source); })()), "firstname", [], "any", false, false, false, 110), 'label', ["label_attr" => ["class" => "form-label"], "label" => "First name"]);
        echo "
                        <div class=\"form-control-feedback form-control-feedback-start\">
                            ";
        // line 112
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 112, $this->source); })()), "firstname", [], "any", false, false, false, 112), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            <div class=\"form-control-feedback-icon\">
                                <i class=\"ph-user-circle-plus text-muted\"></i>
                            </div>
                        </div>
                    </div>

                    <div class=\"mb-3\">
                        ";
        // line 120
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 120, $this->source); })()), "lastname", [], "any", false, false, false, 120), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Last name"]);
        echo "
                        <div class=\"form-control-feedback form-control-feedback-start\">
                            ";
        // line 122
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 122, $this->source); })()), "lastname", [], "any", false, false, false, 122), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            <div class=\"form-control-feedback-icon\">
                                <i class=\"ph-user-circle-plus text-muted\"></i>
                            </div>
                        </div>
                    </div>
                    
                    <div class=\"mb-3\">
                        ";
        // line 130
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 130, $this->source); })()), "adress", [], "any", false, false, false, 130), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Address"]);
        echo "
                        <div class=\"form-control-feedback form-control-feedback-start\">
                            <div class=\"input-group\">
                                ";
        // line 133
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 133, $this->source); })()), "adress", [], "any", false, false, false, 133), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                <div class=\"input-group-append\">
                                    <!-- You can add an icon here if needed -->
                                </div>
                            </div>
                            <div class=\"form-control-feedback-icon\">
                                <i class=\"ph-user-circle-plus text-muted\"></i>
                            </div>
                        </div> 
                    </div>

                    <div class=\"mb-3\">
                        ";
        // line 145
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 145, $this->source); })()), "email", [], "any", false, false, false, 145), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Your email"]);
        echo "
                        <div class=\"form-control-feedback form-control-feedback-start\">
                            ";
        // line 147
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 147, $this->source); })()), "email", [], "any", false, false, false, 147), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            <div class=\"form-control-feedback-icon\">
                                <i class=\"ph-at text-muted\"></i>
                            </div>
                        </div>
                    </div>


                    <div class=\"mb-3\">
                        ";
        // line 156
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 156, $this->source); })()), "plainPassword", [], "any", false, false, false, 156), 'label', ["label_attr" => ["class" => "form-label"], "label" => "Password"]);
        echo "
                        <div class=\"form-control-feedback form-control-feedback-start\">
                            ";
        // line 158
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 158, $this->source); })()), "plainPassword", [], "any", false, false, false, 158), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            <div class=\"form-control-feedback-icon\">
                                <i class=\"ph-lock text-muted\"></i>
                            </div>
                        </div>
                    </div>

                    

                    <div class=\"mb-2\">
                        <label class=\"form-check\">
                            ";
        // line 169
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 169, $this->source); })()), "agreeTerms", [], "any", false, false, false, 169), 'widget', ["attr" => ["class" => "form-check-input"]]);
        echo "
                            <span class=\"form-check-label\">Accept <a href=\"#\">terms of service</a></span>
                        </label>
                    </div>

                    <div class=\"mb-2\">
                        <label class=\"form-check\">
                            <input type=\"checkbox\" name=\"remember\" class=\"form-check-input\" checked>
                            <span class=\"form-check-label\">Send me <a href=\"#\">test account settings</a></span>
                        </label>
                    </div>

                    <div class=\"mb-2\">
                        <label class=\"form-check\">
                            <input type=\"checkbox\" name=\"remember\" class=\"form-check-input\" checked>
                            <span class=\"form-check-label\">Subscribe to monthly newsletter</span>
                        </label>
                    </div>
                </div>

                <div class=\"card-body text-end border-top text-center\">
                    <button type=\"submit\" class=\"btn btn-primary\">
                        <i class=\"ph-plus me-2\"></i>
                        Create account
                    </button>
                </div>
            </div>
        </div>
    </div>
</form>

";
        // line 200
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 200, $this->source); })()), 'form_end');
        echo "

\t\t\t\t\t<!-- /registration form -->

\t\t\t\t</div>
\t\t\t\t<!-- /content area -->

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
        return "registration/register.html.twig";
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
        return array (  341 => 200,  307 => 169,  293 => 158,  288 => 156,  276 => 147,  271 => 145,  256 => 133,  250 => 130,  239 => 122,  234 => 120,  223 => 112,  218 => 110,  199 => 94,  195 => 93,  191 => 92,  161 => 65,  150 => 57,  109 => 19,  105 => 18,  101 => 17,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Register{% endblock %}

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
\t<script src=\"../../../assets/demo/demo_configurator.js\"></script>
\t<script src=\"../../../assets/js/bootstrap/bootstrap.bundle.min.js\"></script>
\t<!-- /core JS files -->

\t<!-- Theme JS files -->
\t<script src=\"assets/js/app.js\"></script>
\t<!-- /theme JS files -->

</head>

<body>

\t<!-- Main navbar -->
\t<div class=\"navbar navbar-dark navbar-static py-2\">
\t\t<div class=\"container-fluid\">
\t\t\t<div class=\"navbar-brand\">
\t\t\t\t<a href=\"index.html\" class=\"d-inline-flex align-items-center\">
\t\t\t\t\t<img src=\"../../../assets/images/logo_icon.svg\" alt=\"\">
\t\t\t\t\t<img src=\"../../../assets/images/logo_text_light.svg\" class=\"d-none d-sm-inline-block h-16px ms-3\" alt=\"\">
\t\t\t\t</a>
\t\t\t</div>

\t\t\t<div class=\"d-flex justify-content-end align-items-center ms-auto\">
\t\t\t\t<ul class=\"navbar-nav flex-row\">
\t\t\t\t\t
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a href=\"#\" class=\"navbar-nav-link navbar-nav-link-icon rounded ms-1\">
\t\t\t\t\t\t\t<div class=\"d-flex align-items-center mx-md-1\">
\t\t\t\t\t\t\t<i class=\"ph-user-circle-plus\"></i>
\t\t\t\t\t\t\t<span class=\"d-none d-md-inline-block ms-2\">Register</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t\t<a href=\"{{path ('app_login')}}\" class=\"navbar-nav-link navbar-nav-link-icon rounded ms-1\">
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
\t\t\t\t<div class=\"content d-flex justify-content-center align-items-center\">

\t\t\t\t\t<!-- Registration form -->
                   {{ form_errors(registrationForm) }}
{{ form_start(registrationForm) }}
    {{ form_widget(registrationForm._token) }}

<form action=\"\" class=\"flex-fill\">
    <div class=\"row\">
        <div class=\"col-lg-12 offset-lg-15\">
            <div class=\"card mb-0\">
                <div class=\"card-body\">
                    <div class=\"text-center mb-3\">
                        <div class=\"d-inline-flex align-items-center justify-content-center mb-4 mt-2\">
                            <img src=\"../../../assets/images/logo_icon.svg\" class=\"h-48px\" alt=\"\">
                        </div>
                        <h5 class=\"mb-0\">Create account</h5>
                        <span class=\"d-block text-muted\">All fields are required</span>
                    </div>

                    <div class=\"mb-3\">
                        {{ form_label(registrationForm.firstname, 'First name', {'label_attr': {'class': 'form-label'}}) }}
                        <div class=\"form-control-feedback form-control-feedback-start\">
                            {{ form_widget(registrationForm.firstname, {'attr': {'class': 'form-control'}}) }}
                            <div class=\"form-control-feedback-icon\">
                                <i class=\"ph-user-circle-plus text-muted\"></i>
                            </div>
                        </div>
                    </div>

                    <div class=\"mb-3\">
                        {{ form_label(registrationForm.lastname, 'Last name', {'label_attr': {'class': 'form-label'}}) }}
                        <div class=\"form-control-feedback form-control-feedback-start\">
                            {{ form_widget(registrationForm.lastname, {'attr': {'class': 'form-control'}}) }}
                            <div class=\"form-control-feedback-icon\">
                                <i class=\"ph-user-circle-plus text-muted\"></i>
                            </div>
                        </div>
                    </div>
                    
                    <div class=\"mb-3\">
                        {{ form_label(registrationForm.adress, 'Address', {'label_attr': {'class': 'form-label'}}) }}
                        <div class=\"form-control-feedback form-control-feedback-start\">
                            <div class=\"input-group\">
                                {{ form_widget(registrationForm.adress, {'attr': {'class': 'form-control'}}) }}
                                <div class=\"input-group-append\">
                                    <!-- You can add an icon here if needed -->
                                </div>
                            </div>
                            <div class=\"form-control-feedback-icon\">
                                <i class=\"ph-user-circle-plus text-muted\"></i>
                            </div>
                        </div> 
                    </div>

                    <div class=\"mb-3\">
                        {{ form_label(registrationForm.email, 'Your email', {'label_attr': {'class': 'form-label'}}) }}
                        <div class=\"form-control-feedback form-control-feedback-start\">
                            {{ form_widget(registrationForm.email, {'attr': {'class': 'form-control'}}) }}
                            <div class=\"form-control-feedback-icon\">
                                <i class=\"ph-at text-muted\"></i>
                            </div>
                        </div>
                    </div>


                    <div class=\"mb-3\">
                        {{ form_label(registrationForm.plainPassword, 'Password', {'label_attr': {'class': 'form-label'}}) }}
                        <div class=\"form-control-feedback form-control-feedback-start\">
                            {{ form_widget(registrationForm.plainPassword, {'attr': {'class': 'form-control'}}) }}
                            <div class=\"form-control-feedback-icon\">
                                <i class=\"ph-lock text-muted\"></i>
                            </div>
                        </div>
                    </div>

                    

                    <div class=\"mb-2\">
                        <label class=\"form-check\">
                            {{ form_widget(registrationForm.agreeTerms, {'attr': {'class': 'form-check-input'}}) }}
                            <span class=\"form-check-label\">Accept <a href=\"#\">terms of service</a></span>
                        </label>
                    </div>

                    <div class=\"mb-2\">
                        <label class=\"form-check\">
                            <input type=\"checkbox\" name=\"remember\" class=\"form-check-input\" checked>
                            <span class=\"form-check-label\">Send me <a href=\"#\">test account settings</a></span>
                        </label>
                    </div>

                    <div class=\"mb-2\">
                        <label class=\"form-check\">
                            <input type=\"checkbox\" name=\"remember\" class=\"form-check-input\" checked>
                            <span class=\"form-check-label\">Subscribe to monthly newsletter</span>
                        </label>
                    </div>
                </div>

                <div class=\"card-body text-end border-top text-center\">
                    <button type=\"submit\" class=\"btn btn-primary\">
                        <i class=\"ph-plus me-2\"></i>
                        Create account
                    </button>
                </div>
            </div>
        </div>
    </div>
</form>

{{ form_end(registrationForm) }}

\t\t\t\t\t<!-- /registration form -->

\t\t\t\t</div>
\t\t\t\t<!-- /content area -->

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
", "registration/register.html.twig", "C:\\xampp\\htdocs\\projettt\\proj1\\templates\\registration\\register.html.twig");
    }
}
