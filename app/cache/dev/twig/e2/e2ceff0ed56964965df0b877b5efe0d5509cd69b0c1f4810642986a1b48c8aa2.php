<?php

/* job/new.html.twig */
class __TwigTemplate_949769509d3d64ccdb8f4293a21a19a4947a5753f2383a2dc8b06bf80fd8006e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EnsJulesBundle::layout.html.twig", "job/new.html.twig", 1);
        $this->blocks = array(
            'field_errors' => array($this, 'block_field_errors'),
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
        $__internal_869cd27281d93b803a717e508758c3b5021d87cd9744370701008929b0617417 = $this->env->getExtension("native_profiler");
        $__internal_869cd27281d93b803a717e508758c3b5021d87cd9744370701008929b0617417->enter($__internal_869cd27281d93b803a717e508758c3b5021d87cd9744370701008929b0617417_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "job/new.html.twig"));

        // line 3
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => $this));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_869cd27281d93b803a717e508758c3b5021d87cd9744370701008929b0617417->leave($__internal_869cd27281d93b803a717e508758c3b5021d87cd9744370701008929b0617417_prof);

    }

    // line 5
    public function block_field_errors($context, array $blocks = array())
    {
        $__internal_d6c785a5ac0a0b98f0a5f2c30c80a9816f71b0373108d4aee8c845e40494c6f0 = $this->env->getExtension("native_profiler");
        $__internal_d6c785a5ac0a0b98f0a5f2c30c80a9816f71b0373108d4aee8c845e40494c6f0->enter($__internal_d6c785a5ac0a0b98f0a5f2c30c80a9816f71b0373108d4aee8c845e40494c6f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_errors"));

        // line 6
        echo "    ";
        ob_start();
        // line 7
        echo "        ";
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 8
            echo "            <ul class=\"error_list\">
                ";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 10
                echo "                    <li>";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($context["error"], "messageTemplate", array()), $this->getAttribute($context["error"], "messageParameters", array()), "validators"), "html", null, true);
                echo "</li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 12
            echo "            </ul>
        ";
        }
        // line 14
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_d6c785a5ac0a0b98f0a5f2c30c80a9816f71b0373108d4aee8c845e40494c6f0->leave($__internal_d6c785a5ac0a0b98f0a5f2c30c80a9816f71b0373108d4aee8c845e40494c6f0_prof);

    }

    // line 17
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8f35cdcf3d43909bd1117c0e3ea69bea8e9043506751fb9bd23c66ac565aff5a = $this->env->getExtension("native_profiler");
        $__internal_8f35cdcf3d43909bd1117c0e3ea69bea8e9043506751fb9bd23c66ac565aff5a->enter($__internal_8f35cdcf3d43909bd1117c0e3ea69bea8e9043506751fb9bd23c66ac565aff5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 18
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/ensjules/css/job.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_8f35cdcf3d43909bd1117c0e3ea69bea8e9043506751fb9bd23c66ac565aff5a->leave($__internal_8f35cdcf3d43909bd1117c0e3ea69bea8e9043506751fb9bd23c66ac565aff5a_prof);

    }

    // line 22
    public function block_content($context, array $blocks = array())
    {
        $__internal_c9863a88e878a8a7c2c642f7c22c634f40361bae74bdce221462c83a0c86d717 = $this->env->getExtension("native_profiler");
        $__internal_c9863a88e878a8a7c2c642f7c22c634f40361bae74bdce221462c83a0c86d717->enter($__internal_c9863a88e878a8a7c2c642f7c22c634f40361bae74bdce221462c83a0c86d717_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 23
        echo "    <h1>Job creation</h1>
    <form action=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("ens_job_create");
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
        <table id=\"job_form\">
            <tfoot>
            <tr>
                <td colspan=\"2\">
                    <input type=\"submit\" value=\"Preview your job\" />
                </td>
            </tr>
            </tfoot>
            <tbody>
            <tr>
                <th>";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "category", array()), 'label');
        echo "</th>
                <td>
                    ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "category", array()), 'errors');
        echo "
                    ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "category", array()), 'widget');
        echo "
                </td>
            </tr>
            <tr>
                <th>";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "type", array()), 'label');
        echo "</th>
                <td>
                    ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "type", array()), 'errors');
        echo "
                    ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "type", array()), 'widget');
        echo "
                </td>
            </tr>
            <tr>
                <th>";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "company", array()), 'label');
        echo "</th>
                <td>
                    ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "company", array()), 'errors');
        echo "
                    ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "company", array()), 'widget');
        echo "
                </td>
            </tr>
            <tr>
                <th>";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file", array()), 'label');
        echo "</th>
                <td>
                    ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file", array()), 'errors');
        echo "
                    ";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file", array()), 'widget');
        echo "
                </td>
            </tr>
            <tr>
                <th>";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "url", array()), 'label');
        echo "</th>
                <td>
                    ";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "url", array()), 'errors');
        echo "
                    ";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "url", array()), 'widget');
        echo "
                </td>
            </tr>
            <tr>
                <th>";
        // line 70
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "position", array()), 'label');
        echo "</th>
                <td>
                    ";
        // line 72
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "position", array()), 'errors');
        echo "
                    ";
        // line 73
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "position", array()), 'widget');
        echo "
                </td>
            </tr>
            <tr>
                <th>";
        // line 77
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "location", array()), 'label');
        echo "</th>
                <td>
                    ";
        // line 79
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "location", array()), 'errors');
        echo "
                    ";
        // line 80
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "location", array()), 'widget');
        echo "
                </td>
            </tr>
            <tr>
                <th>";
        // line 84
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'label');
        echo "</th>
                <td>
                    ";
        // line 86
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'errors');
        echo "
                    ";
        // line 87
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'widget');
        echo "
                </td>
            </tr>
            <tr>
                <th>";
        // line 91
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "how_to_apply", array()), 'label');
        echo "</th>
                <td>
                    ";
        // line 93
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "how_to_apply", array()), 'errors');
        echo "
                    ";
        // line 94
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "how_to_apply", array()), 'widget');
        echo "
                </td>
            <tr>
                <th>";
        // line 97
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "is_public", array()), 'label');
        echo "</th>
                <td>
                    ";
        // line 99
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "is_public", array()), 'errors');
        echo "
                    ";
        // line 100
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "is_public", array()), 'widget');
        echo "
                    <br /> Whether the job can also be published on affiliate websites or not.
                </td>
            </tr>
            <tr>
                <th>";
        // line 105
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'label');
        echo "</th>
                <td>
                    ";
        // line 107
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'errors');
        echo "
                    ";
        // line 108
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget');
        echo "
                </td>
            </tr>
            </tbody>
        </table>

        ";
        // line 114
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
    </form>
";
        
        $__internal_c9863a88e878a8a7c2c642f7c22c634f40361bae74bdce221462c83a0c86d717->leave($__internal_c9863a88e878a8a7c2c642f7c22c634f40361bae74bdce221462c83a0c86d717_prof);

    }

    public function getTemplateName()
    {
        return "job/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  302 => 114,  293 => 108,  289 => 107,  284 => 105,  276 => 100,  272 => 99,  267 => 97,  261 => 94,  257 => 93,  252 => 91,  245 => 87,  241 => 86,  236 => 84,  229 => 80,  225 => 79,  220 => 77,  213 => 73,  209 => 72,  204 => 70,  197 => 66,  193 => 65,  188 => 63,  181 => 59,  177 => 58,  172 => 56,  165 => 52,  161 => 51,  156 => 49,  149 => 45,  145 => 44,  140 => 42,  133 => 38,  129 => 37,  124 => 35,  108 => 24,  105 => 23,  99 => 22,  90 => 19,  85 => 18,  79 => 17,  71 => 14,  67 => 12,  58 => 10,  54 => 9,  51 => 8,  48 => 7,  45 => 6,  39 => 5,  32 => 1,  30 => 3,  11 => 1,);
    }
}
/* {% extends 'EnsJulesBundle::layout.html.twig' %}*/
/* */
/* {% form_theme form _self %}*/
/* */
/* {% block field_errors %}*/
/*     {% spaceless %}*/
/*         {% if errors|length > 0 %}*/
/*             <ul class="error_list">*/
/*                 {% for error in errors %}*/
/*                     <li>{{ error.messageTemplate|trans(error.messageParameters, 'validators') }}</li>*/
/*                 {% endfor %}*/
/*             </ul>*/
/*         {% endif %}*/
/*     {% endspaceless %}*/
/* {% endblock field_errors %}*/
/* */
/* {% block stylesheets %}*/
/*     {{ parent() }}*/
/*     <link rel="stylesheet" href="{{ asset('bundles/ensjules/css/job.css') }}" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block content %}*/
/*     <h1>Job creation</h1>*/
/*     <form action="{{ path('ens_job_create') }}" method="post" {{ form_enctype(form) }}>*/
/*         <table id="job_form">*/
/*             <tfoot>*/
/*             <tr>*/
/*                 <td colspan="2">*/
/*                     <input type="submit" value="Preview your job" />*/
/*                 </td>*/
/*             </tr>*/
/*             </tfoot>*/
/*             <tbody>*/
/*             <tr>*/
/*                 <th>{{ form_label(form.category) }}</th>*/
/*                 <td>*/
/*                     {{ form_errors(form.category) }}*/
/*                     {{ form_widget(form.category) }}*/
/*                 </td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>{{ form_label(form.type) }}</th>*/
/*                 <td>*/
/*                     {{ form_errors(form.type) }}*/
/*                     {{ form_widget(form.type) }}*/
/*                 </td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>{{ form_label(form.company) }}</th>*/
/*                 <td>*/
/*                     {{ form_errors(form.company) }}*/
/*                     {{ form_widget(form.company) }}*/
/*                 </td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>{{ form_label(form.file) }}</th>*/
/*                 <td>*/
/*                     {{ form_errors(form.file) }}*/
/*                     {{ form_widget(form.file) }}*/
/*                 </td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>{{ form_label(form.url) }}</th>*/
/*                 <td>*/
/*                     {{ form_errors(form.url) }}*/
/*                     {{ form_widget(form.url) }}*/
/*                 </td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>{{ form_label(form.position) }}</th>*/
/*                 <td>*/
/*                     {{ form_errors(form.position) }}*/
/*                     {{ form_widget(form.position) }}*/
/*                 </td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>{{ form_label(form.location) }}</th>*/
/*                 <td>*/
/*                     {{ form_errors(form.location) }}*/
/*                     {{ form_widget(form.location) }}*/
/*                 </td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>{{ form_label(form.description) }}</th>*/
/*                 <td>*/
/*                     {{ form_errors(form.description) }}*/
/*                     {{ form_widget(form.description) }}*/
/*                 </td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>{{ form_label(form.how_to_apply) }}</th>*/
/*                 <td>*/
/*                     {{ form_errors(form.how_to_apply) }}*/
/*                     {{ form_widget(form.how_to_apply) }}*/
/*                 </td>*/
/*             <tr>*/
/*                 <th>{{ form_label(form.is_public) }}</th>*/
/*                 <td>*/
/*                     {{ form_errors(form.is_public) }}*/
/*                     {{ form_widget(form.is_public) }}*/
/*                     <br /> Whether the job can also be published on affiliate websites or not.*/
/*                 </td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>{{ form_label(form.email) }}</th>*/
/*                 <td>*/
/*                     {{ form_errors(form.email) }}*/
/*                     {{ form_widget(form.email) }}*/
/*                 </td>*/
/*             </tr>*/
/*             </tbody>*/
/*         </table>*/
/* */
/*         {{ form_rest(form) }}*/
/*     </form>*/
/* {% endblock %}*/
/* */
