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
        $__internal_10566e8008afaf045460bcc1fe601b370358c2c33cf7c503c7b8c083944e2782 = $this->env->getExtension("native_profiler");
        $__internal_10566e8008afaf045460bcc1fe601b370358c2c33cf7c503c7b8c083944e2782->enter($__internal_10566e8008afaf045460bcc1fe601b370358c2c33cf7c503c7b8c083944e2782_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_10566e8008afaf045460bcc1fe601b370358c2c33cf7c503c7b8c083944e2782->leave($__internal_10566e8008afaf045460bcc1fe601b370358c2c33cf7c503c7b8c083944e2782_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_5dc3f1719c4a0c135747b91fe00efd4bdbaafac9961e897e50224dc361332924 = $this->env->getExtension("native_profiler");
        $__internal_5dc3f1719c4a0c135747b91fe00efd4bdbaafac9961e897e50224dc361332924->enter($__internal_5dc3f1719c4a0c135747b91fe00efd4bdbaafac9961e897e50224dc361332924_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_5dc3f1719c4a0c135747b91fe00efd4bdbaafac9961e897e50224dc361332924->leave($__internal_5dc3f1719c4a0c135747b91fe00efd4bdbaafac9961e897e50224dc361332924_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_bb6096f067ee2d9213e26fb82d0fb23aba6365f040a2f187584710770d4e6671 = $this->env->getExtension("native_profiler");
        $__internal_bb6096f067ee2d9213e26fb82d0fb23aba6365f040a2f187584710770d4e6671->enter($__internal_bb6096f067ee2d9213e26fb82d0fb23aba6365f040a2f187584710770d4e6671_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_bb6096f067ee2d9213e26fb82d0fb23aba6365f040a2f187584710770d4e6671->leave($__internal_bb6096f067ee2d9213e26fb82d0fb23aba6365f040a2f187584710770d4e6671_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_4d8aaa614eae8a28171b3d5db262f1ffa76837cda256798e243ee7348b3b0102 = $this->env->getExtension("native_profiler");
        $__internal_4d8aaa614eae8a28171b3d5db262f1ffa76837cda256798e243ee7348b3b0102->enter($__internal_4d8aaa614eae8a28171b3d5db262f1ffa76837cda256798e243ee7348b3b0102_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_4d8aaa614eae8a28171b3d5db262f1ffa76837cda256798e243ee7348b3b0102->leave($__internal_4d8aaa614eae8a28171b3d5db262f1ffa76837cda256798e243ee7348b3b0102_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_06c919473784ec954a236154c9e468d78081f6ad3f2da7a9e7982820285a1bf3 = $this->env->getExtension("native_profiler");
        $__internal_06c919473784ec954a236154c9e468d78081f6ad3f2da7a9e7982820285a1bf3->enter($__internal_06c919473784ec954a236154c9e468d78081f6ad3f2da7a9e7982820285a1bf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_06c919473784ec954a236154c9e468d78081f6ad3f2da7a9e7982820285a1bf3->leave($__internal_06c919473784ec954a236154c9e468d78081f6ad3f2da7a9e7982820285a1bf3_prof);

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
