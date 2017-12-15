<?php

/* HTMStockBundle::produitenstock.html.twig */
class __TwigTemplate_b8e0f6bba8376de93195b008a28e9866bc91b3131c93c9e7d74226dbc577357e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("HTMStockBundle::index.html.twig", "HTMStockBundle::produitenstock.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "HTMStockBundle::index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e13f6e6302a622d9d2d11fa055ba14ed5e1265ca4364383e1377116378be0484 = $this->env->getExtension("native_profiler");
        $__internal_e13f6e6302a622d9d2d11fa055ba14ed5e1265ca4364383e1377116378be0484->enter($__internal_e13f6e6302a622d9d2d11fa055ba14ed5e1265ca4364383e1377116378be0484_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HTMStockBundle::produitenstock.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e13f6e6302a622d9d2d11fa055ba14ed5e1265ca4364383e1377116378be0484->leave($__internal_e13f6e6302a622d9d2d11fa055ba14ed5e1265ca4364383e1377116378be0484_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_421eff405c834f5e490c5d1cae17285fb73d1b11cd7e547010d1c0dc08641451 = $this->env->getExtension("native_profiler");
        $__internal_421eff405c834f5e490c5d1cae17285fb73d1b11cd7e547010d1c0dc08641451->enter($__internal_421eff405c834f5e490c5d1cae17285fb73d1b11cd7e547010d1c0dc08641451_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"row-fluid\">
    <div class=\"span12\">
        <div class=\"grid simple \">
            <div class=\"grid-title\">
                <span class=\"semi-bold\">Liste des produit selon catégorie</span>
                <div class=\"tools\"> <a href=\"javascript:;\" class=\"collapse\"></a>
                    <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("htm_stock_stockglobale");
        echo "\" class=\"reload\"></a> <a href=\"javascript:;\" class=\"remove\"></a>
                </div>
            </div>

            <div class=\"grid-body \">

                ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 17
            echo "

                        <a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("htm_stock_stockglobale", array("categorie" => $this->getAttribute($context["categorie"], "id", array()))), "html", null, true);
            echo "\" id=\"_submit\"  name=\"_submit\" class=\"btn btn-primary btn-cons pull-left\" > ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["categorie"], "nom", array()), "html", null, true);
            echo " </a>

                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "                <br><br><br>
                <table class=\"table table-striped\" id=\"example2\" >
                    <thead>
                    <tr>
                        <th></th>

                        <th class=\"semi-bold\">photo</th>
                        <th class=\"semi-bold\">Code à barre</th>
                        <th class=\"semi-bold\">Nom</th>
                        <th class=\"semi-bold\">Prix unitaire</th>
                        <th class=\"semi-bold\">Quantité</th>

                    </tr>
                    </thead>
                    <tbody>
                    ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits")));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 38
            echo "                    <tr class=\"odd gradeX\">
                        <td><i class=\"fa fa-plus-circle\"></i></td>

                        <td><img src=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("assets/img/image/" . $this->getAttribute($context["product"], "file", array()))), "html", null, true);
            echo "\"  width= \"70px\" height= \"50px\" /></td>
                        <td>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "barCode", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "nom", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "price", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "quantiteStock", array()), "html", null, true);
            echo "</td>

                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "                    </tbody>
                </table>
                <div  align=\"right\" class=\"navigation\">
                    ";
        // line 52
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["produits"]) ? $context["produits"] : $this->getContext($context, "produits")));
        echo "
                </div>
            </div>

        </div>

    </div>


</div>

    <script>
        \$(\"#test2\").remove();

    </script>
                    ";
        
        $__internal_421eff405c834f5e490c5d1cae17285fb73d1b11cd7e547010d1c0dc08641451->leave($__internal_421eff405c834f5e490c5d1cae17285fb73d1b11cd7e547010d1c0dc08641451_prof);

    }

    public function getTemplateName()
    {
        return "HTMStockBundle::produitenstock.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 52,  128 => 49,  118 => 45,  114 => 44,  110 => 43,  106 => 42,  102 => 41,  97 => 38,  93 => 37,  76 => 22,  65 => 19,  61 => 17,  57 => 16,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'HTMStockBundle::index.html.twig' %}*/
/* */
/* {% block body %}*/
/* <div class="row-fluid">*/
/*     <div class="span12">*/
/*         <div class="grid simple ">*/
/*             <div class="grid-title">*/
/*                 <span class="semi-bold">Liste des produit selon catégorie</span>*/
/*                 <div class="tools"> <a href="javascript:;" class="collapse"></a>*/
/*                     <a href="{{ path('htm_stock_stockglobale')}}" class="reload"></a> <a href="javascript:;" class="remove"></a>*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <div class="grid-body ">*/
/* */
/*                 {% for categorie in categories %}*/
/* */
/* */
/*                         <a href="{{path('htm_stock_stockglobale',{'categorie':categorie.id})}}" id="_submit"  name="_submit" class="btn btn-primary btn-cons pull-left" > {{categorie.nom}} </a>*/
/* */
/*                 {% endfor %}*/
/*                 <br><br><br>*/
/*                 <table class="table table-striped" id="example2" >*/
/*                     <thead>*/
/*                     <tr>*/
/*                         <th></th>*/
/* */
/*                         <th class="semi-bold">photo</th>*/
/*                         <th class="semi-bold">Code à barre</th>*/
/*                         <th class="semi-bold">Nom</th>*/
/*                         <th class="semi-bold">Prix unitaire</th>*/
/*                         <th class="semi-bold">Quantité</th>*/
/* */
/*                     </tr>*/
/*                     </thead>*/
/*                     <tbody>*/
/*                     {% for product in produits %}*/
/*                     <tr class="odd gradeX">*/
/*                         <td><i class="fa fa-plus-circle"></i></td>*/
/* */
/*                         <td><img src="{{ asset( 'assets/img/image/'~product.file) }}"  width= "70px" height= "50px" /></td>*/
/*                         <td>{{ product.barCode}}</td>*/
/*                         <td>{{ product.nom}}</td>*/
/*                         <td>{{ product.price}}</td>*/
/*                         <td>{{ product.quantiteStock}}</td>*/
/* */
/*                     </tr>*/
/*                     {% endfor  %}*/
/*                     </tbody>*/
/*                 </table>*/
/*                 <div  align="right" class="navigation">*/
/*                     {{ knp_pagination_render(produits) }}*/
/*                 </div>*/
/*             </div>*/
/* */
/*         </div>*/
/* */
/*     </div>*/
/* */
/* */
/* </div>*/
/* */
/*     <script>*/
/*         $("#test2").remove();*/
/* */
/*     </script>*/
/*                     {% endblock %}*/
/*   {#  <div class="row">*/
/*   <div class="col-md-2">*/
/*        <blockquote class="pull-right">*/
/*          {% for categorie in categories %}*/
/* */
/*         <div class="col-md-10">    */
/*       <a href="{{path('htm_magasinier_produitenstock',{'categorie':categorie.id})}}" id="_submit"  name="_submit" class="btn btn-primary btn-cons pull-left" > {{categorie.nom}} </a>*/
/*       </div>*/
/*         {% endfor %}*/
/* </blockquote>*/
/*   </div>*/
/*   <div class="col-md-10">*/
/*   <table class="table table-striped table-bordered table-hover" id="dataTables-example">*/
/*           <thead>*/
/*               <tr>*/
/*                   <th>photo</th>*/
/*                   <th>Code à barre</th>*/
/*                   <th>Nom</th>*/
/*                   <th>Prix unitaire</th>*/
/*                   <th>Quantité</th>*/
/*                   <th>Quantité min</th>*/
/*               </tr>*/
/*           </thead>*/
/*            <tbody>*/
/*           {% for product in produits %}*/
/*               <tr>*/
/*                 <th>{{ product.file}}</th>*/
/*                 <th>{{ product.barCode}}</th>*/
/*                   <th>{{ product.nom}}</th>*/
/*                   <th>{{ product.price}}</th>*/
/*                 <th>{{ product.quantiteStock}}</th>*/
/*                 <th>{{ product.quantiteMin}}</th>*/
/*               </tr>*/
/*           {% endfor %}*/
/*           </tbody>*/
/*         */
/*   </table>*/
/*   </div>#}*/
/* */
/* */
/* 	*/
/*  */
/* */
