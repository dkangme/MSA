<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_6e111dbb08817fd771b865b026478b0011f6c89b65c7441adaa3372949b73561 extends Twig_Template
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
        $__internal_47419cdafdb222609c3af52680c106865b4b4098b70ff0ed802955eca092b8ab = $this->env->getExtension("native_profiler");
        $__internal_47419cdafdb222609c3af52680c106865b4b4098b70ff0ed802955eca092b8ab->enter($__internal_47419cdafdb222609c3af52680c106865b4b4098b70ff0ed802955eca092b8ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_47419cdafdb222609c3af52680c106865b4b4098b70ff0ed802955eca092b8ab->leave($__internal_47419cdafdb222609c3af52680c106865b4b4098b70ff0ed802955eca092b8ab_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
