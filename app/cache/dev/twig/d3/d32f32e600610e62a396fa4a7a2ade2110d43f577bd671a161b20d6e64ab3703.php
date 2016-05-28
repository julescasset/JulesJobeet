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
        $__internal_098f5a7bf31bc6dd11c1f1ebae19c5747c34e7d69715788e2d7b2fd607958083 = $this->env->getExtension("native_profiler");
        $__internal_098f5a7bf31bc6dd11c1f1ebae19c5747c34e7d69715788e2d7b2fd607958083->enter($__internal_098f5a7bf31bc6dd11c1f1ebae19c5747c34e7d69715788e2d7b2fd607958083_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_098f5a7bf31bc6dd11c1f1ebae19c5747c34e7d69715788e2d7b2fd607958083->leave($__internal_098f5a7bf31bc6dd11c1f1ebae19c5747c34e7d69715788e2d7b2fd607958083_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_e484dbe75a8cb24ce640417f988a01d91ea5c3713f263cb99670533b2390c395 = $this->env->getExtension("native_profiler");
        $__internal_e484dbe75a8cb24ce640417f988a01d91ea5c3713f263cb99670533b2390c395->enter($__internal_e484dbe75a8cb24ce640417f988a01d91ea5c3713f263cb99670533b2390c395_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_e484dbe75a8cb24ce640417f988a01d91ea5c3713f263cb99670533b2390c395->leave($__internal_e484dbe75a8cb24ce640417f988a01d91ea5c3713f263cb99670533b2390c395_prof);

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
