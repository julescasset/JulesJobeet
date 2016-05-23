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
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EnsJulesBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c4da0b26435cf0fcb2fcfbde48c0c825d08d1fb69a7b6c6f4898fcc6bd6d29e4 = $this->env->getExtension("native_profiler");
        $__internal_c4da0b26435cf0fcb2fcfbde48c0c825d08d1fb69a7b6c6f4898fcc6bd6d29e4->enter($__internal_c4da0b26435cf0fcb2fcfbde48c0c825d08d1fb69a7b6c6f4898fcc6bd6d29e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "job/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c4da0b26435cf0fcb2fcfbde48c0c825d08d1fb69a7b6c6f4898fcc6bd6d29e4->leave($__internal_c4da0b26435cf0fcb2fcfbde48c0c825d08d1fb69a7b6c6f4898fcc6bd6d29e4_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_43be4cb5abee0df7297937c39a862a961fbf41cf2f285f41c94a45d03b5cc273 = $this->env->getExtension("native_profiler");
        $__internal_43be4cb5abee0df7297937c39a862a961fbf41cf2f285f41c94a45d03b5cc273->enter($__internal_43be4cb5abee0df7297937c39a862a961fbf41cf2f285f41c94a45d03b5cc273_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <!-- original template code goes here -->
    <h1>Job list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Type</th>
                <th>Company</th>
                <th>Logo</th>
                <th>Url</th>
                <th>Position</th>
                <th>Location</th>
                <th>Description</th>
                <th>How_to_apply</th>
                <th>Token</th>
                <th>Is_public</th>
                <th>Is_activated</th>
                <th>Email</th>
                <th>Expires_at</th>
                <th>Created_at</th>
                <th>Updated_at</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["jobs"]) ? $context["jobs"] : $this->getContext($context, "jobs")));
        foreach ($context['_seq'] as $context["_key"] => $context["job"]) {
            // line 31
            echo "            <tr>
                <td><a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ens_job_show", array("id" => $this->getAttribute($context["job"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "type", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "company", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "logo", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "url", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "position", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "location", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "description", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "howtoapply", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "token", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 42
            if ($this->getAttribute($context["job"], "ispublic", array())) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "</td>
                <td>";
            // line 43
            if ($this->getAttribute($context["job"], "isactivated", array())) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "</td>
                <td>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "email", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 45
            if ($this->getAttribute($context["job"], "expiresat", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["job"], "expiresat", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 46
            if ($this->getAttribute($context["job"], "createdat", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["job"], "createdat", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 47
            if ($this->getAttribute($context["job"], "updatedat", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["job"], "updatedat", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ens_job_show", array("id" => $this->getAttribute($context["job"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ens_job_edit", array("id" => $this->getAttribute($context["job"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['job'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 65
        echo $this->env->getExtension('routing')->getPath("ens_job_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_43be4cb5abee0df7297937c39a862a961fbf41cf2f285f41c94a45d03b5cc273->leave($__internal_43be4cb5abee0df7297937c39a862a961fbf41cf2f285f41c94a45d03b5cc273_prof);

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
        return array (  183 => 65,  176 => 60,  164 => 54,  158 => 51,  149 => 47,  143 => 46,  137 => 45,  133 => 44,  125 => 43,  117 => 42,  113 => 41,  109 => 40,  105 => 39,  101 => 38,  97 => 37,  93 => 36,  89 => 35,  85 => 34,  81 => 33,  75 => 32,  72 => 31,  68 => 30,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'EnsJulesBundle::layout.html.twig' %}*/
/* */
/* {% block content %}*/
/*     <!-- original template code goes here -->*/
/*     <h1>Job list</h1>*/
/* */
/*     <table>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Type</th>*/
/*                 <th>Company</th>*/
/*                 <th>Logo</th>*/
/*                 <th>Url</th>*/
/*                 <th>Position</th>*/
/*                 <th>Location</th>*/
/*                 <th>Description</th>*/
/*                 <th>How_to_apply</th>*/
/*                 <th>Token</th>*/
/*                 <th>Is_public</th>*/
/*                 <th>Is_activated</th>*/
/*                 <th>Email</th>*/
/*                 <th>Expires_at</th>*/
/*                 <th>Created_at</th>*/
/*                 <th>Updated_at</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for job in jobs %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('ens_job_show', { 'id': job.id }) }}">{{ job.id }}</a></td>*/
/*                 <td>{{ job.type }}</td>*/
/*                 <td>{{ job.company }}</td>*/
/*                 <td>{{ job.logo }}</td>*/
/*                 <td>{{ job.url }}</td>*/
/*                 <td>{{ job.position }}</td>*/
/*                 <td>{{ job.location }}</td>*/
/*                 <td>{{ job.description }}</td>*/
/*                 <td>{{ job.howtoapply }}</td>*/
/*                 <td>{{ job.token }}</td>*/
/*                 <td>{% if job.ispublic %}Yes{% else %}No{% endif %}</td>*/
/*                 <td>{% if job.isactivated %}Yes{% else %}No{% endif %}</td>*/
/*                 <td>{{ job.email }}</td>*/
/*                 <td>{% if job.expiresat %}{{ job.expiresat|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                 <td>{% if job.createdat %}{{ job.createdat|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                 <td>{% if job.updatedat %}{{ job.updatedat|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('ens_job_show', { 'id': job.id }) }}">show</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('ens_job_edit', { 'id': job.id }) }}">edit</a>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('ens_job_new') }}">Create a new entry</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
