<?php

/* ATCAppBundle:Default:index.html.twig */
class __TwigTemplate_80bb0595f221ceb35b39b518d1f886efe6d981c365a27d1307e516988213c559 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
            'javascript' => array($this, 'block_javascript'),
            'modaux' => array($this, 'block_modaux'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_09cff32d9a48f0eb576f84fc4c40498883d9183c638878b543d193051ad65e18 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09cff32d9a48f0eb576f84fc4c40498883d9183c638878b543d193051ad65e18->enter($__internal_09cff32d9a48f0eb576f84fc4c40498883d9183c638878b543d193051ad65e18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ATCAppBundle:Default:index.html.twig"));

        $__internal_4a63e37f9402be5197a3aef8777a8e7f803745ee4f4b9bc33801723737376b35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a63e37f9402be5197a3aef8777a8e7f803745ee4f4b9bc33801723737376b35->enter($__internal_4a63e37f9402be5197a3aef8777a8e7f803745ee4f4b9bc33801723737376b35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ATCAppBundle:Default:index.html.twig"));

        // line 1
        echo "

";
        // line 3
        $this->displayBlock('header', $context, $blocks);
        // line 6
        echo "


";
        // line 9
        $this->displayBlock('body', $context, $blocks);
        // line 51
        echo "

";
        // line 53
        $this->displayBlock('footer', $context, $blocks);
        // line 56
        echo "
";
        // line 57
        $this->displayBlock('javascript', $context, $blocks);
        // line 109
        echo "

 
";
        // line 112
        $this->displayBlock('modaux', $context, $blocks);
        
        $__internal_09cff32d9a48f0eb576f84fc4c40498883d9183c638878b543d193051ad65e18->leave($__internal_09cff32d9a48f0eb576f84fc4c40498883d9183c638878b543d193051ad65e18_prof);

        
        $__internal_4a63e37f9402be5197a3aef8777a8e7f803745ee4f4b9bc33801723737376b35->leave($__internal_4a63e37f9402be5197a3aef8777a8e7f803745ee4f4b9bc33801723737376b35_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_6c10a4fadbc60916af28f742600ba7b27e1e47f2b045cd8a0411dde8b5b7a708 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c10a4fadbc60916af28f742600ba7b27e1e47f2b045cd8a0411dde8b5b7a708->enter($__internal_6c10a4fadbc60916af28f742600ba7b27e1e47f2b045cd8a0411dde8b5b7a708_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_5afd673014679c3f831653f43a2be496b0f2dad40a51075983f7db88661adead = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5afd673014679c3f831653f43a2be496b0f2dad40a51075983f7db88661adead->enter($__internal_5afd673014679c3f831653f43a2be496b0f2dad40a51075983f7db88661adead_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 4
        echo twig_include($this->env, $context, "ATCAppBundle:Default:header.html.twig");
        echo "
";
        
        $__internal_5afd673014679c3f831653f43a2be496b0f2dad40a51075983f7db88661adead->leave($__internal_5afd673014679c3f831653f43a2be496b0f2dad40a51075983f7db88661adead_prof);

        
        $__internal_6c10a4fadbc60916af28f742600ba7b27e1e47f2b045cd8a0411dde8b5b7a708->leave($__internal_6c10a4fadbc60916af28f742600ba7b27e1e47f2b045cd8a0411dde8b5b7a708_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_9d8508844ea069a3237ed2276148931d21e92158d8a7edee2163f00ee1292284 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d8508844ea069a3237ed2276148931d21e92158d8a7edee2163f00ee1292284->enter($__internal_9d8508844ea069a3237ed2276148931d21e92158d8a7edee2163f00ee1292284_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_92444e0d22d3868a777aa2475fc3075d3549e562f8657f7d0bc846b46eb4d843 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92444e0d22d3868a777aa2475fc3075d3549e562f8657f7d0bc846b46eb4d843->enter($__internal_92444e0d22d3868a777aa2475fc3075d3549e562f8657f7d0bc846b46eb4d843_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "  <!-- Full Page Intro -->
  <div class=\"view\">
    <img src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/fond3.gif"), "html", null, true);
        echo "\" class=\"fond\">
    

    <!-- Mask & flexbox options-->
    <div class=\"mask rgba-black-light d-flex justify-content-center align-items-center\">

      <!-- Content -->
      <div class=\"text-center white-text mx-5 wow fadeIn\">

        <h1 class=\"display-3 mb-5\">
          <strong>Lud'ile Quiz</strong>
        </h1>

        <!-- Time Counter -->
        <p id=\"time-counter\" class=\"border border-light my-4\"></p>


        <h4 class=\"mb-4\">
          <strong>Bienvenue sur l'ile du Quiz Ludique. </strong>
        </h4>

        <h4 class=\"mb-4 d-none d-md-block\">
          <strong>Testez vos connaissances et devenez le meilleur !</strong>
        </h4>

        <a  id =\"questionnaire2\" href=\"#\" class=\"btn btn-outline-white btn-lg\" data-toggle=\"modal\" data-target=\"#QuestionnaireModal\">Lancer le Lud'ile Quiz 
          <i class=\"fas fa-graduation-cap ml-2\"></i>
        </a>
        
        
      </div>
      <!-- Content -->

    </div>
    <!-- Mask & flexbox options-->

  </div>
  <!-- Full Page Intro -->
";
        
        $__internal_92444e0d22d3868a777aa2475fc3075d3549e562f8657f7d0bc846b46eb4d843->leave($__internal_92444e0d22d3868a777aa2475fc3075d3549e562f8657f7d0bc846b46eb4d843_prof);

        
        $__internal_9d8508844ea069a3237ed2276148931d21e92158d8a7edee2163f00ee1292284->leave($__internal_9d8508844ea069a3237ed2276148931d21e92158d8a7edee2163f00ee1292284_prof);

    }

    // line 53
    public function block_footer($context, array $blocks = array())
    {
        $__internal_2bd9a12988753c96e964d29342b0ff1474e96d77cd8bcb2c8ebd639ed130c9f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2bd9a12988753c96e964d29342b0ff1474e96d77cd8bcb2c8ebd639ed130c9f1->enter($__internal_2bd9a12988753c96e964d29342b0ff1474e96d77cd8bcb2c8ebd639ed130c9f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_3403c422941cde7d3bcedc5c4d75e7659572e868bdb1912760d76896030df371 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3403c422941cde7d3bcedc5c4d75e7659572e868bdb1912760d76896030df371->enter($__internal_3403c422941cde7d3bcedc5c4d75e7659572e868bdb1912760d76896030df371_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 54
        echo "  ";
        echo twig_include($this->env, $context, "ATCAppBundle:Default:footer.html.twig");
        echo "
";
        
        $__internal_3403c422941cde7d3bcedc5c4d75e7659572e868bdb1912760d76896030df371->leave($__internal_3403c422941cde7d3bcedc5c4d75e7659572e868bdb1912760d76896030df371_prof);

        
        $__internal_2bd9a12988753c96e964d29342b0ff1474e96d77cd8bcb2c8ebd639ed130c9f1->leave($__internal_2bd9a12988753c96e964d29342b0ff1474e96d77cd8bcb2c8ebd639ed130c9f1_prof);

    }

    // line 57
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_2f2b5e2636dae3d2a9882c7b504f070d8a1729458c0afe0b52c0e98da28cf2df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f2b5e2636dae3d2a9882c7b504f070d8a1729458c0afe0b52c0e98da28cf2df->enter($__internal_2f2b5e2636dae3d2a9882c7b504f070d8a1729458c0afe0b52c0e98da28cf2df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_b2d42ec965c1fb6150d70d7839df5baed45678eb4cbabcca95920c73e84befdd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2d42ec965c1fb6150d70d7839df5baed45678eb4cbabcca95920c73e84befdd->enter($__internal_b2d42ec965c1fb6150d70d7839df5baed45678eb4cbabcca95920c73e84befdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 58
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
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/questionnaire.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_b2d42ec965c1fb6150d70d7839df5baed45678eb4cbabcca95920c73e84befdd->leave($__internal_b2d42ec965c1fb6150d70d7839df5baed45678eb4cbabcca95920c73e84befdd_prof);

        
        $__internal_2f2b5e2636dae3d2a9882c7b504f070d8a1729458c0afe0b52c0e98da28cf2df->leave($__internal_2f2b5e2636dae3d2a9882c7b504f070d8a1729458c0afe0b52c0e98da28cf2df_prof);

    }

    // line 112
    public function block_modaux($context, array $blocks = array())
    {
        $__internal_42902dc3375454e0c53e27daa971d40fafa736b919c823e2f4f7f00ef33f5aba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42902dc3375454e0c53e27daa971d40fafa736b919c823e2f4f7f00ef33f5aba->enter($__internal_42902dc3375454e0c53e27daa971d40fafa736b919c823e2f4f7f00ef33f5aba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "modaux"));

        $__internal_05c38852bdca6c7dc2fcbc3350bdffa18621431eaf3c9281c2da76649a049a05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05c38852bdca6c7dc2fcbc3350bdffa18621431eaf3c9281c2da76649a049a05->enter($__internal_05c38852bdca6c7dc2fcbc3350bdffa18621431eaf3c9281c2da76649a049a05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "modaux"));

        // line 113
        echo " ";
        echo twig_include($this->env, $context, "ATCAppBundle:Default:login.html.twig");
        echo "
";
        
        $__internal_05c38852bdca6c7dc2fcbc3350bdffa18621431eaf3c9281c2da76649a049a05->leave($__internal_05c38852bdca6c7dc2fcbc3350bdffa18621431eaf3c9281c2da76649a049a05_prof);

        
        $__internal_42902dc3375454e0c53e27daa971d40fafa736b919c823e2f4f7f00ef33f5aba->leave($__internal_42902dc3375454e0c53e27daa971d40fafa736b919c823e2f4f7f00ef33f5aba_prof);

    }

    public function getTemplateName()
    {
        return "ATCAppBundle:Default:index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  255 => 113,  246 => 112,  234 => 107,  183 => 58,  174 => 57,  161 => 54,  152 => 53,  103 => 12,  99 => 10,  90 => 9,  78 => 4,  69 => 3,  59 => 112,  54 => 109,  52 => 57,  49 => 56,  47 => 53,  43 => 51,  41 => 9,  36 => 6,  34 => 3,  30 => 1,);
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

{% block header %}
{{ include(\"ATCAppBundle:Default:header.html.twig\") }}
{% endblock %}



{% block body %}
  <!-- Full Page Intro -->
  <div class=\"view\">
    <img src=\"{{  asset('img/fond3.gif') }}\" class=\"fond\">
    

    <!-- Mask & flexbox options-->
    <div class=\"mask rgba-black-light d-flex justify-content-center align-items-center\">

      <!-- Content -->
      <div class=\"text-center white-text mx-5 wow fadeIn\">

        <h1 class=\"display-3 mb-5\">
          <strong>Lud'ile Quiz</strong>
        </h1>

        <!-- Time Counter -->
        <p id=\"time-counter\" class=\"border border-light my-4\"></p>


        <h4 class=\"mb-4\">
          <strong>Bienvenue sur l'ile du Quiz Ludique. </strong>
        </h4>

        <h4 class=\"mb-4 d-none d-md-block\">
          <strong>Testez vos connaissances et devenez le meilleur !</strong>
        </h4>

        <a  id =\"questionnaire2\" href=\"#\" class=\"btn btn-outline-white btn-lg\" data-toggle=\"modal\" data-target=\"#QuestionnaireModal\">Lancer le Lud'ile Quiz 
          <i class=\"fas fa-graduation-cap ml-2\"></i>
        </a>
        
        
      </div>
      <!-- Content -->

    </div>
    <!-- Mask & flexbox options-->

  </div>
  <!-- Full Page Intro -->
{% endblock %}


{% block footer %}
  {{ include(\"ATCAppBundle:Default:footer.html.twig\") }}
{% endblock  %}

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


 
{% block modaux %}
 {{ include(\"ATCAppBundle:Default:login.html.twig\") }}
{% endblock %}
", "ATCAppBundle:Default:index.html.twig", "D:\\wamp64\\www\\questionnaireLudique\\src\\ATC\\AppBundle/Resources/views/Default/index.html.twig");
    }
}
