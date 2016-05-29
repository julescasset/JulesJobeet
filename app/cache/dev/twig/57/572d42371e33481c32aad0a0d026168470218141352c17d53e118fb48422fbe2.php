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
        $__internal_702adf8cbeac4472a8b6116165c5338c58538257c4964625dee2412f22cf1041 = $this->env->getExtension("native_profiler");
        $__internal_702adf8cbeac4472a8b6116165c5338c58538257c4964625dee2412f22cf1041->enter($__internal_702adf8cbeac4472a8b6116165c5338c58538257c4964625dee2412f22cf1041_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_702adf8cbeac4472a8b6116165c5338c58538257c4964625dee2412f22cf1041->leave($__internal_702adf8cbeac4472a8b6116165c5338c58538257c4964625dee2412f22cf1041_prof);

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
