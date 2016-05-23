<?php

/* @EnsJules/layout.html.twig */
class __TwigTemplate_7f7abff9f20fa191bc45ab9dd21e95993cbbc79d72896e99fedfe2fa045c6332 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dfa8cadc2680423d7e86304a057e97fca7befa895c715fd6184792ee6229c1f6 = $this->env->getExtension("native_profiler");
        $__internal_dfa8cadc2680423d7e86304a057e97fca7befa895c715fd6184792ee6229c1f6->enter($__internal_dfa8cadc2680423d7e86304a057e97fca7befa895c715fd6184792ee6229c1f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EnsJules/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <title>
        ";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        // line 8
        echo "    </title>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 13
        echo "    ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 15
        echo "    <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/ensjules/images/favicon.ico"), "html", null, true);
        echo "\" />
</head>
<body>
<div id=\"container\">
    <div id=\"header\">
        <div class=\"content\">
            <h1><a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("EnsJulesBundle_homepage");
        echo "\">
                    <img src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/ensjules/images/logo.jpg"), "html", null, true);
        echo "\" alt=\"Jobeet Job Board\" />
                </a></h1>

            <div id=\"sub_header\">
                <div class=\"post\">
                    <h2>Ask for people</h2>
                    <div>
                        <a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("ens_job");
        echo "\">Post a Job</a>
                    </div>
                </div>

                <div class=\"search\">
                    <h2>Ask for a job</h2>
                    <form action=\"\" method=\"get\">
                        <input type=\"text\" name=\"keywords\" id=\"search_keywords\" />
                        <input type=\"submit\" value=\"search\" />
                        <div class=\"help\">
                            Enter some keywords (city, country, position, ...)
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div id=\"content\">
        ";
        // line 48
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method")) {
            // line 49
            echo "            <div class=\"flash_notice\">
                ";
            // line 50
            echo twig_escape_filter($this->env, (isset($context["flash_message"]) ? $context["flash_message"] : $this->getContext($context, "flash_message")), "html", null, true);
            echo "
            </div>
        ";
        }
        // line 53
        echo "
        ";
        // line 54
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method")) {
            // line 55
            echo "            <div class=\"flash_error\">
                ";
            // line 56
            echo twig_escape_filter($this->env, (isset($context["flash_message"]) ? $context["flash_message"] : $this->getContext($context, "flash_message")), "html", null, true);
            echo "
            </div>
        ";
        }
        // line 59
        echo "
        <div class=\"content\">
            ";
        // line 61
        $this->displayBlock('content', $context, $blocks);
        // line 63
        echo "        </div>
    </div>

    <div id=\"footer\">
        <div class=\"content\">
              <span class=\"symfony\">
                <img src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/ensjules/images/jobeet-mini.png"), "html", null, true);
        echo "\" />
                powered by <a href=\"http://www.symfony.com/\">
                  <img src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/ensjules/images/symfony.gif"), "html", null, true);
        echo "\" alt=\"symfony framework\" />
                </a>
              </span>
            <ul>
                <li><a href=\"\">About Jobeet</a></li>
                <li class=\"feed\"><a href=\"\">Full feed</a></li>
                <li><a href=\"\">Jobeet API</a></li>
                <li class=\"last\"><a href=\"\">Affiliates</a></li>
            </ul>
        </div>
    </div>
</div>
</body>
</html>";
        
        $__internal_dfa8cadc2680423d7e86304a057e97fca7befa895c715fd6184792ee6229c1f6->leave($__internal_dfa8cadc2680423d7e86304a057e97fca7befa895c715fd6184792ee6229c1f6_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_353bd8a801112345dfdbcd7c6d676447866090bbfb2bae6232e87740648ce668 = $this->env->getExtension("native_profiler");
        $__internal_353bd8a801112345dfdbcd7c6d676447866090bbfb2bae6232e87740648ce668->enter($__internal_353bd8a801112345dfdbcd7c6d676447866090bbfb2bae6232e87740648ce668_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "            Jobeet - Your best job board
        ";
        
        $__internal_353bd8a801112345dfdbcd7c6d676447866090bbfb2bae6232e87740648ce668->leave($__internal_353bd8a801112345dfdbcd7c6d676447866090bbfb2bae6232e87740648ce668_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9237f185a25a28509dc9e6666c1787cc43c963bbb3aaf3b8c0c19506008300c8 = $this->env->getExtension("native_profiler");
        $__internal_9237f185a25a28509dc9e6666c1787cc43c963bbb3aaf3b8c0c19506008300c8->enter($__internal_9237f185a25a28509dc9e6666c1787cc43c963bbb3aaf3b8c0c19506008300c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/ensjules/css/main.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
    ";
        
        $__internal_9237f185a25a28509dc9e6666c1787cc43c963bbb3aaf3b8c0c19506008300c8->leave($__internal_9237f185a25a28509dc9e6666c1787cc43c963bbb3aaf3b8c0c19506008300c8_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a29c40c4c26c6c336e700445d6569aed16fb36d1853a8e9ac099167331f86e56 = $this->env->getExtension("native_profiler");
        $__internal_a29c40c4c26c6c336e700445d6569aed16fb36d1853a8e9ac099167331f86e56->enter($__internal_a29c40c4c26c6c336e700445d6569aed16fb36d1853a8e9ac099167331f86e56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 14
        echo "    ";
        
        $__internal_a29c40c4c26c6c336e700445d6569aed16fb36d1853a8e9ac099167331f86e56->leave($__internal_a29c40c4c26c6c336e700445d6569aed16fb36d1853a8e9ac099167331f86e56_prof);

    }

    // line 61
    public function block_content($context, array $blocks = array())
    {
        $__internal_125a4af4928f8935a0f80d1384d1a0eeddf77a5a5849f40909356db3e3131f65 = $this->env->getExtension("native_profiler");
        $__internal_125a4af4928f8935a0f80d1384d1a0eeddf77a5a5849f40909356db3e3131f65->enter($__internal_125a4af4928f8935a0f80d1384d1a0eeddf77a5a5849f40909356db3e3131f65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 62
        echo "            ";
        
        $__internal_125a4af4928f8935a0f80d1384d1a0eeddf77a5a5849f40909356db3e3131f65->leave($__internal_125a4af4928f8935a0f80d1384d1a0eeddf77a5a5849f40909356db3e3131f65_prof);

    }

    public function getTemplateName()
    {
        return "@EnsJules/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 62,  197 => 61,  190 => 14,  184 => 13,  174 => 11,  168 => 10,  160 => 6,  154 => 5,  133 => 71,  128 => 69,  120 => 63,  118 => 61,  114 => 59,  108 => 56,  105 => 55,  103 => 54,  100 => 53,  94 => 50,  91 => 49,  89 => 48,  67 => 29,  57 => 22,  53 => 21,  43 => 15,  40 => 13,  38 => 10,  34 => 8,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/*     <title>*/
/*         {% block title %}*/
/*             Jobeet - Your best job board*/
/*         {% endblock %}*/
/*     </title>*/
/*     <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />*/
/*     {% block stylesheets %}*/
/*         <link rel="stylesheet" href="{{ asset('bundles/ensjules/css/main.css') }}" type="text/css" media="all" />*/
/*     {% endblock %}*/
/*     {% block javascripts %}*/
/*     {% endblock %}*/
/*     <link rel="shortcut icon" href="{{ asset('bundles/ensjules/images/favicon.ico') }}" />*/
/* </head>*/
/* <body>*/
/* <div id="container">*/
/*     <div id="header">*/
/*         <div class="content">*/
/*             <h1><a href="{{ path('EnsJulesBundle_homepage') }}">*/
/*                     <img src="{{ asset('bundles/ensjules/images/logo.jpg') }}" alt="Jobeet Job Board" />*/
/*                 </a></h1>*/
/* */
/*             <div id="sub_header">*/
/*                 <div class="post">*/
/*                     <h2>Ask for people</h2>*/
/*                     <div>*/
/*                         <a href="{{ path('ens_job') }}">Post a Job</a>*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div class="search">*/
/*                     <h2>Ask for a job</h2>*/
/*                     <form action="" method="get">*/
/*                         <input type="text" name="keywords" id="search_keywords" />*/
/*                         <input type="submit" value="search" />*/
/*                         <div class="help">*/
/*                             Enter some keywords (city, country, position, ...)*/
/*                         </div>*/
/*                     </form>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/*     <div id="content">*/
/*         {% if app.session.flashbag.get('notice') %}*/
/*             <div class="flash_notice">*/
/*                 {{ flash_message }}*/
/*             </div>*/
/*         {% endif %}*/
/* */
/*         {% if app.session.flashbag.get('error') %}*/
/*             <div class="flash_error">*/
/*                 {{ flash_message }}*/
/*             </div>*/
/*         {% endif %}*/
/* */
/*         <div class="content">*/
/*             {% block content %}*/
/*             {% endblock %}*/
/*         </div>*/
/*     </div>*/
/* */
/*     <div id="footer">*/
/*         <div class="content">*/
/*               <span class="symfony">*/
/*                 <img src="{{ asset('bundles/ensjules/images/jobeet-mini.png') }}" />*/
/*                 powered by <a href="http://www.symfony.com/">*/
/*                   <img src="{{ asset('bundles/ensjules/images/symfony.gif') }}" alt="symfony framework" />*/
/*                 </a>*/
/*               </span>*/
/*             <ul>*/
/*                 <li><a href="">About Jobeet</a></li>*/
/*                 <li class="feed"><a href="">Full feed</a></li>*/
/*                 <li><a href="">Jobeet API</a></li>*/
/*                 <li class="last"><a href="">Affiliates</a></li>*/
/*             </ul>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* </body>*/
/* </html>*/
