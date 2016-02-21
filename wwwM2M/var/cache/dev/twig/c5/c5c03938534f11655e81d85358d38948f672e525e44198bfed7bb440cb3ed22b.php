<?php

/* sensor/list.html.twig */
class __TwigTemplate_ba0a0e7bd38532a046cafff88d1e8cc38ef437aed21a93c6af47dd3f71bdd49d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "sensor/list.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3aebaab5cc116c90628c3b9ad219620b7276010b31d7156e65675fc4c583216e = $this->env->getExtension("native_profiler");
        $__internal_3aebaab5cc116c90628c3b9ad219620b7276010b31d7156e65675fc4c583216e->enter($__internal_3aebaab5cc116c90628c3b9ad219620b7276010b31d7156e65675fc4c583216e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "sensor/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3aebaab5cc116c90628c3b9ad219620b7276010b31d7156e65675fc4c583216e->leave($__internal_3aebaab5cc116c90628c3b9ad219620b7276010b31d7156e65675fc4c583216e_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1da56d4ad22cb2330e79f5f1d81837043450ff765fb65468635f25581fed6473 = $this->env->getExtension("native_profiler");
        $__internal_1da56d4ad22cb2330e79f5f1d81837043450ff765fb65468635f25581fed6473->enter($__internal_1da56d4ad22cb2330e79f5f1d81837043450ff765fb65468635f25581fed6473_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "

";
        
        $__internal_1da56d4ad22cb2330e79f5f1d81837043450ff765fb65468635f25581fed6473->leave($__internal_1da56d4ad22cb2330e79f5f1d81837043450ff765fb65468635f25581fed6473_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_95a2bf553d00ed308601bea71e3a3c48efcf866da61c892b604999f483e8be3f = $this->env->getExtension("native_profiler");
        $__internal_95a2bf553d00ed308601bea71e3a3c48efcf866da61c892b604999f483e8be3f->enter($__internal_95a2bf553d00ed308601bea71e3a3c48efcf866da61c892b604999f483e8be3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    <script type=\"text/javascript\" src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js\"></script>
    <script src=\"https://code.highcharts.com/highcharts.js\"></script>
    <script src=\"https://code.highcharts.com/highcharts-more.js\"></script>
    <script src=\"https://code.highcharts.com/modules/exporting.js\"></script>

    <script type=\"text/javascript\">
        \$(function () {

            ";
        // line 18
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
            // line 19
            echo "
            \$('#container";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "').highcharts({

                chart: {
                    type: 'gauge',
                    plotBackgroundColor: null,
                    plotBackgroundImage: null,
                    plotBorderWidth: 0,
                    plotShadow: false
                },

                title: {
                    text: '";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["sensor"], "sensortypesensortype", array()), "description", array()), "html", null, true);
            echo "'
                },

                pane: {
                    startAngle: -150,
                    endAngle: 150,
                    background: [{
                        backgroundColor: {
                            linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                            stops: [
                                [0, '#FFF'],
                                [1, '#333']
                            ]
                        },
                        borderWidth: 0,
                        outerRadius: '109%'
                    }, {
                        backgroundColor: {
                            linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },
                            stops: [
                                [0, '#333'],
                                [1, '#FFF']
                            ]
                        },
                        borderWidth: 1,
                        outerRadius: '107%'
                    }, {
                        // default background
                    }, {
                        backgroundColor: '#DDD',
                        borderWidth: 0,
                        outerRadius: '105%',
                        innerRadius: '103%'
                    }]
                },

                // the value axis
                yAxis: {
                    min: ";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["sensor"], "sensortypesensortype", array()), "minValue", array()), "html", null, true);
            echo ",
                    max: ";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["sensor"], "sensortypesensortype", array()), "maxValue", array()), "html", null, true);
            echo ",

                    minorTickInterval: 'auto',
                    minorTickWidth: 1,
                    minorTickLength: 10,
                    minorTickPosition: 'inside',
                    minorTickColor: '#666',

                    tickPixelInterval: 30,
                    tickWidth: 2,
                    tickPosition: 'inside',
                    tickLength: 10,
                    tickColor: '#666',
                    labels: {
                        step: 2,
                        rotation: 'auto'
                    },
                    title: {
                        text: '";
            // line 88
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["sensor"], "sensortypesensortype", array()), "measurement", array()), "html", null, true);
            echo "'
                    },
                    plotBands: [{
                        from: 0,
                        to: 120,
                        color: '#55BF3B' // green
                    }, {
                        from: 120,
                        to: 160,
                        color: '#DDDF0D' // yellow
                    }, {
                        from: 160,
                        to: 200,
                        color: '#DF5353' // red
                    }]
                },

                series: [{
                    name: '";
            // line 106
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["sensor"], "sensortypesensortype", array()), "description", array()), "html", null, true);
            echo "',
                    data: [";
            // line 107
            echo twig_escape_filter($this->env, $this->getAttribute($context["sensor"], "humanvalue", array()), "html", null, true);
            echo "],
                    tooltip: {
                        valueSuffix: ' ";
            // line 109
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["sensor"], "sensortypesensortype", array()), "measurement", array()), "html", null, true);
            echo "'
                    }
                }]

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
        // line 115
        echo "

        });
    </script>


    <div id=\"container1\" style=\"min-width: 210px; max-width: 300px; height: 250px; margin: 0 auto\"></div><a href=\"#\">24 horasz</a>
    <div id=\"container2\" style=\"min-width: 210px; max-width: 300px; height: 250px; margin: 0 auto\"></div>
    <div id=\"container3\" style=\"min-width: 210px; max-width: 300px; height: 250px; margin: 0 auto\"></div>


";
        
        $__internal_95a2bf553d00ed308601bea71e3a3c48efcf866da61c892b604999f483e8be3f->leave($__internal_95a2bf553d00ed308601bea71e3a3c48efcf866da61c892b604999f483e8be3f_prof);

    }

    public function getTemplateName()
    {
        return "sensor/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  216 => 115,  196 => 109,  191 => 107,  187 => 106,  166 => 88,  145 => 70,  141 => 69,  100 => 31,  86 => 20,  83 => 19,  66 => 18,  56 => 10,  50 => 9,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block stylesheets %}*/
/* */
/* */
/* {% endblock stylesheets %}*/
/* */
/* */
/* {% block body %}*/
/*     <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>*/
/*     <script src="https://code.highcharts.com/highcharts.js"></script>*/
/*     <script src="https://code.highcharts.com/highcharts-more.js"></script>*/
/*     <script src="https://code.highcharts.com/modules/exporting.js"></script>*/
/* */
/*     <script type="text/javascript">*/
/*         $(function () {*/
/* */
/*             {% for sensor in sensors %}*/
/* */
/*             $('#container{{loop.index}}').highcharts({*/
/* */
/*                 chart: {*/
/*                     type: 'gauge',*/
/*                     plotBackgroundColor: null,*/
/*                     plotBackgroundImage: null,*/
/*                     plotBorderWidth: 0,*/
/*                     plotShadow: false*/
/*                 },*/
/* */
/*                 title: {*/
/*                     text: '{{ sensor.sensortypesensortype.description }}'*/
/*                 },*/
/* */
/*                 pane: {*/
/*                     startAngle: -150,*/
/*                     endAngle: 150,*/
/*                     background: [{*/
/*                         backgroundColor: {*/
/*                             linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },*/
/*                             stops: [*/
/*                                 [0, '#FFF'],*/
/*                                 [1, '#333']*/
/*                             ]*/
/*                         },*/
/*                         borderWidth: 0,*/
/*                         outerRadius: '109%'*/
/*                     }, {*/
/*                         backgroundColor: {*/
/*                             linearGradient: { x1: 0, y1: 0, x2: 0, y2: 1 },*/
/*                             stops: [*/
/*                                 [0, '#333'],*/
/*                                 [1, '#FFF']*/
/*                             ]*/
/*                         },*/
/*                         borderWidth: 1,*/
/*                         outerRadius: '107%'*/
/*                     }, {*/
/*                         // default background*/
/*                     }, {*/
/*                         backgroundColor: '#DDD',*/
/*                         borderWidth: 0,*/
/*                         outerRadius: '105%',*/
/*                         innerRadius: '103%'*/
/*                     }]*/
/*                 },*/
/* */
/*                 // the value axis*/
/*                 yAxis: {*/
/*                     min: {{ sensor.sensortypesensortype.minValue }},*/
/*                     max: {{ sensor.sensortypesensortype.maxValue }},*/
/* */
/*                     minorTickInterval: 'auto',*/
/*                     minorTickWidth: 1,*/
/*                     minorTickLength: 10,*/
/*                     minorTickPosition: 'inside',*/
/*                     minorTickColor: '#666',*/
/* */
/*                     tickPixelInterval: 30,*/
/*                     tickWidth: 2,*/
/*                     tickPosition: 'inside',*/
/*                     tickLength: 10,*/
/*                     tickColor: '#666',*/
/*                     labels: {*/
/*                         step: 2,*/
/*                         rotation: 'auto'*/
/*                     },*/
/*                     title: {*/
/*                         text: '{{ sensor.sensortypesensortype.measurement }}'*/
/*                     },*/
/*                     plotBands: [{*/
/*                         from: 0,*/
/*                         to: 120,*/
/*                         color: '#55BF3B' // green*/
/*                     }, {*/
/*                         from: 120,*/
/*                         to: 160,*/
/*                         color: '#DDDF0D' // yellow*/
/*                     }, {*/
/*                         from: 160,*/
/*                         to: 200,*/
/*                         color: '#DF5353' // red*/
/*                     }]*/
/*                 },*/
/* */
/*                 series: [{*/
/*                     name: '{{ sensor.sensortypesensortype.description }}',*/
/*                     data: [{{ sensor.humanvalue }}],*/
/*                     tooltip: {*/
/*                         valueSuffix: ' {{ sensor.sensortypesensortype.measurement }}'*/
/*                     }*/
/*                 }]*/
/* */
/*             });*/
/*             {% endfor %}*/
/* */
/* */
/*         });*/
/*     </script>*/
/* */
/* */
/*     <div id="container1" style="min-width: 210px; max-width: 300px; height: 250px; margin: 0 auto"></div><a href="#">24 horasz</a>*/
/*     <div id="container2" style="min-width: 210px; max-width: 300px; height: 250px; margin: 0 auto"></div>*/
/*     <div id="container3" style="min-width: 210px; max-width: 300px; height: 250px; margin: 0 auto"></div>*/
/* */
/* */
/* {% endblock %}*/
/* */
