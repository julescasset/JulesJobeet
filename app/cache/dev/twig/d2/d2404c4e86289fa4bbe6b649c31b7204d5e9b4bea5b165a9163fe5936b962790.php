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
        $__internal_c930cf3c6d82ed137cda45268c70a9d14f027c8f2f9c1c214f2331521076accb = $this->env->getExtension("native_profiler");
        $__internal_c930cf3c6d82ed137cda45268c70a9d14f027c8f2f9c1c214f2331521076accb->enter($__internal_c930cf3c6d82ed137cda45268c70a9d14f027c8f2f9c1c214f2331521076accb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c930cf3c6d82ed137cda45268c70a9d14f027c8f2f9c1c214f2331521076accb->leave($__internal_c930cf3c6d82ed137cda45268c70a9d14f027c8f2f9c1c214f2331521076accb_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_afb8ca9ba34cb6d02796da3b77bee5bcb4bd3529b9d668ebb35d5b1f95ccfdd9 = $this->env->getExtension("native_profiler");
        $__internal_afb8ca9ba34cb6d02796da3b77bee5bcb4bd3529b9d668ebb35d5b1f95ccfdd9->enter($__internal_afb8ca9ba34cb6d02796da3b77bee5bcb4bd3529b9d668ebb35d5b1f95ccfdd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_afb8ca9ba34cb6d02796da3b77bee5bcb4bd3529b9d668ebb35d5b1f95ccfdd9->leave($__internal_afb8ca9ba34cb6d02796da3b77bee5bcb4bd3529b9d668ebb35d5b1f95ccfdd9_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ee51fe3c0bbfebad33bed9dc6793b301831462f303a7b0087b78dd8392adc1b1 = $this->env->getExtension("native_profiler");
        $__internal_ee51fe3c0bbfebad33bed9dc6793b301831462f303a7b0087b78dd8392adc1b1->enter($__internal_ee51fe3c0bbfebad33bed9dc6793b301831462f303a7b0087b78dd8392adc1b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ee51fe3c0bbfebad33bed9dc6793b301831462f303a7b0087b78dd8392adc1b1->leave($__internal_ee51fe3c0bbfebad33bed9dc6793b301831462f303a7b0087b78dd8392adc1b1_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_16681b3c0f6ac126d03163e97ac7e96f82c30d88c019f1ec93a074fb8f18c1d1 = $this->env->getExtension("native_profiler");
        $__internal_16681b3c0f6ac126d03163e97ac7e96f82c30d88c019f1ec93a074fb8f18c1d1->enter($__internal_16681b3c0f6ac126d03163e97ac7e96f82c30d88c019f1ec93a074fb8f18c1d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_16681b3c0f6ac126d03163e97ac7e96f82c30d88c019f1ec93a074fb8f18c1d1->leave($__internal_16681b3c0f6ac126d03163e97ac7e96f82c30d88c019f1ec93a074fb8f18c1d1_prof);

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
