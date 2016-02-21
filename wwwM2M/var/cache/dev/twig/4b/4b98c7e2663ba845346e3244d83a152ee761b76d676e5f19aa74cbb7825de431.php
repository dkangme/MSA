<?php

/* :pais:show.html.twig */
class __TwigTemplate_65c43b781ae4572ea9ed8c2d9207797dde1f572e3fa73345d2f652355b862477 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":pais:show.html.twig", 1);
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
        $__internal_eb2003c968811766c18f90c29d4562e21c36af0abb50df886909e39a6cc737aa = $this->env->getExtension("native_profiler");
        $__internal_eb2003c968811766c18f90c29d4562e21c36af0abb50df886909e39a6cc737aa->enter($__internal_eb2003c968811766c18f90c29d4562e21c36af0abb50df886909e39a6cc737aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":pais:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eb2003c968811766c18f90c29d4562e21c36af0abb50df886909e39a6cc737aa->leave($__internal_eb2003c968811766c18f90c29d4562e21c36af0abb50df886909e39a6cc737aa_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_38c34ceed0d9248d9396ddf20ad538e84a8b71be8721abf44208af675d110e98 = $this->env->getExtension("native_profiler");
        $__internal_38c34ceed0d9248d9396ddf20ad538e84a8b71be8721abf44208af675d110e98->enter($__internal_38c34ceed0d9248d9396ddf20ad538e84a8b71be8721abf44208af675d110e98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <div class=\"container\">

        <h1>";
        // line 7
        echo $this->env->getExtension('translator')->getTranslator()->trans("Edit Country", array(), "messages");
        echo "</h1>

        <table class=\"table table-striped table-bordered\">
            <tbody>
                <tr>
                    <th>";
        // line 12
        echo $this->env->getExtension('translator')->getTranslator()->trans("Country", array(), "messages");
        echo "</th>
                    <td>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pai"]) ? $context["pai"] : $this->getContext($context, "pai")), "nombrepais", array()), "html", null, true);
        echo "</td>
                </tr>
            </tbody>
        </table>

        <ul>
            <li>
                <a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("admin_pais_index");
        echo "\">Back to the list</a>
            </li>
            <li>
                <a href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_pais_edit", array("id" => $this->getAttribute((isset($context["pai"]) ? $context["pai"] : $this->getContext($context, "pai")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
            </li>
            <li>
                ";
        // line 26
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                    <input type=\"submit\" value=\"Delete\">
                ";
        // line 28
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
            </li>
        </ul>
    </div>
";
        
        $__internal_38c34ceed0d9248d9396ddf20ad538e84a8b71be8721abf44208af675d110e98->leave($__internal_38c34ceed0d9248d9396ddf20ad538e84a8b71be8721abf44208af675d110e98_prof);

    }

    public function getTemplateName()
    {
        return ":pais:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 28,  79 => 26,  73 => 23,  67 => 20,  57 => 13,  53 => 12,  45 => 7,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/*     <div class="container">*/
/* */
/*         <h1>{% trans %}Edit Country{% endtrans %}</h1>*/
/* */
/*         <table class="table table-striped table-bordered">*/
/*             <tbody>*/
/*                 <tr>*/
/*                     <th>{% trans %}Country{% endtrans %}</th>*/
/*                     <td>{{ pai.nombrepais }}</td>*/
/*                 </tr>*/
/*             </tbody>*/
/*         </table>*/
/* */
/*         <ul>*/
/*             <li>*/
/*                 <a href="{{ path('admin_pais_index') }}">Back to the list</a>*/
/*             </li>*/
/*             <li>*/
/*                 <a href="{{ path('admin_pais_edit', { 'id': pai.id }) }}">Edit</a>*/
/*             </li>*/
/*             <li>*/
/*                 {{ form_start(delete_form) }}*/
/*                     <input type="submit" value="Delete">*/
/*                 {{ form_end(delete_form) }}*/
/*             </li>*/
/*         </ul>*/
/*     </div>*/
/* {% endblock %}*/
/* */
