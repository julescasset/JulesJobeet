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
        $__internal_9f2e4624c261ff81a504b7eb000b3df9be023d5c8e2bac2b5fd0832462053cb9 = $this->env->getExtension("native_profiler");
        $__internal_9f2e4624c261ff81a504b7eb000b3df9be023d5c8e2bac2b5fd0832462053cb9->enter($__internal_9f2e4624c261ff81a504b7eb000b3df9be023d5c8e2bac2b5fd0832462053cb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9f2e4624c261ff81a504b7eb000b3df9be023d5c8e2bac2b5fd0832462053cb9->leave($__internal_9f2e4624c261ff81a504b7eb000b3df9be023d5c8e2bac2b5fd0832462053cb9_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_367cb1bccbad177c8062c953e0065867c7f5b8c33a2af59ff2cee19b10233dd1 = $this->env->getExtension("native_profiler");
        $__internal_367cb1bccbad177c8062c953e0065867c7f5b8c33a2af59ff2cee19b10233dd1->enter($__internal_367cb1bccbad177c8062c953e0065867c7f5b8c33a2af59ff2cee19b10233dd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_367cb1bccbad177c8062c953e0065867c7f5b8c33a2af59ff2cee19b10233dd1->leave($__internal_367cb1bccbad177c8062c953e0065867c7f5b8c33a2af59ff2cee19b10233dd1_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_dc0d057459a2735b8c975b5ebec1daa7e2ed60ca9d19bdee95270cddc4d10ef7 = $this->env->getExtension("native_profiler");
        $__internal_dc0d057459a2735b8c975b5ebec1daa7e2ed60ca9d19bdee95270cddc4d10ef7->enter($__internal_dc0d057459a2735b8c975b5ebec1daa7e2ed60ca9d19bdee95270cddc4d10ef7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_dc0d057459a2735b8c975b5ebec1daa7e2ed60ca9d19bdee95270cddc4d10ef7->leave($__internal_dc0d057459a2735b8c975b5ebec1daa7e2ed60ca9d19bdee95270cddc4d10ef7_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_d54a62b01fa2acf4f1250e22b1a6b58809b2d2a7a42ff057730e0ba0f40137ca = $this->env->getExtension("native_profiler");
        $__internal_d54a62b01fa2acf4f1250e22b1a6b58809b2d2a7a42ff057730e0ba0f40137ca->enter($__internal_d54a62b01fa2acf4f1250e22b1a6b58809b2d2a7a42ff057730e0ba0f40137ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_d54a62b01fa2acf4f1250e22b1a6b58809b2d2a7a42ff057730e0ba0f40137ca->leave($__internal_d54a62b01fa2acf4f1250e22b1a6b58809b2d2a7a42ff057730e0ba0f40137ca_prof);

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
