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
        $__internal_5a3ecf4fdb77d397c4d9964038edc3dc862e1f1ff74eb504c7a9b5affb99892c = $this->env->getExtension("native_profiler");
        $__internal_5a3ecf4fdb77d397c4d9964038edc3dc862e1f1ff74eb504c7a9b5affb99892c->enter($__internal_5a3ecf4fdb77d397c4d9964038edc3dc862e1f1ff74eb504c7a9b5affb99892c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_5a3ecf4fdb77d397c4d9964038edc3dc862e1f1ff74eb504c7a9b5affb99892c->leave($__internal_5a3ecf4fdb77d397c4d9964038edc3dc862e1f1ff74eb504c7a9b5affb99892c_prof);

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
