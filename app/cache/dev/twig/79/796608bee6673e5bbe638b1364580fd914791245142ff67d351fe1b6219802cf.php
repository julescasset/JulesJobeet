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
        $__internal_ab3cbdb1a2ae1f13ddb373d7601a9d11ac9d48d56353e3f35ed992973fbd4f63 = $this->env->getExtension("native_profiler");
        $__internal_ab3cbdb1a2ae1f13ddb373d7601a9d11ac9d48d56353e3f35ed992973fbd4f63->enter($__internal_ab3cbdb1a2ae1f13ddb373d7601a9d11ac9d48d56353e3f35ed992973fbd4f63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_ab3cbdb1a2ae1f13ddb373d7601a9d11ac9d48d56353e3f35ed992973fbd4f63->leave($__internal_ab3cbdb1a2ae1f13ddb373d7601a9d11ac9d48d56353e3f35ed992973fbd4f63_prof);

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
