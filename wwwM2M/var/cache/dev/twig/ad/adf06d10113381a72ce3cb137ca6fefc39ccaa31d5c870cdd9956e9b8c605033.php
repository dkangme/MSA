<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_9c60776b0c0dfb20aa7bed08b6df8bbd26c103ba4ea231afc9307e9e180a6712 extends Twig_Template
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
        $__internal_447fdc3b1273c4cdfc9a46ab8bdfc6b6a0f14410a37b1789b432194ed3ffd910 = $this->env->getExtension("native_profiler");
        $__internal_447fdc3b1273c4cdfc9a46ab8bdfc6b6a0f14410a37b1789b432194ed3ffd910->enter($__internal_447fdc3b1273c4cdfc9a46ab8bdfc6b6a0f14410a37b1789b432194ed3ffd910_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_447fdc3b1273c4cdfc9a46ab8bdfc6b6a0f14410a37b1789b432194ed3ffd910->leave($__internal_447fdc3b1273c4cdfc9a46ab8bdfc6b6a0f14410a37b1789b432194ed3ffd910_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
