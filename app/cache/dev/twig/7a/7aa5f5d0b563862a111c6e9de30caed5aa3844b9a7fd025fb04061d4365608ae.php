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
        $__internal_a00f360eb2cdfd50e6c49232e430af1e0a7289db00943ee497196a39034c5fab = $this->env->getExtension("native_profiler");
        $__internal_a00f360eb2cdfd50e6c49232e430af1e0a7289db00943ee497196a39034c5fab->enter($__internal_a00f360eb2cdfd50e6c49232e430af1e0a7289db00943ee497196a39034c5fab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_a00f360eb2cdfd50e6c49232e430af1e0a7289db00943ee497196a39034c5fab->leave($__internal_a00f360eb2cdfd50e6c49232e430af1e0a7289db00943ee497196a39034c5fab_prof);

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
