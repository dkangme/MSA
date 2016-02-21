<?php

/* :sensor:show.html.twig */
class __TwigTemplate_2de1569e331d6e232e36e4a40d60292c3ca256741ddb7035e9a71c78cf50ebda extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":sensor:show.html.twig", 1);
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
        $__internal_dafc166fdd0d8d33da21b43385725b1cdd5e0f0b1204302ef766d0f97f6e5da9 = $this->env->getExtension("native_profiler");
        $__internal_dafc166fdd0d8d33da21b43385725b1cdd5e0f0b1204302ef766d0f97f6e5da9->enter($__internal_dafc166fdd0d8d33da21b43385725b1cdd5e0f0b1204302ef766d0f97f6e5da9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":sensor:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dafc166fdd0d8d33da21b43385725b1cdd5e0f0b1204302ef766d0f97f6e5da9->leave($__internal_dafc166fdd0d8d33da21b43385725b1cdd5e0f0b1204302ef766d0f97f6e5da9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_aa1a50c271491f488bb056adc5c250c1533363995fdc7a032d537475472709fa = $this->env->getExtension("native_profiler");
        $__internal_aa1a50c271491f488bb056adc5c250c1533363995fdc7a032d537475472709fa->enter($__internal_aa1a50c271491f488bb056adc5c250c1533363995fdc7a032d537475472709fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Sensor</h1>

    <table>
        <tbody>
            <tr>
                <th>Humanvalue</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sensor"]) ? $context["sensor"] : $this->getContext($context, "sensor")), "humanvalue", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Value</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sensor"]) ? $context["sensor"] : $this->getContext($context, "sensor")), "value", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Lastreport</th>
                <td>";
        // line 18
        if ($this->getAttribute((isset($context["sensor"]) ? $context["sensor"] : $this->getContext($context, "sensor")), "lastreport", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["sensor"]) ? $context["sensor"] : $this->getContext($context, "sensor")), "lastreport", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Idsensor</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sensor"]) ? $context["sensor"] : $this->getContext($context, "sensor")), "idsensor", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("sensor_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sensor_edit", array("id" => $this->getAttribute((isset($context["sensor"]) ? $context["sensor"] : $this->getContext($context, "sensor")), "idsensor", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 35
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 37
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_aa1a50c271491f488bb056adc5c250c1533363995fdc7a032d537475472709fa->leave($__internal_aa1a50c271491f488bb056adc5c250c1533363995fdc7a032d537475472709fa_prof);

    }

    public function getTemplateName()
    {
        return ":sensor:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 37,  93 => 35,  87 => 32,  81 => 29,  71 => 22,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Sensor</h1>*/
/* */
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Humanvalue</th>*/
/*                 <td>{{ sensor.humanvalue }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Value</th>*/
/*                 <td>{{ sensor.value }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Lastreport</th>*/
/*                 <td>{% if sensor.lastreport %}{{ sensor.lastreport|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Idsensor</th>*/
/*                 <td>{{ sensor.idsensor }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('sensor_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('sensor_edit', { 'id': sensor.idsensor }) }}">Edit</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
