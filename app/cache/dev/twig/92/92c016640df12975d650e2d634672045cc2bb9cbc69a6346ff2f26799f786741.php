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
        $__internal_5409a2b0032236264e6dd5f355195cac2b98003c90e0c66dac0a4bc62ca02b4f = $this->env->getExtension("native_profiler");
        $__internal_5409a2b0032236264e6dd5f355195cac2b98003c90e0c66dac0a4bc62ca02b4f->enter($__internal_5409a2b0032236264e6dd5f355195cac2b98003c90e0c66dac0a4bc62ca02b4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_5409a2b0032236264e6dd5f355195cac2b98003c90e0c66dac0a4bc62ca02b4f->leave($__internal_5409a2b0032236264e6dd5f355195cac2b98003c90e0c66dac0a4bc62ca02b4f_prof);

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
