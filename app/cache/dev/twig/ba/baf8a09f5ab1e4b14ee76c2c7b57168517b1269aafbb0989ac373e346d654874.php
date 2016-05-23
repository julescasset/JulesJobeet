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
        $__internal_5b36df2f6e53fc6cf488c3d5875d44f1182e639133cd2abba10143daa97f8ee6 = $this->env->getExtension("native_profiler");
        $__internal_5b36df2f6e53fc6cf488c3d5875d44f1182e639133cd2abba10143daa97f8ee6->enter($__internal_5b36df2f6e53fc6cf488c3d5875d44f1182e639133cd2abba10143daa97f8ee6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_5b36df2f6e53fc6cf488c3d5875d44f1182e639133cd2abba10143daa97f8ee6->leave($__internal_5b36df2f6e53fc6cf488c3d5875d44f1182e639133cd2abba10143daa97f8ee6_prof);

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
