<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_e16671f631c130636daae19945e25ddaf152770e3fe6efdb1aeddce21917ff19 extends Twig_Template
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
        $__internal_d892e586d07576844035225a2e70ab4337606af40320c9482f8b403f6845d1f4 = $this->env->getExtension("native_profiler");
        $__internal_d892e586d07576844035225a2e70ab4337606af40320c9482f8b403f6845d1f4->enter($__internal_d892e586d07576844035225a2e70ab4337606af40320c9482f8b403f6845d1f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_d892e586d07576844035225a2e70ab4337606af40320c9482f8b403f6845d1f4->leave($__internal_d892e586d07576844035225a2e70ab4337606af40320c9482f8b403f6845d1f4_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
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
