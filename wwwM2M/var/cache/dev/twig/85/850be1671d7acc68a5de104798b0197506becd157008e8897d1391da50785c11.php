<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_29012211b7196812b2d8139132d783303434f3d87b22adad9b9eb7a801d7be2e extends Twig_Template
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
        $__internal_b759720a471f323150a245bcade3374a7a71a95c080d7bc1aec2275f596d4bf4 = $this->env->getExtension("native_profiler");
        $__internal_b759720a471f323150a245bcade3374a7a71a95c080d7bc1aec2275f596d4bf4->enter($__internal_b759720a471f323150a245bcade3374a7a71a95c080d7bc1aec2275f596d4bf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_b759720a471f323150a245bcade3374a7a71a95c080d7bc1aec2275f596d4bf4->leave($__internal_b759720a471f323150a245bcade3374a7a71a95c080d7bc1aec2275f596d4bf4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
