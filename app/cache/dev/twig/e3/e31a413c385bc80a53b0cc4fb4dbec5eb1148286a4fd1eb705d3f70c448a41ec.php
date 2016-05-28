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
        $__internal_597ce9eb3f2664eefa6a6462f9c37bb01fc8cabf84bc55c9f9c3ce9f75570a13 = $this->env->getExtension("native_profiler");
        $__internal_597ce9eb3f2664eefa6a6462f9c37bb01fc8cabf84bc55c9f9c3ce9f75570a13->enter($__internal_597ce9eb3f2664eefa6a6462f9c37bb01fc8cabf84bc55c9f9c3ce9f75570a13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_597ce9eb3f2664eefa6a6462f9c37bb01fc8cabf84bc55c9f9c3ce9f75570a13->leave($__internal_597ce9eb3f2664eefa6a6462f9c37bb01fc8cabf84bc55c9f9c3ce9f75570a13_prof);

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
