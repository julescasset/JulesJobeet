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
        $__internal_3ac529fdb18643e0f32444f09a1f6924c73eab9ad66c18b34761a4bbbf96cae8 = $this->env->getExtension("native_profiler");
        $__internal_3ac529fdb18643e0f32444f09a1f6924c73eab9ad66c18b34761a4bbbf96cae8->enter($__internal_3ac529fdb18643e0f32444f09a1f6924c73eab9ad66c18b34761a4bbbf96cae8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3ac529fdb18643e0f32444f09a1f6924c73eab9ad66c18b34761a4bbbf96cae8->leave($__internal_3ac529fdb18643e0f32444f09a1f6924c73eab9ad66c18b34761a4bbbf96cae8_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c7618552cc4d71a385c0128a9d0af050ffa5cca8320705ecf6fc1fd44e5493fa = $this->env->getExtension("native_profiler");
        $__internal_c7618552cc4d71a385c0128a9d0af050ffa5cca8320705ecf6fc1fd44e5493fa->enter($__internal_c7618552cc4d71a385c0128a9d0af050ffa5cca8320705ecf6fc1fd44e5493fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_c7618552cc4d71a385c0128a9d0af050ffa5cca8320705ecf6fc1fd44e5493fa->leave($__internal_c7618552cc4d71a385c0128a9d0af050ffa5cca8320705ecf6fc1fd44e5493fa_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_327d5d1b5989e30b50edf6f0ef4e2a556ee22ddc4e8c59c4012017e517dc8042 = $this->env->getExtension("native_profiler");
        $__internal_327d5d1b5989e30b50edf6f0ef4e2a556ee22ddc4e8c59c4012017e517dc8042->enter($__internal_327d5d1b5989e30b50edf6f0ef4e2a556ee22ddc4e8c59c4012017e517dc8042_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_327d5d1b5989e30b50edf6f0ef4e2a556ee22ddc4e8c59c4012017e517dc8042->leave($__internal_327d5d1b5989e30b50edf6f0ef4e2a556ee22ddc4e8c59c4012017e517dc8042_prof);

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
