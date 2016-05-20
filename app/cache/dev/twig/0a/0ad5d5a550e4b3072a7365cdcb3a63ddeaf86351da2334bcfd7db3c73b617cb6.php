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
        $__internal_1a07da95e1bebd6aae308e702db2aa21db602946f8137e8268f25bf0c7e568e5 = $this->env->getExtension("native_profiler");
        $__internal_1a07da95e1bebd6aae308e702db2aa21db602946f8137e8268f25bf0c7e568e5->enter($__internal_1a07da95e1bebd6aae308e702db2aa21db602946f8137e8268f25bf0c7e568e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1a07da95e1bebd6aae308e702db2aa21db602946f8137e8268f25bf0c7e568e5->leave($__internal_1a07da95e1bebd6aae308e702db2aa21db602946f8137e8268f25bf0c7e568e5_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8c3bdc73afd356f5bbc00763628889cfda7e74a81d4e5fb23a0430f144c46fd4 = $this->env->getExtension("native_profiler");
        $__internal_8c3bdc73afd356f5bbc00763628889cfda7e74a81d4e5fb23a0430f144c46fd4->enter($__internal_8c3bdc73afd356f5bbc00763628889cfda7e74a81d4e5fb23a0430f144c46fd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_8c3bdc73afd356f5bbc00763628889cfda7e74a81d4e5fb23a0430f144c46fd4->leave($__internal_8c3bdc73afd356f5bbc00763628889cfda7e74a81d4e5fb23a0430f144c46fd4_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7e7893b257772871714adc4b4e927719de189a0d36e7ff3e6938979655355e18 = $this->env->getExtension("native_profiler");
        $__internal_7e7893b257772871714adc4b4e927719de189a0d36e7ff3e6938979655355e18->enter($__internal_7e7893b257772871714adc4b4e927719de189a0d36e7ff3e6938979655355e18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_7e7893b257772871714adc4b4e927719de189a0d36e7ff3e6938979655355e18->leave($__internal_7e7893b257772871714adc4b4e927719de189a0d36e7ff3e6938979655355e18_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_bc212e3eaf03038c76b9ac054852bf68ac1ec9b2dc5d5065e98f5be4bf775619 = $this->env->getExtension("native_profiler");
        $__internal_bc212e3eaf03038c76b9ac054852bf68ac1ec9b2dc5d5065e98f5be4bf775619->enter($__internal_bc212e3eaf03038c76b9ac054852bf68ac1ec9b2dc5d5065e98f5be4bf775619_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_bc212e3eaf03038c76b9ac054852bf68ac1ec9b2dc5d5065e98f5be4bf775619->leave($__internal_bc212e3eaf03038c76b9ac054852bf68ac1ec9b2dc5d5065e98f5be4bf775619_prof);

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
