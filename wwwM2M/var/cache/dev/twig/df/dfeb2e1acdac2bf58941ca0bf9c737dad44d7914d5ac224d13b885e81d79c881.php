<?php

/* :wei:show.html.twig */
class __TwigTemplate_21f4b92aecfb08b8d84d2758dfa4cefc590613ab98282a295a0c80a526d14685 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":wei:show.html.twig", 1);
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
        $__internal_e9cf58dca0f06eaa629ce803b3db0358f7cce7ec3927a4b522b4c97247070a07 = $this->env->getExtension("native_profiler");
        $__internal_e9cf58dca0f06eaa629ce803b3db0358f7cce7ec3927a4b522b4c97247070a07->enter($__internal_e9cf58dca0f06eaa629ce803b3db0358f7cce7ec3927a4b522b4c97247070a07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":wei:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e9cf58dca0f06eaa629ce803b3db0358f7cce7ec3927a4b522b4c97247070a07->leave($__internal_e9cf58dca0f06eaa629ce803b3db0358f7cce7ec3927a4b522b4c97247070a07_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_73ed5a9864b204c5686eda7d1f7efb1cb5d9be93b6b1dddfa2c99acb5b4ed5d6 = $this->env->getExtension("native_profiler");
        $__internal_73ed5a9864b204c5686eda7d1f7efb1cb5d9be93b6b1dddfa2c99acb5b4ed5d6->enter($__internal_73ed5a9864b204c5686eda7d1f7efb1cb5d9be93b6b1dddfa2c99acb5b4ed5d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Wei</h1>

    <table>
        <tbody>
            <tr>
                <th>Nickname</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wei"]) ? $context["wei"] : $this->getContext($context, "wei")), "nickname", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Status</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wei"]) ? $context["wei"] : $this->getContext($context, "wei")), "status", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Lastreport</th>
                <td>";
        // line 18
        if ($this->getAttribute((isset($context["wei"]) ? $context["wei"] : $this->getContext($context, "wei")), "lastreport", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["wei"]) ? $context["wei"] : $this->getContext($context, "wei")), "lastreport", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Imei</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wei"]) ? $context["wei"] : $this->getContext($context, "wei")), "imei", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Description</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wei"]) ? $context["wei"] : $this->getContext($context, "wei")), "description", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Operator</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wei"]) ? $context["wei"] : $this->getContext($context, "wei")), "operator", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Activationdate</th>
                <td>";
        // line 34
        if ($this->getAttribute((isset($context["wei"]) ? $context["wei"] : $this->getContext($context, "wei")), "activationdate", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["wei"]) ? $context["wei"] : $this->getContext($context, "wei")), "activationdate", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Modificationdate</th>
                <td>";
        // line 38
        if ($this->getAttribute((isset($context["wei"]) ? $context["wei"] : $this->getContext($context, "wei")), "modificationdate", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["wei"]) ? $context["wei"] : $this->getContext($context, "wei")), "modificationdate", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Chipnumber</th>
                <td>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wei"]) ? $context["wei"] : $this->getContext($context, "wei")), "chipnumber", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Idwei</th>
                <td>";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wei"]) ? $context["wei"] : $this->getContext($context, "wei")), "idwei", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 53
        echo $this->env->getExtension('routing')->getPath("admin_wei_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_wei_edit", array("id" => $this->getAttribute((isset($context["wei"]) ? $context["wei"] : $this->getContext($context, "wei")), "idwei", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 59
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 61
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_73ed5a9864b204c5686eda7d1f7efb1cb5d9be93b6b1dddfa2c99acb5b4ed5d6->leave($__internal_73ed5a9864b204c5686eda7d1f7efb1cb5d9be93b6b1dddfa2c99acb5b4ed5d6_prof);

    }

    public function getTemplateName()
    {
        return ":wei:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 61,  139 => 59,  133 => 56,  127 => 53,  117 => 46,  110 => 42,  101 => 38,  92 => 34,  85 => 30,  78 => 26,  71 => 22,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Wei</h1>*/
/* */
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Nickname</th>*/
/*                 <td>{{ wei.nickname }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Status</th>*/
/*                 <td>{{ wei.status }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Lastreport</th>*/
/*                 <td>{% if wei.lastreport %}{{ wei.lastreport|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Imei</th>*/
/*                 <td>{{ wei.imei }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Description</th>*/
/*                 <td>{{ wei.description }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Operator</th>*/
/*                 <td>{{ wei.operator }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Activationdate</th>*/
/*                 <td>{% if wei.activationdate %}{{ wei.activationdate|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Modificationdate</th>*/
/*                 <td>{% if wei.modificationdate %}{{ wei.modificationdate|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Chipnumber</th>*/
/*                 <td>{{ wei.chipnumber }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Idwei</th>*/
/*                 <td>{{ wei.idwei }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('admin_wei_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('admin_wei_edit', { 'id': wei.idwei }) }}">Edit</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
