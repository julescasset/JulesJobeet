<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_d1a2e9ff06d2817cda3e4bae12caab377da18d8b362c5be2e634168d1eacc5da extends Twig_Template
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
        $__internal_93af59ef0c6841794a5303eac32fac07da7f891477c99e26bf550b2b853256aa = $this->env->getExtension("native_profiler");
        $__internal_93af59ef0c6841794a5303eac32fac07da7f891477c99e26bf550b2b853256aa->enter($__internal_93af59ef0c6841794a5303eac32fac07da7f891477c99e26bf550b2b853256aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_93af59ef0c6841794a5303eac32fac07da7f891477c99e26bf550b2b853256aa->leave($__internal_93af59ef0c6841794a5303eac32fac07da7f891477c99e26bf550b2b853256aa_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
