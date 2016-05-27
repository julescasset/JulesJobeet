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
        $__internal_d0b1ebdafd7cdc714d116922fa4824c69e1cc473b0a9251983a322acbfb9a6cc = $this->env->getExtension("native_profiler");
        $__internal_d0b1ebdafd7cdc714d116922fa4824c69e1cc473b0a9251983a322acbfb9a6cc->enter($__internal_d0b1ebdafd7cdc714d116922fa4824c69e1cc473b0a9251983a322acbfb9a6cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_d0b1ebdafd7cdc714d116922fa4824c69e1cc473b0a9251983a322acbfb9a6cc->leave($__internal_d0b1ebdafd7cdc714d116922fa4824c69e1cc473b0a9251983a322acbfb9a6cc_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_5f3035ce42075efac5387d788626e292f3eb0e3a9b80eb90fa1b963b2120e576 = $this->env->getExtension("native_profiler");
        $__internal_5f3035ce42075efac5387d788626e292f3eb0e3a9b80eb90fa1b963b2120e576->enter($__internal_5f3035ce42075efac5387d788626e292f3eb0e3a9b80eb90fa1b963b2120e576_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_5f3035ce42075efac5387d788626e292f3eb0e3a9b80eb90fa1b963b2120e576->leave($__internal_5f3035ce42075efac5387d788626e292f3eb0e3a9b80eb90fa1b963b2120e576_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d6c35cfd8a584f727db354ed7227c860bfa0d1017e1bbc53b3a87e3d8be1406c = $this->env->getExtension("native_profiler");
        $__internal_d6c35cfd8a584f727db354ed7227c860bfa0d1017e1bbc53b3a87e3d8be1406c->enter($__internal_d6c35cfd8a584f727db354ed7227c860bfa0d1017e1bbc53b3a87e3d8be1406c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_d6c35cfd8a584f727db354ed7227c860bfa0d1017e1bbc53b3a87e3d8be1406c->leave($__internal_d6c35cfd8a584f727db354ed7227c860bfa0d1017e1bbc53b3a87e3d8be1406c_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_7c38221656c1090a524cab93c20a33b4f04f0502d635e02000fee64117f84576 = $this->env->getExtension("native_profiler");
        $__internal_7c38221656c1090a524cab93c20a33b4f04f0502d635e02000fee64117f84576->enter($__internal_7c38221656c1090a524cab93c20a33b4f04f0502d635e02000fee64117f84576_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_7c38221656c1090a524cab93c20a33b4f04f0502d635e02000fee64117f84576->leave($__internal_7c38221656c1090a524cab93c20a33b4f04f0502d635e02000fee64117f84576_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7a92bd6ca50760435fc3a8b5092b0ebaeb17a730cac7522f2272af8c8c200f1b = $this->env->getExtension("native_profiler");
        $__internal_7a92bd6ca50760435fc3a8b5092b0ebaeb17a730cac7522f2272af8c8c200f1b->enter($__internal_7a92bd6ca50760435fc3a8b5092b0ebaeb17a730cac7522f2272af8c8c200f1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_7a92bd6ca50760435fc3a8b5092b0ebaeb17a730cac7522f2272af8c8c200f1b->leave($__internal_7a92bd6ca50760435fc3a8b5092b0ebaeb17a730cac7522f2272af8c8c200f1b_prof);

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
