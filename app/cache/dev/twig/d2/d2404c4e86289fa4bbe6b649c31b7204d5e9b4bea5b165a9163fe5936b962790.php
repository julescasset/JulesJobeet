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
        $__internal_dce56ed21b44e2ff48cb0d36db2a97b4f707daac373ebfb2e364108f924b88e0 = $this->env->getExtension("native_profiler");
        $__internal_dce56ed21b44e2ff48cb0d36db2a97b4f707daac373ebfb2e364108f924b88e0->enter($__internal_dce56ed21b44e2ff48cb0d36db2a97b4f707daac373ebfb2e364108f924b88e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dce56ed21b44e2ff48cb0d36db2a97b4f707daac373ebfb2e364108f924b88e0->leave($__internal_dce56ed21b44e2ff48cb0d36db2a97b4f707daac373ebfb2e364108f924b88e0_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4e987adf6b0e78a65b31ab77772f03d1853aa49257ccee11241e27cc86fdf0c4 = $this->env->getExtension("native_profiler");
        $__internal_4e987adf6b0e78a65b31ab77772f03d1853aa49257ccee11241e27cc86fdf0c4->enter($__internal_4e987adf6b0e78a65b31ab77772f03d1853aa49257ccee11241e27cc86fdf0c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_4e987adf6b0e78a65b31ab77772f03d1853aa49257ccee11241e27cc86fdf0c4->leave($__internal_4e987adf6b0e78a65b31ab77772f03d1853aa49257ccee11241e27cc86fdf0c4_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_13ad45763b8823b8afce9a6eae4e9fbe71add54aa5669eb01a07e3fe20094b4d = $this->env->getExtension("native_profiler");
        $__internal_13ad45763b8823b8afce9a6eae4e9fbe71add54aa5669eb01a07e3fe20094b4d->enter($__internal_13ad45763b8823b8afce9a6eae4e9fbe71add54aa5669eb01a07e3fe20094b4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_13ad45763b8823b8afce9a6eae4e9fbe71add54aa5669eb01a07e3fe20094b4d->leave($__internal_13ad45763b8823b8afce9a6eae4e9fbe71add54aa5669eb01a07e3fe20094b4d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8bee68d309d7bc565dd3f3e8ac7264f603262392bb02e6798ffcf7869454419f = $this->env->getExtension("native_profiler");
        $__internal_8bee68d309d7bc565dd3f3e8ac7264f603262392bb02e6798ffcf7869454419f->enter($__internal_8bee68d309d7bc565dd3f3e8ac7264f603262392bb02e6798ffcf7869454419f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_8bee68d309d7bc565dd3f3e8ac7264f603262392bb02e6798ffcf7869454419f->leave($__internal_8bee68d309d7bc565dd3f3e8ac7264f603262392bb02e6798ffcf7869454419f_prof);

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
