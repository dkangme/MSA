<?php

/* pais/index.html.twig */
class __TwigTemplate_1835b481bb454c3cc41204f17f8c7738d3c958e8b6a832b8ca34b66dcaf35a8f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "pais/index.html.twig", 1);
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
        $__internal_2b8adc4e25456e4b62a3372a7a8a3138589c00f0ed0dd43dcef49c35348423ad = $this->env->getExtension("native_profiler");
        $__internal_2b8adc4e25456e4b62a3372a7a8a3138589c00f0ed0dd43dcef49c35348423ad->enter($__internal_2b8adc4e25456e4b62a3372a7a8a3138589c00f0ed0dd43dcef49c35348423ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pais/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2b8adc4e25456e4b62a3372a7a8a3138589c00f0ed0dd43dcef49c35348423ad->leave($__internal_2b8adc4e25456e4b62a3372a7a8a3138589c00f0ed0dd43dcef49c35348423ad_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_be9fbfcfa7f1e3ce1d4eaad3a21501f5a552ebf55bf72cba92f2c15a15e14c14 = $this->env->getExtension("native_profiler");
        $__internal_be9fbfcfa7f1e3ce1d4eaad3a21501f5a552ebf55bf72cba92f2c15a15e14c14->enter($__internal_be9fbfcfa7f1e3ce1d4eaad3a21501f5a552ebf55bf72cba92f2c15a15e14c14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <div class=\"container\">
        <h1>";
        // line 6
        echo $this->env->getExtension('translator')->getTranslator()->trans("Country List", array(), "messages");
        echo "</h1>

        <table class=\"table table-bordered table-striped\">
            <thead>
                <tr>
                    <th>";
        // line 11
        echo $this->env->getExtension('translator')->getTranslator()->trans("Country", array(), "messages");
        echo "</th>
                    <th>";
        // line 12
        echo $this->env->getExtension('translator')->getTranslator()->trans("Actions", array(), "messages");
        echo "</th>
                </tr>
            </thead>
            <tbody>
            ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        foreach ($context['_seq'] as $context["_key"] => $context["pai"]) {
            // line 17
            echo "                <tr>
                    <td><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_pais_show", array("id" => $this->getAttribute($context["pai"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["pai"], "nombrepais", array()), "html", null, true);
            echo "</a></td>
                    <td>
                        <ul>
                            <li>
                                <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_pais_show", array("id" => $this->getAttribute($context["pai"], "id", array()))), "html", null, true);
            echo "\">";
            echo $this->env->getExtension('translator')->getTranslator()->trans("show", array(), "messages");
            echo "</a>
                            </li>
                            <li>
                                <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_pais_edit", array("id" => $this->getAttribute($context["pai"], "id", array()))), "html", null, true);
            echo "\">";
            echo $this->env->getExtension('translator')->getTranslator()->trans("edit", array(), "messages");
            echo "</a>
                            </li>
                        </ul>
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pai'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "            </tbody>
        </table>

        <div class=\"center\">
            <div class=\"navigation\">
                ";
        // line 36
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "
            </div>
        </div>

        <ul>
            <li>
                <a href=\"";
        // line 42
        echo $this->env->getExtension('routing')->getPath("admin_pais_new");
        echo "\">Create a new entry</a>
            </li>
        </ul>

    </div>    
";
        
        $__internal_be9fbfcfa7f1e3ce1d4eaad3a21501f5a552ebf55bf72cba92f2c15a15e14c14->leave($__internal_be9fbfcfa7f1e3ce1d4eaad3a21501f5a552ebf55bf72cba92f2c15a15e14c14_prof);

    }

    public function getTemplateName()
    {
        return "pais/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 42,  108 => 36,  101 => 31,  87 => 25,  79 => 22,  70 => 18,  67 => 17,  63 => 16,  56 => 12,  52 => 11,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/*     <div class="container">*/
/*         <h1>{% trans %}Country List{% endtrans %}</h1>*/
/* */
/*         <table class="table table-bordered table-striped">*/
/*             <thead>*/
/*                 <tr>*/
/*                     <th>{% trans %}Country{% endtrans %}</th>*/
/*                     <th>{% trans %}Actions{% endtrans %}</th>*/
/*                 </tr>*/
/*             </thead>*/
/*             <tbody>*/
/*             {% for pai in pagination %}*/
/*                 <tr>*/
/*                     <td><a href="{{ path('admin_pais_show', { 'id': pai.id }) }}">{{ pai.nombrepais }}</a></td>*/
/*                     <td>*/
/*                         <ul>*/
/*                             <li>*/
/*                                 <a href="{{ path('admin_pais_show', { 'id': pai.id }) }}">{% trans %}show{% endtrans %}</a>*/
/*                             </li>*/
/*                             <li>*/
/*                                 <a href="{{ path('admin_pais_edit', { 'id': pai.id }) }}">{% trans %}edit{% endtrans %}</a>*/
/*                             </li>*/
/*                         </ul>*/
/*                     </td>*/
/*                 </tr>*/
/*             {% endfor %}*/
/*             </tbody>*/
/*         </table>*/
/* */
/*         <div class="center">*/
/*             <div class="navigation">*/
/*                 {{ knp_pagination_render(pagination) }}*/
/*             </div>*/
/*         </div>*/
/* */
/*         <ul>*/
/*             <li>*/
/*                 <a href="{{ path('admin_pais_new') }}">Create a new entry</a>*/
/*             </li>*/
/*         </ul>*/
/* */
/*     </div>    */
/* {% endblock %}*/
/* */
