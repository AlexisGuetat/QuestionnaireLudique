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
        $__internal_01b63c609a249eff814a1ae9b7a9087fd3d7d07ac24f00e353d0c54d4c37d6d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01b63c609a249eff814a1ae9b7a9087fd3d7d07ac24f00e353d0c54d4c37d6d9->enter($__internal_01b63c609a249eff814a1ae9b7a9087fd3d7d07ac24f00e353d0c54d4c37d6d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_fbea34e74da5de8778bd1b6242be2f547fe10405f3a543e8c84962b91997ef2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbea34e74da5de8778bd1b6242be2f547fe10405f3a543e8c84962b91997ef2b->enter($__internal_fbea34e74da5de8778bd1b6242be2f547fe10405f3a543e8c84962b91997ef2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_01b63c609a249eff814a1ae9b7a9087fd3d7d07ac24f00e353d0c54d4c37d6d9->leave($__internal_01b63c609a249eff814a1ae9b7a9087fd3d7d07ac24f00e353d0c54d4c37d6d9_prof);

        
        $__internal_fbea34e74da5de8778bd1b6242be2f547fe10405f3a543e8c84962b91997ef2b->leave($__internal_fbea34e74da5de8778bd1b6242be2f547fe10405f3a543e8c84962b91997ef2b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1c87e3449bcdf0a87152e3558107a84c77d8f4afcb8832b80c915355ddf6fefc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c87e3449bcdf0a87152e3558107a84c77d8f4afcb8832b80c915355ddf6fefc->enter($__internal_1c87e3449bcdf0a87152e3558107a84c77d8f4afcb8832b80c915355ddf6fefc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f31a0755771301435e2136c21db9da3a83380c1bb345f14c1e383279eb0dc020 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f31a0755771301435e2136c21db9da3a83380c1bb345f14c1e383279eb0dc020->enter($__internal_f31a0755771301435e2136c21db9da3a83380c1bb345f14c1e383279eb0dc020_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_f31a0755771301435e2136c21db9da3a83380c1bb345f14c1e383279eb0dc020->leave($__internal_f31a0755771301435e2136c21db9da3a83380c1bb345f14c1e383279eb0dc020_prof);

        
        $__internal_1c87e3449bcdf0a87152e3558107a84c77d8f4afcb8832b80c915355ddf6fefc->leave($__internal_1c87e3449bcdf0a87152e3558107a84c77d8f4afcb8832b80c915355ddf6fefc_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_f3de508ede47e1b2772330655fa57583543b602306720ff9c74d2fa621656f1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3de508ede47e1b2772330655fa57583543b602306720ff9c74d2fa621656f1a->enter($__internal_f3de508ede47e1b2772330655fa57583543b602306720ff9c74d2fa621656f1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_19a1af0c5f9ae1e14631d9a85f5fd7065cc47d0794bb52beace84e30542174f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19a1af0c5f9ae1e14631d9a85f5fd7065cc47d0794bb52beace84e30542174f7->enter($__internal_19a1af0c5f9ae1e14631d9a85f5fd7065cc47d0794bb52beace84e30542174f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_19a1af0c5f9ae1e14631d9a85f5fd7065cc47d0794bb52beace84e30542174f7->leave($__internal_19a1af0c5f9ae1e14631d9a85f5fd7065cc47d0794bb52beace84e30542174f7_prof);

        
        $__internal_f3de508ede47e1b2772330655fa57583543b602306720ff9c74d2fa621656f1a->leave($__internal_f3de508ede47e1b2772330655fa57583543b602306720ff9c74d2fa621656f1a_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_def1b8274501a5a2f6b9fa2426606488e57861c8430572abc523c3738638ca56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_def1b8274501a5a2f6b9fa2426606488e57861c8430572abc523c3738638ca56->enter($__internal_def1b8274501a5a2f6b9fa2426606488e57861c8430572abc523c3738638ca56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_50f1122ff1a9896ca865edea5a1e51c7b129e2cbff24dc9832c3c9f9460c4065 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50f1122ff1a9896ca865edea5a1e51c7b129e2cbff24dc9832c3c9f9460c4065->enter($__internal_50f1122ff1a9896ca865edea5a1e51c7b129e2cbff24dc9832c3c9f9460c4065_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_50f1122ff1a9896ca865edea5a1e51c7b129e2cbff24dc9832c3c9f9460c4065->leave($__internal_50f1122ff1a9896ca865edea5a1e51c7b129e2cbff24dc9832c3c9f9460c4065_prof);

        
        $__internal_def1b8274501a5a2f6b9fa2426606488e57861c8430572abc523c3738638ca56->leave($__internal_def1b8274501a5a2f6b9fa2426606488e57861c8430572abc523c3738638ca56_prof);

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
