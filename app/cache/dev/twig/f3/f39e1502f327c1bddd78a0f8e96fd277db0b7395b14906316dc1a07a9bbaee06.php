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
        $__internal_1169c8f4b09412fe5b1d306370249a64e51791a4c0ead6828a4319034a83d341 = $this->env->getExtension("native_profiler");
        $__internal_1169c8f4b09412fe5b1d306370249a64e51791a4c0ead6828a4319034a83d341->enter($__internal_1169c8f4b09412fe5b1d306370249a64e51791a4c0ead6828a4319034a83d341_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1169c8f4b09412fe5b1d306370249a64e51791a4c0ead6828a4319034a83d341->leave($__internal_1169c8f4b09412fe5b1d306370249a64e51791a4c0ead6828a4319034a83d341_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c32635b63e00a4a4c668f11554786469f2375ae0407fe14e2d0f472db1960ac9 = $this->env->getExtension("native_profiler");
        $__internal_c32635b63e00a4a4c668f11554786469f2375ae0407fe14e2d0f472db1960ac9->enter($__internal_c32635b63e00a4a4c668f11554786469f2375ae0407fe14e2d0f472db1960ac9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_c32635b63e00a4a4c668f11554786469f2375ae0407fe14e2d0f472db1960ac9->leave($__internal_c32635b63e00a4a4c668f11554786469f2375ae0407fe14e2d0f472db1960ac9_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_975e0b44385c49230c54cf78d7d954651bff41076f3711f64a3f82044809bf67 = $this->env->getExtension("native_profiler");
        $__internal_975e0b44385c49230c54cf78d7d954651bff41076f3711f64a3f82044809bf67->enter($__internal_975e0b44385c49230c54cf78d7d954651bff41076f3711f64a3f82044809bf67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_975e0b44385c49230c54cf78d7d954651bff41076f3711f64a3f82044809bf67->leave($__internal_975e0b44385c49230c54cf78d7d954651bff41076f3711f64a3f82044809bf67_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_47cf41594bd4cedde9b3d43089665dc9c75b6bf9016a884003c573f4bdc827ee = $this->env->getExtension("native_profiler");
        $__internal_47cf41594bd4cedde9b3d43089665dc9c75b6bf9016a884003c573f4bdc827ee->enter($__internal_47cf41594bd4cedde9b3d43089665dc9c75b6bf9016a884003c573f4bdc827ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_47cf41594bd4cedde9b3d43089665dc9c75b6bf9016a884003c573f4bdc827ee->leave($__internal_47cf41594bd4cedde9b3d43089665dc9c75b6bf9016a884003c573f4bdc827ee_prof);

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
