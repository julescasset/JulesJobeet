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
        $__internal_4a363356e746a6fe2f6d3992a4f1d42b466c2f952ecf74d5749d30eb9f83b2b5 = $this->env->getExtension("native_profiler");
        $__internal_4a363356e746a6fe2f6d3992a4f1d42b466c2f952ecf74d5749d30eb9f83b2b5->enter($__internal_4a363356e746a6fe2f6d3992a4f1d42b466c2f952ecf74d5749d30eb9f83b2b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4a363356e746a6fe2f6d3992a4f1d42b466c2f952ecf74d5749d30eb9f83b2b5->leave($__internal_4a363356e746a6fe2f6d3992a4f1d42b466c2f952ecf74d5749d30eb9f83b2b5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a09fa3a684f26d5da79c59888192fcf8170305acbe9176f8a06825f596116cf6 = $this->env->getExtension("native_profiler");
        $__internal_a09fa3a684f26d5da79c59888192fcf8170305acbe9176f8a06825f596116cf6->enter($__internal_a09fa3a684f26d5da79c59888192fcf8170305acbe9176f8a06825f596116cf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_a09fa3a684f26d5da79c59888192fcf8170305acbe9176f8a06825f596116cf6->leave($__internal_a09fa3a684f26d5da79c59888192fcf8170305acbe9176f8a06825f596116cf6_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e9876954f84b76e82aff12bb6d74849a11bf2a4cfe0d398d5d6c1241beb87efc = $this->env->getExtension("native_profiler");
        $__internal_e9876954f84b76e82aff12bb6d74849a11bf2a4cfe0d398d5d6c1241beb87efc->enter($__internal_e9876954f84b76e82aff12bb6d74849a11bf2a4cfe0d398d5d6c1241beb87efc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_e9876954f84b76e82aff12bb6d74849a11bf2a4cfe0d398d5d6c1241beb87efc->leave($__internal_e9876954f84b76e82aff12bb6d74849a11bf2a4cfe0d398d5d6c1241beb87efc_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_ecaed9d6b8e2d04627908d0cd32197b56c476e32806e0d254efaefe906453caa = $this->env->getExtension("native_profiler");
        $__internal_ecaed9d6b8e2d04627908d0cd32197b56c476e32806e0d254efaefe906453caa->enter($__internal_ecaed9d6b8e2d04627908d0cd32197b56c476e32806e0d254efaefe906453caa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_ecaed9d6b8e2d04627908d0cd32197b56c476e32806e0d254efaefe906453caa->leave($__internal_ecaed9d6b8e2d04627908d0cd32197b56c476e32806e0d254efaefe906453caa_prof);

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
