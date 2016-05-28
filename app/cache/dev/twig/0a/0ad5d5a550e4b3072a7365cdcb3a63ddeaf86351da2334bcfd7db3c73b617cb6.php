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
        $__internal_c282cbe6613a79c54eaec0dae27a6c2dcbfd24cce8963d40375e6791d96b4203 = $this->env->getExtension("native_profiler");
        $__internal_c282cbe6613a79c54eaec0dae27a6c2dcbfd24cce8963d40375e6791d96b4203->enter($__internal_c282cbe6613a79c54eaec0dae27a6c2dcbfd24cce8963d40375e6791d96b4203_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c282cbe6613a79c54eaec0dae27a6c2dcbfd24cce8963d40375e6791d96b4203->leave($__internal_c282cbe6613a79c54eaec0dae27a6c2dcbfd24cce8963d40375e6791d96b4203_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ac59d0eae40daaad858eab22397d97a7bcd2425124646afa1f89c28a4a7a12ad = $this->env->getExtension("native_profiler");
        $__internal_ac59d0eae40daaad858eab22397d97a7bcd2425124646afa1f89c28a4a7a12ad->enter($__internal_ac59d0eae40daaad858eab22397d97a7bcd2425124646afa1f89c28a4a7a12ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ac59d0eae40daaad858eab22397d97a7bcd2425124646afa1f89c28a4a7a12ad->leave($__internal_ac59d0eae40daaad858eab22397d97a7bcd2425124646afa1f89c28a4a7a12ad_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1d88ffa502908d5f58b2307ed5cedc1c4cf2b98ed2cfe77a53a0d03dab369607 = $this->env->getExtension("native_profiler");
        $__internal_1d88ffa502908d5f58b2307ed5cedc1c4cf2b98ed2cfe77a53a0d03dab369607->enter($__internal_1d88ffa502908d5f58b2307ed5cedc1c4cf2b98ed2cfe77a53a0d03dab369607_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_1d88ffa502908d5f58b2307ed5cedc1c4cf2b98ed2cfe77a53a0d03dab369607->leave($__internal_1d88ffa502908d5f58b2307ed5cedc1c4cf2b98ed2cfe77a53a0d03dab369607_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_118ed2245a2a33f04be4940bef8cc156450d72583a1bc04e11e467e13ceaf2f2 = $this->env->getExtension("native_profiler");
        $__internal_118ed2245a2a33f04be4940bef8cc156450d72583a1bc04e11e467e13ceaf2f2->enter($__internal_118ed2245a2a33f04be4940bef8cc156450d72583a1bc04e11e467e13ceaf2f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_118ed2245a2a33f04be4940bef8cc156450d72583a1bc04e11e467e13ceaf2f2->leave($__internal_118ed2245a2a33f04be4940bef8cc156450d72583a1bc04e11e467e13ceaf2f2_prof);

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
