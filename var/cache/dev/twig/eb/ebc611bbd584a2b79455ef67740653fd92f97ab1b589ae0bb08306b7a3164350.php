<?php

/* ATCAppBundle:Questionnaire:Theme/math.html.twig */
class __TwigTemplate_be15a64ad7a4e6f9516f53fd475e951c4f8722ca72dd20093c0ec13c3496c70f extends Twig_Template
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
        $__internal_d065655e92642119c8bafda96b2af01e0835b81f34d8bc42c52308e84c94167c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d065655e92642119c8bafda96b2af01e0835b81f34d8bc42c52308e84c94167c->enter($__internal_d065655e92642119c8bafda96b2af01e0835b81f34d8bc42c52308e84c94167c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ATCAppBundle:Questionnaire:Theme/math.html.twig"));

        $__internal_00c2c01b203d57310f1d1d7cf1aebd5ef7ee133cd84eeb98bcf0993047006dc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00c2c01b203d57310f1d1d7cf1aebd5ef7ee133cd84eeb98bcf0993047006dc9->enter($__internal_00c2c01b203d57310f1d1d7cf1aebd5ef7ee133cd84eeb98bcf0993047006dc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ATCAppBundle:Questionnaire:Theme/math.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d065655e92642119c8bafda96b2af01e0835b81f34d8bc42c52308e84c94167c->leave($__internal_d065655e92642119c8bafda96b2af01e0835b81f34d8bc42c52308e84c94167c_prof);

        
        $__internal_00c2c01b203d57310f1d1d7cf1aebd5ef7ee133cd84eeb98bcf0993047006dc9->leave($__internal_00c2c01b203d57310f1d1d7cf1aebd5ef7ee133cd84eeb98bcf0993047006dc9_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_968ea9af21a4d8d230fc8d894672fee42050b27e07018b2e862c4eedeb271dc7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_968ea9af21a4d8d230fc8d894672fee42050b27e07018b2e862c4eedeb271dc7->enter($__internal_968ea9af21a4d8d230fc8d894672fee42050b27e07018b2e862c4eedeb271dc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2d762defac2f53de96f39987bbd22b8771cfb4c0161a4876a51136a367a7620c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d762defac2f53de96f39987bbd22b8771cfb4c0161a4876a51136a367a7620c->enter($__internal_2d762defac2f53de96f39987bbd22b8771cfb4c0161a4876a51136a367a7620c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_2d762defac2f53de96f39987bbd22b8771cfb4c0161a4876a51136a367a7620c->leave($__internal_2d762defac2f53de96f39987bbd22b8771cfb4c0161a4876a51136a367a7620c_prof);

        
        $__internal_968ea9af21a4d8d230fc8d894672fee42050b27e07018b2e862c4eedeb271dc7->leave($__internal_968ea9af21a4d8d230fc8d894672fee42050b27e07018b2e862c4eedeb271dc7_prof);

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
{% endblock %}", "ATCAppBundle:Questionnaire:Theme/math.html.twig", "/var/www/QuestionnaireLudique/src/ATC/AppBundle/Resources/views/Questionnaire/Theme/math.html.twig");
    }
}
