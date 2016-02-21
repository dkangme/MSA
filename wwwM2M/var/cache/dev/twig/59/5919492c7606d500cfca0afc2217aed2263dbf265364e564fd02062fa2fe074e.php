<?php

/* :sensor:index.html.twig */
class __TwigTemplate_6a5916bc8eee4a70a3fb12e2a0b1d775986bbbc1a6270686e7de71fe49808419 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":sensor:index.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0fb02856984b8a17329b50bad6d4cbf686ae848ed2be7ed0d4ab749b3c59cebe = $this->env->getExtension("native_profiler");
        $__internal_0fb02856984b8a17329b50bad6d4cbf686ae848ed2be7ed0d4ab749b3c59cebe->enter($__internal_0fb02856984b8a17329b50bad6d4cbf686ae848ed2be7ed0d4ab749b3c59cebe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":sensor:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0fb02856984b8a17329b50bad6d4cbf686ae848ed2be7ed0d4ab749b3c59cebe->leave($__internal_0fb02856984b8a17329b50bad6d4cbf686ae848ed2be7ed0d4ab749b3c59cebe_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_55d478f927a876bb71549ecc72ade3d7585c259f5dee09977dbf77db4b81e9fe = $this->env->getExtension("native_profiler");
        $__internal_55d478f927a876bb71549ecc72ade3d7585c259f5dee09977dbf77db4b81e9fe->enter($__internal_55d478f927a876bb71549ecc72ade3d7585c259f5dee09977dbf77db4b81e9fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "<style>

    #g1,
    #g2,
    #g3 {
        width: 200px;
        height: 160px;
        display: inline-block;
        margin: 1em;
    }

</style>

";
        
        $__internal_55d478f927a876bb71549ecc72ade3d7585c259f5dee09977dbf77db4b81e9fe->leave($__internal_55d478f927a876bb71549ecc72ade3d7585c259f5dee09977dbf77db4b81e9fe_prof);

    }

    // line 20
    public function block_body($context, array $blocks = array())
    {
        $__internal_eed587fe593953677486b5fdd7ae68e5762dd05a54d7c207109905653f317faf = $this->env->getExtension("native_profiler");
        $__internal_eed587fe593953677486b5fdd7ae68e5762dd05a54d7c207109905653f317faf->enter($__internal_eed587fe593953677486b5fdd7ae68e5762dd05a54d7c207109905653f317faf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 21
        echo "    <div class=\"container\">
        <h1>Sensor list</h1>

        <table class=\"table table-striped table-bordered\">
            <thead>
                <tr>
                    <th>ModWEI</th>
                    <th>Sensor</th>
                    <th>Human value</th>
                    <th>Gauge</th>
                    <th>Lastreport</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sensors"]) ? $context["sensors"] : $this->getContext($context, "sensors")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["sensor"]) {
            // line 37
            echo "                <tr>
                    <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["sensor"], "weiwei", array()), "nickName", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["sensor"], "sensortypesensortype", array()), "description", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["sensor"], "humanvalue", array()), "html", null, true);
            echo "</td>
                    <td><div id=\"g";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "\"></div></td>
                    <td>";
            // line 42
            if ($this->getAttribute($context["sensor"], "lastreport", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["sensor"], "lastreport", array()), "d-m-Y H:i:s"), "html", null, true);
            }
            echo "</td>
                    
                    <td>
                        <ul>
                            <li>
                                <a href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sensor_show", array("id" => $this->getAttribute($context["sensor"], "idsensor", array()))), "html", null, true);
            echo "\">show</a>
                            </li>
                            <li>
                                <a href=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sensor_edit", array("id" => $this->getAttribute($context["sensor"], "idsensor", array()))), "html", null, true);
            echo "\">edit</a>
                            </li>
                        </ul>
                    </td>
                </tr>
            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sensor'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "            </tbody>
        </table>

        <ul>
            <li>
                <a href=\"";
        // line 61
        echo $this->env->getExtension('routing')->getPath("sensor_new");
        echo "\">Create a new entry</a>
            </li>
        </ul>
    </div>
    <script src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/raphael-2.1.4.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/justgage.js"), "html", null, true);
        echo "\"></script>
    <script>
        var ";
        // line 68
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sensors"]) ? $context["sensors"] : $this->getContext($context, "sensors")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["sensor"]) {
            echo " g";
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            if (($this->getAttribute($context["loop"], "last", array()) == true)) {
            } else {
                echo ",";
            }
            echo " ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sensor'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo ";

        document.addEventListener(\"DOMContentLoaded\", function(event) {
       
    
    ";
        // line 73
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sensors"]) ? $context["sensors"] : $this->getContext($context, "sensors")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["sensor"]) {
            // line 74
            echo "            g";
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo " = new JustGage({
                    id: \"g";
            // line 75
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "\",
                    value: ";
            // line 76
            echo twig_escape_filter($this->env, $this->getAttribute($context["sensor"], "humanvalue", array()), "html", null, true);
            echo ",
                    min: ";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["sensor"], "sensortypesensortype", array()), "minValue", array()), "html", null, true);
            echo ",
                    max: ";
            // line 78
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["sensor"], "sensortypesensortype", array()), "maxValue", array()), "html", null, true);
            echo ",
                    title: \"";
            // line 79
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["sensor"], "sensortypesensortype", array()), "description", array()), "html", null, true);
            echo "\",
                    label: \"";
            // line 80
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["sensor"], "sensortypesensortype", array()), "measurement", array()), "html", null, true);
            echo "\"
                });
   ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sensor'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "
});

    </script>

";
        
        $__internal_eed587fe593953677486b5fdd7ae68e5762dd05a54d7c207109905653f317faf->leave($__internal_eed587fe593953677486b5fdd7ae68e5762dd05a54d7c207109905653f317faf_prof);

    }

    // line 90
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_da4f3ed46d39e6d15fa980cff3e9435b40a8bc68b28a1eea29194cd788b29f70 = $this->env->getExtension("native_profiler");
        $__internal_da4f3ed46d39e6d15fa980cff3e9435b40a8bc68b28a1eea29194cd788b29f70->enter($__internal_da4f3ed46d39e6d15fa980cff3e9435b40a8bc68b28a1eea29194cd788b29f70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 91
        echo "
";
        
        $__internal_da4f3ed46d39e6d15fa980cff3e9435b40a8bc68b28a1eea29194cd788b29f70->leave($__internal_da4f3ed46d39e6d15fa980cff3e9435b40a8bc68b28a1eea29194cd788b29f70_prof);

    }

    public function getTemplateName()
    {
        return ":sensor:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  299 => 91,  293 => 90,  281 => 83,  264 => 80,  260 => 79,  256 => 78,  252 => 77,  248 => 76,  244 => 75,  239 => 74,  222 => 73,  180 => 68,  175 => 66,  171 => 65,  164 => 61,  157 => 56,  137 => 50,  131 => 47,  121 => 42,  117 => 41,  113 => 40,  109 => 39,  105 => 38,  102 => 37,  85 => 36,  68 => 21,  62 => 20,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block stylesheets %}*/
/* <style>*/
/* */
/*     #g1,*/
/*     #g2,*/
/*     #g3 {*/
/*         width: 200px;*/
/*         height: 160px;*/
/*         display: inline-block;*/
/*         margin: 1em;*/
/*     }*/
/* */
/* </style>*/
/* */
/* {% endblock stylesheets %}*/
/* */
/* */
/* {% block body %}*/
/*     <div class="container">*/
/*         <h1>Sensor list</h1>*/
/* */
/*         <table class="table table-striped table-bordered">*/
/*             <thead>*/
/*                 <tr>*/
/*                     <th>ModWEI</th>*/
/*                     <th>Sensor</th>*/
/*                     <th>Human value</th>*/
/*                     <th>Gauge</th>*/
/*                     <th>Lastreport</th>*/
/*                     <th>Actions</th>*/
/*                 </tr>*/
/*             </thead>*/
/*             <tbody>*/
/*             {% for sensor in sensors %}*/
/*                 <tr>*/
/*                     <td>{{ sensor.weiwei.nickName }}</td>*/
/*                     <td>{{ sensor.sensortypesensortype.description }}</td>*/
/*                     <td>{{ sensor.humanvalue }}</td>*/
/*                     <td><div id="g{{ loop.index }}"></div></td>*/
/*                     <td>{% if sensor.lastreport %}{{ sensor.lastreport|date('d-m-Y H:i:s') }}{% endif %}</td>*/
/*                     */
/*                     <td>*/
/*                         <ul>*/
/*                             <li>*/
/*                                 <a href="{{ path('sensor_show', { 'id': sensor.idsensor }) }}">show</a>*/
/*                             </li>*/
/*                             <li>*/
/*                                 <a href="{{ path('sensor_edit', { 'id': sensor.idsensor }) }}">edit</a>*/
/*                             </li>*/
/*                         </ul>*/
/*                     </td>*/
/*                 </tr>*/
/*             {% endfor %}*/
/*             </tbody>*/
/*         </table>*/
/* */
/*         <ul>*/
/*             <li>*/
/*                 <a href="{{ path('sensor_new') }}">Create a new entry</a>*/
/*             </li>*/
/*         </ul>*/
/*     </div>*/
/*     <script src="{{ asset('js/raphael-2.1.4.min.js') }}"></script>*/
/*     <script src="{{ asset('js/justgage.js') }}"></script>*/
/*     <script>*/
/*         var {% for sensor in sensors %} g{{ loop.index }}{% if loop.last == true %}{% else %},{% endif %} {% endfor %};*/
/* */
/*         document.addEventListener("DOMContentLoaded", function(event) {*/
/*        */
/*     */
/*     {% for sensor in sensors %}*/
/*             g{{ loop.index }} = new JustGage({*/
/*                     id: "g{{ loop.index }}",*/
/*                     value: {{ sensor.humanvalue }},*/
/*                     min: {{ sensor.sensortypesensortype.minValue }},*/
/*                     max: {{ sensor.sensortypesensortype.maxValue }},*/
/*                     title: "{{ sensor.sensortypesensortype.description }}",*/
/*                     label: "{{ sensor.sensortypesensortype.measurement }}"*/
/*                 });*/
/*    {% endfor %}*/
/* */
/* });*/
/* */
/*     </script>*/
/* */
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/* */
/* {% endblock javascripts %}*/
/* */
