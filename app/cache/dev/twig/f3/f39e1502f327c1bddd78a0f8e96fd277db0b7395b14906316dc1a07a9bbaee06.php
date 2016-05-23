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
        $__internal_2de711c08b0295a5e527a5c51b8356812dcf521f1e14f832be55ffeaab9c7f05 = $this->env->getExtension("native_profiler");
        $__internal_2de711c08b0295a5e527a5c51b8356812dcf521f1e14f832be55ffeaab9c7f05->enter($__internal_2de711c08b0295a5e527a5c51b8356812dcf521f1e14f832be55ffeaab9c7f05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2de711c08b0295a5e527a5c51b8356812dcf521f1e14f832be55ffeaab9c7f05->leave($__internal_2de711c08b0295a5e527a5c51b8356812dcf521f1e14f832be55ffeaab9c7f05_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7516e5876362cedc7471fd2b9b79d67f47ead6a890d565e11720ebf6dc8bec6d = $this->env->getExtension("native_profiler");
        $__internal_7516e5876362cedc7471fd2b9b79d67f47ead6a890d565e11720ebf6dc8bec6d->enter($__internal_7516e5876362cedc7471fd2b9b79d67f47ead6a890d565e11720ebf6dc8bec6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_7516e5876362cedc7471fd2b9b79d67f47ead6a890d565e11720ebf6dc8bec6d->leave($__internal_7516e5876362cedc7471fd2b9b79d67f47ead6a890d565e11720ebf6dc8bec6d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_46c1c2bd6a9d5b3634264eb915cfd34c7ac21367326c73d330a071181d7d04ee = $this->env->getExtension("native_profiler");
        $__internal_46c1c2bd6a9d5b3634264eb915cfd34c7ac21367326c73d330a071181d7d04ee->enter($__internal_46c1c2bd6a9d5b3634264eb915cfd34c7ac21367326c73d330a071181d7d04ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_46c1c2bd6a9d5b3634264eb915cfd34c7ac21367326c73d330a071181d7d04ee->leave($__internal_46c1c2bd6a9d5b3634264eb915cfd34c7ac21367326c73d330a071181d7d04ee_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_88a5e3bd9c107bf88996be71f88b338f5c83ba68d105a938b42586db8ae1e50a = $this->env->getExtension("native_profiler");
        $__internal_88a5e3bd9c107bf88996be71f88b338f5c83ba68d105a938b42586db8ae1e50a->enter($__internal_88a5e3bd9c107bf88996be71f88b338f5c83ba68d105a938b42586db8ae1e50a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_88a5e3bd9c107bf88996be71f88b338f5c83ba68d105a938b42586db8ae1e50a->leave($__internal_88a5e3bd9c107bf88996be71f88b338f5c83ba68d105a938b42586db8ae1e50a_prof);

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
