<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_575dcde3729995e6f047de29d3602cf388e3096e6ec06841cd46b65d8943a732 extends Twig_Template
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
        $__internal_edabbb68f8738c5b9a955ca6fede19c7f4332b5847e8ae8abaf438f598342b1c = $this->env->getExtension("native_profiler");
        $__internal_edabbb68f8738c5b9a955ca6fede19c7f4332b5847e8ae8abaf438f598342b1c->enter($__internal_edabbb68f8738c5b9a955ca6fede19c7f4332b5847e8ae8abaf438f598342b1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_edabbb68f8738c5b9a955ca6fede19c7f4332b5847e8ae8abaf438f598342b1c->leave($__internal_edabbb68f8738c5b9a955ca6fede19c7f4332b5847e8ae8abaf438f598342b1c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
