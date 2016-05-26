<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_6c5051cb5a9f687b52e94eefb0999fa947ef007d1fb11ceaef0104341f418b3f extends Twig_Template
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
        $__internal_35d61a97a80122898058312e9bbeb6a1178b4820ca5c68cf1225111ddd516cfb = $this->env->getExtension("native_profiler");
        $__internal_35d61a97a80122898058312e9bbeb6a1178b4820ca5c68cf1225111ddd516cfb->enter($__internal_35d61a97a80122898058312e9bbeb6a1178b4820ca5c68cf1225111ddd516cfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

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
        
        $__internal_35d61a97a80122898058312e9bbeb6a1178b4820ca5c68cf1225111ddd516cfb->leave($__internal_35d61a97a80122898058312e9bbeb6a1178b4820ca5c68cf1225111ddd516cfb_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
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
