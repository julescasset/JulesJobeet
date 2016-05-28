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
        $__internal_392f60f5201c88ee45091b7f0515f98457bc6706d108ae1fd8aa08263caa8490 = $this->env->getExtension("native_profiler");
        $__internal_392f60f5201c88ee45091b7f0515f98457bc6706d108ae1fd8aa08263caa8490->enter($__internal_392f60f5201c88ee45091b7f0515f98457bc6706d108ae1fd8aa08263caa8490_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_392f60f5201c88ee45091b7f0515f98457bc6706d108ae1fd8aa08263caa8490->leave($__internal_392f60f5201c88ee45091b7f0515f98457bc6706d108ae1fd8aa08263caa8490_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8059526da79b4ef621240cd372740819842abac92cd3ff55fb8d9885cf47589b = $this->env->getExtension("native_profiler");
        $__internal_8059526da79b4ef621240cd372740819842abac92cd3ff55fb8d9885cf47589b->enter($__internal_8059526da79b4ef621240cd372740819842abac92cd3ff55fb8d9885cf47589b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_8059526da79b4ef621240cd372740819842abac92cd3ff55fb8d9885cf47589b->leave($__internal_8059526da79b4ef621240cd372740819842abac92cd3ff55fb8d9885cf47589b_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_81b189d9f948a60af2af8dda34ebec15df63eaa426e20de39b8b3ad2076d8ccc = $this->env->getExtension("native_profiler");
        $__internal_81b189d9f948a60af2af8dda34ebec15df63eaa426e20de39b8b3ad2076d8ccc->enter($__internal_81b189d9f948a60af2af8dda34ebec15df63eaa426e20de39b8b3ad2076d8ccc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_81b189d9f948a60af2af8dda34ebec15df63eaa426e20de39b8b3ad2076d8ccc->leave($__internal_81b189d9f948a60af2af8dda34ebec15df63eaa426e20de39b8b3ad2076d8ccc_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d91658d50288cbacf08667863dcbf65abc3dbcfdaabaf914937339a103f4a1d6 = $this->env->getExtension("native_profiler");
        $__internal_d91658d50288cbacf08667863dcbf65abc3dbcfdaabaf914937339a103f4a1d6->enter($__internal_d91658d50288cbacf08667863dcbf65abc3dbcfdaabaf914937339a103f4a1d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_d91658d50288cbacf08667863dcbf65abc3dbcfdaabaf914937339a103f4a1d6->leave($__internal_d91658d50288cbacf08667863dcbf65abc3dbcfdaabaf914937339a103f4a1d6_prof);

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
