<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_be86d35df927f2a9c4823e1fe6f0646e54f05465233750c4d7a8d21d332d1bd0 extends Twig_Template
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
        $__internal_a713c95bbd49946a68acfa38aaad2a02ffd920af6d8ab1d3fcb4ca303750b038 = $this->env->getExtension("native_profiler");
        $__internal_a713c95bbd49946a68acfa38aaad2a02ffd920af6d8ab1d3fcb4ca303750b038->enter($__internal_a713c95bbd49946a68acfa38aaad2a02ffd920af6d8ab1d3fcb4ca303750b038_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_a713c95bbd49946a68acfa38aaad2a02ffd920af6d8ab1d3fcb4ca303750b038->leave($__internal_a713c95bbd49946a68acfa38aaad2a02ffd920af6d8ab1d3fcb4ca303750b038_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo $view['form']->start($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* <?php echo $view['form']->end($form) ?>*/
/* */
