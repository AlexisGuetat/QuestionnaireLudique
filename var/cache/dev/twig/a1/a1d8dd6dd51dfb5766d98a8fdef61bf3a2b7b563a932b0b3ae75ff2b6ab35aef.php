<?php

/* ATCAppBundle::header.html.twig */
class __TwigTemplate_f4cb94565895d4e5a5b4a4c595defc3b35c0481149a409242bf65d6b875bf0d5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'nav' => array($this, 'block_nav'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e128821a790a9010a07eee01a66844c3c4776228d1457601eb5a8c287e497965 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e128821a790a9010a07eee01a66844c3c4776228d1457601eb5a8c287e497965->enter($__internal_e128821a790a9010a07eee01a66844c3c4776228d1457601eb5a8c287e497965_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ATCAppBundle::header.html.twig"));

        $__internal_4dbf49b4794defb1f66312c08bc2b48f94d3769dfac313d4698e11f0bf8c41cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4dbf49b4794defb1f66312c08bc2b48f94d3769dfac313d4698e11f0bf8c41cd->enter($__internal_4dbf49b4794defb1f66312c08bc2b48f94d3769dfac313d4698e11f0bf8c41cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ATCAppBundle::header.html.twig"));

        // line 1
        echo "<head>
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
  <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
  <title>Questionnaire Ludique</title>
  
  <!-- Font Awesome -->
  <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.6.3/css/all.css\">
  <!-- Bootstrap core CSS -->
  <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
 
  <!-- Material Design Bootstrap -->
  <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/mdb.min.css"), "html", null, true);
        echo "\"        rel=\"stylesheet\">
  
  <!-- Your custom styles (optional) -->
  <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.min.css"), "html", null, true);
        echo "\"      rel=\"stylesheet\"> 
   <!-- Latest compiled and minified CSS -->
 <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\" 
 integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\" crossorigin=\"anonymous\">

  </head>

";
        // line 23
        $this->displayBlock('nav', $context, $blocks);
        
        $__internal_e128821a790a9010a07eee01a66844c3c4776228d1457601eb5a8c287e497965->leave($__internal_e128821a790a9010a07eee01a66844c3c4776228d1457601eb5a8c287e497965_prof);

        
        $__internal_4dbf49b4794defb1f66312c08bc2b48f94d3769dfac313d4698e11f0bf8c41cd->leave($__internal_4dbf49b4794defb1f66312c08bc2b48f94d3769dfac313d4698e11f0bf8c41cd_prof);

    }

    public function block_nav($context, array $blocks = array())
    {
        $__internal_be0916ad089c9f2a476d9fee927d7a947b69ae76ecba091228c87b35db027f75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be0916ad089c9f2a476d9fee927d7a947b69ae76ecba091228c87b35db027f75->enter($__internal_be0916ad089c9f2a476d9fee927d7a947b69ae76ecba091228c87b35db027f75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        $__internal_cd5f43997d2f4f6ffa61a1cd0c1a541fcd1d6059786ec52c8435da6d9e21eb66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd5f43997d2f4f6ffa61a1cd0c1a541fcd1d6059786ec52c8435da6d9e21eb66->enter($__internal_cd5f43997d2f4f6ffa61a1cd0c1a541fcd1d6059786ec52c8435da6d9e21eb66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        // line 24
        echo "  <!-- Navbar -->
  <nav class=\"navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar\">
    <div class=\"container\">

      <!-- Brand -->
      <a class=\"navbar-brand\" href=\"#\" target=\"_blank\">
        <strong>ATC</strong>
      </a>

      <!-- Collapse -->
      <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" 
      data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\"
        aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
      </button>

      <!-- Links -->
      <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">

        <!-- Left -->
        <ul class=\"navbar-nav mr-auto\">
          <li class=\"nav-item active\">
            <a class=\"nav-link\" href=\"";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">Acceuil
              <span class=\"sr-only\">(current)</span>
            </a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"";
        // line 51
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classement");
        echo "\" >Classement</a>
          </li>
          <li class=\"nav-item\">
            <a id=\"questionnaire\" class=\"nav-link\" data-toggle=\"modal\" href=\"#QuestionnaireModal\">Lancer le LudiQuiz</a>
          </li>
           <li class=\"nav-item dropdown\">
            <a class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" role=\"button\"
             aria-haspopup=\"true\" aria-expanded=\"false\">Administrateur</a>
            <div class=\"dropdown-menu\">
              <a class=\"dropdown-item\" href=\"";
        // line 60
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("administrateur");
        echo "\">Créer un formulaire</a>
            </div>
          </li>
          
        </ul>

        <!-- Right -->
        <ul class=\"navbar-nav nav-flex-icons\">
          <li class=\"nav-item\">
            <a href=\"https://www.facebook.com/mdbootstrap\" class=\"nav-link\" target=\"_blank\">
              <i class=\"fab fa-facebook-f\"></i>
            </a>
          </li>
          <li class=\"nav-item\">
            <a href=\"https://twitter.com/MDBootstrap\" class=\"nav-link\" target=\"_blank\">
              <i class=\"fab fa-twitter\"></i>
            </a>
          </li>
        </ul>

      </div>

    </div>
  </nav>
  <!-- Navbar -->
";
        
        $__internal_cd5f43997d2f4f6ffa61a1cd0c1a541fcd1d6059786ec52c8435da6d9e21eb66->leave($__internal_cd5f43997d2f4f6ffa61a1cd0c1a541fcd1d6059786ec52c8435da6d9e21eb66_prof);

        
        $__internal_be0916ad089c9f2a476d9fee927d7a947b69ae76ecba091228c87b35db027f75->leave($__internal_be0916ad089c9f2a476d9fee927d7a947b69ae76ecba091228c87b35db027f75_prof);

    }

    public function getTemplateName()
    {
        return "ATCAppBundle::header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 60,  109 => 51,  101 => 46,  77 => 24,  59 => 23,  49 => 16,  43 => 13,  37 => 10,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<head>
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
  <meta http-equiv=\"x-ua-compatible\" content=\"ie=edge\">
  <title>Questionnaire Ludique</title>
  
  <!-- Font Awesome -->
  <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.6.3/css/all.css\">
  <!-- Bootstrap core CSS -->
  <link href=\"{{ asset('css/bootstrap.min.css') }}\" rel=\"stylesheet\">
 
  <!-- Material Design Bootstrap -->
  <link href=\"{{ asset('css/mdb.min.css')}}\"        rel=\"stylesheet\">
  
  <!-- Your custom styles (optional) -->
  <link href=\"{{ asset('css/style.min.css')}}\"      rel=\"stylesheet\"> 
   <!-- Latest compiled and minified CSS -->
 <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\" 
 integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\" crossorigin=\"anonymous\">

  </head>

{% block nav %}
  <!-- Navbar -->
  <nav class=\"navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar\">
    <div class=\"container\">

      <!-- Brand -->
      <a class=\"navbar-brand\" href=\"#\" target=\"_blank\">
        <strong>ATC</strong>
      </a>

      <!-- Collapse -->
      <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" 
      data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\"
        aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
      </button>

      <!-- Links -->
      <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">

        <!-- Left -->
        <ul class=\"navbar-nav mr-auto\">
          <li class=\"nav-item active\">
            <a class=\"nav-link\" href=\"{{ path('homepage') }}\">Acceuil
              <span class=\"sr-only\">(current)</span>
            </a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"{{ path('classement') }}\" >Classement</a>
          </li>
          <li class=\"nav-item\">
            <a id=\"questionnaire\" class=\"nav-link\" data-toggle=\"modal\" href=\"#QuestionnaireModal\">Lancer le LudiQuiz</a>
          </li>
           <li class=\"nav-item dropdown\">
            <a class=\"nav-link dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\" role=\"button\"
             aria-haspopup=\"true\" aria-expanded=\"false\">Administrateur</a>
            <div class=\"dropdown-menu\">
              <a class=\"dropdown-item\" href=\"{{ path('administrateur') }}\">Créer un formulaire</a>
            </div>
          </li>
          
        </ul>

        <!-- Right -->
        <ul class=\"navbar-nav nav-flex-icons\">
          <li class=\"nav-item\">
            <a href=\"https://www.facebook.com/mdbootstrap\" class=\"nav-link\" target=\"_blank\">
              <i class=\"fab fa-facebook-f\"></i>
            </a>
          </li>
          <li class=\"nav-item\">
            <a href=\"https://twitter.com/MDBootstrap\" class=\"nav-link\" target=\"_blank\">
              <i class=\"fab fa-twitter\"></i>
            </a>
          </li>
        </ul>

      </div>

    </div>
  </nav>
  <!-- Navbar -->
{% endblock %}", "ATCAppBundle::header.html.twig", "D:\\wamp64\\www\\questionnaireLudique\\src\\ATC\\AppBundle/Resources/views/header.html.twig");
    }
}