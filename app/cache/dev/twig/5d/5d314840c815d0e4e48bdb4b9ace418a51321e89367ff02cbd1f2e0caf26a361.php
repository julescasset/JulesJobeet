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
        $__internal_6b137308661042e51bd31a7a9b5ae91ca84c3cd15cf946166828bac45cde5aa4 = $this->env->getExtension("native_profiler");
        $__internal_6b137308661042e51bd31a7a9b5ae91ca84c3cd15cf946166828bac45cde5aa4->enter($__internal_6b137308661042e51bd31a7a9b5ae91ca84c3cd15cf946166828bac45cde5aa4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_6b137308661042e51bd31a7a9b5ae91ca84c3cd15cf946166828bac45cde5aa4->leave($__internal_6b137308661042e51bd31a7a9b5ae91ca84c3cd15cf946166828bac45cde5aa4_prof);

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
