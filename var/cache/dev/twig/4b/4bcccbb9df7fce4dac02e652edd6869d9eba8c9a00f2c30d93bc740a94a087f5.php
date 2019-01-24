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
        $__internal_3d4ddb83881f215bf20f0ff4846483f4f81a70adf06d968517eb727b5b22b061 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d4ddb83881f215bf20f0ff4846483f4f81a70adf06d968517eb727b5b22b061->enter($__internal_3d4ddb83881f215bf20f0ff4846483f4f81a70adf06d968517eb727b5b22b061_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_4ccccf22b54a86c278b0fa40cd542c376c8c00bc310219532a485f7ae19bdbc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ccccf22b54a86c278b0fa40cd542c376c8c00bc310219532a485f7ae19bdbc6->enter($__internal_4ccccf22b54a86c278b0fa40cd542c376c8c00bc310219532a485f7ae19bdbc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3d4ddb83881f215bf20f0ff4846483f4f81a70adf06d968517eb727b5b22b061->leave($__internal_3d4ddb83881f215bf20f0ff4846483f4f81a70adf06d968517eb727b5b22b061_prof);

        
        $__internal_4ccccf22b54a86c278b0fa40cd542c376c8c00bc310219532a485f7ae19bdbc6->leave($__internal_4ccccf22b54a86c278b0fa40cd542c376c8c00bc310219532a485f7ae19bdbc6_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_81165c88182dfbe86af400e2ac1315ac18c81bf447bba1b6ab831aaecdb30d09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81165c88182dfbe86af400e2ac1315ac18c81bf447bba1b6ab831aaecdb30d09->enter($__internal_81165c88182dfbe86af400e2ac1315ac18c81bf447bba1b6ab831aaecdb30d09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c991765c285e57dd895e5bfce0ad6432e163aa67d4c7475f2036fbaf42afde7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c991765c285e57dd895e5bfce0ad6432e163aa67d4c7475f2036fbaf42afde7d->enter($__internal_c991765c285e57dd895e5bfce0ad6432e163aa67d4c7475f2036fbaf42afde7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_c991765c285e57dd895e5bfce0ad6432e163aa67d4c7475f2036fbaf42afde7d->leave($__internal_c991765c285e57dd895e5bfce0ad6432e163aa67d4c7475f2036fbaf42afde7d_prof);

        
        $__internal_81165c88182dfbe86af400e2ac1315ac18c81bf447bba1b6ab831aaecdb30d09->leave($__internal_81165c88182dfbe86af400e2ac1315ac18c81bf447bba1b6ab831aaecdb30d09_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_6eb78508b0b0f1ba1bd1cedb0b31fc5447d5d8eae4534b2d8ad676741cf22862 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6eb78508b0b0f1ba1bd1cedb0b31fc5447d5d8eae4534b2d8ad676741cf22862->enter($__internal_6eb78508b0b0f1ba1bd1cedb0b31fc5447d5d8eae4534b2d8ad676741cf22862_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3c3c8e6c102bbb4857314ea1cf70de8c74fe5af11d0545304a55c87e00751094 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c3c8e6c102bbb4857314ea1cf70de8c74fe5af11d0545304a55c87e00751094->enter($__internal_3c3c8e6c102bbb4857314ea1cf70de8c74fe5af11d0545304a55c87e00751094_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_3c3c8e6c102bbb4857314ea1cf70de8c74fe5af11d0545304a55c87e00751094->leave($__internal_3c3c8e6c102bbb4857314ea1cf70de8c74fe5af11d0545304a55c87e00751094_prof);

        
        $__internal_6eb78508b0b0f1ba1bd1cedb0b31fc5447d5d8eae4534b2d8ad676741cf22862->leave($__internal_6eb78508b0b0f1ba1bd1cedb0b31fc5447d5d8eae4534b2d8ad676741cf22862_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_695139d45c00149f8cb2c154238f58f8deab67c938db9a0ee00aa8f4ac028727 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_695139d45c00149f8cb2c154238f58f8deab67c938db9a0ee00aa8f4ac028727->enter($__internal_695139d45c00149f8cb2c154238f58f8deab67c938db9a0ee00aa8f4ac028727_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f4bda589851c8d0abae7ecf61f91105e539e51ca9a5910e7866902764b281710 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4bda589851c8d0abae7ecf61f91105e539e51ca9a5910e7866902764b281710->enter($__internal_f4bda589851c8d0abae7ecf61f91105e539e51ca9a5910e7866902764b281710_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_f4bda589851c8d0abae7ecf61f91105e539e51ca9a5910e7866902764b281710->leave($__internal_f4bda589851c8d0abae7ecf61f91105e539e51ca9a5910e7866902764b281710_prof);

        
        $__internal_695139d45c00149f8cb2c154238f58f8deab67c938db9a0ee00aa8f4ac028727->leave($__internal_695139d45c00149f8cb2c154238f58f8deab67c938db9a0ee00aa8f4ac028727_prof);

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
