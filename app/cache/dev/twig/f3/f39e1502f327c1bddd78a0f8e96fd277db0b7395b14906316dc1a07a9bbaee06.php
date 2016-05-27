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
        $__internal_931e138ee3369f71ad2a0e22fdc79fb61da774e4dc22bae7273379c8430ae4a8 = $this->env->getExtension("native_profiler");
        $__internal_931e138ee3369f71ad2a0e22fdc79fb61da774e4dc22bae7273379c8430ae4a8->enter($__internal_931e138ee3369f71ad2a0e22fdc79fb61da774e4dc22bae7273379c8430ae4a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_931e138ee3369f71ad2a0e22fdc79fb61da774e4dc22bae7273379c8430ae4a8->leave($__internal_931e138ee3369f71ad2a0e22fdc79fb61da774e4dc22bae7273379c8430ae4a8_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0952879a905ae34a48254842121901e7a2b97d82e13e9173c0abfce402d6b8b0 = $this->env->getExtension("native_profiler");
        $__internal_0952879a905ae34a48254842121901e7a2b97d82e13e9173c0abfce402d6b8b0->enter($__internal_0952879a905ae34a48254842121901e7a2b97d82e13e9173c0abfce402d6b8b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_0952879a905ae34a48254842121901e7a2b97d82e13e9173c0abfce402d6b8b0->leave($__internal_0952879a905ae34a48254842121901e7a2b97d82e13e9173c0abfce402d6b8b0_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_cd337328b503af5a97b8641a00da53cec0b32280dcaaacc101ade87dead68bd0 = $this->env->getExtension("native_profiler");
        $__internal_cd337328b503af5a97b8641a00da53cec0b32280dcaaacc101ade87dead68bd0->enter($__internal_cd337328b503af5a97b8641a00da53cec0b32280dcaaacc101ade87dead68bd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_cd337328b503af5a97b8641a00da53cec0b32280dcaaacc101ade87dead68bd0->leave($__internal_cd337328b503af5a97b8641a00da53cec0b32280dcaaacc101ade87dead68bd0_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_228a2d568ae917847ff9b8844660032e0e1d364d1db5014c8d07df7b5995a7df = $this->env->getExtension("native_profiler");
        $__internal_228a2d568ae917847ff9b8844660032e0e1d364d1db5014c8d07df7b5995a7df->enter($__internal_228a2d568ae917847ff9b8844660032e0e1d364d1db5014c8d07df7b5995a7df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_228a2d568ae917847ff9b8844660032e0e1d364d1db5014c8d07df7b5995a7df->leave($__internal_228a2d568ae917847ff9b8844660032e0e1d364d1db5014c8d07df7b5995a7df_prof);

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
