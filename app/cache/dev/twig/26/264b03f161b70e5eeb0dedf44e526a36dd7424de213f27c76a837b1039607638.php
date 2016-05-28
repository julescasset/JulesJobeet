<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_dd7210416c4fda8579408c865c57908954e91779c490675ca5d4d56674bfb338 extends Twig_Template
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
        $__internal_2a4d06a99434bf0bc3df2caff6c970db0ef3880099019c74e9e28ddd7727e360 = $this->env->getExtension("native_profiler");
        $__internal_2a4d06a99434bf0bc3df2caff6c970db0ef3880099019c74e9e28ddd7727e360->enter($__internal_2a4d06a99434bf0bc3df2caff6c970db0ef3880099019c74e9e28ddd7727e360_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_2a4d06a99434bf0bc3df2caff6c970db0ef3880099019c74e9e28ddd7727e360->leave($__internal_2a4d06a99434bf0bc3df2caff6c970db0ef3880099019c74e9e28ddd7727e360_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
