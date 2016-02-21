<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_d6d72a34a4c81a74fa12252c7366accba1667da864212c4a7d5454c0d5f81a8f extends Twig_Template
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
        $__internal_132f2695dccb2f200a7eda2bd748ea9f29bf59e017bbf8319bda0019f1377903 = $this->env->getExtension("native_profiler");
        $__internal_132f2695dccb2f200a7eda2bd748ea9f29bf59e017bbf8319bda0019f1377903->enter($__internal_132f2695dccb2f200a7eda2bd748ea9f29bf59e017bbf8319bda0019f1377903_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_132f2695dccb2f200a7eda2bd748ea9f29bf59e017bbf8319bda0019f1377903->leave($__internal_132f2695dccb2f200a7eda2bd748ea9f29bf59e017bbf8319bda0019f1377903_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
