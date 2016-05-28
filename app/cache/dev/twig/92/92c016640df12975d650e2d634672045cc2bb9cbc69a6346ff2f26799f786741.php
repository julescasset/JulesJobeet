<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_37017e12c6500d52d992ace88c512a45fffad296aa6c09648ce511c4a23f3d64 extends Twig_Template
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
        $__internal_40657a87e3874457a1b6892e7523ee0ccb7ccdb32a2643f30bd15fb989791ba8 = $this->env->getExtension("native_profiler");
        $__internal_40657a87e3874457a1b6892e7523ee0ccb7ccdb32a2643f30bd15fb989791ba8->enter($__internal_40657a87e3874457a1b6892e7523ee0ccb7ccdb32a2643f30bd15fb989791ba8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_40657a87e3874457a1b6892e7523ee0ccb7ccdb32a2643f30bd15fb989791ba8->leave($__internal_40657a87e3874457a1b6892e7523ee0ccb7ccdb32a2643f30bd15fb989791ba8_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
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
