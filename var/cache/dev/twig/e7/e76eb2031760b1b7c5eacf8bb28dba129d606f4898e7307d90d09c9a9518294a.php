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
        $__internal_c1b3b6e36bceea9af5ef1f95bde1fc73503e837f5aded884e7ff47f163cd03a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1b3b6e36bceea9af5ef1f95bde1fc73503e837f5aded884e7ff47f163cd03a5->enter($__internal_c1b3b6e36bceea9af5ef1f95bde1fc73503e837f5aded884e7ff47f163cd03a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_ab3cfd45d4a6e8d6fc82b3ce565e557a8bbd9a2926392ce3ac5c88b8c3a0d09e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab3cfd45d4a6e8d6fc82b3ce565e557a8bbd9a2926392ce3ac5c88b8c3a0d09e->enter($__internal_ab3cfd45d4a6e8d6fc82b3ce565e557a8bbd9a2926392ce3ac5c88b8c3a0d09e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_c1b3b6e36bceea9af5ef1f95bde1fc73503e837f5aded884e7ff47f163cd03a5->leave($__internal_c1b3b6e36bceea9af5ef1f95bde1fc73503e837f5aded884e7ff47f163cd03a5_prof);

        
        $__internal_ab3cfd45d4a6e8d6fc82b3ce565e557a8bbd9a2926392ce3ac5c88b8c3a0d09e->leave($__internal_ab3cfd45d4a6e8d6fc82b3ce565e557a8bbd9a2926392ce3ac5c88b8c3a0d09e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_f6360519d51ed56a64d261f8a75b2f8ddc3090dd89f5cb16ea607b892141c208 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6360519d51ed56a64d261f8a75b2f8ddc3090dd89f5cb16ea607b892141c208->enter($__internal_f6360519d51ed56a64d261f8a75b2f8ddc3090dd89f5cb16ea607b892141c208_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a5ab738f9fdd86fa96c60464f1e0347fd0eca642083cdef0a7f3d44ee745cb2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5ab738f9fdd86fa96c60464f1e0347fd0eca642083cdef0a7f3d44ee745cb2e->enter($__internal_a5ab738f9fdd86fa96c60464f1e0347fd0eca642083cdef0a7f3d44ee745cb2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_a5ab738f9fdd86fa96c60464f1e0347fd0eca642083cdef0a7f3d44ee745cb2e->leave($__internal_a5ab738f9fdd86fa96c60464f1e0347fd0eca642083cdef0a7f3d44ee745cb2e_prof);

        
        $__internal_f6360519d51ed56a64d261f8a75b2f8ddc3090dd89f5cb16ea607b892141c208->leave($__internal_f6360519d51ed56a64d261f8a75b2f8ddc3090dd89f5cb16ea607b892141c208_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_fb79f9a5000d92e393068261435a38d3f8934e362c4ea7748be516dece2ead1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb79f9a5000d92e393068261435a38d3f8934e362c4ea7748be516dece2ead1a->enter($__internal_fb79f9a5000d92e393068261435a38d3f8934e362c4ea7748be516dece2ead1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_8f688eb20cda162ca8b3a5f833342e2d518a616c892c21b08706e0c70c6d2d0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f688eb20cda162ca8b3a5f833342e2d518a616c892c21b08706e0c70c6d2d0f->enter($__internal_8f688eb20cda162ca8b3a5f833342e2d518a616c892c21b08706e0c70c6d2d0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_8f688eb20cda162ca8b3a5f833342e2d518a616c892c21b08706e0c70c6d2d0f->leave($__internal_8f688eb20cda162ca8b3a5f833342e2d518a616c892c21b08706e0c70c6d2d0f_prof);

        
        $__internal_fb79f9a5000d92e393068261435a38d3f8934e362c4ea7748be516dece2ead1a->leave($__internal_fb79f9a5000d92e393068261435a38d3f8934e362c4ea7748be516dece2ead1a_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_181d703c00a9d65090e8c37fa003d03129ad4a0658b88864c4e5189530428325 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_181d703c00a9d65090e8c37fa003d03129ad4a0658b88864c4e5189530428325->enter($__internal_181d703c00a9d65090e8c37fa003d03129ad4a0658b88864c4e5189530428325_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cffb9f1e9c23a69350dfe93293db66337799a78e9da98bf8ffbe063513ae5421 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cffb9f1e9c23a69350dfe93293db66337799a78e9da98bf8ffbe063513ae5421->enter($__internal_cffb9f1e9c23a69350dfe93293db66337799a78e9da98bf8ffbe063513ae5421_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_cffb9f1e9c23a69350dfe93293db66337799a78e9da98bf8ffbe063513ae5421->leave($__internal_cffb9f1e9c23a69350dfe93293db66337799a78e9da98bf8ffbe063513ae5421_prof);

        
        $__internal_181d703c00a9d65090e8c37fa003d03129ad4a0658b88864c4e5189530428325->leave($__internal_181d703c00a9d65090e8c37fa003d03129ad4a0658b88864c4e5189530428325_prof);

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
