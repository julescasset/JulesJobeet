<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_eb48a1bc5f794b861ee524a2a506e8fa5baca9ccd455a8595b0448499e1a851c extends Twig_Template
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
        $__internal_8792f69ad1f0973edea2c47955e75dc82040bd266d87e62a7fb69cafd33f708d = $this->env->getExtension("native_profiler");
        $__internal_8792f69ad1f0973edea2c47955e75dc82040bd266d87e62a7fb69cafd33f708d->enter($__internal_8792f69ad1f0973edea2c47955e75dc82040bd266d87e62a7fb69cafd33f708d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_8792f69ad1f0973edea2c47955e75dc82040bd266d87e62a7fb69cafd33f708d->leave($__internal_8792f69ad1f0973edea2c47955e75dc82040bd266d87e62a7fb69cafd33f708d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
