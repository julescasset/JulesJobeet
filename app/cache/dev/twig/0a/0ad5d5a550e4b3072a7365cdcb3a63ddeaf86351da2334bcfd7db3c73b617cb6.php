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
        $__internal_a302501b04278c95208809e54ccbac8f89115f7d2da347ed59bfff2dd5b14b42 = $this->env->getExtension("native_profiler");
        $__internal_a302501b04278c95208809e54ccbac8f89115f7d2da347ed59bfff2dd5b14b42->enter($__internal_a302501b04278c95208809e54ccbac8f89115f7d2da347ed59bfff2dd5b14b42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a302501b04278c95208809e54ccbac8f89115f7d2da347ed59bfff2dd5b14b42->leave($__internal_a302501b04278c95208809e54ccbac8f89115f7d2da347ed59bfff2dd5b14b42_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_78ce01aa2ee00a5da13ff03fe372608ba27d14f06cb470e09744ec2ff1d790f4 = $this->env->getExtension("native_profiler");
        $__internal_78ce01aa2ee00a5da13ff03fe372608ba27d14f06cb470e09744ec2ff1d790f4->enter($__internal_78ce01aa2ee00a5da13ff03fe372608ba27d14f06cb470e09744ec2ff1d790f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_78ce01aa2ee00a5da13ff03fe372608ba27d14f06cb470e09744ec2ff1d790f4->leave($__internal_78ce01aa2ee00a5da13ff03fe372608ba27d14f06cb470e09744ec2ff1d790f4_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3d3e3872c008807414c47978c1bce7f03fcc7210f6e84c7f447b0b0f852366b1 = $this->env->getExtension("native_profiler");
        $__internal_3d3e3872c008807414c47978c1bce7f03fcc7210f6e84c7f447b0b0f852366b1->enter($__internal_3d3e3872c008807414c47978c1bce7f03fcc7210f6e84c7f447b0b0f852366b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_3d3e3872c008807414c47978c1bce7f03fcc7210f6e84c7f447b0b0f852366b1->leave($__internal_3d3e3872c008807414c47978c1bce7f03fcc7210f6e84c7f447b0b0f852366b1_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_99f43a555b94963a4140ed58fe2c084da8f09896428af0d14f582b3878ba8c63 = $this->env->getExtension("native_profiler");
        $__internal_99f43a555b94963a4140ed58fe2c084da8f09896428af0d14f582b3878ba8c63->enter($__internal_99f43a555b94963a4140ed58fe2c084da8f09896428af0d14f582b3878ba8c63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_99f43a555b94963a4140ed58fe2c084da8f09896428af0d14f582b3878ba8c63->leave($__internal_99f43a555b94963a4140ed58fe2c084da8f09896428af0d14f582b3878ba8c63_prof);

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
