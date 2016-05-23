<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_fbcbebffd4e379dc221dfd44f9cc55dff544cf8f4c0621472d15244b8e576f2e extends Twig_Template
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
        $__internal_964730186accd959e51eadd970d7490141c3c7e1b0ea01f42181ed2dec09f0b5 = $this->env->getExtension("native_profiler");
        $__internal_964730186accd959e51eadd970d7490141c3c7e1b0ea01f42181ed2dec09f0b5->enter($__internal_964730186accd959e51eadd970d7490141c3c7e1b0ea01f42181ed2dec09f0b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_964730186accd959e51eadd970d7490141c3c7e1b0ea01f42181ed2dec09f0b5->leave($__internal_964730186accd959e51eadd970d7490141c3c7e1b0ea01f42181ed2dec09f0b5_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
