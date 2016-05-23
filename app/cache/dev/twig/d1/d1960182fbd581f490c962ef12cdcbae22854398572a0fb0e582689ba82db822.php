<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_19fe0ef56228f9e1049286b346a983df5db1b32ba4adc274f8ad306610eddac1 extends Twig_Template
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
        $__internal_f052d55d43fdc71e2d431963a30ebaf3a152727fbbe68a5a6b28b1df1b65f5d3 = $this->env->getExtension("native_profiler");
        $__internal_f052d55d43fdc71e2d431963a30ebaf3a152727fbbe68a5a6b28b1df1b65f5d3->enter($__internal_f052d55d43fdc71e2d431963a30ebaf3a152727fbbe68a5a6b28b1df1b65f5d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_f052d55d43fdc71e2d431963a30ebaf3a152727fbbe68a5a6b28b1df1b65f5d3->leave($__internal_f052d55d43fdc71e2d431963a30ebaf3a152727fbbe68a5a6b28b1df1b65f5d3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
