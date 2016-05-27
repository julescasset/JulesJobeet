<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_a2226c913748bdd7a6809b0379f9c0d7e56a39d604eccbbc6b43b313af3732a3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
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
        $__internal_b485376dd39399983b95f2db518c3bdc047e11c9f3eb240df71b19770b4277a5 = $this->env->getExtension("native_profiler");
        $__internal_b485376dd39399983b95f2db518c3bdc047e11c9f3eb240df71b19770b4277a5->enter($__internal_b485376dd39399983b95f2db518c3bdc047e11c9f3eb240df71b19770b4277a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b485376dd39399983b95f2db518c3bdc047e11c9f3eb240df71b19770b4277a5->leave($__internal_b485376dd39399983b95f2db518c3bdc047e11c9f3eb240df71b19770b4277a5_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_54b05571fdeef9968947a374c3771465c48b73fe6be56b6931416bb1fe832c68 = $this->env->getExtension("native_profiler");
        $__internal_54b05571fdeef9968947a374c3771465c48b73fe6be56b6931416bb1fe832c68->enter($__internal_54b05571fdeef9968947a374c3771465c48b73fe6be56b6931416bb1fe832c68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_54b05571fdeef9968947a374c3771465c48b73fe6be56b6931416bb1fe832c68->leave($__internal_54b05571fdeef9968947a374c3771465c48b73fe6be56b6931416bb1fe832c68_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_5e8d17f67016e05a626c0828354bf853da87603426605108095b8433f1f86ce4 = $this->env->getExtension("native_profiler");
        $__internal_5e8d17f67016e05a626c0828354bf853da87603426605108095b8433f1f86ce4->enter($__internal_5e8d17f67016e05a626c0828354bf853da87603426605108095b8433f1f86ce4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_5e8d17f67016e05a626c0828354bf853da87603426605108095b8433f1f86ce4->leave($__internal_5e8d17f67016e05a626c0828354bf853da87603426605108095b8433f1f86ce4_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
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
