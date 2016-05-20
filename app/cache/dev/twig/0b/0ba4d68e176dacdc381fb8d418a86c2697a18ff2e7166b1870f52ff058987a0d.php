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
        $__internal_f183bd93cd5528f5f17aafde35aa2b22c0b12954f8f2b0edd09bb9dea0532317 = $this->env->getExtension("native_profiler");
        $__internal_f183bd93cd5528f5f17aafde35aa2b22c0b12954f8f2b0edd09bb9dea0532317->enter($__internal_f183bd93cd5528f5f17aafde35aa2b22c0b12954f8f2b0edd09bb9dea0532317_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_f183bd93cd5528f5f17aafde35aa2b22c0b12954f8f2b0edd09bb9dea0532317->leave($__internal_f183bd93cd5528f5f17aafde35aa2b22c0b12954f8f2b0edd09bb9dea0532317_prof);

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
