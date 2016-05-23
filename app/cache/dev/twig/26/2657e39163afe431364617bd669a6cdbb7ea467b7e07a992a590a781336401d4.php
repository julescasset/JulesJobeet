<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_95ca7e9391534bfe4b552986e7d5dd69011461d040d769d34543315ec372dcb0 extends Twig_Template
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
        $__internal_cd48356f33ec48ea2f7e0390c0678dd28a618b0dc2634b5294802b9dcf4a2d06 = $this->env->getExtension("native_profiler");
        $__internal_cd48356f33ec48ea2f7e0390c0678dd28a618b0dc2634b5294802b9dcf4a2d06->enter($__internal_cd48356f33ec48ea2f7e0390c0678dd28a618b0dc2634b5294802b9dcf4a2d06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_cd48356f33ec48ea2f7e0390c0678dd28a618b0dc2634b5294802b9dcf4a2d06->leave($__internal_cd48356f33ec48ea2f7e0390c0678dd28a618b0dc2634b5294802b9dcf4a2d06_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
