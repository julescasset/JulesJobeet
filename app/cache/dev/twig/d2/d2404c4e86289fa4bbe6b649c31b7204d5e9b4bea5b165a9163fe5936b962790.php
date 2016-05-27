<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_e53e658d81da98ca3f069318e27351a4f338bed5719cae02a860e79c1c4f0e3a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_e9a86df89d6a12448cf0a0cddeb509bf60056486e146e2bdd1c3241b0d76e2f4 = $this->env->getExtension("native_profiler");
        $__internal_e9a86df89d6a12448cf0a0cddeb509bf60056486e146e2bdd1c3241b0d76e2f4->enter($__internal_e9a86df89d6a12448cf0a0cddeb509bf60056486e146e2bdd1c3241b0d76e2f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e9a86df89d6a12448cf0a0cddeb509bf60056486e146e2bdd1c3241b0d76e2f4->leave($__internal_e9a86df89d6a12448cf0a0cddeb509bf60056486e146e2bdd1c3241b0d76e2f4_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e4060a6e574ae840e8e0e9f50a75e55fe26f38c2449fda4ebc4f8563b4018352 = $this->env->getExtension("native_profiler");
        $__internal_e4060a6e574ae840e8e0e9f50a75e55fe26f38c2449fda4ebc4f8563b4018352->enter($__internal_e4060a6e574ae840e8e0e9f50a75e55fe26f38c2449fda4ebc4f8563b4018352_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_e4060a6e574ae840e8e0e9f50a75e55fe26f38c2449fda4ebc4f8563b4018352->leave($__internal_e4060a6e574ae840e8e0e9f50a75e55fe26f38c2449fda4ebc4f8563b4018352_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_688538410d8b4df5ab278df3b0e482d6dd014891b4c3fb6ef8dceef72eb0bee5 = $this->env->getExtension("native_profiler");
        $__internal_688538410d8b4df5ab278df3b0e482d6dd014891b4c3fb6ef8dceef72eb0bee5->enter($__internal_688538410d8b4df5ab278df3b0e482d6dd014891b4c3fb6ef8dceef72eb0bee5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_688538410d8b4df5ab278df3b0e482d6dd014891b4c3fb6ef8dceef72eb0bee5->leave($__internal_688538410d8b4df5ab278df3b0e482d6dd014891b4c3fb6ef8dceef72eb0bee5_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3dae30a16b4d23dd4097527e9230441475ed8796249b407910b0990156b7fad7 = $this->env->getExtension("native_profiler");
        $__internal_3dae30a16b4d23dd4097527e9230441475ed8796249b407910b0990156b7fad7->enter($__internal_3dae30a16b4d23dd4097527e9230441475ed8796249b407910b0990156b7fad7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_3dae30a16b4d23dd4097527e9230441475ed8796249b407910b0990156b7fad7->leave($__internal_3dae30a16b4d23dd4097527e9230441475ed8796249b407910b0990156b7fad7_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
