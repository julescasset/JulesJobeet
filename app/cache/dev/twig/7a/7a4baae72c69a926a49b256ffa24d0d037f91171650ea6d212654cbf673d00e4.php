<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_9c95b9b6c85bdc80e8bb8be14aa4829b8778a32bb243656fb434624ca833bd4c extends Twig_Template
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
        $__internal_71dfc35c543a1f1c3ec37be427cd21af0f4167690a28d85ec476637ec1d6f066 = $this->env->getExtension("native_profiler");
        $__internal_71dfc35c543a1f1c3ec37be427cd21af0f4167690a28d85ec476637ec1d6f066->enter($__internal_71dfc35c543a1f1c3ec37be427cd21af0f4167690a28d85ec476637ec1d6f066_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_71dfc35c543a1f1c3ec37be427cd21af0f4167690a28d85ec476637ec1d6f066->leave($__internal_71dfc35c543a1f1c3ec37be427cd21af0f4167690a28d85ec476637ec1d6f066_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
