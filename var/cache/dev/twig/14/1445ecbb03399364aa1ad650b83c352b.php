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

/* client/details.html.twig */
class __TwigTemplate_92d457f08217cbd813fb646fa6c7fcbc extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/details.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/details.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "client/details.html.twig", 1);
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

        echo "Details";
        
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
        echo "<!DOCTYPE html>
<html>
  <head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <title>Obaju : e-commerce template</title>
    <meta name=\"description\" content=\"\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"robots\" content=\"all,follow\">
    <!-- Bootstrap CSS-->
    <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\">
    <!-- Font Awesome CSS-->
    <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\">
    <!-- Google fonts - Roboto -->
    <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://fonts.googleapis.com/css?family=Roboto:100,300,400,700"), "html", null, true);
        echo "\">
    <!-- owl carousel-->
    <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/owl.carousel/assets/owl.carousel.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/owl.carousel/assets/owl.theme.default.css"), "html", null, true);
        echo "\">
    <!-- theme stylesheet-->
    <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.default.css"), "html", null, true);
        echo "\" id=\"theme-stylesheet\">
    <!-- Custom stylesheet - for your changes-->
    <link rel=\"stylesheet\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/custom.css"), "html", null, true);
        echo "\">
    <!-- Favicon-->
    <link rel=\"shortcut icon\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("favicon.png"), "html", null, true);
        echo "')}}\">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
        <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script><![endif]-->
  </head>
  <body>
    <!-- navbar-->
    <header class=\"header mb-5\">
      <!--
      *** TOPBAR ***
      _________________________________________________________
      -->
      ";
        // line 55
        echo "        <div id=\"login-modal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"Login\" aria-hidden=\"true\" class=\"modal fade\">
          <div class=\"modal-dialog modal-sm\">
            <div class=\"modal-content\">
              <div class=\"modal-header\">
                <h5 class=\"modal-title\">Customer login</h5>
                <button type=\"button\" data-dismiss=\"modal\" aria-label=\"Close\" class=\"close\"><span aria-hidden=\"true\">×</span></button>
              </div>
              <div class=\"modal-body\">
                <form action=\"customer-orders.html\" method=\"post\">
                  <div class=\"form-group\">
                    <input id=\"email-modal\" type=\"text\" placeholder=\"email\" class=\"form-control\">
                  </div>
                  <div class=\"form-group\">
                    <input id=\"password-modal\" type=\"password\" placeholder=\"password\" class=\"form-control\">
                  </div>
                  <p class=\"text-center\">
                    <button class=\"btn btn-primary\"><i class=\"fa fa-sign-in\"></i> Log in</button>
                  </p>
                </form>
                <p class=\"text-center text-muted\">Not registered yet?</p>
                <p class=\"text-center text-muted\"><a href=\"register.html\"><strong>Register now</strong></a>! It is easy and done in 1 minute and gives you access to special discounts and much more!</p>
              </div>
            </div>
          </div>
        </div>
        <!-- *** TOP BAR END ***-->
        
        
      </div>
      <nav class=\"navbar navbar-expand-lg\">
        <div class=\"container\"><a href=\"";
        // line 85
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_client_index");
        echo "\" class=\"navbar-brand home\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo.png"), "html", null, true);
        echo "\" alt=\"Obaju logo\" class=\"d-none d-md-inline-block\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo-small.png"), "html", null, true);
        echo "\" alt=\"Obaju logo\" class=\"d-inline-block d-md-none\"><span class=\"sr-only\">Obaju - go to homepage</span></a>
          <div class=\"navbar-buttons\">
            <button type=\"button\" data-toggle=\"collapse\" data-target=\"#navigation\" class=\"btn btn-outline-secondary navbar-toggler\"><span class=\"sr-only\">Toggle navigation</span><i class=\"fa fa-align-justify\"></i></button>
            <button type=\"button\" data-toggle=\"collapse\" data-target=\"#search\" class=\"btn btn-outline-secondary navbar-toggler\"><span class=\"sr-only\">Toggle search</span><i class=\"fa fa-search\"></i></button><a href=\"basket.html\" class=\"btn btn-outline-secondary navbar-toggler\"><i class=\"fa fa-shopping-cart\"></i></a>
          </div>
          <div id=\"navigation\" class=\"collapse navbar-collapse\">
            <ul class=\"navbar-nav mr-auto\">
              <li class=\"nav-item\"><a href=\"";
        // line 92
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_client_index");
        echo "\" class=\"nav-link \">Home</a></li>
              ";
        // line 94
        echo "                <ul class=\"dropdown-menu megamenu\">
                  <li>
                    <div class=\"row\">
                      <div class=\"col-md-6 col-lg-3\">
                        <h5>Clothing</h5>
                        <ul class=\"list-unstyled mb-3\">
                          <li class=\"nav-item\"><a href=\"category.html\" class=\"nav-link\">T-shirts</a></li>
                          <li class=\"nav-item\"><a href=\"category.html\" class=\"nav-link\">Shirts</a></li>
                          <li class=\"nav-item\"><a href=\"category.html\" class=\"nav-link\">Pants</a></li>
                          <li class=\"nav-item\"><a href=\"category.html\" class=\"nav-link\">Accessories</a></li>
                        </ul>
                      </div>
                      <div class=\"col-md-6 col-lg-3\">
                        <h5>Shoes</h5>
                        <ul class=\"list-unstyled mb-3\">
                          <li class=\"nav-item\"><a href=\"category.html\" class=\"nav-link\">Trainers</a></li>
                          <li class=\"nav-item\"><a href=\"category.html\" class=\"nav-link\">Sandals</a></li>
                          <li class=\"nav-item\"><a href=\"category.html\" class=\"nav-link\">Hiking shoes</a></li>
                          <li class=\"nav-item\"><a href=\"category.html\" class=\"nav-link\">Casual</a></li>
                        </ul>
                      </div>
                      <div class=\"col-md-6 col-lg-3\">
                        <h5>Accessories</h5>
                        <ul class=\"list-unstyled mb-3\">
                          <li class=\"nav-item\"><a href=\"category.html\" class=\"nav-link\">Trainers</a></li>
                          <li class=\"nav-item\"><a href=\"category.html\" class=\"nav-link\">Sandals</a></li>
                          <li class=\"nav-item\"><a href=\"category.html\" class=\"nav-link\">Hiking shoes</a></li>
                          <li class=\"nav-item\"><a href=\"category.html\" class=\"nav-link\">Casual</a></li>
                          <li class=\"nav-item\"><a href=\"category.html\" class=\"nav-link\">Hiking shoes</a></li>
                          <li class=\"nav-item\"><a href=\"category.html\" class=\"nav-link\">Casual</a></li>
                        </ul>
                      </div>
                      <div class=\"col-md-6 col-lg-3\">
                        <h5>Featured</h5>
                        <ul class=\"list-unstyled mb-3\">
                          <li class=\"nav-item\"><a href=\"category.html\" class=\"nav-link\">Trainers</a></li>
                          <li class=\"nav-item\"><a href=\"category.html\" class=\"nav-link\">Sandals</a></li>
                          <li class=\"nav-item\"><a href=\"category.html\" class=\"nav-link\">Hiking shoes</a></li>
                        </ul>
                        <h5>Looks and trends</h5>
                        <ul class=\"list-unstyled mb-3\">
                          <li class=\"nav-item\"><a href=\"category.html\" class=\"nav-link\">Trainers</a></li>
                          <li class=\"nav-item\"><a href=\"category.html\" class=\"nav-link\">Sandals</a></li>
                          <li class=\"nav-item\"><a href=\"category.html\" class=\"nav-link\">Hiking shoes</a></li>
                        </ul>
                      </div>
                    </div>
                  </li>
                </ul>
              </li>
              ";
        // line 145
        echo "                <ul class=\"dropdown-menu megamenu\">
                  <li>
                    <div class=\"row\">
                      <div class=\"col-md-6 col-lg-3\">
                        <h5>Clothing</h5>
                        <ul class=\"list-unstyled mb-3\">
                          <li class=\"nav-item\"><a href=\"category.html\" class=\"nav-link\">T-shirts</a></li>
                          <li class=\"nav-item\"><a href=\"category.html\" class=\"nav-link\">Shirts</a></li>
                          <li class=\"nav-item\"><a href=\"category.html\" class=\"nav-link\">Pants</a></li>
                          <li class=\"nav-item\"><a href=\"category.html\" class=\"nav-link\">Accessories</a></li>
                        </ul>
                      </div>
                      <div class=\"col-md-6 col-lg-3\">
                        <h5>Shoes</h5>
                        <ul class=\"list-unstyled mb-3\">
                          <li class=\"nav-item\"><a href=\"category.html\" class=\"nav-link\">Trainers</a></li>
                          <li class=\"nav-item\"><a href=\"category.html\" class=\"nav-link\">Sandals</a></li>
                          <li class=\"nav-item\"><a href=\"category.html\" class=\"nav-link\">Hiking shoes</a></li>
                          <li class=\"nav-item\"><a href=\"category.html\" class=\"nav-link\">Casual</a></li>
                        </ul>
                      </div>
                      <div class=\"col-md-6 col-lg-3\">
                        <h5>Accessories</h5>
                        <ul class=\"list-unstyled mb-3\">
                          <li class=\"nav-item\"><a href=\"category.html\" class=\"nav-link\">Trainers</a></li>
                          <li class=\"nav-item\"><a href=\"category.html\" class=\"nav-link\">Sandals</a></li>
                          <li class=\"nav-item\"><a href=\"category.html\" class=\"nav-link\">Hiking shoes</a></li>
                          <li class=\"nav-item\"><a href=\"category.html\" class=\"nav-link\">Casual</a></li>
                          <li class=\"nav-item\"><a href=\"category.html\" class=\"nav-link\">Hiking shoes</a></li>
                          <li class=\"nav-item\"><a href=\"category.html\" class=\"nav-link\">Casual</a></li>
                        </ul>
                        <h5>Looks and trends</h5>
                        <ul class=\"list-unstyled mb-3\">
                          <li class=\"nav-item\"><a href=\"category.html\" class=\"nav-link\">Trainers</a></li>
                          <li class=\"nav-item\"><a href=\"category.html\" class=\"nav-link\">Sandals</a></li>
                          <li class=\"nav-item\"><a href=\"category.html\" class=\"nav-link\">Hiking shoes</a></li>
                        </ul>
                      </div>
                      <div class=\"col-md-6 col-lg-3\">
                        <div class=\"banner\"><a href=\"#\"><img src=\"";
        // line 184
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/banner.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img img-fluid\"></a></div>
                        <div class=\"banner\"><a href=\"#\"><img src=\"";
        // line 185
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/banner2.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img img-fluid\"></a></div>
                      </div>
                    </div>
                  </li>
                </ul>
              </li>
              ";
        // line 192
        echo "                <ul class=\"dropdown-menu megamenu\">
                  <li>
                    <div class=\"row\">
                      <div class=\"col-md-6 col-lg-3\">
                        <h5>Shop</h5>
                        <ul class=\"list-unstyled mb-3\">
                          <li class=\"nav-item\"><a href=\"";
        // line 198
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_client_index");
        echo "\" class=\"nav-link\">Homepage</a></li>
                          <li class=\"nav-item\"><a href=\"category.html\" class=\"nav-link\">Category - sidebar left</a></li>
                          <li class=\"nav-item\"><a href=\"category-right.html\" class=\"nav-link\">Category - sidebar right</a></li>
                          <li class=\"nav-item\"><a href=\"category-full.html\" class=\"nav-link\">Category - full width</a></li>
                          <li class=\"nav-item\"><a href=\"detail.html\" class=\"nav-link\">Product detail</a></li>
                        </ul>
                      </div>
                      <div class=\"col-md-6 col-lg-3\">
                        <h5>User</h5>
                        <ul class=\"list-unstyled mb-3\">
                          <li class=\"nav-item\"><a href=\"register.html\" class=\"nav-link\">Register / login</a></li>
                          <li class=\"nav-item\"><a href=\"customer-orders.html\" class=\"nav-link\">Orders history</a></li>
                          <li class=\"nav-item\"><a href=\"customer-order.html\" class=\"nav-link\">Order history detail</a></li>
                          <li class=\"nav-item\"><a href=\"customer-wishlist.html\" class=\"nav-link\">Wishlist</a></li>
                          <li class=\"nav-item\"><a href=\"customer-account.html\" class=\"nav-link\">Customer account / change password</a></li>
                        </ul>
                      </div>
                      <div class=\"col-md-6 col-lg-3\">
                        <h5>Order process</h5>
                        <ul class=\"list-unstyled mb-3\">
                          <li class=\"nav-item\"><a href=\"basket.html\" class=\"nav-link\">Shopping cart</a></li>
                          <li class=\"nav-item\"><a href=\"checkout1.html\" class=\"nav-link\">Checkout - step 1</a></li>
                          <li class=\"nav-item\"><a href=\"checkout2.html\" class=\"nav-link\">Checkout - step 2</a></li>
                          <li class=\"nav-item\"><a href=\"checkout3.html\" class=\"nav-link\">Checkout - step 3</a></li>
                          <li class=\"nav-item\"><a href=\"checkout4.html\" class=\"nav-link\">Checkout - step 4</a></li>
                        </ul>
                      </div>
                      <div class=\"col-md-6 col-lg-3\">
                        <h5>Pages and blog</h5>
                        <ul class=\"list-unstyled mb-3\">
                          <li class=\"nav-item\"><a href=\"blog.html\" class=\"nav-link\">Blog listing</a></li>
                          <li class=\"nav-item\"><a href=\"post.html\" class=\"nav-link\">Blog Post</a></li>
                          <li class=\"nav-item\"><a href=\"faq.html\" class=\"nav-link\">FAQ</a></li>
                          <li class=\"nav-item\"><a href=\"text.html\" class=\"nav-link\">Text page</a></li>
                          <li class=\"nav-item\"><a href=\"text-right.html\" class=\"nav-link\">Text page - right sidebar</a></li>
                          <li class=\"nav-item\"><a href=\"404.html\" class=\"nav-link\">404 page</a></li>
                          <li class=\"nav-item\"><a href=\"contact.html\" class=\"nav-link\">Contact</a></li>
                        </ul>
                      </div>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
            <div class=\"navbar-buttons d-flex justify-content-end\">
              <!-- /.nav-collapse-->
              ";
        // line 245
        echo "            <div id=\"basket-overview\" class=\"navbar-collapse collapse d-none d-lg-block\">
                <a href=\"";
        // line 246
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_index");
        echo "\" class=\"btn btn-primary navbar-btn\">
                    <i class=\"fa fa-shopping-cart\"></i>
                    <span>";
        // line 248
        echo twig_escape_filter($this->env, (isset($context["quantity"]) || array_key_exists("quantity", $context) ? $context["quantity"] : (function () { throw new RuntimeError('Variable "quantity" does not exist.', 248, $this->source); })()), "html", null, true);
        echo " items in cart</span>
                </a>
            </div>         
               </div>
          </div>
        </div>
      </nav>
      <div id=\"search\" class=\"collapse\">
        <div class=\"container\">
          <form role=\"search\" class=\"ml-auto\">
            <div class=\"input-group\">
              <input type=\"text\" placeholder=\"Search\" class=\"form-control\">
              <div class=\"input-group-append\">
                <button type=\"button\" class=\"btn btn-primary\"><i class=\"fa fa-search\"></i></button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </header>
    <div id=\"all\">
      <div id=\"content\">
        <div class=\"container\">
          <div class=\"row\">
            <div class=\"col-lg-12\">
              <!-- breadcrumb-->
              <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb\">
                  <li class=\"breadcrumb-item\"><a href=\"";
        // line 276
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_client_index");
        echo "\">Home</a></li>
                   <li class=\"breadcrumb-item\">Product details</li>
                  ";
        // line 280
        echo "                </ol>
              </nav>
            </div>
            <div class=\"col-lg-3 order-2 order-lg-1\">
              <!--
              *** MENUS AND FILTERS ***
              _________________________________________________________
              -->
              <div class=\"card sidebar-menu mb-4\">
                <div class=\"card-header\">
                  <h3 class=\"h4 card-title text-center\" >Categories</h3>
                </div>
                <div class=\"card-body\">
                  <ul class=\"nav nav-pills flex-column category-menu\">
                  ";
        // line 294
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 294, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 295
            echo "                  
                    <li><p class=\"text-center\">";
            // line 296
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 296), "html", null, true);
            echo "</p>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 298
        echo "                    
                     
                  </ul>
                  <br><br>
                  <div class=\"banner\"><a href=\"#\"><img src=\"";
        // line 302
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Uploads/Products/ccc.jpg"), "html", null, true);
        echo "\" alt=\"sales 2014\" class=\"img-fluid\" style=\"height:160px\"></a></div>
              <div class=\"banner\"><a href=\"#\"><img src=\"";
        // line 303
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Uploads/Products/eee.webp"), "html", null, true);
        echo "\" alt=\"sales 2014\" class=\"img-fluid\" style=\"height:190px\"></a></div>

                </div>
              </div>
              ";
        // line 375
        echo "              ";
        // line 376
        echo "              <!-- *** MENUS AND FILTERS END ***-->
              <br><br>

            </div>
                  ";
        // line 380
        $context["selectedProductId"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 380, $this->source); })()), "request", [], "any", false, false, false, 380), "get", ["id"], "method", false, false, false, 380);
        // line 381
        echo "                  ";
        $context["selectedProductCategory"] = "";
        // line 382
        echo "

              ";
        // line 384
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 384, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 385
            echo "             ";
            if ((twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 385) == (isset($context["selectedProductId"]) || array_key_exists("selectedProductId", $context) ? $context["selectedProductId"] : (function () { throw new RuntimeError('Variable "selectedProductId" does not exist.', 385, $this->source); })()))) {
                // line 386
                echo "               ";
                $context["selectedProductCategory"] = twig_get_attribute($this->env, $this->source, $context["product"], "category", [], "any", false, false, false, 386);
                // line 387
                echo "
            <div class=\"col-lg-9 order-1 order-lg-2\">
              <div id=\"productMain\" class=\"row\">
                <div class=\"col-md-6\">
                  <div data-slider-id=\"1\" class=\"owl-carousel shop-detail-carousel\">
                  ";
                // line 392
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "multiplesImage", [], "any", false, false, false, 392));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 393
                    echo "                      <button class=\"owl-thumb-item\">
                          <img src=\"";
                    // line 394
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/products/" . $context["image"])), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, $context["image"], "html", null, true);
                    echo "\" style=\"width: 400px; height: 300px;\">
                      </button>
                  ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 396
                echo "              
                 ";
                // line 398
                echo "                   ";
                // line 399
                echo "                  </div>
                 
                 
                  <!-- /.ribbon-->
                </div>
          

    <div class=\"col-md-6\">
        <div class=\"box\">
            <h1 class=\"text-center\">";
                // line 408
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 408), "html", null, true);
                echo "</h1>
            <p class=\"goToDescription\"><a href=\"#details\" class=\"scroll-to\">Scroll to product details</a></p>
            <p class=\"price\">";
                // line 410
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 410), "html", null, true);
                echo "dt</p>
            <p class=\"text-center buttons\">
                <a href=\"";
                // line 412
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_add", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 412)]), "html", null, true);
                echo "\" class=\"btn btn-primary\">
                    <i class=\"fa fa-shopping-cart\"></i> Add to cart
                </a>
                ";
                // line 418
                echo "            </p>
        </div>
        <div data-slider-id=\"1\" class=\"owl-thumbs\">
";
                // line 421
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "multiplesImage", [], "any", false, false, false, 421));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 422
                    echo "    <button class=\"owl-thumb-item\">
        <img src=\"";
                    // line 423
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/products/" . $context["image"])), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, $context["image"], "html", null, true);
                    echo "\">
    </button>
";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 425
                echo "        
    <button class=\"owl-thumb-item\"><img src=\"";
                // line 426
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/products/" . twig_get_attribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 426))), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 426), "html", null, true);
                echo "\"></button>
            ";
                // line 428
                echo "        </div>
    </div>


              <div id=\"details\" class=\"box\">
                <p></p>
                <h4>Product details</h4>
                <p>";
                // line 435
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "shortDescription", [], "any", false, false, false, 435), "html", null, true);
                echo "</p>
                <p>";
                // line 436
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "longDescription", [], "any", false, false, false, 436), "html", null, true);
                echo "</p>

                <h4>Category</h4>
                <ul>
                  <li>";
                // line 440
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "category", [], "any", false, false, false, 440), "html", null, true);
                echo "</li>
                </ul>
                ";
                // line 447
                echo "                ";
                // line 450
                echo "                <hr>
                <div class=\"social\">
                  <h4>Show it to your friends</h4>
                  <p><a href=\"";
                // line 453
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://www.facebook.com/"), "html", null, true);
                echo "\" class=\"external facebook\"><i class=\"fa fa-facebook\"></i></a><a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://www.twitter.com/"), "html", null, true);
                echo "\" class=\"external twitter\"><i class=\"fa fa-twitter\"></i></a><a href=\"https://www.google.com/intl/fr/gmail/about/\" class=\"email\"><i class=\"fa fa-envelope\"></i></a></p>
                </div>
              </div>

                  ";
            }
            // line 458
            echo "
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 460
        echo "
              <div class=\"row same-height-row\">
                <div class=\"col-md-3 col-sm-6\">
                  <div class=\"box same-height\">
                    <h3>You may also like these products</h3>
                  </div>
                </div>
                  ";
        // line 467
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 467, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 468
            echo "
                   ";
            // line 470
            echo "
  ";
            // line 471
            if ((twig_get_attribute($this->env, $this->source, $context["product"], "category", [], "any", false, false, false, 471) == (isset($context["selectedProductCategory"]) || array_key_exists("selectedProductCategory", $context) ? $context["selectedProductCategory"] : (function () { throw new RuntimeError('Variable "selectedProductCategory" does not exist.', 471, $this->source); })()))) {
                // line 472
                echo "
                <div class=\"col-md-3 col-sm-6\">
                  <div class=\"product same-height\">
                    <div class=\"flip-container\">
                      <div class=\"flipper\">
                      
                        <div class=\"front\"><a href=\"";
                // line 478
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_client_details", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 478)]), "html", null, true);
                echo "\">
                        <img src=\"";
                // line 479
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/products/" . twig_get_attribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 479))), "html", null, true);
                echo "\" alt=\"\" class=\"img-fluid\">
                        </a></div>
                        <div class=\"back\"><a href=\"";
                // line 481
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_client_details", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 481)]), "html", null, true);
                echo "\"><img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/products/" . twig_get_attribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 481))), "html", null, true);
                echo "\" alt=\"\" class=\"img-fluid\"></a></div>
                      </div>
                    </div><a href=\"";
                // line 483
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_client_details", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 483)]), "html", null, true);
                echo "\" class=\"invisible\">
                    <img src=\"";
                // line 484
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/product2.jpg"), "html", null, true);
                echo "\" alt=\"\" class=\"img-fluid\"></a>
                    <div class=\"text\">
                      <h3>";
                // line 486
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 486), "html", null, true);
                echo "</h3>
                      <p class=\"price\">";
                // line 487
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 487), "html", null, true);
                echo "dt</p>
                    </div>
                  </div>
                  <!-- /.product-->
                </div>
                ";
            }
            // line 493
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 494
        echo "              
              ";
        // line 548
        echo "            <!-- /.col-md-9-->
          </div>
        </div>
      </div>
    </div>
</div>    <!--
        *** FOOTER ***
    _________________________________________________________
    -->
    <div id=\"footer\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-lg-3 col-md-6\">
            ";
        // line 568
        echo "            ";
        // line 574
        echo "          </div>
          <!-- /.col-lg-3-->
          <div class=\"col-lg-3 col-md-6\">
            <h4 class=\"mb-3\">Top categories</h4>
            <h5>Informatique</h5>
            <h5>Mobile</h5>
            <h5>Gaming</h5>
            <h5>Accessoirs</h5>
            <h5>Electronic</h5>
            
          </div>
          <!-- /.col-lg-3-->
          <div class=\"col-lg-3 col-md-6\">
            <h4 class=\"mb-3\">Where to find us</h4>
            <p><strong>Tunisia</strong><br>Djerba Houmt-souk</p>
            <hr class=\"d-block d-md-none\">
          </div>
          <!-- /.col-lg-3-->
          <div class=\"col-lg-3 col-md-6\">
            ";
        // line 602
        echo "            <hr>
            <h4 class=\"mb-3\">Stay in touch</h4>
            <p class=\"social\"><a href=\"";
        // line 604
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://www.facebook.com/idriss.benyaala"), "html", null, true);
        echo "\" class=\"facebook external\"><i class=\"fa fa-facebook\"></i></a><a href=\"#\" class=\"twitter external\"><i class=\"fa fa-twitter\"></i></a><a href=\"#\" class=\"instagram external\"><i class=\"fa fa-instagram\"></i></a><a href=\"#\" class=\"gplus external\"><i class=\"fa fa-google-plus\"></i></a><a href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://mail.google.com/mail/u/0/#inbox"), "html", null, true);
        echo "\" class=\"email external\"><i class=\"fa fa-envelope\"></i></a></p>
          </div>
          <!-- /.col-lg-3-->
        </div>
        <!-- /.row-->
      </div>
      <!-- /.container-->
    </div>
    <!-- /#footer-->
    <!-- *** FOOTER END ***-->
    
    
    <!--
    *** COPYRIGHT ***
    _________________________________________________________
    -->
    ";
        // line 634
        echo "    <!-- *** COPYRIGHT END ***-->
    <!-- JavaScript files-->
    <script src=\"";
        // line 636
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 637
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 638
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/jquery.cookie/jquery.cookie.js"), "html", null, true);
        echo "\"> </script>
    <script src=\"";
        // line 639
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/owl.carousel/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 640
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/owl.carousel2.thumbs/owl.carousel2.thumbs.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 641
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/front.js"), "html", null, true);
        echo "\"></script>
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
        return "client/details.html.twig";
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
        return array (  782 => 641,  778 => 640,  774 => 639,  770 => 638,  766 => 637,  762 => 636,  758 => 634,  737 => 604,  733 => 602,  712 => 574,  710 => 568,  695 => 548,  692 => 494,  686 => 493,  677 => 487,  673 => 486,  668 => 484,  664 => 483,  657 => 481,  652 => 479,  648 => 478,  640 => 472,  638 => 471,  635 => 470,  632 => 468,  628 => 467,  619 => 460,  612 => 458,  602 => 453,  597 => 450,  595 => 447,  590 => 440,  583 => 436,  579 => 435,  570 => 428,  564 => 426,  561 => 425,  550 => 423,  547 => 422,  543 => 421,  538 => 418,  532 => 412,  527 => 410,  522 => 408,  511 => 399,  509 => 398,  506 => 396,  495 => 394,  492 => 393,  488 => 392,  481 => 387,  478 => 386,  475 => 385,  471 => 384,  467 => 382,  464 => 381,  462 => 380,  456 => 376,  454 => 375,  447 => 303,  443 => 302,  437 => 298,  429 => 296,  426 => 295,  422 => 294,  406 => 280,  401 => 276,  370 => 248,  365 => 246,  362 => 245,  313 => 198,  305 => 192,  296 => 185,  292 => 184,  251 => 145,  199 => 94,  195 => 92,  181 => 85,  149 => 55,  134 => 29,  129 => 27,  124 => 25,  119 => 23,  115 => 22,  110 => 20,  105 => 18,  100 => 16,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Details{% endblock %}

{% block body %}
<!DOCTYPE html>
<html>
  <head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <title>Obaju : e-commerce template</title>
    <meta name=\"description\" content=\"\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"robots\" content=\"all,follow\">
    <!-- Bootstrap CSS-->
    <link rel=\"stylesheet\" href=\"{{asset ('vendor/bootstrap/css/bootstrap.min.css')}}\">
    <!-- Font Awesome CSS-->
    <link rel=\"stylesheet\" href=\"{{asset ('vendor/font-awesome/css/font-awesome.min.css')}}\">
    <!-- Google fonts - Roboto -->
    <link rel=\"stylesheet\" href=\"{{asset ('https://fonts.googleapis.com/css?family=Roboto:100,300,400,700')}}\">
    <!-- owl carousel-->
    <link rel=\"stylesheet\" href=\"{{asset ('vendor/owl.carousel/assets/owl.carousel.css')}}\">
    <link rel=\"stylesheet\" href=\"{{asset ('vendor/owl.carousel/assets/owl.theme.default.css')}}\">
    <!-- theme stylesheet-->
    <link rel=\"stylesheet\" href=\"{{asset ('css/style.default.css')}}\" id=\"theme-stylesheet\">
    <!-- Custom stylesheet - for your changes-->
    <link rel=\"stylesheet\" href=\"{{asset ('css/custom.css')}}\">
    <!-- Favicon-->
    <link rel=\"shortcut icon\" href=\"{{asset ('favicon.png')}}')}}\">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
        <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script><![endif]-->
  </head>
  <body>
    <!-- navbar-->
    <header class=\"header mb-5\">
      <!--
      *** TOPBAR ***
      _________________________________________________________
      -->
      {# <div id=\"top\">
        <div class=\"container\">
          <div class=\"row\">
            <div class=\"col-lg-6 offer mb-3 mb-lg-0\"><a href=\"#\" class=\"btn btn-success btn-sm\">Offer of the day</a><a href=\"#\" class=\"ml-1\">Get flat 35% off on orders over \$50!</a></div>
            <div class=\"col-lg-6 text-center text-lg-right\">
              <ul class=\"menu list-inline mb-0\">
                <li class=\"list-inline-item\"><a href=\"#\" data-toggle=\"modal\" data-target=\"#login-modal\">Login</a></li>
                <li class=\"list-inline-item\"><a href=\"register.html\">Register</a></li>
                <li class=\"list-inline-item\"><a href=\"contact.html\">Contact</a></li>
                <li class=\"list-inline-item\"><a href=\"#\">Recently viewed</a></li>
              </ul>
            </div>
          </div>
        </div> #}
        <div id=\"login-modal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"Login\" aria-hidden=\"true\" class=\"modal fade\">
          <div class=\"modal-dialog modal-sm\">
            <div class=\"modal-content\">
              <div class=\"modal-header\">
                <h5 class=\"modal-title\">Customer login</h5>
                <button type=\"button\" data-dismiss=\"modal\" aria-label=\"Close\" class=\"close\"><span aria-hidden=\"true\">×</span></button>
              </div>
              <div class=\"modal-body\">
                <form action=\"customer-orders.html\" method=\"post\">
                  <div class=\"form-group\">
                    <input id=\"email-modal\" type=\"text\" placeholder=\"email\" class=\"form-control\">
                  </div>
                  <div class=\"form-group\">
                    <input id=\"password-modal\" type=\"password\" placeholder=\"password\" class=\"form-control\">
                  </div>
                  <p class=\"text-center\">
                    <button class=\"btn btn-primary\"><i class=\"fa fa-sign-in\"></i> Log in</button>
                  </p>
                </form>
                <p class=\"text-center text-muted\">Not registered yet?</p>
                <p class=\"text-center text-muted\"><a href=\"register.html\"><strong>Register now</strong></a>! It is easy and done in 1 minute and gives you access to special discounts and much more!</p>
              </div>
            </div>
          </div>
        </div>
        <!-- *** TOP BAR END ***-->
        
        
      </div>
      <nav class=\"navbar navbar-expand-lg\">
        <div class=\"container\"><a href=\"{{ path('app_client_index')}}\" class=\"navbar-brand home\"><img src=\"{{asset ('img/logo.png')}}\" alt=\"Obaju logo\" class=\"d-none d-md-inline-block\"><img src=\"{{asset ('img/logo-small.png')}}\" alt=\"Obaju logo\" class=\"d-inline-block d-md-none\"><span class=\"sr-only\">Obaju - go to homepage</span></a>
          <div class=\"navbar-buttons\">
            <button type=\"button\" data-toggle=\"collapse\" data-target=\"#navigation\" class=\"btn btn-outline-secondary navbar-toggler\"><span class=\"sr-only\">Toggle navigation</span><i class=\"fa fa-align-justify\"></i></button>
            <button type=\"button\" data-toggle=\"collapse\" data-target=\"#search\" class=\"btn btn-outline-secondary navbar-toggler\"><span class=\"sr-only\">Toggle search</span><i class=\"fa fa-search\"></i></button><a href=\"basket.html\" class=\"btn btn-outline-secondary navbar-toggler\"><i class=\"fa fa-shopping-cart\"></i></a>
          </div>
          <div id=\"navigation\" class=\"collapse navbar-collapse\">
            <ul class=\"navbar-nav mr-auto\">
              <li class=\"nav-item\"><a href=\"{{path('app_client_index')}}\" class=\"nav-link \">Home</a></li>
              {# <li class=\"nav-item dropdown menu-large\"><a href=\"#\" data-toggle=\"dropdown\" data-hover=\"dropdown\" data-delay=\"200\" class=\"dropdown-toggle nav-link\">Men<b class=\"caret\"></b></a> #}
                <ul class=\"dropdown-menu megamenu\">
                  <li>
                    <div class=\"row\">
                      <div class=\"col-md-6 col-lg-3\">
                        <h5>Clothing</h5>
                        <ul class=\"list-unstyled mb-3\">
                          <li class=\"nav-item\"><a href=\"category.html\" class=\"nav-link\">T-shirts</a></li>
                          <li class=\"nav-item\"><a href=\"category.html\" class=\"nav-link\">Shirts</a></li>
                          <li class=\"nav-item\"><a href=\"category.html\" class=\"nav-link\">Pants</a></li>
                          <li class=\"nav-item\"><a href=\"category.html\" class=\"nav-link\">Accessories</a></li>
                        </ul>
                      </div>
                      <div class=\"col-md-6 col-lg-3\">
                        <h5>Shoes</h5>
                        <ul class=\"list-unstyled mb-3\">
                          <li class=\"nav-item\"><a href=\"category.html\" class=\"nav-link\">Trainers</a></li>
                          <li class=\"nav-item\"><a href=\"category.html\" class=\"nav-link\">Sandals</a></li>
                          <li class=\"nav-item\"><a href=\"category.html\" class=\"nav-link\">Hiking shoes</a></li>
                          <li class=\"nav-item\"><a href=\"category.html\" class=\"nav-link\">Casual</a></li>
                        </ul>
                      </div>
                      <div class=\"col-md-6 col-lg-3\">
                        <h5>Accessories</h5>
                        <ul class=\"list-unstyled mb-3\">
                          <li class=\"nav-item\"><a href=\"category.html\" class=\"nav-link\">Trainers</a></li>
                          <li class=\"nav-item\"><a href=\"category.html\" class=\"nav-link\">Sandals</a></li>
                          <li class=\"nav-item\"><a href=\"category.html\" class=\"nav-link\">Hiking shoes</a></li>
                          <li class=\"nav-item\"><a href=\"category.html\" class=\"nav-link\">Casual</a></li>
                          <li class=\"nav-item\"><a href=\"category.html\" class=\"nav-link\">Hiking shoes</a></li>
                          <li class=\"nav-item\"><a href=\"category.html\" class=\"nav-link\">Casual</a></li>
                        </ul>
                      </div>
                      <div class=\"col-md-6 col-lg-3\">
                        <h5>Featured</h5>
                        <ul class=\"list-unstyled mb-3\">
                          <li class=\"nav-item\"><a href=\"category.html\" class=\"nav-link\">Trainers</a></li>
                          <li class=\"nav-item\"><a href=\"category.html\" class=\"nav-link\">Sandals</a></li>
                          <li class=\"nav-item\"><a href=\"category.html\" class=\"nav-link\">Hiking shoes</a></li>
                        </ul>
                        <h5>Looks and trends</h5>
                        <ul class=\"list-unstyled mb-3\">
                          <li class=\"nav-item\"><a href=\"category.html\" class=\"nav-link\">Trainers</a></li>
                          <li class=\"nav-item\"><a href=\"category.html\" class=\"nav-link\">Sandals</a></li>
                          <li class=\"nav-item\"><a href=\"category.html\" class=\"nav-link\">Hiking shoes</a></li>
                        </ul>
                      </div>
                    </div>
                  </li>
                </ul>
              </li>
              {# <li class=\"nav-item dropdown menu-large\"><a href=\"#\" data-toggle=\"dropdown\" data-hover=\"dropdown\" data-delay=\"200\" class=\"dropdown-toggle nav-link\">Ladies<b class=\"caret\"></b></a> #}
                <ul class=\"dropdown-menu megamenu\">
                  <li>
                    <div class=\"row\">
                      <div class=\"col-md-6 col-lg-3\">
                        <h5>Clothing</h5>
                        <ul class=\"list-unstyled mb-3\">
                          <li class=\"nav-item\"><a href=\"category.html\" class=\"nav-link\">T-shirts</a></li>
                          <li class=\"nav-item\"><a href=\"category.html\" class=\"nav-link\">Shirts</a></li>
                          <li class=\"nav-item\"><a href=\"category.html\" class=\"nav-link\">Pants</a></li>
                          <li class=\"nav-item\"><a href=\"category.html\" class=\"nav-link\">Accessories</a></li>
                        </ul>
                      </div>
                      <div class=\"col-md-6 col-lg-3\">
                        <h5>Shoes</h5>
                        <ul class=\"list-unstyled mb-3\">
                          <li class=\"nav-item\"><a href=\"category.html\" class=\"nav-link\">Trainers</a></li>
                          <li class=\"nav-item\"><a href=\"category.html\" class=\"nav-link\">Sandals</a></li>
                          <li class=\"nav-item\"><a href=\"category.html\" class=\"nav-link\">Hiking shoes</a></li>
                          <li class=\"nav-item\"><a href=\"category.html\" class=\"nav-link\">Casual</a></li>
                        </ul>
                      </div>
                      <div class=\"col-md-6 col-lg-3\">
                        <h5>Accessories</h5>
                        <ul class=\"list-unstyled mb-3\">
                          <li class=\"nav-item\"><a href=\"category.html\" class=\"nav-link\">Trainers</a></li>
                          <li class=\"nav-item\"><a href=\"category.html\" class=\"nav-link\">Sandals</a></li>
                          <li class=\"nav-item\"><a href=\"category.html\" class=\"nav-link\">Hiking shoes</a></li>
                          <li class=\"nav-item\"><a href=\"category.html\" class=\"nav-link\">Casual</a></li>
                          <li class=\"nav-item\"><a href=\"category.html\" class=\"nav-link\">Hiking shoes</a></li>
                          <li class=\"nav-item\"><a href=\"category.html\" class=\"nav-link\">Casual</a></li>
                        </ul>
                        <h5>Looks and trends</h5>
                        <ul class=\"list-unstyled mb-3\">
                          <li class=\"nav-item\"><a href=\"category.html\" class=\"nav-link\">Trainers</a></li>
                          <li class=\"nav-item\"><a href=\"category.html\" class=\"nav-link\">Sandals</a></li>
                          <li class=\"nav-item\"><a href=\"category.html\" class=\"nav-link\">Hiking shoes</a></li>
                        </ul>
                      </div>
                      <div class=\"col-md-6 col-lg-3\">
                        <div class=\"banner\"><a href=\"#\"><img src=\"{{asset ('img/banner.jpg')}}\" alt=\"\" class=\"img img-fluid\"></a></div>
                        <div class=\"banner\"><a href=\"#\"><img src=\"{{asset ('img/banner2.jpg')}}\" alt=\"\" class=\"img img-fluid\"></a></div>
                      </div>
                    </div>
                  </li>
                </ul>
              </li>
              {# <li class=\"nav-item dropdown menu-large\"><a href=\"#\" data-toggle=\"dropdown\" data-hover=\"dropdown\" data-delay=\"200\" class=\"dropdown-toggle nav-link\">Template<b class=\"caret\"></b></a> #}
                <ul class=\"dropdown-menu megamenu\">
                  <li>
                    <div class=\"row\">
                      <div class=\"col-md-6 col-lg-3\">
                        <h5>Shop</h5>
                        <ul class=\"list-unstyled mb-3\">
                          <li class=\"nav-item\"><a href=\"{{path ('app_client_index')}}\" class=\"nav-link\">Homepage</a></li>
                          <li class=\"nav-item\"><a href=\"category.html\" class=\"nav-link\">Category - sidebar left</a></li>
                          <li class=\"nav-item\"><a href=\"category-right.html\" class=\"nav-link\">Category - sidebar right</a></li>
                          <li class=\"nav-item\"><a href=\"category-full.html\" class=\"nav-link\">Category - full width</a></li>
                          <li class=\"nav-item\"><a href=\"detail.html\" class=\"nav-link\">Product detail</a></li>
                        </ul>
                      </div>
                      <div class=\"col-md-6 col-lg-3\">
                        <h5>User</h5>
                        <ul class=\"list-unstyled mb-3\">
                          <li class=\"nav-item\"><a href=\"register.html\" class=\"nav-link\">Register / login</a></li>
                          <li class=\"nav-item\"><a href=\"customer-orders.html\" class=\"nav-link\">Orders history</a></li>
                          <li class=\"nav-item\"><a href=\"customer-order.html\" class=\"nav-link\">Order history detail</a></li>
                          <li class=\"nav-item\"><a href=\"customer-wishlist.html\" class=\"nav-link\">Wishlist</a></li>
                          <li class=\"nav-item\"><a href=\"customer-account.html\" class=\"nav-link\">Customer account / change password</a></li>
                        </ul>
                      </div>
                      <div class=\"col-md-6 col-lg-3\">
                        <h5>Order process</h5>
                        <ul class=\"list-unstyled mb-3\">
                          <li class=\"nav-item\"><a href=\"basket.html\" class=\"nav-link\">Shopping cart</a></li>
                          <li class=\"nav-item\"><a href=\"checkout1.html\" class=\"nav-link\">Checkout - step 1</a></li>
                          <li class=\"nav-item\"><a href=\"checkout2.html\" class=\"nav-link\">Checkout - step 2</a></li>
                          <li class=\"nav-item\"><a href=\"checkout3.html\" class=\"nav-link\">Checkout - step 3</a></li>
                          <li class=\"nav-item\"><a href=\"checkout4.html\" class=\"nav-link\">Checkout - step 4</a></li>
                        </ul>
                      </div>
                      <div class=\"col-md-6 col-lg-3\">
                        <h5>Pages and blog</h5>
                        <ul class=\"list-unstyled mb-3\">
                          <li class=\"nav-item\"><a href=\"blog.html\" class=\"nav-link\">Blog listing</a></li>
                          <li class=\"nav-item\"><a href=\"post.html\" class=\"nav-link\">Blog Post</a></li>
                          <li class=\"nav-item\"><a href=\"faq.html\" class=\"nav-link\">FAQ</a></li>
                          <li class=\"nav-item\"><a href=\"text.html\" class=\"nav-link\">Text page</a></li>
                          <li class=\"nav-item\"><a href=\"text-right.html\" class=\"nav-link\">Text page - right sidebar</a></li>
                          <li class=\"nav-item\"><a href=\"404.html\" class=\"nav-link\">404 page</a></li>
                          <li class=\"nav-item\"><a href=\"contact.html\" class=\"nav-link\">Contact</a></li>
                        </ul>
                      </div>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
            <div class=\"navbar-buttons d-flex justify-content-end\">
              <!-- /.nav-collapse-->
              {# <div id=\"search-not-mobile\" class=\"navbar-collapse collapse\"></div><a data-toggle=\"collapse\" href=\"#search\" class=\"btn navbar-btn btn-primary d-none d-lg-inline-block\"><span class=\"sr-only\">Toggle search</span><i class=\"fa fa-search\"></i></a> #}
            <div id=\"basket-overview\" class=\"navbar-collapse collapse d-none d-lg-block\">
                <a href=\"{{ path('cart_index') }}\" class=\"btn btn-primary navbar-btn\">
                    <i class=\"fa fa-shopping-cart\"></i>
                    <span>{{ quantity }} items in cart</span>
                </a>
            </div>         
               </div>
          </div>
        </div>
      </nav>
      <div id=\"search\" class=\"collapse\">
        <div class=\"container\">
          <form role=\"search\" class=\"ml-auto\">
            <div class=\"input-group\">
              <input type=\"text\" placeholder=\"Search\" class=\"form-control\">
              <div class=\"input-group-append\">
                <button type=\"button\" class=\"btn btn-primary\"><i class=\"fa fa-search\"></i></button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </header>
    <div id=\"all\">
      <div id=\"content\">
        <div class=\"container\">
          <div class=\"row\">
            <div class=\"col-lg-12\">
              <!-- breadcrumb-->
              <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb\">
                  <li class=\"breadcrumb-item\"><a href=\"{{path('app_client_index')}}\">Home</a></li>
                   <li class=\"breadcrumb-item\">Product details</li>
                  {# <li class=\"breadcrumb-item\"><a href=\"#\">Tops</a></li>
                  <li aria-current=\"page\" class=\"breadcrumb-item active\">White Blouse Armani</li> #}
                </ol>
              </nav>
            </div>
            <div class=\"col-lg-3 order-2 order-lg-1\">
              <!--
              *** MENUS AND FILTERS ***
              _________________________________________________________
              -->
              <div class=\"card sidebar-menu mb-4\">
                <div class=\"card-header\">
                  <h3 class=\"h4 card-title text-center\" >Categories</h3>
                </div>
                <div class=\"card-body\">
                  <ul class=\"nav nav-pills flex-column category-menu\">
                  {% for category in categories %}
                  
                    <li><p class=\"text-center\">{{category.name}}</p>
                    {%endfor %}
                    
                     
                  </ul>
                  <br><br>
                  <div class=\"banner\"><a href=\"#\"><img src=\"{{ asset ('Uploads/Products/ccc.jpg')}}\" alt=\"sales 2014\" class=\"img-fluid\" style=\"height:160px\"></a></div>
              <div class=\"banner\"><a href=\"#\"><img src=\"{{ asset ('Uploads/Products/eee.webp')}}\" alt=\"sales 2014\" class=\"img-fluid\" style=\"height:190px\"></a></div>

                </div>
              </div>
              {# <div class=\"card sidebar-menu mb-4\">
                <div class=\"card-header\">
                  <h3 class=\"h4 card-title\">Brands <a href=\"#\" class=\"btn btn-sm btn-danger pull-right\"><i class=\"fa fa-times-circle\"></i> Clear</a></h3>
                </div>
                <div class=\"card-body\">
                  <form>
                    <div class=\"form-group\">
                      <div class=\"checkbox\">
                        <label>
                          <input type=\"checkbox\"> Armani  (10)
                        </label>
                      </div>
                      <div class=\"checkbox\">
                        <label>
                          <input type=\"checkbox\"> Versace  (12)
                        </label>
                      </div>
                      <div class=\"checkbox\">
                        <label>
                          <input type=\"checkbox\"> Carlo Bruni  (15)
                        </label>
                      </div>
                      <div class=\"checkbox\">
                        <label>
                          <input type=\"checkbox\"> Jack Honey  (14)
                        </label>
                      </div>
                    </div>
                    <button class=\"btn btn-default btn-sm btn-primary\"><i class=\"fa fa-pencil\"></i> Apply</button>
                  </form>
                </div>
              </div>
              <div class=\"card sidebar-menu mb-4\">
                <div class=\"card-header\">
                  <h3 class=\"h4 card-title\">Colours <a href=\"#\" class=\"btn btn-sm btn-danger pull-right\"><i class=\"fa fa-times-circle\"></i> Clear</a></h3>
                </div>
                <div class=\"card-body\">
                  <form>
                    <div class=\"form-group\">
                      <div class=\"checkbox\">
                        <label>
                          <input type=\"checkbox\"><span class=\"colour white\"></span> White (14)
                        </label>
                      </div>
                      <div class=\"checkbox\">
                        <label>
                          <input type=\"checkbox\"><span class=\"colour blue\"></span> Blue (10)
                        </label>
                      </div>
                      <div class=\"checkbox\">
                        <label>
                          <input type=\"checkbox\"><span class=\"colour green\"></span>  Green (20)
                        </label>
                      </div>
                      <div class=\"checkbox\">
                        <label>
                          <input type=\"checkbox\"><span class=\"colour yellow\"></span>  Yellow (13)
                        </label>
                      </div>
                      <div class=\"checkbox\">
                        <label>
                          <input type=\"checkbox\"><span class=\"colour red\"></span>  Red (10)
                        </label>
                      </div>
                    </div>
                    <button class=\"btn btn-default btn-sm btn-primary\"><i class=\"fa fa-pencil\"></i> Apply</button>
                  </form>
                </div> #}
              {# </div> #}
              <!-- *** MENUS AND FILTERS END ***-->
              <br><br>

            </div>
                  {% set selectedProductId = app.request.get('id') %}
                  {% set selectedProductCategory = '' %}


              {% for product in products %}
             {% if product.id == selectedProductId %}
               {% set selectedProductCategory = product.category %}

            <div class=\"col-lg-9 order-1 order-lg-2\">
              <div id=\"productMain\" class=\"row\">
                <div class=\"col-md-6\">
                  <div data-slider-id=\"1\" class=\"owl-carousel shop-detail-carousel\">
                  {% for image in product.multiplesImage %}
                      <button class=\"owl-thumb-item\">
                          <img src=\"{{ asset('uploads/products/' ~ image) }}\" alt=\"{{ image }}\" style=\"width: 400px; height: 300px;\">
                      </button>
                  {% endfor %}              
                 {# <div class=\"item\"> <img src=\"{{asset ('img/detailbig2.jpg')}}\" alt=\"\" class=\"img-fluid\"></div> #}
                   {# <div class=\"item\"> <img src=\"{{asset ('img/detailbig3.jpg')}}\" alt=\"\" class=\"img-fluid\"></div> #}
                  </div>
                 
                 
                  <!-- /.ribbon-->
                </div>
          

    <div class=\"col-md-6\">
        <div class=\"box\">
            <h1 class=\"text-center\">{{ product.name }}</h1>
            <p class=\"goToDescription\"><a href=\"#details\" class=\"scroll-to\">Scroll to product details</a></p>
            <p class=\"price\">{{ product.price }}dt</p>
            <p class=\"text-center buttons\">
                <a href=\"{{ path('cart_add', {id: product.id}) }}\" class=\"btn btn-primary\">
                    <i class=\"fa fa-shopping-cart\"></i> Add to cart
                </a>
                {# <a href=\"basket.html\" class=\"btn btn-outline-primary\">
                    <i class=\"fa fa-heart\"></i> Add to wishlist
                </a> #}
            </p>
        </div>
        <div data-slider-id=\"1\" class=\"owl-thumbs\">
{% for image in product.multiplesImage %}
    <button class=\"owl-thumb-item\">
        <img src=\"{{ asset('uploads/products/' ~ image) }}\" alt=\"{{ image }}\">
    </button>
{% endfor %}        
    <button class=\"owl-thumb-item\"><img src=\"{{ asset('uploads/products/' ~ product.image) }}\" alt=\"{{ product.image }}\"></button>
            {# <button class=\"owl-thumb-item\"><img src=\"{{ asset('img/detailsquare3.jpg') }}\" alt=\"\" class=\"img-fluid\"></button> #}
        </div>
    </div>


              <div id=\"details\" class=\"box\">
                <p></p>
                <h4>Product details</h4>
                <p>{{product.shortDescription}}</p>
                <p>{{product.longDescription}}</p>

                <h4>Category</h4>
                <ul>
                  <li>{{product.category}}</li>
                </ul>
                {# <h4>Size &amp; Fit</h4>
                <ul>
                  <li>Regular fit</li>
                  <li>The model (height 5'8\" and chest 33\") is wearing a size S</li>
                </ul> #}
                {# <blockquote>
                  <p><em>Define style this season with Armani's new range of trendy tops, crafted with intricate details. Create a chic statement look by teaming this lace number with skinny jeans and pumps.</em></p>
                </blockquote> #}
                <hr>
                <div class=\"social\">
                  <h4>Show it to your friends</h4>
                  <p><a href=\"{{asset('https://www.facebook.com/')}}\" class=\"external facebook\"><i class=\"fa fa-facebook\"></i></a><a href=\"{{asset('https://www.twitter.com/')}}\" class=\"external twitter\"><i class=\"fa fa-twitter\"></i></a><a href=\"https://www.google.com/intl/fr/gmail/about/\" class=\"email\"><i class=\"fa fa-envelope\"></i></a></p>
                </div>
              </div>

                  {% endif %}

              {% endfor %}

              <div class=\"row same-height-row\">
                <div class=\"col-md-3 col-sm-6\">
                  <div class=\"box same-height\">
                    <h3>You may also like these products</h3>
                  </div>
                </div>
                  {% for product in products %}

                   {# {% set selectedProductCategory = app.request.get('category') %} #}

  {% if product.category == selectedProductCategory %}

                <div class=\"col-md-3 col-sm-6\">
                  <div class=\"product same-height\">
                    <div class=\"flip-container\">
                      <div class=\"flipper\">
                      
                        <div class=\"front\"><a href=\"{{path('app_client_details',{id:product.id})}}\">
                        <img src=\"{{ asset('uploads/products/' ~ product.image) }}\" alt=\"\" class=\"img-fluid\">
                        </a></div>
                        <div class=\"back\"><a href=\"{{path('app_client_details',{id:product.id})}}\"><img src=\"{{ asset('uploads/products/' ~ product.image) }}\" alt=\"\" class=\"img-fluid\"></a></div>
                      </div>
                    </div><a href=\"{{path('app_client_details',{id:product.id})}}\" class=\"invisible\">
                    <img src=\"{{asset ('img/product2.jpg')}}\" alt=\"\" class=\"img-fluid\"></a>
                    <div class=\"text\">
                      <h3>{{product.name}}</h3>
                      <p class=\"price\">{{product.price}}dt</p>
                    </div>
                  </div>
                  <!-- /.product-->
                </div>
                {%endif%}
                {% endfor %}
              
              {# <div class=\"row same-height-row\">
                <div class=\"col-md-3 col-sm-6\">
                  <div class=\"box same-height\">
                    <h3>Products viewed recently</h3>
                  </div>
                </div>
                <div class=\"col-md-3 col-sm-6\">
                  <div class=\"product same-height\">
                    <div class=\"flip-container\">
                      <div class=\"flipper\">
                        <div class=\"front\"><a href=\"detail.html\"><img src=\"{{asset ('img/product2.jpg')}}\" alt=\"\" class=\"img-fluid\"></a></div>
                        <div class=\"back\"><a href=\"detail.html\"><img src=\"{{asset ('img/product2_2.jpg')}}\" alt=\"\" class=\"img-fluid\"></a></div>
                      </div>
                    </div><a href=\"detail.html\" class=\"invisible\"><img src=\"{{asset ('img/product2.jpg')}}\" alt=\"\" class=\"img-fluid\"></a>
                    <div class=\"text\">
                      <h3>Fur coat</h3>
                      <p class=\"price\">\$143</p>
                    </div>
                  </div>
                  <!-- /.product-->
                </div>
                <div class=\"col-md-3 col-sm-6\">
                  <div class=\"product same-height\">
                    <div class=\"flip-container\">
                      <div class=\"flipper\">
                        <div class=\"front\"><a href=\"detail.html\"><img src=\"{{asset ('img/product1.jpg')}}\" alt=\"\" class=\"img-fluid\"></a></div>
                        <div class=\"back\"><a href=\"detail.html\"><img src=\"{{asset ('img/product1_2.jpg')}}\" alt=\"\" class=\"img-fluid\"></a></div>
                      </div>
                    </div><a href=\"detail.html\" class=\"invisible\"><img src=\"{{asset ('img/product1.jpg')}}\" alt=\"\" class=\"img-fluid\"></a>
                    <div class=\"text\">
                      <h3>Fur coat</h3>
                      <p class=\"price\">\$143</p>
                    </div>
                  </div>
                  <!-- /.product-->
                </div>
                <div class=\"col-md-3 col-sm-6\">
                  <div class=\"product same-height\">
                    <div class=\"flip-container\">
                      <div class=\"flipper\">
                        <div class=\"front\"><a href=\"detail.html\"><img src=\"{{asset ('img/product3.jpg')}}\" alt=\"\" class=\"img-fluid\"></a></div>
                        <div class=\"back\"><a href=\"detail.html\"><img src=\"{{asset ('img/product3_2.jpg')}}\" alt=\"\" class=\"img-fluid\"></a></div>
                      </div>
                    </div><a href=\"detail.html\" class=\"invisible\"><img src=\"{{asset ('img/product3.jpg')}}\" alt=\"\" class=\"img-fluid\"></a>
                    <div class=\"text\">
                      <h3>Fur coat</h3>
                      <p class=\"price\">\$143</p>
                    </div>
                  </div>
                  <!-- /.product-->
                </div>
              </div>
            </div> #}
            <!-- /.col-md-9-->
          </div>
        </div>
      </div>
    </div>
</div>    <!--
        *** FOOTER ***
    _________________________________________________________
    -->
    <div id=\"footer\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-lg-3 col-md-6\">
            {# <h4 class=\"mb-3\">Pages</h4>
            <ul class=\"list-unstyled\">
              <li><a href=\"text.html\">About us</a></li>
              <li><a href=\"text.html\">Terms and conditions</a></li>
              <li><a href=\"faq.html\">FAQ</a></li>
              <li><a href=\"contact.html\">Contact us</a></li>
            </ul> #}
            {# <hr>
            <h4 class=\"mb-3\">User section</h4>
            <ul class=\"list-unstyled\">
              <li><a href=\"#\" data-toggle=\"modal\" data-target=\"#login-modal\">Login</a></li>
              <li><a href=\"register.html\">Regiter</a></li>
            </ul> #}
          </div>
          <!-- /.col-lg-3-->
          <div class=\"col-lg-3 col-md-6\">
            <h4 class=\"mb-3\">Top categories</h4>
            <h5>Informatique</h5>
            <h5>Mobile</h5>
            <h5>Gaming</h5>
            <h5>Accessoirs</h5>
            <h5>Electronic</h5>
            
          </div>
          <!-- /.col-lg-3-->
          <div class=\"col-lg-3 col-md-6\">
            <h4 class=\"mb-3\">Where to find us</h4>
            <p><strong>Tunisia</strong><br>Djerba Houmt-souk</p>
            <hr class=\"d-block d-md-none\">
          </div>
          <!-- /.col-lg-3-->
          <div class=\"col-lg-3 col-md-6\">
            {# <h4 class=\"mb-3\">Get the news</h4>
            <p class=\"text-muted\">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
            <form>
              <div class=\"input-group\">
                <input type=\"text\" class=\"form-control\"><span class=\"input-group-append\">
                  <button type=\"button\" class=\"btn btn-outline-secondary\">Subscribe!</button></span>
              </div>
              <!-- /input-group-->
            </form> #}
            <hr>
            <h4 class=\"mb-3\">Stay in touch</h4>
            <p class=\"social\"><a href=\"{{asset('https://www.facebook.com/idriss.benyaala')}}\" class=\"facebook external\"><i class=\"fa fa-facebook\"></i></a><a href=\"#\" class=\"twitter external\"><i class=\"fa fa-twitter\"></i></a><a href=\"#\" class=\"instagram external\"><i class=\"fa fa-instagram\"></i></a><a href=\"#\" class=\"gplus external\"><i class=\"fa fa-google-plus\"></i></a><a href=\"{{asset('https://mail.google.com/mail/u/0/#inbox')}}\" class=\"email external\"><i class=\"fa fa-envelope\"></i></a></p>
          </div>
          <!-- /.col-lg-3-->
        </div>
        <!-- /.row-->
      </div>
      <!-- /.container-->
    </div>
    <!-- /#footer-->
    <!-- *** FOOTER END ***-->
    
    
    <!--
    *** COPYRIGHT ***
    _________________________________________________________
    -->
    {# <div id=\"copyright\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-lg-6 mb-2 mb-lg-0\">
            <p class=\"text-center text-lg-left\">©2019 Your name goes here.</p>
          </div>
          <div class=\"col-lg-6\">
            <p class=\"text-center text-lg-right\">Template design by <a href=\"https://bootstrapious.com/\">Bootstrapious</a>
              <!-- If you want to remove this backlink, pls purchase an Attribution-free License @ https://bootstrapious.com/p/obaju-e-commerce-template. Big thanks!-->
            </p>
          </div>
        </div>
      </div>
    </div> #}
    <!-- *** COPYRIGHT END ***-->
    <!-- JavaScript files-->
    <script src=\"{{asset('vendor/jquery/jquery.min.js')}}\"></script>
    <script src=\"{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}\"></script>
    <script src=\"{{asset('vendor/jquery.cookie/jquery.cookie.js')}}\"> </script>
    <script src=\"{{asset('vendor/owl.carousel/owl.carousel.min.js')}}\"></script>
    <script src=\"{{asset('vendor/owl.carousel2.thumbs/owl.carousel2.thumbs.js')}}\"></script>
    <script src=\"{{asset('js/front.js')}}\"></script>
  </body>
</html>
{% endblock %}
", "client/details.html.twig", "C:\\xampp\\htdocs\\projettt\\proj1\\templates\\client\\details.html.twig");
    }
}
