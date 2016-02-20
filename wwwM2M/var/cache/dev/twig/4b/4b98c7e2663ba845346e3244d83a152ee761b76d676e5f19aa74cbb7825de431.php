<?php

/* pais/show.html.twig */
class __TwigTemplate_65c43b781ae4572ea9ed8c2d9207797dde1f572e3fa73345d2f652355b862477 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "pais/show.html.twig", 1);
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
        $__internal_934875cfb93aca24dfd93f287bf786a325c7f97a43780ad01d8e3a6852bcf673 = $this->env->getExtension("native_profiler");
        $__internal_934875cfb93aca24dfd93f287bf786a325c7f97a43780ad01d8e3a6852bcf673->enter($__internal_934875cfb93aca24dfd93f287bf786a325c7f97a43780ad01d8e3a6852bcf673_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pais/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_934875cfb93aca24dfd93f287bf786a325c7f97a43780ad01d8e3a6852bcf673->leave($__internal_934875cfb93aca24dfd93f287bf786a325c7f97a43780ad01d8e3a6852bcf673_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_67b1e073f8fbec54e5b3ba4d3ed772290cc84781223b01f993d34f3d0cc36132 = $this->env->getExtension("native_profiler");
        $__internal_67b1e073f8fbec54e5b3ba4d3ed772290cc84781223b01f993d34f3d0cc36132->enter($__internal_67b1e073f8fbec54e5b3ba4d3ed772290cc84781223b01f993d34f3d0cc36132_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Pais</h1>

    <table>
        <tbody>
            <tr>
                <th>Nombrepais</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pai"]) ? $context["pai"] : $this->getContext($context, "pai")), "nombrepais", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Id</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pai"]) ? $context["pai"] : $this->getContext($context, "pai")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("admin_pais_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_pais_edit", array("id" => $this->getAttribute((isset($context["pai"]) ? $context["pai"] : $this->getContext($context, "pai")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 27
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 29
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_67b1e073f8fbec54e5b3ba4d3ed772290cc84781223b01f993d34f3d0cc36132->leave($__internal_67b1e073f8fbec54e5b3ba4d3ed772290cc84781223b01f993d34f3d0cc36132_prof);

    }

    public function getTemplateName()
    {
        return "pais/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 29,  77 => 27,  71 => 24,  65 => 21,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Pais</h1>*/
/* */
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Nombrepais</th>*/
/*                 <td>{{ pai.nombrepais }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ pai.id }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('admin_pais_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('admin_pais_edit', { 'id': pai.id }) }}">Edit</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
