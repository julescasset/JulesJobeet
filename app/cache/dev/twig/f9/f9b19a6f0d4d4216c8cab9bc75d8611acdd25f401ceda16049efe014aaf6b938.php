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
        $__internal_244dd553cff738405a5a3d9eae2f77cf26ff4a57ea16efe8abf5a5172087a38b = $this->env->getExtension("native_profiler");
        $__internal_244dd553cff738405a5a3d9eae2f77cf26ff4a57ea16efe8abf5a5172087a38b->enter($__internal_244dd553cff738405a5a3d9eae2f77cf26ff4a57ea16efe8abf5a5172087a38b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_244dd553cff738405a5a3d9eae2f77cf26ff4a57ea16efe8abf5a5172087a38b->leave($__internal_244dd553cff738405a5a3d9eae2f77cf26ff4a57ea16efe8abf5a5172087a38b_prof);

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
