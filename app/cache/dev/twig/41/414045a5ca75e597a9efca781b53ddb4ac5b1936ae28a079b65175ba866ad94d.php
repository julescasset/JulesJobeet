<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_50f442055527716bf3d5aca307f12bd457bdbe4f2f7b222ba06b3eaba3ca948c extends Twig_Template
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
        $__internal_99217094cae18de8def3ff8f59523258930b46b6be060a19b7f49b6c8d0d745d = $this->env->getExtension("native_profiler");
        $__internal_99217094cae18de8def3ff8f59523258930b46b6be060a19b7f49b6c8d0d745d->enter($__internal_99217094cae18de8def3ff8f59523258930b46b6be060a19b7f49b6c8d0d745d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_99217094cae18de8def3ff8f59523258930b46b6be060a19b7f49b6c8d0d745d->leave($__internal_99217094cae18de8def3ff8f59523258930b46b6be060a19b7f49b6c8d0d745d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
