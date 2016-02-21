<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_3be767d73c3136595376a6b45f32c62d63cdaea4ca6a6a645ef1fc3e89bcd72a extends Twig_Template
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
        $__internal_8230f1958da87bc1f1cc1f704bfd7bce04642eae2ce4c01ff7c7700424d5d37b = $this->env->getExtension("native_profiler");
        $__internal_8230f1958da87bc1f1cc1f704bfd7bce04642eae2ce4c01ff7c7700424d5d37b->enter($__internal_8230f1958da87bc1f1cc1f704bfd7bce04642eae2ce4c01ff7c7700424d5d37b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_8230f1958da87bc1f1cc1f704bfd7bce04642eae2ce4c01ff7c7700424d5d37b->leave($__internal_8230f1958da87bc1f1cc1f704bfd7bce04642eae2ce4c01ff7c7700424d5d37b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
