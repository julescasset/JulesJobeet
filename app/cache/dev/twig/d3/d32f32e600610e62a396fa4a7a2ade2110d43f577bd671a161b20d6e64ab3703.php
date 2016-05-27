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
        $__internal_de34b0bc3b7c4319341a46919e517bf2334fccc43eca0ded927fed7b47b5c0af = $this->env->getExtension("native_profiler");
        $__internal_de34b0bc3b7c4319341a46919e517bf2334fccc43eca0ded927fed7b47b5c0af->enter($__internal_de34b0bc3b7c4319341a46919e517bf2334fccc43eca0ded927fed7b47b5c0af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_de34b0bc3b7c4319341a46919e517bf2334fccc43eca0ded927fed7b47b5c0af->leave($__internal_de34b0bc3b7c4319341a46919e517bf2334fccc43eca0ded927fed7b47b5c0af_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_414f4a871f2c569439dce845a8d4b4e9937a5d4b6c4ffe29c9c53924da1026f4 = $this->env->getExtension("native_profiler");
        $__internal_414f4a871f2c569439dce845a8d4b4e9937a5d4b6c4ffe29c9c53924da1026f4->enter($__internal_414f4a871f2c569439dce845a8d4b4e9937a5d4b6c4ffe29c9c53924da1026f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_414f4a871f2c569439dce845a8d4b4e9937a5d4b6c4ffe29c9c53924da1026f4->leave($__internal_414f4a871f2c569439dce845a8d4b4e9937a5d4b6c4ffe29c9c53924da1026f4_prof);

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
