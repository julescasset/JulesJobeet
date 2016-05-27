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
        $__internal_b37e3feb0ca1ba2cb3f4b936279e0241afe36d319bf953836de6eebb4ddb8aae = $this->env->getExtension("native_profiler");
        $__internal_b37e3feb0ca1ba2cb3f4b936279e0241afe36d319bf953836de6eebb4ddb8aae->enter($__internal_b37e3feb0ca1ba2cb3f4b936279e0241afe36d319bf953836de6eebb4ddb8aae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_b37e3feb0ca1ba2cb3f4b936279e0241afe36d319bf953836de6eebb4ddb8aae->leave($__internal_b37e3feb0ca1ba2cb3f4b936279e0241afe36d319bf953836de6eebb4ddb8aae_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_47542e9eef202f7de8b695d21d158e64f76e12b4ba0aaa5aabc319fc6f5f5dfe = $this->env->getExtension("native_profiler");
        $__internal_47542e9eef202f7de8b695d21d158e64f76e12b4ba0aaa5aabc319fc6f5f5dfe->enter($__internal_47542e9eef202f7de8b695d21d158e64f76e12b4ba0aaa5aabc319fc6f5f5dfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_47542e9eef202f7de8b695d21d158e64f76e12b4ba0aaa5aabc319fc6f5f5dfe->leave($__internal_47542e9eef202f7de8b695d21d158e64f76e12b4ba0aaa5aabc319fc6f5f5dfe_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_149e0ae1398204c55e1a9fd85febb785a97fa889d649adbaf9fec903e87d5ed3 = $this->env->getExtension("native_profiler");
        $__internal_149e0ae1398204c55e1a9fd85febb785a97fa889d649adbaf9fec903e87d5ed3->enter($__internal_149e0ae1398204c55e1a9fd85febb785a97fa889d649adbaf9fec903e87d5ed3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_149e0ae1398204c55e1a9fd85febb785a97fa889d649adbaf9fec903e87d5ed3->leave($__internal_149e0ae1398204c55e1a9fd85febb785a97fa889d649adbaf9fec903e87d5ed3_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_2541ce91b5524cc36c52e71e900d1be387f12653a2492c8bd9975bbd2d89905a = $this->env->getExtension("native_profiler");
        $__internal_2541ce91b5524cc36c52e71e900d1be387f12653a2492c8bd9975bbd2d89905a->enter($__internal_2541ce91b5524cc36c52e71e900d1be387f12653a2492c8bd9975bbd2d89905a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_2541ce91b5524cc36c52e71e900d1be387f12653a2492c8bd9975bbd2d89905a->leave($__internal_2541ce91b5524cc36c52e71e900d1be387f12653a2492c8bd9975bbd2d89905a_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_598750fb2a90a9d2caaf4174e2c5253e286f8358ad60aa9e07bb52f407115e5d = $this->env->getExtension("native_profiler");
        $__internal_598750fb2a90a9d2caaf4174e2c5253e286f8358ad60aa9e07bb52f407115e5d->enter($__internal_598750fb2a90a9d2caaf4174e2c5253e286f8358ad60aa9e07bb52f407115e5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_598750fb2a90a9d2caaf4174e2c5253e286f8358ad60aa9e07bb52f407115e5d->leave($__internal_598750fb2a90a9d2caaf4174e2c5253e286f8358ad60aa9e07bb52f407115e5d_prof);

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
