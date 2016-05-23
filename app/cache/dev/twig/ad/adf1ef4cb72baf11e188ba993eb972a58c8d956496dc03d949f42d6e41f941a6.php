<?php

/* :job:new.html.twig */
class __TwigTemplate_d3a0b47d3bd6dee6118757b5b875dabfa48cd63b3c329818191d0542d46c88e1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EnsJulesBundle::layout.html.twig", ":job:new.html.twig", 1);
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
        $__internal_2822e17f61937a96e6344494593d1a652a151a21d936081f8548b728141e650d = $this->env->getExtension("native_profiler");
        $__internal_2822e17f61937a96e6344494593d1a652a151a21d936081f8548b728141e650d->enter($__internal_2822e17f61937a96e6344494593d1a652a151a21d936081f8548b728141e650d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":job:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2822e17f61937a96e6344494593d1a652a151a21d936081f8548b728141e650d->leave($__internal_2822e17f61937a96e6344494593d1a652a151a21d936081f8548b728141e650d_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_d0f72c51bbaa81fe6d2f8f63da3dd86d86a46b25d5dffbd58b2bd0719af69997 = $this->env->getExtension("native_profiler");
        $__internal_d0f72c51bbaa81fe6d2f8f63da3dd86d86a46b25d5dffbd58b2bd0719af69997->enter($__internal_d0f72c51bbaa81fe6d2f8f63da3dd86d86a46b25d5dffbd58b2bd0719af69997_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_d0f72c51bbaa81fe6d2f8f63da3dd86d86a46b25d5dffbd58b2bd0719af69997->leave($__internal_d0f72c51bbaa81fe6d2f8f63da3dd86d86a46b25d5dffbd58b2bd0719af69997_prof);

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
