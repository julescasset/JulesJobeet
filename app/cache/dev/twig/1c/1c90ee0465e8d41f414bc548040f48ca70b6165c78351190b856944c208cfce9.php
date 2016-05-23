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
        $__internal_b7895559cd56721ec3668823cb8bc9be092177c7da0912c48fe2ea56f95eb157 = $this->env->getExtension("native_profiler");
        $__internal_b7895559cd56721ec3668823cb8bc9be092177c7da0912c48fe2ea56f95eb157->enter($__internal_b7895559cd56721ec3668823cb8bc9be092177c7da0912c48fe2ea56f95eb157_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_b7895559cd56721ec3668823cb8bc9be092177c7da0912c48fe2ea56f95eb157->leave($__internal_b7895559cd56721ec3668823cb8bc9be092177c7da0912c48fe2ea56f95eb157_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c372dcc3ee5912feaed954909db10b3b27a2c5636a1ab9d1d28da36eb7c9a65b = $this->env->getExtension("native_profiler");
        $__internal_c372dcc3ee5912feaed954909db10b3b27a2c5636a1ab9d1d28da36eb7c9a65b->enter($__internal_c372dcc3ee5912feaed954909db10b3b27a2c5636a1ab9d1d28da36eb7c9a65b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_c372dcc3ee5912feaed954909db10b3b27a2c5636a1ab9d1d28da36eb7c9a65b->leave($__internal_c372dcc3ee5912feaed954909db10b3b27a2c5636a1ab9d1d28da36eb7c9a65b_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2d0c347bb3e0fa5066769d81b2fd2c56196e6f359e43131073a21d4934668cc4 = $this->env->getExtension("native_profiler");
        $__internal_2d0c347bb3e0fa5066769d81b2fd2c56196e6f359e43131073a21d4934668cc4->enter($__internal_2d0c347bb3e0fa5066769d81b2fd2c56196e6f359e43131073a21d4934668cc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_2d0c347bb3e0fa5066769d81b2fd2c56196e6f359e43131073a21d4934668cc4->leave($__internal_2d0c347bb3e0fa5066769d81b2fd2c56196e6f359e43131073a21d4934668cc4_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_93daaac88c122ec3c6122ab3d02f179672db195d72713537a1746b9b32c9a4a0 = $this->env->getExtension("native_profiler");
        $__internal_93daaac88c122ec3c6122ab3d02f179672db195d72713537a1746b9b32c9a4a0->enter($__internal_93daaac88c122ec3c6122ab3d02f179672db195d72713537a1746b9b32c9a4a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_93daaac88c122ec3c6122ab3d02f179672db195d72713537a1746b9b32c9a4a0->leave($__internal_93daaac88c122ec3c6122ab3d02f179672db195d72713537a1746b9b32c9a4a0_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_cb42cb6ce578379d7ff43e9d72c7fae94d3d1c977569494e36c5567cfbf5cebb = $this->env->getExtension("native_profiler");
        $__internal_cb42cb6ce578379d7ff43e9d72c7fae94d3d1c977569494e36c5567cfbf5cebb->enter($__internal_cb42cb6ce578379d7ff43e9d72c7fae94d3d1c977569494e36c5567cfbf5cebb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_cb42cb6ce578379d7ff43e9d72c7fae94d3d1c977569494e36c5567cfbf5cebb->leave($__internal_cb42cb6ce578379d7ff43e9d72c7fae94d3d1c977569494e36c5567cfbf5cebb_prof);

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
