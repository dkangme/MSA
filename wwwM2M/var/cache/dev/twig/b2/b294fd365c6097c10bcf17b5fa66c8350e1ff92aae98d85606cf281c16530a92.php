<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_0bd723759048803470c469e7c47ef25c0b47af3f7e85e1b3d7ad2c7451ec6026 extends Twig_Template
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
        $__internal_63e66b3f3275564433805c53f2e3871a84129e14785d6ddc2445495f511b7f8c = $this->env->getExtension("native_profiler");
        $__internal_63e66b3f3275564433805c53f2e3871a84129e14785d6ddc2445495f511b7f8c->enter($__internal_63e66b3f3275564433805c53f2e3871a84129e14785d6ddc2445495f511b7f8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_63e66b3f3275564433805c53f2e3871a84129e14785d6ddc2445495f511b7f8c->leave($__internal_63e66b3f3275564433805c53f2e3871a84129e14785d6ddc2445495f511b7f8c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
