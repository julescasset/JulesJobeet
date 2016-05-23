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
        $__internal_bdb322fc15eeaa0f044bb46ed0b35ec75b4edf423af9a1b7d79130a3b80833ac = $this->env->getExtension("native_profiler");
        $__internal_bdb322fc15eeaa0f044bb46ed0b35ec75b4edf423af9a1b7d79130a3b80833ac->enter($__internal_bdb322fc15eeaa0f044bb46ed0b35ec75b4edf423af9a1b7d79130a3b80833ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

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
        
        $__internal_bdb322fc15eeaa0f044bb46ed0b35ec75b4edf423af9a1b7d79130a3b80833ac->leave($__internal_bdb322fc15eeaa0f044bb46ed0b35ec75b4edf423af9a1b7d79130a3b80833ac_prof);

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
