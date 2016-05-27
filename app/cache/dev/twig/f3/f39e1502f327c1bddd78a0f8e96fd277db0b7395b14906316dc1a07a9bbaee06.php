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
        $__internal_c13364e94761f31531abe97bab7355156db2d622bb4e070502e8d751592a56ad = $this->env->getExtension("native_profiler");
        $__internal_c13364e94761f31531abe97bab7355156db2d622bb4e070502e8d751592a56ad->enter($__internal_c13364e94761f31531abe97bab7355156db2d622bb4e070502e8d751592a56ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c13364e94761f31531abe97bab7355156db2d622bb4e070502e8d751592a56ad->leave($__internal_c13364e94761f31531abe97bab7355156db2d622bb4e070502e8d751592a56ad_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d24b29eef73c09f11eaa9f8068d1b716ed25d99f5b47d1e956c8851452a2f320 = $this->env->getExtension("native_profiler");
        $__internal_d24b29eef73c09f11eaa9f8068d1b716ed25d99f5b47d1e956c8851452a2f320->enter($__internal_d24b29eef73c09f11eaa9f8068d1b716ed25d99f5b47d1e956c8851452a2f320_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_d24b29eef73c09f11eaa9f8068d1b716ed25d99f5b47d1e956c8851452a2f320->leave($__internal_d24b29eef73c09f11eaa9f8068d1b716ed25d99f5b47d1e956c8851452a2f320_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_5018ad6a872aa9d99815016a6354ba5c258d03d9cb76cda4f74a9c6a4e24d2b8 = $this->env->getExtension("native_profiler");
        $__internal_5018ad6a872aa9d99815016a6354ba5c258d03d9cb76cda4f74a9c6a4e24d2b8->enter($__internal_5018ad6a872aa9d99815016a6354ba5c258d03d9cb76cda4f74a9c6a4e24d2b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_5018ad6a872aa9d99815016a6354ba5c258d03d9cb76cda4f74a9c6a4e24d2b8->leave($__internal_5018ad6a872aa9d99815016a6354ba5c258d03d9cb76cda4f74a9c6a4e24d2b8_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_9c419450a61b020d27d10795285ebb9e19dd864faa552a3db50204acaeac5862 = $this->env->getExtension("native_profiler");
        $__internal_9c419450a61b020d27d10795285ebb9e19dd864faa552a3db50204acaeac5862->enter($__internal_9c419450a61b020d27d10795285ebb9e19dd864faa552a3db50204acaeac5862_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_9c419450a61b020d27d10795285ebb9e19dd864faa552a3db50204acaeac5862->leave($__internal_9c419450a61b020d27d10795285ebb9e19dd864faa552a3db50204acaeac5862_prof);

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
