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
        $__internal_35a1171f5d30369e0fca6879c300e33daf6d7bc93ece86d836df5bc6f97c5717 = $this->env->getExtension("native_profiler");
        $__internal_35a1171f5d30369e0fca6879c300e33daf6d7bc93ece86d836df5bc6f97c5717->enter($__internal_35a1171f5d30369e0fca6879c300e33daf6d7bc93ece86d836df5bc6f97c5717_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_35a1171f5d30369e0fca6879c300e33daf6d7bc93ece86d836df5bc6f97c5717->leave($__internal_35a1171f5d30369e0fca6879c300e33daf6d7bc93ece86d836df5bc6f97c5717_prof);

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
