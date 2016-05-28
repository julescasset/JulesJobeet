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
        $__internal_8d1c680598969fedaf6adb75c94a718fca5f2e8e6ced0c1c331be9e6b17183d2 = $this->env->getExtension("native_profiler");
        $__internal_8d1c680598969fedaf6adb75c94a718fca5f2e8e6ced0c1c331be9e6b17183d2->enter($__internal_8d1c680598969fedaf6adb75c94a718fca5f2e8e6ced0c1c331be9e6b17183d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8d1c680598969fedaf6adb75c94a718fca5f2e8e6ced0c1c331be9e6b17183d2->leave($__internal_8d1c680598969fedaf6adb75c94a718fca5f2e8e6ced0c1c331be9e6b17183d2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_01c5ed5230b86e487cfb8d1e8dceec8e22bf043e07e4786654c2c130551d6529 = $this->env->getExtension("native_profiler");
        $__internal_01c5ed5230b86e487cfb8d1e8dceec8e22bf043e07e4786654c2c130551d6529->enter($__internal_01c5ed5230b86e487cfb8d1e8dceec8e22bf043e07e4786654c2c130551d6529_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_01c5ed5230b86e487cfb8d1e8dceec8e22bf043e07e4786654c2c130551d6529->leave($__internal_01c5ed5230b86e487cfb8d1e8dceec8e22bf043e07e4786654c2c130551d6529_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_3dd9f0c572bf25661f84a23248896b848815fd5c130a11a79a1966a77f90da81 = $this->env->getExtension("native_profiler");
        $__internal_3dd9f0c572bf25661f84a23248896b848815fd5c130a11a79a1966a77f90da81->enter($__internal_3dd9f0c572bf25661f84a23248896b848815fd5c130a11a79a1966a77f90da81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_3dd9f0c572bf25661f84a23248896b848815fd5c130a11a79a1966a77f90da81->leave($__internal_3dd9f0c572bf25661f84a23248896b848815fd5c130a11a79a1966a77f90da81_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_5ed32e468324f55d9c61f55715a524bdac9109cc39ca41571b66cc01bc50c782 = $this->env->getExtension("native_profiler");
        $__internal_5ed32e468324f55d9c61f55715a524bdac9109cc39ca41571b66cc01bc50c782->enter($__internal_5ed32e468324f55d9c61f55715a524bdac9109cc39ca41571b66cc01bc50c782_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_5ed32e468324f55d9c61f55715a524bdac9109cc39ca41571b66cc01bc50c782->leave($__internal_5ed32e468324f55d9c61f55715a524bdac9109cc39ca41571b66cc01bc50c782_prof);

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
