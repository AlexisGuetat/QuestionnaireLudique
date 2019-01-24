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
        $__internal_ebcb23cb9602afdb855f52701c77479e79d2f1886628e69de4350e417b3cd586 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ebcb23cb9602afdb855f52701c77479e79d2f1886628e69de4350e417b3cd586->enter($__internal_ebcb23cb9602afdb855f52701c77479e79d2f1886628e69de4350e417b3cd586_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_12747a625997d4967dd10438ce9a9d25311ab298a6d92f32d1e9f8d2a686c5cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12747a625997d4967dd10438ce9a9d25311ab298a6d92f32d1e9f8d2a686c5cc->enter($__internal_12747a625997d4967dd10438ce9a9d25311ab298a6d92f32d1e9f8d2a686c5cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_ebcb23cb9602afdb855f52701c77479e79d2f1886628e69de4350e417b3cd586->leave($__internal_ebcb23cb9602afdb855f52701c77479e79d2f1886628e69de4350e417b3cd586_prof);

        
        $__internal_12747a625997d4967dd10438ce9a9d25311ab298a6d92f32d1e9f8d2a686c5cc->leave($__internal_12747a625997d4967dd10438ce9a9d25311ab298a6d92f32d1e9f8d2a686c5cc_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e92843019f8c073cb9166ea2ac6c70eb64c727adc4be058c956356b6b7518cab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e92843019f8c073cb9166ea2ac6c70eb64c727adc4be058c956356b6b7518cab->enter($__internal_e92843019f8c073cb9166ea2ac6c70eb64c727adc4be058c956356b6b7518cab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f0b9909d777440b026abee57c47e5b4b15a511a1a2e71cf0657b884f0ae1d07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f0b9909d777440b026abee57c47e5b4b15a511a1a2e71cf0657b884f0ae1d07->enter($__internal_6f0b9909d777440b026abee57c47e5b4b15a511a1a2e71cf0657b884f0ae1d07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_6f0b9909d777440b026abee57c47e5b4b15a511a1a2e71cf0657b884f0ae1d07->leave($__internal_6f0b9909d777440b026abee57c47e5b4b15a511a1a2e71cf0657b884f0ae1d07_prof);

        
        $__internal_e92843019f8c073cb9166ea2ac6c70eb64c727adc4be058c956356b6b7518cab->leave($__internal_e92843019f8c073cb9166ea2ac6c70eb64c727adc4be058c956356b6b7518cab_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_cdef724ef228b126a8b166b9a299fd2d3b1530c820974ecdcfbe04cb38d1d967 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cdef724ef228b126a8b166b9a299fd2d3b1530c820974ecdcfbe04cb38d1d967->enter($__internal_cdef724ef228b126a8b166b9a299fd2d3b1530c820974ecdcfbe04cb38d1d967_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_e862b743a9e3040ebac6fe719dd7c77d87658e0b0f0f5763d6327a52ad33e9b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e862b743a9e3040ebac6fe719dd7c77d87658e0b0f0f5763d6327a52ad33e9b9->enter($__internal_e862b743a9e3040ebac6fe719dd7c77d87658e0b0f0f5763d6327a52ad33e9b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_e862b743a9e3040ebac6fe719dd7c77d87658e0b0f0f5763d6327a52ad33e9b9->leave($__internal_e862b743a9e3040ebac6fe719dd7c77d87658e0b0f0f5763d6327a52ad33e9b9_prof);

        
        $__internal_cdef724ef228b126a8b166b9a299fd2d3b1530c820974ecdcfbe04cb38d1d967->leave($__internal_cdef724ef228b126a8b166b9a299fd2d3b1530c820974ecdcfbe04cb38d1d967_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_0b03a1d30d93e27e19fe02aabce86893004ae63304778e077471261e7504052c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b03a1d30d93e27e19fe02aabce86893004ae63304778e077471261e7504052c->enter($__internal_0b03a1d30d93e27e19fe02aabce86893004ae63304778e077471261e7504052c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ca3d491d434d81330102e0375b5a695ef91ad702e8b3e5c3839413fd0c149f31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca3d491d434d81330102e0375b5a695ef91ad702e8b3e5c3839413fd0c149f31->enter($__internal_ca3d491d434d81330102e0375b5a695ef91ad702e8b3e5c3839413fd0c149f31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ca3d491d434d81330102e0375b5a695ef91ad702e8b3e5c3839413fd0c149f31->leave($__internal_ca3d491d434d81330102e0375b5a695ef91ad702e8b3e5c3839413fd0c149f31_prof);

        
        $__internal_0b03a1d30d93e27e19fe02aabce86893004ae63304778e077471261e7504052c->leave($__internal_0b03a1d30d93e27e19fe02aabce86893004ae63304778e077471261e7504052c_prof);

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
