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
        $__internal_8a591ec5a2603e318da9a663929c705b3b30ce26cae8efe784568112b0d13928 = $this->env->getExtension("native_profiler");
        $__internal_8a591ec5a2603e318da9a663929c705b3b30ce26cae8efe784568112b0d13928->enter($__internal_8a591ec5a2603e318da9a663929c705b3b30ce26cae8efe784568112b0d13928_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_8a591ec5a2603e318da9a663929c705b3b30ce26cae8efe784568112b0d13928->leave($__internal_8a591ec5a2603e318da9a663929c705b3b30ce26cae8efe784568112b0d13928_prof);

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
