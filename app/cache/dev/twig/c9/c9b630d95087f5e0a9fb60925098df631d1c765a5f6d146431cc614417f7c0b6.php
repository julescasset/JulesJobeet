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
        $__internal_8cc8e74169ec8e4f1b9bc099e006de23d981d9c9e7235da3cb58fe80de9b9a30 = $this->env->getExtension("native_profiler");
        $__internal_8cc8e74169ec8e4f1b9bc099e006de23d981d9c9e7235da3cb58fe80de9b9a30->enter($__internal_8cc8e74169ec8e4f1b9bc099e006de23d981d9c9e7235da3cb58fe80de9b9a30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":job:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8cc8e74169ec8e4f1b9bc099e006de23d981d9c9e7235da3cb58fe80de9b9a30->leave($__internal_8cc8e74169ec8e4f1b9bc099e006de23d981d9c9e7235da3cb58fe80de9b9a30_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_fdfd03c430b175fb6f9cf1b82c8c2854f70790690f175b491be85407a705a9e0 = $this->env->getExtension("native_profiler");
        $__internal_fdfd03c430b175fb6f9cf1b82c8c2854f70790690f175b491be85407a705a9e0->enter($__internal_fdfd03c430b175fb6f9cf1b82c8c2854f70790690f175b491be85407a705a9e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/ensjules/css/jobs.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_fdfd03c430b175fb6f9cf1b82c8c2854f70790690f175b491be85407a705a9e0->leave($__internal_fdfd03c430b175fb6f9cf1b82c8c2854f70790690f175b491be85407a705a9e0_prof);

    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        $__internal_ed63a2bff61d69064606738490238ee94a99605e8355fac4247850efc37456a4 = $this->env->getExtension("native_profiler");
        $__internal_ed63a2bff61d69064606738490238ee94a99605e8355fac4247850efc37456a4->enter($__internal_ed63a2bff61d69064606738490238ee94a99605e8355fac4247850efc37456a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 9
        echo "    <div id=\"jobs\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 11
            echo "            <div>
                <div class=\"category\">
                    <div class=\"feed\">
                        <a href=\"\">Feed</a>
                    </div>
                    <h1>
                        <a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("EnsJulesBundle_category", array("slug" => $this->getAttribute($context["category"], "slug", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
            echo "
                        </a>
                    </h1>
                </div>
                <table class=\"jobs\">
                    ";
            // line 22
            $this->loadTemplate("job/list.html.twig", ":job:index.html.twig", 22)->display(array_merge($context, array("jobs" => $this->getAttribute($context["category"], "activejobs", array()))));
            // line 23
            echo "                </table>
                ";
            // line 24
            if ($this->getAttribute($context["category"], "morejobs", array())) {
                // line 25
                echo "                    <div class=\"more_jobs\">
                        and <a href=\"";
                // line 26
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("EnsJulesBundle_category", array("slug" => $this->getAttribute($context["category"], "slug", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "morejobs", array()), "html", null, true);
                echo "</a>
                        more...
                    </div>
                ";
            }
            // line 30
            echo "            </div>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "    </div>
";
        
        $__internal_ed63a2bff61d69064606738490238ee94a99605e8355fac4247850efc37456a4->leave($__internal_ed63a2bff61d69064606738490238ee94a99605e8355fac4247850efc37456a4_prof);

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
        return array (  133 => 32,  118 => 30,  109 => 26,  106 => 25,  104 => 24,  101 => 23,  99 => 22,  89 => 17,  81 => 11,  64 => 10,  61 => 9,  55 => 8,  46 => 5,  41 => 4,  35 => 3,  11 => 1,);
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
/*                     <h1>*/
/*                         <a href="{{ path('EnsJulesBundle_category', { 'slug': category.slug }) }}">{{ category.name }}*/
/*                         </a>*/
/*                     </h1>*/
/*                 </div>*/
/*                 <table class="jobs">*/
/*                     {% include 'job/list.html.twig' with {'jobs': category.activejobs} %}*/
/*                 </table>*/
/*                 {% if category.morejobs %}*/
/*                     <div class="more_jobs">*/
/*                         and <a href="{{ path('EnsJulesBundle_category', { 'slug': category.slug }) }}">{{ category.morejobs }}</a>*/
/*                         more...*/
/*                     </div>*/
/*                 {% endif %}*/
/*             </div>*/
/*         {% endfor %}*/
/*     </div>*/
/* {% endblock %}*/
