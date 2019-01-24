<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_f13303ced3f79e7d77b80fff2e00c23e7e408f47f067dac344ed220d470e2609 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_63a95d98b1bff9b75b02611ca96aea14104d15cab9ce897158e1e1576a90d648 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63a95d98b1bff9b75b02611ca96aea14104d15cab9ce897158e1e1576a90d648->enter($__internal_63a95d98b1bff9b75b02611ca96aea14104d15cab9ce897158e1e1576a90d648_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_755d8b92b624a761dc97995f31cc9c438711724263ef12637d9e96c513f9f626 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_755d8b92b624a761dc97995f31cc9c438711724263ef12637d9e96c513f9f626->enter($__internal_755d8b92b624a761dc97995f31cc9c438711724263ef12637d9e96c513f9f626_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_63a95d98b1bff9b75b02611ca96aea14104d15cab9ce897158e1e1576a90d648->leave($__internal_63a95d98b1bff9b75b02611ca96aea14104d15cab9ce897158e1e1576a90d648_prof);

        
        $__internal_755d8b92b624a761dc97995f31cc9c438711724263ef12637d9e96c513f9f626->leave($__internal_755d8b92b624a761dc97995f31cc9c438711724263ef12637d9e96c513f9f626_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_82d33a79dd4c2f5592d1bece51398a2d935da48cd59c066b280c20f83112c870 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82d33a79dd4c2f5592d1bece51398a2d935da48cd59c066b280c20f83112c870->enter($__internal_82d33a79dd4c2f5592d1bece51398a2d935da48cd59c066b280c20f83112c870_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_6868a8cb59addc386cf61e2f166fd8d96195840b614071b18db9652a0eebce92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6868a8cb59addc386cf61e2f166fd8d96195840b614071b18db9652a0eebce92->enter($__internal_6868a8cb59addc386cf61e2f166fd8d96195840b614071b18db9652a0eebce92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_6868a8cb59addc386cf61e2f166fd8d96195840b614071b18db9652a0eebce92->leave($__internal_6868a8cb59addc386cf61e2f166fd8d96195840b614071b18db9652a0eebce92_prof);

        
        $__internal_82d33a79dd4c2f5592d1bece51398a2d935da48cd59c066b280c20f83112c870->leave($__internal_82d33a79dd4c2f5592d1bece51398a2d935da48cd59c066b280c20f83112c870_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f37be56c06fec4bdc0358ec03abc863c218fe4c4dd2a9171d3a08f27ee2d11fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f37be56c06fec4bdc0358ec03abc863c218fe4c4dd2a9171d3a08f27ee2d11fe->enter($__internal_f37be56c06fec4bdc0358ec03abc863c218fe4c4dd2a9171d3a08f27ee2d11fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_cfb05bf24eaf244b5307d4b1ea11cb755f45aa48e3a23486a4548f2b946974f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfb05bf24eaf244b5307d4b1ea11cb755f45aa48e3a23486a4548f2b946974f0->enter($__internal_cfb05bf24eaf244b5307d4b1ea11cb755f45aa48e3a23486a4548f2b946974f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_cfb05bf24eaf244b5307d4b1ea11cb755f45aa48e3a23486a4548f2b946974f0->leave($__internal_cfb05bf24eaf244b5307d4b1ea11cb755f45aa48e3a23486a4548f2b946974f0_prof);

        
        $__internal_f37be56c06fec4bdc0358ec03abc863c218fe4c4dd2a9171d3a08f27ee2d11fe->leave($__internal_f37be56c06fec4bdc0358ec03abc863c218fe4c4dd2a9171d3a08f27ee2d11fe_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_fa8c1b724d030f0865691458a405917c290d5a872acb0736cb5c44c827c7a5a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa8c1b724d030f0865691458a405917c290d5a872acb0736cb5c44c827c7a5a1->enter($__internal_fa8c1b724d030f0865691458a405917c290d5a872acb0736cb5c44c827c7a5a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_af6d92ce4b7bd49adf0addc1cfefe239fc1dc0378a1ce26e3033f680459d6360 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af6d92ce4b7bd49adf0addc1cfefe239fc1dc0378a1ce26e3033f680459d6360->enter($__internal_af6d92ce4b7bd49adf0addc1cfefe239fc1dc0378a1ce26e3033f680459d6360_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_af6d92ce4b7bd49adf0addc1cfefe239fc1dc0378a1ce26e3033f680459d6360->leave($__internal_af6d92ce4b7bd49adf0addc1cfefe239fc1dc0378a1ce26e3033f680459d6360_prof);

        
        $__internal_fa8c1b724d030f0865691458a405917c290d5a872acb0736cb5c44c827c7a5a1->leave($__internal_fa8c1b724d030f0865691458a405917c290d5a872acb0736cb5c44c827c7a5a1_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "D:\\wamp64\\www\\questionnaireLudique\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
