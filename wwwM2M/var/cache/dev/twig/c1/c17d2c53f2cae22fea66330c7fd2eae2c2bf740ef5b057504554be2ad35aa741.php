<?php

/* :default:index.html.twig */
class __TwigTemplate_9191f94b1a0a741efec44c99d39235b8409064cabc774b8fb3d912ceb4303e32 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":default:index.html.twig", 1);
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
        $__internal_bbc91cadc34b03851e67f77e782b723f095a54486bd0190a57584c32f8397911 = $this->env->getExtension("native_profiler");
        $__internal_bbc91cadc34b03851e67f77e782b723f095a54486bd0190a57584c32f8397911->enter($__internal_bbc91cadc34b03851e67f77e782b723f095a54486bd0190a57584c32f8397911_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bbc91cadc34b03851e67f77e782b723f095a54486bd0190a57584c32f8397911->leave($__internal_bbc91cadc34b03851e67f77e782b723f095a54486bd0190a57584c32f8397911_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b5d4485b1f033ec3fd0c2e2f97ae5afe7fca3136ff1e2f51655557732caa7119 = $this->env->getExtension("native_profiler");
        $__internal_b5d4485b1f033ec3fd0c2e2f97ae5afe7fca3136ff1e2f51655557732caa7119->enter($__internal_b5d4485b1f033ec3fd0c2e2f97ae5afe7fca3136ff1e2f51655557732caa7119_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"container\">
    <h1>MSA Safety Chile</h1>
</div>    
";
        
        $__internal_b5d4485b1f033ec3fd0c2e2f97ae5afe7fca3136ff1e2f51655557732caa7119->leave($__internal_b5d4485b1f033ec3fd0c2e2f97ae5afe7fca3136ff1e2f51655557732caa7119_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_34ddd09c3933efddeb03f6d4c9fce9cad00089f881911a3609ea0b131695dac1 = $this->env->getExtension("native_profiler");
        $__internal_34ddd09c3933efddeb03f6d4c9fce9cad00089f881911a3609ea0b131695dac1->enter($__internal_34ddd09c3933efddeb03f6d4c9fce9cad00089f881911a3609ea0b131695dac1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "
";
        
        $__internal_34ddd09c3933efddeb03f6d4c9fce9cad00089f881911a3609ea0b131695dac1->leave($__internal_34ddd09c3933efddeb03f6d4c9fce9cad00089f881911a3609ea0b131695dac1_prof);

    }

    public function getTemplateName()
    {
        return ":default:index.html.twig";
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
