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
        $__internal_a9ede8734c1f0d086a62b903ef0cd41315de7fc2f0809c7a0cd0ef66dfcfc388 = $this->env->getExtension("native_profiler");
        $__internal_a9ede8734c1f0d086a62b903ef0cd41315de7fc2f0809c7a0cd0ef66dfcfc388->enter($__internal_a9ede8734c1f0d086a62b903ef0cd41315de7fc2f0809c7a0cd0ef66dfcfc388_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a9ede8734c1f0d086a62b903ef0cd41315de7fc2f0809c7a0cd0ef66dfcfc388->leave($__internal_a9ede8734c1f0d086a62b903ef0cd41315de7fc2f0809c7a0cd0ef66dfcfc388_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_12d3f9f633c2ef6d9cf8b573755648e4636d79e1828b1446a750097d78fdeb75 = $this->env->getExtension("native_profiler");
        $__internal_12d3f9f633c2ef6d9cf8b573755648e4636d79e1828b1446a750097d78fdeb75->enter($__internal_12d3f9f633c2ef6d9cf8b573755648e4636d79e1828b1446a750097d78fdeb75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_12d3f9f633c2ef6d9cf8b573755648e4636d79e1828b1446a750097d78fdeb75->leave($__internal_12d3f9f633c2ef6d9cf8b573755648e4636d79e1828b1446a750097d78fdeb75_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_9ce924e22279b443b2bd523f15138cc1868a0752bd3a815d7d8b46ce2c21289c = $this->env->getExtension("native_profiler");
        $__internal_9ce924e22279b443b2bd523f15138cc1868a0752bd3a815d7d8b46ce2c21289c->enter($__internal_9ce924e22279b443b2bd523f15138cc1868a0752bd3a815d7d8b46ce2c21289c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_9ce924e22279b443b2bd523f15138cc1868a0752bd3a815d7d8b46ce2c21289c->leave($__internal_9ce924e22279b443b2bd523f15138cc1868a0752bd3a815d7d8b46ce2c21289c_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_f3d1488fbd75f7994dbd280324cfbed723324b572269c79cf7c6c288bb7c9b31 = $this->env->getExtension("native_profiler");
        $__internal_f3d1488fbd75f7994dbd280324cfbed723324b572269c79cf7c6c288bb7c9b31->enter($__internal_f3d1488fbd75f7994dbd280324cfbed723324b572269c79cf7c6c288bb7c9b31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_f3d1488fbd75f7994dbd280324cfbed723324b572269c79cf7c6c288bb7c9b31->leave($__internal_f3d1488fbd75f7994dbd280324cfbed723324b572269c79cf7c6c288bb7c9b31_prof);

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
