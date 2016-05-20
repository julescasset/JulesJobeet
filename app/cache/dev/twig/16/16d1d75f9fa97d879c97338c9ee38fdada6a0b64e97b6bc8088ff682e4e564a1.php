<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_75d9cab07298d22d17baebe770a6facebb0071415eb262ed6ae73183ad03c368 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_87dc5c14842d0400c889c87ed1d1d7b6be3b9a5a468c7cdfd7f308e3eb747258 = $this->env->getExtension("native_profiler");
        $__internal_87dc5c14842d0400c889c87ed1d1d7b6be3b9a5a468c7cdfd7f308e3eb747258->enter($__internal_87dc5c14842d0400c889c87ed1d1d7b6be3b9a5a468c7cdfd7f308e3eb747258_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_87dc5c14842d0400c889c87ed1d1d7b6be3b9a5a468c7cdfd7f308e3eb747258->leave($__internal_87dc5c14842d0400c889c87ed1d1d7b6be3b9a5a468c7cdfd7f308e3eb747258_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0dd2d7417719e8f6057fab195d40176708a8a26cb3aa584228be56a8bc164d87 = $this->env->getExtension("native_profiler");
        $__internal_0dd2d7417719e8f6057fab195d40176708a8a26cb3aa584228be56a8bc164d87->enter($__internal_0dd2d7417719e8f6057fab195d40176708a8a26cb3aa584228be56a8bc164d87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_0dd2d7417719e8f6057fab195d40176708a8a26cb3aa584228be56a8bc164d87->leave($__internal_0dd2d7417719e8f6057fab195d40176708a8a26cb3aa584228be56a8bc164d87_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_121f47ac419a166e0eb660924b2433e928bd182e0d525c8c160f7a9a2f512bb4 = $this->env->getExtension("native_profiler");
        $__internal_121f47ac419a166e0eb660924b2433e928bd182e0d525c8c160f7a9a2f512bb4->enter($__internal_121f47ac419a166e0eb660924b2433e928bd182e0d525c8c160f7a9a2f512bb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_121f47ac419a166e0eb660924b2433e928bd182e0d525c8c160f7a9a2f512bb4->leave($__internal_121f47ac419a166e0eb660924b2433e928bd182e0d525c8c160f7a9a2f512bb4_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_3c179377c3530939192a613fd7228e25ac9be6bdcf6fddd88334eb6567af2c49 = $this->env->getExtension("native_profiler");
        $__internal_3c179377c3530939192a613fd7228e25ac9be6bdcf6fddd88334eb6567af2c49->enter($__internal_3c179377c3530939192a613fd7228e25ac9be6bdcf6fddd88334eb6567af2c49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_3c179377c3530939192a613fd7228e25ac9be6bdcf6fddd88334eb6567af2c49->leave($__internal_3c179377c3530939192a613fd7228e25ac9be6bdcf6fddd88334eb6567af2c49_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
