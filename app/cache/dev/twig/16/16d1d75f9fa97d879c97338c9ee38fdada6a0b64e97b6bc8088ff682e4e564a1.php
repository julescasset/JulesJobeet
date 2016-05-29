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
        $__internal_cabf226864e4488779df0b7120583309aa90e12788f8827538925587e1d3525c = $this->env->getExtension("native_profiler");
        $__internal_cabf226864e4488779df0b7120583309aa90e12788f8827538925587e1d3525c->enter($__internal_cabf226864e4488779df0b7120583309aa90e12788f8827538925587e1d3525c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cabf226864e4488779df0b7120583309aa90e12788f8827538925587e1d3525c->leave($__internal_cabf226864e4488779df0b7120583309aa90e12788f8827538925587e1d3525c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b5e4f0826a08331330c0d07d1456dcb658dbc82db6c5565218ce3ffaefbf0737 = $this->env->getExtension("native_profiler");
        $__internal_b5e4f0826a08331330c0d07d1456dcb658dbc82db6c5565218ce3ffaefbf0737->enter($__internal_b5e4f0826a08331330c0d07d1456dcb658dbc82db6c5565218ce3ffaefbf0737_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_b5e4f0826a08331330c0d07d1456dcb658dbc82db6c5565218ce3ffaefbf0737->leave($__internal_b5e4f0826a08331330c0d07d1456dcb658dbc82db6c5565218ce3ffaefbf0737_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ecf6b0898db18dbac644db239c78a6ee4b205c4b6df4e8a8363125ebeb6781fd = $this->env->getExtension("native_profiler");
        $__internal_ecf6b0898db18dbac644db239c78a6ee4b205c4b6df4e8a8363125ebeb6781fd->enter($__internal_ecf6b0898db18dbac644db239c78a6ee4b205c4b6df4e8a8363125ebeb6781fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_ecf6b0898db18dbac644db239c78a6ee4b205c4b6df4e8a8363125ebeb6781fd->leave($__internal_ecf6b0898db18dbac644db239c78a6ee4b205c4b6df4e8a8363125ebeb6781fd_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_05e58e34c1a55614f6e8457ba2d1fb8e6032289f6444fda16016e1f375c8f0e5 = $this->env->getExtension("native_profiler");
        $__internal_05e58e34c1a55614f6e8457ba2d1fb8e6032289f6444fda16016e1f375c8f0e5->enter($__internal_05e58e34c1a55614f6e8457ba2d1fb8e6032289f6444fda16016e1f375c8f0e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_05e58e34c1a55614f6e8457ba2d1fb8e6032289f6444fda16016e1f375c8f0e5->leave($__internal_05e58e34c1a55614f6e8457ba2d1fb8e6032289f6444fda16016e1f375c8f0e5_prof);

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
