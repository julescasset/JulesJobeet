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
        $__internal_65e9ca48b54167ed3040a5cddd2b1974a575c76fea1f38680753191a83aded3c = $this->env->getExtension("native_profiler");
        $__internal_65e9ca48b54167ed3040a5cddd2b1974a575c76fea1f38680753191a83aded3c->enter($__internal_65e9ca48b54167ed3040a5cddd2b1974a575c76fea1f38680753191a83aded3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_65e9ca48b54167ed3040a5cddd2b1974a575c76fea1f38680753191a83aded3c->leave($__internal_65e9ca48b54167ed3040a5cddd2b1974a575c76fea1f38680753191a83aded3c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d0eb50805ce66a1feabf19950a28332da5fb456584ff44f1d27e64fbd25a8236 = $this->env->getExtension("native_profiler");
        $__internal_d0eb50805ce66a1feabf19950a28332da5fb456584ff44f1d27e64fbd25a8236->enter($__internal_d0eb50805ce66a1feabf19950a28332da5fb456584ff44f1d27e64fbd25a8236_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_d0eb50805ce66a1feabf19950a28332da5fb456584ff44f1d27e64fbd25a8236->leave($__internal_d0eb50805ce66a1feabf19950a28332da5fb456584ff44f1d27e64fbd25a8236_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_6381d5ce419f17343dbb5aa47b546c537ae7049a1d89f961fb7d2fbcfa79216c = $this->env->getExtension("native_profiler");
        $__internal_6381d5ce419f17343dbb5aa47b546c537ae7049a1d89f961fb7d2fbcfa79216c->enter($__internal_6381d5ce419f17343dbb5aa47b546c537ae7049a1d89f961fb7d2fbcfa79216c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_6381d5ce419f17343dbb5aa47b546c537ae7049a1d89f961fb7d2fbcfa79216c->leave($__internal_6381d5ce419f17343dbb5aa47b546c537ae7049a1d89f961fb7d2fbcfa79216c_prof);

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
