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
        $__internal_2c64178666f51a1619ed2435e96eeeb86251141795ef7b6f9003a8a1b48c90fe = $this->env->getExtension("native_profiler");
        $__internal_2c64178666f51a1619ed2435e96eeeb86251141795ef7b6f9003a8a1b48c90fe->enter($__internal_2c64178666f51a1619ed2435e96eeeb86251141795ef7b6f9003a8a1b48c90fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2c64178666f51a1619ed2435e96eeeb86251141795ef7b6f9003a8a1b48c90fe->leave($__internal_2c64178666f51a1619ed2435e96eeeb86251141795ef7b6f9003a8a1b48c90fe_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_95a8ae32624282997bcfbfb429412de80fcb5ce0ab7a53c46ad973a890789370 = $this->env->getExtension("native_profiler");
        $__internal_95a8ae32624282997bcfbfb429412de80fcb5ce0ab7a53c46ad973a890789370->enter($__internal_95a8ae32624282997bcfbfb429412de80fcb5ce0ab7a53c46ad973a890789370_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_95a8ae32624282997bcfbfb429412de80fcb5ce0ab7a53c46ad973a890789370->leave($__internal_95a8ae32624282997bcfbfb429412de80fcb5ce0ab7a53c46ad973a890789370_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_225ea0dbe4c06de416961f35d2e96a01b58b053588b41d011fa92ff8d5402c68 = $this->env->getExtension("native_profiler");
        $__internal_225ea0dbe4c06de416961f35d2e96a01b58b053588b41d011fa92ff8d5402c68->enter($__internal_225ea0dbe4c06de416961f35d2e96a01b58b053588b41d011fa92ff8d5402c68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_225ea0dbe4c06de416961f35d2e96a01b58b053588b41d011fa92ff8d5402c68->leave($__internal_225ea0dbe4c06de416961f35d2e96a01b58b053588b41d011fa92ff8d5402c68_prof);

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
