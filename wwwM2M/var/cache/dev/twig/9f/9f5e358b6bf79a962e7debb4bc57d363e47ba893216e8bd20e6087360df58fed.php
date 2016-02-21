<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_cab562addcbad7a5c53e4eef9af60bf1e24615ab6b8639421bbed0763b4779eb extends Twig_Template
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
        $__internal_c39756d706f00aa21f62acfed8c4b79cd86fb382d58a57992a51493e9209e5a9 = $this->env->getExtension("native_profiler");
        $__internal_c39756d706f00aa21f62acfed8c4b79cd86fb382d58a57992a51493e9209e5a9->enter($__internal_c39756d706f00aa21f62acfed8c4b79cd86fb382d58a57992a51493e9209e5a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_c39756d706f00aa21f62acfed8c4b79cd86fb382d58a57992a51493e9209e5a9->leave($__internal_c39756d706f00aa21f62acfed8c4b79cd86fb382d58a57992a51493e9209e5a9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
