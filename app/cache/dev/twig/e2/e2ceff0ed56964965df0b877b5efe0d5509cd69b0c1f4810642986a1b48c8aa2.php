<?php

/* job/new.html.twig */
class __TwigTemplate_949769509d3d64ccdb8f4293a21a19a4947a5753f2383a2dc8b06bf80fd8006e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "job/new.html.twig", 1);
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
        $__internal_de16ab532b16d8d7ae74b4f83f191c4cf7a6a86c539e1ffacb16e693df0804f3 = $this->env->getExtension("native_profiler");
        $__internal_de16ab532b16d8d7ae74b4f83f191c4cf7a6a86c539e1ffacb16e693df0804f3->enter($__internal_de16ab532b16d8d7ae74b4f83f191c4cf7a6a86c539e1ffacb16e693df0804f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "job/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_de16ab532b16d8d7ae74b4f83f191c4cf7a6a86c539e1ffacb16e693df0804f3->leave($__internal_de16ab532b16d8d7ae74b4f83f191c4cf7a6a86c539e1ffacb16e693df0804f3_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f13da1d3eb4a1f1bdf93b747454cd28d7c4d9048706be82bdd2be5a1a704e9c2 = $this->env->getExtension("native_profiler");
        $__internal_f13da1d3eb4a1f1bdf93b747454cd28d7c4d9048706be82bdd2be5a1a704e9c2->enter($__internal_f13da1d3eb4a1f1bdf93b747454cd28d7c4d9048706be82bdd2be5a1a704e9c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_f13da1d3eb4a1f1bdf93b747454cd28d7c4d9048706be82bdd2be5a1a704e9c2->leave($__internal_f13da1d3eb4a1f1bdf93b747454cd28d7c4d9048706be82bdd2be5a1a704e9c2_prof);

    }

    public function getTemplateName()
    {
        return "job/new.html.twig";
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
