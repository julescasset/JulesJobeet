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
        $__internal_53138546c1db0dc614559fc8724afff261ed5eab8318a5c8c38573b6d62b5b86 = $this->env->getExtension("native_profiler");
        $__internal_53138546c1db0dc614559fc8724afff261ed5eab8318a5c8c38573b6d62b5b86->enter($__internal_53138546c1db0dc614559fc8724afff261ed5eab8318a5c8c38573b6d62b5b86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_53138546c1db0dc614559fc8724afff261ed5eab8318a5c8c38573b6d62b5b86->leave($__internal_53138546c1db0dc614559fc8724afff261ed5eab8318a5c8c38573b6d62b5b86_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_884e54e36f3928feb43430fb23ddffcce4829a73cc1307847cd2ca4a00216960 = $this->env->getExtension("native_profiler");
        $__internal_884e54e36f3928feb43430fb23ddffcce4829a73cc1307847cd2ca4a00216960->enter($__internal_884e54e36f3928feb43430fb23ddffcce4829a73cc1307847cd2ca4a00216960_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_884e54e36f3928feb43430fb23ddffcce4829a73cc1307847cd2ca4a00216960->leave($__internal_884e54e36f3928feb43430fb23ddffcce4829a73cc1307847cd2ca4a00216960_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c32a37c165a904b22524b9784a52ed8077acf16b556e59b62658be24213cb79d = $this->env->getExtension("native_profiler");
        $__internal_c32a37c165a904b22524b9784a52ed8077acf16b556e59b62658be24213cb79d->enter($__internal_c32a37c165a904b22524b9784a52ed8077acf16b556e59b62658be24213cb79d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c32a37c165a904b22524b9784a52ed8077acf16b556e59b62658be24213cb79d->leave($__internal_c32a37c165a904b22524b9784a52ed8077acf16b556e59b62658be24213cb79d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4ca9bb7cd841f8d851ff5bab62e5d62c25a7156eab8c179d0bf68d2fa222a3c0 = $this->env->getExtension("native_profiler");
        $__internal_4ca9bb7cd841f8d851ff5bab62e5d62c25a7156eab8c179d0bf68d2fa222a3c0->enter($__internal_4ca9bb7cd841f8d851ff5bab62e5d62c25a7156eab8c179d0bf68d2fa222a3c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_4ca9bb7cd841f8d851ff5bab62e5d62c25a7156eab8c179d0bf68d2fa222a3c0->leave($__internal_4ca9bb7cd841f8d851ff5bab62e5d62c25a7156eab8c179d0bf68d2fa222a3c0_prof);

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
