<?php

/* ATCAppBundle::index.html.twig */
class __TwigTemplate_b67aaa431887f29d57969301fe47890dd0ba186f6396f9b00fbcaa8720efa3a3 extends Twig_Template
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
        $__internal_b7fcdd6890f22ee35bb6006e53ac76ce0f487d8eb476727c002b5dc69b76eca3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7fcdd6890f22ee35bb6006e53ac76ce0f487d8eb476727c002b5dc69b76eca3->enter($__internal_b7fcdd6890f22ee35bb6006e53ac76ce0f487d8eb476727c002b5dc69b76eca3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ATCAppBundle::index.html.twig"));

        $__internal_27bab1521a7618a2096a3481a0dab960e4d7bc567ca3debadb6d5e13857fc024 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27bab1521a7618a2096a3481a0dab960e4d7bc567ca3debadb6d5e13857fc024->enter($__internal_27bab1521a7618a2096a3481a0dab960e4d7bc567ca3debadb6d5e13857fc024_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ATCAppBundle::index.html.twig"));

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
        
        $__internal_b7fcdd6890f22ee35bb6006e53ac76ce0f487d8eb476727c002b5dc69b76eca3->leave($__internal_b7fcdd6890f22ee35bb6006e53ac76ce0f487d8eb476727c002b5dc69b76eca3_prof);

        
        $__internal_27bab1521a7618a2096a3481a0dab960e4d7bc567ca3debadb6d5e13857fc024->leave($__internal_27bab1521a7618a2096a3481a0dab960e4d7bc567ca3debadb6d5e13857fc024_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_ca55fce4f058032c3061d2339aedc0893ac3b212939e4a2cbc6f30304208c6a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca55fce4f058032c3061d2339aedc0893ac3b212939e4a2cbc6f30304208c6a5->enter($__internal_ca55fce4f058032c3061d2339aedc0893ac3b212939e4a2cbc6f30304208c6a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_59f808eb8c2efb942c7b001fb8553baa9d692eba1e3fa6854d64f76a4d40da7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59f808eb8c2efb942c7b001fb8553baa9d692eba1e3fa6854d64f76a4d40da7a->enter($__internal_59f808eb8c2efb942c7b001fb8553baa9d692eba1e3fa6854d64f76a4d40da7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 4
        echo twig_include($this->env, $context, "ATCAppBundle::header.html.twig");
        echo "
";
        
        $__internal_59f808eb8c2efb942c7b001fb8553baa9d692eba1e3fa6854d64f76a4d40da7a->leave($__internal_59f808eb8c2efb942c7b001fb8553baa9d692eba1e3fa6854d64f76a4d40da7a_prof);

        
        $__internal_ca55fce4f058032c3061d2339aedc0893ac3b212939e4a2cbc6f30304208c6a5->leave($__internal_ca55fce4f058032c3061d2339aedc0893ac3b212939e4a2cbc6f30304208c6a5_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_b3a84ac0025f8e41c119ca34ca31cdf1d0594d3d94d3cff952e734f59a7d301b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3a84ac0025f8e41c119ca34ca31cdf1d0594d3d94d3cff952e734f59a7d301b->enter($__internal_b3a84ac0025f8e41c119ca34ca31cdf1d0594d3d94d3cff952e734f59a7d301b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c76d9eade781dc8214b60aa845c84575a62e45480c2b9dcef2ccb18a991bb0dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c76d9eade781dc8214b60aa845c84575a62e45480c2b9dcef2ccb18a991bb0dd->enter($__internal_c76d9eade781dc8214b60aa845c84575a62e45480c2b9dcef2ccb18a991bb0dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_c76d9eade781dc8214b60aa845c84575a62e45480c2b9dcef2ccb18a991bb0dd->leave($__internal_c76d9eade781dc8214b60aa845c84575a62e45480c2b9dcef2ccb18a991bb0dd_prof);

        
        $__internal_b3a84ac0025f8e41c119ca34ca31cdf1d0594d3d94d3cff952e734f59a7d301b->leave($__internal_b3a84ac0025f8e41c119ca34ca31cdf1d0594d3d94d3cff952e734f59a7d301b_prof);

    }

    // line 50
    public function block_footer($context, array $blocks = array())
    {
        $__internal_cf0a1e18ecd1a59d94180b6744d69cb75db0c674b4d9c2c0d06f058fc11f8da9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf0a1e18ecd1a59d94180b6744d69cb75db0c674b4d9c2c0d06f058fc11f8da9->enter($__internal_cf0a1e18ecd1a59d94180b6744d69cb75db0c674b4d9c2c0d06f058fc11f8da9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_1c9b3fe3b7f684175f4dfe543a3aa2473293f50e6fec7f92b9c5ef12b56e41bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c9b3fe3b7f684175f4dfe543a3aa2473293f50e6fec7f92b9c5ef12b56e41bd->enter($__internal_1c9b3fe3b7f684175f4dfe543a3aa2473293f50e6fec7f92b9c5ef12b56e41bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 51
        echo "  ";
        echo twig_include($this->env, $context, "ATCAppBundle::footer.html.twig");
        echo "
";
        
        $__internal_1c9b3fe3b7f684175f4dfe543a3aa2473293f50e6fec7f92b9c5ef12b56e41bd->leave($__internal_1c9b3fe3b7f684175f4dfe543a3aa2473293f50e6fec7f92b9c5ef12b56e41bd_prof);

        
        $__internal_cf0a1e18ecd1a59d94180b6744d69cb75db0c674b4d9c2c0d06f058fc11f8da9->leave($__internal_cf0a1e18ecd1a59d94180b6744d69cb75db0c674b4d9c2c0d06f058fc11f8da9_prof);

    }

    // line 54
    public function block_modaux($context, array $blocks = array())
    {
        $__internal_0b114767dc90efca79cde5318913d3c83ff8dee02a0e01d72a31027545d98578 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b114767dc90efca79cde5318913d3c83ff8dee02a0e01d72a31027545d98578->enter($__internal_0b114767dc90efca79cde5318913d3c83ff8dee02a0e01d72a31027545d98578_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "modaux"));

        $__internal_8818df6fedda618d652d675e80e90099126218fc7b355aa9363daefecd076fc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8818df6fedda618d652d675e80e90099126218fc7b355aa9363daefecd076fc9->enter($__internal_8818df6fedda618d652d675e80e90099126218fc7b355aa9363daefecd076fc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "modaux"));

        // line 55
        echo " ";
        echo twig_include($this->env, $context, "ATCAppBundle::login.html.twig");
        echo "
";
        
        $__internal_8818df6fedda618d652d675e80e90099126218fc7b355aa9363daefecd076fc9->leave($__internal_8818df6fedda618d652d675e80e90099126218fc7b355aa9363daefecd076fc9_prof);

        
        $__internal_0b114767dc90efca79cde5318913d3c83ff8dee02a0e01d72a31027545d98578->leave($__internal_0b114767dc90efca79cde5318913d3c83ff8dee02a0e01d72a31027545d98578_prof);

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
", "ATCAppBundle::index.html.twig", "D:\\wamp64\\www\\questionnaireLudique\\src\\ATC\\AppBundle/Resources/views/index.html.twig");
    }
}
