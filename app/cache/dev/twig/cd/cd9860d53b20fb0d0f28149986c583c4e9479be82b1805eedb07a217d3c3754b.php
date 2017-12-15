<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_ff866346c6ce0140b64780bdc1249d369e155fd0ca773b0cb159413608b14dd7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_99eea9319a0bf92665fa970757a57a2f22b404f5233f8bdf62b4a074315caf7b = $this->env->getExtension("native_profiler");
        $__internal_99eea9319a0bf92665fa970757a57a2f22b404f5233f8bdf62b4a074315caf7b->enter($__internal_99eea9319a0bf92665fa970757a57a2f22b404f5233f8bdf62b4a074315caf7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_99eea9319a0bf92665fa970757a57a2f22b404f5233f8bdf62b4a074315caf7b->leave($__internal_99eea9319a0bf92665fa970757a57a2f22b404f5233f8bdf62b4a074315caf7b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d8daa8781fd9452946b34c8dbbb2bf6744de5c603a66cc7b0c41ce4e173a9c14 = $this->env->getExtension("native_profiler");
        $__internal_d8daa8781fd9452946b34c8dbbb2bf6744de5c603a66cc7b0c41ce4e173a9c14->enter($__internal_d8daa8781fd9452946b34c8dbbb2bf6744de5c603a66cc7b0c41ce4e173a9c14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_d8daa8781fd9452946b34c8dbbb2bf6744de5c603a66cc7b0c41ce4e173a9c14->leave($__internal_d8daa8781fd9452946b34c8dbbb2bf6744de5c603a66cc7b0c41ce4e173a9c14_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8013e9b3f40b3d45c9fd6f01ee569f2b83c25e94da2d02682e5a8f79e25b7799 = $this->env->getExtension("native_profiler");
        $__internal_8013e9b3f40b3d45c9fd6f01ee569f2b83c25e94da2d02682e5a8f79e25b7799->enter($__internal_8013e9b3f40b3d45c9fd6f01ee569f2b83c25e94da2d02682e5a8f79e25b7799_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_8013e9b3f40b3d45c9fd6f01ee569f2b83c25e94da2d02682e5a8f79e25b7799->leave($__internal_8013e9b3f40b3d45c9fd6f01ee569f2b83c25e94da2d02682e5a8f79e25b7799_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_119db8f36d221c33e551001c384298baf92740dd7d28074a0f383fc975b9c000 = $this->env->getExtension("native_profiler");
        $__internal_119db8f36d221c33e551001c384298baf92740dd7d28074a0f383fc975b9c000->enter($__internal_119db8f36d221c33e551001c384298baf92740dd7d28074a0f383fc975b9c000_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_119db8f36d221c33e551001c384298baf92740dd7d28074a0f383fc975b9c000->leave($__internal_119db8f36d221c33e551001c384298baf92740dd7d28074a0f383fc975b9c000_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
