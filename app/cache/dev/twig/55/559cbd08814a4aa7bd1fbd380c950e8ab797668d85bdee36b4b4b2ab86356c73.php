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
        $__internal_901fbc96f0396f6c44e25463018d46bbd5c0fadef8cb385425a676830943ef2d = $this->env->getExtension("native_profiler");
        $__internal_901fbc96f0396f6c44e25463018d46bbd5c0fadef8cb385425a676830943ef2d->enter($__internal_901fbc96f0396f6c44e25463018d46bbd5c0fadef8cb385425a676830943ef2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_901fbc96f0396f6c44e25463018d46bbd5c0fadef8cb385425a676830943ef2d->leave($__internal_901fbc96f0396f6c44e25463018d46bbd5c0fadef8cb385425a676830943ef2d_prof);

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
