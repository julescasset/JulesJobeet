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
        $__internal_37e207fc825d78d961b6a4175096b3719b243674cdfa3b501f513e539f26f0a1 = $this->env->getExtension("native_profiler");
        $__internal_37e207fc825d78d961b6a4175096b3719b243674cdfa3b501f513e539f26f0a1->enter($__internal_37e207fc825d78d961b6a4175096b3719b243674cdfa3b501f513e539f26f0a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_37e207fc825d78d961b6a4175096b3719b243674cdfa3b501f513e539f26f0a1->leave($__internal_37e207fc825d78d961b6a4175096b3719b243674cdfa3b501f513e539f26f0a1_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_b27df2ed5bd3f6af8db25366de01f7922256ccadbfda5784ec4b6b945e614758 = $this->env->getExtension("native_profiler");
        $__internal_b27df2ed5bd3f6af8db25366de01f7922256ccadbfda5784ec4b6b945e614758->enter($__internal_b27df2ed5bd3f6af8db25366de01f7922256ccadbfda5784ec4b6b945e614758_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_b27df2ed5bd3f6af8db25366de01f7922256ccadbfda5784ec4b6b945e614758->leave($__internal_b27df2ed5bd3f6af8db25366de01f7922256ccadbfda5784ec4b6b945e614758_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_35ddc59aa69ed202682d63402bb36b4505ea0b27e95a9f87c0d12d49c62968ad = $this->env->getExtension("native_profiler");
        $__internal_35ddc59aa69ed202682d63402bb36b4505ea0b27e95a9f87c0d12d49c62968ad->enter($__internal_35ddc59aa69ed202682d63402bb36b4505ea0b27e95a9f87c0d12d49c62968ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_35ddc59aa69ed202682d63402bb36b4505ea0b27e95a9f87c0d12d49c62968ad->leave($__internal_35ddc59aa69ed202682d63402bb36b4505ea0b27e95a9f87c0d12d49c62968ad_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_f08197e9872e9ab48ba8907b7920f3394a45dc17471867f8f4e225d01defb44f = $this->env->getExtension("native_profiler");
        $__internal_f08197e9872e9ab48ba8907b7920f3394a45dc17471867f8f4e225d01defb44f->enter($__internal_f08197e9872e9ab48ba8907b7920f3394a45dc17471867f8f4e225d01defb44f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f08197e9872e9ab48ba8907b7920f3394a45dc17471867f8f4e225d01defb44f->leave($__internal_f08197e9872e9ab48ba8907b7920f3394a45dc17471867f8f4e225d01defb44f_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3b72885162985d956cf6134a33b6f840dfd98137e596a15725d58d1f81f148a5 = $this->env->getExtension("native_profiler");
        $__internal_3b72885162985d956cf6134a33b6f840dfd98137e596a15725d58d1f81f148a5->enter($__internal_3b72885162985d956cf6134a33b6f840dfd98137e596a15725d58d1f81f148a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_3b72885162985d956cf6134a33b6f840dfd98137e596a15725d58d1f81f148a5->leave($__internal_3b72885162985d956cf6134a33b6f840dfd98137e596a15725d58d1f81f148a5_prof);

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
