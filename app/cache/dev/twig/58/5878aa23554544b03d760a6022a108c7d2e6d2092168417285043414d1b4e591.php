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
        $__internal_d07aa1afb0f1437a9b5406543399af69fd40a7abc5df284a24818a8e51c0d4d1 = $this->env->getExtension("native_profiler");
        $__internal_d07aa1afb0f1437a9b5406543399af69fd40a7abc5df284a24818a8e51c0d4d1->enter($__internal_d07aa1afb0f1437a9b5406543399af69fd40a7abc5df284a24818a8e51c0d4d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d07aa1afb0f1437a9b5406543399af69fd40a7abc5df284a24818a8e51c0d4d1->leave($__internal_d07aa1afb0f1437a9b5406543399af69fd40a7abc5df284a24818a8e51c0d4d1_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a51e5294083048334f987805d5ff395d1d691bb75baf0dbbcd3a5efa04ca4865 = $this->env->getExtension("native_profiler");
        $__internal_a51e5294083048334f987805d5ff395d1d691bb75baf0dbbcd3a5efa04ca4865->enter($__internal_a51e5294083048334f987805d5ff395d1d691bb75baf0dbbcd3a5efa04ca4865_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_a51e5294083048334f987805d5ff395d1d691bb75baf0dbbcd3a5efa04ca4865->leave($__internal_a51e5294083048334f987805d5ff395d1d691bb75baf0dbbcd3a5efa04ca4865_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_36a022a293e447ad2573e440752acafca2b6bf7c9f3a6409b51470d9d9ce6625 = $this->env->getExtension("native_profiler");
        $__internal_36a022a293e447ad2573e440752acafca2b6bf7c9f3a6409b51470d9d9ce6625->enter($__internal_36a022a293e447ad2573e440752acafca2b6bf7c9f3a6409b51470d9d9ce6625_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_36a022a293e447ad2573e440752acafca2b6bf7c9f3a6409b51470d9d9ce6625->leave($__internal_36a022a293e447ad2573e440752acafca2b6bf7c9f3a6409b51470d9d9ce6625_prof);

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
