<?php

/* ATCAppBundle:Questionnaire:index.html.twig */
class __TwigTemplate_92d6fe091a6be48cf8cec500c34203eff1c0bc5ad5efd6ca947b84cd0d6ec727 extends Twig_Template
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
        $__internal_074aff8d2ba51dd82368bf16aa85897947d69883c098254d67fde70b24904103 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_074aff8d2ba51dd82368bf16aa85897947d69883c098254d67fde70b24904103->enter($__internal_074aff8d2ba51dd82368bf16aa85897947d69883c098254d67fde70b24904103_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ATCAppBundle:Questionnaire:index.html.twig"));

        $__internal_a73d4a796636c2a1353d0d999e9df6342ac3f288192997557406670b055baa91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a73d4a796636c2a1353d0d999e9df6342ac3f288192997557406670b055baa91->enter($__internal_a73d4a796636c2a1353d0d999e9df6342ac3f288192997557406670b055baa91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ATCAppBundle:Questionnaire:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_074aff8d2ba51dd82368bf16aa85897947d69883c098254d67fde70b24904103->leave($__internal_074aff8d2ba51dd82368bf16aa85897947d69883c098254d67fde70b24904103_prof);

        
        $__internal_a73d4a796636c2a1353d0d999e9df6342ac3f288192997557406670b055baa91->leave($__internal_a73d4a796636c2a1353d0d999e9df6342ac3f288192997557406670b055baa91_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_c277336ef6467a3ebfa8863d6a0c071de9f59672051b358e15f3ded7a8fc7535 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c277336ef6467a3ebfa8863d6a0c071de9f59672051b358e15f3ded7a8fc7535->enter($__internal_c277336ef6467a3ebfa8863d6a0c071de9f59672051b358e15f3ded7a8fc7535_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f578e10a4fe83109525f2ceb665bf365be95293ad4dbd9b9db06e745a219e05f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f578e10a4fe83109525f2ceb665bf365be95293ad4dbd9b9db06e745a219e05f->enter($__internal_f578e10a4fe83109525f2ceb665bf365be95293ad4dbd9b9db06e745a219e05f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_f578e10a4fe83109525f2ceb665bf365be95293ad4dbd9b9db06e745a219e05f->leave($__internal_f578e10a4fe83109525f2ceb665bf365be95293ad4dbd9b9db06e745a219e05f_prof);

        
        $__internal_c277336ef6467a3ebfa8863d6a0c071de9f59672051b358e15f3ded7a8fc7535->leave($__internal_c277336ef6467a3ebfa8863d6a0c071de9f59672051b358e15f3ded7a8fc7535_prof);

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
", "ATCAppBundle:Questionnaire:index.html.twig", "/var/www/QuestionnaireLudique/src/ATC/AppBundle/Resources/views/Questionnaire/index.html.twig");
    }
}
