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
        $__internal_df038b1ba08ecb4eefe1e20d24cc6a849b3c7cdc80cada407e8e0616bda42fca = $this->env->getExtension("native_profiler");
        $__internal_df038b1ba08ecb4eefe1e20d24cc6a849b3c7cdc80cada407e8e0616bda42fca->enter($__internal_df038b1ba08ecb4eefe1e20d24cc6a849b3c7cdc80cada407e8e0616bda42fca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_df038b1ba08ecb4eefe1e20d24cc6a849b3c7cdc80cada407e8e0616bda42fca->leave($__internal_df038b1ba08ecb4eefe1e20d24cc6a849b3c7cdc80cada407e8e0616bda42fca_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3d3323519981ee473b8c4288e311c39a3b22b788002176ea94278120e1adc6bf = $this->env->getExtension("native_profiler");
        $__internal_3d3323519981ee473b8c4288e311c39a3b22b788002176ea94278120e1adc6bf->enter($__internal_3d3323519981ee473b8c4288e311c39a3b22b788002176ea94278120e1adc6bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_3d3323519981ee473b8c4288e311c39a3b22b788002176ea94278120e1adc6bf->leave($__internal_3d3323519981ee473b8c4288e311c39a3b22b788002176ea94278120e1adc6bf_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_53d87bdb3f7519efcec3306c7e35234ba50ded03a8864af953041cbf8885af8f = $this->env->getExtension("native_profiler");
        $__internal_53d87bdb3f7519efcec3306c7e35234ba50ded03a8864af953041cbf8885af8f->enter($__internal_53d87bdb3f7519efcec3306c7e35234ba50ded03a8864af953041cbf8885af8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_53d87bdb3f7519efcec3306c7e35234ba50ded03a8864af953041cbf8885af8f->leave($__internal_53d87bdb3f7519efcec3306c7e35234ba50ded03a8864af953041cbf8885af8f_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_43a58b5be374c77ae1a41d1d3656d929dd7a7c4a48b4db7710c7acd734d3b194 = $this->env->getExtension("native_profiler");
        $__internal_43a58b5be374c77ae1a41d1d3656d929dd7a7c4a48b4db7710c7acd734d3b194->enter($__internal_43a58b5be374c77ae1a41d1d3656d929dd7a7c4a48b4db7710c7acd734d3b194_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_43a58b5be374c77ae1a41d1d3656d929dd7a7c4a48b4db7710c7acd734d3b194->leave($__internal_43a58b5be374c77ae1a41d1d3656d929dd7a7c4a48b4db7710c7acd734d3b194_prof);

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
