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
        $__internal_b7a6756f5ca154cd7de7952d256d14d4a747e1b8a9e748b3cc38ac8adc40b4a6 = $this->env->getExtension("native_profiler");
        $__internal_b7a6756f5ca154cd7de7952d256d14d4a747e1b8a9e748b3cc38ac8adc40b4a6->enter($__internal_b7a6756f5ca154cd7de7952d256d14d4a747e1b8a9e748b3cc38ac8adc40b4a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_b7a6756f5ca154cd7de7952d256d14d4a747e1b8a9e748b3cc38ac8adc40b4a6->leave($__internal_b7a6756f5ca154cd7de7952d256d14d4a747e1b8a9e748b3cc38ac8adc40b4a6_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_5d38bedf752171c25555a0430da60f6ea6b5b7acd1a844dda1bf7344079b5447 = $this->env->getExtension("native_profiler");
        $__internal_5d38bedf752171c25555a0430da60f6ea6b5b7acd1a844dda1bf7344079b5447->enter($__internal_5d38bedf752171c25555a0430da60f6ea6b5b7acd1a844dda1bf7344079b5447_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_5d38bedf752171c25555a0430da60f6ea6b5b7acd1a844dda1bf7344079b5447->leave($__internal_5d38bedf752171c25555a0430da60f6ea6b5b7acd1a844dda1bf7344079b5447_prof);

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
