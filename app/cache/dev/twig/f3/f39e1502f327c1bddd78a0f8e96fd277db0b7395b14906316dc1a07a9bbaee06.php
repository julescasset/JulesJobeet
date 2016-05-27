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
        $__internal_29342d5bcaba38c9d31d99cfa81754c791f40c0f1de77131fa89fc9bfafc2aa2 = $this->env->getExtension("native_profiler");
        $__internal_29342d5bcaba38c9d31d99cfa81754c791f40c0f1de77131fa89fc9bfafc2aa2->enter($__internal_29342d5bcaba38c9d31d99cfa81754c791f40c0f1de77131fa89fc9bfafc2aa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_29342d5bcaba38c9d31d99cfa81754c791f40c0f1de77131fa89fc9bfafc2aa2->leave($__internal_29342d5bcaba38c9d31d99cfa81754c791f40c0f1de77131fa89fc9bfafc2aa2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e828aca6f64338b45891428468f8632090bacc9e10073cb2e55f563e173ad746 = $this->env->getExtension("native_profiler");
        $__internal_e828aca6f64338b45891428468f8632090bacc9e10073cb2e55f563e173ad746->enter($__internal_e828aca6f64338b45891428468f8632090bacc9e10073cb2e55f563e173ad746_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_e828aca6f64338b45891428468f8632090bacc9e10073cb2e55f563e173ad746->leave($__internal_e828aca6f64338b45891428468f8632090bacc9e10073cb2e55f563e173ad746_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b11693785a29ea5957a81be105f7651b2c54de9debdc1f38aed7fb94b6a3f071 = $this->env->getExtension("native_profiler");
        $__internal_b11693785a29ea5957a81be105f7651b2c54de9debdc1f38aed7fb94b6a3f071->enter($__internal_b11693785a29ea5957a81be105f7651b2c54de9debdc1f38aed7fb94b6a3f071_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_b11693785a29ea5957a81be105f7651b2c54de9debdc1f38aed7fb94b6a3f071->leave($__internal_b11693785a29ea5957a81be105f7651b2c54de9debdc1f38aed7fb94b6a3f071_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_c17af06621d8dd7946fa8a7ffcb9180e189b406b9448636d088701a17d39c8d3 = $this->env->getExtension("native_profiler");
        $__internal_c17af06621d8dd7946fa8a7ffcb9180e189b406b9448636d088701a17d39c8d3->enter($__internal_c17af06621d8dd7946fa8a7ffcb9180e189b406b9448636d088701a17d39c8d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_c17af06621d8dd7946fa8a7ffcb9180e189b406b9448636d088701a17d39c8d3->leave($__internal_c17af06621d8dd7946fa8a7ffcb9180e189b406b9448636d088701a17d39c8d3_prof);

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
