<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_909f1d44f790886a9832e4652c0e1f3f8083305dfb7dcddc4768bdd4f0bd65c0 extends Twig_Template
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
        $__internal_79e193866b0b42c0877c109bf640be7406bd181ec0786b63868a6b2f2f15fbb8 = $this->env->getExtension("native_profiler");
        $__internal_79e193866b0b42c0877c109bf640be7406bd181ec0786b63868a6b2f2f15fbb8->enter($__internal_79e193866b0b42c0877c109bf640be7406bd181ec0786b63868a6b2f2f15fbb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_79e193866b0b42c0877c109bf640be7406bd181ec0786b63868a6b2f2f15fbb8->leave($__internal_79e193866b0b42c0877c109bf640be7406bd181ec0786b63868a6b2f2f15fbb8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
