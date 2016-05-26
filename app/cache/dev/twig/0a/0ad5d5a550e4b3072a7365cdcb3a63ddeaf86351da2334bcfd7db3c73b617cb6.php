<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_a101a7c936fa2187b712bd415064ee26a43734844477e9739a9101608dc54da5 extends Twig_Template
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
        $__internal_d9e2c514a5c445beb6f7212c7a595ce07f76a161f267d14a7ea932eeb252e1e7 = $this->env->getExtension("native_profiler");
        $__internal_d9e2c514a5c445beb6f7212c7a595ce07f76a161f267d14a7ea932eeb252e1e7->enter($__internal_d9e2c514a5c445beb6f7212c7a595ce07f76a161f267d14a7ea932eeb252e1e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d9e2c514a5c445beb6f7212c7a595ce07f76a161f267d14a7ea932eeb252e1e7->leave($__internal_d9e2c514a5c445beb6f7212c7a595ce07f76a161f267d14a7ea932eeb252e1e7_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_597c4aa5da2a707eed436812dbe273a4d04e905997da38f32766881c202eeeee = $this->env->getExtension("native_profiler");
        $__internal_597c4aa5da2a707eed436812dbe273a4d04e905997da38f32766881c202eeeee->enter($__internal_597c4aa5da2a707eed436812dbe273a4d04e905997da38f32766881c202eeeee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_597c4aa5da2a707eed436812dbe273a4d04e905997da38f32766881c202eeeee->leave($__internal_597c4aa5da2a707eed436812dbe273a4d04e905997da38f32766881c202eeeee_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2a06767b449d7eb3dc63b4f82b7dd13d7771cc20dd037351a36498d5aaec391c = $this->env->getExtension("native_profiler");
        $__internal_2a06767b449d7eb3dc63b4f82b7dd13d7771cc20dd037351a36498d5aaec391c->enter($__internal_2a06767b449d7eb3dc63b4f82b7dd13d7771cc20dd037351a36498d5aaec391c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_2a06767b449d7eb3dc63b4f82b7dd13d7771cc20dd037351a36498d5aaec391c->leave($__internal_2a06767b449d7eb3dc63b4f82b7dd13d7771cc20dd037351a36498d5aaec391c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6925910e38371c3b8389a1fe21ce8ac644863bca124bb563356e6018459e2f09 = $this->env->getExtension("native_profiler");
        $__internal_6925910e38371c3b8389a1fe21ce8ac644863bca124bb563356e6018459e2f09->enter($__internal_6925910e38371c3b8389a1fe21ce8ac644863bca124bb563356e6018459e2f09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_6925910e38371c3b8389a1fe21ce8ac644863bca124bb563356e6018459e2f09->leave($__internal_6925910e38371c3b8389a1fe21ce8ac644863bca124bb563356e6018459e2f09_prof);

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
