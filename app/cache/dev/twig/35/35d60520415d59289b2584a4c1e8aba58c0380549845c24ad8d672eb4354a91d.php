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
        $__internal_794ad3c9f9c3b0c0d419ffec6e370d73b908d120f259f0a596aebb93a3c30af0 = $this->env->getExtension("native_profiler");
        $__internal_794ad3c9f9c3b0c0d419ffec6e370d73b908d120f259f0a596aebb93a3c30af0->enter($__internal_794ad3c9f9c3b0c0d419ffec6e370d73b908d120f259f0a596aebb93a3c30af0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_794ad3c9f9c3b0c0d419ffec6e370d73b908d120f259f0a596aebb93a3c30af0->leave($__internal_794ad3c9f9c3b0c0d419ffec6e370d73b908d120f259f0a596aebb93a3c30af0_prof);

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
