<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_8036970b2f6c4eebcb26741f343431e46198547e170ecb11af2f9ef3d6502a5f extends Twig_Template
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
        $__internal_283431e6892d74f308d3ece142eb174d4cbb6edfe06ec270f5fbbb64f44211b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_283431e6892d74f308d3ece142eb174d4cbb6edfe06ec270f5fbbb64f44211b9->enter($__internal_283431e6892d74f308d3ece142eb174d4cbb6edfe06ec270f5fbbb64f44211b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_5a083d2e6ad5f37d543de424c3ad6ffa6086d59cf9351386131f62dd7876dbc5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a083d2e6ad5f37d543de424c3ad6ffa6086d59cf9351386131f62dd7876dbc5->enter($__internal_5a083d2e6ad5f37d543de424c3ad6ffa6086d59cf9351386131f62dd7876dbc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_283431e6892d74f308d3ece142eb174d4cbb6edfe06ec270f5fbbb64f44211b9->leave($__internal_283431e6892d74f308d3ece142eb174d4cbb6edfe06ec270f5fbbb64f44211b9_prof);

        
        $__internal_5a083d2e6ad5f37d543de424c3ad6ffa6086d59cf9351386131f62dd7876dbc5->leave($__internal_5a083d2e6ad5f37d543de424c3ad6ffa6086d59cf9351386131f62dd7876dbc5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e5190b80aeb6bcafc0eddb012bc4bbb8653e5dd4fa2b6361f04ad4f69ec0b6aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5190b80aeb6bcafc0eddb012bc4bbb8653e5dd4fa2b6361f04ad4f69ec0b6aa->enter($__internal_e5190b80aeb6bcafc0eddb012bc4bbb8653e5dd4fa2b6361f04ad4f69ec0b6aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_5618cc511dd147409a1fd70ae339ba7d096c49812e1e1387ba851e4764e5176e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5618cc511dd147409a1fd70ae339ba7d096c49812e1e1387ba851e4764e5176e->enter($__internal_5618cc511dd147409a1fd70ae339ba7d096c49812e1e1387ba851e4764e5176e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_5618cc511dd147409a1fd70ae339ba7d096c49812e1e1387ba851e4764e5176e->leave($__internal_5618cc511dd147409a1fd70ae339ba7d096c49812e1e1387ba851e4764e5176e_prof);

        
        $__internal_e5190b80aeb6bcafc0eddb012bc4bbb8653e5dd4fa2b6361f04ad4f69ec0b6aa->leave($__internal_e5190b80aeb6bcafc0eddb012bc4bbb8653e5dd4fa2b6361f04ad4f69ec0b6aa_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0527575d656e1fb59476e8a11a2fd5c17764c90db14972923dcb885150fc926a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0527575d656e1fb59476e8a11a2fd5c17764c90db14972923dcb885150fc926a->enter($__internal_0527575d656e1fb59476e8a11a2fd5c17764c90db14972923dcb885150fc926a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_54f65fa39a114eb8877ba1b3907a48b08d5e952b1c5754995a07190c419ff403 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54f65fa39a114eb8877ba1b3907a48b08d5e952b1c5754995a07190c419ff403->enter($__internal_54f65fa39a114eb8877ba1b3907a48b08d5e952b1c5754995a07190c419ff403_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_54f65fa39a114eb8877ba1b3907a48b08d5e952b1c5754995a07190c419ff403->leave($__internal_54f65fa39a114eb8877ba1b3907a48b08d5e952b1c5754995a07190c419ff403_prof);

        
        $__internal_0527575d656e1fb59476e8a11a2fd5c17764c90db14972923dcb885150fc926a->leave($__internal_0527575d656e1fb59476e8a11a2fd5c17764c90db14972923dcb885150fc926a_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_87b8843e75ae1bb1182d19cd37b85f9716d11bd6bd8da3a0d20b66583f5e132e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87b8843e75ae1bb1182d19cd37b85f9716d11bd6bd8da3a0d20b66583f5e132e->enter($__internal_87b8843e75ae1bb1182d19cd37b85f9716d11bd6bd8da3a0d20b66583f5e132e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6c9d93cbf4b0fd5e0d8523b9d0ed1c985275f2a136cd6a705cd54881af6591ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c9d93cbf4b0fd5e0d8523b9d0ed1c985275f2a136cd6a705cd54881af6591ca->enter($__internal_6c9d93cbf4b0fd5e0d8523b9d0ed1c985275f2a136cd6a705cd54881af6591ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_6c9d93cbf4b0fd5e0d8523b9d0ed1c985275f2a136cd6a705cd54881af6591ca->leave($__internal_6c9d93cbf4b0fd5e0d8523b9d0ed1c985275f2a136cd6a705cd54881af6591ca_prof);

        
        $__internal_87b8843e75ae1bb1182d19cd37b85f9716d11bd6bd8da3a0d20b66583f5e132e->leave($__internal_87b8843e75ae1bb1182d19cd37b85f9716d11bd6bd8da3a0d20b66583f5e132e_prof);

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
", "@WebProfiler/Collector/exception.html.twig", "/var/www/QuestionnaireLudique/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
