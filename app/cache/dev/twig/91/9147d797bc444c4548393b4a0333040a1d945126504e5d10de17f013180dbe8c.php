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
        $__internal_ce2bcca0141907d68436403bff6dc33d0bf80008631cacf961fa62548e837511 = $this->env->getExtension("native_profiler");
        $__internal_ce2bcca0141907d68436403bff6dc33d0bf80008631cacf961fa62548e837511->enter($__internal_ce2bcca0141907d68436403bff6dc33d0bf80008631cacf961fa62548e837511_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

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
        
        $__internal_ce2bcca0141907d68436403bff6dc33d0bf80008631cacf961fa62548e837511->leave($__internal_ce2bcca0141907d68436403bff6dc33d0bf80008631cacf961fa62548e837511_prof);

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
