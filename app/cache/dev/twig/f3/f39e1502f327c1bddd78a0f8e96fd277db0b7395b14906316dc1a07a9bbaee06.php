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
        $__internal_17f67eaaadb515fafac4f0068e04506fe57e93a99d8577e44e7ffe28d9e761d8 = $this->env->getExtension("native_profiler");
        $__internal_17f67eaaadb515fafac4f0068e04506fe57e93a99d8577e44e7ffe28d9e761d8->enter($__internal_17f67eaaadb515fafac4f0068e04506fe57e93a99d8577e44e7ffe28d9e761d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_17f67eaaadb515fafac4f0068e04506fe57e93a99d8577e44e7ffe28d9e761d8->leave($__internal_17f67eaaadb515fafac4f0068e04506fe57e93a99d8577e44e7ffe28d9e761d8_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_230fac00b61df3bca11a933ec72a542c069351f0ccb3178f1c0dc7d7926c2d72 = $this->env->getExtension("native_profiler");
        $__internal_230fac00b61df3bca11a933ec72a542c069351f0ccb3178f1c0dc7d7926c2d72->enter($__internal_230fac00b61df3bca11a933ec72a542c069351f0ccb3178f1c0dc7d7926c2d72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_230fac00b61df3bca11a933ec72a542c069351f0ccb3178f1c0dc7d7926c2d72->leave($__internal_230fac00b61df3bca11a933ec72a542c069351f0ccb3178f1c0dc7d7926c2d72_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_496afd69da508e95f3d937aa3679efba1493d0446414d7e29ce03c8c21510cca = $this->env->getExtension("native_profiler");
        $__internal_496afd69da508e95f3d937aa3679efba1493d0446414d7e29ce03c8c21510cca->enter($__internal_496afd69da508e95f3d937aa3679efba1493d0446414d7e29ce03c8c21510cca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_496afd69da508e95f3d937aa3679efba1493d0446414d7e29ce03c8c21510cca->leave($__internal_496afd69da508e95f3d937aa3679efba1493d0446414d7e29ce03c8c21510cca_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_487a81d94cdb8a6ff5b640e22d74eb0960eff296437c24618c5179a4bb9fb786 = $this->env->getExtension("native_profiler");
        $__internal_487a81d94cdb8a6ff5b640e22d74eb0960eff296437c24618c5179a4bb9fb786->enter($__internal_487a81d94cdb8a6ff5b640e22d74eb0960eff296437c24618c5179a4bb9fb786_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_487a81d94cdb8a6ff5b640e22d74eb0960eff296437c24618c5179a4bb9fb786->leave($__internal_487a81d94cdb8a6ff5b640e22d74eb0960eff296437c24618c5179a4bb9fb786_prof);

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
