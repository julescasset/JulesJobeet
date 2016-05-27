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
        $__internal_8a06b0334bbfda4b1e3deba6d269a2ae9cc907fab3173485662c139b576d8925 = $this->env->getExtension("native_profiler");
        $__internal_8a06b0334bbfda4b1e3deba6d269a2ae9cc907fab3173485662c139b576d8925->enter($__internal_8a06b0334bbfda4b1e3deba6d269a2ae9cc907fab3173485662c139b576d8925_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_8a06b0334bbfda4b1e3deba6d269a2ae9cc907fab3173485662c139b576d8925->leave($__internal_8a06b0334bbfda4b1e3deba6d269a2ae9cc907fab3173485662c139b576d8925_prof);

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
