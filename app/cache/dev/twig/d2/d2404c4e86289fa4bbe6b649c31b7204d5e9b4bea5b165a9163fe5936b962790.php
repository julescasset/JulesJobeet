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
        $__internal_a2a8e28516141d9b323734341178a976c7aa9fa0d92631385d7d49055ffbe014 = $this->env->getExtension("native_profiler");
        $__internal_a2a8e28516141d9b323734341178a976c7aa9fa0d92631385d7d49055ffbe014->enter($__internal_a2a8e28516141d9b323734341178a976c7aa9fa0d92631385d7d49055ffbe014_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a2a8e28516141d9b323734341178a976c7aa9fa0d92631385d7d49055ffbe014->leave($__internal_a2a8e28516141d9b323734341178a976c7aa9fa0d92631385d7d49055ffbe014_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_6bec7b48fb4505b4729217f3523a77472fc7faea14a44b1738fc17c6af8e7132 = $this->env->getExtension("native_profiler");
        $__internal_6bec7b48fb4505b4729217f3523a77472fc7faea14a44b1738fc17c6af8e7132->enter($__internal_6bec7b48fb4505b4729217f3523a77472fc7faea14a44b1738fc17c6af8e7132_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_6bec7b48fb4505b4729217f3523a77472fc7faea14a44b1738fc17c6af8e7132->leave($__internal_6bec7b48fb4505b4729217f3523a77472fc7faea14a44b1738fc17c6af8e7132_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1cd7babfc387d04f4b67b109140f738e56d75a27d53b3bf3e0192b2f2a6a344d = $this->env->getExtension("native_profiler");
        $__internal_1cd7babfc387d04f4b67b109140f738e56d75a27d53b3bf3e0192b2f2a6a344d->enter($__internal_1cd7babfc387d04f4b67b109140f738e56d75a27d53b3bf3e0192b2f2a6a344d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_1cd7babfc387d04f4b67b109140f738e56d75a27d53b3bf3e0192b2f2a6a344d->leave($__internal_1cd7babfc387d04f4b67b109140f738e56d75a27d53b3bf3e0192b2f2a6a344d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_94760c2181f1e38aa223c42004e1079395f70abbc2682d1710ca8641437c661a = $this->env->getExtension("native_profiler");
        $__internal_94760c2181f1e38aa223c42004e1079395f70abbc2682d1710ca8641437c661a->enter($__internal_94760c2181f1e38aa223c42004e1079395f70abbc2682d1710ca8641437c661a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_94760c2181f1e38aa223c42004e1079395f70abbc2682d1710ca8641437c661a->leave($__internal_94760c2181f1e38aa223c42004e1079395f70abbc2682d1710ca8641437c661a_prof);

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
