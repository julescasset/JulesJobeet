<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_8bc45b4974550028825b5a236e778d809e5c81cb205529ce02d0f4da3971e403 extends Twig_Template
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
        $__internal_c72c4def9971e74a26dd663789558c05b36c7649fd07c4d475f618d8cd10db1e = $this->env->getExtension("native_profiler");
        $__internal_c72c4def9971e74a26dd663789558c05b36c7649fd07c4d475f618d8cd10db1e->enter($__internal_c72c4def9971e74a26dd663789558c05b36c7649fd07c4d475f618d8cd10db1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_c72c4def9971e74a26dd663789558c05b36c7649fd07c4d475f618d8cd10db1e->leave($__internal_c72c4def9971e74a26dd663789558c05b36c7649fd07c4d475f618d8cd10db1e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */