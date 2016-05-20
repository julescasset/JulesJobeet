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
        $__internal_7502d7abc3c9416cf461594ab7d9a4cf8f1cd69a510235c04f2735ff51c1e990 = $this->env->getExtension("native_profiler");
        $__internal_7502d7abc3c9416cf461594ab7d9a4cf8f1cd69a510235c04f2735ff51c1e990->enter($__internal_7502d7abc3c9416cf461594ab7d9a4cf8f1cd69a510235c04f2735ff51c1e990_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_7502d7abc3c9416cf461594ab7d9a4cf8f1cd69a510235c04f2735ff51c1e990->leave($__internal_7502d7abc3c9416cf461594ab7d9a4cf8f1cd69a510235c04f2735ff51c1e990_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e7eee8e674fc8b2edf177be31416d9c961a94152ae251007324ca83888a3eed2 = $this->env->getExtension("native_profiler");
        $__internal_e7eee8e674fc8b2edf177be31416d9c961a94152ae251007324ca83888a3eed2->enter($__internal_e7eee8e674fc8b2edf177be31416d9c961a94152ae251007324ca83888a3eed2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_e7eee8e674fc8b2edf177be31416d9c961a94152ae251007324ca83888a3eed2->leave($__internal_e7eee8e674fc8b2edf177be31416d9c961a94152ae251007324ca83888a3eed2_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2323a0edb6110170c8d2c6f003ecd4c6c795bc483b5c6e0e621da1a8829f3ae3 = $this->env->getExtension("native_profiler");
        $__internal_2323a0edb6110170c8d2c6f003ecd4c6c795bc483b5c6e0e621da1a8829f3ae3->enter($__internal_2323a0edb6110170c8d2c6f003ecd4c6c795bc483b5c6e0e621da1a8829f3ae3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_2323a0edb6110170c8d2c6f003ecd4c6c795bc483b5c6e0e621da1a8829f3ae3->leave($__internal_2323a0edb6110170c8d2c6f003ecd4c6c795bc483b5c6e0e621da1a8829f3ae3_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_52257777387994dc363a838446e314bf86ef9102aa72c68e0561ea2ce13b2a76 = $this->env->getExtension("native_profiler");
        $__internal_52257777387994dc363a838446e314bf86ef9102aa72c68e0561ea2ce13b2a76->enter($__internal_52257777387994dc363a838446e314bf86ef9102aa72c68e0561ea2ce13b2a76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_52257777387994dc363a838446e314bf86ef9102aa72c68e0561ea2ce13b2a76->leave($__internal_52257777387994dc363a838446e314bf86ef9102aa72c68e0561ea2ce13b2a76_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_94227b4b2c2f1ec9868e92c7246ae497529521f313c35aadaefc997838981fd2 = $this->env->getExtension("native_profiler");
        $__internal_94227b4b2c2f1ec9868e92c7246ae497529521f313c35aadaefc997838981fd2->enter($__internal_94227b4b2c2f1ec9868e92c7246ae497529521f313c35aadaefc997838981fd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_94227b4b2c2f1ec9868e92c7246ae497529521f313c35aadaefc997838981fd2->leave($__internal_94227b4b2c2f1ec9868e92c7246ae497529521f313c35aadaefc997838981fd2_prof);

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
