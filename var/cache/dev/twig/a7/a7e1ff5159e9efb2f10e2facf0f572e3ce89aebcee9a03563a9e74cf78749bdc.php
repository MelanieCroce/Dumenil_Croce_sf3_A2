<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_558467b56aac11725c852f2fccbeae809b2a2076a5629f2b74ba22be69be1360 extends Twig_Template
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
        $__internal_7b40c68172b2af5ce60744812661ff0195e0f48e2841421a7f7c1f355b513a7e = $this->env->getExtension("native_profiler");
        $__internal_7b40c68172b2af5ce60744812661ff0195e0f48e2841421a7f7c1f355b513a7e->enter($__internal_7b40c68172b2af5ce60744812661ff0195e0f48e2841421a7f7c1f355b513a7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7b40c68172b2af5ce60744812661ff0195e0f48e2841421a7f7c1f355b513a7e->leave($__internal_7b40c68172b2af5ce60744812661ff0195e0f48e2841421a7f7c1f355b513a7e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ef768cd10e2abfe6ee83842ce2d7e1443e0ac740694bc446ba1a2d37801fd574 = $this->env->getExtension("native_profiler");
        $__internal_ef768cd10e2abfe6ee83842ce2d7e1443e0ac740694bc446ba1a2d37801fd574->enter($__internal_ef768cd10e2abfe6ee83842ce2d7e1443e0ac740694bc446ba1a2d37801fd574_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ef768cd10e2abfe6ee83842ce2d7e1443e0ac740694bc446ba1a2d37801fd574->leave($__internal_ef768cd10e2abfe6ee83842ce2d7e1443e0ac740694bc446ba1a2d37801fd574_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d4ed5fba6b53e12e5d7ba16e56552341597b62eb517cfe5b54e16f0d36d07649 = $this->env->getExtension("native_profiler");
        $__internal_d4ed5fba6b53e12e5d7ba16e56552341597b62eb517cfe5b54e16f0d36d07649->enter($__internal_d4ed5fba6b53e12e5d7ba16e56552341597b62eb517cfe5b54e16f0d36d07649_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d4ed5fba6b53e12e5d7ba16e56552341597b62eb517cfe5b54e16f0d36d07649->leave($__internal_d4ed5fba6b53e12e5d7ba16e56552341597b62eb517cfe5b54e16f0d36d07649_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4612b8828aa5b00dcc8f1ae0c88d5c9fe7780b1ffd67cb018dc13c98080cc3d5 = $this->env->getExtension("native_profiler");
        $__internal_4612b8828aa5b00dcc8f1ae0c88d5c9fe7780b1ffd67cb018dc13c98080cc3d5->enter($__internal_4612b8828aa5b00dcc8f1ae0c88d5c9fe7780b1ffd67cb018dc13c98080cc3d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_4612b8828aa5b00dcc8f1ae0c88d5c9fe7780b1ffd67cb018dc13c98080cc3d5->leave($__internal_4612b8828aa5b00dcc8f1ae0c88d5c9fe7780b1ffd67cb018dc13c98080cc3d5_prof);

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
