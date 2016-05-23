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
        $__internal_dcc5f917ed25d54386c496e299dfe580f90ce8e48c1a3824850abe4bb120932a = $this->env->getExtension("native_profiler");
        $__internal_dcc5f917ed25d54386c496e299dfe580f90ce8e48c1a3824850abe4bb120932a->enter($__internal_dcc5f917ed25d54386c496e299dfe580f90ce8e48c1a3824850abe4bb120932a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dcc5f917ed25d54386c496e299dfe580f90ce8e48c1a3824850abe4bb120932a->leave($__internal_dcc5f917ed25d54386c496e299dfe580f90ce8e48c1a3824850abe4bb120932a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3e608f8a05c722b1e8eb76cc1bda4cf93b20f833a0c0984ea6f53b54e533eaa5 = $this->env->getExtension("native_profiler");
        $__internal_3e608f8a05c722b1e8eb76cc1bda4cf93b20f833a0c0984ea6f53b54e533eaa5->enter($__internal_3e608f8a05c722b1e8eb76cc1bda4cf93b20f833a0c0984ea6f53b54e533eaa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_3e608f8a05c722b1e8eb76cc1bda4cf93b20f833a0c0984ea6f53b54e533eaa5->leave($__internal_3e608f8a05c722b1e8eb76cc1bda4cf93b20f833a0c0984ea6f53b54e533eaa5_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_d81b8232195fe586655a6eaa84002d5247d61e6b39276a08f1a60b6c4981ad19 = $this->env->getExtension("native_profiler");
        $__internal_d81b8232195fe586655a6eaa84002d5247d61e6b39276a08f1a60b6c4981ad19->enter($__internal_d81b8232195fe586655a6eaa84002d5247d61e6b39276a08f1a60b6c4981ad19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_d81b8232195fe586655a6eaa84002d5247d61e6b39276a08f1a60b6c4981ad19->leave($__internal_d81b8232195fe586655a6eaa84002d5247d61e6b39276a08f1a60b6c4981ad19_prof);

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
