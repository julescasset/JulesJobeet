<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_30672eb512ff179d7faccfc5e393e8a4aa8b452e50420e4aae860f37f45c5b59 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_87e560ad559bef04f9630ddcae212083662b27369df6491782b2119b46a74651 = $this->env->getExtension("native_profiler");
        $__internal_87e560ad559bef04f9630ddcae212083662b27369df6491782b2119b46a74651->enter($__internal_87e560ad559bef04f9630ddcae212083662b27369df6491782b2119b46a74651_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_87e560ad559bef04f9630ddcae212083662b27369df6491782b2119b46a74651->leave($__internal_87e560ad559bef04f9630ddcae212083662b27369df6491782b2119b46a74651_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_f77d0019803439cc151f2ab6f96bcd7b16fc366037e5e338d798130adce25109 = $this->env->getExtension("native_profiler");
        $__internal_f77d0019803439cc151f2ab6f96bcd7b16fc366037e5e338d798130adce25109->enter($__internal_f77d0019803439cc151f2ab6f96bcd7b16fc366037e5e338d798130adce25109_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_f77d0019803439cc151f2ab6f96bcd7b16fc366037e5e338d798130adce25109->leave($__internal_f77d0019803439cc151f2ab6f96bcd7b16fc366037e5e338d798130adce25109_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
