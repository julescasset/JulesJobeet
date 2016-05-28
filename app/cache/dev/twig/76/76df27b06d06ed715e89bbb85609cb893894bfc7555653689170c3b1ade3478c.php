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
        $__internal_c972f01ea8e89888644f084c4db97637b416e994458a3b8e97e24de5d4ef0050 = $this->env->getExtension("native_profiler");
        $__internal_c972f01ea8e89888644f084c4db97637b416e994458a3b8e97e24de5d4ef0050->enter($__internal_c972f01ea8e89888644f084c4db97637b416e994458a3b8e97e24de5d4ef0050_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_c972f01ea8e89888644f084c4db97637b416e994458a3b8e97e24de5d4ef0050->leave($__internal_c972f01ea8e89888644f084c4db97637b416e994458a3b8e97e24de5d4ef0050_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_fb0e691973b973d160fc20c8396828d5dc5402453c5c4406d3ddd94d2b8d6f6a = $this->env->getExtension("native_profiler");
        $__internal_fb0e691973b973d160fc20c8396828d5dc5402453c5c4406d3ddd94d2b8d6f6a->enter($__internal_fb0e691973b973d160fc20c8396828d5dc5402453c5c4406d3ddd94d2b8d6f6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_fb0e691973b973d160fc20c8396828d5dc5402453c5c4406d3ddd94d2b8d6f6a->leave($__internal_fb0e691973b973d160fc20c8396828d5dc5402453c5c4406d3ddd94d2b8d6f6a_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5c25a8f709370fd5524b3dcf6235fe4fe086e66b2d0d5fc2cda35c132167add4 = $this->env->getExtension("native_profiler");
        $__internal_5c25a8f709370fd5524b3dcf6235fe4fe086e66b2d0d5fc2cda35c132167add4->enter($__internal_5c25a8f709370fd5524b3dcf6235fe4fe086e66b2d0d5fc2cda35c132167add4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_5c25a8f709370fd5524b3dcf6235fe4fe086e66b2d0d5fc2cda35c132167add4->leave($__internal_5c25a8f709370fd5524b3dcf6235fe4fe086e66b2d0d5fc2cda35c132167add4_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_4d53767640b7bb5209e679662a5d1fab3b2815538418f283f42e5bd370658f42 = $this->env->getExtension("native_profiler");
        $__internal_4d53767640b7bb5209e679662a5d1fab3b2815538418f283f42e5bd370658f42->enter($__internal_4d53767640b7bb5209e679662a5d1fab3b2815538418f283f42e5bd370658f42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_4d53767640b7bb5209e679662a5d1fab3b2815538418f283f42e5bd370658f42->leave($__internal_4d53767640b7bb5209e679662a5d1fab3b2815538418f283f42e5bd370658f42_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ac4b095b7bd2da24ad4e617024925dc5849a6dfb0557633684483b3ed53e5b5a = $this->env->getExtension("native_profiler");
        $__internal_ac4b095b7bd2da24ad4e617024925dc5849a6dfb0557633684483b3ed53e5b5a->enter($__internal_ac4b095b7bd2da24ad4e617024925dc5849a6dfb0557633684483b3ed53e5b5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_ac4b095b7bd2da24ad4e617024925dc5849a6dfb0557633684483b3ed53e5b5a->leave($__internal_ac4b095b7bd2da24ad4e617024925dc5849a6dfb0557633684483b3ed53e5b5a_prof);

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
