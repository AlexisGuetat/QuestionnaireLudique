<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_21e1384dbb5ce9486a9d17503df7b90e48bc1b6ea63609664f02070f7deb3d3f extends Twig_Template
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
        $__internal_9d317a1529fa5c59b588b051bf9438904ddf738fbc865446cbef38ff7e1fcc63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d317a1529fa5c59b588b051bf9438904ddf738fbc865446cbef38ff7e1fcc63->enter($__internal_9d317a1529fa5c59b588b051bf9438904ddf738fbc865446cbef38ff7e1fcc63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_9e8e97856b37f8b0a09c5931531818893849faa2d04a04376f83283048784ac8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e8e97856b37f8b0a09c5931531818893849faa2d04a04376f83283048784ac8->enter($__internal_9e8e97856b37f8b0a09c5931531818893849faa2d04a04376f83283048784ac8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_9d317a1529fa5c59b588b051bf9438904ddf738fbc865446cbef38ff7e1fcc63->leave($__internal_9d317a1529fa5c59b588b051bf9438904ddf738fbc865446cbef38ff7e1fcc63_prof);

        
        $__internal_9e8e97856b37f8b0a09c5931531818893849faa2d04a04376f83283048784ac8->leave($__internal_9e8e97856b37f8b0a09c5931531818893849faa2d04a04376f83283048784ac8_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e66abfcdb5c181b4ace845de1a20c5bf1340870af27c157637bd92020b5941d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e66abfcdb5c181b4ace845de1a20c5bf1340870af27c157637bd92020b5941d0->enter($__internal_e66abfcdb5c181b4ace845de1a20c5bf1340870af27c157637bd92020b5941d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_802041f3d8b5d743a63bd9afbe96eb47eaa60418bbe0a432ae6b14016389da56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_802041f3d8b5d743a63bd9afbe96eb47eaa60418bbe0a432ae6b14016389da56->enter($__internal_802041f3d8b5d743a63bd9afbe96eb47eaa60418bbe0a432ae6b14016389da56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_802041f3d8b5d743a63bd9afbe96eb47eaa60418bbe0a432ae6b14016389da56->leave($__internal_802041f3d8b5d743a63bd9afbe96eb47eaa60418bbe0a432ae6b14016389da56_prof);

        
        $__internal_e66abfcdb5c181b4ace845de1a20c5bf1340870af27c157637bd92020b5941d0->leave($__internal_e66abfcdb5c181b4ace845de1a20c5bf1340870af27c157637bd92020b5941d0_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_3d151f02addb329274d7434f2c4d4361562be82743764e2504451a4de696e8a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d151f02addb329274d7434f2c4d4361562be82743764e2504451a4de696e8a6->enter($__internal_3d151f02addb329274d7434f2c4d4361562be82743764e2504451a4de696e8a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_197ec82bdf044661727e6ab491a1852b487b9885b051f46b01f7b45de0de6739 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_197ec82bdf044661727e6ab491a1852b487b9885b051f46b01f7b45de0de6739->enter($__internal_197ec82bdf044661727e6ab491a1852b487b9885b051f46b01f7b45de0de6739_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_197ec82bdf044661727e6ab491a1852b487b9885b051f46b01f7b45de0de6739->leave($__internal_197ec82bdf044661727e6ab491a1852b487b9885b051f46b01f7b45de0de6739_prof);

        
        $__internal_3d151f02addb329274d7434f2c4d4361562be82743764e2504451a4de696e8a6->leave($__internal_3d151f02addb329274d7434f2c4d4361562be82743764e2504451a4de696e8a6_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_8e2f9c9419c1bbf28d054158303b0db700624547b5d487becbecef840cebf4a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e2f9c9419c1bbf28d054158303b0db700624547b5d487becbecef840cebf4a9->enter($__internal_8e2f9c9419c1bbf28d054158303b0db700624547b5d487becbecef840cebf4a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b8baafa7b070dc1d7eabbb88937d6e6738fa67655319516aafb0592ee56c920f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8baafa7b070dc1d7eabbb88937d6e6738fa67655319516aafb0592ee56c920f->enter($__internal_b8baafa7b070dc1d7eabbb88937d6e6738fa67655319516aafb0592ee56c920f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b8baafa7b070dc1d7eabbb88937d6e6738fa67655319516aafb0592ee56c920f->leave($__internal_b8baafa7b070dc1d7eabbb88937d6e6738fa67655319516aafb0592ee56c920f_prof);

        
        $__internal_8e2f9c9419c1bbf28d054158303b0db700624547b5d487becbecef840cebf4a9->leave($__internal_8e2f9c9419c1bbf28d054158303b0db700624547b5d487becbecef840cebf4a9_prof);

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
", "@Twig/layout.html.twig", "/var/www/QuestionnaireLudique/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
