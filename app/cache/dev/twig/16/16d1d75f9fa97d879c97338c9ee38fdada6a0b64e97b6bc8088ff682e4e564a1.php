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
        $__internal_ddd81c00014beb0608aecc279a74b8cbe1f9d6c490601a3d3f41a40f44bd8747 = $this->env->getExtension("native_profiler");
        $__internal_ddd81c00014beb0608aecc279a74b8cbe1f9d6c490601a3d3f41a40f44bd8747->enter($__internal_ddd81c00014beb0608aecc279a74b8cbe1f9d6c490601a3d3f41a40f44bd8747_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ddd81c00014beb0608aecc279a74b8cbe1f9d6c490601a3d3f41a40f44bd8747->leave($__internal_ddd81c00014beb0608aecc279a74b8cbe1f9d6c490601a3d3f41a40f44bd8747_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ac39a485c2d95f27ba7011eaf843cd616c61c4afc88694d8e193b486b81a825a = $this->env->getExtension("native_profiler");
        $__internal_ac39a485c2d95f27ba7011eaf843cd616c61c4afc88694d8e193b486b81a825a->enter($__internal_ac39a485c2d95f27ba7011eaf843cd616c61c4afc88694d8e193b486b81a825a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_ac39a485c2d95f27ba7011eaf843cd616c61c4afc88694d8e193b486b81a825a->leave($__internal_ac39a485c2d95f27ba7011eaf843cd616c61c4afc88694d8e193b486b81a825a_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_5d3dbb21b74291138b8563db78b51caa709b06c2d6a879bdfd196be30d2d475c = $this->env->getExtension("native_profiler");
        $__internal_5d3dbb21b74291138b8563db78b51caa709b06c2d6a879bdfd196be30d2d475c->enter($__internal_5d3dbb21b74291138b8563db78b51caa709b06c2d6a879bdfd196be30d2d475c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_5d3dbb21b74291138b8563db78b51caa709b06c2d6a879bdfd196be30d2d475c->leave($__internal_5d3dbb21b74291138b8563db78b51caa709b06c2d6a879bdfd196be30d2d475c_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_55ad38df49600bc2d6ce6c9ad8b6c8d67f46e56cf44a8385614e1f65fd8675fa = $this->env->getExtension("native_profiler");
        $__internal_55ad38df49600bc2d6ce6c9ad8b6c8d67f46e56cf44a8385614e1f65fd8675fa->enter($__internal_55ad38df49600bc2d6ce6c9ad8b6c8d67f46e56cf44a8385614e1f65fd8675fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_55ad38df49600bc2d6ce6c9ad8b6c8d67f46e56cf44a8385614e1f65fd8675fa->leave($__internal_55ad38df49600bc2d6ce6c9ad8b6c8d67f46e56cf44a8385614e1f65fd8675fa_prof);

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
