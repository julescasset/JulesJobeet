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
        $__internal_1a0b9ae2dec8bb330edc82a692ceae62f7a4cef68643a67f05fbfc104d710ab6 = $this->env->getExtension("native_profiler");
        $__internal_1a0b9ae2dec8bb330edc82a692ceae62f7a4cef68643a67f05fbfc104d710ab6->enter($__internal_1a0b9ae2dec8bb330edc82a692ceae62f7a4cef68643a67f05fbfc104d710ab6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1a0b9ae2dec8bb330edc82a692ceae62f7a4cef68643a67f05fbfc104d710ab6->leave($__internal_1a0b9ae2dec8bb330edc82a692ceae62f7a4cef68643a67f05fbfc104d710ab6_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b32ae959e94ff5d3c501a3c12c06ef48771c56f6fffed515e2d2d350da370350 = $this->env->getExtension("native_profiler");
        $__internal_b32ae959e94ff5d3c501a3c12c06ef48771c56f6fffed515e2d2d350da370350->enter($__internal_b32ae959e94ff5d3c501a3c12c06ef48771c56f6fffed515e2d2d350da370350_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b32ae959e94ff5d3c501a3c12c06ef48771c56f6fffed515e2d2d350da370350->leave($__internal_b32ae959e94ff5d3c501a3c12c06ef48771c56f6fffed515e2d2d350da370350_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_bad3828551af4e47b12b26749d206da0ae76915a2f9155ff90d5a44cfbd302e9 = $this->env->getExtension("native_profiler");
        $__internal_bad3828551af4e47b12b26749d206da0ae76915a2f9155ff90d5a44cfbd302e9->enter($__internal_bad3828551af4e47b12b26749d206da0ae76915a2f9155ff90d5a44cfbd302e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_bad3828551af4e47b12b26749d206da0ae76915a2f9155ff90d5a44cfbd302e9->leave($__internal_bad3828551af4e47b12b26749d206da0ae76915a2f9155ff90d5a44cfbd302e9_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_aec3c560b792f6b3cfd3d8a09e1d7a0a0ec4907b15a77f164955a4160322111f = $this->env->getExtension("native_profiler");
        $__internal_aec3c560b792f6b3cfd3d8a09e1d7a0a0ec4907b15a77f164955a4160322111f->enter($__internal_aec3c560b792f6b3cfd3d8a09e1d7a0a0ec4907b15a77f164955a4160322111f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_aec3c560b792f6b3cfd3d8a09e1d7a0a0ec4907b15a77f164955a4160322111f->leave($__internal_aec3c560b792f6b3cfd3d8a09e1d7a0a0ec4907b15a77f164955a4160322111f_prof);

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
