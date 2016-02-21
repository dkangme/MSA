<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_b4bf85e8cdd7021415b18a2672b4887b778bf0bfc461a3c8af8c618189192c92 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_238141e2b0430e2c6d652ff2cddece6cc713c3b0119e929ddd7efa4eb9b73f11 = $this->env->getExtension("native_profiler");
        $__internal_238141e2b0430e2c6d652ff2cddece6cc713c3b0119e929ddd7efa4eb9b73f11->enter($__internal_238141e2b0430e2c6d652ff2cddece6cc713c3b0119e929ddd7efa4eb9b73f11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_238141e2b0430e2c6d652ff2cddece6cc713c3b0119e929ddd7efa4eb9b73f11->leave($__internal_238141e2b0430e2c6d652ff2cddece6cc713c3b0119e929ddd7efa4eb9b73f11_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_b67399bec4a77d8c9860d3a6fceb17e7717bc1248522248de3b102865a74bbb3 = $this->env->getExtension("native_profiler");
        $__internal_b67399bec4a77d8c9860d3a6fceb17e7717bc1248522248de3b102865a74bbb3->enter($__internal_b67399bec4a77d8c9860d3a6fceb17e7717bc1248522248de3b102865a74bbb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_b67399bec4a77d8c9860d3a6fceb17e7717bc1248522248de3b102865a74bbb3->leave($__internal_b67399bec4a77d8c9860d3a6fceb17e7717bc1248522248de3b102865a74bbb3_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
