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
        $__internal_e95c0685d0d52e9df0362bb3ac747e8c800c10fbaf7b3bad16a602a2f11a92ab = $this->env->getExtension("native_profiler");
        $__internal_e95c0685d0d52e9df0362bb3ac747e8c800c10fbaf7b3bad16a602a2f11a92ab->enter($__internal_e95c0685d0d52e9df0362bb3ac747e8c800c10fbaf7b3bad16a602a2f11a92ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e95c0685d0d52e9df0362bb3ac747e8c800c10fbaf7b3bad16a602a2f11a92ab->leave($__internal_e95c0685d0d52e9df0362bb3ac747e8c800c10fbaf7b3bad16a602a2f11a92ab_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ac5ca60c6abc502df4ecb9b9e8a7cf20ac11e0ded731ba2385a966908249411e = $this->env->getExtension("native_profiler");
        $__internal_ac5ca60c6abc502df4ecb9b9e8a7cf20ac11e0ded731ba2385a966908249411e->enter($__internal_ac5ca60c6abc502df4ecb9b9e8a7cf20ac11e0ded731ba2385a966908249411e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ac5ca60c6abc502df4ecb9b9e8a7cf20ac11e0ded731ba2385a966908249411e->leave($__internal_ac5ca60c6abc502df4ecb9b9e8a7cf20ac11e0ded731ba2385a966908249411e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b79fb631b3ccef0bd4bc43ce645c10020a735e9aee512fdc2dc972a8d85cfab2 = $this->env->getExtension("native_profiler");
        $__internal_b79fb631b3ccef0bd4bc43ce645c10020a735e9aee512fdc2dc972a8d85cfab2->enter($__internal_b79fb631b3ccef0bd4bc43ce645c10020a735e9aee512fdc2dc972a8d85cfab2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b79fb631b3ccef0bd4bc43ce645c10020a735e9aee512fdc2dc972a8d85cfab2->leave($__internal_b79fb631b3ccef0bd4bc43ce645c10020a735e9aee512fdc2dc972a8d85cfab2_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1401395b7f316980bbbd4d0142f8ac5e23d3fab6f5386cf47bfe8dba03ae4da1 = $this->env->getExtension("native_profiler");
        $__internal_1401395b7f316980bbbd4d0142f8ac5e23d3fab6f5386cf47bfe8dba03ae4da1->enter($__internal_1401395b7f316980bbbd4d0142f8ac5e23d3fab6f5386cf47bfe8dba03ae4da1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_1401395b7f316980bbbd4d0142f8ac5e23d3fab6f5386cf47bfe8dba03ae4da1->leave($__internal_1401395b7f316980bbbd4d0142f8ac5e23d3fab6f5386cf47bfe8dba03ae4da1_prof);

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
