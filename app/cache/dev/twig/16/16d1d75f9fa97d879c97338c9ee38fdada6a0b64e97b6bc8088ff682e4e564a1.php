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
        $__internal_a2a2f0bcfc97f67279a25dd7038f907df12d7129c727beb3456d439ef9d79aaa = $this->env->getExtension("native_profiler");
        $__internal_a2a2f0bcfc97f67279a25dd7038f907df12d7129c727beb3456d439ef9d79aaa->enter($__internal_a2a2f0bcfc97f67279a25dd7038f907df12d7129c727beb3456d439ef9d79aaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a2a2f0bcfc97f67279a25dd7038f907df12d7129c727beb3456d439ef9d79aaa->leave($__internal_a2a2f0bcfc97f67279a25dd7038f907df12d7129c727beb3456d439ef9d79aaa_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_17571927618356bf2dbd13e73d57668c499bc9c1d38ae3eb6188a830e73cd51f = $this->env->getExtension("native_profiler");
        $__internal_17571927618356bf2dbd13e73d57668c499bc9c1d38ae3eb6188a830e73cd51f->enter($__internal_17571927618356bf2dbd13e73d57668c499bc9c1d38ae3eb6188a830e73cd51f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_17571927618356bf2dbd13e73d57668c499bc9c1d38ae3eb6188a830e73cd51f->leave($__internal_17571927618356bf2dbd13e73d57668c499bc9c1d38ae3eb6188a830e73cd51f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b002fb8f6c8c19decc9d2b7bc29ccb9ce91bc79cf24c9aca6d6325d2d0fb177d = $this->env->getExtension("native_profiler");
        $__internal_b002fb8f6c8c19decc9d2b7bc29ccb9ce91bc79cf24c9aca6d6325d2d0fb177d->enter($__internal_b002fb8f6c8c19decc9d2b7bc29ccb9ce91bc79cf24c9aca6d6325d2d0fb177d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_b002fb8f6c8c19decc9d2b7bc29ccb9ce91bc79cf24c9aca6d6325d2d0fb177d->leave($__internal_b002fb8f6c8c19decc9d2b7bc29ccb9ce91bc79cf24c9aca6d6325d2d0fb177d_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_6ecb226fc33c1bd9c8b6f8ad3f96e94a0fe87889a8ae2fe27c9865211308ef12 = $this->env->getExtension("native_profiler");
        $__internal_6ecb226fc33c1bd9c8b6f8ad3f96e94a0fe87889a8ae2fe27c9865211308ef12->enter($__internal_6ecb226fc33c1bd9c8b6f8ad3f96e94a0fe87889a8ae2fe27c9865211308ef12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_6ecb226fc33c1bd9c8b6f8ad3f96e94a0fe87889a8ae2fe27c9865211308ef12->leave($__internal_6ecb226fc33c1bd9c8b6f8ad3f96e94a0fe87889a8ae2fe27c9865211308ef12_prof);

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
