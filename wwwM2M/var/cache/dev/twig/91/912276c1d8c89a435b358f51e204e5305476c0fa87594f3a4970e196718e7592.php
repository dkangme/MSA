<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_f381844ff06708c7223e5ae9361e3ec9810d31677a16874ffb110cc7fdd31704 extends Twig_Template
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
        $__internal_cd7dcfdab80387cac6cb546427b4409257ddf90c09213ed2137009a6c6466ce9 = $this->env->getExtension("native_profiler");
        $__internal_cd7dcfdab80387cac6cb546427b4409257ddf90c09213ed2137009a6c6466ce9->enter($__internal_cd7dcfdab80387cac6cb546427b4409257ddf90c09213ed2137009a6c6466ce9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_cd7dcfdab80387cac6cb546427b4409257ddf90c09213ed2137009a6c6466ce9->leave($__internal_cd7dcfdab80387cac6cb546427b4409257ddf90c09213ed2137009a6c6466ce9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
