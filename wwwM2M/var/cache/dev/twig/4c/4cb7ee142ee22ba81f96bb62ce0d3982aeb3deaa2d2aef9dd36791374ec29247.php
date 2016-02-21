<?php

/* :pais:new.html.twig */
class __TwigTemplate_d5a9a90c47b464929fda87dbe4a326305830f9475c630e178b45dc1e29cfaf35 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":pais:new.html.twig", 1);
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
        $__internal_ca009926e2d5e28d2550b38b2741402e670b7b2414613ce270d8be1c6b9afe8a = $this->env->getExtension("native_profiler");
        $__internal_ca009926e2d5e28d2550b38b2741402e670b7b2414613ce270d8be1c6b9afe8a->enter($__internal_ca009926e2d5e28d2550b38b2741402e670b7b2414613ce270d8be1c6b9afe8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":pais:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ca009926e2d5e28d2550b38b2741402e670b7b2414613ce270d8be1c6b9afe8a->leave($__internal_ca009926e2d5e28d2550b38b2741402e670b7b2414613ce270d8be1c6b9afe8a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3bba76a3099343d5e384976cb730e1916b8edbdf9a9f2cb7652f4a423897f89e = $this->env->getExtension("native_profiler");
        $__internal_3bba76a3099343d5e384976cb730e1916b8edbdf9a9f2cb7652f4a423897f89e->enter($__internal_3bba76a3099343d5e384976cb730e1916b8edbdf9a9f2cb7652f4a423897f89e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Pais creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("admin_pais_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_3bba76a3099343d5e384976cb730e1916b8edbdf9a9f2cb7652f4a423897f89e->leave($__internal_3bba76a3099343d5e384976cb730e1916b8edbdf9a9f2cb7652f4a423897f89e_prof);

    }

    public function getTemplateName()
    {
        return ":pais:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Pais creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('admin_pais_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
