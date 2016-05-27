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
        $__internal_6983f41818ad386ccde07061b3f2d17c718c61a77e70eefa302b0a11fff3fcba = $this->env->getExtension("native_profiler");
        $__internal_6983f41818ad386ccde07061b3f2d17c718c61a77e70eefa302b0a11fff3fcba->enter($__internal_6983f41818ad386ccde07061b3f2d17c718c61a77e70eefa302b0a11fff3fcba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_6983f41818ad386ccde07061b3f2d17c718c61a77e70eefa302b0a11fff3fcba->leave($__internal_6983f41818ad386ccde07061b3f2d17c718c61a77e70eefa302b0a11fff3fcba_prof);

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
