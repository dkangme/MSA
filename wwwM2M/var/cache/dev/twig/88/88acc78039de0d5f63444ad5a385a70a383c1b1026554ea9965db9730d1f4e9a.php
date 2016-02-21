<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_4d7a51544ca260d0bb332e259cb240a3369dca8ef48069d27f376faa89be65c1 extends Twig_Template
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
        $__internal_85f120c4806ba11076b25a82bc41fdfd9542dad92da6547f521110e7f64704e2 = $this->env->getExtension("native_profiler");
        $__internal_85f120c4806ba11076b25a82bc41fdfd9542dad92da6547f521110e7f64704e2->enter($__internal_85f120c4806ba11076b25a82bc41fdfd9542dad92da6547f521110e7f64704e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_85f120c4806ba11076b25a82bc41fdfd9542dad92da6547f521110e7f64704e2->leave($__internal_85f120c4806ba11076b25a82bc41fdfd9542dad92da6547f521110e7f64704e2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
