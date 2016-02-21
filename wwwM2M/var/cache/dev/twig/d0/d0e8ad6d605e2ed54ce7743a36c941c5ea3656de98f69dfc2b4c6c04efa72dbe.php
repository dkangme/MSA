<?php

/* :sensor:edit.html.twig */
class __TwigTemplate_f80c251f019977af4cb7d3378ba2ae661e747125f66866c61647448f615e58fd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":sensor:edit.html.twig", 1);
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
        $__internal_e455b9c1be927354a7f6c6a354154ad5136ab29fb83511346676d4f4af02d814 = $this->env->getExtension("native_profiler");
        $__internal_e455b9c1be927354a7f6c6a354154ad5136ab29fb83511346676d4f4af02d814->enter($__internal_e455b9c1be927354a7f6c6a354154ad5136ab29fb83511346676d4f4af02d814_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":sensor:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e455b9c1be927354a7f6c6a354154ad5136ab29fb83511346676d4f4af02d814->leave($__internal_e455b9c1be927354a7f6c6a354154ad5136ab29fb83511346676d4f4af02d814_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ef8b440a24b18bc9176bbded5425c61b3353ffdc75fd2a5bfff909afbe1f9b09 = $this->env->getExtension("native_profiler");
        $__internal_ef8b440a24b18bc9176bbded5425c61b3353ffdc75fd2a5bfff909afbe1f9b09->enter($__internal_ef8b440a24b18bc9176bbded5425c61b3353ffdc75fd2a5bfff909afbe1f9b09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Sensor edit</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("sensor_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_ef8b440a24b18bc9176bbded5425c61b3353ffdc75fd2a5bfff909afbe1f9b09->leave($__internal_ef8b440a24b18bc9176bbded5425c61b3353ffdc75fd2a5bfff909afbe1f9b09_prof);

    }

    public function getTemplateName()
    {
        return ":sensor:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 18,  66 => 16,  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Sensor edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('sensor_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
