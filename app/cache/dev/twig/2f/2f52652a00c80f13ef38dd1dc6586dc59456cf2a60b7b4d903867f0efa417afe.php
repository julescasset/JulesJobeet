<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_5e9d1a633761b7bd2f2f0f0fd4475ef47d5e2b038587b03c35a040a4c2f476fa extends Twig_Template
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
        $__internal_0b4642397374115560f5055373f0f5aed2d22aee40b73d18325117c1030a3477 = $this->env->getExtension("native_profiler");
        $__internal_0b4642397374115560f5055373f0f5aed2d22aee40b73d18325117c1030a3477->enter($__internal_0b4642397374115560f5055373f0f5aed2d22aee40b73d18325117c1030a3477_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_0b4642397374115560f5055373f0f5aed2d22aee40b73d18325117c1030a3477->leave($__internal_0b4642397374115560f5055373f0f5aed2d22aee40b73d18325117c1030a3477_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($form->vars['multipart']): ?>enctype="multipart/form-data"<?php endif ?>*/
/* */
