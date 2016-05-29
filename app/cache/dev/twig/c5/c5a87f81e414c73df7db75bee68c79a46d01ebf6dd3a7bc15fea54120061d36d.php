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
        $__internal_336fc20409d3aba1aaaa5b35d48c5fe5cfbf8cf8c647edcebee16410b6e1d098 = $this->env->getExtension("native_profiler");
        $__internal_336fc20409d3aba1aaaa5b35d48c5fe5cfbf8cf8c647edcebee16410b6e1d098->enter($__internal_336fc20409d3aba1aaaa5b35d48c5fe5cfbf8cf8c647edcebee16410b6e1d098_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_336fc20409d3aba1aaaa5b35d48c5fe5cfbf8cf8c647edcebee16410b6e1d098->leave($__internal_336fc20409d3aba1aaaa5b35d48c5fe5cfbf8cf8c647edcebee16410b6e1d098_prof);

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
