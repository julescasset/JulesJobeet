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
        $__internal_102c0166e21403dfc80b1e135ed7312d84f92990ce1a9e30d9741994d7cd21e9 = $this->env->getExtension("native_profiler");
        $__internal_102c0166e21403dfc80b1e135ed7312d84f92990ce1a9e30d9741994d7cd21e9->enter($__internal_102c0166e21403dfc80b1e135ed7312d84f92990ce1a9e30d9741994d7cd21e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_102c0166e21403dfc80b1e135ed7312d84f92990ce1a9e30d9741994d7cd21e9->leave($__internal_102c0166e21403dfc80b1e135ed7312d84f92990ce1a9e30d9741994d7cd21e9_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_51e948da5d1f5e2af07fb0688e121b82ec22e55bc3d639120251b01e76656c30 = $this->env->getExtension("native_profiler");
        $__internal_51e948da5d1f5e2af07fb0688e121b82ec22e55bc3d639120251b01e76656c30->enter($__internal_51e948da5d1f5e2af07fb0688e121b82ec22e55bc3d639120251b01e76656c30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_51e948da5d1f5e2af07fb0688e121b82ec22e55bc3d639120251b01e76656c30->leave($__internal_51e948da5d1f5e2af07fb0688e121b82ec22e55bc3d639120251b01e76656c30_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_27fa23afb5c6dd64d15b50d9b1a877bbaa823f8cf4dbfaca36689b90e325614c = $this->env->getExtension("native_profiler");
        $__internal_27fa23afb5c6dd64d15b50d9b1a877bbaa823f8cf4dbfaca36689b90e325614c->enter($__internal_27fa23afb5c6dd64d15b50d9b1a877bbaa823f8cf4dbfaca36689b90e325614c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_27fa23afb5c6dd64d15b50d9b1a877bbaa823f8cf4dbfaca36689b90e325614c->leave($__internal_27fa23afb5c6dd64d15b50d9b1a877bbaa823f8cf4dbfaca36689b90e325614c_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_99977303478c6bcc7f1c14b5710e1dd462ff74312fffa09f1b99404956b26deb = $this->env->getExtension("native_profiler");
        $__internal_99977303478c6bcc7f1c14b5710e1dd462ff74312fffa09f1b99404956b26deb->enter($__internal_99977303478c6bcc7f1c14b5710e1dd462ff74312fffa09f1b99404956b26deb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_99977303478c6bcc7f1c14b5710e1dd462ff74312fffa09f1b99404956b26deb->leave($__internal_99977303478c6bcc7f1c14b5710e1dd462ff74312fffa09f1b99404956b26deb_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7d9c0fe998e3c4aeec67cf48ba15407df8cf91d07ed66a66539350d93e6a34e2 = $this->env->getExtension("native_profiler");
        $__internal_7d9c0fe998e3c4aeec67cf48ba15407df8cf91d07ed66a66539350d93e6a34e2->enter($__internal_7d9c0fe998e3c4aeec67cf48ba15407df8cf91d07ed66a66539350d93e6a34e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_7d9c0fe998e3c4aeec67cf48ba15407df8cf91d07ed66a66539350d93e6a34e2->leave($__internal_7d9c0fe998e3c4aeec67cf48ba15407df8cf91d07ed66a66539350d93e6a34e2_prof);

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
