<?php

/* base.html.twig */
class __TwigTemplate_00566e0aab5db93b007f951fdc0c38ef11a351b310aeb0e11627f6e30520b0ce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0a30cc11eae932323e68aa44c3bbc1f71e38f61f1010f7cd54bbe9dcf609509c = $this->env->getExtension("native_profiler");
        $__internal_0a30cc11eae932323e68aa44c3bbc1f71e38f61f1010f7cd54bbe9dcf609509c->enter($__internal_0a30cc11eae932323e68aa44c3bbc1f71e38f61f1010f7cd54bbe9dcf609509c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_0a30cc11eae932323e68aa44c3bbc1f71e38f61f1010f7cd54bbe9dcf609509c->leave($__internal_0a30cc11eae932323e68aa44c3bbc1f71e38f61f1010f7cd54bbe9dcf609509c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_59d94aa704837fcfa52be10f84725d8139bfc4d24c6a89643dc23dd9215ba901 = $this->env->getExtension("native_profiler");
        $__internal_59d94aa704837fcfa52be10f84725d8139bfc4d24c6a89643dc23dd9215ba901->enter($__internal_59d94aa704837fcfa52be10f84725d8139bfc4d24c6a89643dc23dd9215ba901_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_59d94aa704837fcfa52be10f84725d8139bfc4d24c6a89643dc23dd9215ba901->leave($__internal_59d94aa704837fcfa52be10f84725d8139bfc4d24c6a89643dc23dd9215ba901_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_20eee86f528547930fda65a2375fb470bb48547e85d1a7fd4b63d128f005978e = $this->env->getExtension("native_profiler");
        $__internal_20eee86f528547930fda65a2375fb470bb48547e85d1a7fd4b63d128f005978e->enter($__internal_20eee86f528547930fda65a2375fb470bb48547e85d1a7fd4b63d128f005978e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_20eee86f528547930fda65a2375fb470bb48547e85d1a7fd4b63d128f005978e->leave($__internal_20eee86f528547930fda65a2375fb470bb48547e85d1a7fd4b63d128f005978e_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_54fa433b8f91e1d3931cce1c75e78d0857835224c4d4588615d14e1bf8e431f3 = $this->env->getExtension("native_profiler");
        $__internal_54fa433b8f91e1d3931cce1c75e78d0857835224c4d4588615d14e1bf8e431f3->enter($__internal_54fa433b8f91e1d3931cce1c75e78d0857835224c4d4588615d14e1bf8e431f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_54fa433b8f91e1d3931cce1c75e78d0857835224c4d4588615d14e1bf8e431f3->leave($__internal_54fa433b8f91e1d3931cce1c75e78d0857835224c4d4588615d14e1bf8e431f3_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_057d938d3a08d5331d90b76b3a812d9be246692bb968b7a6a520555639eeff4b = $this->env->getExtension("native_profiler");
        $__internal_057d938d3a08d5331d90b76b3a812d9be246692bb968b7a6a520555639eeff4b->enter($__internal_057d938d3a08d5331d90b76b3a812d9be246692bb968b7a6a520555639eeff4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_057d938d3a08d5331d90b76b3a812d9be246692bb968b7a6a520555639eeff4b->leave($__internal_057d938d3a08d5331d90b76b3a812d9be246692bb968b7a6a520555639eeff4b_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
