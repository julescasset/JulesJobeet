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
        $__internal_f9e50a998fe7ebd9d17b299c7b4c889517a6c0bcafd55aff231f55a687cb2f69 = $this->env->getExtension("native_profiler");
        $__internal_f9e50a998fe7ebd9d17b299c7b4c889517a6c0bcafd55aff231f55a687cb2f69->enter($__internal_f9e50a998fe7ebd9d17b299c7b4c889517a6c0bcafd55aff231f55a687cb2f69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

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
        
        $__internal_f9e50a998fe7ebd9d17b299c7b4c889517a6c0bcafd55aff231f55a687cb2f69->leave($__internal_f9e50a998fe7ebd9d17b299c7b4c889517a6c0bcafd55aff231f55a687cb2f69_prof);

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
