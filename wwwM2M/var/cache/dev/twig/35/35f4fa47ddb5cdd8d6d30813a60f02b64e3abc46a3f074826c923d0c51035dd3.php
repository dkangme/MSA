<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_6f240075dfe55e4a65b04eef3720b351955eba97d07dad1d010bdc249f79e2e4 extends Twig_Template
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
        $__internal_c89c06dd1313de57f30ade42bb6bed6b68ea36d564d0d775934e6a273e3f420c = $this->env->getExtension("native_profiler");
        $__internal_c89c06dd1313de57f30ade42bb6bed6b68ea36d564d0d775934e6a273e3f420c->enter($__internal_c89c06dd1313de57f30ade42bb6bed6b68ea36d564d0d775934e6a273e3f420c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_c89c06dd1313de57f30ade42bb6bed6b68ea36d564d0d775934e6a273e3f420c->leave($__internal_c89c06dd1313de57f30ade42bb6bed6b68ea36d564d0d775934e6a273e3f420c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
