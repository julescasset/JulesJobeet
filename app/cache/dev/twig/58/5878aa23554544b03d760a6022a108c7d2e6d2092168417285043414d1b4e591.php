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
        $__internal_bc27896692deb55bc265e7963d4a0a70232591b9499b01849d36a28a3e831d0c = $this->env->getExtension("native_profiler");
        $__internal_bc27896692deb55bc265e7963d4a0a70232591b9499b01849d36a28a3e831d0c->enter($__internal_bc27896692deb55bc265e7963d4a0a70232591b9499b01849d36a28a3e831d0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bc27896692deb55bc265e7963d4a0a70232591b9499b01849d36a28a3e831d0c->leave($__internal_bc27896692deb55bc265e7963d4a0a70232591b9499b01849d36a28a3e831d0c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_aedc9b7296edd448357e639570ddf1d95acd5f53de0f3887e289f5bc3b89bc0b = $this->env->getExtension("native_profiler");
        $__internal_aedc9b7296edd448357e639570ddf1d95acd5f53de0f3887e289f5bc3b89bc0b->enter($__internal_aedc9b7296edd448357e639570ddf1d95acd5f53de0f3887e289f5bc3b89bc0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_aedc9b7296edd448357e639570ddf1d95acd5f53de0f3887e289f5bc3b89bc0b->leave($__internal_aedc9b7296edd448357e639570ddf1d95acd5f53de0f3887e289f5bc3b89bc0b_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_91c10c0d9164942916aad859bb7004c0416461449f9a7d9e9e7e2eccc5c3c754 = $this->env->getExtension("native_profiler");
        $__internal_91c10c0d9164942916aad859bb7004c0416461449f9a7d9e9e7e2eccc5c3c754->enter($__internal_91c10c0d9164942916aad859bb7004c0416461449f9a7d9e9e7e2eccc5c3c754_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_91c10c0d9164942916aad859bb7004c0416461449f9a7d9e9e7e2eccc5c3c754->leave($__internal_91c10c0d9164942916aad859bb7004c0416461449f9a7d9e9e7e2eccc5c3c754_prof);

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
