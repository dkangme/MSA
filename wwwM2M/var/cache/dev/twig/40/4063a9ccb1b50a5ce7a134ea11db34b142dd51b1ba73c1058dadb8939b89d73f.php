<?php

/* :wei:edit.html.twig */
class __TwigTemplate_d2f0c9d91e8cd94d97af59994d6d6f94c7b56e825c27b6b903cf1b68d2a34f7e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":wei:edit.html.twig", 1);
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
        $__internal_05e6519c1668aed8a8c56de22f9cd3588b017256fb19073dd83027b71509ddbb = $this->env->getExtension("native_profiler");
        $__internal_05e6519c1668aed8a8c56de22f9cd3588b017256fb19073dd83027b71509ddbb->enter($__internal_05e6519c1668aed8a8c56de22f9cd3588b017256fb19073dd83027b71509ddbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":wei:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_05e6519c1668aed8a8c56de22f9cd3588b017256fb19073dd83027b71509ddbb->leave($__internal_05e6519c1668aed8a8c56de22f9cd3588b017256fb19073dd83027b71509ddbb_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4dbbc2ce132ddb2e187afb9e6a6a1246813fa14f5f926ca40ace70b1d24d9c7a = $this->env->getExtension("native_profiler");
        $__internal_4dbbc2ce132ddb2e187afb9e6a6a1246813fa14f5f926ca40ace70b1d24d9c7a->enter($__internal_4dbbc2ce132ddb2e187afb9e6a6a1246813fa14f5f926ca40ace70b1d24d9c7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Wei edit</h1>

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
        echo $this->env->getExtension('routing')->getPath("admin_wei_index");
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
        
        $__internal_4dbbc2ce132ddb2e187afb9e6a6a1246813fa14f5f926ca40ace70b1d24d9c7a->leave($__internal_4dbbc2ce132ddb2e187afb9e6a6a1246813fa14f5f926ca40ace70b1d24d9c7a_prof);

    }

    public function getTemplateName()
    {
        return ":wei:edit.html.twig";
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
/*     <h1>Wei edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('admin_wei_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
