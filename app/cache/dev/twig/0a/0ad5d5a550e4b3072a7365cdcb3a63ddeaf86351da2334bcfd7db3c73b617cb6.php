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
        $__internal_ed292cb824011f5e7a25fce0f1174f149900d5b928726f48ec311a4bfdbe50a8 = $this->env->getExtension("native_profiler");
        $__internal_ed292cb824011f5e7a25fce0f1174f149900d5b928726f48ec311a4bfdbe50a8->enter($__internal_ed292cb824011f5e7a25fce0f1174f149900d5b928726f48ec311a4bfdbe50a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ed292cb824011f5e7a25fce0f1174f149900d5b928726f48ec311a4bfdbe50a8->leave($__internal_ed292cb824011f5e7a25fce0f1174f149900d5b928726f48ec311a4bfdbe50a8_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_42861a3ae63cee22723e7bccfefa3e180fd08e6c5f33148c8ef2aaef854d5caf = $this->env->getExtension("native_profiler");
        $__internal_42861a3ae63cee22723e7bccfefa3e180fd08e6c5f33148c8ef2aaef854d5caf->enter($__internal_42861a3ae63cee22723e7bccfefa3e180fd08e6c5f33148c8ef2aaef854d5caf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_42861a3ae63cee22723e7bccfefa3e180fd08e6c5f33148c8ef2aaef854d5caf->leave($__internal_42861a3ae63cee22723e7bccfefa3e180fd08e6c5f33148c8ef2aaef854d5caf_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7ae8db7d4266b9bb948771b9842a72fbd69fa49320a82c4e539d311ea5741cf0 = $this->env->getExtension("native_profiler");
        $__internal_7ae8db7d4266b9bb948771b9842a72fbd69fa49320a82c4e539d311ea5741cf0->enter($__internal_7ae8db7d4266b9bb948771b9842a72fbd69fa49320a82c4e539d311ea5741cf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_7ae8db7d4266b9bb948771b9842a72fbd69fa49320a82c4e539d311ea5741cf0->leave($__internal_7ae8db7d4266b9bb948771b9842a72fbd69fa49320a82c4e539d311ea5741cf0_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b6d3cf6f83bd22efa222a02f9b1d75dc3a61130c4a460358c59f7a42f3e4a8d6 = $this->env->getExtension("native_profiler");
        $__internal_b6d3cf6f83bd22efa222a02f9b1d75dc3a61130c4a460358c59f7a42f3e4a8d6->enter($__internal_b6d3cf6f83bd22efa222a02f9b1d75dc3a61130c4a460358c59f7a42f3e4a8d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_b6d3cf6f83bd22efa222a02f9b1d75dc3a61130c4a460358c59f7a42f3e4a8d6->leave($__internal_b6d3cf6f83bd22efa222a02f9b1d75dc3a61130c4a460358c59f7a42f3e4a8d6_prof);

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
