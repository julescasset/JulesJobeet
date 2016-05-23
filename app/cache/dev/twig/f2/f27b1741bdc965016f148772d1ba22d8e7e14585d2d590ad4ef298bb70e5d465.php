<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_f8345d6329fa2959637d258f33a0ec83ae386db179a3d0494f2381cea00266db extends Twig_Template
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
        $__internal_c723d8486d5dece5f77ee3a82443e1bdb8d85858a1538dcff7277d6fb47e6175 = $this->env->getExtension("native_profiler");
        $__internal_c723d8486d5dece5f77ee3a82443e1bdb8d85858a1538dcff7277d6fb47e6175->enter($__internal_c723d8486d5dece5f77ee3a82443e1bdb8d85858a1538dcff7277d6fb47e6175_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

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
        
        $__internal_c723d8486d5dece5f77ee3a82443e1bdb8d85858a1538dcff7277d6fb47e6175->leave($__internal_c723d8486d5dece5f77ee3a82443e1bdb8d85858a1538dcff7277d6fb47e6175_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
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
