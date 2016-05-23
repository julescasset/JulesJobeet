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
        $__internal_5928d584c02c47a48981d1ebf0d4b7a762032067a8aea2d94874b6c8ab9f87b9 = $this->env->getExtension("native_profiler");
        $__internal_5928d584c02c47a48981d1ebf0d4b7a762032067a8aea2d94874b6c8ab9f87b9->enter($__internal_5928d584c02c47a48981d1ebf0d4b7a762032067a8aea2d94874b6c8ab9f87b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

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
        
        $__internal_5928d584c02c47a48981d1ebf0d4b7a762032067a8aea2d94874b6c8ab9f87b9->leave($__internal_5928d584c02c47a48981d1ebf0d4b7a762032067a8aea2d94874b6c8ab9f87b9_prof);

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
