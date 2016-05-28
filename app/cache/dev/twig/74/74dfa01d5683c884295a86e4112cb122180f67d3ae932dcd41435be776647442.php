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
        $__internal_c6fc977347e2db29bbad0c1f8ece91efb37b5be50e34b9978a330a6bfc11745e = $this->env->getExtension("native_profiler");
        $__internal_c6fc977347e2db29bbad0c1f8ece91efb37b5be50e34b9978a330a6bfc11745e->enter($__internal_c6fc977347e2db29bbad0c1f8ece91efb37b5be50e34b9978a330a6bfc11745e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c6fc977347e2db29bbad0c1f8ece91efb37b5be50e34b9978a330a6bfc11745e->leave($__internal_c6fc977347e2db29bbad0c1f8ece91efb37b5be50e34b9978a330a6bfc11745e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e10967349ca7d2bc9f7b0977b7f0b752c0b50dbf8b7fe0edeb56330ec333e80c = $this->env->getExtension("native_profiler");
        $__internal_e10967349ca7d2bc9f7b0977b7f0b752c0b50dbf8b7fe0edeb56330ec333e80c->enter($__internal_e10967349ca7d2bc9f7b0977b7f0b752c0b50dbf8b7fe0edeb56330ec333e80c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_e10967349ca7d2bc9f7b0977b7f0b752c0b50dbf8b7fe0edeb56330ec333e80c->leave($__internal_e10967349ca7d2bc9f7b0977b7f0b752c0b50dbf8b7fe0edeb56330ec333e80c_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_078a156d97559de15fa5e1eea521e8a0c18c0307b8e1334c849ebb5a879edc6c = $this->env->getExtension("native_profiler");
        $__internal_078a156d97559de15fa5e1eea521e8a0c18c0307b8e1334c849ebb5a879edc6c->enter($__internal_078a156d97559de15fa5e1eea521e8a0c18c0307b8e1334c849ebb5a879edc6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_078a156d97559de15fa5e1eea521e8a0c18c0307b8e1334c849ebb5a879edc6c->leave($__internal_078a156d97559de15fa5e1eea521e8a0c18c0307b8e1334c849ebb5a879edc6c_prof);

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
