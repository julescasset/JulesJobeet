<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_bf07d8b200835694c6a956854743ece466d2784b5b95c42c3dfc36ba2ad2265f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a6a384ae1df4fcc354510a9284dfefa0dff3fa798d1b9ae384d3b7a3762da97e = $this->env->getExtension("native_profiler");
        $__internal_a6a384ae1df4fcc354510a9284dfefa0dff3fa798d1b9ae384d3b7a3762da97e->enter($__internal_a6a384ae1df4fcc354510a9284dfefa0dff3fa798d1b9ae384d3b7a3762da97e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_a6a384ae1df4fcc354510a9284dfefa0dff3fa798d1b9ae384d3b7a3762da97e->leave($__internal_a6a384ae1df4fcc354510a9284dfefa0dff3fa798d1b9ae384d3b7a3762da97e_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 1,);
    }
}
/* <div id="header">*/
/*     <div class="container">*/
/*         <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>*/
/* */
/*         <div class="search">*/
/*             <form method="get" action="https://symfony.com/search" target="_blank">*/
/*                 <div class="form-row">*/
/*                     <input name="q" id="search-id" type="search" placeholder="search on symfony.com">*/
/*                     <button type="submit" class="btn">Search</button>*/
/*                 </div>*/
/*            </form>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
