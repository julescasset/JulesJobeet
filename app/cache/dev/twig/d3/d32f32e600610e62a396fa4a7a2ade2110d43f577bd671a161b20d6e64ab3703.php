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
        $__internal_08c75363d17909c3d3a2fd2eb21180b5cb44d165e9c8bfa9322427828a60c958 = $this->env->getExtension("native_profiler");
        $__internal_08c75363d17909c3d3a2fd2eb21180b5cb44d165e9c8bfa9322427828a60c958->enter($__internal_08c75363d17909c3d3a2fd2eb21180b5cb44d165e9c8bfa9322427828a60c958_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_08c75363d17909c3d3a2fd2eb21180b5cb44d165e9c8bfa9322427828a60c958->leave($__internal_08c75363d17909c3d3a2fd2eb21180b5cb44d165e9c8bfa9322427828a60c958_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_9997f92aacb0e506fbb49aeca55fb50cf24931ebba2aff4d625dffe223f42c34 = $this->env->getExtension("native_profiler");
        $__internal_9997f92aacb0e506fbb49aeca55fb50cf24931ebba2aff4d625dffe223f42c34->enter($__internal_9997f92aacb0e506fbb49aeca55fb50cf24931ebba2aff4d625dffe223f42c34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_9997f92aacb0e506fbb49aeca55fb50cf24931ebba2aff4d625dffe223f42c34->leave($__internal_9997f92aacb0e506fbb49aeca55fb50cf24931ebba2aff4d625dffe223f42c34_prof);

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
