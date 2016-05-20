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
        $__internal_701db6f93e21e2ba5e070118ac1df1f70f3e7cf173fc066377725956f0a6e52c = $this->env->getExtension("native_profiler");
        $__internal_701db6f93e21e2ba5e070118ac1df1f70f3e7cf173fc066377725956f0a6e52c->enter($__internal_701db6f93e21e2ba5e070118ac1df1f70f3e7cf173fc066377725956f0a6e52c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_701db6f93e21e2ba5e070118ac1df1f70f3e7cf173fc066377725956f0a6e52c->leave($__internal_701db6f93e21e2ba5e070118ac1df1f70f3e7cf173fc066377725956f0a6e52c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1fb133fae353c43d80be66fc7c384cebb2fecf9dd60420ba38f0248b576f4975 = $this->env->getExtension("native_profiler");
        $__internal_1fb133fae353c43d80be66fc7c384cebb2fecf9dd60420ba38f0248b576f4975->enter($__internal_1fb133fae353c43d80be66fc7c384cebb2fecf9dd60420ba38f0248b576f4975_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_1fb133fae353c43d80be66fc7c384cebb2fecf9dd60420ba38f0248b576f4975->leave($__internal_1fb133fae353c43d80be66fc7c384cebb2fecf9dd60420ba38f0248b576f4975_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_50db39890a9905bb79ea0fd47845f05a2e9ac6f54dd484fc4ddbc44a437a3934 = $this->env->getExtension("native_profiler");
        $__internal_50db39890a9905bb79ea0fd47845f05a2e9ac6f54dd484fc4ddbc44a437a3934->enter($__internal_50db39890a9905bb79ea0fd47845f05a2e9ac6f54dd484fc4ddbc44a437a3934_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_50db39890a9905bb79ea0fd47845f05a2e9ac6f54dd484fc4ddbc44a437a3934->leave($__internal_50db39890a9905bb79ea0fd47845f05a2e9ac6f54dd484fc4ddbc44a437a3934_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_23f776dcdd4a1dccc286355b3674ceb4e1ed749b13db2712856e145c428b4c3b = $this->env->getExtension("native_profiler");
        $__internal_23f776dcdd4a1dccc286355b3674ceb4e1ed749b13db2712856e145c428b4c3b->enter($__internal_23f776dcdd4a1dccc286355b3674ceb4e1ed749b13db2712856e145c428b4c3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_23f776dcdd4a1dccc286355b3674ceb4e1ed749b13db2712856e145c428b4c3b->leave($__internal_23f776dcdd4a1dccc286355b3674ceb4e1ed749b13db2712856e145c428b4c3b_prof);

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
