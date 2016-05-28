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
        $__internal_3949e21562b946dae4c9cbcc231ee74fa40e7e6e5669f3769c24a9ca603dc742 = $this->env->getExtension("native_profiler");
        $__internal_3949e21562b946dae4c9cbcc231ee74fa40e7e6e5669f3769c24a9ca603dc742->enter($__internal_3949e21562b946dae4c9cbcc231ee74fa40e7e6e5669f3769c24a9ca603dc742_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3949e21562b946dae4c9cbcc231ee74fa40e7e6e5669f3769c24a9ca603dc742->leave($__internal_3949e21562b946dae4c9cbcc231ee74fa40e7e6e5669f3769c24a9ca603dc742_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_fb813858f3b9a25fa9a126f15e848d74d0676b7111bafc38da4a1e553eab7f9d = $this->env->getExtension("native_profiler");
        $__internal_fb813858f3b9a25fa9a126f15e848d74d0676b7111bafc38da4a1e553eab7f9d->enter($__internal_fb813858f3b9a25fa9a126f15e848d74d0676b7111bafc38da4a1e553eab7f9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_fb813858f3b9a25fa9a126f15e848d74d0676b7111bafc38da4a1e553eab7f9d->leave($__internal_fb813858f3b9a25fa9a126f15e848d74d0676b7111bafc38da4a1e553eab7f9d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a86ce2e4ab93e3455679d8e8afff1ef22f61c7d25af5c46a36410d0b8b9debb9 = $this->env->getExtension("native_profiler");
        $__internal_a86ce2e4ab93e3455679d8e8afff1ef22f61c7d25af5c46a36410d0b8b9debb9->enter($__internal_a86ce2e4ab93e3455679d8e8afff1ef22f61c7d25af5c46a36410d0b8b9debb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a86ce2e4ab93e3455679d8e8afff1ef22f61c7d25af5c46a36410d0b8b9debb9->leave($__internal_a86ce2e4ab93e3455679d8e8afff1ef22f61c7d25af5c46a36410d0b8b9debb9_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_b6d79e3b65fa6f24c379388a4e163e9f30ef5a3059f1b811a540e7a3d04511c5 = $this->env->getExtension("native_profiler");
        $__internal_b6d79e3b65fa6f24c379388a4e163e9f30ef5a3059f1b811a540e7a3d04511c5->enter($__internal_b6d79e3b65fa6f24c379388a4e163e9f30ef5a3059f1b811a540e7a3d04511c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_b6d79e3b65fa6f24c379388a4e163e9f30ef5a3059f1b811a540e7a3d04511c5->leave($__internal_b6d79e3b65fa6f24c379388a4e163e9f30ef5a3059f1b811a540e7a3d04511c5_prof);

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
