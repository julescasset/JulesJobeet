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
        $__internal_166d08c3dc91be79cd47ac325f4a6bc27360a6d9e9d90891d707035ba8c5fc03 = $this->env->getExtension("native_profiler");
        $__internal_166d08c3dc91be79cd47ac325f4a6bc27360a6d9e9d90891d707035ba8c5fc03->enter($__internal_166d08c3dc91be79cd47ac325f4a6bc27360a6d9e9d90891d707035ba8c5fc03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_166d08c3dc91be79cd47ac325f4a6bc27360a6d9e9d90891d707035ba8c5fc03->leave($__internal_166d08c3dc91be79cd47ac325f4a6bc27360a6d9e9d90891d707035ba8c5fc03_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_eef4e88434a629385147b59f8587c9dfc0f6e4a06af6b5766f1775d0f099623d = $this->env->getExtension("native_profiler");
        $__internal_eef4e88434a629385147b59f8587c9dfc0f6e4a06af6b5766f1775d0f099623d->enter($__internal_eef4e88434a629385147b59f8587c9dfc0f6e4a06af6b5766f1775d0f099623d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_eef4e88434a629385147b59f8587c9dfc0f6e4a06af6b5766f1775d0f099623d->leave($__internal_eef4e88434a629385147b59f8587c9dfc0f6e4a06af6b5766f1775d0f099623d_prof);

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
