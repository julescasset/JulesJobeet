<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_41696909e06a233b01e4cdcfc9f8e5eda542bcb5cdc12234b79e70245ada0ba7 extends Twig_Template
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
        $__internal_68d280621d8489c39d52d5b2941f7299b2fe1a9fb6fa1ce0684dc3a04cb1c406 = $this->env->getExtension("native_profiler");
        $__internal_68d280621d8489c39d52d5b2941f7299b2fe1a9fb6fa1ce0684dc3a04cb1c406->enter($__internal_68d280621d8489c39d52d5b2941f7299b2fe1a9fb6fa1ce0684dc3a04cb1c406_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_68d280621d8489c39d52d5b2941f7299b2fe1a9fb6fa1ce0684dc3a04cb1c406->leave($__internal_68d280621d8489c39d52d5b2941f7299b2fe1a9fb6fa1ce0684dc3a04cb1c406_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
