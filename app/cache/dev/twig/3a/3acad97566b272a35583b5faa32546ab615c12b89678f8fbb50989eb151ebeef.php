<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_9c1e2cca5ad66f465569e1cbe84eb7e949cad6d8bcf33e7c30be007076819cee extends Twig_Template
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
        $__internal_c6e55145488626a39a3ba7cb040f77d320e3c67015e0e741cff937c2d9f6f595 = $this->env->getExtension("native_profiler");
        $__internal_c6e55145488626a39a3ba7cb040f77d320e3c67015e0e741cff937c2d9f6f595->enter($__internal_c6e55145488626a39a3ba7cb040f77d320e3c67015e0e741cff937c2d9f6f595_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_c6e55145488626a39a3ba7cb040f77d320e3c67015e0e741cff937c2d9f6f595->leave($__internal_c6e55145488626a39a3ba7cb040f77d320e3c67015e0e741cff937c2d9f6f595_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
