<?php

/* base.html.twig */
class __TwigTemplate_093d3aa093633d7a2c81c4672ac4f4942be88b2c91b11fcf476bed7329a8040f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a502ca988e1cf16e1707c41de7d6ef454cb43127d8cdca60f07ce81140171947 = $this->env->getExtension("native_profiler");
        $__internal_a502ca988e1cf16e1707c41de7d6ef454cb43127d8cdca60f07ce81140171947->enter($__internal_a502ca988e1cf16e1707c41de7d6ef454cb43127d8cdca60f07ce81140171947_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/font-awesome.min.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" integrity=\"sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7\" crossorigin=\"anonymous\">

        <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap-theme.min.css"), "html", null, true);
        echo "\" integrity=\"sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r\" crossorigin=\"anonymous\">

        ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 15
        $this->displayBlock('body', $context, $blocks);
        // line 16
        echo "
        
        <script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\" integrity=\"sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS\" crossorigin=\"anonymous\"></script>
        ";
        // line 19
        $this->displayBlock('javascripts', $context, $blocks);
        // line 20
        echo "    </body>
</html>
";
        
        $__internal_a502ca988e1cf16e1707c41de7d6ef454cb43127d8cdca60f07ce81140171947->leave($__internal_a502ca988e1cf16e1707c41de7d6ef454cb43127d8cdca60f07ce81140171947_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_1d74e80c5ff96598241d84c190434a0dcdd31c316ba5729da85bcbe60835b42c = $this->env->getExtension("native_profiler");
        $__internal_1d74e80c5ff96598241d84c190434a0dcdd31c316ba5729da85bcbe60835b42c->enter($__internal_1d74e80c5ff96598241d84c190434a0dcdd31c316ba5729da85bcbe60835b42c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "..:: MSA Safety - Chile ::..";
        
        $__internal_1d74e80c5ff96598241d84c190434a0dcdd31c316ba5729da85bcbe60835b42c->leave($__internal_1d74e80c5ff96598241d84c190434a0dcdd31c316ba5729da85bcbe60835b42c_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_60ca02bb7d45e76ee7fed6c2cba985bb9075d2c8584b213e4ef0d03429e12cc4 = $this->env->getExtension("native_profiler");
        $__internal_60ca02bb7d45e76ee7fed6c2cba985bb9075d2c8584b213e4ef0d03429e12cc4->enter($__internal_60ca02bb7d45e76ee7fed6c2cba985bb9075d2c8584b213e4ef0d03429e12cc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_60ca02bb7d45e76ee7fed6c2cba985bb9075d2c8584b213e4ef0d03429e12cc4->leave($__internal_60ca02bb7d45e76ee7fed6c2cba985bb9075d2c8584b213e4ef0d03429e12cc4_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_f43cd63bd199b5c5a2bd372e6ac4918477bb0f5b9772a1120207f578c01477ec = $this->env->getExtension("native_profiler");
        $__internal_f43cd63bd199b5c5a2bd372e6ac4918477bb0f5b9772a1120207f578c01477ec->enter($__internal_f43cd63bd199b5c5a2bd372e6ac4918477bb0f5b9772a1120207f578c01477ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f43cd63bd199b5c5a2bd372e6ac4918477bb0f5b9772a1120207f578c01477ec->leave($__internal_f43cd63bd199b5c5a2bd372e6ac4918477bb0f5b9772a1120207f578c01477ec_prof);

    }

    // line 19
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_be240acc6c0424be8c3e9003ab461fcb1a327b2e10bb1b1fb9dd6d43817a2bcf = $this->env->getExtension("native_profiler");
        $__internal_be240acc6c0424be8c3e9003ab461fcb1a327b2e10bb1b1fb9dd6d43817a2bcf->enter($__internal_be240acc6c0424be8c3e9003ab461fcb1a327b2e10bb1b1fb9dd6d43817a2bcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_be240acc6c0424be8c3e9003ab461fcb1a327b2e10bb1b1fb9dd6d43817a2bcf->leave($__internal_be240acc6c0424be8c3e9003ab461fcb1a327b2e10bb1b1fb9dd6d43817a2bcf_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 19,  103 => 15,  92 => 11,  80 => 5,  71 => 20,  69 => 19,  65 => 18,  61 => 16,  59 => 15,  52 => 12,  50 => 11,  45 => 9,  40 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}..:: MSA Safety - Chile ::..{% endblock %}</title>*/
/*         <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}" />*/
/*         <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">*/
/* */
/*         <link rel="stylesheet" href="{{ asset('css/bootstrap-theme.min.css') }}" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">*/
/* */
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/* */
/*         */
/*         <script src="{{ asset('js/bootstrap.min.js') }}" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
