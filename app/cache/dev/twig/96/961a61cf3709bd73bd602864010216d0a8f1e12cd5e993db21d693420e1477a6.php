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
        $__internal_5b0e2325e9dd446dcc866e4d1bb94867c6b51f076cdf524416c71a9c665ab8bf = $this->env->getExtension("native_profiler");
        $__internal_5b0e2325e9dd446dcc866e4d1bb94867c6b51f076cdf524416c71a9c665ab8bf->enter($__internal_5b0e2325e9dd446dcc866e4d1bb94867c6b51f076cdf524416c71a9c665ab8bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_5b0e2325e9dd446dcc866e4d1bb94867c6b51f076cdf524416c71a9c665ab8bf->leave($__internal_5b0e2325e9dd446dcc866e4d1bb94867c6b51f076cdf524416c71a9c665ab8bf_prof);

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
