<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_d1f988a920ac0c8c7ba434c2726d019a3bcb23954647d91b3eeda9d2ef027461 extends Twig_Template
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
        $__internal_1f12fa7145bb40bdc93e2680fe81509eca3aca25dd7ee945a531ab238785091e = $this->env->getExtension("native_profiler");
        $__internal_1f12fa7145bb40bdc93e2680fe81509eca3aca25dd7ee945a531ab238785091e->enter($__internal_1f12fa7145bb40bdc93e2680fe81509eca3aca25dd7ee945a531ab238785091e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_1f12fa7145bb40bdc93e2680fe81509eca3aca25dd7ee945a531ab238785091e->leave($__internal_1f12fa7145bb40bdc93e2680fe81509eca3aca25dd7ee945a531ab238785091e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
