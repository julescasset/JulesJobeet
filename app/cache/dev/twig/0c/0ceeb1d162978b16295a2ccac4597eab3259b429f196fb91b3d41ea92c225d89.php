<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_e96e3d5f5ecf0b09f0b0be06abdfcea768616682ba2a450a167c78b2bd1324af extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bcb1bc79194f504d860295789ceb35139faeb3971baad029f56a869b7f75eae9 = $this->env->getExtension("native_profiler");
        $__internal_bcb1bc79194f504d860295789ceb35139faeb3971baad029f56a869b7f75eae9->enter($__internal_bcb1bc79194f504d860295789ceb35139faeb3971baad029f56a869b7f75eae9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bcb1bc79194f504d860295789ceb35139faeb3971baad029f56a869b7f75eae9->leave($__internal_bcb1bc79194f504d860295789ceb35139faeb3971baad029f56a869b7f75eae9_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_85a90020aaccc826b6450679f9fc197d2e81e39d95d1ffcc2e98b48b3bea0f8e = $this->env->getExtension("native_profiler");
        $__internal_85a90020aaccc826b6450679f9fc197d2e81e39d95d1ffcc2e98b48b3bea0f8e->enter($__internal_85a90020aaccc826b6450679f9fc197d2e81e39d95d1ffcc2e98b48b3bea0f8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_85a90020aaccc826b6450679f9fc197d2e81e39d95d1ffcc2e98b48b3bea0f8e->leave($__internal_85a90020aaccc826b6450679f9fc197d2e81e39d95d1ffcc2e98b48b3bea0f8e_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_409ec465799dd4dd60a4eca9700065a01225e455cbdcc4f4261a86bd73550919 = $this->env->getExtension("native_profiler");
        $__internal_409ec465799dd4dd60a4eca9700065a01225e455cbdcc4f4261a86bd73550919->enter($__internal_409ec465799dd4dd60a4eca9700065a01225e455cbdcc4f4261a86bd73550919_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_409ec465799dd4dd60a4eca9700065a01225e455cbdcc4f4261a86bd73550919->leave($__internal_409ec465799dd4dd60a4eca9700065a01225e455cbdcc4f4261a86bd73550919_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_10864fb82bcf7c8c4cfddfd797684e6f684540183214365fc6a665a985594693 = $this->env->getExtension("native_profiler");
        $__internal_10864fb82bcf7c8c4cfddfd797684e6f684540183214365fc6a665a985594693->enter($__internal_10864fb82bcf7c8c4cfddfd797684e6f684540183214365fc6a665a985594693_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_10864fb82bcf7c8c4cfddfd797684e6f684540183214365fc6a665a985594693->leave($__internal_10864fb82bcf7c8c4cfddfd797684e6f684540183214365fc6a665a985594693_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
