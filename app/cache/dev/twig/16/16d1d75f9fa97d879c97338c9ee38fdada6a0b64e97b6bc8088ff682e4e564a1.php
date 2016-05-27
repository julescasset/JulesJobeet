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
        $__internal_016e19b7d993bbea06d898ee22a6aeb07c0f8e156cb5530700a5ec770c0d828d = $this->env->getExtension("native_profiler");
        $__internal_016e19b7d993bbea06d898ee22a6aeb07c0f8e156cb5530700a5ec770c0d828d->enter($__internal_016e19b7d993bbea06d898ee22a6aeb07c0f8e156cb5530700a5ec770c0d828d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_016e19b7d993bbea06d898ee22a6aeb07c0f8e156cb5530700a5ec770c0d828d->leave($__internal_016e19b7d993bbea06d898ee22a6aeb07c0f8e156cb5530700a5ec770c0d828d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f16a635f3db52a62692ecffa8545d42d93178a3a00c5c0a0cd34146894ed509c = $this->env->getExtension("native_profiler");
        $__internal_f16a635f3db52a62692ecffa8545d42d93178a3a00c5c0a0cd34146894ed509c->enter($__internal_f16a635f3db52a62692ecffa8545d42d93178a3a00c5c0a0cd34146894ed509c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_f16a635f3db52a62692ecffa8545d42d93178a3a00c5c0a0cd34146894ed509c->leave($__internal_f16a635f3db52a62692ecffa8545d42d93178a3a00c5c0a0cd34146894ed509c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_5518ee32f810d9deb1ab73256fbc78701a1f8f14a25fc6cc4e2b5449843a520a = $this->env->getExtension("native_profiler");
        $__internal_5518ee32f810d9deb1ab73256fbc78701a1f8f14a25fc6cc4e2b5449843a520a->enter($__internal_5518ee32f810d9deb1ab73256fbc78701a1f8f14a25fc6cc4e2b5449843a520a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_5518ee32f810d9deb1ab73256fbc78701a1f8f14a25fc6cc4e2b5449843a520a->leave($__internal_5518ee32f810d9deb1ab73256fbc78701a1f8f14a25fc6cc4e2b5449843a520a_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_8dcdd9fc07bdcbc83c40016c7c46bcd6f127fb2c8fd4efbf39b58ebeaabf9580 = $this->env->getExtension("native_profiler");
        $__internal_8dcdd9fc07bdcbc83c40016c7c46bcd6f127fb2c8fd4efbf39b58ebeaabf9580->enter($__internal_8dcdd9fc07bdcbc83c40016c7c46bcd6f127fb2c8fd4efbf39b58ebeaabf9580_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_8dcdd9fc07bdcbc83c40016c7c46bcd6f127fb2c8fd4efbf39b58ebeaabf9580->leave($__internal_8dcdd9fc07bdcbc83c40016c7c46bcd6f127fb2c8fd4efbf39b58ebeaabf9580_prof);

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
