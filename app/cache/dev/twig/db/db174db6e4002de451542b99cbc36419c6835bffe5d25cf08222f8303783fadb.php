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
        $__internal_d4ef5ea49b6303798bc5ceea0d223ce153f9c1b3866e101adc12c2c521a862bf = $this->env->getExtension("native_profiler");
        $__internal_d4ef5ea49b6303798bc5ceea0d223ce153f9c1b3866e101adc12c2c521a862bf->enter($__internal_d4ef5ea49b6303798bc5ceea0d223ce153f9c1b3866e101adc12c2c521a862bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_d4ef5ea49b6303798bc5ceea0d223ce153f9c1b3866e101adc12c2c521a862bf->leave($__internal_d4ef5ea49b6303798bc5ceea0d223ce153f9c1b3866e101adc12c2c521a862bf_prof);

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
