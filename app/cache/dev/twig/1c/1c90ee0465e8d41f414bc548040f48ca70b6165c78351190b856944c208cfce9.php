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
        $__internal_8ecf7b1454c1ef0c08778acbf933f5b67147ec2edd8a531716b50aed88a36a64 = $this->env->getExtension("native_profiler");
        $__internal_8ecf7b1454c1ef0c08778acbf933f5b67147ec2edd8a531716b50aed88a36a64->enter($__internal_8ecf7b1454c1ef0c08778acbf933f5b67147ec2edd8a531716b50aed88a36a64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_8ecf7b1454c1ef0c08778acbf933f5b67147ec2edd8a531716b50aed88a36a64->leave($__internal_8ecf7b1454c1ef0c08778acbf933f5b67147ec2edd8a531716b50aed88a36a64_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_bd76ad1c3daffad35e3aa4ca4bf9db16177f76680dd01ed3273ec2d461fb7697 = $this->env->getExtension("native_profiler");
        $__internal_bd76ad1c3daffad35e3aa4ca4bf9db16177f76680dd01ed3273ec2d461fb7697->enter($__internal_bd76ad1c3daffad35e3aa4ca4bf9db16177f76680dd01ed3273ec2d461fb7697_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_bd76ad1c3daffad35e3aa4ca4bf9db16177f76680dd01ed3273ec2d461fb7697->leave($__internal_bd76ad1c3daffad35e3aa4ca4bf9db16177f76680dd01ed3273ec2d461fb7697_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c72c1c3eb9219b868d27fa2e4c2cbb3f3086074997175debd78e8a5c77e98684 = $this->env->getExtension("native_profiler");
        $__internal_c72c1c3eb9219b868d27fa2e4c2cbb3f3086074997175debd78e8a5c77e98684->enter($__internal_c72c1c3eb9219b868d27fa2e4c2cbb3f3086074997175debd78e8a5c77e98684_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_c72c1c3eb9219b868d27fa2e4c2cbb3f3086074997175debd78e8a5c77e98684->leave($__internal_c72c1c3eb9219b868d27fa2e4c2cbb3f3086074997175debd78e8a5c77e98684_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_4dac70fcd69e587e34e21ff4968a0aebbca4aa59d1fff77a36ee93fda37324eb = $this->env->getExtension("native_profiler");
        $__internal_4dac70fcd69e587e34e21ff4968a0aebbca4aa59d1fff77a36ee93fda37324eb->enter($__internal_4dac70fcd69e587e34e21ff4968a0aebbca4aa59d1fff77a36ee93fda37324eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_4dac70fcd69e587e34e21ff4968a0aebbca4aa59d1fff77a36ee93fda37324eb->leave($__internal_4dac70fcd69e587e34e21ff4968a0aebbca4aa59d1fff77a36ee93fda37324eb_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0833d8a38bf92f301b455c024946f02a1ee6468445a54915b615e49e962bd6b8 = $this->env->getExtension("native_profiler");
        $__internal_0833d8a38bf92f301b455c024946f02a1ee6468445a54915b615e49e962bd6b8->enter($__internal_0833d8a38bf92f301b455c024946f02a1ee6468445a54915b615e49e962bd6b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_0833d8a38bf92f301b455c024946f02a1ee6468445a54915b615e49e962bd6b8->leave($__internal_0833d8a38bf92f301b455c024946f02a1ee6468445a54915b615e49e962bd6b8_prof);

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
