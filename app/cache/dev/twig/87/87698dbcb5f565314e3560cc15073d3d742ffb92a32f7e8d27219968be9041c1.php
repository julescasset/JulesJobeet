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
        $__internal_12c52e2ce9a3bdf197faf2a659dd6d22c2b40bf20b7ff191f66e8fe8dfd0d7b3 = $this->env->getExtension("native_profiler");
        $__internal_12c52e2ce9a3bdf197faf2a659dd6d22c2b40bf20b7ff191f66e8fe8dfd0d7b3->enter($__internal_12c52e2ce9a3bdf197faf2a659dd6d22c2b40bf20b7ff191f66e8fe8dfd0d7b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_12c52e2ce9a3bdf197faf2a659dd6d22c2b40bf20b7ff191f66e8fe8dfd0d7b3->leave($__internal_12c52e2ce9a3bdf197faf2a659dd6d22c2b40bf20b7ff191f66e8fe8dfd0d7b3_prof);

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
