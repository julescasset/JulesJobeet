<?php

/* :category:show.html.twig */
class __TwigTemplate_4c1cd30e5329550533c1ffc3ae221077b04f8b9fa7ded6f46c96622742a1905f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EnsJulesBundle::layout.html.twig", ":category:show.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "    Jobs in the ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "name", array()), "html", null, true);
        echo " category
";
    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/ensjules/css/jobs.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
";
    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        // line 13
        echo "    <div class=\"category\">
        <div class=\"feed\">
            <a href=\"\">Feed</a>
        </div>
        <h1>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "name", array()), "html", null, true);
        echo "</h1>
    </div>

    ";
        // line 20
        $this->loadTemplate("job/list.html.twig", ":category:show.html.twig", 20)->display(array_merge($context, array("jobs" => $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "activejobs", array()))));
        // line 21
        echo "
    ";
        // line 22
        if (((isset($context["last_page"]) ? $context["last_page"] : null) > 1)) {
            // line 23
            echo "        <div class=\"pagination\">
            <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("category_show", array("slug" => $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "slug", array()), "page" => 1)), "html", null, true);
            echo "\">
                <img src=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/ensjules/images/first.png"), "html", null, true);
            echo "\" alt=\"First page\" title=\"First page\" />
            </a>

            <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("category_show", array("slug" => $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "slug", array()), "page" => (isset($context["previous_page"]) ? $context["previous_page"] : null))), "html", null, true);
            echo "\">
                <img src=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/ensjules/images/previous.png"), "html", null, true);
            echo "\" alt=\"Previous page\" title=\"Previous page\" />
            </a>

            ";
            // line 32
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["last_page"]) ? $context["last_page"] : null)));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 33
                echo "                ";
                if (($context["page"] == (isset($context["current_page"]) ? $context["current_page"] : null))) {
                    // line 34
                    echo "                    ";
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "
                ";
                } else {
                    // line 36
                    echo "                    <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("category_show", array("slug" => $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "slug", array()), "page" => $context["page"])), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "</a>
                ";
                }
                // line 38
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "
            <a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("category_show", array("slug" => $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "slug", array()), "page" => (isset($context["next_page"]) ? $context["next_page"] : null))), "html", null, true);
            echo "\">
                <img src=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/ensjules/images/next.png"), "html", null, true);
            echo "\" alt=\"Next page\" title=\"Next page\" />
            </a>

            <a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("category_show", array("slug" => $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "slug", array()), "page" => (isset($context["last_page"]) ? $context["last_page"] : null))), "html", null, true);
            echo "\">
                <img src=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/ensjules/images/last.png"), "html", null, true);
            echo "\" alt=\"Last page\" title=\"Last page\" />
            </a>
        </div>
    ";
        }
        // line 49
        echo "
    <div class=\"pagination_desc\">
        <strong>";
        // line 51
        echo twig_escape_filter($this->env, (isset($context["total_jobs"]) ? $context["total_jobs"] : null), "html", null, true);
        echo "</strong> jobs in this category

        ";
        // line 53
        if (((isset($context["last_page"]) ? $context["last_page"] : null) > 1)) {
            // line 54
            echo "            - page <strong>";
            echo twig_escape_filter($this->env, (isset($context["current_page"]) ? $context["current_page"] : null), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, (isset($context["last_page"]) ? $context["last_page"] : null), "html", null, true);
            echo "</strong>
        ";
        }
        // line 56
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return ":category:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 56,  161 => 54,  159 => 53,  154 => 51,  150 => 49,  143 => 45,  139 => 44,  133 => 41,  129 => 40,  126 => 39,  120 => 38,  112 => 36,  106 => 34,  103 => 33,  99 => 32,  93 => 29,  89 => 28,  83 => 25,  79 => 24,  76 => 23,  74 => 22,  71 => 21,  69 => 20,  63 => 17,  57 => 13,  54 => 12,  48 => 9,  43 => 8,  40 => 7,  33 => 4,  30 => 3,  11 => 1,);
    }
}
/* {% extends 'EnsJulesBundle::layout.html.twig' %}*/
/* */
/* {% block title %}*/
/*     Jobs in the {{ category.name }} category*/
/* {% endblock %}*/
/* */
/* {% block stylesheets %}*/
/*     {{ parent() }}*/
/*     <link rel="stylesheet" href="{{ asset('bundles/ensjules/css/jobs.css') }}" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block content %}*/
/*     <div class="category">*/
/*         <div class="feed">*/
/*             <a href="">Feed</a>*/
/*         </div>*/
/*         <h1>{{ category.name }}</h1>*/
/*     </div>*/
/* */
/*     {% include 'job/list.html.twig' with {'jobs': category.activejobs} %}*/
/* */
/*     {% if last_page > 1 %}*/
/*         <div class="pagination">*/
/*             <a href="{{ path('category_show', { 'slug': category.slug, 'page': 1 }) }}">*/
/*                 <img src="{{ asset('bundles/ensjules/images/first.png') }}" alt="First page" title="First page" />*/
/*             </a>*/
/* */
/*             <a href="{{ path('category_show', { 'slug': category.slug, 'page': previous_page }) }}">*/
/*                 <img src="{{ asset('bundles/ensjules/images/previous.png') }}" alt="Previous page" title="Previous page" />*/
/*             </a>*/
/* */
/*             {% for page in 1..last_page %}*/
/*                 {% if page == current_page %}*/
/*                     {{ page }}*/
/*                 {% else %}*/
/*                     <a href="{{ path('category_show', { 'slug': category.slug, 'page': page }) }}">{{ page }}</a>*/
/*                 {% endif %}*/
/*             {% endfor %}*/
/* */
/*             <a href="{{ path('category_show', { 'slug': category.slug, 'page': next_page }) }}">*/
/*                 <img src="{{ asset('bundles/ensjules/images/next.png') }}" alt="Next page" title="Next page" />*/
/*             </a>*/
/* */
/*             <a href="{{ path('category_show', { 'slug': category.slug, 'page': last_page }) }}">*/
/*                 <img src="{{ asset('bundles/ensjules/images/last.png') }}" alt="Last page" title="Last page" />*/
/*             </a>*/
/*         </div>*/
/*     {% endif %}*/
/* */
/*     <div class="pagination_desc">*/
/*         <strong>{{ total_jobs }}</strong> jobs in this category*/
/* */
/*         {% if last_page > 1 %}*/
/*             - page <strong>{{ current_page }}/{{ last_page }}</strong>*/
/*         {% endif %}*/
/*     </div>*/
/* {% endblock %}*/
