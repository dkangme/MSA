<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_ecab67e9db82213310a294cd9444b2fc0bcf5b58a92a8039240a6296b36c06ce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_23690f2b0b27dbb149df944c28c01a80afa1493a6bef193f2abcdb95b343bc14 = $this->env->getExtension("native_profiler");
        $__internal_23690f2b0b27dbb149df944c28c01a80afa1493a6bef193f2abcdb95b343bc14->enter($__internal_23690f2b0b27dbb149df944c28c01a80afa1493a6bef193f2abcdb95b343bc14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_23690f2b0b27dbb149df944c28c01a80afa1493a6bef193f2abcdb95b343bc14->leave($__internal_23690f2b0b27dbb149df944c28c01a80afa1493a6bef193f2abcdb95b343bc14_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
