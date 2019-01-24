<?php

/* ATCAppBundle::footer.html.twig */
class __TwigTemplate_7bc7eddf21fbf8a9ae1aa92289418a02d9730f5c107565be19e5c1aad1a9d0d3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c001b6508cbfc4763bdb46c5491373cd021b5a1d2a89612a186faaa747a521f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c001b6508cbfc4763bdb46c5491373cd021b5a1d2a89612a186faaa747a521f4->enter($__internal_c001b6508cbfc4763bdb46c5491373cd021b5a1d2a89612a186faaa747a521f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ATCAppBundle::footer.html.twig"));

        $__internal_3d3035cad021eb3a7efb408678dd0dcd705cd6ae38436898f55bc5b631ca58e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d3035cad021eb3a7efb408678dd0dcd705cd6ae38436898f55bc5b631ca58e1->enter($__internal_3d3035cad021eb3a7efb408678dd0dcd705cd6ae38436898f55bc5b631ca58e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ATCAppBundle::footer.html.twig"));

        // line 1
        echo "  
  ";
        // line 2
        $this->displayBlock('javascript', $context, $blocks);
        // line 54
        echo "
  <!--Footer-->
  <footer class=\"page-footer text-center font-small wow fadeIn\">

    <!--Call to action-->
    <div class=\"pt-4\">
      <a class=\"btn btn-outline-white\" href=\"#\" target=\"_blank\" role=\"button\">Lancer le LudiQuiz
        <i class=\"fas fa-download ml-2\"></i>
      </a>
      <a class=\"btn btn-outline-white\" href=\"https://mdbootstrap.com/education/bootstrap/\" target=\"_blank\" role=\"button\">Start free tutorial
        <i class=\"fas fa-graduation-cap ml-2\"></i>
      </a>
    </div>
    <!--/.Call to action-->

    <hr class=\"my-4\">

    <!-- Social icons -->
    <div class=\"pb-4\">
      <a href=\"https://www.facebook.com/mdbootstrap\" target=\"_blank\">
        <i class=\"fab fa-facebook-f mr-3\"></i>
      </a>

      <a href=\"https://twitter.com/MDBootstrap\" target=\"_blank\">
        <i class=\"fab fa-twitter mr-3\"></i>
      </a>

      <a href=\"https://www.youtube.com/watch?v=7MUISDJ5ZZ4\" target=\"_blank\">
        <i class=\"fab fa-youtube mr-3\"></i>
      </a>

      <a href=\"https://plus.google.com/u/0/b/107863090883699620484\" target=\"_blank\">
        <i class=\"fab fa-google-plus-g mr-3\"></i>
      </a>

      <a href=\"https://dribbble.com/mdbootstrap\" target=\"_blank\">
        <i class=\"fab fa-dribbble mr-3\"></i>
      </a>

      <a href=\"https://pinterest.com/mdbootstrap\" target=\"_blank\">
        <i class=\"fab fa-pinterest mr-3\"></i>
      </a>

      <a href=\"https://github.com/mdbootstrap/bootstrap-material-design\" target=\"_blank\">
        <i class=\"fab fa-github mr-3\"></i>
      </a>

      <a href=\"http://codepen.io/mdbootstrap/\" target=\"_blank\">
        <i class=\"fab fa-codepen mr-3\"></i>
      </a>
    </div>
    <!-- Social icons -->

    <!--Copyright-->
    <div class=\"footer-copyright py-3\">
      © 2018 Copyright:
      <a href=\"#\" target=\"_blank\"> GUETAT COSTA CALTOT </a>
    </div>
    <!--/.Copyright-->

  </footer>
  <!--/.Footer-->

";
        
        $__internal_c001b6508cbfc4763bdb46c5491373cd021b5a1d2a89612a186faaa747a521f4->leave($__internal_c001b6508cbfc4763bdb46c5491373cd021b5a1d2a89612a186faaa747a521f4_prof);

        
        $__internal_3d3035cad021eb3a7efb408678dd0dcd705cd6ae38436898f55bc5b631ca58e1->leave($__internal_3d3035cad021eb3a7efb408678dd0dcd705cd6ae38436898f55bc5b631ca58e1_prof);

    }

    // line 2
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_352d872927941b9411466deed9c5b12f08e45e6bd43aca2411caa4ad22ab17df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_352d872927941b9411466deed9c5b12f08e45e6bd43aca2411caa4ad22ab17df->enter($__internal_352d872927941b9411466deed9c5b12f08e45e6bd43aca2411caa4ad22ab17df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_31d01a994b24ce78925fb09962f7f1add963170f541d6b3c9cb096679c09eeef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31d01a994b24ce78925fb09962f7f1add963170f541d6b3c9cb096679c09eeef->enter($__internal_31d01a994b24ce78925fb09962f7f1add963170f541d6b3c9cb096679c09eeef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 3
        echo "  <!-- SCRIPTS -->
  <!-- Latest compiled and minified JavaScript -->

  <!-- JQuery -->
  <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
  <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>

  <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\"
  integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\" 
  integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
  <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\" 
  integrity=\"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl\" crossorigin=\"anonymous\"></script>

  <!-- Time Counter -->
  <script type=\"text/javascript\">
    
    // Set the date we're counting down to
    var countDownDate = new Date();
    countDownDate.setDate(countDownDate.getDate() + 30);

    // Update the count down every 1 second
    var x = setInterval(function () {

      // Get todays date and time
      var now = new Date().getTime();

      // Find the distance between now an the count down date
      var distance = countDownDate - now;

      // Time calculations for days, hours, minutes and seconds
      var days = Math.floor(distance / (1000 * 60 * 60 * 24));
      var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
      var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
      var seconds = Math.floor((distance % (1000 * 60)) / 1000);

      // Display the result in the element with id=\"demo\"
      document.getElementById(\"time-counter\").innerHTML = days + \"d \" + hours + \"h \"
        + minutes + \"m \" + seconds + \"s \";

      // If the count down is finished, write some text
      if (distance < 0) {
        clearInterval(x);
        document.getElementById(\"time-counter\").innerHTML = \"EXPIRED\";
      }
    }, 1000);

    
  </script>
  <script src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/questionnaire.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_31d01a994b24ce78925fb09962f7f1add963170f541d6b3c9cb096679c09eeef->leave($__internal_31d01a994b24ce78925fb09962f7f1add963170f541d6b3c9cb096679c09eeef_prof);

        
        $__internal_352d872927941b9411466deed9c5b12f08e45e6bd43aca2411caa4ad22ab17df->leave($__internal_352d872927941b9411466deed9c5b12f08e45e6bd43aca2411caa4ad22ab17df_prof);

    }

    public function getTemplateName()
    {
        return "ATCAppBundle::footer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  164 => 52,  113 => 3,  104 => 2,  31 => 54,  29 => 2,  26 => 1,);
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
  {% block javascript %}
  <!-- SCRIPTS -->
  <!-- Latest compiled and minified JavaScript -->

  <!-- JQuery -->
  <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
  <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>

  <script src=\"https://code.jquery.com/jquery-3.2.1.slim.min.js\"
  integrity=\"sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN\" crossorigin=\"anonymous\"></script>
  <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\" 
  integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
  <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\" 
  integrity=\"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl\" crossorigin=\"anonymous\"></script>

  <!-- Time Counter -->
  <script type=\"text/javascript\">
    
    // Set the date we're counting down to
    var countDownDate = new Date();
    countDownDate.setDate(countDownDate.getDate() + 30);

    // Update the count down every 1 second
    var x = setInterval(function () {

      // Get todays date and time
      var now = new Date().getTime();

      // Find the distance between now an the count down date
      var distance = countDownDate - now;

      // Time calculations for days, hours, minutes and seconds
      var days = Math.floor(distance / (1000 * 60 * 60 * 24));
      var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
      var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
      var seconds = Math.floor((distance % (1000 * 60)) / 1000);

      // Display the result in the element with id=\"demo\"
      document.getElementById(\"time-counter\").innerHTML = days + \"d \" + hours + \"h \"
        + minutes + \"m \" + seconds + \"s \";

      // If the count down is finished, write some text
      if (distance < 0) {
        clearInterval(x);
        document.getElementById(\"time-counter\").innerHTML = \"EXPIRED\";
      }
    }, 1000);

    
  </script>
  <script src=\"{{  asset('js/questionnaire.js') }}\"></script>
{% endblock %}

  <!--Footer-->
  <footer class=\"page-footer text-center font-small wow fadeIn\">

    <!--Call to action-->
    <div class=\"pt-4\">
      <a class=\"btn btn-outline-white\" href=\"#\" target=\"_blank\" role=\"button\">Lancer le LudiQuiz
        <i class=\"fas fa-download ml-2\"></i>
      </a>
      <a class=\"btn btn-outline-white\" href=\"https://mdbootstrap.com/education/bootstrap/\" target=\"_blank\" role=\"button\">Start free tutorial
        <i class=\"fas fa-graduation-cap ml-2\"></i>
      </a>
    </div>
    <!--/.Call to action-->

    <hr class=\"my-4\">

    <!-- Social icons -->
    <div class=\"pb-4\">
      <a href=\"https://www.facebook.com/mdbootstrap\" target=\"_blank\">
        <i class=\"fab fa-facebook-f mr-3\"></i>
      </a>

      <a href=\"https://twitter.com/MDBootstrap\" target=\"_blank\">
        <i class=\"fab fa-twitter mr-3\"></i>
      </a>

      <a href=\"https://www.youtube.com/watch?v=7MUISDJ5ZZ4\" target=\"_blank\">
        <i class=\"fab fa-youtube mr-3\"></i>
      </a>

      <a href=\"https://plus.google.com/u/0/b/107863090883699620484\" target=\"_blank\">
        <i class=\"fab fa-google-plus-g mr-3\"></i>
      </a>

      <a href=\"https://dribbble.com/mdbootstrap\" target=\"_blank\">
        <i class=\"fab fa-dribbble mr-3\"></i>
      </a>

      <a href=\"https://pinterest.com/mdbootstrap\" target=\"_blank\">
        <i class=\"fab fa-pinterest mr-3\"></i>
      </a>

      <a href=\"https://github.com/mdbootstrap/bootstrap-material-design\" target=\"_blank\">
        <i class=\"fab fa-github mr-3\"></i>
      </a>

      <a href=\"http://codepen.io/mdbootstrap/\" target=\"_blank\">
        <i class=\"fab fa-codepen mr-3\"></i>
      </a>
    </div>
    <!-- Social icons -->

    <!--Copyright-->
    <div class=\"footer-copyright py-3\">
      © 2018 Copyright:
      <a href=\"#\" target=\"_blank\"> GUETAT COSTA CALTOT </a>
    </div>
    <!--/.Copyright-->

  </footer>
  <!--/.Footer-->

", "ATCAppBundle::footer.html.twig", "D:\\wamp64\\www\\questionnaireLudique\\src\\ATC\\AppBundle/Resources/views/footer.html.twig");
    }
}
