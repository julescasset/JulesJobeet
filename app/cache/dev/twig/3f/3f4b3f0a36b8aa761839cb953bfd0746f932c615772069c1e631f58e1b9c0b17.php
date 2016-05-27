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
        $__internal_4c102eb52e9aabd89d9a524fc726f6884fb3d883df202ed76fbcba9846f2545e = $this->env->getExtension("native_profiler");
        $__internal_4c102eb52e9aabd89d9a524fc726f6884fb3d883df202ed76fbcba9846f2545e->enter($__internal_4c102eb52e9aabd89d9a524fc726f6884fb3d883df202ed76fbcba9846f2545e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

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
        
        $__internal_4c102eb52e9aabd89d9a524fc726f6884fb3d883df202ed76fbcba9846f2545e->leave($__internal_4c102eb52e9aabd89d9a524fc726f6884fb3d883df202ed76fbcba9846f2545e_prof);

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
