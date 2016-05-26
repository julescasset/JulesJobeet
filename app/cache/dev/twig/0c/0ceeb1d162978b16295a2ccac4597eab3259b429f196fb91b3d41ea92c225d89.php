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
        $__internal_fd89e704d81fd52c821da1a8b193f6444f1b2b28d1f0695c8ed72888dd6a55c0 = $this->env->getExtension("native_profiler");
        $__internal_fd89e704d81fd52c821da1a8b193f6444f1b2b28d1f0695c8ed72888dd6a55c0->enter($__internal_fd89e704d81fd52c821da1a8b193f6444f1b2b28d1f0695c8ed72888dd6a55c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fd89e704d81fd52c821da1a8b193f6444f1b2b28d1f0695c8ed72888dd6a55c0->leave($__internal_fd89e704d81fd52c821da1a8b193f6444f1b2b28d1f0695c8ed72888dd6a55c0_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f6458eb229dae1268db59e0873c5cbf31e7e6e29ea3899e95442bf06b1c28cca = $this->env->getExtension("native_profiler");
        $__internal_f6458eb229dae1268db59e0873c5cbf31e7e6e29ea3899e95442bf06b1c28cca->enter($__internal_f6458eb229dae1268db59e0873c5cbf31e7e6e29ea3899e95442bf06b1c28cca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_f6458eb229dae1268db59e0873c5cbf31e7e6e29ea3899e95442bf06b1c28cca->leave($__internal_f6458eb229dae1268db59e0873c5cbf31e7e6e29ea3899e95442bf06b1c28cca_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ec68459e82d7b1d8c0867d0277fe8de3733fb48eafd325e16af2e5b87a51a1ac = $this->env->getExtension("native_profiler");
        $__internal_ec68459e82d7b1d8c0867d0277fe8de3733fb48eafd325e16af2e5b87a51a1ac->enter($__internal_ec68459e82d7b1d8c0867d0277fe8de3733fb48eafd325e16af2e5b87a51a1ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_ec68459e82d7b1d8c0867d0277fe8de3733fb48eafd325e16af2e5b87a51a1ac->leave($__internal_ec68459e82d7b1d8c0867d0277fe8de3733fb48eafd325e16af2e5b87a51a1ac_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_83c8e4c72c205bed7fff161ec6f705619f3f7cefe7e1dc0a13d7fea1f15dbf77 = $this->env->getExtension("native_profiler");
        $__internal_83c8e4c72c205bed7fff161ec6f705619f3f7cefe7e1dc0a13d7fea1f15dbf77->enter($__internal_83c8e4c72c205bed7fff161ec6f705619f3f7cefe7e1dc0a13d7fea1f15dbf77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_83c8e4c72c205bed7fff161ec6f705619f3f7cefe7e1dc0a13d7fea1f15dbf77->leave($__internal_83c8e4c72c205bed7fff161ec6f705619f3f7cefe7e1dc0a13d7fea1f15dbf77_prof);

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
