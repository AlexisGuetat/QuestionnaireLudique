<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_cf2d672c12493534b9aeadb9b18015dce59243f58a9422f8ec7afc9d0c0ae8f9 extends Twig_Template
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
        $__internal_0aaa0c79b4a9911aaf3b4e048885128fc6735647680dc866c97f0d81163ddaa1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0aaa0c79b4a9911aaf3b4e048885128fc6735647680dc866c97f0d81163ddaa1->enter($__internal_0aaa0c79b4a9911aaf3b4e048885128fc6735647680dc866c97f0d81163ddaa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_b0e52bb00873775d88606817c100c93eac264ca1cb41410413f11a4e805464a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0e52bb00873775d88606817c100c93eac264ca1cb41410413f11a4e805464a4->enter($__internal_b0e52bb00873775d88606817c100c93eac264ca1cb41410413f11a4e805464a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0aaa0c79b4a9911aaf3b4e048885128fc6735647680dc866c97f0d81163ddaa1->leave($__internal_0aaa0c79b4a9911aaf3b4e048885128fc6735647680dc866c97f0d81163ddaa1_prof);

        
        $__internal_b0e52bb00873775d88606817c100c93eac264ca1cb41410413f11a4e805464a4->leave($__internal_b0e52bb00873775d88606817c100c93eac264ca1cb41410413f11a4e805464a4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a6281304d0d0d8b7dc14604420daa7991d0de5e783ce10ef3ef98b5c8c469f34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6281304d0d0d8b7dc14604420daa7991d0de5e783ce10ef3ef98b5c8c469f34->enter($__internal_a6281304d0d0d8b7dc14604420daa7991d0de5e783ce10ef3ef98b5c8c469f34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_1a7a4a48cf9102c00139bde6795554aa46eed30de1850934f0a22b018dfd76b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a7a4a48cf9102c00139bde6795554aa46eed30de1850934f0a22b018dfd76b8->enter($__internal_1a7a4a48cf9102c00139bde6795554aa46eed30de1850934f0a22b018dfd76b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_1a7a4a48cf9102c00139bde6795554aa46eed30de1850934f0a22b018dfd76b8->leave($__internal_1a7a4a48cf9102c00139bde6795554aa46eed30de1850934f0a22b018dfd76b8_prof);

        
        $__internal_a6281304d0d0d8b7dc14604420daa7991d0de5e783ce10ef3ef98b5c8c469f34->leave($__internal_a6281304d0d0d8b7dc14604420daa7991d0de5e783ce10ef3ef98b5c8c469f34_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_e38813ba84757ed95ea105627e148b3bd7e584988d5c25b1616dcaa220282ecb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e38813ba84757ed95ea105627e148b3bd7e584988d5c25b1616dcaa220282ecb->enter($__internal_e38813ba84757ed95ea105627e148b3bd7e584988d5c25b1616dcaa220282ecb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2a3188c25ef441f810ac6b9b71c6d53f0bb132f53a3bcac8123e4a3a256cbb64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a3188c25ef441f810ac6b9b71c6d53f0bb132f53a3bcac8123e4a3a256cbb64->enter($__internal_2a3188c25ef441f810ac6b9b71c6d53f0bb132f53a3bcac8123e4a3a256cbb64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_2a3188c25ef441f810ac6b9b71c6d53f0bb132f53a3bcac8123e4a3a256cbb64->leave($__internal_2a3188c25ef441f810ac6b9b71c6d53f0bb132f53a3bcac8123e4a3a256cbb64_prof);

        
        $__internal_e38813ba84757ed95ea105627e148b3bd7e584988d5c25b1616dcaa220282ecb->leave($__internal_e38813ba84757ed95ea105627e148b3bd7e584988d5c25b1616dcaa220282ecb_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_e4e92356e2ebf73226c6bd814099923aa34942fa76efc7f6c4f88a2def26a794 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4e92356e2ebf73226c6bd814099923aa34942fa76efc7f6c4f88a2def26a794->enter($__internal_e4e92356e2ebf73226c6bd814099923aa34942fa76efc7f6c4f88a2def26a794_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a4566879808d9b09c044a98e6f37e5bb1177a0856506e6ea360747e9a83f2a9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4566879808d9b09c044a98e6f37e5bb1177a0856506e6ea360747e9a83f2a9e->enter($__internal_a4566879808d9b09c044a98e6f37e5bb1177a0856506e6ea360747e9a83f2a9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_a4566879808d9b09c044a98e6f37e5bb1177a0856506e6ea360747e9a83f2a9e->leave($__internal_a4566879808d9b09c044a98e6f37e5bb1177a0856506e6ea360747e9a83f2a9e_prof);

        
        $__internal_e4e92356e2ebf73226c6bd814099923aa34942fa76efc7f6c4f88a2def26a794->leave($__internal_e4e92356e2ebf73226c6bd814099923aa34942fa76efc7f6c4f88a2def26a794_prof);

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
", "@Twig/Exception/exception_full.html.twig", "D:\\wamp64\\www\\questionnaireLudique\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
