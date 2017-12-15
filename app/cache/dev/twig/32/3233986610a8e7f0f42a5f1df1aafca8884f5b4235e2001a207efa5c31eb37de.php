<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_410255e38b36671f79792cd85cae47e8715193d900a04656a8322f364bd8472c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7c80abf591425997894e2089817f342661d772d2607ea58f82cf88b10eab0982 = $this->env->getExtension("native_profiler");
        $__internal_7c80abf591425997894e2089817f342661d772d2607ea58f82cf88b10eab0982->enter($__internal_7c80abf591425997894e2089817f342661d772d2607ea58f82cf88b10eab0982_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7c80abf591425997894e2089817f342661d772d2607ea58f82cf88b10eab0982->leave($__internal_7c80abf591425997894e2089817f342661d772d2607ea58f82cf88b10eab0982_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b9a4b028633b9f4bf5e16071d4d111274332124941ae36f7fe794bdcf890177e = $this->env->getExtension("native_profiler");
        $__internal_b9a4b028633b9f4bf5e16071d4d111274332124941ae36f7fe794bdcf890177e->enter($__internal_b9a4b028633b9f4bf5e16071d4d111274332124941ae36f7fe794bdcf890177e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 7
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 9
        echo "<div class=\"tiles grey p-t-20 p-b-20 text-black\"><br>
    <form id=\"frm_login\" class=\"animated fadeIn\"  action=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("admin_check");
        echo "\" method=\"post\"  novalidate>
        
         
        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\"/>
        ";
        // line 14
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 15
            echo "            <font size=\"5\" face=\"georgia\" class=\"text-danger\"><h4 style=\"color:#FF0000\" align=\"center\">login ou mot de passe incorrecte</h4></font>
        ";
        }
        // line 17
        echo "    <div class=\"row form-row m-l-20 m-r-20 xs-m-l-10 xs-m-r-10\">

            <div class=\"col-md-6 col-sm-6 \">


                <div class=\"controls\">
                    <div class=\"input-with-icon  right\">
                        ";
        // line 24
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 25
            echo "                            <font size=\"5\" face=\"georgia\" class=\"text-danger\"><h4 style=\"color:#FF0000\" align=\"center\">login obligatoire</h4></font>
                        ";
        }
        // line 27
        echo "
                        <input type=\"text\" id=\"username\" class=\"form-control\" name=\"_username\"
                               value=\"";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" placeholder=\"Username\"/>

                    </div>
                </div>
            </div>
        
      
            <div class=\"col-md-6 col-sm-6 \">
                
                <div class=\"controls\">
                    <div class=\"input-with-icon  right\">
                        ";
        // line 40
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 41
            echo "                            <font size=\"5\" face=\"georgia\" class=\"text-danger\"><h4 style=\"color:#FF0000\" align=\"center\">mot de passe obligatoire</h4></font>
                        ";
        }
        // line 43
        echo "                        <input type=\"password\" id=\"password\" name=\"_password\" class=\"form-control\" required=\"required\" placeholder=\"Password\"/>

                    </div>
                </div>
            </div>
        </div>
    
<div class=\"row p-t-10 m-l-20 m-r-20 xs-m-l-10 xs-m-r-10\">
<div class=\"control-group  col-md-10\">
    <div class=\"checkbox checkbox check-success\">
                      <input type=\"checkbox\" id=\"checkbox1\" value=\"1\">
                      <label for=\"checkbox1\">";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                    </div>
        
        </div>
        </div>
<div class=\"row p-t-10 m-l-20 m-r-20 xs-m-l-10 xs-m-r-10\">
<div  class=\"col-md-6 col-sm-6 \">
    </div>     
            <div align =\"right\" class=\"col-md-6 col-sm-6\">
                <button type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\"
                        class=\"btn btn-primary btn-cons pull-right\"> Login
                </button>
            </div>
            
            </div>

    </form>
      <div class=\"login-footer\">
                <div class=\"pull-left\">
                    &copy; 2016 Gestion De Stock
                </div>

    </div>
    </div>

    ";
        
        $__internal_b9a4b028633b9f4bf5e16071d4d111274332124941ae36f7fe794bdcf890177e->leave($__internal_b9a4b028633b9f4bf5e16071d4d111274332124941ae36f7fe794bdcf890177e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 63,  119 => 54,  106 => 43,  102 => 41,  100 => 40,  86 => 29,  82 => 27,  78 => 25,  76 => 24,  67 => 17,  63 => 15,  61 => 14,  57 => 13,  51 => 10,  48 => 9,  42 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* {% if error %}*/
/*     <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>*/
/* {% endif %}*/
/* <div class="tiles grey p-t-20 p-b-20 text-black"><br>*/
/*     <form id="frm_login" class="animated fadeIn"  action="{{ path("admin_check") }}" method="post"  novalidate>*/
/*         */
/*          */
/*         <input type="hidden" name="_csrf_token" value="{{ csrf_token }}"/>*/
/*         {% if error %}*/
/*             <font size="5" face="georgia" class="text-danger"><h4 style="color:#FF0000" align="center">login ou mot de passe incorrecte</h4></font>*/
/*         {% endif %}*/
/*     <div class="row form-row m-l-20 m-r-20 xs-m-l-10 xs-m-r-10">*/
/* */
/*             <div class="col-md-6 col-sm-6 ">*/
/* */
/* */
/*                 <div class="controls">*/
/*                     <div class="input-with-icon  right">*/
/*                         {% if error %}*/
/*                             <font size="5" face="georgia" class="text-danger"><h4 style="color:#FF0000" align="center">login obligatoire</h4></font>*/
/*                         {% endif %}*/
/* */
/*                         <input type="text" id="username" class="form-control" name="_username"*/
/*                                value="{{ last_username }}" required="required" placeholder="Username"/>*/
/* */
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         */
/*       */
/*             <div class="col-md-6 col-sm-6 ">*/
/*                 */
/*                 <div class="controls">*/
/*                     <div class="input-with-icon  right">*/
/*                         {% if error %}*/
/*                             <font size="5" face="georgia" class="text-danger"><h4 style="color:#FF0000" align="center">mot de passe obligatoire</h4></font>*/
/*                         {% endif %}*/
/*                         <input type="password" id="password" name="_password" class="form-control" required="required" placeholder="Password"/>*/
/* */
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     */
/* <div class="row p-t-10 m-l-20 m-r-20 xs-m-l-10 xs-m-r-10">*/
/* <div class="control-group  col-md-10">*/
/*     <div class="checkbox checkbox check-success">*/
/*                       <input type="checkbox" id="checkbox1" value="1">*/
/*                       <label for="checkbox1">{{ 'security.login.remember_me'|trans }}</label>*/
/*                     </div>*/
/*         */
/*         </div>*/
/*         </div>*/
/* <div class="row p-t-10 m-l-20 m-r-20 xs-m-l-10 xs-m-r-10">*/
/* <div  class="col-md-6 col-sm-6 ">*/
/*     </div>     */
/*             <div align ="right" class="col-md-6 col-sm-6">*/
/*                 <button type="submit" id="_submit" name="_submit" value="{{ 'security.login.submit'|trans }}"*/
/*                         class="btn btn-primary btn-cons pull-right"> Login*/
/*                 </button>*/
/*             </div>*/
/*             */
/*             </div>*/
/* */
/*     </form>*/
/*       <div class="login-footer">*/
/*                 <div class="pull-left">*/
/*                     &copy; 2016 Gestion De Stock*/
/*                 </div>*/
/* */
/*     </div>*/
/*     </div>*/
/* */
/*     {% endblock fos_user_content %}*/
/* */
