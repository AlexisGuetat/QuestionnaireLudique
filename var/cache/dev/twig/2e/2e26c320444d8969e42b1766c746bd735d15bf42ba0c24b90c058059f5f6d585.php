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
        $__internal_ef87e6bca328cecd5c4e29b9c517fcf365b36b5467ffe16d4d216fe80d903132 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ef87e6bca328cecd5c4e29b9c517fcf365b36b5467ffe16d4d216fe80d903132->enter($__internal_ef87e6bca328cecd5c4e29b9c517fcf365b36b5467ffe16d4d216fe80d903132_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_b4d41831e11e8d01a614b4606359ec0b4e29865dd5b4871b2c0dabe76d545086 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4d41831e11e8d01a614b4606359ec0b4e29865dd5b4871b2c0dabe76d545086->enter($__internal_b4d41831e11e8d01a614b4606359ec0b4e29865dd5b4871b2c0dabe76d545086_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ef87e6bca328cecd5c4e29b9c517fcf365b36b5467ffe16d4d216fe80d903132->leave($__internal_ef87e6bca328cecd5c4e29b9c517fcf365b36b5467ffe16d4d216fe80d903132_prof);

        
        $__internal_b4d41831e11e8d01a614b4606359ec0b4e29865dd5b4871b2c0dabe76d545086->leave($__internal_b4d41831e11e8d01a614b4606359ec0b4e29865dd5b4871b2c0dabe76d545086_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e9bb166ac5a5dd89440acfa25a360784314e92cc718253330b1abb2cbc0f065b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9bb166ac5a5dd89440acfa25a360784314e92cc718253330b1abb2cbc0f065b->enter($__internal_e9bb166ac5a5dd89440acfa25a360784314e92cc718253330b1abb2cbc0f065b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_b7874b0778ab6ac56d1872dcc01bf0ed09acc2da79cf431a6fcd3ece9c20c1db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7874b0778ab6ac56d1872dcc01bf0ed09acc2da79cf431a6fcd3ece9c20c1db->enter($__internal_b7874b0778ab6ac56d1872dcc01bf0ed09acc2da79cf431a6fcd3ece9c20c1db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b7874b0778ab6ac56d1872dcc01bf0ed09acc2da79cf431a6fcd3ece9c20c1db->leave($__internal_b7874b0778ab6ac56d1872dcc01bf0ed09acc2da79cf431a6fcd3ece9c20c1db_prof);

        
        $__internal_e9bb166ac5a5dd89440acfa25a360784314e92cc718253330b1abb2cbc0f065b->leave($__internal_e9bb166ac5a5dd89440acfa25a360784314e92cc718253330b1abb2cbc0f065b_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_81ba0f1fbe009f4ea3ea19eb8058db4fa6810d743723d02586cab1ca85988389 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81ba0f1fbe009f4ea3ea19eb8058db4fa6810d743723d02586cab1ca85988389->enter($__internal_81ba0f1fbe009f4ea3ea19eb8058db4fa6810d743723d02586cab1ca85988389_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_04ccc26b2905369e0b6c882d2194d8d410a658878de98f8b431653ca853f8aea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04ccc26b2905369e0b6c882d2194d8d410a658878de98f8b431653ca853f8aea->enter($__internal_04ccc26b2905369e0b6c882d2194d8d410a658878de98f8b431653ca853f8aea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_04ccc26b2905369e0b6c882d2194d8d410a658878de98f8b431653ca853f8aea->leave($__internal_04ccc26b2905369e0b6c882d2194d8d410a658878de98f8b431653ca853f8aea_prof);

        
        $__internal_81ba0f1fbe009f4ea3ea19eb8058db4fa6810d743723d02586cab1ca85988389->leave($__internal_81ba0f1fbe009f4ea3ea19eb8058db4fa6810d743723d02586cab1ca85988389_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_588c1af31e688b5be130b56afbdf57aafc001399372fee69f4431bf15031fb1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_588c1af31e688b5be130b56afbdf57aafc001399372fee69f4431bf15031fb1f->enter($__internal_588c1af31e688b5be130b56afbdf57aafc001399372fee69f4431bf15031fb1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d9ecc72e035b820dde4e91f09535a3b3f7754d2a368c368c0a588c201ca0f601 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9ecc72e035b820dde4e91f09535a3b3f7754d2a368c368c0a588c201ca0f601->enter($__internal_d9ecc72e035b820dde4e91f09535a3b3f7754d2a368c368c0a588c201ca0f601_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d9ecc72e035b820dde4e91f09535a3b3f7754d2a368c368c0a588c201ca0f601->leave($__internal_d9ecc72e035b820dde4e91f09535a3b3f7754d2a368c368c0a588c201ca0f601_prof);

        
        $__internal_588c1af31e688b5be130b56afbdf57aafc001399372fee69f4431bf15031fb1f->leave($__internal_588c1af31e688b5be130b56afbdf57aafc001399372fee69f4431bf15031fb1f_prof);

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
