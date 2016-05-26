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
        $__internal_1d4c582281fc7f334418b59989bdd7537f381420be9ad216f63bfa1b71fa8fc2 = $this->env->getExtension("native_profiler");
        $__internal_1d4c582281fc7f334418b59989bdd7537f381420be9ad216f63bfa1b71fa8fc2->enter($__internal_1d4c582281fc7f334418b59989bdd7537f381420be9ad216f63bfa1b71fa8fc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_1d4c582281fc7f334418b59989bdd7537f381420be9ad216f63bfa1b71fa8fc2->leave($__internal_1d4c582281fc7f334418b59989bdd7537f381420be9ad216f63bfa1b71fa8fc2_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_3e7a2dce8e650beb9443c65424e523e78b9257c367dc920419612b5c5f62918d = $this->env->getExtension("native_profiler");
        $__internal_3e7a2dce8e650beb9443c65424e523e78b9257c367dc920419612b5c5f62918d->enter($__internal_3e7a2dce8e650beb9443c65424e523e78b9257c367dc920419612b5c5f62918d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_3e7a2dce8e650beb9443c65424e523e78b9257c367dc920419612b5c5f62918d->leave($__internal_3e7a2dce8e650beb9443c65424e523e78b9257c367dc920419612b5c5f62918d_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_94f8b27d1b67139ac130032021711248eed9e8b154dc8b713577c4920bf6bb66 = $this->env->getExtension("native_profiler");
        $__internal_94f8b27d1b67139ac130032021711248eed9e8b154dc8b713577c4920bf6bb66->enter($__internal_94f8b27d1b67139ac130032021711248eed9e8b154dc8b713577c4920bf6bb66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_94f8b27d1b67139ac130032021711248eed9e8b154dc8b713577c4920bf6bb66->leave($__internal_94f8b27d1b67139ac130032021711248eed9e8b154dc8b713577c4920bf6bb66_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_c0f8f69eb675def8df757726db3fde29f255761ce3604fd18f4e3552ae6abbf2 = $this->env->getExtension("native_profiler");
        $__internal_c0f8f69eb675def8df757726db3fde29f255761ce3604fd18f4e3552ae6abbf2->enter($__internal_c0f8f69eb675def8df757726db3fde29f255761ce3604fd18f4e3552ae6abbf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c0f8f69eb675def8df757726db3fde29f255761ce3604fd18f4e3552ae6abbf2->leave($__internal_c0f8f69eb675def8df757726db3fde29f255761ce3604fd18f4e3552ae6abbf2_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b38b4520a4f5530de87801b963c7c1b37e9efb640d13bb59bf779eea8fc2a20f = $this->env->getExtension("native_profiler");
        $__internal_b38b4520a4f5530de87801b963c7c1b37e9efb640d13bb59bf779eea8fc2a20f->enter($__internal_b38b4520a4f5530de87801b963c7c1b37e9efb640d13bb59bf779eea8fc2a20f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_b38b4520a4f5530de87801b963c7c1b37e9efb640d13bb59bf779eea8fc2a20f->leave($__internal_b38b4520a4f5530de87801b963c7c1b37e9efb640d13bb59bf779eea8fc2a20f_prof);

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
