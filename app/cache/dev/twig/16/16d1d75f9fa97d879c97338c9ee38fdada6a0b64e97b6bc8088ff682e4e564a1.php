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
        $__internal_5d066c9040d531307485e60e2e9883f716d6af2b117308ebb2b7fa8ef46f79cb = $this->env->getExtension("native_profiler");
        $__internal_5d066c9040d531307485e60e2e9883f716d6af2b117308ebb2b7fa8ef46f79cb->enter($__internal_5d066c9040d531307485e60e2e9883f716d6af2b117308ebb2b7fa8ef46f79cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5d066c9040d531307485e60e2e9883f716d6af2b117308ebb2b7fa8ef46f79cb->leave($__internal_5d066c9040d531307485e60e2e9883f716d6af2b117308ebb2b7fa8ef46f79cb_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_78f9fa060016e93db1e3901c97dc9b78df883a44b3400b3ec2303ed9bec3dfdf = $this->env->getExtension("native_profiler");
        $__internal_78f9fa060016e93db1e3901c97dc9b78df883a44b3400b3ec2303ed9bec3dfdf->enter($__internal_78f9fa060016e93db1e3901c97dc9b78df883a44b3400b3ec2303ed9bec3dfdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_78f9fa060016e93db1e3901c97dc9b78df883a44b3400b3ec2303ed9bec3dfdf->leave($__internal_78f9fa060016e93db1e3901c97dc9b78df883a44b3400b3ec2303ed9bec3dfdf_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_9a50fff94998b2a65703e26862ed5fb83822c0af48f1ecf14614e0d279f22f48 = $this->env->getExtension("native_profiler");
        $__internal_9a50fff94998b2a65703e26862ed5fb83822c0af48f1ecf14614e0d279f22f48->enter($__internal_9a50fff94998b2a65703e26862ed5fb83822c0af48f1ecf14614e0d279f22f48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_9a50fff94998b2a65703e26862ed5fb83822c0af48f1ecf14614e0d279f22f48->leave($__internal_9a50fff94998b2a65703e26862ed5fb83822c0af48f1ecf14614e0d279f22f48_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_88093141c063001a27c536931901972af2ebfb241169d82202bfe2f1d24616af = $this->env->getExtension("native_profiler");
        $__internal_88093141c063001a27c536931901972af2ebfb241169d82202bfe2f1d24616af->enter($__internal_88093141c063001a27c536931901972af2ebfb241169d82202bfe2f1d24616af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_88093141c063001a27c536931901972af2ebfb241169d82202bfe2f1d24616af->leave($__internal_88093141c063001a27c536931901972af2ebfb241169d82202bfe2f1d24616af_prof);

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
