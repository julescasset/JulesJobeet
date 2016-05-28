<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_04f26b9c7ab976fe397632a75eee003d892de0934f32bf2c9647578b753573af extends Twig_Template
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
        $__internal_c2434db549a09a17f7b50964ea74534ecdfe2fb9f301fc15a81bf817c0dda4cb = $this->env->getExtension("native_profiler");
        $__internal_c2434db549a09a17f7b50964ea74534ecdfe2fb9f301fc15a81bf817c0dda4cb->enter($__internal_c2434db549a09a17f7b50964ea74534ecdfe2fb9f301fc15a81bf817c0dda4cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_c2434db549a09a17f7b50964ea74534ecdfe2fb9f301fc15a81bf817c0dda4cb->leave($__internal_c2434db549a09a17f7b50964ea74534ecdfe2fb9f301fc15a81bf817c0dda4cb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
