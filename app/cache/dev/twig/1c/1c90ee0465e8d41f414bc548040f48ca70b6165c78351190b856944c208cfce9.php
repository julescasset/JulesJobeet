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
        $__internal_435bdf4aba17a19df90ed41db055693573d36ec93907ed6651318ba46787c057 = $this->env->getExtension("native_profiler");
        $__internal_435bdf4aba17a19df90ed41db055693573d36ec93907ed6651318ba46787c057->enter($__internal_435bdf4aba17a19df90ed41db055693573d36ec93907ed6651318ba46787c057_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_435bdf4aba17a19df90ed41db055693573d36ec93907ed6651318ba46787c057->leave($__internal_435bdf4aba17a19df90ed41db055693573d36ec93907ed6651318ba46787c057_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_6b09b450c854319bea196cdca1ff28e1a4e4b9dfc34cdad677ac2db56f5fefc4 = $this->env->getExtension("native_profiler");
        $__internal_6b09b450c854319bea196cdca1ff28e1a4e4b9dfc34cdad677ac2db56f5fefc4->enter($__internal_6b09b450c854319bea196cdca1ff28e1a4e4b9dfc34cdad677ac2db56f5fefc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_6b09b450c854319bea196cdca1ff28e1a4e4b9dfc34cdad677ac2db56f5fefc4->leave($__internal_6b09b450c854319bea196cdca1ff28e1a4e4b9dfc34cdad677ac2db56f5fefc4_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_70ae621c098874a55976c3c0a782121cef27c0a2035f8f1a3d9ebda6e0d98098 = $this->env->getExtension("native_profiler");
        $__internal_70ae621c098874a55976c3c0a782121cef27c0a2035f8f1a3d9ebda6e0d98098->enter($__internal_70ae621c098874a55976c3c0a782121cef27c0a2035f8f1a3d9ebda6e0d98098_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_70ae621c098874a55976c3c0a782121cef27c0a2035f8f1a3d9ebda6e0d98098->leave($__internal_70ae621c098874a55976c3c0a782121cef27c0a2035f8f1a3d9ebda6e0d98098_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_f7c98cca0a601101db05b589a1a308fd00dc098e29f5cf5a380932febcf3fc06 = $this->env->getExtension("native_profiler");
        $__internal_f7c98cca0a601101db05b589a1a308fd00dc098e29f5cf5a380932febcf3fc06->enter($__internal_f7c98cca0a601101db05b589a1a308fd00dc098e29f5cf5a380932febcf3fc06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f7c98cca0a601101db05b589a1a308fd00dc098e29f5cf5a380932febcf3fc06->leave($__internal_f7c98cca0a601101db05b589a1a308fd00dc098e29f5cf5a380932febcf3fc06_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6854f3fc5d5da4ffde7a12f32ddf6720c272a624e648e0c650a2ea1c96321e41 = $this->env->getExtension("native_profiler");
        $__internal_6854f3fc5d5da4ffde7a12f32ddf6720c272a624e648e0c650a2ea1c96321e41->enter($__internal_6854f3fc5d5da4ffde7a12f32ddf6720c272a624e648e0c650a2ea1c96321e41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6854f3fc5d5da4ffde7a12f32ddf6720c272a624e648e0c650a2ea1c96321e41->leave($__internal_6854f3fc5d5da4ffde7a12f32ddf6720c272a624e648e0c650a2ea1c96321e41_prof);

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
