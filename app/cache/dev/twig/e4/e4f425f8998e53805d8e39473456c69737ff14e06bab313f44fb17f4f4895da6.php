<?php

/* job/show.html.twig */
class __TwigTemplate_90ac372d381b9358d93388abb997a139d3018eaaa6a63018f5ffb1c77c1f51bb extends Twig_Template
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
        $__internal_2041002cca9fdfb382c495cc49736b28cd0be974f8ab51905f062a34a79b2a0d = $this->env->getExtension("native_profiler");
        $__internal_2041002cca9fdfb382c495cc49736b28cd0be974f8ab51905f062a34a79b2a0d->enter($__internal_2041002cca9fdfb382c495cc49736b28cd0be974f8ab51905f062a34a79b2a0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "job/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2041002cca9fdfb382c495cc49736b28cd0be974f8ab51905f062a34a79b2a0d->leave($__internal_2041002cca9fdfb382c495cc49736b28cd0be974f8ab51905f062a34a79b2a0d_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_2de6e7271f96f7a22a14a5384ee02622c46012b9a9660397dbc302439a998aa6 = $this->env->getExtension("native_profiler");
        $__internal_2de6e7271f96f7a22a14a5384ee02622c46012b9a9660397dbc302439a998aa6->enter($__internal_2de6e7271f96f7a22a14a5384ee02622c46012b9a9660397dbc302439a998aa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <!-- original template code goes here -->
    <h1>Job</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Type</th>
                <td>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "type", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Company</th>
                <td>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "company", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Logo</th>
                <td>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "logo", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Url</th>
                <td>";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "url", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Position</th>
                <td>";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "position", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Location</th>
                <td>";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "location", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "description", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>How_to_apply</th>
                <td>";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "howtoapply", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Token</th>
                <td>";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "token", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Is_public</th>
                <td>";
        // line 51
        if ($this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "ispublic", array())) {
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
        if ($this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "isactivated", array())) {
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "email", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Expires_at</th>
                <td>";
        // line 63
        if ($this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "expiresat", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "expiresat", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Created_at</th>
                <td>";
        // line 67
        if ($this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "createdat", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "createdat", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Updated_at</th>
                <td>";
        // line 71
        if ($this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "updatedat", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "updatedat", array()), "Y-m-d H:i:s"), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ens_job_edit", array("id" => $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 84
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 86
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_2de6e7271f96f7a22a14a5384ee02622c46012b9a9660397dbc302439a998aa6->leave($__internal_2de6e7271f96f7a22a14a5384ee02622c46012b9a9660397dbc302439a998aa6_prof);

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
        return array (  195 => 86,  190 => 84,  184 => 81,  178 => 78,  166 => 71,  157 => 67,  148 => 63,  141 => 59,  130 => 55,  119 => 51,  112 => 47,  105 => 43,  98 => 39,  91 => 35,  84 => 31,  77 => 27,  70 => 23,  63 => 19,  56 => 15,  49 => 11,  40 => 4,  34 => 3,  11 => 1,);
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
