<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_fa756447c11c25305f04585fdf98a3bc7cb7f74e70682a3e82dda8ece33c1d8b extends Twig_Template
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
        $__internal_b39355e560174c5f8b895a4979ca79d829b79a9fe0ba4e75e12e77842c2ffb3c = $this->env->getExtension("native_profiler");
        $__internal_b39355e560174c5f8b895a4979ca79d829b79a9fe0ba4e75e12e77842c2ffb3c->enter($__internal_b39355e560174c5f8b895a4979ca79d829b79a9fe0ba4e75e12e77842c2ffb3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_b39355e560174c5f8b895a4979ca79d829b79a9fe0ba4e75e12e77842c2ffb3c->leave($__internal_b39355e560174c5f8b895a4979ca79d829b79a9fe0ba4e75e12e77842c2ffb3c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
