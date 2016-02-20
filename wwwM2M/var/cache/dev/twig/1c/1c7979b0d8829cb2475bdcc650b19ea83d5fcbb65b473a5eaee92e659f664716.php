<?php

/* wei/index.html.twig */
class __TwigTemplate_31e02a6a6c71cda6b9d5d23828d06e751d92af079d765f7d4d88666aff180f6a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "wei/index.html.twig", 1);
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
        $__internal_e17a07e4b7606f8772ac70abe68617b5cf57a0f6ccc79f456f70f313a5de8989 = $this->env->getExtension("native_profiler");
        $__internal_e17a07e4b7606f8772ac70abe68617b5cf57a0f6ccc79f456f70f313a5de8989->enter($__internal_e17a07e4b7606f8772ac70abe68617b5cf57a0f6ccc79f456f70f313a5de8989_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "wei/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e17a07e4b7606f8772ac70abe68617b5cf57a0f6ccc79f456f70f313a5de8989->leave($__internal_e17a07e4b7606f8772ac70abe68617b5cf57a0f6ccc79f456f70f313a5de8989_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_70ae2941d1ac70d6872197fea9fb5144eb6846061cfaad5313205ee8de0d8e2a = $this->env->getExtension("native_profiler");
        $__internal_70ae2941d1ac70d6872197fea9fb5144eb6846061cfaad5313205ee8de0d8e2a->enter($__internal_70ae2941d1ac70d6872197fea9fb5144eb6846061cfaad5313205ee8de0d8e2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container\">
        <h1>Wei list</h1>

        <table class=\"table table-striped table-bordered\">
            <thead>
                <tr>
                    <th>Nickname</th>
                    <th>Status</th>
                    <th>Lastreport</th>
                    <th>Imei</th>
                    <th>Description</th>
                    <th>Operator</th>
                    <th>Activationdate</th>
                    <th>Modificationdate</th>
                    <th>Chipnumber</th>
                    <th>Idwei</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["weis"]) ? $context["weis"] : $this->getContext($context, "weis")));
        foreach ($context['_seq'] as $context["_key"] => $context["wei"]) {
            // line 25
            echo "                <tr>
                    <td><a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_wei_show", array("id" => $this->getAttribute($context["wei"], "idwei", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["wei"], "nickname", array()), "html", null, true);
            echo "</a></td>
                    <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["wei"], "status", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 28
            if ($this->getAttribute($context["wei"], "lastreport", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["wei"], "lastreport", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                    <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["wei"], "imei", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["wei"], "description", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["wei"], "operator", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 32
            if ($this->getAttribute($context["wei"], "activationdate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["wei"], "activationdate", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                    <td>";
            // line 33
            if ($this->getAttribute($context["wei"], "modificationdate", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["wei"], "modificationdate", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                    <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["wei"], "chipnumber", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["wei"], "idwei", array()), "html", null, true);
            echo "</td>
                    <td>
                        <ul>
                            <li>
                                <a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_wei_show", array("id" => $this->getAttribute($context["wei"], "idwei", array()))), "html", null, true);
            echo "\">show</a>
                            </li>
                            <li>
                                <a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_wei_edit", array("id" => $this->getAttribute($context["wei"], "idwei", array()))), "html", null, true);
            echo "\">edit</a>
                            </li>
                        </ul>
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['wei'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "            </tbody>
        </table>

        <ul>
            <li>
                <a href=\"";
        // line 53
        echo $this->env->getExtension('routing')->getPath("admin_wei_new");
        echo "\">Create a new entry</a>
            </li>
        </ul>
    </div>
";
        
        $__internal_70ae2941d1ac70d6872197fea9fb5144eb6846061cfaad5313205ee8de0d8e2a->leave($__internal_70ae2941d1ac70d6872197fea9fb5144eb6846061cfaad5313205ee8de0d8e2a_prof);

    }

    public function getTemplateName()
    {
        return "wei/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 53,  138 => 48,  126 => 42,  120 => 39,  113 => 35,  109 => 34,  103 => 33,  97 => 32,  93 => 31,  89 => 30,  85 => 29,  79 => 28,  75 => 27,  69 => 26,  66 => 25,  62 => 24,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <div class="container">*/
/*         <h1>Wei list</h1>*/
/* */
/*         <table class="table table-striped table-bordered">*/
/*             <thead>*/
/*                 <tr>*/
/*                     <th>Nickname</th>*/
/*                     <th>Status</th>*/
/*                     <th>Lastreport</th>*/
/*                     <th>Imei</th>*/
/*                     <th>Description</th>*/
/*                     <th>Operator</th>*/
/*                     <th>Activationdate</th>*/
/*                     <th>Modificationdate</th>*/
/*                     <th>Chipnumber</th>*/
/*                     <th>Idwei</th>*/
/*                     <th>Actions</th>*/
/*                 </tr>*/
/*             </thead>*/
/*             <tbody>*/
/*             {% for wei in weis %}*/
/*                 <tr>*/
/*                     <td><a href="{{ path('admin_wei_show', { 'id': wei.idwei }) }}">{{ wei.nickname }}</a></td>*/
/*                     <td>{{ wei.status }}</td>*/
/*                     <td>{% if wei.lastreport %}{{ wei.lastreport|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                     <td>{{ wei.imei }}</td>*/
/*                     <td>{{ wei.description }}</td>*/
/*                     <td>{{ wei.operator }}</td>*/
/*                     <td>{% if wei.activationdate %}{{ wei.activationdate|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                     <td>{% if wei.modificationdate %}{{ wei.modificationdate|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                     <td>{{ wei.chipnumber }}</td>*/
/*                     <td>{{ wei.idwei }}</td>*/
/*                     <td>*/
/*                         <ul>*/
/*                             <li>*/
/*                                 <a href="{{ path('admin_wei_show', { 'id': wei.idwei }) }}">show</a>*/
/*                             </li>*/
/*                             <li>*/
/*                                 <a href="{{ path('admin_wei_edit', { 'id': wei.idwei }) }}">edit</a>*/
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
/*                 <a href="{{ path('admin_wei_new') }}">Create a new entry</a>*/
/*             </li>*/
/*         </ul>*/
/*     </div>*/
/* {% endblock %}*/
/* */
