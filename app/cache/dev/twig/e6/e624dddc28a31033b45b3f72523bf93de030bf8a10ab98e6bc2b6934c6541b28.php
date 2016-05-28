<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_cf09bb1c23f29df5f78ba8f0763efacc8e9b8b8ce5146ca1544eaf326c80c909 extends Twig_Template
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
        $__internal_aef10624d67d8c906a00d5a8626014e59512494b0e7f20c026316cf667f159d0 = $this->env->getExtension("native_profiler");
        $__internal_aef10624d67d8c906a00d5a8626014e59512494b0e7f20c026316cf667f159d0->enter($__internal_aef10624d67d8c906a00d5a8626014e59512494b0e7f20c026316cf667f159d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_aef10624d67d8c906a00d5a8626014e59512494b0e7f20c026316cf667f159d0->leave($__internal_aef10624d67d8c906a00d5a8626014e59512494b0e7f20c026316cf667f159d0_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
