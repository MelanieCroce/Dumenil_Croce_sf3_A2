<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_bfd30d8467bfe014cea84e14e52f2fef8f78795f5539e5a7c40add4b0e16929c extends Twig_Template
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
        $__internal_ec63a565634def7861b8a280219c24158301e53daa6002bba71ce75ec0bdcc09 = $this->env->getExtension("native_profiler");
        $__internal_ec63a565634def7861b8a280219c24158301e53daa6002bba71ce75ec0bdcc09->enter($__internal_ec63a565634def7861b8a280219c24158301e53daa6002bba71ce75ec0bdcc09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ec63a565634def7861b8a280219c24158301e53daa6002bba71ce75ec0bdcc09->leave($__internal_ec63a565634def7861b8a280219c24158301e53daa6002bba71ce75ec0bdcc09_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_fbc77b9778c713d893d29b17f51df5939332a945b717d9df3dc5e4afe280244c = $this->env->getExtension("native_profiler");
        $__internal_fbc77b9778c713d893d29b17f51df5939332a945b717d9df3dc5e4afe280244c->enter($__internal_fbc77b9778c713d893d29b17f51df5939332a945b717d9df3dc5e4afe280244c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_fbc77b9778c713d893d29b17f51df5939332a945b717d9df3dc5e4afe280244c->leave($__internal_fbc77b9778c713d893d29b17f51df5939332a945b717d9df3dc5e4afe280244c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_d9075dd86485f7fc9054c1a08b3411d783b11a148ec9a8399e9542775c69c94f = $this->env->getExtension("native_profiler");
        $__internal_d9075dd86485f7fc9054c1a08b3411d783b11a148ec9a8399e9542775c69c94f->enter($__internal_d9075dd86485f7fc9054c1a08b3411d783b11a148ec9a8399e9542775c69c94f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_d9075dd86485f7fc9054c1a08b3411d783b11a148ec9a8399e9542775c69c94f->leave($__internal_d9075dd86485f7fc9054c1a08b3411d783b11a148ec9a8399e9542775c69c94f_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_398d52cdfa699dcc5ab16d63b36ac86501d886388a2c567277b9fd0177ff008c = $this->env->getExtension("native_profiler");
        $__internal_398d52cdfa699dcc5ab16d63b36ac86501d886388a2c567277b9fd0177ff008c->enter($__internal_398d52cdfa699dcc5ab16d63b36ac86501d886388a2c567277b9fd0177ff008c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_398d52cdfa699dcc5ab16d63b36ac86501d886388a2c567277b9fd0177ff008c->leave($__internal_398d52cdfa699dcc5ab16d63b36ac86501d886388a2c567277b9fd0177ff008c_prof);

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
