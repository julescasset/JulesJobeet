<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_c9a62857565f841e5b878e1ab0cb7b365dc7490233601aaa710fac5568875495 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0ce0593f9c484a33de9c4b5550c5dd31f9676354168a8301d7364ea0154e1689 = $this->env->getExtension("native_profiler");
        $__internal_0ce0593f9c484a33de9c4b5550c5dd31f9676354168a8301d7364ea0154e1689->enter($__internal_0ce0593f9c484a33de9c4b5550c5dd31f9676354168a8301d7364ea0154e1689_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0ce0593f9c484a33de9c4b5550c5dd31f9676354168a8301d7364ea0154e1689->leave($__internal_0ce0593f9c484a33de9c4b5550c5dd31f9676354168a8301d7364ea0154e1689_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7e22a9f512f4e178d5d945750dff93ec32b39e5cc1d73ff60523abb8d1ade264 = $this->env->getExtension("native_profiler");
        $__internal_7e22a9f512f4e178d5d945750dff93ec32b39e5cc1d73ff60523abb8d1ade264->enter($__internal_7e22a9f512f4e178d5d945750dff93ec32b39e5cc1d73ff60523abb8d1ade264_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_7e22a9f512f4e178d5d945750dff93ec32b39e5cc1d73ff60523abb8d1ade264->leave($__internal_7e22a9f512f4e178d5d945750dff93ec32b39e5cc1d73ff60523abb8d1ade264_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_aecdc6705d002388c81c38f8296e6926353828d20abda3093b1ad24fff9cfc62 = $this->env->getExtension("native_profiler");
        $__internal_aecdc6705d002388c81c38f8296e6926353828d20abda3093b1ad24fff9cfc62->enter($__internal_aecdc6705d002388c81c38f8296e6926353828d20abda3093b1ad24fff9cfc62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_aecdc6705d002388c81c38f8296e6926353828d20abda3093b1ad24fff9cfc62->leave($__internal_aecdc6705d002388c81c38f8296e6926353828d20abda3093b1ad24fff9cfc62_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_edc7cc27f62c06bc3f33465cf8c7e2549f336b7b5786411d685ecee374db75be = $this->env->getExtension("native_profiler");
        $__internal_edc7cc27f62c06bc3f33465cf8c7e2549f336b7b5786411d685ecee374db75be->enter($__internal_edc7cc27f62c06bc3f33465cf8c7e2549f336b7b5786411d685ecee374db75be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_edc7cc27f62c06bc3f33465cf8c7e2549f336b7b5786411d685ecee374db75be->leave($__internal_edc7cc27f62c06bc3f33465cf8c7e2549f336b7b5786411d685ecee374db75be_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
