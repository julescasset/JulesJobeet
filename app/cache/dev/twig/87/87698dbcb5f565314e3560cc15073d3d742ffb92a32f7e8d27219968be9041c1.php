<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_2c55821a9d216e5426731cf6463732616e67fb2a1e747bd74f8f6e24e0e891b5 extends Twig_Template
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
        $__internal_010f6747246b55e4bccb210bbc102394030e2a2269f0819bc038aed5d16489af = $this->env->getExtension("native_profiler");
        $__internal_010f6747246b55e4bccb210bbc102394030e2a2269f0819bc038aed5d16489af->enter($__internal_010f6747246b55e4bccb210bbc102394030e2a2269f0819bc038aed5d16489af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_010f6747246b55e4bccb210bbc102394030e2a2269f0819bc038aed5d16489af->leave($__internal_010f6747246b55e4bccb210bbc102394030e2a2269f0819bc038aed5d16489af_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */