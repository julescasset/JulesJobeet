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
        $__internal_1ccb4fd01e91948c359713bb2fdd5fc05f951f4de1ea965e0c46ac7896aa210f = $this->env->getExtension("native_profiler");
        $__internal_1ccb4fd01e91948c359713bb2fdd5fc05f951f4de1ea965e0c46ac7896aa210f->enter($__internal_1ccb4fd01e91948c359713bb2fdd5fc05f951f4de1ea965e0c46ac7896aa210f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1ccb4fd01e91948c359713bb2fdd5fc05f951f4de1ea965e0c46ac7896aa210f->leave($__internal_1ccb4fd01e91948c359713bb2fdd5fc05f951f4de1ea965e0c46ac7896aa210f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e505f6c2ca4b550c64dfa47faf85c07dd7dbd69d35811c49f4bba263753d8394 = $this->env->getExtension("native_profiler");
        $__internal_e505f6c2ca4b550c64dfa47faf85c07dd7dbd69d35811c49f4bba263753d8394->enter($__internal_e505f6c2ca4b550c64dfa47faf85c07dd7dbd69d35811c49f4bba263753d8394_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_e505f6c2ca4b550c64dfa47faf85c07dd7dbd69d35811c49f4bba263753d8394->leave($__internal_e505f6c2ca4b550c64dfa47faf85c07dd7dbd69d35811c49f4bba263753d8394_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c3ac1303ee3abd87646d193d5206e42d56e37f1fd8077a848e053f8b95d04dec = $this->env->getExtension("native_profiler");
        $__internal_c3ac1303ee3abd87646d193d5206e42d56e37f1fd8077a848e053f8b95d04dec->enter($__internal_c3ac1303ee3abd87646d193d5206e42d56e37f1fd8077a848e053f8b95d04dec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_c3ac1303ee3abd87646d193d5206e42d56e37f1fd8077a848e053f8b95d04dec->leave($__internal_c3ac1303ee3abd87646d193d5206e42d56e37f1fd8077a848e053f8b95d04dec_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_69c279dd18f38f87247aa23d11dfe3289ab92633f058358964a6151d4d25ea9f = $this->env->getExtension("native_profiler");
        $__internal_69c279dd18f38f87247aa23d11dfe3289ab92633f058358964a6151d4d25ea9f->enter($__internal_69c279dd18f38f87247aa23d11dfe3289ab92633f058358964a6151d4d25ea9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_69c279dd18f38f87247aa23d11dfe3289ab92633f058358964a6151d4d25ea9f->leave($__internal_69c279dd18f38f87247aa23d11dfe3289ab92633f058358964a6151d4d25ea9f_prof);

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
