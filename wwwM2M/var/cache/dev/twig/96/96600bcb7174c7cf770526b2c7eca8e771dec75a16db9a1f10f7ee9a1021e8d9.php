<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_adfbe18d20678aadb0a303b00afc08d346fdceec589f2a1e475c776d371d004f extends Twig_Template
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
        $__internal_a8f7260f743804a18e0188caba8788c784dfb03c1d27f7c843b0bc4bbcd9a4fe = $this->env->getExtension("native_profiler");
        $__internal_a8f7260f743804a18e0188caba8788c784dfb03c1d27f7c843b0bc4bbcd9a4fe->enter($__internal_a8f7260f743804a18e0188caba8788c784dfb03c1d27f7c843b0bc4bbcd9a4fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_a8f7260f743804a18e0188caba8788c784dfb03c1d27f7c843b0bc4bbcd9a4fe->leave($__internal_a8f7260f743804a18e0188caba8788c784dfb03c1d27f7c843b0bc4bbcd9a4fe_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
