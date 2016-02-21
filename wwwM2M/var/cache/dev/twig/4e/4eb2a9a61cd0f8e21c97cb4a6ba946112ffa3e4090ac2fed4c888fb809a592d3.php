<?php

/* :pais:edit.html.twig */
class __TwigTemplate_fcee2ec67eff1fbacbbd6afa8bb95115660bc3ac343dd078e7ba39e897f427ae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":pais:edit.html.twig", 1);
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
        $__internal_f06d8069e8c55e20b15e4415a7f98790e2538b18a4db2fd478e124f3fa9682e0 = $this->env->getExtension("native_profiler");
        $__internal_f06d8069e8c55e20b15e4415a7f98790e2538b18a4db2fd478e124f3fa9682e0->enter($__internal_f06d8069e8c55e20b15e4415a7f98790e2538b18a4db2fd478e124f3fa9682e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":pais:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f06d8069e8c55e20b15e4415a7f98790e2538b18a4db2fd478e124f3fa9682e0->leave($__internal_f06d8069e8c55e20b15e4415a7f98790e2538b18a4db2fd478e124f3fa9682e0_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6c5441a3657b4a7421440f8b72fefaef43ac732940fff5f567aa02ef108f3ad9 = $this->env->getExtension("native_profiler");
        $__internal_6c5441a3657b4a7421440f8b72fefaef43ac732940fff5f567aa02ef108f3ad9->enter($__internal_6c5441a3657b4a7421440f8b72fefaef43ac732940fff5f567aa02ef108f3ad9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <div class=\"container\">
        <h1>";
        // line 6
        echo $this->env->getExtension('translator')->getTranslator()->trans("Country edit", array(), "messages");
        echo "</h1>

        ";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
            ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
            <input type=\"submit\" value=\"";
        // line 10
        echo $this->env->getExtension('translator')->getTranslator()->trans("Edit", array(), "messages");
        echo "\" />
        ";
        // line 11
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

        <ul>
            <li>
                <a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("admin_pais_index");
        echo "\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Back to the list", array(), "messages");
        echo "</a>
            </li>
            <li>
                ";
        // line 18
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                    <input type=\"submit\" value=\"Delete\">
                ";
        // line 20
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
            </li>
        </ul>
    </div>
";
        
        $__internal_6c5441a3657b4a7421440f8b72fefaef43ac732940fff5f567aa02ef108f3ad9->leave($__internal_6c5441a3657b4a7421440f8b72fefaef43ac732940fff5f567aa02ef108f3ad9_prof);

    }

    public function getTemplateName()
    {
        return ":pais:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 20,  76 => 18,  68 => 15,  61 => 11,  57 => 10,  53 => 9,  49 => 8,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/*     <div class="container">*/
/*         <h1>{% trans %}Country edit{% endtrans %}</h1>*/
/* */
/*         {{ form_start(edit_form) }}*/
/*             {{ form_widget(edit_form) }}*/
/*             <input type="submit" value="{% trans %}Edit{% endtrans %}" />*/
/*         {{ form_end(edit_form) }}*/
/* */
/*         <ul>*/
/*             <li>*/
/*                 <a href="{{ path('admin_pais_index') }}">{% trans %}Back to the list{% endtrans %}</a>*/
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
