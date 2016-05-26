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
        $__internal_407baf65f68c626fbcfcbee82ad66041c902d468e4e0e47d942ebda31e0cd07c = $this->env->getExtension("native_profiler");
        $__internal_407baf65f68c626fbcfcbee82ad66041c902d468e4e0e47d942ebda31e0cd07c->enter($__internal_407baf65f68c626fbcfcbee82ad66041c902d468e4e0e47d942ebda31e0cd07c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_407baf65f68c626fbcfcbee82ad66041c902d468e4e0e47d942ebda31e0cd07c->leave($__internal_407baf65f68c626fbcfcbee82ad66041c902d468e4e0e47d942ebda31e0cd07c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d092916bac0358c9b86f38a352513bc7a7b5a7d64ae9041597e48e93144d17d1 = $this->env->getExtension("native_profiler");
        $__internal_d092916bac0358c9b86f38a352513bc7a7b5a7d64ae9041597e48e93144d17d1->enter($__internal_d092916bac0358c9b86f38a352513bc7a7b5a7d64ae9041597e48e93144d17d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_d092916bac0358c9b86f38a352513bc7a7b5a7d64ae9041597e48e93144d17d1->leave($__internal_d092916bac0358c9b86f38a352513bc7a7b5a7d64ae9041597e48e93144d17d1_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c6a88f984ebe1ef3e8916ef8f1db809c163d65e6d72dcc7a4a1d5318cb6a0961 = $this->env->getExtension("native_profiler");
        $__internal_c6a88f984ebe1ef3e8916ef8f1db809c163d65e6d72dcc7a4a1d5318cb6a0961->enter($__internal_c6a88f984ebe1ef3e8916ef8f1db809c163d65e6d72dcc7a4a1d5318cb6a0961_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c6a88f984ebe1ef3e8916ef8f1db809c163d65e6d72dcc7a4a1d5318cb6a0961->leave($__internal_c6a88f984ebe1ef3e8916ef8f1db809c163d65e6d72dcc7a4a1d5318cb6a0961_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_304b3bc6b73a2c54afe2febee4cdd6e33a68cfefdba6c44124ef6e83d0cdca52 = $this->env->getExtension("native_profiler");
        $__internal_304b3bc6b73a2c54afe2febee4cdd6e33a68cfefdba6c44124ef6e83d0cdca52->enter($__internal_304b3bc6b73a2c54afe2febee4cdd6e33a68cfefdba6c44124ef6e83d0cdca52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_304b3bc6b73a2c54afe2febee4cdd6e33a68cfefdba6c44124ef6e83d0cdca52->leave($__internal_304b3bc6b73a2c54afe2febee4cdd6e33a68cfefdba6c44124ef6e83d0cdca52_prof);

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
