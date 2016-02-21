<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_1d8f3acdc95ef490504f802e8456c907746aa9a54bec7fd307ca4e965aba5856 extends Twig_Template
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
        $__internal_ac2cdbd372c42ab206d8786396f4a57e08093f2f25087438dd3962686ece93c4 = $this->env->getExtension("native_profiler");
        $__internal_ac2cdbd372c42ab206d8786396f4a57e08093f2f25087438dd3962686ece93c4->enter($__internal_ac2cdbd372c42ab206d8786396f4a57e08093f2f25087438dd3962686ece93c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_ac2cdbd372c42ab206d8786396f4a57e08093f2f25087438dd3962686ece93c4->leave($__internal_ac2cdbd372c42ab206d8786396f4a57e08093f2f25087438dd3962686ece93c4_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
