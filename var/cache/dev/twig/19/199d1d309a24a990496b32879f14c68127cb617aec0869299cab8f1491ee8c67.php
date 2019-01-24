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
        $__internal_5ef44e63acab61776968423e32f51efcbd9b69f752f92f8ad6f2eded0ac27403 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ef44e63acab61776968423e32f51efcbd9b69f752f92f8ad6f2eded0ac27403->enter($__internal_5ef44e63acab61776968423e32f51efcbd9b69f752f92f8ad6f2eded0ac27403_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_6b638c5fac28e26fa1cd5d4519b8af08f7a55eca063469f2e407ef9e2f4bc27e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b638c5fac28e26fa1cd5d4519b8af08f7a55eca063469f2e407ef9e2f4bc27e->enter($__internal_6b638c5fac28e26fa1cd5d4519b8af08f7a55eca063469f2e407ef9e2f4bc27e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5ef44e63acab61776968423e32f51efcbd9b69f752f92f8ad6f2eded0ac27403->leave($__internal_5ef44e63acab61776968423e32f51efcbd9b69f752f92f8ad6f2eded0ac27403_prof);

        
        $__internal_6b638c5fac28e26fa1cd5d4519b8af08f7a55eca063469f2e407ef9e2f4bc27e->leave($__internal_6b638c5fac28e26fa1cd5d4519b8af08f7a55eca063469f2e407ef9e2f4bc27e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_31af0610a7c5d52269d4e5cd8c8a83e3055a59f155b8287cf57d774780857c4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31af0610a7c5d52269d4e5cd8c8a83e3055a59f155b8287cf57d774780857c4a->enter($__internal_31af0610a7c5d52269d4e5cd8c8a83e3055a59f155b8287cf57d774780857c4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ba73de79a76977b70606b9d941dc0115ffca16f30210674a193eeedcb9935193 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba73de79a76977b70606b9d941dc0115ffca16f30210674a193eeedcb9935193->enter($__internal_ba73de79a76977b70606b9d941dc0115ffca16f30210674a193eeedcb9935193_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_ba73de79a76977b70606b9d941dc0115ffca16f30210674a193eeedcb9935193->leave($__internal_ba73de79a76977b70606b9d941dc0115ffca16f30210674a193eeedcb9935193_prof);

        
        $__internal_31af0610a7c5d52269d4e5cd8c8a83e3055a59f155b8287cf57d774780857c4a->leave($__internal_31af0610a7c5d52269d4e5cd8c8a83e3055a59f155b8287cf57d774780857c4a_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_39d496afd468b43353d29a0b3012f284e421239a061039951e2fe866246d400a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39d496afd468b43353d29a0b3012f284e421239a061039951e2fe866246d400a->enter($__internal_39d496afd468b43353d29a0b3012f284e421239a061039951e2fe866246d400a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_e8e688ea9455b69c010aa99a2af04303bbe0f4d0ce64d953b2bb89a875deb97b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8e688ea9455b69c010aa99a2af04303bbe0f4d0ce64d953b2bb89a875deb97b->enter($__internal_e8e688ea9455b69c010aa99a2af04303bbe0f4d0ce64d953b2bb89a875deb97b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_e8e688ea9455b69c010aa99a2af04303bbe0f4d0ce64d953b2bb89a875deb97b->leave($__internal_e8e688ea9455b69c010aa99a2af04303bbe0f4d0ce64d953b2bb89a875deb97b_prof);

        
        $__internal_39d496afd468b43353d29a0b3012f284e421239a061039951e2fe866246d400a->leave($__internal_39d496afd468b43353d29a0b3012f284e421239a061039951e2fe866246d400a_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_02840e0ff6a31281e2d6d6c75e07273274726c0bf0b31f10a216c72c699deb7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02840e0ff6a31281e2d6d6c75e07273274726c0bf0b31f10a216c72c699deb7e->enter($__internal_02840e0ff6a31281e2d6d6c75e07273274726c0bf0b31f10a216c72c699deb7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_54a128836b254e2f978aa215b7fc608c95b5db1a1e0780ab297931fbc91afe12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54a128836b254e2f978aa215b7fc608c95b5db1a1e0780ab297931fbc91afe12->enter($__internal_54a128836b254e2f978aa215b7fc608c95b5db1a1e0780ab297931fbc91afe12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_54a128836b254e2f978aa215b7fc608c95b5db1a1e0780ab297931fbc91afe12->leave($__internal_54a128836b254e2f978aa215b7fc608c95b5db1a1e0780ab297931fbc91afe12_prof);

        
        $__internal_02840e0ff6a31281e2d6d6c75e07273274726c0bf0b31f10a216c72c699deb7e->leave($__internal_02840e0ff6a31281e2d6d6c75e07273274726c0bf0b31f10a216c72c699deb7e_prof);

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
