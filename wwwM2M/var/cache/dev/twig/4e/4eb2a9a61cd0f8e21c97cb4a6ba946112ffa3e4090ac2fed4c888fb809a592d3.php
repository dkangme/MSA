<?php

/* pais/edit.html.twig */
class __TwigTemplate_fcee2ec67eff1fbacbbd6afa8bb95115660bc3ac343dd078e7ba39e897f427ae extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "pais/edit.html.twig", 1);
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
        $__internal_34c787ae5471f92348f2fc5b458b4733e935ebce12eb1f0c5de7dc9b5eef014f = $this->env->getExtension("native_profiler");
        $__internal_34c787ae5471f92348f2fc5b458b4733e935ebce12eb1f0c5de7dc9b5eef014f->enter($__internal_34c787ae5471f92348f2fc5b458b4733e935ebce12eb1f0c5de7dc9b5eef014f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pais/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_34c787ae5471f92348f2fc5b458b4733e935ebce12eb1f0c5de7dc9b5eef014f->leave($__internal_34c787ae5471f92348f2fc5b458b4733e935ebce12eb1f0c5de7dc9b5eef014f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4be4c454aee0f4297ff51547bbe3aaa2acd5e8a96e11566e801aca8b63e6a77a = $this->env->getExtension("native_profiler");
        $__internal_4be4c454aee0f4297ff51547bbe3aaa2acd5e8a96e11566e801aca8b63e6a77a->enter($__internal_4be4c454aee0f4297ff51547bbe3aaa2acd5e8a96e11566e801aca8b63e6a77a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_4be4c454aee0f4297ff51547bbe3aaa2acd5e8a96e11566e801aca8b63e6a77a->leave($__internal_4be4c454aee0f4297ff51547bbe3aaa2acd5e8a96e11566e801aca8b63e6a77a_prof);

    }

    public function getTemplateName()
    {
        return "pais/edit.html.twig";
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
