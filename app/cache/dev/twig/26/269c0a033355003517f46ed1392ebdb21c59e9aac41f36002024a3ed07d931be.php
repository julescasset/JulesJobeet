<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_4af320e9bb53412f384829278955a3b854ac524883e03cdcea7a322f7583bb5e extends Twig_Template
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
        $__internal_ac85eb0492309c1c4ee08d24a30071f0cf5880175cfb1db096f2207d11fdf47f = $this->env->getExtension("native_profiler");
        $__internal_ac85eb0492309c1c4ee08d24a30071f0cf5880175cfb1db096f2207d11fdf47f->enter($__internal_ac85eb0492309c1c4ee08d24a30071f0cf5880175cfb1db096f2207d11fdf47f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

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
        
        $__internal_ac85eb0492309c1c4ee08d24a30071f0cf5880175cfb1db096f2207d11fdf47f->leave($__internal_ac85eb0492309c1c4ee08d24a30071f0cf5880175cfb1db096f2207d11fdf47f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
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
