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
        $__internal_e7e8bcc5f4f11370f3cdbd18e4ce89919f53cd618a21403a0ea8863d83b60b7c = $this->env->getExtension("native_profiler");
        $__internal_e7e8bcc5f4f11370f3cdbd18e4ce89919f53cd618a21403a0ea8863d83b60b7c->enter($__internal_e7e8bcc5f4f11370f3cdbd18e4ce89919f53cd618a21403a0ea8863d83b60b7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_e7e8bcc5f4f11370f3cdbd18e4ce89919f53cd618a21403a0ea8863d83b60b7c->leave($__internal_e7e8bcc5f4f11370f3cdbd18e4ce89919f53cd618a21403a0ea8863d83b60b7c_prof);

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
