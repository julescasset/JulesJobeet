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
        $__internal_e24bb0c439b9024bfaaab7aa290d2e27e3215be8c7f2f1fe060c9e97a4243865 = $this->env->getExtension("native_profiler");
        $__internal_e24bb0c439b9024bfaaab7aa290d2e27e3215be8c7f2f1fe060c9e97a4243865->enter($__internal_e24bb0c439b9024bfaaab7aa290d2e27e3215be8c7f2f1fe060c9e97a4243865_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_e24bb0c439b9024bfaaab7aa290d2e27e3215be8c7f2f1fe060c9e97a4243865->leave($__internal_e24bb0c439b9024bfaaab7aa290d2e27e3215be8c7f2f1fe060c9e97a4243865_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_b458c9423cad20bf0e70e9e795098cea4201556052d00d327d78b1157156d169 = $this->env->getExtension("native_profiler");
        $__internal_b458c9423cad20bf0e70e9e795098cea4201556052d00d327d78b1157156d169->enter($__internal_b458c9423cad20bf0e70e9e795098cea4201556052d00d327d78b1157156d169_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_b458c9423cad20bf0e70e9e795098cea4201556052d00d327d78b1157156d169->leave($__internal_b458c9423cad20bf0e70e9e795098cea4201556052d00d327d78b1157156d169_prof);

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
