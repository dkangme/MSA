<?php

/* :wei:new.html.twig */
class __TwigTemplate_0e06e9e6e8a4429f217c466e7112ede73910b4f770d61dd4169fa0beac2a62a2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":wei:new.html.twig", 1);
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
        $__internal_93113660405cfd478caa463b1ea286625fea920d5a41ef73b6df7cd5b7654c25 = $this->env->getExtension("native_profiler");
        $__internal_93113660405cfd478caa463b1ea286625fea920d5a41ef73b6df7cd5b7654c25->enter($__internal_93113660405cfd478caa463b1ea286625fea920d5a41ef73b6df7cd5b7654c25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":wei:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_93113660405cfd478caa463b1ea286625fea920d5a41ef73b6df7cd5b7654c25->leave($__internal_93113660405cfd478caa463b1ea286625fea920d5a41ef73b6df7cd5b7654c25_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_477a9cc22d901f9b4df75486e2bf656f58547a147f767ef5b33bce7d85c79936 = $this->env->getExtension("native_profiler");
        $__internal_477a9cc22d901f9b4df75486e2bf656f58547a147f767ef5b33bce7d85c79936->enter($__internal_477a9cc22d901f9b4df75486e2bf656f58547a147f767ef5b33bce7d85c79936_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Wei creation</h1>

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
        echo $this->env->getExtension('routing')->getPath("admin_wei_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_477a9cc22d901f9b4df75486e2bf656f58547a147f767ef5b33bce7d85c79936->leave($__internal_477a9cc22d901f9b4df75486e2bf656f58547a147f767ef5b33bce7d85c79936_prof);

    }

    public function getTemplateName()
    {
        return ":wei:new.html.twig";
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
/*     <h1>Wei creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('admin_wei_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
