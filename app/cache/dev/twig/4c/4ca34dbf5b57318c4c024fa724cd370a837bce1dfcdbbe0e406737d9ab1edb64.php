<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_49e918602e533cd283ff1d8e9f38485d4de44992005cae786e5654d0b387f085 extends Twig_Template
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
        $__internal_f944ab543c5b59aebef0d8b348d6f67ba62608f8b42e5ea73e657c9fc635b1ae = $this->env->getExtension("native_profiler");
        $__internal_f944ab543c5b59aebef0d8b348d6f67ba62608f8b42e5ea73e657c9fc635b1ae->enter($__internal_f944ab543c5b59aebef0d8b348d6f67ba62608f8b42e5ea73e657c9fc635b1ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_f944ab543c5b59aebef0d8b348d6f67ba62608f8b42e5ea73e657c9fc635b1ae->leave($__internal_f944ab543c5b59aebef0d8b348d6f67ba62608f8b42e5ea73e657c9fc635b1ae_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  28 => 3,  24 => 2,  22 => 1,);
    }
}
/* {% if exception.trace|length %}*/
/* {% for trace in exception.trace %}*/
/* {% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}*/
/* */
/* {% endfor %}*/
/* {% endif %}*/
/* */
