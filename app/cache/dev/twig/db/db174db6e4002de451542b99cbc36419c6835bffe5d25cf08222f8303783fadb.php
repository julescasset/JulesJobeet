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
        $__internal_56d2ac073bd53de899a2faae59a774a42bef9384d63bff76c862ccb354435428 = $this->env->getExtension("native_profiler");
        $__internal_56d2ac073bd53de899a2faae59a774a42bef9384d63bff76c862ccb354435428->enter($__internal_56d2ac073bd53de899a2faae59a774a42bef9384d63bff76c862ccb354435428_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_56d2ac073bd53de899a2faae59a774a42bef9384d63bff76c862ccb354435428->leave($__internal_56d2ac073bd53de899a2faae59a774a42bef9384d63bff76c862ccb354435428_prof);

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
