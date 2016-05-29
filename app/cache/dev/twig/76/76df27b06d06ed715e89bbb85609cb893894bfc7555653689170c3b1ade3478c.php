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
        $__internal_da44edc8651601be2667366d458ae65e6b2850eb95c52e82b2d287acd1cb2bf4 = $this->env->getExtension("native_profiler");
        $__internal_da44edc8651601be2667366d458ae65e6b2850eb95c52e82b2d287acd1cb2bf4->enter($__internal_da44edc8651601be2667366d458ae65e6b2850eb95c52e82b2d287acd1cb2bf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_da44edc8651601be2667366d458ae65e6b2850eb95c52e82b2d287acd1cb2bf4->leave($__internal_da44edc8651601be2667366d458ae65e6b2850eb95c52e82b2d287acd1cb2bf4_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_976703f55a87fbf1cfd3c4f905ec317cf846c2f7f3bc58275f522fbafe2d8852 = $this->env->getExtension("native_profiler");
        $__internal_976703f55a87fbf1cfd3c4f905ec317cf846c2f7f3bc58275f522fbafe2d8852->enter($__internal_976703f55a87fbf1cfd3c4f905ec317cf846c2f7f3bc58275f522fbafe2d8852_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_976703f55a87fbf1cfd3c4f905ec317cf846c2f7f3bc58275f522fbafe2d8852->leave($__internal_976703f55a87fbf1cfd3c4f905ec317cf846c2f7f3bc58275f522fbafe2d8852_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_95ea6fc65aac3879e26e536c2af5d97468384423639d28cf1fd2d9e6fef32767 = $this->env->getExtension("native_profiler");
        $__internal_95ea6fc65aac3879e26e536c2af5d97468384423639d28cf1fd2d9e6fef32767->enter($__internal_95ea6fc65aac3879e26e536c2af5d97468384423639d28cf1fd2d9e6fef32767_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_95ea6fc65aac3879e26e536c2af5d97468384423639d28cf1fd2d9e6fef32767->leave($__internal_95ea6fc65aac3879e26e536c2af5d97468384423639d28cf1fd2d9e6fef32767_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_7145915bb2ee84b44b208e8086699c3dc55411a4b73b7ab92d2608169ce3fba4 = $this->env->getExtension("native_profiler");
        $__internal_7145915bb2ee84b44b208e8086699c3dc55411a4b73b7ab92d2608169ce3fba4->enter($__internal_7145915bb2ee84b44b208e8086699c3dc55411a4b73b7ab92d2608169ce3fba4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_7145915bb2ee84b44b208e8086699c3dc55411a4b73b7ab92d2608169ce3fba4->leave($__internal_7145915bb2ee84b44b208e8086699c3dc55411a4b73b7ab92d2608169ce3fba4_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f73db5f85389edd70d9ef3d0611a843179980c1c9e00769bb5ea133199ecc440 = $this->env->getExtension("native_profiler");
        $__internal_f73db5f85389edd70d9ef3d0611a843179980c1c9e00769bb5ea133199ecc440->enter($__internal_f73db5f85389edd70d9ef3d0611a843179980c1c9e00769bb5ea133199ecc440_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_f73db5f85389edd70d9ef3d0611a843179980c1c9e00769bb5ea133199ecc440->leave($__internal_f73db5f85389edd70d9ef3d0611a843179980c1c9e00769bb5ea133199ecc440_prof);

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
