<?php

/* :job:edit.html.twig */
class __TwigTemplate_4a1c5004029d90a2a1eae172be19fed3a01dd7ff477ebdccbfd8be7dfee4bb61 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EnsJulesBundle::layout.html.twig", ":job:edit.html.twig", 1);
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
        $__internal_dac1aa06405ec0dc8b6a7aa5162734a4c48944017f00bc21e77e39654116b8bb = $this->env->getExtension("native_profiler");
        $__internal_dac1aa06405ec0dc8b6a7aa5162734a4c48944017f00bc21e77e39654116b8bb->enter($__internal_dac1aa06405ec0dc8b6a7aa5162734a4c48944017f00bc21e77e39654116b8bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":job:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dac1aa06405ec0dc8b6a7aa5162734a4c48944017f00bc21e77e39654116b8bb->leave($__internal_dac1aa06405ec0dc8b6a7aa5162734a4c48944017f00bc21e77e39654116b8bb_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_e17c7a9734c38e016c61ab84bb9c8497cf9d0e176d333bd5594514c5073faed9 = $this->env->getExtension("native_profiler");
        $__internal_e17c7a9734c38e016c61ab84bb9c8497cf9d0e176d333bd5594514c5073faed9->enter($__internal_e17c7a9734c38e016c61ab84bb9c8497cf9d0e176d333bd5594514c5073faed9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <!-- original template code goes here -->
    <h1>Job edit</h1>

    ";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 10
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("ens_job_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 17
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 19
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_e17c7a9734c38e016c61ab84bb9c8497cf9d0e176d333bd5594514c5073faed9->leave($__internal_e17c7a9734c38e016c61ab84bb9c8497cf9d0e176d333bd5594514c5073faed9_prof);

    }

    public function getTemplateName()
    {
        return ":job:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 19,  67 => 17,  61 => 14,  54 => 10,  49 => 8,  45 => 7,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'EnsJulesBundle::layout.html.twig' %}*/
/* */
/* {% block content %}*/
/*     <!-- original template code goes here -->*/
/*     <h1>Job edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('ens_job_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
