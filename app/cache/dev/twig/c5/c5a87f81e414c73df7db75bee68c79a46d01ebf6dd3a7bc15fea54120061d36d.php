<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_3128aa6bd12629d5a87214db3de75482c6156449da0c8d3b3ce3cf132e5696a2 extends Twig_Template
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
        $__internal_4026b2ae77cda40c6b1cf57e7ff9679b4da9d68f815468fd2661cf89a8096171 = $this->env->getExtension("native_profiler");
        $__internal_4026b2ae77cda40c6b1cf57e7ff9679b4da9d68f815468fd2661cf89a8096171->enter($__internal_4026b2ae77cda40c6b1cf57e7ff9679b4da9d68f815468fd2661cf89a8096171_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_4026b2ae77cda40c6b1cf57e7ff9679b4da9d68f815468fd2661cf89a8096171->leave($__internal_4026b2ae77cda40c6b1cf57e7ff9679b4da9d68f815468fd2661cf89a8096171_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
