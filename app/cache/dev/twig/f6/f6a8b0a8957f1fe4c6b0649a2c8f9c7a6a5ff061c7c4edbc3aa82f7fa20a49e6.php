<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_bf8e3648ab75b38008646ff12b14510cfd5d360f32708607ba76e5caa3c9549a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_827403ec6b941fa30b7b78e8e847489609aee600bc3df74ad465dca7723224c3 = $this->env->getExtension("native_profiler");
        $__internal_827403ec6b941fa30b7b78e8e847489609aee600bc3df74ad465dca7723224c3->enter($__internal_827403ec6b941fa30b7b78e8e847489609aee600bc3df74ad465dca7723224c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
<meta http-equiv=\"content-type\" content=\"text/html;charset=UTF-8\" />
<meta charset=\"utf-8\" />
<title>Login Gestion de Stock</title>
    <link rel=\"icon\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/img/icon/online-2x.png"), "html", null, true);
        echo "\" type=\"image/png\"  />
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no\" />
<meta content=\"\" name=\"description\" />
<meta content=\"\" name=\"author\" />
<!-- BEGIN CORE CSS FRAMEWORK -->
<link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/htmstock/assets/plugins/pace/pace-theme-flash.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"screen\"/>
<link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/htmstock/assets/plugins/boostrapv3/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
<link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/htmstock/assets/plugins/boostrapv3/css/bootstrap-theme.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
<link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/htmstock/assets/plugins/font-awesome/css/font-awesome.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
<link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/htmstock/assets/css/animate.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
<!-- END CORE CSS FRAMEWORK -->
<!-- BEGIN CSS TEMPLATE -->
<link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/htmstock/assets/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
<link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/htmstock/assets/css/responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
<link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/htmstock/assets/css/custom-icon-set.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
<!-- END CSS TEMPLATE -->
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->

<body class=\"error-body no-top lazy\"   style=\"background-image: url('";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/htmstock/admin/img/works.jpg"), "html", null, true);
        echo "\">

<div class=\"container\">
  <div class=\"row login-container animated fadeInUp\">  
        <div class=\"col-md-7 col-md-offset-2 tiles white no-padding\">
\t\t <div class=\"p-t-30 p-l-40 p-b-20 xs-p-t-10 xs-p-l-10 xs-p-b-10\">
           <img align=\"right\" src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/htmstock/admin/img/logo1.png"), "html", null, true);
        echo "\" class=\"logo\" alt=\"\"  data-src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/htmstock/admin/img/logo1.png"), "html", null, true);
        echo "\" data-src-retina=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/htmstock/admin/img/logo1.png"), "html", null, true);
        echo "\" width=\"106\" height=\"21\"/>

          <h2 class=\"normal\">Connectez-vous</h2>
          <p> Entrer votre nom d'utilisateur et votre mot de passe.<br></p>

        </div>

         ";
        // line 40
        $this->displayBlock('content', $context, $blocks);
        // line 43
        echo "       
     
    
  </div>
</div>
</div>
<!-- END CONTAINER -->
<!-- BEGIN CORE JS FRAMEWORK-->
<script src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/htmstock/assets/plugins/jquery-1.8.3.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/htmstock/assets/plugins/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/htmstock/assets/plugins/pace/pace.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/htmstock/assets/plugins/jquery-validation/js/jquery.validate.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/htmstock/assets/js/login.js"), "html", null, true);
        echo "\" type=\"text/javascript\"> </script>
<script src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/htmstock/assets/plugins/jquery-lazyload/jquery.lazyload.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/htmstock/assets/js/login_v2.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<!-- BEGIN CORE TEMPLATE JS -->
<!-- END CORE TEMPLATE JS -->
</body>
</html>
";
        
        $__internal_827403ec6b941fa30b7b78e8e847489609aee600bc3df74ad465dca7723224c3->leave($__internal_827403ec6b941fa30b7b78e8e847489609aee600bc3df74ad465dca7723224c3_prof);

    }

    // line 40
    public function block_content($context, array $blocks = array())
    {
        $__internal_622e874314082f48a8f52c0cbd0c7023d165c5941e2e470fbcf07f371234b4fb = $this->env->getExtension("native_profiler");
        $__internal_622e874314082f48a8f52c0cbd0c7023d165c5941e2e470fbcf07f371234b4fb->enter($__internal_622e874314082f48a8f52c0cbd0c7023d165c5941e2e470fbcf07f371234b4fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 41
        echo "    ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_622e874314082f48a8f52c0cbd0c7023d165c5941e2e470fbcf07f371234b4fb->leave($__internal_622e874314082f48a8f52c0cbd0c7023d165c5941e2e470fbcf07f371234b4fb_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c0ee272055fca5cb0ea1fdde6154e4499ffa34c2baf44d2d64ae306f298a20b2 = $this->env->getExtension("native_profiler");
        $__internal_c0ee272055fca5cb0ea1fdde6154e4499ffa34c2baf44d2d64ae306f298a20b2->enter($__internal_c0ee272055fca5cb0ea1fdde6154e4499ffa34c2baf44d2d64ae306f298a20b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        
        $__internal_c0ee272055fca5cb0ea1fdde6154e4499ffa34c2baf44d2d64ae306f298a20b2->leave($__internal_c0ee272055fca5cb0ea1fdde6154e4499ffa34c2baf44d2d64ae306f298a20b2_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 41,  151 => 40,  138 => 57,  134 => 56,  130 => 55,  126 => 54,  122 => 53,  118 => 52,  114 => 51,  104 => 43,  102 => 40,  88 => 33,  79 => 27,  70 => 21,  66 => 20,  62 => 19,  56 => 16,  52 => 15,  48 => 14,  44 => 13,  40 => 12,  32 => 7,  24 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/* <meta http-equiv="content-type" content="text/html;charset=UTF-8" />*/
/* <meta charset="utf-8" />*/
/* <title>Login Gestion de Stock</title>*/
/*     <link rel="icon" href="{{ asset('assets/img/icon/online-2x.png') }}" type="image/png"  />*/
/* <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />*/
/* <meta content="" name="description" />*/
/* <meta content="" name="author" />*/
/* <!-- BEGIN CORE CSS FRAMEWORK -->*/
/* <link href="{{ asset('bundles/htmstock/assets/plugins/pace/pace-theme-flash.css') }}" rel="stylesheet" type="text/css" media="screen"/>*/
/* <link href="{{ asset('bundles/htmstock/assets/plugins/boostrapv3/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>*/
/* <link href="{{ asset('bundles/htmstock/assets/plugins/boostrapv3/css/bootstrap-theme.min.css') }}" rel="stylesheet" type="text/css"/>*/
/* <link href="{{ asset('bundles/htmstock/assets/plugins/font-awesome/css/font-awesome.css') }}" rel="stylesheet" type="text/css"/>*/
/* <link href="{{ asset('bundles/htmstock/assets/css/animate.min.css') }}" rel="stylesheet" type="text/css"/>*/
/* <!-- END CORE CSS FRAMEWORK -->*/
/* <!-- BEGIN CSS TEMPLATE -->*/
/* <link href="{{ asset('bundles/htmstock/assets/css/style.css') }}" rel="stylesheet" type="text/css"/>*/
/* <link href="{{ asset('bundles/htmstock/assets/css/responsive.css') }}" rel="stylesheet" type="text/css"/>*/
/* <link href="{{ asset('bundles/htmstock/assets/css/custom-icon-set.css') }}" rel="stylesheet" type="text/css"/>*/
/* <!-- END CSS TEMPLATE -->*/
/* </head>*/
/* <!-- END HEAD -->*/
/* <!-- BEGIN BODY -->*/
/* */
/* <body class="error-body no-top lazy"   style="background-image: url('{{ asset('bundles/htmstock/admin/img/works.jpg') }}">*/
/* */
/* <div class="container">*/
/*   <div class="row login-container animated fadeInUp">  */
/*         <div class="col-md-7 col-md-offset-2 tiles white no-padding">*/
/* 		 <div class="p-t-30 p-l-40 p-b-20 xs-p-t-10 xs-p-l-10 xs-p-b-10">*/
/*            <img align="right" src="{{ asset('bundles/htmstock/admin/img/logo1.png') }}" class="logo" alt=""  data-src="{{ asset('bundles/htmstock/admin/img/logo1.png') }}" data-src-retina="{{ asset('bundles/htmstock/admin/img/logo1.png') }}" width="106" height="21"/>*/
/* */
/*           <h2 class="normal">Connectez-vous</h2>*/
/*           <p> Entrer votre nom d'utilisateur et votre mot de passe.<br></p>*/
/* */
/*         </div>*/
/* */
/*          {% block content %}*/
/*     {% block fos_user_content %}{% endblock %}*/
/* {% endblock %}*/
/*        */
/*      */
/*     */
/*   </div>*/
/* </div>*/
/* </div>*/
/* <!-- END CONTAINER -->*/
/* <!-- BEGIN CORE JS FRAMEWORK-->*/
/* <script src="{{ asset('bundles/htmstock/assets/plugins/jquery-1.8.3.min.js') }}" type="text/javascript"></script>*/
/* <script src="{{ asset('bundles/htmstock/assets/plugins/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>*/
/* <script src="{{ asset('bundles/htmstock/assets/plugins/pace/pace.min.js') }}" type="text/javascript"></script>*/
/* <script src="{{ asset('bundles/htmstock/assets/plugins/jquery-validation/js/jquery.validate.min.js') }}" type="text/javascript"></script>*/
/* <script src="{{ asset('bundles/htmstock/assets/js/login.js' ) }}" type="text/javascript"> </script>*/
/* <script src="{{ asset('bundles/htmstock/assets/plugins/jquery-lazyload/jquery.lazyload.min.js') }}" type="text/javascript"></script>*/
/* <script src="{{ asset('bundles/htmstock/assets/js/login_v2.js') }}" type="text/javascript"></script>*/
/* <!-- BEGIN CORE TEMPLATE JS -->*/
/* <!-- END CORE TEMPLATE JS -->*/
/* </body>*/
/* </html>*/
/* */
