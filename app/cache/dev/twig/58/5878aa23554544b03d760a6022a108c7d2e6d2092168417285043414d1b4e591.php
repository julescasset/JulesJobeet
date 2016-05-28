<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_907cd374627576f3d1add4767c32eb37126a0bb99c03bc0968c051123410694c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b4616df2f4dc349ae0cf060e9ed8fe0fdeb3626476d9b8932ef317598668dd93 = $this->env->getExtension("native_profiler");
        $__internal_b4616df2f4dc349ae0cf060e9ed8fe0fdeb3626476d9b8932ef317598668dd93->enter($__internal_b4616df2f4dc349ae0cf060e9ed8fe0fdeb3626476d9b8932ef317598668dd93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b4616df2f4dc349ae0cf060e9ed8fe0fdeb3626476d9b8932ef317598668dd93->leave($__internal_b4616df2f4dc349ae0cf060e9ed8fe0fdeb3626476d9b8932ef317598668dd93_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0e3600496597f584727844eb499a3edf43dcbae892bc55ab0b3f7861f7300540 = $this->env->getExtension("native_profiler");
        $__internal_0e3600496597f584727844eb499a3edf43dcbae892bc55ab0b3f7861f7300540->enter($__internal_0e3600496597f584727844eb499a3edf43dcbae892bc55ab0b3f7861f7300540_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_0e3600496597f584727844eb499a3edf43dcbae892bc55ab0b3f7861f7300540->leave($__internal_0e3600496597f584727844eb499a3edf43dcbae892bc55ab0b3f7861f7300540_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_ed3bbc7420fa4efb71899cdcbdf447992910917e4f27ba74f84f136b4d80185a = $this->env->getExtension("native_profiler");
        $__internal_ed3bbc7420fa4efb71899cdcbdf447992910917e4f27ba74f84f136b4d80185a->enter($__internal_ed3bbc7420fa4efb71899cdcbdf447992910917e4f27ba74f84f136b4d80185a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_ed3bbc7420fa4efb71899cdcbdf447992910917e4f27ba74f84f136b4d80185a->leave($__internal_ed3bbc7420fa4efb71899cdcbdf447992910917e4f27ba74f84f136b4d80185a_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
