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

/* cart/index.html.twig */
class __TwigTemplate_53021846f82e542ca35cd33e0515eb83 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "cart/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "cart/index.html.twig", 1);
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

        echo "Cart";
        
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
        echo "\">
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
        <div class=\"container\"><a href=\"";
        // line 72
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_client_index");
        echo "\" class=\"navbar-brand home\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo.png"), "html", null, true);
        echo "\" alt=\"Obaju logo\" class=\"d-none d-md-inline-block\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo-small.png"), "html", null, true);
        echo "\" alt=\"Obaju logo\" class=\"d-inline-block d-md-none\"><span class=\"sr-only\">Obaju - go to homepage</span></a>
        ";
        // line 74
        echo "          <div class=\"navbar-buttons\">
            <button type=\"button\" data-toggle=\"collapse\" data-target=\"#navigation\" class=\"btn btn-outline-secondary navbar-toggler\"><span class=\"sr-only\">Toggle navigation</span><i class=\"fa fa-align-justify\"></i></button>
            <button type=\"button\" data-toggle=\"collapse\" data-target=\"#search\" class=\"btn btn-outline-secondary navbar-toggler\"><span class=\"sr-only\">Toggle search</span><i class=\"fa fa-search\"></i></button><a href=\"basket.html\" class=\"btn btn-outline-secondary navbar-toggler\"><i class=\"fa fa-shopping-cart\"></i></a>
          </div>
          <div id=\"navigation\" class=\"collapse navbar-collapse\">
            <ul class=\"navbar-nav mr-auto\">
              <li class=\"nav-item\"><a href=\"";
        // line 80
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_client_index");
        echo "\" class=\"nav-link \">Home</a></li>
              ";
        // line 82
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
        // line 133
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
                        <div class=\"banner\"><a href=\"#\"><img src=\"img/banner.jpg\" alt=\"\" class=\"img img-fluid\"></a></div>
                        <div class=\"banner\"><a href=\"#\"><img src=\"img/banner2.jpg\" alt=\"\" class=\"img img-fluid\"></a></div>
                      </div>
                    </div>
                  </li>
                </ul>
              </li>
              ";
        // line 180
        echo "                <ul class=\"dropdown-menu megamenu\">
                  
                </ul>
              </li>
            </ul>
            <div class=\"navbar-buttons d-flex justify-content-end\">
              <!-- /.nav-collapse-->
              <div id=\"basket-overview\" class=\"navbar-collapse collapse d-none d-lg-block\">
                  <a href=\"";
        // line 188
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_index");
        echo "\" class=\"btn btn-primary navbar-btn\">
                      <i class=\"fa fa-shopping-cart\"></i>
                      <span>
                     ";
        // line 191
        echo twig_escape_filter($this->env, (isset($context["quantity"]) || array_key_exists("quantity", $context) ? $context["quantity"] : (function () { throw new RuntimeError('Variable "quantity" does not exist.', 191, $this->source); })()), "html", null, true);
        echo "  items in cart
                </span>
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
        // line 220
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_client_index");
        echo "\">Home</a></li>
                  <li aria-current=\"page\" class=\"breadcrumb-item active\">Shopping cart</li>
                </ol>
              </nav>
            </div>
            <div id=\"basket\" class=\"col-lg-12\">
              <div class=\"box\">
                <form method=\"post\" action=\"";
        // line 227
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_command_add");
        echo "\">
                  <h1>Shopping cart</h1>
                  <p class=\"text-muted\">You currently have ";
        // line 229
        echo twig_escape_filter($this->env, (isset($context["quantity"]) || array_key_exists("quantity", $context) ? $context["quantity"] : (function () { throw new RuntimeError('Variable "quantity" does not exist.', 229, $this->source); })()), "html", null, true);
        echo " item(s) in your cart.</p>
                  <div class=\"table-responsive\">
                    <table class=\"table\">
                      <thead>
                        <tr>
                          <th >Product</th>
                           <th>Name</th>

                          <th>Quantity</th>
                          <th>Price</th>
                          <th >Total</th>
                          <th >Action</th>

                        </tr>
                      </thead>
                      <tbody>
                      ";
        // line 245
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 245, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
            // line 246
            echo "                     
                        <tr>
                          <td><a href=\"#\"><img src=\"";
            // line 248
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("Uploads/Products/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["element"], "product", [], "any", false, false, false, 248), "image", [], "any", false, false, false, 248))), "html", null, true);
            echo "\"></a></td>
                          <td>";
            // line 249
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["element"], "product", [], "any", false, false, false, 249), "name", [], "any", false, false, false, 249), "html", null, true);
            echo "</td>
                          <td>
                            ";
            // line 251
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["element"], "quantity", [], "any", false, false, false, 251), "html", null, true);
            echo "
                          </td>
                          <td>";
            // line 253
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["element"], "product", [], "any", false, false, false, 253), "price", [], "any", false, false, false, 253), "html", null, true);
            echo "dt</td>
                          <td>";
            // line 254
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["element"], "quantity", [], "any", false, false, false, 254) * twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["element"], "product", [], "any", false, false, false, 254), "price", [], "any", false, false, false, 254)), "html", null, true);
            echo "</td>
                          <td>
                          <a href=\"";
            // line 256
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_add", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["element"], "product", [], "any", false, false, false, 256), "id", [], "any", false, false, false, 256)]), "html", null, true);
            echo "\" class=\"btn btn-success\">+</a>
                         <a href=\"";
            // line 257
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_remove", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["element"], "product", [], "any", false, false, false, 257), "id", [], "any", false, false, false, 257)]), "html", null, true);
            echo "\" class=\"btn btn-warning\">-</a>
                         <a href=\"";
            // line 258
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_delete", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["element"], "product", [], "any", false, false, false, 258), "id", [], "any", false, false, false, 258)]), "html", null, true);
            echo "\" class=\"btn btn-danger\">delete</a>
                        </td>



                        </tr>
                        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 265
            echo "                        <td colspan=\"5\">your cart is empty </td>
                         ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 267
        echo "                       
                      </tbody>
                      <tfoot>
                        <tr>
                          <th colspan=\"5\">Total</th>
                          <th colspan=\"2\">";
        // line 272
        echo twig_escape_filter($this->env, (isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 272, $this->source); })()), "html", null, true);
        echo "</th>
                        </tr>
                      </tfoot>
                    </table>
                  </div>
                  <!-- /.table-responsive-->
                  <div class=\"box-footer d-flex justify-content-between flex-column flex-lg-row\">
                    <div class=\"left\"><a href=\"";
        // line 279
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_client_index");
        echo "\" class=\"btn btn-outline-secondary\"><i class=\"fa fa-chevron-left\"></i> Continue shopping</a></div>
                    <div class=\"right\">
                      ";
        // line 282
        echo "
                                              <button type=\"submit\" class=\"btn btn-primary\">Proceed to checkout <i class=\"fa fa-chevron-right\"></i></button>

                      </a>
                      ";
        // line 287
        echo "                    </div>
                  </div>
                </form>
              </div>
              <!-- /.box-->
              <div class=\"row same-height-row\">
                
                <div class=\"col-md-3 col-sm-6\">
                  <div class=\"product same-height\">
                    <div class=\"flip-container\">
                      <div class=\"flipper\">
                        </div>
                    </div>
                   
                  </div>
                  <!-- /.product-->
                </div>
                <div class=\"col-md-3 col-sm-6\">
                  <div class=\"product same-height\">
                    <div class=\"flip-container\">
                      
                    </div> 
                    
                     
                  </div>
                  <!-- /.product-->
                </div>
                <div class=\"col-md-3 col-sm-6\">
                  <div class=\"product same-height\">
                    <div class=\"flip-container\">
                     
                    </div>
                    
                  </div>
                  <!-- /.product-->
                </div>
              </div>
            </div>
            <!-- /.col-lg-9-->
            <div class=\"col-lg-3\">
              
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--
    *** FOOTER ***
    _________________________________________________________
    -->
     <div id=\"footer\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-lg-3 col-md-6\">
            ";
        // line 348
        echo "            ";
        // line 354
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
        // line 382
        echo "            <hr>
            <h4 class=\"mb-3\">Stay in touch</h4>
            <p class=\"social\"><a href=\"";
        // line 384
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
        // line 414
        echo "    <!-- *** COPYRIGHT END ***-->
    <!-- JavaScript files-->
    <script src=\"";
        // line 416
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 417
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 418
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/jquery.cookie/jquery.cookie.js"), "html", null, true);
        echo "\"> </script>
    <script src=\"";
        // line 419
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/owl.carousel/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 420
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/owl.carousel2.thumbs/owl.carousel2.thumbs.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 421
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
        return "cart/index.html.twig";
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
        return array (  597 => 421,  593 => 420,  589 => 419,  585 => 418,  581 => 417,  577 => 416,  573 => 414,  552 => 384,  548 => 382,  527 => 354,  525 => 348,  469 => 287,  463 => 282,  458 => 279,  448 => 272,  441 => 267,  434 => 265,  422 => 258,  418 => 257,  414 => 256,  409 => 254,  405 => 253,  400 => 251,  395 => 249,  391 => 248,  387 => 246,  382 => 245,  363 => 229,  358 => 227,  348 => 220,  316 => 191,  310 => 188,  300 => 180,  252 => 133,  200 => 82,  196 => 80,  188 => 74,  180 => 72,  134 => 29,  129 => 27,  124 => 25,  119 => 23,  115 => 22,  110 => 20,  105 => 18,  100 => 16,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Cart{% endblock %}

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
    <link rel=\"shortcut icon\" href=\"{{asset ('favicon.png')}}\">
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
        <div class=\"container\"><a href=\"{{ path('app_client_index')}}\" class=\"navbar-brand home\"><img src=\"{{ asset ('img/logo.png')}}\" alt=\"Obaju logo\" class=\"d-none d-md-inline-block\"><img src=\"{{ asset ('img/logo-small.png')}}\" alt=\"Obaju logo\" class=\"d-inline-block d-md-none\"><span class=\"sr-only\">Obaju - go to homepage</span></a>
        {# <img src=\"img/logo.png\" alt=\"Obaju logo\" class=\"d-none d-md-inline-block\"><img src=\"img/logo-small.png\" alt=\"Obaju logo\" class=\"d-inline-block d-md-none\"><span class=\"sr-only\">Obaju - go to homepage</span></a> #}
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
                        <div class=\"banner\"><a href=\"#\"><img src=\"img/banner.jpg\" alt=\"\" class=\"img img-fluid\"></a></div>
                        <div class=\"banner\"><a href=\"#\"><img src=\"img/banner2.jpg\" alt=\"\" class=\"img img-fluid\"></a></div>
                      </div>
                    </div>
                  </li>
                </ul>
              </li>
              {# <li class=\"nav-item dropdown menu-large\"><a href=\"#\" data-toggle=\"dropdown\" data-hover=\"dropdown\" data-delay=\"200\" class=\"dropdown-toggle nav-link\">Template<b class=\"caret\"></b></a> #}
                <ul class=\"dropdown-menu megamenu\">
                  
                </ul>
              </li>
            </ul>
            <div class=\"navbar-buttons d-flex justify-content-end\">
              <!-- /.nav-collapse-->
              <div id=\"basket-overview\" class=\"navbar-collapse collapse d-none d-lg-block\">
                  <a href=\"{{ path('cart_index') }}\" class=\"btn btn-primary navbar-btn\">
                      <i class=\"fa fa-shopping-cart\"></i>
                      <span>
                     {{ quantity }}  items in cart
                </span>
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
                  <li aria-current=\"page\" class=\"breadcrumb-item active\">Shopping cart</li>
                </ol>
              </nav>
            </div>
            <div id=\"basket\" class=\"col-lg-12\">
              <div class=\"box\">
                <form method=\"post\" action=\"{{path('app_command_add')}}\">
                  <h1>Shopping cart</h1>
                  <p class=\"text-muted\">You currently have {{ quantity }} item(s) in your cart.</p>
                  <div class=\"table-responsive\">
                    <table class=\"table\">
                      <thead>
                        <tr>
                          <th >Product</th>
                           <th>Name</th>

                          <th>Quantity</th>
                          <th>Price</th>
                          <th >Total</th>
                          <th >Action</th>

                        </tr>
                      </thead>
                      <tbody>
                      {% for element in data %}
                     
                        <tr>
                          <td><a href=\"#\"><img src=\"{{ asset('Uploads/Products/' ~ element.product.image) }}\"></a></td>
                          <td>{{element.product.name}}</td>
                          <td>
                            {{element.quantity}}
                          </td>
                          <td>{{element.product.price}}dt</td>
                          <td>{{element.quantity*element.product.price}}</td>
                          <td>
                          <a href=\"{{path('cart_add', {id : element.product.id})}}\" class=\"btn btn-success\">+</a>
                         <a href=\"{{path('cart_remove', {id : element.product.id})}}\" class=\"btn btn-warning\">-</a>
                         <a href=\"{{path('cart_delete', {id : element.product.id})}}\" class=\"btn btn-danger\">delete</a>
                        </td>



                        </tr>
                        {% else %}
                        <td colspan=\"5\">your cart is empty </td>
                         {% endfor %}
                       
                      </tbody>
                      <tfoot>
                        <tr>
                          <th colspan=\"5\">Total</th>
                          <th colspan=\"2\">{{ total }}</th>
                        </tr>
                      </tfoot>
                    </table>
                  </div>
                  <!-- /.table-responsive-->
                  <div class=\"box-footer d-flex justify-content-between flex-column flex-lg-row\">
                    <div class=\"left\"><a href=\"{{path('app_client_index')}}\" class=\"btn btn-outline-secondary\"><i class=\"fa fa-chevron-left\"></i> Continue shopping</a></div>
                    <div class=\"right\">
                      {# <a href=\"{{path('app_command')}}\"> #}

                                              <button type=\"submit\" class=\"btn btn-primary\">Proceed to checkout <i class=\"fa fa-chevron-right\"></i></button>

                      </a>
                      {# <button class=\"btn btn-outline-secondary\"><i class=\"fa fa-refresh\"></i> Update cart</button> #}
                    </div>
                  </div>
                </form>
              </div>
              <!-- /.box-->
              <div class=\"row same-height-row\">
                
                <div class=\"col-md-3 col-sm-6\">
                  <div class=\"product same-height\">
                    <div class=\"flip-container\">
                      <div class=\"flipper\">
                        </div>
                    </div>
                   
                  </div>
                  <!-- /.product-->
                </div>
                <div class=\"col-md-3 col-sm-6\">
                  <div class=\"product same-height\">
                    <div class=\"flip-container\">
                      
                    </div> 
                    
                     
                  </div>
                  <!-- /.product-->
                </div>
                <div class=\"col-md-3 col-sm-6\">
                  <div class=\"product same-height\">
                    <div class=\"flip-container\">
                     
                    </div>
                    
                  </div>
                  <!-- /.product-->
                </div>
              </div>
            </div>
            <!-- /.col-lg-9-->
            <div class=\"col-lg-3\">
              
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--
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
    <script src=\"{{asset ('vendor/jquery/jquery.min.js')}}\"></script>
    <script src=\"{{asset ('vendor/bootstrap/js/bootstrap.bundle.min.js')}}\"></script>
    <script src=\"{{asset ('vendor/jquery.cookie/jquery.cookie.js')}}\"> </script>
    <script src=\"{{asset ('vendor/owl.carousel/owl.carousel.min.js')}}\"></script>
    <script src=\"{{asset ('vendor/owl.carousel2.thumbs/owl.carousel2.thumbs.js')}}\"></script>
    <script src=\"{{asset ('js/front.js')}}\"></script>
  </body>
</html>
{% endblock %}
", "cart/index.html.twig", "C:\\xampp\\htdocs\\projettt\\proj1\\templates\\cart\\index.html.twig");
    }
}
