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
        $__internal_0b332df9bee8f8d1debece2bd24b797fac165ac8fc62ec58faa4e7997fce35ee = $this->env->getExtension("native_profiler");
        $__internal_0b332df9bee8f8d1debece2bd24b797fac165ac8fc62ec58faa4e7997fce35ee->enter($__internal_0b332df9bee8f8d1debece2bd24b797fac165ac8fc62ec58faa4e7997fce35ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0b332df9bee8f8d1debece2bd24b797fac165ac8fc62ec58faa4e7997fce35ee->leave($__internal_0b332df9bee8f8d1debece2bd24b797fac165ac8fc62ec58faa4e7997fce35ee_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4d09668d26c0e13cced37e7b49737cb8af43c39d8b1600fc1f86a1f12e28bb78 = $this->env->getExtension("native_profiler");
        $__internal_4d09668d26c0e13cced37e7b49737cb8af43c39d8b1600fc1f86a1f12e28bb78->enter($__internal_4d09668d26c0e13cced37e7b49737cb8af43c39d8b1600fc1f86a1f12e28bb78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_4d09668d26c0e13cced37e7b49737cb8af43c39d8b1600fc1f86a1f12e28bb78->leave($__internal_4d09668d26c0e13cced37e7b49737cb8af43c39d8b1600fc1f86a1f12e28bb78_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_57dfc2274af4d0d92fe3385636475a4cfa8084a7cbe279c629abcb60b7e1fb67 = $this->env->getExtension("native_profiler");
        $__internal_57dfc2274af4d0d92fe3385636475a4cfa8084a7cbe279c629abcb60b7e1fb67->enter($__internal_57dfc2274af4d0d92fe3385636475a4cfa8084a7cbe279c629abcb60b7e1fb67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_57dfc2274af4d0d92fe3385636475a4cfa8084a7cbe279c629abcb60b7e1fb67->leave($__internal_57dfc2274af4d0d92fe3385636475a4cfa8084a7cbe279c629abcb60b7e1fb67_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ca013ae9087d254eb33404e097151f6e7ab18a0a6a768636071bc8aec33a304a = $this->env->getExtension("native_profiler");
        $__internal_ca013ae9087d254eb33404e097151f6e7ab18a0a6a768636071bc8aec33a304a->enter($__internal_ca013ae9087d254eb33404e097151f6e7ab18a0a6a768636071bc8aec33a304a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_ca013ae9087d254eb33404e097151f6e7ab18a0a6a768636071bc8aec33a304a->leave($__internal_ca013ae9087d254eb33404e097151f6e7ab18a0a6a768636071bc8aec33a304a_prof);

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
