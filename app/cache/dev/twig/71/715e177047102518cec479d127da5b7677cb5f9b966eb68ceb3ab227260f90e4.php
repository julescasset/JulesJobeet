<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_050e85b3afca24971e9b8a155788c34f567b70e7775f92da4730f60c93bfe9a5 extends Twig_Template
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
        $__internal_21cd3674611121bfcb31cdc796bc30a7cab538d2aaf305c71a0e798cc07bfb82 = $this->env->getExtension("native_profiler");
        $__internal_21cd3674611121bfcb31cdc796bc30a7cab538d2aaf305c71a0e798cc07bfb82->enter($__internal_21cd3674611121bfcb31cdc796bc30a7cab538d2aaf305c71a0e798cc07bfb82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_21cd3674611121bfcb31cdc796bc30a7cab538d2aaf305c71a0e798cc07bfb82->leave($__internal_21cd3674611121bfcb31cdc796bc30a7cab538d2aaf305c71a0e798cc07bfb82_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
