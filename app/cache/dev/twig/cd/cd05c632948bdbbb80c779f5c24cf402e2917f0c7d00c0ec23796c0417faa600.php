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
        $__internal_d6ce7875b281828f7e97acb36cba1edf80ca99c6d9261d2ff2e14ebc5f9c92c1 = $this->env->getExtension("native_profiler");
        $__internal_d6ce7875b281828f7e97acb36cba1edf80ca99c6d9261d2ff2e14ebc5f9c92c1->enter($__internal_d6ce7875b281828f7e97acb36cba1edf80ca99c6d9261d2ff2e14ebc5f9c92c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_d6ce7875b281828f7e97acb36cba1edf80ca99c6d9261d2ff2e14ebc5f9c92c1->leave($__internal_d6ce7875b281828f7e97acb36cba1edf80ca99c6d9261d2ff2e14ebc5f9c92c1_prof);

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
