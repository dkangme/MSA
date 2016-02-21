<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_ebc3db0be546218ee9a6ad231aab9edc70e472b29a095cfc0600051890a2904a extends Twig_Template
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
        $__internal_9239690b84365d765a996dcb05916f71d7b30e11e07f57d62c56bf22cfe39fcf = $this->env->getExtension("native_profiler");
        $__internal_9239690b84365d765a996dcb05916f71d7b30e11e07f57d62c56bf22cfe39fcf->enter($__internal_9239690b84365d765a996dcb05916f71d7b30e11e07f57d62c56bf22cfe39fcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_9239690b84365d765a996dcb05916f71d7b30e11e07f57d62c56bf22cfe39fcf->leave($__internal_9239690b84365d765a996dcb05916f71d7b30e11e07f57d62c56bf22cfe39fcf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
