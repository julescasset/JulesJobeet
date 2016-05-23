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
        $__internal_0baeb001e61f3ee744426e2ac11ac264cc3a2ce455e9be9bc62e1bc9ceb934e8 = $this->env->getExtension("native_profiler");
        $__internal_0baeb001e61f3ee744426e2ac11ac264cc3a2ce455e9be9bc62e1bc9ceb934e8->enter($__internal_0baeb001e61f3ee744426e2ac11ac264cc3a2ce455e9be9bc62e1bc9ceb934e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_0baeb001e61f3ee744426e2ac11ac264cc3a2ce455e9be9bc62e1bc9ceb934e8->leave($__internal_0baeb001e61f3ee744426e2ac11ac264cc3a2ce455e9be9bc62e1bc9ceb934e8_prof);

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
