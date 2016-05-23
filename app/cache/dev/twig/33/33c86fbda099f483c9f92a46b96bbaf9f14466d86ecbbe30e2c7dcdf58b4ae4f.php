<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_1cd01aa84fb0d45072ce581169797a224e09e9101e4c3f6083665e9f26611ab5 extends Twig_Template
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
        $__internal_81047ba14d32ba0198a82a3a0b38cad67ad0684133bb1f70b7fb7251ae999b1d = $this->env->getExtension("native_profiler");
        $__internal_81047ba14d32ba0198a82a3a0b38cad67ad0684133bb1f70b7fb7251ae999b1d->enter($__internal_81047ba14d32ba0198a82a3a0b38cad67ad0684133bb1f70b7fb7251ae999b1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

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
        
        $__internal_81047ba14d32ba0198a82a3a0b38cad67ad0684133bb1f70b7fb7251ae999b1d->leave($__internal_81047ba14d32ba0198a82a3a0b38cad67ad0684133bb1f70b7fb7251ae999b1d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
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
