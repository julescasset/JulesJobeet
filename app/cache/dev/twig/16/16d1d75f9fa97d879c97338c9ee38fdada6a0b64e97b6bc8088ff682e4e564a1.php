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
        $__internal_a3d25a58140f521967cc2915d1536b2e00cbfcc7184e1bcc9c83f7654671dcb1 = $this->env->getExtension("native_profiler");
        $__internal_a3d25a58140f521967cc2915d1536b2e00cbfcc7184e1bcc9c83f7654671dcb1->enter($__internal_a3d25a58140f521967cc2915d1536b2e00cbfcc7184e1bcc9c83f7654671dcb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a3d25a58140f521967cc2915d1536b2e00cbfcc7184e1bcc9c83f7654671dcb1->leave($__internal_a3d25a58140f521967cc2915d1536b2e00cbfcc7184e1bcc9c83f7654671dcb1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_176abe10d4aa7a003bee61fdea8dc0725f2b69cfb494d29b55eac37e6aee6f23 = $this->env->getExtension("native_profiler");
        $__internal_176abe10d4aa7a003bee61fdea8dc0725f2b69cfb494d29b55eac37e6aee6f23->enter($__internal_176abe10d4aa7a003bee61fdea8dc0725f2b69cfb494d29b55eac37e6aee6f23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_176abe10d4aa7a003bee61fdea8dc0725f2b69cfb494d29b55eac37e6aee6f23->leave($__internal_176abe10d4aa7a003bee61fdea8dc0725f2b69cfb494d29b55eac37e6aee6f23_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_11ab7df5be6c8d2c4ea0efefbbe2462dc1638a91f73c40b24df92266f6a21745 = $this->env->getExtension("native_profiler");
        $__internal_11ab7df5be6c8d2c4ea0efefbbe2462dc1638a91f73c40b24df92266f6a21745->enter($__internal_11ab7df5be6c8d2c4ea0efefbbe2462dc1638a91f73c40b24df92266f6a21745_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_11ab7df5be6c8d2c4ea0efefbbe2462dc1638a91f73c40b24df92266f6a21745->leave($__internal_11ab7df5be6c8d2c4ea0efefbbe2462dc1638a91f73c40b24df92266f6a21745_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_c77bdc3ffdccbf41b7c8c7d427f8a14e59ae20e74091658ca7f78f2d8fbc175d = $this->env->getExtension("native_profiler");
        $__internal_c77bdc3ffdccbf41b7c8c7d427f8a14e59ae20e74091658ca7f78f2d8fbc175d->enter($__internal_c77bdc3ffdccbf41b7c8c7d427f8a14e59ae20e74091658ca7f78f2d8fbc175d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_c77bdc3ffdccbf41b7c8c7d427f8a14e59ae20e74091658ca7f78f2d8fbc175d->leave($__internal_c77bdc3ffdccbf41b7c8c7d427f8a14e59ae20e74091658ca7f78f2d8fbc175d_prof);

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
