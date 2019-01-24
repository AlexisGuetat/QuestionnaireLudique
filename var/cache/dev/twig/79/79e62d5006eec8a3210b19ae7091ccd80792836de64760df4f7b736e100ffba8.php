<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_cbe7533ba7e4fbb56103997f4660d86ae496e5649f7089b944846bef542c7c66 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cde753fd8972b1f3d31d6d91cba6f65925e11d090acc579ff645e1bf36a04d01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cde753fd8972b1f3d31d6d91cba6f65925e11d090acc579ff645e1bf36a04d01->enter($__internal_cde753fd8972b1f3d31d6d91cba6f65925e11d090acc579ff645e1bf36a04d01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_d8e2bb4cf2250d981b7ee33912695ad232de33ced240df13c9e75cbf84494fa6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8e2bb4cf2250d981b7ee33912695ad232de33ced240df13c9e75cbf84494fa6->enter($__internal_d8e2bb4cf2250d981b7ee33912695ad232de33ced240df13c9e75cbf84494fa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cde753fd8972b1f3d31d6d91cba6f65925e11d090acc579ff645e1bf36a04d01->leave($__internal_cde753fd8972b1f3d31d6d91cba6f65925e11d090acc579ff645e1bf36a04d01_prof);

        
        $__internal_d8e2bb4cf2250d981b7ee33912695ad232de33ced240df13c9e75cbf84494fa6->leave($__internal_d8e2bb4cf2250d981b7ee33912695ad232de33ced240df13c9e75cbf84494fa6_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8e167e6c1cd47ebd840546eef91c7503cdd20216be703dd0c8f524f0fdb190d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e167e6c1cd47ebd840546eef91c7503cdd20216be703dd0c8f524f0fdb190d2->enter($__internal_8e167e6c1cd47ebd840546eef91c7503cdd20216be703dd0c8f524f0fdb190d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_2930a7f85e6a5eb020e56b852075d1ad883e72ea5813296ac00b372923063d5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2930a7f85e6a5eb020e56b852075d1ad883e72ea5813296ac00b372923063d5f->enter($__internal_2930a7f85e6a5eb020e56b852075d1ad883e72ea5813296ac00b372923063d5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_2930a7f85e6a5eb020e56b852075d1ad883e72ea5813296ac00b372923063d5f->leave($__internal_2930a7f85e6a5eb020e56b852075d1ad883e72ea5813296ac00b372923063d5f_prof);

        
        $__internal_8e167e6c1cd47ebd840546eef91c7503cdd20216be703dd0c8f524f0fdb190d2->leave($__internal_8e167e6c1cd47ebd840546eef91c7503cdd20216be703dd0c8f524f0fdb190d2_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_4f2b2e48d6f70eda696a7ddfe6549d97442f00bbfbb10232b093c831a9b17b7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f2b2e48d6f70eda696a7ddfe6549d97442f00bbfbb10232b093c831a9b17b7b->enter($__internal_4f2b2e48d6f70eda696a7ddfe6549d97442f00bbfbb10232b093c831a9b17b7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a2e03a6be871d867609db78f8379168695fb6b5f25eccd941c1db353c04807f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2e03a6be871d867609db78f8379168695fb6b5f25eccd941c1db353c04807f4->enter($__internal_a2e03a6be871d867609db78f8379168695fb6b5f25eccd941c1db353c04807f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a2e03a6be871d867609db78f8379168695fb6b5f25eccd941c1db353c04807f4->leave($__internal_a2e03a6be871d867609db78f8379168695fb6b5f25eccd941c1db353c04807f4_prof);

        
        $__internal_4f2b2e48d6f70eda696a7ddfe6549d97442f00bbfbb10232b093c831a9b17b7b->leave($__internal_4f2b2e48d6f70eda696a7ddfe6549d97442f00bbfbb10232b093c831a9b17b7b_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_f26ef749f102b8e69edab66b0c098dab8513846c29771a34766e12ce45746edf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f26ef749f102b8e69edab66b0c098dab8513846c29771a34766e12ce45746edf->enter($__internal_f26ef749f102b8e69edab66b0c098dab8513846c29771a34766e12ce45746edf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a1a7e963ec2426d1d58c99037de9fc9891c2d17ecaae75efe40d0907e39029a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1a7e963ec2426d1d58c99037de9fc9891c2d17ecaae75efe40d0907e39029a4->enter($__internal_a1a7e963ec2426d1d58c99037de9fc9891c2d17ecaae75efe40d0907e39029a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_a1a7e963ec2426d1d58c99037de9fc9891c2d17ecaae75efe40d0907e39029a4->leave($__internal_a1a7e963ec2426d1d58c99037de9fc9891c2d17ecaae75efe40d0907e39029a4_prof);

        
        $__internal_f26ef749f102b8e69edab66b0c098dab8513846c29771a34766e12ce45746edf->leave($__internal_f26ef749f102b8e69edab66b0c098dab8513846c29771a34766e12ce45746edf_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/var/www/QuestionnaireLudique/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
