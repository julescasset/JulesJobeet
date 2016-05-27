<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_a186d5efb42626ec1a6df9e464a72dfc577be6381148660c2708c1fad3515a77 extends Twig_Template
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
        $__internal_834998c0edd24ac996e94671798a55d42bc71d99ec415b9c6a30505d13546532 = $this->env->getExtension("native_profiler");
        $__internal_834998c0edd24ac996e94671798a55d42bc71d99ec415b9c6a30505d13546532->enter($__internal_834998c0edd24ac996e94671798a55d42bc71d99ec415b9c6a30505d13546532_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_834998c0edd24ac996e94671798a55d42bc71d99ec415b9c6a30505d13546532->leave($__internal_834998c0edd24ac996e94671798a55d42bc71d99ec415b9c6a30505d13546532_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
