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

/* command/index.html.twig */
class __TwigTemplate_ad174d69f2f58be1c728e0de7187f014 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "command/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "command/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "command/index.html.twig", 1);
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

        echo "Hello CommandController!";
        
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
        // line 73
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_client_index");
        echo "\" class=\"navbar-brand home\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo.png"), "html", null, true);
        echo "\" alt=\"Obaju logo\" class=\"d-none d-md-inline-block\"><img src=\"img/logo-small.png\" alt=\"Obaju logo\" class=\"d-inline-block d-md-none\"><span class=\"sr-only\">Obaju - go to homepage</span></a>
          <div class=\"navbar-buttons\">
            <button type=\"button\" data-toggle=\"collapse\" data-target=\"#navigation\" class=\"btn btn-outline-secondary navbar-toggler\"><span class=\"sr-only\">Toggle navigation</span><i class=\"fa fa-align-justify\"></i></button>
            <button type=\"button\" data-toggle=\"collapse\" data-target=\"#search\" class=\"btn btn-outline-secondary navbar-toggler\"><span class=\"sr-only\">Toggle search</span><i class=\"fa fa-search\"></i></button><a href=\"basket.html\" class=\"btn btn-outline-secondary navbar-toggler\"><i class=\"fa fa-shopping-cart\"></i></a>
          </div>
          <div id=\"navigation\" class=\"collapse navbar-collapse\">
            <ul class=\"navbar-nav mr-auto\">
              <li class=\"nav-item\"><a href=\"";
        // line 80
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_client_index");
        echo "\" class=\"nav-link \">Home</a></li>
                
            </ul>
            <div class=\"navbar-buttons d-flex justify-content-end\">
              <!-- /.nav-collapse-->
                  <div id=\"basket-overview\" class=\"navbar-collapse collapse d-none d-lg-block\">
                  <a href=\"";
        // line 86
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_index");
        echo "\" class=\"btn btn-primary navbar-btn\">
                      <i class=\"fa fa-shopping-cart\"></i>
                      <span>";
        // line 88
        echo twig_escape_filter($this->env, (isset($context["quantity"]) || array_key_exists("quantity", $context) ? $context["quantity"] : (function () { throw new RuntimeError('Variable "quantity" does not exist.', 88, $this->source); })()), "html", null, true);
        echo " items in cart</span>
                  </a>
              </div>            </div>
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
";
        // line 107
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 107, $this->source); })()), 'form_start');
        echo "

    <div id=\"all\">
      <div id=\"content\">
        <div class=\"container\">
          <div class=\"row\">
            <div class=\"col-lg-12\">
              <!-- breadcrumb-->
              <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb\">
                  <li class=\"breadcrumb-item\"><a href=\"#\">Home</a></li>
                  <li aria-current=\"page\" class=\"breadcrumb-item active\">Checkout - Address</li>
                </ol>
              </nav>
            </div>
            <div id=\"checkout\" class=\"col-lg-12\">
              <div class=\"box\">
                <form method=\"get\" action=\"checkout2.html\">
                  <h1>Checkout - Address</h1>
                  <div class=\"content py-3\">
                    <div class=\"row\">
                      <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            ";
        // line 130
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 130, $this->source); })()), "firstname", [], "any", false, false, false, 130), 'row', ["label" => "First Name", "attr" => ["class" => "form-control"]]);
        echo "

                        </div>
                      </div>
                      <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            ";
        // line 136
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 136, $this->source); })()), "lastname", [], "any", false, false, false, 136), 'row', ["label" => "Last Name", "attr" => ["class" => "form-control"]]);
        echo "

                        </div>
                      </div>
                    </div>
                    <!-- /.row-->
                    <div class=\"row\">
                      <div class=\"col-md-6\">
                        <div class=\"form-group\">
                                  ";
        // line 145
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 145, $this->source); })()), "number", [], "any", false, false, false, 145), 'row', ["label" => "Number", "attr" => ["class" => "form-control"]]);
        echo "

                        </div>
                      </div>
                      <div class=\"col-md-6\">
                        <div class=\"form-group\">
                          ";
        // line 151
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 151, $this->source); })()), "address", [], "any", false, false, false, 151), 'row', ["label" => "Address", "attr" => ["class" => "form-control"]]);
        echo "

                          ";
        // line 155
        echo "                        </div>
                      </div>
                    </div>
                    <!-- /.row-->
                     <!-- /.row-->
                    <div class=\"row\">
                      <div class=\"col-md-6\">
                        <div class=\"form-group\">
                                 ";
        // line 163
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 163, $this->source); })()), "email", [], "any", false, false, false, 163), 'row', ["label" => "Email", "attr" => ["class" => "form-control"]]);
        echo "

                        </div>
                      </div>
                      
                      <div class=\"col-md-6\">
                        <div class=\"form-group\">
                        <br>
                        <label for=\"";
        // line 171
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 171, $this->source); })()), "product", [], "any", false, false, false, 171), "vars", [], "any", false, false, false, 171), "id", [], "any", false, false, false, 171), "html", null, true);
        echo "\">Selected Products:</label>
                                <div>
                                    ";
        // line 173
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cartProduct"]) || array_key_exists("cartProduct", $context) ? $context["cartProduct"] : (function () { throw new RuntimeError('Variable "cartProduct" does not exist.', 173, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 174
            echo "                                        ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 174), "html", null, true);
            echo "
                                        ";
            // line 175
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 175), "html", null, true);
            echo "
                                        ";
            // line 177
            echo "                                        <br>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 179
        echo "                                </div>
                            </div>
                            <div class=\"form-group\">
                                ";
        // line 182
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 182, $this->source); })()), "product", [], "any", false, false, false, 182), 'widget', ["value" => twig_join_filter(twig_array_map($this->env, (isset($context["cartProduct"]) || array_key_exists("cartProduct", $context) ? $context["cartProduct"] : (function () { throw new RuntimeError('Variable "cartProduct" does not exist.', 182, $this->source); })()), function ($__item__) use ($context, $macros) { $context["item"] = $__item__; return twig_get_attribute($this->env, $this->source, (isset($context["item"]) || array_key_exists("item", $context) ? $context["item"] : (function () { throw new RuntimeError('Variable "item" does not exist.', 182, $this->source); })()), "name", [], "any", false, false, false, 182); }), ", "), "label" => "Products"]);
        echo "
                            </div>
                          
                        </div>
                      </div>
                    </div>
                    <!-- /.row-->
                    
                    <!-- /.row-->
                     <div class=\"box-footer d-flex justify-content-between flex-column flex-lg-row\">
                    <div class=\"left\">
                  <a href=\"";
        // line 193
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("cart_");
        echo "\" class=\"btn btn-outline-secondary\"><i class=\"fa fa-chevron-left\"></i>Back to Cart</a>
                  </div>
                    <div class=\"right\">
                      ";
        // line 197
        echo "
                     <button type=\"submit\" class=\"btn btn-primary\">Continue to Delivery Method</button>

                      </a>
                    </div>
                  </div>
                  </div>
                </form>
                ";
        // line 205
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 205, $this->source); })()), 'form_end');
        echo "

         
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
        // line 229
        echo "            ";
        // line 235
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
        // line 263
        echo "            <hr>
            <h4 class=\"mb-3\">Stay in touch</h4>
            <p class=\"social\"><a href=\"";
        // line 265
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
        // line 295
        echo "    <!-- *** COPYRIGHT END ***-->
    <!-- JavaScript files-->
    <script src=\"";
        // line 297
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 298
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 299
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/jquery.cookie/jquery.cookie.js"), "html", null, true);
        echo "\"> </script>
    <script src=\"";
        // line 300
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/owl.carousel/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 301
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("vendor/owl.carousel2.thumbs/owl.carousel2.thumbs.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 302
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
        return "command/index.html.twig";
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
        return array (  463 => 302,  459 => 301,  455 => 300,  451 => 299,  447 => 298,  443 => 297,  439 => 295,  418 => 265,  414 => 263,  393 => 235,  391 => 229,  371 => 205,  361 => 197,  355 => 193,  341 => 182,  336 => 179,  329 => 177,  325 => 175,  320 => 174,  316 => 173,  311 => 171,  300 => 163,  290 => 155,  285 => 151,  276 => 145,  264 => 136,  255 => 130,  229 => 107,  207 => 88,  202 => 86,  193 => 80,  181 => 73,  134 => 29,  129 => 27,  124 => 25,  119 => 23,  115 => 22,  110 => 20,  105 => 18,  100 => 16,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello CommandController!{% endblock %}

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
      
        <div class=\"container\"><a href=\"{{path('app_client_index')}}\" class=\"navbar-brand home\"><img src=\"{{asset('img/logo.png')}}\" alt=\"Obaju logo\" class=\"d-none d-md-inline-block\"><img src=\"img/logo-small.png\" alt=\"Obaju logo\" class=\"d-inline-block d-md-none\"><span class=\"sr-only\">Obaju - go to homepage</span></a>
          <div class=\"navbar-buttons\">
            <button type=\"button\" data-toggle=\"collapse\" data-target=\"#navigation\" class=\"btn btn-outline-secondary navbar-toggler\"><span class=\"sr-only\">Toggle navigation</span><i class=\"fa fa-align-justify\"></i></button>
            <button type=\"button\" data-toggle=\"collapse\" data-target=\"#search\" class=\"btn btn-outline-secondary navbar-toggler\"><span class=\"sr-only\">Toggle search</span><i class=\"fa fa-search\"></i></button><a href=\"basket.html\" class=\"btn btn-outline-secondary navbar-toggler\"><i class=\"fa fa-shopping-cart\"></i></a>
          </div>
          <div id=\"navigation\" class=\"collapse navbar-collapse\">
            <ul class=\"navbar-nav mr-auto\">
              <li class=\"nav-item\"><a href=\"{{path('app_client_index')}}\" class=\"nav-link \">Home</a></li>
                
            </ul>
            <div class=\"navbar-buttons d-flex justify-content-end\">
              <!-- /.nav-collapse-->
                  <div id=\"basket-overview\" class=\"navbar-collapse collapse d-none d-lg-block\">
                  <a href=\"{{ path('cart_index') }}\" class=\"btn btn-primary navbar-btn\">
                      <i class=\"fa fa-shopping-cart\"></i>
                      <span>{{ quantity }} items in cart</span>
                  </a>
              </div>            </div>
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
{{ form_start(form) }}

    <div id=\"all\">
      <div id=\"content\">
        <div class=\"container\">
          <div class=\"row\">
            <div class=\"col-lg-12\">
              <!-- breadcrumb-->
              <nav aria-label=\"breadcrumb\">
                <ol class=\"breadcrumb\">
                  <li class=\"breadcrumb-item\"><a href=\"#\">Home</a></li>
                  <li aria-current=\"page\" class=\"breadcrumb-item active\">Checkout - Address</li>
                </ol>
              </nav>
            </div>
            <div id=\"checkout\" class=\"col-lg-12\">
              <div class=\"box\">
                <form method=\"get\" action=\"checkout2.html\">
                  <h1>Checkout - Address</h1>
                  <div class=\"content py-3\">
                    <div class=\"row\">
                      <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            {{ form_row(form.firstname, {'label': 'First Name', 'attr': {'class': 'form-control'}}) }}

                        </div>
                      </div>
                      <div class=\"col-md-6\">
                        <div class=\"form-group\">
                            {{ form_row(form.lastname, {'label': 'Last Name', 'attr': {'class': 'form-control'}}) }}

                        </div>
                      </div>
                    </div>
                    <!-- /.row-->
                    <div class=\"row\">
                      <div class=\"col-md-6\">
                        <div class=\"form-group\">
                                  {{ form_row(form.number, {'label': 'Number', 'attr': {'class': 'form-control'}}) }}

                        </div>
                      </div>
                      <div class=\"col-md-6\">
                        <div class=\"form-group\">
                          {{ form_row(form.address, {'label': 'Address', 'attr': {'class': 'form-control'}}) }}

                          {# <label for=\"street\">Street</label>
                          <input id=\"street\" type=\"text\" class=\"form-control\"> #}
                        </div>
                      </div>
                    </div>
                    <!-- /.row-->
                     <!-- /.row-->
                    <div class=\"row\">
                      <div class=\"col-md-6\">
                        <div class=\"form-group\">
                                 {{ form_row(form.email, {'label': 'Email', 'attr': {'class': 'form-control'}}) }}

                        </div>
                      </div>
                      
                      <div class=\"col-md-6\">
                        <div class=\"form-group\">
                        <br>
                        <label for=\"{{ form.product.vars.id }}\">Selected Products:</label>
                                <div>
                                    {% for product in cartProduct %}
                                        {{ product.quantity }}
                                        {{ product.name }}
                                        {# You can add more details, such as images, as needed #}
                                        <br>
                                    {% endfor %}
                                </div>
                            </div>
                            <div class=\"form-group\">
                                {{ form_widget(form.product, {'value': cartProduct|map(item => item.name)|join(', '), 'label': 'Products'}) }}
                            </div>
                          
                        </div>
                      </div>
                    </div>
                    <!-- /.row-->
                    
                    <!-- /.row-->
                     <div class=\"box-footer d-flex justify-content-between flex-column flex-lg-row\">
                    <div class=\"left\">
                  <a href=\"{{path('cart_')}}\" class=\"btn btn-outline-secondary\"><i class=\"fa fa-chevron-left\"></i>Back to Cart</a>
                  </div>
                    <div class=\"right\">
                      {# <a href=\"{{path('app_command')}}\"> #}

                     <button type=\"submit\" class=\"btn btn-primary\">Continue to Delivery Method</button>

                      </a>
                    </div>
                  </div>
                  </div>
                </form>
                {{ form_end(form) }}

         
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
", "command/index.html.twig", "C:\\xampp\\htdocs\\projettt\\proj1\\templates\\command\\index.html.twig");
    }
}
