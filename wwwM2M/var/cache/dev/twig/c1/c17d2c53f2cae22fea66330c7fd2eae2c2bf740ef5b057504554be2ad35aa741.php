<?php

/* default/index.html.twig */
class __TwigTemplate_9191f94b1a0a741efec44c99d39235b8409064cabc774b8fb3d912ceb4303e32 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_66a04a63d929cb518af86830c2d6d713bef5343cefa9baad753af307ef9fc0d1 = $this->env->getExtension("native_profiler");
        $__internal_66a04a63d929cb518af86830c2d6d713bef5343cefa9baad753af307ef9fc0d1->enter($__internal_66a04a63d929cb518af86830c2d6d713bef5343cefa9baad753af307ef9fc0d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_66a04a63d929cb518af86830c2d6d713bef5343cefa9baad753af307ef9fc0d1->leave($__internal_66a04a63d929cb518af86830c2d6d713bef5343cefa9baad753af307ef9fc0d1_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_cb25c8b732fb0306a74c0817977cc33e44944aeb54c0c95a198a65bc5f069a44 = $this->env->getExtension("native_profiler");
        $__internal_cb25c8b732fb0306a74c0817977cc33e44944aeb54c0c95a198a65bc5f069a44->enter($__internal_cb25c8b732fb0306a74c0817977cc33e44944aeb54c0c95a198a65bc5f069a44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"container\">
    <h1>MSA Safety Chile</h1>
</div>    
";
        
        $__internal_cb25c8b732fb0306a74c0817977cc33e44944aeb54c0c95a198a65bc5f069a44->leave($__internal_cb25c8b732fb0306a74c0817977cc33e44944aeb54c0c95a198a65bc5f069a44_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_29c516defdd677d5eb5c9a95c964240764640252320573797c6eab861d883358 = $this->env->getExtension("native_profiler");
        $__internal_29c516defdd677d5eb5c9a95c964240764640252320573797c6eab861d883358->enter($__internal_29c516defdd677d5eb5c9a95c964240764640252320573797c6eab861d883358_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "
";
        
        $__internal_29c516defdd677d5eb5c9a95c964240764640252320573797c6eab861d883358->leave($__internal_29c516defdd677d5eb5c9a95c964240764640252320573797c6eab861d883358_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 10,  51 => 9,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/* <div class="container">*/
/*     <h1>MSA Safety Chile</h1>*/
/* </div>    */
/* {% endblock %}*/
/* */
/* {% block stylesheets %}*/
/* */
/* {% endblock %}*/
/* */
