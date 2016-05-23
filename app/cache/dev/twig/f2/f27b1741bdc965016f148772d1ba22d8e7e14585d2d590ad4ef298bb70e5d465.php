<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_f8345d6329fa2959637d258f33a0ec83ae386db179a3d0494f2381cea00266db extends Twig_Template
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
        $__internal_ff9bf6191826cee2e59f107cd7613be901ee569ebd00daac4f792d8cd6ef7f03 = $this->env->getExtension("native_profiler");
        $__internal_ff9bf6191826cee2e59f107cd7613be901ee569ebd00daac4f792d8cd6ef7f03->enter($__internal_ff9bf6191826cee2e59f107cd7613be901ee569ebd00daac4f792d8cd6ef7f03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_ff9bf6191826cee2e59f107cd7613be901ee569ebd00daac4f792d8cd6ef7f03->leave($__internal_ff9bf6191826cee2e59f107cd7613be901ee569ebd00daac4f792d8cd6ef7f03_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
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
