<?php

/* :job:new.html.twig */
class __TwigTemplate_d3a0b47d3bd6dee6118757b5b875dabfa48cd63b3c329818191d0542d46c88e1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":job:new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2bc374bfcb1d941bf5d261c16e0a83c9f102d5af2e493b6270e0452fc690d7a7 = $this->env->getExtension("native_profiler");
        $__internal_2bc374bfcb1d941bf5d261c16e0a83c9f102d5af2e493b6270e0452fc690d7a7->enter($__internal_2bc374bfcb1d941bf5d261c16e0a83c9f102d5af2e493b6270e0452fc690d7a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":job:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2bc374bfcb1d941bf5d261c16e0a83c9f102d5af2e493b6270e0452fc690d7a7->leave($__internal_2bc374bfcb1d941bf5d261c16e0a83c9f102d5af2e493b6270e0452fc690d7a7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_33c42b52f0d6ae6555d9fb21cc4b2dc0d1faf9175e03e925ba72125b070e434a = $this->env->getExtension("native_profiler");
        $__internal_33c42b52f0d6ae6555d9fb21cc4b2dc0d1faf9175e03e925ba72125b070e434a->enter($__internal_33c42b52f0d6ae6555d9fb21cc4b2dc0d1faf9175e03e925ba72125b070e434a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Job creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("ens_job_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_33c42b52f0d6ae6555d9fb21cc4b2dc0d1faf9175e03e925ba72125b070e434a->leave($__internal_33c42b52f0d6ae6555d9fb21cc4b2dc0d1faf9175e03e925ba72125b070e434a_prof);

    }

    public function getTemplateName()
    {
        return ":job:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Job creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('ens_job_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
