<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_f846d74fcdf1990fb538add1c31b860a95f69f88f2b9cf08c48d904f8685f449 extends Twig_Template
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
        $__internal_17123a7f93296d20750b19cc50da8a44558c26e9a8fa532e3caf180b7a446d1e = $this->env->getExtension("native_profiler");
        $__internal_17123a7f93296d20750b19cc50da8a44558c26e9a8fa532e3caf180b7a446d1e->enter($__internal_17123a7f93296d20750b19cc50da8a44558c26e9a8fa532e3caf180b7a446d1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_17123a7f93296d20750b19cc50da8a44558c26e9a8fa532e3caf180b7a446d1e->leave($__internal_17123a7f93296d20750b19cc50da8a44558c26e9a8fa532e3caf180b7a446d1e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */