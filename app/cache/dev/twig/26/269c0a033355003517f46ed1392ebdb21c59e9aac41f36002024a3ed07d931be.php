<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_4af320e9bb53412f384829278955a3b854ac524883e03cdcea7a322f7583bb5e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_baa789e09c2b53552b2eaa67c32276d7fa153479bf290e0e2a60ca25a97c5fe0 = $this->env->getExtension("native_profiler");
        $__internal_baa789e09c2b53552b2eaa67c32276d7fa153479bf290e0e2a60ca25a97c5fe0->enter($__internal_baa789e09c2b53552b2eaa67c32276d7fa153479bf290e0e2a60ca25a97c5fe0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_baa789e09c2b53552b2eaa67c32276d7fa153479bf290e0e2a60ca25a97c5fe0->leave($__internal_baa789e09c2b53552b2eaa67c32276d7fa153479bf290e0e2a60ca25a97c5fe0_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
