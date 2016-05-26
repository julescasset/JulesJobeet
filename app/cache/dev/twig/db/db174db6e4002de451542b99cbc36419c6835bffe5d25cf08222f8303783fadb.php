<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_eb48a1bc5f794b861ee524a2a506e8fa5baca9ccd455a8595b0448499e1a851c extends Twig_Template
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
        $__internal_5881614a8bc2bdcb325d5e3d9b03428137b8302018e184de9a9c6d24a7488b70 = $this->env->getExtension("native_profiler");
        $__internal_5881614a8bc2bdcb325d5e3d9b03428137b8302018e184de9a9c6d24a7488b70->enter($__internal_5881614a8bc2bdcb325d5e3d9b03428137b8302018e184de9a9c6d24a7488b70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_5881614a8bc2bdcb325d5e3d9b03428137b8302018e184de9a9c6d24a7488b70->leave($__internal_5881614a8bc2bdcb325d5e3d9b03428137b8302018e184de9a9c6d24a7488b70_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
