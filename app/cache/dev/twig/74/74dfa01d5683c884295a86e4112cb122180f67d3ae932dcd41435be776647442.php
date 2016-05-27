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
        $__internal_7b0308b0c72d7d970a780dbaa50bf4dc491b1b367bbe2e1bd39f5c01aeadf0b1 = $this->env->getExtension("native_profiler");
        $__internal_7b0308b0c72d7d970a780dbaa50bf4dc491b1b367bbe2e1bd39f5c01aeadf0b1->enter($__internal_7b0308b0c72d7d970a780dbaa50bf4dc491b1b367bbe2e1bd39f5c01aeadf0b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7b0308b0c72d7d970a780dbaa50bf4dc491b1b367bbe2e1bd39f5c01aeadf0b1->leave($__internal_7b0308b0c72d7d970a780dbaa50bf4dc491b1b367bbe2e1bd39f5c01aeadf0b1_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_37d3fa5c601ce982fc3a418d3f30c1d713eace7e28c9f4461000de84727542a7 = $this->env->getExtension("native_profiler");
        $__internal_37d3fa5c601ce982fc3a418d3f30c1d713eace7e28c9f4461000de84727542a7->enter($__internal_37d3fa5c601ce982fc3a418d3f30c1d713eace7e28c9f4461000de84727542a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_37d3fa5c601ce982fc3a418d3f30c1d713eace7e28c9f4461000de84727542a7->leave($__internal_37d3fa5c601ce982fc3a418d3f30c1d713eace7e28c9f4461000de84727542a7_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_37c69f6fdc6ee6c540035c5216ae4f904e3d0879c3f063e20805ac6b991ec15a = $this->env->getExtension("native_profiler");
        $__internal_37c69f6fdc6ee6c540035c5216ae4f904e3d0879c3f063e20805ac6b991ec15a->enter($__internal_37c69f6fdc6ee6c540035c5216ae4f904e3d0879c3f063e20805ac6b991ec15a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_37c69f6fdc6ee6c540035c5216ae4f904e3d0879c3f063e20805ac6b991ec15a->leave($__internal_37c69f6fdc6ee6c540035c5216ae4f904e3d0879c3f063e20805ac6b991ec15a_prof);

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
