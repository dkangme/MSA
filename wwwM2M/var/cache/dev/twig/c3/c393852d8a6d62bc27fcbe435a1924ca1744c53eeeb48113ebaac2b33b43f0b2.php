<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_6fa4834e7a92e3b24178d9e7bc4c787083789644a7d658ccb092103bfdc53253 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_50e8b9d956cef34b8c124c71f3641a183f62428d838c2774da307735f5c22ec4 = $this->env->getExtension("native_profiler");
        $__internal_50e8b9d956cef34b8c124c71f3641a183f62428d838c2774da307735f5c22ec4->enter($__internal_50e8b9d956cef34b8c124c71f3641a183f62428d838c2774da307735f5c22ec4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_50e8b9d956cef34b8c124c71f3641a183f62428d838c2774da307735f5c22ec4->leave($__internal_50e8b9d956cef34b8c124c71f3641a183f62428d838c2774da307735f5c22ec4_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f6319635509944cfd4567a87b8c13fb86ef01d2154cc36ccc87b4fb5d23e957a = $this->env->getExtension("native_profiler");
        $__internal_f6319635509944cfd4567a87b8c13fb86ef01d2154cc36ccc87b4fb5d23e957a->enter($__internal_f6319635509944cfd4567a87b8c13fb86ef01d2154cc36ccc87b4fb5d23e957a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_f6319635509944cfd4567a87b8c13fb86ef01d2154cc36ccc87b4fb5d23e957a->leave($__internal_f6319635509944cfd4567a87b8c13fb86ef01d2154cc36ccc87b4fb5d23e957a_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_a4aafbfdaa82d1081496b8e458b5fce6017e7a56f556a974d5ed4ceff5da4124 = $this->env->getExtension("native_profiler");
        $__internal_a4aafbfdaa82d1081496b8e458b5fce6017e7a56f556a974d5ed4ceff5da4124->enter($__internal_a4aafbfdaa82d1081496b8e458b5fce6017e7a56f556a974d5ed4ceff5da4124_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_a4aafbfdaa82d1081496b8e458b5fce6017e7a56f556a974d5ed4ceff5da4124->leave($__internal_a4aafbfdaa82d1081496b8e458b5fce6017e7a56f556a974d5ed4ceff5da4124_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
