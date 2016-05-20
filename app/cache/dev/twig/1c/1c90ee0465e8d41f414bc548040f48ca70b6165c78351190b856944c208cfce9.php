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
        $__internal_8edf0895791a43d70096ff03fa8bb1b36cd78fa721ab3ab9d3964b0ba97a8ac3 = $this->env->getExtension("native_profiler");
        $__internal_8edf0895791a43d70096ff03fa8bb1b36cd78fa721ab3ab9d3964b0ba97a8ac3->enter($__internal_8edf0895791a43d70096ff03fa8bb1b36cd78fa721ab3ab9d3964b0ba97a8ac3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_8edf0895791a43d70096ff03fa8bb1b36cd78fa721ab3ab9d3964b0ba97a8ac3->leave($__internal_8edf0895791a43d70096ff03fa8bb1b36cd78fa721ab3ab9d3964b0ba97a8ac3_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_8109ec62b51f37d8fb48efecba5f818acf8ee79041fa22c7f06481ff8a6783ec = $this->env->getExtension("native_profiler");
        $__internal_8109ec62b51f37d8fb48efecba5f818acf8ee79041fa22c7f06481ff8a6783ec->enter($__internal_8109ec62b51f37d8fb48efecba5f818acf8ee79041fa22c7f06481ff8a6783ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_8109ec62b51f37d8fb48efecba5f818acf8ee79041fa22c7f06481ff8a6783ec->leave($__internal_8109ec62b51f37d8fb48efecba5f818acf8ee79041fa22c7f06481ff8a6783ec_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9d7f3023ea1f98dc79424819e4729677167b022d6320325464ba620a11defb99 = $this->env->getExtension("native_profiler");
        $__internal_9d7f3023ea1f98dc79424819e4729677167b022d6320325464ba620a11defb99->enter($__internal_9d7f3023ea1f98dc79424819e4729677167b022d6320325464ba620a11defb99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_9d7f3023ea1f98dc79424819e4729677167b022d6320325464ba620a11defb99->leave($__internal_9d7f3023ea1f98dc79424819e4729677167b022d6320325464ba620a11defb99_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_6d17131b6984b0a330593ae73e95cae190a21eb751a89581d86201b0a5e3a417 = $this->env->getExtension("native_profiler");
        $__internal_6d17131b6984b0a330593ae73e95cae190a21eb751a89581d86201b0a5e3a417->enter($__internal_6d17131b6984b0a330593ae73e95cae190a21eb751a89581d86201b0a5e3a417_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6d17131b6984b0a330593ae73e95cae190a21eb751a89581d86201b0a5e3a417->leave($__internal_6d17131b6984b0a330593ae73e95cae190a21eb751a89581d86201b0a5e3a417_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_06ac4fa0f0e21b20ba3ddb2cb3e0ff2c50b0be0ef431f02dc892597afb04625b = $this->env->getExtension("native_profiler");
        $__internal_06ac4fa0f0e21b20ba3ddb2cb3e0ff2c50b0be0ef431f02dc892597afb04625b->enter($__internal_06ac4fa0f0e21b20ba3ddb2cb3e0ff2c50b0be0ef431f02dc892597afb04625b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_06ac4fa0f0e21b20ba3ddb2cb3e0ff2c50b0be0ef431f02dc892597afb04625b->leave($__internal_06ac4fa0f0e21b20ba3ddb2cb3e0ff2c50b0be0ef431f02dc892597afb04625b_prof);

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
