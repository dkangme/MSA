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
        $__internal_95a8d4c8b91d5e4820434943018ab070ba8fb7cbcc655e67746a018aad59a540 = $this->env->getExtension("native_profiler");
        $__internal_95a8d4c8b91d5e4820434943018ab070ba8fb7cbcc655e67746a018aad59a540->enter($__internal_95a8d4c8b91d5e4820434943018ab070ba8fb7cbcc655e67746a018aad59a540_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_95a8d4c8b91d5e4820434943018ab070ba8fb7cbcc655e67746a018aad59a540->leave($__internal_95a8d4c8b91d5e4820434943018ab070ba8fb7cbcc655e67746a018aad59a540_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_bc622d6bfe3cf00a0636ac2ac47060bc3d164ce5765556935a5de2ce6f590dde = $this->env->getExtension("native_profiler");
        $__internal_bc622d6bfe3cf00a0636ac2ac47060bc3d164ce5765556935a5de2ce6f590dde->enter($__internal_bc622d6bfe3cf00a0636ac2ac47060bc3d164ce5765556935a5de2ce6f590dde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_bc622d6bfe3cf00a0636ac2ac47060bc3d164ce5765556935a5de2ce6f590dde->leave($__internal_bc622d6bfe3cf00a0636ac2ac47060bc3d164ce5765556935a5de2ce6f590dde_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_06219b69792dadcea5aa9cdd40ad5e12ebca71479f21cf47ecb894cbe6476b29 = $this->env->getExtension("native_profiler");
        $__internal_06219b69792dadcea5aa9cdd40ad5e12ebca71479f21cf47ecb894cbe6476b29->enter($__internal_06219b69792dadcea5aa9cdd40ad5e12ebca71479f21cf47ecb894cbe6476b29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_06219b69792dadcea5aa9cdd40ad5e12ebca71479f21cf47ecb894cbe6476b29->leave($__internal_06219b69792dadcea5aa9cdd40ad5e12ebca71479f21cf47ecb894cbe6476b29_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4e1db0ee5eea71626e735c54de91b794e2b1f2b38a58e8222301d06403f3de36 = $this->env->getExtension("native_profiler");
        $__internal_4e1db0ee5eea71626e735c54de91b794e2b1f2b38a58e8222301d06403f3de36->enter($__internal_4e1db0ee5eea71626e735c54de91b794e2b1f2b38a58e8222301d06403f3de36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_4e1db0ee5eea71626e735c54de91b794e2b1f2b38a58e8222301d06403f3de36->leave($__internal_4e1db0ee5eea71626e735c54de91b794e2b1f2b38a58e8222301d06403f3de36_prof);

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
