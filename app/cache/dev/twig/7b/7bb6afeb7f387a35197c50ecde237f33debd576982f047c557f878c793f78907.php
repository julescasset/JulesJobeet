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
        $__internal_5fdc5250aa93b4ec010ebdd39960af0b87acb07777e3f40065c719fa4f2e6f39 = $this->env->getExtension("native_profiler");
        $__internal_5fdc5250aa93b4ec010ebdd39960af0b87acb07777e3f40065c719fa4f2e6f39->enter($__internal_5fdc5250aa93b4ec010ebdd39960af0b87acb07777e3f40065c719fa4f2e6f39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_5fdc5250aa93b4ec010ebdd39960af0b87acb07777e3f40065c719fa4f2e6f39->leave($__internal_5fdc5250aa93b4ec010ebdd39960af0b87acb07777e3f40065c719fa4f2e6f39_prof);

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
