<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_641bd15e83a434738c0fd6e7d6172d8ac2e90340594d2db0f104ceace1ddd76d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_330dfb1ce407b5487ed8df81f9bc282020a6547c9d3b4f3bee018c02cbbdb10b = $this->env->getExtension("native_profiler");
        $__internal_330dfb1ce407b5487ed8df81f9bc282020a6547c9d3b4f3bee018c02cbbdb10b->enter($__internal_330dfb1ce407b5487ed8df81f9bc282020a6547c9d3b4f3bee018c02cbbdb10b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_330dfb1ce407b5487ed8df81f9bc282020a6547c9d3b4f3bee018c02cbbdb10b->leave($__internal_330dfb1ce407b5487ed8df81f9bc282020a6547c9d3b4f3bee018c02cbbdb10b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7190b767e1af6f5cc45fe76bf0c55a394d97f4b0cb455b61ea8e2d8b51732e76 = $this->env->getExtension("native_profiler");
        $__internal_7190b767e1af6f5cc45fe76bf0c55a394d97f4b0cb455b61ea8e2d8b51732e76->enter($__internal_7190b767e1af6f5cc45fe76bf0c55a394d97f4b0cb455b61ea8e2d8b51732e76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_7190b767e1af6f5cc45fe76bf0c55a394d97f4b0cb455b61ea8e2d8b51732e76->leave($__internal_7190b767e1af6f5cc45fe76bf0c55a394d97f4b0cb455b61ea8e2d8b51732e76_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6884aad2017c971f03cd13c08cf4d2a71f625d95f48656c4aef4c00f83900ae1 = $this->env->getExtension("native_profiler");
        $__internal_6884aad2017c971f03cd13c08cf4d2a71f625d95f48656c4aef4c00f83900ae1->enter($__internal_6884aad2017c971f03cd13c08cf4d2a71f625d95f48656c4aef4c00f83900ae1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_6884aad2017c971f03cd13c08cf4d2a71f625d95f48656c4aef4c00f83900ae1->leave($__internal_6884aad2017c971f03cd13c08cf4d2a71f625d95f48656c4aef4c00f83900ae1_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b6d1f99df82c8110e13b42acd477f729903876db9ad3d7b15d649ac43d67d99d = $this->env->getExtension("native_profiler");
        $__internal_b6d1f99df82c8110e13b42acd477f729903876db9ad3d7b15d649ac43d67d99d->enter($__internal_b6d1f99df82c8110e13b42acd477f729903876db9ad3d7b15d649ac43d67d99d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_b6d1f99df82c8110e13b42acd477f729903876db9ad3d7b15d649ac43d67d99d->leave($__internal_b6d1f99df82c8110e13b42acd477f729903876db9ad3d7b15d649ac43d67d99d_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
