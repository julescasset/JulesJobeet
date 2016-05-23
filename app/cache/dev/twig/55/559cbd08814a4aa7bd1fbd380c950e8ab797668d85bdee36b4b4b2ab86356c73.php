<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_e82f81108a47707bf6fb69fb5f08aa8d5f534da28c35295e7a0de7dd19465472 extends Twig_Template
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
        $__internal_84fe8d73e1948c0133ff4a52042bacc60fac897c8454dd6433bb321c452907f5 = $this->env->getExtension("native_profiler");
        $__internal_84fe8d73e1948c0133ff4a52042bacc60fac897c8454dd6433bb321c452907f5->enter($__internal_84fe8d73e1948c0133ff4a52042bacc60fac897c8454dd6433bb321c452907f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_84fe8d73e1948c0133ff4a52042bacc60fac897c8454dd6433bb321c452907f5->leave($__internal_84fe8d73e1948c0133ff4a52042bacc60fac897c8454dd6433bb321c452907f5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
