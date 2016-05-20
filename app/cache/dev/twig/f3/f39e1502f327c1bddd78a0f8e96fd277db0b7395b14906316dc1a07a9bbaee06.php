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
        $__internal_f156b1beb589d3dc985a4fd3e808db04bdcdce5ce95cb6212990d1bd275a57fb = $this->env->getExtension("native_profiler");
        $__internal_f156b1beb589d3dc985a4fd3e808db04bdcdce5ce95cb6212990d1bd275a57fb->enter($__internal_f156b1beb589d3dc985a4fd3e808db04bdcdce5ce95cb6212990d1bd275a57fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f156b1beb589d3dc985a4fd3e808db04bdcdce5ce95cb6212990d1bd275a57fb->leave($__internal_f156b1beb589d3dc985a4fd3e808db04bdcdce5ce95cb6212990d1bd275a57fb_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f0145acbbda8e832218841fad445dc18110e8cde8357ea7a324e33e1abf116df = $this->env->getExtension("native_profiler");
        $__internal_f0145acbbda8e832218841fad445dc18110e8cde8357ea7a324e33e1abf116df->enter($__internal_f0145acbbda8e832218841fad445dc18110e8cde8357ea7a324e33e1abf116df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_f0145acbbda8e832218841fad445dc18110e8cde8357ea7a324e33e1abf116df->leave($__internal_f0145acbbda8e832218841fad445dc18110e8cde8357ea7a324e33e1abf116df_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_0d43fed0875013dd9aabd4b2a8eff2c1db7eb53a1386c4893510b647179ee7f2 = $this->env->getExtension("native_profiler");
        $__internal_0d43fed0875013dd9aabd4b2a8eff2c1db7eb53a1386c4893510b647179ee7f2->enter($__internal_0d43fed0875013dd9aabd4b2a8eff2c1db7eb53a1386c4893510b647179ee7f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_0d43fed0875013dd9aabd4b2a8eff2c1db7eb53a1386c4893510b647179ee7f2->leave($__internal_0d43fed0875013dd9aabd4b2a8eff2c1db7eb53a1386c4893510b647179ee7f2_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_2a06a3d380538e113fe3f1bab7952d7c74a7399b990b616564883a2967dd4089 = $this->env->getExtension("native_profiler");
        $__internal_2a06a3d380538e113fe3f1bab7952d7c74a7399b990b616564883a2967dd4089->enter($__internal_2a06a3d380538e113fe3f1bab7952d7c74a7399b990b616564883a2967dd4089_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_2a06a3d380538e113fe3f1bab7952d7c74a7399b990b616564883a2967dd4089->leave($__internal_2a06a3d380538e113fe3f1bab7952d7c74a7399b990b616564883a2967dd4089_prof);

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
