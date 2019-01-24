<?php

/* ATCAppBundle:Questionnaire:index.html.twig */
class __TwigTemplate_a091ca7e546c58e3ff7ced6e83cd32325a47c03e37e368e14029792840d64d6d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("ATCAppBundle::index.html.twig", "ATCAppBundle:Questionnaire:index.html.twig", 2);
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
        $__internal_29184e3d30fb228c3c9f3497249957f5680cff4260b887dc1930ef8b8206ff6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29184e3d30fb228c3c9f3497249957f5680cff4260b887dc1930ef8b8206ff6b->enter($__internal_29184e3d30fb228c3c9f3497249957f5680cff4260b887dc1930ef8b8206ff6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ATCAppBundle:Questionnaire:index.html.twig"));

        $__internal_7e0d359cf32e29f7a2a8a4d3d42ad79706f68a4322023b13626a2f79a183fc22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e0d359cf32e29f7a2a8a4d3d42ad79706f68a4322023b13626a2f79a183fc22->enter($__internal_7e0d359cf32e29f7a2a8a4d3d42ad79706f68a4322023b13626a2f79a183fc22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ATCAppBundle:Questionnaire:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_29184e3d30fb228c3c9f3497249957f5680cff4260b887dc1930ef8b8206ff6b->leave($__internal_29184e3d30fb228c3c9f3497249957f5680cff4260b887dc1930ef8b8206ff6b_prof);

        
        $__internal_7e0d359cf32e29f7a2a8a4d3d42ad79706f68a4322023b13626a2f79a183fc22->leave($__internal_7e0d359cf32e29f7a2a8a4d3d42ad79706f68a4322023b13626a2f79a183fc22_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_4ebfcbaebad3c3a0abf4e67cb5a8f489071e912786af9d6b5a86d640e653944c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ebfcbaebad3c3a0abf4e67cb5a8f489071e912786af9d6b5a86d640e653944c->enter($__internal_4ebfcbaebad3c3a0abf4e67cb5a8f489071e912786af9d6b5a86d640e653944c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fce8417d9c4bfcda96ab1814549eb91106959393557c929b4f1212faa33766c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fce8417d9c4bfcda96ab1814549eb91106959393557c929b4f1212faa33766c9->enter($__internal_fce8417d9c4bfcda96ab1814549eb91106959393557c929b4f1212faa33766c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div class=\"view\">
    <img src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/fond.gif"), "html", null, true);
        echo "\" class=\"fond\">
    

     <!-- Mask & flexbox options-->
    <div class=\"mask rgba-black-light d-flex justify-content-center align-items-center\">

      <!-- Content -->
      <div class=\"text-center white-text mx-5 wow fadeIn\">

        <!-- Section heading -->
        <h1 class=\"display-4 mt-5 mb-6\">  Il faut avoir du courage pour affronter l'ile... Bravo <u>";
        // line 17
        echo twig_escape_filter($this->env, ($context["pseudo"] ?? $this->getContext($context, "pseudo")), "html", null, true);
        echo "</u> ! </h1>
        <h2 class=\"mb-5\"> Maintenant choisis ton niveau de difficulté.</h2>
     
        <!-- Grid row -->

          <div class=\"row black-text justify-content-center\">

            <!--Grid column-->
            <div class=\"col-lg-3 col-md-4 mb-lg-2 mb-5 \">
              <!--Card-->
              <div class=\"card testimonial-card\">
                <!--Background color-->
                <div class=\"card-up info-color\"></div>
                <!--Avatar-->
                <div class=\"avatar mt-2 mx-4 white\">
                  <img src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/fox.gif"), "html", null, true);
        echo "\" class=\"rounded-circle img-fluid\">
                </div>
                <div class=\"card-body\">
                  <!--Name-->
                  <h4 class=\"font-weight-bold mb-2\">FACILE</h4>
                  <div class=\"orange-text\">
                    <i class=\"fas fa-star\"> </i>
                    <i class=\"far fa-star\"> </i>
                    <i class=\"far fa-star\"> </i>
                  </div>
                  <hr>
                  <!--Quotation-->
                  <p class=\"dark-grey-text mb-2\"><i class=\"fas fa-quote-left pr-2\"></i>Ici les test seront constitué d'image et de truc nul connard</p>
                     <a href=\"";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("questionnaire_facile");
        echo "\" class=\"btn peach-gradient\">JOUER </a>
                </div>
              </div>
              <!--Card-->
            </div>
           
            <!--Grid column-->

            <!--Grid column-->
            <div class=\"col-lg-3 col-md-10\">
              <!--Card-->
              <div class=\"card testimonial-card\">
                <!--Background color-->
                <div class=\"card-up blue-gradient\">
                </div>
                <!--Avatar-->
                <div class=\"avatar mt-2 mx-4 white\">
                  <img src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/panda.gif"), "html", null, true);
        echo "\" class=\"rounded-circle img-fluid\">
                </div>
                <div class=\"card-body\">
                  <!--Name-->
                  <h4 class=\"font-weight-bold mb-2\">MOYEN</h4>
                  <div class=\"orange-text\">
                    <i class=\"fas fa-star\"> </i>
                    <i class=\"fas fa-star\"> </i>
                    <i class=\"far fa-star\"> </i>
                  </div>
                  <hr>
                  <!--Quotation-->
                  <p class=\"dark-grey-text mb-2\"><i class=\"fas fa-quote-left pr-2\"></i>Oci tu vas en prendre plein le cul pd de tes morts</p>
                     <a href=\"";
        // line 75
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("questionnaire_moyen");
        echo "\" class=\"btn peach-gradient\">JOUER </a>
                </div>
                
              </div>
              <!--Card-->
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class=\"col-lg-3 col-md-10\">
              <!--Card-->
              <div class=\"card testimonial-card\">
                <!--Background color-->
                <div class=\"card-up indigo\"></div>
                <!--Avatar-->
                <div class=\"avatar mt-2 mx-4 white\">
                  <img src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/lion.gif"), "html", null, true);
        echo "\" class=\"rounded-circle img-fluid\">
                </div>
                <div class=\"card-body\">
                  <!--Name-->
                  <h4 class=\"font-weight-bold mb-2\">DIFFICILE</h4>
                  <div class=\"orange-text\">
                    <i class=\"fas fa-star\"> </i>
                    <i class=\"fas fa-star\"> </i>
                    <i class=\"fas fa-star\"> </i>
                  </div>
                  <hr>
                  <!--Quotation-->
                  <p class=\"dark-grey-text mb-2\"><i class=\"fas fa-quote-left pr-2\"></i>on va prendre ta mere tellemen fort que t'aura plus jamais de frere </p>
                   <a href=\"";
        // line 104
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("questionnaire_difficile");
        echo "\" class=\"btn peach-gradient\">JOUER </a>
                </div>
                  
              </div>
              <!--Card-->
            </div>
            <!--Grid column-->

          </div>
        <!-- Grid row -->

      </div>
    </div>
</div>
";
        
        $__internal_fce8417d9c4bfcda96ab1814549eb91106959393557c929b4f1212faa33766c9->leave($__internal_fce8417d9c4bfcda96ab1814549eb91106959393557c929b4f1212faa33766c9_prof);

        
        $__internal_4ebfcbaebad3c3a0abf4e67cb5a8f489071e912786af9d6b5a86d640e653944c->leave($__internal_4ebfcbaebad3c3a0abf4e67cb5a8f489071e912786af9d6b5a86d640e653944c_prof);

    }

    public function getTemplateName()
    {
        return "ATCAppBundle:Questionnaire:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 104,  154 => 91,  135 => 75,  119 => 62,  99 => 45,  83 => 32,  65 => 17,  52 => 7,  49 => 6,  40 => 5,  11 => 2,);
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
    <img src=\"{{  asset('img/fond.gif') }}\" class=\"fond\">
    

     <!-- Mask & flexbox options-->
    <div class=\"mask rgba-black-light d-flex justify-content-center align-items-center\">

      <!-- Content -->
      <div class=\"text-center white-text mx-5 wow fadeIn\">

        <!-- Section heading -->
        <h1 class=\"display-4 mt-5 mb-6\">  Il faut avoir du courage pour affronter l'ile... Bravo <u>{{ pseudo }}</u> ! </h1>
        <h2 class=\"mb-5\"> Maintenant choisis ton niveau de difficulté.</h2>
     
        <!-- Grid row -->

          <div class=\"row black-text justify-content-center\">

            <!--Grid column-->
            <div class=\"col-lg-3 col-md-4 mb-lg-2 mb-5 \">
              <!--Card-->
              <div class=\"card testimonial-card\">
                <!--Background color-->
                <div class=\"card-up info-color\"></div>
                <!--Avatar-->
                <div class=\"avatar mt-2 mx-4 white\">
                  <img src=\"{{ asset('img/fox.gif') }}\" class=\"rounded-circle img-fluid\">
                </div>
                <div class=\"card-body\">
                  <!--Name-->
                  <h4 class=\"font-weight-bold mb-2\">FACILE</h4>
                  <div class=\"orange-text\">
                    <i class=\"fas fa-star\"> </i>
                    <i class=\"far fa-star\"> </i>
                    <i class=\"far fa-star\"> </i>
                  </div>
                  <hr>
                  <!--Quotation-->
                  <p class=\"dark-grey-text mb-2\"><i class=\"fas fa-quote-left pr-2\"></i>Ici les test seront constitué d'image et de truc nul connard</p>
                     <a href=\"{{ path('questionnaire_facile') }}\" class=\"btn peach-gradient\">JOUER </a>
                </div>
              </div>
              <!--Card-->
            </div>
           
            <!--Grid column-->

            <!--Grid column-->
            <div class=\"col-lg-3 col-md-10\">
              <!--Card-->
              <div class=\"card testimonial-card\">
                <!--Background color-->
                <div class=\"card-up blue-gradient\">
                </div>
                <!--Avatar-->
                <div class=\"avatar mt-2 mx-4 white\">
                  <img src=\"{{ asset('img/panda.gif') }}\" class=\"rounded-circle img-fluid\">
                </div>
                <div class=\"card-body\">
                  <!--Name-->
                  <h4 class=\"font-weight-bold mb-2\">MOYEN</h4>
                  <div class=\"orange-text\">
                    <i class=\"fas fa-star\"> </i>
                    <i class=\"fas fa-star\"> </i>
                    <i class=\"far fa-star\"> </i>
                  </div>
                  <hr>
                  <!--Quotation-->
                  <p class=\"dark-grey-text mb-2\"><i class=\"fas fa-quote-left pr-2\"></i>Oci tu vas en prendre plein le cul pd de tes morts</p>
                     <a href=\"{{ path('questionnaire_moyen') }}\" class=\"btn peach-gradient\">JOUER </a>
                </div>
                
              </div>
              <!--Card-->
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class=\"col-lg-3 col-md-10\">
              <!--Card-->
              <div class=\"card testimonial-card\">
                <!--Background color-->
                <div class=\"card-up indigo\"></div>
                <!--Avatar-->
                <div class=\"avatar mt-2 mx-4 white\">
                  <img src=\"{{ asset('img/lion.gif') }}\" class=\"rounded-circle img-fluid\">
                </div>
                <div class=\"card-body\">
                  <!--Name-->
                  <h4 class=\"font-weight-bold mb-2\">DIFFICILE</h4>
                  <div class=\"orange-text\">
                    <i class=\"fas fa-star\"> </i>
                    <i class=\"fas fa-star\"> </i>
                    <i class=\"fas fa-star\"> </i>
                  </div>
                  <hr>
                  <!--Quotation-->
                  <p class=\"dark-grey-text mb-2\"><i class=\"fas fa-quote-left pr-2\"></i>on va prendre ta mere tellemen fort que t'aura plus jamais de frere </p>
                   <a href=\"{{ path('questionnaire_difficile') }}\" class=\"btn peach-gradient\">JOUER </a>
                </div>
                  
              </div>
              <!--Card-->
            </div>
            <!--Grid column-->

          </div>
        <!-- Grid row -->

      </div>
    </div>
</div>
{% endblock %}
", "ATCAppBundle:Questionnaire:index.html.twig", "D:\\wamp64\\www\\questionnaireLudique\\src\\ATC\\AppBundle/Resources/views/Questionnaire/index.html.twig");
    }
}
