<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_c572854877e14a57278cbc70325e278c9de328590f67fe65706b2f36235426e2 extends Twig_Template
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
        $__internal_99e34f696358bebaed0ae82f7b6452e279c1b17725225a8ec8f1476345997084 = $this->env->getExtension("native_profiler");
        $__internal_99e34f696358bebaed0ae82f7b6452e279c1b17725225a8ec8f1476345997084->enter($__internal_99e34f696358bebaed0ae82f7b6452e279c1b17725225a8ec8f1476345997084_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_99e34f696358bebaed0ae82f7b6452e279c1b17725225a8ec8f1476345997084->leave($__internal_99e34f696358bebaed0ae82f7b6452e279c1b17725225a8ec8f1476345997084_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
