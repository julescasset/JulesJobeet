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
        $__internal_88546c1eff351934aebfff3c2255b8e5e5eb648cbd90e41fc447a71a6a6b3346 = $this->env->getExtension("native_profiler");
        $__internal_88546c1eff351934aebfff3c2255b8e5e5eb648cbd90e41fc447a71a6a6b3346->enter($__internal_88546c1eff351934aebfff3c2255b8e5e5eb648cbd90e41fc447a71a6a6b3346_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_88546c1eff351934aebfff3c2255b8e5e5eb648cbd90e41fc447a71a6a6b3346->leave($__internal_88546c1eff351934aebfff3c2255b8e5e5eb648cbd90e41fc447a71a6a6b3346_prof);

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
