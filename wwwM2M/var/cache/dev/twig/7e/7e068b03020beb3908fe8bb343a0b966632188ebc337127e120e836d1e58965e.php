<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_53036bc8fd16c68ffe9448dfb2fdc787b137ba598d70ed7f8c1568e673e12565 extends Twig_Template
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
        $__internal_ad5dee7371331e7cbec47cc9574db7990fdf8a1e15a15a32fec3c015ee25952e = $this->env->getExtension("native_profiler");
        $__internal_ad5dee7371331e7cbec47cc9574db7990fdf8a1e15a15a32fec3c015ee25952e->enter($__internal_ad5dee7371331e7cbec47cc9574db7990fdf8a1e15a15a32fec3c015ee25952e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_ad5dee7371331e7cbec47cc9574db7990fdf8a1e15a15a32fec3c015ee25952e->leave($__internal_ad5dee7371331e7cbec47cc9574db7990fdf8a1e15a15a32fec3c015ee25952e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
