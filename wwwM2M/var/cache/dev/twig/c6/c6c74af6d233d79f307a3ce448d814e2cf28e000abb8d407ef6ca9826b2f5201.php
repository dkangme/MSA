<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_5e9e77697f374210e47bf6d5e681804338ad539957d241d64e2f434d6bfa0bc9 extends Twig_Template
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
        $__internal_1e45d9dd0eec85812da9adea2bf9f28688fdf0d4231256fd17f796a7c86db7e6 = $this->env->getExtension("native_profiler");
        $__internal_1e45d9dd0eec85812da9adea2bf9f28688fdf0d4231256fd17f796a7c86db7e6->enter($__internal_1e45d9dd0eec85812da9adea2bf9f28688fdf0d4231256fd17f796a7c86db7e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_1e45d9dd0eec85812da9adea2bf9f28688fdf0d4231256fd17f796a7c86db7e6->leave($__internal_1e45d9dd0eec85812da9adea2bf9f28688fdf0d4231256fd17f796a7c86db7e6_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
