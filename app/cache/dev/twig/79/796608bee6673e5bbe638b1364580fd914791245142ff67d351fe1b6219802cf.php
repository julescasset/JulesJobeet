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
        $__internal_91fd33e752431d31077c5048d287a3b8e272a5c6dd7321104ce5ff3e2d1db572 = $this->env->getExtension("native_profiler");
        $__internal_91fd33e752431d31077c5048d287a3b8e272a5c6dd7321104ce5ff3e2d1db572->enter($__internal_91fd33e752431d31077c5048d287a3b8e272a5c6dd7321104ce5ff3e2d1db572_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_91fd33e752431d31077c5048d287a3b8e272a5c6dd7321104ce5ff3e2d1db572->leave($__internal_91fd33e752431d31077c5048d287a3b8e272a5c6dd7321104ce5ff3e2d1db572_prof);

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
