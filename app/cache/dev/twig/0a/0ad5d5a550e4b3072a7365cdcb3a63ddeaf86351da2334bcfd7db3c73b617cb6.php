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
        $__internal_10d598d60d2d1923808bddc4ca3cce32ac508da4fff09e33b7d66020e89c685d = $this->env->getExtension("native_profiler");
        $__internal_10d598d60d2d1923808bddc4ca3cce32ac508da4fff09e33b7d66020e89c685d->enter($__internal_10d598d60d2d1923808bddc4ca3cce32ac508da4fff09e33b7d66020e89c685d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_10d598d60d2d1923808bddc4ca3cce32ac508da4fff09e33b7d66020e89c685d->leave($__internal_10d598d60d2d1923808bddc4ca3cce32ac508da4fff09e33b7d66020e89c685d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0d851f49770b0ed0e8a61a36795020291a5dbb82d58225878b99bfe1a4248912 = $this->env->getExtension("native_profiler");
        $__internal_0d851f49770b0ed0e8a61a36795020291a5dbb82d58225878b99bfe1a4248912->enter($__internal_0d851f49770b0ed0e8a61a36795020291a5dbb82d58225878b99bfe1a4248912_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_0d851f49770b0ed0e8a61a36795020291a5dbb82d58225878b99bfe1a4248912->leave($__internal_0d851f49770b0ed0e8a61a36795020291a5dbb82d58225878b99bfe1a4248912_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7fcba25f88cfd62aeccdb895343a4b3c712e230d092a11411770d48523b4dd86 = $this->env->getExtension("native_profiler");
        $__internal_7fcba25f88cfd62aeccdb895343a4b3c712e230d092a11411770d48523b4dd86->enter($__internal_7fcba25f88cfd62aeccdb895343a4b3c712e230d092a11411770d48523b4dd86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_7fcba25f88cfd62aeccdb895343a4b3c712e230d092a11411770d48523b4dd86->leave($__internal_7fcba25f88cfd62aeccdb895343a4b3c712e230d092a11411770d48523b4dd86_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0fbc45aaa34a3dfc4f6117b613fffbf79d34b201b9aaa842ec452675826ae194 = $this->env->getExtension("native_profiler");
        $__internal_0fbc45aaa34a3dfc4f6117b613fffbf79d34b201b9aaa842ec452675826ae194->enter($__internal_0fbc45aaa34a3dfc4f6117b613fffbf79d34b201b9aaa842ec452675826ae194_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_0fbc45aaa34a3dfc4f6117b613fffbf79d34b201b9aaa842ec452675826ae194->leave($__internal_0fbc45aaa34a3dfc4f6117b613fffbf79d34b201b9aaa842ec452675826ae194_prof);

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
