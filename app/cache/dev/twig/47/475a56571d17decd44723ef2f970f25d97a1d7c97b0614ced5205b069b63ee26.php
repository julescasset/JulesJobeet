<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_7feb2c013fdc5c9773c919d059b73bdc66aaf7102d68f8238584f25b3d7306ff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_70b2bad4c36c45a54efd2ba03668c2550d2ce62112e24976a4169f256f47e93f = $this->env->getExtension("native_profiler");
        $__internal_70b2bad4c36c45a54efd2ba03668c2550d2ce62112e24976a4169f256f47e93f->enter($__internal_70b2bad4c36c45a54efd2ba03668c2550d2ce62112e24976a4169f256f47e93f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_70b2bad4c36c45a54efd2ba03668c2550d2ce62112e24976a4169f256f47e93f->leave($__internal_70b2bad4c36c45a54efd2ba03668c2550d2ce62112e24976a4169f256f47e93f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
