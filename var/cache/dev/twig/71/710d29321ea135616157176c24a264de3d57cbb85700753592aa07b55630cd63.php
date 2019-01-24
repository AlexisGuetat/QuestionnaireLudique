<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_8f927db504ca5d7c564275a44e390a5d36d6851a421d9750fed101795063686c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_03dfccd4a5d8af6ef10f167fbf941c8f487189756526d7b2bb3fcaf8211cfc27 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03dfccd4a5d8af6ef10f167fbf941c8f487189756526d7b2bb3fcaf8211cfc27->enter($__internal_03dfccd4a5d8af6ef10f167fbf941c8f487189756526d7b2bb3fcaf8211cfc27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_1cb4b9fe8962c5ae029c7108b49f8ce80859bc397366164f8a41f2bc708e1557 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1cb4b9fe8962c5ae029c7108b49f8ce80859bc397366164f8a41f2bc708e1557->enter($__internal_1cb4b9fe8962c5ae029c7108b49f8ce80859bc397366164f8a41f2bc708e1557_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_03dfccd4a5d8af6ef10f167fbf941c8f487189756526d7b2bb3fcaf8211cfc27->leave($__internal_03dfccd4a5d8af6ef10f167fbf941c8f487189756526d7b2bb3fcaf8211cfc27_prof);

        
        $__internal_1cb4b9fe8962c5ae029c7108b49f8ce80859bc397366164f8a41f2bc708e1557->leave($__internal_1cb4b9fe8962c5ae029c7108b49f8ce80859bc397366164f8a41f2bc708e1557_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_22149ab4585b00fe774de60cd4c8a63211a0541713748d61eef6f8a8a28e62cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22149ab4585b00fe774de60cd4c8a63211a0541713748d61eef6f8a8a28e62cf->enter($__internal_22149ab4585b00fe774de60cd4c8a63211a0541713748d61eef6f8a8a28e62cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_dae8b9dfe4eaf9ccc8bcea904c5dff9070cc60cc46241dca4bc2373f31c896a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dae8b9dfe4eaf9ccc8bcea904c5dff9070cc60cc46241dca4bc2373f31c896a6->enter($__internal_dae8b9dfe4eaf9ccc8bcea904c5dff9070cc60cc46241dca4bc2373f31c896a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_dae8b9dfe4eaf9ccc8bcea904c5dff9070cc60cc46241dca4bc2373f31c896a6->leave($__internal_dae8b9dfe4eaf9ccc8bcea904c5dff9070cc60cc46241dca4bc2373f31c896a6_prof);

        
        $__internal_22149ab4585b00fe774de60cd4c8a63211a0541713748d61eef6f8a8a28e62cf->leave($__internal_22149ab4585b00fe774de60cd4c8a63211a0541713748d61eef6f8a8a28e62cf_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "D:\\wamp64\\www\\questionnaireLudique\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
