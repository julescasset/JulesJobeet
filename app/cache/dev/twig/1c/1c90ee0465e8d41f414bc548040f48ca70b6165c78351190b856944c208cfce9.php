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
        $__internal_48f431796c37b1b13b88fbb92234a4795a3826ec82bb4958646f6e9b92fc3ef3 = $this->env->getExtension("native_profiler");
        $__internal_48f431796c37b1b13b88fbb92234a4795a3826ec82bb4958646f6e9b92fc3ef3->enter($__internal_48f431796c37b1b13b88fbb92234a4795a3826ec82bb4958646f6e9b92fc3ef3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_48f431796c37b1b13b88fbb92234a4795a3826ec82bb4958646f6e9b92fc3ef3->leave($__internal_48f431796c37b1b13b88fbb92234a4795a3826ec82bb4958646f6e9b92fc3ef3_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_a514d5b1955badb82a56010b06895e5fb44ccdfda97e37c61bc47c3fd0b950a1 = $this->env->getExtension("native_profiler");
        $__internal_a514d5b1955badb82a56010b06895e5fb44ccdfda97e37c61bc47c3fd0b950a1->enter($__internal_a514d5b1955badb82a56010b06895e5fb44ccdfda97e37c61bc47c3fd0b950a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_a514d5b1955badb82a56010b06895e5fb44ccdfda97e37c61bc47c3fd0b950a1->leave($__internal_a514d5b1955badb82a56010b06895e5fb44ccdfda97e37c61bc47c3fd0b950a1_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7965eb400b34a90176fd640aed505c62670bfcc28934c55593dca4b44790607c = $this->env->getExtension("native_profiler");
        $__internal_7965eb400b34a90176fd640aed505c62670bfcc28934c55593dca4b44790607c->enter($__internal_7965eb400b34a90176fd640aed505c62670bfcc28934c55593dca4b44790607c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_7965eb400b34a90176fd640aed505c62670bfcc28934c55593dca4b44790607c->leave($__internal_7965eb400b34a90176fd640aed505c62670bfcc28934c55593dca4b44790607c_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_cd60785e7fb8fda2bdad946a20fab49b8556b884ddd190e6ea6ed4443e492455 = $this->env->getExtension("native_profiler");
        $__internal_cd60785e7fb8fda2bdad946a20fab49b8556b884ddd190e6ea6ed4443e492455->enter($__internal_cd60785e7fb8fda2bdad946a20fab49b8556b884ddd190e6ea6ed4443e492455_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_cd60785e7fb8fda2bdad946a20fab49b8556b884ddd190e6ea6ed4443e492455->leave($__internal_cd60785e7fb8fda2bdad946a20fab49b8556b884ddd190e6ea6ed4443e492455_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_16a77736e43d540830da2cea346ddc71468c530886983311d7d3b9f29ceb6ad5 = $this->env->getExtension("native_profiler");
        $__internal_16a77736e43d540830da2cea346ddc71468c530886983311d7d3b9f29ceb6ad5->enter($__internal_16a77736e43d540830da2cea346ddc71468c530886983311d7d3b9f29ceb6ad5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_16a77736e43d540830da2cea346ddc71468c530886983311d7d3b9f29ceb6ad5->leave($__internal_16a77736e43d540830da2cea346ddc71468c530886983311d7d3b9f29ceb6ad5_prof);

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
