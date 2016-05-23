<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_0de66e25f3e67437c496bce651c7e2c4a4e17362b63d661460111aa8e151b8f0 extends Twig_Template
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
        $__internal_2ca855888aa2c279ff3e099b13d06bdd0af404e643522577e011428943c6e08e = $this->env->getExtension("native_profiler");
        $__internal_2ca855888aa2c279ff3e099b13d06bdd0af404e643522577e011428943c6e08e->enter($__internal_2ca855888aa2c279ff3e099b13d06bdd0af404e643522577e011428943c6e08e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_2ca855888aa2c279ff3e099b13d06bdd0af404e643522577e011428943c6e08e->leave($__internal_2ca855888aa2c279ff3e099b13d06bdd0af404e643522577e011428943c6e08e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
