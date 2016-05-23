<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_f565df43c20154227219677d7b4a8d0fc19abc0f59f30aba9aa44824adde3080 extends Twig_Template
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
        $__internal_865d3da312c5a1dad9e4292434b754571dc87e5d2eea275ab661996d489593da = $this->env->getExtension("native_profiler");
        $__internal_865d3da312c5a1dad9e4292434b754571dc87e5d2eea275ab661996d489593da->enter($__internal_865d3da312c5a1dad9e4292434b754571dc87e5d2eea275ab661996d489593da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_865d3da312c5a1dad9e4292434b754571dc87e5d2eea275ab661996d489593da->leave($__internal_865d3da312c5a1dad9e4292434b754571dc87e5d2eea275ab661996d489593da_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_0035b625d048ac7a3786c1d3d5a8f22058b56945ffc552dfe955f3bdeca6d186 = $this->env->getExtension("native_profiler");
        $__internal_0035b625d048ac7a3786c1d3d5a8f22058b56945ffc552dfe955f3bdeca6d186->enter($__internal_0035b625d048ac7a3786c1d3d5a8f22058b56945ffc552dfe955f3bdeca6d186_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_0035b625d048ac7a3786c1d3d5a8f22058b56945ffc552dfe955f3bdeca6d186->leave($__internal_0035b625d048ac7a3786c1d3d5a8f22058b56945ffc552dfe955f3bdeca6d186_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
