<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_bc8bf5d6f6ea4b13be9ceb8f21df56707c851352b4c479f2a7ea07a00284ada1 extends Twig_Template
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
        $__internal_fac9ae2d8596955fa6fa9255204b5785f842dc578a50b379fde2fff0c52a8701 = $this->env->getExtension("native_profiler");
        $__internal_fac9ae2d8596955fa6fa9255204b5785f842dc578a50b379fde2fff0c52a8701->enter($__internal_fac9ae2d8596955fa6fa9255204b5785f842dc578a50b379fde2fff0c52a8701_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_fac9ae2d8596955fa6fa9255204b5785f842dc578a50b379fde2fff0c52a8701->leave($__internal_fac9ae2d8596955fa6fa9255204b5785f842dc578a50b379fde2fff0c52a8701_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
