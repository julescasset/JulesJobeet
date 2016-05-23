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
        $__internal_07c5fc357f74f683405b89743829c9266afe9cf01c863a3083b62b2537cf7886 = $this->env->getExtension("native_profiler");
        $__internal_07c5fc357f74f683405b89743829c9266afe9cf01c863a3083b62b2537cf7886->enter($__internal_07c5fc357f74f683405b89743829c9266afe9cf01c863a3083b62b2537cf7886_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_07c5fc357f74f683405b89743829c9266afe9cf01c863a3083b62b2537cf7886->leave($__internal_07c5fc357f74f683405b89743829c9266afe9cf01c863a3083b62b2537cf7886_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e899d2e3d9df5a0ee9bdf22b9bfbd52c146a00228a98a93a3a25c833cba8d615 = $this->env->getExtension("native_profiler");
        $__internal_e899d2e3d9df5a0ee9bdf22b9bfbd52c146a00228a98a93a3a25c833cba8d615->enter($__internal_e899d2e3d9df5a0ee9bdf22b9bfbd52c146a00228a98a93a3a25c833cba8d615_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_e899d2e3d9df5a0ee9bdf22b9bfbd52c146a00228a98a93a3a25c833cba8d615->leave($__internal_e899d2e3d9df5a0ee9bdf22b9bfbd52c146a00228a98a93a3a25c833cba8d615_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_525a52f0f5918c2bced4fca2c0e54340bb730efc737b9478726f4b35689f6bee = $this->env->getExtension("native_profiler");
        $__internal_525a52f0f5918c2bced4fca2c0e54340bb730efc737b9478726f4b35689f6bee->enter($__internal_525a52f0f5918c2bced4fca2c0e54340bb730efc737b9478726f4b35689f6bee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_525a52f0f5918c2bced4fca2c0e54340bb730efc737b9478726f4b35689f6bee->leave($__internal_525a52f0f5918c2bced4fca2c0e54340bb730efc737b9478726f4b35689f6bee_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_3935098b1428948e50c120c0fab39e51aa73e627d2fbd095cabbb4eada7b194d = $this->env->getExtension("native_profiler");
        $__internal_3935098b1428948e50c120c0fab39e51aa73e627d2fbd095cabbb4eada7b194d->enter($__internal_3935098b1428948e50c120c0fab39e51aa73e627d2fbd095cabbb4eada7b194d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_3935098b1428948e50c120c0fab39e51aa73e627d2fbd095cabbb4eada7b194d->leave($__internal_3935098b1428948e50c120c0fab39e51aa73e627d2fbd095cabbb4eada7b194d_prof);

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
