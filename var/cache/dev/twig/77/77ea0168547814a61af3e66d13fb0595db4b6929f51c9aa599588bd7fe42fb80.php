<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_a45254030d9cc98b662ca4ab41f1a18fca407871221561dd5b3a8f7c6d58d3e3 extends Twig_Template
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
        $__internal_ffcb359b40ffad34b6552671c61ed83ea2ccdc0ed8793efaeae70d842d0d7385 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ffcb359b40ffad34b6552671c61ed83ea2ccdc0ed8793efaeae70d842d0d7385->enter($__internal_ffcb359b40ffad34b6552671c61ed83ea2ccdc0ed8793efaeae70d842d0d7385_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_10f727ea1797d4f198d87a935d36a7715ddd373f614d174630bfd7f8f64e3304 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10f727ea1797d4f198d87a935d36a7715ddd373f614d174630bfd7f8f64e3304->enter($__internal_10f727ea1797d4f198d87a935d36a7715ddd373f614d174630bfd7f8f64e3304_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ffcb359b40ffad34b6552671c61ed83ea2ccdc0ed8793efaeae70d842d0d7385->leave($__internal_ffcb359b40ffad34b6552671c61ed83ea2ccdc0ed8793efaeae70d842d0d7385_prof);

        
        $__internal_10f727ea1797d4f198d87a935d36a7715ddd373f614d174630bfd7f8f64e3304->leave($__internal_10f727ea1797d4f198d87a935d36a7715ddd373f614d174630bfd7f8f64e3304_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_275ed0bca41ee71d4ccc00eeb325a0b09b98a8719e53fb048b1dbb47f94dca81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_275ed0bca41ee71d4ccc00eeb325a0b09b98a8719e53fb048b1dbb47f94dca81->enter($__internal_275ed0bca41ee71d4ccc00eeb325a0b09b98a8719e53fb048b1dbb47f94dca81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_7c0f5aaae9d2ee0678f2aa495fb6ccab0a98fddbbef33372cf5837691e72cf36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c0f5aaae9d2ee0678f2aa495fb6ccab0a98fddbbef33372cf5837691e72cf36->enter($__internal_7c0f5aaae9d2ee0678f2aa495fb6ccab0a98fddbbef33372cf5837691e72cf36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_7c0f5aaae9d2ee0678f2aa495fb6ccab0a98fddbbef33372cf5837691e72cf36->leave($__internal_7c0f5aaae9d2ee0678f2aa495fb6ccab0a98fddbbef33372cf5837691e72cf36_prof);

        
        $__internal_275ed0bca41ee71d4ccc00eeb325a0b09b98a8719e53fb048b1dbb47f94dca81->leave($__internal_275ed0bca41ee71d4ccc00eeb325a0b09b98a8719e53fb048b1dbb47f94dca81_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7b476ebdbea8b3c31511738cb7605855bcd96a5b1d839007a7c085de747aeaee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b476ebdbea8b3c31511738cb7605855bcd96a5b1d839007a7c085de747aeaee->enter($__internal_7b476ebdbea8b3c31511738cb7605855bcd96a5b1d839007a7c085de747aeaee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_a52396275ae452d054f3b5dac21f7e880e02da3e8e79cd6a3b80d12b82a9c8c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a52396275ae452d054f3b5dac21f7e880e02da3e8e79cd6a3b80d12b82a9c8c5->enter($__internal_a52396275ae452d054f3b5dac21f7e880e02da3e8e79cd6a3b80d12b82a9c8c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_a52396275ae452d054f3b5dac21f7e880e02da3e8e79cd6a3b80d12b82a9c8c5->leave($__internal_a52396275ae452d054f3b5dac21f7e880e02da3e8e79cd6a3b80d12b82a9c8c5_prof);

        
        $__internal_7b476ebdbea8b3c31511738cb7605855bcd96a5b1d839007a7c085de747aeaee->leave($__internal_7b476ebdbea8b3c31511738cb7605855bcd96a5b1d839007a7c085de747aeaee_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b1f5467adc7326acd6846c4edc80830a32dfc1d6e4fbbf2b3e282a2a7f924f3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1f5467adc7326acd6846c4edc80830a32dfc1d6e4fbbf2b3e282a2a7f924f3e->enter($__internal_b1f5467adc7326acd6846c4edc80830a32dfc1d6e4fbbf2b3e282a2a7f924f3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_2e63759be590e433156670c0dc9f7188df83931ca127b7a4e93574902af1146d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e63759be590e433156670c0dc9f7188df83931ca127b7a4e93574902af1146d->enter($__internal_2e63759be590e433156670c0dc9f7188df83931ca127b7a4e93574902af1146d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_2e63759be590e433156670c0dc9f7188df83931ca127b7a4e93574902af1146d->leave($__internal_2e63759be590e433156670c0dc9f7188df83931ca127b7a4e93574902af1146d_prof);

        
        $__internal_b1f5467adc7326acd6846c4edc80830a32dfc1d6e4fbbf2b3e282a2a7f924f3e->leave($__internal_b1f5467adc7326acd6846c4edc80830a32dfc1d6e4fbbf2b3e282a2a7f924f3e_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/var/www/QuestionnaireLudique/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
