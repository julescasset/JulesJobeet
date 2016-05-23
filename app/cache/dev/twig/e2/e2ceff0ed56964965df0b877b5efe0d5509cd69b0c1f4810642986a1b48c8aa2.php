<?php

/* job/new.html.twig */
class __TwigTemplate_949769509d3d64ccdb8f4293a21a19a4947a5753f2383a2dc8b06bf80fd8006e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EnsJulesBundle::layout.html.twig", "job/new.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EnsJulesBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ce027f6bf4b4a78d9a3f976a378141a3b4c983ebf19fcd8cbc381c829be6b406 = $this->env->getExtension("native_profiler");
        $__internal_ce027f6bf4b4a78d9a3f976a378141a3b4c983ebf19fcd8cbc381c829be6b406->enter($__internal_ce027f6bf4b4a78d9a3f976a378141a3b4c983ebf19fcd8cbc381c829be6b406_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "job/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ce027f6bf4b4a78d9a3f976a378141a3b4c983ebf19fcd8cbc381c829be6b406->leave($__internal_ce027f6bf4b4a78d9a3f976a378141a3b4c983ebf19fcd8cbc381c829be6b406_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_b0b1fcff37f2fb2dbf1407b84b09d5dd5b5f37574e81e1e24bc9066f2cff450e = $this->env->getExtension("native_profiler");
        $__internal_b0b1fcff37f2fb2dbf1407b84b09d5dd5b5f37574e81e1e24bc9066f2cff450e->enter($__internal_b0b1fcff37f2fb2dbf1407b84b09d5dd5b5f37574e81e1e24bc9066f2cff450e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <!-- original template code goes here -->
    <h1>Job creation</h1>

    ";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 10
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("ens_job_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_b0b1fcff37f2fb2dbf1407b84b09d5dd5b5f37574e81e1e24bc9066f2cff450e->leave($__internal_b0b1fcff37f2fb2dbf1407b84b09d5dd5b5f37574e81e1e24bc9066f2cff450e_prof);

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
        return array (  61 => 14,  54 => 10,  49 => 8,  45 => 7,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'EnsJulesBundle::layout.html.twig' %}*/
/* */
/* {% block content %}*/
/*     <!-- original template code goes here -->*/
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
