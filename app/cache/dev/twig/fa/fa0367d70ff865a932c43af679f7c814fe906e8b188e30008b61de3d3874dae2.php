<?php

/* job/admin.html.twig */
class __TwigTemplate_da3e39ab73dbcbf2848e63d57ed9f77a28606e5e27b84c2e9a792d789fb05beb extends Twig_Template
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
        $__internal_2da7076e463cf22dda3ff1fe631cfcd3b6dd6dcf1eb8ee968d95a7fcdb78132d = $this->env->getExtension("native_profiler");
        $__internal_2da7076e463cf22dda3ff1fe631cfcd3b6dd6dcf1eb8ee968d95a7fcdb78132d->enter($__internal_2da7076e463cf22dda3ff1fe631cfcd3b6dd6dcf1eb8ee968d95a7fcdb78132d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "job/admin.html.twig"));

        // line 1
        echo "<div id=\"job_actions\">
    <h3>Admin</h3>
    <ul>
        ";
        // line 4
        if ( !$this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "isActivated", array())) {
            // line 5
            echo "            <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ens_job_edit", array("token" => $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "token", array()))), "html", null, true);
            echo "\">Edit</a></li>
            <li><form action=\"";
            // line 6
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ens_job_publish", array("token" => $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "token", array()))), "html", null, true);
            echo "\" method=\"post\">
                    ";
            // line 7
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["publish_form"]) ? $context["publish_form"] : $this->getContext($context, "publish_form")), 'widget');
            echo "
                    <button type=\"submit\">Publish</button>
                </form>
            </li>
        ";
        }
        // line 12
        echo "        <li>
            <form action=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ens_job_delete", array("token" => $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "token", array()))), "html", null, true);
        echo "\" method=\"post\">
                ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'widget');
        echo "
                <button type=\"submit\" onclick=\"if(!confirm('Are you sure?')) { return false; }\">Delete</button>
            </form>
        </li>
        ";
        // line 18
        if ($this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "isActivated", array())) {
            // line 19
            echo "            <li ";
            if ($this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "expiresSoon", array())) {
                echo " class=\"expires_soon\" ";
            }
            echo ">
                ";
            // line 20
            if ($this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "isExpired", array())) {
                // line 21
                echo "                    Expired
                ";
            } else {
                // line 23
                echo "                    Expires in <strong>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "getDaysBeforeExpires", array()), "html", null, true);
                echo "</strong> days
                ";
            }
            // line 25
            echo "
                ";
            // line 26
            if ($this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "expiresSoon", array())) {
                // line 27
                echo "                    - <a href=\"\">Extend</a> for another 30 days
                ";
            }
            // line 29
            echo "            </li>
        ";
        } else {
            // line 31
            echo "            <li>
                [Bookmark this <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("job_preview", array("token" => $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "token", array()), "company" => $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "companyslug", array()), "location" => $this->getAttribute(            // line 33
(isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "locationslug", array()), "position" => $this->getAttribute((isset($context["job"]) ? $context["job"] : $this->getContext($context, "job")), "positionslug", array()))), "html", null, true);
            echo "\">URL</a>
                to manage this job in the future.]
            </li>
        ";
        }
        // line 37
        echo "    </ul>
</div>";
        
        $__internal_2da7076e463cf22dda3ff1fe631cfcd3b6dd6dcf1eb8ee968d95a7fcdb78132d->leave($__internal_2da7076e463cf22dda3ff1fe631cfcd3b6dd6dcf1eb8ee968d95a7fcdb78132d_prof);

    }

    public function getTemplateName()
    {
        return "job/admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 37,  98 => 33,  97 => 32,  94 => 31,  90 => 29,  86 => 27,  84 => 26,  81 => 25,  75 => 23,  71 => 21,  69 => 20,  62 => 19,  60 => 18,  53 => 14,  49 => 13,  46 => 12,  38 => 7,  34 => 6,  29 => 5,  27 => 4,  22 => 1,);
    }
}
/* <div id="job_actions">*/
/*     <h3>Admin</h3>*/
/*     <ul>*/
/*         {% if not job.isActivated %}*/
/*             <li><a href="{{ path('ens_job_edit', { 'token': job.token }) }}">Edit</a></li>*/
/*             <li><form action="{{ path('ens_job_publish', { 'token': job.token }) }}" method="post">*/
/*                     {{ form_widget(publish_form) }}*/
/*                     <button type="submit">Publish</button>*/
/*                 </form>*/
/*             </li>*/
/*         {% endif %}*/
/*         <li>*/
/*             <form action="{{ path('ens_job_delete', { 'token': job.token }) }}" method="post">*/
/*                 {{ form_widget(delete_form) }}*/
/*                 <button type="submit" onclick="if(!confirm('Are you sure?')) { return false; }">Delete</button>*/
/*             </form>*/
/*         </li>*/
/*         {% if job.isActivated %}*/
/*             <li {% if job.expiresSoon %} class="expires_soon" {% endif %}>*/
/*                 {% if job.isExpired %}*/
/*                     Expired*/
/*                 {% else %}*/
/*                     Expires in <strong>{{ job.getDaysBeforeExpires }}</strong> days*/
/*                 {% endif %}*/
/* */
/*                 {% if job.expiresSoon %}*/
/*                     - <a href="">Extend</a> for another 30 days*/
/*                 {% endif %}*/
/*             </li>*/
/*         {% else %}*/
/*             <li>*/
/*                 [Bookmark this <a href="{{ url('job_preview', { 'token': job.token, 'company': job.companyslug,*/
/*                     'location': job.locationslug, 'position': job.positionslug }) }}">URL</a>*/
/*                 to manage this job in the future.]*/
/*             </li>*/
/*         {% endif %}*/
/*     </ul>*/
/* </div>*/
