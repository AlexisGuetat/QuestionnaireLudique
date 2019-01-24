<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_cb3146abd5dc49d59b934ffb7058f64d128a1eb9244e577708eee252ec5699aa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_25be94442e1bb5bf1a5fd8cd4dedc2b20f0476d1e9b52245496251bfeee13616 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25be94442e1bb5bf1a5fd8cd4dedc2b20f0476d1e9b52245496251bfeee13616->enter($__internal_25be94442e1bb5bf1a5fd8cd4dedc2b20f0476d1e9b52245496251bfeee13616_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_4bd73d30f56b74c19300d2eb2408bba7eee5cdce3ff346bc887876999cce8961 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bd73d30f56b74c19300d2eb2408bba7eee5cdce3ff346bc887876999cce8961->enter($__internal_4bd73d30f56b74c19300d2eb2408bba7eee5cdce3ff346bc887876999cce8961_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_25be94442e1bb5bf1a5fd8cd4dedc2b20f0476d1e9b52245496251bfeee13616->leave($__internal_25be94442e1bb5bf1a5fd8cd4dedc2b20f0476d1e9b52245496251bfeee13616_prof);

        
        $__internal_4bd73d30f56b74c19300d2eb2408bba7eee5cdce3ff346bc887876999cce8961->leave($__internal_4bd73d30f56b74c19300d2eb2408bba7eee5cdce3ff346bc887876999cce8961_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "@WebProfiler/Profiler/header.html.twig", "D:\\wamp64\\www\\questionnaireLudique\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\header.html.twig");
    }
}
