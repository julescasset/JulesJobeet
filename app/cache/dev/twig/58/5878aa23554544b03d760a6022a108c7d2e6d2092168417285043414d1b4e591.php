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
        $__internal_15fec078121e35c399a8106dff91e1d3ecd9e2758676a42688b8fe8e357cf51f = $this->env->getExtension("native_profiler");
        $__internal_15fec078121e35c399a8106dff91e1d3ecd9e2758676a42688b8fe8e357cf51f->enter($__internal_15fec078121e35c399a8106dff91e1d3ecd9e2758676a42688b8fe8e357cf51f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_15fec078121e35c399a8106dff91e1d3ecd9e2758676a42688b8fe8e357cf51f->leave($__internal_15fec078121e35c399a8106dff91e1d3ecd9e2758676a42688b8fe8e357cf51f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b1376c6d85573799861900dfe16c559a405e094fc5a8a9c54d5be2c92db7d5fb = $this->env->getExtension("native_profiler");
        $__internal_b1376c6d85573799861900dfe16c559a405e094fc5a8a9c54d5be2c92db7d5fb->enter($__internal_b1376c6d85573799861900dfe16c559a405e094fc5a8a9c54d5be2c92db7d5fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_b1376c6d85573799861900dfe16c559a405e094fc5a8a9c54d5be2c92db7d5fb->leave($__internal_b1376c6d85573799861900dfe16c559a405e094fc5a8a9c54d5be2c92db7d5fb_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_600140e3555089c5e81889ecd6aa67c27ab65151f9123020a64074efae09a66e = $this->env->getExtension("native_profiler");
        $__internal_600140e3555089c5e81889ecd6aa67c27ab65151f9123020a64074efae09a66e->enter($__internal_600140e3555089c5e81889ecd6aa67c27ab65151f9123020a64074efae09a66e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_600140e3555089c5e81889ecd6aa67c27ab65151f9123020a64074efae09a66e->leave($__internal_600140e3555089c5e81889ecd6aa67c27ab65151f9123020a64074efae09a66e_prof);

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
