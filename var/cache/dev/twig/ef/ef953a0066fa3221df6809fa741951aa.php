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

/* client/index.html.twig */
class __TwigTemplate_4cba61e5066078a8720e55c66a94cb64 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "client/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "client/index.html.twig", 1);
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

        echo "Home";
        
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
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\">
    <!-- Font Awesome CSS-->
    <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\">
    <!-- Google fonts - Roboto -->
    <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://fonts.googleapis.com/css?family=Roboto:100,300,400,700"), "html", null, true);
        echo "\">
    <!-- owl carousel-->
    <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/owl.carousel/assets/owl.carousel.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/owl.carousel/assets/owl.theme.default.css"), "html", null, true);
        echo "\">
    <!-- theme stylesheet-->
    <link rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.default.css"), "html", null, true);
        echo "\" id=\"theme-stylesheet\">
    <!-- Custom stylesheet - for your changes-->
    <link rel=\"stylesheet\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/custom.css"), "html", null, true);
        echo "\">
    <!-- Favicon-->
    <link rel=\"shortcut icon\" href=\"";
        // line 30
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
        // line 43
        echo "        ";
        // line 44
        echo "          <div class=\"row\">
            ";
        // line 46
        echo "            
          </div>
        </div>
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
        // line 79
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
              <li class=\"nav-item\"><a href=\"#\" class=\"nav-link active\">Home</a></li>
              ";
        // line 88
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
        // line 139
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
        // line 178
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/banner.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img img-fluid\"></a></div>
                        <div class=\"banner\"><a href=\"#\"><img src=\"";
        // line 179
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/banner2.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img img-fluid\"></a></div>
                      </div>
                    </div>
                  </li>
                </ul>
              </li>
              ";
        // line 186
        echo "                <ul class=\"dropdown-menu megamenu\">
                  <li>
                    <div class=\"row\">
                      <div class=\"col-md-6 col-lg-3\">
                        <h5>Shop</h5>
                        <ul class=\"list-unstyled mb-3\">
                          <li class=\"nav-item\"><a href=\"";
        // line 192
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_client_index");
        echo "\" class=\"nav-link\">Homepage</a></li>
                          <li class=\"nav-item\"><a href=\"category.html\" class=\"nav-link\">Category - sidebar left</a></li>
                          <li class=\"nav-item\"><a href=\"category-right.html\" class=\"nav-link\">Category - sidebar right</a></li>
                          <li class=\"nav-item\"><a href=\"category-full.html\" class=\"nav-link\">Category - full width</a></li>
                          ";
        // line 197
        echo "                        </ul>
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
        // line 239
        echo "              <div id=\"basket-overview\" class=\"navbar-collapse collapse d-none d-lg-block\">
                  <a href=\"";
        // line 240
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_index");
        echo "\" class=\"btn btn-primary navbar-btn\">
                      <i class=\"fa fa-shopping-cart\"></i>
                      <span>";
        // line 242
        echo twig_escape_filter($this->env, (isset($context["quantity"]) || array_key_exists("quantity", $context) ? $context["quantity"] : (function () { throw new RuntimeError('Variable "quantity" does not exist.', 242, $this->source); })()), "html", null, true);
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
            <div class=\"col-md-12\">
              <div id=\"main-slider\" class=\"owl-carousel owl-theme\">
                <div class=\"item\"><img src=\"";
        // line 268
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Uploads/Products/ccc.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-fluid\"></div>
                <div class=\"item\"><img src=\"";
        // line 269
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("Uploads/Products/eee.webp"), "html", null, true);
        echo "\" alt=\"\" class=\"img-fluid\"></div>
              </div>
              <!-- /#main-slider-->
            </div>
          </div>
        </div>

        
        <!--
        *** ADVANTAGES HOMEPAGE ***
        _________________________________________________________
        -->
        <div id=\"advantages\">
          <div class=\"container\">
            <div class=\"row mb-4\">
              <div class=\"col-md-4\">
                <div class=\"box clickable d-flex flex-column justify-content-center mb-0 h-100\">
                  <div class=\"icon\"><i class=\"fa fa-heart\"></i></div>
                  <h3><a href=\"#\">We love our customers</a></h3>
                  <p class=\"mb-0\">We are known to provide best possible service ever</p>
                </div>
              </div>
              <div class=\"col-md-4\">
                <div class=\"box clickable d-flex flex-column justify-content-center mb-0 h-100\">
                  <div class=\"icon\"><i class=\"fa fa-tags\"></i></div>
                  <h3><a href=\"#\">Best prices</a></h3>
                  <p class=\"mb-0\">You can check that the height of the boxes adjust when longer text like this one is used in one of them.</p>
                </div>
              </div>
              <div class=\"col-md-4\">
                <div class=\"box clickable d-flex flex-column justify-content-center mb-0 h-100\">
                  <div class=\"icon\"><i class=\"fa fa-thumbs-up\"></i></div>
                  <h3><a href=\"#\">100% satisfaction guaranteed</a></h3>
                  <p class=\"mb-0\">Free returns on everything for 3 months.</p>
                </div>
              </div>
            </div>
            <!-- /.row-->
          </div>
          <!-- /.container-->
        </div>
        <!-- /#advantages-->
        <!-- *** ADVANTAGES END ***-->
        <!--
        *** HOT PRODUCT SLIDESHOW ***
        _________________________________________________________
        -->
    <div id=\"hot\">
    <div class=\"box py-4\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <h2 class=\"mb-0\">Our Products</h2>
                </div>
            </div>
        </div>
    </div>

    <div class=\"container\">
        <div class=\"product-slider owl-carousel owl-theme\">
            ";
        // line 329
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 329, $this->source); })()));
        foreach ($context['_seq'] as $context["i"] => $context["product"]) {
            // line 330
            echo "                ";
            if ((($context["i"] % 5) == 0)) {
                // line 331
                echo "                    </div></div><div class=\"container\"><div class=\"product-slider owl-carousel owl-theme\">
                ";
            }
            // line 333
            echo "                <div class=\"item\">
                    <div class=\"product\">
                        <div class=\"flip-container\">
                            <div class=\"flipper\">
                                <div class=\"front\">
                                    <a href=\"";
            // line 338
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_client_details", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 338)]), "html", null, true);
            echo "\">
                                        ";
            // line 339
            if (twig_get_attribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 339)) {
                // line 340
                echo "                                            <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/products/" . twig_get_attribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 340))), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "image", [], "any", false, false, false, 340), "html", null, true);
                echo "\">
                                        ";
            }
            // line 342
            echo "                                    </a>
                                </div>
                                <div class=\"back\">
                                    <a href=\"";
            // line 345
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_client_details", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 345)]), "html", null, true);
            echo "\"></a>
                                </div>
                            </div>
                        </div>
                        <a href=\"";
            // line 349
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_client_details", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 349)]), "html", null, true);
            echo "\" class=\"invisible\">
                            <img src=\"";
            // line 350
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/product1.jpg"), "html", null, true);
            echo "\" alt=\"\" class=\"img-fluid\">
                        </a>
                        <div class=\"text\">
                            <h3><a href=\"";
            // line 353
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_client_details", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 353)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 353), "html", null, true);
            echo "</a></h3>
                            <p class=\"price\">
                                <del></del>";
            // line 355
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 355), "html", null, true);
            echo "
                            </p>
                             <a class=\"btn btn-primary add-to-cart-btn\" href=\"";
            // line 357
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_add", ["id" => twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 357)]), "html", null, true);
            echo "\">
                            Add to Cart
                        </a>
                        </div>
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 364
        echo "        </div>
    </div>
</div>
<style>
   .product {
        position: relative;
    }

    .product .text {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .product .text .add-to-cart-btn {
        display: none;
        margin-top: 10px; /* Adjust the margin as needed */
    }

    .product:hover .text .add-to-cart-btn {
        display: block;
    }
</style>

";
        // line 413
        echo "
        <!--
        *** GET INSPIRED ***
        _________________________________________________________
        -->
        ";
        // line 431
        echo "        <!-- *** GET INSPIRED END ***-->
        <!--
        *** BLOG HOMEPAGE ***
        _________________________________________________________
        -->
        ";
        // line 469
        echo "        <!-- /.container-->
        <!-- *** BLOG HOMEPAGE END ***-->
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
        // line 488
        echo "            ";
        // line 494
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
        // line 522
        echo "            <hr>
            <h4 class=\"mb-3\">Stay in touch</h4>
            <p class=\"social\"><a href=\"";
        // line 524
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
        // line 554
        echo "    <!-- *** COPYRIGHT END ***-->
    <!-- JavaScript files-->
    <script src=\"";
        // line 556
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 557
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 558
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/jquery.cookie/jquery.cookie.js"), "html", null, true);
        echo "\"> </script>
    <script src=\"";
        // line 559
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/owl.carousel/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 560
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/owl.carousel2.thumbs/owl.carousel2.thumbs.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 561
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
        return "client/index.html.twig";
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
        return array (  678 => 561,  674 => 560,  670 => 559,  666 => 558,  662 => 557,  658 => 556,  654 => 554,  633 => 524,  629 => 522,  608 => 494,  606 => 488,  592 => 469,  585 => 431,  578 => 413,  552 => 364,  539 => 357,  534 => 355,  527 => 353,  521 => 350,  517 => 349,  510 => 345,  505 => 342,  497 => 340,  495 => 339,  491 => 338,  484 => 333,  480 => 331,  477 => 330,  473 => 329,  410 => 269,  406 => 268,  377 => 242,  372 => 240,  369 => 239,  326 => 197,  319 => 192,  311 => 186,  302 => 179,  298 => 178,  257 => 139,  205 => 88,  190 => 79,  155 => 46,  152 => 44,  150 => 43,  135 => 30,  130 => 28,  125 => 26,  120 => 24,  116 => 23,  111 => 21,  106 => 19,  101 => 17,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Home{% endblock %}

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
    <link rel=\"stylesheet\" href=\"{{ asset ('vendor/bootstrap/css/bootstrap.min.css')}}\">
    <!-- Font Awesome CSS-->
    <link rel=\"stylesheet\" href=\"{{ asset ('vendor/font-awesome/css/font-awesome.min.css')}}\">
    <!-- Google fonts - Roboto -->
    <link rel=\"stylesheet\" href=\"{{ asset ('https://fonts.googleapis.com/css?family=Roboto:100,300,400,700')}}\">
    <!-- owl carousel-->
    <link rel=\"stylesheet\" href=\"{{ asset ('vendor/owl.carousel/assets/owl.carousel.css')}}\">
    <link rel=\"stylesheet\" href=\"{{ asset ('vendor/owl.carousel/assets/owl.theme.default.css')}}\">
    <!-- theme stylesheet-->
    <link rel=\"stylesheet\" href=\"{{ asset ('css/style.default.css')}}\" id=\"theme-stylesheet\">
    <!-- Custom stylesheet - for your changes-->
    <link rel=\"stylesheet\" href=\"{{ asset ('css/custom.css')}}\">
    <!-- Favicon-->
    <link rel=\"shortcut icon\" href=\"{{ asset ('favicon.png')}}')}}\">
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
      {# <div id=\"top\"> #}
        {# <div class=\"container\"> #}
          <div class=\"row\">
            {# <div class=\"col-lg-6 offer mb-3 mb-lg-0\"><a href=\"#\" class=\"btn btn-success btn-sm\">Offer of the day</a><a href=\"#\" class=\"ml-1\">Get flat 35% off on orders over \$50!</a></div> #}
            
          </div>
        </div>
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
          <div class=\"navbar-buttons\">
            <button type=\"button\" data-toggle=\"collapse\" data-target=\"#navigation\" class=\"btn btn-outline-secondary navbar-toggler\"><span class=\"sr-only\">Toggle navigation</span><i class=\"fa fa-align-justify\"></i></button>
            <button type=\"button\" data-toggle=\"collapse\" data-target=\"#search\" class=\"btn btn-outline-secondary navbar-toggler\"><span class=\"sr-only\">Toggle search</span><i class=\"fa fa-search\"></i></button><a href=\"basket.html\" class=\"btn btn-outline-secondary navbar-toggler\"><i class=\"fa fa-shopping-cart\"></i></a>
          </div>
          <div id=\"navigation\" class=\"collapse navbar-collapse\">
            <ul class=\"navbar-nav mr-auto\">
              <li class=\"nav-item\"><a href=\"#\" class=\"nav-link active\">Home</a></li>
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
                        <div class=\"banner\"><a href=\"#\"><img src=\"{{ asset ('img/banner.jpg')}}\" alt=\"\" class=\"img img-fluid\"></a></div>
                        <div class=\"banner\"><a href=\"#\"><img src=\"{{ asset ('img/banner2.jpg')}}\" alt=\"\" class=\"img img-fluid\"></a></div>
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
                          <li class=\"nav-item\"><a href=\"{{ path('app_client_index')}}\" class=\"nav-link\">Homepage</a></li>
                          <li class=\"nav-item\"><a href=\"category.html\" class=\"nav-link\">Category - sidebar left</a></li>
                          <li class=\"nav-item\"><a href=\"category-right.html\" class=\"nav-link\">Category - sidebar right</a></li>
                          <li class=\"nav-item\"><a href=\"category-full.html\" class=\"nav-link\">Category - full width</a></li>
                          {# <li class=\"nav-item\"><a href=\"{{ path('app_client_details', {id: product.id}) }}\" class=\"nav-link\">Product detail</a></li> #}
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
            <div class=\"col-md-12\">
              <div id=\"main-slider\" class=\"owl-carousel owl-theme\">
                <div class=\"item\"><img src=\"{{ asset ('Uploads/Products/ccc.jpg')}}\" alt=\"\" class=\"img-fluid\"></div>
                <div class=\"item\"><img src=\"{{ asset ('Uploads/Products/eee.webp')}}\" alt=\"\" class=\"img-fluid\"></div>
              </div>
              <!-- /#main-slider-->
            </div>
          </div>
        </div>

        
        <!--
        *** ADVANTAGES HOMEPAGE ***
        _________________________________________________________
        -->
        <div id=\"advantages\">
          <div class=\"container\">
            <div class=\"row mb-4\">
              <div class=\"col-md-4\">
                <div class=\"box clickable d-flex flex-column justify-content-center mb-0 h-100\">
                  <div class=\"icon\"><i class=\"fa fa-heart\"></i></div>
                  <h3><a href=\"#\">We love our customers</a></h3>
                  <p class=\"mb-0\">We are known to provide best possible service ever</p>
                </div>
              </div>
              <div class=\"col-md-4\">
                <div class=\"box clickable d-flex flex-column justify-content-center mb-0 h-100\">
                  <div class=\"icon\"><i class=\"fa fa-tags\"></i></div>
                  <h3><a href=\"#\">Best prices</a></h3>
                  <p class=\"mb-0\">You can check that the height of the boxes adjust when longer text like this one is used in one of them.</p>
                </div>
              </div>
              <div class=\"col-md-4\">
                <div class=\"box clickable d-flex flex-column justify-content-center mb-0 h-100\">
                  <div class=\"icon\"><i class=\"fa fa-thumbs-up\"></i></div>
                  <h3><a href=\"#\">100% satisfaction guaranteed</a></h3>
                  <p class=\"mb-0\">Free returns on everything for 3 months.</p>
                </div>
              </div>
            </div>
            <!-- /.row-->
          </div>
          <!-- /.container-->
        </div>
        <!-- /#advantages-->
        <!-- *** ADVANTAGES END ***-->
        <!--
        *** HOT PRODUCT SLIDESHOW ***
        _________________________________________________________
        -->
    <div id=\"hot\">
    <div class=\"box py-4\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <h2 class=\"mb-0\">Our Products</h2>
                </div>
            </div>
        </div>
    </div>

    <div class=\"container\">
        <div class=\"product-slider owl-carousel owl-theme\">
            {% for i, product in products %}
                {% if i % 5 == 0 %}
                    </div></div><div class=\"container\"><div class=\"product-slider owl-carousel owl-theme\">
                {% endif %}
                <div class=\"item\">
                    <div class=\"product\">
                        <div class=\"flip-container\">
                            <div class=\"flipper\">
                                <div class=\"front\">
                                    <a href=\"{{ path('app_client_details', {id: product.id}) }}\">
                                        {% if product.image %}
                                            <img src=\"{{ asset('uploads/products/' ~ product.image) }}\" alt=\"{{ product.image }}\">
                                        {% endif %}
                                    </a>
                                </div>
                                <div class=\"back\">
                                    <a href=\"{{ path('app_client_details', {id: product.id}) }}\"></a>
                                </div>
                            </div>
                        </div>
                        <a href=\"{{ path('app_client_details', {id: product.id}) }}\" class=\"invisible\">
                            <img src=\"{{ asset('img/product1.jpg') }}\" alt=\"\" class=\"img-fluid\">
                        </a>
                        <div class=\"text\">
                            <h3><a href=\"{{ path('app_client_details', {id: product.id}) }}\">{{ product.name }}</a></h3>
                            <p class=\"price\">
                                <del></del>{{ product.price }}
                            </p>
                             <a class=\"btn btn-primary add-to-cart-btn\" href=\"{{path('cart_add', {id:product.id})}}\">
                            Add to Cart
                        </a>
                        </div>
                    </div>
                </div>
            {% endfor %}
        </div>
    </div>
</div>
<style>
   .product {
        position: relative;
    }

    .product .text {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .product .text .add-to-cart-btn {
        display: none;
        margin-top: 10px; /* Adjust the margin as needed */
    }

    .product:hover .text .add-to-cart-btn {
        display: block;
    }
</style>

{# <script>
    // Owl Carousel initialization
    \$(document).ready(function () {
        \$(\".product-slider\").owlCarousel({
            loop: true,
            margin: 10,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1,
                    nav: true,
                },
                600: {
                    items: 3,
                    nav: false,
                },
                1000: {
                    items: 4,
                    nav: true,
                    loop: false,
                },
            },
        });
    });
</script> #}

        <!--
        *** GET INSPIRED ***
        _________________________________________________________
        -->
        {# <div class=\"container\">
          <div class=\"col-md-12\">
            <div class=\"box slideshow\">
              <h3>Get Inspired</h3>
              <p class=\"lead\">Get the inspiration from our world class designers</p>
              <div id=\"get-inspired\" class=\"owl-carousel owl-theme\">
                <div class=\"item\"><a href=\"#\"><img src=\"{{ asset ('img/getinspired1.jpg')}}\" alt=\"Get inspired\" class=\"img-fluid\"></a></div>
                <div class=\"item\"><a href=\"#\"><img src=\"{{ asset ('img/getinspired2.jpg')}}\" alt=\"Get inspired\" class=\"img-fluid\"></a></div>
                <div class=\"item\"><a href=\"#\"><img src=\"{{ asset ('img/getinspired3.jpg')}}\" alt=\"Get inspired\" class=\"img-fluid\"></a></div>
              </div>
            </div>
          </div>
        </div> #}
        <!-- *** GET INSPIRED END ***-->
        <!--
        *** BLOG HOMEPAGE ***
        _________________________________________________________
        -->
        {# <div class=\"box text-center\">
          <div class=\"container\">
            <div class=\"col-md-12\">
              <h3 class=\"text-uppercase\">From our blog</h3>
              <p class=\"lead mb-0\">What's new in the world of technology? </p>
            </div>
          </div>
        </div>
        <div class=\"container\">
          <div class=\"col-md-12\">
            <div id=\"blog-homepage\" class=\"row\">
              <div class=\"col-sm-6\">
                <div class=\"post\">
                  <h4><a href=\"post.html\">Fashion now</a></h4>
                  <p class=\"author-category\">By <a href=\"#\">John Slim</a> in <a href=\"\">Fashion and style</a></p>
                  <hr>
                  <p class=\"intro\">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                  <p class=\"read-more\"><a href=\"post.html\" class=\"btn btn-primary\">Continue reading</a></p>
                </div>
              </div>
              <div class=\"col-sm-6\">
                <div class=\"post\">
                  <h4><a href=\"post.html\">Who is who - example blog post</a></h4>
                  <p class=\"author-category\">By <a href=\"#\">John Slim</a> in <a href=\"\">About Minimal</a></p>
                  <hr>
                  <p class=\"intro\">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                  <p class=\"read-more\"><a href=\"post.html\" class=\"btn btn-primary\">Continue reading</a></p>
                </div>
              </div>
            </div>
            <!-- /#blog-homepage-->
          </div>
        </div> #}
        <!-- /.container-->
        <!-- *** BLOG HOMEPAGE END ***-->
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
    <script src=\"{{ asset ('vendor/jquery/jquery.min.js')}}\"></script>
    <script src=\"{{ asset ('vendor/bootstrap/js/bootstrap.bundle.min.js')}}\"></script>
    <script src=\"{{ asset ('vendor/jquery.cookie/jquery.cookie.js')}}\"> </script>
    <script src=\"{{ asset ('vendor/owl.carousel/owl.carousel.min.js')}}\"></script>
    <script src=\"{{ asset ('vendor/owl.carousel2.thumbs/owl.carousel2.thumbs.js')}}\"></script>
    <script src=\"{{ asset ('js/front.js')}}\"></script>
  </body>
</html>
{% endblock %}
", "client/index.html.twig", "C:\\xampp\\htdocs\\projettt\\proj1\\templates\\client\\index.html.twig");
    }
}
