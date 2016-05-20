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
        $__internal_9dd109e8b6c44b53269caa93ff19494056267e4a05d3237d53ca23b1f5f88108 = $this->env->getExtension("native_profiler");
        $__internal_9dd109e8b6c44b53269caa93ff19494056267e4a05d3237d53ca23b1f5f88108->enter($__internal_9dd109e8b6c44b53269caa93ff19494056267e4a05d3237d53ca23b1f5f88108_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_9dd109e8b6c44b53269caa93ff19494056267e4a05d3237d53ca23b1f5f88108->leave($__internal_9dd109e8b6c44b53269caa93ff19494056267e4a05d3237d53ca23b1f5f88108_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f19dccccaf33e961a9caa560b40bdad7c63221234aacfca4a666e29e3f0d0826 = $this->env->getExtension("native_profiler");
        $__internal_f19dccccaf33e961a9caa560b40bdad7c63221234aacfca4a666e29e3f0d0826->enter($__internal_f19dccccaf33e961a9caa560b40bdad7c63221234aacfca4a666e29e3f0d0826_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_f19dccccaf33e961a9caa560b40bdad7c63221234aacfca4a666e29e3f0d0826->leave($__internal_f19dccccaf33e961a9caa560b40bdad7c63221234aacfca4a666e29e3f0d0826_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e3f4e603371cf55faf0bbeb219fd363665e1e5c4c7773e922c2370c51d287d5f = $this->env->getExtension("native_profiler");
        $__internal_e3f4e603371cf55faf0bbeb219fd363665e1e5c4c7773e922c2370c51d287d5f->enter($__internal_e3f4e603371cf55faf0bbeb219fd363665e1e5c4c7773e922c2370c51d287d5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_e3f4e603371cf55faf0bbeb219fd363665e1e5c4c7773e922c2370c51d287d5f->leave($__internal_e3f4e603371cf55faf0bbeb219fd363665e1e5c4c7773e922c2370c51d287d5f_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_2d75541eaca5262f539df7e1d1670ef2ef4ff90a8e09c9f3252c709f6a65a515 = $this->env->getExtension("native_profiler");
        $__internal_2d75541eaca5262f539df7e1d1670ef2ef4ff90a8e09c9f3252c709f6a65a515->enter($__internal_2d75541eaca5262f539df7e1d1670ef2ef4ff90a8e09c9f3252c709f6a65a515_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_2d75541eaca5262f539df7e1d1670ef2ef4ff90a8e09c9f3252c709f6a65a515->leave($__internal_2d75541eaca5262f539df7e1d1670ef2ef4ff90a8e09c9f3252c709f6a65a515_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ce4ebb85368c6bbceccf4689974127fa5f885fadd05d42e0071464f0f8b64bb1 = $this->env->getExtension("native_profiler");
        $__internal_ce4ebb85368c6bbceccf4689974127fa5f885fadd05d42e0071464f0f8b64bb1->enter($__internal_ce4ebb85368c6bbceccf4689974127fa5f885fadd05d42e0071464f0f8b64bb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_ce4ebb85368c6bbceccf4689974127fa5f885fadd05d42e0071464f0f8b64bb1->leave($__internal_ce4ebb85368c6bbceccf4689974127fa5f885fadd05d42e0071464f0f8b64bb1_prof);

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
