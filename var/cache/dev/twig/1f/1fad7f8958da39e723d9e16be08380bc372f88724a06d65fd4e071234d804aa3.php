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
        $__internal_effb02f98cde58ed95f780fc28fd87bf7b41d988ea853be84baeaa87752012e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_effb02f98cde58ed95f780fc28fd87bf7b41d988ea853be84baeaa87752012e9->enter($__internal_effb02f98cde58ed95f780fc28fd87bf7b41d988ea853be84baeaa87752012e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ATCAppBundle:Questionnaire:Theme/math.html.twig"));

        $__internal_0d5af63793674339760d25d7fe56ea961758cbabab61bb89a9325cb0f9dec850 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d5af63793674339760d25d7fe56ea961758cbabab61bb89a9325cb0f9dec850->enter($__internal_0d5af63793674339760d25d7fe56ea961758cbabab61bb89a9325cb0f9dec850_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ATCAppBundle:Questionnaire:Theme/math.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_effb02f98cde58ed95f780fc28fd87bf7b41d988ea853be84baeaa87752012e9->leave($__internal_effb02f98cde58ed95f780fc28fd87bf7b41d988ea853be84baeaa87752012e9_prof);

        
        $__internal_0d5af63793674339760d25d7fe56ea961758cbabab61bb89a9325cb0f9dec850->leave($__internal_0d5af63793674339760d25d7fe56ea961758cbabab61bb89a9325cb0f9dec850_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_dc978fb07c4ad550bcb6e9244c265349014622af7a8e9764df1825a919003c77 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc978fb07c4ad550bcb6e9244c265349014622af7a8e9764df1825a919003c77->enter($__internal_dc978fb07c4ad550bcb6e9244c265349014622af7a8e9764df1825a919003c77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4e70a597dc880781febaac82218259187d4817955cdf01d46e5a53a7d97b223c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e70a597dc880781febaac82218259187d4817955cdf01d46e5a53a7d97b223c->enter($__internal_4e70a597dc880781febaac82218259187d4817955cdf01d46e5a53a7d97b223c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_4e70a597dc880781febaac82218259187d4817955cdf01d46e5a53a7d97b223c->leave($__internal_4e70a597dc880781febaac82218259187d4817955cdf01d46e5a53a7d97b223c_prof);

        
        $__internal_dc978fb07c4ad550bcb6e9244c265349014622af7a8e9764df1825a919003c77->leave($__internal_dc978fb07c4ad550bcb6e9244c265349014622af7a8e9764df1825a919003c77_prof);

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
