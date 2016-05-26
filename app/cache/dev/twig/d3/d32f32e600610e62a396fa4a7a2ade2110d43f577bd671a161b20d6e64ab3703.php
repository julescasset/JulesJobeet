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
        $__internal_cc9fc444fe970dd06b00ca6244ae6182da70b7c9fae14e1282e316db3a98c846 = $this->env->getExtension("native_profiler");
        $__internal_cc9fc444fe970dd06b00ca6244ae6182da70b7c9fae14e1282e316db3a98c846->enter($__internal_cc9fc444fe970dd06b00ca6244ae6182da70b7c9fae14e1282e316db3a98c846_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_cc9fc444fe970dd06b00ca6244ae6182da70b7c9fae14e1282e316db3a98c846->leave($__internal_cc9fc444fe970dd06b00ca6244ae6182da70b7c9fae14e1282e316db3a98c846_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_ec37b61614e0d7190bc5b622ae7fd1528c84bb1409628ed8ebe57e039de7ee88 = $this->env->getExtension("native_profiler");
        $__internal_ec37b61614e0d7190bc5b622ae7fd1528c84bb1409628ed8ebe57e039de7ee88->enter($__internal_ec37b61614e0d7190bc5b622ae7fd1528c84bb1409628ed8ebe57e039de7ee88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_ec37b61614e0d7190bc5b622ae7fd1528c84bb1409628ed8ebe57e039de7ee88->leave($__internal_ec37b61614e0d7190bc5b622ae7fd1528c84bb1409628ed8ebe57e039de7ee88_prof);

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
