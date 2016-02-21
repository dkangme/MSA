<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_5d9cc048ab007d301d2a9088209befbf4df7af11fa17727c4388d292f8ffe8e9 extends Twig_Template
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
        $__internal_2ef4e99eb5d6e4b3976b8187915556358be0eb95499010bbb8f16e6609596f97 = $this->env->getExtension("native_profiler");
        $__internal_2ef4e99eb5d6e4b3976b8187915556358be0eb95499010bbb8f16e6609596f97->enter($__internal_2ef4e99eb5d6e4b3976b8187915556358be0eb95499010bbb8f16e6609596f97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_2ef4e99eb5d6e4b3976b8187915556358be0eb95499010bbb8f16e6609596f97->leave($__internal_2ef4e99eb5d6e4b3976b8187915556358be0eb95499010bbb8f16e6609596f97_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
