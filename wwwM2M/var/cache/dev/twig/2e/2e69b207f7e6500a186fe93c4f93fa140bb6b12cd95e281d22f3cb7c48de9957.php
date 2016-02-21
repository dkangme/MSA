<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_f3bfc3e67ca95096668a5372c4aa08fe967db238d69d6584948b95e9756d0c86 extends Twig_Template
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
        $__internal_e7b7499ddb53897b040e52c4bcfc73a1cebdd2d0032ad3c29906035e83b3fd26 = $this->env->getExtension("native_profiler");
        $__internal_e7b7499ddb53897b040e52c4bcfc73a1cebdd2d0032ad3c29906035e83b3fd26->enter($__internal_e7b7499ddb53897b040e52c4bcfc73a1cebdd2d0032ad3c29906035e83b3fd26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_e7b7499ddb53897b040e52c4bcfc73a1cebdd2d0032ad3c29906035e83b3fd26->leave($__internal_e7b7499ddb53897b040e52c4bcfc73a1cebdd2d0032ad3c29906035e83b3fd26_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
