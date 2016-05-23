<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_359fbb16da75b82aa08b5073d580b3055ed0182be55e59280c0957519fe4013d extends Twig_Template
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
        $__internal_7ce0e64a8c6711d4de86b2d708ad7facf493df96084712cda2065e0f9001beb7 = $this->env->getExtension("native_profiler");
        $__internal_7ce0e64a8c6711d4de86b2d708ad7facf493df96084712cda2065e0f9001beb7->enter($__internal_7ce0e64a8c6711d4de86b2d708ad7facf493df96084712cda2065e0f9001beb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_7ce0e64a8c6711d4de86b2d708ad7facf493df96084712cda2065e0f9001beb7->leave($__internal_7ce0e64a8c6711d4de86b2d708ad7facf493df96084712cda2065e0f9001beb7_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
