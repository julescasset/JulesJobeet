<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_64d203ea7aac92abc2ee1776741a7b57218848f63dd723a6929fcacd3624e40e extends Twig_Template
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
        $__internal_cea9cbf6f2355d19a4b5e891199edaed53688817913bfcd4c55ade76e73a0876 = $this->env->getExtension("native_profiler");
        $__internal_cea9cbf6f2355d19a4b5e891199edaed53688817913bfcd4c55ade76e73a0876->enter($__internal_cea9cbf6f2355d19a4b5e891199edaed53688817913bfcd4c55ade76e73a0876_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_cea9cbf6f2355d19a4b5e891199edaed53688817913bfcd4c55ade76e73a0876->leave($__internal_cea9cbf6f2355d19a4b5e891199edaed53688817913bfcd4c55ade76e73a0876_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
