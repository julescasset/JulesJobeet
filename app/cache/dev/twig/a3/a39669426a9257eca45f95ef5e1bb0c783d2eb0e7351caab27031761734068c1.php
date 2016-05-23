<?php

/* job/index.html.twig */
class __TwigTemplate_3d66af4e05f1831da2bf90a6bc9876879483a0e1e7f9ec01f67ae525267c2e08 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EnsJulesBundle::layout.html.twig", "job/index.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EnsJulesBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0cbbe16e7c3618e874696a3f2f69098e72a40852870ffa0a14c9bcfcf2da8f3b = $this->env->getExtension("native_profiler");
        $__internal_0cbbe16e7c3618e874696a3f2f69098e72a40852870ffa0a14c9bcfcf2da8f3b->enter($__internal_0cbbe16e7c3618e874696a3f2f69098e72a40852870ffa0a14c9bcfcf2da8f3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "job/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0cbbe16e7c3618e874696a3f2f69098e72a40852870ffa0a14c9bcfcf2da8f3b->leave($__internal_0cbbe16e7c3618e874696a3f2f69098e72a40852870ffa0a14c9bcfcf2da8f3b_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_28e30db591ed7529a95bb21e548ba7a93aa0e55eaaeccf03155fcbf99d71a45c = $this->env->getExtension("native_profiler");
        $__internal_28e30db591ed7529a95bb21e548ba7a93aa0e55eaaeccf03155fcbf99d71a45c->enter($__internal_28e30db591ed7529a95bb21e548ba7a93aa0e55eaaeccf03155fcbf99d71a45c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/ensjules/css/jobs.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_28e30db591ed7529a95bb21e548ba7a93aa0e55eaaeccf03155fcbf99d71a45c->leave($__internal_28e30db591ed7529a95bb21e548ba7a93aa0e55eaaeccf03155fcbf99d71a45c_prof);

    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        $__internal_015d098d70c1f7ab7c8ab43ecece51af0aa9266c293bf7f1dd0e8069777328c2 = $this->env->getExtension("native_profiler");
        $__internal_015d098d70c1f7ab7c8ab43ecece51af0aa9266c293bf7f1dd0e8069777328c2->enter($__internal_015d098d70c1f7ab7c8ab43ecece51af0aa9266c293bf7f1dd0e8069777328c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 9
        echo "    <div id=\"jobs\">
        <table class=\"jobs\">
            ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["jobs"]) ? $context["jobs"] : $this->getContext($context, "jobs")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["job"]) {
            // line 12
            echo "                <tr class=\"";
            echo twig_escape_filter($this->env, twig_cycle(array(0 => "even", 1 => "odd"), $this->getAttribute($context["loop"], "index", array())), "html", null, true);
            echo "\">
                    <td class=\"location\">";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "location", array()), "html", null, true);
            echo "</td>
                    <td class=\"position\">
                        <a href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ens_job_show", array("id" => $this->getAttribute($context["job"], "id", array()), "company" => $this->getAttribute($context["job"], "companySlug", array()), "location" => $this->getAttribute($context["job"], "locationSlug", array()), "position" => $this->getAttribute($context["job"], "positionSlug", array()))), "html", null, true);
            echo "\">
                            ";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "position", array()), "html", null, true);
            echo "
                        </a>
                    </td>
                    <td class=\"company\">";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "company", array()), "html", null, true);
            echo "</td>
                </tr>
            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['job'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "        </table>
    </div>
";
        
        $__internal_015d098d70c1f7ab7c8ab43ecece51af0aa9266c293bf7f1dd0e8069777328c2->leave($__internal_015d098d70c1f7ab7c8ab43ecece51af0aa9266c293bf7f1dd0e8069777328c2_prof);

    }

    public function getTemplateName()
    {
        return "job/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 22,  102 => 19,  96 => 16,  92 => 15,  87 => 13,  82 => 12,  65 => 11,  61 => 9,  55 => 8,  46 => 5,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'EnsJulesBundle::layout.html.twig' %}*/
/* */
/* {% block stylesheets %}*/
/*     {{ parent() }}*/
/*     <link rel="stylesheet" href="{{ asset('bundles/ensjules/css/jobs.css') }}" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block content %}*/
/*     <div id="jobs">*/
/*         <table class="jobs">*/
/*             {% for job in jobs %}*/
/*                 <tr class="{{ cycle(['even', 'odd'], loop.index) }}">*/
/*                     <td class="location">{{ job.location }}</td>*/
/*                     <td class="position">*/
/*                         <a href="{{ path('ens_job_show', { 'id': job.id, 'company': job.companySlug, 'location': job.locationSlug, 'position': job.positionSlug}) }}">*/
/*                             {{ job.position }}*/
/*                         </a>*/
/*                     </td>*/
/*                     <td class="company">{{ job.company }}</td>*/
/*                 </tr>*/
/*             {% endfor %}*/
/*         </table>*/
/*     </div>*/
/* {% endblock %}*/
/* */
