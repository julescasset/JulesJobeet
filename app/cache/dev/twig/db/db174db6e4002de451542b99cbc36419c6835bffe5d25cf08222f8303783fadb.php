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
        $__internal_b8f7a575f1191f7329ceba56ea93e13ad83d0a557b96c1756a19e33f8b958f76 = $this->env->getExtension("native_profiler");
        $__internal_b8f7a575f1191f7329ceba56ea93e13ad83d0a557b96c1756a19e33f8b958f76->enter($__internal_b8f7a575f1191f7329ceba56ea93e13ad83d0a557b96c1756a19e33f8b958f76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_b8f7a575f1191f7329ceba56ea93e13ad83d0a557b96c1756a19e33f8b958f76->leave($__internal_b8f7a575f1191f7329ceba56ea93e13ad83d0a557b96c1756a19e33f8b958f76_prof);

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
