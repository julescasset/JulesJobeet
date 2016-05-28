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
        $__internal_50e1c11503d5cc139b324fe3fa23aafc089391c45a12445d3f88d11dc035740c = $this->env->getExtension("native_profiler");
        $__internal_50e1c11503d5cc139b324fe3fa23aafc089391c45a12445d3f88d11dc035740c->enter($__internal_50e1c11503d5cc139b324fe3fa23aafc089391c45a12445d3f88d11dc035740c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_50e1c11503d5cc139b324fe3fa23aafc089391c45a12445d3f88d11dc035740c->leave($__internal_50e1c11503d5cc139b324fe3fa23aafc089391c45a12445d3f88d11dc035740c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_78c3d92f2a77f9c617cdb7e543070f4451b8a9a570e96a8363c4d58249ffa813 = $this->env->getExtension("native_profiler");
        $__internal_78c3d92f2a77f9c617cdb7e543070f4451b8a9a570e96a8363c4d58249ffa813->enter($__internal_78c3d92f2a77f9c617cdb7e543070f4451b8a9a570e96a8363c4d58249ffa813_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_78c3d92f2a77f9c617cdb7e543070f4451b8a9a570e96a8363c4d58249ffa813->leave($__internal_78c3d92f2a77f9c617cdb7e543070f4451b8a9a570e96a8363c4d58249ffa813_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_1c39f2d49b0d9bd74a9039906f27dbf8943722e48f68461bd50f0b07d81c801e = $this->env->getExtension("native_profiler");
        $__internal_1c39f2d49b0d9bd74a9039906f27dbf8943722e48f68461bd50f0b07d81c801e->enter($__internal_1c39f2d49b0d9bd74a9039906f27dbf8943722e48f68461bd50f0b07d81c801e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_1c39f2d49b0d9bd74a9039906f27dbf8943722e48f68461bd50f0b07d81c801e->leave($__internal_1c39f2d49b0d9bd74a9039906f27dbf8943722e48f68461bd50f0b07d81c801e_prof);

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
