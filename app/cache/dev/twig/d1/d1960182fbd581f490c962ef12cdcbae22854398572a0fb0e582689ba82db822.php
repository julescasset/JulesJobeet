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
        $__internal_d3ce9bcbf3bf2ff32a79bbd48778af92dd1d2975fd6c79a536e5c63fadda7cfb = $this->env->getExtension("native_profiler");
        $__internal_d3ce9bcbf3bf2ff32a79bbd48778af92dd1d2975fd6c79a536e5c63fadda7cfb->enter($__internal_d3ce9bcbf3bf2ff32a79bbd48778af92dd1d2975fd6c79a536e5c63fadda7cfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_d3ce9bcbf3bf2ff32a79bbd48778af92dd1d2975fd6c79a536e5c63fadda7cfb->leave($__internal_d3ce9bcbf3bf2ff32a79bbd48778af92dd1d2975fd6c79a536e5c63fadda7cfb_prof);

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
