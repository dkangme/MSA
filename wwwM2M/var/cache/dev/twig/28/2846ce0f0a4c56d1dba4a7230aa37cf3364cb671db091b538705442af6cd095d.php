<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_1a5152dd7e3cb82dbafa8f98399a15d240c80e33ef363bbddbdc266e0944a0d0 extends Twig_Template
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
        $__internal_f1a4b95edde65632a78eaebb9c0821cbc447f997002ffd0df15915dd71bb027e = $this->env->getExtension("native_profiler");
        $__internal_f1a4b95edde65632a78eaebb9c0821cbc447f997002ffd0df15915dd71bb027e->enter($__internal_f1a4b95edde65632a78eaebb9c0821cbc447f997002ffd0df15915dd71bb027e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_f1a4b95edde65632a78eaebb9c0821cbc447f997002ffd0df15915dd71bb027e->leave($__internal_f1a4b95edde65632a78eaebb9c0821cbc447f997002ffd0df15915dd71bb027e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
