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
        $__internal_d9326a49663d69397e37186f500af589c32529c4f2d3ee56ac2fb64db8f670aa = $this->env->getExtension("native_profiler");
        $__internal_d9326a49663d69397e37186f500af589c32529c4f2d3ee56ac2fb64db8f670aa->enter($__internal_d9326a49663d69397e37186f500af589c32529c4f2d3ee56ac2fb64db8f670aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_d9326a49663d69397e37186f500af589c32529c4f2d3ee56ac2fb64db8f670aa->leave($__internal_d9326a49663d69397e37186f500af589c32529c4f2d3ee56ac2fb64db8f670aa_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_5982736bdf6a7f7b7a2f08deded981ffecbf16d320413b94c73727b58e74b33e = $this->env->getExtension("native_profiler");
        $__internal_5982736bdf6a7f7b7a2f08deded981ffecbf16d320413b94c73727b58e74b33e->enter($__internal_5982736bdf6a7f7b7a2f08deded981ffecbf16d320413b94c73727b58e74b33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_5982736bdf6a7f7b7a2f08deded981ffecbf16d320413b94c73727b58e74b33e->leave($__internal_5982736bdf6a7f7b7a2f08deded981ffecbf16d320413b94c73727b58e74b33e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c00fd96ef6d287974ce1fba7460a6474a48ae5e744f3c20d224ddcff2e1cd296 = $this->env->getExtension("native_profiler");
        $__internal_c00fd96ef6d287974ce1fba7460a6474a48ae5e744f3c20d224ddcff2e1cd296->enter($__internal_c00fd96ef6d287974ce1fba7460a6474a48ae5e744f3c20d224ddcff2e1cd296_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_c00fd96ef6d287974ce1fba7460a6474a48ae5e744f3c20d224ddcff2e1cd296->leave($__internal_c00fd96ef6d287974ce1fba7460a6474a48ae5e744f3c20d224ddcff2e1cd296_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_07efad9acabc2d266d0aa33d6145b89f274d8a08e2cfd675d230925044968b7e = $this->env->getExtension("native_profiler");
        $__internal_07efad9acabc2d266d0aa33d6145b89f274d8a08e2cfd675d230925044968b7e->enter($__internal_07efad9acabc2d266d0aa33d6145b89f274d8a08e2cfd675d230925044968b7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_07efad9acabc2d266d0aa33d6145b89f274d8a08e2cfd675d230925044968b7e->leave($__internal_07efad9acabc2d266d0aa33d6145b89f274d8a08e2cfd675d230925044968b7e_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_705b17b35212e67fe5c2bfba20ccdda00fa1e45edc0cdcb3d90f4966a2481b6e = $this->env->getExtension("native_profiler");
        $__internal_705b17b35212e67fe5c2bfba20ccdda00fa1e45edc0cdcb3d90f4966a2481b6e->enter($__internal_705b17b35212e67fe5c2bfba20ccdda00fa1e45edc0cdcb3d90f4966a2481b6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_705b17b35212e67fe5c2bfba20ccdda00fa1e45edc0cdcb3d90f4966a2481b6e->leave($__internal_705b17b35212e67fe5c2bfba20ccdda00fa1e45edc0cdcb3d90f4966a2481b6e_prof);

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
