<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_45a6fdc0c3917e1a09a741ea76416073aea5ce8f5b9d3af88f4fb60b1d866d3f extends Twig_Template
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
        $__internal_a48ab72ca55886d9fd3589cfd7640e16a7c205007104a9abe15ba04b2406af66 = $this->env->getExtension("native_profiler");
        $__internal_a48ab72ca55886d9fd3589cfd7640e16a7c205007104a9abe15ba04b2406af66->enter($__internal_a48ab72ca55886d9fd3589cfd7640e16a7c205007104a9abe15ba04b2406af66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_a48ab72ca55886d9fd3589cfd7640e16a7c205007104a9abe15ba04b2406af66->leave($__internal_a48ab72ca55886d9fd3589cfd7640e16a7c205007104a9abe15ba04b2406af66_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
