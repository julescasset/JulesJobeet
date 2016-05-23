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
        $__internal_c3b0f6fd60038a37aa565273c11f1c64573bf4a68a68ef5ca42dc1c4e04b4b95 = $this->env->getExtension("native_profiler");
        $__internal_c3b0f6fd60038a37aa565273c11f1c64573bf4a68a68ef5ca42dc1c4e04b4b95->enter($__internal_c3b0f6fd60038a37aa565273c11f1c64573bf4a68a68ef5ca42dc1c4e04b4b95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_c3b0f6fd60038a37aa565273c11f1c64573bf4a68a68ef5ca42dc1c4e04b4b95->leave($__internal_c3b0f6fd60038a37aa565273c11f1c64573bf4a68a68ef5ca42dc1c4e04b4b95_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_fb92a96ccc087d9c43b44e00a29c61cb132ca9466a334555f660d8a218f10b0d = $this->env->getExtension("native_profiler");
        $__internal_fb92a96ccc087d9c43b44e00a29c61cb132ca9466a334555f660d8a218f10b0d->enter($__internal_fb92a96ccc087d9c43b44e00a29c61cb132ca9466a334555f660d8a218f10b0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_fb92a96ccc087d9c43b44e00a29c61cb132ca9466a334555f660d8a218f10b0d->leave($__internal_fb92a96ccc087d9c43b44e00a29c61cb132ca9466a334555f660d8a218f10b0d_prof);

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
