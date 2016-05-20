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
        $__internal_4fba204e8da73a4cc5d8664e6fa507a71f294df218f39cecd68514d8cf181b57 = $this->env->getExtension("native_profiler");
        $__internal_4fba204e8da73a4cc5d8664e6fa507a71f294df218f39cecd68514d8cf181b57->enter($__internal_4fba204e8da73a4cc5d8664e6fa507a71f294df218f39cecd68514d8cf181b57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_4fba204e8da73a4cc5d8664e6fa507a71f294df218f39cecd68514d8cf181b57->leave($__internal_4fba204e8da73a4cc5d8664e6fa507a71f294df218f39cecd68514d8cf181b57_prof);

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
