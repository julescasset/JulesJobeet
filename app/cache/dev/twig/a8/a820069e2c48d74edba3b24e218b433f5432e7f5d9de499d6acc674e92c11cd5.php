<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_14338fe5de81939ac219b0588a2d9b72fba6bd77f0d5cf75bb6dd8ea04d66419 extends Twig_Template
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
        $__internal_61161902d2b8fbba3244ed01d12c9087e3881b69b56023139c317ffd72782ae8 = $this->env->getExtension("native_profiler");
        $__internal_61161902d2b8fbba3244ed01d12c9087e3881b69b56023139c317ffd72782ae8->enter($__internal_61161902d2b8fbba3244ed01d12c9087e3881b69b56023139c317ffd72782ae8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_61161902d2b8fbba3244ed01d12c9087e3881b69b56023139c317ffd72782ae8->leave($__internal_61161902d2b8fbba3244ed01d12c9087e3881b69b56023139c317ffd72782ae8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
