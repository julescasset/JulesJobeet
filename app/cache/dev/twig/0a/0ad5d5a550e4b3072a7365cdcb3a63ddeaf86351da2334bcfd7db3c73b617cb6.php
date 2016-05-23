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
        $__internal_794abf27000fe51393538fb4b99b2f9e877ce9d84622482b488ab0ff7ee25167 = $this->env->getExtension("native_profiler");
        $__internal_794abf27000fe51393538fb4b99b2f9e877ce9d84622482b488ab0ff7ee25167->enter($__internal_794abf27000fe51393538fb4b99b2f9e877ce9d84622482b488ab0ff7ee25167_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_794abf27000fe51393538fb4b99b2f9e877ce9d84622482b488ab0ff7ee25167->leave($__internal_794abf27000fe51393538fb4b99b2f9e877ce9d84622482b488ab0ff7ee25167_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_da8d4ee1f79e7f4071cb287b2d1ffcfae6a14354ed9260a1e44d530370a9678b = $this->env->getExtension("native_profiler");
        $__internal_da8d4ee1f79e7f4071cb287b2d1ffcfae6a14354ed9260a1e44d530370a9678b->enter($__internal_da8d4ee1f79e7f4071cb287b2d1ffcfae6a14354ed9260a1e44d530370a9678b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_da8d4ee1f79e7f4071cb287b2d1ffcfae6a14354ed9260a1e44d530370a9678b->leave($__internal_da8d4ee1f79e7f4071cb287b2d1ffcfae6a14354ed9260a1e44d530370a9678b_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b8c404e8990270f8737e9d24424c97a9d8c53af326c5876451695e4c59149e0d = $this->env->getExtension("native_profiler");
        $__internal_b8c404e8990270f8737e9d24424c97a9d8c53af326c5876451695e4c59149e0d->enter($__internal_b8c404e8990270f8737e9d24424c97a9d8c53af326c5876451695e4c59149e0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b8c404e8990270f8737e9d24424c97a9d8c53af326c5876451695e4c59149e0d->leave($__internal_b8c404e8990270f8737e9d24424c97a9d8c53af326c5876451695e4c59149e0d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_03d98c3329237cc1ac16dcda7c701ae3256590747ed9b757346ab06b704111dc = $this->env->getExtension("native_profiler");
        $__internal_03d98c3329237cc1ac16dcda7c701ae3256590747ed9b757346ab06b704111dc->enter($__internal_03d98c3329237cc1ac16dcda7c701ae3256590747ed9b757346ab06b704111dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_03d98c3329237cc1ac16dcda7c701ae3256590747ed9b757346ab06b704111dc->leave($__internal_03d98c3329237cc1ac16dcda7c701ae3256590747ed9b757346ab06b704111dc_prof);

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
