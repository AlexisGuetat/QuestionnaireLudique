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
        $__internal_4fdfa57fea16e27bb96e955e7d76ac26a16e03e45550117b1495ceb096c527db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4fdfa57fea16e27bb96e955e7d76ac26a16e03e45550117b1495ceb096c527db->enter($__internal_4fdfa57fea16e27bb96e955e7d76ac26a16e03e45550117b1495ceb096c527db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_311e6d3dcbc44afbda216b84fa8c392717cbf6dd1070dddcae5fe7e2a7b8c800 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_311e6d3dcbc44afbda216b84fa8c392717cbf6dd1070dddcae5fe7e2a7b8c800->enter($__internal_311e6d3dcbc44afbda216b84fa8c392717cbf6dd1070dddcae5fe7e2a7b8c800_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4fdfa57fea16e27bb96e955e7d76ac26a16e03e45550117b1495ceb096c527db->leave($__internal_4fdfa57fea16e27bb96e955e7d76ac26a16e03e45550117b1495ceb096c527db_prof);

        
        $__internal_311e6d3dcbc44afbda216b84fa8c392717cbf6dd1070dddcae5fe7e2a7b8c800->leave($__internal_311e6d3dcbc44afbda216b84fa8c392717cbf6dd1070dddcae5fe7e2a7b8c800_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_58ed7a92ae3d506cc19c57b7c75e9eabb66ecdd040b0782ce2b454b9db8a44bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58ed7a92ae3d506cc19c57b7c75e9eabb66ecdd040b0782ce2b454b9db8a44bd->enter($__internal_58ed7a92ae3d506cc19c57b7c75e9eabb66ecdd040b0782ce2b454b9db8a44bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_46a0a660a28bd68f014d04adbefe3eb35ede59a263420b89d26297ecefa86a4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46a0a660a28bd68f014d04adbefe3eb35ede59a263420b89d26297ecefa86a4e->enter($__internal_46a0a660a28bd68f014d04adbefe3eb35ede59a263420b89d26297ecefa86a4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_46a0a660a28bd68f014d04adbefe3eb35ede59a263420b89d26297ecefa86a4e->leave($__internal_46a0a660a28bd68f014d04adbefe3eb35ede59a263420b89d26297ecefa86a4e_prof);

        
        $__internal_58ed7a92ae3d506cc19c57b7c75e9eabb66ecdd040b0782ce2b454b9db8a44bd->leave($__internal_58ed7a92ae3d506cc19c57b7c75e9eabb66ecdd040b0782ce2b454b9db8a44bd_prof);

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
