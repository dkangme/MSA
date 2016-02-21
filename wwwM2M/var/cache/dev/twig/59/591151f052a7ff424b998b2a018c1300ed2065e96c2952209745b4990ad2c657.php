<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_01a371a1914ecbb4c997841f4cb84b7f2987c8411f1ace499d2d4d3104d7d3d5 extends Twig_Template
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
        $__internal_41f1308e99675faab6aaea1d0f8722ca6fcc6b7b699749f59c87465dafce1b78 = $this->env->getExtension("native_profiler");
        $__internal_41f1308e99675faab6aaea1d0f8722ca6fcc6b7b699749f59c87465dafce1b78->enter($__internal_41f1308e99675faab6aaea1d0f8722ca6fcc6b7b699749f59c87465dafce1b78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_41f1308e99675faab6aaea1d0f8722ca6fcc6b7b699749f59c87465dafce1b78->leave($__internal_41f1308e99675faab6aaea1d0f8722ca6fcc6b7b699749f59c87465dafce1b78_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
