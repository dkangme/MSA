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
        $__internal_60d3da2a124945d18dc1ae8ca7befb8f5abd471413d6b8b2e6135c25f6256255 = $this->env->getExtension("native_profiler");
        $__internal_60d3da2a124945d18dc1ae8ca7befb8f5abd471413d6b8b2e6135c25f6256255->enter($__internal_60d3da2a124945d18dc1ae8ca7befb8f5abd471413d6b8b2e6135c25f6256255_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "pais/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_60d3da2a124945d18dc1ae8ca7befb8f5abd471413d6b8b2e6135c25f6256255->leave($__internal_60d3da2a124945d18dc1ae8ca7befb8f5abd471413d6b8b2e6135c25f6256255_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_cb0bcd36618b7e81bc9be90848f9864e6dd52dea3db15abb68d3b7ba714d9c11 = $this->env->getExtension("native_profiler");
        $__internal_cb0bcd36618b7e81bc9be90848f9864e6dd52dea3db15abb68d3b7ba714d9c11->enter($__internal_cb0bcd36618b7e81bc9be90848f9864e6dd52dea3db15abb68d3b7ba714d9c11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                    <td width=\"80%\">";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["pai"], "nombrepais", array()), "html", null, true);
            echo "</td>
                    <td>
                        <a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_pais_edit", array("id" => $this->getAttribute($context["pai"], "id", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-pencil\"></i> ";
            echo $this->env->getExtension('translator')->getTranslator()->trans("edit", array(), "messages");
            echo "</a>
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pai'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "            </tbody>
        </table>

        <div class=\"center\">
            <div class=\"navigation\">
                ";
        // line 29
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "
            </div>
        </div>

        
        <a href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("admin_pais_new");
        echo "\"><i class=\"fa fa-plus-circle\"></i> ";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Create a new entry", array(), "messages");
        echo "</a>
        
    </div>    
";
        
        $__internal_cb0bcd36618b7e81bc9be90848f9864e6dd52dea3db15abb68d3b7ba714d9c11->leave($__internal_cb0bcd36618b7e81bc9be90848f9864e6dd52dea3db15abb68d3b7ba714d9c11_prof);

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
        return array (  102 => 34,  94 => 29,  87 => 24,  75 => 20,  70 => 18,  67 => 17,  63 => 16,  56 => 12,  52 => 11,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
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
/*                     <td width="80%">{{ pai.nombrepais }}</td>*/
/*                     <td>*/
/*                         <a href="{{ path('admin_pais_edit', { 'id': pai.id }) }}"><i class="fa fa-pencil"></i> {% trans %}edit{% endtrans %}</a>*/
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
/*         */
/*         <a href="{{ path('admin_pais_new') }}"><i class="fa fa-plus-circle"></i> {% trans %}Create a new entry{% endtrans %}</a>*/
/*         */
/*     </div>    */
/* {% endblock %}*/
/* */
