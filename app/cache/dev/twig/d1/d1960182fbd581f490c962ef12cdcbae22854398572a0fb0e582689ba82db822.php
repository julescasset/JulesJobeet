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
        $__internal_5caed5c821f3ac11ed4b73c01ca8ddca8992cf1c4f03fd124610d098ef03b088 = $this->env->getExtension("native_profiler");
        $__internal_5caed5c821f3ac11ed4b73c01ca8ddca8992cf1c4f03fd124610d098ef03b088->enter($__internal_5caed5c821f3ac11ed4b73c01ca8ddca8992cf1c4f03fd124610d098ef03b088_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_5caed5c821f3ac11ed4b73c01ca8ddca8992cf1c4f03fd124610d098ef03b088->leave($__internal_5caed5c821f3ac11ed4b73c01ca8ddca8992cf1c4f03fd124610d098ef03b088_prof);

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
