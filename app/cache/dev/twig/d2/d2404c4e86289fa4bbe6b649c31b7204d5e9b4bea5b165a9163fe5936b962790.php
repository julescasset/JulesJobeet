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
        $__internal_d5c98e0547635fbf4a9abe30dfdf628e921d266d394dd2c0773fbde9eaa73b26 = $this->env->getExtension("native_profiler");
        $__internal_d5c98e0547635fbf4a9abe30dfdf628e921d266d394dd2c0773fbde9eaa73b26->enter($__internal_d5c98e0547635fbf4a9abe30dfdf628e921d266d394dd2c0773fbde9eaa73b26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d5c98e0547635fbf4a9abe30dfdf628e921d266d394dd2c0773fbde9eaa73b26->leave($__internal_d5c98e0547635fbf4a9abe30dfdf628e921d266d394dd2c0773fbde9eaa73b26_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b83e349a4e4ff91e282a0b96307d95dee188484048f74fbb58ba8500bb130aab = $this->env->getExtension("native_profiler");
        $__internal_b83e349a4e4ff91e282a0b96307d95dee188484048f74fbb58ba8500bb130aab->enter($__internal_b83e349a4e4ff91e282a0b96307d95dee188484048f74fbb58ba8500bb130aab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b83e349a4e4ff91e282a0b96307d95dee188484048f74fbb58ba8500bb130aab->leave($__internal_b83e349a4e4ff91e282a0b96307d95dee188484048f74fbb58ba8500bb130aab_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_abe81a8c0b8706af3c2001c59f37f225b837061160b7f0e89d0b08750528eba7 = $this->env->getExtension("native_profiler");
        $__internal_abe81a8c0b8706af3c2001c59f37f225b837061160b7f0e89d0b08750528eba7->enter($__internal_abe81a8c0b8706af3c2001c59f37f225b837061160b7f0e89d0b08750528eba7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_abe81a8c0b8706af3c2001c59f37f225b837061160b7f0e89d0b08750528eba7->leave($__internal_abe81a8c0b8706af3c2001c59f37f225b837061160b7f0e89d0b08750528eba7_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0ab36c0d9099781d0964d1ee13c466278d56cd31a644cc01e724b654906f9438 = $this->env->getExtension("native_profiler");
        $__internal_0ab36c0d9099781d0964d1ee13c466278d56cd31a644cc01e724b654906f9438->enter($__internal_0ab36c0d9099781d0964d1ee13c466278d56cd31a644cc01e724b654906f9438_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_0ab36c0d9099781d0964d1ee13c466278d56cd31a644cc01e724b654906f9438->leave($__internal_0ab36c0d9099781d0964d1ee13c466278d56cd31a644cc01e724b654906f9438_prof);

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
