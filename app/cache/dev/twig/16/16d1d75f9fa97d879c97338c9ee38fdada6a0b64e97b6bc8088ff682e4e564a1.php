<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_75d9cab07298d22d17baebe770a6facebb0071415eb262ed6ae73183ad03c368 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ff0e671089f6e7ddbe831a9bd2b417d97d8da558545962f95c1ee00e020d1dbf = $this->env->getExtension("native_profiler");
        $__internal_ff0e671089f6e7ddbe831a9bd2b417d97d8da558545962f95c1ee00e020d1dbf->enter($__internal_ff0e671089f6e7ddbe831a9bd2b417d97d8da558545962f95c1ee00e020d1dbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ff0e671089f6e7ddbe831a9bd2b417d97d8da558545962f95c1ee00e020d1dbf->leave($__internal_ff0e671089f6e7ddbe831a9bd2b417d97d8da558545962f95c1ee00e020d1dbf_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6ce731f17d9020103040874be785f897d16e2857f92d7973384c4d91e0ca1f51 = $this->env->getExtension("native_profiler");
        $__internal_6ce731f17d9020103040874be785f897d16e2857f92d7973384c4d91e0ca1f51->enter($__internal_6ce731f17d9020103040874be785f897d16e2857f92d7973384c4d91e0ca1f51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_6ce731f17d9020103040874be785f897d16e2857f92d7973384c4d91e0ca1f51->leave($__internal_6ce731f17d9020103040874be785f897d16e2857f92d7973384c4d91e0ca1f51_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c141b89f8f24672a6bdd2e634030b6e291740138ba1cf1ba7280b26bb1f56568 = $this->env->getExtension("native_profiler");
        $__internal_c141b89f8f24672a6bdd2e634030b6e291740138ba1cf1ba7280b26bb1f56568->enter($__internal_c141b89f8f24672a6bdd2e634030b6e291740138ba1cf1ba7280b26bb1f56568_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_c141b89f8f24672a6bdd2e634030b6e291740138ba1cf1ba7280b26bb1f56568->leave($__internal_c141b89f8f24672a6bdd2e634030b6e291740138ba1cf1ba7280b26bb1f56568_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_20e9c2efe3acc79a36b596b987c51398138fa75618ab87fd04d4d417d27aa290 = $this->env->getExtension("native_profiler");
        $__internal_20e9c2efe3acc79a36b596b987c51398138fa75618ab87fd04d4d417d27aa290->enter($__internal_20e9c2efe3acc79a36b596b987c51398138fa75618ab87fd04d4d417d27aa290_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_20e9c2efe3acc79a36b596b987c51398138fa75618ab87fd04d4d417d27aa290->leave($__internal_20e9c2efe3acc79a36b596b987c51398138fa75618ab87fd04d4d417d27aa290_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
