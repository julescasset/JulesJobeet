<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_fad6b0fbecf8b7a1d61fbb01fcccae41d94f9317641e1d7b62d389e3358cbf1b extends Twig_Template
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
        $__internal_6c048727de93f7c887ef541d5928e0ba3ebae83aa3f17fad622388213b9b8f54 = $this->env->getExtension("native_profiler");
        $__internal_6c048727de93f7c887ef541d5928e0ba3ebae83aa3f17fad622388213b9b8f54->enter($__internal_6c048727de93f7c887ef541d5928e0ba3ebae83aa3f17fad622388213b9b8f54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_6c048727de93f7c887ef541d5928e0ba3ebae83aa3f17fad622388213b9b8f54->leave($__internal_6c048727de93f7c887ef541d5928e0ba3ebae83aa3f17fad622388213b9b8f54_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
