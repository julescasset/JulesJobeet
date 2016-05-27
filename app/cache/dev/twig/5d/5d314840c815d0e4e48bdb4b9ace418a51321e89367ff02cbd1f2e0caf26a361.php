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
        $__internal_6bbca986d4d9f8f0d9066d82ba8ea126fd8ead5add1d67fe87c2d75eb9914bdb = $this->env->getExtension("native_profiler");
        $__internal_6bbca986d4d9f8f0d9066d82ba8ea126fd8ead5add1d67fe87c2d75eb9914bdb->enter($__internal_6bbca986d4d9f8f0d9066d82ba8ea126fd8ead5add1d67fe87c2d75eb9914bdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_6bbca986d4d9f8f0d9066d82ba8ea126fd8ead5add1d67fe87c2d75eb9914bdb->leave($__internal_6bbca986d4d9f8f0d9066d82ba8ea126fd8ead5add1d67fe87c2d75eb9914bdb_prof);

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
