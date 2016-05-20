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
        $__internal_5d76a331ce9f29c0b9395523f08d64627f56a1aa84b41db033028cc65729e3a9 = $this->env->getExtension("native_profiler");
        $__internal_5d76a331ce9f29c0b9395523f08d64627f56a1aa84b41db033028cc65729e3a9->enter($__internal_5d76a331ce9f29c0b9395523f08d64627f56a1aa84b41db033028cc65729e3a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_5d76a331ce9f29c0b9395523f08d64627f56a1aa84b41db033028cc65729e3a9->leave($__internal_5d76a331ce9f29c0b9395523f08d64627f56a1aa84b41db033028cc65729e3a9_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_2387f9ce73ad8f4da749be5a49f679a917b0b3eb475bd39ddc81f8e9fc4e3499 = $this->env->getExtension("native_profiler");
        $__internal_2387f9ce73ad8f4da749be5a49f679a917b0b3eb475bd39ddc81f8e9fc4e3499->enter($__internal_2387f9ce73ad8f4da749be5a49f679a917b0b3eb475bd39ddc81f8e9fc4e3499_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_2387f9ce73ad8f4da749be5a49f679a917b0b3eb475bd39ddc81f8e9fc4e3499->leave($__internal_2387f9ce73ad8f4da749be5a49f679a917b0b3eb475bd39ddc81f8e9fc4e3499_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9a7e96d8aebba4084312a0213d7817c170a3913b4b7ff65f69db05720eb4e09a = $this->env->getExtension("native_profiler");
        $__internal_9a7e96d8aebba4084312a0213d7817c170a3913b4b7ff65f69db05720eb4e09a->enter($__internal_9a7e96d8aebba4084312a0213d7817c170a3913b4b7ff65f69db05720eb4e09a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_9a7e96d8aebba4084312a0213d7817c170a3913b4b7ff65f69db05720eb4e09a->leave($__internal_9a7e96d8aebba4084312a0213d7817c170a3913b4b7ff65f69db05720eb4e09a_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_218c4c5396f33f66eccf87b93632da24a279829b769435654e8d2ba765dddd31 = $this->env->getExtension("native_profiler");
        $__internal_218c4c5396f33f66eccf87b93632da24a279829b769435654e8d2ba765dddd31->enter($__internal_218c4c5396f33f66eccf87b93632da24a279829b769435654e8d2ba765dddd31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_218c4c5396f33f66eccf87b93632da24a279829b769435654e8d2ba765dddd31->leave($__internal_218c4c5396f33f66eccf87b93632da24a279829b769435654e8d2ba765dddd31_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4fc3cc03a25bc094608236143f80c2a457e36e3c2c4c32aa0f60e477f17545c8 = $this->env->getExtension("native_profiler");
        $__internal_4fc3cc03a25bc094608236143f80c2a457e36e3c2c4c32aa0f60e477f17545c8->enter($__internal_4fc3cc03a25bc094608236143f80c2a457e36e3c2c4c32aa0f60e477f17545c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_4fc3cc03a25bc094608236143f80c2a457e36e3c2c4c32aa0f60e477f17545c8->leave($__internal_4fc3cc03a25bc094608236143f80c2a457e36e3c2c4c32aa0f60e477f17545c8_prof);

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
