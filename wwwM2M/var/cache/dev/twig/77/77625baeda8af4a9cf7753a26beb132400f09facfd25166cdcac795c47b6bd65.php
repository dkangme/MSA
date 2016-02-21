<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_2fb410d1385fefea168509e5c2428c1a38530391e6358486cff92859a6907dfa extends Twig_Template
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
        $__internal_cdc37503d676236fc4184558d7a3bda174dbc4de770a5baf3ae20108e0828cb7 = $this->env->getExtension("native_profiler");
        $__internal_cdc37503d676236fc4184558d7a3bda174dbc4de770a5baf3ae20108e0828cb7->enter($__internal_cdc37503d676236fc4184558d7a3bda174dbc4de770a5baf3ae20108e0828cb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_cdc37503d676236fc4184558d7a3bda174dbc4de770a5baf3ae20108e0828cb7->leave($__internal_cdc37503d676236fc4184558d7a3bda174dbc4de770a5baf3ae20108e0828cb7_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
