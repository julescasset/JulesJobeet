<?php

/* job/show.html.twig */
class __TwigTemplate_60692556503aba7e7c56a2e017ee12b81e6ec97f4586df541561aaaee97f5ead extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EnsJulesBundle::layout.html.twig", "job/show.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <!-- original template code goes here -->
    <h1>Job</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : null), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Type</th>
                <td>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : null), "type", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Company</th>
                <td>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : null), "company", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Logo</th>
                <td>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : null), "logo", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Url</th>
                <td>";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : null), "url", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Position</th>
                <td>";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : null), "position", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Location</th>
                <td>";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : null), "location", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : null), "description", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>How_to_apply</th>
                <td>";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : null), "howtoapply", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Token</th>
                <td>";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : null), "token", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Is_public</th>
                <td>";
        // line 51
        if ($this->getAttribute((isset($context["job"]) ? $context["job"] : null), "ispublic", array())) {
            echo "Yes";
        } else {
            echo "No";
        }
        echo "</td>
            </tr>
            <tr>
                <th>Is_activated</th>
                <td>";
        // line 55
        if ($this->getAttribute((isset($context["job"]) ? $context["job"] : null), "isactivated", array())) {
            echo "Yes";
        } else {
            echo "No";
        }
        echo "</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : null), "email", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Expires_at</th>
                <td>";
        // line 63
        if ($this->getAttribute((isset($context["job"]) ? $context["job"] : null), "expiresat", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : null), "expiresat", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Created_at</th>
                <td>";
        // line 67
        if ($this->getAttribute((isset($context["job"]) ? $context["job"] : null), "createdat", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : null), "createdat", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Updated_at</th>
                <td>";
        // line 71
        if ($this->getAttribute((isset($context["job"]) ? $context["job"] : null), "updatedat", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : null), "updatedat", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 78
        echo $this->env->getExtension('routing')->getPath("ens_job_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ens_job_edit", array("id" => $this->getAttribute((isset($context["job"]) ? $context["job"] : null), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 84
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : null), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 86
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : null), 'form_end');
        echo "
        </li>
    </ul>
";
    }

    public function getTemplateName()
    {
        return "job/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 86,  181 => 84,  175 => 81,  169 => 78,  157 => 71,  148 => 67,  139 => 63,  132 => 59,  121 => 55,  110 => 51,  103 => 47,  96 => 43,  89 => 39,  82 => 35,  75 => 31,  68 => 27,  61 => 23,  54 => 19,  47 => 15,  40 => 11,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'EnsJulesBundle::layout.html.twig' %}*/
/* */
/* {% block content %}*/
/*     <!-- original template code goes here -->*/
/*     <h1>Job</h1>*/
/* */
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ job.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Type</th>*/
/*                 <td>{{ job.type }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Company</th>*/
/*                 <td>{{ job.company }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Logo</th>*/
/*                 <td>{{ job.logo }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Url</th>*/
/*                 <td>{{ job.url }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Position</th>*/
/*                 <td>{{ job.position }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Location</th>*/
/*                 <td>{{ job.location }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Description</th>*/
/*                 <td>{{ job.description }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>How_to_apply</th>*/
/*                 <td>{{ job.howtoapply }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Token</th>*/
/*                 <td>{{ job.token }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Is_public</th>*/
/*                 <td>{% if job.ispublic %}Yes{% else %}No{% endif %}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Is_activated</th>*/
/*                 <td>{% if job.isactivated %}Yes{% else %}No{% endif %}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Email</th>*/
/*                 <td>{{ job.email }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Expires_at</th>*/
/*                 <td>{% if job.expiresat %}{{ job.expiresat|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Created_at</th>*/
/*                 <td>{% if job.createdat %}{{ job.createdat|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Updated_at</th>*/
/*                 <td>{% if job.updatedat %}{{ job.updatedat|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('ens_job_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('ens_job_edit', { 'id': job.id }) }}">Edit</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
