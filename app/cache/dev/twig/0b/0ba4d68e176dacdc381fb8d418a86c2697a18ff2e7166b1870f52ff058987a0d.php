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
        $__internal_231f4b35f0b6e4b70624a5b0329d0a50635e06899ecf233106d167f962d371ea = $this->env->getExtension("native_profiler");
        $__internal_231f4b35f0b6e4b70624a5b0329d0a50635e06899ecf233106d167f962d371ea->enter($__internal_231f4b35f0b6e4b70624a5b0329d0a50635e06899ecf233106d167f962d371ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_231f4b35f0b6e4b70624a5b0329d0a50635e06899ecf233106d167f962d371ea->leave($__internal_231f4b35f0b6e4b70624a5b0329d0a50635e06899ecf233106d167f962d371ea_prof);

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
