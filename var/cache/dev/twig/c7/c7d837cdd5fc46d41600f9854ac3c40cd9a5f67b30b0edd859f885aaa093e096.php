<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_78568025a64018db56cddbbe327ef9cc72da0ad030f0569b87992deaf2fddbf0 extends Twig_Template
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
        $__internal_f3fee14f4c0670b1ab4884cab90ad98c06105fbd17f121568e481510646c27f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3fee14f4c0670b1ab4884cab90ad98c06105fbd17f121568e481510646c27f3->enter($__internal_f3fee14f4c0670b1ab4884cab90ad98c06105fbd17f121568e481510646c27f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f3fee14f4c0670b1ab4884cab90ad98c06105fbd17f121568e481510646c27f3->leave($__internal_f3fee14f4c0670b1ab4884cab90ad98c06105fbd17f121568e481510646c27f3_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_330ffcd182e9132afa0075137f2c3980fbeb0d2d0da93eece8db6b0913a737bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_330ffcd182e9132afa0075137f2c3980fbeb0d2d0da93eece8db6b0913a737bb->enter($__internal_330ffcd182e9132afa0075137f2c3980fbeb0d2d0da93eece8db6b0913a737bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        
        $__internal_330ffcd182e9132afa0075137f2c3980fbeb0d2d0da93eece8db6b0913a737bb->leave($__internal_330ffcd182e9132afa0075137f2c3980fbeb0d2d0da93eece8db6b0913a737bb_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_59e86ddce178374edba8a102003b583ef98d00ca33f64e32b0b0d67eae2add25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59e86ddce178374edba8a102003b583ef98d00ca33f64e32b0b0d67eae2add25->enter($__internal_59e86ddce178374edba8a102003b583ef98d00ca33f64e32b0b0d67eae2add25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_59e86ddce178374edba8a102003b583ef98d00ca33f64e32b0b0d67eae2add25->leave($__internal_59e86ddce178374edba8a102003b583ef98d00ca33f64e32b0b0d67eae2add25_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_cf57cc3611b5b123dac6deef896bf3f2a5d16805ac3025949f0a49ab6f108b20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf57cc3611b5b123dac6deef896bf3f2a5d16805ac3025949f0a49ab6f108b20->enter($__internal_cf57cc3611b5b123dac6deef896bf3f2a5d16805ac3025949f0a49ab6f108b20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "@WebProfiler/Collector/router.html.twig"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_cf57cc3611b5b123dac6deef896bf3f2a5d16805ac3025949f0a49ab6f108b20->leave($__internal_cf57cc3611b5b123dac6deef896bf3f2a5d16805ac3025949f0a49ab6f108b20_prof);

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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
