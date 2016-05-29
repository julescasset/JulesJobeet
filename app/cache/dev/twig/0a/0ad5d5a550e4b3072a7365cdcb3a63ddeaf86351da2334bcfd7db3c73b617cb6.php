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
        $__internal_13c8058db98610a25e5dfc2127e6c44ba5338084c82684b8ac7da99d05cef2ea = $this->env->getExtension("native_profiler");
        $__internal_13c8058db98610a25e5dfc2127e6c44ba5338084c82684b8ac7da99d05cef2ea->enter($__internal_13c8058db98610a25e5dfc2127e6c44ba5338084c82684b8ac7da99d05cef2ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_13c8058db98610a25e5dfc2127e6c44ba5338084c82684b8ac7da99d05cef2ea->leave($__internal_13c8058db98610a25e5dfc2127e6c44ba5338084c82684b8ac7da99d05cef2ea_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8537f19f38d8214aecc23edaaf1f3548fe1b532a8ec71e0dec20ee96903598a8 = $this->env->getExtension("native_profiler");
        $__internal_8537f19f38d8214aecc23edaaf1f3548fe1b532a8ec71e0dec20ee96903598a8->enter($__internal_8537f19f38d8214aecc23edaaf1f3548fe1b532a8ec71e0dec20ee96903598a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_8537f19f38d8214aecc23edaaf1f3548fe1b532a8ec71e0dec20ee96903598a8->leave($__internal_8537f19f38d8214aecc23edaaf1f3548fe1b532a8ec71e0dec20ee96903598a8_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_40bfa33f6b91d3372acb5d7df0ab8650e47dc7f75e3c18706f00dc0d4e877a46 = $this->env->getExtension("native_profiler");
        $__internal_40bfa33f6b91d3372acb5d7df0ab8650e47dc7f75e3c18706f00dc0d4e877a46->enter($__internal_40bfa33f6b91d3372acb5d7df0ab8650e47dc7f75e3c18706f00dc0d4e877a46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_40bfa33f6b91d3372acb5d7df0ab8650e47dc7f75e3c18706f00dc0d4e877a46->leave($__internal_40bfa33f6b91d3372acb5d7df0ab8650e47dc7f75e3c18706f00dc0d4e877a46_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_66d096acbcd45dc3062cfca473c89ae54b9c33cbe4b3ac9dbc7dbf4df9eab617 = $this->env->getExtension("native_profiler");
        $__internal_66d096acbcd45dc3062cfca473c89ae54b9c33cbe4b3ac9dbc7dbf4df9eab617->enter($__internal_66d096acbcd45dc3062cfca473c89ae54b9c33cbe4b3ac9dbc7dbf4df9eab617_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_66d096acbcd45dc3062cfca473c89ae54b9c33cbe4b3ac9dbc7dbf4df9eab617->leave($__internal_66d096acbcd45dc3062cfca473c89ae54b9c33cbe4b3ac9dbc7dbf4df9eab617_prof);

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
