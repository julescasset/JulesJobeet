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
        $__internal_b24612d5147299c55cd2f34289804f6ee8146def996459cf44c325e9d7fdbfc7 = $this->env->getExtension("native_profiler");
        $__internal_b24612d5147299c55cd2f34289804f6ee8146def996459cf44c325e9d7fdbfc7->enter($__internal_b24612d5147299c55cd2f34289804f6ee8146def996459cf44c325e9d7fdbfc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b24612d5147299c55cd2f34289804f6ee8146def996459cf44c325e9d7fdbfc7->leave($__internal_b24612d5147299c55cd2f34289804f6ee8146def996459cf44c325e9d7fdbfc7_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f270370654930b63a0bd56f71a4569765b852d2593273a824333b45f9f35889e = $this->env->getExtension("native_profiler");
        $__internal_f270370654930b63a0bd56f71a4569765b852d2593273a824333b45f9f35889e->enter($__internal_f270370654930b63a0bd56f71a4569765b852d2593273a824333b45f9f35889e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_f270370654930b63a0bd56f71a4569765b852d2593273a824333b45f9f35889e->leave($__internal_f270370654930b63a0bd56f71a4569765b852d2593273a824333b45f9f35889e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_baa503379e3b3052bf641e3d321599592bbb8d7b0cc2a71669cccfd842664dc7 = $this->env->getExtension("native_profiler");
        $__internal_baa503379e3b3052bf641e3d321599592bbb8d7b0cc2a71669cccfd842664dc7->enter($__internal_baa503379e3b3052bf641e3d321599592bbb8d7b0cc2a71669cccfd842664dc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_baa503379e3b3052bf641e3d321599592bbb8d7b0cc2a71669cccfd842664dc7->leave($__internal_baa503379e3b3052bf641e3d321599592bbb8d7b0cc2a71669cccfd842664dc7_prof);

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
