<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_015e5a11388511e618c80a8d82ed599a2ab54007dd41f82e4b373f0fb00d09de extends Twig_Template
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
        $__internal_6cf9061b4fbc654121b20551fbf7b9dc592759cf4f6d45026ae303ffcfee543f = $this->env->getExtension("native_profiler");
        $__internal_6cf9061b4fbc654121b20551fbf7b9dc592759cf4f6d45026ae303ffcfee543f->enter($__internal_6cf9061b4fbc654121b20551fbf7b9dc592759cf4f6d45026ae303ffcfee543f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_6cf9061b4fbc654121b20551fbf7b9dc592759cf4f6d45026ae303ffcfee543f->leave($__internal_6cf9061b4fbc654121b20551fbf7b9dc592759cf4f6d45026ae303ffcfee543f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
