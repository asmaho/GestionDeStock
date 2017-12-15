<?php

/* HTMStockBundle::index.html.twig */
class __TwigTemplate_ee4a8fb342d084329f7c7e850a89fc5ecdc94c616511c8620d83084d43e382b4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'user' => array($this, 'block_user'),
            'user2' => array($this, 'block_user2'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_72e996609db26baf5d338e62c31527d73d1fbf967cdfd02faabe8ef5f3cd4798 = $this->env->getExtension("native_profiler");
        $__internal_72e996609db26baf5d338e62c31527d73d1fbf967cdfd02faabe8ef5f3cd4798->enter($__internal_72e996609db26baf5d338e62c31527d73d1fbf967cdfd02faabe8ef5f3cd4798_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HTMStockBundle::index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html xmlns=\"http://www.w3.org/1999/html\">
<head>
    <meta http-equiv=\"content-type\" content=\"text/html;charset=UTF-8\" />
    <meta charset=\"utf-8\" />
    <title>GestionDeStock - Responsive Admin Dashboard</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no\" />
    <meta content=\"\" name=\"description\" />
    <meta content=\"\" name=\"author\" />

    <!-- BEGIN PLUGIN CSS -->
    <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/plugins/pace/pace-theme-flash.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"screen\"/>
    <!-- END PLUGIN CSS -->
    <!-- BEGIN CORE CSS FRAMEWORK -->
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/plugins/boostrapv3/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/plugins/boostrapv3/css/bootstrap-theme.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/plugins/font-awesome/css/font-awesome.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/css/animate.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/plugins/jquery-scrollbar/jquery.scrollbar.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
    <!-- END CORE CSS FRAMEWORK -->
    <!-- BEGIN CSS TEMPLATE -->
    <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/css/responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
    <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/css/custom-icon-set.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
    <!-- END CSS TEMPLATE -->

</head>
<!-- END HEAD -->

<!-- BEGIN BODY -->
<body class=\"\">
<!-- BEGIN HEADER -->
<div class=\"header navbar navbar-inverse \">
    <!-- BEGIN TOP NAVIGATION BAR -->
    <div class=\"navbar-inner\">
        <div class=\"header-seperation\">
            <ul class=\"nav pull-left notifcation-center\" id=\"main-menu-toggle-wrapper\" style=\"display:none\">
                <li class=\"dropdown\"> <a id=\"main-menu-toggle\" href=\"#main-menu\"  class=\"\" > <div class=\"iconset top-menu-toggle-white\"></div> </a> </li>
            </ul>
            <!-- BEGIN LOGO -->
            <a href=\"";
        // line 41
        echo $this->env->getExtension('routing')->getPath("htm_stock");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/htmstock/admin/img/logo1.png"), "html", null, true);
        echo "\" class=\"logo\" alt=\"\"  data-src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/htmstock/admin/img/logo1.png"), "html", null, true);
        echo "\" data-src-retina=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/htmstock/admin/img/logo1.png"), "html", null, true);
        echo "\" width=\"106\" height=\"21\"/></a>
            <!-- END LOGO -->
            <ul class=\"nav pull-right notifcation-center\">
                <li class=\"dropdown\" id=\"header_task_bar\"> <a href=\"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("htm_stock");
        echo "\" class=\"dropdown-toggle active\" data-toggle=\"\"> <div class=\"iconset top-home\"></div> </a> </li>
                <li class=\"dropdown\" id=\"portrait-chat-toggler\" style=\"display:none\"> <a href=\"#sidr\" class=\"chat-menu-toggle\"> <div class=\"iconset top-chat-white \"></div> </a> </li>
            </ul>
        </div>
        <!-- END RESPONSIVE MENU TOGGLER -->
        <div class=\"header-quick-nav\" >
            <!-- BEGIN TOP NAVIGATION MENU -->
            <div class=\"pull-left\">
                <ul class=\"nav quick-section\">
                    <li class=\"quicklinks\"> <a href=\"#\" class=\"\" id=\"layout-condensed-toggle\" >
                            <div class=\"iconset top-menu-toggle-dark\"></div>
                        </a> </li>
                </ul>

            </div>
            <!-- END TOP NAVIGATION MENU -->
            <!-- BEGIN CHAT TOGGLER -->
            <div class=\"pull-right\">
                <div class=\"chat-toggler\"> <a href=\"#\" class=\"dropdown-toggle\" id=\"my-task-list\" data-placement=\"bottom\"  data-content='' data-toggle=\"dropdown\" data-original-title=\"Notifications\">

                        <div class=\"user-details\">

                            ";
        // line 66
        $this->displayBlock('user', $context, $blocks);
        // line 72
        echo "                        </div>

                        <div class=\"iconset top-down-arrow\"></div>
                    </a>

                    <div class=\"profile-pic\"> <img src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/htmstock/assets/img/profiles/avatar.jpg"), "html", null, true);
        echo "\"
                                                   alt=\"\" data-src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/htmstock/assets/img/profiles/avatar.jpg"), "html", null, true);
        echo "\"
                                                   data-src-retina=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/htmstock/assets/img/profiles/avatar.jpg"), "html", null, true);
        echo "\"
                                                   width=\"35\" height=\"35\" /> </div>
                </div>
                <ul class=\"nav quick-section \">
                    <li class=\"quicklinks\"> <a data-toggle=\"dropdown\" class=\"dropdown-toggle  pull-right \" href=\"#\" id=\"user-options\">
                            <div class=\"iconset top-settings-dark \"></div>
                        </a>
                        <ul class=\"dropdown-menu  pull-right\" role=\"menu\" aria-labelledby=\"user-options\">


                            <li class=\"divider\"></li>
                            <li><a href=\"";
        // line 90
        echo $this->env->getExtension('routing')->getPath("admin_logout");
        echo "\"><i class=\"fa fa-power-off\"></i>&nbsp;&nbsp;Log Out</a></li>

                        </ul>
                    </li>

                </ul>
            </div>
            <!-- END CHAT TOGGLER -->
        </div>
        <!-- END TOP NAVIGATION MENU -->
    </div>
    <!-- END TOP NAVIGATION BAR -->
</div>
<!-- END HEADER -->
<!-- BEGIN CONTAINER -->
<!-- BEGIN CONTAINER -->
<div class=\"page-container row-fluid\">
    <!-- BEGIN SIDEBAR -->
    <div class=\"page-sidebar\" id=\"main-menu\">
        <!-- BEGIN MINI-PROFILE -->
        <div class=\"page-sidebar-wrapper scrollbar-dynamic\" id=\"main-menu-wrapper\">
            <div class=\"user-info-wrapper\">
                <div class=\"profile-wrapper\"> <img src=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/htmstock/assets/img/profiles/avatar.jpg"), "html", null, true);
        echo "\"
                                                   alt=\"\" data-src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/htmstock/assets/img/profiles/avatar.jpg"), "html", null, true);
        echo "\"
                                                   data-src-retina=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/htmstock/assets/img/profiles/avatar.jpg"), "html", null, true);
        echo "\"
                                                   width=\"69\" height=\"69\" /> </div>
        <div class=\"user-info\">
          <div class=\"greeting\">Welcome</div>

          ";
        // line 119
        $this->displayBlock('user2', $context, $blocks);
        // line 122
        echo "

          <div class=\"status\">Status<a href=\"#\">
                    <div class=\"status-icon green\"></div>
                    Online</a></div>
            </div>
        </div>


        <!-- END MINI-PROFILE -->
        <!-- BEGIN SIDEBAR MENU -->

            <ul>
                <li class=\"start \"><a href=\"";
        // line 135
        echo $this->env->getExtension('routing')->getPath("htm_stock");
        echo "\"> <i class=\"icon-custom-home\"></i> <span
                                class=\"title\"> Dashboard</span> <span class=\"selected\"></span> </a>

                </li>
                <li class=\"\"><a href=\"";
        // line 139
        echo $this->env->getExtension('routing')->getPath("stock_globale");
        echo "\"> <i class=\"fa fa fa-adjust\"></i> <span class =\"title\"> Etat de Stock</span> </a></li>
                <li class=\"\"><a href=\"";
        // line 140
        echo $this->env->getExtension('routing')->getPath("admin_list_supply_entre");
        echo "\"> <i class=\"fa fa-envelope\"></i> <span
                                class=\"title\"> Demande Réçu</span> </a></li>
                <li class=\"\"><a href=\"";
        // line 142
        echo $this->env->getExtension('routing')->getPath("produitfournisseur_new");
        echo "\"> <i class=\"fa fa-envelope\"></i> <span
                                class=\"title\"> Demande D'achat</span> </a></li>



                <li class=\"\"><a href=\"javascript:;\"> <i class=\"fa fa fa-adjust\"></i> <span class=\"title\"> Stock</span>
                        <span class=\"arrow open\"></span> </a>
                    <ul class=\"sub-menu\">
                        <li><a href=\"javascript:;\"> <span class=\"title\">Entrée au Stock </span> <span
                                        class=\"arrow \"></span> </a>
                            <ul class=\"sub-menu\">
                                <li><a href=\"";
        // line 153
        echo $this->env->getExtension('routing')->getPath("produit_new");
        echo "\"><span class=\"fa fa-plus\"></span> Ajouter Produit
                                    </a></li>
                                <li><a href=\"";
        // line 155
        echo $this->env->getExtension('routing')->getPath("produit_index");
        echo "\"><span class=\"fa fa-file\"></span> Liste
                                         </a></li>
                            </ul>
                        </li>
                        <li><a href=\"javascript:;\"> <span class=\"title\"> Sortie De Stock </span> <span
                                        class=\"arrow \"></span> </a>
                            <ul class=\"sub-menu\">
                                <li><a href=\"";
        // line 162
        echo $this->env->getExtension('routing')->getPath("salepointproduct_new");
        echo "\"><span class=\"fa fa-plus\"></span>  Dispatcher produit</a></li>
                                <li><a href=\"";
        // line 163
        echo $this->env->getExtension('routing')->getPath("salepointproduct_index");
        echo "\"><span class=\"fa fa-file\"></span> list </a> </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class=\"\"><a href=\"";
        // line 168
        echo $this->env->getExtension('routing')->getPath("categorie_index");
        echo "\"><i class=\"fa fa-th\"></i> <span class=\"title\"> Catégorie</span>
                    </a></li>
                <li class=\"\" ><a href=\"javascript:;\"><i class=\"fa fa-user\"></i> <span class=\"title\"> Magasinier </span><span class=\"arrow \"></span> </a>
                    <ul class=\"sub-menu\">
                        <li > <a href=\"";
        // line 172
        echo $this->env->getExtension('routing')->getPath("magasinier_new");
        echo "\"> <span class=\"fa fa-plus\"></span> Ajouter  </a> </li>
                        <li > <a href=\"";
        // line 173
        echo $this->env->getExtension('routing')->getPath("magasinier_index");
        echo "\"> <span class=\"fa fa-file\"></span> Liste  </a> </li>
                    </ul>
                </li>
                <li class=\"\"><a href=\"javascript:;\"><i class=\"fa fa-th\"></i> <span class=\"title\"> Point de Vente</span>
                        <span class=\"arrow \"></span> </a>
                    <ul class=\"sub-menu\">
                        <li><a href=\"";
        // line 179
        echo $this->env->getExtension('routing')->getPath("pointdevente_new");
        echo "\"><span class=\"fa fa-plus\"></span> Ajouter </a></li>
                        <li><a href=\"";
        // line 180
        echo $this->env->getExtension('routing')->getPath("pointdevente_index");
        echo "\"><span class=\"fa fa-file\"></span> Liste </a></li>

                    </ul>
                </li>
                <li class=\"\"><a href=\"javascript:;\"> <i class=\"fa fa-user\"></i><span class=\"title\"> Fournisseur</span> <span
                                class=\"arrow \"></span> </a>
                    <ul class=\"sub-menu\">
                        <li><a href=\"";
        // line 187
        echo $this->env->getExtension('routing')->getPath("fournisseur_new");
        echo "\"> <span class=\"fa fa-plus\"></span> Ajouter </a></li>
                        <li><a href=\"";
        // line 188
        echo $this->env->getExtension('routing')->getPath("fournisseur_index");
        echo "\"><span class=\"fa fa-file\"></span> Liste </a></li>

                    </ul>
                </li>


            </ul>



    </div>
    </div>
    <!-- END SIDEBAR -->
    <!-- BEGIN PAGE CONTAINER-->

    <div class=\"page-content \">
        <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
        <div id=\"portlet-config\" class=\"modal hide\">
            <div class=\"modal-header\">
                <button data-dismiss=\"modal\" class=\"close\" type=\"button\"></button>
                <h3>Widget Settings</h3>
            </div>
            <div class=\"modal-body\"> Widget settings form goes here </div>
        </div>
        <div class=\"clearfix\"></div>
        <div class=\"content sm-gutter\">
        <div class=\"page-title\">
        </div>
        ";
        // line 216
        $this->displayBlock('body', $context, $blocks);
        // line 335
        echo "    </div>
</div>
<!-- END CONTAINER -->

<!-- END CONTAINER -->
<!-- BEGIN CORE JS FRAMEWORK-->
<script src=\"";
        // line 341
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/plugins/jquery-1.8.3.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 342
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/plugins/boostrapv3/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 343
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/plugins/breakpoints.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 344
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/plugins/jquery-unveil/jquery.unveil.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 345
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/plugins/jquery-scrollbar/jquery.scrollbar.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<!-- END CORE JS FRAMEWORK -->
<!-- BEGIN PAGE LEVEL JS -->
<script src=\"";
        // line 348
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/plugins/pace/pace.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 349
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/plugins/jquery-numberAnimate/jquery.animateNumbers.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<!-- END PAGE LEVEL PLUGINS -->

<!-- BEGIN CORE TEMPLATE JS -->
<script src=\"";
        // line 353
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/core.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 354
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/js/chat.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<!-- END CORE TEMPLATE JS -->
</div>
        </div>
    </div>
</div>
</body>
</html>";
        
        $__internal_72e996609db26baf5d338e62c31527d73d1fbf967cdfd02faabe8ef5f3cd4798->leave($__internal_72e996609db26baf5d338e62c31527d73d1fbf967cdfd02faabe8ef5f3cd4798_prof);

    }

    // line 66
    public function block_user($context, array $blocks = array())
    {
        $__internal_3d2d505b9fbfcaf7a792c9a6df3e221bc33b2c0e195a19faa6cdef5dc99c003b = $this->env->getExtension("native_profiler");
        $__internal_3d2d505b9fbfcaf7a792c9a6df3e221bc33b2c0e195a19faa6cdef5dc99c003b->enter($__internal_3d2d505b9fbfcaf7a792c9a6df3e221bc33b2c0e195a19faa6cdef5dc99c003b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user"));

        // line 67
        echo "                                <div class=\"username\">
                                    <span class=\"badge badge-important\"></span>
                                    ";
        // line 69
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo " <span class=\"bold\"></span>
                                </div>
                            ";
        
        $__internal_3d2d505b9fbfcaf7a792c9a6df3e221bc33b2c0e195a19faa6cdef5dc99c003b->leave($__internal_3d2d505b9fbfcaf7a792c9a6df3e221bc33b2c0e195a19faa6cdef5dc99c003b_prof);

    }

    // line 119
    public function block_user2($context, array $blocks = array())
    {
        $__internal_9264c83cb7c716c29d64a142eaf1dc9e713d84fc60840c4af9463b5d83f4f9ce = $this->env->getExtension("native_profiler");
        $__internal_9264c83cb7c716c29d64a142eaf1dc9e713d84fc60840c4af9463b5d83f4f9ce->enter($__internal_9264c83cb7c716c29d64a142eaf1dc9e713d84fc60840c4af9463b5d83f4f9ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user2"));

        // line 120
        echo "          <div class=\"username\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo " </div>
          ";
        
        $__internal_9264c83cb7c716c29d64a142eaf1dc9e713d84fc60840c4af9463b5d83f4f9ce->leave($__internal_9264c83cb7c716c29d64a142eaf1dc9e713d84fc60840c4af9463b5d83f4f9ce_prof);

    }

    // line 216
    public function block_body($context, array $blocks = array())
    {
        $__internal_475dcf4f47b1c22cc753ffbe13ff342772f96605520d6c013c7cfa0546b69e85 = $this->env->getExtension("native_profiler");
        $__internal_475dcf4f47b1c22cc753ffbe13ff342772f96605520d6c013c7cfa0546b69e85->enter($__internal_475dcf4f47b1c22cc753ffbe13ff342772f96605520d6c013c7cfa0546b69e85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 217
        echo "        <!-- END DASHBOARD TILES -->
        <!-- BEGIN DASHBOARD TILES -->


        <div class=\"grid simple\">

            <div class=\"grid-title no-border\">

                <div class=\"row\">


                    <div class=\"col-md-3 col-vlg-4 col-sm-8\">
                        <div class=\"tiles green m-b-10\">

                            <div class=\"tiles-body\">
                                <img src=\"";
        // line 232
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/htmstock/assets/img/bell-512.png"), "html", null, true);
        echo "\" width=\"70px\" height=\"70px\">
                                <div align=\"center\" class=\"tiles-title text-black\" ><strong>Alert Stock</strong></div>
                                <span align=\"right\" class=\"badge\" id=\"msgs-badge\"></span>

                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-3 col-vlg-4 col-sm-8\">
                        <div class=\"tiles green m-b-10\">
                            <div class=\"tiles-body\">

                                <img src=\"";
        // line 243
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/htmstock/assets/img/32213.png"), "html", null, true);
        echo "\" width=\"70px\" height=\"70px\">
                                 <div align=\"center\" class=\"tiles-title text-black\"><strong>Devis Réçu  </strong></div>
                                <span align=\"right\" class=\"badge\" id=\"msgs-badge\"></span>


                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-3 col-vlg-4 col-sm-8\">
                        <div class=\"tiles green m-b-10\">
                            <div class=\"tiles-body\">

                                <img src=\"";
        // line 255
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/htmstock/assets/img/117-Exchange-256.png"), "html", null, true);
        echo "\" width=\"70px\" height=\"70px\">
                                <div align=\"center\" class=\"tiles-title text-black\"><strong>Approvisionnement</strong></div>
                                <span align=\"right\" class=\"badge\" id=\"msgs-badge\"></span>


                            </div>
                        </div>
                    </div>

                </div>





                <div class=\"page-title\">
                    <h2><span class=\"fa fa-arrow-circle-o-right\"></span>Points De Vente</h2>
                </div>


                <!-- PAGE CONTENT WRAPPER -->
                <div class=\"page-content-wrap\">

                    <div class=\"row\">
                        <div class=\"col-md-12\">

                            <!-- START DEFAULT DATATABLE -->
                            <div class=\"panel panel-default\">
                                <div class=\"panel-heading\">
                                    <h3 class=\"panel-title\">Liste</h3>

                                </div>
                                <div class=\"grid-body \">

                                    <table class=\"table table-striped\" id=\"example2\" >
                                        <thead>
                                        <tr>
                                            <th></th>
                                            <th>Nom point de vente</th>
                                            <th>Gouvernorat</th>
                                            <th>Adress</th>
                                            <th>Téléphone</th>
                                            <th>Mail</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        ";
        // line 301
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pointDeVentes"]) ? $context["pointDeVentes"] : $this->getContext($context, "pointDeVentes")));
        foreach ($context['_seq'] as $context["_key"] => $context["pointDeVente"]) {
            // line 302
            echo "
                                        <tr class=\"odd gradeX\">
                                            <td><i class=\"fa fa-plus-circle\"></i></td>
                                            <td>";
            // line 305
            echo twig_escape_filter($this->env, $this->getAttribute($context["pointDeVente"], "nomPv", array()), "html", null, true);
            echo "</td>
                                            <td>";
            // line 306
            echo twig_escape_filter($this->env, $this->getAttribute($context["pointDeVente"], "gouvernorat", array()), "html", null, true);
            echo "</td>
                                            <td>";
            // line 307
            echo twig_escape_filter($this->env, $this->getAttribute($context["pointDeVente"], "adress", array()), "html", null, true);
            echo "</td>
                                            <td>";
            // line 308
            echo twig_escape_filter($this->env, $this->getAttribute($context["pointDeVente"], "tel", array()), "html", null, true);
            echo "</td>
                                            <td>";
            // line 309
            echo twig_escape_filter($this->env, $this->getAttribute($context["pointDeVente"], "mail", array()), "html", null, true);
            echo "</td>

                                        </tr>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pointDeVente'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 313
        echo "                                        </tbody>
                                    </table>
                                    <div  align =\"right\" class=\"navigation\">
                                        ";
        // line 316
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["pointDeVentes"]) ? $context["pointDeVentes"] : $this->getContext($context, "pointDeVentes")));
        echo "
                                    </div>


                                    <!-- END WIDGETS -->

                                </div>

                            </div>


                            <!-- END PAGE CONTENT -->
                        </div>

                    </div>



        ";
        
        $__internal_475dcf4f47b1c22cc753ffbe13ff342772f96605520d6c013c7cfa0546b69e85->leave($__internal_475dcf4f47b1c22cc753ffbe13ff342772f96605520d6c013c7cfa0546b69e85_prof);

    }

    public function getTemplateName()
    {
        return "HTMStockBundle::index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  585 => 316,  580 => 313,  570 => 309,  566 => 308,  562 => 307,  558 => 306,  554 => 305,  549 => 302,  545 => 301,  496 => 255,  481 => 243,  467 => 232,  450 => 217,  444 => 216,  434 => 120,  428 => 119,  418 => 69,  414 => 67,  408 => 66,  393 => 354,  389 => 353,  382 => 349,  378 => 348,  372 => 345,  368 => 344,  364 => 343,  360 => 342,  356 => 341,  348 => 335,  346 => 216,  315 => 188,  311 => 187,  301 => 180,  297 => 179,  288 => 173,  284 => 172,  277 => 168,  269 => 163,  265 => 162,  255 => 155,  250 => 153,  236 => 142,  231 => 140,  227 => 139,  220 => 135,  205 => 122,  203 => 119,  195 => 114,  191 => 113,  187 => 112,  162 => 90,  148 => 79,  144 => 78,  140 => 77,  133 => 72,  131 => 66,  106 => 44,  94 => 41,  74 => 24,  70 => 23,  66 => 22,  60 => 19,  56 => 18,  52 => 17,  48 => 16,  44 => 15,  38 => 12,  25 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html xmlns="http://www.w3.org/1999/html">*/
/* <head>*/
/*     <meta http-equiv="content-type" content="text/html;charset=UTF-8" />*/
/*     <meta charset="utf-8" />*/
/*     <title>GestionDeStock - Responsive Admin Dashboard</title>*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />*/
/*     <meta content="" name="description" />*/
/*     <meta content="" name="author" />*/
/* */
/*     <!-- BEGIN PLUGIN CSS -->*/
/*     <link href="{{ asset('assets/plugins/pace/pace-theme-flash.css')}}" rel="stylesheet" type="text/css" media="screen"/>*/
/*     <!-- END PLUGIN CSS -->*/
/*     <!-- BEGIN CORE CSS FRAMEWORK -->*/
/*     <link href="{{ asset('assets/plugins/boostrapv3/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>*/
/*     <link href="{{ asset('assets/plugins/boostrapv3/css/bootstrap-theme.min.css')}}" rel="stylesheet" type="text/css"/>*/
/*     <link href="{{ asset('assets/plugins/font-awesome/css/font-awesome.css')}}" rel="stylesheet" type="text/css"/>*/
/*     <link href="{{ asset('assets/css/animate.min.css')}}" rel="stylesheet" type="text/css"/>*/
/*     <link href="{{ asset('assets/plugins/jquery-scrollbar/jquery.scrollbar.css')}}" rel="stylesheet" type="text/css"/>*/
/*     <!-- END CORE CSS FRAMEWORK -->*/
/*     <!-- BEGIN CSS TEMPLATE -->*/
/*     <link href="{{ asset('assets/css/style.css')}}" rel="stylesheet" type="text/css"/>*/
/*     <link href="{{ asset('assets/css/responsive.css')}}" rel="stylesheet" type="text/css"/>*/
/*     <link href="{{ asset('assets/css/custom-icon-set.css')}}" rel="stylesheet" type="text/css"/>*/
/*     <!-- END CSS TEMPLATE -->*/
/* */
/* </head>*/
/* <!-- END HEAD -->*/
/* */
/* <!-- BEGIN BODY -->*/
/* <body class="">*/
/* <!-- BEGIN HEADER -->*/
/* <div class="header navbar navbar-inverse ">*/
/*     <!-- BEGIN TOP NAVIGATION BAR -->*/
/*     <div class="navbar-inner">*/
/*         <div class="header-seperation">*/
/*             <ul class="nav pull-left notifcation-center" id="main-menu-toggle-wrapper" style="display:none">*/
/*                 <li class="dropdown"> <a id="main-menu-toggle" href="#main-menu"  class="" > <div class="iconset top-menu-toggle-white"></div> </a> </li>*/
/*             </ul>*/
/*             <!-- BEGIN LOGO -->*/
/*             <a href="{{ path('htm_stock') }}"><img src="{{ asset('bundles/htmstock/admin/img/logo1.png') }}" class="logo" alt=""  data-src="{{ asset('bundles/htmstock/admin/img/logo1.png') }}" data-src-retina="{{ asset('bundles/htmstock/admin/img/logo1.png') }}" width="106" height="21"/></a>*/
/*             <!-- END LOGO -->*/
/*             <ul class="nav pull-right notifcation-center">*/
/*                 <li class="dropdown" id="header_task_bar"> <a href="{{ path('htm_stock') }}" class="dropdown-toggle active" data-toggle=""> <div class="iconset top-home"></div> </a> </li>*/
/*                 <li class="dropdown" id="portrait-chat-toggler" style="display:none"> <a href="#sidr" class="chat-menu-toggle"> <div class="iconset top-chat-white "></div> </a> </li>*/
/*             </ul>*/
/*         </div>*/
/*         <!-- END RESPONSIVE MENU TOGGLER -->*/
/*         <div class="header-quick-nav" >*/
/*             <!-- BEGIN TOP NAVIGATION MENU -->*/
/*             <div class="pull-left">*/
/*                 <ul class="nav quick-section">*/
/*                     <li class="quicklinks"> <a href="#" class="" id="layout-condensed-toggle" >*/
/*                             <div class="iconset top-menu-toggle-dark"></div>*/
/*                         </a> </li>*/
/*                 </ul>*/
/* */
/*             </div>*/
/*             <!-- END TOP NAVIGATION MENU -->*/
/*             <!-- BEGIN CHAT TOGGLER -->*/
/*             <div class="pull-right">*/
/*                 <div class="chat-toggler"> <a href="#" class="dropdown-toggle" id="my-task-list" data-placement="bottom"  data-content='' data-toggle="dropdown" data-original-title="Notifications">*/
/* */
/*                         <div class="user-details">*/
/* */
/*                             {% block user %}*/
/*                                 <div class="username">*/
/*                                     <span class="badge badge-important"></span>*/
/*                                     {{ app.user.username }} <span class="bold"></span>*/
/*                                 </div>*/
/*                             {% endblock user %}*/
/*                         </div>*/
/* */
/*                         <div class="iconset top-down-arrow"></div>*/
/*                     </a>*/
/* */
/*                     <div class="profile-pic"> <img src="{{ asset('bundles/htmstock/assets/img/profiles/avatar.jpg')}}"*/
/*                                                    alt="" data-src="{{ asset('bundles/htmstock/assets/img/profiles/avatar.jpg')}}"*/
/*                                                    data-src-retina="{{ asset('bundles/htmstock/assets/img/profiles/avatar.jpg')}}"*/
/*                                                    width="35" height="35" /> </div>*/
/*                 </div>*/
/*                 <ul class="nav quick-section ">*/
/*                     <li class="quicklinks"> <a data-toggle="dropdown" class="dropdown-toggle  pull-right " href="#" id="user-options">*/
/*                             <div class="iconset top-settings-dark "></div>*/
/*                         </a>*/
/*                         <ul class="dropdown-menu  pull-right" role="menu" aria-labelledby="user-options">*/
/* */
/* */
/*                             <li class="divider"></li>*/
/*                             <li><a href="{{ path('admin_logout') }}"><i class="fa fa-power-off"></i>&nbsp;&nbsp;Log Out</a></li>*/
/* */
/*                         </ul>*/
/*                     </li>*/
/* */
/*                 </ul>*/
/*             </div>*/
/*             <!-- END CHAT TOGGLER -->*/
/*         </div>*/
/*         <!-- END TOP NAVIGATION MENU -->*/
/*     </div>*/
/*     <!-- END TOP NAVIGATION BAR -->*/
/* </div>*/
/* <!-- END HEADER -->*/
/* <!-- BEGIN CONTAINER -->*/
/* <!-- BEGIN CONTAINER -->*/
/* <div class="page-container row-fluid">*/
/*     <!-- BEGIN SIDEBAR -->*/
/*     <div class="page-sidebar" id="main-menu">*/
/*         <!-- BEGIN MINI-PROFILE -->*/
/*         <div class="page-sidebar-wrapper scrollbar-dynamic" id="main-menu-wrapper">*/
/*             <div class="user-info-wrapper">*/
/*                 <div class="profile-wrapper"> <img src="{{ asset('bundles/htmstock/assets/img/profiles/avatar.jpg')}}"*/
/*                                                    alt="" data-src="{{ asset('bundles/htmstock/assets/img/profiles/avatar.jpg')}}"*/
/*                                                    data-src-retina="{{ asset('bundles/htmstock/assets/img/profiles/avatar.jpg')}}"*/
/*                                                    width="69" height="69" /> </div>*/
/*         <div class="user-info">*/
/*           <div class="greeting">Welcome</div>*/
/* */
/*           {% block user2 %}*/
/*           <div class="username">{{ app.user.username }} </div>*/
/*           {% endblock user2 %}*/
/* */
/* */
/*           <div class="status">Status<a href="#">*/
/*                     <div class="status-icon green"></div>*/
/*                     Online</a></div>*/
/*             </div>*/
/*         </div>*/
/* */
/* */
/*         <!-- END MINI-PROFILE -->*/
/*         <!-- BEGIN SIDEBAR MENU -->*/
/* */
/*             <ul>*/
/*                 <li class="start "><a href="{{ path('htm_stock') }}"> <i class="icon-custom-home"></i> <span*/
/*                                 class="title"> Dashboard</span> <span class="selected"></span> </a>*/
/* */
/*                 </li>*/
/*                 <li class=""><a href="{{ path('stock_globale') }}"> <i class="fa fa fa-adjust"></i> <span class ="title"> Etat de Stock</span> </a></li>*/
/*                 <li class=""><a href="{{path('admin_list_supply_entre')}}"> <i class="fa fa-envelope"></i> <span*/
/*                                 class="title"> Demande Réçu</span> </a></li>*/
/*                 <li class=""><a href="{{path('produitfournisseur_new')}}"> <i class="fa fa-envelope"></i> <span*/
/*                                 class="title"> Demande D'achat</span> </a></li>*/
/* */
/* */
/* */
/*                 <li class=""><a href="javascript:;"> <i class="fa fa fa-adjust"></i> <span class="title"> Stock</span>*/
/*                         <span class="arrow open"></span> </a>*/
/*                     <ul class="sub-menu">*/
/*                         <li><a href="javascript:;"> <span class="title">Entrée au Stock </span> <span*/
/*                                         class="arrow "></span> </a>*/
/*                             <ul class="sub-menu">*/
/*                                 <li><a href="{{ path('produit_new') }}"><span class="fa fa-plus"></span> Ajouter Produit*/
/*                                     </a></li>*/
/*                                 <li><a href="{{ path('produit_index') }}"><span class="fa fa-file"></span> Liste*/
/*                                          </a></li>*/
/*                             </ul>*/
/*                         </li>*/
/*                         <li><a href="javascript:;"> <span class="title"> Sortie De Stock </span> <span*/
/*                                         class="arrow "></span> </a>*/
/*                             <ul class="sub-menu">*/
/*                                 <li><a href="{{ path('salepointproduct_new') }}"><span class="fa fa-plus"></span>  Dispatcher produit</a></li>*/
/*                                 <li><a href="{{ path('salepointproduct_index') }}"><span class="fa fa-file"></span> list </a> </li>*/
/*                             </ul>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </li>*/
/*                 <li class=""><a href="{{ path('categorie_index') }}"><i class="fa fa-th"></i> <span class="title"> Catégorie</span>*/
/*                     </a></li>*/
/*                 <li class="" ><a href="javascript:;"><i class="fa fa-user"></i> <span class="title"> Magasinier </span><span class="arrow "></span> </a>*/
/*                     <ul class="sub-menu">*/
/*                         <li > <a href="{{ path('magasinier_new') }}"> <span class="fa fa-plus"></span> Ajouter  </a> </li>*/
/*                         <li > <a href="{{ path('magasinier_index') }}"> <span class="fa fa-file"></span> Liste  </a> </li>*/
/*                     </ul>*/
/*                 </li>*/
/*                 <li class=""><a href="javascript:;"><i class="fa fa-th"></i> <span class="title"> Point de Vente</span>*/
/*                         <span class="arrow "></span> </a>*/
/*                     <ul class="sub-menu">*/
/*                         <li><a href="{{ path('pointdevente_new') }}"><span class="fa fa-plus"></span> Ajouter </a></li>*/
/*                         <li><a href="{{ path('pointdevente_index') }}"><span class="fa fa-file"></span> Liste </a></li>*/
/* */
/*                     </ul>*/
/*                 </li>*/
/*                 <li class=""><a href="javascript:;"> <i class="fa fa-user"></i><span class="title"> Fournisseur</span> <span*/
/*                                 class="arrow "></span> </a>*/
/*                     <ul class="sub-menu">*/
/*                         <li><a href="{{ path('fournisseur_new') }}"> <span class="fa fa-plus"></span> Ajouter </a></li>*/
/*                         <li><a href="{{ path('fournisseur_index') }}"><span class="fa fa-file"></span> Liste </a></li>*/
/* */
/*                     </ul>*/
/*                 </li>*/
/* */
/* */
/*             </ul>*/
/* */
/* */
/* */
/*     </div>*/
/*     </div>*/
/*     <!-- END SIDEBAR -->*/
/*     <!-- BEGIN PAGE CONTAINER-->*/
/* */
/*     <div class="page-content ">*/
/*         <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->*/
/*         <div id="portlet-config" class="modal hide">*/
/*             <div class="modal-header">*/
/*                 <button data-dismiss="modal" class="close" type="button"></button>*/
/*                 <h3>Widget Settings</h3>*/
/*             </div>*/
/*             <div class="modal-body"> Widget settings form goes here </div>*/
/*         </div>*/
/*         <div class="clearfix"></div>*/
/*         <div class="content sm-gutter">*/
/*         <div class="page-title">*/
/*         </div>*/
/*         {% block body %}*/
/*         <!-- END DASHBOARD TILES -->*/
/*         <!-- BEGIN DASHBOARD TILES -->*/
/* */
/* */
/*         <div class="grid simple">*/
/* */
/*             <div class="grid-title no-border">*/
/* */
/*                 <div class="row">*/
/* */
/* */
/*                     <div class="col-md-3 col-vlg-4 col-sm-8">*/
/*                         <div class="tiles green m-b-10">*/
/* */
/*                             <div class="tiles-body">*/
/*                                 <img src="{{ asset('bundles/htmstock/assets/img/bell-512.png')}}" width="70px" height="70px">*/
/*                                 <div align="center" class="tiles-title text-black" ><strong>Alert Stock</strong></div>*/
/*                                 <span align="right" class="badge" id="msgs-badge"></span>*/
/* */
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="col-md-3 col-vlg-4 col-sm-8">*/
/*                         <div class="tiles green m-b-10">*/
/*                             <div class="tiles-body">*/
/* */
/*                                 <img src="{{ asset('bundles/htmstock/assets/img/32213.png')}}" width="70px" height="70px">*/
/*                                  <div align="center" class="tiles-title text-black"><strong>Devis Réçu  </strong></div>*/
/*                                 <span align="right" class="badge" id="msgs-badge"></span>*/
/* */
/* */
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="col-md-3 col-vlg-4 col-sm-8">*/
/*                         <div class="tiles green m-b-10">*/
/*                             <div class="tiles-body">*/
/* */
/*                                 <img src="{{ asset('bundles/htmstock/assets/img/117-Exchange-256.png')}}" width="70px" height="70px">*/
/*                                 <div align="center" class="tiles-title text-black"><strong>Approvisionnement</strong></div>*/
/*                                 <span align="right" class="badge" id="msgs-badge"></span>*/
/* */
/* */
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                 </div>*/
/* */
/* */
/* */
/* */
/* */
/*                 <div class="page-title">*/
/*                     <h2><span class="fa fa-arrow-circle-o-right"></span>Points De Vente</h2>*/
/*                 </div>*/
/* */
/* */
/*                 <!-- PAGE CONTENT WRAPPER -->*/
/*                 <div class="page-content-wrap">*/
/* */
/*                     <div class="row">*/
/*                         <div class="col-md-12">*/
/* */
/*                             <!-- START DEFAULT DATATABLE -->*/
/*                             <div class="panel panel-default">*/
/*                                 <div class="panel-heading">*/
/*                                     <h3 class="panel-title">Liste</h3>*/
/* */
/*                                 </div>*/
/*                                 <div class="grid-body ">*/
/* */
/*                                     <table class="table table-striped" id="example2" >*/
/*                                         <thead>*/
/*                                         <tr>*/
/*                                             <th></th>*/
/*                                             <th>Nom point de vente</th>*/
/*                                             <th>Gouvernorat</th>*/
/*                                             <th>Adress</th>*/
/*                                             <th>Téléphone</th>*/
/*                                             <th>Mail</th>*/
/*                                         </tr>*/
/*                                         </thead>*/
/*                                         <tbody>*/
/*                                         {% for pointDeVente in pointDeVentes %}*/
/* */
/*                                         <tr class="odd gradeX">*/
/*                                             <td><i class="fa fa-plus-circle"></i></td>*/
/*                                             <td>{{ pointDeVente.nomPv }}</td>*/
/*                                             <td>{{ pointDeVente.gouvernorat }}</td>*/
/*                                             <td>{{ pointDeVente.adress }}</td>*/
/*                                             <td>{{ pointDeVente.tel }}</td>*/
/*                                             <td>{{ pointDeVente.mail }}</td>*/
/* */
/*                                         </tr>*/
/*                                         {% endfor  %}*/
/*                                         </tbody>*/
/*                                     </table>*/
/*                                     <div  align ="right" class="navigation">*/
/*                                         {{ knp_pagination_render(pointDeVentes) }}*/
/*                                     </div>*/
/* */
/* */
/*                                     <!-- END WIDGETS -->*/
/* */
/*                                 </div>*/
/* */
/*                             </div>*/
/* */
/* */
/*                             <!-- END PAGE CONTENT -->*/
/*                         </div>*/
/* */
/*                     </div>*/
/* */
/* */
/* */
/*         {% endblock %}*/
/*     </div>*/
/* </div>*/
/* <!-- END CONTAINER -->*/
/* */
/* <!-- END CONTAINER -->*/
/* <!-- BEGIN CORE JS FRAMEWORK-->*/
/* <script src="{{ asset('assets/plugins/jquery-1.8.3.min.js')}}" type="text/javascript"></script>*/
/* <script src="{{ asset('assets/plugins/boostrapv3/js/bootstrap.min.js')}}" type="text/javascript"></script>*/
/* <script src="{{ asset('assets/plugins/breakpoints.js')}}" type="text/javascript"></script>*/
/* <script src="{{ asset('assets/plugins/jquery-unveil/jquery.unveil.min.js')}}" type="text/javascript"></script>*/
/* <script src="{{ asset('assets/plugins/jquery-scrollbar/jquery.scrollbar.min.js')}}" type="text/javascript"></script>*/
/* <!-- END CORE JS FRAMEWORK -->*/
/* <!-- BEGIN PAGE LEVEL JS -->*/
/* <script src="{{ asset('assets/plugins/pace/pace.min.js')}}" type="text/javascript"></script>*/
/* <script src="{{ asset('assets/plugins/jquery-numberAnimate/jquery.animateNumbers.js')}}" type="text/javascript"></script>*/
/* <!-- END PAGE LEVEL PLUGINS -->*/
/* */
/* <!-- BEGIN CORE TEMPLATE JS -->*/
/* <script src="{{ asset('assets/js/core.js')}}" type="text/javascript"></script>*/
/* <script src="{{ asset('assets/js/chat.js')}}" type="text/javascript"></script>*/
/* <!-- END CORE TEMPLATE JS -->*/
/* </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* </body>*/
/* </html>*/
