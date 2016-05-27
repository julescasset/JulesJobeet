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
        $__internal_00fea7afd99e42375700f02876434f3f4b577d15c757bd59ab898dd0027deb96 = $this->env->getExtension("native_profiler");
        $__internal_00fea7afd99e42375700f02876434f3f4b577d15c757bd59ab898dd0027deb96->enter($__internal_00fea7afd99e42375700f02876434f3f4b577d15c757bd59ab898dd0027deb96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_00fea7afd99e42375700f02876434f3f4b577d15c757bd59ab898dd0027deb96->leave($__internal_00fea7afd99e42375700f02876434f3f4b577d15c757bd59ab898dd0027deb96_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f1c4213bba0fb1357b77d31819ce685742695a8ce169c69b9feb628c47634f37 = $this->env->getExtension("native_profiler");
        $__internal_f1c4213bba0fb1357b77d31819ce685742695a8ce169c69b9feb628c47634f37->enter($__internal_f1c4213bba0fb1357b77d31819ce685742695a8ce169c69b9feb628c47634f37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_f1c4213bba0fb1357b77d31819ce685742695a8ce169c69b9feb628c47634f37->leave($__internal_f1c4213bba0fb1357b77d31819ce685742695a8ce169c69b9feb628c47634f37_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3a0af2f2769d46f5a6533ca70367e5c9ee11e3e9e13c56101854564b0290054f = $this->env->getExtension("native_profiler");
        $__internal_3a0af2f2769d46f5a6533ca70367e5c9ee11e3e9e13c56101854564b0290054f->enter($__internal_3a0af2f2769d46f5a6533ca70367e5c9ee11e3e9e13c56101854564b0290054f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_3a0af2f2769d46f5a6533ca70367e5c9ee11e3e9e13c56101854564b0290054f->leave($__internal_3a0af2f2769d46f5a6533ca70367e5c9ee11e3e9e13c56101854564b0290054f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2ef05aded00921959e0b42d7102900aea09d09d57c473d0482dce7ef455d50de = $this->env->getExtension("native_profiler");
        $__internal_2ef05aded00921959e0b42d7102900aea09d09d57c473d0482dce7ef455d50de->enter($__internal_2ef05aded00921959e0b42d7102900aea09d09d57c473d0482dce7ef455d50de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_2ef05aded00921959e0b42d7102900aea09d09d57c473d0482dce7ef455d50de->leave($__internal_2ef05aded00921959e0b42d7102900aea09d09d57c473d0482dce7ef455d50de_prof);

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
