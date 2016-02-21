<?php

/* :sensor:new.html.twig */
class __TwigTemplate_9d79ab8d96067a6f9fc86834a7f64177d334896674f6692af6d7494da2ea60df extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":sensor:new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1088b0b07890ddaa32e140486341fa13fb1ca984fcd0fc3a6ccd582e7f9dbbac = $this->env->getExtension("native_profiler");
        $__internal_1088b0b07890ddaa32e140486341fa13fb1ca984fcd0fc3a6ccd582e7f9dbbac->enter($__internal_1088b0b07890ddaa32e140486341fa13fb1ca984fcd0fc3a6ccd582e7f9dbbac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":sensor:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1088b0b07890ddaa32e140486341fa13fb1ca984fcd0fc3a6ccd582e7f9dbbac->leave($__internal_1088b0b07890ddaa32e140486341fa13fb1ca984fcd0fc3a6ccd582e7f9dbbac_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a209d08fd11f8f602c76cf214308f6a80f4d473bd22ea0cecf41f020dd16f7ea = $this->env->getExtension("native_profiler");
        $__internal_a209d08fd11f8f602c76cf214308f6a80f4d473bd22ea0cecf41f020dd16f7ea->enter($__internal_a209d08fd11f8f602c76cf214308f6a80f4d473bd22ea0cecf41f020dd16f7ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Sensor creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("sensor_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_a209d08fd11f8f602c76cf214308f6a80f4d473bd22ea0cecf41f020dd16f7ea->leave($__internal_a209d08fd11f8f602c76cf214308f6a80f4d473bd22ea0cecf41f020dd16f7ea_prof);

    }

    public function getTemplateName()
    {
        return ":sensor:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Sensor creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('sensor_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
