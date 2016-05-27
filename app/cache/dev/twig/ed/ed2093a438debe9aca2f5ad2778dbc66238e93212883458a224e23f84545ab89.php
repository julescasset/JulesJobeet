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
        $__internal_a4c10b81cdd4ee741fbd6580116d1571e7023bc9bb267df6bcc8c771bbf2be00 = $this->env->getExtension("native_profiler");
        $__internal_a4c10b81cdd4ee741fbd6580116d1571e7023bc9bb267df6bcc8c771bbf2be00->enter($__internal_a4c10b81cdd4ee741fbd6580116d1571e7023bc9bb267df6bcc8c771bbf2be00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_a4c10b81cdd4ee741fbd6580116d1571e7023bc9bb267df6bcc8c771bbf2be00->leave($__internal_a4c10b81cdd4ee741fbd6580116d1571e7023bc9bb267df6bcc8c771bbf2be00_prof);

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
