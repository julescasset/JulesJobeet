<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_907cd374627576f3d1add4767c32eb37126a0bb99c03bc0968c051123410694c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_270ccf7991594f70068a26ac6c192b47f88b06c6108338ce37a87aff55b45730 = $this->env->getExtension("native_profiler");
        $__internal_270ccf7991594f70068a26ac6c192b47f88b06c6108338ce37a87aff55b45730->enter($__internal_270ccf7991594f70068a26ac6c192b47f88b06c6108338ce37a87aff55b45730_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_270ccf7991594f70068a26ac6c192b47f88b06c6108338ce37a87aff55b45730->leave($__internal_270ccf7991594f70068a26ac6c192b47f88b06c6108338ce37a87aff55b45730_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d12ce1dfb144350f3cc76e577fe1cf70805e15831d8ad388e3ab9f67b4d44dc8 = $this->env->getExtension("native_profiler");
        $__internal_d12ce1dfb144350f3cc76e577fe1cf70805e15831d8ad388e3ab9f67b4d44dc8->enter($__internal_d12ce1dfb144350f3cc76e577fe1cf70805e15831d8ad388e3ab9f67b4d44dc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_d12ce1dfb144350f3cc76e577fe1cf70805e15831d8ad388e3ab9f67b4d44dc8->leave($__internal_d12ce1dfb144350f3cc76e577fe1cf70805e15831d8ad388e3ab9f67b4d44dc8_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_a9c8df28be9e1417754465392c754b49d49302472d786f6ebb1ad9b8d2b112ae = $this->env->getExtension("native_profiler");
        $__internal_a9c8df28be9e1417754465392c754b49d49302472d786f6ebb1ad9b8d2b112ae->enter($__internal_a9c8df28be9e1417754465392c754b49d49302472d786f6ebb1ad9b8d2b112ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_a9c8df28be9e1417754465392c754b49d49302472d786f6ebb1ad9b8d2b112ae->leave($__internal_a9c8df28be9e1417754465392c754b49d49302472d786f6ebb1ad9b8d2b112ae_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
