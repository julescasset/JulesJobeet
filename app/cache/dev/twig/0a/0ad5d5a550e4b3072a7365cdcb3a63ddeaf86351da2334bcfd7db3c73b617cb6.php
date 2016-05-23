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
        $__internal_8ba9af9bc258e1b2c37e2f2adf211e7197496dcc798b0f219229930ead0e6ee2 = $this->env->getExtension("native_profiler");
        $__internal_8ba9af9bc258e1b2c37e2f2adf211e7197496dcc798b0f219229930ead0e6ee2->enter($__internal_8ba9af9bc258e1b2c37e2f2adf211e7197496dcc798b0f219229930ead0e6ee2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8ba9af9bc258e1b2c37e2f2adf211e7197496dcc798b0f219229930ead0e6ee2->leave($__internal_8ba9af9bc258e1b2c37e2f2adf211e7197496dcc798b0f219229930ead0e6ee2_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_bc43c114edf38dcd14ab84be923d197d72d27caea25408671c8494d641da894d = $this->env->getExtension("native_profiler");
        $__internal_bc43c114edf38dcd14ab84be923d197d72d27caea25408671c8494d641da894d->enter($__internal_bc43c114edf38dcd14ab84be923d197d72d27caea25408671c8494d641da894d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_bc43c114edf38dcd14ab84be923d197d72d27caea25408671c8494d641da894d->leave($__internal_bc43c114edf38dcd14ab84be923d197d72d27caea25408671c8494d641da894d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1f8e14855b19b58cabd37303d6d43dd16fb4db45ddeef2270f47920d5f73316c = $this->env->getExtension("native_profiler");
        $__internal_1f8e14855b19b58cabd37303d6d43dd16fb4db45ddeef2270f47920d5f73316c->enter($__internal_1f8e14855b19b58cabd37303d6d43dd16fb4db45ddeef2270f47920d5f73316c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_1f8e14855b19b58cabd37303d6d43dd16fb4db45ddeef2270f47920d5f73316c->leave($__internal_1f8e14855b19b58cabd37303d6d43dd16fb4db45ddeef2270f47920d5f73316c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3348d6958f3bf9369a1578c9fb3c8fc655485532df2e9463e81a516dd3efcc95 = $this->env->getExtension("native_profiler");
        $__internal_3348d6958f3bf9369a1578c9fb3c8fc655485532df2e9463e81a516dd3efcc95->enter($__internal_3348d6958f3bf9369a1578c9fb3c8fc655485532df2e9463e81a516dd3efcc95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_3348d6958f3bf9369a1578c9fb3c8fc655485532df2e9463e81a516dd3efcc95->leave($__internal_3348d6958f3bf9369a1578c9fb3c8fc655485532df2e9463e81a516dd3efcc95_prof);

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
