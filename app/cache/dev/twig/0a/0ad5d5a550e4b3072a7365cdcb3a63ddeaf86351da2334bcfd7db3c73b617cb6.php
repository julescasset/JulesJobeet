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
        $__internal_dfbf320d11403e6efe4460935181c7ee1b432237c6fb88f28f2748ab0c59575a = $this->env->getExtension("native_profiler");
        $__internal_dfbf320d11403e6efe4460935181c7ee1b432237c6fb88f28f2748ab0c59575a->enter($__internal_dfbf320d11403e6efe4460935181c7ee1b432237c6fb88f28f2748ab0c59575a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dfbf320d11403e6efe4460935181c7ee1b432237c6fb88f28f2748ab0c59575a->leave($__internal_dfbf320d11403e6efe4460935181c7ee1b432237c6fb88f28f2748ab0c59575a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2e196a6c0f406fa7cc0bc15fd4e64028e7f27813e61f0b0759dac9779ea03554 = $this->env->getExtension("native_profiler");
        $__internal_2e196a6c0f406fa7cc0bc15fd4e64028e7f27813e61f0b0759dac9779ea03554->enter($__internal_2e196a6c0f406fa7cc0bc15fd4e64028e7f27813e61f0b0759dac9779ea03554_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_2e196a6c0f406fa7cc0bc15fd4e64028e7f27813e61f0b0759dac9779ea03554->leave($__internal_2e196a6c0f406fa7cc0bc15fd4e64028e7f27813e61f0b0759dac9779ea03554_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_df349f8a8d20b884f2e9c6d6030da449482a5a6fa06646a051bdd06dde4e1cc5 = $this->env->getExtension("native_profiler");
        $__internal_df349f8a8d20b884f2e9c6d6030da449482a5a6fa06646a051bdd06dde4e1cc5->enter($__internal_df349f8a8d20b884f2e9c6d6030da449482a5a6fa06646a051bdd06dde4e1cc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_df349f8a8d20b884f2e9c6d6030da449482a5a6fa06646a051bdd06dde4e1cc5->leave($__internal_df349f8a8d20b884f2e9c6d6030da449482a5a6fa06646a051bdd06dde4e1cc5_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_66d07dd4daa3c4c50d73c7ab64e7c050105ebf0aed5e7ecfb38aba28079fd768 = $this->env->getExtension("native_profiler");
        $__internal_66d07dd4daa3c4c50d73c7ab64e7c050105ebf0aed5e7ecfb38aba28079fd768->enter($__internal_66d07dd4daa3c4c50d73c7ab64e7c050105ebf0aed5e7ecfb38aba28079fd768_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_66d07dd4daa3c4c50d73c7ab64e7c050105ebf0aed5e7ecfb38aba28079fd768->leave($__internal_66d07dd4daa3c4c50d73c7ab64e7c050105ebf0aed5e7ecfb38aba28079fd768_prof);

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
