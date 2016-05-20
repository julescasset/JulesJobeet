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
        $__internal_b7c92816cfa92c2c6f18cc2a9d914967487c99d4bb431c91f21d81ff239035a2 = $this->env->getExtension("native_profiler");
        $__internal_b7c92816cfa92c2c6f18cc2a9d914967487c99d4bb431c91f21d81ff239035a2->enter($__internal_b7c92816cfa92c2c6f18cc2a9d914967487c99d4bb431c91f21d81ff239035a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b7c92816cfa92c2c6f18cc2a9d914967487c99d4bb431c91f21d81ff239035a2->leave($__internal_b7c92816cfa92c2c6f18cc2a9d914967487c99d4bb431c91f21d81ff239035a2_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5fea4b8802f031319e39b333f7af77537678563d9fc2b6c8ab72dbe71d9a27b0 = $this->env->getExtension("native_profiler");
        $__internal_5fea4b8802f031319e39b333f7af77537678563d9fc2b6c8ab72dbe71d9a27b0->enter($__internal_5fea4b8802f031319e39b333f7af77537678563d9fc2b6c8ab72dbe71d9a27b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_5fea4b8802f031319e39b333f7af77537678563d9fc2b6c8ab72dbe71d9a27b0->leave($__internal_5fea4b8802f031319e39b333f7af77537678563d9fc2b6c8ab72dbe71d9a27b0_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_99f283faf807d3016ae5396429591b10d7dcb682fc1c71ba2cff7c23349a0e4c = $this->env->getExtension("native_profiler");
        $__internal_99f283faf807d3016ae5396429591b10d7dcb682fc1c71ba2cff7c23349a0e4c->enter($__internal_99f283faf807d3016ae5396429591b10d7dcb682fc1c71ba2cff7c23349a0e4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_99f283faf807d3016ae5396429591b10d7dcb682fc1c71ba2cff7c23349a0e4c->leave($__internal_99f283faf807d3016ae5396429591b10d7dcb682fc1c71ba2cff7c23349a0e4c_prof);

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
