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
        $__internal_40c6b83e055d99ef25f71ac045bce62c19d4e956b6e8bd794f6edb9972443875 = $this->env->getExtension("native_profiler");
        $__internal_40c6b83e055d99ef25f71ac045bce62c19d4e956b6e8bd794f6edb9972443875->enter($__internal_40c6b83e055d99ef25f71ac045bce62c19d4e956b6e8bd794f6edb9972443875_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

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
        
        $__internal_40c6b83e055d99ef25f71ac045bce62c19d4e956b6e8bd794f6edb9972443875->leave($__internal_40c6b83e055d99ef25f71ac045bce62c19d4e956b6e8bd794f6edb9972443875_prof);

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
