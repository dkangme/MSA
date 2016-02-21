<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_9cf1a7185fc1bfc90b1c0b3a516e9a04423672a2530575dc1520143aff7d935c extends Twig_Template
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
        $__internal_63e7ecf6e2c4ecdf77f92880f6387f5fbd01e815c7a2c6b21bb01ed92ae539b2 = $this->env->getExtension("native_profiler");
        $__internal_63e7ecf6e2c4ecdf77f92880f6387f5fbd01e815c7a2c6b21bb01ed92ae539b2->enter($__internal_63e7ecf6e2c4ecdf77f92880f6387f5fbd01e815c7a2c6b21bb01ed92ae539b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_63e7ecf6e2c4ecdf77f92880f6387f5fbd01e815c7a2c6b21bb01ed92ae539b2->leave($__internal_63e7ecf6e2c4ecdf77f92880f6387f5fbd01e815c7a2c6b21bb01ed92ae539b2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
