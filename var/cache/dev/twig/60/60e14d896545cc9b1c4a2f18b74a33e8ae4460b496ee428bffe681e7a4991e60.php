<?php

/* ATCAppBundle:Default:header.html.twig */
class __TwigTemplate_9bab6d339475556a7177ee0f5700ff0bfe4700daafd608a0952986805aa4d72c extends Twig_Template
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
        $__internal_8ed8921b03b0f2d89452d8e15e9bbd8ef2ec8221e1f4caac91eeb8a67c754028 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ed8921b03b0f2d89452d8e15e9bbd8ef2ec8221e1f4caac91eeb8a67c754028->enter($__internal_8ed8921b03b0f2d89452d8e15e9bbd8ef2ec8221e1f4caac91eeb8a67c754028_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ATCAppBundle:Default:header.html.twig"));

        $__internal_6e4a21525ae9fccf74af5f50c9bc03c2ffcba2c985a6d5bad313595b1a73ec5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e4a21525ae9fccf74af5f50c9bc03c2ffcba2c985a6d5bad313595b1a73ec5a->enter($__internal_6e4a21525ae9fccf74af5f50c9bc03c2ffcba2c985a6d5bad313595b1a73ec5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ATCAppBundle:Default:header.html.twig"));

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
        
        $__internal_8ed8921b03b0f2d89452d8e15e9bbd8ef2ec8221e1f4caac91eeb8a67c754028->leave($__internal_8ed8921b03b0f2d89452d8e15e9bbd8ef2ec8221e1f4caac91eeb8a67c754028_prof);

        
        $__internal_6e4a21525ae9fccf74af5f50c9bc03c2ffcba2c985a6d5bad313595b1a73ec5a->leave($__internal_6e4a21525ae9fccf74af5f50c9bc03c2ffcba2c985a6d5bad313595b1a73ec5a_prof);

    }

    public function block_nav($context, array $blocks = array())
    {
        $__internal_484ac21aa6f63231a0b374325935759c6a1a4bd45537cf99654d79ab4cf72415 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_484ac21aa6f63231a0b374325935759c6a1a4bd45537cf99654d79ab4cf72415->enter($__internal_484ac21aa6f63231a0b374325935759c6a1a4bd45537cf99654d79ab4cf72415_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        $__internal_48084d98881ae33af402e53d0aa7b1e3ac89ccf58f209edb07a50f6aba155aec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48084d98881ae33af402e53d0aa7b1e3ac89ccf58f209edb07a50f6aba155aec->enter($__internal_48084d98881ae33af402e53d0aa7b1e3ac89ccf58f209edb07a50f6aba155aec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

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
        echo "\" target=\"_blank\">Classement</a>
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
        
        $__internal_48084d98881ae33af402e53d0aa7b1e3ac89ccf58f209edb07a50f6aba155aec->leave($__internal_48084d98881ae33af402e53d0aa7b1e3ac89ccf58f209edb07a50f6aba155aec_prof);

        
        $__internal_484ac21aa6f63231a0b374325935759c6a1a4bd45537cf99654d79ab4cf72415->leave($__internal_484ac21aa6f63231a0b374325935759c6a1a4bd45537cf99654d79ab4cf72415_prof);

    }

    public function getTemplateName()
    {
        return "ATCAppBundle:Default:header.html.twig";
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
            <a class=\"nav-link\" href=\"{{ path('classement') }}\" target=\"_blank\">Classement</a>
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
{% endblock %}", "ATCAppBundle:Default:header.html.twig", "D:\\wamp64\\www\\questionnaireLudique\\src\\ATC\\AppBundle/Resources/views/Default/header.html.twig");
    }
}
