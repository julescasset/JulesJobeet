<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_e53e658d81da98ca3f069318e27351a4f338bed5719cae02a860e79c1c4f0e3a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_09e5d74bb8bb688bed050ea20e2f4547f1c806637695a83b8bc1ac6711195f15 = $this->env->getExtension("native_profiler");
        $__internal_09e5d74bb8bb688bed050ea20e2f4547f1c806637695a83b8bc1ac6711195f15->enter($__internal_09e5d74bb8bb688bed050ea20e2f4547f1c806637695a83b8bc1ac6711195f15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_09e5d74bb8bb688bed050ea20e2f4547f1c806637695a83b8bc1ac6711195f15->leave($__internal_09e5d74bb8bb688bed050ea20e2f4547f1c806637695a83b8bc1ac6711195f15_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d9847ac5b2c24e645e4d16a18ccfb0628a5a01cbb17bce7e08114e0b3ad0da35 = $this->env->getExtension("native_profiler");
        $__internal_d9847ac5b2c24e645e4d16a18ccfb0628a5a01cbb17bce7e08114e0b3ad0da35->enter($__internal_d9847ac5b2c24e645e4d16a18ccfb0628a5a01cbb17bce7e08114e0b3ad0da35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_d9847ac5b2c24e645e4d16a18ccfb0628a5a01cbb17bce7e08114e0b3ad0da35->leave($__internal_d9847ac5b2c24e645e4d16a18ccfb0628a5a01cbb17bce7e08114e0b3ad0da35_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b20c7a5a21f532f2210ae29353ff3459b6e6fdb2e91dfead742aa500b4c5d16b = $this->env->getExtension("native_profiler");
        $__internal_b20c7a5a21f532f2210ae29353ff3459b6e6fdb2e91dfead742aa500b4c5d16b->enter($__internal_b20c7a5a21f532f2210ae29353ff3459b6e6fdb2e91dfead742aa500b4c5d16b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b20c7a5a21f532f2210ae29353ff3459b6e6fdb2e91dfead742aa500b4c5d16b->leave($__internal_b20c7a5a21f532f2210ae29353ff3459b6e6fdb2e91dfead742aa500b4c5d16b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f9d5098721f2b59fd39fbd237cc2f3d04a0d915ffcf6a6baca324d7d26da208a = $this->env->getExtension("native_profiler");
        $__internal_f9d5098721f2b59fd39fbd237cc2f3d04a0d915ffcf6a6baca324d7d26da208a->enter($__internal_f9d5098721f2b59fd39fbd237cc2f3d04a0d915ffcf6a6baca324d7d26da208a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_f9d5098721f2b59fd39fbd237cc2f3d04a0d915ffcf6a6baca324d7d26da208a->leave($__internal_f9d5098721f2b59fd39fbd237cc2f3d04a0d915ffcf6a6baca324d7d26da208a_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
