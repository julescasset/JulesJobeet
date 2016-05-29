<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_c9a62857565f841e5b878e1ab0cb7b365dc7490233601aaa710fac5568875495 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
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
        $__internal_e41255df9c38663b8cd35920acd9139f7a49ee56267b554c3d3369db3d6b8353 = $this->env->getExtension("native_profiler");
        $__internal_e41255df9c38663b8cd35920acd9139f7a49ee56267b554c3d3369db3d6b8353->enter($__internal_e41255df9c38663b8cd35920acd9139f7a49ee56267b554c3d3369db3d6b8353_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e41255df9c38663b8cd35920acd9139f7a49ee56267b554c3d3369db3d6b8353->leave($__internal_e41255df9c38663b8cd35920acd9139f7a49ee56267b554c3d3369db3d6b8353_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_fd5d2298026cfb5f75c3fe34d78cd1de123a237ed80ec8770936bcf22bbc557d = $this->env->getExtension("native_profiler");
        $__internal_fd5d2298026cfb5f75c3fe34d78cd1de123a237ed80ec8770936bcf22bbc557d->enter($__internal_fd5d2298026cfb5f75c3fe34d78cd1de123a237ed80ec8770936bcf22bbc557d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_fd5d2298026cfb5f75c3fe34d78cd1de123a237ed80ec8770936bcf22bbc557d->leave($__internal_fd5d2298026cfb5f75c3fe34d78cd1de123a237ed80ec8770936bcf22bbc557d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ee27fe3212107da0ebaac40663080d664d9430340502224f5ae59483da608106 = $this->env->getExtension("native_profiler");
        $__internal_ee27fe3212107da0ebaac40663080d664d9430340502224f5ae59483da608106->enter($__internal_ee27fe3212107da0ebaac40663080d664d9430340502224f5ae59483da608106_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_ee27fe3212107da0ebaac40663080d664d9430340502224f5ae59483da608106->leave($__internal_ee27fe3212107da0ebaac40663080d664d9430340502224f5ae59483da608106_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_386a404614d13c4337208f30014bad75a32dee50db824b20e9ebc85ed519733e = $this->env->getExtension("native_profiler");
        $__internal_386a404614d13c4337208f30014bad75a32dee50db824b20e9ebc85ed519733e->enter($__internal_386a404614d13c4337208f30014bad75a32dee50db824b20e9ebc85ed519733e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_386a404614d13c4337208f30014bad75a32dee50db824b20e9ebc85ed519733e->leave($__internal_386a404614d13c4337208f30014bad75a32dee50db824b20e9ebc85ed519733e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
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
