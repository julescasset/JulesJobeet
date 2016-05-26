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
        $__internal_f54e6209a77c081061245c82f3c60ba0539bb5223227c14c35a0cdd088ff8a03 = $this->env->getExtension("native_profiler");
        $__internal_f54e6209a77c081061245c82f3c60ba0539bb5223227c14c35a0cdd088ff8a03->enter($__internal_f54e6209a77c081061245c82f3c60ba0539bb5223227c14c35a0cdd088ff8a03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f54e6209a77c081061245c82f3c60ba0539bb5223227c14c35a0cdd088ff8a03->leave($__internal_f54e6209a77c081061245c82f3c60ba0539bb5223227c14c35a0cdd088ff8a03_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3743e462e1daba271db9b20a33c64f01ece088f79e2303a4e82283f265903542 = $this->env->getExtension("native_profiler");
        $__internal_3743e462e1daba271db9b20a33c64f01ece088f79e2303a4e82283f265903542->enter($__internal_3743e462e1daba271db9b20a33c64f01ece088f79e2303a4e82283f265903542_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_3743e462e1daba271db9b20a33c64f01ece088f79e2303a4e82283f265903542->leave($__internal_3743e462e1daba271db9b20a33c64f01ece088f79e2303a4e82283f265903542_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_1aa7ba2574201e40419284f1e0efa6e0725ff152c0743c09f4bc6e1281c8cd45 = $this->env->getExtension("native_profiler");
        $__internal_1aa7ba2574201e40419284f1e0efa6e0725ff152c0743c09f4bc6e1281c8cd45->enter($__internal_1aa7ba2574201e40419284f1e0efa6e0725ff152c0743c09f4bc6e1281c8cd45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_1aa7ba2574201e40419284f1e0efa6e0725ff152c0743c09f4bc6e1281c8cd45->leave($__internal_1aa7ba2574201e40419284f1e0efa6e0725ff152c0743c09f4bc6e1281c8cd45_prof);

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
