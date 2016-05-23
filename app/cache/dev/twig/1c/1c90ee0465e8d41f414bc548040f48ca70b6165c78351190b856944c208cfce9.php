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
        $__internal_80598f2fb569fc07c151ca31bb0fc53b275c9b5a3ca77e4737f795bb36fb5312 = $this->env->getExtension("native_profiler");
        $__internal_80598f2fb569fc07c151ca31bb0fc53b275c9b5a3ca77e4737f795bb36fb5312->enter($__internal_80598f2fb569fc07c151ca31bb0fc53b275c9b5a3ca77e4737f795bb36fb5312_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_80598f2fb569fc07c151ca31bb0fc53b275c9b5a3ca77e4737f795bb36fb5312->leave($__internal_80598f2fb569fc07c151ca31bb0fc53b275c9b5a3ca77e4737f795bb36fb5312_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_2110b9b7e3cb9f922824bc809a37e8713e81bde8a9d08a1a0f1ec509f37dfe15 = $this->env->getExtension("native_profiler");
        $__internal_2110b9b7e3cb9f922824bc809a37e8713e81bde8a9d08a1a0f1ec509f37dfe15->enter($__internal_2110b9b7e3cb9f922824bc809a37e8713e81bde8a9d08a1a0f1ec509f37dfe15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_2110b9b7e3cb9f922824bc809a37e8713e81bde8a9d08a1a0f1ec509f37dfe15->leave($__internal_2110b9b7e3cb9f922824bc809a37e8713e81bde8a9d08a1a0f1ec509f37dfe15_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_bc9e60704b4ceab4ad270a5b499c98ae40f840e27cfc96a29a0f792a825dcb94 = $this->env->getExtension("native_profiler");
        $__internal_bc9e60704b4ceab4ad270a5b499c98ae40f840e27cfc96a29a0f792a825dcb94->enter($__internal_bc9e60704b4ceab4ad270a5b499c98ae40f840e27cfc96a29a0f792a825dcb94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_bc9e60704b4ceab4ad270a5b499c98ae40f840e27cfc96a29a0f792a825dcb94->leave($__internal_bc9e60704b4ceab4ad270a5b499c98ae40f840e27cfc96a29a0f792a825dcb94_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_bfe6a1abad2c97f9b5cee4eda34dbdb68630508f02e159a0dec0f9ab431ade21 = $this->env->getExtension("native_profiler");
        $__internal_bfe6a1abad2c97f9b5cee4eda34dbdb68630508f02e159a0dec0f9ab431ade21->enter($__internal_bfe6a1abad2c97f9b5cee4eda34dbdb68630508f02e159a0dec0f9ab431ade21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_bfe6a1abad2c97f9b5cee4eda34dbdb68630508f02e159a0dec0f9ab431ade21->leave($__internal_bfe6a1abad2c97f9b5cee4eda34dbdb68630508f02e159a0dec0f9ab431ade21_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d2e370a224e2ebffa18a542e643a4291b1dd0c44c87372146423a9b79d4ed31f = $this->env->getExtension("native_profiler");
        $__internal_d2e370a224e2ebffa18a542e643a4291b1dd0c44c87372146423a9b79d4ed31f->enter($__internal_d2e370a224e2ebffa18a542e643a4291b1dd0c44c87372146423a9b79d4ed31f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_d2e370a224e2ebffa18a542e643a4291b1dd0c44c87372146423a9b79d4ed31f->leave($__internal_d2e370a224e2ebffa18a542e643a4291b1dd0c44c87372146423a9b79d4ed31f_prof);

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
