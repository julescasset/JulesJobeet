<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_ba0e29c17af98b2bfbc6ba3a1d0ab2a65825b9dfd8c25d0d5cdac8bcde346063 extends Twig_Template
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
        $__internal_6e41c4c442ee9b635ebcf038cb7aa74b937b22b5a8b101f1b9bc018dd2276be7 = $this->env->getExtension("native_profiler");
        $__internal_6e41c4c442ee9b635ebcf038cb7aa74b937b22b5a8b101f1b9bc018dd2276be7->enter($__internal_6e41c4c442ee9b635ebcf038cb7aa74b937b22b5a8b101f1b9bc018dd2276be7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_6e41c4c442ee9b635ebcf038cb7aa74b937b22b5a8b101f1b9bc018dd2276be7->leave($__internal_6e41c4c442ee9b635ebcf038cb7aa74b937b22b5a8b101f1b9bc018dd2276be7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
