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
        $__internal_466d94f1f875277d4474d3769f952aee90046ad6248a388a4f175bad647f2b98 = $this->env->getExtension("native_profiler");
        $__internal_466d94f1f875277d4474d3769f952aee90046ad6248a388a4f175bad647f2b98->enter($__internal_466d94f1f875277d4474d3769f952aee90046ad6248a388a4f175bad647f2b98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_466d94f1f875277d4474d3769f952aee90046ad6248a388a4f175bad647f2b98->leave($__internal_466d94f1f875277d4474d3769f952aee90046ad6248a388a4f175bad647f2b98_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7a16f585b201b1cf7cedb35435efe824b31e0c07788bf7248eabc57cc672fe14 = $this->env->getExtension("native_profiler");
        $__internal_7a16f585b201b1cf7cedb35435efe824b31e0c07788bf7248eabc57cc672fe14->enter($__internal_7a16f585b201b1cf7cedb35435efe824b31e0c07788bf7248eabc57cc672fe14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_7a16f585b201b1cf7cedb35435efe824b31e0c07788bf7248eabc57cc672fe14->leave($__internal_7a16f585b201b1cf7cedb35435efe824b31e0c07788bf7248eabc57cc672fe14_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_f92ad1d464faf6b3a9b9d2ecf75ffcd348f4b47127776974dd14e9a24cb3394b = $this->env->getExtension("native_profiler");
        $__internal_f92ad1d464faf6b3a9b9d2ecf75ffcd348f4b47127776974dd14e9a24cb3394b->enter($__internal_f92ad1d464faf6b3a9b9d2ecf75ffcd348f4b47127776974dd14e9a24cb3394b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_f92ad1d464faf6b3a9b9d2ecf75ffcd348f4b47127776974dd14e9a24cb3394b->leave($__internal_f92ad1d464faf6b3a9b9d2ecf75ffcd348f4b47127776974dd14e9a24cb3394b_prof);

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
