<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_6d3701e11c4fab612181e13890188fbdf7f45a70e969647da53a0170b0c8c763 extends Twig_Template
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
        $__internal_f38182ee67a7ac567349157e2a9fcd2ba940649bbdb359a18dbf6b99987083d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f38182ee67a7ac567349157e2a9fcd2ba940649bbdb359a18dbf6b99987083d7->enter($__internal_f38182ee67a7ac567349157e2a9fcd2ba940649bbdb359a18dbf6b99987083d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_bd0a18040ab6a7a7eb60b716561778e0261a6207a41046c745a9805c13c10f82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd0a18040ab6a7a7eb60b716561778e0261a6207a41046c745a9805c13c10f82->enter($__internal_bd0a18040ab6a7a7eb60b716561778e0261a6207a41046c745a9805c13c10f82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f38182ee67a7ac567349157e2a9fcd2ba940649bbdb359a18dbf6b99987083d7->leave($__internal_f38182ee67a7ac567349157e2a9fcd2ba940649bbdb359a18dbf6b99987083d7_prof);

        
        $__internal_bd0a18040ab6a7a7eb60b716561778e0261a6207a41046c745a9805c13c10f82->leave($__internal_bd0a18040ab6a7a7eb60b716561778e0261a6207a41046c745a9805c13c10f82_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_9a963fe363ec32aa675b13453cedd53fb43ee33069cab82ecc4dcf6ee6703c2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a963fe363ec32aa675b13453cedd53fb43ee33069cab82ecc4dcf6ee6703c2d->enter($__internal_9a963fe363ec32aa675b13453cedd53fb43ee33069cab82ecc4dcf6ee6703c2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_e690f987ec0f9a98df24d4b7f13a551a31d0be6db31b5793ac87069a246eb82f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e690f987ec0f9a98df24d4b7f13a551a31d0be6db31b5793ac87069a246eb82f->enter($__internal_e690f987ec0f9a98df24d4b7f13a551a31d0be6db31b5793ac87069a246eb82f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_e690f987ec0f9a98df24d4b7f13a551a31d0be6db31b5793ac87069a246eb82f->leave($__internal_e690f987ec0f9a98df24d4b7f13a551a31d0be6db31b5793ac87069a246eb82f_prof);

        
        $__internal_9a963fe363ec32aa675b13453cedd53fb43ee33069cab82ecc4dcf6ee6703c2d->leave($__internal_9a963fe363ec32aa675b13453cedd53fb43ee33069cab82ecc4dcf6ee6703c2d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_879feceea48f59d6bfade88dfe4ee3b94d3f958145beb6e10faed05b9c1db2e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_879feceea48f59d6bfade88dfe4ee3b94d3f958145beb6e10faed05b9c1db2e1->enter($__internal_879feceea48f59d6bfade88dfe4ee3b94d3f958145beb6e10faed05b9c1db2e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_b74ad8dd8153f067e540fc88bc09c428503ed8250ca909d297e49a179d6e98f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b74ad8dd8153f067e540fc88bc09c428503ed8250ca909d297e49a179d6e98f5->enter($__internal_b74ad8dd8153f067e540fc88bc09c428503ed8250ca909d297e49a179d6e98f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b74ad8dd8153f067e540fc88bc09c428503ed8250ca909d297e49a179d6e98f5->leave($__internal_b74ad8dd8153f067e540fc88bc09c428503ed8250ca909d297e49a179d6e98f5_prof);

        
        $__internal_879feceea48f59d6bfade88dfe4ee3b94d3f958145beb6e10faed05b9c1db2e1->leave($__internal_879feceea48f59d6bfade88dfe4ee3b94d3f958145beb6e10faed05b9c1db2e1_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_76cfbc8a59a2d8745bdb8bbee03d9d4abe0c72c4169d68c3717b36e66f75f1cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76cfbc8a59a2d8745bdb8bbee03d9d4abe0c72c4169d68c3717b36e66f75f1cb->enter($__internal_76cfbc8a59a2d8745bdb8bbee03d9d4abe0c72c4169d68c3717b36e66f75f1cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_0f315504cdc831932ef1227100c0517ac43abf5f3b165c091d33ec16af97a487 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f315504cdc831932ef1227100c0517ac43abf5f3b165c091d33ec16af97a487->enter($__internal_0f315504cdc831932ef1227100c0517ac43abf5f3b165c091d33ec16af97a487_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_0f315504cdc831932ef1227100c0517ac43abf5f3b165c091d33ec16af97a487->leave($__internal_0f315504cdc831932ef1227100c0517ac43abf5f3b165c091d33ec16af97a487_prof);

        
        $__internal_76cfbc8a59a2d8745bdb8bbee03d9d4abe0c72c4169d68c3717b36e66f75f1cb->leave($__internal_76cfbc8a59a2d8745bdb8bbee03d9d4abe0c72c4169d68c3717b36e66f75f1cb_prof);

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
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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
", "@WebProfiler/Collector/router.html.twig", "D:\\wamp64\\www\\questionnaireLudique\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
