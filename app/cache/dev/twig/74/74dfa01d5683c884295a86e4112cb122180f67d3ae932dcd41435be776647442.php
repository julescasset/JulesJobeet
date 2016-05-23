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
        $__internal_9d2f423630cec75b50b6bb64516b89e67121d4ea606dc716907342944c74352d = $this->env->getExtension("native_profiler");
        $__internal_9d2f423630cec75b50b6bb64516b89e67121d4ea606dc716907342944c74352d->enter($__internal_9d2f423630cec75b50b6bb64516b89e67121d4ea606dc716907342944c74352d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9d2f423630cec75b50b6bb64516b89e67121d4ea606dc716907342944c74352d->leave($__internal_9d2f423630cec75b50b6bb64516b89e67121d4ea606dc716907342944c74352d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d038abe7ba01c75f6acdf45d42e70d425d5dedc9e1e8cc353594fa9c6420ad9b = $this->env->getExtension("native_profiler");
        $__internal_d038abe7ba01c75f6acdf45d42e70d425d5dedc9e1e8cc353594fa9c6420ad9b->enter($__internal_d038abe7ba01c75f6acdf45d42e70d425d5dedc9e1e8cc353594fa9c6420ad9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_d038abe7ba01c75f6acdf45d42e70d425d5dedc9e1e8cc353594fa9c6420ad9b->leave($__internal_d038abe7ba01c75f6acdf45d42e70d425d5dedc9e1e8cc353594fa9c6420ad9b_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_b11853ba83182824bdc0a72b9ee5abb6878f0fd2d6d76e14dc01800b4b81dc8a = $this->env->getExtension("native_profiler");
        $__internal_b11853ba83182824bdc0a72b9ee5abb6878f0fd2d6d76e14dc01800b4b81dc8a->enter($__internal_b11853ba83182824bdc0a72b9ee5abb6878f0fd2d6d76e14dc01800b4b81dc8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_b11853ba83182824bdc0a72b9ee5abb6878f0fd2d6d76e14dc01800b4b81dc8a->leave($__internal_b11853ba83182824bdc0a72b9ee5abb6878f0fd2d6d76e14dc01800b4b81dc8a_prof);

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
