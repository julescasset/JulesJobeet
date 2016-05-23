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
        $__internal_c0bc1b189ed8d9b33c6a0bb39d941bf33cbe9f72c4a6b84eb0dba8e1d5f5bc5a = $this->env->getExtension("native_profiler");
        $__internal_c0bc1b189ed8d9b33c6a0bb39d941bf33cbe9f72c4a6b84eb0dba8e1d5f5bc5a->enter($__internal_c0bc1b189ed8d9b33c6a0bb39d941bf33cbe9f72c4a6b84eb0dba8e1d5f5bc5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_c0bc1b189ed8d9b33c6a0bb39d941bf33cbe9f72c4a6b84eb0dba8e1d5f5bc5a->leave($__internal_c0bc1b189ed8d9b33c6a0bb39d941bf33cbe9f72c4a6b84eb0dba8e1d5f5bc5a_prof);

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
