<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_98649816ead342ba04342da940f7f32753dfd349b69fe43944104a378eac60bd extends Twig_Template
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
        $__internal_07312166cb9ea63b273eb38091aac7d045b676c3879336271191092f5a8e3eef = $this->env->getExtension("native_profiler");
        $__internal_07312166cb9ea63b273eb38091aac7d045b676c3879336271191092f5a8e3eef->enter($__internal_07312166cb9ea63b273eb38091aac7d045b676c3879336271191092f5a8e3eef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_07312166cb9ea63b273eb38091aac7d045b676c3879336271191092f5a8e3eef->leave($__internal_07312166cb9ea63b273eb38091aac7d045b676c3879336271191092f5a8e3eef_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
