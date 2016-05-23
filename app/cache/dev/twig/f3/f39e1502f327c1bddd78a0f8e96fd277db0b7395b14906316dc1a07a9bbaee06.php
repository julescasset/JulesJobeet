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
        $__internal_e9a279dd4f927e423e957c67f0c36a98dcb7ebee801fea87d9bb11a81155bae3 = $this->env->getExtension("native_profiler");
        $__internal_e9a279dd4f927e423e957c67f0c36a98dcb7ebee801fea87d9bb11a81155bae3->enter($__internal_e9a279dd4f927e423e957c67f0c36a98dcb7ebee801fea87d9bb11a81155bae3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e9a279dd4f927e423e957c67f0c36a98dcb7ebee801fea87d9bb11a81155bae3->leave($__internal_e9a279dd4f927e423e957c67f0c36a98dcb7ebee801fea87d9bb11a81155bae3_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_87419ff3e1fe2bd91bd9252018468e56953424e4476094688b7e806c12837a32 = $this->env->getExtension("native_profiler");
        $__internal_87419ff3e1fe2bd91bd9252018468e56953424e4476094688b7e806c12837a32->enter($__internal_87419ff3e1fe2bd91bd9252018468e56953424e4476094688b7e806c12837a32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_87419ff3e1fe2bd91bd9252018468e56953424e4476094688b7e806c12837a32->leave($__internal_87419ff3e1fe2bd91bd9252018468e56953424e4476094688b7e806c12837a32_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_31602bb028bf5ff5847aca3869ac642ea6d04cc7a59dd439e09224518fd265cf = $this->env->getExtension("native_profiler");
        $__internal_31602bb028bf5ff5847aca3869ac642ea6d04cc7a59dd439e09224518fd265cf->enter($__internal_31602bb028bf5ff5847aca3869ac642ea6d04cc7a59dd439e09224518fd265cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_31602bb028bf5ff5847aca3869ac642ea6d04cc7a59dd439e09224518fd265cf->leave($__internal_31602bb028bf5ff5847aca3869ac642ea6d04cc7a59dd439e09224518fd265cf_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_c7b5db5d2a51003881bab6ca3b017996fa0821bb43b82bb076e7fba2f23276e2 = $this->env->getExtension("native_profiler");
        $__internal_c7b5db5d2a51003881bab6ca3b017996fa0821bb43b82bb076e7fba2f23276e2->enter($__internal_c7b5db5d2a51003881bab6ca3b017996fa0821bb43b82bb076e7fba2f23276e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_c7b5db5d2a51003881bab6ca3b017996fa0821bb43b82bb076e7fba2f23276e2->leave($__internal_c7b5db5d2a51003881bab6ca3b017996fa0821bb43b82bb076e7fba2f23276e2_prof);

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
