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
        $__internal_063a59e19b382fbcb3a9fcbf9921cd37057e130b762f3a2f0e64af2fb7ca9aaf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_063a59e19b382fbcb3a9fcbf9921cd37057e130b762f3a2f0e64af2fb7ca9aaf->enter($__internal_063a59e19b382fbcb3a9fcbf9921cd37057e130b762f3a2f0e64af2fb7ca9aaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_278f7e405a35fd0d00fe3824442b0766657a7b4e728128490cb691efbaefcc4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_278f7e405a35fd0d00fe3824442b0766657a7b4e728128490cb691efbaefcc4c->enter($__internal_278f7e405a35fd0d00fe3824442b0766657a7b4e728128490cb691efbaefcc4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_063a59e19b382fbcb3a9fcbf9921cd37057e130b762f3a2f0e64af2fb7ca9aaf->leave($__internal_063a59e19b382fbcb3a9fcbf9921cd37057e130b762f3a2f0e64af2fb7ca9aaf_prof);

        
        $__internal_278f7e405a35fd0d00fe3824442b0766657a7b4e728128490cb691efbaefcc4c->leave($__internal_278f7e405a35fd0d00fe3824442b0766657a7b4e728128490cb691efbaefcc4c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5bb1a930228c6212e7b3b7bbe49b67d9ab00dc1077136684628f1763b13640d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5bb1a930228c6212e7b3b7bbe49b67d9ab00dc1077136684628f1763b13640d3->enter($__internal_5bb1a930228c6212e7b3b7bbe49b67d9ab00dc1077136684628f1763b13640d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_7a2bbad07c5e5ed44365a1e6f935311df4c105f542e3da62c04ecf1ce252e09e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a2bbad07c5e5ed44365a1e6f935311df4c105f542e3da62c04ecf1ce252e09e->enter($__internal_7a2bbad07c5e5ed44365a1e6f935311df4c105f542e3da62c04ecf1ce252e09e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_7a2bbad07c5e5ed44365a1e6f935311df4c105f542e3da62c04ecf1ce252e09e->leave($__internal_7a2bbad07c5e5ed44365a1e6f935311df4c105f542e3da62c04ecf1ce252e09e_prof);

        
        $__internal_5bb1a930228c6212e7b3b7bbe49b67d9ab00dc1077136684628f1763b13640d3->leave($__internal_5bb1a930228c6212e7b3b7bbe49b67d9ab00dc1077136684628f1763b13640d3_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_edfe867f9f79e4ac3071d6b405442f3e1d143db73078767b12247b1d43b29620 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_edfe867f9f79e4ac3071d6b405442f3e1d143db73078767b12247b1d43b29620->enter($__internal_edfe867f9f79e4ac3071d6b405442f3e1d143db73078767b12247b1d43b29620_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_10ef235d08630bdd09e701ce825386af33dbb49ac5c04be2b6342b0425a29868 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10ef235d08630bdd09e701ce825386af33dbb49ac5c04be2b6342b0425a29868->enter($__internal_10ef235d08630bdd09e701ce825386af33dbb49ac5c04be2b6342b0425a29868_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_10ef235d08630bdd09e701ce825386af33dbb49ac5c04be2b6342b0425a29868->leave($__internal_10ef235d08630bdd09e701ce825386af33dbb49ac5c04be2b6342b0425a29868_prof);

        
        $__internal_edfe867f9f79e4ac3071d6b405442f3e1d143db73078767b12247b1d43b29620->leave($__internal_edfe867f9f79e4ac3071d6b405442f3e1d143db73078767b12247b1d43b29620_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ff311eaf22f3a5fcfd59c4917f5c5f56392f351d98c9e91f25833e40ccd18cef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff311eaf22f3a5fcfd59c4917f5c5f56392f351d98c9e91f25833e40ccd18cef->enter($__internal_ff311eaf22f3a5fcfd59c4917f5c5f56392f351d98c9e91f25833e40ccd18cef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4067d0d974d88a9aaf8bfd8f3b0d1d015ea80e6bec84fbd9157e190f5af6d303 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4067d0d974d88a9aaf8bfd8f3b0d1d015ea80e6bec84fbd9157e190f5af6d303->enter($__internal_4067d0d974d88a9aaf8bfd8f3b0d1d015ea80e6bec84fbd9157e190f5af6d303_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_4067d0d974d88a9aaf8bfd8f3b0d1d015ea80e6bec84fbd9157e190f5af6d303->leave($__internal_4067d0d974d88a9aaf8bfd8f3b0d1d015ea80e6bec84fbd9157e190f5af6d303_prof);

        
        $__internal_ff311eaf22f3a5fcfd59c4917f5c5f56392f351d98c9e91f25833e40ccd18cef->leave($__internal_ff311eaf22f3a5fcfd59c4917f5c5f56392f351d98c9e91f25833e40ccd18cef_prof);

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
