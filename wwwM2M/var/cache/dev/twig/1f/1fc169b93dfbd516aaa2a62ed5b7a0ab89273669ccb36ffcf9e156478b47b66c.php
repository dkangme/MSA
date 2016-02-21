<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_a0752d9414b1803e343e5cd3c7d100261f0a39b54dcf1d4aeab18d67aab65700 extends Twig_Template
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
        $__internal_d7bf89b86d8f4bd3716fbdeeab38a3b62e7fd472d0b1dca955658b3b6328efbe = $this->env->getExtension("native_profiler");
        $__internal_d7bf89b86d8f4bd3716fbdeeab38a3b62e7fd472d0b1dca955658b3b6328efbe->enter($__internal_d7bf89b86d8f4bd3716fbdeeab38a3b62e7fd472d0b1dca955658b3b6328efbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_d7bf89b86d8f4bd3716fbdeeab38a3b62e7fd472d0b1dca955658b3b6328efbe->leave($__internal_d7bf89b86d8f4bd3716fbdeeab38a3b62e7fd472d0b1dca955658b3b6328efbe_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
