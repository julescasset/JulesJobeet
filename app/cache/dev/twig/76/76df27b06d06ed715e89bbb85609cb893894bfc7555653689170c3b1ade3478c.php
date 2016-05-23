<?php

/* ::base.html.twig */
class __TwigTemplate_7446fd6ddc38ab1556fed060b72f4d53f531252aa8eb535c59596236b5c9839d extends Twig_Template
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
        $__internal_74868603bfd15036b683c7f828ab12380586e762c6a35915e31ddbb299a85341 = $this->env->getExtension("native_profiler");
        $__internal_74868603bfd15036b683c7f828ab12380586e762c6a35915e31ddbb299a85341->enter($__internal_74868603bfd15036b683c7f828ab12380586e762c6a35915e31ddbb299a85341_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_74868603bfd15036b683c7f828ab12380586e762c6a35915e31ddbb299a85341->leave($__internal_74868603bfd15036b683c7f828ab12380586e762c6a35915e31ddbb299a85341_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_07308abf7e1db385a8271a0e3129cb005a642d2244b1186bcfb8c20b6edb8910 = $this->env->getExtension("native_profiler");
        $__internal_07308abf7e1db385a8271a0e3129cb005a642d2244b1186bcfb8c20b6edb8910->enter($__internal_07308abf7e1db385a8271a0e3129cb005a642d2244b1186bcfb8c20b6edb8910_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_07308abf7e1db385a8271a0e3129cb005a642d2244b1186bcfb8c20b6edb8910->leave($__internal_07308abf7e1db385a8271a0e3129cb005a642d2244b1186bcfb8c20b6edb8910_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1a8a9e5171e9b7df13a63d5b9cdb8576e18904c96a8b698f9f27a8ae0ca2e58b = $this->env->getExtension("native_profiler");
        $__internal_1a8a9e5171e9b7df13a63d5b9cdb8576e18904c96a8b698f9f27a8ae0ca2e58b->enter($__internal_1a8a9e5171e9b7df13a63d5b9cdb8576e18904c96a8b698f9f27a8ae0ca2e58b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_1a8a9e5171e9b7df13a63d5b9cdb8576e18904c96a8b698f9f27a8ae0ca2e58b->leave($__internal_1a8a9e5171e9b7df13a63d5b9cdb8576e18904c96a8b698f9f27a8ae0ca2e58b_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_95bdb4bd9a91c8247b4c28ae58c9ce49e0b87b5372aeb7853117bab1cab07bd8 = $this->env->getExtension("native_profiler");
        $__internal_95bdb4bd9a91c8247b4c28ae58c9ce49e0b87b5372aeb7853117bab1cab07bd8->enter($__internal_95bdb4bd9a91c8247b4c28ae58c9ce49e0b87b5372aeb7853117bab1cab07bd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_95bdb4bd9a91c8247b4c28ae58c9ce49e0b87b5372aeb7853117bab1cab07bd8->leave($__internal_95bdb4bd9a91c8247b4c28ae58c9ce49e0b87b5372aeb7853117bab1cab07bd8_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_234b70cb9196ce786c5e0c94e971110e00282502f156946a255de38f5a3b5a76 = $this->env->getExtension("native_profiler");
        $__internal_234b70cb9196ce786c5e0c94e971110e00282502f156946a255de38f5a3b5a76->enter($__internal_234b70cb9196ce786c5e0c94e971110e00282502f156946a255de38f5a3b5a76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_234b70cb9196ce786c5e0c94e971110e00282502f156946a255de38f5a3b5a76->leave($__internal_234b70cb9196ce786c5e0c94e971110e00282502f156946a255de38f5a3b5a76_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
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
