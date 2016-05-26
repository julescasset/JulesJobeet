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
        $__internal_5b313189c6ec765d126700c17c472b4d055c22ddc70723d96e7c60ff302b33a1 = $this->env->getExtension("native_profiler");
        $__internal_5b313189c6ec765d126700c17c472b4d055c22ddc70723d96e7c60ff302b33a1->enter($__internal_5b313189c6ec765d126700c17c472b4d055c22ddc70723d96e7c60ff302b33a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_5b313189c6ec765d126700c17c472b4d055c22ddc70723d96e7c60ff302b33a1->leave($__internal_5b313189c6ec765d126700c17c472b4d055c22ddc70723d96e7c60ff302b33a1_prof);

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
