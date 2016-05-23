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
        $__internal_0d84ce183354d2eeddeb38f3bb4f13c86bea46e029208d0c278a671707f62fe1 = $this->env->getExtension("native_profiler");
        $__internal_0d84ce183354d2eeddeb38f3bb4f13c86bea46e029208d0c278a671707f62fe1->enter($__internal_0d84ce183354d2eeddeb38f3bb4f13c86bea46e029208d0c278a671707f62fe1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_0d84ce183354d2eeddeb38f3bb4f13c86bea46e029208d0c278a671707f62fe1->leave($__internal_0d84ce183354d2eeddeb38f3bb4f13c86bea46e029208d0c278a671707f62fe1_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_99e03b94bef37803f1e26c83fe4537cb945d572ea754d460bff1a7ea82c44aa0 = $this->env->getExtension("native_profiler");
        $__internal_99e03b94bef37803f1e26c83fe4537cb945d572ea754d460bff1a7ea82c44aa0->enter($__internal_99e03b94bef37803f1e26c83fe4537cb945d572ea754d460bff1a7ea82c44aa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_99e03b94bef37803f1e26c83fe4537cb945d572ea754d460bff1a7ea82c44aa0->leave($__internal_99e03b94bef37803f1e26c83fe4537cb945d572ea754d460bff1a7ea82c44aa0_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_678d024699e50180553e6b47ffd12cd983a71749842ff258d817e6c0e2c04982 = $this->env->getExtension("native_profiler");
        $__internal_678d024699e50180553e6b47ffd12cd983a71749842ff258d817e6c0e2c04982->enter($__internal_678d024699e50180553e6b47ffd12cd983a71749842ff258d817e6c0e2c04982_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_678d024699e50180553e6b47ffd12cd983a71749842ff258d817e6c0e2c04982->leave($__internal_678d024699e50180553e6b47ffd12cd983a71749842ff258d817e6c0e2c04982_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_3e10cd4ca72a3f7851570844721929d9f02eca5a8d39d0bd4dc0ad5d79a230f0 = $this->env->getExtension("native_profiler");
        $__internal_3e10cd4ca72a3f7851570844721929d9f02eca5a8d39d0bd4dc0ad5d79a230f0->enter($__internal_3e10cd4ca72a3f7851570844721929d9f02eca5a8d39d0bd4dc0ad5d79a230f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_3e10cd4ca72a3f7851570844721929d9f02eca5a8d39d0bd4dc0ad5d79a230f0->leave($__internal_3e10cd4ca72a3f7851570844721929d9f02eca5a8d39d0bd4dc0ad5d79a230f0_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2522ebbf1997f331595be01d51d744dbe7c6d6c1578e0a9f4cb31bd391739ce2 = $this->env->getExtension("native_profiler");
        $__internal_2522ebbf1997f331595be01d51d744dbe7c6d6c1578e0a9f4cb31bd391739ce2->enter($__internal_2522ebbf1997f331595be01d51d744dbe7c6d6c1578e0a9f4cb31bd391739ce2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_2522ebbf1997f331595be01d51d744dbe7c6d6c1578e0a9f4cb31bd391739ce2->leave($__internal_2522ebbf1997f331595be01d51d744dbe7c6d6c1578e0a9f4cb31bd391739ce2_prof);

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
