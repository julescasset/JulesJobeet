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
        $__internal_f853a3e076c52c6c2eea45d318d1a933bc905aa95831e318513c4bcd15f4afce = $this->env->getExtension("native_profiler");
        $__internal_f853a3e076c52c6c2eea45d318d1a933bc905aa95831e318513c4bcd15f4afce->enter($__internal_f853a3e076c52c6c2eea45d318d1a933bc905aa95831e318513c4bcd15f4afce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f853a3e076c52c6c2eea45d318d1a933bc905aa95831e318513c4bcd15f4afce->leave($__internal_f853a3e076c52c6c2eea45d318d1a933bc905aa95831e318513c4bcd15f4afce_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_1dfc492088a93fe59fef270d5bde1727e30a00342e280b69dc3d49f4e158e278 = $this->env->getExtension("native_profiler");
        $__internal_1dfc492088a93fe59fef270d5bde1727e30a00342e280b69dc3d49f4e158e278->enter($__internal_1dfc492088a93fe59fef270d5bde1727e30a00342e280b69dc3d49f4e158e278_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_1dfc492088a93fe59fef270d5bde1727e30a00342e280b69dc3d49f4e158e278->leave($__internal_1dfc492088a93fe59fef270d5bde1727e30a00342e280b69dc3d49f4e158e278_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ab10066052d4b669d088b8d0cb32ac254621ba58ac6378129893cf34af12e03c = $this->env->getExtension("native_profiler");
        $__internal_ab10066052d4b669d088b8d0cb32ac254621ba58ac6378129893cf34af12e03c->enter($__internal_ab10066052d4b669d088b8d0cb32ac254621ba58ac6378129893cf34af12e03c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ab10066052d4b669d088b8d0cb32ac254621ba58ac6378129893cf34af12e03c->leave($__internal_ab10066052d4b669d088b8d0cb32ac254621ba58ac6378129893cf34af12e03c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e427b3f49d9ad727a5c4450d7ac466cd1d9d2a82348683fab0b4419eab34ae68 = $this->env->getExtension("native_profiler");
        $__internal_e427b3f49d9ad727a5c4450d7ac466cd1d9d2a82348683fab0b4419eab34ae68->enter($__internal_e427b3f49d9ad727a5c4450d7ac466cd1d9d2a82348683fab0b4419eab34ae68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_e427b3f49d9ad727a5c4450d7ac466cd1d9d2a82348683fab0b4419eab34ae68->leave($__internal_e427b3f49d9ad727a5c4450d7ac466cd1d9d2a82348683fab0b4419eab34ae68_prof);

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
