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
        $__internal_14abfc8654a016c47ac40ec6b5929e475ac7303f7760966a31bb22cdf6f5c7a0 = $this->env->getExtension("native_profiler");
        $__internal_14abfc8654a016c47ac40ec6b5929e475ac7303f7760966a31bb22cdf6f5c7a0->enter($__internal_14abfc8654a016c47ac40ec6b5929e475ac7303f7760966a31bb22cdf6f5c7a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_14abfc8654a016c47ac40ec6b5929e475ac7303f7760966a31bb22cdf6f5c7a0->leave($__internal_14abfc8654a016c47ac40ec6b5929e475ac7303f7760966a31bb22cdf6f5c7a0_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_929a16c9c583782b6415094bd9418dac95ea197569054bc40565f8afa97a26f7 = $this->env->getExtension("native_profiler");
        $__internal_929a16c9c583782b6415094bd9418dac95ea197569054bc40565f8afa97a26f7->enter($__internal_929a16c9c583782b6415094bd9418dac95ea197569054bc40565f8afa97a26f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_929a16c9c583782b6415094bd9418dac95ea197569054bc40565f8afa97a26f7->leave($__internal_929a16c9c583782b6415094bd9418dac95ea197569054bc40565f8afa97a26f7_prof);

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
