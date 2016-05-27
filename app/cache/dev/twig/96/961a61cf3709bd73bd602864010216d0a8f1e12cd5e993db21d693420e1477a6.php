<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_41696909e06a233b01e4cdcfc9f8e5eda542bcb5cdc12234b79e70245ada0ba7 extends Twig_Template
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
        $__internal_52adf2a35aeb4af9465b960c31b719bd949070ce111d21936985e915ba2f6a2a = $this->env->getExtension("native_profiler");
        $__internal_52adf2a35aeb4af9465b960c31b719bd949070ce111d21936985e915ba2f6a2a->enter($__internal_52adf2a35aeb4af9465b960c31b719bd949070ce111d21936985e915ba2f6a2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_52adf2a35aeb4af9465b960c31b719bd949070ce111d21936985e915ba2f6a2a->leave($__internal_52adf2a35aeb4af9465b960c31b719bd949070ce111d21936985e915ba2f6a2a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
