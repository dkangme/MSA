<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_9d0aec90d1c6bf1092d118c8cf0f09ec4a1271a18485c9772f298b014c649de2 extends Twig_Template
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
        $__internal_91387079fcfc4acfaaebf11288563b93aaca7b027faeb55962379e91525e328e = $this->env->getExtension("native_profiler");
        $__internal_91387079fcfc4acfaaebf11288563b93aaca7b027faeb55962379e91525e328e->enter($__internal_91387079fcfc4acfaaebf11288563b93aaca7b027faeb55962379e91525e328e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_91387079fcfc4acfaaebf11288563b93aaca7b027faeb55962379e91525e328e->leave($__internal_91387079fcfc4acfaaebf11288563b93aaca7b027faeb55962379e91525e328e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
