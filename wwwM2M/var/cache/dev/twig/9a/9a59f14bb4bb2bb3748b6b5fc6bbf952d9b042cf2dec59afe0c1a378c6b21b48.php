<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_3b52920c1a2727ceea21c04739cd32d0016d0ca5cbb734191ec90a9b7ea7c3d0 extends Twig_Template
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
        $__internal_895c0c6879d72efe578a78992737ed7ff733e0d62b103ba99487fbab51235f89 = $this->env->getExtension("native_profiler");
        $__internal_895c0c6879d72efe578a78992737ed7ff733e0d62b103ba99487fbab51235f89->enter($__internal_895c0c6879d72efe578a78992737ed7ff733e0d62b103ba99487fbab51235f89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_895c0c6879d72efe578a78992737ed7ff733e0d62b103ba99487fbab51235f89->leave($__internal_895c0c6879d72efe578a78992737ed7ff733e0d62b103ba99487fbab51235f89_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
