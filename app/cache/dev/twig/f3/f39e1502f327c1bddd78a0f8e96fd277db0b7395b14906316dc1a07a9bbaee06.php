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
        $__internal_54d24ec4263bfe05fdfc8870b0b380e9fa5e399600e8d0599cec0b5332ee4838 = $this->env->getExtension("native_profiler");
        $__internal_54d24ec4263bfe05fdfc8870b0b380e9fa5e399600e8d0599cec0b5332ee4838->enter($__internal_54d24ec4263bfe05fdfc8870b0b380e9fa5e399600e8d0599cec0b5332ee4838_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_54d24ec4263bfe05fdfc8870b0b380e9fa5e399600e8d0599cec0b5332ee4838->leave($__internal_54d24ec4263bfe05fdfc8870b0b380e9fa5e399600e8d0599cec0b5332ee4838_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c645a9e4bd644f12f1b3190f1818c2b97057c6f89cb5d689b0119022d80906ee = $this->env->getExtension("native_profiler");
        $__internal_c645a9e4bd644f12f1b3190f1818c2b97057c6f89cb5d689b0119022d80906ee->enter($__internal_c645a9e4bd644f12f1b3190f1818c2b97057c6f89cb5d689b0119022d80906ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_c645a9e4bd644f12f1b3190f1818c2b97057c6f89cb5d689b0119022d80906ee->leave($__internal_c645a9e4bd644f12f1b3190f1818c2b97057c6f89cb5d689b0119022d80906ee_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_8523b4e5751c98ec422a4e7ea085a5a1fc8fb3be6f4f720f6ce75932305a46e8 = $this->env->getExtension("native_profiler");
        $__internal_8523b4e5751c98ec422a4e7ea085a5a1fc8fb3be6f4f720f6ce75932305a46e8->enter($__internal_8523b4e5751c98ec422a4e7ea085a5a1fc8fb3be6f4f720f6ce75932305a46e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_8523b4e5751c98ec422a4e7ea085a5a1fc8fb3be6f4f720f6ce75932305a46e8->leave($__internal_8523b4e5751c98ec422a4e7ea085a5a1fc8fb3be6f4f720f6ce75932305a46e8_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_73f38ebe7f0e1b4442b8a1ab89ea056f6c0838cf5ebc77bfc5a4bdd44736bb15 = $this->env->getExtension("native_profiler");
        $__internal_73f38ebe7f0e1b4442b8a1ab89ea056f6c0838cf5ebc77bfc5a4bdd44736bb15->enter($__internal_73f38ebe7f0e1b4442b8a1ab89ea056f6c0838cf5ebc77bfc5a4bdd44736bb15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_73f38ebe7f0e1b4442b8a1ab89ea056f6c0838cf5ebc77bfc5a4bdd44736bb15->leave($__internal_73f38ebe7f0e1b4442b8a1ab89ea056f6c0838cf5ebc77bfc5a4bdd44736bb15_prof);

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
