<?php

/* :job:index.html.twig */
class __TwigTemplate_e68cad2d213ab0bf1d91cd21332df9fc47402cc52c153bf1a9514921dfba2d0c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EnsJulesBundle::layout.html.twig", ":job:index.html.twig", 1);
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
        $__internal_b1d231185afced1d0390a5cc67463dff7ca1fc18c3b34441ad061724dc6309e3 = $this->env->getExtension("native_profiler");
        $__internal_b1d231185afced1d0390a5cc67463dff7ca1fc18c3b34441ad061724dc6309e3->enter($__internal_b1d231185afced1d0390a5cc67463dff7ca1fc18c3b34441ad061724dc6309e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":job:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b1d231185afced1d0390a5cc67463dff7ca1fc18c3b34441ad061724dc6309e3->leave($__internal_b1d231185afced1d0390a5cc67463dff7ca1fc18c3b34441ad061724dc6309e3_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_341751f767c1d4ca5acdcdcf914ae81dbc01b347c316cba796f0f1df6234e300 = $this->env->getExtension("native_profiler");
        $__internal_341751f767c1d4ca5acdcdcf914ae81dbc01b347c316cba796f0f1df6234e300->enter($__internal_341751f767c1d4ca5acdcdcf914ae81dbc01b347c316cba796f0f1df6234e300_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/ensjules/css/jobs.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_341751f767c1d4ca5acdcdcf914ae81dbc01b347c316cba796f0f1df6234e300->leave($__internal_341751f767c1d4ca5acdcdcf914ae81dbc01b347c316cba796f0f1df6234e300_prof);

    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        $__internal_145b318ede564cf9778771974acd999f86316dc49b0a3a3956abe5fd49a80591 = $this->env->getExtension("native_profiler");
        $__internal_145b318ede564cf9778771974acd999f86316dc49b0a3a3956abe5fd49a80591->enter($__internal_145b318ede564cf9778771974acd999f86316dc49b0a3a3956abe5fd49a80591_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 9
        echo "    <div id=\"jobs\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 11
            echo "            <div>
                <div class=\"category\">
                    <div class=\"feed\">
                        <a href=\"\">Feed</a>
                    </div>
                    <h1>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
            echo "</h1>
                </div>
                <table class=\"jobs\">
                    ";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["category"], "activejobs", array()));
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
                // line 20
                echo "                        <tr class=\"";
                echo twig_escape_filter($this->env, twig_cycle(array(0 => "even", 1 => "odd"), $this->getAttribute($context["loop"], "index", array())), "html", null, true);
                echo "\">
                            <td class=\"location\">";
                // line 21
                echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "location", array()), "html", null, true);
                echo "</td>
                            <td class=\"position\">
                                <a href=\"";
                // line 23
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ens_job_show", array("id" => $this->getAttribute($context["job"], "id", array()), "company" => $this->getAttribute($context["job"], "companySlug", array()), "location" => $this->getAttribute($context["job"], "locationSlug", array()), "position" => $this->getAttribute($context["job"], "positionSlug", array()))), "html", null, true);
                echo "\">
                                    ";
                // line 24
                echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "position", array()), "html", null, true);
                echo "
                                </a>
                            </td>
                            <td class=\"company\">";
                // line 27
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
            // line 30
            echo "                </table>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "    </div>
";
        
        $__internal_145b318ede564cf9778771974acd999f86316dc49b0a3a3956abe5fd49a80591->leave($__internal_145b318ede564cf9778771974acd999f86316dc49b0a3a3956abe5fd49a80591_prof);

    }

    public function getTemplateName()
    {
        return ":job:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 33,  135 => 30,  118 => 27,  112 => 24,  108 => 23,  103 => 21,  98 => 20,  81 => 19,  75 => 16,  68 => 11,  64 => 10,  61 => 9,  55 => 8,  46 => 5,  41 => 4,  35 => 3,  11 => 1,);
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
/*         {% for category in categories %}*/
/*             <div>*/
/*                 <div class="category">*/
/*                     <div class="feed">*/
/*                         <a href="">Feed</a>*/
/*                     </div>*/
/*                     <h1>{{ category.name }}</h1>*/
/*                 </div>*/
/*                 <table class="jobs">*/
/*                     {% for job in category.activejobs %}*/
/*                         <tr class="{{ cycle(['even', 'odd'], loop.index) }}">*/
/*                             <td class="location">{{ job.location }}</td>*/
/*                             <td class="position">*/
/*                                 <a href="{{ path('ens_job_show', { 'id': job.id, 'company': job.companySlug, 'location': job.locationSlug, 'position': job.positionSlug }) }}">*/
/*                                     {{ job.position }}*/
/*                                 </a>*/
/*                             </td>*/
/*                             <td class="company">{{ job.company }}</td>*/
/*                         </tr>*/
/*                     {% endfor %}*/
/*                 </table>*/
/*             </div>*/
/*         {% endfor %}*/
/*     </div>*/
/* {% endblock %}*/
