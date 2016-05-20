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
        $__internal_062fae4e259ff6b0fed0f13c4f522162d2064abe446260f0bb1636b473066bfb = $this->env->getExtension("native_profiler");
        $__internal_062fae4e259ff6b0fed0f13c4f522162d2064abe446260f0bb1636b473066bfb->enter($__internal_062fae4e259ff6b0fed0f13c4f522162d2064abe446260f0bb1636b473066bfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_062fae4e259ff6b0fed0f13c4f522162d2064abe446260f0bb1636b473066bfb->leave($__internal_062fae4e259ff6b0fed0f13c4f522162d2064abe446260f0bb1636b473066bfb_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c198ae7ac9808b7222907fb1d79719bcf5f27f35c19e9f0618da2762ec393829 = $this->env->getExtension("native_profiler");
        $__internal_c198ae7ac9808b7222907fb1d79719bcf5f27f35c19e9f0618da2762ec393829->enter($__internal_c198ae7ac9808b7222907fb1d79719bcf5f27f35c19e9f0618da2762ec393829_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c198ae7ac9808b7222907fb1d79719bcf5f27f35c19e9f0618da2762ec393829->leave($__internal_c198ae7ac9808b7222907fb1d79719bcf5f27f35c19e9f0618da2762ec393829_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1f5a643263ee1c03ca9ac3a82188598bb58c02f3ae35a477f71e19d278112d1b = $this->env->getExtension("native_profiler");
        $__internal_1f5a643263ee1c03ca9ac3a82188598bb58c02f3ae35a477f71e19d278112d1b->enter($__internal_1f5a643263ee1c03ca9ac3a82188598bb58c02f3ae35a477f71e19d278112d1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_1f5a643263ee1c03ca9ac3a82188598bb58c02f3ae35a477f71e19d278112d1b->leave($__internal_1f5a643263ee1c03ca9ac3a82188598bb58c02f3ae35a477f71e19d278112d1b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e79aa5cad33121569aae221bc4b78cb7e35203ac11f7846a92f6bee5bcc26990 = $this->env->getExtension("native_profiler");
        $__internal_e79aa5cad33121569aae221bc4b78cb7e35203ac11f7846a92f6bee5bcc26990->enter($__internal_e79aa5cad33121569aae221bc4b78cb7e35203ac11f7846a92f6bee5bcc26990_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_e79aa5cad33121569aae221bc4b78cb7e35203ac11f7846a92f6bee5bcc26990->leave($__internal_e79aa5cad33121569aae221bc4b78cb7e35203ac11f7846a92f6bee5bcc26990_prof);

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
