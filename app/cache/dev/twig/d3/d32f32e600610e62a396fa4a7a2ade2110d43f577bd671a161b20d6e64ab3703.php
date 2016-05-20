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
        $__internal_9634ac2e91943e96ba917c4a67efe9b1bf1b3fd78b9b7dea76f45d1b60b2d46f = $this->env->getExtension("native_profiler");
        $__internal_9634ac2e91943e96ba917c4a67efe9b1bf1b3fd78b9b7dea76f45d1b60b2d46f->enter($__internal_9634ac2e91943e96ba917c4a67efe9b1bf1b3fd78b9b7dea76f45d1b60b2d46f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_9634ac2e91943e96ba917c4a67efe9b1bf1b3fd78b9b7dea76f45d1b60b2d46f->leave($__internal_9634ac2e91943e96ba917c4a67efe9b1bf1b3fd78b9b7dea76f45d1b60b2d46f_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_02e5f88b052587bf2917010c1c29bf7f94bf429209edc55324c5af892a9ac4df = $this->env->getExtension("native_profiler");
        $__internal_02e5f88b052587bf2917010c1c29bf7f94bf429209edc55324c5af892a9ac4df->enter($__internal_02e5f88b052587bf2917010c1c29bf7f94bf429209edc55324c5af892a9ac4df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_02e5f88b052587bf2917010c1c29bf7f94bf429209edc55324c5af892a9ac4df->leave($__internal_02e5f88b052587bf2917010c1c29bf7f94bf429209edc55324c5af892a9ac4df_prof);

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
