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
        $__internal_154cbef94e45de84a1e3209e505845e1ff2b7f521ab97f2339e1c1013dc5537f = $this->env->getExtension("native_profiler");
        $__internal_154cbef94e45de84a1e3209e505845e1ff2b7f521ab97f2339e1c1013dc5537f->enter($__internal_154cbef94e45de84a1e3209e505845e1ff2b7f521ab97f2339e1c1013dc5537f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_154cbef94e45de84a1e3209e505845e1ff2b7f521ab97f2339e1c1013dc5537f->leave($__internal_154cbef94e45de84a1e3209e505845e1ff2b7f521ab97f2339e1c1013dc5537f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5b2556a61d1ed291ed2889278c9c338587abe9ab93091363dfae2a2e9aec2da5 = $this->env->getExtension("native_profiler");
        $__internal_5b2556a61d1ed291ed2889278c9c338587abe9ab93091363dfae2a2e9aec2da5->enter($__internal_5b2556a61d1ed291ed2889278c9c338587abe9ab93091363dfae2a2e9aec2da5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_5b2556a61d1ed291ed2889278c9c338587abe9ab93091363dfae2a2e9aec2da5->leave($__internal_5b2556a61d1ed291ed2889278c9c338587abe9ab93091363dfae2a2e9aec2da5_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_7e5e359773762d8a762677054b8aab2325f56072fdbcfda4c38e74ac8cb16aff = $this->env->getExtension("native_profiler");
        $__internal_7e5e359773762d8a762677054b8aab2325f56072fdbcfda4c38e74ac8cb16aff->enter($__internal_7e5e359773762d8a762677054b8aab2325f56072fdbcfda4c38e74ac8cb16aff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_7e5e359773762d8a762677054b8aab2325f56072fdbcfda4c38e74ac8cb16aff->leave($__internal_7e5e359773762d8a762677054b8aab2325f56072fdbcfda4c38e74ac8cb16aff_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_67076a46ba391e1799be1c2d7afbccad29ec2a9a09c2a2f70964e166552ac0d8 = $this->env->getExtension("native_profiler");
        $__internal_67076a46ba391e1799be1c2d7afbccad29ec2a9a09c2a2f70964e166552ac0d8->enter($__internal_67076a46ba391e1799be1c2d7afbccad29ec2a9a09c2a2f70964e166552ac0d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_67076a46ba391e1799be1c2d7afbccad29ec2a9a09c2a2f70964e166552ac0d8->leave($__internal_67076a46ba391e1799be1c2d7afbccad29ec2a9a09c2a2f70964e166552ac0d8_prof);

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
