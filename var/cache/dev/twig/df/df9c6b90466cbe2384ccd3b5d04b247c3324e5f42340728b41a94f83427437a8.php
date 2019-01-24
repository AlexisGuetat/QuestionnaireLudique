<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_fa8a5e7d37e599a724c5e25efa8b2dedada76df18e8faa127f7cd56881e6d8a1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_28ca4ab2d26215eb1fa06be8f2ca84eee3052e39ecb1bab2662f06e4e07e32f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28ca4ab2d26215eb1fa06be8f2ca84eee3052e39ecb1bab2662f06e4e07e32f8->enter($__internal_28ca4ab2d26215eb1fa06be8f2ca84eee3052e39ecb1bab2662f06e4e07e32f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_e0e2a756616c081bf900163082202a8a8d241c8a44b8557be7f035d839d5b95a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0e2a756616c081bf900163082202a8a8d241c8a44b8557be7f035d839d5b95a->enter($__internal_e0e2a756616c081bf900163082202a8a8d241c8a44b8557be7f035d839d5b95a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_28ca4ab2d26215eb1fa06be8f2ca84eee3052e39ecb1bab2662f06e4e07e32f8->leave($__internal_28ca4ab2d26215eb1fa06be8f2ca84eee3052e39ecb1bab2662f06e4e07e32f8_prof);

        
        $__internal_e0e2a756616c081bf900163082202a8a8d241c8a44b8557be7f035d839d5b95a->leave($__internal_e0e2a756616c081bf900163082202a8a8d241c8a44b8557be7f035d839d5b95a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_472a134bbe476679faffcc6d42bba73f1478634ba02206a61e62a691985be9c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_472a134bbe476679faffcc6d42bba73f1478634ba02206a61e62a691985be9c5->enter($__internal_472a134bbe476679faffcc6d42bba73f1478634ba02206a61e62a691985be9c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_7cc0b9624b9dfed27e8db81f272777123ea533775e324305f2a3ca3464039267 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cc0b9624b9dfed27e8db81f272777123ea533775e324305f2a3ca3464039267->enter($__internal_7cc0b9624b9dfed27e8db81f272777123ea533775e324305f2a3ca3464039267_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_7cc0b9624b9dfed27e8db81f272777123ea533775e324305f2a3ca3464039267->leave($__internal_7cc0b9624b9dfed27e8db81f272777123ea533775e324305f2a3ca3464039267_prof);

        
        $__internal_472a134bbe476679faffcc6d42bba73f1478634ba02206a61e62a691985be9c5->leave($__internal_472a134bbe476679faffcc6d42bba73f1478634ba02206a61e62a691985be9c5_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_bce1e25c48b6ef5085dea0a745a360441d14bbb27a660844cfdf36b5d189cc05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bce1e25c48b6ef5085dea0a745a360441d14bbb27a660844cfdf36b5d189cc05->enter($__internal_bce1e25c48b6ef5085dea0a745a360441d14bbb27a660844cfdf36b5d189cc05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_01d98b799b079894d07255b71456b688e56d4c04243d035fd18a0735b91bc0f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01d98b799b079894d07255b71456b688e56d4c04243d035fd18a0735b91bc0f3->enter($__internal_01d98b799b079894d07255b71456b688e56d4c04243d035fd18a0735b91bc0f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_01d98b799b079894d07255b71456b688e56d4c04243d035fd18a0735b91bc0f3->leave($__internal_01d98b799b079894d07255b71456b688e56d4c04243d035fd18a0735b91bc0f3_prof);

        
        $__internal_bce1e25c48b6ef5085dea0a745a360441d14bbb27a660844cfdf36b5d189cc05->leave($__internal_bce1e25c48b6ef5085dea0a745a360441d14bbb27a660844cfdf36b5d189cc05_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "@WebProfiler/Profiler/open.html.twig", "D:\\wamp64\\www\\questionnaireLudique\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\open.html.twig");
    }
}
