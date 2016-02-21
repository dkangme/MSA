<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_537e52f35d663735f8899d2b3f0937175561a4866529e985bbfc85c5923797cc extends Twig_Template
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
        $__internal_40af9086c972624b9329e0864a02b515e229d9775a4bab7a00ff487a91d4d609 = $this->env->getExtension("native_profiler");
        $__internal_40af9086c972624b9329e0864a02b515e229d9775a4bab7a00ff487a91d4d609->enter($__internal_40af9086c972624b9329e0864a02b515e229d9775a4bab7a00ff487a91d4d609_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_40af9086c972624b9329e0864a02b515e229d9775a4bab7a00ff487a91d4d609->leave($__internal_40af9086c972624b9329e0864a02b515e229d9775a4bab7a00ff487a91d4d609_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
