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
        $__internal_e3f835d6d2470597a8cd98934244b56db73109212ce85bc53adac094e229a8c0 = $this->env->getExtension("native_profiler");
        $__internal_e3f835d6d2470597a8cd98934244b56db73109212ce85bc53adac094e229a8c0->enter($__internal_e3f835d6d2470597a8cd98934244b56db73109212ce85bc53adac094e229a8c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e3f835d6d2470597a8cd98934244b56db73109212ce85bc53adac094e229a8c0->leave($__internal_e3f835d6d2470597a8cd98934244b56db73109212ce85bc53adac094e229a8c0_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c9942229f17b1cb13e49258d8df8876f3f05bbc313f4926ccefb0b3d2ef9a105 = $this->env->getExtension("native_profiler");
        $__internal_c9942229f17b1cb13e49258d8df8876f3f05bbc313f4926ccefb0b3d2ef9a105->enter($__internal_c9942229f17b1cb13e49258d8df8876f3f05bbc313f4926ccefb0b3d2ef9a105_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c9942229f17b1cb13e49258d8df8876f3f05bbc313f4926ccefb0b3d2ef9a105->leave($__internal_c9942229f17b1cb13e49258d8df8876f3f05bbc313f4926ccefb0b3d2ef9a105_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c924dd2ed162b23c82d76bc9d66fce7bbcdd4a65ca7f224583ed29e7d5026b7f = $this->env->getExtension("native_profiler");
        $__internal_c924dd2ed162b23c82d76bc9d66fce7bbcdd4a65ca7f224583ed29e7d5026b7f->enter($__internal_c924dd2ed162b23c82d76bc9d66fce7bbcdd4a65ca7f224583ed29e7d5026b7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c924dd2ed162b23c82d76bc9d66fce7bbcdd4a65ca7f224583ed29e7d5026b7f->leave($__internal_c924dd2ed162b23c82d76bc9d66fce7bbcdd4a65ca7f224583ed29e7d5026b7f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0da0d744b7c9d7f9beb42c9a72bcedf390e7819cafb078903169f54aa57e600d = $this->env->getExtension("native_profiler");
        $__internal_0da0d744b7c9d7f9beb42c9a72bcedf390e7819cafb078903169f54aa57e600d->enter($__internal_0da0d744b7c9d7f9beb42c9a72bcedf390e7819cafb078903169f54aa57e600d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_0da0d744b7c9d7f9beb42c9a72bcedf390e7819cafb078903169f54aa57e600d->leave($__internal_0da0d744b7c9d7f9beb42c9a72bcedf390e7819cafb078903169f54aa57e600d_prof);

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
