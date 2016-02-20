<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_c5a85ca2b5ab657f3ef443e422b0abd3ab8c9de47b86f465ce2cf02634002b01 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
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
        $__internal_fada91762394afe3cb8490f301bbcced0de6ec08c09d9ba52047e7b9f2fb562d = $this->env->getExtension("native_profiler");
        $__internal_fada91762394afe3cb8490f301bbcced0de6ec08c09d9ba52047e7b9f2fb562d->enter($__internal_fada91762394afe3cb8490f301bbcced0de6ec08c09d9ba52047e7b9f2fb562d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fada91762394afe3cb8490f301bbcced0de6ec08c09d9ba52047e7b9f2fb562d->leave($__internal_fada91762394afe3cb8490f301bbcced0de6ec08c09d9ba52047e7b9f2fb562d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3b97da80c8d931769c4d457398563ac1442614fe6ef1d9ab34af5496cfd43041 = $this->env->getExtension("native_profiler");
        $__internal_3b97da80c8d931769c4d457398563ac1442614fe6ef1d9ab34af5496cfd43041->enter($__internal_3b97da80c8d931769c4d457398563ac1442614fe6ef1d9ab34af5496cfd43041_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_3b97da80c8d931769c4d457398563ac1442614fe6ef1d9ab34af5496cfd43041->leave($__internal_3b97da80c8d931769c4d457398563ac1442614fe6ef1d9ab34af5496cfd43041_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_156b33b699a03da824e993aeb7b8c4131636831c96dd74ba45eae7a8d43697fe = $this->env->getExtension("native_profiler");
        $__internal_156b33b699a03da824e993aeb7b8c4131636831c96dd74ba45eae7a8d43697fe->enter($__internal_156b33b699a03da824e993aeb7b8c4131636831c96dd74ba45eae7a8d43697fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_156b33b699a03da824e993aeb7b8c4131636831c96dd74ba45eae7a8d43697fe->leave($__internal_156b33b699a03da824e993aeb7b8c4131636831c96dd74ba45eae7a8d43697fe_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_97533b280864599296044876c6f8489250840e483887c13c323b052c2e6d541a = $this->env->getExtension("native_profiler");
        $__internal_97533b280864599296044876c6f8489250840e483887c13c323b052c2e6d541a->enter($__internal_97533b280864599296044876c6f8489250840e483887c13c323b052c2e6d541a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_97533b280864599296044876c6f8489250840e483887c13c323b052c2e6d541a->leave($__internal_97533b280864599296044876c6f8489250840e483887c13c323b052c2e6d541a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
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
