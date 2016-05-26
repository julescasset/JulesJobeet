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
        $__internal_aa401c7da9cb6058e9d60cacc60b7384a4af000a87bcac0378bc3907a2680b6e = $this->env->getExtension("native_profiler");
        $__internal_aa401c7da9cb6058e9d60cacc60b7384a4af000a87bcac0378bc3907a2680b6e->enter($__internal_aa401c7da9cb6058e9d60cacc60b7384a4af000a87bcac0378bc3907a2680b6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_aa401c7da9cb6058e9d60cacc60b7384a4af000a87bcac0378bc3907a2680b6e->leave($__internal_aa401c7da9cb6058e9d60cacc60b7384a4af000a87bcac0378bc3907a2680b6e_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_bcb71e744ea7c8166a4eed765691d563048923d0f1b9013550532142f0dd91fc = $this->env->getExtension("native_profiler");
        $__internal_bcb71e744ea7c8166a4eed765691d563048923d0f1b9013550532142f0dd91fc->enter($__internal_bcb71e744ea7c8166a4eed765691d563048923d0f1b9013550532142f0dd91fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_bcb71e744ea7c8166a4eed765691d563048923d0f1b9013550532142f0dd91fc->leave($__internal_bcb71e744ea7c8166a4eed765691d563048923d0f1b9013550532142f0dd91fc_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ed25be60d36cf3f9fc6a9e3c0c13e73932c0d532ff53f7fcf1b56053ba71b82f = $this->env->getExtension("native_profiler");
        $__internal_ed25be60d36cf3f9fc6a9e3c0c13e73932c0d532ff53f7fcf1b56053ba71b82f->enter($__internal_ed25be60d36cf3f9fc6a9e3c0c13e73932c0d532ff53f7fcf1b56053ba71b82f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_ed25be60d36cf3f9fc6a9e3c0c13e73932c0d532ff53f7fcf1b56053ba71b82f->leave($__internal_ed25be60d36cf3f9fc6a9e3c0c13e73932c0d532ff53f7fcf1b56053ba71b82f_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_f4a5078b96e1f0154f08745d4df43615ec56b0228b075967d9a3d0bc9a0e1aa0 = $this->env->getExtension("native_profiler");
        $__internal_f4a5078b96e1f0154f08745d4df43615ec56b0228b075967d9a3d0bc9a0e1aa0->enter($__internal_f4a5078b96e1f0154f08745d4df43615ec56b0228b075967d9a3d0bc9a0e1aa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f4a5078b96e1f0154f08745d4df43615ec56b0228b075967d9a3d0bc9a0e1aa0->leave($__internal_f4a5078b96e1f0154f08745d4df43615ec56b0228b075967d9a3d0bc9a0e1aa0_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2c45dcb1bb6e49d97ada8d7cb7540886d5919d615f0dbff5b15e3d4cfaa218fc = $this->env->getExtension("native_profiler");
        $__internal_2c45dcb1bb6e49d97ada8d7cb7540886d5919d615f0dbff5b15e3d4cfaa218fc->enter($__internal_2c45dcb1bb6e49d97ada8d7cb7540886d5919d615f0dbff5b15e3d4cfaa218fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_2c45dcb1bb6e49d97ada8d7cb7540886d5919d615f0dbff5b15e3d4cfaa218fc->leave($__internal_2c45dcb1bb6e49d97ada8d7cb7540886d5919d615f0dbff5b15e3d4cfaa218fc_prof);

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
