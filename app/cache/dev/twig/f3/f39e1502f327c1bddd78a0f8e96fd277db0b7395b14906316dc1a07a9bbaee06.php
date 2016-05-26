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
        $__internal_2553a8da940a0331deeae4344b983e25bf4a5d3e8d4cd17afea41a9385120ecc = $this->env->getExtension("native_profiler");
        $__internal_2553a8da940a0331deeae4344b983e25bf4a5d3e8d4cd17afea41a9385120ecc->enter($__internal_2553a8da940a0331deeae4344b983e25bf4a5d3e8d4cd17afea41a9385120ecc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2553a8da940a0331deeae4344b983e25bf4a5d3e8d4cd17afea41a9385120ecc->leave($__internal_2553a8da940a0331deeae4344b983e25bf4a5d3e8d4cd17afea41a9385120ecc_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6e2c70b5eb6290797804211840737a402cfc6422f323d383ded86be2d89f01a8 = $this->env->getExtension("native_profiler");
        $__internal_6e2c70b5eb6290797804211840737a402cfc6422f323d383ded86be2d89f01a8->enter($__internal_6e2c70b5eb6290797804211840737a402cfc6422f323d383ded86be2d89f01a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_6e2c70b5eb6290797804211840737a402cfc6422f323d383ded86be2d89f01a8->leave($__internal_6e2c70b5eb6290797804211840737a402cfc6422f323d383ded86be2d89f01a8_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a81bfe23e4abe9cfb5dccefdc367e1d3c5d10cb83933704f06fb09c5a911561f = $this->env->getExtension("native_profiler");
        $__internal_a81bfe23e4abe9cfb5dccefdc367e1d3c5d10cb83933704f06fb09c5a911561f->enter($__internal_a81bfe23e4abe9cfb5dccefdc367e1d3c5d10cb83933704f06fb09c5a911561f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a81bfe23e4abe9cfb5dccefdc367e1d3c5d10cb83933704f06fb09c5a911561f->leave($__internal_a81bfe23e4abe9cfb5dccefdc367e1d3c5d10cb83933704f06fb09c5a911561f_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_3d8f83ce1b9d2507af51803d92b7bc48fa1556a591cf7b6c545611d45908429d = $this->env->getExtension("native_profiler");
        $__internal_3d8f83ce1b9d2507af51803d92b7bc48fa1556a591cf7b6c545611d45908429d->enter($__internal_3d8f83ce1b9d2507af51803d92b7bc48fa1556a591cf7b6c545611d45908429d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_3d8f83ce1b9d2507af51803d92b7bc48fa1556a591cf7b6c545611d45908429d->leave($__internal_3d8f83ce1b9d2507af51803d92b7bc48fa1556a591cf7b6c545611d45908429d_prof);

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
