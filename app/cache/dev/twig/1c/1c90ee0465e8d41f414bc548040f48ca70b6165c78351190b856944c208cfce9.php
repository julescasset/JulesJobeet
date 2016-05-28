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
        $__internal_ecc033a85db36f14bef8fac30499ec8f9da55083b412c0b3ffe1dedb4d602bb7 = $this->env->getExtension("native_profiler");
        $__internal_ecc033a85db36f14bef8fac30499ec8f9da55083b412c0b3ffe1dedb4d602bb7->enter($__internal_ecc033a85db36f14bef8fac30499ec8f9da55083b412c0b3ffe1dedb4d602bb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_ecc033a85db36f14bef8fac30499ec8f9da55083b412c0b3ffe1dedb4d602bb7->leave($__internal_ecc033a85db36f14bef8fac30499ec8f9da55083b412c0b3ffe1dedb4d602bb7_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_b940c06857e74c38274f4870095a11f4168daddfdf10df3fb990894560512459 = $this->env->getExtension("native_profiler");
        $__internal_b940c06857e74c38274f4870095a11f4168daddfdf10df3fb990894560512459->enter($__internal_b940c06857e74c38274f4870095a11f4168daddfdf10df3fb990894560512459_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_b940c06857e74c38274f4870095a11f4168daddfdf10df3fb990894560512459->leave($__internal_b940c06857e74c38274f4870095a11f4168daddfdf10df3fb990894560512459_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_755a7e60cab216eca60ec0ed9bd11344061217e9fef9e1b6671dfd909fd6c1a0 = $this->env->getExtension("native_profiler");
        $__internal_755a7e60cab216eca60ec0ed9bd11344061217e9fef9e1b6671dfd909fd6c1a0->enter($__internal_755a7e60cab216eca60ec0ed9bd11344061217e9fef9e1b6671dfd909fd6c1a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_755a7e60cab216eca60ec0ed9bd11344061217e9fef9e1b6671dfd909fd6c1a0->leave($__internal_755a7e60cab216eca60ec0ed9bd11344061217e9fef9e1b6671dfd909fd6c1a0_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_eedb5507cc19ccc414dc7a90853beaba49f8a4a6c48b8bda82a3b6a749cf837d = $this->env->getExtension("native_profiler");
        $__internal_eedb5507cc19ccc414dc7a90853beaba49f8a4a6c48b8bda82a3b6a749cf837d->enter($__internal_eedb5507cc19ccc414dc7a90853beaba49f8a4a6c48b8bda82a3b6a749cf837d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_eedb5507cc19ccc414dc7a90853beaba49f8a4a6c48b8bda82a3b6a749cf837d->leave($__internal_eedb5507cc19ccc414dc7a90853beaba49f8a4a6c48b8bda82a3b6a749cf837d_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a6a5a3a7872677d1a5a81e598d843f51527acc467383df9ea584143405bcd256 = $this->env->getExtension("native_profiler");
        $__internal_a6a5a3a7872677d1a5a81e598d843f51527acc467383df9ea584143405bcd256->enter($__internal_a6a5a3a7872677d1a5a81e598d843f51527acc467383df9ea584143405bcd256_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_a6a5a3a7872677d1a5a81e598d843f51527acc467383df9ea584143405bcd256->leave($__internal_a6a5a3a7872677d1a5a81e598d843f51527acc467383df9ea584143405bcd256_prof);

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
