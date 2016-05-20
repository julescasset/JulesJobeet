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
        $__internal_24aa7321abaaf582e0fd546807bf11b7a79afa5bad0109a3ef52bd3479561683 = $this->env->getExtension("native_profiler");
        $__internal_24aa7321abaaf582e0fd546807bf11b7a79afa5bad0109a3ef52bd3479561683->enter($__internal_24aa7321abaaf582e0fd546807bf11b7a79afa5bad0109a3ef52bd3479561683_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_24aa7321abaaf582e0fd546807bf11b7a79afa5bad0109a3ef52bd3479561683->leave($__internal_24aa7321abaaf582e0fd546807bf11b7a79afa5bad0109a3ef52bd3479561683_prof);

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
