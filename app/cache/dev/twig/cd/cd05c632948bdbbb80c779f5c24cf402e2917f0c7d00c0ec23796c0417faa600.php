<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_dfdce61bdaf88caaaf8946fd26fd72a1c49a287c51e75baafb8c763c51ba5c8c extends Twig_Template
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
        $__internal_a6bc226679ce5f784c12aafd059102365f17c691ca11cd8fdfb1e343c1ee22e2 = $this->env->getExtension("native_profiler");
        $__internal_a6bc226679ce5f784c12aafd059102365f17c691ca11cd8fdfb1e343c1ee22e2->enter($__internal_a6bc226679ce5f784c12aafd059102365f17c691ca11cd8fdfb1e343c1ee22e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_a6bc226679ce5f784c12aafd059102365f17c691ca11cd8fdfb1e343c1ee22e2->leave($__internal_a6bc226679ce5f784c12aafd059102365f17c691ca11cd8fdfb1e343c1ee22e2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
