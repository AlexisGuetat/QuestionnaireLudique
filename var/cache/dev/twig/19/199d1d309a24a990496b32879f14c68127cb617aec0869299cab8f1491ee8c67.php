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
        $__internal_aba0696b5a6ec155968e661fd18cbb441ed61b37d1aeb3c42f0fe7a3af78f6fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aba0696b5a6ec155968e661fd18cbb441ed61b37d1aeb3c42f0fe7a3af78f6fd->enter($__internal_aba0696b5a6ec155968e661fd18cbb441ed61b37d1aeb3c42f0fe7a3af78f6fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_6fcb6b1fa43f94e444f9420aee6f67ee5b8318d1cb0d559c767af172e76fbcf8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fcb6b1fa43f94e444f9420aee6f67ee5b8318d1cb0d559c767af172e76fbcf8->enter($__internal_6fcb6b1fa43f94e444f9420aee6f67ee5b8318d1cb0d559c767af172e76fbcf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aba0696b5a6ec155968e661fd18cbb441ed61b37d1aeb3c42f0fe7a3af78f6fd->leave($__internal_aba0696b5a6ec155968e661fd18cbb441ed61b37d1aeb3c42f0fe7a3af78f6fd_prof);

        
        $__internal_6fcb6b1fa43f94e444f9420aee6f67ee5b8318d1cb0d559c767af172e76fbcf8->leave($__internal_6fcb6b1fa43f94e444f9420aee6f67ee5b8318d1cb0d559c767af172e76fbcf8_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_419b0138cc54d26d6ba0c2635612dcb0ba7a1a2ef95eb90131361ed2549c713b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_419b0138cc54d26d6ba0c2635612dcb0ba7a1a2ef95eb90131361ed2549c713b->enter($__internal_419b0138cc54d26d6ba0c2635612dcb0ba7a1a2ef95eb90131361ed2549c713b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_73af27ef2484da00f46c7076a77ae5a161079f2d6079ab8704b017685e49cecd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73af27ef2484da00f46c7076a77ae5a161079f2d6079ab8704b017685e49cecd->enter($__internal_73af27ef2484da00f46c7076a77ae5a161079f2d6079ab8704b017685e49cecd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_73af27ef2484da00f46c7076a77ae5a161079f2d6079ab8704b017685e49cecd->leave($__internal_73af27ef2484da00f46c7076a77ae5a161079f2d6079ab8704b017685e49cecd_prof);

        
        $__internal_419b0138cc54d26d6ba0c2635612dcb0ba7a1a2ef95eb90131361ed2549c713b->leave($__internal_419b0138cc54d26d6ba0c2635612dcb0ba7a1a2ef95eb90131361ed2549c713b_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_08f057a21d82851a549bfbb3fac2d21caf228c4dccf03efc8fa95f55c3e87fc9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08f057a21d82851a549bfbb3fac2d21caf228c4dccf03efc8fa95f55c3e87fc9->enter($__internal_08f057a21d82851a549bfbb3fac2d21caf228c4dccf03efc8fa95f55c3e87fc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_bb8e3330894497f798de4328bf7c93a66fd22c51ab9cc42f361d4af4295006df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb8e3330894497f798de4328bf7c93a66fd22c51ab9cc42f361d4af4295006df->enter($__internal_bb8e3330894497f798de4328bf7c93a66fd22c51ab9cc42f361d4af4295006df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_bb8e3330894497f798de4328bf7c93a66fd22c51ab9cc42f361d4af4295006df->leave($__internal_bb8e3330894497f798de4328bf7c93a66fd22c51ab9cc42f361d4af4295006df_prof);

        
        $__internal_08f057a21d82851a549bfbb3fac2d21caf228c4dccf03efc8fa95f55c3e87fc9->leave($__internal_08f057a21d82851a549bfbb3fac2d21caf228c4dccf03efc8fa95f55c3e87fc9_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2a85f9c75f31ae14eded951e7c8746bf0ccd48573d46da879a5a0a0302d8082d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a85f9c75f31ae14eded951e7c8746bf0ccd48573d46da879a5a0a0302d8082d->enter($__internal_2a85f9c75f31ae14eded951e7c8746bf0ccd48573d46da879a5a0a0302d8082d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_994b41d25ad9a57902edd53208a17a6aaa690a17a0eeb0fe3290c891baef506b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_994b41d25ad9a57902edd53208a17a6aaa690a17a0eeb0fe3290c891baef506b->enter($__internal_994b41d25ad9a57902edd53208a17a6aaa690a17a0eeb0fe3290c891baef506b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_994b41d25ad9a57902edd53208a17a6aaa690a17a0eeb0fe3290c891baef506b->leave($__internal_994b41d25ad9a57902edd53208a17a6aaa690a17a0eeb0fe3290c891baef506b_prof);

        
        $__internal_2a85f9c75f31ae14eded951e7c8746bf0ccd48573d46da879a5a0a0302d8082d->leave($__internal_2a85f9c75f31ae14eded951e7c8746bf0ccd48573d46da879a5a0a0302d8082d_prof);

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
