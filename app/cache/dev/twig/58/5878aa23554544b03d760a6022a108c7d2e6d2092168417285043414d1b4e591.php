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
        $__internal_95a517961fcd6542d796d26890367b31ef4ddbde85721aeb8b5c97a51fa267a1 = $this->env->getExtension("native_profiler");
        $__internal_95a517961fcd6542d796d26890367b31ef4ddbde85721aeb8b5c97a51fa267a1->enter($__internal_95a517961fcd6542d796d26890367b31ef4ddbde85721aeb8b5c97a51fa267a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_95a517961fcd6542d796d26890367b31ef4ddbde85721aeb8b5c97a51fa267a1->leave($__internal_95a517961fcd6542d796d26890367b31ef4ddbde85721aeb8b5c97a51fa267a1_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_83567b71d59265e94f64a475ae0fd3670397e9e1226b1da14bd0e02aea6667e6 = $this->env->getExtension("native_profiler");
        $__internal_83567b71d59265e94f64a475ae0fd3670397e9e1226b1da14bd0e02aea6667e6->enter($__internal_83567b71d59265e94f64a475ae0fd3670397e9e1226b1da14bd0e02aea6667e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_83567b71d59265e94f64a475ae0fd3670397e9e1226b1da14bd0e02aea6667e6->leave($__internal_83567b71d59265e94f64a475ae0fd3670397e9e1226b1da14bd0e02aea6667e6_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_0b081736bcef180182157eedd47f262ee06f04bdaf034de916539f5f3365dcf8 = $this->env->getExtension("native_profiler");
        $__internal_0b081736bcef180182157eedd47f262ee06f04bdaf034de916539f5f3365dcf8->enter($__internal_0b081736bcef180182157eedd47f262ee06f04bdaf034de916539f5f3365dcf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_0b081736bcef180182157eedd47f262ee06f04bdaf034de916539f5f3365dcf8->leave($__internal_0b081736bcef180182157eedd47f262ee06f04bdaf034de916539f5f3365dcf8_prof);

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
