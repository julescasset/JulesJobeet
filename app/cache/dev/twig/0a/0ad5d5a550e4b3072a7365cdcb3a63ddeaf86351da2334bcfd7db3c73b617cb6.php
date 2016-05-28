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
        $__internal_f9aaa704705ea2f4f2aca65157d459f97b7af14e176fcaddf99b6c811f7222d3 = $this->env->getExtension("native_profiler");
        $__internal_f9aaa704705ea2f4f2aca65157d459f97b7af14e176fcaddf99b6c811f7222d3->enter($__internal_f9aaa704705ea2f4f2aca65157d459f97b7af14e176fcaddf99b6c811f7222d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f9aaa704705ea2f4f2aca65157d459f97b7af14e176fcaddf99b6c811f7222d3->leave($__internal_f9aaa704705ea2f4f2aca65157d459f97b7af14e176fcaddf99b6c811f7222d3_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f5219168c45ff62fe2c2ff9faabd913257885317db9f8119c31592d768b90f10 = $this->env->getExtension("native_profiler");
        $__internal_f5219168c45ff62fe2c2ff9faabd913257885317db9f8119c31592d768b90f10->enter($__internal_f5219168c45ff62fe2c2ff9faabd913257885317db9f8119c31592d768b90f10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f5219168c45ff62fe2c2ff9faabd913257885317db9f8119c31592d768b90f10->leave($__internal_f5219168c45ff62fe2c2ff9faabd913257885317db9f8119c31592d768b90f10_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_84c6f1cea22d7e846ffda54552ea3ea5ef5cecac52a19944bcb90a6d85cf1b52 = $this->env->getExtension("native_profiler");
        $__internal_84c6f1cea22d7e846ffda54552ea3ea5ef5cecac52a19944bcb90a6d85cf1b52->enter($__internal_84c6f1cea22d7e846ffda54552ea3ea5ef5cecac52a19944bcb90a6d85cf1b52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_84c6f1cea22d7e846ffda54552ea3ea5ef5cecac52a19944bcb90a6d85cf1b52->leave($__internal_84c6f1cea22d7e846ffda54552ea3ea5ef5cecac52a19944bcb90a6d85cf1b52_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9bf6f105d42e62fa1a1cbc1e986800189f8341ef918b0d6534640c212d210271 = $this->env->getExtension("native_profiler");
        $__internal_9bf6f105d42e62fa1a1cbc1e986800189f8341ef918b0d6534640c212d210271->enter($__internal_9bf6f105d42e62fa1a1cbc1e986800189f8341ef918b0d6534640c212d210271_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_9bf6f105d42e62fa1a1cbc1e986800189f8341ef918b0d6534640c212d210271->leave($__internal_9bf6f105d42e62fa1a1cbc1e986800189f8341ef918b0d6534640c212d210271_prof);

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
