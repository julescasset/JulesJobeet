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
        $__internal_c8dc397346db5eab9ae93199df1c9b0c1024f31e6ded91fe50e5f41bae1f4a7f = $this->env->getExtension("native_profiler");
        $__internal_c8dc397346db5eab9ae93199df1c9b0c1024f31e6ded91fe50e5f41bae1f4a7f->enter($__internal_c8dc397346db5eab9ae93199df1c9b0c1024f31e6ded91fe50e5f41bae1f4a7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c8dc397346db5eab9ae93199df1c9b0c1024f31e6ded91fe50e5f41bae1f4a7f->leave($__internal_c8dc397346db5eab9ae93199df1c9b0c1024f31e6ded91fe50e5f41bae1f4a7f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5f551ef428c6dbadcc0731c3530df55558c4cf37468f553d301373b2ef09931a = $this->env->getExtension("native_profiler");
        $__internal_5f551ef428c6dbadcc0731c3530df55558c4cf37468f553d301373b2ef09931a->enter($__internal_5f551ef428c6dbadcc0731c3530df55558c4cf37468f553d301373b2ef09931a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_5f551ef428c6dbadcc0731c3530df55558c4cf37468f553d301373b2ef09931a->leave($__internal_5f551ef428c6dbadcc0731c3530df55558c4cf37468f553d301373b2ef09931a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_46c33b9362f8b31ac718a3da63c5b02c8ce815a4ba89496ce261c5f35f654a99 = $this->env->getExtension("native_profiler");
        $__internal_46c33b9362f8b31ac718a3da63c5b02c8ce815a4ba89496ce261c5f35f654a99->enter($__internal_46c33b9362f8b31ac718a3da63c5b02c8ce815a4ba89496ce261c5f35f654a99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_46c33b9362f8b31ac718a3da63c5b02c8ce815a4ba89496ce261c5f35f654a99->leave($__internal_46c33b9362f8b31ac718a3da63c5b02c8ce815a4ba89496ce261c5f35f654a99_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f551639884810b7f44f72f903bb1ed10513d0cb1e09fefe655f869e34fb7d72c = $this->env->getExtension("native_profiler");
        $__internal_f551639884810b7f44f72f903bb1ed10513d0cb1e09fefe655f869e34fb7d72c->enter($__internal_f551639884810b7f44f72f903bb1ed10513d0cb1e09fefe655f869e34fb7d72c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_f551639884810b7f44f72f903bb1ed10513d0cb1e09fefe655f869e34fb7d72c->leave($__internal_f551639884810b7f44f72f903bb1ed10513d0cb1e09fefe655f869e34fb7d72c_prof);

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
