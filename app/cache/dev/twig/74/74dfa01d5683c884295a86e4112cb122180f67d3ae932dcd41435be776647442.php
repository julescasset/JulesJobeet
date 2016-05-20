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
        $__internal_e439e4784dd69fa4c67e350b23e4392d03443cce6a148a74ae520539c91ed33d = $this->env->getExtension("native_profiler");
        $__internal_e439e4784dd69fa4c67e350b23e4392d03443cce6a148a74ae520539c91ed33d->enter($__internal_e439e4784dd69fa4c67e350b23e4392d03443cce6a148a74ae520539c91ed33d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e439e4784dd69fa4c67e350b23e4392d03443cce6a148a74ae520539c91ed33d->leave($__internal_e439e4784dd69fa4c67e350b23e4392d03443cce6a148a74ae520539c91ed33d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a8013af6b81f42e266d038bbdc4cdc731ac01ef97b459412b5c736d81635446e = $this->env->getExtension("native_profiler");
        $__internal_a8013af6b81f42e266d038bbdc4cdc731ac01ef97b459412b5c736d81635446e->enter($__internal_a8013af6b81f42e266d038bbdc4cdc731ac01ef97b459412b5c736d81635446e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_a8013af6b81f42e266d038bbdc4cdc731ac01ef97b459412b5c736d81635446e->leave($__internal_a8013af6b81f42e266d038bbdc4cdc731ac01ef97b459412b5c736d81635446e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_0e8093ab33d47232b80a63e25f2a1fa59d6dd4f2dcefdb20b4651ba0ee9910cb = $this->env->getExtension("native_profiler");
        $__internal_0e8093ab33d47232b80a63e25f2a1fa59d6dd4f2dcefdb20b4651ba0ee9910cb->enter($__internal_0e8093ab33d47232b80a63e25f2a1fa59d6dd4f2dcefdb20b4651ba0ee9910cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_0e8093ab33d47232b80a63e25f2a1fa59d6dd4f2dcefdb20b4651ba0ee9910cb->leave($__internal_0e8093ab33d47232b80a63e25f2a1fa59d6dd4f2dcefdb20b4651ba0ee9910cb_prof);

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
