<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_cac5718579cda0b19c3a5c01f9e7c630f767be8705a95e434052b0b6286b2ce0 extends Twig_Template
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
        $__internal_0f216df4d84a4ddc0956e7fbe7ac745c61d7e207baf13a202a09b5ba839e1807 = $this->env->getExtension("native_profiler");
        $__internal_0f216df4d84a4ddc0956e7fbe7ac745c61d7e207baf13a202a09b5ba839e1807->enter($__internal_0f216df4d84a4ddc0956e7fbe7ac745c61d7e207baf13a202a09b5ba839e1807_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_0f216df4d84a4ddc0956e7fbe7ac745c61d7e207baf13a202a09b5ba839e1807->leave($__internal_0f216df4d84a4ddc0956e7fbe7ac745c61d7e207baf13a202a09b5ba839e1807_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
