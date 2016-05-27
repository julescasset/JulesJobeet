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
        $__internal_7d21b792dda3f0c1c2a1e0124f09c5b8c7d02ffa207e0b844e13767faaccbb9f = $this->env->getExtension("native_profiler");
        $__internal_7d21b792dda3f0c1c2a1e0124f09c5b8c7d02ffa207e0b844e13767faaccbb9f->enter($__internal_7d21b792dda3f0c1c2a1e0124f09c5b8c7d02ffa207e0b844e13767faaccbb9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7d21b792dda3f0c1c2a1e0124f09c5b8c7d02ffa207e0b844e13767faaccbb9f->leave($__internal_7d21b792dda3f0c1c2a1e0124f09c5b8c7d02ffa207e0b844e13767faaccbb9f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_bc625c1e4c0e5e1746632746a71bc6e0a5c33af2013aec3da8f9df232d563fba = $this->env->getExtension("native_profiler");
        $__internal_bc625c1e4c0e5e1746632746a71bc6e0a5c33af2013aec3da8f9df232d563fba->enter($__internal_bc625c1e4c0e5e1746632746a71bc6e0a5c33af2013aec3da8f9df232d563fba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_bc625c1e4c0e5e1746632746a71bc6e0a5c33af2013aec3da8f9df232d563fba->leave($__internal_bc625c1e4c0e5e1746632746a71bc6e0a5c33af2013aec3da8f9df232d563fba_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_270c55d107a411e5422106eebd370195b3ee73382997529f99a75d289d8eebcf = $this->env->getExtension("native_profiler");
        $__internal_270c55d107a411e5422106eebd370195b3ee73382997529f99a75d289d8eebcf->enter($__internal_270c55d107a411e5422106eebd370195b3ee73382997529f99a75d289d8eebcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_270c55d107a411e5422106eebd370195b3ee73382997529f99a75d289d8eebcf->leave($__internal_270c55d107a411e5422106eebd370195b3ee73382997529f99a75d289d8eebcf_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_65607abbb2a8a3b738b51fc72a5f0470039e77aeac08a4ddc364d2ce610af22a = $this->env->getExtension("native_profiler");
        $__internal_65607abbb2a8a3b738b51fc72a5f0470039e77aeac08a4ddc364d2ce610af22a->enter($__internal_65607abbb2a8a3b738b51fc72a5f0470039e77aeac08a4ddc364d2ce610af22a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_65607abbb2a8a3b738b51fc72a5f0470039e77aeac08a4ddc364d2ce610af22a->leave($__internal_65607abbb2a8a3b738b51fc72a5f0470039e77aeac08a4ddc364d2ce610af22a_prof);

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
