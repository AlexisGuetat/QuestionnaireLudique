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
        $__internal_14408e8bef7bad027aab02c34cf1cfcebdebecfd7e05e4086006739962fa4f33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14408e8bef7bad027aab02c34cf1cfcebdebecfd7e05e4086006739962fa4f33->enter($__internal_14408e8bef7bad027aab02c34cf1cfcebdebecfd7e05e4086006739962fa4f33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ATCAppBundle::index.html.twig"));

        $__internal_1ee4b10f4020984bac22c2f90eeaa59a158e379fffad798ae5e61651415b9a3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ee4b10f4020984bac22c2f90eeaa59a158e379fffad798ae5e61651415b9a3e->enter($__internal_1ee4b10f4020984bac22c2f90eeaa59a158e379fffad798ae5e61651415b9a3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ATCAppBundle::index.html.twig"));

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
        
        $__internal_14408e8bef7bad027aab02c34cf1cfcebdebecfd7e05e4086006739962fa4f33->leave($__internal_14408e8bef7bad027aab02c34cf1cfcebdebecfd7e05e4086006739962fa4f33_prof);

        
        $__internal_1ee4b10f4020984bac22c2f90eeaa59a158e379fffad798ae5e61651415b9a3e->leave($__internal_1ee4b10f4020984bac22c2f90eeaa59a158e379fffad798ae5e61651415b9a3e_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_d886d6e8b03b5991928c9fce939aecedd64d0674fd4d623c95ad7b36131538c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d886d6e8b03b5991928c9fce939aecedd64d0674fd4d623c95ad7b36131538c1->enter($__internal_d886d6e8b03b5991928c9fce939aecedd64d0674fd4d623c95ad7b36131538c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_2d6ff1ef7b86441392dd79aff33815b78b3e137317f6313d956a9da2150dcf2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d6ff1ef7b86441392dd79aff33815b78b3e137317f6313d956a9da2150dcf2a->enter($__internal_2d6ff1ef7b86441392dd79aff33815b78b3e137317f6313d956a9da2150dcf2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 4
        echo twig_include($this->env, $context, "ATCAppBundle::header.html.twig");
        echo "
";
        
        $__internal_2d6ff1ef7b86441392dd79aff33815b78b3e137317f6313d956a9da2150dcf2a->leave($__internal_2d6ff1ef7b86441392dd79aff33815b78b3e137317f6313d956a9da2150dcf2a_prof);

        
        $__internal_d886d6e8b03b5991928c9fce939aecedd64d0674fd4d623c95ad7b36131538c1->leave($__internal_d886d6e8b03b5991928c9fce939aecedd64d0674fd4d623c95ad7b36131538c1_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_ff8b3c3404415cdb2ac72f3c9e42c8fcca663a01409a3908f980f1e6fa1f62fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff8b3c3404415cdb2ac72f3c9e42c8fcca663a01409a3908f980f1e6fa1f62fa->enter($__internal_ff8b3c3404415cdb2ac72f3c9e42c8fcca663a01409a3908f980f1e6fa1f62fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4049c055fc76d64666337e6520160228e7f0107889edcb80ed6729484db45c08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4049c055fc76d64666337e6520160228e7f0107889edcb80ed6729484db45c08->enter($__internal_4049c055fc76d64666337e6520160228e7f0107889edcb80ed6729484db45c08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_4049c055fc76d64666337e6520160228e7f0107889edcb80ed6729484db45c08->leave($__internal_4049c055fc76d64666337e6520160228e7f0107889edcb80ed6729484db45c08_prof);

        
        $__internal_ff8b3c3404415cdb2ac72f3c9e42c8fcca663a01409a3908f980f1e6fa1f62fa->leave($__internal_ff8b3c3404415cdb2ac72f3c9e42c8fcca663a01409a3908f980f1e6fa1f62fa_prof);

    }

    // line 50
    public function block_footer($context, array $blocks = array())
    {
        $__internal_19e500feb7db7d68a955f2e5b632b4058547f10faffc214baa805206f5d585f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19e500feb7db7d68a955f2e5b632b4058547f10faffc214baa805206f5d585f3->enter($__internal_19e500feb7db7d68a955f2e5b632b4058547f10faffc214baa805206f5d585f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_e58547aaeda425eb1df3edfed9c087c22c42630c88f249c4641d76272e7e6e90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e58547aaeda425eb1df3edfed9c087c22c42630c88f249c4641d76272e7e6e90->enter($__internal_e58547aaeda425eb1df3edfed9c087c22c42630c88f249c4641d76272e7e6e90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 51
        echo "  ";
        echo twig_include($this->env, $context, "ATCAppBundle::footer.html.twig");
        echo "
";
        
        $__internal_e58547aaeda425eb1df3edfed9c087c22c42630c88f249c4641d76272e7e6e90->leave($__internal_e58547aaeda425eb1df3edfed9c087c22c42630c88f249c4641d76272e7e6e90_prof);

        
        $__internal_19e500feb7db7d68a955f2e5b632b4058547f10faffc214baa805206f5d585f3->leave($__internal_19e500feb7db7d68a955f2e5b632b4058547f10faffc214baa805206f5d585f3_prof);

    }

    // line 54
    public function block_modaux($context, array $blocks = array())
    {
        $__internal_ee5bc86b433d2c9bfa57432fb48bd4adfa04c9a06d0bad4abc065a77d2f59ce1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee5bc86b433d2c9bfa57432fb48bd4adfa04c9a06d0bad4abc065a77d2f59ce1->enter($__internal_ee5bc86b433d2c9bfa57432fb48bd4adfa04c9a06d0bad4abc065a77d2f59ce1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "modaux"));

        $__internal_f594e922d25ac2dff3ad122748de25bab2d32e1a55c7a14c76ef03baf8a2d2df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f594e922d25ac2dff3ad122748de25bab2d32e1a55c7a14c76ef03baf8a2d2df->enter($__internal_f594e922d25ac2dff3ad122748de25bab2d32e1a55c7a14c76ef03baf8a2d2df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "modaux"));

        // line 55
        echo " ";
        echo twig_include($this->env, $context, "ATCAppBundle::login.html.twig");
        echo "
";
        
        $__internal_f594e922d25ac2dff3ad122748de25bab2d32e1a55c7a14c76ef03baf8a2d2df->leave($__internal_f594e922d25ac2dff3ad122748de25bab2d32e1a55c7a14c76ef03baf8a2d2df_prof);

        
        $__internal_ee5bc86b433d2c9bfa57432fb48bd4adfa04c9a06d0bad4abc065a77d2f59ce1->leave($__internal_ee5bc86b433d2c9bfa57432fb48bd4adfa04c9a06d0bad4abc065a77d2f59ce1_prof);

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
