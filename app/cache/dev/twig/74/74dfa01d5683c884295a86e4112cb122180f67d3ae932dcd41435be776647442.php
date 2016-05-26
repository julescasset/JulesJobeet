<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_a2226c913748bdd7a6809b0379f9c0d7e56a39d604eccbbc6b43b313af3732a3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
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
        $__internal_2c104bf18272f357c6a39a312120fecb593920c2c48408fd580cd53863a36c06 = $this->env->getExtension("native_profiler");
        $__internal_2c104bf18272f357c6a39a312120fecb593920c2c48408fd580cd53863a36c06->enter($__internal_2c104bf18272f357c6a39a312120fecb593920c2c48408fd580cd53863a36c06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2c104bf18272f357c6a39a312120fecb593920c2c48408fd580cd53863a36c06->leave($__internal_2c104bf18272f357c6a39a312120fecb593920c2c48408fd580cd53863a36c06_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_881564215ab17b6933dd002e6836a0d723b1476c2d17b15aac3e7bdca9c1d072 = $this->env->getExtension("native_profiler");
        $__internal_881564215ab17b6933dd002e6836a0d723b1476c2d17b15aac3e7bdca9c1d072->enter($__internal_881564215ab17b6933dd002e6836a0d723b1476c2d17b15aac3e7bdca9c1d072_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_881564215ab17b6933dd002e6836a0d723b1476c2d17b15aac3e7bdca9c1d072->leave($__internal_881564215ab17b6933dd002e6836a0d723b1476c2d17b15aac3e7bdca9c1d072_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_99951bde0c85dbc356ce67a8785fab2266bf424a8aec2ab74539276d69699007 = $this->env->getExtension("native_profiler");
        $__internal_99951bde0c85dbc356ce67a8785fab2266bf424a8aec2ab74539276d69699007->enter($__internal_99951bde0c85dbc356ce67a8785fab2266bf424a8aec2ab74539276d69699007_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_99951bde0c85dbc356ce67a8785fab2266bf424a8aec2ab74539276d69699007->leave($__internal_99951bde0c85dbc356ce67a8785fab2266bf424a8aec2ab74539276d69699007_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
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
