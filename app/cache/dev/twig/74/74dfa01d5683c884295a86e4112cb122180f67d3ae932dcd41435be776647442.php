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
        $__internal_4e42f58a5e729f47d8ae506ab65321443288d7e05765506b5615762923d53b73 = $this->env->getExtension("native_profiler");
        $__internal_4e42f58a5e729f47d8ae506ab65321443288d7e05765506b5615762923d53b73->enter($__internal_4e42f58a5e729f47d8ae506ab65321443288d7e05765506b5615762923d53b73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4e42f58a5e729f47d8ae506ab65321443288d7e05765506b5615762923d53b73->leave($__internal_4e42f58a5e729f47d8ae506ab65321443288d7e05765506b5615762923d53b73_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_cb5de2129dab9045cbcb78afdce40266d22ee8f7d54b0e8decd73cd2f452665f = $this->env->getExtension("native_profiler");
        $__internal_cb5de2129dab9045cbcb78afdce40266d22ee8f7d54b0e8decd73cd2f452665f->enter($__internal_cb5de2129dab9045cbcb78afdce40266d22ee8f7d54b0e8decd73cd2f452665f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_cb5de2129dab9045cbcb78afdce40266d22ee8f7d54b0e8decd73cd2f452665f->leave($__internal_cb5de2129dab9045cbcb78afdce40266d22ee8f7d54b0e8decd73cd2f452665f_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_194bc58de4c4f11f9299205bff24567a99985840b63fb1df8553323357c2d5b6 = $this->env->getExtension("native_profiler");
        $__internal_194bc58de4c4f11f9299205bff24567a99985840b63fb1df8553323357c2d5b6->enter($__internal_194bc58de4c4f11f9299205bff24567a99985840b63fb1df8553323357c2d5b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_194bc58de4c4f11f9299205bff24567a99985840b63fb1df8553323357c2d5b6->leave($__internal_194bc58de4c4f11f9299205bff24567a99985840b63fb1df8553323357c2d5b6_prof);

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
