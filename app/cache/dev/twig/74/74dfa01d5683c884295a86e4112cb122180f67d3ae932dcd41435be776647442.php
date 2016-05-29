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
        $__internal_144fa6768b5d51c160fa224615077959788c289a60071d0e4c385f7e58b98aa2 = $this->env->getExtension("native_profiler");
        $__internal_144fa6768b5d51c160fa224615077959788c289a60071d0e4c385f7e58b98aa2->enter($__internal_144fa6768b5d51c160fa224615077959788c289a60071d0e4c385f7e58b98aa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_144fa6768b5d51c160fa224615077959788c289a60071d0e4c385f7e58b98aa2->leave($__internal_144fa6768b5d51c160fa224615077959788c289a60071d0e4c385f7e58b98aa2_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_391ca9dd51d173ad27ad0447d2c101fa010ef07b9567ae53226ea5bf0951201b = $this->env->getExtension("native_profiler");
        $__internal_391ca9dd51d173ad27ad0447d2c101fa010ef07b9567ae53226ea5bf0951201b->enter($__internal_391ca9dd51d173ad27ad0447d2c101fa010ef07b9567ae53226ea5bf0951201b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_391ca9dd51d173ad27ad0447d2c101fa010ef07b9567ae53226ea5bf0951201b->leave($__internal_391ca9dd51d173ad27ad0447d2c101fa010ef07b9567ae53226ea5bf0951201b_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_3d11458bf9e13041ea6bb08bb3cb8c0ed7b8e92eaf1ea828e7bd92defb9d2ebe = $this->env->getExtension("native_profiler");
        $__internal_3d11458bf9e13041ea6bb08bb3cb8c0ed7b8e92eaf1ea828e7bd92defb9d2ebe->enter($__internal_3d11458bf9e13041ea6bb08bb3cb8c0ed7b8e92eaf1ea828e7bd92defb9d2ebe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_3d11458bf9e13041ea6bb08bb3cb8c0ed7b8e92eaf1ea828e7bd92defb9d2ebe->leave($__internal_3d11458bf9e13041ea6bb08bb3cb8c0ed7b8e92eaf1ea828e7bd92defb9d2ebe_prof);

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
