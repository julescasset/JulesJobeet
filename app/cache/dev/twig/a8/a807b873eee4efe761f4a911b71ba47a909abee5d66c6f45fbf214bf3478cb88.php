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
        $__internal_d76d6a0b584e21bfc820e7599769fe4f4078da68b4b535f71bc99f961f85db6e = $this->env->getExtension("native_profiler");
        $__internal_d76d6a0b584e21bfc820e7599769fe4f4078da68b4b535f71bc99f961f85db6e->enter($__internal_d76d6a0b584e21bfc820e7599769fe4f4078da68b4b535f71bc99f961f85db6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_d76d6a0b584e21bfc820e7599769fe4f4078da68b4b535f71bc99f961f85db6e->leave($__internal_d76d6a0b584e21bfc820e7599769fe4f4078da68b4b535f71bc99f961f85db6e_prof);

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
