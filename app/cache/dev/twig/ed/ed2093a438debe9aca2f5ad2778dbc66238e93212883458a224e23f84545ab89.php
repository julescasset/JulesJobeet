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
        $__internal_71f8b8042b90ec96789ac43ebeb794ac1306b2b29166917dcec14e097655de4f = $this->env->getExtension("native_profiler");
        $__internal_71f8b8042b90ec96789ac43ebeb794ac1306b2b29166917dcec14e097655de4f->enter($__internal_71f8b8042b90ec96789ac43ebeb794ac1306b2b29166917dcec14e097655de4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_71f8b8042b90ec96789ac43ebeb794ac1306b2b29166917dcec14e097655de4f->leave($__internal_71f8b8042b90ec96789ac43ebeb794ac1306b2b29166917dcec14e097655de4f_prof);

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
