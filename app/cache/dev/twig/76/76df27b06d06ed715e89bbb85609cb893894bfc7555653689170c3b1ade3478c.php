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
        $__internal_c06769bcbe8151576e7fd3ca3bf9a77741c9a3c4a98e9ab70fe75f82fc6df8f5 = $this->env->getExtension("native_profiler");
        $__internal_c06769bcbe8151576e7fd3ca3bf9a77741c9a3c4a98e9ab70fe75f82fc6df8f5->enter($__internal_c06769bcbe8151576e7fd3ca3bf9a77741c9a3c4a98e9ab70fe75f82fc6df8f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_c06769bcbe8151576e7fd3ca3bf9a77741c9a3c4a98e9ab70fe75f82fc6df8f5->leave($__internal_c06769bcbe8151576e7fd3ca3bf9a77741c9a3c4a98e9ab70fe75f82fc6df8f5_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_a7fb2b6aaba3d33400d0447de5946e9ee08e0b23d350e48da65ce0105a87f344 = $this->env->getExtension("native_profiler");
        $__internal_a7fb2b6aaba3d33400d0447de5946e9ee08e0b23d350e48da65ce0105a87f344->enter($__internal_a7fb2b6aaba3d33400d0447de5946e9ee08e0b23d350e48da65ce0105a87f344_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_a7fb2b6aaba3d33400d0447de5946e9ee08e0b23d350e48da65ce0105a87f344->leave($__internal_a7fb2b6aaba3d33400d0447de5946e9ee08e0b23d350e48da65ce0105a87f344_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7c75895827522a054a10cb4bae3b2969c79aaaabd78379a5b4f3bee29e4d5707 = $this->env->getExtension("native_profiler");
        $__internal_7c75895827522a054a10cb4bae3b2969c79aaaabd78379a5b4f3bee29e4d5707->enter($__internal_7c75895827522a054a10cb4bae3b2969c79aaaabd78379a5b4f3bee29e4d5707_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_7c75895827522a054a10cb4bae3b2969c79aaaabd78379a5b4f3bee29e4d5707->leave($__internal_7c75895827522a054a10cb4bae3b2969c79aaaabd78379a5b4f3bee29e4d5707_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_987ce7d34f95b1e92e0cbf33921ce133ac3122c3a0c4f351c2a0e3c886dbd27d = $this->env->getExtension("native_profiler");
        $__internal_987ce7d34f95b1e92e0cbf33921ce133ac3122c3a0c4f351c2a0e3c886dbd27d->enter($__internal_987ce7d34f95b1e92e0cbf33921ce133ac3122c3a0c4f351c2a0e3c886dbd27d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_987ce7d34f95b1e92e0cbf33921ce133ac3122c3a0c4f351c2a0e3c886dbd27d->leave($__internal_987ce7d34f95b1e92e0cbf33921ce133ac3122c3a0c4f351c2a0e3c886dbd27d_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_15d3d9ddcec31c4624e7a97c2301cbb0052c6a03f0478f9183752a1f5d91b4d8 = $this->env->getExtension("native_profiler");
        $__internal_15d3d9ddcec31c4624e7a97c2301cbb0052c6a03f0478f9183752a1f5d91b4d8->enter($__internal_15d3d9ddcec31c4624e7a97c2301cbb0052c6a03f0478f9183752a1f5d91b4d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_15d3d9ddcec31c4624e7a97c2301cbb0052c6a03f0478f9183752a1f5d91b4d8->leave($__internal_15d3d9ddcec31c4624e7a97c2301cbb0052c6a03f0478f9183752a1f5d91b4d8_prof);

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
