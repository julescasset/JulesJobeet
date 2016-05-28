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
        $__internal_fa872e0535c8d6eed8bd78d544648042309d35c95b23f9142395b2e6f23e5be3 = $this->env->getExtension("native_profiler");
        $__internal_fa872e0535c8d6eed8bd78d544648042309d35c95b23f9142395b2e6f23e5be3->enter($__internal_fa872e0535c8d6eed8bd78d544648042309d35c95b23f9142395b2e6f23e5be3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fa872e0535c8d6eed8bd78d544648042309d35c95b23f9142395b2e6f23e5be3->leave($__internal_fa872e0535c8d6eed8bd78d544648042309d35c95b23f9142395b2e6f23e5be3_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_72fdb1f4c9d8f1700901b52a2abeafadeec5a1f83b89cdb09829d51bc11dc687 = $this->env->getExtension("native_profiler");
        $__internal_72fdb1f4c9d8f1700901b52a2abeafadeec5a1f83b89cdb09829d51bc11dc687->enter($__internal_72fdb1f4c9d8f1700901b52a2abeafadeec5a1f83b89cdb09829d51bc11dc687_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_72fdb1f4c9d8f1700901b52a2abeafadeec5a1f83b89cdb09829d51bc11dc687->leave($__internal_72fdb1f4c9d8f1700901b52a2abeafadeec5a1f83b89cdb09829d51bc11dc687_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_96f4e36bcff5d972084c8490417dfee64f19e16edbe778d6ed7211d66d1c128b = $this->env->getExtension("native_profiler");
        $__internal_96f4e36bcff5d972084c8490417dfee64f19e16edbe778d6ed7211d66d1c128b->enter($__internal_96f4e36bcff5d972084c8490417dfee64f19e16edbe778d6ed7211d66d1c128b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_96f4e36bcff5d972084c8490417dfee64f19e16edbe778d6ed7211d66d1c128b->leave($__internal_96f4e36bcff5d972084c8490417dfee64f19e16edbe778d6ed7211d66d1c128b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8c9484b79b942a14c8189b1118d74d3e25716db673bf6dcb182218f139063824 = $this->env->getExtension("native_profiler");
        $__internal_8c9484b79b942a14c8189b1118d74d3e25716db673bf6dcb182218f139063824->enter($__internal_8c9484b79b942a14c8189b1118d74d3e25716db673bf6dcb182218f139063824_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_8c9484b79b942a14c8189b1118d74d3e25716db673bf6dcb182218f139063824->leave($__internal_8c9484b79b942a14c8189b1118d74d3e25716db673bf6dcb182218f139063824_prof);

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
