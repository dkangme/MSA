<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_c5a85ca2b5ab657f3ef443e422b0abd3ab8c9de47b86f465ce2cf02634002b01 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_eac98ccbdcab61c86077853086db2cf40fc2e55935075e791eb9deb48211c424 = $this->env->getExtension("native_profiler");
        $__internal_eac98ccbdcab61c86077853086db2cf40fc2e55935075e791eb9deb48211c424->enter($__internal_eac98ccbdcab61c86077853086db2cf40fc2e55935075e791eb9deb48211c424_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eac98ccbdcab61c86077853086db2cf40fc2e55935075e791eb9deb48211c424->leave($__internal_eac98ccbdcab61c86077853086db2cf40fc2e55935075e791eb9deb48211c424_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0f111153759a7c8ce526d604e62570be1a9921438935deab0675b8cdcb15427a = $this->env->getExtension("native_profiler");
        $__internal_0f111153759a7c8ce526d604e62570be1a9921438935deab0675b8cdcb15427a->enter($__internal_0f111153759a7c8ce526d604e62570be1a9921438935deab0675b8cdcb15427a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_0f111153759a7c8ce526d604e62570be1a9921438935deab0675b8cdcb15427a->leave($__internal_0f111153759a7c8ce526d604e62570be1a9921438935deab0675b8cdcb15427a_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ee741d8cd30e93d9636f3a36117980f49449361378602b0f755a9d5f9f29c2c9 = $this->env->getExtension("native_profiler");
        $__internal_ee741d8cd30e93d9636f3a36117980f49449361378602b0f755a9d5f9f29c2c9->enter($__internal_ee741d8cd30e93d9636f3a36117980f49449361378602b0f755a9d5f9f29c2c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_ee741d8cd30e93d9636f3a36117980f49449361378602b0f755a9d5f9f29c2c9->leave($__internal_ee741d8cd30e93d9636f3a36117980f49449361378602b0f755a9d5f9f29c2c9_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_87c157ea13215dab90badd8668c3eb01f96f51fb2b85b29d6531f4954a00a1d5 = $this->env->getExtension("native_profiler");
        $__internal_87c157ea13215dab90badd8668c3eb01f96f51fb2b85b29d6531f4954a00a1d5->enter($__internal_87c157ea13215dab90badd8668c3eb01f96f51fb2b85b29d6531f4954a00a1d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_87c157ea13215dab90badd8668c3eb01f96f51fb2b85b29d6531f4954a00a1d5->leave($__internal_87c157ea13215dab90badd8668c3eb01f96f51fb2b85b29d6531f4954a00a1d5_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
