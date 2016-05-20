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
        $__internal_a22f177524993ed2392f366c2c3e4aa511ba25c10e4d54a21340e3eb48173fd4 = $this->env->getExtension("native_profiler");
        $__internal_a22f177524993ed2392f366c2c3e4aa511ba25c10e4d54a21340e3eb48173fd4->enter($__internal_a22f177524993ed2392f366c2c3e4aa511ba25c10e4d54a21340e3eb48173fd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_a22f177524993ed2392f366c2c3e4aa511ba25c10e4d54a21340e3eb48173fd4->leave($__internal_a22f177524993ed2392f366c2c3e4aa511ba25c10e4d54a21340e3eb48173fd4_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_940e9286377bce89609d829c7ac57cc3c8d1c5bc8a1be6a9cf1aeb74bd1c9aca = $this->env->getExtension("native_profiler");
        $__internal_940e9286377bce89609d829c7ac57cc3c8d1c5bc8a1be6a9cf1aeb74bd1c9aca->enter($__internal_940e9286377bce89609d829c7ac57cc3c8d1c5bc8a1be6a9cf1aeb74bd1c9aca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_940e9286377bce89609d829c7ac57cc3c8d1c5bc8a1be6a9cf1aeb74bd1c9aca->leave($__internal_940e9286377bce89609d829c7ac57cc3c8d1c5bc8a1be6a9cf1aeb74bd1c9aca_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_70d02d5e631462f55fbb0bcfd33a0110787a4560a4bf9e112d5a6f45dd65473e = $this->env->getExtension("native_profiler");
        $__internal_70d02d5e631462f55fbb0bcfd33a0110787a4560a4bf9e112d5a6f45dd65473e->enter($__internal_70d02d5e631462f55fbb0bcfd33a0110787a4560a4bf9e112d5a6f45dd65473e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_70d02d5e631462f55fbb0bcfd33a0110787a4560a4bf9e112d5a6f45dd65473e->leave($__internal_70d02d5e631462f55fbb0bcfd33a0110787a4560a4bf9e112d5a6f45dd65473e_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_3da231d10c2ab88a04c37114b5ef28f9863b9b2291dbaba18a33659f2e668b0f = $this->env->getExtension("native_profiler");
        $__internal_3da231d10c2ab88a04c37114b5ef28f9863b9b2291dbaba18a33659f2e668b0f->enter($__internal_3da231d10c2ab88a04c37114b5ef28f9863b9b2291dbaba18a33659f2e668b0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_3da231d10c2ab88a04c37114b5ef28f9863b9b2291dbaba18a33659f2e668b0f->leave($__internal_3da231d10c2ab88a04c37114b5ef28f9863b9b2291dbaba18a33659f2e668b0f_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9a11ffd9288aa2e671682f61fbedae26b6a633959aecf44e5413116465a0b6b0 = $this->env->getExtension("native_profiler");
        $__internal_9a11ffd9288aa2e671682f61fbedae26b6a633959aecf44e5413116465a0b6b0->enter($__internal_9a11ffd9288aa2e671682f61fbedae26b6a633959aecf44e5413116465a0b6b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_9a11ffd9288aa2e671682f61fbedae26b6a633959aecf44e5413116465a0b6b0->leave($__internal_9a11ffd9288aa2e671682f61fbedae26b6a633959aecf44e5413116465a0b6b0_prof);

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
