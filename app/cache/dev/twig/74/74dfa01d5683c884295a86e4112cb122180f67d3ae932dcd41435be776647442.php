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
        $__internal_291d2517869f4cd80177f54ecb4597593a0f369b2ead98040a665f7ca4218c1b = $this->env->getExtension("native_profiler");
        $__internal_291d2517869f4cd80177f54ecb4597593a0f369b2ead98040a665f7ca4218c1b->enter($__internal_291d2517869f4cd80177f54ecb4597593a0f369b2ead98040a665f7ca4218c1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_291d2517869f4cd80177f54ecb4597593a0f369b2ead98040a665f7ca4218c1b->leave($__internal_291d2517869f4cd80177f54ecb4597593a0f369b2ead98040a665f7ca4218c1b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2ec40f9038bbc66c8a81539f0294131683f75b4b45a9bb5d6172cc81945cc374 = $this->env->getExtension("native_profiler");
        $__internal_2ec40f9038bbc66c8a81539f0294131683f75b4b45a9bb5d6172cc81945cc374->enter($__internal_2ec40f9038bbc66c8a81539f0294131683f75b4b45a9bb5d6172cc81945cc374_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_2ec40f9038bbc66c8a81539f0294131683f75b4b45a9bb5d6172cc81945cc374->leave($__internal_2ec40f9038bbc66c8a81539f0294131683f75b4b45a9bb5d6172cc81945cc374_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_dfac59a65564a333930362cebe9411934e48c3c75203b01a4855d0994fc8a9ff = $this->env->getExtension("native_profiler");
        $__internal_dfac59a65564a333930362cebe9411934e48c3c75203b01a4855d0994fc8a9ff->enter($__internal_dfac59a65564a333930362cebe9411934e48c3c75203b01a4855d0994fc8a9ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_dfac59a65564a333930362cebe9411934e48c3c75203b01a4855d0994fc8a9ff->leave($__internal_dfac59a65564a333930362cebe9411934e48c3c75203b01a4855d0994fc8a9ff_prof);

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
