<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_e8c818754d4e8f7f74559c342cca69e06deff992e373d928eeb8be265a38f345 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d396bb90114d9e018cfd40140e0f5dbc50426b36e76fc61734faff17e880daed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d396bb90114d9e018cfd40140e0f5dbc50426b36e76fc61734faff17e880daed->enter($__internal_d396bb90114d9e018cfd40140e0f5dbc50426b36e76fc61734faff17e880daed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_16072813ae038ed5533329ee92c430a7a0d644a051c67a090d2f2dccb2d9516b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16072813ae038ed5533329ee92c430a7a0d644a051c67a090d2f2dccb2d9516b->enter($__internal_16072813ae038ed5533329ee92c430a7a0d644a051c67a090d2f2dccb2d9516b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_d396bb90114d9e018cfd40140e0f5dbc50426b36e76fc61734faff17e880daed->leave($__internal_d396bb90114d9e018cfd40140e0f5dbc50426b36e76fc61734faff17e880daed_prof);

        
        $__internal_16072813ae038ed5533329ee92c430a7a0d644a051c67a090d2f2dccb2d9516b->leave($__internal_16072813ae038ed5533329ee92c430a7a0d644a051c67a090d2f2dccb2d9516b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e248edadda126c100a3258a3b514af6483d04dfaa84eaf2c81ae56c9f1a3fa9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e248edadda126c100a3258a3b514af6483d04dfaa84eaf2c81ae56c9f1a3fa9e->enter($__internal_e248edadda126c100a3258a3b514af6483d04dfaa84eaf2c81ae56c9f1a3fa9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f02708dd4b55059b5b88ca711f35f72efedd9aeca05ee85bdc640f20d46d7d61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f02708dd4b55059b5b88ca711f35f72efedd9aeca05ee85bdc640f20d46d7d61->enter($__internal_f02708dd4b55059b5b88ca711f35f72efedd9aeca05ee85bdc640f20d46d7d61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_f02708dd4b55059b5b88ca711f35f72efedd9aeca05ee85bdc640f20d46d7d61->leave($__internal_f02708dd4b55059b5b88ca711f35f72efedd9aeca05ee85bdc640f20d46d7d61_prof);

        
        $__internal_e248edadda126c100a3258a3b514af6483d04dfaa84eaf2c81ae56c9f1a3fa9e->leave($__internal_e248edadda126c100a3258a3b514af6483d04dfaa84eaf2c81ae56c9f1a3fa9e_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_94902050fda7acbe14d45271275fe49c1a6432f21ffc11b9b72f17047f0bded1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94902050fda7acbe14d45271275fe49c1a6432f21ffc11b9b72f17047f0bded1->enter($__internal_94902050fda7acbe14d45271275fe49c1a6432f21ffc11b9b72f17047f0bded1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_ebbd59a98c5c25b95a44bfad76efc1ae702dcc32875148033f9b39af02e1ad52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebbd59a98c5c25b95a44bfad76efc1ae702dcc32875148033f9b39af02e1ad52->enter($__internal_ebbd59a98c5c25b95a44bfad76efc1ae702dcc32875148033f9b39af02e1ad52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_ebbd59a98c5c25b95a44bfad76efc1ae702dcc32875148033f9b39af02e1ad52->leave($__internal_ebbd59a98c5c25b95a44bfad76efc1ae702dcc32875148033f9b39af02e1ad52_prof);

        
        $__internal_94902050fda7acbe14d45271275fe49c1a6432f21ffc11b9b72f17047f0bded1->leave($__internal_94902050fda7acbe14d45271275fe49c1a6432f21ffc11b9b72f17047f0bded1_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_257e134a13b2b5d8a912bf38e35a2944f9001af9a68710e67fc40319958b45b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_257e134a13b2b5d8a912bf38e35a2944f9001af9a68710e67fc40319958b45b6->enter($__internal_257e134a13b2b5d8a912bf38e35a2944f9001af9a68710e67fc40319958b45b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_dc814099f3f69a4a9f26682f9e48079a2f0f8975a1bc9f92f6be310c18791a3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc814099f3f69a4a9f26682f9e48079a2f0f8975a1bc9f92f6be310c18791a3c->enter($__internal_dc814099f3f69a4a9f26682f9e48079a2f0f8975a1bc9f92f6be310c18791a3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_dc814099f3f69a4a9f26682f9e48079a2f0f8975a1bc9f92f6be310c18791a3c->leave($__internal_dc814099f3f69a4a9f26682f9e48079a2f0f8975a1bc9f92f6be310c18791a3c_prof);

        
        $__internal_257e134a13b2b5d8a912bf38e35a2944f9001af9a68710e67fc40319958b45b6->leave($__internal_257e134a13b2b5d8a912bf38e35a2944f9001af9a68710e67fc40319958b45b6_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "D:\\wamp64\\www\\questionnaireLudique\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}
