<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_750af66cc1945e2420ae4ec684bac5b4992cbabd6c0c21cb71c5191d4e430181 extends Twig_Template
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
        $__internal_931ccb25ebb45025c684752e11d73cc595fab24317f58d40a2538b159c22388d = $this->env->getExtension("native_profiler");
        $__internal_931ccb25ebb45025c684752e11d73cc595fab24317f58d40a2538b159c22388d->enter($__internal_931ccb25ebb45025c684752e11d73cc595fab24317f58d40a2538b159c22388d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_931ccb25ebb45025c684752e11d73cc595fab24317f58d40a2538b159c22388d->leave($__internal_931ccb25ebb45025c684752e11d73cc595fab24317f58d40a2538b159c22388d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
