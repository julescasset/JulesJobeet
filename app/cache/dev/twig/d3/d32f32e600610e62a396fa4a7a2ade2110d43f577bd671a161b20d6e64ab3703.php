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
        $__internal_9ba072cb0b9cd22b58f9893d2a755600c3dac1ff0efca87d99727a58a92d4200 = $this->env->getExtension("native_profiler");
        $__internal_9ba072cb0b9cd22b58f9893d2a755600c3dac1ff0efca87d99727a58a92d4200->enter($__internal_9ba072cb0b9cd22b58f9893d2a755600c3dac1ff0efca87d99727a58a92d4200_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_9ba072cb0b9cd22b58f9893d2a755600c3dac1ff0efca87d99727a58a92d4200->leave($__internal_9ba072cb0b9cd22b58f9893d2a755600c3dac1ff0efca87d99727a58a92d4200_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_7bed1540231854a4390a6a090e80810ac996a6ce895a3d8f5fbfd63bca085b57 = $this->env->getExtension("native_profiler");
        $__internal_7bed1540231854a4390a6a090e80810ac996a6ce895a3d8f5fbfd63bca085b57->enter($__internal_7bed1540231854a4390a6a090e80810ac996a6ce895a3d8f5fbfd63bca085b57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_7bed1540231854a4390a6a090e80810ac996a6ce895a3d8f5fbfd63bca085b57->leave($__internal_7bed1540231854a4390a6a090e80810ac996a6ce895a3d8f5fbfd63bca085b57_prof);

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
