<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_4ef0452bbbbd0ba3ccb8287cde5e5a0cce46267156e60e9ac8132ea3f3a71c61 extends Twig_Template
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
        $__internal_33cced2f2ccf5fb2130b5be6b090bdc5b87e90136ab742a0b48ea529a2a4f1ab = $this->env->getExtension("native_profiler");
        $__internal_33cced2f2ccf5fb2130b5be6b090bdc5b87e90136ab742a0b48ea529a2a4f1ab->enter($__internal_33cced2f2ccf5fb2130b5be6b090bdc5b87e90136ab742a0b48ea529a2a4f1ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_33cced2f2ccf5fb2130b5be6b090bdc5b87e90136ab742a0b48ea529a2a4f1ab->leave($__internal_33cced2f2ccf5fb2130b5be6b090bdc5b87e90136ab742a0b48ea529a2a4f1ab_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
