<?php

/* ATCAppBundle::index.html.twig */
class __TwigTemplate_38c2875d6a747df86f448e5b931f959643fa8dc02f46cf99a773e3c508835d42 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
            'modaux' => array($this, 'block_modaux'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9352b5224dbef3978271ca641b203a1461e4e80e296fdf76f79b256581ae34e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9352b5224dbef3978271ca641b203a1461e4e80e296fdf76f79b256581ae34e4->enter($__internal_9352b5224dbef3978271ca641b203a1461e4e80e296fdf76f79b256581ae34e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ATCAppBundle::index.html.twig"));

        $__internal_2badc41a167e903776354a9bf23d190915a0d987006c00ad078c32b1fc0f1ed3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2badc41a167e903776354a9bf23d190915a0d987006c00ad078c32b1fc0f1ed3->enter($__internal_2badc41a167e903776354a9bf23d190915a0d987006c00ad078c32b1fc0f1ed3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ATCAppBundle::index.html.twig"));

        // line 1
        echo "

";
        // line 3
        $this->displayBlock('header', $context, $blocks);
        // line 6
        echo "
";
        // line 7
        $this->displayBlock('body', $context, $blocks);
        // line 49
        echo "
";
        // line 50
        $this->displayBlock('footer', $context, $blocks);
        // line 53
        echo "
";
        // line 54
        $this->displayBlock('modaux', $context, $blocks);
        
        $__internal_9352b5224dbef3978271ca641b203a1461e4e80e296fdf76f79b256581ae34e4->leave($__internal_9352b5224dbef3978271ca641b203a1461e4e80e296fdf76f79b256581ae34e4_prof);

        
        $__internal_2badc41a167e903776354a9bf23d190915a0d987006c00ad078c32b1fc0f1ed3->leave($__internal_2badc41a167e903776354a9bf23d190915a0d987006c00ad078c32b1fc0f1ed3_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_f86c4478a610497e2880d527f0b7784f70dfdc8df36380d81b852f92b63e666a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f86c4478a610497e2880d527f0b7784f70dfdc8df36380d81b852f92b63e666a->enter($__internal_f86c4478a610497e2880d527f0b7784f70dfdc8df36380d81b852f92b63e666a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_67f6fb8e5d13b84002345a116c7c6636329aa73867c6263b0360ae63152eaa0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67f6fb8e5d13b84002345a116c7c6636329aa73867c6263b0360ae63152eaa0e->enter($__internal_67f6fb8e5d13b84002345a116c7c6636329aa73867c6263b0360ae63152eaa0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 4
        echo twig_include($this->env, $context, "ATCAppBundle::header.html.twig");
        echo "
";
        
        $__internal_67f6fb8e5d13b84002345a116c7c6636329aa73867c6263b0360ae63152eaa0e->leave($__internal_67f6fb8e5d13b84002345a116c7c6636329aa73867c6263b0360ae63152eaa0e_prof);

        
        $__internal_f86c4478a610497e2880d527f0b7784f70dfdc8df36380d81b852f92b63e666a->leave($__internal_f86c4478a610497e2880d527f0b7784f70dfdc8df36380d81b852f92b63e666a_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_603eda1e3242e6961009ec7ef3cf51d6170dcbf8ee3bc7e359f80c36da4fecd3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_603eda1e3242e6961009ec7ef3cf51d6170dcbf8ee3bc7e359f80c36da4fecd3->enter($__internal_603eda1e3242e6961009ec7ef3cf51d6170dcbf8ee3bc7e359f80c36da4fecd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a1a7eb83c70f8bd00026d43c6f9692b6e05c26fe3ea9715b49280aa9fd35eadc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1a7eb83c70f8bd00026d43c6f9692b6e05c26fe3ea9715b49280aa9fd35eadc->enter($__internal_a1a7eb83c70f8bd00026d43c6f9692b6e05c26fe3ea9715b49280aa9fd35eadc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  <!-- Full Page Intro -->
  <div class=\"view\">
    <img src=\"";
        // line 10
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
        
        $__internal_a1a7eb83c70f8bd00026d43c6f9692b6e05c26fe3ea9715b49280aa9fd35eadc->leave($__internal_a1a7eb83c70f8bd00026d43c6f9692b6e05c26fe3ea9715b49280aa9fd35eadc_prof);

        
        $__internal_603eda1e3242e6961009ec7ef3cf51d6170dcbf8ee3bc7e359f80c36da4fecd3->leave($__internal_603eda1e3242e6961009ec7ef3cf51d6170dcbf8ee3bc7e359f80c36da4fecd3_prof);

    }

    // line 50
    public function block_footer($context, array $blocks = array())
    {
        $__internal_5b96f8ec425189a10bb158bc2faf993b343e87b69e7c827de9c4b2c3b6267197 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b96f8ec425189a10bb158bc2faf993b343e87b69e7c827de9c4b2c3b6267197->enter($__internal_5b96f8ec425189a10bb158bc2faf993b343e87b69e7c827de9c4b2c3b6267197_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_cbead95a9b6535cf08d9eda97ce46daca77a68849c2d4edf034110ac2994ee70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbead95a9b6535cf08d9eda97ce46daca77a68849c2d4edf034110ac2994ee70->enter($__internal_cbead95a9b6535cf08d9eda97ce46daca77a68849c2d4edf034110ac2994ee70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 51
        echo "  ";
        echo twig_include($this->env, $context, "ATCAppBundle::footer.html.twig");
        echo "
";
        
        $__internal_cbead95a9b6535cf08d9eda97ce46daca77a68849c2d4edf034110ac2994ee70->leave($__internal_cbead95a9b6535cf08d9eda97ce46daca77a68849c2d4edf034110ac2994ee70_prof);

        
        $__internal_5b96f8ec425189a10bb158bc2faf993b343e87b69e7c827de9c4b2c3b6267197->leave($__internal_5b96f8ec425189a10bb158bc2faf993b343e87b69e7c827de9c4b2c3b6267197_prof);

    }

    // line 54
    public function block_modaux($context, array $blocks = array())
    {
        $__internal_64fe86e1a48bb64927aeb8d7015fcee2a4271e824cc0cbc2a32aa744604c0c04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64fe86e1a48bb64927aeb8d7015fcee2a4271e824cc0cbc2a32aa744604c0c04->enter($__internal_64fe86e1a48bb64927aeb8d7015fcee2a4271e824cc0cbc2a32aa744604c0c04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "modaux"));

        $__internal_eb445689bc291996789b5574e29164ab04ac6a1fdb9d5f02de10718e03982b99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb445689bc291996789b5574e29164ab04ac6a1fdb9d5f02de10718e03982b99->enter($__internal_eb445689bc291996789b5574e29164ab04ac6a1fdb9d5f02de10718e03982b99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "modaux"));

        // line 55
        echo " ";
        echo twig_include($this->env, $context, "ATCAppBundle::login.html.twig");
        echo "
";
        
        $__internal_eb445689bc291996789b5574e29164ab04ac6a1fdb9d5f02de10718e03982b99->leave($__internal_eb445689bc291996789b5574e29164ab04ac6a1fdb9d5f02de10718e03982b99_prof);

        
        $__internal_64fe86e1a48bb64927aeb8d7015fcee2a4271e824cc0cbc2a32aa744604c0c04->leave($__internal_64fe86e1a48bb64927aeb8d7015fcee2a4271e824cc0cbc2a32aa744604c0c04_prof);

    }

    public function getTemplateName()
    {
        return "ATCAppBundle::index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  172 => 55,  163 => 54,  150 => 51,  141 => 50,  92 => 10,  88 => 8,  79 => 7,  67 => 4,  58 => 3,  48 => 54,  45 => 53,  43 => 50,  40 => 49,  38 => 7,  35 => 6,  33 => 3,  29 => 1,);
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
{{ include(\"ATCAppBundle::header.html.twig\") }}
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
  {{ include(\"ATCAppBundle::footer.html.twig\") }}
{% endblock  %}

{% block modaux %}
 {{ include(\"ATCAppBundle::login.html.twig\") }}
{% endblock %}
", "ATCAppBundle::index.html.twig", "/var/www/QuestionnaireLudique/src/ATC/AppBundle/Resources/views/index.html.twig");
    }
}
