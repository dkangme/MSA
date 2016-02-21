<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_5788a2ca9c7446d03a03c0c96679e76156411a6e944ad9d1f5c17f2fe441a74e extends Twig_Template
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
        $__internal_ea732ecdfec97ccb3f62c97779ed4e6337f51885c2b790190e47f77e7311fc0c = $this->env->getExtension("native_profiler");
        $__internal_ea732ecdfec97ccb3f62c97779ed4e6337f51885c2b790190e47f77e7311fc0c->enter($__internal_ea732ecdfec97ccb3f62c97779ed4e6337f51885c2b790190e47f77e7311fc0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_ea732ecdfec97ccb3f62c97779ed4e6337f51885c2b790190e47f77e7311fc0c->leave($__internal_ea732ecdfec97ccb3f62c97779ed4e6337f51885c2b790190e47f77e7311fc0c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
