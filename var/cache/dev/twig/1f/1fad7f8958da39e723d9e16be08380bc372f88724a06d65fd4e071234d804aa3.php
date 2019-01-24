<?php

/* ATCAppBundle:Questionnaire:Theme/math.html.twig */
class __TwigTemplate_61dfb376b547f12a6e7f8d6ffe8be17a6c6565f22197ea86be3518f80754ef83 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("ATCAppBundle::index.html.twig", "ATCAppBundle:Questionnaire:Theme/math.html.twig", 2);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ATCAppBundle::index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4b937167cd8388efc3ce00d39ecacb87c8583f34404cc871407f65d131f209b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b937167cd8388efc3ce00d39ecacb87c8583f34404cc871407f65d131f209b3->enter($__internal_4b937167cd8388efc3ce00d39ecacb87c8583f34404cc871407f65d131f209b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ATCAppBundle:Questionnaire:Theme/math.html.twig"));

        $__internal_5cd8d7bf0fcd138f3215231b03d5b88113329629519e48d35ce59763ddc7852f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cd8d7bf0fcd138f3215231b03d5b88113329629519e48d35ce59763ddc7852f->enter($__internal_5cd8d7bf0fcd138f3215231b03d5b88113329629519e48d35ce59763ddc7852f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ATCAppBundle:Questionnaire:Theme/math.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4b937167cd8388efc3ce00d39ecacb87c8583f34404cc871407f65d131f209b3->leave($__internal_4b937167cd8388efc3ce00d39ecacb87c8583f34404cc871407f65d131f209b3_prof);

        
        $__internal_5cd8d7bf0fcd138f3215231b03d5b88113329629519e48d35ce59763ddc7852f->leave($__internal_5cd8d7bf0fcd138f3215231b03d5b88113329629519e48d35ce59763ddc7852f_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_7ffd4e85f15703b8328108cbfab1df4f824425636f4d01016dfdc7d8e98c31ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ffd4e85f15703b8328108cbfab1df4f824425636f4d01016dfdc7d8e98c31ef->enter($__internal_7ffd4e85f15703b8328108cbfab1df4f824425636f4d01016dfdc7d8e98c31ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1ca899efdeac05431ad4f96d15ae292ca45ceb4404895f6a2826c27bb54d665d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ca899efdeac05431ad4f96d15ae292ca45ceb4404895f6a2826c27bb54d665d->enter($__internal_1ca899efdeac05431ad4f96d15ae292ca45ceb4404895f6a2826c27bb54d665d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "<div class=\"view\">
    <img src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/fond2.gif"), "html", null, true);
        echo "\" class=\"fond\">
    

     <!-- Mask & flexbox options-->
    <div class=\"mask rgba-black-light d-flex justify-content-center align-items-center\">

      <!-- Content -->
      <div class=\"text-center white-text mx-5 wow fadeIn \">

        <!-- Section heading -->
        <h1 class=\"display-4 mt-5 mb-6\"> Mathématique ! </h1>
        <h2 class=\"mb-5\"> Sélectionne la bonne réponse à la question.</h2>
     
        <!-- Grid row -->
        <div class=\"container align-items-center \">
        <div class=\"row justify-content-center align-items-center\">
            <div class=\" btn-primary btn-lg col-12 col-sm-6 col-lg-8\" >Question</div>
        </div>
        <div class=\"row justify-content-center  \">
            <div class=\"btn btn-lg  btn-primary col-6 col-sm-4\">Rep 1</div>
            <div class=\"btn btn-lg  btn-primary col-6 col-sm-4\">Rep 2</div>
        </div>
        <div class=\"row  justify-content-center\">
            <div class=\"btn btn-lg  btn-primary col-6 col-sm-4\">Rep 3</div>
            <div class=\"btn btn-lg  btn-primary col-6 col-sm-4\">Rep 4</div>
        </div>
        <button type=\"button\" class=\"btn  purple-gradient btn-lg \">VALIDER</button>
        </div>
        <!-- Grid row -->

      </div>
    </div>
</div>
";
        
        $__internal_1ca899efdeac05431ad4f96d15ae292ca45ceb4404895f6a2826c27bb54d665d->leave($__internal_1ca899efdeac05431ad4f96d15ae292ca45ceb4404895f6a2826c27bb54d665d_prof);

        
        $__internal_7ffd4e85f15703b8328108cbfab1df4f824425636f4d01016dfdc7d8e98c31ef->leave($__internal_7ffd4e85f15703b8328108cbfab1df4f824425636f4d01016dfdc7d8e98c31ef_prof);

    }

    public function getTemplateName()
    {
        return "ATCAppBundle:Questionnaire:Theme/math.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 6,  49 => 5,  40 => 4,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% extends \"ATCAppBundle::index.html.twig\" %}

{% block body %}
<div class=\"view\">
    <img src=\"{{  asset('img/fond2.gif') }}\" class=\"fond\">
    

     <!-- Mask & flexbox options-->
    <div class=\"mask rgba-black-light d-flex justify-content-center align-items-center\">

      <!-- Content -->
      <div class=\"text-center white-text mx-5 wow fadeIn \">

        <!-- Section heading -->
        <h1 class=\"display-4 mt-5 mb-6\"> Mathématique ! </h1>
        <h2 class=\"mb-5\"> Sélectionne la bonne réponse à la question.</h2>
     
        <!-- Grid row -->
        <div class=\"container align-items-center \">
        <div class=\"row justify-content-center align-items-center\">
            <div class=\" btn-primary btn-lg col-12 col-sm-6 col-lg-8\" >Question</div>
        </div>
        <div class=\"row justify-content-center  \">
            <div class=\"btn btn-lg  btn-primary col-6 col-sm-4\">Rep 1</div>
            <div class=\"btn btn-lg  btn-primary col-6 col-sm-4\">Rep 2</div>
        </div>
        <div class=\"row  justify-content-center\">
            <div class=\"btn btn-lg  btn-primary col-6 col-sm-4\">Rep 3</div>
            <div class=\"btn btn-lg  btn-primary col-6 col-sm-4\">Rep 4</div>
        </div>
        <button type=\"button\" class=\"btn  purple-gradient btn-lg \">VALIDER</button>
        </div>
        <!-- Grid row -->

      </div>
    </div>
</div>
{% endblock %}", "ATCAppBundle:Questionnaire:Theme/math.html.twig", "D:\\wamp64\\www\\questionnaireLudique\\src\\ATC\\AppBundle/Resources/views/Questionnaire/Theme/math.html.twig");
    }
}
