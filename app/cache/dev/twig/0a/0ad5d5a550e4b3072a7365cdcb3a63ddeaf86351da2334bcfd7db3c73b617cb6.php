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
        $__internal_7470dc5a00ee70ca82e3769e21022ce5fc6bf957e7005ca9202505771b902764 = $this->env->getExtension("native_profiler");
        $__internal_7470dc5a00ee70ca82e3769e21022ce5fc6bf957e7005ca9202505771b902764->enter($__internal_7470dc5a00ee70ca82e3769e21022ce5fc6bf957e7005ca9202505771b902764_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7470dc5a00ee70ca82e3769e21022ce5fc6bf957e7005ca9202505771b902764->leave($__internal_7470dc5a00ee70ca82e3769e21022ce5fc6bf957e7005ca9202505771b902764_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_56a48a8f5a7a7518c87db70a4514ed0c1eecf7049087675b8166cb68286ff308 = $this->env->getExtension("native_profiler");
        $__internal_56a48a8f5a7a7518c87db70a4514ed0c1eecf7049087675b8166cb68286ff308->enter($__internal_56a48a8f5a7a7518c87db70a4514ed0c1eecf7049087675b8166cb68286ff308_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_56a48a8f5a7a7518c87db70a4514ed0c1eecf7049087675b8166cb68286ff308->leave($__internal_56a48a8f5a7a7518c87db70a4514ed0c1eecf7049087675b8166cb68286ff308_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9908b47f3632c1027af80d02368d2883fb9b04878245cde364c390ee6538959e = $this->env->getExtension("native_profiler");
        $__internal_9908b47f3632c1027af80d02368d2883fb9b04878245cde364c390ee6538959e->enter($__internal_9908b47f3632c1027af80d02368d2883fb9b04878245cde364c390ee6538959e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_9908b47f3632c1027af80d02368d2883fb9b04878245cde364c390ee6538959e->leave($__internal_9908b47f3632c1027af80d02368d2883fb9b04878245cde364c390ee6538959e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3a08b3878a06af20fc44b37bc8712803044975fcf9e7505f2906820640589cfd = $this->env->getExtension("native_profiler");
        $__internal_3a08b3878a06af20fc44b37bc8712803044975fcf9e7505f2906820640589cfd->enter($__internal_3a08b3878a06af20fc44b37bc8712803044975fcf9e7505f2906820640589cfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_3a08b3878a06af20fc44b37bc8712803044975fcf9e7505f2906820640589cfd->leave($__internal_3a08b3878a06af20fc44b37bc8712803044975fcf9e7505f2906820640589cfd_prof);

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
