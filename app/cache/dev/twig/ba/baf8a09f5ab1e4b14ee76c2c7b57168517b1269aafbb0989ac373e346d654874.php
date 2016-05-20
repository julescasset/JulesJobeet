<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_b95a0922153d6e158306eddaf4105050d3b0c3c67d9eba76ad7b40ec632e8bc6 extends Twig_Template
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
        $__internal_a2ec91a3d4a0a7b01c9b05364a6d1bc068ebe2f74c269c419158c29ab5776705 = $this->env->getExtension("native_profiler");
        $__internal_a2ec91a3d4a0a7b01c9b05364a6d1bc068ebe2f74c269c419158c29ab5776705->enter($__internal_a2ec91a3d4a0a7b01c9b05364a6d1bc068ebe2f74c269c419158c29ab5776705_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_a2ec91a3d4a0a7b01c9b05364a6d1bc068ebe2f74c269c419158c29ab5776705->leave($__internal_a2ec91a3d4a0a7b01c9b05364a6d1bc068ebe2f74c269c419158c29ab5776705_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
