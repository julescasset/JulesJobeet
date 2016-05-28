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
        $__internal_60a3464bd4ac185d52cba60b91656cb36583bbd9c34af1420efc97fb0266ef85 = $this->env->getExtension("native_profiler");
        $__internal_60a3464bd4ac185d52cba60b91656cb36583bbd9c34af1420efc97fb0266ef85->enter($__internal_60a3464bd4ac185d52cba60b91656cb36583bbd9c34af1420efc97fb0266ef85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_60a3464bd4ac185d52cba60b91656cb36583bbd9c34af1420efc97fb0266ef85->leave($__internal_60a3464bd4ac185d52cba60b91656cb36583bbd9c34af1420efc97fb0266ef85_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_c4b810799b635d880322b33002ae7afdc4b218d9ab49fdcb3278cbb3e8c3b05e = $this->env->getExtension("native_profiler");
        $__internal_c4b810799b635d880322b33002ae7afdc4b218d9ab49fdcb3278cbb3e8c3b05e->enter($__internal_c4b810799b635d880322b33002ae7afdc4b218d9ab49fdcb3278cbb3e8c3b05e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_c4b810799b635d880322b33002ae7afdc4b218d9ab49fdcb3278cbb3e8c3b05e->leave($__internal_c4b810799b635d880322b33002ae7afdc4b218d9ab49fdcb3278cbb3e8c3b05e_prof);

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
