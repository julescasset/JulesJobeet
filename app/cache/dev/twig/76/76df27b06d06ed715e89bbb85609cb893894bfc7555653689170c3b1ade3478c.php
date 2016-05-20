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
        $__internal_7239d07a12c684c521a603cf1d5387a77a147a5c26d9395bf1562bc340f52e0c = $this->env->getExtension("native_profiler");
        $__internal_7239d07a12c684c521a603cf1d5387a77a147a5c26d9395bf1562bc340f52e0c->enter($__internal_7239d07a12c684c521a603cf1d5387a77a147a5c26d9395bf1562bc340f52e0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_7239d07a12c684c521a603cf1d5387a77a147a5c26d9395bf1562bc340f52e0c->leave($__internal_7239d07a12c684c521a603cf1d5387a77a147a5c26d9395bf1562bc340f52e0c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_41cd7f288cef1e63bf6a4d83bae1314662dde266e36f57340d83b6a5bdf3d0d9 = $this->env->getExtension("native_profiler");
        $__internal_41cd7f288cef1e63bf6a4d83bae1314662dde266e36f57340d83b6a5bdf3d0d9->enter($__internal_41cd7f288cef1e63bf6a4d83bae1314662dde266e36f57340d83b6a5bdf3d0d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_41cd7f288cef1e63bf6a4d83bae1314662dde266e36f57340d83b6a5bdf3d0d9->leave($__internal_41cd7f288cef1e63bf6a4d83bae1314662dde266e36f57340d83b6a5bdf3d0d9_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_fd9b2a7dd588bd7013a9aa3de2596ee8a7600c6401350203820c88efd82c2191 = $this->env->getExtension("native_profiler");
        $__internal_fd9b2a7dd588bd7013a9aa3de2596ee8a7600c6401350203820c88efd82c2191->enter($__internal_fd9b2a7dd588bd7013a9aa3de2596ee8a7600c6401350203820c88efd82c2191_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_fd9b2a7dd588bd7013a9aa3de2596ee8a7600c6401350203820c88efd82c2191->leave($__internal_fd9b2a7dd588bd7013a9aa3de2596ee8a7600c6401350203820c88efd82c2191_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_34b23d322d365eba6ac39f7eda94960b73a9a3a2c77ff353d12ddf92450d844f = $this->env->getExtension("native_profiler");
        $__internal_34b23d322d365eba6ac39f7eda94960b73a9a3a2c77ff353d12ddf92450d844f->enter($__internal_34b23d322d365eba6ac39f7eda94960b73a9a3a2c77ff353d12ddf92450d844f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_34b23d322d365eba6ac39f7eda94960b73a9a3a2c77ff353d12ddf92450d844f->leave($__internal_34b23d322d365eba6ac39f7eda94960b73a9a3a2c77ff353d12ddf92450d844f_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_fdfdf3486cd4ee94201c039c0df5525ada8422db0d561e513cea64a45744f115 = $this->env->getExtension("native_profiler");
        $__internal_fdfdf3486cd4ee94201c039c0df5525ada8422db0d561e513cea64a45744f115->enter($__internal_fdfdf3486cd4ee94201c039c0df5525ada8422db0d561e513cea64a45744f115_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_fdfdf3486cd4ee94201c039c0df5525ada8422db0d561e513cea64a45744f115->leave($__internal_fdfdf3486cd4ee94201c039c0df5525ada8422db0d561e513cea64a45744f115_prof);

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
